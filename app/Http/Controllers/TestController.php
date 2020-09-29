<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\form;
use App\Models\show;
use Symfony\Component\Console\Input\Input;
class TestController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('forms')->get();
        return view('index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $u = new form();
        $u->first_name = $request->fname;
        $u->last_name = $request->lname;
        $u->age = $request->age;
        $u->save();
        $seperate = DB::table('forms')->find($u->id);
        return view("individual_data", ['seperate'=>$seperate]);
        // echo "<b>first-name: </b>".$u->first_name;
        // echo "<br><br>";
        // echo "<b>last-name: </b>".$u->last_name;
        // echo "<br><br>";
        // echo "<b>age: </b>".$u->age;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $req)
    {
        $selected_id = $req->selected_id;
        $user = DB::table('forms')->find($selected_id);
        return view('show_data', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = DB::table('forms')->find($id);
        return view('edit', ['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $u_fname = $request->fname;
        $u_lname = $request->lname;
        $u_age = $request->age;
        $updated_data = DB::table('forms')->where("id", $id)->update(["first_name"=>$u_fname,"last_name"=>$u_lname,"age"=>$u_age]);
        $seperate = DB::table("forms")->find($id);
        return view("individual_data", ["seperate"=>$seperate]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('forms')->where("id", $id)->delete();
        return $this->index();
        // $users = DB::table('forms')->get();
        // return view('index',['users'=>$users]);
    }
}
