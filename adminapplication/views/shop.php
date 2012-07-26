
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://www.sh-an.com/favicon.ico" />
<link href="<?=base_url()?>css/layout3.css" type="text/css" rel="stylesheet" /> 
<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
<style type="text/css">
  body{
    font-size: 14px;
    line-height: 25px;

  }
  table ,td{
    padding: 10px;
  }
  a{ text-decoration: none;}
  a:hover{
    text-decoration: underline;
  }

</style>

<title></title>
</head>
<body>
    
<table width="1024" height="100%" bgcolor="#F5F5F5">
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">后台管理</td>
  </tr>
  <tr>
    <td  bgcolor="#FFFFFF" width="20%" valign="top">
      <a href="<?=base_url()?>admin.php/main">新闻管理</a>
      <a href="<?=base_url()?>admin.php/main/addnews">添加新闻</a>
      <br>
      <br>
      <a href="<?=base_url()?>admin.php/shop">店铺管理</a>
      <a href="<?=base_url()?>admin.php/shop/addshop">添加店铺</a>

    </td>
    <td  bgcolor="#FFFFFF" >

      <ul>
        <?foreach ($shop as $row):?>
          <li> · 店铺标题：<?=$row->shop_title?> -------------------<a href="<?=base_url()?>admin.php/shop/delshop/<?=$row->shop_id?>">删除</a></li>
        <?endforeach;?> 
      </ul>
    </td>
  </tr>
</table>

</body>
</html>
