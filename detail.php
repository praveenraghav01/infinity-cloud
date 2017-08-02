<?php 
session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Image | <?php echo $_SESSION['user'];?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="images/icon.png">
		<style>
			body {
    background-image: url("images/asdf.jpg");
    background-color: #cccccc;
}
.image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 80px;
    cursor: pointer;
}
@media screen and (max-width: 480px) {
    #like {
        visibility: hidden;
    }
}
</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="preview">
				<div class="inner">
					<div class="content">
						<h1>Infinity</h1>
						<h2>Easy Safe and Secure Cloud Storage .</h2>
					</div>
					<a href="profile.php" class="button hidden"><span>Let's Go</span></a>
				</div>
			</header>

		<!-- Main -->
			<div id="preview">
				<div class="inner">
					<div class="image fit">
						<img src="<?php $img=$_GET['id']; echo $img;?>" alt="" />
					</div>
					<div class="content">
						<header><center>
						<a href="<?php echo $img;?>" download style="border-radius: 35px;width:200px;background-color:#e74c3c;color:white" class="button big alt"><i class="fa fa-download"></i>&nbsp;Download</a></center>
						</header>
						</div>
				</div>
			</div>

			<!-- Footer -->
			<footer id="footer">
				<a href="#" class="info fa fa-info-circle"><span>About</span></a>
				<div class="inner">
					<div style="margin-top:-13%;margin-left:-1px" class="content">
						<h3>Profile</h3>
							<div class="image fit">
								<img style="height: 100px;width: 100px; border-radius: 50px;" src="images/profile.png" alt=" Profile" />
							</div>
							<h3><?php echo $_SESSION['user']; ?></h3>
							<h4 style="color:white"><?php echo $_SESSION['email']; ?></h4>
							<a href="#" onclick="uploadFunction()">Upload</a><br>
							<a href="#" onclick="changeFunction()">Change Password</a><br>
							<a href="logout.php">Logout</a>
                    </div>
					<div style="padding:0px" class="copyright">
							<div style="visibility: hidden;position:absolute" id="uploadform">
								<h3>Upload Photos</h3>
								<form action="upload.php" method="post" enctype="multipart/form-data">
									<!--<label class="image-upload" for="file-input">
        								<span style="border-radius: 35px;" class="button small alt"><i class="fa fa-camera" aria-hidden="true"></i>&nbsp;&nbsp;Browse File</span>
										--><input type="file" style="color:white;" name="file" >
									<!--</label>--><br><br>
								<button type="submit" style="border-radius:35px;width:150px" class="small alt"><span>Upload</span></button>
								</form>
							</div>
							<div style="visibility: hidden;width:250px" id="changeform">
								<h3>Chnage Password</h3>
								<form action="change.php" method="post">
									<input type="password" name="current" placeholder="Current Password"></input><br>
									<input type="password" name="new" placeholder="New Password"></input><br>
								<button type="submit" style="border-radius: 35px;width:150px" class="small alt"><span>Change</span></button>
								</form>
							</div>
						</div>
						<div style="padding:0px" id="like" class="copyright">
						<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
								</ul>
							&copy; 2017 Infinity. Design: <a href="#">Praveen Raghav</a>.</div>
					</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script>
				function uploadFunction() {
					document.getElementById('changeform').style.visibility="hidden";
					document.getElementById('uploadform').style.visibility="visible";
				}
				function changeFunction() {
					document.getElementById('uploadform').style.visibility="hidden";
					document.getElementById('changeform').style.visibility="visible";
				}

			</script>


	</body>
</html>