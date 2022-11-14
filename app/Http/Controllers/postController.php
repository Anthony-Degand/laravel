<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
         $ok = "test";
        $posts = [
            'Mon super premier titre',
            'Mon super second titre'
        ];
        return view('articles',compact('ok','posts'));
    }


    public function show($id){ // je définis une fonction avec une variable id en parametre 
        
        
        $posts = [ // je crée une variable post"s" avec deux id liée à un titre differents
            1 => 'Mon titre num 1',
            2 => 'Mon titre num 2'
        ];

        $post = $posts[$id] ?? 'pas de titre'; // je crée une variable post qui vos ma variable post"s" (id) ou si pas " pas de titre" 

        return view('article', [ // je retourne une vue de article , et post suivis de l'id du titre d'article voulus
            'post' => $post
        ]);
    }


    public function contact(){
        return view('contact');
    }
}

