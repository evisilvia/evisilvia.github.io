<style>
  .be-right-navbar {
    background-color: #9AC600;
  }

  @media (max-width: 767px) {
    .be-top-header .be-right-navbar {
      background-color: #9AC600;
    }

    .panel {
      margin-top: 20px;
    }
  }
</style>
<nav class="navbar navbar-default navbar-fixed-top be-top-header">
  <div class="container-fluid">
    <div class="navbar-header"><a href="index.html" class="navbar-brand"></a></div>
    <div class="be-right-navbar">
      <ul class="nav navbar-nav navbar-right be-user-nav">
        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="<?= base_url('assets/img/avatar.png'); ?>" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
          <ul role="menu" class="dropdown-menu">
            <li>
              <div class="user-info">
                <div class="user-name">Admin</div>
                <div class="user-position online">Available</div>
              </div>
            </li>
            <li><a href="<?= base_url('akun') ?>"><span class="icon mdi mdi-face"></span> Akun</a></li>
            <li><a href="<?= base_url('admin/pengaturan') ?>"><span class="icon mdi mdi-settings"></span> Pengaturan</a></li>
            <li><a href="../login/"><span class="icon mdi mdi-power"></span> Keluar</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <a href="#" data-toggle="collapse" data-target="#be-navbar-collapse" class="be-toggle-top-header-menu collapsed">Menu</a>
    <div id="be-navbar-collapse" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?= base_url('admin/home'); ?>">Home</a></li>
        <li><a href="<?= base_url('admin/santri'); ?>">Peserta</a></li>
        <li><a href="<?= base_url('admin/kelompok'); ?>">Pengumuman</a></li>

      </ul>
    </div>
  </div>
</nav>