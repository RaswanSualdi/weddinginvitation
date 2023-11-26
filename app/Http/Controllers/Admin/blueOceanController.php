<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\blueOcean;
use App\Models\blueOceanChats;
use Illuminate\Http\Request;
use Carbon\Carbon;


class blueOceanController extends Controller
{
    //
    public function index(){
        $blueOcean = blueOcean::all();
        return view('admin.content.blueOcean.index', compact('blueOcean'));
    }

    public function add(){
        return view('admin.content.blueOcean.add');
    }

    public function store(Request $request){
        try{
            $validated = $request->validate([
                'groom_name'=>'required',
                'groom_nick_name'=> 'required',
                'groom_image'=>'nullable|file|max:6000',
                'groom_socmed'=>'nullable',
                'groom_desc'=> 'nullable',
                'groom_account_number'=> 'nullable',
                'bride_name'=> 'required',
                'bride_nick_name'=> 'required',
                'bride_image'=> 'nullable|file|max:6000',
                'bride_socmed'=> 'nullable',
                'bride_desc'=> 'nullable',
                'bride_account_number'=> 'nullable',
                'bg_opening'=> 'nullable|file|max:6000',
                'bg_section1'=> 'nullable|file|max:6000',
                'bg_countdown_timer'=> 'nullable|file|max:6000',
                'akad_date'=> 'nullable',
                'resepsi_date'=> 'nullable',
                'akad_location'=> 'nullable',
                'latlong_akad_location'=> 'nullable',
                'resepsi_location'=> 'nullable',
                'latlong_resepsi_location'=> 'nullable',
                'stories'=> 'nullable',
                'galleries.*' => 'mimes:jpeg,png,jpg,gif,webp|max:6000',
                'audio' => 'nullable|max:10000|mimes:mp3,wav'
            ]);
    
            $groomImageFile = $request->file('groom_image');
            $groomImageUpload = upload_file('app/public/assets/blueOcean', $groomImageFile);
            $brideImageFile = $request->file('bride_image');
            $brideImageUpload = upload_file('app/public/assets/blueOcean', $brideImageFile);
            $bgOpeningFile = $request->file('bg_opening');
            $bgOpeningUpload = upload_file('app/public/assets/blueOcean', $bgOpeningFile);
            $bgSection1File = $request->file('bg_section1');
            $bgSection1Upload = upload_file('app/public/assets/blueOcean', $bgSection1File);
            $bgCountdownTimer = $request->file('bg_countdown_timer');
            $bgCountdownTimerFile = upload_file('app/public/assets/blueOcean', $bgCountdownTimer);
            $audioupload = upload_audio(storage_path('app/public/assets/blueOcean'), $request->file('audio'));
            $slug = generate_slug($request->groom_nick_name.' '.$request->bride_nick_name, '-');
    
            $akadDateRange = explode(' - ', $validated['akad_date']);
            $akadStart = Carbon::createFromFormat('d/m/Y h:i A', trim($akadDateRange[0]))->format('Y-m-d H:i:s');
            $akadEnd = Carbon::createFromFormat('d/m/Y h:i A', trim($akadDateRange[1]))->format('Y-m-d H:i:s');
    
            $resepsiDateRange = explode(' - ', $validated['resepsi_date']);
            $resepsiStart = Carbon::createFromFormat('d/m/Y h:i A', trim($resepsiDateRange[0]))->format('Y-m-d H:i:s');
            $resepsiEnd = Carbon::createFromFormat('d/m/Y h:i A', trim($resepsiDateRange[1]))->format('Y-m-d H:i:s');
    
             // menyimpan galleries
             // Inisialisasi variabel $galleries
            $galleries = $request->has('galleries') ? $request->input('galleries') : [];

            // Menyimpan galleries
            // $galleryPaths = [];
            // foreach ($galleries as $gallery) {
            //     $path = upload_file('app/public/assets/foto/template3', $gallery);
            //     array_push($galleryPaths, $path);
            // }

            $galleries = [];
            foreach ($validated['galleries'] as $gallery) {
                $path = upload_file('app/public/assets/blueOcean', $gallery);
                array_push($galleries, $path);
            }
        
    
            $blueOcean = new blueOcean();
            
            $blueOcean->groom_name = $validated['groom_name'];
            $blueOcean->groom_nick_name = $validated['groom_nick_name'];
            $blueOcean->groom_image = $groomImageUpload;
            $blueOcean->groom_socmed = $validated['groom_socmed'];
            $blueOcean->groom_desc = $validated['groom_desc'];
            $blueOcean->groom_account_number = $validated['groom_account_number'];
            $blueOcean->bride_name = $validated['bride_name'];
            $blueOcean->bride_nick_name = $validated['bride_nick_name'];
            $blueOcean->bride_image = $brideImageUpload;
            $blueOcean->bride_socmed = $validated['bride_socmed'];
            $blueOcean->bride_desc = $validated['bride_desc'];
            $blueOcean->bride_account_number = $validated['bride_account_number'];
            $blueOcean->bg_opening = $bgOpeningUpload;
            $blueOcean->bg_section1 = $bgSection1Upload;
            $blueOcean->bg_countdown_timer = $bgCountdownTimerFile;
            $blueOcean->galleries = json_encode( $galleries);
            $blueOcean->akad_date_start = $akadStart;
            $blueOcean->akad_date_end = $akadEnd;
            $blueOcean->resepsi_date_start = $resepsiStart;
            $blueOcean->resepsi_date_end = $resepsiEnd;
            $blueOcean->akad_location = $request->akad_location;
            $blueOcean->latlong_akad_location = $request->latlong_akad_location;
            $blueOcean->resepsi_location = $request->resepsi_location;
            $blueOcean->latlong_resepsi_location = $request->latlong_resepsi_location;
            $blueOcean->stories = $request->stories;
            $blueOcean->audio = $audioupload;
            $blueOcean->slug = $slug;
    
            $blueOcean->save();

            $chat = new blueOceanChats();
            $chat->blue_ocean_id = $blueOcean->id; 
            $chat->name = 'Pangodi';
            $chat->no_hp = '12345';
            $chat->content = 'Congratulations!';
            $chat->people = 2;
            $chat->save();
            return redirect()->route('admin.blueocean.index')->with('success', 'Green Natural created successfully');
        } catch(\Exception $e){
            dd($e->getMessage());
        }
       

    }

    public function edit(){

    }

    public function update(){
        
    }
}
