<?php
session_start()
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

    <link rel="stylesheet" href="file.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="top" style="background: #043e62"></div>
    <!-- Header -->
    <header>
      <div class="top2">
        <div class="t2">
          <div class="logo">
            <img src="assets/banniere.png" />
          </div>
        </div>
      </div>
    </header>
    <!--end Header -->
    <!-- nav -->
    <nav id="n1">
      <div class="t3 navb d-flex justify-content-evenly align-items-center">
        <a href="" class="nav-item nav-home"
          ><span class="icon-field"><i class="fa fa-home"></i></span> Home</a
        >
        <a href="" class="nav-item nav-files"
          ><span class="icon-field"><i class="fa fa-file"></i></span> Files</a
        >

        <a href="" class="nav-item nav-users"
          ><span class="icon-field"><i class="fa fa-users"></i></span> Users</a
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
        <div class=" d-flex justify-content-evenly">
                        <!-- <div class="item-icon fa fa-user text-primary"></div> -->
                        <img class="rounded-circle" src="dw/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="ms-3 fw-bold d-flex mt-2">
                        <h6 class="mb-0 fw-bold"><?php echo $_SESSION['user']; ?></h6><span style="margin-left: 5px;"><?php echo $_SESSION['status']; ?></span>    
                    </div>
                    </div>
        </a>
      </div>
    </nav>
    <!--end nav -->
    <div class="bb">
      <section class="bs">
        <h2 class="text-dark">Folders</h2>
        <div class="folders">
          <div class="f1 d-flex justify-content-evenly">
            <div class="">
              <a href=""><img src="dw/folder.png" alt="" /></a>
              <a href=""><h3>Cardre De La DIR</h3></a>
            </div>
            <div class="">
              <a href=""><img src="dw/folder.png" alt="" /></a>
              <a href=""><h3>Directeer G</h3></a>
            </div>
            <div class="">
              <a href=""><img src="dw/folder.png" alt="" /></a>
              <a href=""><h3>Membre De La Dir</h3></a>
            </div>
          </div>
          <div class="f2 d-flex justify-content-evenly">
            <div class="">
              <a href=""><img src="dw/folder.png" alt="" /></a>
              <a href=""><h3>Minister</h3></a>
            </div>
            <div class="">
              <a href=""><img src="dw/folder.png" alt="" /></a>
              <a href=""><h3>SG</h3></a>
            </div>
            <div class="">
              <a href=""><img src="dw/folder.png" alt="" /></a>
              <a href=""><h3>Stager</h3></a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <nav class="n1" style="height: 10px"></nav>
    <div class="fil" style="height: 40px">
      <h3>Files</h3>
    </div>
    <div class="n4" style="padding: 0px 50px 0px 50px">
      <div class="pt-4 pb-3">
        <form action="" method="post" class="d-flex">
          <input
            type="text"
            name="seach"
            class="form-control"
            style="width: 350px; height: 50px"
            placeholder="File name"
          />
          <button
            type="submit"
            name="submit"
            class="btn btn-lg btn-danger"
            style="width: 70px"
          >
            <i class="bi bi-search fw-bold"></i>
          </button>
        </form>
      </div>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
            <th scope="col">Num</th>
              <th scope="col">File Name</th>
              <th scope="col">Type</th>
              <th scope="col">Date</th>
              <th scope="col">Description</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr class="">
            <td>1</td>
              <td scope="row">
                <img src="dw/pdf.png" alt="" style="width: 20px" /> R1C1
              </td>
              <td>R1C2</td>
              <td>R1C3</td>
              <td>R1C3</td>
              <td>
                <form action="">
                  <button
                    type="submit"
                    name="go"
                    class="btn btn-sm btn-success"
                    style="margin-left: 10px"
                  >
                    view
                  </button>
                </form>
              </td>
            </tr>
            <tr class="">
            <td>1</td>
              <td scope="row">
                <img src="dw/pdf.png" alt="" style="width: 20px" />Item
              </td>
              <td>Item</td>
              <td>Item</td>
              <td>Item</td>
              <td>
                <form action="">
                  <button
                    type="submit"
                    name="go"
                    class="btn btn-sm btn-success"
                    style="margin-left: 10px"
                  >
                    view
                  </button>
                </form>
              </td>
            </tr>
            <tr class="">
            <td>1</td>
              <td scope="row">
                <img src="dw/pdf.png" alt="" style="width: 20px" />R1C1
              </td>
              <td>R1C2</td>
              <td>R1C3</td>
              <td>R1C3</td>
              <td>
                <form action="">
                  <button
                    type="submit"
                    name="go"
                    class="btn btn-sm btn-success"
                    style="margin-left: 10px"
                  >
                    view
                  </button>
                </form>
              </td>
            </tr>
            <tr class="">
            <td>1</td>
              <td scope="row">
                <img src="dw/pdf.png" alt="" style="width: 20px" />Item
              </td>
              <td>Item</td>
              <td>Item</td>
              <td>Item</td>
              <td>
                <form action="">
                  <button
                    type="submit"
                    name="go"
                    class="btn btn-sm btn-success"
                    style="margin-left: 10px"
                  >
                    view
                  </button>
                </form>
              </td>
            </tr>
            <tr class="">
            <td>1</td>
              <td scope="row">
                <img src="dw/pdf.png" alt="" style="width: 20px" />R1C1
              </td>
              <td>R1C2</td>
              <td>R1C3</td>
              <td>R1C3</td>
              <td>
                <form action="">
                  <button
                    type="submit"
                    name="go"
                    class="btn btn-sm btn-success"
                    style="margin-left: 10px"
                  >
                    view
                  </button>
                </form>
              </td>
            </tr>
            <tr class="">
            <td>1</td>
              <td scope="row">
                <img src="dw/pdf.png" alt="" style="width: 20px" />Item
              </td>
              <td>Item</td>
              <td>Item</td>
              <td>Item</td>
              <td>
                <form action="">
                  <button
                    type="submit"
                    name="go"
                    class="btn btn-sm btn-success"
                    style="margin-left: 10px"
                  >
                    view
                  </button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <footer style="margin-top: 10px">
      <nav class="navbar navbar-dark bg-dark">
        <div class="">
          <a href="#"><i class="bi bi-twitter text-light mx-1"></i></a>
          <a href="#"><i class="bi bi-facebook text-light mx-1"></i></a>
          <a href="#"><i class="bi bi-instagram text-light mx-1"></i></a>
          <a href="#"><i class="bi bi-whatsapp text-light mx-1"></i></a>
          <a href="#"><i class="bi bi-telegram text-light mx-1"></i></a>
          <a href="mailto:nkankeman@gmail.col"
            ><i class="bi bi-mailbox2 text-light mx-1"></i
          ></a>
        </div>
        <br />
        <p
          style="
            color: white;
            position: relative;
            top: 6px;
            margin-left: -100px;
          "
        >
          &copy;file Management System
        </p>
        <a class="navbar-brand" href="#"
          >&rarr; Design And Made By Nkanke Yan Ulrich</a
        >
      </nav>
    </footer>
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
