<?php

use Illuminate\Database\Seeder;
use App\Testimonial;
use Illuminate\Support\Facades\DB;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->truncate();
        if(Testimonial::count() == 0) {
            DB::table('testimonials')->insert([
                'name' => 'Joseph Kent',
                'location' => 'Tampa, US',
                'testimonial' => 'Стремительный и умный - Даня именно тот, кого вы ищете на Upwork!',
                'created_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
