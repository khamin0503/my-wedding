<?php
$timelines = [
    ['title' => 'Duyên phận đưa đẩy', 'date' => 'tháng 07, 2021 - tháng 01, 2022', 'desc' => 'Vào 1 ngày đẹp trời, tại văn phòng Padi nào đó, chúng tớ gặp nhau và lướt qua nhau không thương tiếc cùng một vài tin nhắn xã giao trên skype. Tuy nhiên cũng có một vài dấu ấn nhè nhẹ khi 2 ánh mắt cũng va vào nhau nhưng lườm nhau tí rồi lại lướt qua bỏ lại câu nói quen thuộc "sao anh lại nhìn em?" nhưng hông có câu trả lời. Một vài lần va mặt nhau không viết vô tình hay cố ý cùng một vài câu nói bâng quơ: "có cần dắt xe ra không?", "Bật cái đèn lên kìa",... Hoặc cái hôm gặp nhau dưới hầm gửi xe, bạn cô dâu chỉ nói bâng quơ "Mai anh nhớ đi học nhé?  vậy mà hôm sau mưa to gió lớn mà bạn chú rể vác mặt đến học thật. Hết hồn chim én nhưng cứ nghĩ là chắc người ta chủ ý đi học từ trước roài nhưng bạn cô dâu cũng có 1 linh cảm gì đó cơ mà thôi kệ hông thèm quan tâm :)))'],
    ['title' => 'Ngày định mệnh', 'date' => '22, tháng 01, 2022', 'desc' => 'Cái hôm định mệnh mà ai cũng biết là hôm nào, sau vài bài karaoke vẫn còn cờ níp, sau cái pha cho chó ăn chè tại ghế Sô Fa nào đó và nhờ có những người bạn tốt chú rể đã được vác về nhà trong trạng thái ngất trên cành quất. Đêm hôm đó, chú rể đã lấy lại trí nhớ và quyết tâm nhắn tin nhắn đầu tiên choa cô dâu sau bao ngày add FB và với danh nghĩa không còn là đồng nghiệp nữa ahihi.'],
    ['title' => 'Chú rể đã chủ động thì cô dâu cũng cho chú rể cơ hội thể hiện :)))', 'date' => '26, tháng 02, 2022', 'desc' => 'Sau một tháng đong đưa và một vài lần ăn bơ no say, chú rể quyết định không thể để cô dâu ngoài vòng kiểm soát của mềnh và đã tỏ tình cô dâu tại cái nơi giới trẻ thường lui tới mỗi mùa cúc họa mi.Và tất nhiên cô dâu ngu gì mà đồng ý ngay :))) Nu pa ka chi :)))'],
    ['title' => 'Màn đồng ý độc nhất vô nhị :p', 'date' => '02, tháng 03, 2022', 'desc' => 'Vào 1 ngày hơi lạnh, sau một tuần làm giá, cuối cùng cô dâu đã "yes, I do" để hông phụ lòng chú rể. Hông biết chú rể có hết hồn chim én hông Muahahaha...'],
    ['title' => 'Khi hai tâm hồn quá hợp nhau', 'date' => 'tháng 03 - tháng 10, 2022', 'desc' => 'Khi 1 tâm hồn thích khám phá và 1 tâm hồn thích đi chơi kết hợp với nhau sẽ thành cặp đôi vi vu nhiều nhất năm và cùng nhau béo sau những chuyến đi ahihi. Có những chuyến đi 100-200km, cũng có những chuyến 500-600km, thậm chí cũng có những chuyến cả nghìn Km bằng chiếc e bờ lết huyền thoại đã bao lần bị mang đi tân trang vì lí do nào đó hí hí thương ẻm :*. Mời mọi người xem những chuyến đi của chúng tớ tại <a class="js-click-scroll-to" data-target="#fh5co-gallery-2">đây</a> nhé!'],
    ['title' => 'Màn cầu hôn có một không hai', 'date' => '20, tháng 10, 2022', 'desc' => 'Chú rể: em có đồng ý lấy anh làm tồng hông?<br>Cô dâu: ahihi em đồng ý :)<br>Và thế là chuyện gì đến rồi cũng đến ... Chuẩn bị lấy tồng, lấy zợ thui :)))'],
    ['title' => 'Cưới thôi nào...', 'date' => '18, tháng 12, 2022', 'desc' => 'Thiệp đã được gửi tới tay nhưng người thân nhất của cô dâu và chú rể. Mong rằng tất cả mọi người nhận được thiệp mời sẽ dành thời gian đến chung vui cùng chúng tớ/ chúng cháu.
    Mời mọi người xem ảnh cưới của chúng tớ/ chúng cháu tại <a class="js-click-scroll-to" data-target="#fh5co-gallery">đây</a> nhé!'],
];
?>

<div id="fh5co-couple-story">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <span>Những mốc thời gian</span>
                <h2>Câu chuyện tình yêu</h2>
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