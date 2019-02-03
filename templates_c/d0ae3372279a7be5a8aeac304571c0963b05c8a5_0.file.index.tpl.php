<?php
/* Smarty version 3.1.33, created on 2019-02-03 19:56:24
  from 'C:\OSPanel\domains\neoflex\application\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c571d38147a10_69055771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0ae3372279a7be5a8aeac304571c0963b05c8a5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\neoflex\\application\\views\\index.tpl',
      1 => 1549212980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c571d38147a10_69055771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="bg--dark"></div>

<div class="wrapper">
    <div class="add-articles">
        <form class="form-wrapper">
            <div class="form-left">
                <input type="text" name="title" placeholder="Заголовок статьи">

                <textarea name="text" rows="10" placeholder="Поле ввода текста статьи"></textarea>
            </div>
            <div class="form-right">
                <input type="text" class="surname" name="surname" placeholder="Фамилия">
                <input type="text" class="name" name="name" placeholder="Имя">
                <input type="text" class="patronymic" name="patronymic" placeholder="Отчество">

                <select name="rubric_id">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rubrics']->value, 'rubric');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rubric']->value) {
?>
                        <a class="rubrics-item" data-rubric="<?php echo $_smarty_tpl->tpl_vars['rubric']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['rubric']->value['name'];?>
</a>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['rubric']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rubric']->value['name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>

                <button type="button" class="submit">Опубликовать</button>

            </div>
        </form>
    </div>
    <div class="rubrics-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rubrics']->value, 'rubric');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rubric']->value) {
?>
            <a class="rubrics-item" data-rubric="<?php echo $_smarty_tpl->tpl_vars['rubric']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['rubric']->value['name'];?>
</a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="articles-list">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value)."/article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value)."/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
