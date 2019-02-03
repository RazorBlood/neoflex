<?php
/* Smarty version 3.1.33, created on 2019-02-03 19:46:23
  from 'C:\OSPanel\domains\neoflex\application\views\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c571adff03df5_60536760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e71ab4f7d16910beb66cbec1ccd70241f00d092d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\neoflex\\application\\views\\article.tpl',
      1 => 1549212380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c571adff03df5_60536760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\neoflex\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>

    <div class="articles-item">
        <div class="articles-item-left">
            <p class="articles-item-title"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</p>
            <div class="articles-item-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['text'],200);?>
</div>
        </div>
        <div class="articles-item-right">
            <p class="articles-item-name"><?php echo $_smarty_tpl->tpl_vars['article']->value['author_surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['author_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['author_patronymic'];?>
</p>
            <button type="button" class="articles-item-btn" data-article="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">Читать >>></button>
        </div>
    </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
