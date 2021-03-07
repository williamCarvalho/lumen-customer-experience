<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $guarded = ['id','status','created_at','updated_at'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_client');
    }
}