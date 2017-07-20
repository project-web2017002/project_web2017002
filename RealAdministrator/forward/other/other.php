<?php

    $get_orders=mysqli_query($con,"select * from orders");
    $num_orders=mysqli_num_rows($get_orders);

    $get_products=mysqli_query($con,"select * from listed_products");
    $num_products=mysqli_num_rows($get_products);

?>

<table class="table" style="text-align: center">
    <tr>
        <td>Orders:</td>
        <td><span class="badge"><?php echo $num_orders ?></span></td>
        <td><span class="glyphicon glyphicon-eye-open" style="cursor:pointer;" class="moveToOrders" title="View ALL Orders"></span></td>
    </tr>
    <tr>
        <td>Products:</td>
        <td><span class="badge"><?php echo $num_products ?></span></td>
        <td class="moveToProducts"><span class="glyphicon glyphicon-eye-open" style="cursor:pointer;" title="View ALL Products"></span></td>
    </tr>
</table>