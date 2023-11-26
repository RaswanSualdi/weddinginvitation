<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blueOcean;
use App\Models\blueOceanChats;

class blueOceanController extends Controller
{
    //
    public function show(Request $request, $slug){
        $tamu = $request->query('tamu');
        $blueOcean = blueOcean::where('slug', $slug)->firstOrFail();
        $chats = $blueOcean->blueOceanChats()->orderBy('created_at', 'desc')->get();
          // dd($blueOcean);
        return view('blueOcean.index', compact('blueOcean', 'tamu', 'chats'));
      }
    
      public function storeChat(Request $request, $slug){
        try{
          $blueOcean = blueOcean::where('slug',$slug)->firstOrFail();
        $request->validate([
          'name'=> 'required',
          'people'=> 'required',
          'no_hp'=> 'required',
          'content'=> 'required'
        ]);
    
        $chat = new blueOceanChats([
          'name'=> $request->get('name'),
          'people' => $request->get('people'),
          'no_hp'=> $request->get('no_hp'),
          'content'=> $request->get('content')
        ]);
    
        $blueOcean->blueOceanChats()->save($chat);
        return redirect()->back()->with('success', 'Chat berhasil dikirim.');
        }catch(\Exception $e){
          dd($e->getMessage());
      }
        
      }
}
