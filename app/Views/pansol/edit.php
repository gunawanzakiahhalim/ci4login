<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Ubah Data pansol</h1>
    </div>
    <form action="/pansol/update/<?= $pansol['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $pansol['slug']; ?>">

        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $pansol['judul'] ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('judul'); ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="slug" class="col-sm-2 col-form-label">slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('slug')) ? 'is-invalid' : ''; ?>" id="slug" name="slug" value="<?= (old('slug')) ? old('slug') : $pansol['slug'] ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('slug'); ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="id_menu" class="col-sm-2 col-form-label">id_menu</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('id_menu')) ? 'is-invalid' : ''; ?>" id="id_menu" name="id_menu" value="<?= (old('id_menu')) ? old('id_menu') : $pansol['id_menu'] ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('id_menu'); ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sla" class="col-sm-2 col-form-label">sla</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('sla')) ? 'is-invalid' : ''; ?>" id="sla" name="sla" value="<?= (old('sla')) ? old('sla') : $pansol['sla'] ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('sla'); ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="subcategory1" class="col-sm-2 col-form-label">subcategory1</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('subcategory1')) ? 'is-invalid' : ''; ?>" id="subcategory1" name="subcategory1" value="<?= (old('subcategory1')) ? old('subcategory1') : $pansol['subcategory1'] ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('subcategory1'); ?>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('status')) ? 'is-invalid' : ''; ?>" id="status" name="status" value="<?= (old('status')) ? old('status') : $pansol['status'] ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('status'); ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
</main>

</div>
</div>
<?= $this->endSection(); ?>