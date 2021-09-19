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

<!--    <img src="--><?php //echo $arResult["PREVIEW_PICTURE"]["SRC"];?><!--" alt="" class="form-block-bg">-->

        <img src="<?php echo $arResult["PREVIEW_PICTURE"]["SRC"];?>" alt="" class="form-block-bg">
        <div class="form-block-item">
            <h2><?php echo $arResult["NAME"];?></h2>
            <div class="text"><?php echo $arResult["PREVIEW_TEXT"];?></div>
        </div>

