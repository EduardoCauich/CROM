<?php
session_start();
if($_SESSION['security_code']==$_POST['security_code'] && !empty($_SESSION['security_code']) ){
		// Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
extract($_POST);
$encabezados  = "MIME-Version: 1.0\n";
$encabezados .= "Content-type: text/html; charset=iso-8859-1\n";
$encabezados .= "From: $nombre <$email>\n";
$encabezados .= "X-Sender: <contacto web>\n";
$encabezados .= "X-Mailer: PHP\n";
$encabezados .= "X-Priority: 3\n";
$encabezados .= "Return-Path: <web page>\n";
$fecha = date("d-m-Y H:i:s");
$datos= ' 

<style type="text/css">
.tabla{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #092C66;
	text-decoration: none;
}
.texto{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #fff;
	padding:10px;
	font-weight:bold;
	text-decoration: none;
}
.texto2{
	font-size:14px;
	padding10px;
	color:#333;
}
</style>
<img src="https://hectorcetina.com/crom/imagenes/logo_crom.png" alt="">
<table width="90%"  border="1" bordercolor="#FFFFFF" class="tabla">';
				$datos.='
					  <tr>
					    <td colspan="2" bordercolor="#CCCCCC" bgcolor="#A8352D" class="texto"><strong>Este es un contacto de la pagina web 						'.$SERVER_NAME.' Fecha y hora: '.$fecha.'</strong></td>
  					  </tr>
					  <tr bgcolor="#FFFFFF">
					    <td colspan="2" bordercolor="#CCCCCC">&nbsp;</td>
  					  </tr>
					  <tr>
						<td width="29%" bordercolor="#CCCCCC" bgcolor="#092C66" class="texto"><strong>Nombre</strong></td>
						<td width="71%" bordercolor="#CCCCCC" class="texto2">'.$nombre.'</td>
						</tr>
						<tr>
						<td width="29%" bordercolor="#CCCCCC" bgcolor="#092C66" class="texto"><strong>Empresa</strong></td>
						<td width="71%" bordercolor="#CCCCCC" class="texto2">'.$empresa.'</td>
            </tr>
          
						<tr>
						<td width="29%" bordercolor="#CCCCCC" bgcolor="#092C66" class="texto"><strong>Email</strong></td>
						<td width="71%" bordercolor="#CCCCCC" class="texto2">'.$email.'</td>
						</tr>
						<tr>
						<td width="29%" bordercolor="#CCCCCC" bgcolor="#092C66" class="texto"><strong>Telefono</strong></td>
						<td width="71%" bordercolor="#CCCCCC" class="texto2">'.$telefono.'</td>
					  </tr>
					  <tr>
						<td bordercolor="#CCCCCC" bgcolor="#092C66" class="texto"><strong>Celular</strong></td>
						<td bordercolor="#CCCCCC" class="texto2">'.$celular.'</td>
					  </tr>
					  <tr>
					    <td bordercolor="#CCCCCC" bgcolor="#092C66" class="texto"><strong>Comentarios</strong></td>
					    <td bordercolor="#CCCCCC" class="texto2">'.$comentarios.'</td>
  </tr>
			
  </tr>
</table>
' ;

mail("crom.automatizacion@gmail.com", "contacto web $SERVER_NAME","$datos",$encabezados);
unset($_SESSION['security_code']);
echo "
    <script>
      alert('Se envio correctamente tu mensaje, pronto nos comunicaremos contigo, Gracias');
      location.href='contactanos.php';
    </script>
  ";

} else {
	// Insert your code for showing an error message here
	header("location:contactanos.php?error=1");echo 'El código de seguridad no es el correcto';
}
print_r($GLOBALS);
