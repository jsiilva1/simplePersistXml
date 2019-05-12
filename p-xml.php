<?php
$xmldoc = new DomDocument('1.0');
$xmldoc->preserveWhiteSpace = true;
$xmldoc->formatOutput = true;

$id = rand();
$nome = $_POST['nome'] ?? null;
$email = $_POST['email']?? null;
$telefone = $_POST['telefone']?? null;
$endereco = $_POST['endereco']?? null;
$profissao = $_POST['profissao']?? null;
$formacao = $_POST['formacao'] ?? null;
$estado_civil = $_POST['estado_civil'] ?? null;
$tipo_sanguineo = $_POST['tipo_sanguineo'] ?? null;

// Traz o arquivo para a memória
$file = file_get_contents('./database.xml');

if($file) {
  $xmldoc->loadXML($file, LIBXML_NOBLANKS);

  $root = $xmldoc->getElementsByTagName('maincontent')->item(0);

  $cliente = $xmldoc->createElement("cliente");

  $root->insertBefore($cliente, $root->firstChild);

  // Nó do nome
  $idElement = $xmldoc->createElement('id');
  $cliente->appendChild($idElement);
  $idText = $xmldoc->createTextNode($id);
  $idElement->appendChild($idText);

  // Nó do nome
  $nameElement = $xmldoc->createElement('name');
  $cliente->appendChild($nameElement);
  $nameText = $xmldoc->createTextNode($nome);
  $nameElement->appendChild($nameText);

  // Nó do email
  $emailElement = $xmldoc->createElement('email');
  $cliente->appendChild($emailElement);
  $emailText = $xmldoc->createTextNode($email);
  $emailElement->appendChild($emailText);

  // Phone node
  $phoneElement = $xmldoc->createElement('phone');
  $cliente->appendChild($phoneElement);
  $phoneText = $xmldoc->createTextNode($telefone);
  $phoneElement->appendChild($phoneText);

  // Nó do endereço
  $addressElement = $xmldoc->createElement('address');
  $cliente->appendChild($addressElement);
  $addressText = $xmldoc->createTextNode($endereco);
  $addressElement->appendChild($addressText);

  // Nó da profissão
  $professionElement = $xmldoc->createElement('profession');
  $cliente->appendChild($professionElement);
  $professionText = $xmldoc->createTextNode($profissao);
  $professionElement->appendChild($professionText);

  // Nó da formação
  $formationElement = $xmldoc->createElement('formation');
  $cliente->appendChild($formationElement);
  $formationText = $xmldoc->createTextNode($formacao);
  $formationElement->appendChild($formationText);

  // Nó do estado civil
  $maritalStatusElement = $xmldoc->createElement('maritalStatus');
  $cliente->appendChild($maritalStatusElement);
  $maritalStatusText = $xmldoc->createTextNode($estado_civil);
  $maritalStatusElement->appendChild($maritalStatusText);

  // Nó do tipo sanguineo
  $bloodTypeElement = $xmldoc->createElement('bloodType');
  $cliente->appendChild($bloodTypeElement);
  $bloodTypeText = $xmldoc->createTextNode($tipo_sanguineo);
  $bloodTypeElement->appendChild($bloodTypeText);

  $xmldoc->save('./database.xml');

  header('location: getData.php');
}
