<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Work;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
        $testimonials = Testimonial::all();
        $works = Work::all();

        return view('landing', [
            'testimonials' => $testimonials,
            'works' => $works
        ]);
    }
}
