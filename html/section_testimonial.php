<?php
$testimonials = [
    [
        'name' => 'Hảo Lớ',
        'fb' => 'https://www.facebook.com/hao.lo.10',
        'content' => 'T đã lục lọi trong trí nhớ từ lúc chúng ta quen nhau, chơi với nhau, chia sẻ mọi buồn vui với nhau, cả những lúc m bảo vệ t khỏi những con côn trùng, châu chấu trong suốt 15 năm qua, t muốn nói nhiều điều nhưng sẽ gặp trực tiếp để có thể luyên thuyên mà không phải đắn đo cách sắp xếp suy nghĩ sao cho hoàn chỉnh nhất. T cũng đã từng tự hỏi cảm giác bạn thân đi lấy chồng là thế nào, có cảm giác hơi hụt hẫng thoáng qua rồi đấy, rồi sẽ chẳng còn những lúc ới phát có mặt ngay nữa. Nhưng bây giờ…t thật sự rất vui khi thấy m đã tìm được bến đỗ bình yên của cuộc đời; nhìn cách mà anh Kha chăm sóc m t thấy yên tâm, thấy hạnh phúc và mừng cho m lắm. Hãy luôn hạnh phúc nhé vì m xứng đáng được như thế. Chúc mừng Dê ☘️',
        'job' => 'Banker',
    ],
    [
        'name' => 'Vũ Hoàng',
        'fb' => 'https://www.facebook.com/foolismvu',
        'content' => 'Thật may mắn khi hai bạn đã tìm thấy nhau giữa thế giới rộng lớn này. Hai bạn đúng là mảnh ghép hoàn hảo và hãy tiếp tục làm nên những mảnh ghép tươi đẹp trong cuộc sống nhé!',
        'job' => 'CEO - Hộp đựng giày',
    ],
    [
        'name' => 'Trọng Khang',
        'fb' => 'https://www.facebook.com/khang.trong.391082',
        'content' => 'Marriage is a challenge. But I believe no matter what, right now you are the happiest person in this wedding. Wish you happy.',
        'job' => 'Master Developer',
    ],
];
?>

<div id="fh5co-testimonial">
    <div class="container">
        <div class="row">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span>Bạn thân với những</span>
                    <h2>Lời chúc</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="wrap-testimony">
                        <div class="owl-carousel-fullwidth">
                            <?php foreach ($testimonials as $i => $t) { ?>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <figure>
                                            <img src="images/testimonial-<?= $i + 1 ?>.jpg" alt="<?= $t['name'] ?>">
                                        </figure>
                                        <span><?= $t['name'] ?> <a target="_blank" href="<?= $t['fb'] ?>"
                                                                   class="twitter">Facebook</a></span>
                                        <small>(<?= $t['job'] ?>)</small>
                                        <blockquote>
                                            <p><?= $t['content'] ?></p>
                                        </blockquote>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>