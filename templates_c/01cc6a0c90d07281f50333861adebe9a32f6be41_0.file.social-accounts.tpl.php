<?php
/* Smarty version 3.1.48, created on 2024-03-20 02:40:04
  from '/Users/msyaifudin/www/whmcs_v890_full/whmcs/templates/twenty-one/includes/social-accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65fa4c84a98972_64288708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01cc6a0c90d07281f50333861adebe9a32f6be41' => 
    array (
      0 => '/Users/msyaifudin/www/whmcs_v890_full/whmcs/templates/twenty-one/includes/social-accounts.tpl',
      1 => 1709629280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa4c84a98972_64288708 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['socialAccounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
    <li class="list-inline-item">
        <a class="btn btn-icon mb-1" href="<?php echo $_smarty_tpl->tpl_vars['account']->value->getUrl();?>
" target="_blank">
            <i class="<?php echo $_smarty_tpl->tpl_vars['account']->value->getFontAwesomeIcon();?>
"></i>
        </a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
