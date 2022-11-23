<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-3">
                        <h3 class="mt-4">Staff Directory & Information</h3>
                        <ol class="breadcrumb mb-3 small">
                            <li class="breadcrumb-item"><a href="../views/index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Human Resource </li>
                            <li class="breadcrumb-item active">Staff Directory & Info. </li>
                        </ol>
                    </div>
                <small>
 <div class="container rounded mb-2 border-top border-1" style="font-size:small;">
  <div class="row d-flex justify-content-center">
    <?php 
    $query1 = "select * from users";
    $result1 = mysqli_query($conn,$query1);
    if ($result1) {
      while($row1 = mysqli_fetch_assoc($result1)){
      $id=$row1['id']; 
                $user_id=$row1['id'];
                $role=$row1['role'];
                $role=ucfirst($role);
                $user_name=$row1['username'];
                $password=$row1['password'];
                $name=$row1['name'];
                $name=ucfirst($name);
                $mname=$row1['mname'];
                $mname=ucfirst($mname);
                $email=$row1['email'];
                $lname=$row1['lname'];
                $lname=ucfirst($lname);
                $address=$row1['address'];
                $address=ucfirst($address);
                $telephone=$row1['telephone'];
                $image=$row1['pp'];
      echo '<div class="col-md-2 mx-1 my-1 shadow p-2 bg-white rounded border-top border-3 border-primary mt-4" style="background-color:white">
                <div class="text-center card-box ">
                    <div class="member-card pt-2 pb-2 ">
                        <div class="thumb-lg member-thumb mx-auto"><img src="../images/cca logos/'.$image.'" class="rounded-circle img-thumbnail" width="20%" alt="profile-image"></div>
                        <div class="mt-2">
                            <h6>'.$name.' '.$lname.'</h6>
                            </span><span><a href="#" class="text-pink">'.$email.'</a></span>
                        </div>
                        
                        <a href="viewaddstaff.php?viewaddstaff='.$id.'" class="btn btn-sm btn-light mt-3 btn-rounded border waves-effect w-md waves-light">More info</a>
                       
                    </div>
                </div>
            </div>
      ';

    }
  }
  echo '</div>';
    ?>
            </main>