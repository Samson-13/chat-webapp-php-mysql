<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "heading.php"; ?>
<body class="form-contain">
  <div class="">
      <p>Go touch some grass, cause...</p>
  </div>
  <h3 class=" text-center">Something Went wrong</h3>
  <a class="link text-decoration-none rounded mt-2 p-2 bg-primary text-light" href="home.php" type="button">Go Home</a>
  
  <?php include_once "footer.php"; ?>


</body>
</html>
