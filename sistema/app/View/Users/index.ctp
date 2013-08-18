

<h1>Usuários do Sistema</h1>


<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <? foreach ($users as $user){ ?>
    <tr>
        <td><?php echo $user['User']['nome']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
        <td>
            <?php echo $this->Html->link('Visualizar', array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        
    </tr>
    <? } ?>

</table>