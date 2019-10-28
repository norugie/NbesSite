<!-- Owl Carousel -->
<link rel="stylesheet" href="/plugins/owl.carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="/plugins/owl.carousel/assets/owl.theme.default.css">

<!-- JUMBOTRON -->
<section class="no-mb relative-positioned">
    <div class="relative-positioned">
        <div class="row jumbotron-new">
            <div class="col-md-9 jumbotron-left">
                <section>
                    <div class="owl-carousel owl-theme" id="owl-demo">
                        <?php $carousel = $site->carouselImages($database, $schoolContent); ?>
                        <?php foreach($carousel as $c): ?>
                            <div>
                                <div class="owl-text-overlay d-none d-sm-block">
                                    <h2 class="owl-title d-none d-md-block"><?php echo $c['carousel_desc']; ?></h2>
                                </div>
                                <img class="owl-img" src="https://www.nisgaa.bc.ca/images/carousel/<?php echo $c['carousel_name']; ?>" alt="<?php echo $c['carousel_desc']; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
            <div class="col-md-3 jumbotron-right">
                <nav id="myTab" role="tablist" class="nav nav-tabs nav-justified">
                    <a id="tab4-1-tab" data-toggle="tab" href="#tab4-1" role="tab" aria-controls="tab4-1" aria-selected="true" class="nav-item nav-link active my-auto" style="border:none;font-weight:bold;font-size:1rem;">QUICK LINKS</a>
                </nav>
                <div id="nav-tabContent" class="tab-content" style="border:none;">
                    <div id="tab4-1" role="tabpanel" aria-labelledby="tab4-1-tab" class="tab-pane fade show active">
                        <div class="panel panel-default sidebar-menu">
                            <div class="panel-body">
                                <ul class="nav nav-pills flex-column text-sm">
                                    <?php foreach($quick_links as $ql): ?>
                                        <li class="nav-item"><a href="<?php if($ql['link_type'] == 'File'){ echo "/links/"; } echo $ql['link_content']; ?>" class="nav-link" target="_blank" rel="noreferrer"><?php echo $ql['link_name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- JUMBOTRON END -->
<!-- INFORMATION BAR -->
<footer class="bar bg-primary no-mb color-white main-footer">
    <div class="container-no-center">
        <div class="row vertical-border">
            <div class="col-lg-4 with-border">
                <h4 class="h5 text-center">RECENT NEWS</h4>
                <?php $blog_posts = $site->blogListIndex($database, $schoolContent); ?>
                <ul class="list-unstyled footer-blog-list">
                    <?php foreach($blog_posts as $blog): ?>
                        <li class="d-flex align-items-center">
                            <div class="image"><img src="https://www.nisgaa.bc.ca/images/thumbnails/<?php echo $blog['post_thumbnail']; ?>" alt="..." class="img-fluid"></div>
                            <div class="text">
                                <h5 class="mb-0"> <a href="/news/read/<?php echo preg_replace('/[a-zA-Z]/', '', $blog['post_id']); ?>"><?php echo $blog['post_title']; ?></a></h5>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-4 with-border">
                <h4 class="h5 text-center">UPCOMING EVENTS</h4>
                <ul class="list-unstyled footer-blog-list">
                    <?php if(count($events) < 1){ ?><li class="d-flex align-items-center"><div class="text"><h5 class="mb-0">No upcoming events available</h5></div></li><?php } ?>
                    <?php foreach($events as $e): ?>
                        <li class="d-flex align-items-center">
                            <div class="text">
                                <h5 class="mb-0"> <a href="/news/read/<?php echo preg_replace('/[a-zA-Z]/', '', $e['post_id']); ?>"><?php echo $e['event_name']; ?></a></h5>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-4 with-border">
                <?php $word = $site->weeklyWord($database); ?>
                <h4 class="h5 text-center">NISGA'A PHRASE OF THE WEEK </h4>
                <hr>
                <h4 class="text-center" style="font-family: sans-serif!important; font-size: 18px!important;"><?php echo $word['word']; ?></h4>
                <hr>
                <p class="lead text-center mb-0" style="font-size: 16px;">"<?php echo $word['word_meaning']; ?>"</p>
                <p class="intro text-center"><i><?php echo $word['form']; ?></i></p>
            </div>
        </div>
    </div>
</footer>

<!-- INFORMATION BAR END -->

<script src="/plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="/plugins/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>

<script>

    // Owl Carousel

    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            autoplay: true,
            autoplayTimeout: 3500,
            dots: false
        });
    });

</script>