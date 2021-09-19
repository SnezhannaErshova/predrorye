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

<div class="container about-wrap flex-fs-fs">
    <div class="about-item">
        <h2><?=$arResult["NAME"]?></h2>
        <div class="desc"><?php echo $arResult['PREVIEW_TEXT']; ?></div>
        <a href="/o-kompanii/" class="main-btn">Подробнее</a>
    </div>
    <div class="about-item benefits">
      <?php foreach ($arResult['BENEFITS'] as $benefitsItem):?>
          <div class="benefit flex-c">
              <img src="<?php echo $benefitsItem['src']?>" alt="">
              <div class="text"><?php echo $benefitsItem['DESCRIPTION']?></div>
          </div>
      <?php endforeach;?>
    </div>
</div>



<?php //echo $arResult['PROPERTIES']['BENEFITS']; ?>

<!--<pre>-->
<!--  --><?php //var_dump($arResult['BENEFITS']); ?>
<!--</pre>-->
