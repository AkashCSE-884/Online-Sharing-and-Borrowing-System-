<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        html,
body {
    background-image: linear-gradient( 135deg, #ABDCFF 10%, #0396FF 100%);
    font-family: 'Poppins', sans-serif;
    height: 100vh
}
.btn-grad {background-image: linear-gradient(to right, #AA076B 0%, #61045F  51%, #AA076B  100%)}
         .btn-grad {
           
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }

    </style>
    
</head>
<body>
                <form action="signup-user.php" method="POST" autocomplete="" enctype="multipart/form-data">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                        <div class="col-lg-11 mt-5  ml-5 ">

<form  id="validate_form" class="php-email-form" method="POST" enctype="multipart/form-data">
  <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input class="form-control" type="text" name="firstname" placeholder="First Name" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="form-control" type="text" name="lastname" placeholder="Last Name" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                    </div>
                     <div class="col-md-6 form-group">
                       <input type="text" class="form-control" name="city" placeholder="City" required="">
                   </div>
                    <div class="col-md-6 form-group ">
                       <textarea type="text" class="form-control" name="address" placeholder="Address" required=""></textarea>
                   </div>
                  
                   <div class="col-md-6 form-group">
                           <select type="select"  name="userType" class="form-control" required="">
                               <option value="">Choose your account type</option>
                               <option value=0 >Borrowable</option>
                               <option value=1 >Shareable</option>
                           </select> 

            
                   </div>
                   


                   <div class="col-md-6 form-group">
                   <p align="left" style="color: black">
                       Enter your account details below:
                   </p>
                           <input type="file" class="form-control"  accept="image/*" name="image" placeholder="profile picture" required="">
                   </div>

                   <div class="col-md-6 form-group">
                   <p align="left" style="color: black">
                   Enter your Nidbirth of date
                   </p>
							
                            <input type="date" class="form-control" name="bdate" id="mobile" onBlur="userAvailability()"  placeholder="Enter Nid card birth of date" required="">
                                        
                           <span id="user-availability-status1" style="font-size:12px;"></span>
                       </div>
                   <div class="col-md-6 form-group">
							
                            <input type="number" class="form-control" name="nid" id="mobile" onBlur="userAvailability()"  placeholder="Enter your NID number" required="">
                                        
                           <span id="user-availability-status1" style="font-size:12px;"></span>
                       </div>
                      
                       <div class="col-md-6 form-group">
					
                    <input type="number"  class="form-control" name="mobile" id="mobile" onBlur="userAvailability()"  placeholder="Mobile Number" required="">
                    <label class="m-t-20" style="color: red"></label>
                   </div>
                    <div class="col-md-6 form-group" style="margin-left: 270px;">
                        <input class="form-control btn-grad" type="submit" name="signup" value="Signup">
                    </div>
          
                    <div class="col-md-6 link login-link text-center"  style="margin-left: 260px;font-size:14px">Already a member? <a href="login-user.php" style="color: #f9f9f9;
    text-decoration: none;
    background-color: transparent;">Login here</a></div>
                   
                    </div>
        </div>
    </div>
                </form>

 
    
</body>
</html>