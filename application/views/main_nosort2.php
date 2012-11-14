
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
    
    <div id="header"><a href="http://www.df-emall.com/"><img src="<?=base_url()?>images/logo.jpg" alt="" /></a></div>
<!--navigation end-->
        <!--navigation start-->
        <div id="nav">
            <ul class="menu">
            	<?foreach ($shopsort2 as $row):?>
                	<li class="level1-li"><a class="level1-a" href="<?=site_url()?>/blog/index/<?=$row->shop_sort_id2?>/1"><?=$row->shop_sort_title2?></a></li>
                <?endforeach;?> 
                
            </ul>
        </div>
        <!--navigation close-->
   

<!--main content start-->    
    <div id="main_container" >
        <div class="main_content">
            <div class="main_left">
              <div class="main_title">
                  <div class="main_titlename">分类 </div>                  
              </div>
              <div class="main_newslist"  >
                  <table borer="0" width="100%" class="main_newslist_list" >
                    <?foreach ($shopsort1 as $row):?>
                      <tr>
                      <td width="10%" align="center">·</td>
                      <td width="90%"><a href="<?=site_url()?>/main/index/<?=$row->shop_sort_id1?>/1"><?=$row->shop_sort_title1?></a></td>
                  </tr>                      
                    <?endforeach;?> 
                  </table>
              </div>
            </div>
            <div class="main_center">
              <div class="main_title">
                  <div class="main_titlename">当前类别 ：所有类别</div>                  
              </div>
              <div class="main_piclist"> 
                
                <ul>
                    <?foreach ($shoplist as $row):?>
                      <li>
                        <img src="<?=$row->shop_images?>" height="110" alt="" /><br />
                        <div style="text-align:left; font-size:14px; color:#666666;margin-top:10px;width:180; height:25px; overflow:hidden;"><?=$row->shop_title?></a></div>
                        <div style="text-align:left;"><strong>产地</strong>：<?=$row->shop_area?> 
                          <strong>产品ID</strong>：<?=$row->shop_id?> </div>
						<div style="text-align:left;"><strong>品牌</strong>：<?=$row->shop_sort_title1?> 
				        <strong>分类</strong>：<?=$row->shop_sort_title2?> </div>
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
