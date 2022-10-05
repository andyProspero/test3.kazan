<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

CModule::IncludeModule("iblock");

$result = CIBlockElement::GetList(
    ["ID"=>"DESC"],
    [
        "IBLOCK_ID"     =>  IntVal($arParams['IBLOCK']),
        "SECTION_ID"    =>  $arParams['CATEGORY']
    ],
    false,
    [],
    ["ID", "NAME"]
);

while($arItem = $result->GetNext()){
    $goods[] = $arItem;
}

$this->arResult['GOODS'] = $goods;

$this->IncludeComponentTemplate();

