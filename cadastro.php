<?php
include('codC.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="form-container">
    <h2>Cadastro</h2>
    <form action="cadastro.php" method="post">
      <input type="text" name="nome" placeholder="Nome completo" required />
      <input type="email" name="email" placeholder="E-mail" required />
      <input type="password" name="senha" placeholder="Senha" required />
      <button type="submit">Cadastrar</button>
    </form>
  </div>
  <style>

body {
  font-family: Arial, sans-serif;
  background: linear-gradient(to right, #6a11cb, #2575fc);
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  margin: 0;
}

.form-container {
  background-color: white;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  width: 300px;
  text-align: center;
}

.form-container h2 {
  margin-bottom: 20px;
  color: #333;
}

.form-container input {
  width: 100%;
  padding: 12px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
}

.form-container button {
  width: 100%;
  padding: 12px;
  background-color: #2575fc;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s;
}

.form-container button:hover {
  background-color: #1a5dcc;
}


 </style>

</body>
</html>

