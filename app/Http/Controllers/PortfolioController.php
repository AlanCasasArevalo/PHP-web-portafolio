<?php

namespace App\Http\Controllers;

use App\Models\Project;

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
        $portfolio = Project::get();
        return view('portfolio', compact('portfolio'));
    }
}
