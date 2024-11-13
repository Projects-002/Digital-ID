
<?php

include('database/db.php');





if(isset($_POST['submit'])){



   $f_name =  $_POST['f-name'];
   $l_name = $_POST['l-name'];
   $reg_no = $_POST['reg-no'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];



     $sql = "INSERT INTO users (First_Name,	Last_Name,Reg_No,	Email	,Pass)
           VALUES('$f_name', '$l_name', '$reg_no', '$email' , '$pass')";
    
    $result = mysqli_query($conn, $sql);

  
      echo'<script>Registered Successfully!</script>';

  

}else{
      echo'<script>User Already Exist</script>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/CSS/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
<section class="container">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="register.php" method="POST">

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="f-name" required/>
                  <label class="form-label" for="form3Example1cg">First Name</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="l-name" required />
                  <label class="form-label" for="form3Example1cg">Last Name</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="reg-no" required/>
                  <label class="form-label" for="form3Example3cg">Registration Number</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" required />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="pass" required />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required/>
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button  type="submit"
                   name="submit" class="btn btn-success w-50">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="index.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</div> 
</body>
</html>