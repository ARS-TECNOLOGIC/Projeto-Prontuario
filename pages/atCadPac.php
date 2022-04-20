
            <?php include '../common/db_acoes.php';
            $atualizarCad = new conexao();

           if(isset($_GET['men'])){
                $mensagem = 1; 
            }
            
            if(isset($_GET['codPac']) and $_GET['codPac']!=" "){
                $pac= $atualizarCad->novoAtConsultaPac($_GET['codPac']);
            }
         ?>
        
           <script type="text/javascript" src="../common/jquery-3.6.0.min.js"></script>
            <h1 class="h1-titulo" id="teste1">Atualizar Cadastro:</h1>
            <div class="form">
                <form action="../pages/preparaForm.php" id="formCad" onsubmit="validaForm(event)" method="POST">
                    <fieldset class="fieldCadastro">
                        <legend>Dados Pessoais</legend>
                        <input type="hidden" value="atCad" name="acao">
                        <input type="hidden" value="<?php echo $pac['id']?>" name="codPac">
                        <label for="">Nome completo:
                            <input type="text" name="nome" id="nome" size="60" value="<?php echo $pac['nome'];?>">
                        </label>
                        <label for="">Data de Nascimento:
                            <input type="date" name="dataNasc" id="dataNasc" size="" value="<?php echo $pac['dataNasc'];?>">
                        </label>
                        <label for="">Sexo:
                            <select id="listSexo" name="sexo">
                            <option value="1" <?php if($pac['sexo']==1){echo "selected";}?>>Feminino</option>
                            <option value="2" <?php if($pac['sexo']==2){echo "selected";}?>>Masculino</option>
                        </select>
                           
                        </label>
                      

                        <label for="">RG:
                            <input type="number" name="rg" id="rg" size="6" value="<?php echo $pac['rg'];?>">
                        </label>
                        <label for="">CPF:
                            <input type="number" name="cpf" id="cpf" size="10"value="<?php echo $pac['cpf'];?>" >
                        </label>

                    </fieldset>
                    <fieldset class="fieldCadastro">
                        <legend>Endereço/Contato</legend>
                        <label for="">Rua:
                            <input type="text" name="rua" id="rua" size="60" value="<?php echo $pac['rua'];?>">
                        </label>
                        <label for="">N°:
                            <input type="text" name="numeroResid" id="numeroResid" size="3" value="<?php echo $pac['numeroResid'];?>">
                        </label>
                        <label for="">Bairro:
                            <input type="text" name="bairro" id="bairro" size="15" value="<?php echo $pac['bairro'];?>">
                        </label>

                        <label for="">UF:
                            <select id="estados" name="estado">
                                <option value="teste1" id="selectEstado" >Estado</option>
                               
                                <!-- php para listar estado -->
                                <?php
                                   $atualizarCad->consultaEstado();
                                ?>

                            </select>
                        </label>

                        <label for=""> Cidade:
                            <select id="cidade" name="cidade">
                                <option value="" id="selctCidade">Cidade</option>
                                <!-- Ajax retorna aqui as cidades::::Consultar o arquivo javascript -->
                            </select>
                        </label>

                        <label for="">CEP:
                            <input type="number" name="cep" id="cep" size="7" value="<?php echo $pac['cep'];?>">
                        </label>
                        <label for="">Telefone:
                            <input type="tel" name="telefone" id="telefone" size="10" value="<?php echo $pac['telefone'];?>">
                        </label>
                        <label for="">E-mail:
                            <input type="email" name="email" id="email" size="30" value="<?php echo $pac['email'];?>">
                        </label>
                    </fieldset>
                    <div class="box-btn">
                        <input type="submit" value="ATUALIZAR" id="sub">   
                    </div>
                </form>
           
            </div>
         
            </div>