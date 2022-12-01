<?php
session_start();
require('content.php');
require('data1.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css" />
    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link
      href="assets/vendor/owl.carousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css"
      rel="stylesheet"
    />
    <link href="assets/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link
      type="text/css"
      rel="stylesheet"
      href="assets/css/jquery-te-1.4.0.css"
    />

    <link rel="stylesheet" href="files.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="top" style="background: #043e62"></div>
    <!-- Header -->
    <header >
      <div class="top2" style="height: 160px;">
        <div class="t2">
          <div class="logo">
            <img src="assets/banniere.png" style="height: 160px;"/>
          </div>
        </div>
      </div>
    </header>
    <!--end Header -->
    <!-- nav -->
    <div class="d-flex">
        
    
    <nav id="n1">
      <div class="t3 navb">
        <a href="" class="nav-item nav-home" 
          ><span class="icon-field"><i class="fa fa-school"></i></span>Dashboard</a
        >
        <a href="" class="nav-item nav-files" id="active"
          ><span class="icon-field"><i class="fa fa-folder"></i></span> folders</a
        >

        <a href="ff.php" class="nav-item nav-users"
          ><span class="icon-field"><i class="fa fa-file"></i></span> files</a
        >
        <?php
        if(isset($_SESSION['user']))
                          {
                           echo
          '<a href="logout.php?logout" class="nav-item nav-users"
            ><span class="icon-field"><i class="fa fa-user"></i></span> Log-out</a
          >';
        }
?>
        <a href="">
        <div class="  justify-content-evenly">
                        <!-- <div class="item-icon fa fa-user text-primary"></div> -->
                        <img class="rounded-circle ml-2" src="dw/user.jpg" alt="" style="width: 40px; height: 40px; float:left;">
                    <div class="ms-3 fw-bold d-flex mt-1">
                        <h6 class="mb-0 fw-bold mt-2 pl-2"><?php echo $_SESSION['user']; ?></h6><span class="mt-2" style="margin-left: 5px;"><?php echo $_SESSION['status']; ?></span>    
                    </div>
                    </div>
        </a>
      </div>
    </nav>
    <div class="fol">
        <div class="" id="folder">
            <div class="">
                <h3 class="fw-bold mb-1">Folder</h3>
                <button class="btn btn-success mb-3">Add New <i class="fa fa-upload"></i></button>
                <div class="" style=" width:1150px; border-radius:5px;">
                    <div class="d-flex sr">
                        <div class="text-secondary pl-1">List</div>
                        <div class="">
                        <form action="" method="post" class="d-flex">
                          <input
                            type="text"
                            name="seach"
                            class="form-control"
                            style="width: 300px; height: 30px"
                            placeholder="Folder name"
                          />
                          <button
                            type="submit"
                            name="submit"
                            class="btn btn-sm btn-danger"
                            style="width: 50px"
                          >
                            <i class="bi bi-search fw-bold"></i>
                          </button>
                        </form>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Folder Id</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $sql = "SELECT Fid , fname  FROM folders;";
                              $result = mysqli_query($link,$sql);
                              while($row=mysqli_fetch_assoc($result))
                                  {
                                  files($row['Fid'],$row['fname']);
                                  }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex st">
                        <div class="text-secondary pl-1"><i class="fa fa-list"></i></div>
                        <div class="d-flex" >
                            <p class="text-secondary pr-2">previous</p>
                            <button class="btn btn-sm btn-dark" style="height: 30px;">1</button>
                            <p class="text-secondary pl-2">next</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end nav -->


  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/DataTables/datatables.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script
    type="text/javascript"
    src="assets/font-awesome/js/all.min.js"
  ></script>
  <script
    type="text/javascript"
    src="assets/js/jquery-te-1.4.0.min.js"
    charset="utf-8"
  ></script>
</html>
