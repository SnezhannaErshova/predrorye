<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><div class="page-about">
	 <? $APPLICATION->IncludeFile("/include/second-page/header.php", Array(), Array("MODE" => "php"));?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"page-about",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "3",
		"FIELD_CODE" => array("DETAIL_PICTURE",""),
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("VALUES","BENEFITS"),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>
</div>
<!--<div class="about-news main-p">-->
<!--	<div class="container">-->
<!--		<h2>Новости компании</h2>-->
<!--		<div class="news-block">-->
<!--			 --><?//$APPLICATION->IncludeComponent(
//	"bitrix:news",
//	"news",
//	Array(
//		"ADD_ELEMENT_CHAIN" => "N",
//		"ADD_SECTIONS_CHAIN" => "N",
//		"AJAX_MODE" => "N",
//		"AJAX_OPTION_ADDITIONAL" => "",
//		"AJAX_OPTION_HISTORY" => "N",
//		"AJAX_OPTION_JUMP" => "N",
//		"AJAX_OPTION_STYLE" => "Y",
//		"BROWSER_TITLE" => "-",
//		"CACHE_FILTER" => "N",
//		"CACHE_GROUPS" => "Y",
//		"CACHE_TIME" => "36000000",
//		"CACHE_TYPE" => "A",
//		"CHECK_DATES" => "Y",
//		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
//		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
//		"DETAIL_DISPLAY_TOP_PAGER" => "N",
//		"DETAIL_FIELD_CODE" => array("",""),
//		"DETAIL_PAGER_SHOW_ALL" => "N",
//		"DETAIL_PAGER_TEMPLATE" => "",
//		"DETAIL_PAGER_TITLE" => "Страница",
//		"DETAIL_PROPERTY_CODE" => array("",""),
//		"DETAIL_SET_CANONICAL_URL" => "N",
//		"DISPLAY_BOTTOM_PAGER" => "N",
//		"DISPLAY_DATE" => "Y",
//		"DISPLAY_NAME" => "Y",
//		"DISPLAY_PICTURE" => "Y",
//		"DISPLAY_PREVIEW_TEXT" => "Y",
//		"DISPLAY_TOP_PAGER" => "N",
//		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
//		"IBLOCK_ID" => "7",
//		"IBLOCK_TYPE" => "content",
//		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
//		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
//		"LIST_FIELD_CODE" => array("",""),
//		"LIST_PROPERTY_CODE" => array("",""),
//		"MESSAGE_404" => "",
//		"META_DESCRIPTION" => "-",
//		"META_KEYWORDS" => "-",
//		"NEWS_COUNT" => "2",
//		"PAGER_BASE_LINK_ENABLE" => "N",
//		"PAGER_DESC_NUMBERING" => "N",
//		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//		"PAGER_SHOW_ALL" => "N",
//		"PAGER_SHOW_ALWAYS" => "N",
//		"PAGER_TEMPLATE" => ".default",
//		"PAGER_TITLE" => "Новости",
//		"PREVIEW_TRUNCATE_LEN" => "",
//		"SEF_MODE" => "N",
//		"SET_LAST_MODIFIED" => "N",
//		"SET_STATUS_404" => "N",
//		"SET_TITLE" => "N",
//		"SHOW_404" => "N",
//		"SORT_BY1" => "ACTIVE_FROM",
//		"SORT_BY2" => "SORT",
//		"SORT_ORDER1" => "DESC",
//		"SORT_ORDER2" => "ASC",
//		"STRICT_SECTION_CHECK" => "N",
//		"USE_CATEGORIES" => "N",
//		"USE_FILTER" => "N",
//		"USE_PERMISSIONS" => "N",
//		"USE_RATING" => "N",
//		"USE_RSS" => "N",
//		"USE_SEARCH" => "N",
//		"USE_SHARE" => "N",
//		"VARIABLE_ALIASES" => Array("ELEMENT_ID"=>"ELEMENT_ID","SECTION_ID"=>"SECTION_ID")
//	)
//);?>
<!--		</div>-->
<!-- <a href="/novosti/" class="main-btn">Смотреть все новости</a>-->
<!--	</div>-->
<!--</div>-->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>