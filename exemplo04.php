<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript" >
	function getConfirm() {
		var message, x;
	    message = document.getElementById("message");

		res=confirm('Deseja enviar este fomulário?');
		if (!res) {
			try{
				throw "Envio Cancelado!!";

			}catch (e){
				alert(e);
				
			}
		}else{

		}
	}
</script>

<form method="post" onsubmit="getConfirm();">
	<input type="text" name="nome">
	<button type="submit">Enviar</button>
</form>
</body>
</html>