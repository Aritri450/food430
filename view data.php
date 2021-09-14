<?php require("config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><br>
<h4 class="text-center"> Details</h4><br>
<center><a href="reg.php" class="btn btn-primary">Register</a></center><br>

<?php
$src="SELECT * FROM user";
$rs=mysqli_query($con,$src) or die (mysqli_error($con));
if(mysqli_num_rows($rs)>0){
    ?>
    
<table class="table table-bordered">
<thead>
<tr class="text-center">
<th> First Name</th>
<th> Last Name</th>
<th>Address</th>
<th>Mobile no</th>
<th>Email_id</th>
<th>Password</th>


</tr>

</thead>

<tbody> 
<?php
                    while ($rec = mysqli_fetch_assoc($rs)) {
                    ?><tr>
                            <td><?php echo $rec['first_name']; ?></td>
                            <td><?php echo $rec['last_name']; ?></td>
                            <td><?php echo $rec['address']; ?></td>
                            <td><?php echo $rec['mobile_no']; ?></td>
                            <td><?php echo $rec['email_id']; ?></td>
                            <td><?php echo $rec['password']; ?></td>
                          
                            <td class="text-center"><a href="update.php?id=<?php echo $rec['id'];?>"><i class="fa fa-edit text-info" aria-hidden="true"></i></a></td>
                            <td class="text-center"><i class="fa fa-trash text-danger" aria-hidden="true"></i></td>
                            
                      </tr>                       
                    <?php
                    }
                    ?>
</tbody>
</table>
<?php

}else{
    ?>
    <div class="alert alert-danger">
    <strong> Sorry! Data not found </strong>
    </div>
    <?php
}
?>           



    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>
</html>