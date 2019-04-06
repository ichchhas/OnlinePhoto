<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function contest()
    {
        return view('frontend.contest');
    }

    public function exhibition()
    {
        return view('frontend.exhibition');
    }

    public function winner()
    {
        return view('frontend.winner');
    }

    public function dash()
    {
        return view('backend.dash');
    }

}