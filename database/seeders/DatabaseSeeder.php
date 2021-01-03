<?php

use Database\Seeders\PermisosSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$this->call(PermisosSeeder::class); 
    }
}
