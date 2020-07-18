<?php

namespace App\Http\Controllers;

use App\Phonebook;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

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
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'message' => ['required','string','max:140']
        ]);

        $phonebook = new Phonebook();
        $phonebook->name = auth()->user()->name;
        $phonebook->phonenumber = $data['phonenumber'];
        $phonebook->message = $data['message'];
        $phonebook->save();

        $this->sendMessage($phonebook->message, request()->phonenumber);

        return redirect('/home');
    }

    /**
     * Sends sms to user using Twilio's programmable sms client
     * @param String $message Body of sms
     * @param Number $recipients Number of recipient
     */
    private function sendMessage($message, $recipients)
    {
        $account_sid = "AC9773e294923d8caacf8008bef6e7ba0d";
        $auth_token = "b48e12ca18cf364240d43ec6c04a7cda";
        $twilio_number = "+12514511145";
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($recipients, ['from' => $twilio_number, 'body' => $message]);
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
