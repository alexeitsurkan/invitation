$().ready(function () {

    //полноэкранный скролл
    $('#fullpage').fullpage({
        //options here
        autoScrolling: true,
        scrollHorizontally: true,
        // navigation: true,
        css3:false,
        afterLoad: function(anchorLink, index){
        },

        onLeave: function(index, nextIndex, direction){

        }
    });

    //счетчик до даты мероприятия
    let dateEnd = new Date('2021', '07', '14', '18', '00');
    setInterval(function(){
        let dateStart = new Date();
        let diff = dateEnd - dateStart;

        let day = Math.floor(diff / 1000 / 60 / 60 / 24);
        let hour = Math.floor((diff - (day * 24 * 60 * 60 * 1000)) / 1000 / 60 / 60);
        let min = Math.floor((diff - (day * 24 * 60 * 60 * 1000) - (hour * 1000 * 60 * 60)) / 1000 / 60);
        let sec = Math.floor((diff - (day * 24 * 60 * 60 * 1000) - (hour * 1000 * 60 * 60) - (min*1000*60)) / 1000);

        let counter = $('body').find('.counter:first');
        counter.find('.day:first').text(day);
        counter.find('.hour:first').text(hour);
        counter.find('.min:first').text(min);
        counter.find('.sec:first').text(sec);
    }, 1000);
});