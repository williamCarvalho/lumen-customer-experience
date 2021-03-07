<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $guarded = ['id','created_at','updated_at'];

    public function evaluation()
    {
        return $this->hasOne(Evaluation::class, 'id_transaction');
    }
}