<?php

$files = array_slice(scandir("Category/categoryId/".$categoryid."/"), 2);
if($files[0] == ''){
    ?>
<div class="well">No products in this category</div>
<?php
}else{
    ?>
<div>
    It has <?php echo count($files)-1; ?> Products
</div>
<?php
}
?>