<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>?????????.com</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        $(window).scroll(function(){
            var obj = $('#header');
            $('#header-inner').toggleClass('scrolling', $(window).scrollTop() > 150);
            $('#temp').toggleClass('invisible', $(window).scrollTop() <= 150)
        });
    </script>
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
            background-image: url("bg1.jpg");
            background-repeat: repeat;
        }

        .scrolling {
            position: fixed;
            top: 0;
        }
        .invisible {
            display: none;
        }
    </style>
</head>
<body>
<div style="width: 100%; background-color: antiquewhite; height: 150px"></div>
<div id="temp" class="invisible" style="height: 100px"></div>
<div id="header-inner" style="width: 100%; background-color: deeppink; height: 100px;"></div>
<div align="center" style="width:700px; height: 1500px; background-color: aliceblue; margin-left: auto; margin-right: auto">
    1<br/>2<br/>1<br/>2<br/>1<br/>2<br/>1<br/>2<br/>
</div>
<div style="position: fixed; bottom: 0; right: 0; width: 100px; height: 100px; background-color: coral"></div>
</body>
</html>