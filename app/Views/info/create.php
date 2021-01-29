<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">
    <h2 class="my-3 text-center">Form Create Info Pansol</h2>
    <form action="/info/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="id_menu" class="col-sm-2 col-form-label">id_menu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_menu" name="id_menu" value="<?= old('id_menu'); ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="subcategory1" class="col-sm-2 col-form-label">subcategory1</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="subcategory1" name="subcategory1" value="<?= old('subcategory1'); ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">status</label>
            <div class="col-sm-2">
                <img src="/img/default.jpg" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-8">
                <input class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" type="file" id="status" name="status" onchange="previewImg()">
                <div id="validationServer03Feedback" class="invalid-feedback">
                    <?= $validation->getError('status'); ?>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-3 float-right">Tambah Data</button>
    </form>
</main>

</div>
</div>
<?= $this->endSection(); ?>