<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        // Paginar elementos, son los elementos a mostrar en la pagina
//        $projects = Project::latest()->paginate();

        return view('portfolio', [
            'projects' => Project::latest()->paginate()
        ]);
    }
}
