<header class="header" id="header">
    <!-- logo -->
    <div class="logo-container">
        <a href="<?= $site->url() ?>" class="logo">
            <img src="<?= url('/assets/img/logo.png') ?>" alt="Trocadero Projects" class="logo-img">
        </a>
    </div>
    <!--  menu -->
    <nav class="nav-menu">
        <ul class="menu-items">
            <?php foreach ($site->pages()->listed() as $child) : ?>
                <li class="menu-open">
                    <a href="<?= $child->url() ?>"><?php e($child->isActive(), ' <span class="bullet">&#8226;</span>') ?><?= $child->title() ?></a>
                </li>
            <?php endforeach ?>
            <li class="menu-open">
                <a href="<?= page('shop')->link() ?>" class="active-open" target="_blank">SHOP</a>
            </li>
            <li>
                <button class="openbtn active-open" onClick="openNav()">VISIT</button>

            </li>
            <li>
                <button class="openbtn active-open" onClick="openNav()">ABOUT</button>
            </li>
        </ul>
    </nav>
</header>