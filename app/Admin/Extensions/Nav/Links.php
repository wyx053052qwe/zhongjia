<?php

namespace App\Admin\Extensions\Nav;

class Links
{
    public function __toString()
    {
        return <<<HTML

<li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
  <i class="">期刊查询</i>
</a>
<ul class="dropdown-menu">
  <li class="header">期刊分类</li>
  <li>
    <!-- inner menu: contains the actual data -->
    <ul class="menu">
      <li>
        <a href="/admin/grid?c_id=3">
          <i class="fa fa-users text-aqua"></i> 教育期刊
        </a>
      </li>
      <li>
        <a href="/admin/grid?c_id=4">
          <i class="fa fa-users text-aqua"></i> 医学期刊
        </a>
      </li>
      <li>
        <a href="/admin/grid?c_id=5">
          <i class="fa fa-users text-aqua"></i> 经济期刊
        </a>
      </li>
      <li>
        <a href="/admin/grid?c_id=6">
          <i class="fa fa-users text-aqua"></i> 体育期刊
        </a>
      </li>
      <li>
        <a href="/admin/grid?c_id=7">
          <i class="fa fa-users text-aqua"></i> 科技期刊
        </a>
      </li>
      <li>
        <a href="/admin/grid?c_id=8">
          <i class="fa fa-users text-aqua"></i> 建筑期刊
        </a>
      </li>
      <li>
        <a href="/admin/grid?c_id=9">
          <i class="fa fa-users text-aqua"></i> 电脑期刊
        </a>
      </li>
      <li>
        <a href="/admin/grid?c_id=10">
          <i class="fa fa-users text-aqua"></i> 社科期刊
        </a>
      </li>
      <li>
        <a href="/admin/grid?c_id=11">
          <i class="fa fa-users text-aqua"></i> 文艺期刊
        </a>
      </li><li>
        <a href="/admin/grid?c_id=12">
          <i class="fa fa-users text-aqua"></i> 著作期刊
        </a>
      </li>
    </ul>
  </li>
</ul>
</li>

HTML;
    }
}
