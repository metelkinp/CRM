<?php /* Smarty version 2.6.29, created on 2017-05-15 10:33:53
         compiled from include/SugarFields/Fields/Base/ListView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_fetch', 'include/SugarFields/Fields/Base/ListView.tpl', 42, false),)), $this); ?>

<?php echo smarty_function_sugar_fetch(array('object' => $this->_tpl_vars['parentFieldArray'],'key' => $this->_tpl_vars['col']), $this);?>