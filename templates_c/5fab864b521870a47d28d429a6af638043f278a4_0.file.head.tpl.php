<?php
/* Smarty version 3.1.48, created on 2024-03-20 02:40:04
  from '/Users/msyaifudin/www/whmcs_v890_full/whmcs/templates/twenty-one/includes/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65fa4c84a544a1_78587370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fab864b521870a47d28d429a6af638043f278a4' => 
    array (
      0 => '/Users/msyaifudin/www/whmcs_v890_full/whmcs/templates/twenty-one/includes/head.tpl',
      1 => 1709629280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa4c84a544a1_78587370 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Styling -->
<?php echo \WHMCS\View\Asset::fontCssInclude('open-sans-family.css');?>

<link href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'all.min.css'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet">
<link href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'theme.min.css'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/assets/css/fontawesome-all.min.css" rel="stylesheet">
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['assetExists'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['assetExists'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'assetExists'))) {
throw new SmartyException('block tag \'assetExists\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('assetExists', array('file'=>"custom.css"));
$_block_repeat=true;
echo $_block_plugin1::assetExists(array('file'=>"custom.css"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<link href="<?php echo $_smarty_tpl->tpl_vars['__assetPath__']->value;?>
" rel="stylesheet">
<?php $_block_repeat=false;
echo $_block_plugin1::assetExists(array('file'=>"custom.css"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo '<script'; ?>
>
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.title"),$_smarty_tpl ) ));?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo $_smarty_tpl->tpl_vars['mdeLocale']->value;
} else { ?>en<?php }?>',
        saved = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saved"),$_smarty_tpl ) ));?>
',
        saving = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saving"),$_smarty_tpl ) ));?>
',
        whmcsBaseUrl = "<?php echo \WHMCS\Utility\Environment\WebHelper::getBaseUrl();?>
",
        requiredText = '<?php echo addslashes(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.required"),$_smarty_tpl ) ));?>
',
        recaptchaSiteKey = "<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {
echo $_smarty_tpl->tpl_vars['captcha']->value->recaptcha->getSiteKey();
}?>";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['assetPath'][0], array( array('file'=>'scripts.min.js'),$_smarty_tpl ) );?>
?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewticket" && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
  <meta name="robots" content="noindex" />
<?php }
}
}
