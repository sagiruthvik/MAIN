<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\recipe;

class chart_controller extends Controller
{
    public function bar_chart(){

        $rows = recipe::all();
        $label = array();
        $data = array();
        $colors = array();
        for($i=0;$i < sizeof($rows);$i++){
            $label[] = $rows[$i]->recipe_name;
            $data[] = $rows[$i]->rating;
            $colors[] = "tomato";
        }

        $bar_chartjs = app()->chartjs->name('bar_chart')->type('bar')->size(['width' => 400, 'height' => 250])
        ->labels($label)
        ->datasets([
            [
                "label" => "My recipe ratings",
                'backgroundColor' => $colors,
                'data' => $data
            ],
        ]);

        $pie_chartjs = app()->chartjs->name('pie_chart')->type('pie')->size(['width' => 400, 'height' => 250])
        ->labels($label)
        ->datasets([
            [
                "label" => "My recipe ratings",
                'backgroundColor' => $colors,
                'data' => $data
            ],
        ]);

        return view('show_recipe_chart', compact('bar_chartjs','pie_chartjs'));
    }
}
