<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
    <title>Welcome to Moon Coffee</title>
</head>

<body>
<div class="container pt-5">
        <form action="add_product.php" method="POST">
                <div class="form_input_ingredients">
                    <!-- -------------------------------------------------------------- -->
                    <div class="row pt-3">
                        <div class="col-5">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Ingredients</span>
                                <select class="form-select" id="ingredients" name="i_ingredients">
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
                                <input name="i_quantity" type="text" class="form-control"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Units</label>
                                <select class="form-select" id="inputGroupSelect01" name="i_unit">
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
</body>

</html>