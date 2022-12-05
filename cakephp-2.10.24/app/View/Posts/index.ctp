<!--<link rel= "stylesheet"  href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integridade= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin = "anônimo" >-->
<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Actions</th>
		<th>Edit</th>
		<th>Created</th>
	</tr>

	<!-- Here's where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo $post['Post']['id']; ?></td>
			<td>
				<?php
				echo $this->Html->link(
						$post['Post']['title'],
						array('action' => 'view', $post['Post']['id'])
				);
				?>
			</td>
			<td>
				<?php
				echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $post['Post']['id']),
						array('confirm' => 'Are you sure?')
				);
				?>
			</td>
			<td>
				<?php
				echo $this->Html->link(
						'Edit', array('action' => 'edit', $post['Post']['id'])
				);
				?>
			</td>
			<td>
				<?php echo $post['Post']['created']; ?>
			</td>
		</tr>
	<?php endforeach; ?>

</table>
