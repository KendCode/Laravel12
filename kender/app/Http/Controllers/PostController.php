<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Barryvdh\DomPDF;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post:: all();
        // $posts;
        return view('posts.index',compact('posts'));
    }
    public function create(){
        return view('posts.create');
    }
    public function show($post){
        //return "hola pagina modifico posts";
        $post=Post::find($post);
        return view('posts.show',['post'=>$post]);
    }
    public function store(){
        return "hola pagina modifico posts";
        //return $request->all();
        //$post= new Post;
        //$post->title=$request->title;
        //$post->contenido=$request->contenido;
        //$post->categoria=$request->categoria;
        //$post->save();
        //return redirect('/posts');
    }
    //  PARA PDF
     public function exportPdf($post){
        $post=Post::find($post);
        $pdf =PDF::loadView('posts.show',compact('post'));
        return $pdf->download('post_'.$post->id.'.pdf');
    }
}
