<?php

namespace App;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model
{
    protected $table = 'manuscript';
    protected $primaryKey = 'm_id';
    public function jtitle()
    {
        return $this->belongsTo(Journal::class, 'j_id');
    }

}
