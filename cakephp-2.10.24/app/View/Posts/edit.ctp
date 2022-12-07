<!-- File: /app/View/Posts/edit.ctp -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>$(function() {
		var staticBackdrop = document.getElementById('staticBackdrop');
		var myModal = new bootstrap.Modal(staticBackdrop);
		myModal.show();
	});</script>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<h1>Edit Post</h1>
				<?php
				echo $this->Form->create('Post');
				echo $this->Form->input('title');
				echo $this->Form->input('body', array('rows' => '3'));
				echo $this->Form->input('id', array('type' => 'hidden'));
				echo $this->Form->end('Save Post');
				?>
			</div>
			<div class="modal-footer">
<!--				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
<!--				<button type="button" class="btn btn-primary">Understood</button>-->
			</div>
		</div>
	</div>
</div>

