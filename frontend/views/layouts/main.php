<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title><?= Html::encode($this->title); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        <?= Html::csrfMetaTags() ?>


        <link rel="shortcut icon" href="http://www.redefin.io/wp-content/themes/redefinio/favicon.ico"
              type="image/x-icon"/>
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

        <style>

            #mlb2-2119963,
            #mlb2-2119963 *,
            #mlb2-2119963 a:hover,
            #mlb2-2119963 a:visited,
            #mlb2-2119963 a:focus,
            #mlb2-2119963 a:active {
                overflow: visible;
                position: static;
                background: none;
                border: none;
                bottom: auto;
                clear: none;
                cursor: default;
                float: none;
                letter-spacing: normal;
                line-height: normal;
                text-align: left;
                text-indent: 0;
                text-transform: none;
                visibility: visible;
                white-space: normal;

                max-height: none;
                max-width: none;
                left: auto;
                min-height: 0;
                min-width: 0;
                right: auto;
                top: auto;
                width: auto;
                z-index: auto;

                text-shadow: none;
                box-shadow: none;
                outline: medium none;
            }

            #mlb2-2119963 h4 {
                font-weight: normal;
            }

            #mlb2-2119963 .subscribe-form {

                padding: 20px;
                width: 270px !important;
                border: 0px solid #BDC3C7 !important;
                background: #FFFFFF none !important;
                -webkit-border-radius: 0px !important;
                -moz-border-radius: 0px !important;
                border-radius: 0px !important;

            }

            #mlb2-2119963 .subscribe-form.ml-block-success {

                width: 270px !important;

            }

            #mlb2-2119963 .subscribe-form .form-section {

                margin-bottom: 20px;
                width: 100%;

            }

            #mlb2-2119963 .subscribe-form .form-section.mb10 {

                margin-bottom: 10px;
                float: left;

            }

            #mlb2-2119963 .subscribe-form .form-section.mb0 {

                margin-bottom: 0px;

            }

            #mlb2-2119963 .subscribe-form .form-section h4 {

                margin: 0px 0px 10px 0px;
                padding: 0px !important;
                color: #27AE60 !important;
                font-family: Arial !important;
                font-size: 20px !important;
                line-height: 100%;
                text-align: !important;

            }

            #mlb2-2119963 .subscribe-form .form-section p {

                line-height: 150%;
                padding: 0px !important;
                margin: 0px 0px 10px 0px;
                color: #000000 !important;
                font-family: Arial !important;
                font-size: 13px !important;

            }

            #mlb2-2119963 .subscribe-form .form-section a {

                font-size: 13px !important;

            }

            #mlb2-2119963 .subscribe-form .form-section .confirmation_checkbox {

                line-height: 150%;
                padding: 0px !important;
                margin: 0px 0px 15px 0px !important;
                color: #000000 !important;
                font-family: Arial !important;
                font-size: 12px !important;
                font-weight: normal !important;

            }

            #mlb2-2119963 .subscribe-form .form-section .confirmation_checkbox input[type="checkbox"] {

                margin-right: 5px !important;

            }

            #mlb2-2119963 .subscribe-form .form-section .form-group {

                margin-bottom: 15px;

            }

            #mlb2-2119963 .subscribe-form .form-section .form-group label {

                float: left;
                margin-bottom: 10px;
                width: 100%;
                line-height: 100%;
                font-weight: bold;
                color: #000000 !important;
                font-family: Arial !important;
                font-size: 13px !important;

            }

            #mlb2-2119963 .subscribe-form .form-section .checkbox {

                width: 100%;
                margin: 0px 0px 10px 0px;

            }

            #mlb2-2119963 .subscribe-form .form-section .checkbox label {

                color: #000000 !important;
                font-family: Arial !important;
                font-size: 13px !important;

            }

            #mlb2-2119963 .subscribe-form .form-section .checkbox input {

                margin: 0px 5px 0px 0px;

            }

            #mlb2-2119963 .subscribe-form .form-section .checkbox input[type=checkbox] {

                -webkit-appearance: checkbox;

            }

            #mlb2-2119963.ml-subscribe-form .form-group .form-control {

                width: 100%;
                font-size: 13px;
                padding: 10px 10px;
                height: auto;
                font-family: Arial;
                border-radius: 3px;
                border: 1px solid #BDC3C7 !important;
                color: #000000 !important;
                background-color: #FFFFFF !important;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                clear: left;

            }

            #mlb2-2119963.ml-subscribe-form button {

                border: none !important;
                cursor: pointer !important;
                width: 100% !important;
                border-radius: 5px !important;
                height: 40px !important;
                background-color: #3db0e5 !important;
                color: #FFFFFF !important;
                font-family: Arial !important;
                font-size: 16px !important;
                text-align: center !important;

            }

            #mlb2-2119963.ml-subscribe-form button.gradient-on {

                background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 100%);
                background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 100%);
                background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 100%);
                background: linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.2) 100%);

            }

            #mlb2-2119963.ml-subscribe-form button.gradient-on:hover {

                background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 100%);
                background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 100%);
                background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 100%);
                background: linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 100%);

            }

            #mlb2-2119963.ml-subscribe-form button[disabled] {

                cursor: not-allowed !important;

            }

            #mlb2-2119963.ml-subscribe-form .form-section.ml-error label {

                color: red !important;

            }

            #mlb2-2119963.ml-subscribe-form .form-group.ml-error label {

                color: red !important;

            }

            #mlb2-2119963.ml-subscribe-form .form-group.ml-error .form-control {

                border-color: red !important;

            }


        </style>


    </head>


    <body class="home page page-id-2 page-template page-template-front-page page-template-front-page-php">


    <?php $this->beginBody() ?>

    <div id="top" class="solid">
        <div class="container">
            <a href="/#header" class="logo" title="Redefinio — Free CV builder online">

                <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#"
                     xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                     xmlns="http://www.w3.org/2000/svg"
                     xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                     xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="140.12765881895416"
                     height="40.276595545009286" version="1.1"
                     style="display: block; margin-left: auto; margin-right: auto;" inkscape:version="0.91 r13725"
                     sodipodi:docname="logo2.svg">
                    <metadata id="metadata3349">
                        <rdf:RDF>
                            <cc:Work rdf:about="">
                                <dc:format>image/svg+xml</dc:format>
                                <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                                <dc:title/>
                            </cc:Work>
                        </rdf:RDF>
                    </metadata>
                    <defs id="defs3347"/>
                    <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10"
                                        gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0"
                                        inkscape:pageshadow="2" inkscape:window-width="1920"
                                        inkscape:window-height="1028"
                                        id="namedview3345" showgrid="false" inkscape:zoom="4.0131962"
                                        inkscape:cx="201.35028" inkscape:cy="67.464699" inkscape:window-x="1358"
                                        inkscape:window-y="-8" inkscape:window-maximized="1"
                                        inkscape:current-layer="svg3336"/>
                    <rect id="backgroundrect" width="140" height="38.300987243652344" x="149.27659606933594"
                          y="40.8388671875" class="selected" style="fill: none; stroke: none;"/>
                    <g class="currentLayer" id="g3339">
                        <!--
                            <title id="title3341" transform="matrix(0.32051282,0,0,0.32348808,148.97105,40.651168) "
                                   stroke-width="0">Layer 1</title>
                        </g>


                        <g><title>Layer 2</title>
                            <path style="display:block" id="logo1"
                                  d="m 13.729722,13.737224 c -0.12821,0 -0.22436,0.129395 -0.22436,0.226441 l 0,1.940929 0,1.940928 c 0,0.129396 0.0962,0.226442 0.22436,0.226442 l 2.98077,0 c 1.18589,0 2.14743,-0.970464 2.14743,-2.16737 0,-1.196906 -0.96154,-2.16737 -2.14743,-2.16737 z m 18.33333,2.037975 c 0,4.625879 -1.98718,8.734178 -5.19231,11.580873 -0.1923,0.161744 -0.51282,0.129395 -0.67307,-0.09705 l -3.23718,-5.111112 c -0.0641,-0.0647 -0.032,-0.194093 0.032,-0.258791 1.53846,-1.585091 2.46795,-3.720113 2.46795,-6.113924 0,-4.787624 -3.84616,-8.7018291 -8.58975,-8.7018291 l -6.66666,0 c -1.8269296,0 -3.3333396,1.488045 -3.3333396,3.3319271 l 0,14.65401 c 0,1.843882 1.50641,3.331927 3.3333396,3.331927 l 2.40384,0 c 0.48077,0 0.89744,-0.420535 0.89744,-0.905767 l 0,-2.523207 c 0,-0.129395 0.0962,-0.226442 0.22436,-0.226442 l 2.78846,0 c 0.1282,0 0.28846,0.09705 0.35256,0.226442 l 4.10257,6.405064 c 0.0962,0.129395 0.0962,0.323488 0,0.452883 l -4.26282,6.696204 c -0.0641,0.129395 -0.22436,0.194093 -0.38462,0.194093 l -2.59615,0 c -0.12821,0 -0.22436,-0.09705 -0.22436,-0.226442 l 0,-2.523207 c 0,-0.485232 -0.41667,-0.905767 -0.89744,-0.905767 l -2.40384,0 c -5.4807696,4e-6 -9.93589964,-4.464131 -9.93589964,-9.995777 l 0,-14.65401 c 0,-5.4992981 4.45513004,-9.99578206 9.93589964,-9.99578206 l 6.66666,0 c 8.39744,0 15.19231,6.89029596 15.19231,15.36568406 z"
                                  class="g1_3" inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="sscsssssscccccsssssssssssccccsssssssssscc"/>
                            <path style="display:block" id="logo2"
                                  d="m 125.17202,9.0789959 c -1.12179,0 -1.95512,0.80872 -1.95512,1.9085791 0,1.067511 0.83333,1.876231 1.95512,1.876231 1.08975,0 1.92308,-0.80872 1.92308,-1.876231 0,-1.0675101 -0.83333,-1.9085791 -1.92308,-1.9085791 m -24.29487,-0.03235 c -3.141018,0 -5.256408,2.3291141 -5.256408,5.8227851 l 0,0.0647 -2.5,0 c -0.22436,0 -0.38461,0.161744 -0.38461,0.355837 l 0,1.973277 c 0,0.194093 0.16025,0.355837 0.38461,0.355837 l 2.5,0 0,7.731365 c 0,0.355837 0.28846,0.679325 0.64103,0.679325 l 1.89102,0 c 0.38462,0 0.67308,-0.323488 0.67308,-0.679325 l 0,-7.731365 3.365388,0 c 0.1923,0 0.35256,-0.161744 0.35256,-0.355837 l 0,-1.973277 c 0,-0.194093 -0.16026,-0.355837 -0.35256,-0.355837 l -3.365388,0 0,-0.0647 c 0,-1.779184 0.92949,-2.846695 2.499998,-2.846695 l 0.32051,0 c 0.22436,0 0.41667,-0.161744 0.48077,-0.388186 l 0.48077,-1.9085791 c 0.0962,-0.29114 -0.0962,-0.582279 -0.41666,-0.614628 -0.38462,-0.0647 -0.83334,-0.0647 -1.31411,-0.0647 M 88.633562,18.977728 c -0.25641,-1.293953 -1.15384,-2.005626 -2.5,-2.005626 -1.3141,0 -2.27564,0.711673 -2.66025,2.005626 -0.032,0.0647 -0.032,0.129395 0.032,0.161744 0.0321,0.0647 0.0962,0.09705 0.16025,0.09705 l 4.77564,0 c 0.0641,0 0.12821,-0.03235 0.16026,-0.0647 0.032,-0.0647 0.0641,-0.129396 0.032,-0.194093 m 3.20513,1.099859 c 0,0.355837 0,0.711674 -0.032,1.067511 0,0.194093 -0.16026,0.323488 -0.35257,0.323488 l -7.75641,0 c -0.0961,0 -0.1282,0.03235 -0.16025,0.09705 -0.0641,0.0647 -0.0641,0.129396 -0.0321,0.194093 0.41666,1.196906 1.44231,1.843882 2.85256,1.843882 0.83333,0 1.44231,-0.226441 1.82692,-0.679325 0.0961,-0.09705 0.22436,-0.161744 0.38462,-0.161744 l 2.78846,0 c 0.0961,0 0.16026,0.03235 0.19231,0.09705 0.032,0.0647 0.0641,0.129395 0.032,0.194092 -0.73718,2.005627 -2.78846,3.234881 -5.28846,3.234881 -3.58975,0 -6.08975,-2.458509 -6.08975,-5.984529 0,-3.52602 2.46795,-5.98453 6.02565,-5.98453 3.26923,0 5.60897,2.426161 5.60897,5.758088 m 45.352568,0.54993 c 0,-1.714487 -1.08975,-2.879044 -2.66026,-2.879044 -1.60257,0 -2.69231,1.164557 -2.69231,2.879044 0,1.682138 1.1218,2.943741 2.69231,2.943741 1.53846,0 2.66026,-1.261603 2.66026,-2.943741 m 3.07692,-0.03236 c 0,3.364276 -2.40385,5.790437 -5.73718,5.790437 -3.33333,0 -5.76923,-2.426161 -5.76923,-5.790437 0,-3.26723 2.4359,-5.661041 5.76923,-5.661041 3.33333,0 5.73718,2.393811 5.73718,5.661041 m -14.13462,-5.661041 -1.89102,0 c -0.38462,0 -0.67308,0.291139 -0.67308,0.646976 l 0,9.445852 c 0,0.355837 0.28846,1.002813 0.67308,1.002813 l 1.89102,0 c 0.35257,0 0.64103,-0.291139 0.64103,-0.679325 l 0,-9.76934 c 0,-0.355837 -0.28846,-0.646976 -0.64103,-0.646976 m -9.71154,-0.388186 c -1.21794,0 -2.27564,0.388186 -3.23717,1.196906 l -0.0962,0.0647 0,-0.226441 c 0,-0.355837 -0.28846,-0.646976 -0.64102,-0.646976 l -1.92308,0 c -0.35257,0 -0.64103,0.291139 -0.64103,0.646976 l 0,9.76934 c 0,0.388186 0.28846,0.679325 0.64103,0.679325 l 1.92308,0 c 0.35256,0 0.64102,-0.291139 0.64102,-0.679325 l 0,-6.372715 0,-0.03235 c 0.76923,-0.938116 1.69872,-1.455697 2.5641,-1.455697 1.60257,0 2.5,1.035162 2.5,2.879044 l 0,4.981717 c 0,0.388186 0.32052,0.679325 0.67308,0.679325 l 1.89103,0 c 0.38461,0 0.67307,-0.291139 0.67307,-0.679325 l 0,-5.272856 c 0,-3.364276 -1.95512,-5.531646 -4.96795,-5.531646 m -41.249998,3.946555 c 0,-0.03235 -0.032,-0.0647 -0.0641,-0.129396 -0.67307,-0.841069 -1.57051,-1.293952 -2.6923,-1.293952 -1.69872,0 -3.04487,1.423348 -3.04487,3.202532 0,1.843882 1.34615,3.26723 3.04487,3.26723 1.12179,0 2.05128,-0.452884 2.6923,-1.326302 0.032,-0.03235 0.0641,-0.0647 0.0641,-0.129395 z m 3.20513,-8.5400861 0,15.3980331 c 0,0.355837 -0.28846,0.679325 -0.67307,0.679325 l -2.17949,0 c -0.19231,0 -0.35257,-0.194093 -0.35257,-0.388186 l 0,-0.355837 -0.0962,0.0647 c -0.92948,0.614627 -2.01923,0.905766 -3.23718,0.905766 -3.17307,0 -5.64102,-2.620253 -5.64102,-5.984529 0,-3.26723 2.53205,-5.952181 5.64102,-5.952181 1.21795,0 2.3077,0.323488 3.23718,0.938116 l 0.0962,0.03235 0,-5.3375541 c 0,-0.291139 0.22436,-0.51758 0.48077,-0.51758 l 2.21154,0 c 0.28846,0 0.51282,0.226441 0.51282,0.51758 m -16.92303,9.0253131 c -0.25641,-1.293953 -1.15385,-2.005626 -2.5,-2.005626 -1.34616,0 -2.27565,0.711673 -2.69231,2.005626 0,0.0647 0,0.129395 0.032,0.161744 0.032,0.0647 0.0961,0.09705 0.16025,0.09705 l 4.8077,0 c 0.0641,0 0.1282,-0.03235 0.16025,-0.0647 0.032,-0.0647 0.032,-0.129396 0.032,-0.194093 m 3.20513,1.099859 c 0,0.355837 0,0.711674 -0.032,1.067511 0,0.194093 -0.19231,0.323488 -0.38462,0.323488 l -7.75641,0 c -0.0641,0 -0.1282,0.03235 -0.16025,0.09705 -0.032,0.0647 -0.032,0.129396 -0.032,0.194093 0.44872,1.196906 1.47436,1.843882 2.88461,1.843882 0.80129,0 1.44231,-0.226441 1.82693,-0.679325 0.0962,-0.09705 0.22436,-0.161744 0.35256,-0.161744 l 2.82051,0 c 0.0641,0 0.12821,0.03235 0.19231,0.09705 0.032,0.0647 0.032,0.129395 0.032,0.194092 -0.76923,2.005627 -2.78846,3.234881 -5.32051,3.234881 -3.55769,0 -6.08974,-2.458509 -6.08974,-5.984529 0,-3.52602 2.5,-5.98453 6.05769,-5.98453 3.23718,0 5.60897,2.426161 5.60897,5.758088 m -16.28185,-4.755277 c 0,-1.746835 -1.47436,-2.523207 -2.91666,-2.523207 l -2.24359,0 c -0.28847,0 -0.51282,0.226442 -0.51282,0.54993 l 0,4.237694 c 0,0.129395 0.0961,0.25879 0.25641,0.25879 l 2.5,0 c 0.76923,0 1.47435,-0.226441 1.98718,-0.614627 0.60897,-0.452883 0.92948,-1.099859 0.92948,-1.90858 m 0.57693,4.88467 -0.0641,0.03235 2.27564,4.722926 c 0.1282,0.226442 0.16025,0.485232 0.032,0.711674 -0.0961,0.194093 -0.32052,0.355837 -0.57693,0.355837 l -2.37179,0 c -0.22436,0 -0.41667,-0.129395 -0.54487,-0.291139 l -2.17949,-4.658229 c -0.0641,-0.09705 -0.64103,-0.161744 -0.76923,-0.161744 l -1.73077,0 c -0.19231,0 -0.32051,0.161744 -0.32051,0.355837 l 0,4.07595 c 0,0.355837 -0.28847,0.679325 -0.67308,0.679325 l -1.89103,0 c -0.44871,0 -0.80128,-0.388186 -0.80128,-0.80872 l 0,-12.616036 c 0,-1.585091 1.28205,-2.8790431 2.85257,-2.8790431 l 3.39743,0 c 3.01282,0 6.15385,2.1026721 6.15385,5.5963431 0,2.102673 -1.21795,4.205345 -2.78846,4.88467 M 105.97326,9.1436929 c -1.08975,0 -1.89103,0.776372 -1.89103,1.8438821 0,1.035162 0.80128,1.811533 1.89103,1.811533 1.02564,0 1.85897,-0.776371 1.85897,-1.811533 0,-1.0351621 -0.83333,-1.8438821 -1.85897,-1.8438821 m 1.57051,6.1462741 0,10.060479 c 0,0.355837 -0.28846,0.679325 -0.64103,0.679325 l -1.89102,0 c -0.35257,0 -0.64103,-0.323488 -0.64103,-0.679325 l 0,-10.060479 c 0,-0.194093 0.16026,-0.355837 0.35257,-0.355837 l 2.46795,0 c 0.1923,0 0.35256,0.161744 0.35256,0.355837 z"
                                  class="g1_3" inkscape:connector-curvature="0"
                                  sodipodi:nodetypes="csssccscsssscsssscsssscssscccccsccssccccssccscssccsssccsssccsssccsssssssccccssssssssccssssssscscssscsscssssccsssccsssccsccssccccssccscssccsssccssssssccccccssccsssssssssssccssscsssssssss"/>
                        </g>
                        -->
                </svg>

            </a>
            <nav>
                <ul id="menu-main-menu" class="nav">
                    <li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19">
                        <a
                            href="#features">特色</a></li>
                    <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20">
                        <a
                            href="#examples">案例</a></li>
                </ul>
            </nav>
            <button class="button inverted signup">注册<span> 测试版</span></button>
        </div>
    </div>

    <?= $content; ?>


    <footer>
        <div class="container">
            Copyright © phpdx.cn 2016

            <ul class="socials">
                <li>
                    <a href="https://facebook.com/redefinio" target="_blank">
                        <img src="/img/social-facebook.png"
                             class="img-responsive" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/redefinio" target="_blank">
                        <img src="/img/social-twitter.png"
                             class="img-responsive" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </footer>


    <!-- Signup modal -->
    <div class="modal fade in" id="signup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="vtable">
            <div class="vcell">
                <div class="container">
                    <canvas class="confeti"></canvas>

                    <div class="modal-content">

                        <div class="title">感谢你的对此产生兴趣</div>
                        <div class="text">
                            <p>请输入您的电子邮件，并在第一个建立一个令人敬畏的个人简历
                                <a href="#">Resume</a> 完全免费.</p>
                        </div>
                        <div class="subform">
