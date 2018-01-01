<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function helloworld()
    {
        return ['hello' => 'world'];
    }


    public function show()
    {
        $user = \App\User::find(1);
        $posts = \App\Post::all();

        return ['user' => $user, 'posts' => $posts];
    }

    // We create and delete the record to keep DB size consistent during test.
    public function interact()
    {
        $post = \App\Post::create(['item' => str_random(30)]);

        $post->delete();

        return reponse('ok');
    }

}
