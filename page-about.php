<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>

        <main id="main">
            <div class="main-container">

                <div class="about-page-container section-container">
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

                    <div class="about-page-container__text-img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg" alt="プロフィール写真" class="about-page-container__profile-img">
                        <div class="about-page-container__text-box">
                            <p class="about-page-container__text">顧客の売上向上につながる仕事がしたいと思い<span class="en">Web</span>サイト、<span class="en">LP</span>作成等の<span class="en">Web</span>制作に関する技術を中心に学習しています。またこれまでに<span class="en">PG・SE</span>として約<span class="en">3</span>年間<span class="en">Web</span>アプリケーション開発等を経験しているため<span class="en">Web</span>制作だけでなく<span class="en">Web</span>アプリケーション開発まで幅広く対応することができます。</p>
                            <p class="about-page-container__slils-subheading">スキル</p>
                            <ul class="about-page-container__skils">
                                <li class="skil"><span class="en">HTML / CSS / JavaScript / React.js</span></li>
                                <li class="skil"><span class="en">PHP / Laravel / MySQL /</span></li>
                                <li class="skil"><span class="en">WordPress / Photoshop</span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="about-page-container__career-box">
                        <div class="about-page-container__third-heading-box">
                            <div class="section-container__third-heading-text-box">
                                <h2 class="third-heading">Career</h2>
                                <div class="third-heading-ja"><span class="hyphen">&#045;</span>経歴<span class="hyphen">&#045;</span></div>
                            </div>
                        </div>
                        <ul class="about-page-container__career-blocks">
                            <li class="about-page-container__career-block">
                                <div class="about-page-container__year"><span class="en">1992/8</span></div>
                                <div class="about-page-container__line"></div>
                                <div class="about-page-container__detail">鹿児島に生まれる</div>
                            </li>
                            <li class="about-page-container__career-block">
                                <div class="about-page-container__year"><span class="en">2017/3</span></div>
                                <div class="about-page-container__line"></div>
                                <div class="about-page-container__detail">大学院修士課程修了</div>
                            </li>
                            <li class="about-page-container__career-block">
                                <div class="about-page-container__year"><span class="en">2017/4</span></div>
                                <div class="about-page-container__line"></div>
                                <div class="about-page-container__detail">メーカーにて<span class="en">2</span>年間製造技術職に従事</div>
                            </li>
                            <li class="about-page-container__career-block">
                                <div class="about-page-container__year"><span class="en">2019/4</span></div>
                                <div class="about-page-container__line"></div>
                                <div class="about-page-container__detail">未経験から<span class="en">Web</span>業界に入り、約<span class="en">2</span>年間、<span class="en">Web</span>アプリ開発に従事</div>
                            </li>
                            <li class="about-page-container__career-block">
                                <div class="about-page-container__year"><span class="en">2021/1</span></div>
                                <div class="about-page-container__line"></div>
                                <div class="about-page-container__detail">約<span class="en">1</span>年間、生産管理システムの開発・保守に従事</div>
                            </li>
                            <li class="about-page-container__career-block">
                                <div class="about-page-container__year">現在</div>
                                <div class="about-page-container__line"></div>
                                <div class="about-page-container__detail"><span class="en">Web</span>制作の学習をしつつ就活中</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>