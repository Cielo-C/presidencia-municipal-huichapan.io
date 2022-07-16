<?php
/* Smarty version 3.1.40, created on 2021-11-03 16:34:34
  from '/Applications/MAMP/htdocs/programacion_web/proyecto_de_libros/05_desarrollo/aplicacion_web_capas/templates/menu.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6182ba1a506145_78252239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d74eb50ddf231cc4187265db3f849e86ac06636' => 
    array (
      0 => '/Applications/MAMP/htdocs/programacion_web/proyecto_de_libros/05_desarrollo/aplicacion_web_capas/templates/menu.html.tpl',
      1 => 1635957271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6182ba1a506145_78252239 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> Sistema de Libros </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catálogos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="index.php?modulo=registroLibros">Libros</a></li>
            <li><a class="dropdown-item" href="index.php?modulo=listarLibros">Listar Libros</a></li>
            <li><a class="dropdown-item" href="#">Géneros</a></li>
            <li><a class="dropdown-item" href="#">Editoriales</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?modulo=acercaDe">Acerca de ... </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php }
}
