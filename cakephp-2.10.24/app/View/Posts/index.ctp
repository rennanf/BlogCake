<!DOCTYPE html>
<html lang="en">
<head class="top">

	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<style>

		.row.content {height: 1500px }

		.top{
			background-color: #f1f1f1;
		}

		.sidenav {
			background-color: #f1f1f1;
			height: 100%;
		}


		footer {
			background-color: #555;
			color: white;
			padding: 15px;
		}


		@media screen and (max-width: 767px) {
			.sidenav {
				height: auto;
				padding: 15px;
			}
			.row.content {height: auto;}
		}
	</style>
</head>
<body>

<div class="container-fluid">
	<div class="row content">
		<div class="col-sm-3 sidenav">
			<h4>Fabricio's Blog</h4>
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#section1">Postagens</a></li>
				<li><a href="#section2">Perfil</a></li>
				<li><a href="#section3">Configurações</a></li>
				<li><a href="users/logout">Logout</a></li>
			</ul><br>
			<div class="input-group">
<!--				<input type="text" class="form-control" placeholder="Search Blog..">-->
				<h4 style="margin-left: 8px">Filtrar por título</h4>
				<input class="form-control" id="myInput" type="text" placeholder="Search.." style="margin-left: 8px">
				<br><br>
				<h4 style="margin-left: 8px">Filtrar por data</h4>

				<form action="" method="POST">
					<div class="row">
						<div>
							<div class="form-group">
								<label>Data inicial -</label>

								<input type="date" name="from_date" value="<?php if(isset($_POST['from_date'])){ echo $_POST['from_date']; } ?>" class="form-control">
								<label>Data final</label>
								<input type="date" name="to_date" value="<?php if(isset($_POST['to_date'])){ echo $_POST['to_date']; } ?>" class="form-control">

							</div>
							<br><br><br>
							<div>
								<button type="submit" class="btn btn-primary" style="margin-left: 8px">filtrar</button>
							</div>


						</div>
					</div>
				</form>
				<script>
						$(document).ready(function(){
						$("#myInput").on("keyup", function() {
							var value = $(this).val().toLowerCase();
							$("#myList li").filter(function() {
								$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						});
					});
				</script>
				<br>
			</div>
		</div>

		<div class="col-sm-9">

			<?php  echo $this->Html->link('Adicionar Postagem', array('action' => 'add')); ?></p>
			<h2><small>Últimas postagens</small></h2>

			<div class="list-group" id="myList">
			<?php foreach ($posts as $post): ?>
			<hr>
			<li><h2><?php
				echo $this->Html->link(
						$post[0]['title'],
						array('action' => 'view', $post[0]['id'])
				);
				?></h2>
			<h5><span class="glyphicon glyphicon-time"></span>

				<?php $date =  $post[0]['created'];
				$date = str_replace('-', '/', $date);
				echo date('d / m / Y', strtotime($date));
				?>
				<?php
				echo $this->Html->link(
						'Edit', array('action' => 'edit', $post[0]['id'])
				);
				?>
				<?php
				echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $post[0]['id']),
						array('confirm' => 'Are you sure?')
				);
				?>

			</h5>

			<h5> ID : <?php echo $post[0]['id']; ?> <span class="label label-danger">Cake</span> <span class="label label-primary">Postagem</span></h5><br>
				</td>
			</tr>
				<p><?php echo h($post[0]['body']); ?></p></p>
			</li>
			<?php endforeach; ?>
			</div>
			<br><br>
			<h4>Deixe um comnetário:</h4>
			<form role="form">
				<div class="form-group">
					<textarea class="form-control" rows="3" required></textarea>
				</div>
				<button type="submit" class="btn btn-success">Adicionar</button>
			</form>
			<br><br>

			<p><span class="badge">2</span> Comentários:</p><br>

			<div class="row">
				<div class="col-sm-2 text-center">
					<img src="data:image/jpeg;base64,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" class="img-circle" height="65" width="65" alt="Avatar">
				</div>
				<div class="col-sm-10">
					<h4> Jorginho do pneu <small>Sep 29, 2021, 9:12 PM</small></h4>
					<p>Muito bom o blog, adorei, melhor blog que já vi na minha vida, além disso a maneira que as informações são passadas é surreal !!</p>
					NOTA 2
					<br>
				</div>
				<div class="col-sm-2 text-center">
					<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBISEhgSERIZEhIYGBIYGBkYGBoYGBgYGRgaGRgYGBocIS4lHB4rHxgYJjgmKy8xNTU1HCQ7QDszPy40NTEBDAwMEA8QHhISHzQhISE0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQ1NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0MTQ0NDQxNP/AABEIAKcBLQMBIgACEQEDEQH/xAAcAAACAQUBAAAAAAAAAAAAAAAAAQIDBAUGBwj/xABBEAACAQIDBAcECAYBAwUAAAABAgADEQQSIQUGMUETIlFhcYGRBzKh0RRCUlNikrHBFSNDcoLhFqLw8TOjwtLi/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAECAwT/xAAhEQEBAQEAAgICAwEAAAAAAAAAARECEiEDMUFRImFxE//aAAwDAQACEQMRAD8A6gglUSCyoJUFoWjhAiRFaSMIEYpKEBASQEBCAwI7QEcAhHCAoRwgKKMwgAhaMRwFaMQkgIEbQtJGAEBWgBJWgBAVoWjtCArQtHC0CNoiJO0CIFO0LSdoiIECIrSdoWgUyJG0qkSNoFFZUEprJiBKBihADFGYjAIRQgSEYiEYgOSEiJIQCEIQCEJZbV2lSwtM1azZUuAO0seAA5nj6QKO29tUsHTD1bm5AAFr9517JoW3faXxp4Wnk5F297XmoGg8dZp++W8rYvEM/Cnoqr2KOF+++pmvM4NwePI/p4iQZ/E70YuxC4hwCc2jsNdBfj3D1kMDvRi6ZFRMRUU3AYZ2KgnmVJsQZroqaa8tDDDXzMp7OHhrCu3bpb89PZMSAtS4GcWA10Fx4jym+LPOGCxrUqjuhtkVAxy394C4APMm4HhOxbibYepTFKsR0gFwAOAHEE9v+4g260LRwlQo4WjtAUI4oBHaAkoEIpO0jAVoERwgK0Vo4WgQIitJkSJEC2WTEgsmIDhCBgIxQMUAjihAkIxIiSECQjkQZIQHCKEBzn/tfqEYOmov1qyi45dR/wBrzoE1vfd6IoKlemagZiBbihCkl++3ZcX7ZLcWS25Hn2ojG+njLVmItfiNJ0HYmDQs4dQbg3k8XsHDsSMlu/5TlfkkuO0+G2bHPQ1zp3/D/wDMyFCgzMrICWstwBx5GZn/AI8q1BlOZD5W7bzb9ibPoq6hVHVy6nme2W/JCfDfy1VNj1UVnanlVhSJuNcyKANOdyT6zavZzUqVMUV6y5Rmvr7pYZltwVcoUHmSy8hpvdbBo1JlsNe7n2zEbFrHBmy0gUdqWdxo5DME0txCFgT/AH8ra2dZ9s+G+o3eMRCSE6OZwhCEIiOEIBCEcBRWkooETFJGKAoQhAREUlFAsxJiQWTEBwMIQImIxmRMAheKECQkgZAGSECQjBkRGIEo5q2399sLhGNMXq1RxVTZVPYzdvgDOe7b9oGMr3Wm4op2JofzcYwdX2vt/C4QXr1VVuSDrOfBRr5nSc329vq2OdaFFBTCsHXMQXcKGzA/VGmtu46znmKxbEkkkseJJuZjlxDhw6MVdSCCOII4SdTZjXNzqV16lRWnTRmFjkVmIte5Hb5iWiVFqdZGv52I8bw2FjXxGESowGaxB7OqxXv7Jg9o9Kj5ujUGxJZH4c8pUgX9J5Lztse6XJLGYqqRrf1BmT2KgzXJuePCYPZVepWAW3PifC8tf4i9R+jpK2TML9fIXBNrk6kAD6vf6SRq2Y69s2utRLDkbEcfjMPVw5p7QFapUCYenlRRqdWTNwA7fPQchL/YmHNNbDLksLZb34a5r85yT2gb0V6uKeiv8ulRq1AMpOZ3W6Z2PKwuAB2njy788+Wa8168dz8zHdcPtTD1NErIx7Mwv6HWXoN+Gs814LeOpa1Q5x2n3vPtmcw+2iR/LqNTParEfpO/jL9PLtd5hOV7t74YinUVK9TpaRIBzastza4bj5GdTBizCU44hHIohCEAhCKAGRkjIwCEIQFCEIFksmJBZMQHCEICMgZMyJgRijMUBiSEgJISCQmq+0HbhwmFC03y1arZAQesqAXdh8Fv+KZnbW1qWDpGtVOl7Ko952PBV9D6GcN3k2zUxlZqtQ8dFUcEUcFH/epvLBi8W5LXvLVm75Os91vLYmBCs8gi2g41klEDedysfaiUB1ps2narHN+paZLH4inrUdBYa8BNX3JpipiHp3sWpVCp/ErKR+4l9j1z2JuVXMxX7WUXsfQzz9851/r2/D3vOfpuW7eHLVUzUwjEm4GuuU2vy4WlHatKn04o9EiN1WRk+tTYkBvHMraf6Mw+x9rBGSpTxVHIpzBaj5GQ6ggggEjT4ixtKu09rYau4qUS7Ymm6Zqn9OohbKQnCwBI0sBrcTPj6rflNljpGGdaFC7EBEQsfBRczgW0ialR6jDrO7u3i7Fj+s7HviD/AA9+sQyvhwwB5M3A/wDTORYnUqe3RvET0fHz/HXj+TresYZ1ytpLmhiCOci9HU668ZQAmnNnMBjGDhr8CvndgP3ndNlbxKEC1gRYLZlBN1sLXA1v4Tz0jlchXiSPhOt4NyNM1wFpC3NTbW/kRNybGb6dMoV0qKHRgyMAVZTcEHgQRxlac62JtRsJiTS1bD1leoF+xUVlFTJ2Bs6tbtzHnN9wmLp1RdHDW49o8Rymbziy6uYoQkUQivHAURElEYEYQigEUcUCzWVBKayoIDEICOBEyJkjImBEyMkZGRTEciJyzfzfOo1R8LhnKU0JV2U2Z3GjC/JAdNOPhKjG+0XeM4jEdEhHQ0WZVsbhnIsz+ug7vGaVVe8VdzxluXlEg2hkQJAvyk6bSCDLrACVK40HiIrQMlu1tH6NikqkFgq1LgcW6jEKPEgTKYTFtUZqjKqq9QmynRHa5C662YXIPap4XE1lB1h4j9ZvGB2cDTzUzluGR1HBlOuo8xp3THU37dOOrzdiyr4SjUILq6ONCUy2a3C4YaG1uZmx4HA06dDpCoVc9N8mYEpSpEsAzWF3d7Dz7pgMJsrFGsKSMalMLcuVLMNdF04m0zuKwlQ0+iW5I+pwu1rC9/34a985+PT0f9Oc9T2v8Pj/AKTsjFPUqK9YtTquoIun85WAy8QoWwHcBOcvUsxHK82ra+GbDYVrIFfoqaOwvdmCKjXN/dtn07SOyaTXfrGejn1MeTr71OsMrnn1Wt6SyQ3mQw7gsufUC9/C0uzhaD6jMPAS5qMdhEzVEXv+U3TZG1RneozWDu7a8AidRT3e6PQzG1t08XSorilw1WpTKvlyrdxmIAZkHWAtextzvNeXFNfLbUEXUiwBHAMDwA7InWJZroyYwVK6AH3Kbs3cahQIPGwY+U2HB7Reg+ZLXNw1+BHznNdibRRHGd7G5dnP1nOl+4AaATYsTtemwstVRfi19e+wnSWWM2OsbI23SxAAVrVLdZddCONjzmVnH8HtGmigU3HiDrebZsTeoKpTENmygnMASwHeBq36zHXP6al/bc4rynhq6VEV6bB0YBlZTcMDqCDKswovIkyUiYChCEAijMUCzWVBKKGVQYEoRXhADImSJkTAiZExkylUqBQWYgKASSdAAOZkVrm/O8q4KjlRgMRUBCDmo4Fz4cu/wM4ViKgZibkEkm/+5mt6drfTMU9bipNkvyRdEA7NNfEmYTJfSaRRZifr39JHIewfpKuTtEkEHJdeQGpJOgAHMwLnd3YdTHYpcNTOUtcs9rhFX3nIuL8ha/MS43o3eqbPxLUGcOAFZXAtmVuBI5HQi3dOwblbCp7MwJrVVy13TpKxNrqAMwp35BR8bmci2vtJsXXepUPWdsw/DyC+FrCQYh2zJ33jRbyjWBVrcJc4XVO8EyhAdYeI/WdD2UCuZeB0InPUHXX+5f1nSUTrgjgwEx03y2XczEKyVlIFw9yOIs6Bb6/2mXO1dkqwzINQOXHSYTdJGSriCfdIp/8Azlfa2Pq0znRtOzke+an17M9tP3pr1FpvTfUWI14iaRUOt5tu8+3WrIyVEW9j1hxmntykidL3AMAxY6AD1JNgPGdR9nW7r1qgxNenlpJfIrD3n5Fh3cbcra66DQd08MWYvoAPrEXZdNch+qdeI1nf92q9N8KgRQoVQuUciPnx85r3jH5ZS0w+2918HjAenoKXI0qKMtQeDjXyOkzcLSK4dvF7MMXQJfCH6XT7BlWqB3gkBvEek0eutSk5p1KbU6i8VdSrDxDT1TMLt7dfB48D6VRDsuiuCyOB2ZlINu7hA880NqldABrxPJezxmU2RtrK+VDdiblm5ntPcOyZ3f32bnCp9IwIepRFzUQnM9MD6y82Xje9yO8cOc0ahptmHvDh3TU6qY9A7k7URUWjmGSwyHsbmvdebmTPP26m1UCZHfIcxsb6nmTOv7r7ZFZOjZszqOqb+8vzEdTfcJc9NhvEYiYXmVMQgI4CMIQgY5DKoMt0aVlMip3jvI3hCGYjC8UKi05N7T94+kY4Om1qaH+brbO44J/avPtPhOgb3bR+jYKtVDZHyMqEcc7DKlu+5v5Tz4tzck311J1JPPjx8TERQe32R5RqnZcS9VFIsRKFWhk1F8vavLxB09LTWBpe2rX8ROq+zfdDKBjcUn8w2NBGHuj7xl5MeQ5DXidMJur7PcRVdKuLAp4fquVNs7i9wuUe6DzJ5H07GsWjTPaltPocCaYNnqsEH9o6zfAW85wvpOtfym8+1va3SY4UB7tFAp/vezN8MnrNBeQXNU5x+IfGGAe2YSiG5jwMlhzZvERBcluuPWZdNsVCuUMVHcZhqAzOe4GXinJqVk6a5dC3IxTdBWck9Yqovqbhbk38xLnauKVKd2IC9pmM3dps2DuhyFmduN+dtfSYXeGrmIUnMVHAHh4yX6xpgNs44VGOUadsxpaVsUeMo4emXZVHEkD5yxitj2I3R0mPAlfixnW9wsXqad+KKR4jQ/qJyzDUzkZV961xfhoRM/urthqddC6hTcZrG4twPwnXPWMfnXawY7yCNcXHAyU5tJSN4XigDAEWOoOhnCfaXuT9Df6ThlP0Vz1l+6c8B/YeXYdOYndpQxeGp1abU6iCpTdSrKwuGU6EEQPLeDrZTwv+wm57qbTqU81VeqAwCd2X/wAzE7+bpvs3EWW7YZ7mk51t2ox+0PiPOYOhtKolPowerckDsPbLz1iWa9L7F2mmKorUXiR1h2Nz8pf3nJdwd4WRVzdZsoV/xAEkEdjC86ph6y1FDobqwuDHUwlXSxxJAyKIQMV4GIRpVVpao0k9dUGZmCgcSTYTKrwNHeYFt5sKDbpL+Ckj1tGm8+FP9Q/lb5SbF8azt4rzEDeLCn+p8G+UmNvYb7weh+UbDKxftF2c2I2e4QFqiFaigak5bhhbn1WY+QnDL2Udk9EfxnD/AHg+M4x7QNn0qOLLYYjoqi5wBwR7nOo7BwPdmtNSpZWuq55Aecv6GJ0tUsy81tYEc7njMbSHw59s3Pc/YObLiaw6vFEI48g5B5dnr2TUqY6duvt2niqaqKbUHVQAjAhSoFgabEWZbDxHxl3jNsqKbdAOkqDQDgvebnjNSx2NseiQ/wAxkZjrbKvC58ToPA9kxH0bFUrOl2BtwIHnrpOXfWXI7/HxOptW2392qeLqtWdnoYhyGYsMyE6D3TYjQAaGaJt3ZNTB1moVcpYBWBU3VlYXDDn2ix7DOtYDaNS4StSJU2uGW4t23GmnGaZ7TugqVMPiaFVagekyMFIJHRt1WIHDMHt/jM8dW3Kvy8STZGj0nsbHnKwa0tisd52eddUr2048fSXdLF3BD6ESjh6dwCHCkDgTx7oVsh48e4yVY3/A03p4ZKa1LJlzX0BOa7Wv2azX9p2TRdWMoLiyyhWbQCw63LwjR6a9Zmv2AamK1qzXCGxJ1Ygyz2ddDnPK6j95f4jGs2iWQfE+cPopNPivVueIv2nxjn0l/pl9k1wzBTzvYy3bENTr27DMdhaxXIwPBtZW2iHevnRGYacATOnl6Yx6E3YxnTYVHvcgZT4jSZaaP7NsWRRam90tlYZtOIsePgJuRxNP7a+omb9rFaEtziqf3i/mERx1P7xfUTOquIES1O0aX3i+sidpUfvB8Y0xS23seljKD4euuam481PJlPIgzzfvHsWpgcU+Gq8V1RuTIfdYfp3EGekztSj9v4H5Szx74HEADE0krgcA9IPbwzDSNhjh24tGpXxApU+J4seCjmT8p3vChKaCmNFRQL9tuN++cp22lPZOKSthWHQMSUVrjKRxQjmNdD68LmxxO+tVtRUCi9woIt59pi9el552u40qqsOqwPgZUnIsJv8AUmAV1IbgWQjj22+U37Ye36dVQpqK5AHWB7uYMxOt+2uvjybPbPRWkhFadHNyjHb8LwolV/EwYn0tb9ZhsRtJ6pDPVL9lwbeQtaWymmOX/fpKqmn2Tna6SGtdeWXzEkMSPtIPOTRUldKCnt8rGRVFcUvG6nzHzlYYtOxB4t/uXFPDLxIa3fYSv0NPkbeY+cC0TFU+ZX8w+ctts0aeIp5LqrA3Rsw6revA85f1cOv3nwHzmPr0lH13J7lHzgaFWazZCLHmBysLfrN92Ttum1NFXq2VRbssLTWtrbNzuHViGHMgC/Ze3EyyXZtRTdXHbNeUZ8azgrvUr4lyxBLog11CqugHYNfiZn9l4V3Q2r5co4G9teAImmYZ66OxZMwbLfLa9wAL9+gmxbC2ilKoLq+VtHGQkEeFpy6nvXf476xs+wxWVgDUS17+817dwIE0PbOyhTxVVCVfrsbqLXzdbhfS2a3lOhNj8PTBNGndyTbNmyr32Jt5TW2wlMk3C37wLyS4de2rps1G4oB5xrsmnc5lNu4/uZs7YSn+HT8IiOEp9i/C36zXkz4td/hVDTQ+FwTKy7Gw54Zh4sPlM19Hpn6q+l5Wp4dOAA58tBJejxYZNi4ccS3lY/tLpdiYa1+uRzsR/wDXSZZcKnYPSTGHpjgp8haPJfBhf4DhDwFQ/wCQ/ZZbHYKA9SmW7y5E2LJTX3ur43iBodoPYNDfyvE6qXmMRQ2LTuL0P/cPymawOzqKEE02B/vvK9ClTOgQ+hEvaWBp/dj4fOXdSzF9hSqrZVsO/WV+lH2ZTp7Op24KPG/7Rts2nbgh9ZplPph9n9IdN+GUDs6n9lPjI/w1PspIq66b8MicQR9WUP4fT55R/iTKb4Gn+D8p+Uez0rti+6U/phlk2DUfUQ/4n5SC4Wnzpr+X/Uz7ayListOqR0iB7XtmF7eEpPsjDMNaKfkEmlGn9lfy/wCpXFKn9lfyxIlWDbAwhFuhT8unpLvZuxaSPelTCHh1QeHZbnKopU+QX8su8Jg0Y/VB8F+c1Izay2H2o9MBHp3Ve4g285kKe2KDC5qBT2NoZgcThVXiw/KJj26Pu9BNeVjNjlI26Pux8fnGu8dv6I9YQjF2qq70KP6XxlUb1oP6R8jCEmRdqsN6KZ40z6yabz0T9Q+p+UISYuqg3joc0bSD7wUAAcrAHhoDCEmKotvLh/sP+VfnHT3lw/DKw/xHzhCXIeVXabfw7Xtm07v9wXb2GI+uf8R84QmMjcS/5DheF2B/tMZ2tQPBz5qYQkqj+I0+1j5SX8VpAWbMP8Qf3hCQJdq4ci6lm8jp6gRLtekfd1I4ixB+UIS4IVNvoLgNYjj1TLF94B94bDXRSIQm4z0hT3ko6kqzG41IEnW3goOQQWThxUn4AwhNMSslQ3pwo4s+luCS+p734SwPXIP4YQkkja5TfHC/ZqHyHzkX3wofYf4fOEJmmKbb6UL26KoT4j5yhU34oDTon9RCEqI/83o/dP6iRO+1Lj0LeoihIKR36p8qJ9R8pTbf1Bwon1/1CEuCJ3+H3PxkKm/ZPCgPzQhLkRQfftuWHX8xiTfype60UHm0IS5GdpVvaBX4dGn/AFH95aPvxXv/AOmnofnCEuM21//Z" class="img-circle" height="65" width="65" alt="Avatar">
				</div>
				<div class="col-sm-10">
					<h4>Chefe <small>Sep 25, 2021, 8:25 PM</small></h4>
					<p>Tem que vir no final de semana</p>
					<br>
					<p><span class="badge">1</span> Resposta:</p><br>
					<div class="row">
						<div class="col-sm-2 text-center">
							<img src="data:image/jpeg;base64,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" class="img-circle" height="65" width="65" alt="Avatar">
						</div>
						<div class="col-xs-10">
							<h4>John Lennon <small>Sep 25, 2021, 8:28 PM</small></h4>
							<p>Eu num vo naaummm</p>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="container-fluid">
	<p>2022 Rennan Fabrício  - Todos os direitos reservados.</p>
</footer>

</body>
</html>




