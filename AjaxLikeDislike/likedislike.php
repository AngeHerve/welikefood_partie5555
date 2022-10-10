<?php
include('conndb.php');
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
			<div class="like">
			<a href="javascript:void(0)" class="like_">
			<span  onclick="like_update(<?php echo $id?>)"> <span id="like_loop_<?php echo $id?>"><?php echo $row['likeCount']?></span></span>
			</a>
			</div>
			<button class="like_btn" ><i class="fa-regular fa-thumbs-up fa-3x"  style=" background-color:white; color: #596CE5;"></i></button>
			<button class="dislike_btn" ><i class="fa-regular fa-thumbs-down fa-3x" style=" background-color:white; color: rgb(234, 54, 54);"></i></button>
			<div class="dislike">
			<a href="javascript:void(0)" class="dislike_">
			<span  onclick="dislike_update(<?php echo $id?>)"> <span id="dislike_loop_<?php echo $id?>"><?php echo $row['dislikeCount']?></span></span>
			</a>
			</div>
		</div>
		<?php } ?>
</div>	
	</body>
</html>