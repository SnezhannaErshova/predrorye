<?php
  foreach ($arResult['PROPERTIES']['BENEFITS']['VALUE'] as $id) {
    $benfits = CFile::GetFileArray($id);
    $benefits_item = CFile::ResizeImageGet($benfits['ID'], $benfits['DESCRIPTION'], array(), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    $benefits_item['DESCRIPTION'] = $benfits['DESCRIPTION'];
    $arResult['BENEFITS'][] = $benefits_item;
  };
?>