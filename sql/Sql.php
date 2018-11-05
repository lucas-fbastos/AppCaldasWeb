<?php 
	require("constantes.php");
	class Sql{
		private $host = HOST_BD;
		private $dbname = NAME_BD;
		private $user = USER_BD;
		private $pass = USER_PASS;


		public function insertUser($nome, $rg, $cpf, $email, $uf, $senha, $cidade, $telefone, $numero, $endereco, $complemento, $cep){

			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$verifica = $conn->prepare("SELECT cpf FROM cliente WHERE cpf = (:CONF) OR email =(:MAIL) OR rg = (:IRG)");
			$verifica->bindParam(":MAIL", $email);
			$verifica->bindParam(":CONF", $cpf);
			$verifica->bindParam(":IRG", $rg);
			$verifica->execute();
			$conta = $verifica->rowCount();
			if ($conta > 0) {			
				$erroCpf = " Cadastro existente no sistema";
				 header("location: ../cadastro/cadastrar.php?m=$erroCpf");
				exit();
			}else{
				$stmt = $conn->prepare("INSERT INTO cliente (nome, rg, cpf, email, uf, senha, cidade, telefone, numero, endereco, complemento, cep) VALUES(:NOME, :RG, :CPF, :EMAIL, :UF, :SENHA, :CIDADE, :TELEFONE, :NUMERO, :ENDERECO, :COMPLEMENTO, :CEP)");

				$stmt->bindParam(":NOME", $nome);
				$stmt->bindParam(":RG", $rg );
				$stmt->bindParam(":CPF", $cpf );
				$stmt->bindParam(":EMAIL", $email );
				$stmt->bindParam(":UF", $uf );
				$stmt->bindParam(":SENHA", $senha );
				$stmt->bindParam(":CIDADE", $cidade );
				$stmt->bindParam(":TELEFONE", $telefone );
				$stmt->bindParam(":NUMERO", $numero );
				$stmt->bindParam(":ENDERECO", $endereco );
				$stmt->bindParam(":COMPLEMENTO", $complemento );
				$stmt->bindParam(":CEP", $cep );
				$stmt->execute();
				unset($conn);
				return true;
			}
		}

		public function insertAp($titulo, $quartos, $pessoas, $portaria, $piscina, $lazer, $cobertura, $bairro, $numero, $endereco, $complemento, $conteudo, $img1, $img2, $img3){

			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				$stmt = $conn->prepare("INSERT INTO anuncio (titulo, quartos, pessoas, conteudo, piscina, lazer, cobertura, portaria, foto1, foto2, foto3, disponivel) VALUES(:titulo, :quartos, :pessoas, :conteudo, :piscina, :lazer, :cobertura, :portaria, :img1, :img2, :img3, :disponivel)");
				$disponivel = true;
				$stmt->bindParam(":titulo", $titulo);
				$stmt->bindParam(":quartos", $quartos );
				$stmt->bindParam(":pessoas", $pessoas );
				$stmt->bindParam(":conteudo", $conteudo );
				$stmt->bindParam(":piscina", $piscina );
				$stmt->bindParam(":lazer", $lazer );
				$stmt->bindParam(":cobertura", $cobertura );
				$stmt->bindParam(":portaria", $portaria );
				$stmt->bindParam(":img1", $img1 );
				$stmt->bindParam(":img2", $img2 );
				$stmt->bindParam(":img3", $img3 );
				$stmt->bindParam(":img3", $img3 );
				$stmt->bindParam(":disponivel", $disponivel);
				$stmt->execute();
				unset($conn);
				return true;
			}
		
		public function insereAdmin($login,$nome,$senha){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare("INSERT INTO usuario (nome, senha, login) VALUES (:NOME, :SENHA, :LOGIN)");
			$stmt->bindParam(":NOME", $nome);
			$stmt->bindParam(":SENHA", $senha);
			$stmt->bindParam(":LOGIN", $login);
			$stmt->execute();
			unset($conn);
			return "inserido";
		}

		public function login($login,$pass){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare("SELECT id, login, senha FROM usuario WHERE login =(:LOG) AND senha = (:PASS)");
			$stmt->bindParam(":LOG", $login);			
			$stmt->bindParam(":PASS", $pass);
			$stmt->execute();
			$i=0;
			$results = $stmt->fetchObject();
			if ($results) {
				return $results->id;
			}else{
				$msg = "Dados de acesso incorretos!";
				return header("Location: ../login/admin.php?m=$msg");
			}
			unset($conn);


			}

			public function loginUser($login,$pass){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare("SELECT id_cliente, email, senha FROM cliente WHERE email =(:LOG) AND senha = (:PASS)");
			$stmt->bindParam(":LOG", $login);			
			$stmt->bindParam(":PASS", $pass);
			$stmt->execute();
			$i=0;
			$results = $stmt->fetchObject();
			
			if ($results) {
				return $id = $results->id_cliente;;
			}else{
				$msg = "Dados de acesso incorretos!";
				return header("Location: ../index.php?m=$msg");
			}
			unset($conn);


			}
		
		public function selectId($id){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare('SELECT nome from usuario WHERE id = (:ID)');
			$stmt->bindParam(':ID', $id);
			$stmt->execute();
			$data =$stmt->fetchObject();
			return $data;
			unset($conn);
		}

		public function selectTodosAps(){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare('SELECT * from anuncio where ativo =1');
			$stmt->execute();
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			//$dataShow = json_encode($data);
			return $data;
			unset($conn);
		}
		public function selectTodosClientes(){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare('SELECT DISTINCT nome, id_cliente from cliente where ativo =1');
			$stmt->execute();
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			//$dataShow = json_encode($data);
			return $data;
			unset($conn);
		}

		public function insereReserva($idUser, $idImovel, $dataE, $dataS, $valorT){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare('INSERT INTO reserva (id_cliente, id_imovel, dataE, dataS, valorTotal, ativo) VALUES (:id_cliente, :id_imovel, :dataE, :dataS, :valorTotal, :ativo)');
			$ativo = '1';
			$stmt->bindParam(":id_cliente", $idUser);
			$stmt->bindParam(":id_imovel", $idImovel);
			$stmt->bindParam(":dataS", $dataS);
			$stmt->bindParam(":dataE", $dataE);
			$stmt->bindParam(":valorTotal", $valorT);
			$stmt->bindParam(":ativo", $ativo);
			$stmt->execute();
			return "inserido";
		}

		public function selectTodasReservas(){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare('SELECT reserva.valorPago, reserva.valorTotal, reserva.ativo, reserva.id_reserva, reserva.dataE,reserva.dataS, reserva.valorTotal, reserva.valorPago,cliente.nome, anuncio.titulo
			FROM ((reserva
			INNER JOIN cliente ON reserva.id_cliente = cliente.id_cliente)
			INNER JOIN anuncio ON reserva.id_imovel = anuncio.codigoanuncio)
			ORDER BY reserva.id_reserva DESC;');
			$stmt->execute();
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
			//$dataShow = json_encode($data);
			return $data;
			unset($conn);
		}
		
		public function selectCliente($id){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare('SELECT nome from cliente WHERE id_cliente = (:ID)');
			$stmt->bindParam(':ID', $id);
			$stmt->execute();
			$data =$stmt->fetchObject();
			return $data;
			unset($conn);
		}
            
        public function inativa($table ,$id){
        	$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $stmt = $conn->prepare('UPDATE '.$table.' SET ativo=0 WHERE id_cliente = (:ID)');
            $stmt->bindParam(':ID', $id);
			if($stmt->execute()){
			    $status = 'Inativado com sucesso!';
			}else{
			    $status = 'Ocorreu um erro ao inativar';
			}
			return  $status;
		}
		
		public function inativaReserva($id){
		    $conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $stmt = $conn->prepare('UPDATE reserva SET ativo=0 WHERE id_reserva = (:ID)');
            $stmt->bindParam(':ID', $id);
                    $retorno = array();

             $stmt->execute();
             if( $stmt->execute()) {
            $retorno["sucesso"] = true;
            $retorno["mensagem"] = "Transportadora alterada com sucesso.";
        } else {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = "Falha no sistema, tente mais tarde.";
        }
        echo json_encode($retorno);
		}
		
		public function descreveImovel($id){
			$conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare('SELECT * from anuncio WHERE codigoanuncio = (:ID)');
			$stmt->bindParam(':ID', $id);
			$stmt->execute();
			$data =$stmt->fetchObject();
			return $data;
			unset($conn);
		}
		public function descreveReserva($id){
		    $conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$stmt = $conn->prepare('SELECT * from reserva WHERE id_reserva = (:ID)');
			$stmt->bindParam(':ID', $id);
			$stmt->execute();
			$data =$stmt->fetchObject();
			return $data;
			unset($conn);
		}
		
    }
?>