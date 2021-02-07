<?php

use app\assets\SiteBundle;

SiteBundle::register($this);
$this->title = 'Свадьба Алексея и Марины';
?>


<div id="fullpage">
    <div class="section header">
        <div class="card">
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
        <div class="card">
            <div class="content">
                <div class="title">Приглашение <br/>на свадьбу!</div>
                <p class="text">
                    <b>Дорогие друзья, уважаемые гости!</b><br/>
                    Мы хотим видеть Вас рядом , в самый долгожданный день нашей <br/> жизни,
                    который мы хотим разделить вместе с вами.
                    <br/>
                    Приглашаем Вас на нашу свадьбу,<br/>
                    которая состоится <br/>8.07.2017 в МО г.Химки ,Старбеево,ул.Свердлова д20 к3.<br/>

                    Встречаемся в <b>15:00</b> <br/>
                    Начало торжества в <b>16:00</b>
                </p>
            </div>
        </div>
    </div>
    <div class="section counter-block">
        <div class="card">
            <div class="title">До свадьбы осталось</div>
            <div class="counter">
                <div class="el">
                    <div class="day">12</div>
                    <div class="label">Дней</div>
                </div>
                <div class="el">
                    <div class="hour">12</div>
                    <div class="label">Часов</div>
                </div>
                <div class="el">
                    <div class="min">12</div>
                    <div class="label">Минут</div>
                </div>
                <div class="el">
                    <div class="sec">12</div>
                    <div class="label">Секунд</div>
                </div>
            </div>
        </div>
    </div>
</div>
