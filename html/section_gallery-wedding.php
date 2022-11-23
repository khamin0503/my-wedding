<?php
$galleryAmount = 28;
$displayAmount = 9;
?>

<div id="fh5co-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>Cùng chiêm ngưỡng</span>
                <h2>Wedding gallery</h2>
                <p>Người nói yêu bạn, chưa chắc có thể đợi được bạn. Nhưng người nói đợi được bạn, chắc chắn sẽ rất yêu bạn.</p>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-12 animate-box js-gallery">
                <ul class="fh5co-gallery-list">
                    <?php for ($k = 1; $k <= $galleryAmount; $k++) { ?>
                        <?php if ($k <= $displayAmount) { ?>
                            <li class="one-third animate-box" data-animate-effect="fadeIn"
                                style="background-image: url('images/galleries/Wedding/<?= $k ?>.jpg'); ">
                                <a href="images/galleries/Wedding/<?= $k ?>.jpg" class="color-<?= $k ?>">
                                    <?php if ($k === $displayAmount) { ?>
                                        <div class="case-studies-summary-more">
                                            <h2>+<?= $galleryAmount - $displayAmount ?></h2>
                                        </div>
                                    <?php } ?>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li style="display: none;">
                                <a href="images/galleries/Wedding/<?= $k ?>.jpg"></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>