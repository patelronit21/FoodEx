<?php
include 'Connection.php';

if(!empty($_SESSION["id"])){
   $id = $_SESSION["id"];

    $select = "SELECT * FROM food WHERE id =$id ";

   $result = mysqli_query($conn, $select);
   $row = mysqli_fetch_assoc($result);
}
else{
   header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Food Page</title>
</head>
<body>

    <section id="Home">

        <div class="navbar">
      <div class="nav-logo">
        <div class="logo"></div>
      </div>

      <div class="nav-link">
        <a href="#Home">Home</a>
        <a href="#About">About</a>
        <a href="#Menu">Menu</a>
        <a href="#Gallary">Gallary</a>
        <a href="#Review">Review</a>
        <a href="#Order">Order</a>
      </div>


      <div class="nav-icon">
        <div class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
      </div>
	  
	  <div class="btn-logout">
      <a href="Logout1.php"><button>Log Out</button></a>
     </div>

    </div>


    <!--main section-->
    <div class="main">
     <div class="main-text">
        <h1>Get Fresh<span>Food</span><br>In A Easy Way</h1>
     </div>

     <div class="main-img">
        <img src="image/main_img.png" alt="">
     </div>
  
    </div>

<!--2 main -->

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nisi saepe
     earum ad numquam dicta, facilis delectus laboriosam sint esse doloribus magni. 
        Repudiandae pariatur aspernatur, iusto repellat soluta nulla et?</p>

        <div class="main-btn">
            <a href="#">Order Now</a>
            <i class="fa-solid fa-angle-right"></i> 

        </div>

      </section>

<!--About-->

<div class="about" id="About">

    <div class="about-main">

        <div class="image">
            <img src="image/Food-Plate.png">
        </div>

        <div class="about-text">
            <h1><span>About</span>Us</h1>
            <h3>Why Choose Us?</h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum provident 
                dolores praesentium fuga quam beatae fugiat pariatur illo. Exercitationem in culpa
                 aperiam modi placeat perferendis nulla impedit, corrupti ad ducimus.
            </p>
        </div>

    </div>
    <a href="#" class="btn-about">Order Now</a>

</div>


<!--Menu-->

<div class="menu" id="Menu">

    <h1>Our<span>Menu</span></h1>

    <div class="menu-box">

        <div class="menu-card">

         <div class="menu-image">
            <img src="image/buger.jpg">
         </div>

         <div class="small-card">
            <i class="fa-solid fa-heart"></i>
         </div>

         <div class="menu-info">
            <h2>Burger</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                eos voluptatibus pariatur illo! Iure sequi?</p>
             <h3>$20.00</h3>

             <div class="menu-icon">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
             </div>
              
             <a href="#" class="menu-btn">Order Now</a>

         </div>
        
        </div>

    
         
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/pasta.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Pasta</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>



           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/lasagna.webp">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Lasagna</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>



           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/chocolate_Drink.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Chocolate Drink</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>




           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/pizza.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Pizza</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>





           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/Hot_dog.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Hot Dog</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>




           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/juse.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Juse</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>





           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/biryani.webp">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Biryani</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>

          
           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/chocolate.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Chocolate</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>


   
           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/ice_cream.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Ice Cream</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>



           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/Spanchi.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Spanchi</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>



           
        <div class="menu-card">

            <div class="menu-image">
               <img src="image/sandwich.jpg">
            </div>
   
            <div class="small-card">
               <i class="fa-solid fa-heart"></i>
            </div>
   
            <div class="menu-info">
               <h2>Sandwich</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis 
                   eos voluptatibus pariatur illo! Iure sequi?</p>
                <h3>$20.00</h3>
                
                <div class="menu-icon">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                 
                <a href="#" class="menu-btn">Order Now</a>
   
            </div>
           
           </div>




    </div>

</div>

<!--Gallary-->

<div class="gallary" id="Gallary">

 <h1>Our<span>Gallary</span></h1>

 <div class="gallary-image-box">
    <div class="gallary-image">
        <img src="image/gallary_1.jpg">

       <h3>Food</h3>
       <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente distinctio porro dolorem iure, assumenda 
        numquam reprehenderit pariatur.
       </p>

   <a href="#" class="gallary-btn">Order Now</a>
    </div>

  
    <div class="gallary-image">
        <img src="image/gallary_6.jpg">

       <h3>Food</h3>
       <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente distinctio porro dolorem iure, assumenda 
        numquam reprehenderit pariatur.
       </p>

   <a href="#" class="gallary-btn">Order Now</a>
    </div>


    <div class="gallary-image">
        <img src="image/gallary_2.jpg">

       <h3>Food</h3>
       <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente distinctio porro dolorem iure, assumenda 
        numquam reprehenderit pariatur.
       </p>

   <a href="#" class="gallary-btn">Order Now</a>
    </div>


    <div class="gallary-image">
        <img src="image/gallary_3.jpg">

       <h3>Food</h3>
       <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente distinctio porro dolorem iure, assumenda 
        numquam reprehenderit pariatur.
       </p>

   <a href="#" class="gallary-btn">Order Now</a>
    </div>


    <div class="gallary-image">
        <img src="image/gallary_4.jpg">

       <h3>Food</h3>
       <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente distinctio porro dolorem iure, assumenda 
        numquam reprehenderit pariatur.
       </p>

   <a href="#" class="gallary-btn">Order Now</a>
    </div>

    <div class="gallary-image">
        <img src="image/gallary_5.jpg">

       <h3>Food</h3>
       <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente distinctio porro dolorem iure, assumenda 
        numquam reprehenderit pariatur.
       </p>

   <a href="#" class="gallary-btn">Order Now</a>
    </div>



 </div>


</div>

<!--Review-->

<div class="review" id="Review">

   <h1>Customer<span>Review</span></h1>

   <div class="review-box">

      <div class="review-card">
         
         <div class="review-profile">
            <img src="image/review_1.png">
         </div>

         <div class="review-text">
            <h2 class="name">John Doe</h2>

            <div class="review-icon">
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star-half-stroke"></i>
            </div>

            <div class="review-social">
               <i class="fa-brands fa-facebook-f"></i>
               <i class="fa-brands fa-instagram"></i>
               <i class="fa-brands fa-twitter"></i>
               <i class="fa-brands fa-linkedin"></i>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio velit iste eligendi omnis corporis
                quasi, dignissimos eo</p>

         </div>


      </div>


      
      <div class="review-card">
         
         <div class="review-profile">
            <img src="image/review_2.png">
         </div>

         <div class="review-text">
            <h2 class="name">John Doe</h2>

            <div class="review-icon">
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star-half-stroke"></i>
            </div>

            <div class="review-social">
               <i class="fa-brands fa-facebook-f"></i>
               <i class="fa-brands fa-instagram"></i>
               <i class="fa-brands fa-twitter"></i>
               <i class="fa-brands fa-linkedin"></i>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio velit iste eligendi omnis corporis
                quasi, dignissimos eo</p>

         </div>


      </div>



      
      <div class="review-card">
         
         <div class="review-profile">
            <img src="image/review_3.png">
         </div>

         <div class="review-text">
            <h2 class="name">John Doe</h2>

            <div class="review-icon">
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star-half-stroke"></i>
            </div>

            <div class="review-social">
               <i class="fa-brands fa-facebook-f"></i>
               <i class="fa-brands fa-instagram"></i>
               <i class="fa-brands fa-twitter"></i>
               <i class="fa-brands fa-linkedin"></i>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio velit iste eligendi omnis corporis
                quasi, dignissimos eo</p>

         </div>


      </div>




      
      <div class="review-card">
         
         <div class="review-profile">
            <img src="image/review_4.png">
         </div>

         <div class="review-text">
            <h2 class="name">John Doe</h2>

            <div class="review-icon">
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star"></i>
               <i class="fa-solid fa-star-half-stroke"></i>
            </div>

            <div class="review-social">
               <i class="fa-brands fa-facebook-f"></i>
               <i class="fa-brands fa-instagram"></i>
               <i class="fa-brands fa-twitter"></i>
               <i class="fa-brands fa-linkedin"></i>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio velit iste eligendi omnis corporis
                quasi, dignissimos eo</p>

         </div>


      </div>


   </div>


</div>

<!--Order-->

<div class="order" id="Order">

<h1><span>Order</span>Now</h1>

<div class="order-main">

  <div class="order-image">
   <img src="image/order_image.png">
  </div>

  <form action="#">

   <div class="input">
      <p>Name:</p>
      <input type="text" placeholder="You name">
   </div>

   <div class="input">
      <p>Email:</p>
      <input type="text" placeholder="You Email">
   </div>

   <div class="input">
      <p>Number:</p>
      <input type="text" placeholder="You Number">
   </div>

   <div class="input">
      <p>How Much:</p>
      <input type="number" placeholder="How Many Order">
   </div>


   <div class="input">
      <p>You Order:</p>
      <input placeholder="Food Name">
   </div>

   <div class="input">
      <p>Address:</p>
      <input type="text" placeholder="Address">
   </div>

   <a href="#" class="order-btn">Order Now</a>


</form>

</div>


</div>

<!--Team-->

<div class="team">

  <h1>Our<span>Team</span></h1>

   <div class="team-box">

    <div class="profile">

   <img src="image/chef1.png">

   <div class="info">

      <h2 class="name">Chef</h2>
      <p>Lorem ipsum dolor sit,amet siu.</p>

      <div class="team-icon">
         <i class="fa-brands fa-facebook-f"></i>
         <i class="fa-brands fa-twitter"></i>
         <i class="fa-brands fa-instagram"></i>
      </div>



   </div>

</div>



<div class="profile">

   <img src="image/chef2.png">

   <div class="info">

      <h2 class="name">Chef</h2>
      <p>Lorem ipsum dolor sit,amet siuss.</p>

      <div class="team-icon">
         <i class="fa-brands fa-facebook-f"></i>
         <i class="fa-brands fa-twitter"></i>
         <i class="fa-brands fa-instagram"></i>
      </div>



   </div>

</div>

<div class="profile">

   <img src="image/chef3.jpg">

   <div class="info">

      <h2 class="name">Chef</h2>
      <p>Lorem ipsum dolor sit,amet siuss.</p>

      <div class="team-icon">
         <i class="fa-brands fa-facebook-f"></i>
         <i class="fa-brands fa-twitter"></i>
         <i class="fa-brands fa-instagram"></i>
      </div>



   </div>

</div>


<div class="profile">

   <img src="image/chef4.jpg">

   <div class="info">

      <h2 class="name">Chef</h2>
      <p>Lorem ipsum dolor sit,amet siuss.</p>

      <div class="team-icon">
         <i class="fa-brands fa-facebook-f"></i>
         <i class="fa-brands fa-twitter"></i>
         <i class="fa-brands fa-instagram"></i>
      </div>



   </div>

</div>


   </div>

</div>

<!--Footer-->

     <footer>

        <div class="footer-main">
        
           <div class="footer-tag">
        
              <h2>location</h2>
            
               <p>Sri Lanka</p>
               <p>USA</p>
               <p>India</p>
               <p>Japan</p>
               <p>Italy</p>
               
              </div>
     
              <div class="footer-tag">
        
                 <h2>Quick Link</h2>
               
                  <p>Home</p>
                  <p>About</p>
                  <p>Menu</p>
                  <p>Gallary</p>
                  <p>Order</p>
                  
                 </div>
     
                 <div class="footer-tag">
        
                    <h2>Contact</h2>
                  
                     <p>+94 12345 78694</p>
                     <p>+94 25378 29883</p>
                     <p>jhondeo132@gamil.com</p>
                     <p>foodshop123@gmail.com</p>
                    
                      </div>
     
                    <div class="footer-tag">
        
                       <h2>Our Service</h2>
                     
                        <p>Fast Delivery</p>
                        <p>Easy Payment</p>
                        <p>24 x 7 Service</p>
                        
                       </div>
                        
                       <div class="footer-tag">
        
                          <h2>Follows</h2>
                        
                          <i class="fa-brands fa-facebook-f"></i>
                          <i class="fa-brands fa-twitter"></i>
                          <i class="fa-brands fa-instagram"></i>
                          <i class="fa-brands fa-linkedin"></i>
                           
                          </div>   
     
         </div>
        
        <p1 class="end">Design by<span><i class="fa-solid fa-face-grin-wide"></i>Ronit Patel</span></p1>
        
      </footer>



</body>
</html>