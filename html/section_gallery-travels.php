<?php
$travels = [
    ['key' => 'TamDao', 'name' => 'Tam Đảo', 'amount' => 2, 'date' => '12, tháng 03, 2022'],
    ['key' => 'MaiChau', 'name' => 'Mai Châu', 'amount' => 2, 'date' => '27, tháng 03, 2022'],
    ['key' => 'MocChau', 'name' => 'Mộc Châu', 'amount' => 3, 'date' => '17, tháng 04, 2022'],
    ['key' => 'HaGiang', 'name' => 'Hà Giang', 'amount' => 5, 'date' => '28, tháng 04, 2022'],
    ['key' => 'BacKan', 'name' => 'Bắc Kạn', 'amount' => 2, 'date' => '26, tháng 06, 2022'],
    ['key' => 'MuCangChai', 'name' => 'Mù Cang Chải', 'amount' => 2, 'date' => '13, tháng 08, 2022'],
    ['key' => 'CaoBang', 'name' => 'Cao Bằng', 'amount' => 3, 'date' => '03, tháng 09, 2022'],
    ['key' => 'DaNang', 'name' => 'Đà Nẵng - Huế - Hội An', 'amount' => 3, 'date' => '16, tháng 09, 2022'],
    ['key' => 'SaPa', 'name' => 'Sapa', 'amount' => 8, 'date' => '09, tháng 10, 2022'],
];
?>

<div id="fh5co-gallery-2" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>Nhiều kỉ niệm với</span>
                <h2>Những chuyến đi</h2>
                <p><?= $quotes[array_rand($quotes)] ?></p>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-12 animate-box js-gallery-2">
                <ul class="fh5co-gallery-list fh5co-gallery-list-each-item">
                    <?php foreach ($travels as $i => $t) { ?>
                        <li class="one-third animate-box" data-animate-effect="fadeIn"
                            style="background-image: url('images/galleries/<?= $t['key'] ?>/1.jpg'); "
                        >
                            <a href="images/galleries/<?= $t['key'] ?>/1.jpg" class="color-<?= $i + 1 ?>">
                                <div class="case-studies-summary">
                                    <span><?= $t['date'] ?></span>
                                    <h2><?= $t['name'] ?></h2>
                                </div>

                                <?php if ($t['amount'] > 1) { ?>
                                    <div class="case-studies-summary-more">
                                        <h2>+<?= $t['amount'] - 1 ?></h2>
                                    </div>
                                <?php } ?>
                            </a>

                            <?php if ($t['amount'] > 1) { ?>
                                <?php for ($k = 2; $k <= $t['amount']; $k++) { ?>
                                    <a href="images/galleries/<?= $t['key'] ?>/<?= $k ?>.jpg"></a>
                                <?php } ?>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>