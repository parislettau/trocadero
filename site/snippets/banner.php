<div class="banner">
    <div class="header">
        <a href="<?= $site->url() ?>" class="logo">
            <img src="<?= url('/assets/img/logo.png') ?>" alt="Trocadero Projects" class="logo-img">
        </a>
    </div>

    <div class="nav-menu">
        <ul class="menu-items">
                <li class="menu-open">
                    <a href="./programs"><?php if (page('programs')->isOpen()): ?><span class="bullet">&#8226;</span><?php endif ?>PROGRAMS</a>
                </li> 
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
    </div>
</div>
<div class="banner-space">

</div>






