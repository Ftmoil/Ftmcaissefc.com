<?php
/* Smarty version 3.1.33, created on 2021-07-02 11:25:58
  from 'C:\wamp64\www\ftm\ui\theme\ibilling\welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60df3006402765_85355235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bede6bf130e8d3b48370673bafd8d1d3e7c59dcc' => 
    array (
      0 => 'C:\\wamp64\\www\\ftm\\ui\\theme\\ibilling\\welcome.tpl',
      1 => 1625141408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df3006402765_85355235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119006861760df30063b9566_78224784', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_119006861760df30063b9566_78224784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_119006861760df30063b9566_78224784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
!

        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
