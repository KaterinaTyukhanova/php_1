<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'gender',
        'burn_date',
        'address',
        'id_doljnost',
        'id_department',
        'id_structure',
        'image'
    ];
}