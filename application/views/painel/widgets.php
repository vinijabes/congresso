<?php// print_r($info); print_r($success); print_r($danger); exit(); ?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Bem-vindo <?= $_SESSION['usuario']->primeiro_nome ?>!</h1>
	</div>
</div><!--/.row-->
<div class="content">
	<div class="col-lg-12">
		<h2>Este é o Painel do Participante</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
<?php 
			if($completo) echo '<div class="panel panel-success "><div class="panel-heading">
				<strong>Sua inscrição está completa!</strong>';
			else{
				echo '<div class="panel panel-danger ">
			<div class="panel-heading">
				<strong>Sua inscrição ainda não está completa!</strong>';
			}
?>

		

				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
				<div class="panel-body">
					<div class="col-md-12 no-padding">
						<div class="row progress-labels">
							<div class="col-sm-6">
								<?php 
									if(count($warning) > 0){ 
										echo '<p>Ainda resta você fazer:</p>';
										echo '<ul>';
										for($i = 0 ; $i < count($warning); $i++){
											echo '<li>'.$warning[$i].'</li>';
										}
										echo '</ul>';
									}
								?>
								
								
								<!-- <ul>
									<li>Você não anexou a foto de seu comprovante de pagamento ainda!</li>
									<li>Você deve enviar seu artigo até fim do mês!</li>
								</ul> -->
							</div>
							<div class="col-sm-6" style="text-align: right;"><?= $porcentagem ?>%</div>
						</div>
						<div class="progress">
							<div data-percentage="0%" style="width: <?= $porcentagem ?>%;" class="progress-bar progress-bar-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<div class="col-md-12">

	<div class="panel panel-default ">
		<div class="panel-heading">
			<strong>Timeline</strong>

			<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
			<div class="panel-body timeline-container">
				<ul class="timeline timeline-horizontal">
					<li class="timeline-item">
						<div class="timeline-badge"><i class="glyphicon glyphicon-pushpin"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><strong>Preenchimento dos Dados</strong></h4>
							</div>
							<div class="timeline-body">
								<p>Você já passou por este passo ao preencher os dados no formulário de inscrição.</p>
							</div>
						</div>
					</li>
					<li class="timeline-item">
						<div class="timeline-badge primary"><i class="glyphicon glyphicon-envelope"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><strong>Efetue o depósito</strong></h4>
							</div>
							<div class="timeline-body">
								<p>Efetue o depósito do valor da sua inscrição na conta do evento.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-badge"><i class="glyphicon glyphicon-camera"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><strong>Tire uma foto do comprovante de depósito</strong></h4>
							</div>
							<div class="timeline-body">
								<p>Tire uma foto do comprovante de depósito e nos envie <a href="<?= base_url('Painel/enviar_arquivos') ?>">clicando aqui!</a></p>
							</div>
						</div>
					</li>
					<?php if($vai_submeter_trabalho){ ?>
					<li>
						<div class="timeline-badge"><i class="glyphicon glyphicon-paperclip"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title"><strong>Queremos ver seu trabalho!</strong></h4>
							</div>
							<div class="timeline-body">
								<p>Anexe seu trabalho, com autor e outra versão sem autor e sem informações sobre você.</p>
								<p>Após anexar seu trabalho, ele irá para a análise se você está apto a apresentá-lo no congresso ou não. Caso não esteja, não desanime, pois você ainda poderá participar do Congresso e debater sobre os assuntos!</p><p>Nos envie seu trabalho  <a href="<?= base_url('Painel/enviar_arquivos') ?>">clicando aqui!</a></p>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>



	</div><!--/.col-->

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Entre em contato conosco</strong>


				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?= base_url('Painel/send_doubt') ?>" method="post">
						<fieldset>
							<p>Está com alguma dúvida? Escreva para nós!</p>
							<!-- Message body -->
							<div class="form-group">

								<div class="col-md-12">
									<textarea required="true" class="form-control" id="message" name="message" placeholder="Escreva sua dúvida aqui..." rows="5"></textarea>
								</div>

							</div>

							<!-- Form actions -->
							<div class="form-group">
								<div class="col-md-12 widget-right">
									<button type="submit" class="btn btn-info btn-md pull-right">Enviar</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>

			</div>
		</div>
	</div>