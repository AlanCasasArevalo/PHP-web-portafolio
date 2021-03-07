<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $portfolio = [
//            ['title' => 'Projecto #1'],
//            ['title' => 'Projecto #2'],
//            ['title' => 'Projecto #3'],
//            ['title' => 'Projecto #4'],
//        ];
        $portfolio = DB::table('projects')->get();
        return view('portfolio', compact('portfolio'));
    }
}
