<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Persistência com XML</title>
    <style>
      .wrapper {
        width: 200px;
        display: block;
      }
      .wrapper input {
        margin: 5px 0;
      }
      .wrapper input[type="submit"] {
        display: block;
        width: 173px;
        background-color: #cdcdcd;
        cursor: pointer;
      }
    </style>
  </head>
  <body>

    <div class="wrapper">
      <form action="./p-xml.php" method="POST">
        <input type="text" name="nome" placeholder="Nome" required autocomplete="off">
        <input type="email" name="email" placeholder="E-mail" required autocomplete="off">
        <input type="text" name="telefone" placeholder="Telefone" required autocomplete="off">
        <input type="text" name="endereco" placeholder="Endereço" required autocomplete="off">
        <input type="text" name="profissao" placeholder="Profissão" required autocomplete="off">
        <input type="text" name="formacao" placeholder="Formação" required autocomplete="off">
        <select name="estado_civil">
          <option selected disabled hidden>Estado civil</option>
          <option value="Solteiro(a)">Solteiro(a)</option>
          <option value="Casado(a)">Casado(a)</option>
          <option value="Viúvo(a)">Viúvo(a)</option>
          <option value="Enrolado">Enrolado</option>
        </select>
        <select name="tipo_sanguineo">
          <option selected disabled hidden>Tipo Sanguíneo</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="AB">AB</option>
          <option value="O">O</option>
          <option value="O">O-</option>
        </select>
        <input type="submit" name="send" value="Enviar">
      </form>
   </div>

  </body>
</html>
