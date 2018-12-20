<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<style>
    tbody tr td{
        position: relative;
    }
    tbody tr  .icow-weibiaoti--{
        visibility: hidden;
        display: inline-block;
        color: #fff;
        height:18px;
        width:18px;
        background: #e0e0e0;
        text-align: center;
        line-height: 18px;
        vertical-align: middle;
    }
    tbody tr:hover .icow-weibiaoti--{
        visibility: visible;
    }
    tbody tr  .icow-weibiaoti--.hidden{
        visibility: hidden !important;
    }
    .full .icow-weibiaoti--{
        margin-left:10px;
    }
    .full>span{
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        vertical-align: middle;
        align-items: center;
    }
    tbody tr .label{
        margin: 5px 0;
    }
    .goods_attribute a{
        cursor: pointer;
    }
    .newgoodsflag{
        width: 22px;height: 16px;
        background-color: #ff0000;
        color: #fff;
        text-align: center;
        position: absolute;
        bottom: 70px;
        left: 57px;
        font-size: 12px;
    }
    .modal-dialog {
        min-width: 720px !important;
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
    }
    .catetag{
        overflow:hidden;

        text-overflow:ellipsis;

        display:-webkit-box;

        -webkit-box-orient:vertical;

        -webkit-line-clamp:2;
    }
</style>
<div class="page-header">
    当前位置：<span class="text-primary">首页大图</span>
</div>
<div class="page-content">

    <form action="./index.php" method="get" class="form-horizontal form-search" role="form">
        <input type="hidden" name="c" value="site" />
        <input type="hidden" name="a" value="entry" />
        <input type="hidden" name="m" value="ewei_shopv2" />
        <input type="hidden" name="do" value="web" />
        <input type="hidden" name="r"  value="goods" />
        <div class="page-toolbar">
            <span class="pull-left" style="margin-right:30px;">
                <a class='btn btn-sm btn-primary' href="<?php  echo webUrl('fuwu/add')?>"><i class='fa fa-plus'></i> 添加商品</a>



            </span>

        </div>
    </form>


    <div class="row">

        <div class="col-md-12">
            <!--<div class="page-table-header">-->
                <!--<input type='checkbox' />-->
                <!--<div class="btn-group">-->
                    <!--<button class="btn btn-default btn-sm  btn-operation" type="button" data-toggle='batch-remove' data-confirm="确认要删除吗?" data-href="<?php  echo webUrl('goods/delete')?>">-->
                        <!--<i class='icow icow-shanchu1'></i> 删除</button>-->

                <!--</div>-->
            <!--</div>-->
            <table class="table table-responsive">
                <thead class="navbar-inner">
                <tr>
                    <!--<th style="width:10%;"></th>-->
                    <th style="width:30%;">排序</th>
                    <th style="width:30%;">图片名称</th>
                    <th style="width: 30%;">操作</th>
                </tr>

                </thead>
                <tbody>
                <?php  if(is_array($homeda)) { foreach($homeda as $item) { ?>
                <tr>
                    <!--<td>-->
                        <!--<input type='checkbox'  value="<?php  echo $item['id'];?>"/>-->
                    <!--</td>-->
                    <td>
                        <span data-toggle="tooltip" ><?php  echo $item['id'];?></span>
                    </td>
                    <td>
                        <span data-toggle="tooltip" ><?php  echo $item['name'];?></span>
                    </td>

                    <td  style="overflow:visible;position:relative">

                        <a  class='btn  btn-op btn-operation' href="<?php  echo webUrl('fuwu/edit', array('id' => $item['id']))?>">
                                   <span data-toggle="tooltip" data-placement="top" title="" data-original-title="编辑">

                                        <i class='icow icow-bianji2'></i>

                                        <i class='icow icow-chakan-copy'></i>

                                   </span>
                        </a>
                        <a  class='btn  btn-op btn-operation' data-toggle='ajaxRemove' href="" data-confirm='如果此商品存在购买记录，会无法关联到商品, 确认要彻底删除吗?？'>
                                    <span data-toggle="tooltip" data-placement="top" title="" data-original-title="彻底删除">
                                            <i class='icow icow-shanchu1'></i>
                                       </span>
                        </a>
                    </td>
                </tr>
                <?php  } } ?>

                </tbody>

            </table>
        </div>
    </div>

    <div class="panel panel-default">
        <!--<div class="panel-body empty-data">暂时没有任何商品!</div>-->
    </div>

</div>


