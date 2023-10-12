
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>



<form  method = "POST">
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modren Desgin</p>
        <?php
        require_once ("conect.php");
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
            <div class="pro">
            <!-- <form> -->
                <a href="review.php">
           <img src="admin/assets/images/proImage/<?php echo $row['image']?>" alt="p1" />
           </a>
                <div class="des">
                <h2><?php echo $row['description']?></h2>
                    <h5><?php echo $row['name']?></h5>
                    <div class="star ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                    </div>
                    <h4><?php echo $row['price']?>$</h4>
                    <h4>Available:<?php echo $row['quantity']?></h4>
                    
                    </form>
                </div>
            

              
    </div>
        </div>
    </section>
    <div class="row d-flex justify-content-center">
  <div class="col-md-8 col-lg-6">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
    <form action=""></form>
    <div class="card-body p-4">
    1:<input type="radio" name = "rating" value="1">
    2:<input type="radio" name = "rating" value="2">
    3:<input type="radio" name = "rating" value="3">
    4:<input type="radio" name = "rating" value="4">
    5:<input type="radio" name = "rating" value="5">
   
      <div class="card-body p-4">
        <div class="form-outline mb-4">
          <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
          <button class="form-label" for="addANote" name="submit">+ Add a note</button>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p>Type your note, and hit enter to add it</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2">Martha</p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">Upvote?</p>
                <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                <p class="small text-muted mb-0">3</p>
              </div>
            </div>
          </div>
    </div>
      </div>
    </div>
  </div>
</div>