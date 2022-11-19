<?php
$timelines = [
    ['title' => 'Mở bài...', 'date' => '22, tháng 01, 2022', 'desc' => 'Sau pha cho chó ăn chè vào ghế sofa trong phòng Tổng Tà* của công ty PadiTec*
                                    nào đó thì tối hôm đó chủ rể đã quyết định nhắn tin nhắn đầu tiên cho cô
                                    dâu.'],
    ['title' => 'Cao trào...', 'date' => '26, tháng 02, 2022', 'desc' => 'Sau một tháng đong đưa thì chú rể quyết định không để cô dâu ngoài vòng
                                    kiểm soát của mềnh nữa nên đã đưa ra phán quyết \'Lời tỏ tình\' tại Vườn hoa Nhật
                                    Tân. Và tất nhiên là cô dâu ngu gì mà đồng ý ngay =)))'],
    ['title' => 'Buông xuôi...', 'date' => '02, tháng 03, 2022', 'desc' => 'Sau một tuần làm \'giá\' thì cuối cùng cô dâu cũng \'yes, i do\' để hông phụ lòng chú
                                    rể. Muahahaha...'],
    ['title' => 'Những chuyến đi...', 'date' => 'tháng 03 - 10, 2022', 'desc' => 'Do chúng mình đi hơi nhiều nên mời mọi người xem ở <a class="js-click-scroll-to"
                                                                                         data-target="#fh5co-gallery-2">đây</a>
                                    nhé'],
    ['title' => 'Cầu hôn', 'date' => '20, tháng 10, 2022', 'desc' => 'Xin em kết thúc phận đào hoa của anh ngay tức khắc đi nào.'],
    ['title' => 'Cưới thôi!!', 'date' => '18, tháng 12, 2022', 'desc' => 'Hôn lễ được tổ chức vào hồi 10:15, ngày 18, tháng 12, 2022 (Tức ngày 25, tháng
                                    11, Nhâm Dần) tại gia đình nhà trai.'],
];
?>

<div id="fh5co-couple-story">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>Những mốc thời gian</span>
                <h2>Tại sao?</h2>
                <p><?= $quotes[array_rand($quotes)] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <ul class="timeline animate-box">
                    <?php foreach ($timelines as $i => $t) { ?>
                        <li class="<?= ($i % 2) !== 0 ? 'timeline-inverted' : '' ?> animate-box">
                            <a href="images/couple/<?= $i + 1 ?>.jpg" class="timeline-badge js-global-gallery"
                               style="background-image:url('images/couple/<?= $i + 1 ?>.jpg');"></a>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3 class="timeline-title"><?= $t['title'] ?></h3>
                                    <span class="date"><?= $t['date'] ?></span>
                                </div>
                                <div class="timeline-body">
                                    <p><?= $t['desc'] ?></p>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>