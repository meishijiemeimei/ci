
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
        <div class="flashad">
               <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id=scriptmain name=scriptmain codebase="http://download.macromedia.com/pub/shockwave/cabs/
        flash/swflash.cab#version=6,0,29,0" width="960" height="360">
              <param name="movie" value="<?=base_url()?>flash/bcastr3.swf">
              <param name="quality" value="high">
              <param name=scale value=noscale>
              <param name="LOOP" value="false">
              <param name="menu" value="false">
              <param name="wmode" value="transparent">
              <param name="FlashVars" value="bcastr_file=<?=base_url()?>images/ad1.jpg&bcastr_link= ">
              <embed src="<?=base_url()?>flash/bcastr3.swf" width="960" height="360" loop="false" 
             FlashVars="bcastr_file=<?=base_url()?>images/ad1.jpg&bcastr_link="
               quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" salign="T" name="scriptmain" menu="false" wmode="transparent"></embed>
              </object>
        </div>
    </div>    

    <!--main content start-->    
    <div id="main_container" >
        <div class="main_content">
            <div class="main_left">
              <div class="main_title">
                  <div class="main_titlename">最新动态 <span>HOT NEWS</span></div>
                  <div class="main_more"><a href="#">MORE >></a></div>
                  
              </div>
              <div class="main_newslist" >
                  <table borer="0" width="100%" class="main_newslist_list">
                    <?foreach ($list as $row):?>
                      <tr>
                      <td width="10%" align="center">·</td>
                      <td width="60%"><?=$row->blog_title?></td>
                      <td><?=date('Y-m-d',strtotime($row->blog_datetime))?></td>
                      </tr>                      
                    <?endforeach;?> 
                  </table>
              </div>
            </div>
            <div class="main_center">
              <div class="main_title">
                  <div class="main_titlename">楼层简介 <span>FLOOR INTRO</span></div>
                  <div class="main_more"><a href="#">MORE >></a></div>
                  
              </div>
              <div>
                <div class="f_t">
                  <ul>
                    <li id="l1">1层</li>
                    <li id="l2">2层</li>
                    <li id="l3">3层</li>
                  </ul>
                </div>
                <div class="f_l clear" >
                  <div id="t1">休闲餐饮、台湾精品果蔬、高档日用生活必需品周边社区商业配套</div>
                  <div id="t2">6-12岁儿童生活主题区，家饰家纺区、女性购物、少儿教育机构、儿童文体用品、儿童娱乐、儿童品牌服饰，儿童数码学习教育器材</div>
                  <div id="t3">娱乐天地、休闲中心、主题餐厅、服务中心</div>
                </div>
              </div>
            </div>
            <div class="main_right">
              <div class="main_title">
                  <div class="main_titlename">联系方式 <span>CONTACT</span></div>
                  <div class="main_more"><a href="#">MORE >></a></div>
                  
              </div>
              <div>
                  <div style="margin-left:10px; margin-bottom:20px; margin-top:10px;"><img src="<?=base_url()?>images/main_contact.jpg" alt="" /></div>
                  <div style="margin-left:5px;"><img src="<?=base_url()?>images/vippic.jpg" alt="" /></div>
              </div>
            </div>
            <div class="main_2">
              <div class="main_title">
                  <div class="main_titlename">最新商铺 <span>NEW SHOP</span></div>
                  <div class="main_more"><a href="#">MORE >></a></div>
                  
              </div>
              <div class="main_piclist"> 
                
                <ul>
                <?foreach ($shoplist as $row):?>
                  <li>
                    <img src="<?=base_url()?><?=$row->shop_images?>" width="125" height="170" alt="" /><br /><a href="#"><?=$row->shop_title?></a></li>
                <?endforeach;?> 
                </ul>
                
              </div>
            </div>
              
        </div>
    </div>    
    <!--main content start--> 


<!--fooer start-->
            <div id="footer">
                <div class="footer_top">
                </div>
                <div class="clear"></div>
                <div class="footer_mid" align="center">
                    <ul>
                        
                        <li><a href="#">联系我们</a></li><li>|</li>
                        <li><a href="#">关于我们</a></li>
                        <li>|</li>
                        <li class="copyright">版权所有 昆山正佳房产投资有限公司</li>
                        <li class="copyright"><a href="#" target="_blank">苏ICP备05077052号</a></li>
                        <li class="copyright">苏公网安备110108003162号</li>
                    </ul>                
                </div>
                
            </div>
<!--footer close-->
</body>
</html>
