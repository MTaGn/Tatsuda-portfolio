<?php get_header(); ?>
    <h2 class ="pageTitle">404 NOT FOUND <span>ERROR</span></h2>
    <div class ="main">
        <div class ="page-not-found-container">
            <p class="page-not-found-container__text">ページが見つかりませんでした。</p>
            <p class="page-not-found-container__text">申し訳ございませんが、<a href ="<?php echo home_url('/'); ?>" class="under-line">こちらのリンク</a>からトップページにお戻りください。</p>
        </div>
    </div>

<?php get_footer(); ?>