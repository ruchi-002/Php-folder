

<?php
session_start();
if(!isset($_SESSION["todoCollection"]))
$_SESSION["todoCollection"] = [];
?>


<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container container-fluid d-flex justify-content-center">
    <form   action="storeItem.php" method="POST">
        <div class="d-flex mt-5">
        <label class="label label-default form-label " for="inputItem">Add Item:</label>
        <input  type="text" class="form-control m-2"  name="item" id="inputItem" placeholder="Enter your todo here" >
        <button class="btn btn-primary" type="submit">Submit</button>
        </div>
        
    </form>
    </div>
 
<ul id="list">
   <?php for($i = 0; $i < sizeof($_SESSION["todoCollection"]); $i++) { ?>
        <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_SESSION["todoCollection"][$i]['caption']; ?></li>
        <input type="button" class="btn btn-outline-danger" value="Remove" 
        onclick=" location.href = 'remove.php?index=<?php echo $i; ?>';">
        
    <?php } ?>

</ul>
</body>
</html>