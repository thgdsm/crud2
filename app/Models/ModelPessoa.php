<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPessoa extends Model
{
    use HasFactory;
    protected $fillable=['nome','cpf','email','data_nasc','nacionalidade'];
}
