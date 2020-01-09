<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Journal extends Model
{
    protected $table = 'journal';
    protected $primaryKey = 'j_id';
//    protected $casts = [
//        'j_uploads' => 'json',
//    ];
//
    public function setJUploadsAttribute($cover)
    {
        if (is_array($cover)) {
            $this->attributes['j_uploads'] = json_encode($cover);
        }
    }

    public function getJUploadsAttribute($cover)
    {
        return json_decode($cover, true);
    }


    public function author()
    {
        return $this->belongsTo(Category::class, 'c_id');
    }


}
