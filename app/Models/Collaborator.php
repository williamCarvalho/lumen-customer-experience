<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $table = 'collaborator';
    protected $guarded = ['id','status','created_at','updated_at'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_collaborator');
    }
}