<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inserir um novo cliente</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/css/main.css">
    <style>
      .wrapper {
        width: 450px;
        margin: 0 auto 20px auto;
      }
    </style>
  </head>
  <body>

    <div class="container">

      <div class="wrapper">
        <form action="../src/generate.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digite seu número de telefone">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Endereço</label>
            <input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Profissão</label>
            <input type="text" class="form-control" name="profissao" placeholder="Digite sua profissão">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Formação</label>
            <input type="text" class="form-control" name="formacao" placeholder="Digite sua formação">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect2">Selecione seu estado civil</label>
            <select class="form-control" name="estado_civil">
              <option selected disabled hidden>Estado civil</option>
              <option value="Solteiro(a)">Solteiro(a)</option>
              <option value="Casado(a)">Casado(a)</option>
              <option value="Viúvo(a)">Viúvo(a)</option>
              <option value="Enrolado">Enrolado</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect2">Selecione seu tipo sanguíneo</label>
            <select class="form-control" name="tipo_sanguineo">
              <option selected disabled hidden>Tipo Sanguíneo</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
              <option value="O">O</option>
              <option value="O">O-</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary btn-lg btn-block">Adicionar</button>
        </form>
      </div>
  </body>
</html>
