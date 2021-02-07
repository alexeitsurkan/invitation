$().ready(function () {
    $(document).on('scroll',function (e) {
        scrollTo();
        console.log(pageYOffset);
    })
});