<?php include "Header.html";
include "Menu.php";?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                   <h2> Cadastro de vagas</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                            
                                <form action="Operacoes.php" method="POST">
                                 <div class="col-md-6">
                                        
                                       <label class="form-group has-success" for="inputSuccess">Login</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" name="usuario" class="form-control" placeholder="usuario">
                                        </div>
                                                                  
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">Senha</label>
                                            <input type="password" name="senha" class="form-control" id="inputSuccess">
                                        </div> 
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">Nome</label>
                                            <input type="text" name="nome" class="form-control" id="inputSuccess">
                                        </div>
                                         <div class="form-group">
                                            <label>Sexo</label>
                                            <select name="sexo" class="form-control">
                                                <option value="">Selecione</option>
                                                <option value='m'>M</option>
                                                <option value='f'>F</option>
                                               
                                            </select>
                                        </div>
                                     <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Data de Nascimento</label>
                                            <input type="date" name="datanasc" class="form-control" id="inputSuccess">
                                        </div>
                                      
                                                
                                        <div class="form-group has-success">
                                            <label>Estado</label>
                                            <select name="estado" class="form-control">
                                                <option value="">Seleciona</option>
                                                <option value='Rio Grande do Sul(RS)'>Rio Grande do Sul(RS)</option>
                                                <option value='Santa Catarina(SC)'>Santa Catarina(SC)</option>
                                                <option value='Paraná(PR)'>Paraná(PR)</option>
                                            </select>
                                        </div>
                                    <br />
                                 </div>       
                                  <div class="col-md-6">
                                                            
                                  
                                  <div class="form-group has-success">
                                            <label class="control-label" for="inputError">Endereço</label>
                                            <input type="number" name="endereco" class="form-control" id="inputError">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">Telefone</label>
                                            <input type="text" name="tel" class="form-control" id="inputError">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">Cidade</label>
                                            <input type="text" name="cidade" class="form-control" id="inputError">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">CEP</label>
                                            <input type="text" name="cep" class="form-control" id="inputError">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">E-mail</label>
                                            <input type="text" name="email" class="form-control" id="inputError">
                                        </div>
                                        <div class="form-group has-success">
                                            <label>Categoria</label>
                                            <select name="categoria" class="form-control">
                                                <option value="">Seleciona</option>
                                               <!-- <option value='Rio Grande do Sul(RS)'>Rio Grande do Sul(RS)</option>-->
                                                <option value='empresa'>Empresa</option>
                                                <option value='recrutador'>Recrutador</option>
                                            </select>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">CPF ou CNPJ</label>
                                            <input type="text" name="documento" class="form-control" id="inputError">
                                        </div>
                                       <button type="submit" class="btn btn-primary">Cadastrar</button>
                                   </div>    
                                 
                                 </form>  
                                
                                     
                               
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
   <?php include "Admin/Footer.html" ?>