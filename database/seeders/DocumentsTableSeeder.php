<?php

namespace Database\Seeders;

use App\Models\Documents;
use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documents::create(['name'=>'Приходная накладная']);
        Documents::create(['name'=>'Расходная накладная']);
        Documents::create(['name'=>'Счёт-фактура']);
    }
}
