<!DOCTYPE html>
<html>
<head>
	<title>Input Biodata</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body> 
	<img class="wave" src="../../assets/images/wave .png">
	<div class="container">
		<div class="img">
			<img src="../../assets/images/bg.svg" style="position:fixed; padding-bottom:150px;">
		</div>
		<div class="login-content">
		<form action="<?php echo base_url('Biodata/simpan_edit')?>" method="POST">
				<div class="row">
					<div class="col-md-6">
						<div class="icon">
						<img src="../../assets/images/male_avatar.svg">
						<img src="../../assets/images/female_avatar.svg">	
					</div>
					</div>
				</div>
				<form>
				<h2 class="title">FORM BIODATA</h2>
                <?php foreach ($data_edit as $data_edit): ?>
                <input type="text" name="id_mahasiswa" hidden value="<?php echo $data_edit->id_mahasiswa?>">
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" class="input" placeholder="Name" name="name" required value="<?php echo $data_edit->Name?>"> 
           		   </div>
           		</div>
				   <div class="input-div two">
					<div class="i"> 
						<i class="fas fa-sort-numeric-up"></i>
					</div>
					<div class="div">
						 <input type="text" class="input" placeholder="NIM" name="nim" required value="<?php echo $data_edit->NIM?>">
					</div>
			  	</div>
				  <div class="input-div three">
				<div class="i"> 
					<i class="fas fa-graduation-cap"></i>
				</div>
				<div class="div">
					 <input type="text" class="input" placeholder="Major" name="major" required value="<?php echo $data_edit->Major?>">
				 </div>
		  	</div>
			  <div class="input-div four">
					<div class="i"> 
						<i class="fas fa-calendar-alt"></i>
					</div>
					<div class="div">
						<input placeholder="Date of Birth" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob"  required value="<?php echo $data_edit->Birth?>">
					</div>
				</div>
           		<div class="input-div five">
           		   <div class="i"> 
           		    	<i class="fas fa-venus-mars"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="text" class="input" placeholder="Gender" name="gender" required value="<?php echo $data_edit->Gender?>">
            	   </div>
            	</div>
				<div class="input-div six">
					<div class="i"> 
						<i class="far fa-calendar-alt"></i>
					</div>
					<div class="div">
						 <input type="text" class="input" placeholder="Age" name="age" required value="<?php echo $data_edit->Age?>">
				 </div>
			  </div>
			  
			<div class="input-div seven">
				<div class="i"> 
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="div">
					<input type="text" class="input" placeholder="Address" name="address" required value="<?php echo $data_edit->Address?>">
			</div>
		</div>
            	<input type="submit" class="btn" value="Submit">
				
            </form>
            <?php endforeach?>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
