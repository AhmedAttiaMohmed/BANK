<?php
  require_once("header.php")

?>

<main class="form-signin w-100 m-auto">
  <form active="handle_register.php" method="post">
    <img class="mb-4" src="assets/brand/Anonymous_emblem.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="text" name="address" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Address</label>
    </div>
    <div class="form-floating">
      <input type="text" name="phone" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Phone</label>
    </div>
    <div class="form-floating">
      <input type="text" name="vic" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">VIC number</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pw" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pc" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password Confirmation</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
  </form>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
