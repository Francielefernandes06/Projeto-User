<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        echo "<h1>Categoria</h1>";
        echo "ID: {$category->id}<br>";
        echo "Name: {$category->name}<br>";
        echo "Description: {$category->description}<br>";

        $posts = $category->posts()->get();
        if($posts){
            echo "<h1>Atigos</h1>";
            foreach($posts as $post){
                echo "<p>Titulo: {$post->title}</p>";
                echo "<p>Subtitulo: {$post->subtitle}</p>";
                echo "<p>Conteudo: {$post->content}</p>";
                echo "<p>Id do Autor: {$post->user_id}</p>";
                echo "<p>Nome do Autor: {$post->author->name}</p>";
                echo "<p>Email do Autor: {$post->author->email}</p>";
                echo "<hr>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
