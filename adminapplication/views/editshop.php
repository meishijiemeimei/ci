
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://www.sh-an.com/favicon.ico" />
<link href="<?=base_url()?>css/layout3.css" type="text/css" rel="stylesheet" /> 
<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
<link rel="stylesheet" href="<?=base_url()?>editer/themes/default/default.css" />
  <link rel="stylesheet" href="<?=base_url()?>editer/plugins/code/prettify.css" />
  <script charset="utf-8" src="<?=base_url()?>editer/kindeditor.js"></script>
  <script charset="utf-8" src="<?=base_url()?>editer/lang/zh_CN.js"></script>
  <script charset="utf-8" src="<?=base_url()?>editer/plugins/code/prettify.js"></script>
  <script>
    KindEditor.ready(function(K) {
      var editor1 = K.create('textarea[name="content1"]', {
        cssPath : '<?=base_url()?>editer/plugins/code/prettify.css',
        uploadJson : '<?=base_url()?>editer/php/upload_json.php',
        fileManagerJson : '<?=base_url()?>editer/php/file_manager_json.php',
        allowFileManager : true,
        afterCreate : function() {
          var self = this;
          K.ctrl(document, 13, function() {
            self.sync();
            K('form[name=addshop]')[0].submit();
          });
          K.ctrl(self.edit.doc, 13, function() {
            self.sync();
            K('form[name=addshop]')[0].submit();
          });
        }
      });
      K('#image1').click(function() {
          editor1.loadPlugin('image', function() {
            editor1.plugin.imageDialog({
              imageUrl : K('#url1').val(),
              clickFn : function(url, title, width, height, border, align) {
                K('#url1').val(url);
                editor1.hideDialog();
              }
            });
          });
        });
      prettyPrint();
    });
  </script>


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
    <td  bgcolor="#FFFFFF" width="20%" valign="top"><a href="<?=base_url()?>admin.php/shop">产品管理</a></td>
    <td  bgcolor="#FFFFFF" >

      <?foreach ($shop as $row):?>
        <form id="addshop" name="addshop" action="<?=base_url()?>admin.php/shop/editshop_update/<?=$row->shop_id?> " method="post">
        标题： 
          <input name="title" type="text" id="title" value="<?=$row->shop_title?>" />
          产地：<input type="text" name="shop_area" id="shop_area" value="<?=$row->shop_area?>"  />
        <br>
        类别： 
          <select  name="sortid1" id="sortid1" >
            
            
            <?foreach ($shopsort1 as $row1):?>
            <?php if ($row1->shop_sort_id1 == $row->shop_sort_id1): ?>
            <option value="<?=$row1->shop_sort_id1?>" selected="selected"   ><?=$row1->shop_sort_title1?></option>
            <?php else: ?>
            <option value="<?=$row1->shop_sort_id1?>"><?=$row1->shop_sort_title1?></option>
            <?php endif; ?>
            <?endforeach;?> 
          </select>
          
          
          <select  name="sortid2" id="sortid2" >
            
            
            <?foreach ($shopsort2 as $row1):?>
            <?php if ($row1->shop_sort_id2 == $row->shop_sort_id2): ?>
            <option value="<?=$row1->shop_sort_id2?>" selected="selected"   ><?=$row1->shop_sort_title2?></option>
            <?php else: ?>
            <option value="<?=$row1->shop_sort_id2?>"><?=$row1->shop_sort_title2?></option>
            <?php endif; ?>
            <?endforeach;?> 
          </select>
          
        <br>
        缩略图： 
        <input type="text" name="shop_images" id="url1" value="<?=$row->shop_images?>" /> <input type="button" id="image1" value="选择图片" />（网络图片 + 本地上传）
        <br>
        描述内容： 
        <textarea  name="content1" id="content1" style="width:700px;height:300px;visibility:hidden;"  /><?=stripslashes($row->shop_content)?> 
        </textarea>
        <br>
        <input type="submit" name="button" style="margin-left:80px;" value="确认">
        </form>
       <?endforeach;?> 
    </td>
  </tr>
</table>

</body>
</html>
