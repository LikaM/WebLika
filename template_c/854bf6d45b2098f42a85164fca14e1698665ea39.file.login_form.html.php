<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-07 20:50:25
         compiled from "E:\server2go\htdocs\template\login_form.html" */ ?>
<?php /*%%SmartyHeaderCode:19024557466b4076c24-37819219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '854bf6d45b2098f42a85164fca14e1698665ea39' => 
    array (
      0 => 'E:\\server2go\\htdocs\\template\\login_form.html',
      1 => 1433702851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19024557466b4076c24-37819219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557466b40c5a13_48048475',
  'variables' => 
  array (
    'headline' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557466b40c5a13_48048475')) {function content_557466b40c5a13_48048475($_smarty_tpl) {?><!DOCTYPE html>                                              
<html>
  <head>           
    <meta charset="utf-8">
    <title>Login</title>          
  </head>           
  <body>
    <h1><?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
</h1>
    <form action="index.php" method="post"
      enctype="application/x-www-urlencoded">   
      <label>Login</label><br/>    
      <input type="text" name="login"/><br/>
      
      <label>Password</label><br/>
      <input type="text" name="password"/><br/>

      <input type="submit" value="Submit">
    </form> 
  </body>
</html>                            
<?php }} ?>
