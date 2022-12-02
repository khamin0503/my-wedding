<?php
$timelines = [
    ['title' => 'Duyên phận 🤗', 'date' => 'tháng 07, 2021 - tháng 01, 2022', 'desc' => 'Vào tháng 07 năm 2021, cô dâu đã quyết định bật sếp và nhảy việc từ một nơi đã gắn bó khá lâu tới một công ty IT hàng đầu Vũ Tông Phan (bên cạnh dòng sông Tô Lịch mộng mơ) để gặp chú rể đã ngồi chờ sẵn ở đó từ 2 năm trước.'],
    ['title' => 'Ngày định mệnh 😅', 'date' => '22, tháng 01, 2022', 'desc' => 'Sau một thời gian vờn nhau bằng nhiều cách (nhưng chủ yếu là bằng những câu xã giao như với các đồng nghiệp khác thôi), cũng đến hôm chủ rể phải mở mồm gửi thông điệp qua messenger cho cô dâu sau buổi Gala lúc hết mình lúc về cho chó ăn chè tại ghế sofa của CEO nào đó.<br>(Note: Do chia tay công ty nên chú rể hơi quá choén 😊 Cô dâu cũng nhân tiện trừ điểm nhiệt tình nhưng vẫn rep tin nhắn chú rể nhiệt huyết lắm 😏).'],
    ['title' => 'Chú rể đã chủ động thì... 🥳', 'date' => '26, tháng 02, 2022', 'desc' => 'Một tháng sau cái "Ngày định mệnh" ấy,  😏'],
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
                <p>Thế gian này cái quý nhất không phải là thứ không có được hay đã mất đi, mà là hạnh phúc hiện tại bạn
                    đang nắm giữ.</p>
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