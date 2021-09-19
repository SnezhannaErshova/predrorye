<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="other-news">
  <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="other-news-item">
        <div class="news-item_date"><?=CIBlockFormatProperties::DateFormat("j F Y", MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat()))?></div>
        <h3><?php echo $arItem["NAME"]?></h3>
        <a class="link" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Читать новость</a>
    </div>
  <?php endforeach;?>
</div>
