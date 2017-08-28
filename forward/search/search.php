<?php
require('../../essential/db/db.php');
require('../../essential/ses/session.php');

$searchQuery = mysqli_query($con,"Select * from listed_products where product_title like '%".$_POST['getdtaa']."%'");
$nums = mysqli_num_rows($searchQuery);//total results searched
$list = '<div class="container">';
$list .= '<div class="row"><div class="col-xs-12"><ul style="list-style: none; margin:0 -20px; padding:5px;">';
$count = 0;
if($nums <= 0){
    $list .= '<li> NO RESULTS FOUND </li>';
}else {
    while ($fetch = mysqli_fetch_array($searchQuery)) {
        $count++;
        if ($count <= 5)
            $list .= '<li class="seritem" id="_' . $fetch[0] . '">' . $fetch[1] . '</li>';
        else
            break;
    }
}
$list .= '</ul></div></div>';
$list .= '<div class="row" style="text-align: center; border-top: 1px solid silver;"><div class="col-xs-6">Total Results: '.$nums.'</div>';
if($count > 5) {
    $list .= '<div class="col-xs-6" style="cursor: pointer"><a title="View All results">View All results&nbsp;&gt;&gt;&gt;</a></div></div>';
}
$list .= '</div><script>$(".seritem").click(function(){var ddd = $(this).attr("id"); ddd = ddd.substr(1); ViewProduct(ddd); $("#_srchitem").val(""); $("#serchresult").slideUp();});</script>';

//return data
echo $list;