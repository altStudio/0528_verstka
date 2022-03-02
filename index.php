<?php
require_once "./libs/Mobile_Detect.php";

$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: /mob/index.html'); // страница для переадресации
    exit(0);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MetaPax</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope:300,regular&amp;subset=cyrillic,latin"
        media="all">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Manrope:300,regular:cyrillic,latin"]
            }
        });
        if (history.scrollRestoration) {
            history.scrollRestoration = 'manual';
        }
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="./images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="./images/webclip.png" rel="apple-touch-icon">
    <style>
        body.body {
            overflow: hidden;
        }

        body.body.pace-done {
            overflow: auto;
        }

        /*!
        * pace.js v1.2.4 | Default theme
        * https://github.com/CodeByZach/pace/
        * Licensed MIT © HubSpot, Inc.
        */
        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .pace-inactive {
            display: none;
            animation: preload 1s linear alternate;
        }

        @keyframes preload {
            0% {
                display: flex;
                opacity: 1;
            }

            100% {
                display: none;
                opacity: 0;
            }
        }

        .pace .pace-progress {
            background: #D72630;
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 100%;
            width: 100%;
            height: 2px;
        }

        .pace-done {
            margin: 0;
        }

        /* theme style */
        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;

            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background: #000;
        }

        .pace.pace-inactive .pace-progress {
            display: none;
        }

        .pace .pace-progress {
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 0;
            height: 5rem;
            width: 5rem;

            -webkit-transform: translate3d(0, 0, 0) !important;
            -ms-transform: translate3d(0, 0, 0) !important;
            transform: translate3d(0, 0, 0) !important;
        }

        .pace .pace-progress:after {
            display: none;
            /*position: absolute;
            top: 0;
            right: .5rem;
            content: attr(data-progress-text);
            font-family: "Helvetica Neue", sans-serif;
            font-weight: 100;
            font-size: 5rem;
            line-height: 1;
            text-align: right;
            color: rgba(0, 0, 0, 0.19999999999999996);*/
        }

        #preload-animation {
            position: absolute;
            width: 100%;
            max-width: 745px;
            height: auto;
            left: 50%;
            margin-left: -372px;
            top: 50%;
            margin-top: -138px;
        }

        /* main style */
        .pace,
        .pace.pace-inactive {
            width: 100vw;
            height: 100vh;
            overflow: visible !important;
            position: fixed !important;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .pace.pace-inactive .pace-progress {
            display: flex;
        }

        .pace .pace-progress {
            width: 100%;
            height: 100%;
            position: relative !important;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkyMCIgaGVpZ2h0PSIxMDgwIiB2aWV3Qm94PSIwIDAgMTkyMCAxMDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8ZyBmaWx0ZXI9InVybCgjZmlsdGVyMF9mXzMxOF83MSkiPgo8cGF0aCBkPSJNMTIxNS43MiAtMjUzLjA3NEMxMTM4LjMzIC02OS42Mjk2IDkyNi44NzcgMTYuMzQwMSA3NDMuNDMzIC02MS4wNTUxTDcwNS41NTggLTc3LjAzNDhDNTIyLjExNCAtMTU0LjQzIDQzNi4xNDQgLTM2NS44ODIgNTEzLjUzOSAtNTQ5LjMyNkw1MjguOTAzIC01ODUuNzQyQzYwNi4yOTggLTc2OS4xODYgODE3Ljc1IC04NTUuMTU2IDEwMDEuMTkgLTc3Ny43NkwxMDM5LjA3IC03NjEuNzgxQzEyMjIuNTEgLTY4NC4zODUgMTMwOC40OCAtNDcyLjkzMyAxMjMxLjA5IC0yODkuNDg5TDEyMTUuNzIgLTI1My4wNzRaIiBmaWxsPSJ1cmwoI3BhaW50MF9yYWRpYWxfMzE4XzcxKSIvPgo8cGF0aCBkPSJNMTIxNS43MiAtMjUzLjA3NEMxMTM4LjMzIC02OS42Mjk2IDkyNi44NzcgMTYuMzQwMSA3NDMuNDMzIC02MS4wNTUxTDcwNS41NTggLTc3LjAzNDhDNTIyLjExNCAtMTU0LjQzIDQzNi4xNDQgLTM2NS44ODIgNTEzLjUzOSAtNTQ5LjMyNkw1MjguOTAzIC01ODUuNzQyQzYwNi4yOTggLTc2OS4xODYgODE3Ljc1IC04NTUuMTU2IDEwMDEuMTkgLTc3Ny43NkwxMDM5LjA3IC03NjEuNzgxQzEyMjIuNTEgLTY4NC4zODUgMTMwOC40OCAtNDcyLjkzMyAxMjMxLjA5IC0yODkuNDg5TDEyMTUuNzIgLTI1My4wNzRaIiBzdHJva2U9IiMwMEUyOUEiIHN0cm9rZS13aWR0aD0iNDIuMzU5NSIvPgo8L2c+CjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIxX2ZfMzE4XzcxKSI+CjxyZWN0IHg9IjEyNTMuMDQiIHk9IjgxLjEyNyIgd2lkdGg9IjcwNi42NDQiIGhlaWdodD0iNzA1LjgyMiIgcng9IjM1Mi45MTEiIHRyYW5zZm9ybT0icm90YXRlKC0xNDkuOTU3IDEyNTMuMDQgODEuMTI3KSIgZmlsbD0idXJsKCNwYWludDFfcmFkaWFsXzMxOF83MSkiLz4KPC9nPgo8ZyBmaWx0ZXI9InVybCgjZmlsdGVyMl9mXzMxOF83MSkiPgo8cGF0aCBkPSJNMTA5MS4zNyAxNzkuMTAzQzkyNS45ODYgMzU5LjY5MiA2NDUuNTE2IDM3Mi4wMTUgNDY0LjkyNyAyMDYuNjI3TDM3OC45ODQgMTI3LjkxOEMxOTguMzk1IC0zNy40NzA2IDE4Ni4wNzMgLTMxNy45NCAzNTEuNDYxIC00OTguNTNMNDA3LjU4MiAtNTU5LjgwOEM1NzIuOTcgLTc0MC4zOTcgODUzLjQ0MSAtNzUyLjcxOSAxMDM0LjAzIC01ODcuMzMxTDExMTkuOTcgLTUwOC42MjJDMTMwMC41NiAtMzQzLjIzNCAxMzEyLjg4IC02Mi43NjM5IDExNDcuNDkgMTE3LjgyNUwxMDkxLjM3IDE3OS4xMDNaIiBmaWxsPSJ1cmwoI3BhaW50Ml9yYWRpYWxfMzE4XzcxKSIvPgo8L2c+CjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIzX2ZfMzE4XzcxKSI+CjxyZWN0IHg9IjEzNTQuNTgiIHk9IjUzMC4xMDMiIHdpZHRoPSIxMDI4IiBoZWlnaHQ9IjEwMjYuODEiIHJ4PSI0OTMuNjg2IiB0cmFuc2Zvcm09InJvdGF0ZSgtMTQ5Ljk1NyAxMzU0LjU4IDUzMC4xMDMpIiBmaWxsPSJ1cmwoI3BhaW50M19yYWRpYWxfMzE4XzcxKSIvPgo8L2c+CjxnIGZpbHRlcj0idXJsKCNmaWx0ZXI0X2ZfMzE4XzcxKSI+CjxwYXRoIGQ9Ik0xMjk1Ljc5IC01NTcuMTU4QzEzOTAuNzUgLTM4Mi43MzkgMTMyNS42OCAtMTY0LjAwNCAxMTUxLjI2IC02OS4wNDA5Qzk3Ni44NDYgMjUuOTIyNCA3NTcuODExIC0zOC4xMzAyIDY2Mi44NDggLTIxMi41NDhDNTY3Ljg4NSAtMzg2Ljk2NyA2MzIuOTU0IC02MDUuNzAyIDgwNy4zNzIgLTcwMC42NjVDOTgxLjc5IC03OTUuNjI4IDEyMDAuODIgLTczMS41NzYgMTI5NS43OSAtNTU3LjE1OFoiIGZpbGw9InVybCgjcGFpbnQ0X2FuZ3VsYXJfMzE4XzcxKSIvPgo8L2c+CjxnIGZpbHRlcj0idXJsKCNmaWx0ZXI1X2ZfMzE4XzcxKSI+CjxwYXRoIGQ9Ik0xMzQ4LjQxIDk4OC40MjNDMTYyOS41MiAxMTE1LjkzIDE3NTQuMDQgMTQ0Ny4xNyAxNjI2LjU0IDE3MjguMjhMMTU5MSAxODA2LjYzQzE0NjMuNSAyMDg3Ljc0IDExMzIuMjYgMjIxMi4yNiA4NTEuMTQ4IDIwODQuNzZMNzc1LjA3MyAyMDUwLjI1QzQ5My45NjUgMTkyMi43NSAzNjkuNDQ0IDE1OTEuNTEgNDk2Ljk0NiAxMzEwLjRMNTMyLjQ4NSAxMjMyLjA0QzY1OS45ODggOTUwLjkzNyA5OTEuMjMyIDgyNi40MTYgMTI3Mi4zNCA5NTMuOTE4TDEzNDguNDEgOTg4LjQyM1oiIGZpbGw9InVybCgjcGFpbnQ1X3JhZGlhbF8zMThfNzEpIi8+CjwvZz4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjZfZl8zMThfNzEpIj4KPHBhdGggZD0iTTU5NC44MjEgMTA3MC4wOEM1NzguOTYyIDg1OC4yNjMgNzM4LjYxNiA2NzMuNjM1IDk1MC40MzMgNjU3Ljc3NkMxMTYyLjI1IDY0MS45MTYgMTM0Ny42MiA4MDAuNzExIDEzNjMuNDggMTAxMi41M0MxMzc5LjMzIDEyMjQuMzQgMTIxOS42OCAxNDA4Ljk3IDEwMDcuODYgMTQyNC44M0M3OTYuMDQ3IDE0NDAuNjkgNjEwLjY4IDEyODEuOSA1OTQuODIxIDEwNzAuMDhaIiBmaWxsPSJ1cmwoI3BhaW50Nl9yYWRpYWxfMzE4XzcxKSIvPgo8L2c+CjxnIGZpbHRlcj0idXJsKCNmaWx0ZXI3X2ZfMzE4XzcxKSI+CjxwYXRoIGQ9Ik02MTEuODM0IDE2MDYuNzNDNTkzLjIzMSAxMzU4LjI3IDc4MC41MDMgMTE0MS43MSAxMDI4Ljk2IDExMjMuMUMxMjc3LjQyIDExMDQuNSAxNDk0Ljg1IDEyOTAuNzcgMTUxMy40NiAxNTM5LjIyQzE1MzIuMDYgMTc4Ny42OCAxMzQ0Ljc5IDIwMDQuMjUgMTA5Ni4zMyAyMDIyLjg1Qzg0Ny44NyAyMDQxLjQ2IDYzMC40MzYgMTg1NS4xOSA2MTEuODM0IDE2MDYuNzNaIiBmaWxsPSJ1cmwoI3BhaW50N19yYWRpYWxfMzE4XzcxKSIvPgo8L2c+CjxnIGZpbHRlcj0idXJsKCNmaWx0ZXI4X2ZfMzE4XzcxKSI+CjxyZWN0IHg9IjEyODguMTQiIHk9Ijc3Mi43MTkiIHdpZHRoPSIxMDQxLjU2IiBoZWlnaHQ9IjEwNDAuMzQiIHJ4PSI1MjAuMTcyIiB0cmFuc2Zvcm09InJvdGF0ZSg4Ny4yMzk2IDEyODguMTQgNzcyLjcxOSkiIGZpbGw9InVybCgjcGFpbnQ4X3JhZGlhbF8zMThfNzEpIi8+CjwvZz4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjlfZl8zMThfNzEpIj4KPHJlY3QgeD0iMTExMC4zNCIgeT0iNjI5IiB3aWR0aD0iODM3LjUzNCIgaGVpZ2h0PSI4MzYuNTU5IiByeD0iNDE4LjI4IiB0cmFuc2Zvcm09InJvdGF0ZSg0OS42NDMgMTExMC4zNCA2MjkpIiBmaWxsPSJ1cmwoI3BhaW50OV9yYWRpYWxfMzE4XzcxKSIvPgo8L2c+CjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIxMF9mXzMxOF83MSkiPgo8cGF0aCBkPSJNMTU1Mi41MyAxMjY0LjA3QzE3MTMuOTcgMTM0MS44MyAxNzgxLjUyIDE1MzYuMzUgMTcwMy43NiAxNjk3LjhDMTYyNiAxODU5LjI0IDE0MzEuNzkgMTkyNy42OSAxMjcwLjM1IDE4NDkuOTNDMTEwOC45IDE3NzIuMTcgMTA0MS4zNiAxNTc3LjY1IDExMTkuMTIgMTQxNi4yQzExOTYuODggMTI1NC43NiAxMzkxLjA5IDExODYuMzEgMTU1Mi41MyAxMjY0LjA3WiIgZmlsbD0idXJsKCNwYWludDEwX3JhZGlhbF8zMThfNzEpIi8+CjwvZz4KPGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjExX2ZfMzE4XzcxKSI+CjxwYXRoIGQ9Ik0xNDUzLjE0IDEzNzYuODVDMTQ3NS4yOSAxNTM0LjM5IDEzNjQuOTQgMTY4MC4xMyAxMjA3LjQgMTcwMi4yOEMxMDQ5Ljg2IDE3MjQuNDMgOTAzLjYwMSAxNjE0Ljc2IDg4MS40NTMgMTQ1Ny4yMkM4NTkuMzA0IDEyOTkuNjggOTY5LjY1NCAxMTUzLjkzIDExMjcuMTkgMTEzMS43OEMxMjg0LjczIDExMDkuNjMgMTQzMC45OSAxMjE5LjMxIDE0NTMuMTQgMTM3Ni44NVoiIGZpbGw9InVybCgjcGFpbnQxMV9yYWRpYWxfMzE4XzcxKSIvPgo8L2c+CjxkZWZzPgo8ZmlsdGVyIGlkPSJmaWx0ZXIwX2ZfMzE4XzcxIiB4PSIyNjIuMDI0IiB5PSItMTAyOS4yNyIgd2lkdGg9IjEyMjAuNTgiIGhlaWdodD0iMTIxOS43MyIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPgo8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPgo8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIxMDAuOTQyIiByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfMzE4XzcxIi8+CjwvZmlsdGVyPgo8ZmlsdGVyIGlkPSJmaWx0ZXIxX2ZfMzE4XzcxIiB4PSI1NzYuNDY2IiB5PSItOTQ4LjQ1OSIgd2lkdGg9IjEwOTQuODIiIGhlaWdodD0iMTA5NC40IiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9InNoYXBlIi8+CjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249Ijk3LjA4ODIiIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1cl8zMThfNzEiLz4KPC9maWx0ZXI+CjxmaWx0ZXIgaWQ9ImZpbHRlcjJfZl8zMThfNzEiIHg9Ii0xMDEuODQ3IiB5PSItMTA0MC42NCIgd2lkdGg9IjE3MDIuNjUiIGhlaWdodD0iMTcwMC41NyIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPgo8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPgo8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIxNjguNDQ5IiByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfMzE4XzcxIi8+CjwvZmlsdGVyPgo8ZmlsdGVyIGlkPSJmaWx0ZXIzX2ZfMzE4XzcxIiB4PSI0MDYuNjI3IiB5PSItOTMxLjQ4NiIgd2lkdGg9IjE1MjAuMDkiIGhlaWdodD0iMTUxOS42NSIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPgo8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPgo8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIxMTkuNDEiIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1cl8zMThfNzEiLz4KPC9maWx0ZXI+CjxmaWx0ZXIgaWQ9ImZpbHRlcjRfZl8zMThfNzEiIHg9IjM2Ni45NjMiIHk9Ii05OTYuNzg3IiB3aWR0aD0iMTIyNC43MSIgaGVpZ2h0PSIxMjIzLjg3IiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9InNoYXBlIi8+CjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjEyNi4wOTgiIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1cl8zMThfNzEiLz4KPC9maWx0ZXI+CjxmaWx0ZXIgaWQ9ImZpbHRlcjVfZl8zMThfNzEiIHg9IjIxLjA5NzUiIHk9IjQ3OC4wNjgiIHdpZHRoPSIyMDgxLjI5IiBoZWlnaHQ9IjIwODIuNTQiIGZpbHRlclVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJzUkdCIj4KPGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz4KPGZlQmxlbmQgbW9kZT0ibm9ybWFsIiBpbj0iU291cmNlR3JhcGhpYyIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0ic2hhcGUiLz4KPGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMjEyLjkwMSIgcmVzdWx0PSJlZmZlY3QxX2ZvcmVncm91bmRCbHVyXzMxOF83MSIvPgo8L2ZpbHRlcj4KPGZpbHRlciBpZD0iZmlsdGVyNl9mXzMxOF83MSIgeD0iMzE0LjI4NCIgeT0iMzc3LjIzNCIgd2lkdGg9IjEzMjkuNzMiIGhlaWdodD0iMTMyOC4xNCIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPgo8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPgo8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIxMzkuNzI1IiByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfMzE4XzcxIi8+CjwvZmlsdGVyPgo8ZmlsdGVyIGlkPSJmaWx0ZXI3X2ZfMzE4XzcxIiB4PSIzMzMuODA0IiB5PSI4NDUuMDY5IiB3aWR0aD0iMTQ1Ny42OCIgaGVpZ2h0PSIxNDU1LjgyIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9InNoYXBlIi8+CjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjEzOC4zNzciIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1cl8zMThfNzEiLz4KPC9maWx0ZXI+CjxmaWx0ZXIgaWQ9ImZpbHRlcjhfZl8zMThfNzEiIHg9IjMuMDk3MDgiIHk9IjUyNi43OSIgd2lkdGg9IjE1ODEuMSIgaGVpZ2h0PSIxNTgyLjMxIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+CjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+CjxmZUJsZW5kIG1vZGU9Im5vcm1hbCIgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9InNoYXBlIi8+CjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjEzNS4xODQiIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1cl8zMThfNzEiLz4KPC9maWx0ZXI+CjxmaWx0ZXIgaWQ9ImZpbHRlcjlfZl8zMThfNzEiIHg9IjM3My45ODQiIHk9IjUzMC4wOTYiIHdpZHRoPSIxMzc3LjU4IiBoZWlnaHQ9IjEzNzcuNzQiIGZpbHRlclVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJzUkdCIj4KPGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz4KPGZlQmxlbmQgbW9kZT0ibm9ybWFsIiBpbj0iU291cmNlR3JhcGhpYyIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0ic2hhcGUiLz4KPGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMTM1LjE4NCIgcmVzdWx0PSJlZmZlY3QxX2ZvcmVncm91bmRCbHVyXzMxOF83MSIvPgo8L2ZpbHRlcj4KPGZpbHRlciBpZD0iZmlsdGVyMTBfZl8zMThfNzEiIHg9Ijg1MS4wOTYiIHk9Ijk5Ni4yMiIgd2lkdGg9IjExMjAuNjkiIGhlaWdodD0iMTEyMS41NiIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPgo8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPgo8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIxMTcuODc2IiByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfMzE4XzcxIi8+CjwvZmlsdGVyPgo8ZmlsdGVyIGlkPSJmaWx0ZXIxMV9mXzMxOF83MSIgeD0iNjA1LjcwNyIgeT0iODU2LjAyNCIgd2lkdGg9IjExMjMuMTgiIGhlaWdodD0iMTEyMi4wMiIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiPgo8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPgo8ZmVCbGVuZCBtb2RlPSJub3JtYWwiIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPgo8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIxMzYuNDU4IiByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfMzE4XzcxIi8+CjwvZmlsdGVyPgo8cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50MF9yYWRpYWxfMzE4XzcxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKDEwMjQuMTggLTM0Ny41MDEpIHJvdGF0ZSgtNjcuNzI0NCkgc2NhbGUoMTY1NS42IDE2NTkuMDUpIj4KPHN0b3Agc3RvcC1jb2xvcj0iIzVBRTlGRCIvPgo8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM1QUU5RkQiIHN0b3Atb3BhY2l0eT0iMCIvPgo8L3JhZGlhbEdyYWRpZW50Pgo8cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50MV9yYWRpYWxfMzE4XzcxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MDYuMzcgNDM0LjAzOCkgcm90YXRlKDkwKSBzY2FsZSgzNTIuOTExIDM1My4zMjIpIj4KPHN0b3Agc3RvcC1jb2xvcj0iIzM4RkY3MCIvPgo8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM0QUUwNzQiIHN0b3Atb3BhY2l0eT0iMC42NSIvPgo8L3JhZGlhbEdyYWRpZW50Pgo8cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50Ml9yYWRpYWxfMzE4XzcxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKDc0OS40NzggLTE5MC4zNTIpIHJvdGF0ZSgtNDcuNTE1Nykgc2NhbGUoNDg0LjkzOSAxNTk1LjIyKSI+CjxzdG9wIHN0b3AtY29sb3I9IiM2MDEyQzMiLz4KPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjOTk0OUZGIiBzdG9wLW9wYWNpdHk9IjAuMzciLz4KPC9yYWRpYWxHcmFkaWVudD4KPHJhZGlhbEdyYWRpZW50IGlkPSJwYWludDNfcmFkaWFsXzMxOF83MSIgY3g9IjAiIGN5PSIwIiByPSIxIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgZ3JhZGllbnRUcmFuc2Zvcm09InRyYW5zbGF0ZSgyMTczLjM0IDExMjkuOTYpIHJvdGF0ZSgxNTEuMTMzKSBzY2FsZSg0ODQuOTg0IDQ4NS41NDkpIj4KPHN0b3Agc3RvcC1jb2xvcj0iI0ZGRjlDNSIvPgo8c3RvcCBvZmZzZXQ9IjAuNzU1MjA4IiBzdG9wLWNvbG9yPSIjRkY1QzAwIi8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI0ZGNDUxQyIvPgo8L3JhZGlhbEdyYWRpZW50Pgo8cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50NF9hbmd1bGFyXzMxOF83MSIgY3g9IjAiIGN5PSIwIiByPSIxIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgZ3JhZGllbnRUcmFuc2Zvcm09InRyYW5zbGF0ZSg5NzkuMzE4IC0zODQuODUzKSByb3RhdGUoLTExOC41NjYpIHNjYWxlKDM1OS41ODcgMzY0LjIzMSkiPgo8c3RvcCBzdG9wLWNvbG9yPSIjRkZGNUNGIi8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI0ZGRDg0QiIgc3RvcC1vcGFjaXR5PSIwIi8+CjwvcmFkaWFsR3JhZGllbnQ+CjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQ1X3JhZGlhbF8zMThfNzEiIGN4PSIwIiBjeT0iMCIgcj0iMSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI3Ni45OSAxNTAwLjYpIHJvdGF0ZSgtMTYzLjI1Mykgc2NhbGUoNzk2LjA0MiA3OTcuNykiPgo8c3RvcCBzdG9wLWNvbG9yPSIjNEJENEZGIi8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI0QwNEJGRiIgc3RvcC1vcGFjaXR5PSIwIi8+CjwvcmFkaWFsR3JhZGllbnQ+CjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQ2X3JhZGlhbF8zMThfNzEiIGN4PSIwIiBjeT0iMCIgcj0iMSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoODMwLjg1MyAxMTA2LjQ4KSByb3RhdGUoNjAuOTI0OCkgc2NhbGUoMzY0LjI1MiAzNjUuMDExKSI+CjxzdG9wIHN0b3AtY29sb3I9IiMxNTBBOUMiLz4KPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRkYwN0Q3IiBzdG9wLW9wYWNpdHk9IjAiLz4KPC9yYWRpYWxHcmFkaWVudD4KPHJhZGlhbEdyYWRpZW50IGlkPSJwYWludDdfcmFkaWFsXzMxOF83MSIgY3g9IjAiIGN5PSIwIiByPSIxIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgZ3JhZGllbnRUcmFuc2Zvcm09InRyYW5zbGF0ZSgxMDYyLjY1IDE1NzIuOTgpIHJvdGF0ZSg4NS43MTgxKSBzY2FsZSg0NTEuMTMzIDQ1Mi4wNzMpIj4KPHN0b3Agb2Zmc2V0PSIwLjM0ODE3NiIgc3RvcC1jb2xvcj0iIzA0QUYzNCIvPgo8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiMwOUM4NjEiIHN0b3Atb3BhY2l0eT0iMCIvPgo8L3JhZGlhbEdyYWRpZW50Pgo8cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50OF9yYWRpYWxfMzE4XzcxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKDIwMTYuOTggMTA1OS43OCkgcm90YXRlKDgzLjE3Nikgc2NhbGUoNDg4Ljk0MyA1NzMuMjgxKSI+CjxzdG9wIG9mZnNldD0iMC40NDc5MTciIHN0b3AtY29sb3I9IiNGRjRENEQiLz4KPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRkYwMDAwIiBzdG9wLW9wYWNpdHk9IjAiLz4KPC9yYWRpYWxHcmFkaWVudD4KPHJhZGlhbEdyYWRpZW50IGlkPSJwYWludDlfcmFkaWFsXzMxOF83MSIgY3g9IjAiIGN5PSIwIiByPSIxIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgZ3JhZGllbnRUcmFuc2Zvcm09InRyYW5zbGF0ZSgxNjk2LjQxIDg1OS44MzQpIHJvdGF0ZSg3NS4zNzE1KSBzY2FsZSgzMTMuMTM4IDI1OC4zODYpIj4KPHN0b3Agc3RvcC1jb2xvcj0iIzk2NjRGRiIvPgo8c3RvcCBvZmZzZXQ9IjAuNTcyOTE3IiBzdG9wLWNvbG9yPSIjOEYwMEZGIiBzdG9wLW9wYWNpdHk9IjAuNTgiLz4KPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMDBGRkMyIiBzdG9wLW9wYWNpdHk9IjAiLz4KPC9yYWRpYWxHcmFkaWVudD4KPHJhZGlhbEdyYWRpZW50IGlkPSJwYWludDEwX3JhZGlhbF8zMThfNzEiIGN4PSIwIiBjeT0iMCIgcj0iMSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIGdyYWRpZW50VHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTQyNi4zNyAxNDIxLjE2KSByb3RhdGUoLTE3OS4wNzUpIHNjYWxlKDMwNy4yOTMgMzA3LjkzMykiPgo8c3RvcCBvZmZzZXQ9IjAuMTk3OTE3IiBzdG9wLWNvbG9yPSIjODNGRkY4Ii8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzM3RkZGMyIgc3RvcC1vcGFjaXR5PSIwIi8+CjwvcmFkaWFsR3JhZGllbnQ+CjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQxMV9yYWRpYWxfMzE4XzcxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiBncmFkaWVudFRyYW5zZm9ybT0idHJhbnNsYXRlKDExNjcuMyAxNDE3LjAzKSByb3RhdGUoLTk4LjAwMjgpIHNjYWxlKDI4OC4wNTUgMjg4LjY1NSkiPgo8c3RvcCBzdG9wLWNvbG9yPSJ3aGl0ZSIvPgo8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNGRkY4QkMiIHN0b3Atb3BhY2l0eT0iMC42Ii8+CjwvcmFkaWFsR3JhZGllbnQ+CjwvZGVmcz4KPC9zdmc+Cg==');
            background-repeat: no-repeat;
            background-size: 120vw 100%;
            transition: background 1s linear;
        }

        .pace .pace-progress:after {
            position: relative !important;
            font-size: 120px;
            line-height: 180px;
            width: 0%;

            color: black;
            font-weight: bolder;
            display: flex;
            justify-content: center;
            right: 0;
            display: none;
        }

        .video-preload {
            width: 100%;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./add.css?ver=1.7">
</head>

<body class="body">
    <script src="./lottie.js"></script>
    <script src="./pace.min.js"></script>
    <script type="text/javascript">
        window.paceOptions = {
            ajax: false, // disabled
            eventLag: false,
            elements: {
                selectors: ['.image-40']
            }
        };
        var safariPreloader = { "v": "5.7.4", "fr": 25, "ip": 0, "op": 100, "w": 1733, "h": 627, "nm": "Pre-comp 2", "ddd": 0, "assets": [], "layers": [{ "ddd": 0, "ind": 1, "ty": 4, "nm": "Shape Layer 2", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 31, "ix": 10 }, "p": { "a": 1, "k": [{ "i": { "x": 0.833, "y": 0.833 }, "o": { "x": 0.167, "y": 0.167 }, "t": 0, "s": [1766.5, 813.5, 0], "to": [164.512, -6.267, 0], "ti": [-236.918, 24.299, 0] }, { "i": { "x": 0.833, "y": 0.833 }, "o": { "x": 0.167, "y": 0.167 }, "t": 61, "s": [2877.5, 889.5, 0], "to": [890.5, -91.333, 0], "ti": [-22.5, -84.667, 0] }, { "t": 99, "s": [1766.5, 813.5, 0] }], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [0, 0, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [97.41, 102.639, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ty": "rc", "d": 1, "s": { "a": 0, "k": [1408.051, 1295.723], "ix": 2 }, "p": { "a": 0, "k": [0, 0], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 4 }, "nm": "Rectangle Path 1", "mn": "ADBE Vector Shape - Rect", "hd": false }, { "ty": "st", "c": { "a": 0, "k": [0, 0, 0, 1], "ix": 3 }, "o": { "a": 0, "k": 100, "ix": 4 }, "w": { "a": 0, "k": 0, "ix": 5 }, "lc": 1, "lj": 1, "ml": 4, "bm": 0, "nm": "Stroke 1", "mn": "ADBE Vector Graphic - Stroke", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [0, 0, 0, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [-534.474, 2.361], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Rectangle 1", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 2, "ty": 4, "nm": "Shape Layer 1", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 31, "ix": 10 }, "p": { "a": 1, "k": [{ "i": { "x": 0.833, "y": 0.833 }, "o": { "x": 0.167, "y": 0.167 }, "t": 0, "s": [-49.5, 261.5, 0], "to": [164.512, -6.267, 0], "ti": [-175.875, 160.589, 0] }, { "i": { "x": 0.833, "y": 0.833 }, "o": { "x": 0.167, "y": 0.167 }, "t": 50, "s": [1381.5, 337.5, 0], "to": [174.5, -159.333, 0], "ti": [-175.875, 160.589, 0] }, { "i": { "x": 0.833, "y": 0.833 }, "o": { "x": 0.167, "y": 0.167 }, "t": 54, "s": [1381.5, 337.5, 0], "to": [174.5, -159.333, 0], "ti": [-66.5, -124.667, 0] }, { "t": 99, "s": [-49.5, 261.5, 0] }], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [0, 0, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [109.152, 102.639, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ty": "rc", "d": 1, "s": { "a": 0, "k": [1408.051, 1295.723], "ix": 2 }, "p": { "a": 0, "k": [0, 0], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 4 }, "nm": "Rectangle Path 1", "mn": "ADBE Vector Shape - Rect", "hd": false }, { "ty": "st", "c": { "a": 0, "k": [0, 0, 0, 1], "ix": 3 }, "o": { "a": 0, "k": 100, "ix": 4 }, "w": { "a": 0, "k": 0, "ix": 5 }, "lc": 1, "lj": 1, "ml": 4, "bm": 0, "nm": "Stroke 1", "mn": "ADBE Vector Graphic - Stroke", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [0, 0, 0, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [-534.474, 2.361], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Rectangle 1", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 3, "ty": 4, "nm": "Path 11", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [461.145, 288.085, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [186.551, 111.2, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[4.106, 2.191], [25.862, 26.52], [-3.369, 15.997], [-67.198, 33.174], [-13.846, -4.054], [-89.63, -113.884], [-1.446, -0.145], [-0.394, 3.941], [10.845, 13.685], [0, 0], [0, 0], [5.984, -5.824], [0.65, 0.065], [-0.979, 1.437], [-2.963, 0.29], [-31.483, -45.162], [0.448, -10.618], [0, 0], [0, 0], [6.136, -8.741], [7.574, 1.5], [53.885, 67.017], [2.945, -0.62], [0.216, -2.153], [-7.381, -4.751], [-32.021, 28.231], [-12.118, 10.939], [-1.026, 0.869], [0, 0], [0, 0], [0.878, -0.903], [10.49, -10.284], [13.33, -0.944]], "o": [[-7.905, -4.216], [-78.281, -80.275], [3.317, -15.748], [68.657, -33.895], [14.564, 4.264], [44.717, 56.814], [2.23, 0.223], [0.166, -1.658], [0, 0], [0, 0], [-2.519, 2.178], [-15.456, 15.038], [-2.161, -0.216], [3.686, -5.404], [9.764, -0.956], [18.983, 27.229], [0, 0], [0, 0], [-5.139, 8.936], [-7.285, 10.374], [-6.357, -1.259], [-79.787, -99.236], [-5.667, 1.193], [-0.296, 2.956], [5.033, 3.239], [1.946, -1.715], [12.119, -10.94], [0, 0], [0, 0], [6.516, 7.785], [-1.85, 1.9], [-33.333, 32.679], [-8.256, 0.585]], "v": [[119.761, 219.876], [77.604, 181.503], [0.931, 82.969], [74.949, 31.616], [157.316, 1.824], [257.608, 115.546], [319.132, 191.465], [361.688, 131.212], [319.049, 69.952], [314.138, 63.758], [309.556, 67.718], [294.092, 82.268], [265.28, 109.054], [253.73, 92.869], [308.836, 45.981], [353.517, 96.109], [373.027, 135.941], [372.793, 141.599], [369.186, 147.867], [335.123, 201.273], [316.313, 212.505], [251.382, 138.912], [153.635, 22.399], [29.155, 87.585], [131.422, 195.923], [171.671, 166.599], [197.241, 143.592], [221.142, 122.123], [223.01, 120.543], [230.237, 129.178], [236.489, 138.816], [190.75, 183.977], [137.695, 222.206]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 11", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 4, "ty": 4, "nm": "Path 10", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [227.98, 269.032, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [67.698, 19.023, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [6.803, -0.407], [0, 0], [-4.273, 2.908], [0, 0], [-0.597, 0.144], [0, 0], [-1.825, -4.682]], "o": [[2.475, 6.349], [0, 0], [-5.159, 0.309], [0, 0], [0.507, -0.345], [0, 0], [4.885, -1.179], [0, 0]], "v": [[134.703, 17.148], [125.944, 30.823], [5.406, 38.035], [2.238, 28.747], [2.238, 28.747], [3.908, 28.007], [118.797, 0.282], [130.512, 6.398]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 10", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 5, "ty": 4, "nm": "Path 9", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [606.172, 305.246, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [37.327, 9.909, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [8.023, -0.078], [0, 0], [-0.448, 1.679], [0, 0], [-0.94, 0.223], [0, 0], [-2.32, -2.881]], "o": [[5.03, 6.248], [0, 0], [-1.738, 0.017], [0, 0], [0.253, -0.934], [0, 0], [3.599, -0.851], [0, 0]], "v": [[72.513, 3.579], [65.127, 19.205], [2.656, 19.817], [0.09, 16.51], [0.09, 16.51], [2.024, 14.633], [62.825, 0.258], [72.513, 3.579]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 9", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 6, "ty": 4, "nm": "Path 8", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [415.24, 284.976, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [229.397, 115.845, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[4.278, 2.282], [26.942, 27.628], [-3.51, 16.664], [-70.004, 34.56], [-14.425, -4.223], [-93.375, -118.64], [-1.5, -0.151], [-0.412, 4.106], [11.297, 14.256], [0, 0], [0, 0], [6.237, -6.067], [5.5, -5.027], [0.267, 0.027], [-1.019, 1.497], [-3.09, 0.302], [-32.802, -47.048], [0.463, -11.061], [0, 0], [0, 0], [6.393, -9.106], [7.892, 1.563], [56.132, 69.816], [3.068, -0.646], [0.225, -2.243], [-7.689, -4.949], [-33.358, 29.41], [-12.625, 11.396], [-1.07, 0.906], [0, 0], [0, 0], [0.914, -0.94], [10.928, -10.714], [13.886, -0.983]], "o": [[-8.236, -4.393], [-81.55, -83.628], [3.456, -16.406], [71.525, -35.311], [15.172, 4.442], [46.581, 59.187], [2.327, 0.233], [0.173, -1.727], [0, 0], [0, 0], [-2.624, 2.269], [-9.707, 9.448], [-5.742, -2.566], [-2.251, -0.225], [3.838, -5.63], [10.169, -0.996], [19.774, 28.366], [0, 0], [0, 0], [-5.352, 9.31], [-7.589, 10.807], [-6.62, -1.312], [-83.121, -103.381], [-5.903, 1.243], [-0.308, 3.08], [5.242, 3.374], [2.027, -1.786], [12.624, -11.396], [0, 0], [0, 0], [6.787, 8.11], [-1.93, 1.979], [-34.725, 34.044], [-8.601, 0.609]], "v": [[194.873, 229.06], [150.955, 189.083], [0.122, 109.27], [148.189, 32.936], [233.995, 1.9], [338.477, 120.372], [402.567, 199.462], [446.904, 136.692], [402.484, 72.874], [397.367, 66.421], [392.593, 70.546], [376.483, 85.704], [354.183, 116.703], [346.471, 113.609], [334.437, 96.747], [391.845, 47.901], [438.394, 100.123], [458.718, 141.619], [458.472, 147.513], [454.714, 154.042], [419.227, 209.679], [399.633, 221.381], [331.991, 144.714], [230.161, 23.335], [100.482, 91.243], [207.021, 204.106], [248.95, 173.558], [275.588, 149.589], [300.486, 127.223], [302.434, 125.578], [311.891, 128.489], [316.477, 144.613], [268.826, 191.661], [213.555, 231.487]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [0.172549019608, 0.172549019608, 0.172549019608, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 8", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 7, "ty": 4, "nm": "Group 1", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [1125.781, 341.52, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [0, 0, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "rc", "d": 1, "s": { "a": 0, "k": [775.394, 190.759], "ix": 2 }, "p": { "a": 0, "k": [0, 0], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 4 }, "nm": "Rectangle Path 1", "mn": "ADBE Vector Shape - Rect", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 8, "ty": 4, "nm": "Path 7", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [335.536, -5.961, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [52.161, 53.651, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]], "o": [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]], "v": [[0, 107.302], [24.74, 107.302], [52.258, 69.25], [79.582, 107.302], [104.322, 107.302], [64.083, 53.055], [103.328, 0], [78.686, 0], [52.258, 36.86], [25.535, 0], [0.892, 0], [40.138, 53.055]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 7", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 9, "ty": 4, "nm": "Path 6", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [228.812, -5.961, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [46.646, 56.632, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[-7.882, 0], [-8.677, 12.386], [0, 0], [0, 0], [0, 0], [0.398, 3.908], [1.72, 3.51], [7.152, 3.245], [9.605, 0], [7.484, -5.431], [2.584, -9.207], [0, 0], [-4.701, 2.65], [-5.63, 0], [-3.708, -3.577], [-0.333, -7.418], [8.348, -1.325], [6.226, -1.788], [4.307, -5.233], [0, -8.081], [-2.714, -4.901], [-5.366, -2.981]], "o": [[17.089, 0], [0, 0], [0, 0], [0, 0], [0, -4.504], [-0.397, -3.908], [-3.314, -7.087], [-7.09, -3.312], [-12.384, 0], [-7.484, 5.431], [0, 0], [1.854, -5.961], [4.705, -2.649], [8.348, 0], [3.776, 3.511], [-8.745, 1.193], [-8.344, 1.258], [-8.279, 2.649], [-4.304, 5.232], [0, 5.829], [2.783, 4.835], [5.432, 2.914]], "v": [[36.264, 113.263], [74.913, 94.684], [74.913, 110.283], [93.293, 110.283], [93.293, 44.212], [92.696, 31.595], [89.52, 20.467], [73.822, 4.968], [48.782, 0], [18.976, 8.147], [3.874, 30.104], [23.251, 36.066], [33.084, 23.149], [48.583, 19.175], [66.666, 24.54], [72.828, 40.934], [47.192, 44.709], [25.336, 49.28], [6.458, 61.103], [0, 81.073], [4.073, 97.168], [16.294, 108.892]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ind": 1, "ty": "sh", "ix": 2, "ks": { "a": 0, "k": { "i": [[5.898, 0], [3.18, 3.047], [0, 4.173], [-2.783, 2.451], [-4.239, 1.457], [-6.096, 0.994], [-8.08, 1.192], [0.267, -3.113], [0.86, -2.45], [2.584, -3.246], [4.304, -2.119]], "o": [[-6.62, 0], [-3.111, -3.047], [0, -4.239], [2.848, -2.451], [4.503, -1.325], [6.158, -0.993], [-0.069, 2.517], [-0.264, 3.113], [-0.795, 3.511], [-2.519, 3.246], [-4.239, 2.053]], "v": [[39.939, 96.274], [25.235, 91.704], [20.566, 80.874], [24.74, 70.839], [35.371, 64.977], [51.268, 61.5], [72.629, 58.221], [72.13, 66.666], [70.443, 75.012], [65.376, 85.146], [55.142, 93.194]], "c": true }, "ix": 2 }, "nm": "Path 2", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 6", "np": 4, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 10, "ty": 4, "nm": "Path 5", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [122.624, 16.393, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [49.528, 78.986, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [0, 0], [0, 0], [-4.9, -1.788], [-6.096, 0], [-7.22, 4.968], [-3.906, 8.544], [0, 10.73], [3.975, 8.478], [7.35, 4.901], [10.068, 0], [5.298, -2.252], [3.841, -3.974], [0, 0], [0, 0]], "o": [[0, 0], [0, 0], [3.773, 3.378], [4.969, 1.855], [9.999, 0], [7.285, -5.034], [3.975, -8.544], [0, -10.796], [-3.972, -8.544], [-7.285, -4.968], [-6.624, 0], [-5.298, 2.186], [0, 0], [0, 0], [0, 0]], "v": [[0, 157.972], [20.866, 157.972], [20.866, 102.732], [33.879, 110.481], [50.473, 113.263], [76.304, 105.812], [93.094, 85.444], [99.056, 56.532], [93.094, 27.62], [76.106, 7.452], [50.076, 0], [32.191, 3.378], [18.481, 12.618], [18.481, 2.981], [0, 2.981]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ind": 1, "ty": "sh", "ix": 2, "ks": { "a": 0, "k": { "i": [[6.693, 0], [4.636, 7.087], [0, 11.127], [-4.571, 7.021], [-9.804, 0], [-4.438, -3.378], [-2.118, -5.696], [0, -7.021], [2.118, -5.762], [4.373, -3.378]], "o": [[-10.198, 0], [-4.571, -7.087], [0, -11.128], [4.572, -7.021], [6.888, 0], [4.438, 3.378], [2.186, 5.696], [0, 7.087], [-2.121, 5.696], [-4.304, 3.378]], "v": [[47.589, 94.485], [25.336, 83.854], [18.481, 56.532], [25.336, 29.309], [46.896, 18.778], [63.884, 23.845], [73.72, 37.456], [76.998, 56.532], [73.822, 75.807], [64.083, 89.419]], "c": true }, "ix": 2 }, "nm": "Path 2", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 5", "np": 4, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 11, "ty": 4, "nm": "Path 4", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [6.711, -5.961, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [46.646, 56.632, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[-7.882, 0], [-8.677, 12.386], [0, 0], [0, 0], [0, 0], [0.398, 3.908], [1.724, 3.51], [7.155, 3.245], [9.605, 0], [7.484, -5.431], [2.584, -9.207], [0, 0], [-4.701, 2.65], [-5.63, 0], [-3.711, -3.577], [-0.329, -7.418], [8.344, -1.325], [6.223, -1.788], [4.304, -5.233], [0, -8.081], [-2.718, -4.901], [-5.366, -2.981]], "o": [[17.089, 0], [0, 0], [0, 0], [0, 0], [0, -4.504], [-0.397, -3.908], [-3.31, -7.087], [-7.087, -3.312], [-12.388, 0], [-7.484, 5.431], [0, 0], [1.854, -5.961], [4.701, -2.649], [8.344, 0], [3.773, 3.511], [-8.742, 1.193], [-8.344, 1.258], [-8.283, 2.649], [-4.308, 5.232], [0, 5.829], [2.783, 4.835], [5.431, 2.914]], "v": [[36.264, 113.263], [74.913, 94.684], [74.913, 110.283], [93.292, 110.283], [93.292, 44.212], [92.696, 31.595], [89.516, 20.467], [73.818, 4.968], [48.782, 0], [18.976, 8.147], [3.874, 30.104], [23.247, 36.066], [33.084, 23.149], [48.583, 19.175], [66.666, 24.54], [72.824, 40.934], [47.192, 44.709], [25.336, 49.28], [6.458, 61.103], [0, 81.073], [4.073, 97.168], [16.294, 108.892]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ind": 1, "ty": "sh", "ix": 2, "ks": { "a": 0, "k": { "i": [[5.894, 0], [3.18, 3.047], [0, 4.173], [-2.783, 2.451], [-4.239, 1.457], [-6.093, 0.994], [-8.08, 1.192], [0.264, -3.113], [0.864, -2.45], [2.584, -3.246], [4.308, -2.119]], "o": [[-6.624, 0], [-3.111, -3.047], [0, -4.239], [2.848, -2.451], [4.506, -1.325], [6.161, -0.993], [-0.065, 2.517], [-0.264, 3.113], [-0.792, 3.511], [-2.515, 3.246], [-4.239, 2.053]], "v": [[39.939, 96.274], [25.235, 91.704], [20.566, 80.874], [24.74, 70.839], [35.368, 64.977], [51.265, 61.5], [72.625, 58.221], [72.13, 66.666], [70.439, 75.012], [65.373, 85.146], [55.138, 93.194]], "c": true }, "ix": 2 }, "nm": "Path 2", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 4", "np": 4, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 12, "ty": 4, "nm": "Path 3", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [-87.297, -20, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [36.661, 69.418, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[-6.693, 1.325], [0, 0], [5.233, 0.596], [2.385, 4.04], [0.13, 3.179], [0, 4.305], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [-0.134, -4.636], [-2.316, -4.438], [-5.099, -2.318], [-6.49, -0.199]], "o": [[0, 0], [-7.021, 1.06], [-5.164, -0.662], [-1.258, -2.186], [-0.069, -3.179], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 5.829], [0.199, 4.57], [2.653, 4.968], [5.099, 2.318], [6.494, 0.199]], "v": [[73.323, 137.108], [73.323, 119.523], [54.94, 120.218], [43.614, 113.164], [41.529, 105.116], [41.428, 93.889], [41.428, 46.498], [73.323, 46.498], [73.323, 29.806], [41.428, 29.806], [41.428, 0], [20.566, 0], [20.566, 29.806], [0, 29.806], [0, 46.498], [20.566, 46.498], [20.566, 94.883], [20.765, 110.581], [24.537, 124.093], [36.163, 135.022], [53.549, 138.797]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 3", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 13, "ty": 4, "nm": "Path 2", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [-179.397, -5.961, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [51.207, 56.632, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[-10.664, 0], [-8.478, 5.233], [-4.174, 9.604], [0, 0], [13.183, 0], [5.164, 5.431], [0.86, 9.935], [0, 0], [3.776, 9.339], [7.683, 5.034], [10.932, 0], [7.882, -4.703], [4.438, -8.611], [0, -11.724], [-4.438, -8.412], [-8.015, -4.703]], "o": [[10.4, 0], [8.478, -5.299], [0, 0], [-5.431, 11.393], [-9.005, 0], [-5.168, -5.431], [0, 0], [0.73, -12.85], [-3.773, -9.339], [-7.683, -5.1], [-10.465, 0], [-7.882, 4.703], [-4.373, 8.61], [0, 11.061], [4.506, 8.346], [8.08, 4.636]], "v": [[53.552, 113.263], [81.869, 105.414], [100.845, 83.06], [80.478, 76.602], [52.558, 93.691], [31.299, 85.544], [22.257, 62.494], [102.237, 62.494], [97.665, 29.21], [80.478, 7.65], [52.558, 0], [25.04, 7.054], [6.559, 27.024], [0, 57.526], [6.656, 86.736], [25.437, 106.309]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ind": 1, "ty": "sh", "ix": 2, "ks": { "a": 0, "k": { "i": [[-8.875, 0], [-2.183, -18.612], [0, 0], [-5.099, 4.769]], "o": [[16.229, 0], [0, 0], [1.326, -9.074], [5.103, -4.769]], "v": [[53.353, 18.381], [80.973, 46.299], [22.752, 46.299], [32.39, 25.534]], "c": true }, "ix": 2 }, "nm": "Path 2", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 2", "np": 4, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 14, "ty": 4, "nm": "Path 1", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [-317.106, -23.845, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [70.591, 71.535, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]], "o": [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]], "v": [[0, 143.069], [19.572, 143.069], [19.572, 45.107], [65.871, 143.069], [75.311, 143.069], [121.509, 45.107], [121.509, 142.97], [141.182, 142.97], [141.182, 0], [122.206, 0], [70.642, 107.6], [18.777, 0], [0, 0]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 1", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }], "markers": [] };
        var otherPreloader = { "v": "5.7.4", "fr": 25, "ip": 0, "op": 100, "w": 1733, "h": 627, "nm": "Pre-comp 1", "ddd": 0, "assets": [], "layers": [{ "ddd": 0, "ind": 1, "ty": 4, "nm": "Shape Layer 2", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 31, "ix": 10 }, "p": { "a": 1, "k": [{ "i": { "x": 0.667, "y": 1 }, "o": { "x": 0.333, "y": 0 }, "t": 0, "s": [2042.5, 1009.5, 0], "to": [164.512, -6.267, 0], "ti": [-237.988, 9.066, 0] }, { "i": { "x": 0.667, "y": 1 }, "o": { "x": 0.333, "y": 0 }, "t": 50, "s": [3153.5, 801.5, 0], "to": [402.5, -15.333, 0], "ti": [5.5, -4.667, 0] }, { "t": 100, "s": [2042.5, 1009.5, 0] }], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [0, 0, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [131.964, 92.618, 100], "ix": 6, "l": 2 } }, "ao": 0, "ef": [{ "ty": 29, "nm": "Gaussian Blur", "np": 5, "mn": "ADBE Gaussian Blur 2", "ix": 1, "en": 1, "ef": [{ "ty": 0, "nm": "Blurriness", "mn": "ADBE Gaussian Blur 2-0001", "ix": 1, "v": { "a": 0, "k": 223.6, "ix": 1 } }, { "ty": 7, "nm": "Blur Dimensions", "mn": "ADBE Gaussian Blur 2-0002", "ix": 2, "v": { "a": 0, "k": 1, "ix": 2 } }, { "ty": 7, "nm": "Repeat Edge Pixels", "mn": "ADBE Gaussian Blur 2-0003", "ix": 3, "v": { "a": 0, "k": 1, "ix": 3 } }] }], "shapes": [{ "ty": "gr", "it": [{ "ty": "rc", "d": 1, "s": { "a": 0, "k": [1408.051, 1295.723], "ix": 2 }, "p": { "a": 0, "k": [0, 0], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 4 }, "nm": "Rectangle Path 1", "mn": "ADBE Vector Shape - Rect", "hd": false }, { "ty": "st", "c": { "a": 0, "k": [0, 0, 0, 1], "ix": 3 }, "o": { "a": 0, "k": 100, "ix": 4 }, "w": { "a": 0, "k": 0, "ix": 5 }, "lc": 1, "lj": 1, "ml": 4, "bm": 0, "nm": "Stroke 1", "mn": "ADBE Vector Graphic - Stroke", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [0, 0, 0, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [-534.474, 2.361], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Rectangle 1", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 2, "ty": 4, "nm": "Shape Layer 1", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 31, "ix": 10 }, "p": { "a": 1, "k": [{ "i": { "x": 0.833, "y": 0.833 }, "o": { "x": 0.167, "y": 0.167 }, "t": 0, "s": [98.5, 245.5, 0], "to": [164.512, -6.267, 0], "ti": [-236.918, 24.299, 0] }, { "i": { "x": 0.833, "y": 0.833 }, "o": { "x": 0.167, "y": 0.167 }, "t": 50, "s": [1061.5, 337.5, 0], "to": [890.5, -91.333, 0], "ti": [13.5, -0.667, 0] }, { "t": 100, "s": [98.5, 245.5, 0] }], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [0, 0, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [96.634, 102.639, 100], "ix": 6, "l": 2 } }, "ao": 0, "ef": [{ "ty": 29, "nm": "Gaussian Blur", "np": 5, "mn": "ADBE Gaussian Blur 2", "ix": 1, "en": 1, "ef": [{ "ty": 0, "nm": "Blurriness", "mn": "ADBE Gaussian Blur 2-0001", "ix": 1, "v": { "a": 0, "k": 223.6, "ix": 1 } }, { "ty": 7, "nm": "Blur Dimensions", "mn": "ADBE Gaussian Blur 2-0002", "ix": 2, "v": { "a": 0, "k": 1, "ix": 2 } }, { "ty": 7, "nm": "Repeat Edge Pixels", "mn": "ADBE Gaussian Blur 2-0003", "ix": 3, "v": { "a": 0, "k": 1, "ix": 3 } }] }], "shapes": [{ "ty": "gr", "it": [{ "ty": "rc", "d": 1, "s": { "a": 0, "k": [1408.051, 1295.723], "ix": 2 }, "p": { "a": 0, "k": [0, 0], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 4 }, "nm": "Rectangle Path 1", "mn": "ADBE Vector Shape - Rect", "hd": false }, { "ty": "st", "c": { "a": 0, "k": [0, 0, 0, 1], "ix": 3 }, "o": { "a": 0, "k": 100, "ix": 4 }, "w": { "a": 0, "k": 0, "ix": 5 }, "lc": 1, "lj": 1, "ml": 4, "bm": 0, "nm": "Stroke 1", "mn": "ADBE Vector Graphic - Stroke", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [0, 0, 0, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [-534.474, 2.361], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Rectangle 1", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 3, "ty": 4, "nm": "Path 11", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [461.145, 288.085, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [186.551, 111.2, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[4.106, 2.191], [25.862, 26.52], [-3.369, 15.997], [-67.198, 33.174], [-13.846, -4.054], [-89.63, -113.884], [-1.446, -0.145], [-0.394, 3.941], [10.845, 13.685], [0, 0], [0, 0], [5.984, -5.824], [0.65, 0.065], [-0.979, 1.437], [-2.963, 0.29], [-31.483, -45.162], [0.448, -10.618], [0, 0], [0, 0], [6.136, -8.741], [7.574, 1.5], [53.885, 67.017], [2.945, -0.62], [0.216, -2.153], [-7.381, -4.751], [-32.021, 28.231], [-12.118, 10.939], [-1.026, 0.869], [0, 0], [0, 0], [0.878, -0.903], [10.49, -10.284], [13.33, -0.944]], "o": [[-7.905, -4.216], [-78.281, -80.275], [3.317, -15.748], [68.657, -33.895], [14.564, 4.264], [44.717, 56.814], [2.23, 0.223], [0.166, -1.658], [0, 0], [0, 0], [-2.519, 2.178], [-15.456, 15.038], [-2.161, -0.216], [3.686, -5.404], [9.764, -0.956], [18.983, 27.229], [0, 0], [0, 0], [-5.139, 8.936], [-7.285, 10.374], [-6.357, -1.259], [-79.787, -99.236], [-5.667, 1.193], [-0.296, 2.956], [5.033, 3.239], [1.946, -1.715], [12.119, -10.94], [0, 0], [0, 0], [6.516, 7.785], [-1.85, 1.9], [-33.333, 32.679], [-8.256, 0.585]], "v": [[119.761, 219.876], [77.604, 181.503], [0.931, 82.969], [74.949, 31.616], [157.316, 1.824], [257.608, 115.546], [319.132, 191.465], [361.688, 131.212], [319.049, 69.952], [314.138, 63.758], [309.556, 67.718], [294.092, 82.268], [265.28, 109.054], [253.73, 92.869], [308.836, 45.981], [353.517, 96.109], [373.027, 135.941], [372.793, 141.599], [369.186, 147.867], [335.123, 201.273], [316.313, 212.505], [251.382, 138.912], [153.635, 22.399], [29.155, 87.585], [131.422, 195.923], [171.671, 166.599], [197.241, 143.592], [221.142, 122.123], [223.01, 120.543], [230.237, 129.178], [236.489, 138.816], [190.75, 183.977], [137.695, 222.206]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 11", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 4, "ty": 4, "nm": "Path 10", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [227.98, 269.032, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [67.698, 19.023, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [6.803, -0.407], [0, 0], [-4.273, 2.908], [0, 0], [-0.597, 0.144], [0, 0], [-1.825, -4.682]], "o": [[2.475, 6.349], [0, 0], [-5.159, 0.309], [0, 0], [0.507, -0.345], [0, 0], [4.885, -1.179], [0, 0]], "v": [[134.703, 17.148], [125.944, 30.823], [5.406, 38.035], [2.238, 28.747], [2.238, 28.747], [3.908, 28.007], [118.797, 0.282], [130.512, 6.398]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 10", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 5, "ty": 4, "nm": "Path 9", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [606.172, 305.246, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [37.327, 9.909, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [8.023, -0.078], [0, 0], [-0.448, 1.679], [0, 0], [-0.94, 0.223], [0, 0], [-2.32, -2.881]], "o": [[5.03, 6.248], [0, 0], [-1.738, 0.017], [0, 0], [0.253, -0.934], [0, 0], [3.599, -0.851], [0, 0]], "v": [[72.513, 3.579], [65.127, 19.205], [2.656, 19.817], [0.09, 16.51], [0.09, 16.51], [2.024, 14.633], [62.825, 0.258], [72.513, 3.579]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 9", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 6, "ty": 4, "nm": "Path 8", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [415.24, 284.976, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [229.397, 115.845, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[4.278, 2.282], [26.942, 27.628], [-3.51, 16.664], [-70.004, 34.56], [-14.425, -4.223], [-93.375, -118.64], [-1.5, -0.151], [-0.412, 4.106], [11.297, 14.256], [0, 0], [0, 0], [6.237, -6.067], [5.5, -5.027], [0.267, 0.027], [-1.019, 1.497], [-3.09, 0.302], [-32.802, -47.048], [0.463, -11.061], [0, 0], [0, 0], [6.393, -9.106], [7.892, 1.563], [56.132, 69.816], [3.068, -0.646], [0.225, -2.243], [-7.689, -4.949], [-33.358, 29.41], [-12.625, 11.396], [-1.07, 0.906], [0, 0], [0, 0], [0.914, -0.94], [10.928, -10.714], [13.886, -0.983]], "o": [[-8.236, -4.393], [-81.55, -83.628], [3.456, -16.406], [71.525, -35.311], [15.172, 4.442], [46.581, 59.187], [2.327, 0.233], [0.173, -1.727], [0, 0], [0, 0], [-2.624, 2.269], [-9.707, 9.448], [-5.742, -2.566], [-2.251, -0.225], [3.838, -5.63], [10.169, -0.996], [19.774, 28.366], [0, 0], [0, 0], [-5.352, 9.31], [-7.589, 10.807], [-6.62, -1.312], [-83.121, -103.381], [-5.903, 1.243], [-0.308, 3.08], [5.242, 3.374], [2.027, -1.786], [12.624, -11.396], [0, 0], [0, 0], [6.787, 8.11], [-1.93, 1.979], [-34.725, 34.044], [-8.601, 0.609]], "v": [[194.873, 229.06], [150.955, 189.083], [0.122, 109.27], [148.189, 32.936], [233.995, 1.9], [338.477, 120.372], [402.567, 199.462], [446.904, 136.692], [402.484, 72.874], [397.367, 66.421], [392.593, 70.546], [376.483, 85.704], [354.183, 116.703], [346.471, 113.609], [334.437, 96.747], [391.845, 47.901], [438.394, 100.123], [458.718, 141.619], [458.472, 147.513], [454.714, 154.042], [419.227, 209.679], [399.633, 221.381], [331.991, 144.714], [230.161, 23.335], [100.482, 91.243], [207.021, 204.106], [248.95, 173.558], [275.588, 149.589], [300.486, 127.223], [302.434, 125.578], [311.891, 128.489], [316.477, 144.613], [268.826, 191.661], [213.555, 231.487]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [0.172549019608, 0.172549019608, 0.172549019608, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 8", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 7, "ty": 4, "nm": "Group 1", "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [1125.781, 341.52, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [0, 0, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "rc", "d": 1, "s": { "a": 0, "k": [775.394, 190.759], "ix": 2 }, "p": { "a": 0, "k": [0, 0], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 4 }, "nm": "Rectangle Path 1", "mn": "ADBE Vector Shape - Rect", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 8, "ty": 4, "nm": "Path 7", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [335.536, -5.961, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [52.161, 53.651, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]], "o": [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]], "v": [[0, 107.302], [24.74, 107.302], [52.258, 69.25], [79.582, 107.302], [104.322, 107.302], [64.083, 53.055], [103.328, 0], [78.686, 0], [52.258, 36.86], [25.535, 0], [0.892, 0], [40.138, 53.055]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 7", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 9, "ty": 4, "nm": "Path 6", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [228.812, -5.961, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [46.646, 56.632, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[-7.882, 0], [-8.677, 12.386], [0, 0], [0, 0], [0, 0], [0.398, 3.908], [1.72, 3.51], [7.152, 3.245], [9.605, 0], [7.484, -5.431], [2.584, -9.207], [0, 0], [-4.701, 2.65], [-5.63, 0], [-3.708, -3.577], [-0.333, -7.418], [8.348, -1.325], [6.226, -1.788], [4.307, -5.233], [0, -8.081], [-2.714, -4.901], [-5.366, -2.981]], "o": [[17.089, 0], [0, 0], [0, 0], [0, 0], [0, -4.504], [-0.397, -3.908], [-3.314, -7.087], [-7.09, -3.312], [-12.384, 0], [-7.484, 5.431], [0, 0], [1.854, -5.961], [4.705, -2.649], [8.348, 0], [3.776, 3.511], [-8.745, 1.193], [-8.344, 1.258], [-8.279, 2.649], [-4.304, 5.232], [0, 5.829], [2.783, 4.835], [5.432, 2.914]], "v": [[36.264, 113.263], [74.913, 94.684], [74.913, 110.283], [93.293, 110.283], [93.293, 44.212], [92.696, 31.595], [89.52, 20.467], [73.822, 4.968], [48.782, 0], [18.976, 8.147], [3.874, 30.104], [23.251, 36.066], [33.084, 23.149], [48.583, 19.175], [66.666, 24.54], [72.828, 40.934], [47.192, 44.709], [25.336, 49.28], [6.458, 61.103], [0, 81.073], [4.073, 97.168], [16.294, 108.892]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ind": 1, "ty": "sh", "ix": 2, "ks": { "a": 0, "k": { "i": [[5.898, 0], [3.18, 3.047], [0, 4.173], [-2.783, 2.451], [-4.239, 1.457], [-6.096, 0.994], [-8.08, 1.192], [0.267, -3.113], [0.86, -2.45], [2.584, -3.246], [4.304, -2.119]], "o": [[-6.62, 0], [-3.111, -3.047], [0, -4.239], [2.848, -2.451], [4.503, -1.325], [6.158, -0.993], [-0.069, 2.517], [-0.264, 3.113], [-0.795, 3.511], [-2.519, 3.246], [-4.239, 2.053]], "v": [[39.939, 96.274], [25.235, 91.704], [20.566, 80.874], [24.74, 70.839], [35.371, 64.977], [51.268, 61.5], [72.629, 58.221], [72.13, 66.666], [70.443, 75.012], [65.376, 85.146], [55.142, 93.194]], "c": true }, "ix": 2 }, "nm": "Path 2", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 6", "np": 4, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 10, "ty": 4, "nm": "Path 5", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [122.624, 16.393, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [49.528, 78.986, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [0, 0], [0, 0], [-4.9, -1.788], [-6.096, 0], [-7.22, 4.968], [-3.906, 8.544], [0, 10.73], [3.975, 8.478], [7.35, 4.901], [10.068, 0], [5.298, -2.252], [3.841, -3.974], [0, 0], [0, 0]], "o": [[0, 0], [0, 0], [3.773, 3.378], [4.969, 1.855], [9.999, 0], [7.285, -5.034], [3.975, -8.544], [0, -10.796], [-3.972, -8.544], [-7.285, -4.968], [-6.624, 0], [-5.298, 2.186], [0, 0], [0, 0], [0, 0]], "v": [[0, 157.972], [20.866, 157.972], [20.866, 102.732], [33.879, 110.481], [50.473, 113.263], [76.304, 105.812], [93.094, 85.444], [99.056, 56.532], [93.094, 27.62], [76.106, 7.452], [50.076, 0], [32.191, 3.378], [18.481, 12.618], [18.481, 2.981], [0, 2.981]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ind": 1, "ty": "sh", "ix": 2, "ks": { "a": 0, "k": { "i": [[6.693, 0], [4.636, 7.087], [0, 11.127], [-4.571, 7.021], [-9.804, 0], [-4.438, -3.378], [-2.118, -5.696], [0, -7.021], [2.118, -5.762], [4.373, -3.378]], "o": [[-10.198, 0], [-4.571, -7.087], [0, -11.128], [4.572, -7.021], [6.888, 0], [4.438, 3.378], [2.186, 5.696], [0, 7.087], [-2.121, 5.696], [-4.304, 3.378]], "v": [[47.589, 94.485], [25.336, 83.854], [18.481, 56.532], [25.336, 29.309], [46.896, 18.778], [63.884, 23.845], [73.72, 37.456], [76.998, 56.532], [73.822, 75.807], [64.083, 89.419]], "c": true }, "ix": 2 }, "nm": "Path 2", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 5", "np": 4, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 11, "ty": 4, "nm": "Path 4", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [6.711, -5.961, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [46.646, 56.632, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[-7.882, 0], [-8.677, 12.386], [0, 0], [0, 0], [0, 0], [0.398, 3.908], [1.724, 3.51], [7.155, 3.245], [9.605, 0], [7.484, -5.431], [2.584, -9.207], [0, 0], [-4.701, 2.65], [-5.63, 0], [-3.711, -3.577], [-0.329, -7.418], [8.344, -1.325], [6.223, -1.788], [4.304, -5.233], [0, -8.081], [-2.718, -4.901], [-5.366, -2.981]], "o": [[17.089, 0], [0, 0], [0, 0], [0, 0], [0, -4.504], [-0.397, -3.908], [-3.31, -7.087], [-7.087, -3.312], [-12.388, 0], [-7.484, 5.431], [0, 0], [1.854, -5.961], [4.701, -2.649], [8.344, 0], [3.773, 3.511], [-8.742, 1.193], [-8.344, 1.258], [-8.283, 2.649], [-4.308, 5.232], [0, 5.829], [2.783, 4.835], [5.431, 2.914]], "v": [[36.264, 113.263], [74.913, 94.684], [74.913, 110.283], [93.292, 110.283], [93.292, 44.212], [92.696, 31.595], [89.516, 20.467], [73.818, 4.968], [48.782, 0], [18.976, 8.147], [3.874, 30.104], [23.247, 36.066], [33.084, 23.149], [48.583, 19.175], [66.666, 24.54], [72.824, 40.934], [47.192, 44.709], [25.336, 49.28], [6.458, 61.103], [0, 81.073], [4.073, 97.168], [16.294, 108.892]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ind": 1, "ty": "sh", "ix": 2, "ks": { "a": 0, "k": { "i": [[5.894, 0], [3.18, 3.047], [0, 4.173], [-2.783, 2.451], [-4.239, 1.457], [-6.093, 0.994], [-8.08, 1.192], [0.264, -3.113], [0.864, -2.45], [2.584, -3.246], [4.308, -2.119]], "o": [[-6.624, 0], [-3.111, -3.047], [0, -4.239], [2.848, -2.451], [4.506, -1.325], [6.161, -0.993], [-0.065, 2.517], [-0.264, 3.113], [-0.792, 3.511], [-2.515, 3.246], [-4.239, 2.053]], "v": [[39.939, 96.274], [25.235, 91.704], [20.566, 80.874], [24.74, 70.839], [35.368, 64.977], [51.265, 61.5], [72.625, 58.221], [72.13, 66.666], [70.439, 75.012], [65.373, 85.146], [55.138, 93.194]], "c": true }, "ix": 2 }, "nm": "Path 2", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 4", "np": 4, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 12, "ty": 4, "nm": "Path 3", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [-87.297, -20, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [36.661, 69.418, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[-6.693, 1.325], [0, 0], [5.233, 0.596], [2.385, 4.04], [0.13, 3.179], [0, 4.305], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [-0.134, -4.636], [-2.316, -4.438], [-5.099, -2.318], [-6.49, -0.199]], "o": [[0, 0], [-7.021, 1.06], [-5.164, -0.662], [-1.258, -2.186], [-0.069, -3.179], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 5.829], [0.199, 4.57], [2.653, 4.968], [5.099, 2.318], [6.494, 0.199]], "v": [[73.323, 137.108], [73.323, 119.523], [54.94, 120.218], [43.614, 113.164], [41.529, 105.116], [41.428, 93.889], [41.428, 46.498], [73.323, 46.498], [73.323, 29.806], [41.428, 29.806], [41.428, 0], [20.566, 0], [20.566, 29.806], [0, 29.806], [0, 46.498], [20.566, 46.498], [20.566, 94.883], [20.765, 110.581], [24.537, 124.093], [36.163, 135.022], [53.549, 138.797]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 3", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 13, "ty": 4, "nm": "Path 2", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [-179.397, -5.961, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [51.207, 56.632, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[-10.664, 0], [-8.478, 5.233], [-4.174, 9.604], [0, 0], [13.183, 0], [5.164, 5.431], [0.86, 9.935], [0, 0], [3.776, 9.339], [7.683, 5.034], [10.932, 0], [7.882, -4.703], [4.438, -8.611], [0, -11.724], [-4.438, -8.412], [-8.015, -4.703]], "o": [[10.4, 0], [8.478, -5.299], [0, 0], [-5.431, 11.393], [-9.005, 0], [-5.168, -5.431], [0, 0], [0.73, -12.85], [-3.773, -9.339], [-7.683, -5.1], [-10.465, 0], [-7.882, 4.703], [-4.373, 8.61], [0, 11.061], [4.506, 8.346], [8.08, 4.636]], "v": [[53.552, 113.263], [81.869, 105.414], [100.845, 83.06], [80.478, 76.602], [52.558, 93.691], [31.299, 85.544], [22.257, 62.494], [102.237, 62.494], [97.665, 29.21], [80.478, 7.65], [52.558, 0], [25.04, 7.054], [6.559, 27.024], [0, 57.526], [6.656, 86.736], [25.437, 106.309]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ind": 1, "ty": "sh", "ix": 2, "ks": { "a": 0, "k": { "i": [[-8.875, 0], [-2.183, -18.612], [0, 0], [-5.099, 4.769]], "o": [[16.229, 0], [0, 0], [1.326, -9.074], [5.103, -4.769]], "v": [[53.353, 18.381], [80.973, 46.299], [22.752, 46.299], [32.39, 25.534]], "c": true }, "ix": 2 }, "nm": "Path 2", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 2", "np": 4, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }, { "ddd": 0, "ind": 14, "ty": 4, "nm": "Path 1", "parent": 7, "sr": 1, "ks": { "o": { "a": 0, "k": 100, "ix": 11 }, "r": { "a": 0, "k": 0, "ix": 10 }, "p": { "a": 0, "k": [-317.106, -23.845, 0], "ix": 2, "l": 2 }, "a": { "a": 0, "k": [70.591, 71.535, 0], "ix": 1, "l": 2 }, "s": { "a": 0, "k": [100, 100, 100], "ix": 6, "l": 2 } }, "ao": 0, "shapes": [{ "ty": "gr", "it": [{ "ind": 0, "ty": "sh", "ix": 1, "ks": { "a": 0, "k": { "i": [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]], "o": [[0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0], [0, 0]], "v": [[0, 143.069], [19.572, 143.069], [19.572, 45.107], [65.871, 143.069], [75.311, 143.069], [121.509, 45.107], [121.509, 142.97], [141.182, 142.97], [141.182, 0], [122.206, 0], [70.642, 107.6], [18.777, 0], [0, 0]], "c": true }, "ix": 2 }, "nm": "Path 1", "mn": "ADBE Vector Shape - Group", "hd": false }, { "ty": "fl", "c": { "a": 0, "k": [1, 1, 1, 1], "ix": 4 }, "o": { "a": 0, "k": 100, "ix": 5 }, "r": 1, "bm": 0, "nm": "Fill 1", "mn": "ADBE Vector Graphic - Fill", "hd": false }, { "ty": "tr", "p": { "a": 0, "k": [0, 0], "ix": 2 }, "a": { "a": 0, "k": [0, 0], "ix": 1 }, "s": { "a": 0, "k": [100, 100], "ix": 3 }, "r": { "a": 0, "k": 0, "ix": 6 }, "o": { "a": 0, "k": 100, "ix": 7 }, "sk": { "a": 0, "k": 0, "ix": 4 }, "sa": { "a": 0, "k": 0, "ix": 5 }, "nm": "Transform" }], "nm": "Path 1", "np": 3, "cix": 2, "bm": 0, "ix": 1, "mn": "ADBE Vector Group", "hd": false }], "ip": 0, "op": 100, "st": 0, "bm": 0 }], "markers": [] };

        var browserName = (function (agent) {
            switch (true) {
                case agent.indexOf("edge") > -1: return "MS Edge";
                case agent.indexOf("edg/") > -1: return "Edge ( chromium based)";
                case agent.indexOf("opr") > -1 && !!window.opr: return "Opera";
                case agent.indexOf("chrome") > -1 && !!window.chrome: return "Chrome";
                case agent.indexOf("trident") > -1: return "MS IE";
                case agent.indexOf("firefox") > -1: return "Mozilla Firefox";
                case agent.indexOf("safari") > -1: return "Safari";
                default: return "other";
            }
        })(window.navigator.userAgent.toLowerCase());

        var animation = bodymovin.loadAnimation({
            container: document.querySelector('#preload-animation'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            animationData: (browserName == "Safari") ? safariPreloader : otherPreloader
        })
    </script>
    <div class="sections-block">
        <div class="secondsect-father">
            <div class="section-2 screenone section first not-padding-top first-head-section wf-section"
                style="position: fixed; z-index: 13;">
                <div class="section-inner first-inner">
                    <div class="container-3 wrapper w-container">
                        <div class="div-block-32"><img src="./images/main-logo.svg" loading="lazy" width="577" alt=""
                                class="image-8 first-screen-logo" />
                            <div class="text-block-7">In Vision the future</div>
                        </div>
                        <div class="text-block-3">
                            <div class="text-sect first-anim-text">Imagine that you can see the world through someone
                                else’s eyes... <br>Literally</div>
                            <div class="text-sect second-anim-text">You can guide that person <br />and make him act as
                                you <br />wish...</div>
                        </div>
                    </div><img src="./images/gradient-2.png" loading="eager" sizes="100vw" alt="" class="image-7" /><img
                        src="./images/gradient-1.png" loading="eager" sizes="100vw" alt="" class="image-6" />
                </div><img src="./images/glasses.png" loading="eager" sizes="100vw"
                    srcset="./images/glasses-500.png 500w, ./images/glasses-800.png 800w, ./images/glasses-1080.png 1080w, ./images/glasses-1600.png 1600w, ./images/glasses-2000.png 2000w, ./images/glasses.png 2159w"
                    alt="" class="image-40" />
                <img src="./images/glasses-500.png" class="image-40 mob-glass">
                <div class="scroll-dv">
                    <div class="text-block-39">scroll to find out</div><img
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAxOSAxMCI+PHBhdGggc3Ryb2tlPSIjZmZmIiBkPSJNMC0uNWgxMi43MjgiIHRyYW5zZm9ybT0icm90YXRlKDQ1IC0uOTU3IDEuMTA0KSIvPjxwYXRoIHN0cm9rZT0iI2ZmZiIgZD0iTTAtLjVoMTIuNzI4IiB0cmFuc2Zvcm09InJvdGF0ZSgtNDUgMTYuODIxIC02LjQ2OCkiLz48L3N2Zz4="
                        alt="" class="image-32 arrow-down" />
                </div><img src="./images/glasses-1.png" width="3000" loading="eager" alt="" class="image-41" /><img
                    src="./images/glasses-2.png" width="2700" loading="eager" alt="" class="image-42" />
            </div>
            <div id="start" class="secondsect section connect-section wf-section" style="position: relative;">
                <div class="section-inner-2">
                    <div class="section-inner-3">
                        <div class="container-4 wrapper w-container">
                            <div class="section-content not-padding">
                                <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                        class="site-logo" />
                                    <div class="site-menu custom-menu">menu</div>
                                </div>
                                <div class="div-block-7">
                                    <div class="div-block-5"><img width="200" src="./images/MetaPax.svg" loading="lazy"
                                            alt="" class="image-9" />
                                        <div class="text-block-4">Connecting <br />people in <br /><span
                                                class="text-span-38">real-time</span></div>
                                    </div>
                                    <div class="columns-4 content-bottom flex-bottom w-row">
                                        <div class="w-col w-col-6">
                                            <div class="left-text">Discover the first platform in the world which allows
                                                you to remotely connect to real-time experiences anywhere in the world
                                                -- in a matter of seconds.</div>
                                        </div>
                                        <div class="column-2 w-col w-col-6">
                                            <div class="text-block-19 pagin-white">01<span
                                                    class="text-span-8">/10</span></div>
                                            <div class="text-block-19 not-border-bottom">intro</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="glasses">
                    <div class="blur"></div>
                    <div class="blur blur2"></div>
                    <div data-poster-url="./images/foot.jpg"
                        data-video-urls="./images/foot-mp4.mp4,./images/foot-webm.webm" data-autoplay="true"
                        data-loop="true" data-wf-ignore="true"
                        class="background-video w-background-video w-background-video-atom">
                        <video id="embed-video-1" loop="" style="background-image:url(&quot;./images/foot.jpg&quot;)"
                            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source src="./images/foot-mp4.mp4" data-wf-ignore="true" />
                        </video>
                    </div>
                </div>
            </div>
            <div id="3sec" class="section-3 section wf-section">
                <div class="container-4 wrapper w-container">
                    <div class="section-content space-between margin-top-none not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="title-container">
                            <div class="text-block-6 visible-title">Limitless<br />possibilities</div>
                            <div class="text-block-6 hidden-text1">Immersive <br />Experience</div>
                        </div>
                        <div class="div-block-3">
                            <div class="laptop-video"><img src="./images/laptop.png" loading="eager"
                                    sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1439px) 900px, 1400px"
                                    srcset="./images/laptop-500.png 500w, ./images/laptop.png 714w" alt=""
                                    class="image-13" />
                                <div data-poster-url="./images/poster-for-video-in-laptop.jpg"
                                    data-video-urls="./images/video-in-laptop-mp4.mp4,./images/video-in-laptop-webm.webm"
                                    data-autoplay="true" data-loop="true" data-wf-ignore="true"
                                    class="laptop-video-content w-background-video w-background-video-atom">
                                    <video id="embed-video-2" autoplay="" loop=""
                                        style="background-image:url(&quot;./images/poster-for-video-in-laptop.jpg&quot;)"
                                        muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                        <source>
                                    </video>
                                </div><img src="./images/footer-in-laptop.png" loading="lazy" alt=""
                                    class="image-31 laptop-int" />
                            </div>
                        </div>
                        <div class="section-inner-4"></div>
                        <div class="content-bottom flex-end w-row">
                            <div class="w-col w-col-10">
                                <div class="mobile-section-title">
                                    <div class="mobile-section-title-item">There would be lots <br />of great
                                        possibilities...</div>
                                    <div class="mobile-section-title-item-hidden">And what if...</div>
                                </div>
                                <div class="center-text visible-text">Interacting with people on the other side of the
                                    <br />globe without leaving the comfort of your living room,<br /> or renting an
                                    apartment for your future travel --<br />possibilities are limited by your
                                    imagination.
                                </div>
                                <div class="center-text hidden-text-2"><span class="text-span-33">Feel something that
                                        wasn’t possible before.</span><br /> Have you ever thought how the musical
                                    performance<br /> would look like from the eyes of your favourite singer?</div>
                            </div>
                            <div class="column-2 w-col w-col-2">
                                <div class="text-block-19 pagin-white">01<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom">intro</div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="./images/gradient-3.png" loading="eager" sizes="(max-width: 1884px) 100vw, 1884px"
                    srcset="./images/colorful-circle-500.png 500w, ./images/colorful-circle-800.png 800w, ./images/colorful-circle-1080.png 1080w, ./images/colorful-circle-1600.png 1600w, ./images/colorful-circle.png 1884w"
                    alt="" class="image-10" />
                <img src="./images/gradient-4.png" loading="eager" sizes="(max-width: 1395px) 100vw, 1395px"
                    srcset="./images/colorful-circle2-500.png 500w, ./images/colorful-circle2-800.png 800w, ./images/colorful-circle2-1080.png 1080w, ./images/colorful-circle2.png 1395w"
                    alt="" class="image-11" />
            </div>
            <div class="section-4 section black-section wf-section">
                <div data-poster-url="./images/now-you-can.jpg"
                    data-video-urls="./images/now-you-can-video-mp4.mp4,./images/now-you-can-video-webm.webm"
                    data-autoplay="true" data-loop="true" data-wf-ignore="true"
                    class="mobile-hidden background-video-4 w-background-video w-background-video-atom">
                    <video id="embed-video-3" autoplay="" loop=""
                        style="background-image:url(&quot;./images/now-you-can.jpg&quot;)" muted="" playsinline=""
                        data-wf-ignore="true" data-object-fit="cover">
                        <source>
                    </video>
                </div>
                <div class="section-content not-padding">
                    <div class="wrapper width-100">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo padding-left" />
                            <div class="site-menu custom-menu menu-hidden">menu</div>
                        </div>
                        <div class="text-container margin-top-auto">
                            <div class="text-block-14 hidden-title">Well now you can!</div>
                            <div class="text-block-15 hidden-subtitle">Fully controlable tasks like never before</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-5 section special-sect wf-section">
                <div class="container-4 wrapper w-container">
                    <div class="div-block-6 section-content">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="video-play-icon"></div>
                        <div class="block8 become-text">
                            <div class="text-left">
                                <div class="text-block-20">Become</div>
                            </div>
                            <div class="text-right">
                                <div class="newtext"><span class="text-span-4 not-border">anybody</span></div>
                            </div>
                        </div>
                        <div class="columns-10 flex-bottom content-bottom thiry-columns w-row">
                            <div class="column-28 column-flex-2 video-mute-trigger w-col w-col-4"><img
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCA3NiA3NiI+PHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0ic3F1YXJlIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNNTYuOTkyIDMwLjg3NXYxNC4yNU02Ni40OTIgMjYuMTI1djIzLjc1TTE0LjI1IDExLjg3NWw0Ny41IDUyLjI1Ii8+PHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0ic3F1YXJlIiBkPSJNMzMuMjkzIDE4LjcwMUw0NS4xMjMgOS41djIyLjIxNU00NS4xMjYgNDYuNXYyMEwyMy43NTEgNDkuODc1SDcuMTI4TDcuMTI2IDQ3LjV2LTE5bC0uMDAxLTIuMzc1aDE5LjM3NiIvPjwvc3ZnPg=="
                                    alt="" class="image-48 video-mutte-play" /><img
                                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCA3NiA3NiI+PHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGQ9Ik0yMy43NSA0OS44NzVINy4xMjVWMjguNWwuMDAxLTIuMzc1SDIzLjc1TDQ1LjEyNSA5LjV2NTdMMjMuNzUgNDkuODc1eiIvPjxwYXRoIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InNxdWFyZSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTTU2Ljk5MiAzMC44NzV2MTQuMjVNNjYuNDkyIDI2LjEyNXYyMy43NSIvPjwvc3ZnPg=="
                                    alt="" class="image-49 video-mutte-stop" /></div>
                            <div class="column-2 not-dispaly-none w-col w-col-4"><a href="#"
                                    class="button-8 w-button">skip the video &gt;</a></div>
                            <div class="flex-column w-col w-col-4">
                                <div class="text-block-19 pagin-white">02<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom">intro</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="become-video">
                    <video class="big-video" width="100%" height="100%">
                        <source>
                    </video>
                </div>
            </div>
            <div class="section-5 section section-6 eye-section wf-section">
                <div data-poster-url="./images/space-poster.jpg"
                    data-video-urls="./images/space-mp4.mp4,./images/space-webm.webm" data-autoplay="true"
                    data-loop="true" data-wf-ignore="true"
                    class="background-video-3 w-background-video w-background-video-atom">
                    <video id="embed-video-4" autoplay="" loop=""
                        style="background-image:url(&quot;./images/space-poster.jpg&quot;)" muted="" playsinline=""
                        data-wf-ignore="true" data-object-fit="cover">
                        <source>
                    </video>
                </div>
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="space-inner-tex">
                            <div class="text-block-55">Whether you buy or sell time on a platform,you join <br />the
                                fantastic community with infinite opportunities.<br /><br />Grow intellectually,
                                productivity-wise, and explore <br />the world with massive steps.</div>
                        </div>
                        <div class="content-bottom flex-end margin-top-auto w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text alantext">We are building a bridge to Metaverse of
                                    experience<br />where people can become whoever they choose.</div>
                                <div class="text-go center-text content-bottom-second-hiiden-text"><span
                                        class="text-span-28"> We&#x27;re the next generation</span><span
                                        class="text-span-23 bold">.</span> <br />MetaPax is driven by the force of its
                                    proud community where network<br /> effects are organically built into the product
                                    from the day one.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-19 pagin-white">02<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom">intro</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="eye-container"><img src="./images/sauron.png" loading="eager"
                        sizes="(max-width: 843px) 100vw, 843px"
                        srcset="./images/sauron-500.png 500w, ./images/sauron-800.png 800w, ./images/sauron.png 843w"
                        alt="" class="image-43" />
                    <div class="text-block-56">Social networks<br />evolved</div>
                    <div class="text-block-58">The line between<br />real and virtual is gone</div>
                </div>
            </div>
            <div id="get" class="section section-7 platform-section wf-section">
                <div class="wrapper w-container">
                    <div class="circle-layers"><img src="./images/bg-purple-circl.svg" alt="" class="layers-1" /><img
                            src="./images/bg-green-circl.svg" alt="" class="layers-3" /><img
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAyMTc2IDIxNzQiPjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIwX2ZfNTNfNykiPjxyZWN0IHdpZHRoPSIxNDMxLjQ2IiBoZWlnaHQ9IjE0MjkuNzkiIHg9IjE0OTguNzQiIHk9IjIwMTEuNzQiIGZpbGw9InVybCgjcGFpbnQwX3JhZGlhbF81M183KSIgcng9IjcxNC44OTUiIHRyYW5zZm9ybT0icm90YXRlKC0xNTguOTA0IDE0OTguNzQgMjAxMS43NCkiLz48L2c+PGRlZnM+PGZpbHRlciBpZD0iZmlsdGVyMF9mXzUzXzciIHdpZHRoPSIyMTc0LjY4IiBoZWlnaHQ9IjIxNzMuNDEiIHg9Ii45NTUiIHk9Ii40MzUiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPjxmZUJsZW5kIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPjxmZUdhdXNzaWFuQmx1ciByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfNTNfNyIgc3RkRGV2aWF0aW9uPSIxODUuNzg5Ii8+PC9maWx0ZXI+PHJhZGlhbEdyYWRpZW50IGlkPSJwYWludDBfcmFkaWFsXzUzXzciIGN4PSIwIiBjeT0iMCIgcj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCg3OS44NDQgNjY3LjIxNDYxIC03ODIuMzA0NDggOTMuNjE2NTMgMjUwMC40MSAyNDA2LjI2KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIG9mZnNldD0iLjQ0OCIgc3RvcC1jb2xvcj0iI0ZGNEQ0RCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0icmVkIiBzdG9wLW9wYWNpdHk9IjAiLz48L3JhZGlhbEdyYWRpZW50PjwvZGVmcz48L3N2Zz4="
                            alt="" class="layers-2" /><img src="./images/gradient-5.png" sizes="100vw" alt=""
                            class="image-21" /></div>
                    <div class="section-content space-between margin-top-none padding-top-mini padding-top-8">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="what-do-content">
                            <div class="what-do-text">
                                <div class="div-block-15">
                                    <div class="text-block-16 change-text"><span class="text-span-17">In one role
                                            you</span> <span class="text-span-7 get-span">get</span></div>
                                </div>
                                <div class="text-block-16">In one role you <span class="text-span-7 give">give</span>
                                </div>
                                <div class="div-block-26">
                                    <div class="text-block-17 marcel-1">Thousands<br />of experiences <br />available
                                    </div>
                                    <div id="give" class="text-block-17 marcel-2">Put on glasses<br />and start
                                        <br />streaming
                                    </div>
                                    <div class="how-works-bottom-text relative w-col w-col-10">
                                        <div class="text-go marcel-3 hide-for-mob">Whenever you need to appear on the
                                            other part of the world -- it’s all ready for you: join the ongoing
                                            streaming sessions or request a new one on your terms.</div>
                                        <div class="text-block-59 marcel-4 hide-for-mob">You can choose what to stream
                                            according to thousands of different requests available to you, depending on
                                            what you’re up to today. Explore the world together with other people and
                                            have fun!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="what-do-laptop">
                                <div class="rotate-container rotate-container-1"><img src="./images/laptopn-with-bg.png"
                                        loading="eager"
                                        sizes="(max-width: 479px) 94vw, (max-width: 1033px) 100vw, 1033px"
                                        srcset="./images/laptopn-with-bg-800.png 800w, ./images/laptopn-with-bg.png 1033w"
                                        alt="" class="image-19" /><img src="./images/glasses-camera-on.png"
                                        loading="eager" sizes="(max-width: 1058px) 100vw, 1058px"
                                        srcset="./images/glasses-camera-on-500.png 500w, ./images/glasses-camera-on-800.png 800w, ./images/glasses-camera-on.png 1058w"
                                        alt="" class="image-20 image-scale not-auto-width glasses-rotate" /></div>
                            </div>
                            <div class="text-go marcel-3 hide-for-desk">Whenever you need to appear on the other part of
                                the world -- it’s all ready for you: join the ongoing streaming sessions or request a
                                new one on your terms.</div>
                            <div class="text-block-59 marcel-4 hide-for-desk">You can choose what to stream according to
                                thousands of different requests available to you, depending on what you’re up to today.
                                Explore the world together with other people and have fun!</div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="column-2 w-col w-col-2">
                                <div class="text-block-19 pagin-white">02<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom">intro</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="time" class="section white-section time-section wf-section">
                <div class="bg-circle-container"><img src="./images/time-bg.png" loading="lazy" sizes="100vw"
                        srcset="./images/time-bg-500.png 500w, ./images/time-bg-800.png 800w, ./images/time-bg-1080.png 1080w, ./images/time-bg-1600.png 1600w, ./images/time-bg.png 1920w"
                        alt="" class="image-50" /></div>
                <div class="wrapper w-container">
                    <div class="section-content not-padding no-flex">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo logo-invert" />
                            <div class="site-menu custom-menu menu-button-ivert">menu</div>
                        </div>
                        <div class="matters-container">
                            <h2 class="heading h2">The only real <br />option to buy<br />‍</h2>
                            <div class="div-block-10">
                                <div class="text-block-26">TIMETIMETIMETIME</div>
                            </div>
                            <div class="content-bottom flex-end margin-top-auto w-row">
                                <div class="how-works-bottom-text text-block-18 w-col w-col-10">
                                    <div class="text-block-61">What do we exchange?</div>
                                    <div class="text-go center-text _w-960"><br /><br />Streamers are monetizing their
                                        experiences, sharing them with the<br /> people across the
                                        globe.<br /><br />Viewers are buying new experiences to live through -- saving a
                                        lot <br />of their own time in the process.</div>
                                </div>
                                <div class="column-2 pagin pagin-revert w-col w-col-2">
                                    <div class="text-block-19">02<span
                                            class="text-span-8 subpagin-black black-color">/10</span></div>
                                    <div class="text-block-19 not-border-bottom intro-black">intro</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="howto" class="section section-ways-slider _wf-section wf-section mother">
                <div class="wrapper w-container">
                    <div class="section-content not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-28 header-title">Ways to <span class="text-span-9">MetaРax</span>
                        </div>
                        <div class="ways-sliders-container">
                            <div class="ways-slider">
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text">
                                        <h3 class="heading-2">Joy<br />&amp; Fun</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to
                                            connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image"></div>
                                    <div data-poster-url="./images/parachute-poster.jpg"
                                        data-video-urls="./images/parachute-video-mp4.mp4,./images/parachute-video-webm.webm"
                                        data-autoplay="true" data-loop="true" data-wf-ignore="true"
                                        class="ways-slider-item_video w-background-video w-background-video-atom">
                                        <video id="embed-video-5" autoplay="" loop=""
                                            style="background-image:url(&quot;./images/parachute-poster.jpg&quot;)"
                                            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                            <source>
                                        </video>
                                    </div>
                                    <div class="slider-bottom-text text-style">
                                        <div class="text-block-64">Ride a mountain bike or fly a paraglider over
                                            South<br /> Africa together with your friends - guide the pilot as
                                            <br />you wish - speed, locations, explore all the
                                            details...<br /><br />No risk and <span class="text-span-34">plenty of
                                                joy!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text">
                                        <h3 class="heading-2">Science &amp; research</h3>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image2"></div>
                                    <div data-poster-url="./images/petri-poster.jpg"
                                        data-video-urls="./images/petri-mp4.mp4,./images/petri-webm.webm"
                                        data-autoplay="true" data-loop="true" data-wf-ignore="true"
                                        class="ways-slider-item_video w-background-video w-background-video-atom">
                                        <video id="embed-video-6" autoplay="" loop=""
                                            style="background-image:url(&quot;./images/petri-poster.jpg&quot;)" muted=""
                                            playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                            <source>
                                        </video>
                                    </div>
                                    <div class="slider-bottom-text text-style">
                                        <div class="text-block-64">Are you a <span class="text-span-35">fellow
                                                student or a scientist?</span> Now you can<br /> get your
                                            productivity to the next level - connecting<br /> to the scientific
                                            facilities or researchers themselves,<br /> discuss new ideas or ongoing
                                            progress with them.</div>
                                    </div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text">
                                        <h3 class="heading-2">Work<br />&amp; Business</h3>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image3"></div>
                                    <div data-poster-url="./images/backyard-poster.jpg"
                                        data-video-urls="./images/backyard-mp4.mp4,./images/backyard-webm.webm"
                                        data-autoplay="true" data-loop="true" data-wf-ignore="true"
                                        class="ways-slider-item_video w-background-video w-background-video-atom">
                                        <video id="embed-video-7" autoplay="" loop=""
                                            style="background-image:url(&quot;./images/backyard-poster.jpg&quot;)"
                                            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                            <source>
                                        </video>
                                    </div>
                                    <div class="slider-bottom-text text-style">
                                        <div class="text-block-64">Professional photographer? We have your
                                            back.<br />With MetaPax you don’t need to travel for a good<br /> views
                                            anymore. Harness MetaPax network of<br /> streamers and create <span
                                                class="text-span-36">any content you want<br /> whenever you
                                                want.</span></div>
                                    </div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text">
                                        <h3 class="heading-2">Orders<br />&amp; Errands</h3>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image4"></div>
                                    <div data-poster-url="./images/package-poster.jpg"
                                        data-video-urls="./images/package-mp4.mp4,./images/package-webm.webm"
                                        data-autoplay="true" data-loop="true" data-wf-ignore="true"
                                        class="ways-slider-item_video w-background-video w-background-video-atom">
                                        <video id="embed-video-8" autoplay="" loop=""
                                            style="background-image:url(&quot;./images/package-poster.jpg&quot;)"
                                            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                            <source>
                                        </video>
                                    </div>
                                    <div class="slider-bottom-text text-style">
                                        <div class="text-block-64"><span class="text-span-37">Distance is not a
                                                problem anymore</span> -- if you’d like to<br /> send some gestures
                                            of love to your family, remotely<br /> organize event at specific venue
                                            or make fun of your<br /> closest friend -- it’s possible with MetaPax,
                                            not<br /> matter where in world you are.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ways-slider-nav">
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text text-style">
                                        <h3 class="heading-2">Joy<br />&amp; Fun</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to
                                            connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image"></div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text text-style">
                                        <h3 class="heading-2">Science</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to
                                            connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image2"></div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text text-style">
                                        <h3 class="heading-2">Work<br />&amp;Business</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to
                                            connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image3"></div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text text-style">
                                        <h3 class="heading-2">Orders<br />&amp;Errands</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to
                                            connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="columns-7 columns-flex-end content-bottom w-row">
                            <div class="w-col w-col-11">
                                <div class="universe-bottom-text margin-right-text padding-left"><span
                                        class="text-span-11">Reimagine</span> human possibilities<br />and
                                    connectedness, as well as incomes. <br />Check few of <span
                                        class="text-span-10">∞</span> ways to MetaPax this reality, limited only by
                                    imagination.</div>
                            </div>
                            <div class="column-2 aboslute-bread w-col w-col-1">
                                <div class="text-block-19 pagin-white">02<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom right absolute-bread-text">ways
                                    to<br />MetaPax</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-10 section section-invert _wf-section wf-section bg-pax-creator mother">
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-32 not-margin-top header-title">MetaPax Beholder</div>
                        <div class="pax-creator-content"><img
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAyNjQgNDQ2Ij48cGF0aCBmaWxsPSIjMTYxNjE2IiBzdHJva2U9IiNmZmYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiIGQ9Ik0xODIuMzA3IDE3MS4zNTRTMSA0MTYuMjY0IDEgNDIzLjk0M2MwIDcuNjc5IDE0MS44NDQgMjQuMzMgMTU5LjE4NyAyMC40OUMxNzcuNTMgNDQwLjU5NCAyNjMgNDE1Ljg0MSAyNjMgNDA3LjI5MmMwLTMuODQtMTAzLjUyMS0uODU4LTE3NS44OTgtLjg1OC0yMS42NyAwLTM3Ljc4NyAwLTM4LjQtMS4yOEM0OC4wOSA0MDMuODc0IDE3OCAyNDMuNSAxNzggMjQzLjVsNC4zMDctNzIuMTQ2eiIvPjxwYXRoIGZpbGw9IiMxNjE2MTYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTI0NC42MjUgOTEuNjczbC0yLjcyMyAyNTEuOTc3LTY4LjQ1MSA3MC44NTYtNy45OTgtMS41OTkgMy4yLTQwOS44OThMMTc1Ljg1NyAxbDY4Ljc2OCA5MC42NzN6Ii8+PHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMTczLjQ1IDQxNC41MDZMMTc1Ljg1NSAxIi8+PG1hc2sgaWQ9ImEiIHN0eWxlPSJtYXNrLXR5cGU6YWxwaGEiIHdpZHRoPSI2NSIgaGVpZ2h0PSIzMzAiIHg9IjE3NyIgeT0iMjAiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiPjxwYXRoIGZpbGw9IiNGNDhCNDQiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTE3OC4zNDQgMzQ4LjExOGw1OC41NDktNDAuNTA1IDMuMzE4LTIxMC42NC01OC45MTktNzUuNDk2LTIuOTQ4IDMyNi42NDF6Ii8+PC9tYXNrPjxnIG1hc2s9InVybCgjYSkiPjxwYXRoIGZpbGw9IiNGNDhCNDQiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTE3OC4zNDQgMzQ4LjExOGw1OC41NDktNDAuNTA1IDMuMzE4LTIxMC42NC01OC45MTktNzUuNDk2LTIuOTQ4IDMyNi42NDF6Ii8+PC9nPjwvc3ZnPg=="
                                alt="" class="image-26" />
                            <div class="text-block-33 gradient-text font-size-120">Invents<br />Explores<br />Enjoys
                            </div>
                            <img src="./images/girl.png" loading="lazy" alt="" class="image-27" />
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text _w-960">Being Beholder is very <span
                                        class="text-span-14">rewarding -- but it also is a responsibility. A
                                    </span><br />constant learning on how to interact with streamers and how to get the
                                    best
                                    out of it... But in the end there is nothing more joyful than to be the one who
                                    creates
                                    the final picture.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">03<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom intro-black">MetaPax <br />beholder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-10 section-monic section _wf-section magic-section wf-section bg-pax-creator mother">
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-32 not-margin-top header-title">MetaPax Beholder</div>
                        <div class="div-block-14">
                            <div class="div-block-25">
                                <div class="text-block-35">Magic <br /> begins</div>
                                <div class="text-block-29">It’s you who decides <br />what happens next.<br /> Surprise
                                    everyone.</div>
                            </div>
                            <div class="mac-svg"></div>
                            <div class="div-block-23 invite-svg-container">
                                <div class="html-embed-4 w-embed"></div>
                                <div class="trigger-invite-btn">Invite <span class="text-span-25">+</span></div>
                                <div class="trigger-invite-wrap"><img src="./images/boy.png" loading="lazy" alt=""
                                        class="image-47 trigger-invite-img-2" /><img src="./images/boy-shadow.png"
                                        loading="lazy" alt="" class="image-46 trigger-invite-img-1" /></div><img
                                    src="./images/girl.png" loading="lazy" alt="" class="image-45" />
                            </div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text _w-960">Get your task done. Play with the narrative to
                                    appease the spectators if your stream is public. Successfull evolution of the story
                                    can
                                    even make your stream free for you: people can donate and support you real-time.
                                </div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">03<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom intro-black">MetaPax<br />beholder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-10 section-monic section _wf-section magic-section wf-section bg-pax-creator mother">
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-32 not-margin-top header-title">MetaPax Beholder</div>
                        <div class="div-block-14">
                            <div class="div-block-25">
                                <div class="text-block-35">Magic <br /> begins</div>
                                <div class="text-block-29">It’s you who decides <br />what happens next.<br /> Surprise
                                    everyone.</div>
                            </div>
                            <div class="mac-svg"></div>
                            <div class="div-block-23 invite-svg-container">
                                <div class="html-embed-4 w-embed"></div>
                                <div class="trigger-invite-btn">Invite <span class="text-span-25">+</span></div>
                                <div class="trigger-invite-wrap"><img src="./images/boy.png" loading="lazy" alt=""
                                        class="image-47 trigger-invite-img-2" /><img src="./images/boy-shadow.png"
                                        loading="lazy" alt="" class="image-46 trigger-invite-img-1" /></div><img
                                    src="./images/girl.png" loading="lazy" alt="" class="image-45" />
                            </div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text _w-960">Get your task done. Play with the narrative to
                                    appease the spectators if your stream is public. Successfull evolution of the story
                                    can
                                    even make your stream free for you: people can donate and support you real-time.
                                </div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">03<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom intro-black">MetaPax<br />beholder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-10 section section-earn _wf-section wf-section bg-earn-learn-evolve mother">
                <div class="container-4 wrapper w-container">
                    <div class="section-content space-between margin-top-none not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-32 text-head not-margin-top header-title"><span
                                class="text-span-9">MetaPax
                                Streamer</span></div>
                        <div class="div-block-27"><img
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAzMjAgNDIwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNjMuNTUyIDMxLjg4YTIuODY1IDIuODY1IDAgMSAxLTEuOTc5LTUuMzc2IDIuODY1IDIuODY1IDAgMCAxIDEuOTggNS4zNzZ6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTYzLjQzMyAyOC45MjNsMTIuMjQxIDguNTItNS4yNDQgNC4zMDgtNy43MTgtMTEuNzEuNzItMS4xMTh6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgc3Ryb2tlPSIjMTYxNjE2IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMTM5LjQ2IDI0LjU4OFMxOTcuNDAxLjc5NyAyMDUuNTI3IDMuNDUzYzguMTMgMi42NjgtMTY1LjMxIDE3Ny43NjItMTY1LjMxIDE3Ny43NjJzLTkuODM2LTcuNjQ5LjExOC0zNi44NjVDNTAuMjkgMTE1LjEzNSA2MC4zMiA5Ny41NjcgNjAuMzIgOTcuNTY3czIyLjc5Ny00Ni4yMjcgMzQuNzg1LTU0Ljg1YzExLjk4OC04LjYyIDQ0LjM1NS0xOC4xMyA0NC4zNTUtMTguMTN6Ii8+PHBhdGggZmlsbD0iIzE2MTYxNiIgc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMTM4LjMgMjUuMjQzcy0zMi42NzQtMTYuMDctNjQuOTUyIDkuMTYzQzQxLjA4IDU5LjYzNiA1OS4yMiA5OS4yODIgNTkuMjIgOTkuMjgyczcuMDU2LTE0LjgzMyAyOC44NTUtMzguMjMyQzExNC4xNTEgMzMuMDYyIDEzOC4zIDI1LjI0MyAxMzguMyAyNS4yNDN6Ii8+PHBhdGggZmlsbD0iIzE2MTYxNiIgc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTM5LjU3OCAxODIuMjUxYzguOTE1IDcuNjY5IDU2LjgxOS0yMi44MzIgMTA0LjM3My03MS4yNTIgNDcuNTczLTQ4LjQ0IDc0LjgzMi05Ni41NCA2NS40MDgtMTA2LjM4Ny04LjEyNS04LjQ5NS01OS40MjQgMTkuNzk2LTEwNi4zMDEgNjguODgzLTUwLjAzNCA1Mi4zOTgtNzQuMTU2IDk5LjU4NC02My40OCAxMDguNzU2eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNjcuMTkgNjAuNDc1cy0xOS41NDYgNS4yNi00My43OTMgMzIuNjUxYy0yMi40MTUgMjUuMzE4LTI2LjIxIDQzLjc5Ni0yNi4yMSA0My43OTZzMTQuNDQtMS45OTQgMjMuNjY2LTUuNjQ0YzIzLjc3OS05LjQxMyA0MC41OC0yMy4zNDIgNDYuMzY4LTU1LjAzIDEuOTU3LTEwLjcxOC0uMDMxLTE1Ljc3My0uMDMxLTE1Ljc3M3oiLz48cGF0aCBzdHJva2U9IiNGNDhCNDQiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiIGQ9Ik0xNzIgMTE1LjA1MWw5OS42NDIgMzQuNzU1TTI1Mi4zMzUgMjEwLjkzOGwtODguMzMzLTc4LjgwNE0xNDIuMDAyIDE0OS4yODNsMTc2LjA1IDI1My45ODVNMTI0LjA1MSAxNTVsMTkuNzY1IDE4OS4zNDIiLz48L3N2Zz4="
                                alt="" class="image-26" style="-webkit-transform: translate(-10%, -5%);
                                -ms-transform: translate(-100%, -5%);
                                transform: translate(-10%, -5%)" />
                            <div class="text-block-33 gradient-text new font-size-120">Earn<br />Learn<br />Impress
                            </div>
                            <img src="./images/boy-with-glasses.svg" loading="lazy" alt=""
                                class="image-27 right-im person-img" />
                            <div class="columns-12 w-row">
                                <div class="column-8 left-im w-col w-col-2"></div>
                                <div class="column-7 w-col w-col-8"></div>
                                <div class="right-im w-col w-col-2"></div>
                            </div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10" style="width: 100%;">
                                <div class="text-go center-text _w-960 m-auto">Traveller, local geek or science prodigy
                                    --
                                    whoever
                                    you are, MetaPax awaits. Millions of people around the globe <span
                                        class="text-span-11">are waiting to explore</span> your talents and deep dive in
                                    your incredibly interesting life. <br /> <br /> Don’t be shy to share it, and you’ll
                                    be
                                    suprised by how much you could benefit from it.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2" style="position: absolute;">
                                <div class="text-block-34">04<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black">MetaPax <br />streamer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="section-10 section-offer _wf-section earns-section-2 section wf-section bg-earn-learn-evolve2 mother">
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-48 header-title"><span class="text-span-13">MetaPax Streamer</span></div>
                        <div class="columns-11 w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-21">
                                    <div class="text-block-35">Earn<br />Learn Impress</div>
                                    <div class="text-block-29">You are the story. Just share it <span
                                            class="text-span-3">with the world.<br /> </span><br />Each streamer has
                                        something to tell -- our audience will guide you.</div>
                                </div>
                            </div>
                            <div class="column-9 w-col w-col-6">
                                <div class="div-block-19"><img src="./images/boy-with-glasses.svg" loading="lazy" alt=""
                                        class="image-44 guy-glasses" /></div>
                            </div>
                            <div class="column-29 w-col w-col-3">
                                <div class="div-block-22">
                                    <div class="div-block-18">
                                        <div class="text-block-49 mobile-hidden">Oslo, Norway</div>
                                        <div class="icons-container">
                                            <div class="mobile-hidden w-embed"><a href="" class="hover-icon">
                                                    <svg width="42" height="29" viewBox="0 0 42 29" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M42 0H0V29H42V0Z" fill="#FA1B43" />
                                                        <path d="M19.0905 0H11.4541V29H19.0905V0Z" fill="white" />
                                                        <path d="M42 10.875H0V18.125H42V10.875Z" fill="white" />
                                                        <path d="M17.1815 0H13.3633V29H17.1815V0Z" fill="#2853A4" />
                                                        <path d="M42 12.6875H0V16.3125H42V12.6875Z" fill="#2853A4" />
                                                    </svg>
                                                </a>
                                                <a href="" class="hover-icon">
                                                    <svg width="42" height="29" viewBox="0 0 42 29" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_395_1142)">
                                                            <path d="M0 0V29H42V0H0Z" fill="#2853A4" />
                                                            <path d="M0 0L42 29L0 0ZM42 0L0 29L42 0Z" fill="#161616" />
                                                            <path d="M42 0L0 29M0 0L42 29L0 0Z" stroke="white"
                                                                stroke-width="5.8" />
                                                            <path d="M0 0L42 29L0 0ZM42 0L0 29L42 0Z" fill="#161616" />
                                                            <path d="M42 0L0 29M0 0L42 29L0 0Z" stroke="#FA1B43"
                                                                stroke-width="3.86667" />
                                                            <path d="M21 0V29V0ZM0 14.5H42H0Z" fill="#161616" />
                                                            <path d="M0 14.5H42M21 0V29V0Z" stroke="white"
                                                                stroke-width="9.66667" />
                                                            <path d="M21 0V29V0ZM0 14.5H42H0Z" fill="#161616" />
                                                            <path d="M0 14.5H42M21 0V29V0Z" stroke="#FA1B43"
                                                                stroke-width="5.8" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_395_1142">
                                                                <rect width="42" height="29" rx="5" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-block-18">
                                        <div class="text-block-49">Talents</div>
                                        <div class="icons-container talents"></div>
                                    </div>
                                    <div class="div-block-18">
                                        <div class="text-block-49">Hobbies</div>
                                        <div class="hobbies icons-container"></div>
                                    </div>
                                    <div class="div-block-18">
                                        <div class="text-block-49">Vehicles</div>
                                        <div class="vehicles icons-container"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-bottom flex-end hobbies-bottom w-row">
                            <div class="what-do-bottom w-col w-col-11">
                                <div class="botton-bar">
                                    <div class="div-block-16">
                                        <div class="div-block-17"><img src="./images/mountains.svg" loading="lazy"
                                                alt="" />
                                        </div>
                                        <div class="text-block-47">The Norhern Light</div>
                                    </div>
                                    <div class="div-block-16 block-illiustration2">
                                        <div class="div-block-17 block-bg-3"><img src="./images/town.svg" loading="lazy"
                                                alt="" /></div>
                                        <div class="text-block-47">A day of Oslo citizen</div>
                                    </div>
                                    <div class="div-block-16 block-bg-4">
                                        <div class="div-block-17 block-bg-5"><img src="./images/rock.svg" loading="lazy"
                                                alt="" /></div>
                                        <div class="text-block-47">Preikestolen Rock</div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-1">
                                <div class="text-block-34">04<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black right">MetaPax streamer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="howitworks" class="section how-works-section _wf-section wf-section mother">
                <div class="wrapper wrapper-relative w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-5 header-title"><span class="text-span-15">How</span> it works</h3>
                        <div class="section-content-second">
                            <div class="div-block-24">
                                <div class="mobile-hiw-images"><img src="./images/how-work-glasses.png" loading="lazy"
                                        sizes="(max-width: 479px) 94vw, 100vw"
                                        srcset="./images/how-work-glasses-500.png 500w, ./images/how-work-glasses-800.png 800w, ./images/how-work-glasses.png 913w"
                                        alt="" class="hiw-img1" /><img src="./images/how-work-phone.png" loading="lazy"
                                        sizes="(max-width: 479px) 94vw, 100vw"
                                        srcset="./images/how-work-phone-500.png 500w, ./images/how-work-phone.png 561w"
                                        alt="" class="image-52" />
                                    <div class="div-block-29">
                                        <div class="text-block-51 titile-invs">MetaPax<br />platform <br />&amp; app
                                        </div>
                                        <div class="text-block-38 title-visible">Streaming<br />FPV Glasses</div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-block-30">
                                <div class="text-block-38 title-visible desctop">Streaming<br />FPV Device</div>
                                <div class="text-block-51 titile-invs desktop">MetaPax<br />platform <br />&amp; app
                                </div>
                                <div class="div-block-31">
                                    <div class="text-go center-text hiw-unvis">Install the app, put on your device --
                                        and
                                        you will immediately start streaming to the millions of people around the globe
                                        who
                                        are curious to learn and see through your eyes.</div>
                                    <div class="text-go center-text hiw-vis">They key element of the MetaPax platform is
                                        the
                                        ability to work with literally any wearable device out there, be it Smart
                                        Glasses,
                                        GoPro Cameras, you name it.</div>
                                </div>
                            </div>
                            <div class="what-do-laptop how-works-rotate">
                                <div class="rotate-container how-works-rotate-container"><img
                                        src="./images/how-work-glasses.png" loading="eager"
                                        sizes="(max-width: 913px) 100vw, 913px"
                                        srcset="./images/how-work-glasses-500.png 500w, ./images/how-work-glasses-800.png 800w, ./images/how-work-glasses.png 913w"
                                        alt="" class="image-19 how-works-rotate-image1" /><img
                                        src="./images/how-work-phone.png" loading="eager"
                                        sizes="(max-width: 479px) 100vw, 490.3125px"
                                        srcset="./images/how-work-phone-500.png 500w, ./images/how-work-phone.png 561w"
                                        alt="" class="image-20 image-scale how-works-rotate-image-2" /></div>
                            </div>
                        </div>
                        <div class="text-block-37">It was hard <br />to deliver your <br />vision until now</div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">05<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom intro-black">how it works</div>
                            </div>
                        </div>
                    </div>
                </div><img src="./images/how-works-bg1.svg" loading="lazy" alt=""
                    class="how-works-bg1 how-works-bg" /><img
                    src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAxODgwIDE4ODAiPjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIwX2ZfNjNfOSkiPjxyZWN0IHdpZHRoPSIxMjcwLjk2IiBoZWlnaHQ9IjEyNjkuNDkiIGZpbGw9InVybCgjcGFpbnQwX3JhZGlhbF82M185KSIgcng9IjYxMC4zNjUiIHRyYW5zZm9ybT0ic2NhbGUoMSAtMSkgcm90YXRlKDMwLjA0MyAzNzIxLjA4MiA0MTQuNzM3KSIvPjwvZz48ZGVmcz48ZmlsdGVyIGlkPSJmaWx0ZXIwX2ZfNjNfOSIgd2lkdGg9IjE4NzkuMzUiIGhlaWdodD0iMTg3OC44MSIgeD0iLjIxIiB5PSIuMjExIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiIGZpbHRlclVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz48ZmVCbGVuZCBpbj0iU291cmNlR3JhcGhpYyIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0ic2hhcGUiLz48ZmVHYXVzc2lhbkJsdXIgcmVzdWx0PSJlZmZlY3QxX2ZvcmVncm91bmRCbHVyXzYzXzkiIHN0ZERldmlhdGlvbj0iMTQ3LjYzMiIvPjwvZmlsdGVyPjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQwX3JhZGlhbF82M185IiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJyb3RhdGUoMTUxLjEzMyA0MTAuNjkgNTAxLjA4Mykgc2NhbGUoNTk5LjYwNyA2MDAuMzA1KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiNGRkY5QzUiLz48c3RvcCBvZmZzZXQ9Ii43NTUiIHN0b3AtY29sb3I9IiNGRjVDMDAiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNGRjQ1MUMiLz48L3JhZGlhbEdyYWRpZW50PjwvZGVmcz48L3N2Zz4="
                    alt="" class="how-works-bg how-works-bg2" />
            </div>
            <div class="section marque-glasses _wf-section wf-section mother">
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none align-center">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-6 header-title">No langugae barrier.<span class="text-span-16">
                                instant</span>
                        </h3><img src="./images/understanding-camera.png" loading="eager"
                            sizes="(max-width: 479px) 94vw, (max-width: 767px) 67vw, (max-width: 991px) 68vw, (max-width: 1439px) 69vw, 68vw"
                            srcset="./images/understanding-camera-500.png 500w, ./images/understanding-camera-800.png 800w, ./images/understanding-camera-1080.png 1080w, ./images/understanding-camera.png 1293w"
                            alt="" class="image-29" /><img src="./images/understanding-camera.png" loading="eager"
                            sizes="100vw"
                            srcset="./images/understanding-camera-500.png 500w, ./images/understanding-camera-800.png 800w, ./images/understanding-camera-1080.png 1080w, ./images/understanding-camera.png 1293w"
                            alt="" class="image-29 copyglasses" />
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text">MetaPax platform developed an AI which translates text
                                    and
                                    voice to over <br />100 different languages -- on the go. <br />Nothing will stop
                                    you
                                    from the best experience of your life.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">06<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom intro-black no-wrap right">Understanding
                                    made
                                    instant</div>
                            </div>
                        </div>
                    </div><img src="./images/unde-circle.svg" loading="lazy" alt="" class="image-30" />
                </div>
                <!-- <img src="./images/Mask_Group.svg" class="text-circle-container__right-text" />
                    <img src="./images/Mask_Group2.svg" class="text-circle-container__left-text" /> -->
                <div class="text-circle-container">
                    <img src="./images/text-round.png" loading="eager" sizes="(max-width: 2269px) 100vw, 2269px"
                        srcset="./images/text-round-500.png 500w, ./images/text-round-800.png 800w, ./images/text-round-1080.png 1080w, ./images/text-round-1600.png 1600w, ./images/text-round.png 2269w"
                        alt="" class="text-circle" />
                </div>
                <div class="text-circle-container text-circle-container-right">
                    <img src="./images/doutsh-text-round.png" loading="eager" sizes="(max-width: 2310px) 100vw, 2310px"
                        srcset="./images/doutsh-text-round-500.png 500w, ./images/doutsh-text-round-800.png 800w, ./images/doutsh-text-round-1080.png 1080w, ./images/doutsh-text-round-1600.png 1600w, ./images/doutsh-text-round.png 2310w"
                        alt="" class="text-circle text-circle-right" />
                </div>
            </div>
            <div id="roadmap" class="section section-road-map _wf-section wf-section mother">
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-3 header-title">Road <span class="text-span-12">map</span></h3>
                        <div class="columns-7 columns-flex-end content-bottom column-mini w-row">
                            <div class="w-col w-col-10">
                                <div class="universe-bottom-text margin-right-text"></div>
                            </div>
                            <div class="column-2 w-col w-col-2">
                                <div class="text-block-19 pagin-white">08<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom">road map</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="road-map-slider">
                    <div class="road-map-slider_item">
                        <div>
                            <div class="road-map-slider_title">2022</div>
                            <div class="road-map-slider_item-inner">
                                <div class="road-map-slider_content">
                                    <div class="road-map-slider_subtitle">Q1</div>
                                    <div class="road-map-slider_text">Assembling the team<br /><br />Technology
                                        testing<br /><br />Patent applications<br /><br />Website &amp; White
                                        Paper<br /><br />Token Private Sale</div>
                                </div>
                                <div class="road-map-slider_content no-right-margin">
                                    <div class="road-map-slider_subtitle">Q2</div>
                                    <div class="road-map-slider_text">MTP token release, <br />Velas Blockchain
                                        Integration<br /><br />Starting the development <br />of MetaPax Glass
                                        <br />‍<br />Technical activities <br />(server infrastructure / platform
                                        design)<br /><br />Launchpad Sale
                                    </div>
                                </div>
                                <div class="road-map-slider_content no-right-margin">
                                    <div class="road-map-slider_subtitle">Q3</div>
                                    <div class="road-map-slider_text"><span>Platform BETA Launch, feature
                                            demonstration<br /><br />Listing on exchanges<br /><br />Global Marketing
                                            Campaign<br /><br />‍<br /><br />‍</span></div>
                                </div>
                                <div class="road-map-slider_content no-right-margin">
                                    <div class="road-map-slider_subtitle">Q4</div>
                                    <div class="road-map-slider_text"><span>API, Integration of third-party wearable
                                            devices<br /><br />Project release, connecting Paxers around the
                                            world<br /><br />‍<br /><br />‍</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="road-map-slider_title">2023</div>
                            <div class="road-map-slider_item-inner">
                                <div class="road-map-slider_content no-right-margin">
                                    <div class="road-map-slider_subtitle">Q1</div>
                                    <div class="road-map-slider_text">Full launch of the project<br /><br />Ver 1.0 DAO
                                        implementation<br /><br />Autostaking release</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><img src="./images/road-bg.png" loading="lazy" sizes="100vw"
                    srcset="./images/road-bg-500.png 500w, ./images/road-bg-800.png 800w, ./images/road-bg-1080.png 1080w, ./images/road-bg-1600.png 1600w, ./images/road-bg.png 1920w"
                    alt="" class="road-map-bg" />
            </div>
            <div class="section time-matters _wf-section how-earn-section wf-section mother">
                <div class="black-bg"></div>
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none time-matters-container">
                        <img src="./images/surfing.svg" loading="lazy" alt="" class="image-39 blur-3 man-surfing" />
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-10 header-title">How to <span class="text-span-16">earn</span></h3>
                        <div class="earn-content-2">
                            <div class="earn-title">
                                <div class="text-block-45">Your time matters</div>
                                <div class="your-time">
                                    <div class="text-block-46"><span class="text-span-3">MetaРax Beholders</span> are
                                        getting increased value of their time with concentrated experiences and
                                        on-demand
                                        remote execution of whatever they need. And they <span class="text-span-3-mob">
                                            <br />are happy to pay for it!</span><br /><br />No more exhausting
                                        travelling
                                        or time spent on remote problem solving. Be present.</div>
                                    <div class="text-block-63"><span class="text-span-27">MetaPax</span> Streamers get
                                        your
                                        stuff done in minutes, not weeks -- no matter where in the world you are.
                                        Increased
                                        efficiency is what will change the world. <br />‍<br />Streamers will charge a
                                        reasonable fee for their services, but after all - did you ever had a chance to
                                        buy
                                        yourself some time before?</div>
                                </div>
                            </div>
                            <div class="earn-image"><img src="./images/man-screen.svg" loading="lazy" alt=""
                                    class="image-37 blur-1" /><img src="./images/man-laptop.svg" loading="lazy" alt=""
                                    class="image-38 blur-2" /></div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">07<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom intro-black">how to earn</div>
                            </div>
                        </div>
                    </div>
                </div><img src="./images/how-to-earn-bg.png" loading="lazy" sizes="(max-width: 2509px) 100vw, 2509px"
                    srcset="./images/how-to-earn-bg-500.png 500w, ./images/how-to-earn-bg-800.png 800w, ./images/how-to-earn-bg.png 2509w"
                    alt="" class="image-53" />
            </div>
            <div id="mission" class="section-11 sect-mission _wf-section mission-section section wf-section mother">
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none sect-mission-container">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-7 header-title"><span class="text-span-16">Mission</span> and vision</h3>
                        <div class="mission-content-container">
                            <div class="columns-8 mission-content w-row">
                                <div class="left-padding-column w-col w-col-5">
                                    <div class="border-text vis-mis"><span class="text-span-11">Future of
                                            communication</span></div>
                                    <div class="text-block-37 mission-title vis-mis">Technology <br />of
                                        dissolving<br />the
                                        borders</div>
                                    <div class="border-text invis-mis invis-title-border"><span class="text-span-11">More than
                                            platform.</span>
                                    </div>
                                    <div class="text-block-37 mission-title invis-mis invis-title">It&#x27;s a new<br />way to
                                        life,<br />leisure<br />and work</div>
                                </div>
                                <div class="padding-right-column w-col w-col-5">
                                    <div class="border-text vis-mis"><span class="text-span-11">The world is
                                            evolving.</span></div>
                                    <div class="mission-text mis-text-vis">We all are seeing a singification change in
                                        the
                                        internet landscape. Just think of it for a moment -- we're devices that were
                                        invented 14 years ago (think iPhone) and are spending time in social networks
                                        that
                                        are almost 20 years old (think Facebook). We're literally living in the past and
                                        the
                                        change is inevitable - the future should come. We are building this future.
                                    </div>
                                    <div class="mission-text mis-text-invs">How often have you been unable to meet your
                                        goals because you just couldn't be present in another place that very second?
                                        Think of having a teleportation unit at your home -- how that would change your
                                        life? Now it's possible! <br><br>

                                        In a blink of an eye you can 'teleport' yourself wherever you want and interact
                                        with
                                        the world through someone else’s eyes. Future has come.</div>
                                    <div class="border-text invis-mis invis-subtitle"><span class="text-span-11">MetaPax is a
                                            future</span>
                                    </div>
                                </div>
                                <div class="not-padding-col w-col w-col-2">
                                    <div class="border-text vis-mis"><span class="text-span-11">Our mission</span></div>
                                    <div class="border-text invis-mis invis-subtitle-2"><span class="text-span-11">True time
                                            disruption.</span></div>
                                    <div class="mission-text mis-text-vis mission-sto">Inspire people to interact with
                                        each
                                        other in real time and bring joy in a whole new way</div>
                                    <div class="mission-text mis-text-invs misson-sto">Never before you were able to be
                                        present in more than one place at the same time. It's possible now -- with
                                        MetaPax.
                                    </div>
                                </div>
                            </div><img src="./images/quotes.png" loading="lazy" sizes="(max-width: 479px) 67px, 287px"
                                srcset="./images/quotes-500.png 500w, ./images/quotes-800.png 800w, ./images/quotes.png 974w"
                                alt="" class="image-33" />
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">09<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom right">mission <br />and vision</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="blockchain" class="section blockchain-section wf-section bg-pax-creator mother">
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="section-title">
                            <h3 class="heading-14 header-title">Why <span class="text-span-21">blockchain</span></h3>
                        </div>
                        <div class="blockchain-content">
                            <div class="blockchain-text">
                                <div class="blockchain-text-title">MetaPax token</div>
                                <div class="text-block-54">Lightning fast transactions with minimal fees and enormous
                                    scalability.<br />Support smart contracts<br />Convenience of integration of the
                                    internal wallet.</div>
                            </div>
                            <div class="blockchain-map"></div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">09<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom intro-black">why blockchain</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-11 section-form _wf-section section contact-section wf-section mother">
                <div class="wrapper w-container">
                    <div class="section-content not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt=""
                                class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="section-title">
                            <h3 class="heading-9 header-title"><span class="text-span-16">Follow</span> us</h3>
                            <div class="text-block-41">Follow us on social media to stay <br />informed and inspired!
                            </div>
                        </div>
                        <div class="society-container">
                            <a href="http://t.me/metapax" target="_blank" class="society-link w-inline-block">
                                <div class="w-embed"><svg width="71" height="100%" viewBox="0 0 71 72" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M35.6837 0.160254C26.4276 0.204478 17.5653 4.00007 11.0354 10.7167C4.50556 17.4334 0.839743 26.5244 0.839844 36.001C0.839844 45.5066 4.5281 54.6229 11.0932 61.3443C17.6584 68.0658 26.5626 71.8418 35.8471 71.8418C45.1316 71.8418 54.0359 68.0658 60.601 61.3443C67.1661 54.6229 70.8544 45.5066 70.8544 36.001C70.8544 26.4955 67.1661 17.3792 60.601 10.6578C54.0359 3.93633 45.1316 0.160254 35.8471 0.160254C35.7927 0.160124 35.7382 0.160124 35.6837 0.160254ZM50.1592 21.7364C50.451 21.7304 51.0957 21.8051 51.5158 22.1546C51.7949 22.4027 51.9729 22.7491 52.0146 23.1252C52.0613 23.403 52.1197 24.0392 52.073 24.535C51.5479 30.2038 49.2666 43.9547 48.1055 50.3015C47.6154 52.9896 46.6498 53.8886 45.7133 53.9752C43.6829 54.1693 42.1397 52.6013 40.1705 51.2812C37.0899 49.2114 35.3483 47.9241 32.3581 45.905C28.9011 43.5754 31.1416 42.2911 33.1107 40.2004C33.6271 39.6508 42.5831 31.3089 42.7581 30.5532C42.7786 30.4577 42.799 30.1052 42.5948 29.9201C42.3906 29.7349 42.0872 29.7976 41.8684 29.8484C41.5591 29.9201 36.6377 33.2532 27.104 39.839C25.7038 40.8246 24.4406 41.3025 23.3058 41.2726C22.0572 41.2487 19.6533 40.5528 17.865 39.9585C15.6713 39.2267 13.9296 38.8414 14.0813 37.6019C14.1601 36.9568 15.0295 36.2967 16.6865 35.6217C26.8911 31.0699 33.6942 28.0683 37.1015 26.6197C46.8219 22.4801 48.8436 21.7603 50.1592 21.7364Z"
                                            fill="white" />
                                    </svg></div>
                            </a>
                            <a href="http://instagram.com/metapax.io/" target="_blank"
                                class="society-link w-inline-block">
                                <div class="html-embed-6 w-embed"><svg width="61" height="100%" viewBox="0 0 61 61"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.4399 0.617188C22.2511 0.617188 21.2287 0.654364 18.0134 0.795634C14.8032 0.94434 12.6178 1.4425 10.6962 2.1786C8.71432 2.937 7.03133 3.95563 5.35588 5.60874C3.68043 7.26185 2.64552 8.91992 1.87938 10.8779C1.13334 12.7739 0.625937 14.9301 0.477733 18.0975C0.327018 21.2699 0.296875 22.2786 0.296875 30.3583C0.296875 38.438 0.334554 39.4467 0.477733 42.6191C0.628448 45.7841 1.13334 47.9428 1.87938 49.8388C2.64803 51.7918 3.68043 53.4548 5.35588 55.1079C7.03133 56.7585 8.71181 57.7821 10.6962 58.538C12.6204 59.2717 14.8057 59.7748 18.0134 59.921C21.2287 60.0697 22.2511 60.0994 30.4399 60.0994C38.6288 60.0994 39.6511 60.0623 42.8664 59.921C46.0741 59.7723 48.262 59.2717 50.1836 58.538C52.163 57.7796 53.8485 56.7585 55.5239 55.1079C57.1969 53.4548 58.2343 51.7992 59.0004 49.8388C59.744 47.9428 60.2539 45.7841 60.4021 42.6191C60.5528 39.4467 60.583 38.438 60.583 30.3583C60.583 22.2786 60.5453 21.2699 60.4021 18.0975C60.2514 14.9326 59.744 12.7714 59.0004 10.8779C58.2318 8.9224 57.1969 7.26185 55.5239 5.60874C53.8485 3.95563 52.1705 2.93452 50.1836 2.1786C48.262 1.4425 46.0741 0.941862 42.8664 0.795634C39.6511 0.646929 38.6288 0.617188 30.4399 0.617188ZM30.4399 5.97059C38.4856 5.97059 39.4451 6.01025 42.6227 6.14656C45.5617 6.28287 47.1567 6.76369 48.2168 7.17511C49.6285 7.71293 50.6282 8.35732 51.6882 9.39578C52.7407 10.4367 53.3938 11.4256 53.9389 12.8185C54.3509 13.8644 54.8432 15.4382 54.9763 18.3379C55.1195 21.4756 55.1522 22.4174 55.1522 30.3583C55.1522 38.2992 55.1145 39.2435 54.9663 42.3787C54.8131 45.2785 54.3232 46.8523 53.9088 47.8982C53.3461 49.291 52.7056 50.2774 51.6506 51.3233C50.5981 52.3618 49.5807 53.0062 48.1841 53.544C47.1291 53.9505 45.5089 54.4362 42.57 54.5676C39.3698 54.7089 38.4278 54.7411 30.3646 54.7411C22.2988 54.7411 21.3568 54.7039 18.1591 54.5577C15.2177 54.4065 13.5975 53.9232 12.5425 53.5143C11.1132 52.9591 10.131 52.3271 9.07855 51.2862C8.02103 50.2477 7.34532 49.2439 6.81782 47.8659C6.40335 46.825 5.91604 45.2264 5.76281 42.3266C5.64978 39.2038 5.60959 38.2397 5.60959 30.3211C5.60959 22.4001 5.64978 21.4335 5.76281 18.2735C5.91604 15.3737 6.40335 13.7776 6.81782 12.7367C7.34532 11.324 8.02103 10.3574 9.07855 9.31399C10.131 8.27553 11.1132 7.60635 12.5425 7.08836C13.5975 6.67694 15.1825 6.19365 18.1215 6.04494C21.3242 5.93341 22.2661 5.89624 30.3269 5.89624L30.4399 5.97059ZM30.4399 15.0862C21.8868 15.0862 14.9615 21.9267 14.9615 30.3583C14.9615 38.7974 21.8944 45.6304 30.4399 45.6304C38.993 45.6304 45.9184 38.7899 45.9184 30.3583C45.9184 21.9193 38.9855 15.0862 30.4399 15.0862ZM30.4399 40.272C24.8886 40.272 20.3922 35.8356 20.3922 30.3583C20.3922 24.881 24.8886 20.4446 30.4399 20.4446C35.9913 20.4446 40.4876 24.881 40.4876 30.3583C40.4876 35.8356 35.9913 40.272 30.4399 40.272ZM50.1484 14.484C50.1484 16.4543 48.5257 18.0529 46.5313 18.0529C44.5343 18.0529 42.9141 16.4519 42.9141 14.484C42.9141 12.5161 44.5368 10.9175 46.5313 10.9175C48.5232 10.9151 50.1484 12.5161 50.1484 14.484Z"
                                            fill="white" />
                                    </svg></div>
                            </a>
                            <a href="http://facebook.com/metapax.io" target="_blank"
                                class="society-link w-inline-block">
                                <div class="w-embed"><svg width="73" height="100%" viewBox="0 0 73 72" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M72.2078 36.2185C72.2078 16.3053 56.2504 0.160156 36.5687 0.160156C16.8871 0.160156 0.929688 16.3053 0.929688 36.2185C0.929688 54.2176 13.9617 69.1338 31.0001 71.8382V46.6424H21.9508V36.2155H31.0001V28.2767C31.0001 19.241 36.3222 14.247 44.4628 14.247C48.3593 14.247 52.44 14.9531 52.44 14.9531V23.8265H47.9435C43.5154 23.8265 42.1344 26.606 42.1344 29.4576V36.2185H52.0183L50.4383 46.6454H42.1344V71.8411C59.1758 69.1338 72.2078 54.2146 72.2078 36.2185Z"
                                            fill="white" />
                                    </svg></div>
                            </a>
                            <a href="https://www.youtube.com/channel/UCtyhkuP70QFBs_7nUgDbWdA" target="_blank"
                                class="society-link w-inline-block youtube-icon">
                                <img src="./images/icons8-youtube.svg">
                            </a>
                            <a href="mailto:info@metapax.io?subject=info%40metapax.io"
                                class="society-link w-inline-block">
                                <div class="w-embed"><svg width="73" height="100%" viewBox="0 0 73 72" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M47.0806 35.9996C47.0806 41.9508 42.2359 46.7954 36.2848 46.7954C30.3336 46.7954 25.489 41.9508 25.489 35.9996C25.489 30.0485 30.3336 25.2038 36.2848 25.2038C42.2359 25.2038 47.0806 30.0485 47.0806 35.9996ZM36.2848 0.113281C16.4965 0.113281 0.398438 16.2113 0.398438 35.9996C0.398438 55.788 16.4965 71.886 36.2848 71.886C43.5338 71.886 50.5227 69.7268 56.5008 65.6448L56.6024 65.573L51.7668 59.9538L51.686 60.0046C47.0944 62.9629 41.7469 64.5339 36.2848 64.5293C20.5546 64.5293 7.75514 51.7298 7.75514 35.9996C7.75514 20.2694 20.5546 7.46998 36.2848 7.46998C52.015 7.46998 64.8144 20.2694 64.8144 35.9996C64.8102 38.0614 64.5847 40.1167 64.1416 42.1302C63.2414 45.8355 60.6456 46.9689 58.6988 46.8194C56.743 46.6609 54.4523 45.2643 54.4343 41.8521V35.9996C54.4296 31.1873 52.516 26.5733 49.1134 23.1702C45.7108 19.767 41.0972 17.8527 36.2848 17.8471C31.4719 17.8519 26.8575 19.7659 23.4543 23.1691C20.051 26.5723 18.137 31.1867 18.1323 35.9996C18.137 40.8125 20.051 45.4269 23.4543 48.8302C26.8575 52.2334 31.4719 54.1474 36.2848 54.1521C38.6768 54.158 41.0459 53.687 43.2538 52.7669C45.4617 51.8468 47.4641 50.4959 49.1441 48.7931C50.2059 50.4605 51.6741 51.8307 53.4109 52.7749C55.1476 53.7191 57.0959 54.2064 59.0726 54.191C61.6863 54.191 64.2761 53.3178 66.3605 51.7358C68.5107 50.1 70.1166 47.7405 71.0048 44.9024C71.1454 44.4419 71.4086 43.3952 71.4086 43.3862L71.4145 43.3474C71.9379 41.0746 72.1711 38.8018 72.1711 35.9996C72.1711 16.2113 56.0731 0.113281 36.2848 0.113281"
                                            fill="white" />
                                    </svg></div>
                            </a>
                            <a href="http://twitter.com/metapax_io" target="_blank" class="society-link w-inline-block">
                                <div class="html-embed-7 w-embed"><svg width="81" height="100%" viewBox="0 0 81 66"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M79.9423 8.48273C76.9776 9.78802 73.837 10.6496 70.6213 11.0398C74.0069 9.00488 76.5419 5.81361 77.758 2.05537C74.6202 3.88658 71.1426 5.21956 67.4406 5.96194C64.9982 3.35018 61.7618 1.61793 58.2339 1.03419C54.706 0.450451 51.0841 1.04788 47.9306 2.73371C44.7771 4.41954 42.2685 7.09943 40.7943 10.3572C39.3201 13.615 38.9628 17.2685 39.7779 20.7502C26.2831 20.1134 14.3291 13.6299 6.32128 3.83708C4.86554 6.31107 4.10623 9.13281 4.12384 12.0033C4.12384 17.6454 6.99437 22.6045 11.3431 25.5179C8.76572 25.4358 6.2453 24.739 3.99186 23.4854V23.6834C3.9904 27.4329 5.28613 31.0674 7.65924 33.9703C10.0323 36.8732 13.3366 38.8658 17.0116 39.6099C14.6303 40.248 12.1363 40.3438 9.71313 39.8904C10.7562 43.1173 12.7805 45.9381 15.5037 47.9592C18.227 49.9803 21.5132 51.1009 24.9039 51.1646C19.1612 55.6715 12.0705 58.1176 4.77053 58.11C3.48374 58.11 2.20025 58.0341 0.910156 57.889C8.35279 62.6545 17.0066 65.1841 25.8442 65.1775C55.7143 65.1775 72.0302 40.4447 72.0302 19.0344C72.0302 18.3415 72.0302 17.6487 71.9807 16.9558C75.1679 14.6622 77.9172 11.8146 80.0973 8.54872L79.9423 8.48273Z"
                                            fill="white" />
                                    </svg></div>
                            </a>

                        </div>
                        <div class="form-container contacts-form">
                            <div class="form-block w-form">
                                <form id="email-form" name="email-form" data-name="Email Form" method="post"
                                    class="form">
                                    <input type="email" class="text-field w-input" maxlength="256" name="email"
                                        data-name="Email" placeholder="Email" id="email" required="" />
                                    <div class="how-btn-container"><input type="submit" value="Submit" data-wait=""
                                            class="submit-button how-btn-1 button-2 w-button" /><a href="#"
                                            class="button-2 how-btn-2 w-button"><span
                                                class="btn-sticky-text new-text">Submit</span></a></div>
                                </form>
                                <div class="success-message w-form-done">
                                    <div>Thank you! Your submission has been received!</div>
                                </div>
                                <div class="error-message w-form-fail">
                                    <div class="text-block-40">ошибка</div>
                                </div>
                            </div>
                        </div><img src="./images/girl-move.svg" loading="lazy" alt="" class="image-34" />
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">10<span
                                        class="text-span-8 subpagin-black">/10</span>
                                </div>
                                <div class="text-block-34 not-border-bottom intro-black">follow us</div>
                            </div>
                        </div><img src="./images/nlo.svg" loading="lazy" alt="" class="image-35" />
                    </div>
                </div><img src="./images/white-text-circle.png" loading="lazy" alt="" class="image-36" />
            </div>
        </div>
        <div class="scroll-section first"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section intro-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section mobile-hidden"></div>
        <div class="scroll-section video-section"></div>
        <div class="scroll-section" id="skip-video"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section how-it-works-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section roadmap-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section contact-section"></div>
    </div>

    <div class="menu-modal main-modal">
        <div class="backdrop-filter-menu"></div>
        <div class="menu-modal-content">
            <a href="#" class="button-4 close-btn-hover close-btn close-btn-trigger w-button"></a>
            <div class="w-layout-grid grid">
                <a href="#" class="modal-menu-link my-underline go-to-section close-btn-trigger" data-label-number="3"
                    data-section-class="intro-section">Intro</a>
                <a href="#" class="modal-menu-link my-underline go-to-section close-btn-trigger" data-label-number="18"
                    data-section-class="how-it-works-section">How it works</a>
                <a href="#" class="modal-menu-link my-underline go-to-section close-btn-trigger" data-label-number="7"
                    data-section-class="video-section">Video</a>
                <a href="#" class="modal-menu-link my-underline go-to-section close-btn-trigger" data-label-number="23"
                    data-section-class="roadmap-section">Roadmap</a>
                <a href="#" class="modal-menu-link my-underline go-to-section close-btn-trigger" data-label-number="27"
                    data-section-class="contact-section">Contact</a>
                <a href="https://whitepaper.metapax.io/" class="modal-menu-link my-underline" download=""
                    target="_blank">White Paper</a>
                <a href="./images/metapax-pitch-deck.pdf" class="modal-menu-link my-underline download" target="_blank"
                    download="">Pitch-deck</a>
            </div>
            <div class="menu-footer">
                <!-- <div class="menu-policy-container"><a href="#" class="menu-policy-btn policy-btn-for-modal w-button">Privacy Policy</a><a href="#" class="menu-policy-btn menu-policy-btn-margin-bottom-none cookie-btn-for-modal w-button">Cookie Policy</a></div>
                <div class="how-btn-container menu-hover-btn"><a href="#" class="button-2 how-btn-1 black-btn orange-border not-opacity subscribe-open w-button">How it works?</a><a href="#" class="button-2 how-btn-2 orange-border not-padding w-button"><span class="btn-sticky-text modal-menu-span color-white">How it works?</span></a></div> -->
            </div>
        </div>
    </div>
    <div class="subscribe-modal main-modal">
        <div class="backdrop-filter-menu"></div>
        <div class="subscribe-modal-content">
            <h3 class="heading-12">Stay with <span class="text-span-20">MetaPax</span></h3>
            <div class="text-block-50">please leave your contact details so we can<br /> find you as soon as we&#x27;ll
                have updates</div>
            <div class="form-block-2 w-form">
                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="post" class="form-2"><input
                        type="email" class="text-field-2 w-input" maxlength="256" name="email-2" data-name="Email 2"
                        placeholder="Email" id="email-2" required="" />
                    <div class="how-btn-container"><input type="submit" value="Submit" data-wait=""
                            class="submit-button how-btn-1 button-2 w-button" /><a href="#"
                            class="button-2 how-btn-2 w-button"><span class="btn-sticky-text new-text">Submit</span></a>
                    </div>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div><a href="#" class="button-5 close-btn w-button"></a>
        </div>
    </div>
    <div id="cookie_notification" class="cookie-modal cookie_notification main-modal">
        <div class="cookie-text">
            <div class="text-block-52">This website use <span class="text-span-19">cookies</span><br /><br />We use
                cookie to ensure you get <br />the best experience on our website</div><a href="#"
                class="button-6 w-button">Accept</a>
            <div class="how-btn-container"><a href="#"
                    class="how-btn-1 button-2 _32 cookie_accept w-button">Accept</a><a href="#"
                    class="button-2 how-btn-2 w-button"><span class="btn-sticky-text new-text _32">Accept</span></a>
            </div>
        </div>
    </div>
    <div class="privacy-modal privacy-policy main-modal">
        <div class="backdrop-filter-menu"></div>
        <div class="privacy-modal-content">
            <div class="privacy-modal-content-text">
                <h3 class="heading-13">Privacy Policy</h3>
                <div class="text-block-53">Your privacy is important to us. It is Bachoo Design Inc policy to respect
                    your privacy regarding any information we may collect <br />from you across our website,
                    https://nationalargo.bachoodesign.com, and other sites we own and
                    operate.<br /><br /><br />Information we collect<br /><br />Log data<br />When you visit our
                    website, our servers may automatically log the standard data provided by your web browser.
                    <br />This data is considered “non-identifying information”, as it does not personally identify you
                    on its own. <br />It may include:<br />‍<br />- Your computer’s Internet Protocol (IP)
                    address<br />- Your browser type and version<br />- The pages you visit<br />- The time and date of
                    your visit<br />- The time spent on each page<br />- Other details.<br /><br />Personal
                    information<br />We may ask for personal information, such as your name and email address. This data
                    is considered “identifying information”, <br />as it can personally identify you. We only request
                    personal information relevant to providing you with a service, and only use <br />it to help provide
                    or improve this service.<br /><br />How we collect information<br />‍<br />We collect information by
                    fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting
                    <br />it and how it will be used. You are free to refuse our request for this information, with the
                    understanding that we may be unable <br />to provide you with some of your desired services without
                    it.<br /><br /><br />Use of information<br />‍<br />We may use a combination of identifying and
                    non-identifying information to understand who our visitors are, how they <br />use our services, and
                    how we may improve their experience of our website in future. We do not disclose the specifics
                    <br />of this information publicly, but may share aggregated and anonymised versions of this
                    information, for example, in website <br />and customer usage trend reports.<br /><br /><br />Data
                    processing and storage<br />‍<br />We only retain personal information for as long as necessary to
                    provide a service, or to improve our services in future. <br />While we retain this data, we will
                    protect it within commercially acceptable means to prevent loss and theft, as well <br />as
                    unauthorised access, disclosure, copying, use or modification. That said, we advise that no method
                    of electronic <br />transmission or storage is 100% secure, and cannot guarantee absolute data
                    security.<br /><br /><br />Cookies<br />‍<br />We use “cookies” to collect information about you and
                    your activity across our site. A cookie is a small piece of data that our website stores on your
                    computer, and accesses each time you visit so we can understand how you use our site and serve you
                    content based on preferences you have specified.<br />If you do not wish to accept cookies from us,
                    you should instruct your browser to refuse cookies from our website, understanding that we may be
                    unable to provide you with some of your desired services without them. This policy covers only the
                    use of cookies between your computer and our website; it does not cover the use of cookies by any
                    third-party services we use on our site.<br /><br /><br />Third-party access to
                    information<br />‍<br />We may use third-party services for our website and marketing activity.
                    These services may access our data solely for the purpose of performing specific tasks on our
                    behalf. We do not share any personally identifying information with these services <br />without
                    your explicit consent. We do not give these services permission to disclose or use any of our data
                    for any other purpose.<br />We will refuse government and law enforcement requests for data if we
                    believe a request is too broad or unrelated to its stated purpose. However, we may cooperate if
                    we<br />Believe the requested information is necessary and appropriate to comply with legal
                    process;<br />‍<br />- To protect our own rights and property;<br />- To protect the safety of the
                    public and any person;<br />- To prevent a crime;<br />- To prevent what we reasonably believe to be
                    illegal;<br />- To prevent what we reasonably believe to be legally actionable, or unethical
                    activity.<br />‍<br />We do not otherwise share or supply personal information to third parties. We
                    do not sell or rent your personal information <br />to marketers or third
                    parties.<br /><br /><br />Children’s Privacy<br />‍<br />This website does not knowingly target or
                    collect personal information from children. As a parent/guardian, please contact <br />us if you
                    believe your child is participating in an activity involving personal information on our website,
                    and you have no received <br />a notification or request for consent. We do not use your supplied
                    contact details for marketing or promotional purposes.<br /><br /><br />Limits of our
                    policy<br />‍<br />This privacy policy only covers Bachoo Design Inc own collecting and handling of
                    data. We only work with partners, affiliates <br />and third-party providers whose privacy policies
                    align with ours, however we cannot accept responsibility or liability <br />for their respective
                    privacy practices.<br />Our website may link to external sites that are not operated by us. Please
                    be aware that we have no control over the content <br />and policies of those sites, and cannot
                    accept responsibility or liability for their respective privacy practices.<br /><br /><br />Changes
                    to this policy<br />‍<br />At our discretion, we may update this policy to reflect current
                    acceptable practices. We will take reasonable steps to let users know about changes via our website.
                    Your continued use of this site after any changes to this policy will be regarded as acceptance
                    <br />of our practices around data and personal information.<br /><br /><br />Your rights and
                    responsibilities<br />‍<br />As our user, you have the right to be informed about how your data is
                    collected and used. You are entitled to know what data <br />we collect about you, and how it is
                    processed. You are entitled to correct and update any personal information about you, <br />and to
                    request this information be deleted.<br />You are entitled to restrict or object to our use of your
                    data, while retaining the right to use your personal information for your own purposes. You have the
                    right to opt out of data about you being used in decisions based solely on automated
                    processing.<br />Feel free to contact us if you have any concerns or questions about how we handle
                    your data and personal information.<br />This policy is effective as of 31 March 2023.
                </div>
            </div><a href="#" class="button-5 close-btn w-button"></a>
        </div>
    </div>
    <div class="privacy-modal cookie-policy main-modal">
        <div class="backdrop-filter-menu"></div>
        <div class="privacy-modal-content cookie-policy-content">
            <div class="privacy-modal-content-text">
                <h3 class="heading-13">Cookie Policy</h3>
                <div class="text-block-53">We use cookies to help improve your experience of nationalargo.com. This
                    cookie policy is part of Bachoo Design Studio OÜ’s privacy policy, and covers the use of cookies
                    between your device and our site.<br />If you don’t wish to accept cookies from us, you should
                    instruct your browser to refuse cookies from nationalargo.com, <br />with the understanding that we
                    may be unable to provide you with some of your desired content and services.<br /><br /><br />What
                    is a cookie?<br /><br />A cookie is a small piece of data that a website stores on your device when
                    you visit, typically containing information <br />about the website itself, a unique identifier that
                    allows the site to recognise your web browser when you return, additional data that serves the
                    purpose of the cookie, and the lifespan of the cookie itself.<br />Cookies are used to enable
                    certain features (eg. logging in), to track site usage (eg. analytics), to store your user settings
                    <br />(eg. timezone, notification preferences), and to personalise your content (eg. advertising,
                    language).<br />Cookies set by the website you are visiting are normally referred to as “first-party
                    cookies”, and typically only track your activity <br />on that particular site. Cookies set by other
                    sites and companies (ie. third parties) are called “third-party cookies”, and can be used to track
                    you on other websites that use the same third-party service.<br /><br /><br />How you can control or
                    opt out of cookies<br />If you do not wish to accept cookies from us, you can instruct your browser
                    to refuse cookies from our website. <br />Most browsers are configured to accept cookies by default,
                    but you can update these settings to either refuse cookies altogether, or to notify you when a
                    website is trying to set or update a cookie.<br />If you browse websites from multiple devices, you
                    may need to update your settings on each individual device.<br />Although some cookies can be
                    blocked with little impact on your experience of a website, blocking all cookies may mean <br />you
                    are unable to access certain features and content across the sites you visit.
                </div>
            </div><a href="#" class="button-5 close-btn w-button"></a>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=61b3254e99f137210789513e"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
        </script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollToPlugin.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="./main-slider.js"></script>
    <script src="./main.js?ver=2.1"></script>
    <script src="./popup.js"></script>
    <script src="./cookie.js"></script>
</body>

</html>