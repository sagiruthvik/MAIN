<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\recipe;

class recipe_controller extends Controller
{
    public function show_recipe(){
            return view('show_recipe',[
                "rows"=>recipe::all()
            ]
        );
    }


}
