<body class="form-contain">
  <div class="wrapper shadow-lg p-3 mt-4 mb-5 bg-white rounded d-inline-flex justify-content-center align-item-center">
    <section class="form signup">
      <h5 class="text-center mt-4 mb-3 contact-title">Continue to Chat</h5>
      <div class="form-group">
        <form action="#" class="all-form mt-3" method="POST" enctype="multipart/form-data" >
          <div class="error-text"></div>
          
            <div class="field input">
              
              <input type="text" class="form-control px-2" name="fname" placeholder="First name" required>
            </div>
            <div class="field input form-group">
              <input type="text" class="form-control px-2" name="lname" placeholder="Last name" required>
            </div>
          
          <div class="field input form-group">
            
            <input type="email" class="form-control px-2" name="email" placeholder="Enter your email" required>
          </div>
          <div class="field input form-group">
            
            <input type="password" class="form-control px-2" name="password" placeholder="Enter new password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image form-group">
          
            <input type="file" class="form-control px-2" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
          </div>
          <div class="field button form-group">
            <input type="submit" class="my-2 btn bg-primary " name="submit" value="Continue to Chat">
          </div>
          <div class="link mt-1">Already signed up? <a href="login.php">Login now</a></div>

        </form>
      </div>
    
    </section>
  </div>
  <div class="mb-5"></div>
  <div class="mb-5"></div>


  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
