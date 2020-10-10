

<html>

<body onload="document.getElementById('txtn1').focus()">
<title>Anagrama</title>

<form action="" method="post"  name="datos">

<br/><br/> 
	 <center>Consulta de Anagrama</center>
	<br/><br/>

<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1" rowspan="16" valign="middle"><div align="center"></div></td>
     <td width="1" rowspan="16" valign="middle"><div align="center"></div></td>
    
    <tr>
    <td height="19" class="Estilo49"><div align="left">Palabra 1 </div></td>
    <td height="19" colspan="2" class="Estilo49"><label>
      <input name="txtn1" type="text" class="Estilo49" id="txtn1" size="20"  maxlength="25"  />
     Palabra 2     
      <input name="txtn2" type="text" class="Estilo49" id="txtn2" size="20" maxlength="35"  />
    </label></td>
	<td class="Estilo50"><label>
          <div align="right">
           
			<button onclick="anagrama()">Compara</button>
            
           
          </div>
        <div align="center" class="Estilo49"></div>
        </label></td>
  </tr>
</table>

<br/><br/> 
		<a href="index.php"><input type="button" value="Regresar al Menu Principal"></a>
		
<script src="js/anagrama.js"></script>

</form>
	  
    

</body>
</html>
