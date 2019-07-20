<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\item;
use App\itemownership;
use App\membership;
use App\task;
use App\taskownership;
use App\team;
use App\User;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 public function __construct()
    {
        //$this->middleware('auth');
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request
        //$id
        )
    {
        //
         //return Auth::user();

         $alldata = (object) [
            'tasks' => task::all(),
            'teams' => team::all(),
            'supplies' => item::all(),
            'contacts' => User::all(),
          ];


         if($request->data_needed == 'all')
        { return json_encode($alldata);}
         //return User::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

public function showall(Request $request)
    {

        //return response()->json(auth()->user());
        return View('personal',$request);


        if(count($request->all()) == 0){
        return View('personal',$request);

    }

    else return $request;
    }

}
