<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrunModel extends Model
{
    use HasFactory;

    protected $table='urun_models';
    protected $fillable =['ukod','uad','uresim','ufiyat','uadet','satici'];
}
