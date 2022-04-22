<?php


$microtime = round(microtime(true) * 1000);
$delaymt = round(microtime(true) * 1000) + rand(3, 7);
$random = rand(1111111111, 9999999999);

$pixel = isset($_GET['pixel']) ? $_GET['pixel'] : null;


if (isset($_GET['key'])) {

    if (isset($_GET['token'])) {
        $token = $_GET['token'];
    } else if (isset($_GET['fb_token'])) {
        $token = $_GET['fb_token'];
    }


    $str = '?key=' . $_GET['key'] . '&placement=' . (isset($_GET['placement']) ? $_GET['placement'] : '') . '&ad_name=' . (isset($_GET['ad_name']) ? $_GET['ad_name'] : '') . '&adset_name=' . (isset($_GET['adset_name']) ? $_GET['adset_name'] : '') . '&campaign_name=' . (isset($_GET['campaign_name']) ? $_GET['campaign_name'] : '') . '&token=' . $token . '&pixel=' . $pixel . '&fbp=' . 'fb.1.' . $delaymt . '.' . $random . '&fbc=' . 'fb.1.' . $microtime . '.' . $_GET['fbclid'] . '&fbclid=' . $_GET['fbclid'];


} else {
    $str = "?key=bpvacy758jo8o95deux6&placement={{placement}}&ad_name={{ad.name}}&adset_name={{adset.name}}&campaign_name={{campaign.name}}&t={t5}&pixel={t6}&fbp={t7}&fbc={t8}&fbclid={t9}&subs_id={{subs_id}}";
}


$redirectUrl = 'https://trck.space/click.php' . $str;


?>


<html lang="ru" style="height: 100%;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#FFFFFF">
    <meta name="google" value="notranslate">


    <title>Cricket Winner</title>

    <meta name="apple-mobile-web-app-capable" content="yes">

    <!--  FOR PWA  -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/manifest.php<?= $str ?>&v=<?= time() ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ! FOR PWA ! -->


    <link rel="stylesheet" href="./css/pwa.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/css.css">
    <meta class="CryptoPluginExtensionLoaded" content="1.0.2">


    <link type="text/css" rel="stylesheet" charset="UTF-8" href="./css/translateelement.css">
    <!--    <script type="text/javascript" charset="UTF-8" src="./js/m=el_main"></script>-->
    <!-- FAceBook -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?= isset($_GET['pixel']) ? $_GET['pixel'] : '' ?>');
        fbq('track', 'PageView');
    </script>


    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=<?= isset($_GET['pixel']) ? $_GET['pixel'] : '' ?>&ev=PageView&noscript=1"/>
    </noscript>

</head>

<body style="position: relative; min-height: 100%; top: 0px;">
<a href="" id="to-pwa" target="_blank" style="display: none"></a>

<script>
    var isPWA = ((window.navigator.standalone === true) || (window.matchMedia('(display-mode: standalone)').matches));

    if (isPWA) {
        document.body.style.display = 'none'
    }

    document.querySelector('#to-pwa').setAttribute('href', window.location.href)
