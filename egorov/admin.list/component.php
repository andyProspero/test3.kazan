<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$filter =
    [
        // needed user groups
        "GROUPS_ID"=> [1]
    ];

$rsUsers = CUser::GetList(($by="id"), ($order="desc"), $filter);

while($arItem = $rsUsers->GetNext()){

    // На странице должен отобразиться Логин, Email, Имя, Фамилия
    $users[] =
        [
            'ID' => $arItem['ID'],
            'LOGIN' => $arItem['LOGIN'],
            'NAME' => $arItem['NAME'],
            'LAST_NAME' => $arItem['LAST_NAME'],
            'EMAIL' => $arItem['EMAIL']
        ];
}

$this->arResult['USER_LIST'] = $users;

$this->IncludeComponentTemplate();

