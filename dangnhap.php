
<?php
    session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = md5($_POST["password"]) ;
    $conn = mysqli_connect("localhost","root","","demo");
    $sql = "SELECT * FROM users WHERE email ='$email' and password = '$password'";
    $ketqua = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($ketqua)) {
      $_SESSION['fullname'] =  $row['fullname'];
      $_SESSION['address'] =  $row['address'];      
      $_SESSION['email'] =  $row['email'];
      $_SESSION['iduser'] =  $row['id'];
      $_SESSION['Quyen'] =  $row['Quyen'];
      $err = '';
    }
    if(mysqli_num_rows($ketqua)<1){
      $err = '* Sai tài khoản hoặc mật khẩu';
    }
    else{
      if ($_SESSION['Quyen'] == 'admin') {
        header("location: admin/admin.php");
        exit;
      }
      else{
        header("location:trangchu.php");
    }
}



}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
      Welcome to FlatShop
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
  </head>
  <body>
    <div class="wrapper">
           <?php 
         include("menu.php")
          ?>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              
              
                
              
            </div>
            <div class="col-md-12">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    <a href="checkout.html" class="step-title">
                      01. Đăng nhập
                    </a>
                    <div class="step-description">
                      <div class="row">
                        
                        <div class="col-md-6 col-sm-6">
                          <div class="run-customer">
                            <h5>
                              Nhập tài khoản và mật khẩu
                            </h5>
                            <form method="POST">
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red">*</strong>
                                </label >
                                <input  type="email" class="input namefild" name="email">
                              </div>

                              <div class="form-row">
                                <label class="lebel-abs">
                                  Password 
                                  <strong class="red">*</strong>
                                </label>
                                <input type="password" class="input namefild" name="password">
                              </div>
                              <?php
                              if (isset($err)) {
                                  echo '<span style="color:red"> '.$err.' </span>' ;       
                                    }  ?>
                              <p class="forgoten">
                                <a href="#">
                                  Forgoten your password?
                                </a>
                              </p>
                              <button type="submit">
                                Login
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="steps">
                    <a href="dangky.php" class="step-title">
                      02. Đăng ký
                    </a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php") ?>
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>

