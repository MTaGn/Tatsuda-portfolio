<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>

            <main id="main">
                <div class="main-container">

                  <div class="works-page-container section-container">

                    <div class="section-container__subheading-box">
                        <div class="subheading-decoration"></div>
                        <div class="section-container__subheading-text-box">
                            <h1 class="subheading">Works</h1>
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
                   
                    <div class="works-page-container__menu-products-box">
                         <!-- メニュー -->
                        <ul class="works-page-container__product-menus">
                            <li class="sneakers-site menu"><a href="#sneakers-area" class="menu-anker"><span class="en">Sneaker Shop</span></a></li>
                            <li class="english-site menu"><a href="#english-school-area" class="menu-anker"><span class="en">English School</span></a></li>
                            <li class="funiture-site menu"><a href="#funiture-site-area" class="menu-anker"><span class="en">Funiture Shop</span></a></li>
                            <li class="english-lp-design menu"><a href="#english-LP-area" class="menu-anker"><span class="en">English School Design</span></a></li>
                            <li class="sports-gym-lp-design menu"><a href="#gym-LP-area" class="menu-anker"><span class="en">Sport Gym Design</span></a></li>
                            <li class="todo-app menu"><a href="#" class="menu-anker"><span class="en">Todo App</span></a></li>
                        </ul>

                        <div class="works-page-container__products-box">

                            <!-- スニーカー紹介Webサイト -->
                            <div id="sneakers-area" class="third-heading-box">
                                <h2 class="third-heading">Sneaker shop</h2>
                            </div>
                            <div class="works-page-container__product-descs-box">
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">概要</p>
                                    <p class="works-page-container__detail">スニーカーショップ<span class="en">Web</span>サイト</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作目的</p>
                                    <p class="works-page-container__detail"><span class="en">grid</span>レイアウトやスタイリッシュアニメーションを使用してスタイリッシュな<span class="en">Web</span>サイト構築を目的に作成しました</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">担当範囲</p>
                                    <p class="works-page-container__detail">コーディング</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作期間</p>
                                    <p class="works-page-container__detail"><spna class="en">12</spna>時間</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">使用ツール</p>
                                    <p class="works-page-container__detail"><span class="en">HTML / CSS / JavaScript</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item"><span class="en">URL</span></p>
                                    <p class="works-page-container__detail"><span class="en"><a href="https://mtagn.github.io/past_work_sneaker-shop/" target="blank">https://mtagn.github.io/past_work_sneaker-shop/</a></span></p>
                                </div>
                            </div>  

                            <div class="works-page-container__product-box works-page-container__product-img-box">
                                <h2 class="works-page-container__subheading">
                                    <span class="hyphen">&#045;</span>
                                    トップページ
                                    <span class="hyphen">&#045;</span>
                                </h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sneakers-full.png" alt="スニーカーショップのWebサイト" class="works-container__product-img">
                            </div>

                            <!-- 英会話スクール紹介Webサイト -->
                            <div id="english-school-area" class="third-heading-box">
                                <h2 class="third-heading">English School</h2>
                            </div>
                            <div class="works-page-container__product-descs-box">
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">概要</p>
                                    <p class="works-page-container__detail">英会話スクール紹介<span class="en">LP</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作目的</p>
                                    <p class="works-page-container__detail">ふわっとしたアニメーションを使用して親しみやすい<span class="en">Web</span>サイト構築を目的として作成しました</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">担当範囲</p>
                                    <p class="works-page-container__detail">コーディング</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作期間</p>
                                    <p class="works-page-container__detail"><span class="en">14</span>時間</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">使用ツール</p>
                                    <p class="works-page-container__detail"><span class="en">HTML / CSS / JavaScript</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item"><span class="en">URL</span></p>
                                    <p class="works-page-container__detail"><a href="https://mtagn.github.io/past_work_english-school/" target="blank"><span class="en">https://mtagn.github.io/past_work_english-school/</span></a></p>
                                </div>
                            </div>  

                            <div class="works-page-container__product-box works-page-container__product-img-box">
                                <h2 class="works-page-container__subheading">
                                    <span class="hyphen">&#045;</span>
                                    トップページ
                                    <span class="hyphen">&#045;</span>
                                </h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/english-school-full.png" alt="英会話スクール紹介ランディングページ-トップページ" class="works-container__product-img">
                            </div>

                            <!-- 家具ECサイト -->
                            <div id="funiture-site-area" class="third-heading-box">
                                <h2 class="third-heading">Funiture Shop</h2>
                            </div>
                            <div class="works-page-container__product-descs-box">
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">概要</p>
                                    <p class="works-page-container__detail">家具<span class="en">EC</span>サイト</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作目的</p>
                                    <p class="works-page-container__detail"><span class="en">JavaScript</span>を利用して最低限のマークアップで構築することを目的に作成しました
                                    </p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">担当範囲</p>
                                    <p class="works-page-container__detail">コーディング</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作期間</p>
                                    <p class="works-page-container__detail"><span class="en">15</span>時間</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">使用ツール</p>
                                    <p class="works-page-container__detail"><span class="en">HTML / CSS / JavaScript</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item"><span class="en">URL</span></p>
                                    <p class="works-page-container__detail"><a href="https://mtagn.github.io/past_work_funiture-shop/" target="blank"><span class="en">https://mtagn.github.io/past_work_funiture-shop/</span></a></p>
                                </div>
                            </div>  

                            <div class="works-page-container__product-box works-page-container__product-img-box">
                                <h2 class="works-page-container__subheading">
                                    <span class="hyphen">&#045;</span>
                                    トップページ / Aboutページ / Companyページ
                                    <span class="hyphen">&#045;</span>
                                </h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/funiture-design-full.png" alt="家具ショップWebサイト" class="works-container__product-img works-container__main-product-img" id="works-container__move-place">
                                <ul class="works-page-container__product-thumbnails">
                                    <li class="works-page-container__product-thumbnail list-top selected">
                                        <a href="#works-container__move-place"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/funiture-design-full.png" alt="家具ショップWebサイト" class="top-img thumbnail"></a>
                                    </li>
                                    <li class="works-page-container__product-thumbnail list-producs">
                                        <a href="#works-container__move-place"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/funiture-design-products.png" alt="家具ショップWebサイト" class="products-img thumbnail"></a>
                                    </li>
                                    <li class="works-page-container__product-thumbnail list-about">
                                        <a href="#works-container__move-place"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/funiture-design-about.png" alt="家具ショップWebサイト" class="about-img thumbnail"></a>
                                    </li>
                                    <li class="works-page-container__product-thumbnail list-company">
                                        <a href="#works-container__move-place"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/funiture-design-company.png" alt="家具ショップWebサイト" class="company-img thumbnail"></a>
                                    </li>
                                </ul>
                            </div>

                            <!-- 英会話スクールLP -->
                            <div id="english-LP-area" class="third-heading-box">
                                <h2 class="third-heading">English School Design</h2>
                            </div>
                            <div class="works-page-container__product-descs-box">
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">概要</p>
                                    <p class="works-page-container__detail">英会話スクール<span class="en">LP</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作目的</p>
                                    <p class="works-page-container__detail">細かなデザインができる<span class="en">Photoshop</span>を使用して親しみやすさのあるランディングページを作成しました
                                    </p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">担当範囲</p>
                                    <p class="works-page-container__detail">デザイン</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作期間</p>
                                    <p class="works-page-container__detail"><span class="en">10</span>時間</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">使用ツール</p>
                                    <p class="works-page-container__detail"><span class="en">Photoshop</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item"><span class="en">URL</span></p>
                                    <p class="works-page-container__detail"><span class="en"></span></p>
                                </div>
                            </div>  

                            <div class="works-page-container__product-box works-page-container__product-img-box">
                                <h2 class="works-page-container__subheading">
                                    <span class="hyphen">&#045;</span>
                                    トップページ
                                    <span class="hyphen">&#045;</span>
                                </h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/english-school-LP-full.png" alt="英会話スクール紹介ランディングページ" class="works-container__product-img">
                            </div>

                            <!-- スポーツジムLP -->
                            <div id="gym-LP-area" class="third-heading-box">
                                <h2 class="third-heading">Sport Gym Design</h2>
                            </div>
                            <div class="works-page-container__product-descs-box">
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">概要</p>
                                    <p class="works-page-container__detail">スポーツジム<span class="en">LP</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作目的</p>
                                    <p class="works-page-container__detail">細かなデザインができる<span class="en">Photoshop</span>を使用してスタイリッシュで高級感のあるランディングページを作成しました
                                    </p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">担当範囲</p>
                                    <p class="works-page-container__detail">デザイン</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作期間</p>
                                    <p class="works-page-container__detail"><span class="en">12</span>時間</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">使用ツール</p>
                                    <p class="works-page-container__detail"><span class="en">Photoshop</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item"><span class="en">URL</span></p>
                                    <p class="works-page-container__detail"><span class="en"></span></p>
                                </div>
                            </div>  

                            <div class="works-page-container__product-box works-page-container__product-img-box">
                                <h2 class="works-page-container__subheading">
                                    <span class="hyphen">&#045;</span>
                                    トップページ
                                    <span class="hyphen">&#045;</span>
                                </h2>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gym-LP-full.png" alt="スポーツジム紹介ランディングページ" class="works-container__product-img">
                            </div>

                            <!-- Todoアプリ -->
                            <div id="" class="works-page-container__product-descs-box">
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">概要</p>
                                    <p class="works-page-container__detail">※準備中　<span class="en">Todo</span>アプリ</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作目的</p>
                                    <p class="works-page-container__detail"><span class="en">Reacrt.js</span>学習のため
                                    </p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">担当範囲</p>
                                    <p class="works-page-container__detail">コーディング</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">制作期間</p>
                                    <p class="works-page-container__detail"><span class="en">1</span>か月</p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item">使用ツール</p>
                                    <p class="works-page-container__detail"><span class="en">HTML / CSS / React.js</span></p>
                                </div>
                                <div class="works-page-container__product-desc-box">
                                    <p class="works-page-container__item"><span class="en">URL</span></p>
                                    <p class="works-page-container__detail"><span class="en"></span></p>
                                </div>
                            </div>  

                            <div class="works-page-container__product-box works-page-container__product-img-box">
                                <h2 class="works-page-container__subheading">
                                    <span class="hyphen">&#045;</span>
                                    トップページ
                                    <span class="hyphen">&#045;</span>
                                </h2>
                                <p>申し訳ございません。準備中です。</p>
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/" alt="" class="works-container__product-img"> -->
                            </div>

                        </div>
                    </div>
                </div>

              </div>
          </main>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>