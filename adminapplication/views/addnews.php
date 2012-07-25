
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
            K('form[name=addnews]')[0].submit();
          });
          K.ctrl(self.edit.doc, 13, function() {
            self.sync();
            K('form[name=addnews]')[0].submit();
          });
        }
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
    <td  bgcolor="#FFFFFF" width="20%" valign="top"><a href="<?=base_url()?>admin.php/main">新闻管理</a></td>
    <td  bgcolor="#FFFFFF" >

      
        <form id="addnews" name="addnews" action="<?=base_url()?>admin.php/main/addnews_insert" method="post">
        新闻标题： <input type="text" name="title" id="title" />
        <br>
        新闻内容： <textarea  name="content1" id="content1" style="width:700px;height:300px;visibility:hidden;"  /></textarea>
        <br>
        <input type="submit" name="button" style="margin-left:80px;" value="确认">
        </form>
       
    </td>
  </tr>
</table>

</body>
</html>
