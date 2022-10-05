# Компонент Список пользователей
Выводит список пользователей указанных в компоненте групп

- Подключение на странице
 
```php
    $APPLICATION->IncludeComponent(
    "egorov:admin.list",
    "",
    Array()
);
```

- Группа пользователей жёстко указана в компоненте

```php
   $filter =
    [
        // needed user groups
        "GROUPS_ID"=> [1]
    ];
```