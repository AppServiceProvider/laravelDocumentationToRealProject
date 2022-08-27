<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authorpost;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class AuthorpostController extends Controller
{
    //
    public function add_post($id){
        $author= Author::find($id);
        $post= new Authorpost();
        $post->title ='Title 1';
        $post->cat ='Cat 2';
        $author->post()->save($post);
    }
    function show_post($id){
        $post = Author::find($id)->post;
        return $post;
    }
    

}
