<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-0">
                <?php $SubCategory1 = [
                    [
                        "heading" => "heading_A",
                        "id_menu" => "pansol_A",
                        "icons" => "home",
                        "nama" => "Layanan BBM",
                        "link" => "menu_A",
                        "default" => "Menu_A_P1"
                    ],
                    [
                        "heading" => "heading_B",
                        "id_menu" => "pansol_B",
                        "icons" => "file",
                        "nama" => "Layanan Domgas",
                        "link" => "menu_B",
                        "default" => "Menu_B_P1"
                    ],
                    [
                        "heading" => "heading_C",
                        "id_menu" => "pansol_C",
                        "icons" => "shopping-cart",
                        "nama" => "MyPertamina",
                        "link" => "menu_C",
                        "default" => "Menu_C_P1"
                    ],
                    [
                        "heading" => "heading_D",
                        "id_menu" => "pansol_D",
                        "icons" => "users",
                        "nama" => "SPBU",
                        "link" => "menu_D",
                        "default" => "Menu_D_P1"
                    ],
                    [
                        "heading" => "heading_E",
                        "id_menu" => "pansol_E",
                        "icons" => "bar-chart-2",
                        "nama" => "Lubricant",
                        "link" => "menu_E",
                        "default" => "Menu_E_P1"
                    ],
                    [
                        "heading" => "heading_F",
                        "id_menu" => "pansol_F",
                        "icons" => "plus-circle",
                        "nama" => "Pertagas",
                        "link" => "menu_F",
                        "default" => "Menu_F_P1"
                    ],
                    [
                        "heading" => "heading_G",
                        "id_menu" => "pansol_G",
                        "icons" => "truck",
                        "nama" => "PDS",
                        "link" => "menu_G",
                        "default" => "Menu_G_P1"
                    ],
                    [
                        "heading" => "heading_Z",
                        "id_menu" => "pansol_Z",
                        "icons" => "layers",
                        "nama" => "Lain-Lain",
                        "link" => "menu_Z",
                        "default" => "Menu_Z_P1"
                    ]
                ];
                ?>
                <div class="accordion" id="accordionExample">
                    <?php foreach ($SubCategory1 as $row) : ?>
                        <div class="card">
                            <div class="card-header p-0" id="<?= $row["heading"]; ?>">
                                <h2 class="mb-0">
                                    <a href="/<?= $row["id_menu"] . '/' . $row["default"]; ?>" class="btn btn-light btn-block text-left p-3 rounded-0" type="button" data-target="#<?= $row["id_menu"]; ?>" aria-expanded="true" aria-controls="<?= $row["id_menu"]; ?>">
                                        <span data-feather="<?= $row["icons"]; ?>"></span>
                                        <?= $row["nama"]; ?>
                                    </a>
                                </h2>
                            </div>
                            <?php
                            $menuId = $row['nama'];
                            $menuUtama = $row['id_menu'];
                            $db = \Config\Database::connect();
                            $queryMenu = $db->query("SELECT * FROM pansol WHERE `pansol`.`subcategory1` = '$menuId' ");
                            $menu = $queryMenu->getResultArray();
                            ?>
                            <?php if ($menuuri == $menuUtama) : ?>
                                <div id="<?= $menuUtama; ?>" class="collapse show menu" aria-labelledby="<?= $row["heading"]; ?>" data-parent="#accordionExample">
                                <?php else : ?>
                                    <div id="<?= $menuUtama; ?>" class="collapse " aria-labelledby="<?= $row["heading"]; ?>" data-parent="#accordionExample">
                                    <?php endif; ?>

                                    <div class="card-body ">
                                        <?php foreach ($menu as $row) : ?>
                                            <?php if ($title == $row['judul']) : ?>
                                                <a class="nav-link active stop" href="<?= $row['id_menu']; ?>">
                                                <?php else : ?>
                                                    <a class="nav-link" href="/<?= $menuUtama . "/" . $row['id_menu']; ?>">
                                                    <?php endif; ?>
                                                    <?= $row['judul']; ?>
                                                    </a>
                                                <?php endforeach; ?>
                                    </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                </div>
        </nav>