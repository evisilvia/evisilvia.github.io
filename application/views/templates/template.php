<?= $this->load->view('templates/header') ?>
<div class="be-wrapper be-nosidebar-left">
  <?= $this->load->view('templates/navbar') ?>
  <div class="be-content">
    <?= $this->load->view('templates/head') ?>
    <!-- Bagian content -->
    <?= $this->renderSection('content') ?>
  </div>
</div>
</div>
<?= $this->load->view('templates/footer') ?>