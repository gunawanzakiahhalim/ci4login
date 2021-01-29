<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Pansol</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <?php if (user()->username == 'gunawanzakiahhalim') : ?>
                <a href="/pansol/create" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="plus-circle"></span>
                    Tambah Data Pansol
                </a>
            <?php endif; ?>
        </div>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Category</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($pansol)) : ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger mt-3 text-center" role="alert">Title pansol not found!</div>
                        </td>
                    </tr>
                <?php endif; ?>
                <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                <?php foreach ($pansol as $k) : ?>
                    <?php if ($k['subcategory1'] == 'Layanan BBM') : ?>
                        <?php $menu = 'pansol_A'; ?>
                    <?php elseif ($k['subcategory1'] == 'Layanan Domgas') : ?>
                        <?php $menu = 'pansol_B'; ?>
                    <?php elseif ($k['subcategory1'] == 'MyPertamina') : ?>
                        <?php $menu = 'pansol_C'; ?>
                    <?php elseif ($k['subcategory1'] == 'SPBU') : ?>
                        <?php $menu = 'pansol_D'; ?>
                    <?php elseif ($k['subcategory1'] == 'Lubricant') : ?>
                        <?php $menu = 'pansol_E'; ?>
                    <?php elseif ($k['subcategory1'] == 'Pertagas') : ?>
                        <?php $menu = 'pansol_F'; ?>
                    <?php elseif ($k['subcategory1'] == 'PDS') : ?>
                        <?php $menu = 'pansol_G'; ?>
                    <?php elseif ($k['subcategory1'] == 'Lain-Lain') : ?>
                        <?php $menu = 'pansol_Z'; ?>
                    <?php endif; ?>
                    <tr>
                        <td><a href="/<?= $menu . "/" . $k['id_menu'] ?>"><?= $i++; ?></a></td>
                        <td><a href="/<?= $menu . "/" . $k['id_menu']; ?>"><?= $k['judul']; ?></a></td>
                        <td><a href="/<?= $menu . "/" . $k['id_menu']; ?>"><?= $k['subcategory1']; ?></a></td>
                        <td>
                            <a href="/<?= $menu . "/" . $k['id_menu'] ?>" class="badge bg-primary text-light">Open</a>
                            <?php if (user()->username == 'gunawanzakiahhalim') : ?>
                                <a href="/pansol/<?= $k['slug']; ?>" class="badge bg-success text-light">Detail</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('pansol', 'pansol_pagination'); ?>
    </div>
</main>

</div>
</div>
<?= $this->endSection(); ?>