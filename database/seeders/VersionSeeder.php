<?php

namespace Database\Seeders;

use App\Models\Versions;
use Database\Factories\VersionsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Versions::factory(20)->create();
    }
}
