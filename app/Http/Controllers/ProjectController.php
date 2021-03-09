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

    public function show(Project $project)
    {
        return view('projects.show', [
           'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $title = request('title');
        $url = request('url');
        $description = request('description');
        Project::create([
            'title' => $title,
            'url' => $url,
            'description' => $description
        ]);

        return  redirect()->route('projects.index');
    }
}
