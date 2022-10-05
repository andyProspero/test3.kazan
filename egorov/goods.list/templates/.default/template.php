<?php

echo '<h2>Goods List</h2>';

// подключаем BS для наглядности
use Bitrix\Main\UI\Extension;
Extension::load('ui.bootstrap4');

// На странице должно отобразиться ID товара, Название товара
foreach ($arResult['GOODS'] as $key => $item)
{?>

    <div class="list-group">
        <div class="list-group-item item_<?=$key?>">
            <?php
                echo '<b>ID</b> ' . $item['ID'] . ', <b>NAME</b> ' . $item['NAME'];
            ?>
        </div>
    </div>

<?php }
