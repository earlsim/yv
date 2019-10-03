<?php
$coords = explode(",", $arResult["DISPLAY_PROPERTIES"]["map"]["VALUE"]);
$arResult["MAP"]["LAT"] = $coords[0];
$arResult["MAP"]["LON"] = $coords[1];
//0 -34
foreach ($arResult["DISPLAY_PROPERTIES"]["galery"]["VALUE"] as $id => $slide) {
    $fileArr = CFile::ResizeImageGet($arResult["DISPLAY_PROPERTIES"]["galery"]["VALUE"][$id], Array("width" => 600, "height" => 400), BX_RESIZE_IMAGE_PROPORTIONAL , false);
    $arResult["SLIDES"][$id]= $fileArr["src"];

}
