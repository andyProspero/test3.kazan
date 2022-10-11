<?php

    // I. Первая задача с джойном --- //

    // SQL
    // SELECT id, name, name_group
    // FROM Users
    // WHERE group = 1


    // при работе в PHP
    // 1. Прописываем доступы к БД
    // $host, $user, $password, $db_name

    // 2. Соединяемся с БД используя доступы, функция mysqli_connect()
    $link = mysqli_connect($host, $user, $password, $db_name);

    // 3. Обращаемся к БД
    $query = "
        SELECT id, name, name_group
        FROM Users
        WHERE group = 1
    ";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    // преобразуем в нормальный массив
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    // выносим данный массив и достаём из него данные где требуется
    // foreach ($data as $itemData)

    // * при работе в Битрикс такими делами мы не занимаемся, а используем ORM, D7 в соотв. с документацией


    // II. Вторая задача с примерами гетлиста --- //
    /*
     *  Я чаще использовал вариант B
     *  GetNext - нестатический метод, возвращающий данные в безопасном HTML-виде, требует наличия ID и IBLOCK_ID в параметрах.
     *  Способ получить данные таким образом используется часто.
     *  GetList - метод статический, выборка определяется select, filter, указываются требуемые поля, на большинстве проектов даже с минимальной кастомизацией ранее использовался этот метод.
     *
     *  Вариант A тоже имеет место быть, встречался на проектах, но этот метод нужно использовать там, где не требуется фильтровать активность элементов, а просто жёстко получить данные. Метод CIBlockElement::GetByID - https://dev.1c-bitrix.ru/api_help/iblock/classes/ciblockelement/getbyid.php
    */

    // остальные задачи отдельно и позже