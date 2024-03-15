<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="description">
  <meta name="keywords" content="">
  <!-- <?php bloginfo('template_url'); ?> -->
  <link rel="shortcut icon" href="<? bloginfo('template_url') ?>/img/favicon.ico" type="image/svg+xml">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/style.min.css">
  <title>Test Mall</title>
</head>

<body>
  <header class="header flex">
    <div class="logo">
      <img src="<? bloginfo('template_url') ?>/img/logo.png" alt="logo">
    </div>
    <div class="header-right-side flex">
      <div class="header-info flex">
        <div class="hours">
          <span>
            Режим работы:
          </span>
          <span>
            пн-вс 10:00-21:00 <br> Лента 08:00-22:00
          </span>
        </div>
        <nav>
          <ul class="header-links flex">
            <li>Контакты</li>
            <li>Карта ТЦ</li>
          </ul>
        </nav>
        <div class="search">
          <input placeholder="Найти магазин">
          <svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.583 19.17l-5.479-5.83a4.533 4.533 0 01-1.458.898 4.877 4.877 0 01-1.771.321c-1.5 0-2.77-.554-3.813-1.662C3.022 11.79 2.5 10.452 2.5 8.886c0-1.567.52-2.904 1.563-4.012 1.041-1.108 2.305-1.662 3.791-1.662 1.472 0 2.726.554 3.76 1.662 1.035 1.108 1.553 2.445 1.553 4.012A5.733 5.733 0 0112 12.388l5.5 5.806-.917.975zm-8.729-5.94c1.125 0 2.083-.425 2.875-1.275.792-.85 1.188-1.873 1.188-3.07 0-1.196-.396-2.22-1.188-3.069-.791-.85-1.75-1.274-2.875-1.274-1.139 0-2.107.424-2.906 1.274-.799.85-1.198 1.873-1.198 3.07 0 1.196.4 2.22 1.198 3.07.799.849 1.767 1.274 2.906 1.274z" fill="#6B7073" />
          </svg>
        </div>
      </div>
      <div id="toggle">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
      </div>
    </div>
  </header>

  <div id="menu" class="menu flex">
    <div class="menu-left-side flex">
      <ul>
        <li>О нас</li>
        <li>События</li>
        <li>Галерея</li>
        <li>Аренда</li>
        <li>Карта ТЦ</li>
        <li>Контакты</li>
        <li>Вакансии</li>
        <li>Тендеры</li>
      </ul>
    </div>
    <div class="menu-right-side flex">
      <div class="category-block">
        <h4>Магазины</h4>
        <ul class="shop-colums">
          <li>Все магазины</li>
          <li>Женская одежда</li>
          <li>Мужская одежда</li>
          <li>Детская одежда</li>
          <li>Детские товары</li>
          <li>Обувь</li>
          <li>Кожгалантерея</li>
          <li>Продукты</li>
          <li>Цифровая и бытовая техника</li>
          <li>Парфюмерия, косметика</li>
          <li>Ювелирные украшения</li>
          <li>Сувениры, подарки</li>
          <li>Полезное</li>
          <li>Товары для дома</li>
          <li>Спортивные товары, одежда</li>
          <li>Товары для животных</li>
        </ul>
      </div>
      <div class="category-block">
        <h4>Кафе и рестораны</h4>
        <ul>
          <li>Кафе и рестораны</li>
          <li>Рестораны быстрого обслуживания</li>
          <li>Кофейни</li>
          <li>Мороженое и десерты</li>
        </ul>
      </div>
      <div class="category-block">
        <h4>Услуги и сервисы</h4>
        <ul>
          <li>Банкоматы</li>
          <li>Салоны связи</li>
          <li>Парикмахерские</li>
          <li>Администрация</li>
          <li>Продукты</li>
          <li>Другое</li>
        </ul>
      </div>
      <div class="category-block">
        <h4>Развлечения</h4>
        <ul>
          <li>Джунгли парк</li>
          <li>Мероприятия</li>
          <li>Акции</li>
          <li>Новости</li>
        </ul>
      </div>
    </div>
    <div class="search">
      <input placeholder="Найти магазин">
      <svg width="22" height="22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.583 19.17l-5.479-5.83a4.533 4.533 0 01-1.458.898 4.877 4.877 0 01-1.771.321c-1.5 0-2.77-.554-3.813-1.662C3.022 11.79 2.5 10.452 2.5 8.886c0-1.567.52-2.904 1.563-4.012 1.041-1.108 2.305-1.662 3.791-1.662 1.472 0 2.726.554 3.76 1.662 1.035 1.108 1.553 2.445 1.553 4.012A5.733 5.733 0 0112 12.388l5.5 5.806-.917.975zm-8.729-5.94c1.125 0 2.083-.425 2.875-1.275.792-.85 1.188-1.873 1.188-3.07 0-1.196-.396-2.22-1.188-3.069-.791-.85-1.75-1.274-2.875-1.274-1.139 0-2.107.424-2.906 1.274-.799.85-1.198 1.873-1.198 3.07 0 1.196.4 2.22 1.198 3.07.799.849 1.767 1.274 2.906 1.274z" fill="#6B7073" />
      </svg>
    </div>
  </div>