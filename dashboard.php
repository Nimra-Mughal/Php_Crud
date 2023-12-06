<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container-fluid">
        <div class="row">
          
        <div class="col-lg-2 py-5" style="height:100vh;background-color:black;">
                <a href="../index.php">
                <img src="https://i.ytimg.com/vi/AUml2IgSFCQ/maxresdefault.jpg" class="w-75" alt="">
                </a>    
                <ul class="nav nav-tab flex-column mt-5">
                <li class="nav-item"><a href="./dashboard.php"  class="nav-link text-light mt-3">Dashboard</a></li>
                    <li class="nav-item active"><a href="./addproduct.php"  class="nav-link text-light mt-3">ADD PRODUCT</a></li>
                    <li class="nav-item"><a href="./viewproduct.php"  class="nav-link text-light mt-3">VIEW PRODUCT</a></li>

                    <li class="nav-item"><a href="./addbrand.php" class="nav-link text-light mt-3">ADD BRAND</a></li>
                    <li class="nav-item"><a href="./viewbrand.php" class="nav-link text-light mt-3">VIEW BRAND</a></li>
                </ul>
            </div>
            <div class="col-lg-10 px-">
            <nav class="navbar bg-light shadow-lg">
                    <form action="">
                        <input type="text" name="" id="" class="form-control ">
                    </form>
                    <div class="w-25 ms-auto">
                       
                        <a href="./logout.php">logout</a>
                    </div>
            </nav>

                <div class="w-75 mx-auto pt-5">
                    <h4 class="mt-5">DASHBOARD</h4>
                    <hr>
                    <div class="row pt-3 mt-2">
                        <div class="col-lg-4 mt-3 ">
                                <div class="card p-4 bg-light shadow-lg">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4_rw4ImMdLXeLnJiujpzJtVTazTVf974JDRZUy2yrqCZ-PEFnMDxJ-LYHc2rVWoE7MHk&usqp=CAU" width="100%" alt="">
                                    </div>
                                    <div class="col-lg-8">
                                    <h5 class="">Total Customer</h5>

                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="col-lg-4 mt-3 ">
                            <div class="card p-4 bg-light shadow-lg">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="https://www.nicepng.com/png/detail/443-4431327_png-file-fa-fa-product-icon.png" width="100%" alt="">
                                    </div>
                                    <div class="col-lg-8">
                                    <h5 class="">Product Count</h5>
                                    <?php 
                                        $con=mysqli_connect("localhost","root","","phpcrud");
                                        $query="SELECT COUNT(id) FROM `product`";
                                        $result=mysqli_query($con,$query);
                                        $row=mysqli_fetch_array($result);
                                    ?>
                                    <h3 class="text-center"><?php echo $row['COUNT(id)']?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 ">
                            <div class="card p-4 bg-light shadow-lg">
                                <div class="row">
                                        <div class="col-lg-4">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1253/1253360.png" width="100%" alt="">
                                        </div>
                                        <div class="col-lg-8">
                                        <h5 class="">Brand Count</h5>
                                        <?php 
                                            $con=mysqli_connect("localhost","root","","phpcrud");
                                            $query="SELECT COUNT(id) FROM `brand`";
                                            $result=mysqli_query($con,$query);
                                            $row=mysqli_fetch_array($result);
                                        ?>
                                    <h3 class="text-center"><?php echo $row['COUNT(id)']?></h3>
                                   

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3 mx-auto">
                            <div class="card p-4 bg-light shadow-lg">
                                <div class="row">
                                        <div class="col-lg-4">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3081/3081986.png" width="100%" alt="">
                                        </div>
                                        <div class="col-lg-8">
                                        <h5 class="">Total Order</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>    
            </div>
        </div>
    </div>
    
</body>
</html>