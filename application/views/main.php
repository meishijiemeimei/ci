
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?=base_url()?>css/layout3.css" type="text/css" rel="stylesheet" /> 
<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // 在这里写你的代码...
    $('#l1').bind('click', function() {
      $('#t1').css("display","none");
      $('#t2').css("display","none");
      $('#t3').css("display","none");
      $('#t1').css("display","block");
    });
    $('#l2').bind('click', function() {
      $('#t1').css("display","none");
      $('#t2').css("display","none");
      $('#t3').css("display","none");
      $('#t2').css("display","block");
    });
    $('#l3').bind('click', function() {
      $('#t1').css("display","none");
      $('#t2').css("display","none");
      $('#t3').css("display","none");
      $('#t3').css("display","block");
    });
  });
</script>

<title></title>
</head>
<body>
    <!--navigation start-->
    <div style="width: 1000px;padding: 0px;	margin: 0px auto;text-align: left;font-size:12px; height:28px; line-height:28px;">欢迎进入东方易城！
    	
    </div>
    <div id="header"><img src="<?=base_url()?>images/logo.jpg" alt="" /></div>
<!--navigation end-->
        <!--navigation start-->
        <div id="nav">
            <ul class="menu">
                <li class="level1-li"><a class="level1-a" href="#">网站首页</a></li>
                <li class="level1-li"><a class="level1-a" href="#">关于我们</a>
                    <!--<ul class="sub">
                        <li><a href="http://www.sh-an.com.cn/event.asp">最新活动</a></li>
 						<li><a href="http://www.sh-an.com.cn/edm/120523/0523edm.asp">VIP年中积分答谢</a></li>
						
                        <li><a href="http://www.sh-an.com.cn/edm/0110/0110edm.asp">禧福汇DM</a></li>
                        <li><a href="http://www.sh-an.com.cn/edm/0319edm1/0319edmmakeup.asp">《品致》第六期化妆篇</a></li>
                        <li><a href="http://www.sh-an.com.cn/edm/0319edm2/0319edmgem.asp">《品致》第六期珠宝篇</a></li>
                    </ul>-->
                </li>
                <li class="level1-li"><a class="level1-a" href="#">商场促销</a>
                   <!-- <ul class="sub">
                        <li><a href="http://www.sh-an.com.cn/vip2.asp">VIP卡升级公告</a></li>      
                        <li><a href="http://www.sh-an.com.cn/vipnotice.asp">荣誉顾客卡公告</a></li>
                        <li><a href="http://www.sh-an.com.cn/vip/vip.asp">王府井百货VIP卡</a></li>
                        <li><a href="http://www.sh-an.com.cn/vip/vip_member.asp">会员卡</a></li>
                        <li><a href="http://www.sh-an.com.cn/vip/vip_birthcake.asp">贵宾生日蛋糕领取</a></li>
                        <li><a href="http://www.sh-an.com.cn/vip/special.asp">特约商户</a></li>
                    </ul>-->
    
              </li>
                <li class="level1-li"><a class="level1-a" href="#">楼层导航</a>
                  <!--  <ul class="sub">
                        <li><a href="http://www.sh-an.com.cn/golf/golf.asp">球会简介</a></li>
                        <li><a href="http://www.sh-an.com.cn/golf/2011golf.asp">2011乐享GOLF</a></li>
                        <li><a href="http://www.sh-an.com.cn/golf/2011golf_free.asp">悦享GOLF 免费体验</a></li>
                        <li><a href="http://www.sh-an.com.cn/golf/golf_event.asp">球会活动</a></li>
                    </ul>-->
              </li>
                <li class="level1-li"><a class="level1-a" href="#">新闻动态</a>
                   <!-- <ul class="sub">
                        <li><a href="http://www.sh-an.com.cn/lohas/lohas_intro.asp">乐活章程</a></li>
                        <li><a href="http://www.sh-an.com.cn/lohas/lohas_event.asp">乐活足迹</a></li>
	 		 
                    </ul>-->
              </li>
                <li class="level1-li"><a class="level1-a" href="#">合作商家</a>
                   <!-- <ul class="sub">
						<li><a href="http://www.sh-an.com.cn/eventschool.asp">精英学子争霸赛</a></li>	                         
                    </ul>-->
                </li>
                <li class="level1-li"><a class="level1-a" href="#">CLUB</a></li>
               <!-- <li class="level1-li"><a class="level1-a" href="http://www.goonow.com/goonow/main.html" target="_blank">网上商城</a></li>-->
            </ul>
        </div>
        <!--navigation close-->
   

<!--main content start-->    
    <div id="main_container" >
        <div class="main_content">
            <div class="main_left">
              <div class="main_title">
                  <div class="main_titlename">品牌分类 </div>                  
              </div>
              <div class="main_newslist" >
                  <table borer="0" width="100%" class="main_newslist_list">
                    <?foreach ($shopsort as $row):?>
                      <tr>
                      <td width="10%" align="center">·</td>
                      <td width="90%"><a href="<?=site_url()?>/main/index/<?=$row->shop_sort_id?>/1"><?=$row->shop_sort_title?></a></td>
<!--                      <td><=date('Y-m-d',strtotime($row->blog_datetime))></td>
-->                   </tr>                      
                    <?endforeach;?> 
                  </table>
              </div>
            </div>
            <div class="main_center">
              <div class="main_title">
                  <div class="main_titlename">当前类别：<span>R INTRO</span></div>                  
              </div>
              <div class="main_piclist"> 
                
                <ul>
                    <?foreach ($shoplist as $row):?>
                      <li>
                        <img src="<?=$row->shop_images?>" height="110" alt="" /><br />
                        <div style="text-align:left; font-size:14px; font-weight:bold; color:#666666;margin-top:10px;"><?=$row->shop_title?></a></div>
                        <div style="text-align:left;">产地：<?=$row->shop_title?></div>
						<div style="text-align:left;">品牌：<?=$row->shop_title?></div>
                      </li>
                    <?endforeach;?> 
                    </ul>
                                   
              </div>
              
              <div style="clear:both; margin:10px;">
			  <div class="cutpage" id="page">                
				<?=$mypage?>  
              </div>
			  
              </div>
            </div>
            
      </div>
    </div>    
    <!--main content start--> 


<!--fooer start-->
<div class="warp_b">
            <div id="footer">
            	<div style="float:left; padding-top:10px;"><img src="<?=base_url()?>images/logobt.jpg" alt="" /></div>
                <div class="footer_mid" align="center">
                    <ul>
                        
                        <li class="copyright">(C)江苏东方易城网络科技有限公司 苏ICP备11085504号</li>
                    </ul>                
                </div>                
            </div>
</div>
<!--footer close-->
</body>
</html>
