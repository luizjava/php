<?php include 'Cabecalho.html';
      include './Bd/ConectBD.php';?>
        
    <div class="center_content">
    
     	<div class="center_left">
        	<div class="title_welcome"><span class="red">VAGAS</span> para todo o sul do Brasil</div> 
                
              
                
          <?php

$estado= $_GET['estado'];
$cidade= $_GET['cidade'];
$vaga= $_GET['vaga'];


 $query = "SELECT * FROM vagas WHERE 1 = 1";

        foreach($_GET['estado'] as $estado)
               if(!empty($estado))    //verifica se o array não está vazio 
                    $query .=" AND Estado ='$estado'";


        foreach($_GET['cidade'] as $cidade)
               if(!empty($cidade))
                   $query .=" AND Cidade ='$cidade'" ;
 
       if(!empty($vaga))
                 $query .=" AND Titulo LIKE '%$vaga%'" ;
    
   
//echo $query; exit;
//$query = "SELECT * FROM vagas WHERE Cidade like'$cidade%'";
//echo ($query);
//exit;
$sql = mysqli_query($conexao,$query);


$result = mysqli_num_rows($sql);
//echo $result;
if($result > 0){
    
   for($i=0;$i<$result;$i++){
       
        
      $array = mysqli_fetch_row($sql);
              $cod_vaga = $array[0];

                echo '<div class="welcome_box">';
                echo '<p class="welcome">';
              
                //echo ('<input type="hiden" name="vaga" value="'.$titulo.'"/>');   
                echo " TITULO : $array[1]<br>";
                echo "Cidade : $array[2] <br>";
                //echo "Estado : $array[3] )<br>";
                //echo "Contratação :  $array[4] <br>";
                echo "Faixa Salarial:  $array[5] <br>";
                echo "Número de Vagas :  $array[6] <br>";
                echo "Descri&ccedil;&atilde;o :  $array[7] <br>";
               // echo "Estado :  $array[8]<br>";
               // echo "Cep : $array[9]<br>";
                //echo "Email :  $array[10]";
                //echo'</div>';
             echo'</div>';
    echo ('<form action="Vaga" metod="GET">');  
    echo ('<a href="Vaga.php?vaga='.$cod_vaga.'" class="read_more">Leia mais</a>');   
    echo ('</form>');  
    echo ('<br><br>');
    
    }
       
    
}else{
    echo '<br><h1>.....Nenhum registro encontrado.....</h1><br>';
   
}
mysqli_close($conexao);?>
                      
<div class="features">   
      <div class="title">Main features</div>

     <ul class="list">
        <li><span>1</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
        <li><span>2</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
        <li><span>3</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
        <li><span>4</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
     </ul> 
</div> 








</div> 


<div class="center_right"> <!--Box de login-->

<div class="software_box"><img src="images/rhsullogo02.png" class="software_box" alt="" title="" /></div>

         <div class="text_box">
             <form action="Login.php" method="post">       
                 <div class="title">Clients login</div>
                        <div class="login_form_row">
                               <label class="login_label">Username:</label><input type="text" name="usuario" class="login_input" />
                        </div>
             
                       <div class="login_form_row">
                            <label class="login_label">Password:</label><input type="password" name="senha" class="login_input" />
                       </div>  
                       <div class="cadastro"><a href="">Cadastre-se</a></div>                                   
                   <input type="image" src="images/login.gif" class="login" />                              
             </form>
         </div>
         
        


</div>  <!--fecha box de login-->

<div class="clear"></div> 
</div>    

<?php include 'Rodape.html';?>