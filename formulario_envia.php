<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
<body>

<form name="nome" id="nome" method="post" action="formulario_recebe.php">
	<label>Nome:
    	<input type="text" name="nome" id="nome"/>
    </label>
    <br/>
    
    <label>Idade:
    	<input name="idade" id="nome" type="text" maxlength="3" size="5"/>
    </label>
    <br/>
    
    <label>Sexo:
    <select name="sexo" id="sexo">
    	<option></option>
    	<option value="M">M</option>
        <option value="F">F</option>
    </select>
    </label>
    <br/>
    <label>
    <input type="submit" value="Enviar" name="enviar" id="enviar"/>
    </label>
</form>

</body>
</html>