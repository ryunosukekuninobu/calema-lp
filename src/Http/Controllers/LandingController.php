<?php

namespace Calema\Lp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingController extends Controller
{
    /**
     * Display the landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $config = config('calema-lp');

        return view('calema-lp::landing', [
            'service' => $config['service'],
            'hero' => $config['hero'],
            'features' => $config['features'],
            'cta' => $config['cta'],
            'routes' => $config['routes'],
            'theme' => $config['theme'],
            'footer' => $config['footer'],
        ]);
    }
}
