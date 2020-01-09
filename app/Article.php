<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use think\facade\Request;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'a_id';
    public function author()
    {
        return $this->belongsTo(Category::class, 'c_id');
    }

}
