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

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center">Informasi</h5>
                    <div class="list-group">
                        <a href="https://arjunadigital.000webhostapp.com/pdf/2021.02.03%20FAQ%20PERTASHOP%20135%20V5.pdf" target="_blank" class="list-group-item list-group-item-action list-group-item-info">2021.02.03 FAQ PERTASHOP 135 V5</a>
                        <a href="https://ops11.000webhostapp.com/img/Promo%20Sehat%20Hari%20Gizi%20Nasional.jpeg" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Promo Sehat Hari Gizi Nasional</a>
                        <a href="https://arjunadigital.000webhostapp.com/pdf/Voucher%20Patraland%20Urbano_PDS%20135%20Bright%20Gas.pdf" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Bright Gas x Patra Jasa - Beli Apartemen Gratis Bright Gas Selama 1 Tahun</a>
                        <a href="http://rensi135.000webhostapp.com/docs/pdf/business/registrasi.pdf" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Registrasi For Business</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center">Pertamina Call Center Application</h5>
                    <h6 class="card-subtitle mb-2 text-muted mt-3">Ecommerce & Content</h6>
                    <div class="list-group">
                        <a href="https://chanelsosmed.000webhostapp.com/xlsx/Arjuna%20-%20Updates%2015%20Januari%202021.xlsx" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Arjuna - Updates 15 Januari 2021</a>
                        <a href="https://pds135.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">PDS135</a>
                        <a href="https://pds135.com/backoffice" target="_blank" class="list-group-item list-group-item-action list-group-item-info">PDS135 Backoffice</a>
                        <a href="http://10.194.176.140/diana/login" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Diana</a>
                        <a href="https://pertamina.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Pertamina</a>
                        <a href="https://www.pertamina.com/id/alamat-pusat-informasi-publik-pertamina" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Informasi Public</a>
                        <a href="https://pertaminaretail.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Pertamina Retail</a>
                        <a href="https://kemitraan.pertamina.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Kemitraan Pertamina</a>
                        <a href="http://rspp.co.id/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">RSPP</a>
                        <a href="https://i-p2p.pertamina.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Kerjasama Vendor</a>
                        <a href="https://mypertamina.id/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">MyPertamina</a>
                        <a href="https://dashboard.my-pertamina.id/login" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Dashboard MyPertamina</a>
                        <a href="https://apps.pertamina.com/mypertaminab2b/Default.aspx" target="_blank" class="list-group-item list-group-item-action list-group-item-info">MyPertamina For Business</a>
                        <a href="https://bbm.mypertamina.id/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">BBM MyPertamina</a>
                        <a href="https://webadm2.berbagiberkah.mypertamina.id/auth/login" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Web Admin BBM</a>
                        <a href="https://www.pertaminalubricants.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Pertamina Lubricants</a>
                        <a href="https://pertaminalubricants.typeform.com/to/sA964s" target="_blank" class="list-group-item list-group-item-action list-group-item-info">PLHS</a>
                        <a href="https://www.google.com/maps/d/u/0/viewer?mid=1XDhARtklfH8XrElIEtGUsYrQkWNFqDkz&ll=-2.5354146947953926%2C118.00752249999994&z=4" target="_blank" class="list-group-item list-group-item-action list-group-item-info">PLHS MAPS</a>
                        <a href="https://ownchannel.pertaminalubricants.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">OLIMART dan Enduro</a>
                        <a href="https://gabungoutlet.pertaminalubricants.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Aplikasi Power</a>
                        <a href="https://www.musicoolpromo.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Musicool</a>
                        <a href="https://www.musicoolpromo.com/order-now" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Order Musicool</a>
                        <a href="https://www.musicoolpromo.com/jaringan-kami" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Jaringan Musicool</a>
                        <a href="https://www.sobatbumi.id/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Sobat Bumi</a>
                        <a href="https://brightgas.co.id/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Bright Gas</a>
                        <a href="https://bbmsatuharga.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">BBM Satu Harga</a>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted mt-3">Tools</h6>
                    <div class="list-group">
                        <a href="https://on4pertamina.infomedia.co.id/oct_pertamina" target="_blank" class="list-group-item list-group-item-action list-group-item-info">OMNI</a>
                        <a href="https://www.pertaminafuels.com/harga-dan-lokasi" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Harga BBM</a>
                        <a href="https://apps.pertamina.com/simelon/login" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Simelon</a>
                        <a href="https://quiz.infomedia.co.id/index.php/login" target="_blank" class="list-group-item list-group-item-action list-group-item-info">PNP</a>
                        <a href="https://rekapnc.000webhostapp.com/nc/user/nctiket/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">NC Tiket</a>
                        <a href="https://apps1351.000webhostapp.com/login" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Pelayanan PDS</a>
                        <a href="https://ops4.000webhostapp.com/login" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Trade In dan Refill</a>
                        <a href="https://pds135.000webhostapp.com/bbm" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Promo PDS</a>
                        <a href="https://ops6.000webhostapp.com/coco" target="_blank" class="list-group-item list-group-item-action list-group-item-info">SPBU COCO</a>
                        <a href="https://pansolwa.000webhostapp.com/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Pansol</a>
                        <a href="https://listpangkalan.000webhostapp.com/login" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Pangkalan</a>
                        <a href="https://ops4.000webhostapp.com/feedback/tambaheca" target="_blank" class="list-group-item list-group-item-action list-group-item-info">ECA</a>
                        <a href="https://ops4.000webhostapp.com/feedback/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Feedback ECA</a>
                        <a href="https://support135.000webhostapp.com/redeem/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Redeem</a>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted mt-3">Digital Payment</h6>
                    <div class="list-group">
                        <a href="https://www.linkaja.id/" target="_blank" class="list-group-item list-group-item-action list-group-item-info">LinkAja</a>
                        <a href="https://merchant.linkaja.id/payment/orglogin.action" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Merchant LinkAja</a>
                        <a href="http://bit.ly/LinkAjaUserGuidanceWebMerchant" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Guidance LinkAja</a>
                        <a href="https://apps.pertamina.com/mypertaminab2b/Payment-Step.aspx" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Payment MyPertamina Business</a>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted mt-3">Contact Us</h6>
                    <div class="list-group">
                        <a href="https://apps.pertamina.com/mypertaminab2b/ContactUs.aspx" target="_blank" class="list-group-item list-group-item-action list-group-item-info">Contact MyPertamina Business</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

</div>
</div>
<?= $this->endSection(); ?>