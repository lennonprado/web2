<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2016-10-19 18:45:39
=======
/* Smarty version 3.1.30, created on 2016-10-19 16:07:14
>>>>>>> refs/remotes/origin/categorias
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_5807a3335df619_94442362',
=======
  'unifunc' => 'content_58077e121cdfe7_26703597',
>>>>>>> refs/remotes/origin/categorias
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '918059b507ce2a140e06ae60a0894face9d6f190' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListado.tpl',
<<<<<<< HEAD
      1 => 1476895536,
=======
      1 => 1476885969,
>>>>>>> refs/remotes/origin/categorias
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5807a3335df619_94442362 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_58077e121cdfe7_26703597 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> refs/remotes/origin/categorias
?>

<section class="container">
   <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
      <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
    <?php }?>
  <div class="row">
    <h4>Listado de productos</h4>
    <div class="row destacados" >
      <p>
         <a href="/maquinarias/admin/productos/agregar" class="btn btn-success" role="button">Agregar nuevo producto</a>
      </p>
         <div class="row">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="/maquinarias/<?php echo $_smarty_tpl->tpl_vars['item']->value['imagenes_des'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
" height="200" >
              <div class="caption">
                <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
</p>
                <p>
                  <a href="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_producto'];?>
" class="btn btn-primary" role="button">Modificar</a>
                  <a href="/maquinarias/admin/productos/borrar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_producto'];?>
" class="btn btn-default" role="button">Eliminar</a>
                </p>
              </div>
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </div>
    </div>
  </div>
</section>
<?php }
}
