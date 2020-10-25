<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:dashboard-view', ['only' => ['dashboard']]);
        $this->middleware('permission:reports-view', ['only' => ['reports']]);
        $this->middleware('permission:configuration-view', ['only' => ['configuration']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return 'It is dashboard';
    }

    public function reports()
    {
        return 'It is reports';
    }

    public function configuration()
    {
        return 'It is configuration';
    }
}
