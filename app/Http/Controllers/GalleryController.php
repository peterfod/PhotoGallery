<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GalleryController extends Controller
{
	private $galeriak_tabla = 'galleries';
    private $fotok_tabla = 'photos';

    public function index() {
       /* $teszt = 'Tesztelünk...';
        return view('gallery/index',compact('teszt')); */
       // return view('gallery/index');
       /*
		$galleries = DB::table('galleries')->get();
		return view('gallery/index', compact('galleries'));
		*/
		$galleries = DB::table($this->galeriak_tabla)->get();
		return view('gallery/index', compact('galleries'));
    }

    public function create() {
        //die('GALLERY/CREATE');
        return view('gallery/create');
    }

  public function store(Request $request) {
    $nev = $request->input('nev');
    $leiras = $request->input('leiras');
    $boritokep = $request->file('boritokep');
    $tulajdonos = 1;

    if ($boritokep) {
      // die('OKÉ');
      $fajlnev = $boritokep->getClientOriginalName();
      $boritokep->move(public_path('boritokepek'), $fajlnev);
    }
    else {
      //die('HIBA');
      $fajlnev = 'nincskep.jpg';
    }

    DB::table('galleries')->insert(
      [
        'name' => $nev,
        'description' => $leiras,
        'cover_image' => $fajlnev,
        'owner_id' => $tulajdonos
      ]
    );

    return \Redirect::route('gallery.index')->with('uzenet', 'A képgalériát sikeresen létrehoztuk.');

  }

    public function show($id) {
		$gallery = DB::table($this->galeriak_tabla)->where('id',$id)->first();
		$photos = DB::table($this->fotok_tabla)->where('gallery_id',$id)->get();
		return view('gallery/show', compact('gallery','photos'));
    }

}
