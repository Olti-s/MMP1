<?php



include '../includes/db.php';
include '///includes/header.php';

session_start();

// Enssure that the user is loged in

if(!isset($_SESSION['user_id']) || $_SESSION['role'] !='user'){

    header('Location: ../login.php');
    exit;
  
  }

 // ge tthe movie id from the query string


 if(!isset($_GET['movie_id'])){
    echo "
    
    <div class='cotainer' ><p class='alert alert-danger' > Invalid movie seleciton</p></div>";
    include '../includes.footer.php';
    exit;
    

 }

 $movie = $result->fetch_assoc();

 if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $user_id = $_SESSION['user_id'];
    $show_date = $_POST ['show_date'];
    $show_time = $_POST ['show_time'];
 
  
 
  $sql = "INSERT INTO bookings (user_id, movie_id, show_date, show_time, status)
    VALUES($user_id, $movie_id, '$show_date', '$show_time', 'pending' )";
    

  if($conn ->query($sql) == TRUE ){
    echo "<div class='container'><p class='alret alret-success'>Booking sucessful!"
  }else{
    echo "<div><p class = container> <p class = 'alret alret-danger'>Error;" . $conn->error . "</p></div>";
  }
}





?>

<div class=""container>
    <h1 class="text-center">Book Movie</h1>
    <div class="card">
        <h3><?php echo $movie['title'] ?></h3>
        <p><?php echo $movie ['descrption'] ?></p>
    </div>
</div>