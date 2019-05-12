<?php

$id = $_GET['id'] ?? null;

// Carrega o arquivo
$xml = simplexml_load_file('../data/database.xml');

// Usa o método XPath para encontrar um nó específico para deletar
$target = $xml->xpath("//cliente[@id=$id]");

// Caso não exista, retorna null
if(!$target) return;

// Caso contrário, cria a instância para a função dom e remove o filho desse elemento pai
$domRef = dom_import_simplexml($target[0]);
$domRef->parentNode->removeChild($domRef);

// Após, salva o novo arquivo XML com a DOMDocument
$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('../data/database.xml');

header('location: ../pages/list.php');
