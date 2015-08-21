<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display homepage
     *
     * @return Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * Display contact
     *
     * @return Response
     */
    public function contact()
    {
        //
    }

    /**
     * Display page by slug
     *
     * @param  string  $slug
     * @return Response
     */
    public function page($slug)
    {
        //
    }

    /**
     * Send message from contact form
     *
     * @param  Request  $request
     * @return Response
     */
    public function send(Request $request)
    {
        //
    }

}
