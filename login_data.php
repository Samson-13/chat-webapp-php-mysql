<!-- Header -->
<?php include_once "heading.php"; ?>
<!-- Header -->

<!-- Navbar -->
<?php include 'navbar.php';?>
<!-- Navbar -->

<!-- Form -->
<div class="login-page form-contain">
  <section class="form login">
    <div class="error-text"></div>
    <h5 class="text-center mt-4 contact-title">Login</h5>
    <div class="form-group">

      <form class="all-form login form" action="#" enctype="multipart/form-data" method="POST" ">

        <div class="form-group field input">
            <input
            required
            name="email"
            type="email"
            class="form-control px-2"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            placeholder="Enter your email"
            />
        </div>
        <div class="form-group green-border-focus field input">
            <input
            required
            name="password"
            type="password"
            class="form-control px-2"
            id="exampleFormControlPasswordarea5"
            rows="3"
            placeholder="Enter your password"
            
            ><i class="fas fa-eye"></i></input>
            
        </div>
        <br />
        <div class="field button">
          <input type="submit" class="btn btn-primary submit" name="submit" value="Login">
        </div>
        <div class="link mt-3">Not yet signed up? <a href="signin.php">Signup now</a></div>

      </form>

    </div>
  </section>
</div>

<?php include 'footer.php';?>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>


