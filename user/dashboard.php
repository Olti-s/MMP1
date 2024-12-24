<?php 


include '../include/header.php' ;
include '../include/db.php' ;


//Ensure that the user is loged in 

if(!isset($_SESSION['user_id']) || $_SESSION['role'] !='user'){

  header('Location: ../login.php');
  exit;

}


//Fetch user-specifics from bookings

 $user_id = $_SESSION['user_id'];
 $sql = "SELECT b.id, m.title, b.show_time, b.status 
    FROM bookings b 
    INNER JOIN movies m ON b.movie_id = m.id
    WHERE b.user_id = $user_id ";

    $result = $conn->query($sql);
    



?>
 
<div class="container mt-5">
<h1 class="text-center">User Dashboard</h1>

<h2 class="table tables-board mt-3"></h2>

    <table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Movie</th>
            <th>Data</th>
            <th>Time</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
      <?php  
    if($result ->num_row > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr>
             <td>{$row['id'] }</td>
             <td>{$row['title'] }</td>
             <td>{$row['show_date'] }</td>
             <td>{$row['show_time'] }</td>
             <td>{$row['status'] }</td>
            
            </tr>";
        }
    } else {
        echo "<tr><td colspan='5' class='text-center'>  No bookings found </tr></td>"

    }





      ?>  
    </tbody>


    </table>


  



</div>
<?php 
 include '../include/footer.php';
?>