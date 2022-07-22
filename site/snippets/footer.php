<div class="main-footer" id="mainFooter">
    <div class="footer-section">
        <div class="title">
            <?= $site->title()->kt() ?>
        </div>
        <div class="copyright footer-item">
            <?= $site->footercopyright()->kt() ?>
        </div>
    </div>
    <div class="footer-section">
        <div class="information footer-item">
            <?= $site->footerInfo()->kt() ?>
        </div>

    </div>
    <div class="footer-section footer-left">
        <div class="footer-item ">
            <?= $site->footerLeft()->kt() ?>

        </div>

        <!-- CONNECT
        <br><br>
        <a href="</?= $site->facebook() ?>" target="_blank">Facebook</a><br> 
        <a href="</?= $site->instagram() ?>" target="_blank">Instagram</a><br> 
        <a href="</?= $site->twitter() ?>" target="_blank">Twitter</a><br> 
        <a href="</?= $site->youtube() ?>" target="_blank">Youtube</a><br> 
        <a href="</?= $site->soundcloud() ?>" target="_blank">Soundcloud</a><br>    -->
    </div>
    <div class="footer-section footer-right">
        <div class="footer-item ">
            <?= $site->footerRight()->kt() ?>

        </div>
    </div>
</div>
<script>
    var offsetHeight = document.getElementById('myDiv').offsetHeight;
</script>
<script>
    // Lightbox
    Array.from(document.querySelectorAll("[data-lightbox]")).forEach(
        (element) => {
            element.onclick = (e) => {
                e.preventDefault();
                basicLightbox.create(`<img src="${element.href}">`).show();
            };
        }
    );
</script>
</body>