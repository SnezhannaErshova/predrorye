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
    <div class="catalog-items flex-fs-fs">
      <?foreach($arResult["ITEMS"] as $arItem):?>
          <div class="catalog-item">
              <div class="catalog-item-wrap">
                  <div class="catalog-item-top flex-c">
                      <div class="catalog-item_img">
                          <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?echo $arItem["NAME"]?>"/>
                      </div>
                      <div class="catalog-item_info">
                          <strong class="title-sm"><?echo $arItem["NAME"]?></strong>
                          <div><?echo $arItem["PREVIEW_TEXT"];?></div>
                          <a class="btn-hover main-btn">Подробнее</a>
                      </div>
                  </div>

                  <div class="catalog-item_desc"><?= $arItem['PROPERTIES']['DESC']['~VALUE']['TEXT']; ?></div>
              </div>

          </div>
      <?endforeach;?>
    </div>
</div>
