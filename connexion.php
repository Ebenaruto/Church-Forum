<?php 
include_once('header.php');
?>
<!-- Material form login -->
<div class="card">

  <h5 class="card-header white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #fb8c00;" action="#!">

      <!-- Email -->
      <div class="md-form">
        <input type="email" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me  </label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a href="" class="link"> Forgot password ?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn  btn-rounded btn-block my-4 waves-effect z-depth-0 sign_in" type="submit">Sign in</button>

      <!-- Register -->
      <p>Pas membre ?
        <a href="Inscription.php" class="link"> Inscription</a>
      </p>

      <!-- Social login -->
      <p>or Inscrivez vous :</p>
      <a type="button" class="btn-floating btn-fb btn-sm">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm">
        <i class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i class="fab fa-github"></i>
      </a>

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
<?php 
include_once('footer.php');
?>