<?php

namespace App\Http\Controllers;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index(){
        $date = date_create();
        date_date_set($date, 2016, 3, 27);

        $date2 = date_create();
        date_date_set($date2, 2016, 3, 28);

        $posts = array(
            0 => array(
                "Titulo"   => "Meu Primeiro Post",
                "Autor"    => "Rafael Igor",
                "DataHora" => date_format($date, 'F d, Y'),
                "Conteudo" => "<p>Meu primeiro post</p>"
            ),
            1 => array(
                "Titulo"   => "Segundo Post",
                "Autor"    => "Rafael Igor",
                "DataHora" => date_format($date2, 'F d, Y'),
                "Conteudo" => "<p>Segundo post</p>"
            ),
        );
        return view ('Post.Posts', compact('posts'));
    }
}
