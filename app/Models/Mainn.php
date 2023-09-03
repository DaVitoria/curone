<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainn extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'date',
        'email',
        'adress',
        'file',
        'category',
        'vacancie_id',
        'result_id',
    ];

    public function vacancie(){
        return $this->belongsTo(Vacancie::class, 'vacancie_id');
    }

    public function result(){
        return $this->belongsTo(Result::class, 'result_id');
    }
}
