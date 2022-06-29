<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <!-- Primary Meta Tags -->
    <title>IT_ONE Cup. Системный анализ – крупнейший чемпионат для системных аналитиков!</title>
    <meta name="title" content="IT_ONE Cup. Системный анализ – крупнейший чемпионат для системных аналитиков!">
    <meta name="description" content="Поборись с другими профессионалами за призовой фонд в размере 500 тысяч рублей и получи предложение о работе в крутой технологической компании! Регистрация открыта до 25 марта">

    <?
        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = $url[0];
        
        echo $url;
    ?>

    
    <!-- Open Graph / Facebook -->
    <!-- <meta property="og:site_name" content="IT_ONE Cup" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://layout.paradigma-digital.ru/one/v.2/home.html">
    <meta property="og:title" content="Просто хороший!">
    <meta property="og:description" content="Хороший сайт">
    <meta property="og:image" content="img/meta/telegram2.png">
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" /> -->
    <meta property="og:image" content="/img/meta/telegram2.png" />
    <meta property="og:image:secure_url" content="http://layout.paradigma-digital.ru/one/v.2/img/meta/telegram2.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="968" />
    <meta property="og:image:height" content="504" />
    <meta property="og:title" content="..." />
    <meta property="og:site_name" content="...." />
    <meta property="og:url" content="<?=$url;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="..." />
    <meta property="og:locale" content="uk_UA" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://layout.paradigma-digital.ru/one/v.2/">
    <meta property="twitter:title" content="IT_ONE Cup. Системный анализ – крупнейший чемпионат для системных аналитиков!">
    <meta property="twitter:description" content="Поборись с другими профессионалами за призовой фонд в размере 500 тысяч рублей и получи предложение о работе в крутой технологической компании! Регистрация открыта до 25 марта">
    <meta property="twitter:image" content="img/meta/item-2.png">
    <meta property="twitter:image:width" content="1024" />
    <meta property="twitter:image:height" content="512" />

    <!-- VK -->
    <!-- <meta property="og:image"  content="img/meta/vk.png" />
    <meta property="og:image:width" content="510" />
    <meta property="og:image:height" content="228" /> -->

    <!-- Telegram -->
    <!-- <meta property="og:image"  content="img/meta/telegram2.png" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" /> -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="header">
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <a href="https://www.it-one.ru/" class="header__logo header__logo_main">
                    <img src="img/header/logo.png" alt="">
                </a>
                <a href="https://sk.ru/" class="header__logo header__logo-sk" >
                    <img src="img/header/sk.svg" alt="">
                </a>

                <nav class="header__nav">  
                    <ul class="header__nav_items">
                        <li class="header__nav_item">
                            <a href="#schedule">Расписание</a>
                        </li>
                        <li class="header__nav_item">
                            <a href="#prizes">Призы</a>
                        </li>
                        <li class="header__nav_item">
                            <a href="#employment">Трудоустройство</a>
                        </li>
                        <li class="header__nav_item">
                            <a href="#organizers">Организаторы</a>
                        </li>
                        <li class="header__nav_item">
                            <a href="#faq">FAQ</a>
                        </li>
                        <li class="header__nav_item">
                            <a href="#bottom">Контакты</a>
                        </li>
                    </ul>
                    <div class="footer__links header__social">
                        <a href="https://t.me/itonecup">
                            <span>
                                <svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.79176 9.29865C8.78825 6.25039 13.4537 4.2408 15.788 3.26986C22.4531 0.497636 23.838 0.0160711 24.7407 0.000169546C24.9392 -0.00332783 25.3832 0.0458755 25.6707 0.279201C25.9135 0.476217 25.9803 0.742358 26.0123 0.92915C26.0443 1.11594 26.0841 1.54146 26.0524 1.87395C25.6912 5.66891 24.1284 14.8783 23.3333 19.1287C22.9969 20.9272 22.3345 21.5303 21.6932 21.5893C20.2994 21.7175 19.2411 20.6682 17.8912 19.7833C15.7789 18.3987 14.5856 17.5367 12.5352 16.1856C10.1657 14.6241 11.7017 13.7659 13.0521 12.3633C13.4055 11.9962 19.5463 6.4107 19.6652 5.90401C19.68 5.84064 19.6938 5.60442 19.5535 5.47969C19.4132 5.35496 19.2061 5.39762 19.0566 5.43154C18.8447 5.47962 15.4703 7.71 8.93326 12.1227C7.97543 12.7804 7.10787 13.1009 6.33055 13.0841C5.47363 13.0656 3.82525 12.5995 2.59985 12.2012C1.09685 11.7127 -0.0977048 11.4543 0.00631425 10.6246C0.0604938 10.1924 0.655644 9.75044 1.79176 9.29865Z" fill="white"/>
                                </svg>
                            </span>
                            Telegram чат
                        </a>
                    </div>
                </nav>
                <a href="https://cups.online/ru/contests/itonecup_Java/registration/" class="btn header__link">
                    Регистрация
                </a>
                <div class="humburger">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <!-- <div class="col">
                
            </div> -->
        </div>
    </div>
