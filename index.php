<?php
    $conn = new mysqli("localhost","root","","todolist");
    if($conn->connect_error){
        die("Connection Failed ".$conn->connect_error);
    }
    if(isset($_POST["addtask"])){
        $task = trim($_POST["task"]);
        if(!empty($task))
            {$conn -> query("INSERT INTO tasks (task) VALUES ('$task')");
        }
        
        header("Location: index.php");
    }   
    $result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
    if(isset($_GET["delete"])){
        $id = $_GET["delete"];
        $conn->query("DELETE FROM tasks WHERE id ='$id'");
        header("Location: index.php");
    }
    if(isset($_GET["complete"])){
        $id = $_GET["complete"];
        $conn->query("UPDATE  tasks SET status ='completed' WHERE id='$id'");
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="d-flex justify-content-center align-items-center vh-100 ">
        <div class="card p-4 shadow" style="width: 400px">
        <h1>Todo List</h1>
        <form action="index.php" method="POST">
            <input type="text" name="task" placeholder="add new task" required>
            <button type="Submit" name="addtask">Add Task</button>
        </form>
        <ul >
            <br>
            <?php while($row =$result->fetch_assoc()):?>
            <li class="<?php echo $row["status"];?>">
               <strong><?php echo $row["task"];?></strong>
               <div class="actions">
                <a href="index.php?complete=<?php echo $row['Id']; ?>">Complete</a>
                <a href="index.php?delete=<?php echo $row['Id']; ?>">Delete</a>
                  
               </div> 
            </li>
            <?php endwhile ?>
        </ul>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>