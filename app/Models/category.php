<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class category extends Model
{
    use HasFactory;

    protected $table='categores';

    protected $fillable = ['name','user_id'];


    public function posts()
    {
        return $this->hasMany(
            Post::class,
            'category_id',
            'id'
        );
    }
    
}
