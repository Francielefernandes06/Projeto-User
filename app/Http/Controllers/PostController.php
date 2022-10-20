<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $user = $post->author()->first();
        echo "<h1>Dados do Post</h1>";
        echo "<p>Titulo: {$post->title}</p>";
        echo "<p>Subtitulo: {$post->subtitle}</p>";
        echo "<p>Conteudo: {$post->content}</p>";
        echo "<p>Id do Autor: {$post->user_id}</p>";
        echo "<p>Nome do Autor: {$post->author->name}</p>";
        echo "<p>Email do Autor: {$post->author->email}</p>";

        $categories = $post->categories()->get();

        if($categories){
            echo "<h1>Categorias</h1>";
            foreach($categories as $category){
                echo "<p># {$category->id}</p>";
                echo "<p>{$category->name}</p>";
            }

        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function showForm()
    {
        return view('form');
    }
    public function submitForm(Request $request)
    {

        var_dump($request->except(['_token']));
        $post = new Post();



        $post->create($request->except(['_token']));
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();
        // return "Cadastrado com sucesso!";
    }
}
