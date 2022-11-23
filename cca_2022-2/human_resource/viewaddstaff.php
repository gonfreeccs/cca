    <?php 
    include "../views/session_timeout.php";
    include "../views/links.html";
    include "../views/header.php";
    include "../database/db_conn.php";
    ?>
  
    <?php if(isset($_SESSION['username']) && isset($_SESSION['id'])&& isset($_SESSION['user_id'])&& isset($_SESSION['role'])) {   ?>
    <?php if ($_SESSION['role'] == 'admin') {?>
            <?php if ($_SESSION['role'] == 'admin') {?>
    
    <?php
    $id=$_GET['viewaddstaff'];

   $sql = "SELECT * FROM `users` WHERE id='$id'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

   $name = $row['name'];
   $id = $row['id'];
   $mname = $row['mname'];
   $lname = $row['lname'];
   $address = $row['address'];
   $telephone = $row['telephone'];
   $role = $row['role'];
   $email = $row['email'];
   $username = $row['username'];
   $password = $row['password'];
   // $image=$row['pp'];

    if(isset($_POST['update']))
        {
           $sql = "SELECT * FROM `users`";

        //something was posted
          

            $name = $_POST['name'];
           // $name = ucfirst($name);

           $mname = $_POST['mname'];
           // $mname = ucfirst('mname');

           $lname = $_POST['lname'];
           // $lname = ucfirst($lname);
   
           $address = $_POST['address'];
           $role = $_POST['role'];
           $email = $_POST['email'];
           $telephone = $_POST['telephone'];
           $username = $_POST['username'];
           $password = $_POST['password'];
        
        $query2 = ( "UPDATE `users` SET id = '$id', name = '$name',lname = '$lname',mname = '$mname', address = '$address',telephone = '$telephone',role = '$role',email = '$email',username = '$username',password = '$password' WHERE id = $id");

        if(mysqli_query($conn, $query2)){
    //       // echo "<script>alert('User account updated!')</script>";

    //     if(move_uploaded_file($tempname, $folder)){
    //       echo "<h3>  Image uploaded successfully!</h3>";
         
           echo '<script type="text/javascript">
     header(viewaddstaff.php?viewaddstaff='.$_GET['viewaddstaff'].')";
    </script>';
        }
        else{
          echo 'failed';
        }
    //     }
        
    // }else{
    
    
}
    $id=$_GET['viewaddstaff'];

   $sql = "SELECT * FROM `users` WHERE id='$id'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);

   $name = $row['name'];
   $id = $row['id'];
   $mname = $row['mname'];
   $lname = $row['lname'];
   $address = $row['address'];
   $telephone = $row['telephone'];
   $role = $row['role'];
   $email = $row['email'];
   $username = $row['username'];
   $password = $row['password'];
   $filename = $row['pp'];

    if(isset($_POST['update2']))
        {
          // $id = $_POST['id'];
         $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "cca logos/" . $filename;

    $allowed_image_extension = array("png","jpg","jpeg");
    
    // Get image file extension
    $file_extension = pathinfo($_FILES["uploadfile"]["name"], PATHINFO_EXTENSION);
    if (! file_exists($_FILES["uploadfile"]["tmp_name"])) {
        echo 'Please Choose an Image';
        exit();
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
echo '<script type="text/javascript">';
echo ' alert("Please choose a valid file, only accepts png and jpg file.")';  //not showing an alert box.
echo '</script>';
    }    // Validate image file size
    else if (($_FILES["uploadfile"]["size"] > 2000000)) {
        echo 'Not Valid';
        exit();
    }  
            else {
        $query2 = ( "UPDATE `users` SET pp = '$filename' WHERE id = $id");

        if(mysqli_query($conn, $query2) && move_uploaded_file($tempname, $folder)){
    //       // echo "<script>alert('User account updated!')</script>";

    //     if(move_uploaded_file($tempname, $folder)){
    //       echo "<h3>  Image uploaded successfully!</h3>";
         
           echo '<script type="text/javascript">
     header(viewaddstaff.php?viewaddstaff='.$_GET['viewaddstaff'].')";
    </script>';
        }
        else{
          echo 'failed';
        }
        }
      }
?>
<div id="layoutSidenav" >
                <div id="layoutSidenav_nav" class="">
                    <nav class="sb-sidenav accordion sb-sidenav-light border border-4" id="sidenavAccordion">
                        <div class="sb-sidenav-menu  border-1 border-top border-light ">
                            <div class="nav ">
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link active" href="index.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt text-light"></i></div>
                                    Dashboard
                                </a>
                                <div class="sb-sidenav-menu-heading">Modules</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i style='font-size:1.1rem' class='fas'>&#xf15c;</i></div>
                                    Human Resource
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="../human_resource/staffdirectory.php" >Staff Directory & Info.</a>
                                        <a class="nav-link" href="#" onclick="myFunction()">Light Sidenav</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Pages
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                            Authentication
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="login.html">Login</a>
                                                <a class="nav-link" href="register.html">Register</a>
                                                <a class="nav-link" href="password.html">Forgot Password</a>
                                            </nav>
                                        </div>
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                            Error
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="401.html">401 Page</a>
                                                <a class="nav-link" href="404.html">404 Page</a>
                                                <a class="nav-link" href="500.html">500 Page</a>
                                            </nav>
                                        </div>
                                    </nav>
                                </div>
                                <div class="sb-sidenav-menu-heading">Addons</div>
                                <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Charts
                                </a>
                                <a class="nav-link" href="tables.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Tables
                                </a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <?php echo '<div class="d-flex justify-content-center"><b>'.$_SESSION['name'].'</b></div>'; ?></div>
                        </div>
                    </nav>
                </div>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-3 border-bottom mb-2">
                        <h3 class="mt-4">Staff Directory & Information</h3>
                        <ol class="breadcrumb mb-3 small">
                            <li class="breadcrumb-item"><a href="../views/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Human Resource </li>
                            <li class="breadcrumb-item"><a href="../views/staffdirectory.php">Staff Directory & Info.</a></li>
                            <li class="breadcrumb-item active ">View Staff Directory & Info. </li>
                        </ol>
                    </div>
   <?php
    $id=$_GET['viewaddstaff'];
    $query1 = "SELECT * FROM`users` WHERE id = '$id'";
    $result1 = mysqli_query($conn,$query1);
    if ($result1) {
      while($row1 = mysqli_fetch_assoc($result1)){
      $id=$row1['id']; 
                $user_id=$row1['id'];
                $role1=$row1['role'];
                $role2=ucfirst($role1);
                $user_name=$row1['username'];
                $password=$row1['password'];
                $name=$row1['name'];
                $name=ucfirst($name);
                $mname=$row1['mname'];
                $mname=ucfirst($mname);
                $email=$row1['email'];
                $username=$row1['username'];
                $lname=$row1['lname'];
                $lname=ucfirst($lname);
                $address=$row1['address'];
                $address=ucfirst($address);
                $telephone=$row1['telephone'];
                $image=$row1['pp'];

    }
  }
    ?>
<div class="container-fluid mr-5" style="font-size: larger; font-family: tahoma; font-weight: lighter;">
    <!-- Account page navigation-->
    <div class="row d-flex justify-content-center">
        <div class="col-xl-3">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0 shadow bg-white rounded">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                  
                    <form method="post" enctype="multipart/form-data">
                    <!-- Profile picture image-->
                    <div class="bg-image hover-overlay hover-shadow ripple">
                    <!-- <a href="#!"> -->

                          
                    <?php echo '<img src="../images/cca logos/'.$image.'" width="80%" class="alt="image" class="img-thumbnail" />'?>
                    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)">
                    </div>
                    
                    <!-- </a> -->
                  </div>
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-0"><small>JPG or PNG no larger than 5 MB</small></div>
                    <div class="mb-3 d-flex justify-content-center">
                      <input type="file" class="form-control form-control-sm col-md-8" id="uploadfile" name="uploadfile" accept=".png,.jpeg,.jpg" value="<?php $image ?>" required>
                    </div>
                    <!-- Profile picture upload button-->
                    <button type="submit" name="update2" id="update2" value="submit" class=" btn btn-primary border border-light">Upload Photo</button>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Account details card-->
            <div class="card shadow bg-white rounded">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">

                        <!-- Form Row-->
                        <div class="row gx-3 ">
                          <!-- <input type="number" value='<?php echo $_GET['viewaddstaff'];?>' name="id" hidden> -->
                            <!-- Form Group (first name)-->
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputFirstName">First name<span class="requiredIcon text-danger">*</span></label>
                                <input class="form-control" name="name" id="inputFirstName" type="text" placeholder="Enter your first name" required value="<?php echo $name?>">
                            </div>
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputMiddleName">Middle name(Optional)</label>
                                <input class="form-control" name="mname" id="inputMiddleName" type="text" placeholder="Enter your middle name" value="<?php echo $mname?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputLastName">Last name<span class="requiredIcon text-danger">*</span></label>
                                <input class="form-control" name="lname" id="inputLastName" type="text" placeholder="Enter your last name" required value="<?php echo $lname?>">
                            </div>
                            <!-- Form Group (phone number)-->
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputPhone">Phone number<span class="requiredIcon text-danger">*</span></label>
                                <input class="form-control" name="telephone" id="inputPhone" type="tel" placeholder="Enter your phone number" required value="<?php echo $telephone?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-4">
                                <label class="small mb-1" for="inputLocation">Location<span class="requiredIcon text-danger">*</span></label>
                                <input class="form-control" name="address" id="inputLocation" type="text" required placeholder="Enter your location" value="<?php echo $address ?>" >
                            </div> 
                            <!-- Form Group (email address)-->
                        <div class="col-md-4">
                            <label class="small mb-1" for="inputEmailAddress">Email address<span class="requiredIcon text-danger">*</span></label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" required value="<?php echo $email ?>">
                        </div>                           
                        </div>
                        


                        <!-- Form Row        -->
                        <div class="row gx-3">
                          
                            <div class="col-md">
                            <label class="small mb-1" for="inputUsername">Username<span class="requiredIcon text-danger">*</span></label>
                            <input class="form-control" name="username" id="inputUsername" type="text" placeholder="Enter your username" required value="<?php echo $username?>">
                        </div>

                            <!-- Form Group (organization name)-->
                            <div class="col-md-4">
                              <label class="small mb-1" for="inputPassword">Password<span class="requiredIcon text-danger">*</span></label>
                              <div class="input-group-append d-flex justify-content-center">
                              <input name="password" type="password" value="<?php echo $password?>" class="input form-control" name="password" id="password" placeholder="password" required="true" aria-label="password" required aria-describedby="basic-addon1"/>
                            
                              <span class="input-group-text" onclick="password_show_hide();">
                                <i class="fas fa-eye" id="show_eye"></i>
                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                              </span>
                            </div>
                            </div>

                            <div class="col-md-4">

                              
                          <label class="small mb-1" for="inputPosition">Position</label>
                          <div class="input-group-append d-flex justify-content-center">
                          <input type="text" class="form-control" value="<?php echo $role2?>" disabled>
                          
                          
                            
                          <!-- <span class="input-group-append"> -->
                          <select class="form-select form-control col-md" name="role" id="role">
                          <option selected value='<?php if($role1 === $_SESSION['role']){
                            echo 'admin';

                          }else{
                            echo 'trainer';
                          }

                        ?>'><i class="fa fa-angle-down"></i></option>
                          <option value='admin'>Admin</option>
                          <option value='trainer'>Trainer</option>
                        </select>
                      </span>
                            </div>
                            </div>
                                  <!-- Form Row-->
                          <div class="col-md-4 mb-3">
                        </div>
                        </div>
                        <!-- Save changes button-->
                        <button type="submit" name="update" id="update" value="submit" class="btn btn-primary border border-light rounded-2">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?php include "../views/footer.php" ?>
     <?php }}
          }?> 
    <?php
    // include "session_timeout.php";
    require_once "../database/db_conn.php";
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
     <?php if ($_SESSION['role'] == 'trainer') { ?>
    This is user page
        <?php }
    }else{
      header("Location: auth-login.php");
    }?> 