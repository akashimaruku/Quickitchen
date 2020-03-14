<?php
session_start();
require 'db.php';
 if(isset($_POST['pid'])){
    
    $action = $_POST['action'];
    $pid = $_POST['pid'];  
   
    if($action == "add"){
    $pprice = $_POST['pprice'];
    $pimage = $_POST['pimage'];
    $pcode = $_POST['pcode'];
     $pname = $_POST['pname'];
    $pqty = 1;
    }
   
     $stmt = $con->prepare("select product_code from cart where product_code=?");
     $stmt->bind_param("s",$pcode);
     $stmt->execute();
     $res = $stmt->get_result();
     $r = $res->fetch_assoc();
     $code = $r['product_code'];
     
     if(!$code){
      if($action == "add"){
      $query = $con->prepare("insert into cart (product_name,price,image,qty,total_price,product_code) values (?,?,?,?,?,?)");
      $query->bind_param("sssiss",$pname,$pprice,$pimage,$pqty,$pprice,$pcode);
      $query->execute();
      }else{
        $qty = $_POST['qty'];
        $tprice = $qty*$pprice;

        $stmt = $con->prepare("update cart set qty=?, total_price=? where id=?");
        $stmt->bind_param("isi",$qty,$tprice,$pid);
        $stmt->execute();
      }
      echo   '<script type="text/javascript">
             alert("Item Successfully added to cart.");
          </script>
      ';

       /*echo   '<div class="alert alert-success alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Item already added to your cart.</strong>
                  </div>';
                */
     }
     else{

          echo   '<div class="alert alert-danger alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Item already added to your cart.</strong>
                  </div>';

        /*           '<script type="text/javascript">
                 alert("Item already added to cart.");
          </script>
      '; */
     }
                 
}

if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
$stmt = $con->prepare("select * from cart");
$stmt->execute();
$stmt->store_result();
$rows = $stmt->num_rows;

echo $rows;

}

if(isset($_GET['remove'])){
 $id= $_GET['remove'];
 
 $stmt= $con->prepare("delete from cart where id=?");
 $stmt->bind_param("i",$id);
 $stmt->execute();

 $_SESSION['showAlert'] = 'block';
 $_SESSION['message'] ='Item removed from the cart.';
 header('location:mycart.php');
}

if(isset($_GET['clear'])){
   $stmt= $con->prepare("delete from cart");
   $stmt->execute();
   $_SESSION['showAlert'] = 'block';
   $_SESSION['message'] ='All items removed from the cart.';
   header('location:mycart.php');
}

if(isset($_POST['qty'])){
  $qty = $_POST['qty'];
  $pid = $_POST['pid'];
  $pprice = $_POST['pprice'];

  $tprice = $qty*$pprice;

  $stmt = $con->prepare("update cart set qty=?, total_price=? where id=?");
  $stmt->bind_param("isi",$qty,$tprice,$pid);
  $stmt->execute();
  
}
?>