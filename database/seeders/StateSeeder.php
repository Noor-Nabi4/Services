<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ['name' => 'Azad Kashmir'],
            ['name' => 'Balochistan'],
            ['name' => 'Federally Administered Tribal Areas'],
            ['name' => 'Gilgit-Baltistan'],
            ['name' => 'Islamabad Capital Territory'],
            ['name' => 'Khyber Pakhtunkhwa'],
            ['name' => 'Punjab'],
            ['name' => 'Sindh'],
        ];
        foreach ($states as $key => $value) {
            State::create($value);
        }
    }
}
