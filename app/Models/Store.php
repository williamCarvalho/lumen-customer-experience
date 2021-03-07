<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';
    protected $guarded = ['id','status','created_at','updated_at'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_store');
    }
}