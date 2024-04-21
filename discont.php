<?php
    if (isset($_POST["submit"])) {
        $disc=$_POST['taka'];
        $d=0;
        if ($disc>=5000){
            $d=0.9*$disc;
            echo'<h1>After Discount '.$d.' taka</h1>';
        }else{
            echo'<h1>Actual Amount ' .$disc. ' taka</h1>';
        }
    }
?>

<form action="" method="post">
    <input type="text" name="taka">
    <input type="submit" value="Save" name="submit" value="Save">
</form>