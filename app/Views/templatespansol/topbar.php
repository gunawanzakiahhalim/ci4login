<header class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-4 col-lg-3 mr-0 px-3" href="<?= base_url('info'); ?>">Panduan Solusi Pertamina 135</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form action="/pansol" method="post" class="w-100 m-2 d-flex">
        <input class="form-control form-control-light " type="text" placeholder="Search" name="keyword" aria-label="Search" autocomplete="off" autofocus />
        <button class="btn btn-outline-light ml-1" type="submit" name="submit">Cari</button>
    </form>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/logout">Sign out</a>
        </li>
    </ul>
</header>