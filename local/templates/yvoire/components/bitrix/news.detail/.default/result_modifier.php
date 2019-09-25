<?php
$arSelect =Array("ID", "NAME", "PROPERTY_DOCTOR_INFO", "PROPERTY_DOCTOR_PHOTO");
$arFilter = Array("IBLOCK_ID" => 5, "ACTIVE"=>"Y", "ID" => $arResult['PROPERTIES']['DOCTOR_NAME']["VALUE"]);
$res = CIBlockElement::GetList(Array(), $arFilter, $arSelect);

$ob = $res->GetNextElement();
    $arFields = $ob->GetFields();
    $arResult['DOCTOR_INFO'] = $arFields;
    $arFile = CFile::GetPath($arResult['DOCTOR_INFO']["PROPERTY_DOCTOR_PHOTO_VALUE"]);
    $arResult['DOCTOR_PIC'] = $arFile;

$arSelect =Array("ID", "NAME", "PROPERTY_MAP", "PROPERTY_ADDRESS", "PROPERTY_GALERY");
$arFilter = Array("IBLOCK_ID" => 6, "ACTIVE"=>"Y", "ID" => $arResult['PROPERTIES']['LOCATION']["VALUE"]);
$res = CIBlockElement::GetList(Array(), $arFilter, $arSelect);

    $ob = $res->GetNextElement();
    $arFields = $ob->GetFields();
    $arResult['LOC_INFO'] = $arFields;