</script>
<div id="_js">
    <div id="__layout">
        <div id="content">
            <div></div>
            <div id="main-container" class="is-not-pwa">
                <main>

                    <section class="container">

                        <div style="">
                            <section>

                                <div class="app-comp">
                                    <div class="app-comp__left">
                                        <div class="app-comp__info-wrapper">
                                            <div class="app-comp__logo">
                                                <img alt="App icon"
                                                     src="./images/831344498858.jpg" width="180"
                                                     height="180">
                                            </div>
                                            <div class="app-comp__main-info">
                                                <div class="app-comp__info">
                                                    <div class="app-comp__info-left">
                                                        <div class="app-comp__info-title notranslate">
                                                            Cricket Winner
                                                        </div>
                                                        <div class="app-comp__info-subtitle"><span>Cricket LTD</span>
                                                            <span>Казино</span>
                                                        </div>
                                                        <div style="display: flex; margin-top: 10px">
                                                            <div class="app-comp__age-rate">18+</div>
                                                            <div class="app-comp__ad-status">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="app-comp__right-wrapper">
                                                        <div class="app-comp__choise"><img src="./images/choise.png"
                                                                                           alt="">
                                                            <span helpers-decode="">Выбор редакции</span>
                                                        </div>
                                                        <div class="app-comp__users-rate">
                                                            <div class="star" data-v-2b76e870=""><span
                                                                        data-v-2b76e870=""><img
                                                                            src="./images/star-full.png" alt=""
                                                                            data-v-2b76e870=""></span>
                                                            </div>
                                                            <div class="star" data-v-2b76e870=""><span
                                                                        data-v-2b76e870=""><img
                                                                            src="./images/star-full.png" alt=""
                                                                            data-v-2b76e870=""></span>
                                                            </div>
                                                            <div class="star" data-v-2b76e870=""><span
                                                                        data-v-2b76e870=""><img
                                                                            src="./images/star-full.png" alt=""
                                                                            data-v-2b76e870=""></span>
                                                            </div>
                                                            <div class="star" data-v-2b76e870=""><span
                                                                        data-v-2b76e870=""><img
                                                                            src="./images/star-full.png" alt=""
                                                                            data-v-2b76e870=""></span>
                                                            </div>
                                                            <div class="star" data-v-2b76e870=""><span
                                                                        data-v-2b76e870=""><img
                                                                            src="./images/star-full.png" alt=""
                                                                            data-v-2b76e870=""></span>
                                                            </div>
                                                            <div class="app-comp__user-num">
                                                                4701
                                                            </div>
                                                            <img src="./images/user.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="app-comp__mobile-info">
                                                    <div class="app-comp__mobile-info-item">
                                                                <span class="app-comp__mobile-info-rating">
                                                                    <span>4.8</span>
                                                                <svg enable-background="new 0 0 24 24" version="1.1"
                                                                     viewBox="0 0 24 24" xml:space="preserve"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                        <g fill="none">
                                                                            <path d="M0,0h24v24H0V0z"></path>
                                                                            <path d="M0,0h24v24H0V0z"></path>
                                                                        </g>
                                                                        <path d="M12,17.27L18.18,21l-1.64-7.03L22,9.24l-7.19-0.61L12,2L9.19,8.63L2,9.24l5.46,4.73L5.82,21L12,17.27z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                        <span class="app-comp__mobile-info-subtitle">Рейтинг</span>
                                                    </div>
                                                    <div class="app-comp__mobile-info-item">
                                                                <span class="app-comp__mobile-info-icon">
                                                                    <svg viewBox="0 0 18 18"
                                                                         xmlns="http://www.w3.org/2000/svg" width="20">
                                                                        <g transform="translate(21.552 22.5) rotate(180)">
                                                                            <path transform="translate(7.552 7.652)"
                                                                                  d="M.625,0h8.75A.68.68,0,0,1,10,.723a.68.68,0,0,1-.625.723H.625A.68.68,0,0,1,0,.723.68.68,0,0,1,.625,0Z"
                                                                                  data-name="Path 288"></path>
                                                                            <g transform="translate(17.552 20.797) rotate(180)">
                                                                                <path d="M0,0H9.666V9.666H0Z"
                                                                                      fill="none"
                                                                                      data-name="Path 289"></path>
                                                                                <path transform="translate(-4.408 -3.203)"
                                                                                      d="M8.752,4.642V11.81L5.536,8.678a.677.677,0,0,0-.936,0,.627.627,0,0,0,0,.9l4.343,4.229a.669.669,0,0,0,.929,0l4.343-4.229a.627.627,0,0,0,0-.9.669.669,0,0,0-.929,0L10.07,11.81V4.642a.659.659,0,0,0-1.318,0Z"
                                                                                      data-name="Path 290"></path>
                                                                            </g>
                                                                            <rect transform="translate(4.552 5.5)"
                                                                                  width="16" height="16" rx="2"
                                                                                  fill="none" stroke="#000"
                                                                                  stroke-width="2"
                                                                                  data-name="Rectangle 123"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                        <span class="app-comp__mobile-info-subtitle">12.5</span>
                                                    </div>
                                                    <div class="app-comp__mobile-info-item">
                                                                <span class="app-comp__mobile-info-icon">
                                                                    <div class="app-comp__mobile-info-rate">18+</div>
                                                                </span>
                                                        <span class="app-comp__mobile-info-subtitle">Возраст</span>
                                                    </div>
                                                </div>
                                                <div class="app-comp__install-wrapper">
                                                    <div class="app-comp__wish-list-add">
                                                        <div class="app-comp__wish-list-img"></div>
                                                        <button class="app-comp__wish-list-button">
                                                            <span></span>
                                                        </button>
                                                    </div>
                                                    <button type="button"
                                                            id="download_button"
                                                            class="app-comp__install-button greenBtn"
                                                            style="background-color: rgb(0, 135, 95);"
                                                            data-size="12.1 MB"
                                                    >
                                                        Скачать
                                                    </button>
                                                    <button type="button"
                                                            id="install_btn"
                                                            class="app-comp__install-button greenBtn"
                                                            style="background-color: rgb(0, 135, 95); display: none"
                                                            data-installing_text="Установка ..."
                                                    >
                                                        Установить
                                                    </button>
                                                    <button type="button"
                                                            id="redirect-to"
                                                            class="app-comp__install-button greenBtn"
                                                            data-href="<?= $redirectUrl ?>"
                                                            style="background-color: rgb(0, 135, 95); display: none">
                                                        Играть
                                                    </button>
                                                    <div class="loading">
                                                        <div class="progress_container">
                                                            <div class="progress_word">
                                                                Загрузка ...
                                                            </div>
                                                            <div class="progress_graph">
                                                                <div class="runner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gallery">
                                            <div class="gall_img">
                                                <img src="./images/308091332087.jpg" alt="">
                                            </div>
                                            <div class="gall_img">
                                                <img src="./images/734523480441.jpg" alt="">
                                            </div>
                                            <div class="gall_img">
                                                <img src="./images/559697943872.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="app-description" data-v-4c38fcdc="">
                                            <div class="app-description__title" data-v-4c38fcdc="">
                                                Об этом приложении
                                            </div>
                                            <div class="app-description__content" data-v-4c38fcdc="">
                                                <div class="app-description__expand expand size collapsed" id="text"
                                                     data-v-4c38fcdc="">
                                                    <p class="app-description__main-content" data-v-4c38fcdc="">
                                                        Real Cricket™ is here and here to stay! We have migrated to a
                                                        brand new experience with Real Cricket™ 17! The most complete
                                                        cricket game in the world!<br> For all you cricket fans out
                                                        there,
                                                        Intensity of a Real Cricket™ game, now on your mobile!!!<br>
                                                        Welcome to the most authentic, complete and surreal Cricket
                                                        experience on Android - Real Cricket™ 17<br>
                                                        <br> ALL NEW MULTIPLAYER<br> Battle it out against your friends
                                                        or other Real Cricket players in a Batting Showdown. Outscore
                                                        your peers and top the leaderboards!<br>
                                                        <br> PREMIER LEAGUE AUCTIONS<br> Just like next year – take
                                                        charge of your favourite franchise and build a team from
                                                        scratch!<br>
                                                        <br> INCLUDES TEST MATCH<br> Brand new Test Series mode complete
                                                        with updated rosters, the classic whites and lunch-tea
                                                        breaks.<br>
                                                        <br> CHAMPIONS CUP<br> Be part of the Mini World Cup gala and
                                                        bring the trophy home for your country!<br>
                                                        <br> UNIQUE AND NOVEL REAL CRICKET CHALLENGE MODE &amp; DAILY
                                                        CHALLENGES<br> For the First Time Players can play out
                                                        Historical Scenarios with a unique level based saga experience.
                                                        Also get
                                                        daily challenges based on recent and past events!<br>
                                                        <br> ALL MAJOR T20 DOMESTIC TOURNAMENTS<br> More content than
                                                        you can imagine. From South Africa, the Caribbean, Down Under,
                                                        England, Pakistan, Bangladesh. Play them All<br>
                                                        <br> ALL NEW PLAYER PROFILE<br> Track all yours Stats and
                                                        Increase you’re Rank. Be the Best<br>
                                                        <br> FRESH LOOK AND FEEL<br> The game is now smoother than ever
                                                        and with the most stunning presentation.<br>
                                                        <br> ULTRA FLUID SIGNATURE REAL CRICKET™ ANIMATIONS<br>
                                                        Scintillating 2D Motion Captured animations<br>
                                                        <br> BE STRIKING WITH AUTHENTIC CRICKET EQUIPMENT<br> Authentic
                                                        Cricket equipment provided by legendary manufacturers –
                                                        Gray-Nicolls and SS Cricket.<br>
                                                        <br> CRICKET QUIZ<br> New for Trivia maniacs. Think you know it
                                                        All? Test your skills with the Cricket Quiz<br>
                                                        <br> ALL NEW DETAILED LEADERBOARDS<br> Now Compete with Friends
                                                        &amp; Players from around the World<br>
                                                        <br> ALL NEW HARDCORE DIFFICULTY<br> Want the Game to Be Harder.
                                                        Well we tried! It’s your turn now…<br>
                                                        <br> This app offers in-app purchases.<br>
                                                        <br> *Permissions:
                                                        <br> To deliver the best experience we would need some
                                                        permissions from our users:<br>
                                                        <br> GET_ACCOUNTS: This permission is required to access Google
                                                        Game Play Services including Login, Achievements and
                                                        Leaderboard.<br>
                                                        <br> WRITE_EXTERNAL_STORAGE and READ_EXTERNAL_STORAGE: We need
                                                        these permissions to cache and read game content during the
                                                        gameplay.<br>
                                                        <br> READ_PHONE_STATE: We need this permission to serve you
                                                        relevant notifications on various updates and offers.<br>
                                                        <br> ACCESS_FINE_LOCATION: We need this permission to detect
                                                        your location so as to provide region specific content as well
                                                        as analyze your regions needs and feedback better. </p>
                                                </div>
                                                <div class="shadow"></div>
                                            </div>
                                            <button type="button" data-hide="Меньше" data-show="Больше…"
                                                    class="expand-btn app-comp__install-button active greenBtn colapsed"
                                                    id="expand-button">Больше…
                                            </button>
                                        </div>

                                        <div class="line"></div>
                                        <div class="app-comp__charts">
                                            <h3 class="app-comp__section-header">Рейтинг и отзывы</h3>
                                            <div class="app-comp__charts-wrapper">
                                                <div class="score" data-v-3bf2ee4c="">
                                                    <div class="score__number" data-v-3bf2ee4c="">
                                                        4.8
                                                    </div>
                                                    <div class="score__stars" data-v-3bf2ee4c="">
                                                        <div class="star" data-v-2b76e870="" data-v-3bf2ee4c="">
                                                            <span data-v-2b76e870=""><img
                                                                        src="./images/star-full-big.png" alt=""
                                                                        data-v-2b76e870=""></span>
                                                        </div>
                                                        <div class="star" data-v-2b76e870="" data-v-3bf2ee4c="">
                                                            <span data-v-2b76e870=""><img
                                                                        src="./images/star-full-big.png" alt=""
                                                                        data-v-2b76e870=""></span>
                                                        </div>
                                                        <div class="star" data-v-2b76e870="" data-v-3bf2ee4c="">
                                                            <span data-v-2b76e870=""><img
                                                                        src="./images/star-full-big.png" alt=""
                                                                        data-v-2b76e870=""></span>
                                                        </div>
                                                        <div class="star" data-v-2b76e870="" data-v-3bf2ee4c="">
                                                            <span data-v-2b76e870=""><img
                                                                        src="./images/star-full-big.png" alt=""
                                                                        data-v-2b76e870=""></span>
                                                        </div>
                                                        <div class="star" data-v-2b76e870="" data-v-3bf2ee4c="">
                                                            <span data-v-2b76e870=""><img
                                                                        src="./images/star-full-big.png" alt=""
                                                                        data-v-2b76e870=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="score__all-users" data-v-3bf2ee4c="">
                                                        Общий <img src="./images/user.png" alt="" data-v-3bf2ee4c="">
                                                    </div>
                                                    <div class="score__ratings" data-v-3bf2ee4c="">
                                                        4701
                                                    </div>
                                                </div>
                                                <div class="chart" data-v-623abd02="">
                                                    <ol class="chart__bars" data-v-623abd02="">
                                                        <li class="chart__bar-container" data-v-623abd02="">
                                                            <span data-v-623abd02="">5</span>
                                                            <div class="chart__bar" style="width:89%;"
                                                                 data-v-623abd02=""></div>
                                                            <div class="chart__bg" data-v-623abd02=""></div>
                                                        </li>
                                                        <li class="chart__bar-container" data-v-623abd02="">
                                                            <span data-v-623abd02="">4</span>
                                                            <div class="chart__bar" style="width:3%;"
                                                                 data-v-623abd02=""></div>
                                                            <div class="chart__bg" data-v-623abd02=""></div>
                                                        </li>
                                                        <li class="chart__bar-container" data-v-623abd02="">
                                                            <span data-v-623abd02="">3</span>
                                                            <div class="chart__bar" style="width:3%;"
                                                                 data-v-623abd02=""></div>
                                                            <div class="chart__bg" data-v-623abd02=""></div>
                                                        </li>
                                                        <li class="chart__bar-container" data-v-623abd02="">
                                                            <span data-v-623abd02="">2</span>
                                                            <div class="chart__bar" style="width:2%;"
                                                                 data-v-623abd02=""></div>
                                                            <div class="chart__bg" data-v-623abd02=""></div>
                                                        </li>
                                                        <li class="chart__bar-container" data-v-623abd02="">
                                                            <span data-v-623abd02="">1</span>
                                                            <div class="chart__bar" style="width:00%;"
                                                                 data-v-623abd02=""></div>
                                                            <div class="chart__bg" data-v-623abd02=""></div>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>

                                        <div data-v-265dd011="" class="testimotials">
                                            <div data-v-265dd011="" class="testimotials__comment-info">
                                                <div data-v-265dd011="" class="testimotials__user-logo"><img
                                                            data-v-265dd011="" src="./images/22.jpg"
                                                            class="v-lazy-image" alt="Avatar">
                                                </div>
                                                <div data-v-265dd011="" class="testimotials__user-info-wrapper">
                                                    <div data-v-265dd011="" class="testimotials__user-info-top">
                                                        <div data-v-265dd011="" class="testimotials__user-info-left">
                                                            <div data-v-265dd011="" class="testimotials__user-name">
                                                                EliteShin
                                                            </div>
                                                            <div data-v-265dd011="" class="testimotials__rate-info">
                                                                <div data-v-265dd011="" class="testimotials__date">
                                                                    2022-03-20 10:24:38
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-265dd011="" class="testimotials__rate-stars">
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                        </div>
                                                        <div data-v-3442737e="" data-v-265dd011="" class="tooltip">
                                                            <div data-v-265dd011="" data-v-3442737e=""
                                                                 class="testimotials__likes"><i data-v-265dd011=""
                                                                                                data-v-3442737e=""
                                                                                                class="material-icons">thumb_up</i>
                                                                <span class="likes"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-265dd011="" class="testimotials__text-ph">
                                                        <div data-v-265dd011="" class="testimotials__text-visible">Очень
                                                            хорошее приложение Cricket Winner, не жди а нажимаешь кнопку
                                                            скачать, рекомендую всем попробовать, многие думают что
                                                            Cricket Winner, лохотрон но это не так. Спасибо за труд.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-265dd011="" class="testimotials">
                                            <div data-v-265dd011="" class="testimotials__comment-info">
                                                <div data-v-265dd011="" class="testimotials__user-logo"><img
                                                            data-v-265dd011="" src="./images/21.jpg"
                                                            class="v-lazy-image" alt="Avatar">
                                                </div>
                                                <div data-v-265dd011="" class="testimotials__user-info-wrapper">
                                                    <div data-v-265dd011="" class="testimotials__user-info-top">
                                                        <div data-v-265dd011="" class="testimotials__user-info-left">
                                                            <div data-v-265dd011="" class="testimotials__user-name">
                                                                Nosleep2day
                                                            </div>
                                                            <div data-v-265dd011="" class="testimotials__rate-info">
                                                                <div data-v-265dd011="" class="testimotials__date">
                                                                    2022-03-19 17:55:23
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-265dd011="" class="testimotials__rate-stars">
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                        </div>
                                                        <div data-v-3442737e="" data-v-265dd011="" class="tooltip">
                                                            <div data-v-265dd011="" data-v-3442737e=""
                                                                 class="testimotials__likes"><i data-v-265dd011=""
                                                                                                data-v-3442737e=""
                                                                                                class="material-icons">thumb_up</i>
                                                                <span class="likes"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-265dd011="" class="testimotials__text-ph">
                                                        <div data-v-265dd011="" class="testimotials__text-visible">
                                                            Cricket Winner классное приложение где на ставках и казино
                                                            хорошо можно заработать
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-265dd011="" class="testimotials">
                                            <div data-v-265dd011="" class="testimotials__comment-info">
                                                <div data-v-265dd011="" class="testimotials__user-logo"><img
                                                            data-v-265dd011="" src="./images/4.jpg" class="v-lazy-image"
                                                            alt="Avatar">
                                                </div>
                                                <div data-v-265dd011="" class="testimotials__user-info-wrapper">
                                                    <div data-v-265dd011="" class="testimotials__user-info-top">
                                                        <div data-v-265dd011="" class="testimotials__user-info-left">
                                                            <div data-v-265dd011="" class="testimotials__user-name">
                                                                Black.Bugatti
                                                            </div>
                                                            <div data-v-265dd011="" class="testimotials__rate-info">
                                                                <div data-v-265dd011="" class="testimotials__date">
                                                                    2022-03-20 07:45:20
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-265dd011="" class="testimotials__rate-stars">
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                        </div>
                                                        <div data-v-3442737e="" data-v-265dd011="" class="tooltip">
                                                            <div data-v-265dd011="" data-v-3442737e=""
                                                                 class="testimotials__likes"><i data-v-265dd011=""
                                                                                                data-v-3442737e=""
                                                                                                class="material-icons">thumb_up</i>
                                                                <span class="likes"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-265dd011="" class="testimotials__text-ph">
                                                        <div data-v-265dd011="" class="testimotials__text-visible">
                                                            Cricket Winner отличное приложение рекомендую всем
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-265dd011="" class="testimotials">
                                            <div data-v-265dd011="" class="testimotials__comment-info">
                                                <div data-v-265dd011="" class="testimotials__user-logo"><img
                                                            data-v-265dd011="" src="./images/13.jpg"
                                                            class="v-lazy-image" alt="Avatar">
                                                </div>
                                                <div data-v-265dd011="" class="testimotials__user-info-wrapper">
                                                    <div data-v-265dd011="" class="testimotials__user-info-top">
                                                        <div data-v-265dd011="" class="testimotials__user-info-left">
                                                            <div data-v-265dd011="" class="testimotials__user-name">
                                                                Bandifym
                                                            </div>
                                                            <div data-v-265dd011="" class="testimotials__rate-info">
                                                                <div data-v-265dd011="" class="testimotials__date">
                                                                    2022-03-19 06:12:08
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-265dd011="" class="testimotials__rate-stars">
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                        </div>
                                                        <div data-v-3442737e="" data-v-265dd011="" class="tooltip">
                                                            <div data-v-265dd011="" data-v-3442737e=""
                                                                 class="testimotials__likes"><i data-v-265dd011=""
                                                                                                data-v-3442737e=""
                                                                                                class="material-icons">thumb_up</i>
                                                                <span class="likes"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-265dd011="" class="testimotials__text-ph">
                                                        <div data-v-265dd011="" class="testimotials__text-visible">
                                                            Cricket Winner очень хорошо работает и деньги быстро
                                                            выводит. Советую всем скатать это приложение
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-265dd011="" class="testimotials">
                                            <div data-v-265dd011="" class="testimotials__comment-info">
                                                <div data-v-265dd011="" class="testimotials__user-logo"><img
                                                            data-v-265dd011="" src="./images/15.jpg"
                                                            class="v-lazy-image" alt="Avatar">
                                                </div>
                                                <div data-v-265dd011="" class="testimotials__user-info-wrapper">
                                                    <div data-v-265dd011="" class="testimotials__user-info-top">
                                                        <div data-v-265dd011="" class="testimotials__user-info-left">
                                                            <div data-v-265dd011="" class="testimotials__user-name">
                                                                Bonduelle
                                                            </div>
                                                            <div data-v-265dd011="" class="testimotials__rate-info">
                                                                <div data-v-265dd011="" class="testimotials__date">
                                                                    2022-03-22 22:16:15
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-v-265dd011="" class="testimotials__rate-stars">
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                            <div data-v-2b76e870="" data-v-265dd011="" class="star">
                                                                <span data-v-2b76e870=""><img data-v-2b76e870=""
                                                                                              src="./images/star-full.png"
                                                                                              srcset="/images/star-full2.png 2x"
                                                                                              alt=""></span>
                                                            </div>
                                                        </div>
                                                        <div data-v-3442737e="" data-v-265dd011="" class="tooltip">
                                                            <div data-v-265dd011="" data-v-3442737e=""
                                                                 class="testimotials__likes"><i data-v-265dd011=""
                                                                                                data-v-3442737e=""
                                                                                                class="material-icons">thumb_up</i>
                                                                <span class="likes"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-v-265dd011="" class="testimotials__text-ph">
                                                        <div data-v-265dd011="" class="testimotials__text-visible">
                                                            Скачала себе отличное приложение онлайн казино Cricket
                                                            Winner, хорошие выигрыши, высокие коэффициенты и
                                                            моментальные выплаты. Супер!!!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="line"></div>
                                        <div class="app-comp__recent-changes app-comp__main-recent-changes">
                                            <h3 class="app-comp__section-header app-comp__section-header_changes"
                                                helpers-decode="">Какие новости?</h3>
                                            <div class="app-comp__recent-changes-wrapper">
                                                BONUS 300 Free Spins for registration
                                            </div>
                                        </div>

                                        <div class="line"></div>
                                        <div class="app-comp__information">
                                            <span class="app-comp__section-header">Дополнительная информация</span>
                                            <div class="info-items" data-v-9c345bd8="">
                                                <div class="info-items__item" data-v-9c345bd8="">
                                                    <div class="info-items__title" data-v-9c345bd8="">
                                                        Обновлен
                                                    </div>
                                                    <span data-v-9c345bd8="">
                                                            15.02.2022                                                            </span>
                                                </div>
                                                <div class="info-items__item" data-v-9c345bd8="">
                                                    <div class="info-items__title" data-v-9c345bd8="">
                                                        Размер
                                                    </div>
                                                    <span data-v-9c345bd8="">12.5</span>
                                                </div>
                                                <div class="info-items__item" data-v-9c345bd8="">
                                                    <div class="info-items__title" data-v-9c345bd8="">
                                                        Установили
                                                    </div>
                                                    <span data-v-9c345bd8="">100000</span>
                                                </div>
                                                <div class="info-items__item" data-v-9c345bd8="">
                                                    <div class="info-items__title" data-v-9c345bd8="">
                                                        Текущая версия
                                                    </div>
                                                    <span data-v-9c345bd8="">1.0</span>
                                                </div>
                                                <div class="info-items__item" data-v-9c345bd8="">
                                                    <div class="info-items__title" data-v-9c345bd8="">
                                                        Возраст
                                                    </div>
                                                    <span data-v-9c345bd8="">18+</span>
                                                </div>
                                                <div class="info-items__item" data-v-9c345bd8="">
                                                    <div class="info-items__title" data-v-9c345bd8="">
                                                        Разработчик
                                                    </div>
                                                    <span data-v-9c345bd8="">Cricket LTD</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </section>
                </main>
                <div class="modal_window">
                    <img class="img_close_image" src="./images/right-arrow.svg" alt="">
                    <img class="target_img" src="https://grand-play.fun/" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/main.js"></script>
<script src="./js/app.js?<?= time() ?>"></script>

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function () {
        OneSignal.init({
            appId: "95217a49-92e4-460e-ad14-db8f6d3d3e0a",
        });
    });
</script>

</body>

</html>