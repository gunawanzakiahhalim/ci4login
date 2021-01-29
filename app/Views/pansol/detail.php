<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Pansol</h1>
    </div>
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $pansol['judul']; ?></h5>
                    <p class="card-text"><b>id_menu : </b><?= $pansol['id_menu']; ?></p>
                    <p class="card-text"><small class="text-muted"><b>subcategory1 : </b><?= $pansol['subcategory1']; ?></small></p>
                    <a href="/pansol/edit/<?= $pansol['slug']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/pansol/<?= $pansol['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                    </form>
                    <br>
                    <br>
                    <a href="/pansol">Kembali Ke daftar pansol</a>
                </div>
            </div>
        </div>
    </div>
</main>

</div>
</div>
<?= $this->endSection(); ?>