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
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $style = Category::find(2);
        // $style->specialties()->attach(6, ['skill_id' => 75]);
        // $style->specialties()->attach(6, ['skill_id' => 76]);
        // $style->specialties()->attach(6, ['skill_id' => 77]);
        // $style->specialties()->attach(6, ['skill_id' => 78]);
        // $style->specialties()->attach(6, ['skill_id' => 79]);
        // $style->specialties()->attach(6, ['skill_id' => 80]);

    }
}
