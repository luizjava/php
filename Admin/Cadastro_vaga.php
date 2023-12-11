<?php

include "../Bd/ConectBD.php";

session_start();
$codigo_usuario=$_SESSION['ID'];
//echo $codigo_usuario;
        
              
$sql = "INSERT INTO vagas(
ID_vaga,
Titulo,
Cidade,
Estado,
Contratacao,
Faixa_salarial,
Numero_vagas,
Descricao,
Requisitos,
Desejavel,
ID_usuario
)
Values
(
'',
'".$_POST["Titulo"]."',
'".$_POST['Cidade']."',
'".$_POST["Estado"]."',
'".$_POST["Contratacao"]."',
'".$_POST['Faixa_salarial']."',
'".$_POST['Numero_vagas']."',
'".$_POST['Descricao']."',
'".$_POST['Requisitos']."',
'".$_POST['Desejavel']."',
'".$codigo_usuario."'
)";

//echo $sql;exit;
//Executo a minha query
//echo $sql;
$query = mysqli_query($conexao, $sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
    echo "<script>alert('VAGA CADASTRADA COM SUCESSO');</script>";
    header('location:Nova_vaga.php');


	}
else {
    echo "Não foi possivel inserir o registro - entre em contato com o webmaster ". mysqli_errno($conexao)."";
   echo" <a href=Nova_vaga.html>voltar</a>";
}


    
?>
