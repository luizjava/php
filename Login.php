<?php
include './Bd/ConectBD.php';
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//echo $usuario;
$query = "SELECT * FROM slogin_users WHERE Usuario = '".$usuario."' and Senha = '".$senha."'";
//echo ($query);

$sql = mysqli_query($conexao,$query);


$result = mysqli_num_rows($sql);
//echo $result;
if($result > 0){
      
  
   for ($i=0; $i<=$result; $i++){
        
        $array = mysqli_fetch_row($sql);
       
        
        $codigo_usuario = $array[0];
        $nome = $array[3];
        $sexo=$array[4];
        $nascimento=$array[5];
        $endereco=$array[6];
        $cidade=$array[7];
        $estado=$array[8];
        $cep=$array[9];
        $email=$array[10];
        $categoria=$array[11];
        $cpf_cnpj=$array[12];
        
        
        
           
            //echo $array[2];
            if($array[1] != $usuario ){
                 echo "Login não existe !";
                // header("Location: Admin/index.html");
            }
             
                  if($array[2] != $senha ){
                     echo "Senha Incorreta !";
                    // header("Location: Admin/index.html");
                  }
          
                       if($array[1] == $usuario && $array[2] == $senha ){
                          echo "Usuário auteticado com sucesso";
                          
                          $_SESSION['usuario']=$usuario;
                          $_SESSION['senha']=$senha;
                          $_SESSION['ID']=$array[0];                          
                          $_SESSION['nome'] = $array[3];
                          $_SESSION['sexo']=$array[4];
                          $_SESSION['nascimento']=$array[5];
                          $_SESSION['endereco']=$array[6];
                          $_SESSION['cidade']=$array[7];
                          $_SESSION['estado']=$array[8];
                          $_SESSION['cep']=$array[9];
                          $_SESSION['email']=$array[10];
                          $_SESSION['categoria']=$array[11];
                          $_SESSION['cpf_cnpj']=$array[12];
                          
                          header("Location: Admin/Index.php");
                          
                         
                         
                        }
       
    }
    
    
    
}else{
    echo 'Usuário não cadastrado<br>';
   header("Location:index.php");
    mysqli_close($conexao);
   
}
