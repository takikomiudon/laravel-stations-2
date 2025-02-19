<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Schedule;
use App\Practice;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Practice::factory(10)->create();
        Movie::factory(0)->create();
        Schedule::factory(10)->create();
        $this->call(SheetTableSeeder::class);
    }
}
