<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-21 19:09:40
         compiled from "E:\server2go\htdocs\template\sin_table.html" */ ?>
<?php /*%%SmartyHeaderCode:1258555e1154eaf645-05810570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd29a58cbacbc56d9a050471a23f857d221785e8e' => 
    array (
      0 => 'E:\\server2go\\htdocs\\template\\sin_table.html',
      1 => 1432228087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1258555e1154eaf645-05810570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headline' => 0,
    'columns' => 0,
    'columninfo' => 0,
    'sines' => 0,
    'sine' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555e1155162807_02531132',
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
          <tr valign="top" align="center">
            <?php  $_smarty_tpl->tpl_vars['columninfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['columninfo']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['columns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['columninfo']->key => $_smarty_tpl->tpl_vars['columninfo']->value) {
$_smarty_tpl->tpl_vars['columninfo']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['columninfo']->key;
?>
              <th><font color="black"><?php echo $_smarty_tpl->tpl_vars['columninfo']->value['columnname'];?>
</font></th>
            <?php } ?>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['sine'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sine']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sine']->key => $_smarty_tpl->tpl_vars['sine']->value) {
$_smarty_tpl->tpl_vars['sine']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['sine']->key;
?>
            <tr>
              <td><font color="black"><?php echo $_smarty_tpl->tpl_vars['sine']->value['degree'];?>
</font></td>
              <td><font color="black"><?php echo $_smarty_tpl->tpl_vars['sine']->value['minute'];?>
</font></td>
              <td><font color="black"><?php echo $_smarty_tpl->tpl_vars['sine']->value['sin'];?>
</font></td>
            </tr>
          <?php } ?>
        </tbody>                                          
      </table>                 
  </body>            
</html>                            
    <?php }} ?>
