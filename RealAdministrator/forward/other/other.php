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
    </tr>
    <tr>
        <td>Products:</td>
        <td><span class="badge"><?php echo $num_products ?></span></td>
    </tr>
</table>