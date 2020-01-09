<?php

namespace App\Admin\Actions\Document;

use App\Manuscript;
use Encore\Admin\Actions\RowAction;

class StarDocument extends RowAction
{
    // 在页面点击这一列的图表之后，发送请求到后端的handle方法执行
    public function handle(Manuscript $manuscript)
    {
        // 切换`star`字段的值并保存
        $manuscript->status = (int) !$manuscript->status;
        $manuscript->save();

        // 保存之后返回新的html到前端显示
        $html = $manuscript->status ? "<i class=\"fa fa-star-o\"></i>" : "<i class=\"fa fa-star\"></i>";

        return $this->response()->html($html);
    }

    // 这个方法来根据`star`字段的值来在这一列显示不同的图标
    public function display($status)
    {
        return $status ? "<i class=\"fa fa-star-o\"></i>" : "<i class=\"fa fa-star\"></i>";
    }
}
