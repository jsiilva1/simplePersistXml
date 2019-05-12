<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista dos clientes</title>
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/css/all.min.css">
    <link rel="stylesheet" href="./static/css/main.css">
  </head>
  <body>

    <div class="container-fluid">
      <h1>Clientes</h1>

      <table class="table">
        <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Fone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Profissão</th>
                <th scope="col">Formação</th>
                <th scope="col">Estado Civil</th>
                <th scope="col">Tipo Sanguíneo</th>
                <th scope="col">Ação</th>
              </tr>
        </thead>
        <tbody>
          <?php
            $xmldoc = simplexml_load_file("./database.xml") or die("Falha ao carregar o arquivo de dados");
            foreach($xmldoc->children() as $client) {
          ?>
          <tr>
            <td><?php echo $client->name;?></td>
            <td><?php echo $client->email;?></td>
            <td><?php echo $client->phone;?></td>
            <td><?php echo $client->address;?></td>
            <td><?php echo $client->profession;?></td>
            <td><?php echo $client->formation;?></td>
            <td><?php echo $client->maritalStatus;?></td>
            <td><?php echo $client->bloodType;?></td>
            <td>
              <a href="" title="Editar"><i class="far fa-edit"></i></a> |
              <a href="" title="Excluir"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <script src="./static/js/bootstrap.min.js"></script>
    <script src="./static/js/fontawesome.min.js"></scri
  </body>
</html>
