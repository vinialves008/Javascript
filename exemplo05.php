<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript" >
	function updateOverDiv() {
		var div = document.getElementById('div');
		div.style.backgroundColor =  "black";
	}
	function updateOutDiv() {
		var div = document.getElementById('div');
		div.style.backgroundColor =  "white";
	}
</script>
<div style="width: 50%;height: 100px;padding: 5%;" id="div" onmouseover="updateOverDiv();" onmouseout="updateOutDiv();">
<form>
	<input type="text" name="nome">
	<button type="submit">Enviar</button>
</form>
</div>
</body>
</html>