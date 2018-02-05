<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



    <script type="text/javascript" src="js/plugins/jquery.min.js"></script>
<script type="text/javascript">


                                            function change() {
                                                var values = ['Prices', '25000', '30000', '40000', '50000', '70000'];
                                                document.getElementById('price').value = values[document.getElementById('choices').selectedIndex];
                                            }

                                             function multiply() {
                                                var values = ['Prices', '25000', '30000', '40000', '50000', '70000'];
                                                document.getElementById('price').value = values[document.getElementById('choices').selectedIndex];
                                                var qty = Number(document.getElementById('qty').value);
                                                var price = Number(document.getElementById('price').value);
                                                var total = qty * price;
                                                document.getElementById('price').value = total;
                                            }
                                            $(function () {
                                                $("#choices").change(function () {
                                                    if ($(this).val() == "A") {
                                                        $("#casket-1").show();
                                                    }else {
                                                        $("#casket-1").hide();
                                                    }
                                                    if ($(this).val() == "B"){
                                                    	$("#casket-2").show();
                                                    }else {
                                                        $("#casket-2").hide();
                                                    }

                                                    if ($(this).val() == "C"){
                                                        $("#casket-3").show();
                                                    }else {
                                                        $("#casket-3").hide();
                                                    }

                                                    if ($(this).val() == "D"){
                                                        $("#casket-4").show();
                                                    }else {
                                                        $("#casket-4").hide();
                                                    }

                                                    if ($(this).val() == "E"){
                                                        $("#casket-5").show();
                                                    }else {
                                                        $("#casket-5").hide();
                                                    }
                                                });
                                            });
</script><center>
<span>Choose Casket</span>
<select id="choices">
	<option value="c">Choose Casket</option>
    <option value="A">Charity</option>
    <option value="B">A Pioner</option>
    <option value="C">Junior Half Glass</option>
    <option value="D">OMB</option>
    <option value="E">Senior Half Glass</option>
</select>
<hr />
<div id="casket-1" style="display: none">
    <img src="assets/images/gallery/casket-1.jpg" alt="Image 1" width="200" height="100" /><br><br>
    Dimension:
    <input type="text" id="dimention" value=' 16" x 72"  '  /><br><br>
    Type:
    <input type="text" id="type"  value="Wood" /><br><br>
    Color:
    <input type="text" id="Color" value="White" /><br><br>
    Qty:
    <input type="number" name="qty" id="qty" onKeyUp="multiply();" onchange="change();"><br><br>
    Price:
    <input type="number" name="price" id="price" value="25000" onchange='change();'>
</div>

<div id="casket-2" style="display: none">
	<img src="assets/images/gallery/casket-2.jpg" alt="Image 1" width="200" height="100" /><br><br>
    Dimension:
    <input type="text" id="dimention" value=' 16" x 72"  '  /><br><br>
    Type:
    <input type="text" id="type"  value="Wood" /><br><br>
    Color:
    <input type="text" id="Color" value="Silver" /><br><br>
    Qty:
    <input type="number" name="qty" id="qty" onKeyUp="multiply();" onchange='change();'><br><br>
    Price:
    <input type="number" name="price" id="price" value="30000" onchange='change();'>
</div>

<div id="casket-3" style="display: none">
    <img src="assets/images/gallery/casket-3.jpg" alt="Image 1" width="200" height="100" /><br><br>
    Dimension:
    <input type="text" id="dimention" value=' 17" x 72"  '  /><br><br>
    Type:
    <input type="text" id="type"  value="Wood" /><br><br>
    Color:
    <input type="text" id="Color" value="White" /><br><br>
    Qty:
    <input type="number" name="qty" id="qty" onKeyUp="multiply();" onchange='change();'><br><br>
    Price:
    <input type="number" name="price" id="price" value="4000" onchange='change();'>
</div>

<div id="casket-4" style="display: none">
    <img src="assets/images/gallery/casket-4.jpg" alt="Image 1" width="200" height="100" /><br><br>
    Dimension:
    <input type="text" id="dimention" value=' 18" x 72"  '  /><br><br>
    Type:
    <input type="text" id="type"  value="Wood" /><br><br>
    Color:
    <input type="text" id="Color" value="Silver" /><br><br>
    Qty:
    <input type="number" name="qty" id="qty" onKeyUp="multiply();" onchange='change();'><br><br>
    Price:
    <input type="number" name="price" id="price" value="50000" onchange='change();'>
</div>

<div id="casket-5" style="display: none">
    <img src="assets/images/gallery/casket-5.jpg" alt="Image 1" width="200" height="100" /><br><br>
   Dimension:
    <input type="text" id="dimention" value=' 19" x 72"  '  /><br><br>
    Type:
    <input type="text" id="type"  value="Metal" /><br><br>
    Color:
    <input type="text" id="Color" value="White" /><br><br>
    Qty:
    <input type="number" name="qty" id="qty" onKeyUp="multiply();" onchange='change();'><br><br>
    Price:
    <input type="number" name="price" id="price" value="70000" onchange='change();'>
</div>
</center>
</body>
</html>