            <?php include '../common/db_acoes.php';
            $novoPac = new conexao();

           if(isset($_GET['men'])){
                $mensagem = 1; 
            }
         ?>
        
           <script type="text/javascript" src="../common/jquery-3.6.0.min.js"></script>

            <h1 class="h1-titulo" id="teste1">Cadastrar Novo Paciente</h1>
            <div class="form">
                <form action="../pages/preparaForm.php" id="formCad" onsubmit="validaForm(event)" method="POST">
                    <fieldset class="fieldCadastro">
                        <legend>Dados Pessoais</legend>
                        <input type="hidden" value="novoCad" name="acao">
                        <label for="">Nome completo:
                            <input type="text" name="nome" id="nome" size="60">
                        </label>
                        <label for="">Data de Nascimento:
                            <input type="date" name="dataNasc" id="dataNasc" size="">
                        </label>
                        <label for="">Sexo:
                            <select id="listSexo" name="sexo">
                            <option value="1">Feminino</option>
                            <option value="2">Masculino</option>
                        </select>
                        </label>
                        <label for="">RG:
                            <input type="number" name="rg" id="rg" size="10">
                        </label>
                        <label for="">CPF:
                            <input type="number" name="cpf" id="cpf" size="10" >
                        </label>

                    </fieldset>
                    <fieldset class="fieldCadastro">
                        <legend>Endereço/Contato</legend>
                        <label for="">Rua:
                            <input type="text" name="rua" id="rua" size="60">
                        </label>
                        <label for="">N°:
                            <input type="text" name="numeroResid" id="numeroResid" size="3">
                        </label>
                        <label for="">Bairro:
                            <input type="text" name="bairro" id="bairro" size="15">
                        </label>

                        <label for="">UF:
                            <select id="estados" name="estado">
                                <option value="teste1" id="selectEstado" >Estado</option>
                               
                                <!-- php para listar estado -->
                                <?php
                                   $novoPac->consultaEstado();
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
                            <input type="number" name="cep" id="cep" size="7">
                        </label>
                        <label for="">Telefone:
                            <input type="tel" name="telefone" id="telefone" size="10">
                        </label>
                        <label for="">E-mail:
                            <input type="email" name="email" id="email" size="30">
                        </label>
                    </fieldset>
                    <div class="box-btn">
                        <input type="submit" value="CADASTRAR" id="sub">
                    </div>
                </form>
            </div>
            </div>