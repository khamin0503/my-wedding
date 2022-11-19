<?php
$testimonials = [
    [
        'name' => 'Hảo Lớ',
        'fb' => 'https://www.facebook.com/hao.lo.10',
        'content' => 'Chúc mừng hai bạn đã vượt qua ngàn giông bão để đến bên nhau. Chúc hai bạn sớm sinh quý tử và trân quý nhau. Mừng ngày hạnh phúc!'
    ],
    [
        'name' => 'Vũ Hoàng',
        'fb' => 'https://www.facebook.com/foolismvu',
        'content' => 'Thật may mắn khi hai bạn đã tìm thấy nhau giữa thế giới rộng lớn này. Hai bạn đúng là mảnh ghép hoàn hảo và hãy tiếp tục làm nên những mảnh ghép tươi đẹp trong cuộc sống nhé!'
    ],
    [
        'name' => 'Trọng Khang',
        'fb' => 'https://www.facebook.com/khang.trong.391082',
        'content' => 'Marriage is a challenge. But I believe no matter what, right now you are the happiest person in this wedding. Wish you happy.'
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