<?php

use App\Models\Evaluation;
use Illuminate\Database\Seeder;

class EvaluationTableSeeder extends Seeder
{
    public function run()
    {
        Evaluation::create([
            'comment' => 'Ut pharetra ullamcorper dapibus. Mauris tempor tortor sed scelerisque gravida.',
            'note' => '8',
            'id_transaction' => '1',
        ]);

        Evaluation::create([
            'comment' => 'Vestibulum sed sapien dolor. Donec non accumsan felis, laoreet rutrum libero.',
            'note' => '9',
            'id_transaction' => '2',
        ]);

        Evaluation::create([
            'comment' => 'Curabitur eget mauris in ligula eleifend rhoncus. Sed sit amet ante purus. Ut lobortis ante.',
            'note' => '7',
            'id_transaction' => '3',
        ]);
    }
}
