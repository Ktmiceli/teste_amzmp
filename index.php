<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Backend - KAIQUE (AMZMP)</title>
    <link href="frontend/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id='top'><div>

<div id='center'>
<form id='formLogin' name='formLogin' method='post' action='backend/login.php'>
<div id='login_img'><img src='frontend/src/imagem_amzmp.jpg' class='imglogo' /><div>
<div class='form_login_content'><input class='txtarea' type='input' name='text_login' placeholder='Login ou E-mail' /></div>
<div class='form_login_content'><input class='txtarea' type='password' name='text_pass' placeholder='Senha' /></div>
<div class='form_login_content'>
	<select name='text_slc' class='slcarea'>
		<option value='1'>Administração</option>
	</select>
</div>
<div class='form_login_content'><input type='submit' name='btn_login' id='btnLogin' value='Logar' /></div>
<div class='kaique_info' ><p>Desenvolvido por: Kaique Tadeu Miceli</p>
<p>pessoal.ktmiceli@gmail.com | Whatsapp: (16)99388-6237</p>
</div>
</form>
</div>
<?php
if(isset($_SESSION['credenciais_erro']) and ($_SESSION['credenciais_erro'] == true))
    echo "<div id='erro_estado'>".$_SESSION['credenciais_erro']."</div>";
?>

</body>
</html>