<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
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
        return view('phonebook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'phonenumber' => '',
            'message' => ''
        ]);

        $phonebook = new Phonebook();
        $phonebook->phonenumber = $data['phonenumber'];
        $phonebook->message = $data['message'];
        $phonebook->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function show(Phonebook $phonebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Phonebook $phonebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phonebook $phonebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phonebook  $phonebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phonebook $phonebook)
    {
        //
    }
}
