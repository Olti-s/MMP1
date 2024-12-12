
<?php include 'include/index.php'; session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
    
       <div class="row justfiy-content-center">
               <div class="col-md-6">
                   <div class="card shadow">
                     <div class="card-body">
                            <h2 class="text-center">Register</h2>


                    <?php 
                    
                    if($_SERVER['REQUESTED_METHOD'] == 'POST'){
                        $name = $_POST ['name'];
                        $email = $_POST ['email'];
                        $password = password_hash($_POST['passoword'], password_bcrypt);
                        $sql = "INSERT INTO users (name,email,passoword) VALUE (?,?,?)";


                        $stmt = $pdo->prepare($sql);
                        $stmt->bind_Param('sss', $name , $email,$password);

                        if($stmt -> execute(){
                            echo"<div>Request  sucsesfull <a href='login.php'>Login here</a></div>";
                        }) else{
                            echo "<div class='alret alret-danger'>error" .$stmt->erorr. "</div>"
                        }
                    }
                    


                    ?>
    
                        <form method="POST">


                        <div class="md-3">
                            <label for="name" class=" form-label">name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        
                        <div class="md-3">
                            <label for="email" class=" form-label">email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>

                        
                        <div class="md-3">
                            <label for="password" class=" form-label">password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary w-100" >Register</button>

                        </form>

                     </div>
                 </div>
              </div>
         </div>
      </div>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>