<!--                            <script type="text/javascript" src="//app.mailerlite.com/data/webforms/102445/c8x6t3.js?v3"></script>-->

                            <div id="mlb2-2119963" class="ml-subscribe-form ml-subscribe-form-2119963">

                                <div class="ml-vertical-align-center">

                                    <div class="subscribe-form ml-block-success" style="display:none">


                                        <div class="form-section mb0">

                                            <h4></h4>

                                            <p>Success! Check your inbox to confirm you registration.</p>

                                        </div>

                                    </div>
<!--                                    //app.mailerlite.com/webforms/submit/c8x6t3-->
                                    <form class="ml-block-form" action=""
                                          data-id="102445" data-code="c8x6t3" method="POST" target="_blank">


                                        <div class="subscribe-form">

                                            <div class="form-section">
                                                <div
                                                    class="form-group ml-field-email ml-validate-required ml-validate-email">
                                                    <input type="text" name="fields[email]" class="form-control"
                                                           placeholder="Email*" value="">
                                                </div>
                                            </div>


                                            <input type="hidden" name="ml-submit" value="1">


                                            <button type="button" class="primary">
                                                注册
                                            </button>

                                            <button disabled="disabled" style="display: none;" type="button"
                                                    class="loading">
                                                <img src="//static.mailerlite.com/images/rolling.gif" width="20"
                                                     height="20" style="width: 20px; height: 20px;">
                                            </button>


                                        </div>

                                    </form>


                                    <script>
                                        function ml_webform_success_2119963() {
                                            jQuery('.ml-subscribe-form-2119963 .ml-block-success').show();
                                            jQuery('.ml-subscribe-form-2119963 .ml-block-form').hide();
                                        }
                                        ;
                                    </script>

                                </div>
                            </div>

                        </div>

                        <div class="author">
                            <div class="name">Erikas Mališauskas</div>
                            <div class="statusquo">Founder</div>
                            <a href="https://www.linkedin.com/in/erikasaves" target="_blank" class="photo">
                                <img src="http://www.redefin.io/wp-content/themes/redefinio/assets/img/founder.png"
                                     class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type='text/javascript' src='http://www.redefin.io/wp-includes/js/wp-embed.min.js?ver=4.5.4'></script>


    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>