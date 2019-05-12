<?php

$xmldoc = new DomDocument('1.0');
$xmldoc->preserveWhiteSpace = true;
$xmldoc->formatOutput = true;

$id = rand();
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$profissao = $_POST['profissao'];
$formacao = $_POST['formacao'];
$estado_civil = $_POST['estado_civil'];
$tipo_sanguineo = $_POST['tipo_sanguineo'];

$file = file_get_contents('./database.xml');

if($file) {
  $xmldoc->loadXML($file, LIBXML_NOBLANKS);

  $root = $xmldoc->getElementsByTagName('maincontent')->item(0);

  $cliente = $xmldoc->createElement("cliente");
  $numAttribute = $xmldoc->createAttribute("id");
  $numAttribute->value = $id;
  $cliente->appendChild($numAttribute);

  $root->insertBefore($cliente, $root->firstChild);

  // Name node
  $nameElement = $xmldoc->createElement('name');
  $cliente->appendChild($nameElement);
  $nameText = $xmldoc->createTextNode($nome);
  $nameElement->appendChild($nameText);

  // Email node
  $emailElement = $xmldoc->createElement('email');
  $cliente->appendChild($emailElement);
  $emailText = $xmldoc->createTextNode($email);
  $emailElement->appendChild($emailText);

  // Phone node
  $emailElement = $xmldoc->createElement('phone');
  $cliente->appendChild($emailElement);
  $emailText = $xmldoc->createTextNode($email);
  $emailElement->appendChild($emailText);

  $xmldoc->save('./database.xml');
}
