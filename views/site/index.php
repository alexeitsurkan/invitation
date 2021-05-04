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
        <div class="slide active" id="slide1">
            <div class="content">
                <div class="letter">
                    <div class="title">Приглашение <br/>на свадьбу!</div>
                    <p class="text">
                        <?= $invitation ?>
                    </p>
                    <div class="control_button">
                        <button class="success">Конечно, придем</button>
                        <button class="danger">К сожалению, нет</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="slide2">
            <div class="preferences">
                <div class="title">Ваши предпочтения</div>
                <div class="row">
                    <div class="col">Какую еду предпочитаете?</div>
                    <div class="col">
                        <label>мясо <input type="radio" name="meat" value="мясо"></label>
                        <label>рыба <input type="radio" name="meat" value="рыба"></label>
                        <label>птица <input type="radio" name="meat" value="птица"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">Какие напитки предпочитаете?</div>
                    <div class="col">
                        <label>не пью <input type="radio" name="alcohol" value="не пью"></label>
                        <label>вино <input type="radio" name="alcohol" value="вино"></label>
                        <label>коньяк <input type="radio" name="alcohol" value="коньяк"></label>
                        <label>водка <input type="radio" name="alcohol" value="водка"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section counter-block">
        <div class="content">
            <div class="title">До свадьбы осталось</div>
            <p>Свадьба уже совсем скоро! Подготовка идет полным ходом. Каждую секунду происходит что-то новое. Отсчет
                запущен. Поехали!</p>
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
        </div>
    </div>
    <div class="section wish">
        <div class="content">
            <div class="title">Книга пожеланий</div>
            <div class="form">
                <textarea placeholder="Текст пожелания"></textarea>
                <button>Поделиться</button>
            </div>
            <div class="history">
                <div class="item">
                    <div class="title">Можайская Елена</div>
                    <div class="comment">Пусть ваш дом будет богат детьми, здоровьем, счастьем и друзьями!!</div>
                </div>
                <div class="item">
                    <div class="title">Яна</div>
                    <div class="comment">Чтобы понять насколько ты счастлив, нужно проснуться утром, закрыть глаза и
                        представить, что ты один. Совсем один. А потом резко открыть глаза и понять, что ты уже не
                        будешь один никогда, потому что теперь с тобой рядом и всегда будет рядом твоя вторая половинка.
                        Мне хочется пожелать вам, чтобы вам никогда не захотелось, ни через год, ни через двадцать,
                        закрыть глаза и насладиться тем, что вы можете быть одни. Поздравляю, Вас мои хорошие) жду не
                        дождусь этого дня)
                    </div>
                </div>
                <div class="item">
                    <div class="title">Яна</div>
                    <div class="comment">Чтобы понять насколько ты счастлив, нужно проснуться утром, закрыть глаза и
                        представить, что ты один. Совсем один. А потом резко открыть глаза и понять, что ты уже не
                        будешь один никогда, потому что теперь с тобой рядом и всегда будет рядом твоя вторая половинка.
                        Мне хочется пожелать вам, чтобы вам никогда не захотелось, ни через год, ни через двадцать,
                        закрыть глаза и насладиться тем, что вы можете быть одни. Поздравляю, Вас мои хорошие) жду не
                        дождусь этого дня)
                    </div>
                </div>
                <div class="item">
                    <div class="title">Яна</div>
                    <div class="comment">Чтобы понять насколько ты счастлив, нужно проснуться утром, закрыть глаза и
                        представить, что ты один. Совсем один. А потом резко открыть глаза и понять, что ты уже не
                        будешь один никогда, потому что теперь с тобой рядом и всегда будет рядом твоя вторая половинка.
                        Мне хочется пожелать вам, чтобы вам никогда не захотелось, ни через год, ни через двадцать,
                        закрыть глаза и насладиться тем, что вы можете быть одни. Поздравляю, Вас мои хорошие) жду не
                        дождусь этого дня)
                    </div>
                </div>
                <div class="item">
                    <div class="title">Яна</div>
                    <div class="comment">Чтобы понять насколько ты счастлив, нужно проснуться утром, закрыть глаза и
                        представить, что ты один. Совсем один. А потом резко открыть глаза и понять, что ты уже не
                        будешь один никогда, потому что теперь с тобой рядом и всегда будет рядом твоя вторая половинка.
                        Мне хочется пожелать вам, чтобы вам никогда не захотелось, ни через год, ни через двадцать,
                        закрыть глаза и насладиться тем, что вы можете быть одни. Поздравляю, Вас мои хорошие) жду не
                        дождусь этого дня)
                    </div>
                </div>
                <div class="item">
                    <div class="title">Яна</div>
                    <div class="comment">Чтобы понять насколько ты счастлив, нужно проснуться утром, закрыть глаза и
                        представить, что ты один. Совсем один. А потом резко открыть глаза и понять, что ты уже не
                        будешь один никогда, потому что теперь с тобой рядом и всегда будет рядом твоя вторая половинка.
                        Мне хочется пожелать вам, чтобы вам никогда не захотелось, ни через год, ни через двадцать,
                        закрыть глаза и насладиться тем, что вы можете быть одни. Поздравляю, Вас мои хорошие) жду не
                        дождусь этого дня)
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
