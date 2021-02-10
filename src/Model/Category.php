<?php


namespace Hillel\Model;

class Category extends \Illuminate\Database\Eloquent\Model
{
    public function posts()
    {
return $this->hasMany(Post::class);

    }
}
//$cat = new Category;
//$cat->title = 'Toys';
//$cat->save();
//var_dump(Category::find(1));;