<html>
<header>
	<h1>Mandale un mensaje a tu atleta favorito</h1>
    <link href="style.css" rel="stylesheet" type="text/css">
</header>
<body>

<div id="form">

<div class="correr" id="correr1"></div>
<div class="correr" id="correr2"></div>
<div class="nadador" id="nadador"></div>
<div class="batminton" id="batminton"></div>
<img src="imagen.png" class="atletas">

<form id="waterform" method="post">

    <div class="formgroup" id="name-form">
        <label for="name">Selecciona tu atleta</label>
        <!--input type="text" id="name" name="name" /-->
        <select name="atleta" id="atleta">
            <option value="Kevin Cordon">Kevin Cordón</option>
            <option value="Luis Grijalva" selected>Luis Grijalva</option>
            <option value="Carlos Martinez">Carlos Martinez</option>
        </select>
    </div>

    <div class="formgroup" id="name">
        <label for="name">Tu Nombre</label>
        <input type="name" id="name" name="name" />
    </div>

    <div class="formgroup" id="message-form">
        <label for="message">Tu mensaje</label>
        <textarea id="message" name="message"></textarea>
    </div>
	    <input type="submit" value="Enviar tus felicitaciones" />
</form>
</div>
</body>
</html>