<?php
//contains hidden fields to store category id and user id
?>
<tr>
    <td>
        <input type="hidden" value="<?php echo $ctid ?>" name="adv_cat" id="adv_cat">
    </td>
    <td>
        <input type="hidden" value="<?php if($_SESSION['login_id']) {
            echo "ojhasyuevjsh".$id;
        }elseif($_SESSION['userData']){
            echo "gjhasyuevjsh".$googleid;
        }else{
            echo "fjhasyuevjsh".$fbid;
        }
        ?>" name="user_id" id="user_id">
    </td>
</tr>