<?php
include('condb.php');
$id=$_GET['id'];
$sqlcom="SELECT * from publication WHERE idPub=$id";
$rescom=mysqli_query($conn,$sqlcom);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Commentaire/comment.css">
</head>
<body>
        <?php while($row=mysqli_fetch_assoc($rescom)){?>
        <form  method="post" action="ins_com.php">
            <input type="text" name="comment" id="" placeholder="Commentaire..." class="comment">
            <input type="hidden" name="hide" id="" value="<?php echo $id ?>" >
            <button class="comment_btn" type="submit" name="submit_com">
                <img src="com_btn.png" style="margin-top:-10px;margin-left:-10px;
                width: 110px;height: 110px;"></button>
        </form>
        <?php } ?>
</body>
</html>
<?php
?>
