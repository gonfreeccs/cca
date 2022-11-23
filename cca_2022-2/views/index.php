    <?php 
    include "session_timeout.php";
    include "../views/links.html";
    include "../views/header.php";
    include "../database/db_conn.php";
    ?>
    <?php if(isset($_SESSION['username']) && isset($_SESSION['id'])&& isset($_SESSION['user_id'])) {   ?>
    <?php if ($_SESSION['role'] == 'admin') {?>
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
    <?php include "../dashboard/content.php" ?>
    <?php include "../views/footer.php" ?>


    
     <?php }
          }?> 
    <?php
    // include "session_timeout.php";
    require_once "../database/db_conn.php";
    if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
     <?php if ($_SESSION['role'] == 'trainer') { ?>
    This is user page
        <?php }
    }else{
      header("Location auth-login.php");
    }?> 