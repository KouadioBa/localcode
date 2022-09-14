<?php

    // data validate
    $db = new SQLite3('mydatabase.db');
    if($_POST){
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        if(!empty($firstname) AND !empty($name) AND !empty($age)){
            $db->exec('INSERT INTO student (firstname,name,age) VALUES ("'.$firstname.'","'.$name.'","'.$age.'")');
            
        }
        else{
            echo "juste pour un test donc ok!!!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>admin</title>
</head>
<body>
    <div class="container">
        <h1 class="title pt-5" style="text-align:center">Systeme Admin</h1>
        <div class="d-flex flex-row-reverse bd-highlight">
            <div class="p-2 bd-highlight">
                <button class="btn btn-success"><a href="index.php" style="text-decoration:none;color: white">Ajouter</a></button>
            </div>
        </div>
        <table class="table pt-5">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM student";
                $result = $db->query($sql);
                while($row = $result->fetchArray(SQLITE3_ASSOC)){
                    echo "<tr>";
                    echo "<th>".$row['id']."</th>";
                    echo "<th>".$row['firstname']."</th>";
                    echo "<th>".$row['name']."</th>";
                    echo "<th>".$row['age']."</th>";
                    echo "<tr>";
                }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>