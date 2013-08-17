<h1>Usuários do Sistema</h1>


<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <? foreach ($usuarios as $usuario){ ?>
    <tr>
        <td><?php echo $usuario['Usuario']['nome']; ?></td>
        <td><?php echo $usuario['Usuario']['email']; ?></td>
        <td>
            <?php echo $this->Html->link('Visualizar', array('controller' => 'usuarios', 'action' => 'view', $usuario['Usuario']['id'])); ?>
        </td>
        
    </tr>
    <? } ?>

</table>