<?php
	if(version_compare(PHP_VERSION, '5.3', '<')):
		clearstatcache();
	else:
		clearstatcache(TRUE);
	endif;
	
	$habilitade		= "<span class='success'>Habilitado ✔</span>";
	$desabilitado	= "<span class='error'>Desabilitado ✘</span>";
	$error			= false;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<style>
			body{margin:0px;padding:0px;font-weight:bold;}
			table{border-collapse:collapse;width:100%;}
			table th, table td{padding: 0.4em;text-align:left;vertical-align:top;}
			table th{width:12em;font-weight:normal;}
			table tr:nth-child(odd){background: #eee;}
			table td.pass{color: #191;}
			table td.fail{color: #911;}
			table td h1{text-align:center;}
			table td h3{text-align:center;}
			.success{color:#2989D8;}
			.error{color:#900000;}
			.install{width:650px;left:50%;margin-left:-325px;position:relative;}
		</style>
	</head>
	<body>
		<div class="install">
			<table>
				<tr>
					<td colspan="2">
						<h1 class="success">
							Instalação
						</h1>
					</td>
				</tr>
				<tr>
					<td>Versão do PHP: </td>
					<td><?php echo "<span class='success'>". PHP_VERSION ."</span>"; ?></td>
				</tr>
				<tr>
					<td>MySql: </td>
					<td><?php if(function_exists('mysql_connect')): echo $habilitade; else: echo $desabilitado; $error = true; endif ?></td>
				</tr>
				<tr>
					<td>cURL: </td>
					<td><?php if(extension_loaded('curl')): echo $habilitade; else: echo $desabilitado; $error = true; endif ?></td>
				</tr>
				<tr>
					<td>PDO:</td>
					<td><?php if(class_exists('PDO')): echo $habilitade; else: echo $desabilitado; $error = true; endif ?></td>
				</tr>
				<tr>
					<td colspan="2">
						<h3>
							<?php
								if($error === false){
									echo "<span class='success'>Framework instalado com sucesso!</span>";
								}else{
									echo "<span class='error'>Por favor verifique os erros para continuar a instalação.</span>";
								}
							?>
						</h3>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
<?php
	if($error === false){
		//unlink(__FILE__);
	}
?>