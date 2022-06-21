<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(RolesTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(ManufacturersTableSeeder::class);
        $this->call(ServiceSparepartTableSeeder::class);
    }
}
