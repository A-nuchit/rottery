<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lottery</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font-family: 'Kanit', sans-serif;
	}
			.container{
			margin-top: 5%;
			margin-bottom: 10%;
			width: 50%;
			box-shadow: 2px 2px 15px #c4c4c4;
			background: #FFF;
			border-radius: 20px 20px 0px 20px;
			border-style: solid;
			border-color: #fff;
			border-width: 20px;
		}
		.box{
			
			border-style: solid;
			border-radius: 10px 10px 10px 10px;
			border-color: #000;
			font-size: 40px;
		}
		.topic{
			font-size: 30px;
			margin-top: 10px;
		}
		.one{
			height: 70px;
			width: 50%;
			background-color: #FF615E;
		}
		.two{
			width: 100%;
			height: 70px;
			background-color: #E8B34D;
		}
		.twoadd{
			width: 100%;
			height: 70px;
			background-color: #FFF567;
		}
		.three{
			width: 100%;
			height: 70px;
			background-color: #BCFF5E;
		}
		.check{
			margin-top: 30px;
		}
		@media only screen and (max-width: 1500px) {
			.container{
				width: 80%;
			}
		}
		@media only screen and (max-width: 1000px) {
			.container{
				width: 90%;
			}
		}
		@media only screen and (max-width: 600px) {
			.container{
				width: 100%;
			}
		}

	</style>
</head>
<body>
	<center>
		<button onclick="location.href='<?php echo base_url() ?>index.php/Welcome/random'" type="button" class="btn btn-primary" >ดำเนินการสุ่มรางวัล</button>
	</center>
	<div class="container">
		<?php foreach ($query as $r) {
		} ?>
		<center>
			
			<div class="row">
				<div class="col-12"d">
					<p class="topic"> รางวัลที่ 1</p> 
					 <div class="box one">
					 	<?php if (isset($r->jackpot) && $r->status == 1) {
                echo str_pad($r->jackpot,3, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
			</div>
			<p class="topic">รางวัลที่ 2 </p> 
			<div class="row">
				<div class="col-4">
					 <div class="box two">
					 	<?php if (isset($r->jackpot2_1) && $r->status == 1) {
                echo str_pad($r->jackpot2_1,3, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
				<div class="col-4">
					 <div class="box two">
					 	<?php if (isset($r->jackpot2_2) && $r->status == 1) {
                echo str_pad($r->jackpot2_2,3, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
				<div class="col-4">
					 <div class="box two">
					 	<?php if (isset($r->jackpot2_3) && $r->status == 1) {
                echo str_pad($r->jackpot2_3,3, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
			</div>
			<p class="topic">รางวัลข้างเคียง</p> 
			<div class="row">
				<div class="col-6">
					<div class="box twoadd ">
					 	<?php if (isset($r->jackpot) && $r->status == 1) {
                echo str_pad($r->jackpot-1,3, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
				<div class="col-6">
					<div class="box twoadd">
					 	<?php if (isset($r->jackpot) && $r->status == 1) {
                echo str_pad($r->jackpot+1,3, "0", STR_PAD_LEFT);
              } ?>
					</div>
				</div>
			</div>
			<p class="topic">เลขท้าย 2 ตัว </p> 
			<div class="row">
				<div class="col-3">
					 <div class="box three">
					 	<?php if (isset($r->jackpot3_1) && $r->status == 1) {
                echo str_pad($r->jackpot3_1,2, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
				<div class="col-3">
					 <div class="box three">
					 	<?php if (isset($r->jackpot3_2) && $r->status == 1) {
                echo str_pad($r->jackpot3_2,2, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
				<div class="col-3">
					 <div class="box three">
					 	<?php if (isset($r->jackpot3_3) && $r->status == 1) {
                echo str_pad($r->jackpot3_3,2, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
				<div class="col-3">
					 <div class="box three">
					 	<?php if (isset($r->jackpot3_4) && $r->status == 1) {
                echo str_pad($r->jackpot3_4,2, "0", STR_PAD_LEFT);
              } ?>
					 </div>
				</div>
			</div>
			<div class="check">
				<form action="<?php echo base_url() ?>index.php/Welcome/check">
    			<div class="form-group"> 
    				<h1>ตรวจรางวัล</h1>	
      				<input type="text" class="form-control form-control-lg" placeholder="กรอกตัวเลข" name="number">
    			</div>
    			<button type="submit" class="btn btn-primary">Submit</button>
  			</form>
			</div>
			
		</center>
		
	</div>
</body>
</html>