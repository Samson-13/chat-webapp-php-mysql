<?php include 'heading.php'; ?>
<body class="form-contain">
  <div class="wrapper shadow-lg p-3 mt-4 mb-5 bg-white rounded d-inline-flex justify-content-center align-item-center">
    <section class="form login">
      <h5 class="text-center mt-4 mb-3 contact-title">Continue to Chat</h5>
      <div class="form-group">
        <form action="#" class="all-form mt-3" method="POST" enctype="multipart/form-data" >
          <div class="error-text"></div>
          
          <div class="field input form-group">
            
            <input type="email" class="form-control px-2" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input form-group">
            
            <input type="password" class="form-control px-2" name="password" placeholder="Enter new password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button form-group">
            <input type="submit" class="my-2 btn bg-primary text-light" name="submit" value="Continue to Chat">
          </div>
          <div class="link mt-1">Don't have an account? <a href="home.php">Sign in now</a></div>

        </form>
      </div>
    
    </section>
  </div>
  <div class="mb-5"></div>
  <div class="mb-5"></div>


  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
