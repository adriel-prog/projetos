<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Visualizar Dados</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Dados do Banco de Dados</h1>

  <?php
    // Estabelece a conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco");

    // Verifica se a conexão foi estabelecida com sucesso
    if (mysqli_connect_errno()) {
      echo "Falha na conexão com o banco de dados: " . mysqli_connect_error();
    } else {
      // Consulta SQL para recuperar os dados
      $sql = "SELECT p.nome, p.descricao, p.preco_unitario, p.quantidade_estoque, c.nome AS categoria, m.nome AS marca, f.nome AS fornecedor
              FROM Produtos AS p
              INNER JOIN Produtos_Categorias AS pc ON p.produto_id = pc.produto_id
              INNER JOIN Categorias AS c ON pc.categoria_id = c.categoria_id
              INNER JOIN Produtos_Marcas AS pm ON p.produto_id = pm.produto_id
              INNER JOIN Marcas AS m ON pm.marca_id = m.marca_id
              INNER JOIN Produtos_Fornecedores AS pf ON p.produto_id = pf.produto_id
              INNER JOIN Fornecedores AS f ON pf.fornecedor_id = f.fornecedor_id";

      $result = mysqli_query($conexao, $sql);

      if (mysqli_num_rows($result) > 0) {
        echo "<table>
                <tr>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Preço Unitário</th>
                  <th>Quantidade em Estoque</th>
                  <th>Categoria</th>
                  <th>Marca</th>
                  <th>Fornecedor</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['nome'] . "</td>";
          echo "<td>" . $row['descricao'] . "</td>";
          echo "<td>" . $row['preco_unitario'] . "</td>";
          echo "<td>" . $row['quantidade_estoque'] . "</td>";
          echo "<td>" . $row['categoria'] . "</td>";
          echo "<td>" . $row['marca'] . "</td>";
          echo "<td>" . $row['fornecedor'] . "</td>";
          echo "</tr>";
        }

        echo "</table>";
      } else {
        echo "Não há dados para exibir.";
      }

      // Fecha a conexão com o banco de dados
      mysqli_close($conexao);
    }
  ?>

</body>
</html>
