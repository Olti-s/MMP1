<?php 

include "include/index.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

 <nav class="navbar navbar-collapse " id= "navbarNav">
  <div class="container">
    <a class="navbar-brand" href="index.php">Movie Booking</a>
    <button class="navbar-toggler " type="button" data-bs-toggle ="collapse" data-bs-traget="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"  >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>

            </li>
            <?php 
             if(!isset($_SESSION['user_id'])):
            ?>
            <li class="nav-item">
                <a href="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_SESSION['role'] == 'admin' ? 'admin/dashboard.php' : 'user/dashboard.php' ?>">Dashboard</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">logout</a>
                </li>

                <?php endif; ?>
        </ul>
    </div>
  </div>


 </nav>

 <div class="container mt-5">
    <h1 class="text-center">Welcome to movie Booking System</h1>
    <p>This is Movie Booking System</p>
 </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>