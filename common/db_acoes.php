<?php
class conexao
{
    private $conn;
    private $dbname = "projeto_prontuario";
    private $host = "localhost";
    private $user = "root";
    private $pass = "";

    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=" . $this->dbname . ";host=" . $this->host, $this->user, $this->pass);
    }

    // chamando direto na paginha de cadastro com PHP
    public function consultaEstado()
    {
        $rest = $this->conn->prepare("SELECT * FROM estado");
        $rest->execute();
        $resta = $rest->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resta as $linha => $valor) {
            echo "<option id='" . $valor['id'] . "' value='" . $valor['id'] . "'>" . $valor['nome'] . "</option>";
        }
    }
    // Chamado pela pagina EXIBE CIDADE que retorna valor para o Ajax
    public function consultaCidade($idEstado)
    {
        $rest = $this->conn->prepare("SELECT c.id, c.nome FROM  cidade c WHERE c.uf=$idEstado");
        $rest->execute();
        $resta = $rest->fetchAll(PDO::FETCH_ASSOC);
        return $resta;
    }

    // inserir novo paciente no banco de dados.
    public function novoCadastroPac($nome, $dataNasc, $sexo, $rg, $cpf, $rua, $numeroResid, $bairro, $cidade, $cep, $telefone, $email)
    {
        $insert = $this->conn->prepare("INSERT INTO cadastro_paciente (nome, dataNasc, sexo, rg, cpf, rua, numeroResid, bairro, cidade, cep, telefone, email
        ) VALUES (:nome, :dataNasc, :sexo, :rg, :cpf, :rua, :numeroResid, :bairro, :cidade, :cep, :telefone, :email)");

        $insert->bindValue(':nome', $nome);
        $insert->bindValue(':dataNasc', $dataNasc);
        $insert->bindValue(':sexo', $sexo);
        $insert->bindValue(':rg', $rg);
        $insert->bindValue(':cpf', $cpf);
        $insert->bindValue(':rua', $rua);
        $insert->bindValue(':numeroResid', $numeroResid);
        $insert->bindValue(':bairro', $bairro);
        $insert->bindValue(':cidade', $cidade);
        $insert->bindValue(':cep', $cep);
        $insert->bindValue(':telefone', $telefone);
        $insert->bindValue(':email', $email);
        $insert->execute();

        header('location:http://localhost/projeto_prontuario/src/pages/?tela=novoPac&men=1');
    }
    // Function para atualizar o cadastro do paciente.
    function atualizaCadastroPac($id,$nome, $dataNasc, $sexo, $rg, $cpf, $rua, $numeroResid, $bairro, $cidade, $cep, $telefone, $email){
        $update = $this->conn->prepare("UPDATE cadastro_paciente SET nome=:nome,dataNasc=:dataNasc, sexo=:sexo, rg=:rg, cpf=:cpf, rua=:rua, numeroResid=:numeroResid, bairro=:bairro, cidade=:cidade, cep=:cep, telefone=:telefone, email=:email WHERE id=:id");
        $update->bindValue(':nome', $nome);
        $update->bindValue(':dataNasc', $dataNasc);
        $update->bindValue(':sexo', $sexo);
        $update->bindValue(':rg', $rg);
        $update->bindValue(':cpf', $cpf);
        $update->bindValue(':rua', $rua);
        $update->bindValue(':numeroResid', $numeroResid);
        $update->bindValue(':bairro', $bairro);
        $update->bindValue(':cidade', $cidade);
        $update->bindValue(':cep', $cep);
        $update->bindValue(':telefone', $telefone);
        $update->bindValue(':email', $email);
        $update->bindValue(':id', $id);
        $update->execute();
        header('location:http://localhost/projeto_prontuario/src/pages/?tela=novoAtLocPac&loc=&opLoc=nome');
    }

    // function para deletar o cadastro
    function delCad($codPac){
        $del = $this->conn->prepare("DELETE FROM cadastro_paciente WHERE id=:id");
        $del->bindValue(':id',$codPac);
        $del->execute(); 
        return;
    }

// lista paciente na tela de localização para novo atendimento;
    function listarPac($loc, $opLoc){
        if ($loc != " "){
            $loc = "'%" . $loc . "%'";
        }else{
            $loc = "'%%'";
        };
        $list = $this->conn->query("SELECT * FROM cadastro_paciente WHERE $opLoc LIKE $loc ORDER BY nome ASC ");
        $list->execute();
        $list = $list->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    // consulta unica para tela de atendimento.
    function novoAtConsultaPac($idPac){
        $pac = $this->conn->prepare("SELECT * FROM cadastro_paciente WHERE id = :idPac");
        $pac->bindValue(':idPac',$idPac);
        $pac->execute();
        $pac = $pac->fetch(PDO::FETCH_ASSOC);
        return $pac;
    }

// insert da descrição do atendimento
    function incluirAtDesc($dataAt,$desc, $idPac){
        $atDesc = $this->conn->prepare("INSERT INTO atendimento (data_atendimento, desc_atendimento, id_paciente) values (:dataAt, :descAt, :idPac)");
        $atDesc->bindValue(':dataAt',$dataAt);
        $atDesc->bindValue(':descAt',$desc);
        $atDesc->bindValue('idPac',$idPac);
        $atDesc->execute();
        echo "Inclusão realizada com sucesso!!";
    }
    function listAt($idPac){
        $atPac = $this->conn->prepare("SELECT data_atendimento, desc_atendimento FROM atendimento WHERE id_paciente = :idPac ORDER BY id DESC");
        $atPac->bindValue(':idPac',$idPac);
        $atPac->execute();
        $ret = $atPac->fetchAll(PDO::FETCH_ASSOC);
        return $ret;
    }
}
