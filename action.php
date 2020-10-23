<?php 
    $nome_colunas = $_POST['nome_coluna'];
    $setores_responsaveis = $_POST['setor_responsavel'];

    foreach( $nome_colunas as $key => $n) {
        $arr[$key] = array('nome_coluna' => $nome_colunas[$key], 'setor_responsavel' => $setores_responsaveis[$key]);

    }
    
    echo json_encode($arr);
  
?>