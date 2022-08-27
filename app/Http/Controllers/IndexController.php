<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authorpost;
use App\Models\Author;
class IndexController extends Controller
{
    //
    function index($id){
        $author = Author::find($id);
        // var_dump($author->username);
        // var_dump($author->username);
        // dd($author->post); //author ar satha relation post --- akn amadar post ar data show krva
        // return $author;
        foreach ($author->post as $post ){
            // echo $post.'<br>';
            echo $post->title.'<br>';
            echo $post->cat.'<br>';

        }

    }
}
