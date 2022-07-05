<div class="main-footer" id="mainFooter">
    <div class="footer-section">
        TROCADERO PROJECTS
        <br><br><br><br>
        <br><br><br><br>
        <div class="foot-copyright">
            <?= $site->footercopyright() ?>
        </div>
    </div>
    <div class="footer-section">
        <?= $site->footeraddress() ?>
        <br><br>
        <?= $site->footerhours() ?>
        <br><br><br>
        ACCESS
        <br>
        <?= $site->footeraccess() ?>
    </div>
    <div class="footer-section">
        TROC Peer-to-Peer is supported by the Victorian Governement through Creative Victoria.
        <br><br>
        <img src="<?= url('/assets/img/CreativeVictoriaLogo.png') ?>" alt="Creative Victoria Logo" class="footer-logo">
        <!-- CONNECT
        <br><br>
        <a href="</?= $site->facebook() ?>" target="_blank">Facebook</a><br> 
        <a href="</?= $site->instagram() ?>" target="_blank">Instagram</a><br> 
        <a href="</?= $site->twitter() ?>" target="_blank">Twitter</a><br> 
        <a href="</?= $site->youtube() ?>" target="_blank">Youtube</a><br> 
        <a href="</?= $site->soundcloud() ?>" target="_blank">Soundcloud</a><br>    -->
    </div>
    <div class="footer-section">
        Trocadero Art Space is supported by the City of Maribyrnong.
        <br><br>
        <img src="<?= url('/assets/img/footer-logos.png') ?>" alt="Maribyrnong Arts and Culture" class="footer-logo">
    </div>
</div>

