<?php
$coords = explode(",", $arResult["DISPLAY_PROPERTIES"]["map"]["VALUE"]);
$arResult["MAP"]["LAT"] = $coords[0];
$arResult["MAP"]["LON"] = $coords[1];
//0 -34
foreach ($arResult["DISPLAY_PROPERTIES"]["galery"]["VALUE"] as $id => $slide) {
    $arResult["SLIDES"][$id] = CFile::GetPath($arResult["DISPLAY_PROPERTIES"]["galery"]["VALUE"][$id]);

}
