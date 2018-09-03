<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
        //采集首页地址
        $url="http://www.hznzcn.com/product-658392.html";
        //获取页面代码
        $rs=file_get_contents($url);
      
        //echo $rs;die;
        //设置匹配正则
        //$fp=fopen("text.txt","a");
        //$fw=fwrite($fp,$rs);
        //fclose($fp);
        /*<I class=titles><A
        href="http://www.xz-src.com/"
        target=_blank>留住你身边的好男人</A></I>*/
        //$preg='/<i\s+class=\"titles\"><a\s+href=\"[^>]+\">(.*)<\/a><\/i>/i';
        $preg_title='/<h1>(.+?)<\/h1>/i';
        $preg_price='/<label id=\"productShopPrice\">(.+?)<\/label>/';
        $preg_img='/<img id=\"midimg\"+.+src=\"(.+?)\"+.+>/';
        //进行正则搜索/<label id=\"productShopPrice\">(.+?)</label>/
        preg_match_all($preg_title,$rs,$title);
        preg_match_all($preg_price,$rs,$price);
        preg_match_all($preg_img,$rs,$img);
        //计算标题数量
     
        
        $a['title']=$title[1][0];
        $a['price']=$price[1][0];
        $a['url']=$img[1][0];

        $this->assign($a);
        $this->name='wang';
        $this->display();
        // echo json_encode($a,JSON_UNESCAPED_UNICODE);die;
    }
}