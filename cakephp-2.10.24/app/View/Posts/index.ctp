<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<table>
	<tr>
		<th>Id</th>
		<th>Título</th>
		<th>Deletar</th>
		<th>Editar</th>
	</tr>

	<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo as informações dos posts -->

	<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo $post['Post']['id']; ?></td>
			<td>
				<?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
			</td>
			<td>
				<?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $post['Post']['id']),
						array('confirm' => 'Are you sure?'));
				?>
			</td>
			<td>
				<?php echo $this->Form->postLink(
						'Edit',
						array('action' => 'edit', $post['Post']['id']),
						array('confirm' => 'Are you sure?'));
				?>
			</td>
			<td><?php echo $post['Post']['created']; ?></td>
		</tr>
	<?php endforeach; ?>

</table>
