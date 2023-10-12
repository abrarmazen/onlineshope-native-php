<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<section id="page-header" class="about-header"> 
        <h2>#Cart</h2>
        <p>Let's see what you have.</p>
    </section>
    <?php
    require_once "conect.php";
    if(!isset($_GET['id'])){
        header("location:shop.php");
    }else{
        $id = $_GET['id'];
        $query = "select * from products where id =$id";
        $result= mysqli_query($con , $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
        }else{
            $msg ="id not found";
        }
        
    }

    ?>
 
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Desc</td>
                    <td>Quantity</td>
                    <td>price</td>
                    <td>Subtotal</td>
                    <td>Remove</td>
                    <td>Edit</td>
                </tr>
            </thead>
   
            <tbody>
                <tr>
                    <td><img src="admin/assets/images/proImage/<?php echo $row['image']?>" alt="product1"></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['quantity']*$row['price'] ?></td>
                   
                    
                    <td></td>
                    
                    <!-- Remove any cart item  -->
                    <td>
                    <a href="handle/handledelete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
            </tbody>
            <!-- confirm order  -->
            <td> <a href="confirmOrder.php?id=<?php echo $row['id']?>" class="btn btn-danger">confirm</a></td>
            
        </table>
    </section>

    <!-- <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" placeholder="Enter coupon code">
            <button class="normal">Apply</button>
        </div>
        <div id="subTotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$118.25</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$118.25</strong></td>
                </tr>
            </table>
            <button class="normal">proceed to checkout</button>
        </div>
    </section> -->

    <?php include "footer.php" ?>

