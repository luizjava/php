<?php include 'Cabecalho.html';
      include './Bd/ConectBD.php';?>
        
    <div class="center_content">
    
     	<div class="center_left">
        	<div class="title_welcome"><span class="red">VAGAS</span> para todo o sul do Brasil</div> 
                
              
                
          <?php
            
                  $query = "SELECT * FROM vagas ";
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
                            mysqli_close($conexao);
           ?>
                      
               <div class="features">   
                     <div class="title">Main features</div>
            
                    <ul class="list">
                       <li><span>1</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                       <li><span>2</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                       <li><span>3</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                       <li><span>4</span><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></li>
                    </ul> 
               </div> 
        
         
         <div class="features">   
            <div class="title">Latest News</div>
                <div class="news_box">
                    <div class="news_icon"></div>
                    <div class="news_content">
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </div>   
                </div>
                <div class="news_box">
                    <div class="news_icon"></div>
                    <div class="news_content">
                    “Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </div>   
                </div>       

         </div> 
         
         <form action="Contato.php" method="POST"> <!--  chama o envia.php -->        
        
        
                   
        <div class="formulario-texto">Nome</div>
        <div class="formulario-campo">
        <span id="sprytextfield1">
        <input type="text" name="nomeremetente" class="textfield-nome"/>
        <br /><span class="textfieldRequiredMsg">Digite seu nome</span></span></div>
        
        
        <div class="formulario-texto">E-mail</div>
        <div class="formulario-campo"><span id="sprytextfield2">
        <input type="text" name="emailremetente" class="textfield-nome"/>
        <br /><span class="textfieldRequiredMsg">Digite seu e-mail</span>
        <span class="textfieldInvalidFormatMsg">Formato de e-mail inv�lido</span></span></div> 
        
          
        
        
        <div class="formulario-texto">Telefone</div>
        <div class="formulario-campo">
        
        <span id="sprytextfield3">
        <input type="text" name="ddd" class="textfield-ddd" />
        <span class="textfieldRequiredMsg">Digite seu DDD</span>
        <span class="textfieldInvalidFormatMsg">Digite os 2 n�meros do seu DDD</span>
        <span class="textfieldMinCharsMsg">Digite os 2 n�meros do seu DDD</span>
        <span class="textfieldMaxCharsMsg">Digite os 2 n�meros do seu DDD</span></span>
        
        <span id="sprytextfield4">
        <input type="text" name="telefone" class="textfield-telefone" /> <br />
        <span class="textfieldRequiredMsg">Digite seu telefone</span>
        <span class="textfieldInvalidFormatMsg">Formato inv�lido, digite seu telefone como no exemplo: 78872332</span></span></div>
                                                       
        
                      
        <div class="formulario-texto">Assunto</div>
        <div class="formulario-campo"><span id="sprytextfield5">
        <input type="text" name="assunto" class="textfield-nome"/>
        <br /><span class="textfieldRequiredMsg">Digite o assunto</span></span></div>
        
        
        <div  style="float:left; width:100%;"> </div>
        <div class="formulario-texto">Mensagem</div>
        <div class="formulario-campo"><span id="sprytextarea1">
        <textarea name="mensagem" cols="35" rows="6"></textarea>
        <br /><span class="textareaRequiredMsg">Digite sua mensagem</span></span></div>
                              
        <div>
        <input name="enviar" type="reset" value="Limpar" class="btn-contato-reset"  />
        <input name="enviar" type="submit" value="Enviar" class="btn-contato-enviar"  />                
        </div>
        
        
        </form> 
           
            
            
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
                                      <a href="Novo_usuario.php" class="ar">Cadastre-se</a> 
                                  <input type="image" src="images/login.gif" class="login" />                              
                            </form>
                        </div>
                        
                        <div class="testimonials">
                        	<div class="title">Testimonials</div>
                            <div class="text_box">
                             <p class="testimonial">
                             “Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam”<br />
                             <strong>Edward Caloryd</strong>
                             
                             </p>
                            
                            
                            </div>                    
                        
                        </div>
        

        </div>  <!--fecha box de login-->
        
        <div class="clear"></div> 
     </div>    

   <?php include 'Rodape.html';?>



