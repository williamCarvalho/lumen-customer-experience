<?php

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    public function run()
    {
        Transaction::create([
            'date' => '2021-01-01',
            'value' => '10.51',
            'id_client' => '1',
            'id_store' => '2',
            'id_collaborator' => '3',
        ]);

        Transaction::create([
            'date' => '2021-02-01',
            'value' => '15.09',
            'id_client' => '2',
            'id_store' => '3',
            'id_collaborator' => '1',
        ]);

        Transaction::create([
            'date' => '2021-03-01',
            'value' => '5.13',
            'id_client' => '3',
            'id_store' => '1',
            'id_collaborator' => '2',
        ]);
    }
}
