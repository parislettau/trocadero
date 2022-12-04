<div id="myTopSidebar" class="top-sidebar" style="--theme:<?= $site->theme() ?>;display:none">
    <!-- <div id="myTopSidebar" class="top-sidebar" style="display:none"> -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">CLOSE</a>
    <div class="about-container">
        <span class="top-title">ABOUT</span><br>
        <p><?= $site->text() ?></p>

    </div>

    <div class="people-container">
        <span class="top-title">PEOPLE</span>
        <div class="people-bio">
            <?= $site->bio()->kt() ?>
        </div>
        <div class="members-volunteers">
            <div class="members">
                <br>
                <span>COMMITTEE MEMBERS</span><br>
                <?= $site->committee()->kt() ?>
            </div>
            <div class="volunteers">
                <br>
                <span>VOLUNTEERS</span><br>
                <?= $site->volunteers()->kt() ?>
            </div>
        </div>
        <div class="past-members">
            <br>
            <span>Past Committee Members (2021-)</span>
            <?= $site->past()->kt() ?>
        </div>
    </div>

    <div class="visit-container">
        <span class="top-title">VISIT</span><br>
        <?= $site->footeraddress()->kt() ?><br>
        <?= $site->footerhours()->kt() ?><br>
        <?= $site->footeraccess()->kt() ?><br><br>
    </div>
</div>