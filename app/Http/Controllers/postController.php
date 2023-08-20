<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function createPost(Request $request){
        $incomingfields = $request -> validate([
            'title'=>  'required',
            'body'=>  'required'
        ]);

    }
}
