<?php

namespace App\Http\Controllers;

use App\Models\newaccounts;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewaccountsController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }




    public function addNewComptes(Request $request){

        try{
            $data = $request->input('staffcomptes');
            $Newomptes= newaccounts::insert($data);
        }catch(\Illuminate\Database\QueryException $exception){
            return $exception->getMessage();
        }


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\newaccounts  $newaccounts
     * @return \Illuminate\Http\Response
     */
    public function show(newaccounts $newaccounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newaccounts  $newaccounts
     * @return \Illuminate\Http\Response
     */
    public function edit(newaccounts $newaccounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newaccounts  $newaccounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newaccounts $newaccounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newaccounts  $newaccounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(newaccounts $newaccounts)
    {
        //
    }
}
