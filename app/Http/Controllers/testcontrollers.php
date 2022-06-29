<?php

namespace App\Http\Controllers;

use App\Models\testmodels;
use Illuminate\Http\Request;

class testcontrollers extends Controller
{
    public function index() {

        $homes =[
            [
                'title' => "Je suis un le titre de la page premère",
                'container' => "lorem ipsum dolor sit amet, consectetur adipiscing",
                'author' => "DM"
            ],
            [
                'title' => "Je suis un le titre de la page deuxièmes",
                'container' => "lorem ipsum dolor sit amet, consectetur adipiscing",
                'author' => "DM"
            ],

            [
                'title' => "Je suis un le titre de la page troisièmes",
                'container' => "lorem ipsum dolor sit amet, consectetur adipiscing",
                'author' => "DM"
            ],
        ];

            return view('home', [
                'homes' => $homes
            ]);
    }
    public function show($id){
        return view('houses',[
            'houses' => testmodels::find($id)
        ]);
    }
}