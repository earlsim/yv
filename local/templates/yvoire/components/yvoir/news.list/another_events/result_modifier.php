<?
global $arFilter;
$arResult = Array();
$dates = date("d.m.Y");
$arSelect = Array("DATE_ACTIVE_FROM","ID", "CODE", "NAME","IBLOCK_ID","DETAIL_PAGE_URL", "PROPERTY_TIME", "PROPERTY_LOCATION", "SITE_DIR");
$arFilter = Array("IBLOCK_ID"=> $arResult["IBLOCK_ID"], "ACTIVE" => "", ">DATE_ACTIVE_FROM" => ConvertDateTime($dates, "DD.MM.YYYY"), "!ID"=> $arResult['ID']);
$res = CIBlockElement::GetList(Array("SORT"=>"DESC", "PROPERTY_PRIORITY"=>"ASC"), $arFilter, $arSelect);


while($ar_fields = $res->GetNext())
{
    $arResult["ITEMS"][] = $ar_fields;

}
?>