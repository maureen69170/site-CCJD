<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <h1 class="simple-text logo-normal">Administration</h1>
        <a href="/admin/login/disconnect.php">
            <button type="button" class="btn btn-info">DECONNEXION</button>
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="<?= basename($_SERVER['PHP_SELF']) === 'login.php' ?  'active' : '' ?>">
                <a href="./index.php">
                    <i class="fas fa-users-cog"></i>
                    <p>Tableau de bord</p>
                </a>
            </li>
            <li class="<?= basename($_SERVER['PHP_SELF']) === 'ccjs.php' ?  'active' : '' ?>">
                <a href="./ccjs.php">
                    <i class="fas fa-user-cog"></i>
                    <p>CCJ</p>
                </a>
            </li>
            <li class="<?= basename($_SERVER['PHP_SELF']) === 'user.php' ?  'active' : '' ?>">
                <a href="./../users.php">
                    <i class="fas fa-unlock-alt"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="<?= basename($_SERVER['PHP_SELF']) === 'projets-ccjd.php' ?  'active' : '' ?>">
                <a href="./projets-ccjd.php">
                    <i class="far fa-folder-open"></i>
                    <p>Projets CCJ</p>
                </a>
            </li>
            <li class="<?= basename($_SERVER['PHP_SELF']) === 'projets-ccjd.php' ?  'active' : '' ?>">
                <a href="./projets-ccjd.php">
                    <i class="fas fa-folder-open"></i>
                    <p>Projets CCJD</p>
                </a>
            </li>
        </ul>
    </div>
</div>