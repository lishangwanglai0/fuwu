<?php if( !defined("IN_IA") )
{
    exit( "Access Denied" );
}

class Homesamll_EweiShopV2Page extends WebPage
{
    //首页大图展示
    public function main()
    {

        //查询数据
        $homeda=pdo_getall('abfuwu_home',array('type' => 1),array('id','name','img'),'id DESC');

        include($this->template("/fuwu/homepage"));
    }
    //新增图片
    public function add()
    {
        global $_W;
        global $_GPC;
        if( !$_GPC["name"] ){
            include($this->template("fuwu/homeadd"));
        }else{
            if(empty($_GPC['name']) || empty($_GPC["img"])){
                return ;
            }
            $arr=['name'=>$_GPC['name'],'img'=>$_GPC['img'],'type'=>0];
            $resul=pdo_insert('abfuwu_home',$arr);
            if(!empty($resul)){
                message('新增图片成功');
            }



        }
    }

}