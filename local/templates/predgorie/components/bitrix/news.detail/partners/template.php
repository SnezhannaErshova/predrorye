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

<div class="partners">
	<div class="container">
		<div class="partners-docs">
			<h2 class="title">Уставные документы</h2>
            <div class="partners-docs-items flex">
          <?
          $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PROPERTY_DOC");
          $arFilter = Array("IBLOCK_ID"=>"8", "SECTION_ID"=>"1", "ACTIVE"=>"Y");
          $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
          while($ob = $res->GetNextElement())
          {
            $arFields = $ob->GetFields();
            $img = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
            $doc = CFile::GetPath($arFields["PROPERTY_DOC_VALUE"]);
            ?>
              <a href="<?php echo $doc;?>" target="_blank" class="partners-docs-item" style="display: block;">
                  <div class="docs-item-wrap">
<!--                      <a class="partners-docs-item_img" data-fancybox="docs" href="--><?//= $img; ?><!--">-->
                          <img src="<?= $img; ?>" />
<!--                      </a>-->
                      <strong class="title-sm"><?= $arFields["NAME"]; ?></strong>
                  </div>

              </a>
            <?php
          }
          ?>

			</div>
		</div>
		<div class="flex partners-bottom">
			<div>
				<h2 class="title">Адрес</h2>
				<div class="address"><?= $arResult['PROPERTIES']['ADDRESS']['~VALUE']['TEXT']; ?></div>
				<a href="mailto:<?= strip_tags($arResult['PROPERTIES']['EMAIL']['~VALUE']); ?>">
					<strong>Email: </strong>
					<span><?= $arResult['PROPERTIES']['EMAIL']['~VALUE']; ?></span>
				</a>
				<a href="tel:<?= strip_tags($arResult['PROPERTIES']['PHONE']['~VALUE']); ?>">
					<strong>Тел.: </strong>
					<span><?= $arResult['PROPERTIES']['PHONE']['~VALUE']; ?></span>
				</a>
			</div>
			<div>
				<h2 class="title">Реквизиты</h2>
				<div><?= $arResult['PROPERTIES']['REQUISITES']['~VALUE']['TEXT']; ?></div>
			</div>
		</div>
	</div>
</div>