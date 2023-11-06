<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>

<style>
    /* iframe {
        border: none;
        max-height: 80vh;
    } */
</style>
<!-- Draggable DIV -->
<div id="acknowledgment" class="acknowledgment">
    <div class="acknowledgment-text">
        <?= $site->acknowledgment()->kt() ?>
    </div>
    <a id="close" onclick="closePopup()" style="cursor:pointer;">
        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.6458 1L1 17.6458" stroke="black" />
            <path d="M0.999999 1.35417L17.6458 18" stroke="black" />
        </svg>
    </a>
</div>

<script>
    function closePopup() {
        $('#acknowledgment').remove();
    }

    function showPopup() {
        $('#acknowledgment').css("display", "flex")
        $('#acknowledgment').hide()
        $('#acknowledgment').fadein(1000);
    }

    $(document).ready(function() {
        setTimeout(function() {
            if (!$.cookie('acknowledgment')) {
                $('#acknowledgment').css("display", "flex").hide().fadeIn(1000);
                $('#acknowledgment').show();
                var date = new Date();
                date.setTime(date.getTime() + 60 * 1000); // 24 hrs x 60 secs x 60 mins x 1000 ms x 180 days
                // date.setTime(date.getTime());
                $.cookie('acknowledgment', true, {
                    expires: date
                });
            }
        }, 1000);
    });
</script>