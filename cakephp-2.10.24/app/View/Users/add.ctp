
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> <!------ Include the above in your HEAD tag ---------->
<style>form { margin: 0px 10px; } h2 { margin-top: 2px; margin-bottom: 2px; } .container { max-width: 360px; } .divider { text-align: center; margin-top: 20px; margin-bottom: 5px; } .divider hr { margin: 7px 0px; width: 35%; } .left { float: left; } .right { float: right; }
</style>
<div class="container">
	<div class="row">
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="POST" action="#" role="form">
					<div class="form-group">
						<h2>Registro de usuário</h2>
					</div>

					<div >
						<?php echo $this->Form->create('User'); ?>
						<fieldset>
							<legend><?php echo __('Criar Usuário'); ?></legend>
							<?php echo $this->Form->input('username');
							echo $this->Form->input('password');
							echo $this->Form->input('role', array(
									'options' => array('admin' => 'Admin', 'author' => 'Author')
							));
							?>
						</fieldset>
<!--						--><?php //echo $this->Form->end(__('Submit')); ?>
						<div class="form-group" style="padding-top: 12px;"> <button id="signinSubmit" type="submit" class="btn btn-success btn-block">Registrar</button>
							<?php  $this->Form->end(__('add')); ?>
						</div>
					</div>


					<div class="form-group divider">
						<hr class="left">
						<small>Bem vindo</small>
						<hr class="right">
					</div>
					<p class="form-group"><a href="/users/login" class="btn btn-info btn-block">Voltar</a></p>
					<p class="form-group">© 2022 Rennan Fabrício. Todos os direitos reservados.</a>.</p>
				</form>
				
			</div>
		</div>
	</div>
</div>





