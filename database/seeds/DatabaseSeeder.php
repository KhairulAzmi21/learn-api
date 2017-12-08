<?php

use Illuminate\Database\Seeder;
use App\Lesson;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LessonSeeder::class);
        $this->call(AllSeederTable::class);
    }
}
