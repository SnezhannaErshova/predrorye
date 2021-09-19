<?
	$page = $APPLICATION->GetCurPage();
	if (strpos($page, 'novosti')) {
		$page = '/novosti/';
	}
	CModule::IncludeModule("iblock");
	$arSelect = Array("ID", "NAME", "PROPERTY_BG", "PROPERTY_PAGE");
	$arFilter = Array("IBLOCK_ID"=>6, "PROPERTY_PAGE" => $page."index.php");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	$arFields = array();
	while($ob = $res->Fetch()){
		$arFields = $ob;
	}
?>

<div class="page-header" style="background: url(<?=CFile::GetPath($arFields['PROPERTY_BG_VALUE']); ?>) no-repeat 50% 50%/cover;">
	<div class="container">
		<div class="flex-c">
			<a href="/">
				<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="24" cy="24" r="24" transform="rotate(-180 24 24)" fill="#90A4AE"/>
					<rect x="26.7573" y="19.7574" width="8" height="2" rx="1" transform="rotate(135 26.7573 19.7574)" fill="white"/>
					<rect x="25.3431" y="29.6569" width="8" height="2" rx="1" transform="rotate(-135 25.3431 29.6569)" fill="white"/>
				</svg>
			</a>
			<h1><?= $APPLICATION->GetTitle(); ?></h1>
		</div>
	</div>
</div>