<?php

$id = $_GET['id'] ?? null;

$doc = simplexml_load_file("../data/database.xml");

// Usa o método XPath para encontrar um nó específico para deletar
$target = $doc->xpath("//cliente[@id=$id]");

// Caso não exista, retorna null
if(!$target) return;

$cliente = $target[0];
?>

<?php
if (isset($_POST['edit'])) {
  $nome = $_POST['nome'] ?? null;
  $email = $_POST['email']?? null;
  $telefone = $_POST['telefone']?? null;
  $endereco = $_POST['endereco']?? null;
  $profissao = $_POST['profissao']?? null;
  $formacao = $_POST['formacao'] ?? null;
  $estado_civil = $_POST['estado_civil'] ?? null;
  $tipo_sanguineo = $_POST['tipo_sanguineo'] ?? null;

  $cliente->name = $nome;
  $cliente->email = $email;
  $cliente->phone = $telefone;
  $cliente->address = $endereco;
  $cliente->profession = $profissao;
  $cliente->formation = $formacao;
  $cliente->maritalStatus = $estado_civil;
  $cliente->bloodType = $tipo_sanguineo;

  // Após, salva o novo arquivo XML com a DOMDocument
  $dom = new DOMDocument('1.0');
  $dom->preserveWhiteSpace = false;
  $dom->formatOutput = true;

  $dom->loadXML($doc->asXML());
  $dom->save('../data/database.xml');

  header('location: ../pages/list.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Em edição - <?php echo $cliente->name?></title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/css/all.min.css">
    <link rel="stylesheet" href="../static/css/main.css">
  </head>
  <body>

    <div class="container">

      <h1>Em edição - <?php echo $cliente->name?></h1>

      <hr>

      <div class="wrapper">
        <form method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="<?php echo $cliente->name;?>">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail" value="<?php echo $cliente->email;?>">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digite seu número de telefone" value="<?php echo $cliente->phone;?>">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço" value="<?php echo $cliente->address;?>">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Profissão</label>
            <input type="text" class="form-control" name="profissao" placeholder="Digite sua profissão" value="<?php echo $cliente->profession;?>">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Formação</label>
            <input type="text" class="form-control" name="formacao" placeholder="Digite sua formação" value="<?php echo $cliente->formation;?>">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect2">Selecione seu estado civil</label>
            <select class="form-control" name="estado_civil">
              <option <?php echo ($cliente->maritalStatus == 'Solteiro(a)') ? 'selected' : ''?> value="Solteiro(a)">Solteiro(a)</option>
              <option <?php echo ($cliente->maritalStatus == 'Casado(a)') ? 'selected' : ''?> value="Casado(a)">Casado(a)</option>
              <option <?php echo ($cliente->maritalStatus == 'Viúvo(a)') ? 'selected' : ''?> value="Viúvo(a)">Viúvo(a)</option>
              <option <?php echo ($cliente->maritalStatus == 'Enrolado') ? 'selected' : ''?> value="Enrolado">Enrolado</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect2">Selecione seu tipo sanguíneo</label>
            <select class="form-control" name="tipo_sanguineo">
              <option <?php echo ($cliente->bloodType == 'A') ? 'selected' : ''?> value="A">A</option>
              <option <?php echo ($cliente->bloodType == 'B') ? 'selected' : ''?> value="B">B</option>
              <option <?php echo ($cliente->bloodType == 'AB') ? 'selected' : ''?> value="AB">AB</option>
              <option <?php echo ($cliente->bloodType == 'O') ? 'selected' : ''?> value="O">O</option>
              <option <?php echo ($cliente->bloodType == 'O-') ? 'selected' : ''?> value="O-">O-</option>
            </select>
          </div>

          <input type="hidden" name="edit">
          <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 15px;">Editar</button>
        </form>
      </div>

    <script src="../static/js/bootstrap.min.js"></script>
    <script src="../static/js/fontawesome.min.js"></scri
  </body>
</html>
