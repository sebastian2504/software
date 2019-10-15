<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.show', compact('videos'));
    }

    public function create()
    {
    	return view('videos.crear');
    }

    public function store()
    {
    	$video = new Video();
    	$video->nombre = request()->nombre;
    	$video->duracion = request()->duracion;
    	$video->descripcion = request()->descripcion;
    	$video->categoria_id = 3;
        $video->user_id = 3;
    	$video->reproducciones = 0;
    	$video->save();
    	return "Guardado con exito!";
    }

    public function show($id)
    {
        $videos = \DB::table('videos')->where('user_id', $id)->get();
        return view('videos.show', compact('videos'));
    }

    public function edit($id)
    {
        $video = Video::find($id);
        return view('videos.edit', compact('video'));
    }

    public function update(Video $video)
    {
        //$video->update(request()->all());
        $video->nombre =request()->nombre;
        $video->duracion =request()->duracion;
        $video->descripcion = request()->descripcion;
        $video->save();
        return "Video Editado";
    }
}
