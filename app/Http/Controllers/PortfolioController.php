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
        // Estos modelos los coje de la base de datos creada
        // $portfolio = Project::orderBy('created_at', 'DESC')->get();
        // Ordenar de manera descendente por fecha
//        $portfolio = Project::orderBy('created_at', 'DESC')->get();
        // Ordenar de manera descendente por fecha
        $portfolio = Project::latest()->get();

        return view('portfolio', compact('portfolio'));
    }
}
