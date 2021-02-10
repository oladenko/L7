<?php

use Hillel\Model\Category;
use Hillel\Model\Post;
use Hillel\Model\Tag;

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../src/Model/Category.php';
require_once '../src/Model/Post.php';
require_once '../src/Model/Tag.php';

//$post = Post::find(10);
//$post->tags()->attach([4,3,2]);




//$post = Post::find(5);
//echo  sprintf("<h1>%s</h1>",$post->title);
//foreach($post->tags as $tag){
//    echo  sprintf( " %s <br>" , $tag->title);
//}
//$posts = Post::all();
//foreach ($posts as $post){
//    echo $post -> title.'<br>' ;
//}


//$cat = Category::find(4);
//$posts = $cat->posts;
//foreach ($posts as $post) {
//    echo $post -> title.'<br>';
//}


//namespace Hillel\Model;
//
//class category extends \Illuminate\Database\Eloquent\Model
//{}
//$cat = new Category;
//$cat->title = 'Doll';
//$cat->slug = 'kek';
//$cat->save();

//var_dump(Post::all());


