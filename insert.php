<?php 
$con=mysqli_connect("localhost","root","","phpcrud");

if(isset($_POST['insert'])){
    $imagename=$_FILES['image']['name'];
    $imagetmpname=$_FILES['image']['tmp_name'];
    $imgurl='upload/'.$imagename;
    move_uploaded_file( $imagetmpname, $imgurl);
    $query="INSERT INTO `product`(`name`, `price`, `image`, `prdesc`) VALUES ('$name','$price','$imgurl','$desc')";
    mysqli_query($con,$query);
    header("location:viewproduct.php");
}
  


?>