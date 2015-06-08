<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 21:25:13
         compiled from "E:\server2go\htdocs\template\image_upload.html" */ ?>
<?php /*%%SmartyHeaderCode:6074556e00a77ced56-90690746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805049644938ca62a315156e8c4d1404902ecaa0' => 
    array (
      0 => 'E:\\server2go\\htdocs\\template\\image_upload.html',
      1 => 1433273105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6074556e00a77ced56-90690746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556e00a7a41e08_71417356',
  'variables' => 
  array (
    'headline' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556e00a7a41e08_71417356')) {function content_556e00a7a41e08_71417356($_smarty_tpl) {?><!DOCTYPE html>                                              
<html>
  <head>             
    <meta charset="utf-8">
    <title>Картинки</title>          
  </head>            
  <body>
    <h1><?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
</h1>
    <form action="image_upload.php" method="POST"
      enctype="multipart/form-data">   
      <label>Фото</label><br/>    
      <input type="file" name="Картинки"/><br/>     
      <input type="submit" value="Показать">
    </form>                                
  </body>
</html>                            
<?php }} ?>
