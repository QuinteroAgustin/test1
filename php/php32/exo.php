<?php include("sql.php");
$sql="SELECT * FROM items";
$request = db_connect()->prepare($sql);
$request->execute();
$response=$request->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ph32-ToDo List</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet"> 
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="list">
        <h1 class="header">To do.</h1>
        <ul class="items">
            <?php
            foreach($response as $todo){
                if($todo["done"]==1){
                    echo "<li><span class=\"item done\">".$todo["name"]."</span></li>";
                }else{
                    echo "<li><span class=\"item\">".$todo["name"]."</span><a href=\"mark.php?as=done&id=".$todo["id"]."\" class=\"done-button\">Mark as done</a></li>";
                }
            }
            ?>
        </ul>
        <form action="add.php" method="post" class="item-add">
            <input type="text" name="name" id="name" placeholder="Type a new item here" class="input" autocomplete="off" required>
            <input type="submit" name="submit" value="Add" class="submit">
        </form>
    </div>
    <a href="../../index.php">Index</a>
</body>   
</html>