<nav class="navbar navbar-expand-lg bg-light shadow-sm">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="<?=$action->helper->loadimage('logo.png')?>" alt="Logo" width=" " height="24" class="d-inline-block align-text-top">
      Resume layer
    </a>

      <ul class="navbar-nav"> 
        <li class="nav-item">
          <a class="nav-link <?=@$myresume?> " aria-current="page" href="#"><i class="bi bi-file-earmark-pdf"></i> My resumes</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="<?=@$profile?>"><i class="bi bi-person-circle"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=$action->helper->url('action/logout')?>"><i class="bi bi-box-arrow-left"></i> Logout</a>
        </li>
      </ul>

  </div>
</nav>