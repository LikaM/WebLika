<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-25 20:35:22
         compiled from "E:\server2go\htdocs\template\survey_form.html" */ ?>
<?php /*%%SmartyHeaderCode:3241555636b6adb1e26-67393588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaadc27dc2df31991590edc77a32b97a22f5b049' => 
    array (
      0 => 'E:\\server2go\\htdocs\\template\\survey_form.html',
      1 => 1431781807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3241555636b6adb1e26-67393588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headline' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55636b6ae80171_09487340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55636b6ae80171_09487340')) {function content_55636b6ae80171_09487340($_smarty_tpl) {?><!DOCTYPE html>                                              
<html>
  <head>           
    <meta charset="utf-8">
    <title>Survey</title>          
  </head>           
  <body>
    <h1><?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
</h1>
    <form action="survey_form.php" method="post"
      enctype="application/x-www-urlencoded">   
      <label>First Name</label><br/>    
      <input type="text" name="first_name"/><br/>
      
      <label>Last Name</label><br/>
      <input type="text" name="last_name"/><br/>

      <label>Email: </label><br/>
      <input type="text" name="email"/><br/>
                                    
      <label>Age: </label><br/> 
      <input type="number" name="age"/><br/><br/>

      <input type="submit" value="Submit">
    </form> 
  </body>
</html>                            
<?php }} ?>
