<?php 
include("conn.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <style>
        nav {
            flex: 1;
            text-align: left;
        }
        
        .navbar {
            display: flex;
            align-items: center;
            padding: none;
            padding-left: 50px;
            padding-right: 30ox;
            padding-top: none;
        }
        
        nav ul li {
            display: inline-block;
            margin-right: 70px;
        }
        
        a {
            text-decoration: none;
            font-size: 24px;
            color: black;
            font-family: cursive;
        }
        button{
            width: 100%;
            background: rgba(197, 226, 226, 0.927); 
            border: 1px solid black;
            margin: 35px 0 10px;
            height: 32px;
            font-size: 12px;
            border-radius: 20px;
            padding: 0 10px;
            box-sizing: border-box;
            outline: none;
            color: black;
            cursor: pointer;
            }
            }
    button:active{
    background-color: grey;
    }
        
        .button:active {
            background-color: grey;
        } 
        
        .container {
            border: 2px solid black;
            max-width: 500px;
            margin: auto;
            background-color: 00ffffff;
            color: black;
            font-family: cursive;
            box-shadow: 0 16px 32px 0 rgba(0, 0, 0, 0.10), 0 6px 20px 0 rgba(0, 0, 0, 0.29);
        }
        
        
        
        .bg {
            background-image: url(https://www.youngmoorelaw.com/wp-content/uploads/2018/12/TAX-Background-short.jpg);
            background-size: cover;
        }


        .submit{
          /*  padding: 15px 25px;  */
            font-size: 18px;
            text-align: centre;
            cursor: pointer;
            outline: none;
                color: black;
            background-color: transparent;
            box-shadow: 0 16px 32px 0 rgba(0, 0, 0, 0.10), 0 6px 20px 0 rgba(0, 0, 0, 0.29);
            font-family: cursive;


        }







        
        .a{
            width: 100%;
            height:100vh;
            font-family: cursive;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            }
            .c{
            width: 350px;
            height: 550px;
            
            perspective: 1000px;
            }
            .ic{
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 1s;
            }
            
            
            .c h2{
            font-weight: normal;
            font-size: 30px;
            text-align: centre;
            margin-bottom: 20px;
            }
            .i{
            width: 100%;
            background: rgba(197, 226, 226, 0.927);
            border: 1px solid black;
            margin: 6px 0;
            height: 32px;
            border-radius: 20px;
            padding: 0 10px;
            box-sizing: border-box;
            outline: none;
            text-align: centre;
            color: black;
            }
            ::placeholder{
            color: black;
            font-size: 12px;
            }
            button{
            width: 100%;
            background: rgba(197, 226, 226, 0.927); 
            border: 1px solid black;
            margin: 35px 0 10px;
            height: 32px;
            font-size: 12px;
            border-radius: 20px;
            padding: 0 10px;
            box-sizing: border-box;
            outline: none;
            color: black;
            cursor: pointer;
            }
            
            span{
            font-size: 13px;
            margin-left: 10px;
            }
            
            .c a{
            color: #fff;
            display: block;
            text-align: center;
            font-size: 13px;
            margin-top: 8px;
            }
            


          
        
/* footer Section Starts */
.footer_container
{
  padding: 50px 100px 0px 100px;
  background-color:#304146;
 
}
.upper_footer
{
  display: flex;
  align-items: center;
  justify-content: ;
  height: 30px;
 
}

.footer_logo_conatainer 
{
  display: flex;
  align-items: center;
  background-color: white;
}

.footer_logo_icon
{
  color: red;
  font-size: 60px;
  margin-right: 20px;
}
.upper_footer p
{
  color:black;
}
.footer_icons
{
  display: flex;
  align-items: center;
  color: #fff;
 
}
.footer_icons h2{
  font-weight: 40;
  font-size: 18px;
}

.footer_media_icons i{
  font-size: 18px;
  margin-left: 10px;
  padding:10px;  
  cursor: pointer;
}
.footer_media_icons i:hover
{
  background-color:   rgba(255,255,255,0.1);
  border-radius: 50%;

}
.footer_lower
{
  padding: 50px 0px;
  display:grid;
  /* align-items: center; */
  grid-template-columns:30% 10% 10% 25%;
  gap: 100px;
  border-bottom: 1px solid rgba(255,255,255,0.3);
  /* margin-bottom: 100px; */

}
.about_us
{
  color: #fff;
}
.about_us h3
{
  margin-bottom: 30px;
}
.about_us p
{
  font-weight: 400;
  line-height: 1.5;
}
.about_us h3 , .Categories h3,.Links h3,.get_in_touch h3
{
  font-weight: 400;
  color: rgb(11, 9, 9);
}
ol{
  list-style: none;
}
li{
  margin-top: 20px;
  color: #fff;
  transition: .3s all ease;
}
li:hover{
  margin-left: 10px;
  text-decoration: underline;
}
i{
  margin-right:10px;
  font-size: 16px;
  font-weight: 200;
}

.get_in_touch .touch
{
  margin-top: 20px;
  display: flex;
  color: #fff;
}

.reserved{
  padding: 30px 0px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.reserved_left
{
  display: flex;
  align-items: center; 
  color: #fff;
}
.reserved p{
  color: #fff;
}

.login_left img{
  height: 500px;
}

/* footer Section Ends */


/* for register and animation */
.table{
    padding-left: 20px;
    margin: 0px auto 0px auto; 
}


    </style>
</head>


<body class="bg">

    <div class="topbar">
        <div align="right">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> teamsitu@gmail.com</a>
                        <a target="_blank" href="https://www.instagram.com/">
                            <img src="instagram.png"  height="30" width="30"></a>
                        <a target="_blank" href="https://www.facebook.com/">
                            <img src="fb.png"  height="30" width="30"></a>
                        <a target="_blank" href="https://www.twitter.com/">
                            <img src= "twitter.png"   height="30" width="30"></a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!-- .row -->

        </div>
        <!-- .container -->

    </div>
    <!-- .topbar -->
    </div>



    <img src="income1.png" class="img" height="100" width="350">

<div>
    <nav >
                  
     <ul>
       <li><button class="button" ><a href="index.html">Home</a></button></li>
       <li><button class="button"><a href="intro.html">Introduction</a></button></li>
       <li><button class="button"><a href="terms.html">Tax terms</a> </button></li>
       <li><button class=" button"><a href="taxrates.html">Tax rates</a></button></li>
       <li><button class="button"><a href="deduction.html">Tax deduction</a></button></li>
       <li><button class="button"><a href="register.php"> Login/Register </a></button></li>
         
     </ul>
    </nav> 
</div>



<div>   
   <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_f7hms8wl.json"  background="transparent"  speed="1"  style="width: 1500px; height: 600px;"  loop  autoplay></lottie-player>   -->

<table class="table">
    <tr>



        <td>

  <div class="a">
  <div class="c">
  <div class="ic" id="c">
  <div class="cb">
    
  <h2>REGISTER</h2>

<form action="insert.php" method="post">
<input type="text" class="i" placeholder="Your Name" name="name" required>
<input type="email" class="i" placeholder="Your Email Id" name="email" required>
<input type="password" class="i" placeholder=" Create Password" name="pwd" required>
<!-- <input type="password" class="i" placeholder="Confirm Password" name="conpwd" required> -->


<input type="submit" name="submit" value="submit" class="button" >
  
<!-- <input type="checkbox"><span>Remember Me</span> -->
</form>

<a href="login.php">
<button type="button" class="btn" style="color: black;"> I have an account</a></button>
<!--<a href=""> Forgot Password</a>  -->

  </div>
  </div>
  </div>
  </div>

  </td>

        <td>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_u8o7BL.json"  background="transparent"  speed="1"  style="width: 900px; height: 450px;"  loop  autoplay></lottie-player>

    </td>

    

  </tr>
  
</table>


</div>
<div>
   <!-- Footer Section Starts -->
   <div class="footer_container">
    <div class="upper_footer">
        <div class="footer_logo_conatainer">
            <i class="fa-solid fa-code footer_logo_icon"></i>
            <a href="StudyLab.php">
                <p class="logo_name"><Span class="skill">TAXTONATION</Span>.com</p>
            </a> 
        </div>
        <div class="footer_icons">
            <h2>
                     Follow us on social media :
            </h2>
            <div class="footer_media_icons">
                 <i class="fab fa-facebook-f"></i>
                 <i class="fab fa-instagram "></i>
                 <i class="fab fa-twitter"></i>
                 <i class="fab fa-linkedin-in"></i>
                 <i class="fab fa-pinterest-p"></i>
            </div>
        </div>
            
    </div>
  
    <div class="footer_lower">
            <div class="about_us">
                <h3>ABOUT US</h3>
                <p>TAX TO NATION IS A ONLINE WEB SITE TO CALCULATE YOUR TAX AND PAY IT TO THE NATION FOR GROTH AND DEVLOPMENT.</p>
            </div>
  
            <div class="Categorie">
                <h3>CATEGORIES</h3>
                 <ol>
                     <a href="Categories.php"><li><i class="fas fa-angle-right"></i>Data Science</li></a>
                     <a href="Categories.php"><li><i class="fas fa-angle-right"></i>Engineering</li></a>
                     <a href="Categories.php"><li><i class="fas fa-angle-right"></i>Finance</li></a>
                     <a href="Categories.php"><li><i class="fas fa-angle-right"></i>Medical</li></a>
                     <a href="Categories.php"><li><i class="fas fa-angle-right"></i>Art & Design</li></a>
                </ol>
            </div>
  
            <div class="Links">
                <h3>QUICK LINKS</h3>
                 <ol>
                     <a href="StudyLab.php"><li><i class="fas fa-angle-right"></i>Home</li></a>
                     <a href="Categories.php"><li><i class="fas fa-angle-right"></i>Categories</li></a>
                     <a href="courses.php"><li><i class="fas fa-angle-right"></i>Courses</li></a>
                     <a href="contactUs.php"><li><i class="fas fa-angle-right"></i>Contact</li></a>
                     <a href="AboutUs.php"><li><i class="fas fa-angle-right"></i>About</li></a>
                  
                </ol>
            </div>
  
            <div class="get_in_touch">
                    <h3>GET IN TOUCH</h3>
  
                    <div class="touch">
                        <i class="fas fa-phone"></i>
                         <p >+(423) 733-8222 </p>
                    </div>
  
                    <div class="touch">
                        <i class="fas fa-envelope"></i>
                        <p >TAXTONATIONb@gmail.com </p>
                    </div>
  
                    <div class="touch">
                        <i class="fas fa-map-marked-alt"></i>
                        <p >AKOLI RODE , Navathe Nagar, Amravati, Maharashtra 444602, India. </p>
                    </div>     
            </div>
            
    </div>
  
    <div class="reserved">
        <div class="reserved_left">
            <i class="fas fa-copyright"></i>
            <p>2022 TAXTONATION.All rights reserved.</p>
        </div>
  
        <div class="reserved_center"> 
            <p>Created By PRIYANKA, GAURI, AYUSH, YASH</p>
        </div>
  
        <div class="reserved_center"> 
            <p>DBMS Project</p>
        </div>
    </div>
  </div>
</div>
  
  
</body>

</html>
