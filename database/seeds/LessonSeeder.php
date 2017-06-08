<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::truncate();
        factory(Lesson::class, 30)->create();
    }
}
