<div id="myTopSidebar" class="top-sidebar">
    <!-- <div id="myTopSidebar" class="top-sidebar" style="display:none"> -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">CLOSE</a>
    <div class="about-container">
        <span class="top-title">ABOUT</span><br>
        <p><?= page('about')->text() ?></p>

    </div>

    <div class="people-container">
        <span class="top-title">PEOPLE</span>
        <div class="people-bio">
            <p><?= page('about')->bio() ?></p>
        </div>
        <div class="members-volunteers">
            <div class="members">
                <br>
                <span>COMMITTEE MEMBERS</span><br>
                <?= page('about')->committee() ?>
            </div>
            <div class="volunteers">
                <br>
                <span>VOLUNTEERS</span><br>
                <?= page('about')->volunteers() ?>
            </div>
        </div>
        <div class="past-members">
            <span>Past Committee Members (2021 - )</span>
            <p><?= page('about')->past() ?></p>
        </div>
    </div>

    <div class="visit-container">
        <span class="top-title">VISIT</span><br><br>
        <?= $site->footeraddress() ?><br><br>
        <?= $site->footerhours() ?><br><br>
        <span>ACCESS</span><br><br>
        <?= $site->footeraccess() ?><br><br><br>
        <span>COVIDSafe Information</span><br><br>
        <?= page('visit')->covidsafe() ?>
    </div>
</div>