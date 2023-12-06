<?php
    $con=mysqli_connect("localhost","root","","phpcrud");
    $id= $_GET['id'];
    $query="SELECT * FROM `product` WHERE id= $id";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
?>
                        <?php 
                            if(isset($_POST['update'])){
                                $name=$_POST['name'];
                                $price=$_POST['price'];
                                $image=$_FILES['image']['name'];
                                $imgurl="";
                                if(empty($image)){
                                    $imgurl=$row['image'];
                                 }
                                 else{
                                     $imgurl="upload/".$_FILES['image']['name'];
                                     move_uploaded_file($_FILES['image']['tmp_name'],$imgurl);
                                 }
                                $desc=$_POST['desc'];
                                $sql="UPDATE `product` SET `name`='$name',`price`='$price',`image`='$imgurl',`prdesc`='$desc' WHERE id=$id";
                                mysqli_query($con,$sql);
                                header('location:viewproduct.php');  
                            }

                        ?>
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

                <div class="w-75 mx-auto ">
        
                    <div class="row pt-3 mt-2">
                  
                <form action="" enctype="multipart/form-data" method="post" class=" mx-auto mt-3 bg-light shadow-lg p-3">
                    <h1 class="text-center">UPDATE PRODUCT</h1>
                    <input type="text" value="<?php echo  $row['name']?>" name="name" id="" class="form-control mt-3">
                    <input type="number" value="<?php echo  $row['price']?>" name="price" id="" class="form-control mt-3">
                    <input type="file" name="image" id="" class="form-control mt-3">
                    <input type="text" value="<?php echo  $row['prdesc']?>" style="height:100px;text-align:justify;" name="desc" id="" class="form-control mt-3">
                    <img src="<?php echo $row['image']?>" class="mx-auto d-block" style="height:200px;" alt="">
                    <input type="submit" name="update" class="btn btn-dark mx-auto d-block mt-3">
                </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    
</body>
</html>