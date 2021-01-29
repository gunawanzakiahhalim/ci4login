<?= $this->extend('templatespansol/index'); ?>

<?= $this->section('page-content'); ?>
<main class="col-md-8 ml-sm-auto col-lg-9 px-md-4">
  <div class="pt-3 pb-2 mb-1">
    <h1 class="h2 text-center"><?= $title; ?></h1>
  </div>
  <nav>
    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
      <a class="nav-link active" id="nav-rootcause-tab" data-toggle="tab" href="#nav-rootcause" role="tab" aria-controls="nav-rootcause" aria-selected="true">ROOTCAUSE</a>
      <a class="nav-link" id="nav-todolist-tab" data-toggle="tab" href="#nav-todolist" role="tab" aria-controls="nav-todolist" aria-selected="false">TODOLIST</a>
      <a class="nav-link" id="nav-tiket-tab" data-toggle="tab" href="#nav-tiket" role="tab" aria-controls="nav-tiket" aria-selected="false">TIKET</a>
      <label class="btn btn-light ml-auto " style="pointer-events: none;" disabled>
        <span class="badge rounded-pill bg-success text-white p-2">
          Update : <?= $update; ?>
        </span>
      </label>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-rootcause" role="tabpanel" aria-labelledby="nav-rootcause-tab">
      <div class="card">
        <h5 class="card-header text-center">ROOTCAUSE</h5>
        <div class="card-body">
          <ul>
            <?php for ($i = 0; $i < count($rootcause); $i++) : ?>
              <li><?php echo $rootcause[$i]; ?></li>
            <?php endfor; ?>
          </ul>
        </div>
        <div class="card-footer">
          <?php for ($i = 0; $i < count($cwc); $i++) : ?>
            <small class="text-muted"> <?php echo $cwc[$i]; ?></small>
          <?php endfor; ?>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-todolist" role="tabpanel" aria-labelledby="nav-todolist-tab">
      <div class="card">
        <h5 class="card-header text-center">TODOLIST</h5>
        <div class="card-body">
          <h6>Alur Penanganan Redeem Poin menjadi Merchandise/Voucher:</h6>
          <?php $list = array_keys($todolist); ?>
          <ol>
            <?php for ($i = 0; $i < count($todolist); $i++) : ?>
              <li class="listutama">
                <b><?php echo $list[$i]; ?></b>
                <ol type="a">
                  <?php foreach ($todolist[$list[$i]] as $key) : ?>
                    <?php if ($key != "-") : ?>
                      <li>
                        <?php echo $key ?>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ol>
              </li>
            <?php endfor; ?>
          </ol>
          <p class="indent"><b> 2. Redeem Poin berhasil Namun Belum Diterima</b></p>
          <p class="indent2">Agent melakukan pengecekan pada aplikasi Dashboard MyPertamina:</p>
          <p class="indent3">
            a. Pastikan profile (terutama alamat) customer sudah lengkap<br>
            b. Cek tanggal penukaran:
          </p>
          <p class="indent4">
            <b><u>Merchandise</u></b>
          </p>
          <p class="indent4">&#10003; Jika <b>belum 30 hari</b>, sarankan untuk menunggu proses pengirimannya &
            tetap edukasi pelanggan agar melengkapi profil pada akun MyPertamina.
            Sampaikan <b>standar jawaban</b>: pengiriman bisa mengalami keterlambatan
            dikarenakan kondisi pandemi. (case closed)</p>
          <p class="indent4">&#10003; Jika <b>sudah lebih dari 30 hari</b>, bantu eskalasi <b>tiket</b> (SLA 7 hari kerja) & tetap
            edukasi pelanggan agar melengkapi profil pada akun MyPertamina. (case
            closed)</p>

          <p class="indent4">
            <b><u>Voucher</u></b>
          </p>
          <p class="indent4">&#10003; Jika <b>belum 3 hari</b>, sarankan untuk menunggu & tetap edukasi pelanggan
            agar melengkapi profil pada akun MyPertamina. (case closed)</p>
          <p class="indent4">&#10003; Jika <b>sudah lebih dari 3 hari</b>, bantu eskalasi <b>tiket</b>(SLA 3 hari kerja) & tetap
            edukasi pelanggan agar melengkapi profil pada akun MyPertamina. (case
            closed)</p>

          <p class="indent2">
            <b><u>NOTES:</u></b>
          </p>
          <p class="indent5">
            • Untuk case Promo Ekstra Kuota Telkomsel 10 GB, infokan konsumen untuk melampirkan Screenshot pada "Halaman Transaksi" aplikasi MyTelkomsel
          </p>
          <p class="indent5">
            <span class="bg-warning text-dark">
              • 30 hari terhitung dari tanggal penukaran Poin (kecuali untuk Promo MyPertamina Fair dihitung dari saat event berakhir).
            </span>
          </p>
          <p class="indent5">
            • Untuk kondisi lain diluar Pansol (Hard Complaint), silahkan berkoordinasi dengan TL on duty.
          </p>
          <p><img src="<?= base_url(); ?>/assets/img/mypertamina/<?= $gambar; ?>" class="img-fluid" alt="merchandise"></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-tiket" role="tabpanel" aria-labelledby="nav-tiket-tab">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
          <div class="card">
            <h5 class="card-header text-center">MANDATORY</h5>
            <div class="card-body">
              <ol>
                <?php foreach ($mandatory as $list) : ?>
                  <li><?php echo $list; ?></li>
                <?php endforeach; ?>
              </ol>
            </div>
            <div class="card-footer text-right">
              -
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

</div>
</div>
<?= $this->endSection(); ?>