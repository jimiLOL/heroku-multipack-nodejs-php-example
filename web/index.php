<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Звездочка.com</title>
<!--    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <style type="text/css">
        html, body, span, object, iframe, h1, h2, h3, h4, h5, h6, a, p, blockquote, pre, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, figcaption, figure, footer, header, menu, nav, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            background: transparent;
        }
        html {
            height: 100%;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body {
            background-image: url("static/bg.jpg");
            background-repeat: repeat;
        }

        .scrolling {
            position: fixed;
            top: 0;
        }
        .invisible {
            display: none;
        }

        .button_container {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;/*for internet explorer*/
            background-color: bisque;
        }
        .btn {
            text-decoration: none;
        }
        .selected {
            display: none;
        }
        .btn:hover .selected {
            display: inline;
        }
        .btn:focus .selected {
            display: inline;
        }
        .btn:hover .not_selected {
            display: none;
        }
        .btn:focus .not_selected {
            display: none;
        }
    </style>
    <script>
//        $(window).scroll(function(){
//            var topHeight = document.getElementById("top").offsetHeight;//.clientHeight
//            $('#button_bar').toggleClass('scrolling', $(window).scrollTop() > topHeight);
//            document.getElementById("temp").style.display = $(window).scrollTop() <= topHeight ? "none" : "block";
//        });

    </script>
</head>
<body>
<div id="top" align="center" style="width: 100%; background-color: antiquewhite;"><img src="static/title.jpg"/></div>
<div id="temp" style="display: none" class="button_container">
    <a class="btn">
        <img src="static/news_btn_ru.png" class="not_selected">
        <img src="static/news_btn_ru_selected.png" class="selected">
    </a>
    <a target="game_info_content" class="btn">
        <img src="static/faq_btn_ru.png" class="not_selected"/>
        <img src="static/faq_btn_ru_selected.png" class="selected"/>
    </a>
    <a target="_blank" class="btn">
        <img src="static/group_btn_ru.png" class="not_selected"/>
        <img src="static/group_btn_ru_selected.png" class="selected"/>
    </a>
    <a target="game_info_content" class="btn">
        <img src="static/help_btn_ru.png" class="not_selected"/>
        <img src="static/help_btn_ru_selected.png" class="selected"/>
    </a>
</div>
<div class="button_container" id="button_bar">
    <a class="btn">
        <img src="static/news_btn_ru.png" class="not_selected">
        <img src="static/news_btn_ru_selected.png" class="selected">
    </a>
    <a target="game_info_content" class="btn">
        <img src="static/faq_btn_ru.png" class="not_selected"/>
        <img src="static/faq_btn_ru_selected.png" class="selected"/>
    </a>
    <a target="_blank" class="btn">
        <img src="static/group_btn_ru.png" class="not_selected"/>
        <img src="static/group_btn_ru_selected.png" class="selected"/>
    </a>
    <a target="game_info_content" class="btn">
        <img src="static/help_btn_ru.png" class="not_selected"/>
        <img src="static/help_btn_ru_selected.png" class="selected"/>
    </a>
</div>
<div align="center" style="width:700px; height: 1500px; background-image: url('static/text_bg.png');background-repeat: repeat; margin-left: auto; margin-right: auto">
    Сайт временно не работает.<br/>
    Приносим извинения за временные неудобства.
</div>
<div style="position: fixed; bottom: 0; right: 0; width: 100px; height: 100px; background-color: coral"></div>
</body>
</html>