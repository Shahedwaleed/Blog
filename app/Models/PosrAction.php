<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosrAction extends Model
{
    use HasFactory;
    //ما بدي يحط بيانات عشوائية
    protected $timesamps=false;
    //بنحدد انهو حقل مفتاح اساسي بالمودل
    protected $primaryKey='id';
}
//طريقة انشاء مودل
//Php artisan make:model PosrAction
