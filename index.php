<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><div class="main-banner">
	 <?
    $APPLICATION->IncludeFile(
    "/include/main-page/banner.php",
    Array(),
    Array(
      "MODE"      => "php",
    ));
  ?>
</div>
<div class="form-block-grey" id="get_price">
	<div class="form-block main-p">
		<div class="container flex-fs-fs">
			 <?
          $APPLICATION->IncludeFile(
            "/include/main-page/form-block.php",
            Array(),
            Array(
              "MODE"      => "php",
            ));
          ?>
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
		"FORM_ID" => "11",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array("DEFAULT"),
		"JQUERY_EN" => "jquery3",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array("phone"),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "ALX_DATE",
		"NOT_CAPTCHA_AUTH" => "N",
		"PROPERTY_FIELDS" => array("mail","city","name","phone","product"),
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
	</div>
</div>
<div class="main-about main-p">
	 <?
  $APPLICATION->IncludeFile(
    "/include/main-page/about-company.php",
    Array(),
    Array(
      "MODE"      => "php",
    ));
  ?>
</div>
<div class="reviews main-p">
	<div class="reviews-bg">
	</div>
	 <?
  $APPLICATION->IncludeFile(
    "/include/main-page/reviews.php",
    Array(),
    Array(
      "MODE"      => "php",
    ));
  ?>
</div>
<div class="bottom-form">
	<div class="form-block main-p" style="background-image: url('/local/templates/predgorie/images/form-bg.jpg')">
		<div class="container flex-fs-fs">
			 <?
          $APPLICATION->IncludeFile(
            "/include/main-page/bottom-form.php",
            Array(),
            Array(
              "MODE"      => "php",
            ));
          ?>
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
	</div>
</div>
 <br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>