<?php

use App\Models\Collaborator;
use Illuminate\Database\Seeder;

class CollaboratorTableSeeder extends Seeder
{
    public function run()
    {
        Collaborator::create([
            'name' => 'Felipe Nicolas Monteiro',
        ]);

        Collaborator::create([
            'name' => 'Mirella Clara Antônia da Conceição',
        ]);

        Collaborator::create([
            'name' => 'Jorge Martin Brito',
        ]);
    }
}
