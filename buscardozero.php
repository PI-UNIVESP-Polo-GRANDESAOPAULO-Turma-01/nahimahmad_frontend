<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="shortcut icon" href="imagens/fav_icon.png" type="image/x-icon"/>
	
	<link rel="stylesheet" href="/styles/buscar.css" />

	<title>Diretório de Chromebooks</title>

</head>
<body>

	<nav class="navbar navbar-expand-md fixed-top" style="background-color: #324572;">
        <a class="navbar-brand" href="#">
            <img class="logo" src="imagens/logo.png" alt="Logo do colégio Nahim Ahmad">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link link-nav" href="inicio.html">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link link-nav" href="cadastrar.html">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav" href="buscardozero.php">Buscar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav" href="duvidas.html">Dúvidas</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center align-items-center"> <!--style="height: 100vh;"-->
            <div class="col-12 col-sm-9 col-md-6 col-lg-7 col-xl-7 pt-1 pb-1 pr-5 pl-5">
                <h4 class="col-12 mt-3 mb-3 font-weight-bold text-center" >
                    Diretório de Chromebooks
                </h4>
            </div>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
			<input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
		</div>
		<div class="container-busca">
			<div class="row">
				<div class="col-10">
					<h4>Resultados</h4>
				</div>

				<div class="row">
					<div class="col-12">
						<nav aria-label="Navegação de página exemplo">
							<ul class="pagination justify-content-end">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Anterior">
										<span aria-hidden="true">&laquo;</span>
										<span class="sr-only">Anterior</span>
									</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Próximo">
										<span aria-hidden="true">&raquo;</span>
										<span class="sr-only">Próximo</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<table id="tabela" class="table table-hover">
				<thead>
					<tr>
						<th>Aluno</th>
						<th>Resp. Financeiro</th>
						<th>Conservação</th>
						<th>Data de entrega</th>
						<th>Matrícula</th>
						<th>Nº de série</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td scope="row">Mateus Vaz (TESTE)</td>
						<td>Resp. do Mateus Vaz</td>
						<td>Ótimo</td>
						<td>2023-03-30</td>
						<td>012345</td>
						<td>543210</td>
					</tr>
					<tr>
						<td scope="row">Patrick Rocha (TESTE)</td>
						<td>Meu pai</td>
						<td>Ruim</td>
						<td>2023-04-23</td>
						<td>080808</td>
						<td>070707</td>
					</tr>
					<tr>
						<td scope="row">Cláudio Muniz (TESTE)</td>
						<td>Pai do Muniz</td>
						<td>Bom</td>
						<td>2023-03-10</td>
						<td>454545</td>
						<td>656565</td>
					</tr>

					<?php
						while($receber_cadastros = mysqli_fetch_array($query_cadastros))
						{
						
						$aluno = $receber_cadastros['aluno'];
						$EMAIL = $receber_cadastros ['EMAIL'];
						$conservacao = $receber_cadastros['conservacao'];
						$dt_entrega = $receber_cadastros['dt_entrega'];
						$matricula = $receber_cadastros['matricula'];
						$n_de_serie = $receber_cadastros['n_de_serie'];
						
					?>
						
					<tr>
						<td scope="row"> <?php echo $ $aluno; ?></td>
						<td>             <?php echo $EMAIL; ?></td>
						<td>             <?php echo $conservacao; ?></td>
						<td>             <?php echo $dt_entrega; ?></td>
						<td>             <?php echo $matricula; ?></td>
						<td>             <?php echo $n_de_serie; ?></td>
					</tr>
					<?php }; ?>

				</tbody>
			</table>
		</div>
	</div>



	<footer class="footer">
        <div>
            <div>
                <p>Avenida Esperança, nº 191 - Centro, Guarulhos/SP</p>
                <p>Todos os direitos reservados © 2023</p>
            </div>
        </div>
    </footer>

	<script>
		$('input#txt_consulta').quicksearch('table#tabela tbody tr');
	</script>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>

?>