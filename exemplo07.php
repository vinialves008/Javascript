<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="alert('Página Carregada!!');">
<script type="text/javascript" >
function selectName() {
	document.write("<p>Digite um nome</p>");
}
</script>
<form>
	<input type="text" name="nome" onselect="alert('Digite um nome');">
	<button type="submit">Enviar</button>
</form>


</body>
</html>