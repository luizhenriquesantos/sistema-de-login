<?php
include('conexao.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
</head>
<body>

<h1>Acesse sua conta</h1>

<form action="processa.php" method="POST">
<div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email">
          <label for="email">Email</label>
        </div>
      </div>
<div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="senha">
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Entrar

  </button>
   
</form>
    
</body>
</html>