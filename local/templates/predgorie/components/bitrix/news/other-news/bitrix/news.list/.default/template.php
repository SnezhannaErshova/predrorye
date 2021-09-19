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
<div class="container">
    <div class="news-items flex-fs-fs">
      <?foreach($arResult["ITEMS"] as $arItem):?>
          <div class="news-item">
              <div class="news-item-wrap">
                  <div class="news-item-top">
                      <div class="news-item_img">
                          <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>"/>
                      </div>
                      <div class="news-item_date"><?=CIBlockFormatProperties::DateFormat("j F Y", MakeTimeStamp($arItem['TIMESTAMP_X'], CSite::GetDateFormat()))?></div>
                      <strong class="title-sm"><?echo $arItem["NAME"]?></strong>
                      <div class="desc"><?echo $arItem["PREVIEW_TEXT"];?></div>
                  </div>
                  <a class="link" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Читать новость</a>
              </div>

          </div>
      <?endforeach;?>
    </div>
</div>
