<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
 
  public function index(){
    $postshad=Post::all();
   
    
        return view('postes.index', ['posts' => $postshad]);
    }


     public function show(Post $post){
       
      
     
       return view('postes.show', ['postDB' => $post]);
     }
     public function comp(){
      return view('components.maprojet');
     }
     public function create(){
      $users=User::all();
      return view('postes.create',['users' => $users]);
     }
    public function store() {
    // Validation
    request()->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'created_By' => 'required|exists:users,id'
    ]);

    // Récupérer le nom à partir de l'ID
    $userName = User::find(request()->created_By)->name;

  Post::create([
    'title' => request()->title,
     'description' => request()->description,
      'created_By' => $userName
  ]);

    return to_route('postes.index');
}



public function edit(Post $post){
    $users = User::all();
    return view('postes.edit', ['Users' => $users, 'post' => $post]);
}

public function update($postId){
    $post = Post::findOrFail($postId);



    $post->update([
        'title' => request()->title,
        'description' => request()->description,
      
    ]);

    return to_route('postes.show', ['post' => $post->id]);
}

     public function destroy($postId){
      $post=Post::where('id',$postId);
      $post->delete();
      return to_route('postes.index');
     }
}

