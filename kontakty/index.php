<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><script  src="https://api-maps.yandex.ru/2.1/?apikey=0a47f00e-9680-45f3-8b67-e5b0379169ec&lang=ru_RU" type="text/javascript"></script>
<div class="contacts-page">
	 <? $APPLICATION->IncludeFile("/include/second-page/header.php", Array(), Array("MODE" => "php"));?>
	<div class="contacts flex">
		<div class="contacts-left main-p">
			 <?
          $APPLICATION->IncludeFile(
            "/include/contacts/contacts.php",
            Array(),
            Array(
              "MODE"      => "php",
            ));
          ?>
		</div>
		<div id="map">
		</div>
	</div>
</div>
<div class="bottom-form">
	<div class="form-block main-p" style="background-image: url('/local/templates/predgorie/images/form-bg.jpg')">
		<div class="container flex-fs-fs">
			 <? $APPLICATION->IncludeFile("/include/main-page/bottom-form.php", Array(), Array("MODE" => "php"));?>
			<div class="form-block-item">
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
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EVENT_TYPE" => "ALX_FEEDBACK_FORM",
		"FB_TEXT_NAME" => "",
		"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
		"FORM_ID" => "1",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array("DEFAULT"),
		"JQUERY_EN" => "jquery3",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array("phone"),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "ALX_DATE",
		"NOT_CAPTCHA_AUTH" => "Y",
		"PROPERTY_FIELDS" => array("name","message","phone"),
		"PROPERTY_FIELDS_REQUIRED" => array(),
		"PROPS_AUTOCOMPLETE_EMAIL" => array(),
		"PROPS_AUTOCOMPLETE_NAME" => array(),
		"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(),
		"PROPS_AUTOCOMPLETE_VETO" => "N",
		"RECAPTCHA_THEME" => "light",
		"RECAPTCHA_VALID_SCORE" => "0.5",
		"REQUIRED_SECTION" => "N",
		"SECTION_FIELDS_ENABLE" => "N",
		"SECTION_MAIL_ALL" => "predgorye02@yandex.ru",
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
		 <script>
            jQuery(document).ready(function () {
                // карта
                ymaps.ready(function () {
                    var myMap = new ymaps.Map('map', {
                            center: [56.014046, 92.881983],
                            zoom: 12,
                            // controls: ['routeButtonControl']
                        }, {
                            searchControlProvider: 'yandex#search'
                        }),

                        // Создаём макет содержимого.
                        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                        ),

                        myPlacemark1 = new ymaps.Placemark([56.013990, 92.882036], {
                            iconCaption: 'Юридический адрес',
                            balloonContent: 'г. Красноярск, ул. Ленина/Парижской Коммуны, д. 29/30 кв. 26'
                        }, {
                            preset: 'islands#greenDotIconWithCaption',
                            iconColor: '#198443'
                        }),

                        myPlacemark2 = new ymaps.Placemark([56.020174, 92.901413], {
                            iconCaption: 'Фактический адрес',
                            balloonContent: 'г. Красноярск, ул. Белинского, д. 8, офис В5-1-1'
                        }, {
                            preset: 'islands#greenDotIconWithCaption',
                            iconColor: '#198443'
                        }),

                        myPlacemark3 = new ymaps.Placemark([55.988354, 92.966694], {
                            iconCaption: 'Адрес производства',
                            balloonContent: 'г. Красноярск, ул. Новая д. 13'
                        }, {
                            preset: 'islands#greenDotIconWithCaption',
                            iconColor: '#198443'
                        }),

                        myPlacemark4 = new ymaps.Placemark([53.720891, 91.363399], {
                            iconCaption: 'Адрес склада с/х продукции',
                            balloonContent: 'г. Абакан, Молодёжный квартал, д. 5д, стр. 3'
                        }, {
                            preset: 'islands#greenDotIconWithCaption',
                            iconColor: '#198443'
                        });

                    myMap.geoObjects
                        .add(myPlacemark1)
                        .add(myPlacemark2)
                        .add(myPlacemark3)
                        .add(myPlacemark4);

                    var control = myMap.controls.get('routeButtonControl');
                    // Зададим координаты пункта отправления с помощью геолокации.
                    // control.routePanel.geolocate('from');

                    // Откроем панель для построения маршрутов.
                    // control.state.set('expanded', true);
                    $('.address1').on('click',function () {
                        myMap.setCenter([56.013990, 92.882036]);
                        myMap.setZoom(15);
                        myPlacemark1.balloon.open();
                    });
                    $('.address2').on('click',function () {
                        myMap.setCenter([56.020174, 92.901413]);
                        myMap.setZoom(15);
                        myPlacemark2.balloon.open();
                    });
                    $('.address3').on('click',function () {
                        myMap.setCenter([55.988354, 92.966694]);
                        myMap.setZoom(15);
                        myPlacemark3.balloon.open();
                    });
                    $('.address4').on('click',function () {
                        myMap.setCenter([53.720891, 91.363399]);
                        myMap.setZoom(15);
                        myPlacemark4.balloon.open();
                    });
                    myMap.behaviors.disable('scrollZoom');
                });
                //==
            })
        </script>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>