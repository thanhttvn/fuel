<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php echo $title; ?>
    </title>
    <link <?php echo Asset::css('bootstrap.css') ?>
    <link <?php echo Asset::css('style.css') ?>
</head>
<body>
<div class="masthead">
    <h1 class="masthead-title">
        <a href="/"><?php echo $title; ?></a>
    </h1>
    <p class="masthead-lead">
        <a href="/login">Login</a>
    </p>

    <hr class="masthead-hr">

    <ul class="masthead-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/about/">About</a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="/resources/">Resources</a>
        </li>
    </ul>
</div>

<div class="listing">

    <?php echo $content; ?>

</div>

<script>
    var _gauges = _gauges || [];
    (function () {
        var t = document.createElement('script');
        t.type = 'text/javascript';
        t.async = true;
        t.id = 'gauges-tracker';
        t.setAttribute('data-site-id', '51341359613f5d301800006c');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
    })();

    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-146052-14', 'getbootstrap.com');
    ga('send', 'pageview');
</script>


</body>
</html>
