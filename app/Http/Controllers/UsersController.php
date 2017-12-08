<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agama   = request()->agama;
        $bangsa  = request()->bangsa;
        $jantina = request()->jantina;
        $status  = request()->status;
        $negeri  = request()->negeri;

        $users = User::negeri($negeri)->agama($agama)->bangsa($bangsa)->
        jantina($jantina)->statuskahwin($status)->get();
        // select * from users where ("negeri_id", 1) wher
        $data = $users->map(function ($user) {
            return [
                'name'     => $user->name,
                'email'    => $user->email,
                'age'      => $user->age,
                'religion' => $user->religion->label,
                'race'     => $user->race->label,
                'gender'   => $user->gender->label,
                'status'   => $user->status->label,
                'state'    => $user->state->label,

            ];
        });

        return response()->json(compact('data'), 200);
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
    public function show($id)
    {
        //
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
}
