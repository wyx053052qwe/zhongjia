<?php

namespace App;
use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree, AdminBuilder;
    protected $table = 'category';
    protected $primaryKey = 'c_id';
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('p_id');
        $this->setOrderColumn('order');
        $this->setTitleColumn('c_name');
    }


}
