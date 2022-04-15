<?php 
    if(is_page("contact")) {
      remove_filter("the_content", "wpautop");
    } 
?>
<?php get_header(); ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
            <?php the_content(); ?>
          <main id="main">
              <div class="main-container">

                  <div class="contact-page-container section-container">
                      <div class="section-container__subheading-box">
                          <div class="subheading-decoration"></div>
                          <div class="section-container__subheading-text-box">
                              <h1 class="subheading">Contact</h1>
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

                      <p class="contact-page-container__explanation">以下のフォームよりお問い合わせください</p>
                      <form action="" method="POST" class="contact-page-container__form-boxes">
                          <div class="contact-page-container__form-box">
                              <label for="name" class="contact-page-container__text-box-label">お名前(必須)</label>
                              <input name="name" type="text" class="contact-page-container__text-box">
                          </div>
                          <div class="contact-page-container__form-box">
                              <label for="mail" class="contact-page-container__text-box-label">メールアドレス(必須)</label>
                              <input name="mail" type="text" class="contact-page-container__text-box">
                          </div>
                          <div class="contact-page-container__form-box">
                              <label for="title" class="contact-page-container__text-box-label">タイトル(必須)</label>
                              <input name="title" type="text" class="contact-page-container__text-box">
                          </div>
                          <div class="contact-page-container__form-box">
                              <label for="content" class="contact-page-container__text-box-label">本文(必須)</label>
                              <textarea  rows="5" name="content" type="text" class="contact-page-container__text-box"></textarea>
                          </div>
                          <div class="contact-page-container__submit-btn-box">
                              <input name="submit" type="submit" value="送信" class="contact-page-container__send-btn">
                          </div>
                      </form>
                      
                  </div>
              </div>
          </main>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>