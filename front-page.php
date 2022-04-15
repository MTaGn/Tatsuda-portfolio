<?php get_header(); ?>

<main id="main" class="main">
    <div class="main-container">

        <div class="mainvisual-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mainvisual.png" alt="メインビジュアル"  width="1280" height="405" class="mainvisual-container__img">
            <div class="mainvisual-container__text-box">
                <p class="mainvisual-container__main-text">Tatsuda</p>
                <div class="mainvisual-container__underline"></div>
                <p class="mainvisual-container__sub-text"><span class="en">Web</span>制作</p>
            </div>
        </div>

        <div class="about-container section-container">
            <div class="section-container__subheading-box">
                <div class="subheading-decoration"></div>
                <div class="section-container__subheading-text-box">
                    <h2 class="subheading">About</h2>
                    <div class="subheading-ja">私について</div>
                </div>
            </div>
            <div class="section-container__subheading-box-sp">
                <div class="subheading-decoration"></div>
                <div class="section-container__subheading-text-box">
                    <h2 class="subheading">About</h2>
                    <div class="hyphen-left">&#045;</div>
                    <div class="subheading-ja">私について</div>
                    <div class="hyphen-right">&#045;</div>
                </div>
            </div>

            <div class="about-container__img-text-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg" alt="プロフィール写真" width="350" height="465" class="about-container__img">
                <div class="about-container__text-box">
                    <p class="about-container__main-text paragraph">顧客の売上向上につながる仕事がしたいと思い<span class="en">Web</span>サイト、<span class="en">LP</span>作成等の<span class="en">Web</span>制作に関する技術を中心に学習しています。またこれまでに<span class="en">PG・SE</span>として約<span class="en">3</span>年間<span class="en">Web</span>アプリケーション開発等を経験しているため<span class="en">Web</span>制作だけでなく<span class="en">Web</span>アプリケーション開発まで幅広く対応することができます。
                    </p>
                    <p class="about-container__slils-subheading">スキル</p>
                    <ul class="skils">
                        <li class="about-container__skils skil"><span class="en">HTML / CSS / JavaScript / React.js</span></li>
                        <li class="about-container__skils skil"><span class="en">PHP / Laravel / MySQL /</span></li>
                        <li class="about-container__skils skil"><span class="en">WordPress / Photoshop</span></li>
                    </ul>
                    <div class="about-container__more-box">
                        <p class="about-container__more-text">
                            <a href="<?php echo get_template_directory_uri(); ?>/about/" class="arrow-anker"><span class="en">View More</span></a>
                        </p>
                        <div class="about-container__arrow"><span class="arrow"></span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="works-container section-container">
            <div class="section-container__subheading-box">
                <div class="subheading-decoration"></div>
                <div class="section-container__subheading-text-box">
                    <h2 class="subheading">Works</h2>
                    <div class="subheading-ja">制作実績</div>
                </div>
            </div>
            <div class="section-container__subheading-box-sp">
                <div class="subheading-decoration"></div>
                <div class="section-container__subheading-text-box">
                    <h2 class="subheading">Works</h2>
                    <div class="hyphen-left">&#045;</div>
                    <div class="subheading-ja">制作実績</div>
                    <div class="hyphen-right">&#045;</div>
                </div>
            </div>

            <ul class="works-container__works-boxes">
                <li class="works-container__work-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sneaker-shop.jpg" alt="スニーカーショップのWebサイト" class="works-container__product-img" width="475" height="400">
                    <a href="<?php echo get_template_directory_uri(); ?>/works/" class="works-container__product-desc-box">
                        <p class="works-container__product-desc">スニーカーショップ</p>
                    </a>
                </li>
                <li class="works-container__work-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/english-school.jpg" alt="英会話スクール紹介ランディングページ" class="works-container__product-img" width="475" height="400">
                    <a href="<?php echo get_template_directory_uri(); ?>/works/" class="works-container__product-desc-box">
                        <p class="works-container__product-desc"><span class="en">Web</span>サイト英会話スクール紹介ランディングページ</p>
                    </a>    
                </li>
                <li class="works-container__work-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/funiture-shop.jpg" alt="家具ショップWebサイト" class="works-container__product-img" width="475" height="400">
                    <a href="<?php echo get_template_directory_uri(); ?>/works/" class="works-container__product-desc-box">
                        <p class="works-container__product-desc">家具ショップ<span class="en">Web</span>サイト</p>
                    </a>    
                </li>
                <li class="works-container__work-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/english-school-LP-main.png" alt="英会話スクール紹介ランディングページ" class="works-container__product-img" width="475" height="400">
                    <a href="<?php echo get_template_directory_uri(); ?>/works/" class="works-container__product-desc-box">
                        <p class="works-container__product-desc">オンライン英会話スクールランディングページ</p>
                    </a>    
                </li>
            </ul>

            <div class="works-container__more-area">
                <div class="works-container__more-box">
                    <p class="works-container__more-text">
                        <a href="<?php echo get_template_directory_uri(); ?>/works/" class="arrow-anker"><span class="en">View More</span></a>
                    </p>
                    <div class="works-container__arrow"><span class="arrow"></span></div>
                    </div>
                </div>   
            </div>
        </div>

        <div class="contact-container section-container">
            <div class="section-container__subheading-box">
                <div class="subheading-decoration"></div>
                <div class="section-container__subheading-text-box">
                    <h2 class="subheading">Contact</h2>
                    <div class="subheading-ja">お問い合わせ</div>
                </div>
            </div>
            <div class="section-container__subheading-box-sp">
                <div class="subheading-decoration"></div>
                <div class="section-container__subheading-text-box">
                    <h2 class="subheading">Contact</h2>
                    <div class="hyphen-left">&#045;</div>
                    <div class="subheading-ja">お問い合わせ</div>
                    <div class="hyphen-right">&#045;</div>
                </div>
            </div>
            <p class="contact-container__explanation">お気軽にお問い合わせください！</p>
            <a href="contact/" class="contact-container__btn-box">
                <p class="contact-container__btn-text">お問い合わせページへ</p>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>