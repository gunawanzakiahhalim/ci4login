<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Pansol</h1>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label"><b>Judul</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="judul" value="<?= $pansol['judul']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="id_menu" class="col-sm-2 col-form-label"><b>Id_menu</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="id_menu" value="<?= $pansol['id_menu']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sla" class="col-sm-2 col-form-label"><b>sla</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="sla" value="<?= $pansol['sla']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="subcategory1" class="col-sm-2 col-form-label"><b>subcategory1</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="subcategory1" value="<?= $pansol['subcategory1']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="subcategory2" class="col-sm-2 col-form-label"><b>subcategory2</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="subcategory2" value="<?= $pansol['subcategory2']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="status" class="col-sm-2 col-form-label"><b>status</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="status" value="<?= $pansol['status']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="created_at" class="col-sm-2 col-form-label"><b>created_at</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="created_at" value="<?= $pansol['created_at']; ?>">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="updated_at" class="col-sm-2 col-form-label"><b>updated_at</b></label>
        <div class="col-sm-10">
          <input type="text" readonly class="form-control-plaintext" id="updated_at" value="<?= $pansol['updated_at']; ?>">
        </div>
      </div>
      <a href="/pansol/edit/<?= $pansol['slug']; ?>" class="btn btn-warning">Edit</a>
      <form action="/pansol/<?= $pansol['id']; ?>" method="post" class="d-inline">
        <?= csrf_field(); ?>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
      </form>
      <br>
      <br>
      <a href="/pansol" class="btn btn-primary">Kembali Ke daftar pansol</a>
    </div>
  </div>
</main>

</div>
</div>
<?= $this->endSection(); ?>