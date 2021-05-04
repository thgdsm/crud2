<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ModelPessoa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table= 'modelpessoa';
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'data_nasc',
        'nacionalidade'
    ];
    protected $primaryKey='id';
}
