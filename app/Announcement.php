<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use think\facade\Request;

class Announcement extends Model
{
    protected $table = 'announcement';
    protected $primaryKey = 'a_id';

    public function author()
    {
        return $this->belongsTo(Manuscript::class, 'm_id');
    }

}
