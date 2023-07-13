<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancie extends Model
{
    use HasFactory;

    protected $table = 'vacancies';
    protected $fillable = [
        'number',
        'name',
        'nrvacancie',
        'status',
        'description',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
