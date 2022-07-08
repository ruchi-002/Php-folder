<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <style>
    form {
        width: 50%;
        margin: 45px auto;
        border-radius: 5px;
        justify-content: center;
        display: flex;
       
    }

    .add_btn {
        height: 40px;
        background: #FFF8DC;
        color: #238e8e;
        border-radius: 5px;
        padding: 5px 30px;
        outline: none;
        border: none;
    }
    </style>
</head>

<body>

    <?php
       $flag=false;
        $mysqli = new mysqli('localhost', 'root', '', 'user') or die(mysql_error($mysqli));
        $result = $mysqli->query("SELECT * from todotable") or die($mysqli->error);
    ?>


    <form action="save.php" method="POST" class="input_form">
        <input style="width: 50%;height: 35px;padding: 10px; margin:auto;" type="text" name="todo" id="" placeholder="Enter"
            autofocus>
        <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
    </form>

    <ul>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <?php
         if($row["caption"]){
            $flag=true;
         }else{
            $flag=false;
         }
         ?>
            <li class="d-flex justify-content-around p-3 m-auto" style="border:1px solid black; width:50%;"  ><span><?php echo $row['id'] ?></span><span><?php echo $row['caption'] ?></span></li>
        <?php } ?>
            </ul>
            <?php
        if($flag){
            echo "<h1 style='text-align:center;'>Data Saved!!!</h1>";
        }
        else{
            echo "<h1 style='text-align:center;'>Data is not inserted!!</h1>";
        }
         
        ?>
    

</body>

</html>