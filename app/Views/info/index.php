<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Updated <span class="badge bg-success">v51</span></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/info/create" type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="plus-circle"></span>
                Post Info
            </a>
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
                    <th>Judul Pansol</th>
                    <th>Category</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($info as $row) : ?>
                    <?php if ($row['subcategory1'] == 'Layanan BBM') : ?>
                        <?php $menu = 'pansol_A'; ?>
                    <?php elseif ($row['subcategory1'] == 'Layanan Domgas') : ?>
                        <?php $menu = 'pansol_B'; ?>
                    <?php elseif ($row['subcategory1'] == 'MyPertamina') : ?>
                        <?php $menu = 'pansol_C'; ?>
                    <?php elseif ($row['subcategory1'] == 'SPBU') : ?>
                        <?php $menu = 'pansol_D'; ?>
                    <?php elseif ($row['subcategory1'] == 'Lubricant') : ?>
                        <?php $menu = 'pansol_E'; ?>
                    <?php elseif ($row['subcategory1'] == 'Pertagas') : ?>
                        <?php $menu = 'pansol_F'; ?>
                    <?php elseif ($row['subcategory1'] == 'PDS') : ?>
                        <?php $menu = 'pansol_G'; ?>
                    <?php elseif ($row['subcategory1'] == 'Lain-Lain') : ?>
                        <?php $menu = 'pansol_Z'; ?>
                    <?php endif; ?>
                    <tr>
                        <td><a href="/<?= $menu . "/" . $row['id_menu']; ?>"><?= $row['judul']; ?></a></td>
                        <td><a href="/<?= $menu . "/" . $row['id_menu']; ?>"><?= $row['subcategory1']; ?></a></td>
                        <?php date_default_timezone_set("Asia/Jakarta"); ?>
                        <?php $ymd = $row['updated_at']; ?>
                        <?php $timestamp = strtotime($ymd); ?>
                        <?php $dmy = date("h:i:s ~ d M Y", $timestamp); ?>
                        <td><a href="/<?= $menu . "/" . $row['id_menu']; ?>"><?= $dmy; ?></td>
                        <td>
                            <a href="/<?= $menu . "/" . $row['id_menu']; ?>"><span class="badge bg-primary">Open</span></a>
                            <a href="/info/<?= $row['slug'] ?>"><span class="badge bg-success">Detail</span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php include_once('file.php'); ?>

</main>

</div>
</div>
<?= $this->endSection(); ?>