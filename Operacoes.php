<?php
include "./Bd/ConectBD.php";
  
  //select * vagas where estado like ... , vaga like ...


  
$sql = "INSERT INTO slogin_users(
    ID,
Usuario,
Senha,
Nome,
Sexo,
Nascimento,
Endereco,
Tel,
Cidade,
Estado,
Cep,
Email,
Categoria,
Cpf_cnpj
)
Values
(
'',
'".$_POST["usuario"]."',
'".$_POST['senha']."',
'".$_POST['nome']."',
'".$_POST['sexo']."',
'".$_POST["datanasc"]."',
'".$_POST["endereco"]."',
'".$_POST["tel"]."',
'".$_POST["cidade"]."',
'".$_POST['estado']."',
'".$_POST['cep']."',
'".$_POST['email']."',
'".$_POST['categoria']."',
'".$_POST['documento']."'
)";

//echo $sql;
//exit;
//Executo a minha query
//echo $sql;
$query = mysqli_query($conexao, $sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
    echo "<script>alert('usuário cadastrado com sucesso');</script>";
  
    echo "<a href=index.php>Voltar</a>";


	}
else {
    echo "Não foi possivel inserir o registro - entre em contato com o webmaster ". mysqli_errno($conexao);
}


    
?>
