<?php
include_once "../../config.php";
include_once path('modulos/login/sessao.php');
?>
<!DOCTYPE html>
<title>Sua Agenda</title>
<html lang="pt-BR">
<?php include_once path('templates/head.php') ?>

<body>
    <?php include_once path('templates/barra_navegacao.php') ?>

    <div class="container" id="lateral2">
        <h2>Olá</h2>
        <h3>Bem-Vindo a sua agenda!</h3>
        <hr>
    </div>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <!--Dayspedia.com widget-->
                <div class="DPDC" cityid="12385" lang="pt" id="dayspedia_widget_6aa1ac5c0b2e30f9" host="https://dayspedia.com" ampm="true" nightsign="true" sun="true" style="background-image: url(&quot;https://cdn.dayspedia.com/img/widgets/bg-13.png&quot;); border-width: 1px; padding: 24px; width: auto;" auto="true">

                    <style media="screen" id="dayspedia_widget_6aa1ac5c0b2e30f9_style">
                        /*COMMON*/
                        .DPDC {
                            display: table;
                            position: relative;
                            box-sizing: border-box;
                            font-size: 100.01%;
                            font-style: normal;
                            font-family: Arial;
                            background-position: 50% 50%;
                            background-repeat: no-repeat;
                            background-size: cover;
                            overflow: hidden;
                            user-select: none
                        }

                        .DPDCh,
                        .DPDCd {
                            width: fit-content;
                            line-height: 1.4
                        }

                        .DPDCh {
                            margin-bottom: 1em
                        }

                        .DPDCd {
                            margin-top: .24em
                        }

                        .DPDCt {
                            line-height: 1
                        }

                        .DPDCth,
                        .DPDCtm,
                        .DPDCts {
                            display: inline-block;
                            vertical-align: text-top;
                            white-space: nowrap
                        }

                        .DPDCth {
                            min-width: 0.6em;
                            text-align: right
                        }

                        .DPDCtm,
                        .DPDCts {
                            min-width: 1.44em
                        }

                        .DPDCtm::before,
                        .DPDCts::before {
                            display: inline-block;
                            content: ':';
                            vertical-align: middle;
                            margin: -.34em 0 0 -.07em;
                            width: .32em;
                            text-align: center;
                            opacity: .72;
                            filter: alpha(opacity=72)
                        }

                        .DPDCt12 {
                            display: inline-block;
                            vertical-align: baseline;
                            top: -0.12em;
                            position: relative;
                            font-size: 40%
                        }

                        .DPDCdm::after {
                            content: ' '
                        }

                        .DPDCda::after {
                            content: ', '
                        }

                        .DPDCdt {
                            margin-right: .48em
                        }

                        .DPDCtn {
                            display: inline-block;
                            position: relative;
                            width: 13px;
                            height: 13px;
                            border: 2px solid;
                            border-radius: 50%;
                            overflow: hidden
                        }

                        .DPDCtn>i {
                            display: block;
                            content: '';
                            position: absolute;
                            right: 33%;
                            top: -5%;
                            width: 85%;
                            height: 85%;
                            border-radius: 50%
                        }

                        .DPDCs {
                            margin: .96em 0 0 -3px;
                            font-size: 90%;
                            line-height: 1;
                            white-space: nowrap
                        }

                        .DPDCs sup {
                            padding-left: .24em;
                            font-size: 65%
                        }

                        .DPDCsl::before,
                        .DPDCsl::after {
                            display: inline-block;
                            opacity: .4
                        }

                        .DPDCsl::before {
                            content: '~';
                            margin: 0 .12em
                        }

                        .DPDCsl::after {
                            content: '~';
                            margin: 0 .24em
                        }

                        .DPDCs svg {
                            display: inline-block;
                            vertical-align: bottom;
                            width: 1.2em;
                            height: 1.2em;
                            opacity: .48
                        }

                        /*CUSTOM*/

                        .DPDC {
                            width: auto;
                            padding: 24px;
                            background-color: #ffffff;
                            border: 1px solid #343434;
                            border-radius: 8px
                        }

                        /* widget width, padding, background, border, rounded corners */
                        .DPDCh {
                            color: #007DBF;
                            font-weight: normal
                        }

                        /* headline color, font-weight*/
                        .DPDCt,
                        .DPDCd {
                            color: #343434;
                            font-weight: bold
                        }

                        /* time & date color, font-weight */
                        .DPDCtn {
                            border-color: #343434
                        }

                        /* night-sign color = time & date color */
                        .DPDCtn>i {
                            background-color: #343434
                        }

                        /* night-sign color = time & date color */
                        .DPDCt {
                            font-size: 48px
                        }

                        /* time font-size */
                        .DPDCh,
                        .DPDCd {
                            font-size: 16px
                        }

                        /* headline & date font-size */
                    </style>

                    <a class="DPl" href="https://dayspedia.com/time/br/Aracatuba/" target="_blank" style="display:block!important;text-decoration:none!important;border:none!important;cursor:pointer!important;background:transparent!important;line-height:0!important;text-shadow:none!important;position:absolute;z-index:1;top:0;right:0;bottom:0;left:0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 16 16" style="position:absolute;right:8px;bottom:0;width:16px;height:16px">
                            <path style="fill: rgb(0, 0, 0);" d="M0,0v16h1.7c-0.1-0.2-0.1-0.3-0.1-0.5c0-0.9,0.8-1.6,1.6-1.6c0.9,0,1.6,0.8,1.6,1.6c0,0.2,0,0.3-0.1,0.5h1.8 c-0.1-0.2-0.1-0.3-0.1-0.5c0-0.9,0.8-1.6,1.6-1.6s1.6,0.8,1.6,1.6c0,0.2,0,0.3-0.1,0.5h1.8c-0.1-0.2-0.1-0.3-0.1-0.5 c0-0.9,0.8-1.6,1.6-1.6c0.9,0,1.6,0.8,1.6,1.6c0,0.2,0,0.3-0.1,0.5H16V0H0z M4.2,8H2V2h2.2c2.1,0,3.3,1.3,3.3,3S6.3,8,4.2,8z M11.4,6.3h-0.8V8H9V2h2.5c1.4,0,2.4,0.8,2.4,2.1C13.9,5.6,12.9,6.3,11.4,6.3z M4.4,3.5H3.7v3h0.7C5.4,6.5,6,6,6,5 C6,4.1,5.4,3.5,4.4,3.5z M11.3,3.4h-0.8V5h0.8c0.6,0,0.9-0.3,0.9-0.8C12.2,3.7,11.9,3.4,11.3,3.4z">
                            </path>
                        </svg>
                        <span title="DaysPedia.com" style="position: absolute; right: 28px; bottom: 6px; height: 10px; width: 60px; overflow: hidden; text-align: right; color: rgb(0, 0, 0); font: 10px / 10px Arial, sans-serif !important;">Powered&nbsp;by DaysPedia.com</span>
                    </a>
                    <div class="DPDCh" style="color: rgb(0, 0, 0); text-align: center; margin-left: auto; margin-right: auto;">Horário Atual em Araçatuba</div>
                    <div class="DPDCt" style="color: rgb(0, 0, 0); text-align: center; margin-left: auto; margin-right: auto;">
                        <span class="DPDCth">9</span><span class="DPDCtm">46</span><span class="DPDCts">31</span><span class="DPDCt12">pm</span>
                    </div>
                    <div class="DPDCd" style="color: rgb(0, 0, 0); text-align: center; margin-left: auto; margin-right: auto;">
                        <span class="DPDCdt">ter, 22 de Novembro</span><span class="DPDCtn" style="border-color: rgb(0, 0, 0);"><i style="background-color: rgb(0, 0, 0);"></i></span>
                    </div>

                    <div class="DPDCs" style="color: rgb(0, 0, 0); display: block; text-align: center; margin-left: auto; margin-right: auto;">
                        <span class="DPDCsr">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                <path d="M12,4L7.8,8.2l1.4,1.4c0,0,0.9-0.9,1.8-1.8V14h2c0,0,0-3.3,0-6.2l1.8,1.8l1.4-1.4L12,4z" style="fill: rgb(0, 0, 0);"></path>
                                <path d="M6.8,15.3L5,13.5l-1.4,1.4l1.8,1.8L6.8,15.3z M4,21H1v2h3V21z M20.5,14.9L19,13.5l-1.8,1.8l1.4,1.4L20.5,14.9z M20,21v2h3 v-2H20z M6.1,23C6,22.7,6,22.3,6,22c0-3.3,2.7-6,6-6s6,2.7,6,6c0,0.3,0,0.7-0.1,1H6.1z" style="fill: rgb(0, 0, 0);"></path>
                            </svg>5:31<sup style="display: inline;">am</sup>
                        </span>
                        <span class="DPDCsl">13:13</span>
                        <span class="DPDCss">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                <path d="M12,14L7.8,9.8l1.4-1.4c0,0,0.9,0.9,1.8,1.8V4h2c0,0,0,3.3,0,6.2l1.8-1.8l1.4,1.4L12,14z" style="fill: rgb(0, 0, 0);"></path>
                                <path d="M6.8,15.3L5,13.5l-1.4,1.4l1.8,1.8L6.8,15.3z M4,21H1v2h3V21z M20.5,14.9L19,13.5l-1.8,1.8l1.4,1.4L20.5,14.9z M20,21v2h3 v-2H20z M6.1,23C6,22.7,6,22.3,6,22c0-3.3,2.7-6,6-6s6,2.7,6,6c0,0.3,0,0.7-0.1,1H6.1z" style="fill: rgb(0, 0, 0);"></path>
                            </svg>6:44<sup style="display: inline;">pm</sup>
                        </span>
                    </div>
                    <script>
                        var s, t;
                        s = document.createElement("script");
                        s.type = "text/javascript";
                        s.src = "//cdn.dayspedia.com/js/dwidget.min.vbf5fce77.js";
                        t = document.getElementsByTagName('script')[0];
                        t.parentNode.insertBefore(s, t);
                        s.onload = function() {
                            window.dwidget = new window.DigitClock();
                            window.dwidget.init("dayspedia_widget_6aa1ac5c0b2e30f9");
                        };
                    </script>
                    <!--/DPDC-->


                </div>
                <!--Dayspedia.com widget ENDS-->
                <br>
                <!-- EXCHANGERATES.ORG.UK British Pound CURRENCY CONVERTER START -->
                <div style="width:178px;;margin:0;padding:0;border:1px solid #2D6AB4;background:#f0f0f0;">
                    <div style="width:178px;text-align:center;padding:2px 0px;background:#2D6AB4;font-family:arial;font-size:11px;color:#ffffff;font-weight:bold;vertical-align:middle;">
                        <img src="//www.exchangerates.org.uk/images/flags/gb.gif" style="padding-right:5px;">
                        <a rel="nofollow" style="color:#ffffff;text-decoration:none;text-transform:uppercase;" href="//www.exchangerates.org.uk/British-Pound-GBP-currency-table.html" target="_new" title="British Pound Converter">British Pound Converter</a>
                    </div>
                    <div style="padding:10px;">
                        <script type="text/javascript">
                            var dcf = 'GBP';
                            var dct = 'EUR';
                            var mc = '2D6AB4';
                            var mbg = 'f0f0f0';
                            var tc = 'ffffff';
                            var f = 'arial';
                            var fc = '000000';
                            var tz = '0';
                        </script>
                        <script type="text/javascript" src="https://www.currency.me.uk/remote/ER-CCCS2-1.php"></script>
                    </div>
                </div>
                <!-- EXCHANGERATES.ORG.UK British Pound CURRENCY CONVERTER END -->
                <br>
                <div id="cont_5bec917f6b54da43948c67f261ec2d0a"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/5bec917f6b54da43948c67f261ec2d0a"></script></div>
                </div>
                <script type="text/javascript" src="//cdn.livetrafficfeed.com/static/v5/live.js?bc=ffffff&tc=000000&brd1=2853a8&lnk=135d9e&hc=ffffff&hfc=2853a8&nc=19ff19&vv=210&tft=10&ro=0&tz=America%2FNew_York&res=0"></script><noscript id="LTF_live_website_visitor"><a href="http://livetrafficfeed.com">Website Online Counter</a></noscript>
            </div>
        </div>
            </div>
        </div>
        <div class="row">
            <div class="position-left">
                
    </div>

    <?php include_once path('templates/footer.php'); ?>
</body>

</html>