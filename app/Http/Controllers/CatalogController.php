<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getShow($id) 
    { 

		//return view('catalog.show',['id'=>$id,'arrayPeliculas'=>$this->arrayPeliculas[$id]]); 

		
        $sitios=Site::findorFail($id);
		return view('catalog.show',compact('sitios'));
    }

    public function getIndex() 
    { 
		//$peliculas = array($this->arrayPeliculas);
		$sitios=Site::all();
        //return view('catalog.index',['arrayPeliculas'=>$this->arrayPeliculas]);
		//return view('catalog.index',compact('arrayPeliculas'));
		//$arrayPeliculas=Movie::where('title','like','E%')->get();//traer las peliculas que inicien con E
		return view('catalog.catalogo',compact('sitios'));

    }

    public function getCreate() 
    { 

        return view('creacion'); 

    }

    public function getEdit($id) 
    { 

        //return view('catalog.edit',['arrayPeliculas'=>$this->arrayPeliculas[$id]]); 
		$sitios=Site::findorFail($id);
		return view('modificar',compact('sitios'));
	}
	//-Nuevos metodos postcreate y postedit------------------------------------------------------
	public function postCreate(Request $request) 
	{	
		$createSite= new Site;
		$createSite->titulo=$request->input('titulo');
		$createSite->imagen=$request->input('imagen');
		$createSite->descripcion1=$request->input('descripcion1');
		$createSite->descripcion2=$request->input('descripcion2');
		$createSite->video=$request->input('video');
		$createSite->save();
		return redirect('admin');
	} 

	public function putEdit(Request $request, $id) 
	{
		$editMovie= Movie::findOrFail($id);
		$editMovie->title=$request->input('title');
		$editMovie->year=$request->input('year');
		$editMovie->director=$request->input('director');
		$editMovie->poster=$request->input('poster');
		$editMovie->synopsis=$request->input('synopsis');
		$editMovie->poster=$request->input('poster');
		$editMovie->save();
		return redirect('/catalog/show/'.$id);
	} 
}
