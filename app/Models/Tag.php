<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table='tags';

    protected $fillable = ['name','user_id'];
    
    public function posts(){
        return $this->belongsToMany(
            Tag::class,
            'post_tags',
            'post_id',
            'tags_id',
            'id',
            'id'

        );
    }

}
