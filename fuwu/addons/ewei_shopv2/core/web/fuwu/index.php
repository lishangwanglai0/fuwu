<?php if( !defined("IN_IA") )
{
exit( "Access Denied" );
}

class Index_EweiShopV2Page extends WebPage
{
    //首页大图展示
    public function main()
    {
        //查询数据
        $homeda=pdo_getall('abfuwu_home',array('type' => 0),array('id','name','img'),'id DESC');

        include($this->template("fuwu/homepage"));
    }
    //新增图片
    public function add()
    {
        $this->post();
    }
    public function post()
    {
        global $_W;
        global $_GPC;
        if( !$_GPC["name"] ){
            include($this->template("fuwu/homeadd"));
        }else{

            if(empty($_GPC['name'])){
                show_json(0,'图片名称不能为空');
            }
            if(empty($_GPC['img'])){
                show_json(0,'图片不能为空');
            }
            $arr=['name'=>$_GPC['name'],'img'=>$_GPC['img'],'type'=>0];
            $resul=pdo_insert('abfuwu_home',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('fuwu.add', '添加图片 ID: ' . $id);
                show_json(1, array('url' => webUrl('fuwu')));
            }
        }
    }

    public function edit(){
        global $_GPC;
        global $_W;
        $id=$_GPC['id'];
        if($_GPC['name']){
            $data=pdo_get('abfuwu_home',array('id'=>$id),array('id','name','img'));
            include($this->template("fuwu/homeadd"));
        }else{
            if(empty($_GPC['name'])){
                show_json(0,'图片名称不能为空');
            }
            if(empty($_GPC['img'])){
                show_json(0,'图片不能为空');
            }
            $arr=['name'=>$_GPC['name'],'img'=>$_GPC['img']];
            $resul=pdo_update('abfuwu_home',$arr);
            if(!empty($resul)){
                $id = pdo_insertid();
                plog('fuwu.add', '添加图片 ID: ' . $id);
                show_json(1, array('url' => webUrl('fuwu')));
            }
        }


    }

}