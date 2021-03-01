<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $portfolio = [
            ['title' => 'Projecto #1'],
            ['title' => 'Projecto #2'],
            ['title' => 'Projecto #3'],
            ['title' => 'Projecto #4'],
        ];

        return view('portfolio', compact('portfolio'));
    }
}
