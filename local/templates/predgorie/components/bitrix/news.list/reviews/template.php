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
  <h2>Отзывы</h2>
  <div class="reviews-slider swiper-container">
    <div class="swiper-wrapper">
      <?php $i = 0;?>
      <?foreach($arResult["ITEMS"] as $arItem):?>
          <div class="review-item swiper-slide">
              <div class="item-top flex-c">
                  <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
                  <div class="info">
                      <div class="name"><?=$arItem["NAME"];?></div>
                      <div class="text"><?=$arItem["PREVIEW_TEXT"];?></div>
                  </div>
              </div>
              <div class="item-desc">
                <?=$arItem["DETAIL_TEXT"];?>
              </div>
          </div>
      <?php $i++;?>
      <?php endforeach;?>
    </div>
      <div class="arrows flex-c">
          <div class="swiper-button-prev"></div>
          <div class="arrows-num">
              <div class="swiper-pagination"></div>
<!--              01 - 0--><?php //echo $i;?>
          </div>
          <div class="swiper-button-next"></div>
      </div>

  </div>
</div>
