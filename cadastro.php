<?php 

    include 'config.php';    

    if (isset($_POST["nome"]) && isset($_POST["email"])) {
  
        $nome = $_POST["nome"];
        $email = $_POST["email"];        

    }    
       
?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulário</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box-form ">
        <form action="" method="POST">
        <h3>Formulário</h3>

            <?php 

                if (!empty($_POST["nome"]) && !empty($_POST["email"])) {
                
                $sql = "INSERT INTO nova_tabela (nome, email) VALUES ('$nome', '$email')";
                if (mysqli_query($conn, $sql)) {
                    echo "<h5>Registro inserido com sucesso!</h5>";
                } else {
                    echo "Erro ao inserir o registro: " . mysqli_error($conn);
                }
                } else {
                 
                    echo "<h5>Campos obrigatórios.</h5>";
                }       
                       
            ?>

            <label for="nome">Nome:</label>
            <br>
            <input type="text" name="nome" id="nome" required><br>
            <br>
            <label for="email">Email:</label>
            <br>
            <input type="email" name="email" id="email" required><br>
            <br>
            <button type="submit" name="submit" value="Enviar">Enviar</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
