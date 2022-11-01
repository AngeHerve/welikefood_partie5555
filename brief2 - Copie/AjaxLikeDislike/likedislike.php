<?php
include('condb.php');
$id=$_GET['id'];
$sqlquery="SELECT * from publication WHERE idPub=$id";
$res=mysqli_query($conn,$sqlquery);
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="AjaxLikeDislike/like.css">
</head>
<body>
 <div>
		<?php while($row=mysqli_fetch_assoc($res)){?>
		<div style="display:flex;">
			<div  style="margin-top:-3px;" >
			<span  class="like" id="like_loop_<?php echo $id?>"><?php echo $row['likeCount']?></span>
			<a href="javascript:void(0)" class="like_">
			<span class="fa-regular fa-thumbs-up fa-3x" 
			onclick="like_update(<?php echo $id?>)"> </span>
			</a>
			</div>

			<div style="margin-top:-3px;">
			<span class="dislike"  id="dislike_loop_<?php echo $id?>"><?php echo $row['dislikeCount']?></span>
			<a href="javascript:void(0)" class="dislike_" style="">
			<span class="fa-regular fa-thumbs-down fa-3x" 
			onclick="dislike_update(<?php echo $id?>)"> </span>
			</a>
			</div>
		</div>
		<?php } ?>
</div>	
	</body>
</html>