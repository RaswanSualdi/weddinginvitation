<?php

namespace App\Http\Controllers;

use App\Models\greenNatural;
use App\Models\naturalGreenChats;
use Illuminate\Http\Request;

class greenNaturalController extends Controller
{
    //
  public function show(Request $request, $slug){
    $tamu = $request->query('tamu');
    $greenNatural = greenNatural::where('slug', $slug)->firstOrFail();
    $chats = $greenNatural->naturalGreenChats()->orderBy('created_at', 'desc')->get();
      // dd($greenNatural);
    return view('greenNatural.index', compact('greenNatural', 'tamu', 'chats'));
  }

  public function storeChat(Request $request, $slug){
    try{
      $greenNatural = greenNatural::where('slug',$slug)->firstOrFail();
    $request->validate([
      'name'=> 'required',
      'people'=> 'required',
      'no_hp'=> 'required',
      'content'=> 'required'
    ]);

    $chat = new naturalGreenChats([
      'name'=> $request->get('name'),
      'people' => $request->get('people'),
      'no_hp'=> $request->get('no_hp'),
      'content'=> $request->get('content')
    ]);

    $greenNatural->naturalGreenChats()->save($chat);
    return redirect()->back()->with('success', 'Chat berhasil dikirim.');
    }catch(\Exception $e){
      dd($e->getMessage());
  }
    
  }

  
}
