<nav>
  <img src="<?php echo url('/static/images/workanda-logo.png');?>" class="nav-logo" alt="">
  <button class="nav-profile dropdown-button">
        <div class="profile-user" >
          <span class="username">
            <?php echo user()->getNombre(). " ".user()->getApellido(); ?>
          </span>
          <span class="role">
          <?php echo user()->getEmail(); ?>
          </span>
        </div>
      </button>
</nav>