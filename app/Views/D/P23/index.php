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
          <h6>1. EDC tidak berfungsi karena tidak connect ke POS</h6>
          <?php $list = array_keys($todolist); ?>
          <ul>
            <?php for ($i = 0; $i < count($todolist); $i++) : ?>
              <li>
                <?php echo $list[$i]; ?>
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
          </ul>
          <h6>2. EDC gagal Print Struk Payment</h6>
          <?php $list = array_keys($struk); ?>
          <ol type="a">
            <?php for ($i = 0; $i < count($struk); $i++) : ?>
              <li>
                <?php echo $list[$i]; ?>
                <ul>
                  <?php foreach ($struk[$list[$i]] as $key) : ?>
                    <li>
                      <?php echo $key ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php endfor; ?>
          </ol>
          <h6>3. EDC tidak bisa print :</h6>
          <?php $list = array_keys($print); ?>
          <ol type="a">
            <?php for ($i = 0; $i < count($print); $i++) : ?>
              <li>
                <?php echo $list[$i]; ?>
                <ul>
                  <?php foreach ($print[$list[$i]] as $key) : ?>
                    <?php if ($key != "-") : ?>
                      <li>
                        <?php echo $key ?>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php endfor; ?>
          </ol>
          <h6>4. EDC tidak bisa connect</h6>
          <ul>
            <?php foreach ($connect as $list) : ?>
              <li><?php echo $list; ?></li>
            <?php endforeach; ?>
          </ul>
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
              <h6><span class="badge rounded-pill bg-success p-2"><?= $sla; ?></span></h6>
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