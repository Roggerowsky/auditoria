<!doctype html>

<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Capítulo 7</title>
</head>
<body>
   <div id="lateral">
<div id='cssmenu'>
<ul>   
   <li><a href="index.php"><span> CAPÍTULO  #7</span></a></li>
   <li class='has-sub'><a href=''><span> INFORMACIÓN SOBRE AUDITORÍA</span></a>
     <ul>
         <li class='has-sub'><a href=''><span>EMPRESAS AUDITORAS</span></a>
            <ul>
               <li><a href='forNueEmpresaAuditora.php'><span>REGISTRAR</span></a></li>
               <li><a href='EmpresasAuditorasRegistradas.php'><span>CONSULTAR</span></a></li>
            </ul>
         </li>
		 
		 <li class='has-sub'><a href=''><span>EMPRESAS AUDITADAS</span></a>
            <ul>
               <li><a href='forNueEmpresa.php'><span>REGISTRAR</span></a></li>
               <li><a href='EmpresasAuditadasRegistradas.php'><span>CONSULTAR</span></a></li>
            </ul>
         </li>
		 
		 <li class='has-sub'><a href=''><span>AUDITORES</span></a>
            <ul>
               <li><a href='forNueAuditor.php'><span>REGISTRAR</span></a></li>
               <li><a href='AuditoresRegistrados.php'><span>CONSULTAR</span></a></li>
            </ul>
         </li>
    
		  <li class='has-sub'><a href=''><span>INFORMACIÓN POR CAPÍTULO</span></a>
            <ul>
               <li><a href='infocap3.php'><span>CAPÍTULO III</span></a></li>
               <li><a href='infocap4.php'><span>CAPÍTULO IV</span></a></li>
			   <li><a href='infocap5.php'><span>CAPÍTULO III</span></a></li>
               <li><a href='infocap6.php'><span>CAPÍTULO V</span></a></li>
			   <li><a href='dictamenfinal.php'><span>DICTAMEN FINAL DE LA AUDITORÍA</span></a></li>
            </ul>
         </li>
         
         </ul>
          <li class='has-sub'><a href=""><span>TEORIA CAPÍTULO #7</span></a>
            <ul>
               <li><a href="FunTeoTema1.php"><span>TÉCNICAS PARA LA INTERPRETACIÓN DE LA INFORMACIÓN</span></a></li>
               <li ><a href='FunTeoTema2.php' ><span>EVALUACIÓN DE LOS SISTEMAS</span></a></li>
               <li ><a href='FunTeoTema3.php'><span>EVALUACIÓN DE LOS SISTEMAS DE INFORMACIÓN</span></a></li>
               <li ><a href='FunTeoTema4.php'><span>CONTROLES</span></a></li>
               <li ><a href='FunTeoTema5.php'><span>PRESENTACIÓN</span></a></li>
			   <li ><a href='FunTeoPon.php'><span>PONDERACIÓN DE EVALUACIÓN POR CAPÍTULO</span></a></li>
            </ul>
         </li>          
   </li>
</ul>
</div>

<br></br>

<div id="cabecera">REGISTRAR NUEVO AUDITOR</div>
    <div id="texto">
	<?php
include("conexion.php");
?>
<?php
$datos2=mysql_query("SELECT * FROM empresaauditora") or die ("No se puede consultar la tabla auditores");
?>

<script type="text/javascript" src="jvs/validarRegistroNuevoAuditor.js"></script>
<form name="datos" method="POST" action="registrarNuevoAuditor.php">
<br>
	 <table border="4" cellpadding="3" cellspacing="3" width="0%" align="center">
	 
    <tr>
        <td align="right"> Apellido Paterno: </td>
	<td><input type="text" name="ApellidoPaterno" id="ApellidoPaterno"/></td>
</tr>

<tr>
        <td align="right"> Apellido Materno: </td>
	<td><input type="text" name="ApellidoMaterno" id="ApellidoMaterno"/></td>
</tr>

<tr>
        <td align="right"> Nombre: </td>
	<td><input type="text" name="Nombre" id="Nombre"/></td>
</tr>

<tr>
        <td align="right"> Edad: </td>
	<td><input type="text" name="Edad" id="Edad"/></td>
</tr>

<tr>
        <td align="right"> Pais: </td>
	<td><input type="text" name="Pais" id="Pais"/></td>
</tr>

<tr>
        <td align="right"> Ciudad Municipio: </td>
	<td><input type="text" name="CiudadMunicipio" id="CiudadMunicipio"/></td>
</tr>

<tr>
        <td align="right"> Codigo Postal: </td>
	<td><input type="text" name="CodigoPostal" id="CodigoPostal"/></td>
</tr>

<tr>
        <td align="right"> Calle Avenida: </td>
	<td><input type="text" name="CalleAvenida" id="CalleAvenida"/></td>
</tr>

<tr>
        <td align="right"> Telefono: </td>
	<td><input type="text" name="Telefono" id="Telefono"/></td>
</tr>

<tr>
        <td align="right"> E-mail: </td>
	<td><input type="text" name="Email" id="Email"/></td>
</tr>

<tr>
        <td align="right"> Sexo: </td>
	<td><input type="text" name="Sexo" id="Sexo"/></td>
</tr>

<tr>
<td align="right"> Empresa  </td>
<td><select name="id_EmpresaAuditora" id="id_EmpresaAuditora">
<option value="0">Selecciona Empresa </option>
<?php
while($datosArray=mysql_fetch_assoc($datos2)){
?>
<option value="<?php echo $datosArray['id_EmpresaAuditora'];?>">
	<?php echo $datosArray['NombreFiscal'];?>
	</option>
	<?php
	}	
	?>
</select>
</td>
</tr>
</table>

<CENTER>
	<?php
	echo"<input type=\"button\"class=\"boton\"value=\"CANCELAR\"onclick=\"window.location.href='index.php';\">";
	?>
	</tr>
	
	<input type="button" value="REGISTRAR" class="boton" onclick="validaCampos();"/> 
</CENTER>

 <br><br>

</div>
</div>
</body>
<html>
