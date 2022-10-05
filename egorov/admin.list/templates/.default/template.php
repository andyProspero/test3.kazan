<?php

echo '<h2>User List</h2>';

// подключаем BS для наглядности
use Bitrix\Main\UI\Extension;
Extension::load('ui.bootstrap4');

// На странице должен отобразиться Логин, Email, Имя, Фамилия
foreach ($arResult['USER_LIST'] as $key => $user)
{?>

    <div class="list-group">
        <div class="list-group-item item_id_<?=$user['ID']?>">
            <?php
                echo '<b>LOGiN</b> ' . $user['LOGIN'] . '<br>';
                if($user['NAME'])
                    echo '<b>NAME</b> ' . $user['NAME'] . '<br>';
                if($user['LAST_NAME'])
                    echo '<b>LAST_NAME</b> ' . $user['LAST_NAME'] . '<br>';
                if($user['EMAIL'])
                    echo '<b>EMAIL</b> ' . $user['EMAIL'];
            ?>
        </div>
    </div>

<?php }
