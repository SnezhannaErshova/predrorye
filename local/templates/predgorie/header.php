<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/local/templates/predgorie/fonts/fonts.css"/>
        <link href="/local/templates/predgorie/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
        <?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            jQuery(window).load(function(){
                (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                ym(84583888, "init", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-TFG1YSS4S7');
                var script = document.createElement("script");
                script.src = "https://www.googletagmanager.com/gtag/js?id=G-TFG1YSS4S7";
                script.type = "text/javascript";
                document.getElementsByTagName("body")[0].appendChild(script);
            })

        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/84583888" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <header>
          <div class="container flex-c-sb">
            <div class="logo">
                <a href="/">
                  <?
                  $APPLICATION->IncludeFile(
                    "/include/header/logo.php",
                    Array(),
                    Array(
                      "MODE"      => "php",
                    ));
                  ?>
                </a>

            </div>
            <div class="header-right flex-c">
                <div class="nav">
                  <?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                      0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                  ),
                    false
                  );?>
                </div>
                <div class="info flex-c">
                    <div class="language lang">
                        <div class="lang-ru lang-item" data-google-lang="ru" class="language__img">
<!--                            <img src="/local/templates/predgorie/images/ru.svg" alt="ru">-->
                        </div>
                        <div class="lang-en lang-item" data-google-lang="en" class="language__img">
<!--                            <img src="/local/templates/predgorie/images/en.svg" alt="en">-->
                        </div>
                        <div class="lang-cn lang-item" data-google-lang="zh-CN" class="language__img">
<!--                            <img src="/local/templates/predgorie/images/cn.svg" alt="cn">-->
                        </div>
<!--                        <div class="lang-active"></div>-->
<!--                        <div class="lang-list">-->
<!--                            <div class="lang-ru" data-google-lang="ru" class="language__img">-->
<!--                                <img src="/local/templates/predgorie/images/RU.svg" alt="ru">-->
<!--                            </div>-->
<!--                            <div class="lang-en" data-google-lang="en" class="language__img">-->
<!--                                <img src="/local/templates/predgorie/images/EN.svg" alt="en">-->
<!--                            </div>-->
<!--                            <div class="lang-cn" data-google-lang="zh-CN" class="language__img">-->
<!--                                <img src="/local/templates/predgorie/images/CN.svg" alt="cn">-->
<!--                            </div>-->
<!--                        </div>-->

                    </div>
                    <div class="contacts">
                      <?
                      $APPLICATION->IncludeFile(
                        "/include/header/contacts.php",
                        Array(),
                        Array(
                          "MODE"      => "php",
                        ));
                      ?>
                    </div>
                </div>
            </div>
            <div class="header-mobile">
                <div class="menu-icon">
                   <span></span>
                </div>
                <div class="mobile-menu">
                  <div class="mobile-menu-wrap">
                      <div class="contacts">
                        <?
                        $APPLICATION->IncludeFile(
                          "/include/header/contacts.php",
                          Array(),
                          Array(
                            "MODE"      => "php",
                          ));
                        ?>
                      </div>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
                      "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                      "CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
                      "DELAY" => "N",	// Откладывать выполнение шаблона меню
                      "MAX_LEVEL" => "1",	// Уровень вложенности меню
                      "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                        0 => "",
                      ),
                      "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                      "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                      "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                      "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                      "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                      false
                    );?>
                  </div>

                </div>
            </div>
          </div>
        </header>
	
						