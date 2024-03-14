## Ссылка на макет Figma

https://www.figma.com/file/mKLOTaPuZsYNV5F5Rb8UaQ/%D0%A2%D0%B5%D1%81%D1%82%D0%BE%D0%B2%D0%BE%D0%B5-%D0%B7%D0%B0%D0%B4%D0%B0%D0%BD%D0%B8%D0%B5?type=design&node-id=297-2081&mode=design&t=96OcKFv9zzKqD9Ox-0

## Верстка в папка docs. Для GitHub Pages

## Сборка Gulp находится в папке _html-gulp

## Quick start 

  npm i
  npm run html or gulp (by default)

## Сборка Gulp с плагинами для разработки вебпроектов.

[Мануал по работе со сборкой Easy-webdev-startpack](http://www.youtube.com/watch?v=_j38UEpskPU "Мануал по работе со сборкой Easy-webdev-startpack")

## Что есть в сборке:

- компилятор для препроцессора scss/sass;
- минификация готового css;
- автопрефиксер;
- импорт одних файлов в другие, который позволяет собирать html из модулей;
- babel;
- конвертация шрифтов из ttf вwoff и woff2;
- полуавтоматическое формирование и подключение @font-face;
- для живого обновления страниц - browsersync;
- карта исходников для отображения в браузере, из какого scss взят кусок css;
- сжатие изображений;
- адекватное сжатие png через pngquant;
- сжатие svg;
- создание svg-спрайтов и конвертация svg в background-image;
- конвертация растровых изображений в webp;
- живая перезагрузка при работе с PHP (совместно с openserver);
