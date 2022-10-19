<?php

namespace Database\Seeders;

use App\Models\Version;
use Database\Factories\VersionFactory;
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
        Version::factory(20)->create();
    }
}
