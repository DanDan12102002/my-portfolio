<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
        //$testimonials = DB::select('select * from testimonials');
        $testimonials = Testimonial::all();

        return view('landing', ['testimonials' => $testimonials]);
    }
}
