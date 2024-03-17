<?php get_header(); ?>

<!-- vars -->
<?
// первый экран
$main_slider = carbon_get_post_meta(get_the_ID(), 'main_slider');
$title = get_post_meta(get_the_ID(), '_first_screen_title', true);
$first_screen_text = get_post_meta(get_the_ID(), '_first_screen_text', true);
$first_screen_title_2 = get_post_meta(get_the_ID(), '_first_screen_title_2', true);
$first_screen_rich_text = get_post_meta(get_the_ID(), '_first_screen_rich_text', true);
$first_screen_text_2 = get_post_meta(get_the_ID(), '_first_screen_text_2', true);
// блок клиенты
$clients_title = get_post_meta(get_the_ID(), '_clients_title', true);
$slider_clients = carbon_get_post_meta(get_the_ID(), 'slider_clients');
$clients_rich_text = get_post_meta(get_the_ID(), '_clients_rich_text', true);
// блок баннеры
$numbers = carbon_get_post_meta(get_the_ID(), 'numbers');
$banner_1 = get_post_meta(get_the_ID(), '_banner_1', true);
$banner_2 = get_post_meta(get_the_ID(), '_banner_2', true);
// блок галерея
$banner_3 = get_post_meta(get_the_ID(), '_banner_3', true);
$banner_4 = get_post_meta(get_the_ID(), '_banner_4', true);
$banner_5 = get_post_meta(get_the_ID(), '_banner_5', true);
?>

<main>
  <div class="breadcrumbs">
    Главная > Аренда
  </div>
  <section class="about flex">
    <div class="banner">
      <div class="swiper main-banner">
        <div class="swiper-wrapper">
          <? foreach ($main_slider as $slide): ?>
            <div class="swiper-slide">
              <img src="<?php echo wp_get_attachment_image_url($slide['slider_photo'], 'full'); ?>" alt="banner">
            </div>
          <? endforeach ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="content">
      <h1>
        <? echo $title; ?>
      </h1>
      <p>
        <? echo $first_screen_text; ?>
      </p>
      <p class="download">
        Скачать презентацию
        <svg width="32" height="32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M16 21.567l-6.433-6.434 1.434-1.433 4 4V5.333h2V17.7l4-4 1.433 1.433-6.433 6.434zm-8.666 5.1c-.533 0-1-.2-1.4-.6-.4-.4-.6-.867-.6-1.4V19.9h2v4.767h17.333V19.9h2v4.767c0 .533-.2 1-.6 1.4-.4.4-.866.6-1.4.6H7.334z"
            fill="#151516" />
        </svg>
      </p>
      <h2>
        <? echo $first_screen_title_2; ?>
      </h2>
      <ul class="red-circle">
        <? echo $first_screen_rich_text; ?>
      </ul>
      <p>
        <? echo $first_screen_text_2; ?>
      </p>
    </div>
  </section>
  <section class="clients">
    <h1>
      <? echo $clients_title; ?>
    </h1>
    <div class="clients-section-content flex">
      <div class="clients-slider">
        <div class="swiper clients-swiper">
          <div class="swiper-wrapper">
            <? foreach ($slider_clients as $slide): ?>
              <div class="swiper-slide">
                <img src="<? echo wp_get_attachment_image_url($slide['slider_photo'], 'full'); ?>" alt="banner">
              </div>
            <? endforeach ?>
          </div>
          <div class="control">
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
      <div class="content">
        <? echo $clients_rich_text ?>
      </div>
    </div>
  </section>
  <section class="advantages">
    <div class="numbers">
      <? foreach ($numbers as $number): ?>
        <div class="number-item">
          <p>
            <? echo $number['numbers_text'] ?>
          </p>
          <p class="number">
            <? echo $number['numbers_number'] ?>
          </p>
        </div>
      <? endforeach ?>
    </div>
    <div class="banners">
      <div class="banner-1"><img src="<?php echo wp_get_attachment_image_url($banner_1, 'full'); ?>" alt="banner"></div>
      <div class="banner-2"><img src="<?php echo wp_get_attachment_image_url($banner_2, 'full'); ?>" alt="banner"></div>
    </div>
  </section>
  <section class="gallery">
    <div class="banner-3"><img src="<?php echo wp_get_attachment_image_url($banner_3, 'full'); ?>" alt="banner"></div>
    <div class="banner-4"><img src="<?php echo wp_get_attachment_image_url($banner_4, 'full'); ?>" alt="banner"></div>
    <div class="banner-5"><img src="<?php echo wp_get_attachment_image_url($banner_5, 'full'); ?>" alt="banner"></div>
  </section>
</main>
<? get_footer(); ?>