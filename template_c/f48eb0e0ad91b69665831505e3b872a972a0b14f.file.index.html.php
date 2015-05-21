<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-21 19:04:47
         compiled from "E:\server2go\htdocs\template\index.html" */ ?>
<?php /*%%SmartyHeaderCode:864555e102fda31a7-13503595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f48eb0e0ad91b69665831505e3b872a972a0b14f' => 
    array (
      0 => 'E:\\server2go\\htdocs\\template\\index.html',
      1 => 1431853771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '864555e102fda31a7-13503595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555e10300c23b8_48825894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e10300c23b8_48825894')) {function content_555e10300c23b8_48825894($_smarty_tpl) {?><!DOCTYPE html>                                              
<html>
  <head> 
    <meta charset="utf-8">
    <title>Layout</title>
  </head>
  <body>    
    <div style="width: 800px; height: 800px; position: relative; background-color: #ffffff;
      margin-botton: 5px; margin-left: 5px; margin-right: 5; margin-top: 0;
      padding-top: 0; border: 1px solid #000000;">    
      <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
       
      <?php echo $_smarty_tpl->getSubTemplate ('sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ('content.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>            
  </body>
</html>                        <?php }} ?>
