<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">
    <h3>Detail Updated</h3>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title"><?= $info['judul']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $info['subcategory1']; ?></h6>
            <p class="card-text"><?= $info['status']; ?></p>
            <img src="/img/<?= $info['status']; ?>" class="img-fluid" alt="...">
            <div class="my-3">
                <a href="/info/edit/<?= $info['slug']; ?>" class="btn btn-warning">Edit</a>
                <form action="/info/<?= $info['id']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                </form>
            </div>
            <a href="/info">Kembali ke info updated</a>
        </div>
    </div>
</main>

</div>
</div>
<?= $this->endSection(); ?>