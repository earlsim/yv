<?php
$arSelect =Array("ID", "NAME", "PROPERTY_DOCTOR_INFO", "PROPERTY_DOCTOR_PIC");
$arFilter = Array("IBLOCK_ID" => 5, "ACTIVE"=>"Y", "ID" => $arResult['PROPERTIES']['DOCTOR_NAME']["VALUE"]);
$res = CIBlockElement::GetList(Array(), $arFilter, $arSelect);

$ob = $res->GetNextElement();
    $arFields = $ob->GetFields();
    $arResult['DOCTOR_INFO'] = $arFields;
    $arFile = CFile::GetPath($arResult['DOCTOR_INFO']["PROPERTY_DOCTOR_PIC_VALUE"]);
    $arResult['DOCTOR_PIC'] = $arFile;

$arSelect =Array("ID", "NAME","PREVIEW_PICTURE", "PROPERTY_MAP", "PROPERTY_*");
$arFilter = Array("IBLOCK_ID" => 6, "ACTIVE"=>"Y", "ID" => $arResult['PROPERTIES']['LOCATION']["VALUE"]);
$res = CIBlockElement::GetList(Array(), $arFilter, $arSelect);

    $ob = $res->GetNextElement();
    $arFields = $ob->GetFields();
    $arResult['LOC_INFO'] = $arFields;
    $arFile = CFile::GetPath($arResult["LOC_INFO"]["PREVIEW_PICTURE"]);
    $arResult["LOC_INFO"]["PREVIEW_SRC"] = $arFile;


$locLink = $arResult["DISPLAY_PROPERTIES"]["LOCATION"]["DISPLAY_VALUE"];
$locLink = explode('"',$locLink);
$locLink = $locLink[1];
$arResult['LOC_INFO']['LOC_LINK'] = $locLink;