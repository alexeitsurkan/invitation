<?php

use app\assets\SiteBundle;

/**
 * @var $invitation
 */

SiteBundle::register($this);
$this->title = 'Свадьба Алексея и Марины';
?>

<div class="clouds">

    <div id="fullpage">
        <div class="section header">
            <div class="content">
                <div id="kg"></div>
                <div id="date">
                    <div>14 августа 2021</div>
                    <div>ресторан Прага</div>
                </div>
                <div id="lunaplane">
<!--                    <a id="btn-weekend" href="#section2">Weekend</a>-->
<!--                    <a id="btn-travel" href="#section3">Travel</a>-->
<!--                    <a id="btn-resort" href="#section4">Resort</a>-->
<!--                    <a id="btn-registry" href="#section5">Registry</a>-->
                </div>
            </div>
        </div>
        <div class="section inviting">
            <div class="content">
                <img class="ungle lt" src="/img/ungle.png">
                <img class="ungle lb" src="/img/ungle.png">
                <img class="ungle rt" src="/img/ungle.png">
                <img class="ungle rb" src="/img/ungle.png">
                <div class="title">Приглашение на свадьбу!</div>
                <p class="text">
                    <?= $invitation ?>
                </p>
                <div class="control">
                    <button value="1" class="btn b-success">Принять</button>
                    <button value="0" class="btn b-danger">Отказаться</button>
                </div>
            </div>

        </div>
        <div class="section counter-block">
            <div id="parashut"></div>
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
</div>
