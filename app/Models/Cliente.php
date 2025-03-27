<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['Nome_Input', 'Telefone_Input', 'Select_Origens', 'Data_Input', 'Oberserve_Input'];
}
