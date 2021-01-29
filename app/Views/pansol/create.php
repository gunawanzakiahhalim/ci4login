<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Tambah Data pansol</h1>
    </div>
    <form action="/pansol/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="id_menu" class="col-sm-2 col-form-label">id_menu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_menu" name="id_menu" value="<?= old('id_menu'); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="subcategory1" class="col-sm-2 col-form-label">subcategory1</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="subcategory1" name="subcategory1" value="<?= old('subcategory1'); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" name="status" value="<?= old('status'); ?>">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </form>
</main>

</div>
</div>
<?= $this->endSection(); ?>