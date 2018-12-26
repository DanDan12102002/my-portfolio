<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'Joseph Kent',
            'location' => 'Tampa, US',
            'testimonial' => 'Eager and able - Dan, he is what you want in contractor on Upwork!'
        ]);
    }
}
