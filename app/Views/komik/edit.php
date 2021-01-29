<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-8">
      <h2 class="my-3">Form Ubah Data Komik</h2>

      <form action="/komik/update/<?= $komik['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
        <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">
        <div class="mb-3 row">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul'] ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('judul'); ?>
            </div>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="penulis" class="col-sm-2 col-form-label">penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis'] ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit'] ?>">
          </div>
        </div>

        <div class="mb-3 row">
          <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
          <div class="col-sm-2">
            <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">

          </div>
          <div class="col-sm-8">
            <input class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" type="file" id="sampul" name="sampul" onchange="previewImg()">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('sampul'); ?>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mb-3">Ubah Data</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>