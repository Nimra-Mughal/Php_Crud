
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
        
                    <div class="row pt-3 mt-2">
                        <div class="col-lg-12">
                                    <table class=" mx-auto table mt-3 p-3 shadow-lg">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>PRICE</th>
                                                <th>IMAGE</th>
                                                <th>VIEW</th>
                                                <th>DELETE</th>
                                                <th>UPDATE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $con=mysqli_connect("localhost","root","","phpcrud");
                                                $query="SELECT * FROM `product`";
                                                $result=mysqli_query($con,$query);
                                                foreach( $result as $i){
                                                ?> 
                                            <tr>
                                                <td><?php echo $i['id'];?></td>
                                                <td><?php echo $i['name']?></td>
                                                <td><?php echo $i['price']?></td>
                                                <td><img src="<?php echo $i['image']?>" style="height: 50px;" alt=""></td>
                                                <td><a href="view.php? id=<?php echo $i['id']?>" class=""><i class="fa-solid fa-eye text-success"></i></a></td>
                                                <td><a href="delete.php? id=<?php echo $i['id']?>" class=""><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                                                <td><a href="updateproduct.php? id=<?php echo $i['id']?>" class=""><i class="fa-solid fa-pen-to-square text-primary"></i></a></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    
</body>
</html>