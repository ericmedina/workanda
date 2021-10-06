<nav>
  <img src="<?php echo url('/static/images/workanda-logo.png'); ?>" class="nav-logo">
  <div class="dropdown right">
    <button class="nav-profile dropdown-button" onclick="toggleDropdown(this)" data-dropdown="nav-dropdown">
      <div class="profile-user">
        <span class="username">
          <?php echo user()->getNombre() . " " . user()->getApellido(); ?>
        </span>
        <span class="role">
          <?php echo user()->getEmail(); ?>
        </span>
      </div>
    </button>
    <div class="dropdown-content" id="nav-dropdown">
      <p class="list-title">Mi perfil</p>
      <ul class="list">
        <li class="list-item">
          <a href="<?php echo url('/cambiar-password') ?>">Cambiar contraseña</a>
        <li class="list-item">
          <form action="<?php echo url('/logout') ?>" method="post">
            <button type="submit">Cerrar sesión</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>