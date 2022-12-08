<?php
$timelines = [
    ['title' => 'Duyên phận 🤗', 'date' => 'tháng 07, 2021 - tháng 01, 2022', 'desc' => 'Vào tháng 07 năm 2021, cô dâu đã quyết định bật sếp để nhảy việc từ một nơi đã gắn bó khá lâu tới một công ty công nghệ hàng đầu Vũ Tông Phan (bên dòng sông Tô Lịch mộng mơ) để chuẩn bị kế hoạch lừa chú rể đã ngồi chờ sẵn ở đó từ high năm trước.'],
    ['title' => 'Ngày định mệnh 😅', 'date' => '22, tháng 01, 2022', 'desc' => 'Sau một thời gian vờn nhau bằng nhiều cách (nhưng chủ yếu là bằng những câu xã giao như với các đồng nghiệp khác), cũng đến hôm chủ rể trúng kế nên đã mạnh dạn mở mồm gửi thông điệp qua messenger cho cô dâu sau buổi Gala lúc đi hết mình lúc về cho chó ăn chè tại ghế sofa của CEO nào đó (do hơi quá choén) 😏'],
    ['title' => 'Tỏ tình 🥳', 'date' => '26, tháng 02, 2022', 'desc' => 'Sau cái "Ngày định mệnh" ấy, chú rể và cô dâu đã bắt đầu làm phiền nhau hàng ngày bằng những dòng tin nhắn phổ biến như các cặp đôi khác (kiểu như các chuyện liên quan tới ăn, ngủ, ỉ*,...). Và cũng chỉ vỏn vẹn một tháng, chú rể đã tự giác chui đầu vào rọ bằng cách đưa ra lời tỏ tình cho cô dâu. Với kinh nghiệm 26 năm ế của mình thì cô dâu không đồng ý ngay 😏'],
    ['title' => 'Đồng ý hẹn hò 🥰', 'date' => '02, tháng 03, 2022', 'desc' => 'Thế là vào một ngày không đẹp trời (lạnh, hơi mưa), một tuần sau lời tỏ tình, cô dâu đã hẹn chú rể và nói lời đồng ý hẹn hò để không bỏ lỡ mất miếng mồi béo bở này... Và thế là cô dâu và chú rể đã chính thức iu nhaooo 😍'],
    ['title' => 'Đồng \'s điệu về tâm hồn 🥳', 'date' => 'tháng 03 - tháng 10, 2022', 'desc' => 'Vi vu bằng em e bờ lết huyền thoại, thú vui tao nhã của hai đứa mỗi cuối tuần rảnh rỗi là những chuyến đi khám phá nhiều miền đất mới, thử nhiều món ăn mới và tất nhiên là cũng cùng nhau béo lên...<br>Mời mọi người cùng xem kỉ niệm những chuyến đi <a class="js-click-scroll-to" data-target="#fh5co-gallery-2">tại đây</a> nhé! 😊'],
    ['title' => 'Cầu hôn 🥰', 'date' => '20, tháng 10, 2022', 'desc' => 'Cũng vì quá đồng \'s điệu về tâm hồn nên cô dâu và chú rể cũng sớm đã nghĩ về tương lai xa hơn cho cả hai. Vì thế, vào một thời điểm thích hợp, chú rể đã âm thầm đi đặt mua nhẫn và tranh thủ dịp 20/10 để cầu hôn cô dâu (cũng để đỡ đi được một phần quà 20/10 😊). Một điều thú zị ở đây là màn cầu hôn này lại thực hiện sau khi gia đình nhà trai đã gặp mặt gia đình nhà nhà gái để xin cưới 😊'],
    ['title' => 'Kết hôn 🥰', 'date' => '18, tháng 12, 2022', 'desc' => 'Và cuối cùng hai bên gia đình đã đi tới thống nhất chọn ngày 18 tháng 12 năm 2022 (tức 25 tháng 11 năm Nhâm Dần) để tổ chức hôn lễ.<br>Mời mọi người xem ảnh cưới <a class="js-click-scroll-to" data-target="#fh5co-gallery">tại đây</a> nhé!'],
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