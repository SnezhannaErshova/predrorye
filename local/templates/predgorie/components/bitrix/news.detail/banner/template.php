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
<div class="banner-wrap" style="background-image: url('<?php echo $arResult["DETAIL_PICTURE"]["SRC"]; ?>')">
    <div class="container">
        <div class="banner-text">
            <h1><?=$arResult["NAME"]?></h1>
            <div><?echo $arResult["PREVIEW_TEXT"];?></div>
        </div>
    </div>
</div>
