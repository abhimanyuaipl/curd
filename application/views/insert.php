<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert perform</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ?>" >
</head>
<body>
<div class="container">
<div class="col-md-6  mt-4">
<form action="<?php echo base_url().'index.php/Curd/insert_data'?>" method="post">
<div class="from-group">
<label for="firstname"> first Name</label>
<input type="text" name="fname"  id="fname" value="" class="form-control" placeholder=" Name"></div>

<div class="from-group"><label for="lastname"> lastName</label>
<input type="text" name="lname"  id="lname" value="" class="form-control" placeholder=" Name"></div>
<div class="from-group">
<button name="submit" id="submit" class="btn btn-success mt-2">Submit</button></div>
</form>
<p><?php echo $this->session->flashdata('resp_message');?></p>



<?php 
foreach($user as $data){
    echo "<div>
U-Id: {$data['id']}<br>
First Name: {$data['post']}<br>
Last Name: {$data['postedby']}<br>
<button class='btn btn-primary' >edit</button>
<button class='btn btn-danger'>delete</button>
</div><br><br>";


}
?>


</div>

</div>

    
</body>
</html>