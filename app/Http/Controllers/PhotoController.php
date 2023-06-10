<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PhotoController extends Controller
{
	private $fotok_tabla = 'photos';
	
    public function create($gallery_id) {
        //die('PHOTO/CREATE');
        return view('photo/create', compact('gallery_id'));
    }
    
	public function store(Request $request) {
		$cim = $request->input('cim');
		$leiras = $request->input('leiras');
		$helyszin = $request->input('helyszin');
		$kep = $request->file('kep');
		$galeria = $request->input('galeria');
		$tulajdonos = 1;

		if ($kep) {
		  $fajlnev = $kep->getClientOriginalName();
		  $kep->move(public_path('fotok/'.$galeria), $fajlnev);

		  DB::table($this->fotok_tabla)->insert(
			[
			  'title' => $cim,
			  'description' => $leiras,
			  'location' => $helyszin,
			  'image' => $fajlnev,
			  'gallery_id' => $galeria,
			  'owner_id' => $tulajdonos
			]  
		  );
		  //EZ NEM MŰKÖDIK!!!
		  //return \Redirect::route('gallery.show', array('id'=>$galeria))->with('uzenet', 'A fotót sikeresen feltöltötted!');
		  return \Redirect::route('gallery.show', $galeria)->with('uzenet', 'A fotót sikeresen feltöltötted!');

		}
		else {
		  return \Redirect::route('gallery.show', [$galeria])->with('uzenet', 'A fotó feltöltése nem sikerült!');
		}
	}    


    public function details($id) {
        //die($id);
      $photo = DB::table($this->fotok_tabla)->where('id',$id)->first();
      return view('photo/details', compact('photo'));
    }
}
