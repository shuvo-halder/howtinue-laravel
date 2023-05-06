<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class SupUserBlog extends Model
{
    use HasFactory;
    use Commentable;

    protected $fillable = [
        'blog_name',
        'blogShortDesc',
        'blogMeta',
        'category',
        'sub_category_name',
        'blogImage',
        'super_category',

        'description',
        'userid',
        'username',

    ];

    function relationshiptocategory(){
        return $this->hasOne('App\Models\SubCatagory','id', 'id');
    }
}
