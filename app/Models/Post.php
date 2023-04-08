<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';

    protected $fillable = ['type', 'title', 'details', 'user_id', 'category_id', 'post_img'];

    //فنكشن عشان تخلي اول حرف من العنوان كابيتال
    public function grtTitleAttribute(){
        return ucfirst($this->title);
    }
public function category(){
    return $this->belongsTo(
        Category::class,
        'category_id',
        'id'
    )->withDefault([
        'name'=>'N/A'
    ]);
}
public function user()
{
    return $this->belongsTo(User::class);
}
public function tags()
{
    return $this->belongsToMany(
        Tag::class,
        'post_tag',
        'post_id',
        'tags_id',
        'id',
        'id'
    );
}
}
