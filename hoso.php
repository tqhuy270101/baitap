<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
</head>
<body>


<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4 a">
                        <div class="profile-img">
                            <img src="./images/avthoso.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/abc>
                            </div>
                        </div>
                    </div>
                    <?php $conn = mysqli_connect("localhost","root","","demo");
                    $sql = "SELECT* FROM users";
                    $ketqua = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($ketqua) ;
                   echo'
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        '.$row['fullname'].'
                                    </h5>
                                    <h6>
                                        THÔNG TIN CỦA BẠN
                                    </h6>
                                    <p class="proile-rating">ĐIỂM TÍCH LŨY  : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                                            <a  class="btn btn-primary" name="btnAddMore" href="trangchu.php">Quay lai</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>00000'.$row['id'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['fullname'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['email'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['phone'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Địa chỉ</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['address'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Thành phố</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['city'].'</p>
                                            </div>
                                            
                                        </div>
                            </div>';
                              
                     ?>
                        
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>  
    <link rel="stylesheet" type="text/css" href="css\stylehoso.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>