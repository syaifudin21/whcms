<?php
/* Smarty version 3.1.48, created on 2024-03-20 02:58:46
  from '/Users/msyaifudin/www/whmcs_v890_full/whmcs/admin/templates/blend/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65fa50e6dcbea5_94440482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '720a22fdbab650d0b687b4d8b4939f7627a5a5f1' => 
    array (
      0 => '/Users/msyaifudin/www/whmcs_v890_full/whmcs/admin/templates/blend/footer.tpl',
      1 => 1709629276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fa50e6dcbea5_94440482 (Smarty_Internal_Template $_smarty_tpl) {
?>        </div>
        <div class="clear"></div>
    </div>

    <div class="footerbar">
        <div class="copyright">
            <!-- Removal of the WHMCS copyright notice is strictly prohibited -->
            <!-- Branding removal entitlement does not permit this line to be removed -->
            Copyright &copy;
            <a href="https://www.whmcs.com/" target="_blank">WHMCS</a> <?php echo date('Y');?>
.
            All Rights Reserved.
        </div>
        <div class="links">
            <a href="https://www.whmcs.com/report-a-bug" target="_blank">Report a Bug</a>
            |
            <a href="https://docs.whmcs.com/" target="_blank">Documentation</a>
            |
            <a href="https://www.whmcs.com/contact" target="_blank">Contact Us</a>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/intellisearch-results.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }
}