</header>

    <main>
        <section class="promo">
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-between position-relative promo__top">
                        <div class="promo__wrapper wow animate__animated  animate__fadeIn animate__backInLeft">
                            <h1 class="promo__title">
                                IT_ONE Cup. <br>  <span>Java</span> 
                            </h1>
                            <p class="promo__subtitle">
                                Регистрируйся и докажи всем, что ты лучший в Java!
                            </p>
                            <a href="https://cups.online/ru/contests/itonecup_Java/registration/" class="btn promo__btn promo__btn__mod">
                                <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-inside-1_45_1358" fill="white">
                                    <path d="M140 70C140 108.66 108.66 140 70 140C31.3401 140 0 108.66 0 70C0 31.3401 31.3401 0 70 0C108.66 0 140 31.3401 140 70Z"/>
                                    </mask>
                                    <path d="M140 70C140 108.66 108.66 140 70 140C31.3401 140 0 108.66 0 70C0 31.3401 31.3401 0 70 0C108.66 0 140 31.3401 140 70Z"  fill="#B1EC52" class="svg-bg" />
                                    <path d="M137.717 70C137.717 107.399 107.399 137.717 70 137.717V142.283C109.921 142.283 142.283 109.921 142.283 70H137.717ZM70 137.717C32.6011 137.717 2.28333 107.399 2.28333 70H-2.28333C-2.28333 109.921 30.079 142.283 70 142.283V137.717ZM2.28333 70C2.28333 32.6011 32.6011 2.28333 70 2.28333V-2.28333C30.079 -2.28333 -2.28333 30.079 -2.28333 70H2.28333ZM70 2.28333C107.399 2.28333 137.717 32.6011 137.717 70H142.283C142.283 30.079 109.921 -2.28333 70 -2.28333V2.28333Z" fill="#B1EC52" mask="url(#path-1-inside-1_45_1358)" class="svg-bg"/>
                                    <path d="M124.32 78.0984C126.357 78.4225 127.947 77.4337 128.214 75.7564C128.375 74.7448 128.07 73.9182 127.385 73.3316L128.397 73.4926L128.569 72.4144L119.624 70.9908L119.441 72.1355L122.716 72.6567C121.936 73.0103 121.474 73.6873 121.319 74.6591C121.052 76.3363 122.257 77.7701 124.32 78.0984ZM124.506 76.927C123.016 76.6898 122.151 75.7743 122.331 74.6428C122.524 73.4315 123.587 72.7545 125.132 73.0002C126.662 73.2438 127.463 74.2174 127.27 75.4287C127.086 76.5868 125.984 77.1622 124.506 76.927Z" fill="#050505"/>
                                    <path d="M121.364 85.0017C121.106 84.4487 120.951 84.0146 120.894 83.6696C120.833 83.3374 120.866 82.9792 120.996 82.5823C121.417 81.3018 122.579 80.9176 123.881 81.2744L122.328 85.9993C122.477 86.0626 122.639 86.1301 122.806 86.1848C124.688 86.8034 126.186 86.1322 126.775 84.3396C127.373 82.5213 126.369 80.8718 124.397 80.2237C122.425 79.5756 120.702 80.3714 120.079 82.2664C119.729 83.3292 119.822 84.2111 120.484 85.4359L121.364 85.0017ZM124.692 81.5693C125.803 82.1187 126.233 83.012 125.896 84.0364C125.542 85.112 124.627 85.5207 123.497 85.2058L124.692 81.5693Z" fill="#050505"/>
                                    <path d="M122.039 93.9631L122.888 94.3754L124.867 90.302L118.902 87.4043L118.395 88.4469L123.512 90.9323L122.039 93.9631Z" fill="#050505"/>
                                    <path d="M118.934 101.628L117.601 98.2797C117.352 97.6263 116.99 96.7605 116.518 95.6524C117.141 96.125 117.806 96.6099 118.522 97.1148L120.923 98.8081L121.552 97.916L116.133 94.0942L115.418 95.1075L116.751 98.4556C117.08 99.2981 117.457 100.19 117.87 101.125C117.28 100.676 116.538 100.136 115.646 99.5073L113.421 97.9382L112.792 98.8303L118.211 102.652L118.934 101.628Z" fill="#050505"/>
                                    <path d="M114.067 106.948C113.599 107.451 113.063 107.671 112.033 107.67L112.042 108.709C113.264 108.741 114.025 108.418 114.769 107.618C116.063 106.227 115.936 104.305 114.396 102.873C112.846 101.432 110.957 101.425 109.635 102.846C108.873 103.665 108.627 104.485 108.819 105.842L109.816 105.719C109.717 104.579 109.869 104.039 110.356 103.516C110.797 103.042 111.314 102.842 111.917 102.906C112.521 102.989 113.075 103.265 113.588 103.742C114.575 104.66 114.957 105.99 114.067 106.948Z" fill="#050505"/>
                                    <path d="M106.879 113.82L107.477 114.55L111.802 111.001L111.203 110.272L109.484 111.683L105.875 107.286L104.979 108.022L108.588 112.418L106.879 113.82Z" fill="#050505"/>
                                    <path d="M98.1151 117.173C99.1576 118.953 100.931 119.554 102.397 118.696C103.281 118.178 103.726 117.418 103.745 116.516L104.262 117.4L105.204 116.848L100.626 109.033L99.6253 109.619L101.302 112.48C100.533 112.102 99.7164 112.174 98.8674 112.672C97.4019 113.53 97.0589 115.371 98.1151 117.173ZM99.1386 116.574C98.3754 115.271 98.5342 114.023 99.5228 113.444C100.581 112.824 101.779 113.215 102.57 114.564C103.353 115.902 103.109 117.138 102.051 117.758C101.039 118.351 99.8949 117.865 99.1386 116.574Z" fill="#050505"/>
                                    <path d="M93.0682 123.5L93.8102 119.973C93.9649 119.292 94.1421 118.37 94.362 117.186C94.6197 117.924 94.9047 118.696 95.2218 119.512L96.2851 122.252L97.303 121.857L94.9031 115.675L93.747 116.123L93.005 119.65C92.8132 120.534 92.6333 121.486 92.4602 122.492C92.2171 121.792 91.898 120.932 91.5029 119.915L90.5176 117.376L89.4997 117.771L91.8996 123.953L93.0682 123.5Z" fill="#050505"/>
                                    <path d="M81.9043 123.612C82.3294 125.63 83.8214 126.762 85.4833 126.412C86.4857 126.201 87.1486 125.621 87.4519 124.772L87.663 125.774L88.7314 125.549L86.8644 116.686L85.7301 116.925L86.4135 120.169C85.8046 119.567 85.007 119.377 84.0441 119.58C82.3822 119.93 81.4737 121.568 81.9043 123.612ZM83.065 123.368C82.7538 121.89 83.3 120.756 84.4212 120.52C85.6214 120.267 86.6337 121.018 86.956 122.548C87.2755 124.065 86.6522 125.161 85.4519 125.413C84.3044 125.655 83.3734 124.832 83.065 123.368Z" fill="#050505"/>
                                    <path d="M75.72 127.946L76.3004 125.727L76.8205 123.608L77.134 122.355L77.2662 122.683C77.7921 123.955 78.1858 124.9 78.4627 125.542L79.363 127.678L80.5863 127.589L77.588 120.808L77.6499 120.547C77.8595 119.72 78.1509 119.456 78.6886 119.416C78.9172 119.399 79.1611 119.408 79.407 119.444L79.5435 118.542C79.2274 118.471 78.8749 118.456 78.512 118.483C77.3962 118.565 76.9862 119.054 76.6459 120.309L74.5505 128.032L75.72 127.946Z" fill="#050505"/>
                                    <path d="M65.7495 128.061L66.337 121.455L67.4245 121.552L67.1833 124.264C67.0866 125.352 66.9919 126.263 66.8994 126.999C67.5006 126.173 68.0837 125.4 68.6473 124.692L70.875 121.859L72.1102 121.969L71.5226 128.574L70.4351 128.478L70.6955 125.551C70.7731 124.678 70.8594 123.86 70.9555 123.084C70.2337 124.048 69.6665 124.796 69.2258 125.339L66.9981 128.172L65.7495 128.061ZM66.2929 130.775L67.2596 130.861C67.3157 130.23 67.7507 129.903 68.4891 129.969C69.2276 130.035 69.5981 130.433 69.542 131.064L70.5221 131.151C70.6224 130.023 69.884 129.349 68.5548 129.231C67.2525 129.115 66.3932 129.647 66.2929 130.775Z" fill="#050505"/>
                                    <path d="M59.9129 126.615C59.243 126.461 58.7853 126.106 58.272 125.213L57.3759 125.74C57.958 126.815 58.6178 127.313 59.6817 127.558C61.5336 127.985 63.1358 126.916 63.6084 124.867C64.084 122.805 63.1482 121.164 61.2568 120.728C60.1667 120.477 59.3332 120.672 58.2533 121.516L58.8566 122.319C59.7961 121.664 60.3396 121.526 61.0357 121.687C61.6662 121.832 62.0976 122.181 62.3432 122.735C62.5726 123.3 62.6101 123.917 62.4525 124.6C62.1496 125.914 61.1869 126.909 59.9129 126.615Z" fill="#050505"/>
                                    <path d="M52.3979 125.684C53.7595 126.236 54.9979 125.836 55.4791 124.65C55.8894 123.638 55.5087 122.64 54.5229 122.022L57.4134 120.561L56.1642 120.055L53.3814 121.501L52.2322 121.035L53.1288 118.824L52.1045 118.409L49.6123 124.555L52.3979 125.684ZM51.8776 121.91L53.514 122.573C54.3759 122.922 54.7135 123.525 54.4298 124.224C54.1512 124.911 53.502 125.113 52.6151 124.754L50.9912 124.096L51.8776 121.91Z" fill="#050505"/>
                                    <path d="M35.8712 113.016C34.5744 114.619 34.6383 116.491 35.959 117.559C36.7557 118.203 37.6244 118.35 38.4744 118.049L37.8302 118.846L38.6793 119.532L44.3751 112.489L43.4736 111.761L41.3885 114.339C41.4709 113.487 41.1148 112.748 40.3496 112.13C39.0288 111.062 37.185 111.391 35.8712 113.016ZM36.7936 113.761C37.7429 112.588 38.9676 112.295 39.8586 113.015C40.8125 113.787 40.8691 115.046 39.8858 116.261C38.9111 117.467 37.6679 117.675 36.714 116.904C35.8021 116.166 35.8528 114.925 36.7936 113.761Z" fill="#050505"/>
                                    <path d="M31.3521 106.986C31.9602 107.038 32.414 107.12 32.7414 107.243C33.0598 107.355 33.354 107.562 33.6329 107.874C34.5328 108.877 34.286 110.076 33.3273 111.026L30.0068 107.323C29.8774 107.42 29.7379 107.527 29.6074 107.644C28.132 108.967 27.9665 110.599 29.2263 112.004C30.5041 113.429 32.435 113.382 33.9807 111.997C35.5264 110.611 35.6964 108.721 34.3646 107.236C33.6177 106.403 32.8068 106.044 31.4151 106.006L31.3521 106.986ZM32.6669 111.581C31.6366 112.27 30.6478 112.196 29.9279 111.394C29.172 110.551 29.2741 109.554 30.1113 108.731L32.6669 111.581Z" fill="#050505"/>
                                    <path d="M23.2253 103.066L22.4444 103.596L24.9869 107.344L30.4756 103.622L29.8248 102.662L25.1171 105.855L23.2253 103.066Z" fill="#050505"/>
                                    <path d="M18.2005 96.6779L21.7694 97.1818C22.46 97.2904 23.3917 97.4053 24.5881 97.5453C23.8685 97.852 23.1179 98.188 22.3243 98.5591L19.6624 99.8036L20.125 100.793L26.1325 97.9839L25.6071 96.8606L22.0382 96.3567C21.1432 96.2247 20.1813 96.1089 19.165 96.0038C19.848 95.7143 20.684 95.3383 21.673 94.8759L24.1395 93.7227L23.6769 92.7338L17.6695 95.5424L18.2005 96.6779Z" fill="#050505"/>
                                    <path d="M15.977 89.7403C15.7746 89.0833 15.8518 88.5095 16.3669 87.6175L15.4619 87.1064C14.824 88.149 14.7241 88.9695 15.0455 90.0129C15.6049 91.8293 17.3334 92.6792 19.3431 92.0605C21.3656 91.4378 22.3155 89.8056 21.7442 87.9506C21.4149 86.8814 20.8281 86.2582 19.5565 85.7471L19.1643 86.6717C20.202 87.1561 20.5936 87.5574 20.8038 88.2401C20.9943 88.8584 20.9092 89.4065 20.5525 89.897C20.179 90.3787 19.6638 90.7207 18.9939 90.9269C17.7057 91.3235 16.3618 90.9898 15.977 89.7403Z" fill="#050505"/>
                                    <path d="M13.6104 80.0763L12.6792 80.2282L13.5798 85.749L14.511 85.5971L14.153 83.4021L19.7669 82.4866L19.5803 81.3425L13.9663 82.2581L13.6104 80.0763Z" fill="#050505"/>
                                    <path d="M15.0906 70.6165C13.0283 70.6165 11.6131 71.8431 11.6131 73.5414C11.6131 74.5658 12.0444 75.3341 12.8127 75.8059H11.7883V76.8977H20.8461V75.7385H17.5303C18.2447 75.2667 18.5951 74.5254 18.5951 73.5414C18.5951 71.8431 17.1799 70.6165 15.0906 70.6165ZM15.0906 71.8027C16.6003 71.8027 17.5977 72.571 17.5977 73.7167C17.5977 74.9432 16.6542 75.7789 15.0906 75.7789C13.5405 75.7789 12.597 74.9432 12.597 73.7167C12.597 72.544 13.5945 71.8027 15.0906 71.8027Z" fill="#050505"/>
                                    <path d="M12.1496 63.1082L14.822 65.5262C15.3329 66.0033 16.0399 66.6209 16.9519 67.4075C16.1841 67.258 15.3742 67.1155 14.509 66.9778L11.6071 66.5159L11.4354 67.5941L17.9847 68.6364L18.1796 67.4118L15.5073 64.9938C14.8403 64.3827 14.1088 63.7476 13.3262 63.0908C14.0541 63.2339 14.9572 63.3913 16.0354 63.5629L18.7243 63.9908L18.896 62.9126L12.3467 61.8703L12.1496 63.1082Z" fill="#050505"/>
                                    <path d="M17.6284 53.4699C15.6692 52.826 13.9416 53.5494 13.4111 55.1628C13.0912 56.1359 13.261 57.0004 13.8435 57.6885L12.8703 57.3686L12.5293 58.4058L21.1344 61.2339L21.4964 60.1327L18.3464 59.0974C19.1724 58.8723 19.7369 58.2774 20.0442 57.3427C20.5746 55.7293 19.6132 54.1222 17.6284 53.4699ZM17.2579 54.5967C18.6921 55.0681 19.3997 56.1094 19.0419 57.1977C18.6588 58.363 17.5014 58.8623 16.016 58.3741C14.5434 57.8901 13.9081 56.8016 14.2912 55.6364C14.6574 54.5224 15.8366 54.1296 17.2579 54.5967Z" fill="#050505"/>
                                    <path d="M17.0088 45.8493L18.6308 47.4703L20.1977 48.9893L21.1209 49.8923L20.7709 49.8408C19.407 49.6524 18.3931 49.5155 17.6992 49.4305L15.4001 49.1287L14.8599 50.2299L22.227 51.0652L22.4214 51.2506C23.0288 51.8487 23.1101 52.2338 22.8726 52.7179C22.7717 52.9236 22.6406 53.1296 22.4854 53.3237L23.1951 53.8969C23.4163 53.6601 23.607 53.3632 23.7673 53.0365C24.26 52.0321 24.0444 51.431 23.1331 50.5037L17.5253 44.7965L17.0088 45.8493Z" fill="#050505"/>
                                    <path d="M21.7516 37.4241L27.1712 41.2459L26.5419 42.138L24.3167 40.5689C23.4245 39.9397 22.6832 39.4005 22.0929 38.9512C22.5059 39.8857 22.8826 40.7781 23.2119 41.6206L24.545 44.9686L23.8302 45.9819L18.4105 42.1602L19.0399 41.268L21.4413 42.9614C22.1573 43.4663 22.8215 43.9512 23.4449 44.4237C22.9729 43.3157 22.6104 42.4499 22.3621 41.7965L21.029 38.4484L21.7516 37.4241ZM19.1309 36.5327L18.5714 37.3257C19.0892 37.6908 19.1535 38.2309 18.7261 38.8367C18.2988 39.4425 17.7683 39.5632 17.2506 39.1981L16.6834 40.0021C17.6087 40.6546 18.5628 40.3543 19.332 39.2639C20.0857 38.1956 20.0562 37.1852 19.1309 36.5327Z" fill="#050505"/>
                                    <path d="M25.8392 33.1773C26.3074 32.6739 26.843 32.4542 27.8732 32.4549L27.864 31.4158C26.642 31.3839 25.8811 31.7072 25.1376 32.5067C23.8433 33.8983 23.9704 35.8201 25.5104 37.2518C27.0603 38.6927 28.9491 38.7003 30.271 37.279C31.0329 36.4598 31.2797 35.6402 31.0873 34.2835L30.0902 34.4056C30.1889 35.5463 30.0369 36.0859 29.5503 36.609C29.1097 37.0828 28.5924 37.2828 27.9892 37.2189C27.3852 37.1359 26.8315 36.8604 26.3182 36.3832C25.331 35.4655 24.9488 34.1347 25.8392 33.1773Z" fill="#050505"/>
                                    <path d="M30.5014 26.9987C29.3422 27.9014 29.0689 29.1735 29.8558 30.1836C30.5268 31.0449 31.5815 31.2144 32.6097 30.67L32.4287 33.9031L33.4922 33.0749L33.6319 29.9423L34.6102 29.1804L36.0764 31.0625L36.9485 30.3834L32.873 25.1519L30.5014 26.9987ZM34.0304 28.4361L32.6372 29.521C31.9035 30.0924 31.213 30.0834 30.7491 29.488C30.2935 28.9031 30.4432 28.2399 31.1983 27.6519L32.5808 26.5753L34.0304 28.4361Z" fill="#050505"/>
                                    <path d="M49.6771 18.9955C48.938 17.0702 47.2856 16.1884 45.7 16.7968C44.7436 17.1638 44.1809 17.8418 44.0158 18.728L43.6487 17.7717L42.6294 18.1628L45.8755 26.619L46.9578 26.2037L45.7694 23.1081C46.4659 23.6061 47.2836 23.6676 48.2023 23.3151C49.7879 22.7067 50.4258 20.946 49.6771 18.9955ZM48.5697 19.4205C49.1107 20.8298 48.7509 22.0363 47.6812 22.4467C46.5361 22.8862 45.4177 22.3047 44.8573 20.845C44.3018 19.3979 44.7439 18.2176 45.8891 17.7782C46.9839 17.3581 48.0335 18.0237 48.5697 19.4205Z" fill="#050505"/>
                                    <path d="M57.0023 18.11C56.6532 18.6105 56.3554 18.9625 56.0854 19.1846C55.8285 19.404 55.5023 19.5553 55.0934 19.6414C53.7744 19.9192 52.8594 19.1063 52.5156 17.8012L57.3826 16.7764C57.3624 16.6154 57.3395 16.4411 57.3034 16.2697C56.895 14.3308 55.5634 13.3715 53.7168 13.7603C51.8439 14.1547 50.9201 15.8506 51.3479 17.8818C51.7758 19.913 53.3281 21.0049 55.2802 20.5939C56.375 20.3633 57.0913 19.8406 57.8194 18.6542L57.0023 18.11ZM52.3641 16.9515C52.2828 15.7152 52.8402 14.8953 53.8953 14.6732C55.0033 14.4399 55.8156 15.0264 56.11 16.1628L52.3641 16.9515Z" fill="#050505"/>
                                    <path d="M64.6779 12.9866L64.6124 12.0454L60.0944 12.3595L60.5546 18.9752L61.711 18.8948L61.3162 13.2204L64.6779 12.9866Z" fill="#050505"/>
                                    <path d="M73.1027 11.8469L70.8641 14.6713C70.4213 15.2123 69.8513 15.9581 69.1258 16.9196C69.2249 16.1436 69.3143 15.3262 69.3953 14.4538L69.6668 11.528L68.5797 11.4271L67.9668 18.0303L69.2016 18.1449L71.4401 15.3204C72.0065 14.6149 72.5925 13.8436 73.1969 13.0198C73.1015 13.7555 73.0034 14.6668 72.9025 15.754L72.6508 18.4651L73.738 18.566L74.3508 11.9627L73.1027 11.8469Z" fill="#050505"/>
                                    <path d="M79.9055 13.3604C80.5753 13.5148 81.033 13.8693 81.5464 14.7623L82.4425 14.2358C81.8604 13.161 81.2006 12.663 80.1367 12.4178C78.2847 11.9908 76.6825 13.06 76.21 15.1089C75.7344 17.171 76.6702 18.8115 78.5615 19.2475C79.6517 19.4988 80.4852 19.3037 81.5651 18.4599L80.9618 17.6568C80.0223 18.3117 79.4788 18.4492 78.7827 18.2887C78.1522 18.1434 77.7208 17.7949 77.4752 17.2403C77.2458 16.6756 77.2083 16.0584 77.3658 15.3754C77.6687 14.062 78.6314 13.0667 79.9055 13.3604Z" fill="#050505"/>
                                    <path d="M89.7248 16.2393L90.0629 15.3584L84.8405 13.3544L84.5023 14.2353L86.5787 15.0321L84.5402 20.3423L85.6225 20.7576L87.661 15.4473L89.7248 16.2393Z" fill="#050505"/>
                                    <path d="M96.9914 22.1915C98.0273 20.4084 97.6776 18.5686 96.2089 17.7157C95.3231 17.2013 94.442 17.1884 93.6481 17.6158L94.1627 16.73L93.2186 16.1817L88.6684 24.0138L89.6709 24.5959L91.3365 21.7288C91.3856 22.5834 91.8507 23.2588 92.7015 23.7529C94.1702 24.6058 95.9418 23.998 96.9914 22.1915ZM95.9656 21.5959C95.2073 22.9012 94.0418 23.3778 93.0511 22.8025C91.9904 22.1865 91.7417 20.951 92.5271 19.599C93.3058 18.2587 94.5024 17.8625 95.5631 18.4785C96.5772 19.0674 96.7172 20.3022 95.9656 21.5959Z" fill="#050505"/>
                                    <path d="M104.885 23.3549L101.452 24.4528C100.782 24.6553 99.8934 24.9569 98.7551 25.351C99.2698 24.7619 99.7997 24.133 100.353 23.4538L102.209 21.1758L101.363 20.4863L97.1737 25.6275L98.1352 26.4106L101.568 25.3127C102.432 25.0424 103.348 24.7285 104.309 24.3812C103.82 24.9389 103.231 25.641 102.541 26.4874L100.821 28.5982L101.668 29.2877L105.857 24.1465L104.885 23.3549Z" fill="#050505"/>
                                    <path d="M110.617 33.0663C112.157 31.6954 112.399 29.8384 111.27 28.5698C110.589 27.8047 109.756 27.5175 108.868 27.6759L109.633 26.9949L108.907 26.1794L102.14 32.2006L102.911 33.0664L105.388 30.8622C105.168 31.6895 105.399 32.4762 106.054 33.2112C107.183 34.4797 109.056 34.4551 110.617 33.0663ZM109.828 32.1803C108.7 33.1838 107.444 33.273 106.682 32.4172C105.867 31.501 106.016 30.2496 107.184 29.2102C108.342 28.1798 109.603 28.1768 110.418 29.093C111.198 29.9689 110.946 31.1857 109.828 32.1803Z" fill="#050505"/>
                                    <path d="M117.43 36.2236L115.215 36.8199L113.117 37.4196L111.873 37.7688L112.093 37.4912C112.937 36.4036 113.561 35.5935 113.981 35.0347L115.39 33.1932L114.705 32.1757L110.305 38.1418L110.047 38.2177C109.226 38.4455 108.851 38.3238 108.55 37.8765C108.422 37.6864 108.309 37.4701 108.218 37.2387L107.367 37.5676C107.462 37.8774 107.624 38.1907 107.828 38.4926C108.452 39.4207 109.081 39.5339 110.339 39.2071L118.085 37.1964L117.43 36.2236Z" fill="#050505"/>
                                    <path d="M122.382 44.5746L116.364 47.3609L115.905 46.3702L118.376 45.2262C119.367 44.7675 120.204 44.3946 120.888 44.1076C119.872 43.9987 118.911 43.8794 118.016 43.744L114.449 43.2269L113.928 42.1017L119.946 39.3154L120.405 40.3061L117.738 41.5407C116.943 41.9088 116.191 42.242 115.471 42.546C116.667 42.6904 117.598 42.8088 118.288 42.92L121.855 43.4371L122.382 44.5746ZM124.463 42.7495L124.055 41.8689C123.48 42.1351 122.98 41.9211 122.668 41.2484C122.357 40.5757 122.517 40.0559 123.092 39.7897L122.678 38.8969C121.651 39.3726 121.435 40.349 121.996 41.5599C122.545 42.7463 123.435 43.2252 124.463 42.7495Z" fill="#050505"/>
                                    <path d="M124.09 50.4508C124.289 51.1085 124.21 51.682 123.692 52.572L124.595 53.0866C125.237 52.0464 125.34 51.2263 125.022 50.1816C124.47 48.3632 122.744 47.5067 120.732 48.1178C118.707 48.7328 117.751 50.3615 118.316 52.2186C118.641 53.2891 119.225 53.9145 120.495 54.4304L120.891 53.5073C119.855 53.0189 119.465 52.6162 119.257 51.9327C119.069 51.3136 119.156 50.7659 119.515 50.2767C119.89 49.7964 120.407 49.4564 121.077 49.2527C122.367 48.861 123.71 49.1998 124.09 50.4508Z" fill="#050505"/>
                                    <path d="M127.046 57.4605C126.848 56.0046 125.886 55.1286 124.617 55.3007C123.535 55.4474 122.858 56.2737 122.812 57.4362L120.108 55.6538L120.29 56.9894L122.927 58.6856L123.094 59.9144L120.73 60.2351L120.879 61.3303L127.45 60.439L127.046 57.4605ZM124.029 59.7876L123.792 58.0379C123.667 57.1163 124.021 56.5241 124.769 56.4226C125.504 56.323 126.002 56.7859 126.131 57.7342L126.366 59.4706L124.029 59.7876Z" fill="#050505"/>
                                </svg>                                    
                            </a>
                            <span class="promo__wrapper_img"></span>

                        </div>

                        <div class="promo__label wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="0.7s">
                            <span>
                                общий призовой фонд
                            </span>
                            <br>
                            740 000 ₽
                        </div>
                        <picture><img src="img/promo/promo1.png" alt="" class="promo__img wow animate__animated  animate__fadeInDown"></picture>
                    </div>
                </div>
            </div>
            <div class="promo__series">
                Продолжение серии <br> чемпионатов IT_ONE Cup.
                <a href="https://cups.online/ru/contests/itonecup/">
                    Посмотреть предыдущий
                </a>
            </div>
            <!-- /.promo__series -->
            <div class="scroll-text">
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
                <span>Java</span>
                <span>Spring</span>
                <span>Microservices</span>
                <span>Collections</span>
                <span> Exceptions </span>
            </div>
            <!-- /.scroll-text -->
        </section>

        <section class="schedule" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-6 schedule__left wow animate__animated  animate__fadeInLeft">
                        <h2 class="schedule__title">
                            Расписание
                        </h2>
                        <p class="schedule__subtitle">
                            Чемпионат состоит из 2 раундов. <br> Победители определяются по сумме баллов.
                        </p>

                        <div class="schedule__right schedule__right-mob">
                            <div class="schedule__item">
                                <h3 class="schedule__item_title">
                                    4 июля - 10 августа
                                </h3>
                                <h4 class="schedule__item_subtitle">
                                    Регистрация на участие
                                </h4>
                            </div>

                            <div class="schedule__item">
                                <h3 class="schedule__item_title">
                                    5 – 10 августа
                                </h3>
                                <h4 class="schedule__item_subtitle">
                                    Квалификационный этап
                                </h4>
                                <p class="schedule__item_descr">
                                    Задача с автоматической проверкой. Участникам нужно будет реализовать сервис, соответствующий API, который будет дан в задаче, и способный пройти все проверки тестирующей системы
                                </p>
                            </div>
    
                            <div class="schedule__item">
                                <h3 class="schedule__item_title">
                                    13 – 20 августа
                                </h3>
                                <h4 class="schedule__item_subtitle">
                                    Финальный этап
                                </h4>
                                <p class="schedule__item_descr">
                                    Одна объемная нестандартная задача
                                </p>
                            </div>
                            <div class="schedule__item">
                                <h3 class="schedule__item_title">
                                    20 – 31 августа
                                </h3>
                                <h4 class="schedule__item_subtitle">
                                    Подведение итогов
                                </h4>
                                <p class="schedule__item_descr">
                                    Жюри проверяет работы и выставляет экспертную оценку
                                </p>
                            </div>
                            <div class="schedule__item">
                                <h3 class="schedule__item_title">
                                    31 августа
                                </h3>
                                <h4 class="schedule__item_subtitle">
                                    Итоги и награждения
                                </h4>
                                <p class="schedule__item_descr">
                                    Публикация итогов и награждение победителей
                                </p>
                            </div>
                        </div>
                        <div class="schedule__figure">
                            <picture><img src="img/schedule/scheasddule-figure.jpg" alt=""></picture>
                        </div>
                        <div class="schedule__figure schedule__figure-mob">
                            <picture><img src="img/schedule/scheasddule-figure.jpg" alt=""></picture>
                        </div>
                        <div class="schedule-bottom">
                            <a href="https://cups.online/ru/contests/itonecup_Java/registration/" class="btn promo__btn promo__btn__mod">
                                <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-inside-1_45_1358" fill="white">
                                    <path d="M140 70C140 108.66 108.66 140 70 140C31.3401 140 0 108.66 0 70C0 31.3401 31.3401 0 70 0C108.66 0 140 31.3401 140 70Z"/>
                                    </mask>
                                    <path d="M140 70C140 108.66 108.66 140 70 140C31.3401 140 0 108.66 0 70C0 31.3401 31.3401 0 70 0C108.66 0 140 31.3401 140 70Z"  fill="#B1EC52" class="svg-bg" />
                                    <path d="M137.717 70C137.717 107.399 107.399 137.717 70 137.717V142.283C109.921 142.283 142.283 109.921 142.283 70H137.717ZM70 137.717C32.6011 137.717 2.28333 107.399 2.28333 70H-2.28333C-2.28333 109.921 30.079 142.283 70 142.283V137.717ZM2.28333 70C2.28333 32.6011 32.6011 2.28333 70 2.28333V-2.28333C30.079 -2.28333 -2.28333 30.079 -2.28333 70H2.28333ZM70 2.28333C107.399 2.28333 137.717 32.6011 137.717 70H142.283C142.283 30.079 109.921 -2.28333 70 -2.28333V2.28333Z" fill="#B1EC52" mask="url(#path-1-inside-1_45_1358)" class="svg-bg"/>
                                    <path d="M124.32 78.0984C126.357 78.4225 127.947 77.4337 128.214 75.7564C128.375 74.7448 128.07 73.9182 127.385 73.3316L128.397 73.4926L128.569 72.4144L119.624 70.9908L119.441 72.1355L122.716 72.6567C121.936 73.0103 121.474 73.6873 121.319 74.6591C121.052 76.3363 122.257 77.7701 124.32 78.0984ZM124.506 76.927C123.016 76.6898 122.151 75.7743 122.331 74.6428C122.524 73.4315 123.587 72.7545 125.132 73.0002C126.662 73.2438 127.463 74.2174 127.27 75.4287C127.086 76.5868 125.984 77.1622 124.506 76.927Z" fill="#050505"/>
                                    <path d="M121.364 85.0017C121.106 84.4487 120.951 84.0146 120.894 83.6696C120.833 83.3374 120.866 82.9792 120.996 82.5823C121.417 81.3018 122.579 80.9176 123.881 81.2744L122.328 85.9993C122.477 86.0626 122.639 86.1301 122.806 86.1848C124.688 86.8034 126.186 86.1322 126.775 84.3396C127.373 82.5213 126.369 80.8718 124.397 80.2237C122.425 79.5756 120.702 80.3714 120.079 82.2664C119.729 83.3292 119.822 84.2111 120.484 85.4359L121.364 85.0017ZM124.692 81.5693C125.803 82.1187 126.233 83.012 125.896 84.0364C125.542 85.112 124.627 85.5207 123.497 85.2058L124.692 81.5693Z" fill="#050505"/>
                                    <path d="M122.039 93.9631L122.888 94.3754L124.867 90.302L118.902 87.4043L118.395 88.4469L123.512 90.9323L122.039 93.9631Z" fill="#050505"/>
                                    <path d="M118.934 101.628L117.601 98.2797C117.352 97.6263 116.99 96.7605 116.518 95.6524C117.141 96.125 117.806 96.6099 118.522 97.1148L120.923 98.8081L121.552 97.916L116.133 94.0942L115.418 95.1075L116.751 98.4556C117.08 99.2981 117.457 100.19 117.87 101.125C117.28 100.676 116.538 100.136 115.646 99.5073L113.421 97.9382L112.792 98.8303L118.211 102.652L118.934 101.628Z" fill="#050505"/>
                                    <path d="M114.067 106.948C113.599 107.451 113.063 107.671 112.033 107.67L112.042 108.709C113.264 108.741 114.025 108.418 114.769 107.618C116.063 106.227 115.936 104.305 114.396 102.873C112.846 101.432 110.957 101.425 109.635 102.846C108.873 103.665 108.627 104.485 108.819 105.842L109.816 105.719C109.717 104.579 109.869 104.039 110.356 103.516C110.797 103.042 111.314 102.842 111.917 102.906C112.521 102.989 113.075 103.265 113.588 103.742C114.575 104.66 114.957 105.99 114.067 106.948Z" fill="#050505"/>
                                    <path d="M106.879 113.82L107.477 114.55L111.802 111.001L111.203 110.272L109.484 111.683L105.875 107.286L104.979 108.022L108.588 112.418L106.879 113.82Z" fill="#050505"/>
                                    <path d="M98.1151 117.173C99.1576 118.953 100.931 119.554 102.397 118.696C103.281 118.178 103.726 117.418 103.745 116.516L104.262 117.4L105.204 116.848L100.626 109.033L99.6253 109.619L101.302 112.48C100.533 112.102 99.7164 112.174 98.8674 112.672C97.4019 113.53 97.0589 115.371 98.1151 117.173ZM99.1386 116.574C98.3754 115.271 98.5342 114.023 99.5228 113.444C100.581 112.824 101.779 113.215 102.57 114.564C103.353 115.902 103.109 117.138 102.051 117.758C101.039 118.351 99.8949 117.865 99.1386 116.574Z" fill="#050505"/>
                                    <path d="M93.0682 123.5L93.8102 119.973C93.9649 119.292 94.1421 118.37 94.362 117.186C94.6197 117.924 94.9047 118.696 95.2218 119.512L96.2851 122.252L97.303 121.857L94.9031 115.675L93.747 116.123L93.005 119.65C92.8132 120.534 92.6333 121.486 92.4602 122.492C92.2171 121.792 91.898 120.932 91.5029 119.915L90.5176 117.376L89.4997 117.771L91.8996 123.953L93.0682 123.5Z" fill="#050505"/>
                                    <path d="M81.9043 123.612C82.3294 125.63 83.8214 126.762 85.4833 126.412C86.4857 126.201 87.1486 125.621 87.4519 124.772L87.663 125.774L88.7314 125.549L86.8644 116.686L85.7301 116.925L86.4135 120.169C85.8046 119.567 85.007 119.377 84.0441 119.58C82.3822 119.93 81.4737 121.568 81.9043 123.612ZM83.065 123.368C82.7538 121.89 83.3 120.756 84.4212 120.52C85.6214 120.267 86.6337 121.018 86.956 122.548C87.2755 124.065 86.6522 125.161 85.4519 125.413C84.3044 125.655 83.3734 124.832 83.065 123.368Z" fill="#050505"/>
                                    <path d="M75.72 127.946L76.3004 125.727L76.8205 123.608L77.134 122.355L77.2662 122.683C77.7921 123.955 78.1858 124.9 78.4627 125.542L79.363 127.678L80.5863 127.589L77.588 120.808L77.6499 120.547C77.8595 119.72 78.1509 119.456 78.6886 119.416C78.9172 119.399 79.1611 119.408 79.407 119.444L79.5435 118.542C79.2274 118.471 78.8749 118.456 78.512 118.483C77.3962 118.565 76.9862 119.054 76.6459 120.309L74.5505 128.032L75.72 127.946Z" fill="#050505"/>
                                    <path d="M65.7495 128.061L66.337 121.455L67.4245 121.552L67.1833 124.264C67.0866 125.352 66.9919 126.263 66.8994 126.999C67.5006 126.173 68.0837 125.4 68.6473 124.692L70.875 121.859L72.1102 121.969L71.5226 128.574L70.4351 128.478L70.6955 125.551C70.7731 124.678 70.8594 123.86 70.9555 123.084C70.2337 124.048 69.6665 124.796 69.2258 125.339L66.9981 128.172L65.7495 128.061ZM66.2929 130.775L67.2596 130.861C67.3157 130.23 67.7507 129.903 68.4891 129.969C69.2276 130.035 69.5981 130.433 69.542 131.064L70.5221 131.151C70.6224 130.023 69.884 129.349 68.5548 129.231C67.2525 129.115 66.3932 129.647 66.2929 130.775Z" fill="#050505"/>
                                    <path d="M59.9129 126.615C59.243 126.461 58.7853 126.106 58.272 125.213L57.3759 125.74C57.958 126.815 58.6178 127.313 59.6817 127.558C61.5336 127.985 63.1358 126.916 63.6084 124.867C64.084 122.805 63.1482 121.164 61.2568 120.728C60.1667 120.477 59.3332 120.672 58.2533 121.516L58.8566 122.319C59.7961 121.664 60.3396 121.526 61.0357 121.687C61.6662 121.832 62.0976 122.181 62.3432 122.735C62.5726 123.3 62.6101 123.917 62.4525 124.6C62.1496 125.914 61.1869 126.909 59.9129 126.615Z" fill="#050505"/>
                                    <path d="M52.3979 125.684C53.7595 126.236 54.9979 125.836 55.4791 124.65C55.8894 123.638 55.5087 122.64 54.5229 122.022L57.4134 120.561L56.1642 120.055L53.3814 121.501L52.2322 121.035L53.1288 118.824L52.1045 118.409L49.6123 124.555L52.3979 125.684ZM51.8776 121.91L53.514 122.573C54.3759 122.922 54.7135 123.525 54.4298 124.224C54.1512 124.911 53.502 125.113 52.6151 124.754L50.9912 124.096L51.8776 121.91Z" fill="#050505"/>
                                    <path d="M35.8712 113.016C34.5744 114.619 34.6383 116.491 35.959 117.559C36.7557 118.203 37.6244 118.35 38.4744 118.049L37.8302 118.846L38.6793 119.532L44.3751 112.489L43.4736 111.761L41.3885 114.339C41.4709 113.487 41.1148 112.748 40.3496 112.13C39.0288 111.062 37.185 111.391 35.8712 113.016ZM36.7936 113.761C37.7429 112.588 38.9676 112.295 39.8586 113.015C40.8125 113.787 40.8691 115.046 39.8858 116.261C38.9111 117.467 37.6679 117.675 36.714 116.904C35.8021 116.166 35.8528 114.925 36.7936 113.761Z" fill="#050505"/>
                                    <path d="M31.3521 106.986C31.9602 107.038 32.414 107.12 32.7414 107.243C33.0598 107.355 33.354 107.562 33.6329 107.874C34.5328 108.877 34.286 110.076 33.3273 111.026L30.0068 107.323C29.8774 107.42 29.7379 107.527 29.6074 107.644C28.132 108.967 27.9665 110.599 29.2263 112.004C30.5041 113.429 32.435 113.382 33.9807 111.997C35.5264 110.611 35.6964 108.721 34.3646 107.236C33.6177 106.403 32.8068 106.044 31.4151 106.006L31.3521 106.986ZM32.6669 111.581C31.6366 112.27 30.6478 112.196 29.9279 111.394C29.172 110.551 29.2741 109.554 30.1113 108.731L32.6669 111.581Z" fill="#050505"/>
                                    <path d="M23.2253 103.066L22.4444 103.596L24.9869 107.344L30.4756 103.622L29.8248 102.662L25.1171 105.855L23.2253 103.066Z" fill="#050505"/>
                                    <path d="M18.2005 96.6779L21.7694 97.1818C22.46 97.2904 23.3917 97.4053 24.5881 97.5453C23.8685 97.852 23.1179 98.188 22.3243 98.5591L19.6624 99.8036L20.125 100.793L26.1325 97.9839L25.6071 96.8606L22.0382 96.3567C21.1432 96.2247 20.1813 96.1089 19.165 96.0038C19.848 95.7143 20.684 95.3383 21.673 94.8759L24.1395 93.7227L23.6769 92.7338L17.6695 95.5424L18.2005 96.6779Z" fill="#050505"/>
                                    <path d="M15.977 89.7403C15.7746 89.0833 15.8518 88.5095 16.3669 87.6175L15.4619 87.1064C14.824 88.149 14.7241 88.9695 15.0455 90.0129C15.6049 91.8293 17.3334 92.6792 19.3431 92.0605C21.3656 91.4378 22.3155 89.8056 21.7442 87.9506C21.4149 86.8814 20.8281 86.2582 19.5565 85.7471L19.1643 86.6717C20.202 87.1561 20.5936 87.5574 20.8038 88.2401C20.9943 88.8584 20.9092 89.4065 20.5525 89.897C20.179 90.3787 19.6638 90.7207 18.9939 90.9269C17.7057 91.3235 16.3618 90.9898 15.977 89.7403Z" fill="#050505"/>
                                    <path d="M13.6104 80.0763L12.6792 80.2282L13.5798 85.749L14.511 85.5971L14.153 83.4021L19.7669 82.4866L19.5803 81.3425L13.9663 82.2581L13.6104 80.0763Z" fill="#050505"/>
                                    <path d="M15.0906 70.6165C13.0283 70.6165 11.6131 71.8431 11.6131 73.5414C11.6131 74.5658 12.0444 75.3341 12.8127 75.8059H11.7883V76.8977H20.8461V75.7385H17.5303C18.2447 75.2667 18.5951 74.5254 18.5951 73.5414C18.5951 71.8431 17.1799 70.6165 15.0906 70.6165ZM15.0906 71.8027C16.6003 71.8027 17.5977 72.571 17.5977 73.7167C17.5977 74.9432 16.6542 75.7789 15.0906 75.7789C13.5405 75.7789 12.597 74.9432 12.597 73.7167C12.597 72.544 13.5945 71.8027 15.0906 71.8027Z" fill="#050505"/>
                                    <path d="M12.1496 63.1082L14.822 65.5262C15.3329 66.0033 16.0399 66.6209 16.9519 67.4075C16.1841 67.258 15.3742 67.1155 14.509 66.9778L11.6071 66.5159L11.4354 67.5941L17.9847 68.6364L18.1796 67.4118L15.5073 64.9938C14.8403 64.3827 14.1088 63.7476 13.3262 63.0908C14.0541 63.2339 14.9572 63.3913 16.0354 63.5629L18.7243 63.9908L18.896 62.9126L12.3467 61.8703L12.1496 63.1082Z" fill="#050505"/>
                                    <path d="M17.6284 53.4699C15.6692 52.826 13.9416 53.5494 13.4111 55.1628C13.0912 56.1359 13.261 57.0004 13.8435 57.6885L12.8703 57.3686L12.5293 58.4058L21.1344 61.2339L21.4964 60.1327L18.3464 59.0974C19.1724 58.8723 19.7369 58.2774 20.0442 57.3427C20.5746 55.7293 19.6132 54.1222 17.6284 53.4699ZM17.2579 54.5967C18.6921 55.0681 19.3997 56.1094 19.0419 57.1977C18.6588 58.363 17.5014 58.8623 16.016 58.3741C14.5434 57.8901 13.9081 56.8016 14.2912 55.6364C14.6574 54.5224 15.8366 54.1296 17.2579 54.5967Z" fill="#050505"/>
                                    <path d="M17.0088 45.8493L18.6308 47.4703L20.1977 48.9893L21.1209 49.8923L20.7709 49.8408C19.407 49.6524 18.3931 49.5155 17.6992 49.4305L15.4001 49.1287L14.8599 50.2299L22.227 51.0652L22.4214 51.2506C23.0288 51.8487 23.1101 52.2338 22.8726 52.7179C22.7717 52.9236 22.6406 53.1296 22.4854 53.3237L23.1951 53.8969C23.4163 53.6601 23.607 53.3632 23.7673 53.0365C24.26 52.0321 24.0444 51.431 23.1331 50.5037L17.5253 44.7965L17.0088 45.8493Z" fill="#050505"/>
                                    <path d="M21.7516 37.4241L27.1712 41.2459L26.5419 42.138L24.3167 40.5689C23.4245 39.9397 22.6832 39.4005 22.0929 38.9512C22.5059 39.8857 22.8826 40.7781 23.2119 41.6206L24.545 44.9686L23.8302 45.9819L18.4105 42.1602L19.0399 41.268L21.4413 42.9614C22.1573 43.4663 22.8215 43.9512 23.4449 44.4237C22.9729 43.3157 22.6104 42.4499 22.3621 41.7965L21.029 38.4484L21.7516 37.4241ZM19.1309 36.5327L18.5714 37.3257C19.0892 37.6908 19.1535 38.2309 18.7261 38.8367C18.2988 39.4425 17.7683 39.5632 17.2506 39.1981L16.6834 40.0021C17.6087 40.6546 18.5628 40.3543 19.332 39.2639C20.0857 38.1956 20.0562 37.1852 19.1309 36.5327Z" fill="#050505"/>
                                    <path d="M25.8392 33.1773C26.3074 32.6739 26.843 32.4542 27.8732 32.4549L27.864 31.4158C26.642 31.3839 25.8811 31.7072 25.1376 32.5067C23.8433 33.8983 23.9704 35.8201 25.5104 37.2518C27.0603 38.6927 28.9491 38.7003 30.271 37.279C31.0329 36.4598 31.2797 35.6402 31.0873 34.2835L30.0902 34.4056C30.1889 35.5463 30.0369 36.0859 29.5503 36.609C29.1097 37.0828 28.5924 37.2828 27.9892 37.2189C27.3852 37.1359 26.8315 36.8604 26.3182 36.3832C25.331 35.4655 24.9488 34.1347 25.8392 33.1773Z" fill="#050505"/>
                                    <path d="M30.5014 26.9987C29.3422 27.9014 29.0689 29.1735 29.8558 30.1836C30.5268 31.0449 31.5815 31.2144 32.6097 30.67L32.4287 33.9031L33.4922 33.0749L33.6319 29.9423L34.6102 29.1804L36.0764 31.0625L36.9485 30.3834L32.873 25.1519L30.5014 26.9987ZM34.0304 28.4361L32.6372 29.521C31.9035 30.0924 31.213 30.0834 30.7491 29.488C30.2935 28.9031 30.4432 28.2399 31.1983 27.6519L32.5808 26.5753L34.0304 28.4361Z" fill="#050505"/>
                                    <path d="M49.6771 18.9955C48.938 17.0702 47.2856 16.1884 45.7 16.7968C44.7436 17.1638 44.1809 17.8418 44.0158 18.728L43.6487 17.7717L42.6294 18.1628L45.8755 26.619L46.9578 26.2037L45.7694 23.1081C46.4659 23.6061 47.2836 23.6676 48.2023 23.3151C49.7879 22.7067 50.4258 20.946 49.6771 18.9955ZM48.5697 19.4205C49.1107 20.8298 48.7509 22.0363 47.6812 22.4467C46.5361 22.8862 45.4177 22.3047 44.8573 20.845C44.3018 19.3979 44.7439 18.2176 45.8891 17.7782C46.9839 17.3581 48.0335 18.0237 48.5697 19.4205Z" fill="#050505"/>
                                    <path d="M57.0023 18.11C56.6532 18.6105 56.3554 18.9625 56.0854 19.1846C55.8285 19.404 55.5023 19.5553 55.0934 19.6414C53.7744 19.9192 52.8594 19.1063 52.5156 17.8012L57.3826 16.7764C57.3624 16.6154 57.3395 16.4411 57.3034 16.2697C56.895 14.3308 55.5634 13.3715 53.7168 13.7603C51.8439 14.1547 50.9201 15.8506 51.3479 17.8818C51.7758 19.913 53.3281 21.0049 55.2802 20.5939C56.375 20.3633 57.0913 19.8406 57.8194 18.6542L57.0023 18.11ZM52.3641 16.9515C52.2828 15.7152 52.8402 14.8953 53.8953 14.6732C55.0033 14.4399 55.8156 15.0264 56.11 16.1628L52.3641 16.9515Z" fill="#050505"/>
                                    <path d="M64.6779 12.9866L64.6124 12.0454L60.0944 12.3595L60.5546 18.9752L61.711 18.8948L61.3162 13.2204L64.6779 12.9866Z" fill="#050505"/>
                                    <path d="M73.1027 11.8469L70.8641 14.6713C70.4213 15.2123 69.8513 15.9581 69.1258 16.9196C69.2249 16.1436 69.3143 15.3262 69.3953 14.4538L69.6668 11.528L68.5797 11.4271L67.9668 18.0303L69.2016 18.1449L71.4401 15.3204C72.0065 14.6149 72.5925 13.8436 73.1969 13.0198C73.1015 13.7555 73.0034 14.6668 72.9025 15.754L72.6508 18.4651L73.738 18.566L74.3508 11.9627L73.1027 11.8469Z" fill="#050505"/>
                                    <path d="M79.9055 13.3604C80.5753 13.5148 81.033 13.8693 81.5464 14.7623L82.4425 14.2358C81.8604 13.161 81.2006 12.663 80.1367 12.4178C78.2847 11.9908 76.6825 13.06 76.21 15.1089C75.7344 17.171 76.6702 18.8115 78.5615 19.2475C79.6517 19.4988 80.4852 19.3037 81.5651 18.4599L80.9618 17.6568C80.0223 18.3117 79.4788 18.4492 78.7827 18.2887C78.1522 18.1434 77.7208 17.7949 77.4752 17.2403C77.2458 16.6756 77.2083 16.0584 77.3658 15.3754C77.6687 14.062 78.6314 13.0667 79.9055 13.3604Z" fill="#050505"/>
                                    <path d="M89.7248 16.2393L90.0629 15.3584L84.8405 13.3544L84.5023 14.2353L86.5787 15.0321L84.5402 20.3423L85.6225 20.7576L87.661 15.4473L89.7248 16.2393Z" fill="#050505"/>
                                    <path d="M96.9914 22.1915C98.0273 20.4084 97.6776 18.5686 96.2089 17.7157C95.3231 17.2013 94.442 17.1884 93.6481 17.6158L94.1627 16.73L93.2186 16.1817L88.6684 24.0138L89.6709 24.5959L91.3365 21.7288C91.3856 22.5834 91.8507 23.2588 92.7015 23.7529C94.1702 24.6058 95.9418 23.998 96.9914 22.1915ZM95.9656 21.5959C95.2073 22.9012 94.0418 23.3778 93.0511 22.8025C91.9904 22.1865 91.7417 20.951 92.5271 19.599C93.3058 18.2587 94.5024 17.8625 95.5631 18.4785C96.5772 19.0674 96.7172 20.3022 95.9656 21.5959Z" fill="#050505"/>
                                    <path d="M104.885 23.3549L101.452 24.4528C100.782 24.6553 99.8934 24.9569 98.7551 25.351C99.2698 24.7619 99.7997 24.133 100.353 23.4538L102.209 21.1758L101.363 20.4863L97.1737 25.6275L98.1352 26.4106L101.568 25.3127C102.432 25.0424 103.348 24.7285 104.309 24.3812C103.82 24.9389 103.231 25.641 102.541 26.4874L100.821 28.5982L101.668 29.2877L105.857 24.1465L104.885 23.3549Z" fill="#050505"/>
                                    <path d="M110.617 33.0663C112.157 31.6954 112.399 29.8384 111.27 28.5698C110.589 27.8047 109.756 27.5175 108.868 27.6759L109.633 26.9949L108.907 26.1794L102.14 32.2006L102.911 33.0664L105.388 30.8622C105.168 31.6895 105.399 32.4762 106.054 33.2112C107.183 34.4797 109.056 34.4551 110.617 33.0663ZM109.828 32.1803C108.7 33.1838 107.444 33.273 106.682 32.4172C105.867 31.501 106.016 30.2496 107.184 29.2102C108.342 28.1798 109.603 28.1768 110.418 29.093C111.198 29.9689 110.946 31.1857 109.828 32.1803Z" fill="#050505"/>
                                    <path d="M117.43 36.2236L115.215 36.8199L113.117 37.4196L111.873 37.7688L112.093 37.4912C112.937 36.4036 113.561 35.5935 113.981 35.0347L115.39 33.1932L114.705 32.1757L110.305 38.1418L110.047 38.2177C109.226 38.4455 108.851 38.3238 108.55 37.8765C108.422 37.6864 108.309 37.4701 108.218 37.2387L107.367 37.5676C107.462 37.8774 107.624 38.1907 107.828 38.4926C108.452 39.4207 109.081 39.5339 110.339 39.2071L118.085 37.1964L117.43 36.2236Z" fill="#050505"/>
                                    <path d="M122.382 44.5746L116.364 47.3609L115.905 46.3702L118.376 45.2262C119.367 44.7675 120.204 44.3946 120.888 44.1076C119.872 43.9987 118.911 43.8794 118.016 43.744L114.449 43.2269L113.928 42.1017L119.946 39.3154L120.405 40.3061L117.738 41.5407C116.943 41.9088 116.191 42.242 115.471 42.546C116.667 42.6904 117.598 42.8088 118.288 42.92L121.855 43.4371L122.382 44.5746ZM124.463 42.7495L124.055 41.8689C123.48 42.1351 122.98 41.9211 122.668 41.2484C122.357 40.5757 122.517 40.0559 123.092 39.7897L122.678 38.8969C121.651 39.3726 121.435 40.349 121.996 41.5599C122.545 42.7463 123.435 43.2252 124.463 42.7495Z" fill="#050505"/>
                                    <path d="M124.09 50.4508C124.289 51.1085 124.21 51.682 123.692 52.572L124.595 53.0866C125.237 52.0464 125.34 51.2263 125.022 50.1816C124.47 48.3632 122.744 47.5067 120.732 48.1178C118.707 48.7328 117.751 50.3615 118.316 52.2186C118.641 53.2891 119.225 53.9145 120.495 54.4304L120.891 53.5073C119.855 53.0189 119.465 52.6162 119.257 51.9327C119.069 51.3136 119.156 50.7659 119.515 50.2767C119.89 49.7964 120.407 49.4564 121.077 49.2527C122.367 48.861 123.71 49.1998 124.09 50.4508Z" fill="#050505"/>
                                    <path d="M127.046 57.4605C126.848 56.0046 125.886 55.1286 124.617 55.3007C123.535 55.4474 122.858 56.2737 122.812 57.4362L120.108 55.6538L120.29 56.9894L122.927 58.6856L123.094 59.9144L120.73 60.2351L120.879 61.3303L127.45 60.439L127.046 57.4605ZM124.029 59.7876L123.792 58.0379C123.667 57.1163 124.021 56.5241 124.769 56.4226C125.504 56.323 126.002 56.7859 126.131 57.7342L126.366 59.4706L124.029 59.7876Z" fill="#050505"/>
                                </svg>                                    
                            </a>
                            <p class="promo__descr schedule__descr">
                                регистрация открыта <br> до 10 августа
                            </p>
                        </div>
                        <!-- /.schedule-bottom -->
                        
                    </div>
                    <div class="col-6 schedule__right wow animate__animated  animate__fadeInRight">
                        <div class="schedule__item">
                            <h3 class="schedule__item_title">
                                4 июля - 10 августа
                            </h3>
                            <h4 class="schedule__item_subtitle">
                                Регистрация на участие
                            </h4>
                        </div>

                        <div class="schedule__item">
                            <h3 class="schedule__item_title">
                                5 – 10 августа
                            </h3>
                            <h4 class="schedule__item_subtitle">
                                Квалификационный этап
                            </h4>
                            <p class="schedule__item_descr">
                                Задача с автоматической проверкой. Участникам нужно будет реализовать сервис, соответствующий API, который будет дан в задаче, и способный пройти все проверки тестирующей системы
                            </p>
                        </div>

                        <div class="schedule__item">
                            <h3 class="schedule__item_title">
                                13 – 20 августа
                            </h3>
                            <h4 class="schedule__item_subtitle">
                                Финальный этап
                            </h4>
                            <p class="schedule__item_descr">
                                Одна объемная нестандартная задача
                            </p>
                        </div>
                        <div class="schedule__item">
                            <h3 class="schedule__item_title">
                                20 – 31 августа
                            </h3>
                            <h4 class="schedule__item_subtitle">
                                Подведение итогов
                            </h4>
                            <p class="schedule__item_descr">
                                Жюри проверяет работы и выставляет экспертную оценку
                            </p>
                        </div>
                        <div class="schedule__item">
                            <h3 class="schedule__item_title">
                                31 августа
                            </h3>
                            <h4 class="schedule__item_subtitle">
                                Итоги и награждения
                            </h4>
                            <p class="schedule__item_descr">
                                Публикация итогов и награждение победителей
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="prizes" id="prizes">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="prizes__title">
                            Призы
                        </h2>
                    </div>
                </div>
                <div class="row prizes__items">
                    <div class="promo__label prizes__label wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <span>
                            общий призовой фонд
                        </span>
                        <br>
                        740 000 ₽

                    </div>
                </div>
                <div class="prizes__list">
                    <div class="prizes__item">
                        <span>250 000 ₽</span>
                        1 место
                    </div>
                    <!-- /.prizes__item -->
                    <div class="prizes__item">
                        <span>180 000 ₽</span>
                        2 место
                    </div>
                    <!-- /.prizes__item -->
                    <div class="prizes__item">
                        <span>130 000 ₽</span>
                        3 место
                    </div>
                    <!-- /.prizes__item -->
                    <div class="prizes__item">
                        <span>100 000 ₽</span>
                        4 место
                    </div>
                    <!-- /.prizes__item -->
                    <div class="prizes__item">
                        <span>80 000 ₽</span>
                        5 место
                    </div>
                    <!-- /.prizes__item -->
                </div>
                <!-- /.prizes__list -->
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 col-md-6">
                        <img src="img/prizes/merch.png" alt="фирменный мерч">
                    </div>
                    <!-- /.col-6 -->
                    <div class="col-12 col-lg-6 col-md-6 d-flex justify-content-center ">
                        <img src="img/prizes/merch-text.png" alt="фирменный мерч" class="prizes__img">
                    </div>
                    <!-- /.col-6 -->
                </div>
                <!-- /.row -->
            </div>
            
        </section>

        <section class="employment" id="employment">
            <div class="container">
                <div class="row">
                    <div class="col-6 wow animate__animated animate__fadeIn" data-wow-duration="1s" >
                        <h2 class="employment__title">
                            Трудоустройство
                        </h2>
                        <p class="employment__subtitle">
                            Лучшим участникам поступят предложения о работе в крутой технологической компании — <br> IT_ONE.
                        </p>
                        <div class="employment-img">
                            <a href="https://www.it-one.ru/career/" class="employment__btn">
                                <picture><img src="img/employment/bg-logo.png" alt=""></picture>
                            </a>
                            <div class="employment__img img-1">
                                
                                <picture><img src="img/employment/emp-item.png" alt=""></picture>
                            </div>
                        </div>
                        <!-- /.employment-img -->
                        
                        
                    </div>
                    <div class="col-6 col-link wow animate__animated animate__fadeIn" data-wow-duration="1.5s" >
                        <div class="employment__img img-2">
                            <picture><img src="img/employment/employment.png" alt=""></picture>
                        </div>
                        <div class="employment__img img-2-mob">
                            <picture><img src="img/employment/employment.png" alt=""></picture>
                        </div>
                        <div class="employment__wrapper">
                            <p class="employment__subtitle">
                                Компания IT_ONE работает над крупнейшими проектами в области цифровой трансформации в России.
                            </p>
                            <p class="employment__subtitle">
                                Присоединившись к команде профессионалов, вы сможете реализовывать амбициозные идеи, ускорять темпы развития цифровизации и менять мир&nbsp;к лучшему!
                                &nbsp;
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-6 col-link wow animate__animated animate__fadeIn" data-wow-duration="1.5s" >
                        
                    </div>
                    <div class="col-6 wow animate__animated animate__fadeIn" data-wow-duration="2.5s" >
                        
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- <section class="jury" id="jury">
            <div class="container">
                <h2 class="jury__title">
                    Члены жюри
                </h2>
                <div class="row jury__items justify-content-between">
                    <div class="col-3">
                        <div class="jury__item">
                            <div class="jury__item_img">
                                <picture><source srcset="img/jury/photos/photo-1.webp" type="image/webp"><img src="img/jury/photos/photo-1.png" alt=""></picture>
                            </div>
                            <p class="jury__item_name">
                                Михайлов Олег
                            </p>
                            <p class="jury__item_company">
                                ведущий разработчик, Wildlings, «БКС Мир Инвестиций»
                            </p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="jury__item">
                            <div class="jury__item_img">
                                <picture><source srcset="img/jury/photos/photo-2.webp" type="image/webp"><img src="img/jury/photos/photo-2.png" alt=""></picture>
                            </div>
                            <p class="jury__item_name">
                                Кондратьева Мирослава
                            </p>
                            <p class="jury__item_company">
                                руководитель отдела разработки, IT_Selection
                            </p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="jury__item">
                            <div class="jury__item_img">
                                <picture><source srcset="img/jury/photos/photo-3.webp" type="image/webp"><img src="img/jury/photos/photo-3.png" alt=""></picture>
                            </div>
                            <p class="jury__item_name">
                                Васильева Ярослава 
                            </p>
                            <p class="jury__item_company">
                                ведущий разработчик, Iron Bank, «БКС Мир Инвестиций»
                            </p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="jury__item">
                            <div class="jury__item_img">
                                <picture><source srcset="img/jury/photos/photo-4.webp" type="image/webp"><img src="img/jury/photos/photo-4.png" alt=""></picture>
                            </div>
                            <p class="jury__item_name">
                                Артемьев Влад
                            </p>
                            <p class="jury__item_company">
                                ведущий аналитик веба, команда Trading Fronts, «БКС Мир Инвестиций»
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="organizers" id="organizers">
            <div class="container">
                <h2 class="organizers__title">
                    Организаторы
                </h2>
                <div class="row organizers__items">
                    <div class="col-6 p-0">
                        <div class="organizers__item">
                            <div class="organizers__item_logo logo-1">
                                <picture><source srcset="img/organizers/item-1.webp" type="image/webp"><img src="img/organizers/item-1.png" alt=""></picture>
                            </div>
                            <p class="organizers__item_descr">
                                Компания разрабатывает ПО для крупных <br> игроков российского бизнеса и ускоряет <br> цифровизацию с помощью новейших <br> подходов и ведущих мировых практик
                            </p>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <div class="organizers__item">
                            <div class="organizers__item_logo logo-2">
                                <picture><source srcset="img/organizers/item-2.webp" type="image/webp"><img src="img/organizers/item-2.png" alt=""></picture>
                                <!-- <span class="pic">
                                    <picture><source srcset="img/organizers/pic-1.webp" type="image/webp"><img src="img/organizers/pic-1.png" alt=""></picture>
                                </span> -->
                                
                            </div>
                            <p class="organizers__item_descr">
                                Компания разрабатывает новые <br> высоконагруженные технологические решения <br> для Газпромбанка, внедряет открытые API <br> и развивает искусственный интеллект.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <div class="organizers__item">
                            <div class="organizers__item_logo logo-3">
                                <picture><img  src="img/organizers/item-3.png" alt=""></picture>
                                <!-- <span class="pic">
                                    <picture><source srcset="img/organizers/pic-2.webp" type="image/webp"><img src="img/organizers/pic-2.png" alt=""></picture>
                                </span> -->
                            </div>
                            <p class="organizers__item_descr">
                                Современный научно-технологический <br> комплекс по разработке и продвижению <br> новых технологий.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <div class="organizers__item">
                            <div class="organizers__item_logo logo-4">
                                <picture><img  src="img/organizers/item-4.png" alt=""></picture>
                            </div>
                            <p class="organizers__item_descr">
								Платформа для проведения ИТ-чемпионатов, технологический бизнес-юнит VK. <br> Специализируется на оценке навыков <br> ИТ-специалистов.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq" id="faq">
            <div class="container">
                <h2 class="faq__title">
                    FAQ
                </h2>
                <div class="faq__items">
                    <div class="faq__item">
                        <div class="faq__item_arrow">
                            <span></span>
                            <span></span>
                        </div>
                        <button class="faq__item_btn">
                            Кто может принять участие в чемпионате?
                        </button>
                        <p class="faq__item_text">
                            Участниками могут быть физические лица, достигшие на момент начала проведения чемпионата 18 лет, а также являющиеся гражданами РФ или стран СНГ.
                        </p>
                    </div>
                    <div class="faq__item">
                        <div class="faq__item_arrow">
                            <span></span>
                            <span></span>
                        </div>
                        <button class="faq__item_btn">
                            В какие сроки проходит регистрация на чемпионат? 
                        </button>
                        <p class="faq__item_text">
                            Регистрация стартует 4 июля и продлится до 10 августа включительно.
                        </p>
                    </div>
                    <div class="faq__item">
                        <div class="faq__item_arrow">
                            <span></span>
                            <span></span>
                        </div>
                        <button class="faq__item_btn">
                            Насколько сложные задачи меня ждут на чемпионате? 
                        </button>
                        <p class="faq__item_text">
                            Задачи на чемпионате рассчитаны на Java-программистов уровня middle и senior.
                        </p>
                    </div>
                    <div class="faq__item">
                        <div class="faq__item_arrow">
                            <span></span>
                            <span></span>
                        </div>
                        <button class="faq__item_btn">
                            Из каких этапов состоит чемпионат?
                        </button>
                        <p class="faq__item_text">
                            Чемпионат состоит из двух этапов – квалификационного и финального. Все участники квалификационного раунда попадают в финал. В финале участникам предстоит решить одну объемную нестандартную задачу.
                        </p>
                    </div>
                    <div class="faq__item">
                        <div class="faq__item_arrow">
                            <span></span>
                            <span></span>
                        </div>
                        <button class="faq__item_btn">
                            Где смогут общаться участники чемпионата? 
                        </button>
                        <p class="faq__item_text">
                            Для оперативной поддержки участников чемпионата создан Telegram-чат (ссылка: https://t.me/itonecup_Java), где вы сможете пообщаться с другими участниками чемпионата или задать интересующие вас вопросы. Дополнительно можно написать на почту support@cups.online
                        </p>
                    </div>
                    <div class="faq__item">
                        <div class="faq__item_arrow">
                            <span></span>
                            <span></span>
                        </div>
                        <button class="faq__item_btn">
                            У меня вопрос, которого нет в списке. Как я могу его задать?
                        </button>
                        <p class="faq__item_text">                    
                            Для связи доступен Telegram-чат (ссылка:https://t.me/itonecup_Java), где вы сможете задать свои вопросы и получить оперативный ответ. Также вы можете написать вопрос нам на почту: support@cups.online
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bottom" id="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="0.7s">
                        <h2 class="promo__title bottom__title">
                            Регистрируйся уже сейчас, <br>
                            чтобы приступить к решению <br>
                            задач <span>одним из первых</span>

                            <a href="https://cups.online/ru/contests/itonecup_Java/registration/" class="btn promo__btn promo__btn__mod">
                                <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-inside-1_45_1358" fill="white">
                                    <path d="M140 70C140 108.66 108.66 140 70 140C31.3401 140 0 108.66 0 70C0 31.3401 31.3401 0 70 0C108.66 0 140 31.3401 140 70Z"/>
                                    </mask>
                                    <path d="M140 70C140 108.66 108.66 140 70 140C31.3401 140 0 108.66 0 70C0 31.3401 31.3401 0 70 0C108.66 0 140 31.3401 140 70Z"  fill="#B1EC52" class="svg-bg" />
                                    <path d="M137.717 70C137.717 107.399 107.399 137.717 70 137.717V142.283C109.921 142.283 142.283 109.921 142.283 70H137.717ZM70 137.717C32.6011 137.717 2.28333 107.399 2.28333 70H-2.28333C-2.28333 109.921 30.079 142.283 70 142.283V137.717ZM2.28333 70C2.28333 32.6011 32.6011 2.28333 70 2.28333V-2.28333C30.079 -2.28333 -2.28333 30.079 -2.28333 70H2.28333ZM70 2.28333C107.399 2.28333 137.717 32.6011 137.717 70H142.283C142.283 30.079 109.921 -2.28333 70 -2.28333V2.28333Z" fill="#B1EC52" mask="url(#path-1-inside-1_45_1358)" class="svg-bg"/>
                                    <path d="M124.32 78.0984C126.357 78.4225 127.947 77.4337 128.214 75.7564C128.375 74.7448 128.07 73.9182 127.385 73.3316L128.397 73.4926L128.569 72.4144L119.624 70.9908L119.441 72.1355L122.716 72.6567C121.936 73.0103 121.474 73.6873 121.319 74.6591C121.052 76.3363 122.257 77.7701 124.32 78.0984ZM124.506 76.927C123.016 76.6898 122.151 75.7743 122.331 74.6428C122.524 73.4315 123.587 72.7545 125.132 73.0002C126.662 73.2438 127.463 74.2174 127.27 75.4287C127.086 76.5868 125.984 77.1622 124.506 76.927Z" fill="#050505"/>
                                    <path d="M121.364 85.0017C121.106 84.4487 120.951 84.0146 120.894 83.6696C120.833 83.3374 120.866 82.9792 120.996 82.5823C121.417 81.3018 122.579 80.9176 123.881 81.2744L122.328 85.9993C122.477 86.0626 122.639 86.1301 122.806 86.1848C124.688 86.8034 126.186 86.1322 126.775 84.3396C127.373 82.5213 126.369 80.8718 124.397 80.2237C122.425 79.5756 120.702 80.3714 120.079 82.2664C119.729 83.3292 119.822 84.2111 120.484 85.4359L121.364 85.0017ZM124.692 81.5693C125.803 82.1187 126.233 83.012 125.896 84.0364C125.542 85.112 124.627 85.5207 123.497 85.2058L124.692 81.5693Z" fill="#050505"/>
                                    <path d="M122.039 93.9631L122.888 94.3754L124.867 90.302L118.902 87.4043L118.395 88.4469L123.512 90.9323L122.039 93.9631Z" fill="#050505"/>
                                    <path d="M118.934 101.628L117.601 98.2797C117.352 97.6263 116.99 96.7605 116.518 95.6524C117.141 96.125 117.806 96.6099 118.522 97.1148L120.923 98.8081L121.552 97.916L116.133 94.0942L115.418 95.1075L116.751 98.4556C117.08 99.2981 117.457 100.19 117.87 101.125C117.28 100.676 116.538 100.136 115.646 99.5073L113.421 97.9382L112.792 98.8303L118.211 102.652L118.934 101.628Z" fill="#050505"/>
                                    <path d="M114.067 106.948C113.599 107.451 113.063 107.671 112.033 107.67L112.042 108.709C113.264 108.741 114.025 108.418 114.769 107.618C116.063 106.227 115.936 104.305 114.396 102.873C112.846 101.432 110.957 101.425 109.635 102.846C108.873 103.665 108.627 104.485 108.819 105.842L109.816 105.719C109.717 104.579 109.869 104.039 110.356 103.516C110.797 103.042 111.314 102.842 111.917 102.906C112.521 102.989 113.075 103.265 113.588 103.742C114.575 104.66 114.957 105.99 114.067 106.948Z" fill="#050505"/>
                                    <path d="M106.879 113.82L107.477 114.55L111.802 111.001L111.203 110.272L109.484 111.683L105.875 107.286L104.979 108.022L108.588 112.418L106.879 113.82Z" fill="#050505"/>
                                    <path d="M98.1151 117.173C99.1576 118.953 100.931 119.554 102.397 118.696C103.281 118.178 103.726 117.418 103.745 116.516L104.262 117.4L105.204 116.848L100.626 109.033L99.6253 109.619L101.302 112.48C100.533 112.102 99.7164 112.174 98.8674 112.672C97.4019 113.53 97.0589 115.371 98.1151 117.173ZM99.1386 116.574C98.3754 115.271 98.5342 114.023 99.5228 113.444C100.581 112.824 101.779 113.215 102.57 114.564C103.353 115.902 103.109 117.138 102.051 117.758C101.039 118.351 99.8949 117.865 99.1386 116.574Z" fill="#050505"/>
                                    <path d="M93.0682 123.5L93.8102 119.973C93.9649 119.292 94.1421 118.37 94.362 117.186C94.6197 117.924 94.9047 118.696 95.2218 119.512L96.2851 122.252L97.303 121.857L94.9031 115.675L93.747 116.123L93.005 119.65C92.8132 120.534 92.6333 121.486 92.4602 122.492C92.2171 121.792 91.898 120.932 91.5029 119.915L90.5176 117.376L89.4997 117.771L91.8996 123.953L93.0682 123.5Z" fill="#050505"/>
                                    <path d="M81.9043 123.612C82.3294 125.63 83.8214 126.762 85.4833 126.412C86.4857 126.201 87.1486 125.621 87.4519 124.772L87.663 125.774L88.7314 125.549L86.8644 116.686L85.7301 116.925L86.4135 120.169C85.8046 119.567 85.007 119.377 84.0441 119.58C82.3822 119.93 81.4737 121.568 81.9043 123.612ZM83.065 123.368C82.7538 121.89 83.3 120.756 84.4212 120.52C85.6214 120.267 86.6337 121.018 86.956 122.548C87.2755 124.065 86.6522 125.161 85.4519 125.413C84.3044 125.655 83.3734 124.832 83.065 123.368Z" fill="#050505"/>
                                    <path d="M75.72 127.946L76.3004 125.727L76.8205 123.608L77.134 122.355L77.2662 122.683C77.7921 123.955 78.1858 124.9 78.4627 125.542L79.363 127.678L80.5863 127.589L77.588 120.808L77.6499 120.547C77.8595 119.72 78.1509 119.456 78.6886 119.416C78.9172 119.399 79.1611 119.408 79.407 119.444L79.5435 118.542C79.2274 118.471 78.8749 118.456 78.512 118.483C77.3962 118.565 76.9862 119.054 76.6459 120.309L74.5505 128.032L75.72 127.946Z" fill="#050505"/>
                                    <path d="M65.7495 128.061L66.337 121.455L67.4245 121.552L67.1833 124.264C67.0866 125.352 66.9919 126.263 66.8994 126.999C67.5006 126.173 68.0837 125.4 68.6473 124.692L70.875 121.859L72.1102 121.969L71.5226 128.574L70.4351 128.478L70.6955 125.551C70.7731 124.678 70.8594 123.86 70.9555 123.084C70.2337 124.048 69.6665 124.796 69.2258 125.339L66.9981 128.172L65.7495 128.061ZM66.2929 130.775L67.2596 130.861C67.3157 130.23 67.7507 129.903 68.4891 129.969C69.2276 130.035 69.5981 130.433 69.542 131.064L70.5221 131.151C70.6224 130.023 69.884 129.349 68.5548 129.231C67.2525 129.115 66.3932 129.647 66.2929 130.775Z" fill="#050505"/>
                                    <path d="M59.9129 126.615C59.243 126.461 58.7853 126.106 58.272 125.213L57.3759 125.74C57.958 126.815 58.6178 127.313 59.6817 127.558C61.5336 127.985 63.1358 126.916 63.6084 124.867C64.084 122.805 63.1482 121.164 61.2568 120.728C60.1667 120.477 59.3332 120.672 58.2533 121.516L58.8566 122.319C59.7961 121.664 60.3396 121.526 61.0357 121.687C61.6662 121.832 62.0976 122.181 62.3432 122.735C62.5726 123.3 62.6101 123.917 62.4525 124.6C62.1496 125.914 61.1869 126.909 59.9129 126.615Z" fill="#050505"/>
                                    <path d="M52.3979 125.684C53.7595 126.236 54.9979 125.836 55.4791 124.65C55.8894 123.638 55.5087 122.64 54.5229 122.022L57.4134 120.561L56.1642 120.055L53.3814 121.501L52.2322 121.035L53.1288 118.824L52.1045 118.409L49.6123 124.555L52.3979 125.684ZM51.8776 121.91L53.514 122.573C54.3759 122.922 54.7135 123.525 54.4298 124.224C54.1512 124.911 53.502 125.113 52.6151 124.754L50.9912 124.096L51.8776 121.91Z" fill="#050505"/>
                                    <path d="M35.8712 113.016C34.5744 114.619 34.6383 116.491 35.959 117.559C36.7557 118.203 37.6244 118.35 38.4744 118.049L37.8302 118.846L38.6793 119.532L44.3751 112.489L43.4736 111.761L41.3885 114.339C41.4709 113.487 41.1148 112.748 40.3496 112.13C39.0288 111.062 37.185 111.391 35.8712 113.016ZM36.7936 113.761C37.7429 112.588 38.9676 112.295 39.8586 113.015C40.8125 113.787 40.8691 115.046 39.8858 116.261C38.9111 117.467 37.6679 117.675 36.714 116.904C35.8021 116.166 35.8528 114.925 36.7936 113.761Z" fill="#050505"/>
                                    <path d="M31.3521 106.986C31.9602 107.038 32.414 107.12 32.7414 107.243C33.0598 107.355 33.354 107.562 33.6329 107.874C34.5328 108.877 34.286 110.076 33.3273 111.026L30.0068 107.323C29.8774 107.42 29.7379 107.527 29.6074 107.644C28.132 108.967 27.9665 110.599 29.2263 112.004C30.5041 113.429 32.435 113.382 33.9807 111.997C35.5264 110.611 35.6964 108.721 34.3646 107.236C33.6177 106.403 32.8068 106.044 31.4151 106.006L31.3521 106.986ZM32.6669 111.581C31.6366 112.27 30.6478 112.196 29.9279 111.394C29.172 110.551 29.2741 109.554 30.1113 108.731L32.6669 111.581Z" fill="#050505"/>
                                    <path d="M23.2253 103.066L22.4444 103.596L24.9869 107.344L30.4756 103.622L29.8248 102.662L25.1171 105.855L23.2253 103.066Z" fill="#050505"/>
                                    <path d="M18.2005 96.6779L21.7694 97.1818C22.46 97.2904 23.3917 97.4053 24.5881 97.5453C23.8685 97.852 23.1179 98.188 22.3243 98.5591L19.6624 99.8036L20.125 100.793L26.1325 97.9839L25.6071 96.8606L22.0382 96.3567C21.1432 96.2247 20.1813 96.1089 19.165 96.0038C19.848 95.7143 20.684 95.3383 21.673 94.8759L24.1395 93.7227L23.6769 92.7338L17.6695 95.5424L18.2005 96.6779Z" fill="#050505"/>
                                    <path d="M15.977 89.7403C15.7746 89.0833 15.8518 88.5095 16.3669 87.6175L15.4619 87.1064C14.824 88.149 14.7241 88.9695 15.0455 90.0129C15.6049 91.8293 17.3334 92.6792 19.3431 92.0605C21.3656 91.4378 22.3155 89.8056 21.7442 87.9506C21.4149 86.8814 20.8281 86.2582 19.5565 85.7471L19.1643 86.6717C20.202 87.1561 20.5936 87.5574 20.8038 88.2401C20.9943 88.8584 20.9092 89.4065 20.5525 89.897C20.179 90.3787 19.6638 90.7207 18.9939 90.9269C17.7057 91.3235 16.3618 90.9898 15.977 89.7403Z" fill="#050505"/>
                                    <path d="M13.6104 80.0763L12.6792 80.2282L13.5798 85.749L14.511 85.5971L14.153 83.4021L19.7669 82.4866L19.5803 81.3425L13.9663 82.2581L13.6104 80.0763Z" fill="#050505"/>
                                    <path d="M15.0906 70.6165C13.0283 70.6165 11.6131 71.8431 11.6131 73.5414C11.6131 74.5658 12.0444 75.3341 12.8127 75.8059H11.7883V76.8977H20.8461V75.7385H17.5303C18.2447 75.2667 18.5951 74.5254 18.5951 73.5414C18.5951 71.8431 17.1799 70.6165 15.0906 70.6165ZM15.0906 71.8027C16.6003 71.8027 17.5977 72.571 17.5977 73.7167C17.5977 74.9432 16.6542 75.7789 15.0906 75.7789C13.5405 75.7789 12.597 74.9432 12.597 73.7167C12.597 72.544 13.5945 71.8027 15.0906 71.8027Z" fill="#050505"/>
                                    <path d="M12.1496 63.1082L14.822 65.5262C15.3329 66.0033 16.0399 66.6209 16.9519 67.4075C16.1841 67.258 15.3742 67.1155 14.509 66.9778L11.6071 66.5159L11.4354 67.5941L17.9847 68.6364L18.1796 67.4118L15.5073 64.9938C14.8403 64.3827 14.1088 63.7476 13.3262 63.0908C14.0541 63.2339 14.9572 63.3913 16.0354 63.5629L18.7243 63.9908L18.896 62.9126L12.3467 61.8703L12.1496 63.1082Z" fill="#050505"/>
                                    <path d="M17.6284 53.4699C15.6692 52.826 13.9416 53.5494 13.4111 55.1628C13.0912 56.1359 13.261 57.0004 13.8435 57.6885L12.8703 57.3686L12.5293 58.4058L21.1344 61.2339L21.4964 60.1327L18.3464 59.0974C19.1724 58.8723 19.7369 58.2774 20.0442 57.3427C20.5746 55.7293 19.6132 54.1222 17.6284 53.4699ZM17.2579 54.5967C18.6921 55.0681 19.3997 56.1094 19.0419 57.1977C18.6588 58.363 17.5014 58.8623 16.016 58.3741C14.5434 57.8901 13.9081 56.8016 14.2912 55.6364C14.6574 54.5224 15.8366 54.1296 17.2579 54.5967Z" fill="#050505"/>
                                    <path d="M17.0088 45.8493L18.6308 47.4703L20.1977 48.9893L21.1209 49.8923L20.7709 49.8408C19.407 49.6524 18.3931 49.5155 17.6992 49.4305L15.4001 49.1287L14.8599 50.2299L22.227 51.0652L22.4214 51.2506C23.0288 51.8487 23.1101 52.2338 22.8726 52.7179C22.7717 52.9236 22.6406 53.1296 22.4854 53.3237L23.1951 53.8969C23.4163 53.6601 23.607 53.3632 23.7673 53.0365C24.26 52.0321 24.0444 51.431 23.1331 50.5037L17.5253 44.7965L17.0088 45.8493Z" fill="#050505"/>
                                    <path d="M21.7516 37.4241L27.1712 41.2459L26.5419 42.138L24.3167 40.5689C23.4245 39.9397 22.6832 39.4005 22.0929 38.9512C22.5059 39.8857 22.8826 40.7781 23.2119 41.6206L24.545 44.9686L23.8302 45.9819L18.4105 42.1602L19.0399 41.268L21.4413 42.9614C22.1573 43.4663 22.8215 43.9512 23.4449 44.4237C22.9729 43.3157 22.6104 42.4499 22.3621 41.7965L21.029 38.4484L21.7516 37.4241ZM19.1309 36.5327L18.5714 37.3257C19.0892 37.6908 19.1535 38.2309 18.7261 38.8367C18.2988 39.4425 17.7683 39.5632 17.2506 39.1981L16.6834 40.0021C17.6087 40.6546 18.5628 40.3543 19.332 39.2639C20.0857 38.1956 20.0562 37.1852 19.1309 36.5327Z" fill="#050505"/>
                                    <path d="M25.8392 33.1773C26.3074 32.6739 26.843 32.4542 27.8732 32.4549L27.864 31.4158C26.642 31.3839 25.8811 31.7072 25.1376 32.5067C23.8433 33.8983 23.9704 35.8201 25.5104 37.2518C27.0603 38.6927 28.9491 38.7003 30.271 37.279C31.0329 36.4598 31.2797 35.6402 31.0873 34.2835L30.0902 34.4056C30.1889 35.5463 30.0369 36.0859 29.5503 36.609C29.1097 37.0828 28.5924 37.2828 27.9892 37.2189C27.3852 37.1359 26.8315 36.8604 26.3182 36.3832C25.331 35.4655 24.9488 34.1347 25.8392 33.1773Z" fill="#050505"/>
                                    <path d="M30.5014 26.9987C29.3422 27.9014 29.0689 29.1735 29.8558 30.1836C30.5268 31.0449 31.5815 31.2144 32.6097 30.67L32.4287 33.9031L33.4922 33.0749L33.6319 29.9423L34.6102 29.1804L36.0764 31.0625L36.9485 30.3834L32.873 25.1519L30.5014 26.9987ZM34.0304 28.4361L32.6372 29.521C31.9035 30.0924 31.213 30.0834 30.7491 29.488C30.2935 28.9031 30.4432 28.2399 31.1983 27.6519L32.5808 26.5753L34.0304 28.4361Z" fill="#050505"/>
                                    <path d="M49.6771 18.9955C48.938 17.0702 47.2856 16.1884 45.7 16.7968C44.7436 17.1638 44.1809 17.8418 44.0158 18.728L43.6487 17.7717L42.6294 18.1628L45.8755 26.619L46.9578 26.2037L45.7694 23.1081C46.4659 23.6061 47.2836 23.6676 48.2023 23.3151C49.7879 22.7067 50.4258 20.946 49.6771 18.9955ZM48.5697 19.4205C49.1107 20.8298 48.7509 22.0363 47.6812 22.4467C46.5361 22.8862 45.4177 22.3047 44.8573 20.845C44.3018 19.3979 44.7439 18.2176 45.8891 17.7782C46.9839 17.3581 48.0335 18.0237 48.5697 19.4205Z" fill="#050505"/>
                                    <path d="M57.0023 18.11C56.6532 18.6105 56.3554 18.9625 56.0854 19.1846C55.8285 19.404 55.5023 19.5553 55.0934 19.6414C53.7744 19.9192 52.8594 19.1063 52.5156 17.8012L57.3826 16.7764C57.3624 16.6154 57.3395 16.4411 57.3034 16.2697C56.895 14.3308 55.5634 13.3715 53.7168 13.7603C51.8439 14.1547 50.9201 15.8506 51.3479 17.8818C51.7758 19.913 53.3281 21.0049 55.2802 20.5939C56.375 20.3633 57.0913 19.8406 57.8194 18.6542L57.0023 18.11ZM52.3641 16.9515C52.2828 15.7152 52.8402 14.8953 53.8953 14.6732C55.0033 14.4399 55.8156 15.0264 56.11 16.1628L52.3641 16.9515Z" fill="#050505"/>
                                    <path d="M64.6779 12.9866L64.6124 12.0454L60.0944 12.3595L60.5546 18.9752L61.711 18.8948L61.3162 13.2204L64.6779 12.9866Z" fill="#050505"/>
                                    <path d="M73.1027 11.8469L70.8641 14.6713C70.4213 15.2123 69.8513 15.9581 69.1258 16.9196C69.2249 16.1436 69.3143 15.3262 69.3953 14.4538L69.6668 11.528L68.5797 11.4271L67.9668 18.0303L69.2016 18.1449L71.4401 15.3204C72.0065 14.6149 72.5925 13.8436 73.1969 13.0198C73.1015 13.7555 73.0034 14.6668 72.9025 15.754L72.6508 18.4651L73.738 18.566L74.3508 11.9627L73.1027 11.8469Z" fill="#050505"/>
                                    <path d="M79.9055 13.3604C80.5753 13.5148 81.033 13.8693 81.5464 14.7623L82.4425 14.2358C81.8604 13.161 81.2006 12.663 80.1367 12.4178C78.2847 11.9908 76.6825 13.06 76.21 15.1089C75.7344 17.171 76.6702 18.8115 78.5615 19.2475C79.6517 19.4988 80.4852 19.3037 81.5651 18.4599L80.9618 17.6568C80.0223 18.3117 79.4788 18.4492 78.7827 18.2887C78.1522 18.1434 77.7208 17.7949 77.4752 17.2403C77.2458 16.6756 77.2083 16.0584 77.3658 15.3754C77.6687 14.062 78.6314 13.0667 79.9055 13.3604Z" fill="#050505"/>
                                    <path d="M89.7248 16.2393L90.0629 15.3584L84.8405 13.3544L84.5023 14.2353L86.5787 15.0321L84.5402 20.3423L85.6225 20.7576L87.661 15.4473L89.7248 16.2393Z" fill="#050505"/>
                                    <path d="M96.9914 22.1915C98.0273 20.4084 97.6776 18.5686 96.2089 17.7157C95.3231 17.2013 94.442 17.1884 93.6481 17.6158L94.1627 16.73L93.2186 16.1817L88.6684 24.0138L89.6709 24.5959L91.3365 21.7288C91.3856 22.5834 91.8507 23.2588 92.7015 23.7529C94.1702 24.6058 95.9418 23.998 96.9914 22.1915ZM95.9656 21.5959C95.2073 22.9012 94.0418 23.3778 93.0511 22.8025C91.9904 22.1865 91.7417 20.951 92.5271 19.599C93.3058 18.2587 94.5024 17.8625 95.5631 18.4785C96.5772 19.0674 96.7172 20.3022 95.9656 21.5959Z" fill="#050505"/>
                                    <path d="M104.885 23.3549L101.452 24.4528C100.782 24.6553 99.8934 24.9569 98.7551 25.351C99.2698 24.7619 99.7997 24.133 100.353 23.4538L102.209 21.1758L101.363 20.4863L97.1737 25.6275L98.1352 26.4106L101.568 25.3127C102.432 25.0424 103.348 24.7285 104.309 24.3812C103.82 24.9389 103.231 25.641 102.541 26.4874L100.821 28.5982L101.668 29.2877L105.857 24.1465L104.885 23.3549Z" fill="#050505"/>
                                    <path d="M110.617 33.0663C112.157 31.6954 112.399 29.8384 111.27 28.5698C110.589 27.8047 109.756 27.5175 108.868 27.6759L109.633 26.9949L108.907 26.1794L102.14 32.2006L102.911 33.0664L105.388 30.8622C105.168 31.6895 105.399 32.4762 106.054 33.2112C107.183 34.4797 109.056 34.4551 110.617 33.0663ZM109.828 32.1803C108.7 33.1838 107.444 33.273 106.682 32.4172C105.867 31.501 106.016 30.2496 107.184 29.2102C108.342 28.1798 109.603 28.1768 110.418 29.093C111.198 29.9689 110.946 31.1857 109.828 32.1803Z" fill="#050505"/>
                                    <path d="M117.43 36.2236L115.215 36.8199L113.117 37.4196L111.873 37.7688L112.093 37.4912C112.937 36.4036 113.561 35.5935 113.981 35.0347L115.39 33.1932L114.705 32.1757L110.305 38.1418L110.047 38.2177C109.226 38.4455 108.851 38.3238 108.55 37.8765C108.422 37.6864 108.309 37.4701 108.218 37.2387L107.367 37.5676C107.462 37.8774 107.624 38.1907 107.828 38.4926C108.452 39.4207 109.081 39.5339 110.339 39.2071L118.085 37.1964L117.43 36.2236Z" fill="#050505"/>
                                    <path d="M122.382 44.5746L116.364 47.3609L115.905 46.3702L118.376 45.2262C119.367 44.7675 120.204 44.3946 120.888 44.1076C119.872 43.9987 118.911 43.8794 118.016 43.744L114.449 43.2269L113.928 42.1017L119.946 39.3154L120.405 40.3061L117.738 41.5407C116.943 41.9088 116.191 42.242 115.471 42.546C116.667 42.6904 117.598 42.8088 118.288 42.92L121.855 43.4371L122.382 44.5746ZM124.463 42.7495L124.055 41.8689C123.48 42.1351 122.98 41.9211 122.668 41.2484C122.357 40.5757 122.517 40.0559 123.092 39.7897L122.678 38.8969C121.651 39.3726 121.435 40.349 121.996 41.5599C122.545 42.7463 123.435 43.2252 124.463 42.7495Z" fill="#050505"/>
                                    <path d="M124.09 50.4508C124.289 51.1085 124.21 51.682 123.692 52.572L124.595 53.0866C125.237 52.0464 125.34 51.2263 125.022 50.1816C124.47 48.3632 122.744 47.5067 120.732 48.1178C118.707 48.7328 117.751 50.3615 118.316 52.2186C118.641 53.2891 119.225 53.9145 120.495 54.4304L120.891 53.5073C119.855 53.0189 119.465 52.6162 119.257 51.9327C119.069 51.3136 119.156 50.7659 119.515 50.2767C119.89 49.7964 120.407 49.4564 121.077 49.2527C122.367 48.861 123.71 49.1998 124.09 50.4508Z" fill="#050505"/>
                                    <path d="M127.046 57.4605C126.848 56.0046 125.886 55.1286 124.617 55.3007C123.535 55.4474 122.858 56.2737 122.812 57.4362L120.108 55.6538L120.29 56.9894L122.927 58.6856L123.094 59.9144L120.73 60.2351L120.879 61.3303L127.45 60.439L127.046 57.4605ZM124.029 59.7876L123.792 58.0379C123.667 57.1163 124.021 56.5241 124.769 56.4226C125.504 56.323 126.002 56.7859 126.131 57.7342L126.366 59.4706L124.029 59.7876Z" fill="#050505"/>
                                </svg>                                    
                            </a>
                        </h2>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 bottom__right wow animate__animated animate__fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="bottom__img">
                            <picture><img src="img/bottom/bottom-img.png" alt=""></picture>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-11 col-md-7">
                <div class="footer__links">
                    <a href="https://t.me/itonecup">
                        <span>
                            <svg width="27" height="22" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.79176 9.29865C8.78825 6.25039 13.4537 4.2408 15.788 3.26986C22.4531 0.497636 23.838 0.0160711 24.7407 0.000169546C24.9392 -0.00332783 25.3832 0.0458755 25.6707 0.279201C25.9135 0.476217 25.9803 0.742358 26.0123 0.92915C26.0443 1.11594 26.0841 1.54146 26.0524 1.87395C25.6912 5.66891 24.1284 14.8783 23.3333 19.1287C22.9969 20.9272 22.3345 21.5303 21.6932 21.5893C20.2994 21.7175 19.2411 20.6682 17.8912 19.7833C15.7789 18.3987 14.5856 17.5367 12.5352 16.1856C10.1657 14.6241 11.7017 13.7659 13.0521 12.3633C13.4055 11.9962 19.5463 6.4107 19.6652 5.90401C19.68 5.84064 19.6938 5.60442 19.5535 5.47969C19.4132 5.35496 19.2061 5.39762 19.0566 5.43154C18.8447 5.47962 15.4703 7.71 8.93326 12.1227C7.97543 12.7804 7.10787 13.1009 6.33055 13.0841C5.47363 13.0656 3.82525 12.5995 2.59985 12.2012C1.09685 11.7127 -0.0977048 11.4543 0.00631425 10.6246C0.0604938 10.1924 0.655644 9.75044 1.79176 9.29865Z" fill="white"/>
                            </svg>
                        </span>
                        Telegram чат
                    </a>
                    <a href="malito:support@cups.online">
                        <span>
                            <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.00033 0H26.0003C26.3539 0 26.6931 0.140476 26.9431 0.390524C27.1932 0.640573 27.3337 0.979711 27.3337 1.33333V22.6667C27.3337 23.0203 27.1932 23.3594 26.9431 23.6095C26.6931 23.8595 26.3539 24 26.0003 24H2.00033C1.6467 24 1.30756 23.8595 1.05752 23.6095C0.807468 23.3594 0.666992 23.0203 0.666992 22.6667V1.33333C0.666992 0.979711 0.807468 0.640573 1.05752 0.390524C1.30756 0.140476 1.6467 0 2.00033 0ZM14.0803 11.5773L5.53099 4.31733L3.80433 6.34933L14.0977 15.0893L24.2057 6.34267L22.4617 4.32533L14.0817 11.5773H14.0803Z" fill="white"/>
                            </svg>
                        </span>
                        support@cups.online
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-5 d-flex justify-content-lg-end">
                <div class="footer__links">
                    <a href="files/regulations.pdf" target="_blank">
                        <span>
                            <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.6667 27.3337H1.33333C0.979711 27.3337 0.640573 27.1932 0.390524 26.9431C0.140476 26.6931 0 26.3539 0 26.0003V2.00033C0 1.6467 0.140476 1.30756 0.390524 1.05752C0.640573 0.807468 0.979711 0.666992 1.33333 0.666992H22.6667C23.0203 0.666992 23.3594 0.807468 23.6095 1.05752C23.8595 1.30756 24 1.6467 24 2.00033V26.0003C24 26.3539 23.8595 26.6931 23.6095 26.9431C23.3594 27.1932 23.0203 27.3337 22.6667 27.3337ZM6.66667 7.33366V10.0003H17.3333V7.33366H6.66667ZM6.66667 12.667V15.3337H17.3333V12.667H6.66667ZM6.66667 18.0003V20.667H13.3333V18.0003H6.66667Z" fill="white"/>
                            </svg>
                                
                        </span>
                        Правила чемпионата
                    </a>
                </div>
                <div class="footer__age">
                    6+
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/app.min.js?_v=20220214175136"></script>
<script src="js/script.v2.js"></script>
</body>
</html>