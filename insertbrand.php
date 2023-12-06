<?php 
    if(isset($_POST['insertbrand'])){
        $name=$_POST['name'];
        $imgname=$_FILES['image']['name'];
        $tmpname=$_FILES['image']['tmp_name'];
        $desc=$_POST['desc'];
        $imgurl="brand/".$imgname;
        move_uploaded_file($tmpname,$imgurl);
        $con=mysqli_connect("localhost","root","","phpcrud");
        $query="INSERT INTO `brand`( `name`, `image`, `description`) VALUES ('$name','$imgurl','$desc')";
        mysqli_query($con,$query);
        header('location:viewbrand.php');
    }
?>