<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lightsaber</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <style href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet"></style>

    <!-- Styles -->
    <style>
        /** {
            box-sizing: border-box;
            transition: all 300ms ease-in-out;
        }*/

        html, body {
            background: #000;
        }

        .bg {
            position: absolute;
            background: none;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(#25780c, rgba(0, 0, 0, 0));
            opacity: 0;
        }

        .bg-color {
            opacity: 1;
        }

        .container {
            position: absolute;
            bottom: 10%;
            left: 50%;
        }

        .saber {
            position: relative;
            //transition: all 500ms ease-in-out;
        }
        .saber .blade {
            height: 0;
            background: #24eb22;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            box-shadow: 0 0 20px #24eb22;
        }
        .saber .hilt {
            height: 100px;
            width: 20px;
            border: 1px solid #333;
            background: repeating-linear-gradient(to right, #333, #333 2px, black 2px, black 4px);
            border-top: 4px solid #4d4d4d;
            border-bottom: 4px solid #4d4d4d;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .saber .hilt:hover {
            cursor: pointer;
        }
        .saber .hilt .button {
            height: 20px;
            width: 8px;
            border: 2px solid #333;
            background: #24eb22;
            position: relative;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .saber .on {
            height: 500px;
            /*-webkit-transition: all 300ms ease-in-out;*/
        }

        /*.wobble {
            animation: wiggle 2.5s ease-in-out infinite;
            animation-delay: 3s;
        }*/

        @keyframes wiggle {
            0% {
                transform: rotateZ(0deg);
            }
            5% {
                transform: rotateZ(5deg);
            }
            10%, 15% {
                transform: rotateZ(-5deg);
            }
            15%, 100% {
                transform: rotateZ(0deg);
            }
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="bg"></div>
    <div class="container">
        <div class="saber wobble">
            <div class="blade"></div>
            <div class="hilt">
                <div class="button"></div>
            </div>
        </div>
    </div>

</div>
<script>
    $('.hilt').on('click', function() {
        $('.blade').toggleClass('on');
        $('.bg').toggleClass('bg-color');
        $('.saber').toggleClass('wobble');
    });

    $( ".container" ).draggable(
            { appendTo: '.bg' }
    );

    /*$('.blade')
            .css('background-color', '')
            .css('background-color', 'blue');*/
</script>
</body>
</html>
