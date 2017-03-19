
<style type="text/css">
  .profile-pic{
    height: 100px;
  }
</style>
<?php
include 'includes/header.php';
include 'includes/navigation.php';

?>
<?php



if(isset($_POST['profileupdate'])){
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $name = addslashes($_FILES['file']['name']);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder ="img/users/";
    $name = $_POST['name'];
  
    if($_FILES['file']['name']!= ""){
      move_uploaded_file($file_loc, $folder.$file) or die(mysqli_error());

   
      mysqli_query($conn,"UPDATE admin SET name= '".$name."', src= '".$file."' WHERE email='".$email."' ") or die(mysqli_error($conn));
    }
    else{
      mysqli_query($conn,"UPDATE admin SET name= '".$name."' WHERE email='".$email."' ") or die(mysqli_error($conn));
    }
}
elseif(isset($_POST['passupdate'])){
    $pass_old = $_POST['old'];
    $pass_new = $_POST['new'];
    $pass_old = md5($pass_old);
    $pass_new = md5($pass_new);

    $query1 = mysqli_query($conn,"SELECT * FROM admin where email='".$email."' and password='".$pass_old."' ") or die(mysqli_connect_error());  

    if(mysqli_num_rows($query1)>=1){
      mysqli_query($conn,"UPDATE admin SET password= '".$pass_new."' WHERE email='".$email."' ") or die(mysqli_error());
    }
    else{
      echo "password mitchmatch";
    }
}


?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Profile</a></li>
      </ol>
    </section>
<?php
$email = $_SESSION['email'];

$query = mysqli_query($conn,"SELECT * FROM admin where email='".$email."' ") or die(mysqli_connect_error());
    $row= mysqli_fetch_assoc($query);
    $dbname = $row['name'];
    $dbemail = $row['email'];
    $src = $row['src'];
?>
  <!-- Main content -->
    <section class="content">

        <section class="box">
            <div class="box-body">
            <div class="row container">
                                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                          <center><img src="img/users/<?php echo $src; ?>" class="img-circle profile-pic" alt="User Image"></center>
                            <h3 class="profile-username text-center"><?php echo $dbname; ?></h3>
                            <p class="text-muted text-center">
                                ADMINISTRATOR
                            </p>

                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Name</b> <a class="pull-right"><?php echo $dbname; ?></a><hr>
                                    <b>Email</b> <a class="pull-right"><?php echo $dbemail; ?></a>
                                </li>
                            </ul>
                          </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
                <div class="col-md-8">
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#activity" data-toggle="tab">Edit Profile</a></li>
                            <li><a href="#timeline" data-toggle="tab">Change Password</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">

                                  <div class="form-group label-floating">
                                      <label for="email" class="control-label">Profile Picture</label>
                                      <input type="file" name="file">
                                  </div>
                                <div class="form-group label-floating">
                                    <label for="email" class="control-label">Name</label>
                                    <input type="text" name="name" value="<?php echo $dbname; ?>" class="form-control">
                                </div>
                                <input type="submit" class="btn btn-primary btn-raised btn-block" value="UPDATE" name="profileupdate">
                                </form>
                            </div><!-- /.tab-pane -->

                            <div class="tab-pane" id="timeline">
                              <form method="POST" action="" accept-charset="UTF-8">
                                <div class="form-group">
                                    <label for="oldPassword" class="control-label">Old Password</label>
                                    <input type="password" class="form-control" id="old" name="old" placeholder="&#xf084;&nbsp; Old Password" required>
                                </div>

                                <div class="form-group">
                                    <label for="newPassword" class="control-label">New Password Password</label>
                                    <input type="password" class="form-control" id="password" name="new" placeholder="&#xf084;&nbsp; New Password" required>
                                </div>

                                <div class="form-group">
                                    <label for="confirmPassword" class="control-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" placeholder="&#xf084;&nbsp; Confirm Password" required>
                                </div>
                                <input type="submit" class="btn btn-primary btn-raised btn-block" value="UPDATE" name="passupdate">
                                </form>
                            </div><!-- /.tab-pane -->

                        </div><!-- /.tab-content -->
                    </div><!-- /.nav-tabs-custom -->
                </div>
            </div>
            </div>
        </section>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

</div><!-- ./wrapper -->


<?php include 'includes/footer.php' ?>
<script type="text/javascript">
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
      confirm_password.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>