<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("conn_db.php");
    include("head.php");
    ?>
    <title>Moon Coffee's Product</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container pt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
        <form action="add_product.php" method="POST">
            <div class="form_input_product px-3 rounded-3" style="background-color: rgba(84, 45, 33,0.7);">
                <div class="row mt-5 pt-3">
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <span class="input-group-text"  id="inputGroup-sizing-default">Name</span>
                            <input name="p_name" type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text"  id="inputGroup-sizing-default">Price</span>
                            <input name="p_price" type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <div class="form_input_ingredients" id="ingredients">
                    <!-- -------------------------------------------------------------- -->

                    <div class="row pt-3">
                        <div class="col-5">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Ingredients</span>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="BotKemSua">Bột kem sữa </option>
                                    <option value="BotMatchaCozy">Bột matcha cozy</option>
                                    <option value="CaPheHat">cà phê hạt</option>
                                    <option value="CaPhePhin">Cà phê phin</option>
                                    <option value="Cam">Cam </option>
                                    <option value="ComDuaSay">Cơm dừa sấy</option>
                                    <option value="DaoNgam">Đào ngâm </option>
                                    <option value="Duong">Đường</option>
                                    <option value="DuongNuoc">Đường nước</option>
                                    <option value="GasWhipping">gas whipping</option>
                                    <option value="HongTraWonderfull">Hồng trà wonderfull</option>
                                    <option value="LucTraWonderfull">Lục trà wonderfull</option>
                                    <option value="LyNhua">Ly nhựa</option>
                                    <option value="MutTraiCayCherry">Mứt trái cây cherry</option>
                                    <option value="MutTraiCayDuaLuoi">Mứt trái cây dưa lưới</option>
                                    <option value="MutTraiCayVietQuoc">Mứt trái cây Việt Quốc</option>
                                    <option value="MutTraiCayXoai">Mứt trái cây xoài</option>
                                    <option value="SinhToBerrinoVai">sinh tố berrino Vải</option>
                                    <option value="SuaChua">Sữa chua </option>
                                    <option value="SuaDac">Sữa đặc </option>
                                    <option value="SuaTuoi">Sữa tươi </option>
                                    <option value="SyrupMoninCoconut">Syrup monin coconut</option>
                                    <option value="SyrupMoninDuaHau">Syrup monin dưa hấu</option>
                                    <option value="TraAhrmadBaTuoc">Trà ahrmad bá tước</option>
                                    <option value="TraDaoCosy">Trà đào Cosy</option>
                                    <option value="TranChauTden">Trân châu tđen</option>
                                    <option value="TranChauTrang">Trân châu trắng </option>
                                    <option value="VaiLon">Vải lon</option>
                                    <option value="WhippingCream">Whipping cream</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Units</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="g">G</option>
                                    <option value="ml">ML</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-1">
                            <div class="btn btn-danger"><i class="fa-solid fa-minus fa-flip" style="color: #fff;"></i>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row py-3 justify-content-center">
                <button type="submit" class="btn btn-success w-25" name="add_confirm">Add Product</button>
            </div>
        </form>
        <table class="mt-5 table rounded-5 table-light table-striped table-hover align-middle caption-top mb-5">
            <thead class="bg-light">
                <tr>
                    <th scope="col-1">#</th>
                    <th scope="col-4">Image</th>
                    <th scope="col-4">Name</th>
                    <th class="text-center" scope="col">Price(VND)</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            $query = "SELECT * FROM product";
            $result = $mysqli->query($query);
            ?>
            <tbody>
                <?php $i = 1;
                while ($row = $result->fetch_array()) { ?>
                    <tr>
                        <th>
                            <?php echo $i++; ?>
                        </th>
                        <td class="w-25"></td>
                        <td>
                            <?php echo $row["p_name"]; ?>
                        </td>
                        <td class="text-center">
                            <?php echo number_format($row["p_price"], "0", ",", "."); ?>
                        </td>
                        <td>
                            <a href="admin_detail_medicine.php?m_id=<?php echo $row["p_id"] ?>"
                                class="btn btn-sm btn-primary">View</a>
                            <a href="admin_edit_medicine.php?m_id=<?php echo $row["p_id"]; ?>"
                                class="btn btn-sm btn-outline-success">Edit</a>
                            <a href="admin_delete_medicine.php?m_id=<?php echo $row["p_id"] ?>"
                                class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

<script>
    function add_ingredient() {
        //tạo phần tử p    
        var add = document.createElement("p");

        //tạo phần tử text
        var node = document.createTextNode("Some new text");

        //gắn node vào p
        p.appendChild(node);

        //Thay đổi một số thuộc tính của p
        p.appendChild(node);
        p.style.backgroundColor = 'red';
        p.style.padding = "10px";
        p.style.color = "white";

        var div = document.getElementById("demo");
        //gắn p vào div
        div.appendChild(p);
    }
</script>

</html>