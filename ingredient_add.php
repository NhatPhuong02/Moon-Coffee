<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    include("conn_db.php");
    if(isset($_POST["add_ingredient_cfm"]))
    {
        $id_name = $_POST["id_name"];
        $id_unit = $_POST["id_unit"];
        $id_price = $_POST["id_price"];
        $id_quantity = $_POST["id_quantity"];

        $query = "INSERT INTO ingredient_defaut (id_name, id_import_quantity, id_unit, id_import_price) VALUES ('{$id_name}', '{$id_quantity}', '{$id_unit}', '{$id_price}')";
        $result = $mysqli->query($query);
        
        if($result){
            header("location: ingredient.php");
        }
    }
    ?>
    <title>Add Ingredient</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container pt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="index.php">Ingredient</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Ingredient</li>
                </li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5 pt-2 w-50 bg-light rounded-3">
        <form action="ingredient_add.php" method="POST">
            <div class="row mt-1 ">
                <div class="col-7">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">1: Name</span>
                        <input name="id_name" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" required>
                    </div>
                </div>
                <div class="col-5">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">2: Unit (g/ml)</span>
                        <input name="id_unit" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" required>
                    </div>
                </div>
            </div>
            <div class="row mt-2 pt-1">
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">3: Import Quantity</span>
                        <input name="id_quantity" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">4: Import Price</span>
                        <input name="id_price" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" required>
                    </div>
                </div>
            </div>
            <div class="row mt-2 pt-1">
                <button name="add_ingredient_cfm" class="btn btn-success" type="submit">Add Ingredient</button>
            </div>
        </form>
    </div>
</body>

</html>