<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\greenNatural;
use App\Models\naturalGreenChats;
use Illuminate\Http\Request;
use Carbon\Carbon;

class greenNaturalController extends Controller
{
    //
    public function index(){
        $greenNatural = greenNatural::all();
        return view('admin.content.greenNatural.index', compact('greenNatural'));
    }

    public function add(){
        return view('admin.content.greenNatural.add');
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
            $groomImageUpload = upload_file('app/public/assets/greenNatural', $groomImageFile);
            $brideImageFile = $request->file('bride_image');
            $brideImageUpload = upload_file('app/public/assets/greenNatural', $brideImageFile);
            $bgOpeningFile = $request->file('bg_opening');
            $bgOpeningUpload = upload_file('app/public/assets/greenNatural', $bgOpeningFile);
            $bgSection1File = $request->file('bg_section1');
            $bgSection1Upload = upload_file('app/public/assets/greenNatural', $bgSection1File);
            $bgCountdownTimer = $request->file('bg_countdown_timer');
            $bgCountdownTimerFile = upload_file('app/public/assets/greenNatural', $bgCountdownTimer);
            $audioupload = upload_audio(storage_path('app/public/assets/greenNatural'), $request->file('audio'));
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
                $path = upload_file('app/public/assets/greenNatural', $gallery);
                array_push($galleries, $path);
            }
        
    
            $greenNatural = new greenNatural();
            
            $greenNatural->groom_name = $validated['groom_name'];
            $greenNatural->groom_nick_name = $validated['groom_nick_name'];
            $greenNatural->groom_image = $groomImageUpload;
            $greenNatural->groom_socmed = $validated['groom_socmed'];
            $greenNatural->groom_desc = $validated['groom_desc'];
            $greenNatural->groom_account_number = $validated['groom_account_number'];
            $greenNatural->bride_name = $validated['bride_name'];
            $greenNatural->bride_nick_name = $validated['bride_nick_name'];
            $greenNatural->bride_image = $brideImageUpload;
            $greenNatural->bride_socmed = $validated['bride_socmed'];
            $greenNatural->bride_desc = $validated['bride_desc'];
            $greenNatural->bride_account_number = $validated['bride_account_number'];
            $greenNatural->bg_opening = $bgOpeningUpload;
            $greenNatural->bg_section1 = $bgSection1Upload;
            $greenNatural->bg_countdown_timer = $bgCountdownTimerFile;
            $greenNatural->galleries = json_encode( $galleries);
            $greenNatural->akad_date_start = $akadStart;
            $greenNatural->akad_date_end = $akadEnd;
            $greenNatural->resepsi_date_start = $resepsiStart;
            $greenNatural->resepsi_date_end = $resepsiEnd;
            $greenNatural->akad_location = $request->akad_location;
            $greenNatural->latlong_akad_location = $request->latlong_akad_location;
            $greenNatural->resepsi_location = $request->resepsi_location;
            $greenNatural->latlong_resepsi_location = $request->latlong_resepsi_location;
            $greenNatural->stories = $request->stories;
            $greenNatural->audio = $audioupload;
            $greenNatural->slug = $slug;
    
            $greenNatural->save();

            $chat = new naturalGreenChats();
            $chat->green_natural_id = $greenNatural->id; 
            $chat->name = 'Pangodi';
            $chat->no_hp = '12345';
            $chat->content = 'Congratulations!';
            $chat->people = 2;
            $chat->save();
            return redirect()->route('admin.index')->with('success', 'Green Natural created successfully');
        } catch(\Exception $e){
            dd($e->getMessage());
        }
       

    }

    public function edit(){

    }

    public function update(){
        
    }
}
