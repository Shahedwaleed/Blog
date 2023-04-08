<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{

 public function index(){
    $posts = Post::get();
  //  return($posts);
    return view('admin.posts.index',[
        'posts'=> $posts
    ]);
 }

 public function crate(){
 $categories=category::all();
 $tags= Tag::all();
  return view('admin.posts.crate',[
    'categories'=>$categories,
    'tags'=>$tags,
  ]);
}
//بتتاكد من صحة البيانات الي دخلها المستخدم
public function store(Request $request){
  $request->validate([
  'title'=>'required|string|max:255',
  'details'=>'required|string|max:255',
]);
  //  $request->validate([
  //   'title'=>'required|string|max:255',
  //   'details'=>'required',
  //   // الحقل لازم يكون اجباري ولازم يكون رقم وموجود بجدول الكاتوقوري بالid
  //   'category_id'=>'required|int|exists:categoris,id',
  //   'post_img'=>'nullable|image',
  //   'type'=>'in:0,1',
  //   'tags_id'=>'required'
  //    ]);


     $data = $request->all();
   // $data['user_id'] = Auth::user()->id;
//تخزين الصورة
    if($request->hasFile('post_img')){
      $file=$request->file('post_img');
      $data['post_img'] =$file->store('imges','public');
    }
  //   return $data;
    $post=Post::create([
      'title' => $request->title,
      'details' => $request->details,
      'user_id' => 1,

    ]);
    //$post->tags()->attach($request->tags_id);
    return redirect()->back()->with([
      'message_flash'=> 'تم اضافة المنشور بنجاح..'
    ]);
}
}








//لما بدي اعمل فيو اعرض اشي 
//اول اشي بنروح ع 
//resourcer
//views
//بنعمل ملف للتصميم زي مهوا موجود
//بعدين بنروح ع web

//بنعمل المسار 
//بعدين بنعمل كونترولر
//الدوال لجواتها 
//بنروح ع المتصفح بنبحث بكون موجود التصميم