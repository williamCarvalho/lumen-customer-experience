<?php

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    public function run()
    {
        Store::create([
            'name' => 'Lojas Americanas S.A.',
        ]);

        Store::create([
            'name' => 'Magazine Luiza',
        ]);

        Store::create([
            'name' => 'Submarino',
        ]);
    }
}
