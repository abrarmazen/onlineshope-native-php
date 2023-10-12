
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>



<form  method = "POST">
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modren Desgin</p>
        <?php
        require_once ("conect.php");
        $query = "select id , name ,image , description , price ,quantity from products";
        $result = mysqli_query($con , $query);
        if(mysqli_num_rows($result)>0){
            $product = mysqli_fetch_all($result , MYSQLI_ASSOC);
        }else{
           $msg ="<script>alert('inseart success')</script>";
          }
        ?>
        <div class="pro-container">
           <?php
           if(!empty($product)):
            foreach($product as $value):
           ?>
            <div class="pro">
            <!-- <form> -->
                <a href="review.php?id=<?php echo $value['id']?>">
           <img src="admin/assets/images/proImage/<?php echo $value['image']?>" alt="p1" />
           </a>
                <div class="des">
                <h2><?php echo $value['description']?></h2>
                    <h5><?php echo $value['name']?></h5>
                    <div class="star ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                    </div>
                    <h4><?php echo $value['price']?>$</h4>
                    <h4>Available:<?php echo $value['quantity']?></h4>
                    <input type="number" name="quantity">
                   
                    <button type="submit"><a href="cart.php?id=<?php echo $value['id']?>" class="btn btn-info "></a><i class="fas fa-shopping-cart "></i></a></button>
                    </form>
                </div>
            

              
            </div>
            <?php
        endforeach;
          else:
             echo $msg;
          endif;
          ?>
        </div>
    </section>
    


    <section id="pagenation" class="section-p1">
    <nav aria-label="Page navigation example" >
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="shop.php" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1 of 2 </a></li>
 
    <li class="page-item">
      <a class="page-link" href="shop.php?" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext ">
            <h4>Sign Up For Newletters</h4>
            <p>Get E-mail Updates about our latest shop and <span class="text-warning ">Special Offers.</span></p>
        </div>
        <div class="form ">
            <input type="text " placeholder="Enter Your E-mail... ">
            <button class="normal ">Sign Up</button>
        </div>
    </section>


    <?php include 'footer.php' ?>