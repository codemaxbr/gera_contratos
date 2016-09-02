<?php $json = json_decode($_POST['dados']); ?>
<?php

ini_set('xdebug.max_nesting_level', 100000);
ini_set('memory_limit', -1);

global $html;
$account = $json[0]->account_id->user->acc_id;
$html = '

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Relatório de Jornada por Veículo</title>
	
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900,300" rel="stylesheet" type="text/css">

	<link rel="stylesheet" media="all" href="css/print.css">
</head>
<body>

	<div class="logo">
		<table width="100%">
			<tr>
				<td><img src="../../../../dashboard/assets/skin/'.$account.'/img/logoReport.png"></td>
				<td align="right"><h1>Relatório de Jornada por Veículo</h1></td>
			</tr>
		</table>		
	</div>

	<div class="container">
		<!-- Loop -->
		';


		foreach ($json as $campo => $dados):

	$html .= '<div class="table_out">
			  	<h2 style="padding-left:10px">'.$dados->label.'</h2>
				<div class="table_inner">
					<table cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th class="tab_titulo" width="10%">Data</th>
								<th class="tab_titulo" width="40%">Início</th>
								<th class="tab_titulo" width="40%">Fim</th>
								<th class="tab_titulo" width="10%">Total</th>
							</tr>
						</thead>
						<tbody>';

						foreach ($dados->itens as $item):
						
						$html .= '
							<tr>
								<td class="td_line">'.$item->data_relatorio.'</td>
								<td class="td_line">
									<b>Hora:</b> '.$item->hora_inicio.'<br />
									<b>Endereço:</b> '.$item->initial_address.'<br />
									<b>POI:</b> '.$item->POI_inicio.'
								</td>
								<td class="td_line">
									<b>Hora:</b> '.$item->hora_fim.'<br />
									<b>Endereço:</b> '.$item->last_address.'<br />
									<b>POI:</b> '.$item->POI_fim.'
								</td>
								<td class="td_line">'.$item->total_jornada.'</td>
							</tr>';
						endforeach;
						
						$html .= '
						</tbody>
					</table>
			  		
			  	</div>
			</div>';

		endforeach;

	$html .= '

		<!-- Fim do Loop -->
	</div>

</body>
</html>
';

?>

<?php

require "lib/vendor/autoload.php";

use Dompdf\Dompdf;

//generate some PDFs!
$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
$dompdf->loadHtml($html);
$dompdf->set_paper('a4', 'landscape');
$dompdf->render();
$dompdf->stream("Relatório_Jornada_Veiculo", array("Attachment" => 1)); // 1 = Download file | 0 = View PDF

?>