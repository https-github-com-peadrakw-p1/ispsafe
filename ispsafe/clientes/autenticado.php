<?php
	include_once("includes/funcoes.php");
	include_once("includes/ConexaoMySQL.php");

	verifica();
	
	 echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>ISP-Save v<?php include('VERSION');?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="../css/estilo02.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="refresh" content="1" />

     <?php verificaNivel(); ?>
</head>

<body >
<table width="200" border="0" cellspacing="0" cellpadding="0" align="center" >
  <tr>
    <td class="medidorSinal" valign="top"><?php statusHotspot($_GET['usuario']); ?></td>
  </tr>
</table>
</body>
</html>
