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

    public function create($id)
    {
        //$usuario = Usuario::find($id);
        return view('videos.crear', compact('id'));
    }

    public function store($id)
    {
        request()->validate([
            'nombre' => 'required',
            'duracion' => 'required',
            'descripcion' => 'required|min:20',
        ]);
        $video = new Video();
        $video->nombre = request()->nombre;
        $video->duracion = request()->duracion;
        $video->descripcion = request()->descripcion;
        $video->categoria_id = $id;
        $video->user_id = $id;
        $video->reproducciones = 0;
        $video->save();
        
        $videos = \DB::table('videos')->where('user_id', $id)->get();
        return view('videos.show', compact('videos'));
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
        $videos = \DB::table('videos')->where('user_id', 2)->get();
        return view('videos.show', compact('videos'));
    }
}
