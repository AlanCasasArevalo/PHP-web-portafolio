<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
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

        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', [
           'project' => $project
        ]);
    }
}
