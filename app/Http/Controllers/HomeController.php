<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phonebook;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $phonebook = Phonebook::all();

        return view('home', [
            'phonebook' => $phonebook
        ]);
    }
}
