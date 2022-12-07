<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!------ Include the above in your HEAD tag ---------->
<style>.card-banner { display: flex; position: relative; overflow: hidden; background-color: #fff; background-size: cover; border-radius: 5px; } .card-banner .card-body { background-size: cover; position: relative; z-index: 10; } /* overlay effects */ .overlay-cover { top: 0; left: 0; right: 0; bottom: 0; position: absolute; width: 100%; } .overlay { background-color: rgba(0,0,0,0.65); z-index: 10; padding: 1.25rem; color: #fff; } .overlay-grad { position: relative; } .overlay-grad::before { position: absolute; content: ""; display: block; top: 0; left: 0; right: 0; bottom: 0; background: #e83e8c; background: -webkit-gradient(linear, left top, right bottom, from(#007bff), to(#e83e8c)); background: linear-gradient(to bottom right, #007bff, #e83e8c); opacity: .6; transition: .5s; } .overlay-grad:hover:before{ opacity: .9; }
</style>
<h1><strong>POSTAGENS DO BLOG</strong></h1>
<?php  echo $this->Html->link('Adicionar Postagem', array('action' => 'add')); ?></p>
<div class="container">
	<br>
<!--	<p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>-->
	<hr>

	<div class="row">
		<aside class="col-sm-4">
			<p>Card banner overlay </p>
			<div class="card-banner overlay-grad" style="height:250px; background-image: url('http://bootstrap-ecommerce.com/main/images/posts/1.jpg');">
				<div class="card-body text-white">
					<h5 class="card-title">Primary text as title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			<!-- card.// -->
		</aside>
		<aside class="col-sm-4">
			<p>Card banner overlay dark </p>
			<div class="card-banner" style="height:250px; background-image: url('http://bootstrap-ecommerce.com/main/images/posts/2.jpg');">
				<article class="overlay overlay-cover d-flex align-items-center justify-content-center">
					<div class="text-center">
						<h5 class="card-title">Primary text as title</h5>
						<a href="#" class="btn btn-warning btn-sm"> View more </a>
					</div>
				</article>
			</div>
			<!-- card.// -->
		</aside>
		<aside class="col-sm-4">
			<p>Card banner overlay text </p>
			<div class="card-banner align-items-end" style="height:250px; background-image: url('http://bootstrap-ecommerce.com/main/images/posts/5.jpg');">
				<article class="overlay m-4 w-100">
					<h5 class="card-title">Primary text as title</h5>
					<a href="#" class="btn btn-warning btn-sm"> View more </a>
				</article>
			</div>
			<!-- card.// -->
		</aside>
	</div>
</div>
<br><br>
<article class="bg-secondary mb-3">
	<div class="card-body text-center">
		<h4 class="text-white">HTML UI KIT <br> Ready to use Bootstrap 4 components and templates </h4>
		<p class="h5 text-white"> for Ecommerce, marketplace, booking websites and product landing pages</p>
		<br>
		<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com <i class="fa fa-window-restore "></i></a></p>
	</div>
	<br><br>
</article>






<!---->
<!---->
<!---->
<!--<h1>Blog posts</h1>-->
<!--<p>-->
<!--	--><?php // echo $this->Html->link('Adicionar Postagem', array('action' => 'add')); ?><!--</p>-->
<!---->
<!--<table>-->
<!--	<tr>-->
<!--		<th>Id</th>-->
<!--		<th>Title</th>-->
<!--		<th>Actions</th>-->
<!--		<th>Edit</th>-->
<!--		<th>Data de Criação</th>-->
<!--	</tr>-->
<!---->
<!--	<!-- Here's where we loop through our $posts array, printing out post info -->-->
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
