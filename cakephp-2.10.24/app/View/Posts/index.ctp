
<h1>Blog posts</h1>

<!DOCTYPE html>
<html lang="en">
<head>
<!--	<title>Bootstrap Examplo Filtrando dados Tabela</title>-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style>.fundo{background: #62af56} ; .verde{background: #cceecc}; .card {
																		  /* Add shadows to create the "card" effect */
																		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
																		  transition: 0.3s;
																	  }

		/* On mouse-over, add a deeper shadow */
		.card:hover {
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		/* Add some padding inside the card container */
		.container {
			padding: 2px 16px;
		}</style>
</head>
<body class="fundo">

	<div class="container mt-3">
		<h2>O que busca ?</h2>
		<p>
			Digite qualquer informação referente a tabela:
		</p>
		<input class="form-control" id="myInput" type="text" placeholder="Buscar..">
		<br>
		<p>
			<?php  echo $this->Html->link('Adicionar Postagem', array('action' => 'add')); ?></p>



		<table class="table table-bordered">
			<thead>
			<tr class="fundo">
				<th >ID</th>
				<th>Título</th>
				<th>Deletar</th>
				<th>Editar</th>
				<th>Data de criação</th>
			</tr>
			</thead>
			<tbody id="myTable">
			<?php foreach ($posts as $post): ?>

				<tr>
					<td><?php echo $post['Post']['id']; ?></td>
					<td >

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
			</tbody>
		</table>

		<p>Todos os direitos reservados.</p>
</div>

<script>
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
</script>

<script> </script>

</body>
</html>






<!--<table class="table">-->
<!--	<tr >-->
<!--		<th>Id</th>-->
<!--		<th>Title</th>-->
<!--		<th>Actions</th>-->
<!--		<th>Edit</th>-->
<!--		<th>Data de Criação</th>-->
<!--	</tr>-->
<!---->
<!--	< Here's where we loop through our $posts array, printing out post info -->
<!---->
<!--	--><?php //foreach ($posts as $post): ?>
<!--		<tr>-->
<!--			<td>--><?php //echo $post['Post']['id']; ?><!--</td>-->
<!--			<td>-->
<!--				--><?php
//				echo $this->Html->link(
//						$post['Post']['title'],
//						array('action' => 'view', $post['Post']['id'])
//				);
//				?>
<!--			</td>-->
<!--			<td>-->
<!--				--><?php
//				echo $this->Form->postLink(
//						'Delete',
//						array('action' => 'delete', $post['Post']['id']),
//						array('confirm' => 'Are you sure?')
//				);
//				?>
<!--			</td>-->
<!--			<td>-->
<!--				--><?php
//				echo $this->Html->link(
//						'Edit', array('action' => 'edit', $post['Post']['id'])
//				);
//				?>
<!--			</td>-->
<!--			<td>-->
<!--				--><?php //echo $post['Post']['created']; ?>
<!--			</td>-->
<!--		</tr>-->
<!--	--><?php //endforeach; ?>
<!---->
<!--</table>-->
