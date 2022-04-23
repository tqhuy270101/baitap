<?php
session_start();
$err = '';
$err1 = '';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $iduser = $_POST['iduser'];
    $conn = mysqli_connect("localhost","root","","demo");
    $sql = "SELECT * from users where email='$email'";

    $kq= mysqli_query($conn,$sql);
    if(mysqli_num_rows($kq)>0){    
    $err = '* Email đã tồn tại';
    }else{
        $sqli = "INSERT INTO users(email,password,fullname,address,city,Quyen) VALUES('$email','$password','$fullname','$address','$city','user')";
        $ketqua = mysqli_query($conn , $sqli);
        $_SESSION['address'] =  $address;
        $_SESSION['city'] =  $city;
        echo '<script language="javascript">'; 
        echo 'alert("Bạn đã đăng ký thành công")'; 
        echo '</script>';

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
            <div class="col-md-12">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps">
                    <a href="dangnhap.php" class="step-title">
                      01. Đăng nhập
                    </a>
                  </li>
                  <li class="steps active">
                    <a  class="step-title">
                      02. Đăng ký
                    </a>
                    <div class="step-description">
                      <form method="POST">
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Nhập thông tin của bạn
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                 Họ và tên
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="fullname" required="">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Số điện thoại
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="number" class="input namefild" name="phone" required="">
                              </div>
                                                            <div class="pass-wrap">

                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="email" class="input namefild" name="email" required="">
                              </div>
                              
                              
                              
                                <div class="form-row">
                                  <label class="lebel-abs">
                                    Mật khẩu
                                    <strong class="red">
                                      *
                                    </strong>
                                  </label>
                                  <input type="password" class="input namefild" name="password" required="">
                                </div>
                               
                              </div>
                             
                              
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Địa chỉ của bạn
                              </h5>
                              
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Địa chỉ
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="address" required="">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Thành phố
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="city" required="">
                              </div>
                               <?php
                              if (isset($err)) {
                                  echo '<p style="color:red"> '.$err.' </p>' ;  
                                      }
                                      
                                      ?>
                              <button type="submit">
                                Continue
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
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