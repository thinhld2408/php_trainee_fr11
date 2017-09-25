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
	margin-top:50px;
}
#tbl-first-row{
	font-weight:bold;
}
#logout{
	padding-right:30px;
}		
</style>
</head>
<body>

<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container">
                	<ul class="nav navbar-nav">
                        <li ><a href="index.php">Home</a></li>
                        <li><a href="index.php?controller=create">New Trainer</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        <?php  
            // if(isset($_SESSION['error'])){
            //     echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
            //     unset($_SESSION['error']);
            // }

            if(isset($_SESSION['success'])){
                echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
                unset($_SESSION['success']);
            }
        ?>
        	<table class="table table-striped">
            	<tr id="tbl-first-row">
                	<td width="5%">ID</td>
                    <td width="20%">Name</td>
                    <td width="10%">Email</td>
                    <td width="20%">Address</td>
                    <td width="5%">Phone</td>
                    <td width="5%">Gender</td>
                    <td width="5%">Country</td>
                    <td width="5%">Edit</td>
                    <td width="5%">Delete</td>
                </tr>
                <?php 
                    while ($fetch = $trainee->fetchArray()) {      
                ?>
                <tr>
                	<td><?php echo $fetch['id'] ?></td>
                    <td><?php echo $fetch['name'] ?></td>
                    <td><?php echo $fetch['email'] ?></td>
                    <td><?php echo $fetch['address'] ?></td>
                    <td><?php echo $fetch['phone'] ?></td>
                    <td><?php echo $fetch['gender'] ?></td>
                    <td><?php echo $fetch['country'] ?></td>
                    <td><a href="index.php?controller=edit&id=<?php echo $fetch['id']; ?>">Edit</a></td>
                    <td><a href="index.php?controller=del&id=<?php echo $fetch['id']; ?>"" onclick=" return confirm('Bạn có muốn xóa trainee này')">Delete</a></td>
                </tr>
                <?php } ?>
			</table>
            <div aria-label="Page navigation">
            	<ul class="pagination pull-right">
                	<?php echo $pagination->getLibrary();?>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
