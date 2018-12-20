<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript" src="../addons/ewei_shopv2/static/js/dist/area/cascade.js"></script>
<style>
    .checkbox-inline{
        display: block;
    }    .btns a i{
             display: inline-block;
             width: 100%;
             height: 20px;
             background: #f95959;
         }
    .btn-color {
        width: 25px;
        height: 25px;
        border: 1px solid #fff;
        margin: 2px;
        padding: 0;
    }

</style>
<div class="page-header">
    当前位置：<span class="text-primary"></small>
    </span>
</div>

<div class="page-content">
    <?php if(cv('fuwu.homepage.add')) { ?>
    <div class="page-sub-toolbar">
        <a class="btn btn-primary btn-sm" href="<?php  echo webUrl('fuwu/add')?>">新增图片</a>
    </div>
    <?php  } ?>
    <form action="<?php  echo webUrl('fuwu/add')?>" method="post" class="form-horizontal form-validate" enctype="multipart/form-data">
        <?php  if(empty($data['id'])) { ?>
    <input type="hidden" name="id" value="<?php  echo $data['id'];?>"/>
        <?php  } ?>
    <div class="form-group">
        <label class="col-lg control-label must">图片名称</label>
        <div class="col-sm-9 col-xs-12">

            <input type="text" name="name" class="form-control" value="<?php  if($data['id']) { ?><?php  echo $data['name'];?><?php  } ?>"
                   data-rule-required="true"/>

        </div>
    </div>
    <div class="form-group">
        <label class="col-lg control-label must">图片</label>
        <div class="col-sm-9 col-xs-12">


            <?php  echo tpl_form_field_image2('img',$data['img'])?>

            <?php  if(!empty($data['img'])) { ?>
            <a href='<?php  echo tomedia($data['img'])?>' target='_blank'>
            <!--<img src="<?php  echo tomedia($data['img'])?>" style='width:100px;border:1px solid #ccc;padding:1px' onerror="this.src='../addons/ewei_shopv2/static/images/nopic.png'"/>-->
            </a>
            <?php  } ?>




        </div>
    </div>

    <div class="form-group"></div>
    <div class="form-group">
        <label class="col-lg control-label"></label>
        <div class="col-sm-9 col-xs-12">

            <input type="submit" value="提交" class="btn btn-primary"/>

            <input type="button" name="back" onclick='history.back()' style='margin-left:10px;' value="返回列表" class="btn btn-default" />
        </div>
    </div>
    </form>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>