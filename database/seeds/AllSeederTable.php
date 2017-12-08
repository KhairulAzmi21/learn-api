<?php

use Illuminate\Database\Seeder;
use App\Gender;
use App\State;
use App\Status;
use App\Religion;
use App\Race;

class AllSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->genderSeeder();
        $this->stateSeeder();
        $this->statusSeeder();
        $this->raceSeeder();
        $this->religionSeeder();
        factory(App\User::class, 500)->create();
    }

    public function genderSeeder()
    {
        $labels = [
            'Male',
            'Female',
        ];

        foreach ($labels as $label) {
            Gender::create([
                'label' => $label,
            ]);
        }
    }

    public function stateSeeder()
    {
        $labels = [
            'Johor',
            'Kedah',
            'Kelantan',
            'Melaka',
            'Negeri Sembilan',
            'Pahang',
            'Perak',
            'Perlis',
            'Pulau Pinang',
            'Sabah',
            'Sarawak',
            'Selangor',
            'Terengganu',
            'Wilayah Persekutuan Kuala Lumpur',
            'Wilayah Persekutuan Labuan',
            'Wilayah Persekutuan Putrajaya',
            'Others',
        ];

        foreach ($labels as $label) {
            State::create([
                'label' => $label,
            ]);
        }
    }

    public function statusSeeder()
    {
        $labels = [
            'Divorced',
            'Married',
            'Single',
        ];

        foreach ($labels as $label) {
            Status::create([
                'label' => $label,
            ]);
        }
    }

    public function religionSeeder()
    {
        $labels = [
            'Islam',
            'Buddist',
            'Hindu',
            'Christian',
            'Others'
        ];

        foreach ($labels as $label) {
            Religion::create([
                'label' => $label,
            ]);
        }
    }

    public function raceSeeder()
    {
        $labels = [
            'Chinese',
            'Indian',
            'Malay',
            'Others'
        ];

        foreach ($labels as $label) {
            Race::create([
                'label' => $label,
            ]);
        }
    }
}
