<html>
<body>
<?php
echo "Hello World !!!";

$sname = "Tosandet";
$sports = array("Swimming","Running");
?>
<hr>
<?="My name is Parichat " . $sname ?>

<form action ="../action/post.php" method="POST">
    <select name="sl_sport">
        <option>- select -</option>
        <option value="1"> Football </option>
        <option value = "2"> Tenis </option>
        <?php
            foreach($sports as $Key => $sports){

    ?>
        <option value ="<?=$Key+3?>"><?=$sports?></option>
    <?php } ?>
</select>
<button type="submit"> SEND </button>
</form>
<lable id="lb_post"></lable>


</body>
</html>
<script src="../js/jquery-3.4.1.min.js"></script>
<script>
$(function(){
    $("select").change(function(){
        sp_val = $(this).val();
        $("#lb_post").load("../action/post.php?getSport=" + sp_val);
    });
});
</script>