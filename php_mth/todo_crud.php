<?php 

    $host = "localhost";
    $usuario = "root";
    $senha = "012220";
    $banco = "todo_list";    

    $conn = new mysqli($host, $usuario, $senha, $banco);

    if ($conn->connect_error) {
        die ("Falha na conexão com o banco". $conn->connect_error);
    }

    // Criação de tarefas
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["descricao"])) {
        $descricao = $conn->real_escape_string($_POST['descricao']);
        $sqlinsert = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";

        if ($conn->query($sqlinsert) === TRUE) {
            header("Location: todo_crud.php");
            exit();
        }
    }

    // Exclusão de tarefas
    if (isset($_GET['delete'])) {
        $id = intval($_GET['delete']);
        $sqldelete = "DELETE FROM tarefas WHERE id = $id";

        if ($conn->query($sqldelete) === TRUE) {
            header(header: "Location: todo_crud.php");
            exit();
        } else {
            echo "Erro ao excluir tarefa: " . $conn->error;
        }
    }


    $tarefas = [];

    // Resgate das tarefas
    $sqlselect = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
    $result = $conn->query($sqlselect);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tarefas[] = $row;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list</title>
</head>
<body>
    <h1>To-do List</h1>
    <form action="todo_crud.php" method="POST">
        <input type="text" placeholder="Adicione uma nova tarefa" name="descricao" required>
        <button type="submit">Adicionar</button>
    </form>

    <h2>Minhas tarefas</h2>
    <?php if (!empty($tarefas)): ?>
        <ul>
            <?php foreach($tarefas as $tarefa): ?>
                <li>    
                    <?php echo $tarefa['descricao'];?>
                    <a href="todo_crud.php?delete=<?php echo $tarefa['id']?>">Excluir</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
            <p>Não há tarefas</p>
    <?php endif; ?>


</body>
</html>