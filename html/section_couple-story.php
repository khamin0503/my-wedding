<?php
$timelines = [
    ['title' => 'Duyên phận', 'date' => 'tháng 07, 2021 - tháng 01, 2022', 'desc' => 'Tại văn phòng Padi nào đó, chúng tớ đã gặp nhau và lướt qua nhau không thương tiếc cùng một vài tin nhắn xã giao trên skype, một vài câu nói quen thuộc "sao anh lại nhìn em?", "có cần dắt xe ra không?", "Bật cái đèn lên kìa", "Mai anh nhớ đi học nhé?", vân vân và mây mây... 🤗'],
    ['title' => 'Ngày định mệnh', 'date' => '22, tháng 01, 2022', 'desc' => 'Cái ngày định mệnh mà ai cũng biết là hôm nào, sau cái pha cho chó ăn chè tại ghế Sô Fa nào đó 😅 và nhờ có những người bạn tốt chú rể đã được vác về nhà trong trạng thái ngất trên cành quất 😅. Sau khi tỉnh dậy, chú rể đã lấy lại trí nhớ và quyết tâm nhắn tin nhắn đầu tiên choa cô dâu sau bao ngày add FB để đấy 😎'],
    ['title' => 'Chú rể đã chủ động thì... 🥳', 'date' => '26, tháng 02, 2022', 'desc' => 'Sau một tháng đong đưa, cô dâu cũng đồng ý cho chú rể cơ hội cùng một vài lần ăn bơ no say. Và thế là chú rể quyết định không thể để cô dâu ngoài vòng kiểm soát của mềnh và đã tỏ tình cô dâu tại cái nơi giới trẻ thường lui tới. Và tất nhiên cô dâu ngu gì mà đồng ý ngay 😏 Nu pa ka chi 😏'],
    ['title' => 'Màn đồng ý độc nhất vô nhị 🥰', 'date' => '02, tháng 03, 2022', 'desc' => 'Vào 1 ngày hơi lạnh, sau một tuần làm giá, cuối cùng cô dâu đã "yes, I do" để hông phụ lòng chú rể. Chú rể có hết hồn chim én chưa... 😍'],
    ['title' => 'Khi hai tâm hồn quá hợp nhau', 'date' => 'tháng 03 - tháng 10, 2022', 'desc' => 'Vi vu bằng chiếc e bờ lết huyền thoại - thú vui tao nhã của hai đứa mỗi cuối tuần rảnh rỗi và cùng nhau béo sau những chuyến đi ahihi.<br>Mời mọi người cùng xem kỉ niệm những chuyến đi <a class="js-click-scroll-to" data-target="#fh5co-gallery-2">tại đây</a> nhé! 😊'],
    ['title' => 'Màn cầu hôn có một không hai', 'date' => '20, tháng 10, 2022', 'desc' => 'Chú rể: em có đồng ý lấy anh làm chồng hông?<br>Cô dâu: ahihi em đồng ý 😚<br>Và thế là chuyện gì đến rồi cũng đến ... Chuẩn bị lấy tồng, lấy zợ thui 💗💗💗'],
    ['title' => 'Cưới thôi nào...', 'date' => '18, tháng 12, 2022', 'desc' => 'Và cuối cùng hai bên gia đình cô dâu, chú rể đã đi tới thống nhất chọn ngày 18/12/2022 (Tức 25/11 năm Nhâm Dần) để tổ chức hôn lễ.<br>Mời mọi người xem ảnh cưới <a class="js-click-scroll-to" data-target="#fh5co-gallery">tại đây</a> nhé!'],
];
?>

<div id="fh5co-couple-story">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>Những mốc thời gian</span>
                <h2>Câu chuyện tình yêu</h2>
                <p>Thế gian này cái quý nhất không phải là thứ không có được hay đã mất đi, mà là hạnh phúc hiện tại bạn đang nắm giữ.</p>
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