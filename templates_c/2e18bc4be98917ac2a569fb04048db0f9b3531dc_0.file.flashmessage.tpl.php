<?php
/* Smarty version 3.1.48, created on 2024-03-20 02:44:13
  from '/Users/msyaifudin/www/whmcs_v890_full/whmcs/templates/twenty-one/includes/flashmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65fa4d7db02416_45106894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e18bc4be98917ac2a569fb04048db0f9b3531dc' => 
    array (
      0 => '/Users/msyaifudin/www/whmcs_v890_full/whmcs/templates/twenty-one/includes/flashmessage.tpl',
      1 => 1709629280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa4d7db02416_45106894 (Smarty_Internal_Template $_smarty_tpl) {
$_prefixVariable1 = get_flash_message();
$_smarty_tpl->_assignInScope('message', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'success') {?>success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'warning') {?>warning<?php } else { ?>info<?php }
if ((isset($_smarty_tpl->tpl_vars['align']->value))) {?> text-<?php echo $_smarty_tpl->tpl_vars['align']->value;
}?>">
        <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>

    </div>
<?php }
}
}
