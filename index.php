<?php    
 session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page 1</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
   <div class='wrapper'>
    <div id='sidebar'> 
        <a href="javascript:void(0)" onclick='closeSidebar()'>
         <img id='sidebar-ico' src="images/sidebar.png" alt="">
        </a>    
        <a class='sidebar-links' href="#">Home</a>    
        <a class='sidebar-links' href="#">About</a>    
        <a class='sidebar-links' href="#">Products</a>    
        <a class='sidebar-links' href="#">Testimonials</a>    
        <a class='sidebar-links' href="#">Locations</a>    
    </div>

    <div class='navbar'>
      <p>IT solutions</p>  
      <div>
        <button>J O I N</button>
        <a href="javascript:void(0)" onclick='openSidebar()'><img id='main-ico' src="images/sidebar.png" alt=""></a>
      </div>
                
    </div>
    <div class='header section'>
        <h3 class='text-center'>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
        <button>Try for <span class='font-weight-bold'>free</span></button>
    </div>  
    <div class='solutions section'>
      <h2 id='solutions-header' class='text-center'>Welcome to IT Solutions</h2>  
        <div class='square-div'>
      
            <div class='square'>
                <img id='data-icon' class='square-icons' src="images/data.png" alt="">
                <h4 class='text-center'>Data icon</h4>
                <p class='text-center'>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          
            <div class='square'>
               <img class='square-icons' src="images/clean-phone.png" alt="">
               <h4 class='text-center'>Phone icon</h4>
               <p class='text-center'>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          
            <div class='square'>
                <img class='square-icons' src="images/arrow.png" alt="">
               <h4 class='text-center'>Arrow icon</h4>
               <p class='text-center'>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
        </div>
    </div>
    <div class='services section'>
        <div class='grid'>
            <div class='grid-square' id='square1'>
              <p class='text-center'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class='grid-square' id='square2'>
              <p class='text-center'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class='grid-square' id='square3'>
              <p class='text-center'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class='grid-square' id='square4'>
              <p class='text-center'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class='services-text'>
            <h2 class='text-center'>Our Services</h2>
            <p>This is a list of our services provided</p>
            <button>Get Started</button>
        </div>
    </div>
    <div class='benefits section'>
        <div class='d-flex flex-column align-items-center text-center benefits-header'>
          <img id='benefits-img' src="images/devices.png" alt="laptop and phone devices">
          <h3>Check out why we are the best in business</h3>            
        </div>

        <div class='benefits-text'>
         <div class='d-flex flex-column align-items-center text-center'>          
           <img class='benefits-icon' src="images/lock.png" alt="">
           <h2>Secure</h2>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Est, neque. Quam rem, vero incidunt corrupti voluptate quisquam ipsa, explicabo nam id, dicta veritatis architecto autem accusantium nobis ratione soluta at.
           </p>
         </div>
         <div class='d-flex flex-column align-items-center text-center'>
           <img class='benefits-icon' src="images/broom.png" alt="">
          <h3>Clean</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
           Est, neque. Quam rem, vero incidunt corrupti voluptate quisquam ipsa, explicabo nam id, dicta veritatis architecto autem accusantium nobis ratione soluta at.
          </p> 
         </div>
         <div class='d-flex flex-column align-items-center text-center'>
            <img class='benefits-icon' src="images/meter.png" alt="">
            <h3>Efficient</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Est, neque. Quam rem, vero incidunt corrupti voluptate quisquam ipsa, explicabo nam id, dicta veritatis architecto autem accusantium nobis ratione soluta at.
            </p> 
         </div>                         
        </div>   
    </div>
    <div class='info section'>
      
        <div class='more-info d-flex align-items-center text-center'>
           <img id='pc' src="images/pc.png" alt="">
           <div>
            <h3>For more info</h3>
            <p>Check out our testimonals, reviews, and other products</p>
            <button>More info</button>
           </div> 
            
        </div>
        
        <div class='email-box text-center'>
          <div>
            <p>Join our newsletter for future announcements</p>
            <input type="text" placeholder='Email address'>
          </div>
            

        </div>
    </div>
    <div class='contact-info section'>
        <div class='social-logo'>
            <h3>Check out our social media</h3>
            <div>
             <img class='social-links' src='images/fb.png'><img>
             <img class='social-links' src='images/insta.png'><img>
             <img class='social-links' src='images/twitter.png'><img>                
            </div>

        </div>
        <h3>Contact us at:</h3>
        <div class='contact'><img class='social-links' src="images/phone-contact.png" alt=""><p>978-***-****</p></div>
        <div class='contact'><img class='social-links' src="images/email-contact.png" alt=""><p>itsolutions@gmail.com</p></div>
        
    </div>
    <div class='footer'>
        <p>Privacy</p>
        <p>Terms of use</p>
        <p>@Copyright 2023</p>
    </div>
   </div> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>

