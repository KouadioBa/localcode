<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test for db on SQLite3</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
<h1 class="form pt-5" style="text-align:center;color:blue">This is a form for redirecting on the data rows page</h1>
    <div class="container pt-5">
        <form action="indexOne.php" method="post" style="margin-bottom:20px">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">firstname</label>
                <input type="text" class="form-control" name="firstname">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" class="form-control" name="age">
            </div>
            <button type="submit" class="btn btn-primary" value="Envoyer">Submit</button>
        </form>
        <button class="btn btn-info"><a href="indexOne.php" style="text-decoration:none;color: white">System admin</a></button>
    </div>
</body>
</html>

<?php

    

    // $db->exec('CREATE TABLE students (id INTEGER PRIMARY KEY AUTOINCREMENT, firstname TEXT,name TEXT, age NUMBER)');
    // $db->exec("INSERT INTO student (firstname,name,age) VALUES ('Cedric', 'Kouadio Ba', '24')");
    // $sqlOne = "SELECT * FROM student";
    // $resultOne = $db->query($sqlOne);
    // $rowOne = $resultOne->fetchArray(SQLITE3_ASSOC);
    // echo $rowOne['id']." ";
    // echo $rowOne['firstname']." ";
    // echo $rowOne['name']." ";
    // echo $rowOne['age']."<br>";

    // recuperation des lignes de la table via le formulaire

    // $sql = "SELECT * FROM student";
    // $result = $db->query($sql);
    // while($row = $result->fetchArray(SQLITE3_ASSOC)){
    //     echo $row['id']." ";
    //     echo $row['firstname']." ";
    //     echo $row['name']." ";
    //     echo $row['age']."<br>";
    // }

?>