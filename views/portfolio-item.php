<div class="portfolio-modal modal fade" id="portfolioModal<?php echo $i+1; ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img class="icon green little" src="assets/svg/times.svg"></img></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"><?php echo $portfolios[$i]['title']; ?></h2>
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <img class="icon dark" src="assets/svg/star.svg"></img>
                                <div class="divider-custom-line"></div>
                            </div>
                            <a href="<?php echo $portfolios[$i]['link']; ?>">
                            <?php if($imgInfos[$i]['type']==='webp') { ?>
                                <picture>
                                    <source type="image/webp" srcset="assets/img/portfolio/<?php echo $imgInfos[$i]['name'];?>.webp">
                                    <source type="image/jpeg" srcset="assets/img/portfolio/<?php echo $imgInfos[$i]['name'];?>.jpg">
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/<?php echo $imgInfos[$i]['name'];?>.jpg" alt=""/>
                                </picture>
                            <?php } else { ?>
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/<?php echo $imgInfos[$i]['name'].'.'.$imgInfos[$i]['type']; ?>" alt=""/>
                            <?php } ?>
                            </a>
                            <h5 class="mt-1"><?php echo $portfolios[$i]['subtitle']; ?></h5>
                            <?php
                            if (isset($portfolios[$i]['content'])) {
                                echo $portfolios[$i]['content'];
                            }
                            echo "<p class=\"mb-2\">".$common["made with"].$portfolios[$i]["stack"].".</p>";
                            if (isset($portfolios[$i]['more info link'])) {
                                echo "<a href=".$portfolios[$i]['more info link']."><button class='btn btn-primary mb-5'>".$common['more info']."</button></a>";
                            }
                            ?>
                            <br>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <img class="icon little" src="assets/svg/times.svg"></img>
                                <?php echo $common['close window']; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>