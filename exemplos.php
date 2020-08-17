<?php
// nome = Victor';DROP DATABASE;'
// $nome = $_POST['nome'];

// $query = "SELECT * FROM pessoas WHERE nome = :nome";

// $db = new PDO('');
// $db->bindValue(':nome', $nome);
// $resultado = $db->statement($query);

// =============================================================
// ler o arquivo arquivo json;
    file_get_contents('produtos.json');
// incrementar o array

// gravar no PC



$produtos = [
    ['nome' => "Pão", 'valor' => 5.00, 'descricao' => "BLABLA"]
];

// JSON ENCODE, CONVERTE TIPO ARRAY PARA STRING NO FORMATO JSON
$string_json = json_encode($produtos);
//converte para: "{nome: \"Maionese\", valor: 5.00, descricao: \"BlaBla\"}";


file_put_contents('produtos.json', $string_json);


