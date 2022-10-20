<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('listAllUsers' ,['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createUser');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('listUser', ['user' => $user]);



    //     $user = User::where('id', $id)->first();
    //     if($user){
    //         echo "<h1>Dados do Usuário</h1>";
    //         echo "Name: " . $user->name . "<br>";
    //         echo "Email: " . $user->email . "<br>";
    //         echo "<hr>";

    //     }

    //     $address= $user->address()->first();

    //     if($address){
    //         echo "<h1>Address</h1>";
    //         echo "Street: {$address->street}<br>";
    //         echo "Number: {$address->number}<br>";
    //         echo "City: {$address->city}<br>";
    //         echo "State: {$address->state}<br>";
    //         echo "<hr>";

    //     }
    //     $posts = $user->posts()->get();

    //     if($posts){
    //         echo "<h1>Posts</h1>";
    //         foreach($posts as $post){
    //             echo "ID: {$post->id}<br>";
    //             echo "Title: {$post->title}<br>";
    //             echo "Content: {$post->content}<br>";
    //             echo "Created at: {$post->created_at}<br>";
    //             echo "Updated at: {$post->updated_at}<br>";
    //             echo "<hr>";
    //         }
       // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('editUser', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = User::find($user->id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
