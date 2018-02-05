<?php
// Range.php
if(isset($_POST["From"], $_POST["to"]))
{
$conn = mysqli_connect("localhost", "root", "", "tut");
$result = '';
$query = "SELECT * FROM orders WHERE purchased_date BETWEEN '".$_POST["From"]."' AND '".$_POST["to"]."'";
$sql = mysqli_query($conn, $query);
$result .='
<table class="table table-bordered">
<tr>
<th width="10%">Order Number</th>
<th width="35%">Customer Number</th>
<th width="40%">Purchased Item</th>
<th width="10%">Purchased Date</th>
<th width="5%">Price</th>
</tr>';
if(mysqli_num_rows($sql) > 0)
{
while($row = mysqli_fetch_array($sql))
{
$result .='
<tr>
<td>'.$row["order_number"].'</td>
<td>'.$row["customer_name"].'</td>
<td>'.$row["purchased_items"].'</td>
<td>'.$row["purchased_date"].'</td>
<td>'.$row["price"].'</td>
</tr>';
}
}
else
{
$result .='
<tr>
<td colspan="5">No Purchased Item Found</td>
</tr>';
}
$result .='</table>';
echo $result;
}
?>