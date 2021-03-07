<?php

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'name' => 'Heloise Juliana Ramos',
            'email' => 'heloisejulianaramos-75@sodexo.com',
            'phone' => '1138750343',
            'cpf' => '35717888937',
        ]);

        Client::create([
            'name' => 'Erick Henrique Novaes',
            'email' => 'erickhenriquenovaes-99@life.com',
            'phone' => '69989563150',
            'cpf' => '09019546910',
        ]);

        Client::create([
            'name' => 'Isaac José Monteiro',
            'email' => 'isaacjosemonteiro-72@autvale.com',
            'phone' => '65987441199',
            'cpf' => '68439601387',
        ]);
    }
}
