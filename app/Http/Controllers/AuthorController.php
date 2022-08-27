<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    //
    public function add_author(){
        $author= new Author();
        $author->username ='mim';
        $author->password ='mim123';
        $author->save();
    }
}
