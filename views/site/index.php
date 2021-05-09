<?php

use app\assets\SiteBundle;

/**
 * @var $invitation
 */

SiteBundle::register($this);
$this->title = 'Свадьба Алексея и Марины';
?>


<div id="fullpage">
    <div class="section header">
        <div class="content">
            <div class="logo"></div>
            <div class="faces">
                <div class="face_img men"
                     style="background-image: url(/img/alex.jpg); background-size: cover; background-position: center center; background-repeat: no-repeat;"></div>
                <div class="face_img women"
                     style="background-image: url(/img/marin.jpg); background-size: cover; background-position: center center; background-repeat: no-repeat;"></div>
            </div>
            <div class="info">
                <div class="men">
                    <span>жених:</span>
                    <div class="fio">Цуркан Алексей Эдуардович</div>
                </div>
                <div class="women">
                    <span>невеста:</span>
                    <div class="fio">Тяпкина Марина Сергеевна</div>
                </div>
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
                <button type="submit" value="0" class="btn b-success">Принять</button>
                <button type="submit" value="1" class="btn b-danger">Отказаться</button>
            </div>
        </div>

    </div>
    <div class="section counter-block">
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
