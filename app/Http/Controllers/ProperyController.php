<?php

namespace App\Http\Controllers;

use App\Propery;
use Illuminate\Http\Request;

class ProperyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daerah   = request('daerah');
        $mukim   = request('mukim');
        $status   = request('status');
        $unit_luas   = request('unit_luas');

        return Propery::daerah($daerah)->mukim($mukim)->status($status)
        ->paginate(1000);
        // return Propery::where('kod_daerah', $daerah)
        //             ->where('kod_mukin', $mukim)
        //             ->where('kod_status', $status)
        //             ->where('kod_unit_luas', $unit_luas)
        //             ->paginate(100);
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
     * @param  \App\Propery  $propery
     * @return \Illuminate\Http\Response
     */
    public function show(Propery $propery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Propery  $propery
     * @return \Illuminate\Http\Response
     */
    public function edit(Propery $propery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Propery  $propery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propery $propery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propery  $propery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propery $propery)
    {
        //
    }
}
