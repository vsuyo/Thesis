<?php
$conn = mysqli_connect("localhost", "root", "", "tut");
$query = "SELECT * FROM orders ORDER BY order_number desc";
$sql = mysqli_query($conn, $query);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Date Range Search with jQuery DatePicker using Ajax, PHP & MySQL | softAOX Tutorial</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
</head>
<body>
<br/>
<div class="container">
<h2 align="center">Date Range Search with jQuery DatePicker using Ajax, PHP & MySQL</h2>
<br/>
<br/>
<div class="col-md-2">
<input type="text" name="From" id="From" class="form-control" placeholder="From Date"/>
</div>
<div class="col-md-2">
<input type="text" name="to" id="to" class="form-control" placeholder="To Date"/>
</div>
<div class="col-md-8">
<input type="button" name="range" id="range" value="Range" class="btn btn-success"/>
</div>
<div class="clearfix"></div>
<br/>
<div id="purchase_order">
<table class="table table-bordered">
<tr>
<th width="10%">Order Number</th>
<th width="35%">Customer Name</th>
<th width="40%">Purchased Item</th>
<th width="10%">Purchased Date</th>
<th width="5%">Price</th>
</tr>
<?php
while($row= mysqli_fetch_array($sql))
{
?>
    <tr>
    <td><?php echo $row["order_number"]; ?></td>
    <td><?php echo $row["customer_name"]; ?></td>
    <td><?php echo $row["purchased_items"]; ?></td>
    <td><?php echo $row["purchased_date"]; ?></td>
    <td>$ <?php echo $row["price"]; ?></td>
    </tr>
    <?php
}
?>
</table>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<!-- Script -->
<script>
$(document).ready(function(){
$.datepicker.setDefaults({
dateFormat: 'yy-mm-dd'
});
$(function(){
$("#From").datepicker();
$("#to").datepicker();
});
$('#range').click(function(){
var From = $('#From').val();
var to = $('#to').val();
if(From != '' && to != '')
{
$.ajax({
url:"range.php",
method:"POST",
data:{From:From, to:to},
success:function(data)
{
$('#purchase_order').html(data);
}
});
}
else
{
alert("Please Select the Date");
}
});
});
</script>
</body>
</html>