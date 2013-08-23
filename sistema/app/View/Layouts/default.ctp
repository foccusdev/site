<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Foccus Training - Sistema Interno</title>
    <? echo $this->Html->css('estilo'); ?>
    <?php echo $this->fetch('script'); ?>
    <?php echo $this->fetch('css'); ?>
  </head>


</head>

<body>
  <div id="container">

    <div id="header">
      <div class="menu-sistema float-left">

        <ul>
          <li class="menu-item-home <?= ($this->params['controller'] == 'users') ? 'selecionado' : '' ?>">
            <?= $this->Html->link('Usuários', array('controller' => 'users', 'action' => 'index')); ?>
          </li>
          <li class="menu-item-home <?= ($this->params['controller'] == 'Matriculas') ? 'selecionado' : '' ?>">
            <?= $this->Html->link('Matrículas', array('controller' => 'Matriculas', 'action' => 'index')); ?>
          </li>
          <li class="menu-item-home <?= ($this->params['controller'] == 'atividades') ? 'selecionado' : '' ?>">
            <?= $this->Html->link('Atividades', array('controller' => 'atividades', 'action' => 'index')); ?>
          </li>
          <li class="menu-item-home <?= ($this->params['controller'] == 'planos') ? 'selecionado' : '' ?>">
            <?= $this->Html->link('Planos', array('controller' => 'planos', 'action' => 'index')); ?>
          </li>
        </ul>
        <div class="clear"></div>

      </div>   
      <? if ($this->Session->read('Auth.User')) { ?>
        <span class="logout float-right"><?= $this->Html->link('X Sair', array('controller' => 'users', 'action' => 'logout')); ?></span>
      <? } ?>
      <div class="clear"></div>
    </div>

    <div class="borda-topo"></div>

    <div id="content">

      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
    </div>
  </div>
  <?php echo $this->element('sql_dump'); ?>
</body>
</html>
