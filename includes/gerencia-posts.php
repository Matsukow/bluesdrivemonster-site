<section class="gerencia-posts">
	<div class="container">
		<div class="linha">
			<div class="doze colunas">
				<h2>Postagens</h2>

				<select id="selOpt" name="selOpt">
				<option value=""></option>
	 			<?php 
					
					require 'config.php';
					require 'conexao-interna.php';
					require 'database.php';
	
					$dados = DBRead('usuarios');

					if (mysqli_num_rows($dados) == 0) {
					    // echo "No rows found, nothing to print so am exiting";
					    echo "Nenhuma informação encontrada.";
					    exit;
					}
					
					while ($row = mysqli_fetch_assoc($dados)) {
						// echo("<option value='" . $row['id'] . "'>" . $row['nome'] . " > " . $row['id'] . "</option>");
						echo("<option value='" . $row['id'] . "' name='usuario-" . $row["id"] . "'>" . $row['usuario'] . " > " . $row['id'] . "</option>");
					}

				?>
			</select>

			</div>
		</div>
	</div>
</section>