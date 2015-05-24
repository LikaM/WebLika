<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 13:03:52
         compiled from "E:\server2go\htdocs\template\sin_table.html" */ ?>
<?php /*%%SmartyHeaderCode:1258555e1154eaf645-05810570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd29a58cbacbc56d9a050471a23f857d221785e8e' => 
    array (
      0 => 'E:\\server2go\\htdocs\\template\\sin_table.html',
      1 => 1432379027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1258555e1154eaf645-05810570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555e1155162807_02531132',
  'variables' => 
  array (
    'headline' => 0,
    'sins' => 0,
    'sin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e1155162807_02531132')) {function content_555e1155162807_02531132($_smarty_tpl) {?><!DOCTYPE html>                                              
<html>
  <head>           
    <meta charset="utf-8">
    <title>Sin</title>          
  </head>           
  <body>
    <h1><?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
</h1> 
      <table border=1>
        <thead>
          
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['sin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sin']->key => $_smarty_tpl->tpl_vars['sin']->value) {
$_smarty_tpl->tpl_vars['sin']->_loop = true;
?>
            <tr>
 <td><font color="black"><?php echo $_smarty_tpl->tpl_vars['sin']->value['degree'];?>
</font></td>
              <td><font color="black"><?php echo $_smarty_tpl->tpl_vars['sin']->value['minute'];?>
</font></td>
              <td><font color="black"><?php echo $_smarty_tpl->tpl_vars['sin']->value['sin'];?>
</font></td>
             
            </tr>
          <?php } ?>
        </tbody>                                          
      </table>                 
  </body>            
</html>                                                        
    <?php }} ?>
