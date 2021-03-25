<?php

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
        $this->call(RolePermission::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(DistritosTableSeeder::class);
    }
}
