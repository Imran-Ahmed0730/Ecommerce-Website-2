<script src="{{asset('/')}}/front-end/assets/js/vendor.js"></script>
<script src="{{asset('/')}}/front-end/assets/js/main.js"></script>

<script type="text/javascript"
        src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="{{asset('/')}}/front-end/assets/js/jquery.preloadinator.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}/front-end/assets/js/jquery.picZoomer.js"></script>
<script type="text/javascript">
    $(function() {
        $('.picZoomer').picZoomer();


        //切换图片
        $('.piclist li').on('click',function(event){
            var $pic = $(this).find('img');
            $('.picZoomer-pic').attr('src',$pic.attr('src'));
        });
    });
</script>
<script>
    $('.js-preloader').preloadinator({
        minTime: 2000
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
