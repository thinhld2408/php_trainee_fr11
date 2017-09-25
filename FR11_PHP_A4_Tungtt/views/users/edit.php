<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery-3.2.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}	
#logout{
	padding-right:30px;}	
</style>
</head>
<body>
<div class="container">
    <div id="navbar" class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-default">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?controller=create">New Trainer</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        <?php  
            if(isset($_SESSION['error'])){
                echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
                unset($_SESSION['error']);
            }
        ?>
        	<form method="post">
                                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $fetch['name']; ?>" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $fetch['email']; ?>"  />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="address" value="<?php echo $fetch['address']; ?>"  />
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $fetch['phone']; ?>"  />
                </div>
                 <div class="form-group">
                    <label>Country</label>
                    <input type="text" name="country" class="form-control" placeholder="Country" value="<?php echo $fetch['country']; ?>"  />
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option <?php if($fetch['gender'] == 'Mate'){echo 'selected'; } ?> value="Mate">Mate</option>
                        
                        <option <?php if($fetch['gender'] == 'Femate'){echo 'selected'; } ?> value="Femate">Femate</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Sửa" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>

</body>
</html>
