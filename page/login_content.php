   
<main class="form-signin text-center m-auto">
  <form method="post" action="<?=$action->helper->url('action/login')?>">
    <img class="mb-4" src="<?=$action->helper->loadimage('logo.png')?>" alt="" width="82" height="87">
    <link href="<?=$action->helper->loadcss('signin.css')?>" rel="stylesheet" type="text/css">
    <h1 class="h3 mb-3 fw-normal" style="color: #ffffff;">Login Now</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email_id" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <a href="<?=$action->helper->url('signup')?>" class="d-block mt-3 text-decoration-none">create new account</a>
    <p class="mt-5 mb-3 text-muted">&copy; Team Arachnids 2022</p>
  </form>
</main>


    
