<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lena & Kiryl</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
              type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">

        <!-- Styles -->
        <style>
            .blockquote {
                background: #f9f9f9;
                opacity: 0.7;
                margin: 3.5em 10px;
                padding: 2.5em 10px;

            }

            .quote {
                color: #777674;
                content: open-quote;
                font-size: 2em;
                line-height: 0.1em;
                margin-right: 0.25em;
                vertical-align: -0.1em;
                display: inline;
            }

            .blockquote p {
                display: inline;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Our Love Today<br>
                    Kiryl + Lena = ♡
                </div>
                <div class="col-xs-12 well message blockquote">
                    <i class="fa fa-quote-left quote"></i>&nbsp<p>{{$phrase->content}}</p>
                    <br/><br/>
                    <p style="display: block;">{{$phrase->from ? 'Кирилл' : 'Лена'}}</p>
                </div>
            </div>
        </div>
    </body>
</html>
