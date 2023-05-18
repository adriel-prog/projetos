<?php
  // Configurações de conexão com o banco de dados
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $banco = "farmacia";

  // Conecta ao banco de dados
  $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

  // Verifica a conexão
  if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
  }

  // Insere os dados do produto na tabela "Produtos"
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];

  $queryProduto = "INSERT INTO Produtos (nome, descricao, preco_unitario, quantidade_estoque) VALUES ('$nome', '$descricao', $preco, $quantidade)";

  if (mysqli_query($conexao, $queryProduto)) {
    echo "Dados do produto inseridos com sucesso.";
  } else {
    echo "Erro ao inserir os dados do produto: " . mysqli_error($conexao);
  }

  // Insere os dados da categoria na tabela "Categorias"
  $categoria = $_POST['categoria'];
  $descricaoCategoria = $_POST['descricao_categoria'];

  $queryCategoria = "INSERT INTO Categorias (nome, descricao) VALUES ('$categoria', '$descricaoCategoria')";

  if (mysqli_query($conexao, $queryCategoria)) {
    echo "Dados da categoria inseridos com sucesso.";
  } else {
    echo "Erro ao inserir os dados da categoria: " . mysqli_error($conexao);
  }

  // Insere os dados da marca na tabela "Marcas"
  $marca = $_POST['marca'];
  $descricaoMarca = $_POST['descricao_marca'];

  $queryMarca = "INSERT INTO Marcas (nome, descricao) VALUES ('$marca', '$descricaoMarca')";

  if (mysqli_query($conexao, $queryMarca)) {
    echo "Dados da marca inseridos com sucesso.";
  } else {
    echo "Erro ao inserir os dados da marca: " . mysqli_error($conexao);
  }

  // Insere os dados do fornecedor na tabela "Fornecedores"
  $fornecedor = $_POST['fornecedor'];
  $enderecoFornecedor = $_POST['endereco_fornecedor'];
  $telefoneFornecedor = $_POST['telefone_fornecedor'];

  $queryFornecedor = "INSERT INTO Fornecedores (nome, endereco, telefone) VALUES ('$fornecedor', '$enderecoFornecedor', '$telefoneFornecedor')";

  if (mysqli_query($conexao, $queryFornecedor)) {
    echo "Dados do fornecedor inseridos com sucesso.";
  } else {
    echo "Erro ao inserir os dados do fornecedor: " . mysqli_error($conexao);
  }

  // Fecha a conexão com o banco de dados
  mysqli_close($conexao);
?>
