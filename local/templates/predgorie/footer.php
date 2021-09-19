<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<footer>
    <div class="footer-top">
        <div class="container flex-c">
            <a href="/" class="footer-logo">
              <?
              $APPLICATION->IncludeFile(
                "/include/footer/logo.php",
                Array(),
                Array(
                  "MODE"      => "php",
                ));
              ?>
            </a>
            <div class="footer-right">
                <div class="footer-menu">
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
                <div class="footer-socials flex-c">
                  <?
                  $APPLICATION->IncludeFile(
                    "/include/footer/socials.php",
                    Array(),
                    Array(
                      "MODE"      => "php",
                    ));
                  ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container flex-c-sb">
            <a href="/politika-konfidentsialnosti/" class="footer-policy">Политика конфиденциальности</a>
            <a href="https://asmart-group.ru" target="_blank" class="create">Сайт разработан <span>IT-компанией Asmart</span></a>
        </div>
    </div>
</footer>
<!-- Modal -->
<div id="modal" class="modal-wrap">
    <div class="modal-header"></div>
    <div class="modal-body">
        <h2>Оставьте заявку</h2>
        <div class="desc">Наш менеджер свяжется с вами в ближайшее время для уточнения деталей сотрудничества!</div>
        <div class="item-form">
          <?$APPLICATION->IncludeComponent(
            "altasib:feedback.form",
            "send_question",
            Array(
              "ACTIVE_ELEMENT" => "Y",
              "ADD_HREF_LINK" => "Y",
              "ADD_LEAD" => "N",
              "ALX_LINK_POPUP" => "N",
              "BBC_MAIL" => "",
              "CAPTCHA_TYPE" => "recaptchav3",
              "CATEGORY_SELECT_NAME" => "Выберите категорию",
              "CHANGE_CAPTCHA" => "N",
              "CHECKBOX_TYPE" => "CHECKBOX",
              "CHECK_ERROR" => "Y",
              "COLOR_OTHER" => "#009688",
              "COLOR_SCHEME" => "BRIGHT",
              "COLOR_THEME" => "",
              "EVENT_TYPE" => "ALX_FEEDBACK_FORM",
              "FB_TEXT_NAME" => "",
              "FB_TEXT_SOURCE" => "PREVIEW_TEXT",
              "FORM_ID" => "13",
              "IBLOCK_ID" => "13",
              "IBLOCK_TYPE" => "altasib_feedback",
              "INPUT_APPEARENCE" => array("DEFAULT"),
              "JQUERY_EN" => "jquery3",
              "LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
              "LOCAL_REDIRECT_ENABLE" => "N",
              "MASKED_INPUT_PHONE" => array("phone"),
              "MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
              "NAME_ELEMENT" => "ALX_DATE",
              "NOT_CAPTCHA_AUTH" => "Y",
              "PROPERTY_FIELDS" => array("name","phone"),
              "PROPERTY_FIELDS_REQUIRED" => array("name","phone"),
              "PROPS_AUTOCOMPLETE_EMAIL" => array(),
              "PROPS_AUTOCOMPLETE_NAME" => array(),
              "PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(),
              "PROPS_AUTOCOMPLETE_VETO" => "N",
              "RECAPTCHA_THEME" => "light",
              "RECAPTCHA_VALID_SCORE" => "0.5",
              "REQUIRED_SECTION" => "N",
              "SECTION_FIELDS_ENABLE" => "N",
              "SECTION_MAIL_ALL" => "ershovva.sn@gmail.com",
              "SEND_IMMEDIATE" => "Y",
              "SEND_MAIL" => "N",
              "SHOW_LINK_TO_SEND_MORE" => "Y",
              "SHOW_MESSAGE_LINK" => "Y",
              "SPEC_CHAR" => "N",
              "USERMAIL_FROM" => "N",
              "USER_CONSENT" => "Y",
              "USER_CONSENT_ID" => "1",
              "USER_CONSENT_INPUT_LABEL" => "Я согласен на обработку персональных данных",
              "USER_CONSENT_IS_CHECKED" => "Y",
              "USER_CONSENT_IS_LOADED" => "N",
              "USE_CAPTCHA" => "Y",
              "WIDTH_FORM" => "100%"
            )
          );?>
        </div>
    </div>
</div>

<script async src="/local/templates/predgorie/js/fancybox.umd.js"></script>
<link rel="stylesheet" href="/local/templates/predgorie/css/swiper-bundle.min.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/local/templates/predgorie/css/fancybox.css"/>
<script async src="/local/templates/predgorie/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="/local/templates/predgorie/js/swiper-bundle.min.js"></script>
<script src="/local/templates/predgorie/js/select2.min.js"></script>

<script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script async src="/local/templates/predgorie/js/google-translate.js"></script>
<script async src="https://translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
<!--<script type="text/javascript">-->
<!--    function googleTranslateElementInit() {-->
<!--        new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script type="text/javascript">-->
<!--    function googleTranslateElementInit() {-->
<!--        new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'zh-CN,en,ru', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');-->
<!--    }-->
<!--</script>-->
<!---->
<!--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
<!--<script src="/local/templates/predgorie/js/google-translate.js"></script>-->
<script src="/local/templates/predgorie/js/script.js"></script>
</body>
</html>
