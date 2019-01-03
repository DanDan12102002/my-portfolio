<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Work;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MainFormRequest;

class MainController extends Controller
{
    public function create() {
        $testimonials = Testimonial::all();
        $works = Work::all();

        return view('landing', [
            'testimonials' => $testimonials,
            'works' => $works
        ]);
    }
}
