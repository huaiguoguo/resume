<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title); ?>tttt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <?= Html::csrfMetaTags() ?>


    <link rel="shortcut icon" href="http://www.redefin.io/wp-content/themes/redefinio/favicon.ico" type="image/x-icon"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- This site is optimized with the Yoast SEO plugin v3.2 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description"
          content="Build beautiful resumes online for free. Download printable PDF or use unique URL to share your CV with others."/>
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="http://www.redefin.io/"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Redefinio - Free CV builder online"/>
    <meta property="og:description"
          content="Build beautiful resumes online for free. Download printable PDF or use unique URL to share your CV with others."/>
    <meta property="og:url" content="http://www.redefin.io/"/>
    <meta property="og:site_name" content="Redefinio"/>
    <meta property="og:image" content="http://www.redefin.io/wp-content/uploads/2016/08/facebook_og.jpg"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description"
          content="Build beautiful resumes online for free. Download printable PDF or use unique URL to share your CV with others."/>
    <meta name="twitter:title" content="Redefinio - Free CV builder online"/>
    <meta name="twitter:image" content="http://www.redefin.io/wp-content/uploads/2016/08/facebook_og.jpg"/>
    <script type='application/ld+json'>
        {"@context":"http:\/\/schema.org","@type":"WebSite","url":"http:\/\/www.redefin.io\/","name":"Redefinio - Free CV builder online","alternateName":"Build beautiful resumes online for free.","potentialAction":{"@type":"SearchAction","target":"http:\/\/www.redefin.io\/?s={search_term_string}","query-input":"required name=search_term_string"}}
    </script>
    <script type='application/ld+json'>
        {"@context":"http:\/\/schema.org","@type":"Organization","url":"http:\/\/www.redefin.io\/","sameAs":[],"name":"Redefinio","logo":"http:\/\/www.redefin.io\/wp-content\/uploads\/2016\/04\/rdfn.jpg"}
    </script>
    <!-- / Yoast SEO plugin. -->

    <link rel="alternate" type="application/rss+xml" title="Redefinio &raquo; Frontpage Comments Feed"
          href="http://www.redefin.io/frontpage/feed/"/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
            "ext": ".png",
            "source": {"concatemoji": "http:\/\/www.redefin.io\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.4"}
        };
        !function (a, b, c) {
            function d(a) {
                var c, d, e, f = b.createElement("canvas"), g = f.getContext && f.getContext("2d"), h = String.fromCharCode;
                if (!g || !g.fillText)return !1;
                switch (g.textBaseline = "top", g.font = "600 32px Arial", a) {
                    case"flag":
                        return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3;
                    case"diversity":
                        return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
                    case"simple":
                        return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0];
                    case"unicode8":
                        return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]
                }
                return !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var f, g, h, i;
            for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (g = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <!--
    <link rel='stylesheet' id='ual-style-css-css'
          href='http://www.redefin.io/wp-content/plugins/user-activity-log/css/style.css?ver=4.5.4' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='cssMain-css'
          href='http://www.redefin.io/wp-content/themes/redefinio/assets/css/main.css?ver=4.5.4' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='fontsGoogle-css'
          href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C600italic%2C700%2C700italic%2C400italic%2C300italic%2C300&#038;ver=4.5.4'
          type='text/css' media='all'/>


    <script type='text/javascript'
            src='/js/confeti.js?ver=4.5.4'></script>
    <script type='text/javascript'
            src='/js/bootstrap.modal.js?ver=4.5.4'></script>

    <script type='text/javascript'
            src='http://www.redefin.io/wp-content/themes/redefinio/assets/js/main.js?ver=1.0'></script>

    <link rel='https://api.w.org/' href='http://www.redefin.io/wp-json/'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.redefin.io/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="http://www.redefin.io/wp-includes/wlwmanifest.xml"/>
    <link rel='shortlink' href='http://www.redefin.io/'/>
    <link rel="alternate" type="application/json+oembed"
          href="http://www.redefin.io/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.redefin.io%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="http://www.redefin.io/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.redefin.io%2F&#038;format=xml"/>
    -->
    <?php $this->head() ?>


</head>


<body class="home page page-id-2 page-template page-template-front-page page-template-front-page-php">


<?php $this->beginBody() ?>


<?= $content; ?>


<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>