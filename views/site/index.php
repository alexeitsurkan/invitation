<?php

use app\assets\SiteBundle;
use app\models\Entity\Person;

/**
 * @var $invitation
 * @var $person_status
 */

SiteBundle::register($this);
$this->title = 'Свадьба Алексея и Марины';

$this->registerJs('
    var yes = '.Person::STATUS_YES.';
    var no = '.Person::STATUS_NO.';
', yii\web\View::POS_END);
?>


<div class="clouds"></div>

<div id="fullpage">
    <div class="section header">
        <div class="content">
            <div id="kg"></div>
            <div id="date">
                <div>14 августа 2021</div>
                <div>ресторан Прага</div>
            </div>
            <div id="lunaplane">
            </div>
        </div>
    </div>
    <div class="section info-block inviting">
        <div class="content">
            <img class="ungle lt" src="/img/ungle.png">
            <img class="ungle lb" src="/img/ungle.png">
            <img class="ungle rt" src="/img/ungle.png">
            <img class="ungle rb" src="/img/ungle.png">
            <div class="title">Приглашение на свадьбу!</div>
            <p class="text">
                <?= $invitation ?>
            </p>
            <?php if($person_status):?>
            <div class="control">
                <button value="<?= Person::STATUS_YES ?>" class="btn b-success">Принять</button>
                <button value="<?= Person::STATUS_NO ?>" class="btn b-danger">Отказаться</button>
            </div>
            <?php endif;?>
        </div>
    </div>
    <div class="section info-block plan">
        <div class="content">
            <div class="title">Что, Где и Когда!</div>
            <ul class="list">
                <li>
                    <div class="dt">
                        <span class="date">14 августа</span>
                        <span class="time">11:00</span>
                    </div>
                    <div class="dot">
                        <div class="dot-one"></div>
                    </div>
                    <div class="info">
                        <span class="title">Выкуп невесты</span>
                        <div class="place">c. Ульма ул. Ленина 33</div>
                    </div>
                </li>
                <li>
                    <div class="dt">
                        <span class="date">14 августа</span>
                        <span class="time">13:00</span>
                    </div>
                    <div class="dot">
                        <div class="dot-one"></div>
                    </div>
                    <div class="info">
                        <span class="title">Welcome - фуршет</span>
                        <div class="place">с. Вадатурково на озере</div>
                    </div>
                </li>
                <li>
                    <div class="dt">
                        <span class="date">14 августа</span>
                        <span class="time">13:30</span>
                    </div>
                    <div class="dot">
                        <div class="dot-one"></div>
                    </div>
                    <div class="info">
                        <span class="title">Церемония бракосочетания</span>
                        <div class="place">с. Вадатурково на озере</div>
                    </div>
                </li>
                <li>
                    <div class="dt">
                        <span class="date">14 августа</span>
                        <span class="time">17:00</span>
                    </div>
                    <div class="dot">
                        <div class="dot-one"></div>
                    </div>
                    <div class="info">
                        <span class="title">Встреча гостей</span>
                        <div class="place">г. Рыбница ресторан "Прага"</div>
                    </div>
                </li>
                <li>
                    <div class="dt">
                        <span class="date">14 августа</span>
                        <span class="time">18:00</span>
                    </div>
                    <div class="dot">
                        <div class="dot-one"></div>
                    </div>
                    <div class="info">
                        <span class="title">Праздничный банкет</span>
                        <div class="place">г. Рыбница ресторан "Прага"</div>
                    </div>
                </li>
                <li>
                    <div class="dt">
                        <span class="date">14 августа</span>
                        <span class="time">22:30</span>
                    </div>
                    <div class="dot">
                        <div class="dot-one"></div>
                    </div>
                    <div class="info">
                        <span class="title">Сладкий торт</span>
                    </div>
                </li>
                <li>
                    <div class="dt">
                        <span class="date">14 августа</span>
                        <span class="time">23:00</span>
                    </div>
                    <div class="dot">
                        <div class="dot-end"></div>
                    </div>
                    <div class="info">
                        <span class="title">Безудержные танцы!</span></div>
                </li>
            </ul>

        </div>
    </div>
    <div class="section counter-block">
        <div class="parashut"></div>
        <div class="content">
            <div class="title">До свадьбы осталось</div>
            <div class="counter">
                <div class="el">
                    <div class="day"></div>
                    <div class="label">Дней</div>
                </div>
                <div class="el">
                    <div class="hour"></div>
                    <div class="label">Часов</div>
                </div>
                <div class="el">
                    <div class="min"></div>
                    <div class="label">Минут</div>
                </div>
                <div class="el">
                    <div class="sec"></div>
                    <div class="label">Секунд</div>
                </div>
            </div>
            <p class="text">Свадьба уже совсем скоро! Подготовка идет полным ходом. Каждую секунду происходит что-то
                новое. Отсчет
                запущен. Поехали!</p>
        </div>
    </div>
</div>
