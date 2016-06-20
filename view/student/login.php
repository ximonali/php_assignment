      <div class="starter-template">
        <h1>Lambton's Online Certification Program (LOCP)</h1>
        <p class="lead">The perfect solution to approve MAD3134 - 44 successfully.<br></p>
      </div>

      <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <?php if (isset($errorMsg)) {
          echo $errorMsg;
        } ?>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <div id="go2register">
          <label>
            <a href="register.html">or Register</a>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>