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
<!--CFile::GetArray()-->
<div class="form-block main-p">
    <div class="container flex-fs-fs">
        <img src="<?php echo $arResult["DETAIL_PICTURE"]["SRC"];?>" alt="" class="form-block-bg">
        <div class="form-block-item">
          <?php echo $arResult["PROPERTIES"]["VALUES"]["~VALUE"]['TEXT'];?>
        </div>
    </div>
</div>
<div class="benefits main-p">
  <div class="container flex">
    <?php foreach ($arResult['BENEFITS'] as $benefitsItem):?>
        <div class="benefit">
            <img src="<?php echo $benefitsItem['src']?>" alt="">
            <div class="text"><?php echo $benefitsItem['DESCRIPTION']?></div>
        </div>
    <?php endforeach;?>
  </div>

</div>
<div class="desc">
    <div class="container">
      <?php echo $arResult["DETAIL_TEXT"];?>
    </div>
</div>
