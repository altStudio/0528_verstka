<?php
  require_once "./libs/Mobile_Detect.php";

  $detect = new Mobile_Detect();

  if ($detect->isMobile()) {
    header('Location: /mob/'); // страница для переадресации
    exit(0);
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MetaPax</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://uploads-ssl.webflow.com/61b3254e99f137210789513e/css/metapax.webflow.4f2541e39.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope:300,regular&amp;subset=cyrillic,latin" media="all">
    <link rel="preload" href="./duble-bg.svg" as="image" type="image/svg+xml"/>
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
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
            .className += t + "touch")
    }(window, document);
    </script>
    <link href="https://uploads-ssl.webflow.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon">
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
            display: block;
            position: absolute;
            top: 0;
            right: .5rem;
            content: attr(data-progress-text);
            font-family: "Helvetica Neue", sans-serif;
            font-weight: 100;
            font-size: 5rem;
            line-height: 1;
            text-align: right;
            color: rgba(0, 0, 0, 0.19999999999999996);
        }


        /* main style */
        .pace, .pace.pace-inactive {
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
            background-color: #161616;
            background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAxOTIwIDEwODAiPjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIwX2ZfMV8yMSkiPjxwYXRoIGZpbGw9InVybCgjcGFpbnQwX3JhZGlhbF8xXzIxKSIgZD0iTS0xMDkuMjc1IDU1NS4xNzdjLTc3LjM5NS0xODMuNDQ0LTI4OC44NDctMjY5LjQxNC00NzIuMjkxLTE5Mi4wMTlsLTM3Ljg3NiAxNS45OGMtMTgzLjQ0NCA3Ny4zOTUtMjY5LjQxNCAyODguODQ3LTE5Mi4wMTkgNDcyLjI5MWwxNS4zNjQgMzYuNDE2Yzc3LjM5NSAxODMuNDQ1IDI4OC44NDcgMjY5LjQxNSA0NzIuMjkxIDE5Mi4wMTVsMzcuODc2LTE1Ljk4YzE4My40NDQtNzcuMzkxIDI2OS40MTQtMjg4Ljg0NCAxOTIuMDE5LTQ3Mi4yODhsLTE1LjM2NC0zNi40MTV6Ii8+PHBhdGggc3Ryb2tlPSIjMDBFMjlBIiBzdHJva2Utd2lkdGg9IjQyLjM1OSIgZD0iTS0xMDkuMjc1IDU1NS4xNzdjLTc3LjM5NS0xODMuNDQ0LTI4OC44NDctMjY5LjQxNC00NzIuMjkxLTE5Mi4wMTlsLTM3Ljg3NiAxNS45OGMtMTgzLjQ0NCA3Ny4zOTUtMjY5LjQxNCAyODguODQ3LTE5Mi4wMTkgNDcyLjI5MWwxNS4zNjQgMzYuNDE2Yzc3LjM5NSAxODMuNDQ1IDI4OC44NDcgMjY5LjQxNSA0NzIuMjkxIDE5Mi4wMTVsMzcuODc2LTE1Ljk4YzE4My40NDQtNzcuMzkxIDI2OS40MTQtMjg4Ljg0NCAxOTIuMDE5LTQ3Mi4yODhsLTE1LjM2NC0zNi40MTV6Ii8+PC9nPjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIxX2ZfMV8yMSkiPjxyZWN0IHdpZHRoPSI3MDYuNjQ0IiBoZWlnaHQ9IjcwNS44MjIiIGZpbGw9InVybCgjcGFpbnQxX3JhZGlhbF8xXzIxKSIgcng9IjM1Mi45MTEiIHRyYW5zZm9ybT0ic2NhbGUoLTEgMSkgcm90YXRlKDMwLjA0MyAtMzc1Ljc1MSAyNDQuNTU3KSIvPjwvZz48ZyBmaWx0ZXI9InVybCgjZmlsdGVyMl9mXzFfMjEpIj48cGF0aCBmaWxsPSJ1cmwoI3BhaW50Ml9yYWRpYWxfMV8yMSkiIGQ9Ik0tMjMzLjYyNSAxMjNDLTM5OS4wMTMtNTcuNTktNjc5LjQ4My02OS45MTItODYwLjA3MiA5NS40NzdsLTg1Ljk0MyA3OC43MDhjLTE4MC41ODUgMTY1LjM4OS0xOTIuOTE1IDQ0NS44NTktMjcuNTIzIDYyNi40NDhsNTYuMTIxIDYxLjI3OGMxNjUuMzg4IDE4MC41ODkgNDQ1Ljg1OCAxOTIuOTA5IDYyNi40NDggMjcuNTIzbDg1Ljk0Mi03OC43MDljMTgwLjU5LTE2NS4zODggMTkyLjkxMS00NDUuODU4IDI3LjUyMy02MjYuNDQ3TC0yMzMuNjI1IDEyM3oiLz48L2c+PGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjNfZl8xXzIxKSI+PHJlY3Qgd2lkdGg9IjEwMjgiIGhlaWdodD0iMTAyNi44MSIgZmlsbD0idXJsKCNwYWludDNfcmFkaWFsXzFfMjEpIiByeD0iNDkzLjY4NiIgdHJhbnNmb3JtPSJzY2FsZSgtMSAxKSByb3RhdGUoMzAuMDQzIDQxMC4wMjUgLTE2OS4xMTgpIi8+PC9nPjxnIGZpbHRlcj0idXJsKCNmaWx0ZXI0X2ZfMV8yMSkiPjxwYXRoIGZpbGw9InVybCgjcGFpbnQ0X2FuZ3VsYXJfMV8yMSkiIGQ9Ik0tMjkuMjEzIDg1OS4yNkM2NS43NTEgNjg0Ljg0Mi42ODIgNDY2LjEwNy0xNzMuNzM2IDM3MS4xNDRjLTE3NC40MTgtOTQuOTYzLTM5My40NTMtMzAuOTExLTQ4OC40MTcgMTQzLjUwNy05NC45NjMgMTc0LjQxOS0yOS44OTQgMzkzLjE1NCAxNDQuNTI0IDQ4OC4xMTkgMTc0LjQxOCA5NC45NiAzOTMuNDUzIDMwLjkxIDQ4OC40MTYtMTQzLjUxeiIvPjwvZz48ZyBmaWx0ZXI9InVybCgjZmlsdGVyNV9mXzFfMjEpIj48cGF0aCBmaWxsPSJ1cmwoI3BhaW50NV9yYWRpYWxfMV8yMSkiIGQ9Ik0yMTc1LjcyIDU5OS4xNzdjLTc3LjM5LTE4My40NDQtMjg4Ljg0LTI2OS40MTQtNDcyLjI5LTE5Mi4wMTlsLTM3Ljg3IDE1Ljk4Yy0xODMuNDUgNzcuMzk1LTI2OS40MiAyODguODQ3LTE5Mi4wMiA0NzIuMjkxbDE1LjM2IDM2LjQxNmM3Ny40IDE4My40NDUgMjg4Ljg1IDI2OS40MTUgNDcyLjI5IDE5Mi4wMTVsMzcuODgtMTUuOThjMTgzLjQ0LTc3LjM5IDI2OS40MS0yODguODQ0IDE5Mi4wMi00NzIuMjg4bC0xNS4zNy0zNi40MTV6Ii8+PHBhdGggc3Ryb2tlPSIjMDBFMjlBIiBzdHJva2Utd2lkdGg9IjQyLjM1OSIgZD0iTTIxNzUuNzIgNTk5LjE3N2MtNzcuMzktMTgzLjQ0NC0yODguODQtMjY5LjQxNC00NzIuMjktMTkyLjAxOWwtMzcuODcgMTUuOThjLTE4My40NSA3Ny4zOTUtMjY5LjQyIDI4OC44NDctMTkyLjAyIDQ3Mi4yOTFsMTUuMzYgMzYuNDE2Yzc3LjQgMTgzLjQ0NSAyODguODUgMjY5LjQxNSA0NzIuMjkgMTkyLjAxNWwzNy44OC0xNS45OGMxODMuNDQtNzcuMzkgMjY5LjQxLTI4OC44NDQgMTkyLjAyLTQ3Mi4yODhsLTE1LjM3LTM2LjQxNXoiLz48L2c+PGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjZfZl8xXzIxKSI+PHJlY3Qgd2lkdGg9IjcwNi42NDQiIGhlaWdodD0iNzA1LjgyMiIgZmlsbD0idXJsKCNwYWludDZfcmFkaWFsXzFfMjEpIiByeD0iMzUyLjkxMSIgdHJhbnNmb3JtPSJzY2FsZSgtMSAxKSByb3RhdGUoMzAuMDQzIC0xNjAwLjIzIC0zOTkwLjkxKSIvPjwvZz48ZyBmaWx0ZXI9InVybCgjZmlsdGVyN19mXzFfMjEpIj48cGF0aCBmaWxsPSJ1cmwoI3BhaW50N19yYWRpYWxfMV8yMSkiIGQ9Ik0yMDUxLjM4IDE2N2MtMTY1LjM5LTE4MC41OS00NDUuODYtMTkyLjkxMi02MjYuNDUtMjcuNTIzbC04NS45NCA3OC43MDhjLTE4MC41OSAxNjUuMzg5LTE5Mi45MiA0NDUuODU5LTI3LjUzIDYyNi40NDhsNTYuMTIgNjEuMjc4YzE2NS4zOSAxODAuNTg5IDQ0NS44NiAxOTIuOTA5IDYyNi40NSAyNy41MjNsODUuOTQtNzguNzA5YzE4MC41OS0xNjUuMzg4IDE5Mi45MS00NDUuODU4IDI3LjUzLTYyNi40NDdMMjA1MS4zOCAxNjd6Ii8+PC9nPjxnIGZpbHRlcj0idXJsKCNmaWx0ZXI4X2ZfMV8yMSkiPjxyZWN0IHdpZHRoPSIxMDI4IiBoZWlnaHQ9IjEwMjYuODEiIGZpbGw9InVybCgjcGFpbnQ4X3JhZGlhbF8xXzIxKSIgcng9IjQ5My42ODYiIHRyYW5zZm9ybT0ic2NhbGUoLTEgMSkgcm90YXRlKDMwLjA0MyAtODE0LjQ1NiAtNDQwNC41OSkiLz48L2c+PGcgZmlsdGVyPSJ1cmwoI2ZpbHRlcjlfZl8xXzIxKSI+PHBhdGggZmlsbD0idXJsKCNwYWludDlfYW5ndWxhcl8xXzIxKSIgZD0iTTIyNTUuNzkgOTAzLjI2Yzk0Ljk2LTE3NC40MTggMjkuODktMzkzLjE1My0xNDQuNTMtNDg4LjExNi0xNzQuNDEtOTQuOTYzLTM5My40NS0zMC45MTEtNDg4LjQxIDE0My41MDctOTQuOTcgMTc0LjQxOS0yOS45IDM5My4xNTQgMTQ0LjUyIDQ4OC4xMTkgMTc0LjQyIDk0Ljk2IDM5My40NSAzMC45MSA0ODguNDItMTQzLjUxeiIvPjwvZz48ZGVmcz48ZmlsdGVyIGlkPSJmaWx0ZXIwX2ZfMV8yMSIgd2lkdGg9IjEyMjAuNTgiIGhlaWdodD0iMTIxOS43MyIgeD0iLTEwNjIuOTciIHk9IjExMS42NDQiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPjxmZUJsZW5kIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPjxmZUdhdXNzaWFuQmx1ciByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfMV8yMSIgc3RkRGV2aWF0aW9uPSIxMDAuOTQyIi8+PC9maWx0ZXI+PGZpbHRlciBpZD0iZmlsdGVyMV9mXzFfMjEiIHdpZHRoPSIxMDk0LjgyIiBoZWlnaHQ9IjEwOTQuNCIgeD0iLTc0OC41MzUiIHk9IjE1Ni4xNjUiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPjxmZUJsZW5kIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPjxmZUdhdXNzaWFuQmx1ciByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfMV8yMSIgc3RkRGV2aWF0aW9uPSI5Ny4wODgiLz48L2ZpbHRlcj48ZmlsdGVyIGlkPSJmaWx0ZXIyX2ZfMV8yMSIgd2lkdGg9IjE3MDIuNjUiIGhlaWdodD0iMTcwMC41NyIgeD0iLTE0MjYuODUiIHk9Ii0zNTcuODMyIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiIGZpbHRlclVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz48ZmVCbGVuZCBpbj0iU291cmNlR3JhcGhpYyIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0ic2hhcGUiLz48ZmVHYXVzc2lhbkJsdXIgcmVzdWx0PSJlZmZlY3QxX2ZvcmVncm91bmRCbHVyXzFfMjEiIHN0ZERldmlhdGlvbj0iMTY4LjQ0OSIvPjwvZmlsdGVyPjxmaWx0ZXIgaWQ9ImZpbHRlcjNfZl8xXzIxIiB3aWR0aD0iMTUyMC4wOSIgaGVpZ2h0PSIxNTE5LjY1IiB4PSItOTE4LjM3MyIgeT0iLTI4Ni4wNjYiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPjxmZUJsZW5kIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPjxmZUdhdXNzaWFuQmx1ciByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfMV8yMSIgc3RkRGV2aWF0aW9uPSIxMTkuNDEiLz48L2ZpbHRlcj48ZmlsdGVyIGlkPSJmaWx0ZXI0X2ZfMV8yMSIgd2lkdGg9IjEyMjQuNzEiIGhlaWdodD0iMTIyMy44NyIgeD0iLTk1OC4wMzgiIHk9Ijc1LjAyMiIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJzUkdCIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiPjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+PGZlQmxlbmQgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9InNoYXBlIi8+PGZlR2F1c3NpYW5CbHVyIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1cl8xXzIxIiBzdGREZXZpYXRpb249IjEyNi4wOTgiLz48L2ZpbHRlcj48ZmlsdGVyIGlkPSJmaWx0ZXI1X2ZfMV8yMSIgd2lkdGg9IjEyMjAuNTgiIGhlaWdodD0iMTIxOS43MyIgeD0iMTIyMi4wMyIgeT0iMTU1LjY0NCIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJzUkdCIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiPjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+PGZlQmxlbmQgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9InNoYXBlIi8+PGZlR2F1c3NpYW5CbHVyIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1cl8xXzIxIiBzdGREZXZpYXRpb249IjEwMC45NDIiLz48L2ZpbHRlcj48ZmlsdGVyIGlkPSJmaWx0ZXI2X2ZfMV8yMSIgd2lkdGg9IjEwOTQuODIiIGhlaWdodD0iMTA5NC40IiB4PSIxNTM2LjQ3IiB5PSIyMDAuMTY1IiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiIGZpbHRlclVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz48ZmVCbGVuZCBpbj0iU291cmNlR3JhcGhpYyIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0ic2hhcGUiLz48ZmVHYXVzc2lhbkJsdXIgcmVzdWx0PSJlZmZlY3QxX2ZvcmVncm91bmRCbHVyXzFfMjEiIHN0ZERldmlhdGlvbj0iOTcuMDg4Ii8+PC9maWx0ZXI+PGZpbHRlciBpZD0iZmlsdGVyN19mXzFfMjEiIHdpZHRoPSIxNzAyLjY1IiBoZWlnaHQ9IjE3MDAuNTciIHg9Ijg1OC4xNTQiIHk9Ii0zMTMuODMyIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiIGZpbHRlclVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz48ZmVCbGVuZCBpbj0iU291cmNlR3JhcGhpYyIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0ic2hhcGUiLz48ZmVHYXVzc2lhbkJsdXIgcmVzdWx0PSJlZmZlY3QxX2ZvcmVncm91bmRCbHVyXzFfMjEiIHN0ZERldmlhdGlvbj0iMTY4LjQ0OSIvPjwvZmlsdGVyPjxmaWx0ZXIgaWQ9ImZpbHRlcjhfZl8xXzIxIiB3aWR0aD0iMTUyMC4wOSIgaGVpZ2h0PSIxNTE5LjY1IiB4PSIxMzY2LjYzIiB5PSItMjQyLjA2NiIgY29sb3ItaW50ZXJwb2xhdGlvbi1maWx0ZXJzPSJzUkdCIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiPjxmZUZsb29kIGZsb29kLW9wYWNpdHk9IjAiIHJlc3VsdD0iQmFja2dyb3VuZEltYWdlRml4Ii8+PGZlQmxlbmQgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iQmFja2dyb3VuZEltYWdlRml4IiByZXN1bHQ9InNoYXBlIi8+PGZlR2F1c3NpYW5CbHVyIHJlc3VsdD0iZWZmZWN0MV9mb3JlZ3JvdW5kQmx1cl8xXzIxIiBzdGREZXZpYXRpb249IjExOS40MSIvPjwvZmlsdGVyPjxmaWx0ZXIgaWQ9ImZpbHRlcjlfZl8xXzIxIiB3aWR0aD0iMTIyNC43MSIgaGVpZ2h0PSIxMjIzLjg3IiB4PSIxMzI2Ljk2IiB5PSIxMTkuMDIyIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiIGZpbHRlclVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz48ZmVCbGVuZCBpbj0iU291cmNlR3JhcGhpYyIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0ic2hhcGUiLz48ZmVHYXVzc2lhbkJsdXIgcmVzdWx0PSJlZmZlY3QxX2ZvcmVncm91bmRCbHVyXzFfMjEiIHN0ZERldmlhdGlvbj0iMTI2LjA5OCIvPjwvZmlsdGVyPjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQwX3JhZGlhbF8xXzIxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoNjI3LjU3NTI0IDE1MzIuMDQ0NiAtMTUzNS4yMzcxNCA2MjguODgzIC0zMDAuODIgNjQ5LjYwNCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjNUFFOUZEIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjNUFFOUZEIiBzdG9wLW9wYWNpdHk9IjAiLz48L3JhZGlhbEdyYWRpZW50PjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQxX3JhZGlhbF8xXzIxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMCAzNTIuOTExIC0zNTMuMzIyIDAgMzUzLjMyMiAzNTIuOTExKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiMzOEZGNzAiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM0QUUwNzQiIHN0b3Atb3BhY2l0eT0iLjY1Ii8+PC9yYWRpYWxHcmFkaWVudD48cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50Ml9yYWRpYWxfMV8yMSIgY3g9IjAiIGN5PSIwIiByPSIxIiBncmFkaWVudFRyYW5zZm9ybT0icm90YXRlKDQ3LjUxNiAtODQ3LjE0NyAtNDA3LjUxNSkgc2NhbGUoNDg0Ljk0IDE1OTUuMjIpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iIzYwMTJDMyIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzk5NDlGRiIgc3RvcC1vcGFjaXR5PSIuMzciLz48L3JhZGlhbEdyYWRpZW50PjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQzX3JhZGlhbF8xXzIxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJyb3RhdGUoMTUxLjEzMyAzMzIuMTgzIDQwNS4yOTUpIHNjYWxlKDQ4NC45ODQgNDg1LjU0OSkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjRkZGOUM1Ii8+PHN0b3Agb2Zmc2V0PSIuNzU1IiBzdG9wLWNvbG9yPSIjRkY1QzAwIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRkY0NTFDIi8+PC9yYWRpYWxHcmFkaWVudD48cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50NF9hbmd1bGFyXzFfMjEiIGN4PSIwIiBjeT0iMCIgcj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09InJvdGF0ZSgxMTguNTY2IC0zNzYuOTIyIDI0MC43ODMpIHNjYWxlKDM1OS41ODcgMzY0LjIzMSkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjRkZGNUNGIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRkZEODRCIiBzdG9wLW9wYWNpdHk9IjAiLz48L3JhZGlhbEdyYWRpZW50PjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQ1X3JhZGlhbF8xXzIxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoNjI3LjU3NTI0IDE1MzIuMDQ0NiAtMTUzNS4yMzcxNCA2MjguODgzIDE5ODQuMTggNjkzLjYwNCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjNUFFOUZEIi8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjNUFFOUZEIiBzdG9wLW9wYWNpdHk9IjAiLz48L3JhZGlhbEdyYWRpZW50PjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQ2X3JhZGlhbF8xXzIxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMCAzNTIuOTExIC0zNTMuMzIyIDAgMzUzLjMyMiAzNTIuOTExKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiMzOEZGNzAiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM0QUUwNzQiIHN0b3Atb3BhY2l0eT0iLjY1Ii8+PC9yYWRpYWxHcmFkaWVudD48cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50N19yYWRpYWxfMV8yMSIgY3g9IjAiIGN5PSIwIiByPSIxIiBncmFkaWVudFRyYW5zZm9ybT0icm90YXRlKDQ3LjUxNiAyNDUuMzczIDIyMTAuMDUpIHNjYWxlKDQ4NC45NCAxNTk1LjIyKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiM2MDEyQzMiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM5OTQ5RkYiIHN0b3Atb3BhY2l0eT0iLjM3Ii8+PC9yYWRpYWxHcmFkaWVudD48cmFkaWFsR3JhZGllbnQgaWQ9InBhaW50OF9yYWRpYWxfMV8yMSIgY3g9IjAiIGN5PSIwIiByPSIxIiBncmFkaWVudFRyYW5zZm9ybT0icm90YXRlKDE1MS4xMzMgMzMyLjE4MyA0MDUuMjk1KSBzY2FsZSg0ODQuOTg0IDQ4NS41NDkpIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agc3RvcC1jb2xvcj0iI0ZGRjlDNSIvPjxzdG9wIG9mZnNldD0iLjc1NSIgc3RvcC1jb2xvcj0iI0ZGNUMwMCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI0ZGNDUxQyIvPjwvcmFkaWFsR3JhZGllbnQ+PHJhZGlhbEdyYWRpZW50IGlkPSJwYWludDlfYW5ndWxhcl8xXzIxIiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJyb3RhdGUoMTE4LjU2NiA3NTIuNTA4IDk0MS42MSkgc2NhbGUoMzU5LjU4NyAzNjQuMjMxKSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiNGRkY1Q0YiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNGRkQ4NEIiIHN0b3Atb3BhY2l0eT0iMCIvPjwvcmFkaWFsR3JhZGllbnQ+PC9kZWZzPjwvc3ZnPg==");
            background-repeat: no-repeat;
            background-size: 120vw 100%;
            transition: background 1s linear;
        }

        .pace .pace-progress:after {
            position: relative !important;
            font-size: 120px;
            line-height: 180px;
            width: 100%;

            color: white;
            font-weight: bolder;
            display: flex;
            justify-content: center;
            right: 0;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./add.css?ver=1.2">
</head>

<body class="body">
    <script src="./pace.min.js"></script>
    <script type="text/javascript">
        window.paceOptions = {
            ajax: false, // disabled
            elements: {
                selectors: ['.image-40' ]
            }
        };
    </script>
    <div class="sections-block">
        <div class="secondsect-father">
            <div class="section-2 screenone section first not-padding-top first-head-section wf-section" style="position: fixed; z-index: 13;">
                <div class="section-inner first-inner">
                    <div class="container-3 wrapper w-container">
                        <div class="div-block-32"><img src="./images/main-logo.svg" loading="lazy" width="577" alt="" class="image-8 first-screen-logo" />
                            <div class="text-block-7">In Vision the future</div>
                        </div>
                        <div class="text-block-3">
                            <div class="text-sect first-anim-text">Imagine that you can see the world through someone else’s eyes... <br>Literally</div>
                            <div class="text-sect second-anim-text">You can guide that person and make him act as you wish...</div>
                        </div>
                    </div><img src="./images/bg-main-page.png" loading="eager" sizes="100vw" srcset="./images/bg-main-page-sm.png 500w, ./images/bg-main-page-lg.png 2100w" alt="" class="image-7" /><img src="./images/bg-main-page2.png" loading="eager" srcset="./images/bg-main-page2-sm.png 500w, ./images/bg-main-page2-lg.png 2030w" sizes="100vw" alt="" class="image-6" />
                </div><img src="./images/glasses.png" loading="eager" sizes="100vw" srcset="./images/glasses-500.png 500w, ./images/glasses-800.png 800w, ./images/glasses-1080.png 1080w, ./images/glasses-1600.png 1600w, ./images/glasses-2000.png 2000w, ./images/glasses.png 2159w" alt="" class="image-40" />
                <div class="scroll-dv">
                    <div class="text-block-39">scroll to find out</div><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAxOSAxMCI+PHBhdGggc3Ryb2tlPSIjZmZmIiBkPSJNMC0uNWgxMi43MjgiIHRyYW5zZm9ybT0icm90YXRlKDQ1IC0uOTU3IDEuMTA0KSIvPjxwYXRoIHN0cm9rZT0iI2ZmZiIgZD0iTTAtLjVoMTIuNzI4IiB0cmFuc2Zvcm09InJvdGF0ZSgtNDUgMTYuODIxIC02LjQ2OCkiLz48L3N2Zz4=" alt="" class="image-32 arrow-down" />
                </div><img src="./images/glasses-1.png" width="3000" loading="eager" alt="" class="image-41" /><img src="./images/glasses-2.png" width="2700" loading="eager" alt="" class="image-42" />
            </div>
            <div id="start" class="secondsect section connect-section wf-section" style="position: relative;">
                <div class="section-inner-2">
                    <div class="section-inner-3">
                        <div class="container-4 wrapper w-container">
                            <div class="section-content not-padding">
                                <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                                    <div class="site-menu custom-menu">menu</div>
                                </div>
                                <div class="div-block-7">
                                    <div class="div-block-5"><img width="200" src="./images/MetaPax.svg" loading="lazy" alt="" class="image-9" />
                                        <div class="text-block-4">Connecting <br />people in <br /><span class="text-span-38">real-time</span></div>
                                    </div>
                                    <div class="columns-4 content-bottom flex-bottom w-row">
                                        <div class="w-col w-col-6">
                                            <div class="left-text">Discover the first platform in the world which allows you to remotely connect to real-time experiences anywhere in the world -- in a matter of seconds.</div>
                                        </div>
                                        <div class="column-2 w-col w-col-6">
                                            <div class="text-block-19 pagin-white">01<span class="text-span-8">/10</span></div>
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
                    <div data-poster-url="./images/foot.jpg" data-video-urls="./images/foot-mp4.mp4,./images/foot-webm.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video w-background-video w-background-video-atom">
                        <video id="embed-video-1" loop="" style="background-image:url(&quot;./images/foot.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                            <source src="./images/foot-mp4.mp4" data-wf-ignore="true" />
                        </video>
                    </div>
                </div>
            </div>
            <div id="3sec" class="section-3 section wf-section">
                <div class="container-4 wrapper w-container">
                    <div class="section-content space-between margin-top-none not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="title-container">
                            <div class="text-block-6 visible-title">Limitless<br />possibilities</div>
                            <div class="text-block-6 hidden-text1">Immersive <br />Experience</div>
                        </div>
                        <div class="div-block-3">
                            <div class="laptop-video"><img src="./images/laptop.png" loading="eager" sizes="(max-width: 479px) 94vw, (max-width: 767px) 96vw, (max-width: 991px) 97vw, (max-width: 1439px) 900px, 1400px" srcset="./images/laptop-500.png 500w, ./images/laptop.png 714w" alt="" class="image-13" />
                                <div data-poster-url="./images/poster-for-video-in-laptop.jpg" data-video-urls="./images/video-in-laptop-mp4.mp4,./images/video-in-laptop-webm.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="laptop-video-content w-background-video w-background-video-atom">
                                    <video id="embed-video-2" autoplay="" loop="" style="background-image:url(&quot;./images/poster-for-video-in-laptop.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                        <source>
                                    </video></div><img src="./images/footer-in-laptop.png" loading="lazy" alt="" class="image-31 laptop-int" />
                            </div>
                        </div>
                        <div class="section-inner-4"></div>
                        <div class="content-bottom flex-end w-row">
                            <div class="w-col w-col-10">
                                <div class="mobile-section-title">
                                    <div class="mobile-section-title-item">There would be lots <br />of great possibilities...</div>
                                    <div class="mobile-section-title-item-hidden">And what if...</div>
                                </div>
                                <div class="center-text visible-text">Interacting with people on the other side of the <br />globe without leaving the comfort of your living room,<br /> or renting an apartment for your future travel --<br />possibilities are limited by your imagination.</div>
                                <div class="center-text hidden-text-2"><span class="text-span-33">Feel something that wasn’t possible before.</span><br /> Have you ever thought how the musical performance<br /> would look like from the eyes of your favourite singer?</div>
                            </div>
                            <div class="column-2 w-col w-col-2">
                                <div class="text-block-19 pagin-white">01<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom">intro</div>
                            </div>
                        </div>
                    </div>
                </div><img src="./images/colorful-circle.png" loading="eager" sizes="(max-width: 1884px) 100vw, 1884px" srcset="./images/colorful-circle-500.png 500w, ./images/colorful-circle-800.png 800w, ./images/colorful-circle-1080.png 1080w, ./images/colorful-circle-1600.png 1600w, ./images/colorful-circle.png 1884w" alt="" class="image-10" /><img src="./images/colorful-circle2.png" loading="eager" sizes="(max-width: 1395px) 100vw, 1395px" srcset="./images/colorful-circle2-500.png 500w, ./images/colorful-circle2-800.png 800w, ./images/colorful-circle2-1080.png 1080w, ./images/colorful-circle2.png 1395w" alt="" class="image-11" />
            </div>
            <div class="section-4 section black-section wf-section">
                <div data-poster-url="./images/now-you-can.jpg" data-video-urls="./images/now-you-can-video-mp4.mp4,./images/now-you-can-video-webm.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="mobile-hidden background-video-4 w-background-video w-background-video-atom">
                    <video id="embed-video-3" autoplay="" loop="" style="background-image:url(&quot;./images/now-you-can.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                        <source>
                    </video></div>
                <div class="section-content not-padding">
                    <div class="wrapper width-100">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo padding-left" />
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
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
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
                            <div class="column-28 column-flex-2 video-mute-trigger w-col w-col-4"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCA3NiA3NiI+PHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0ic3F1YXJlIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBkPSJNNTYuOTkyIDMwLjg3NXYxNC4yNU02Ni40OTIgMjYuMTI1djIzLjc1TTE0LjI1IDExLjg3NWw0Ny41IDUyLjI1Ii8+PHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0ic3F1YXJlIiBkPSJNMzMuMjkzIDE4LjcwMUw0NS4xMjMgOS41djIyLjIxNU00NS4xMjYgNDYuNXYyMEwyMy43NTEgNDkuODc1SDcuMTI4TDcuMTI2IDQ3LjV2LTE5bC0uMDAxLTIuMzc1aDE5LjM3NiIvPjwvc3ZnPg==" alt="" class="image-48 video-mutte-play" /><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCA3NiA3NiI+PHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIGQ9Ik0yMy43NSA0OS44NzVINy4xMjVWMjguNWwuMDAxLTIuMzc1SDIzLjc1TDQ1LjEyNSA5LjV2NTdMMjMuNzUgNDkuODc1eiIvPjxwYXRoIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InNxdWFyZSIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgZD0iTTU2Ljk5MiAzMC44NzV2MTQuMjVNNjYuNDkyIDI2LjEyNXYyMy43NSIvPjwvc3ZnPg==" alt="" class="image-49 video-mutte-stop" /></div>
                            <div class="column-2 not-dispaly-none w-col w-col-4"><a href="#" class="button-8 w-button">skip the video &gt;</a></div>
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
                <div data-poster-url="./images/space-poster.jpg" data-video-urls="./images/space-mp4.mp4,./images/space-webm.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video-3 w-background-video w-background-video-atom">
                    <video id="embed-video-4" autoplay="" loop="" style="background-image:url(&quot;./images/space-poster.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                        <source>
                    </video></div>
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="space-inner-tex">
                            <div class="text-block-55">Whether you buy or sell time on a platform,you join <br />the fantastic community with infinite opportunities.<br /><br />Grow intellectually, productivity-wise, and explore <br />the world with massive steps.</div>
                        </div>
                        <div class="content-bottom flex-end margin-top-auto w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text alantext">We are building a bridge to Metaverse of experience<br />where people can become whoever they choose.</div>
                                <div class="text-go center-text content-bottom-second-hiiden-text"><span class="text-span-28"> We&#x27;re the next generation</span><span class="text-span-23 bold">.</span> <br />MetaPax is driven by the force of its proud community where network<br /> effects are organically built into the product from the day one.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-19 pagin-white">02<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom">intro</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="eye-container"><img src="./images/sauron.png" loading="eager" sizes="(max-width: 843px) 100vw, 843px" srcset="./images/sauron-500.png 500w, ./images/sauron-800.png 800w, ./images/sauron.png 843w" alt="" class="image-43" />
                    <div class="text-block-56">Social networks<br />evolved</div>
                    <div class="text-block-58">The line between<br />real and virtual is gone</div>
                </div>
            </div>
            <div id="get" class="section section-7 platform-section wf-section">
                <div class="wrapper w-container">
                    <div class="circle-layers"><img src="./images/bg-purple-circl.svg" alt="" class="layers-1" /><img src="./images/bg-green-circl.svg" alt="" class="layers-3" /><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAyMTc2IDIxNzQiPjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIwX2ZfNTNfNykiPjxyZWN0IHdpZHRoPSIxNDMxLjQ2IiBoZWlnaHQ9IjE0MjkuNzkiIHg9IjE0OTguNzQiIHk9IjIwMTEuNzQiIGZpbGw9InVybCgjcGFpbnQwX3JhZGlhbF81M183KSIgcng9IjcxNC44OTUiIHRyYW5zZm9ybT0icm90YXRlKC0xNTguOTA0IDE0OTguNzQgMjAxMS43NCkiLz48L2c+PGRlZnM+PGZpbHRlciBpZD0iZmlsdGVyMF9mXzUzXzciIHdpZHRoPSIyMTc0LjY4IiBoZWlnaHQ9IjIxNzMuNDEiIHg9Ii45NTUiIHk9Ii40MzUiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwIiByZXN1bHQ9IkJhY2tncm91bmRJbWFnZUZpeCIvPjxmZUJsZW5kIGluPSJTb3VyY2VHcmFwaGljIiBpbjI9IkJhY2tncm91bmRJbWFnZUZpeCIgcmVzdWx0PSJzaGFwZSIvPjxmZUdhdXNzaWFuQmx1ciByZXN1bHQ9ImVmZmVjdDFfZm9yZWdyb3VuZEJsdXJfNTNfNyIgc3RkRGV2aWF0aW9uPSIxODUuNzg5Ii8+PC9maWx0ZXI+PHJhZGlhbEdyYWRpZW50IGlkPSJwYWludDBfcmFkaWFsXzUzXzciIGN4PSIwIiBjeT0iMCIgcj0iMSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCg3OS44NDQgNjY3LjIxNDYxIC03ODIuMzA0NDggOTMuNjE2NTMgMjUwMC40MSAyNDA2LjI2KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIG9mZnNldD0iLjQ0OCIgc3RvcC1jb2xvcj0iI0ZGNEQ0RCIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0icmVkIiBzdG9wLW9wYWNpdHk9IjAiLz48L3JhZGlhbEdyYWRpZW50PjwvZGVmcz48L3N2Zz4=" alt="" class="layers-2" /><img src="./images/new-colorful-circle.png" srcset="./images/new-colorful-circle-500.png 500w, ./images/new-colorful-circle-800.png 800w, ./images/new-colorful-circle-1080.png 1080w, ./images/new-colorful-circle.png 3014w" sizes="100vw" alt="" class="image-21" /></div>
                    <div class="section-content space-between margin-top-none padding-top-mini padding-top-8">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="what-do-content">
                            <div class="what-do-text">
                                <div class="div-block-15">
                                    <div class="text-block-16 change-text"><span class="text-span-17">In one role you</span> <span class="text-span-7 get-span">get</span></div>
                                </div>
                                <div class="text-block-16">In one role you <span class="text-span-7 give">give</span></div>
                                <div class="div-block-26">
                                    <div class="text-block-17 marcel-1">Thousands<br />of experiences <br />available</div>
                                    <div id="give" class="text-block-17 marcel-2">Put on glasses<br />and start <br />streaming </div>
                                    <div class="how-works-bottom-text relative w-col w-col-10">
                                    <div class="text-go marcel-3">Whenever you need to appear on the other part of the world -- it’s all ready for you: join the ongoing streaming sessions or request a new one on your terms.</div>
                                    <div class="text-block-59 marcel-4">You can choose what to stream according to thousands of different requests available to you, depending on what you’re up to today. Explore the world together with other people and have fun!</div>
                                </div>
                                </div>
                            </div>
                            <div class="what-do-laptop">
                                <div class="rotate-container rotate-container-1"><img src="./images/laptopn-with-bg.png" loading="eager" sizes="(max-width: 479px) 94vw, (max-width: 1033px) 100vw, 1033px" srcset="./images/laptopn-with-bg-800.png 800w, ./images/laptopn-with-bg.png 1033w" alt="" class="image-19" /><img src="./images/glasses-camera-on.png" loading="eager" sizes="(max-width: 1058px) 100vw, 1058px" srcset="./images/glasses-camera-on-500.png 500w, ./images/glasses-camera-on-800.png 800w, ./images/glasses-camera-on.png 1058w" alt="" class="image-20 image-scale not-auto-width glasses-rotate" /></div>
                            </div>
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
                <div class="bg-circle-container"><img src="./images/time-bg.png" loading="lazy" sizes="100vw" srcset="./images/time-bg-500.png 500w, ./images/time-bg-800.png 800w, ./images/time-bg-1080.png 1080w, ./images/time-bg-1600.png 1600w, ./images/time-bg.png 1920w" alt="" class="image-50" /></div>
                <div class="wrapper w-container">
                    <div class="section-content not-padding no-flex">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo logo-invert" />
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
                                    <div class="text-go center-text _w-960"><br /><br />Streamers are monetizing their experiences, sharing them with the<br /> people across the globe.<br /><br />Viewers are buying new experiences to live through -- saving a lot <br />of their own time in the process.</div>
                                </div>
                                <div class="column-2 pagin pagin-revert w-col w-col-2">
                                    <div class="text-block-19">02<span class="text-span-8 subpagin-black black-color">/10</span></div>
                                    <div class="text-block-19 not-border-bottom intro-black">intro</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-section first"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section mobile-hidden"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section" id="skip-video"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>

        <div class="mother">
            <div id="howto" class="section section-ways-slider _wf-section wf-section">
                <div class="wrapper w-container">
                    <div class="section-content not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-28 header-title">Ways to <span class="text-span-9">MetaРax</span></div>
                        <div class="ways-sliders-container">
                            <div class="ways-slider">
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text">
                                        <h3 class="heading-2">Joy<br />&amp; Fun</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image"></div>
                                    <div data-poster-url="./images/parachute-poster.jpg" data-video-urls="./images/parachute-video-mp4.mp4,./images/parachute-video-webm.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="ways-slider-item_video w-background-video w-background-video-atom">
                                        <video id="embed-video-5" autoplay="" loop="" style="background-image:url(&quot;./images/parachute-poster.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                            <source>
                                        </video>
                                    </div>
                                    <div class="slider-bottom-text text-style">
                                        <div class="text-block-64">Ride a mountain bike or fly a paraglider over South<br /> Africa together with your friends - guide the pilot as <br />you wish - speed, locations, explore all the details...<br /><br />No risk and <span class="text-span-34">plenty of joy!</span></div>
                                    </div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text">
                                        <h3 class="heading-2">Science &amp; research</h3>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image2"></div>
                                    <div data-poster-url="./images/petri-poster.jpg" data-video-urls="./images/petri-mp4.mp4,./images/petri-webm.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="ways-slider-item_video w-background-video w-background-video-atom">
                                        <video id="embed-video-6" autoplay="" loop="" style="background-image:url(&quot;./images/petri-poster.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                            <source>
                                        </video>
                                    </div>
                                    <div class="slider-bottom-text text-style">
                                        <div class="text-block-64">Are you a <span class="text-span-35">fellow student or a scientist?</span> Now you can<br /> get your productivity to the next level - connecting<br /> to the scientific facilities or researchers themselves,<br /> discuss new ideas or ongoing progress with them.</div>
                                    </div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text">
                                        <h3 class="heading-2">Work<br />&amp; Business</h3>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image3"></div>
                                    <div data-poster-url="./images/backyard-poster.jpg" data-video-urls="./images/backyard-mp4.mp4,./images/backyard-webm.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="ways-slider-item_video w-background-video w-background-video-atom">
                                        <video id="embed-video-7" autoplay="" loop="" style="background-image:url(&quot;./images/backyard-poster.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                            <source>
                                        </video></div>
                                    <div class="slider-bottom-text text-style">
                                        <div class="text-block-64">Professional photographer? We have your back.<br />With MetaPax you don’t need to travel for a good<br /> views anymore. Harness MetaPax network of<br /> streamers and create <span class="text-span-36">any content you want<br /> whenever you want.</span></div>
                                    </div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text">
                                        <h3 class="heading-2">Orders<br />&amp; Errands</h3>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image4"></div>
                                    <div data-poster-url="./images/package-poster.jpg" data-video-urls="./images/package-mp4.mp4,./images/package-webm.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="ways-slider-item_video w-background-video w-background-video-atom">
                                        <video id="embed-video-8" autoplay="" loop="" style="background-image:url(&quot;./images/package-poster.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                                            <source>
                                        </video>
                                    </div>
                                    <div class="slider-bottom-text text-style">
                                        <div class="text-block-64"><span class="text-span-37">Distance is not a problem anymore</span> -- if you’d like to<br /> send some gestures of love to your family, remotely<br /> organize event at specific venue or make fun of your<br /> closest friend -- it’s possible with MetaPax, not<br /> matter where in world you are.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ways-slider-nav">
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text text-style">
                                        <h3 class="heading-2">Joy<br />&amp; Fun</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image"></div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text text-style">
                                        <h3 class="heading-2">Science</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image2"></div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text text-style">
                                        <h3 class="heading-2">Work<br />&amp;Business</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image3"></div>
                                </div>
                                <div class="ways-slider-item">
                                    <div class="ways-slider-item_text text-style">
                                        <h3 class="heading-2">Orders<br />&amp;Errands</h3>
                                        <div class="text-block-29">Reimagine human possibilities and ways to connect. Unlimited ways to MetaPax through life</div>
                                    </div>
                                    <div class="ways-slider-item_image ways-slider-item_image4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="columns-7 columns-flex-end content-bottom w-row">
                            <div class="w-col w-col-11">
                                <div class="universe-bottom-text margin-right-text padding-left"><span class="text-span-11">Reimagine</span> human possibilities<br />and connectedness, as well as incomes. <br />Check few of <span class="text-span-10">∞</span> ways to MetaPax this reality, limited only by imagination.</div>
                            </div>
                            <div class="column-2 aboslute-bread w-col w-col-1">
                                <div class="text-block-19 pagin-white">02<span class="text-span-8">/10</span></div>
                                <div class="text-block-19 not-border-bottom right absolute-bread-text">ways to<br />MetaPax</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-10 section section-invert _wf-section wf-section bg-pax-creator">
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-32 not-margin-top header-title">MetaPax Beholder</div>
                        <div class="pax-creator-content"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAyNjQgNDQ2Ij48cGF0aCBmaWxsPSIjMTYxNjE2IiBzdHJva2U9IiNmZmYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiIGQ9Ik0xODIuMzA3IDE3MS4zNTRTMSA0MTYuMjY0IDEgNDIzLjk0M2MwIDcuNjc5IDE0MS44NDQgMjQuMzMgMTU5LjE4NyAyMC40OUMxNzcuNTMgNDQwLjU5NCAyNjMgNDE1Ljg0MSAyNjMgNDA3LjI5MmMwLTMuODQtMTAzLjUyMS0uODU4LTE3NS44OTgtLjg1OC0yMS42NyAwLTM3Ljc4NyAwLTM4LjQtMS4yOEM0OC4wOSA0MDMuODc0IDE3OCAyNDMuNSAxNzggMjQzLjVsNC4zMDctNzIuMTQ2eiIvPjxwYXRoIGZpbGw9IiMxNjE2MTYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTI0NC42MjUgOTEuNjczbC0yLjcyMyAyNTEuOTc3LTY4LjQ1MSA3MC44NTYtNy45OTgtMS41OTkgMy4yLTQwOS44OThMMTc1Ljg1NyAxbDY4Ljc2OCA5MC42NzN6Ii8+PHBhdGggc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMTczLjQ1IDQxNC41MDZMMTc1Ljg1NSAxIi8+PG1hc2sgaWQ9ImEiIHN0eWxlPSJtYXNrLXR5cGU6YWxwaGEiIHdpZHRoPSI2NSIgaGVpZ2h0PSIzMzAiIHg9IjE3NyIgeT0iMjAiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiPjxwYXRoIGZpbGw9IiNGNDhCNDQiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTE3OC4zNDQgMzQ4LjExOGw1OC41NDktNDAuNTA1IDMuMzE4LTIxMC42NC01OC45MTktNzUuNDk2LTIuOTQ4IDMyNi42NDF6Ii8+PC9tYXNrPjxnIG1hc2s9InVybCgjYSkiPjxwYXRoIGZpbGw9IiNGNDhCNDQiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTE3OC4zNDQgMzQ4LjExOGw1OC41NDktNDAuNTA1IDMuMzE4LTIxMC42NC01OC45MTktNzUuNDk2LTIuOTQ4IDMyNi42NDF6Ii8+PC9nPjwvc3ZnPg==" alt="" class="image-26" />
                            <div class="text-block-33 gradient-text font-size-120">Invents<br />Explores<br />Enjoys</div><img src="./images/girl.png" loading="lazy" alt="" class="image-27" />
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text _w-960">Being Beholder is very <span class="text-span-14">rewarding -- but it also is a responsibility. A </span><br />constant learning on how to interact with streamers and how to get the best out of it... But in the end there is nothing more joyful than to be the one who creates the final picture.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">03<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black">MetaPax <br />beholder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-10 section-monic section _wf-section magic-section wf-section bg-pax-creator">
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-32 not-margin-top header-title">MetaPax Beholder</div>
                        <div class="div-block-14">
                            <div class="div-block-25">
                                <div class="text-block-35">Magic <br /> begins</div>
                                <div class="text-block-29">It’s you who decides <br />what happens next.<br />Surprise everyone.</div>
                            </div>
                            <div class="mac-svg"></div>
                            <div class="div-block-23 invite-svg-container">
                                <div class="html-embed-4 w-embed"></div>
                                <div class="trigger-invite-btn">Invite <span class="text-span-25">+</span></div>
                                <div class="trigger-invite-wrap"><img src="./images/boy.png" loading="lazy" alt="" class="image-47 trigger-invite-img-2" /><img src="./images/boy-shadow.png" loading="lazy" alt="" class="image-46 trigger-invite-img-1" /></div><img src="./images/girl.png" loading="lazy" alt="" class="image-45" />
                            </div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text _w-960">Get your task done. Play with the narrative to appease the spectators if your stream is public. Successfull evolution of the story can even make your stream free for you: people can donate and support you real-time.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">03<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black">MetaPax<br />beholder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-10 section section-earn _wf-section wf-section bg-earn-learn-evolve">
                <div class="container-4 wrapper w-container">
                    <div class="section-content space-between margin-top-none not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-32 text-head not-margin-top header-title"><span class="text-span-9">MetaPax Streamer</span></div>
                        <div class="div-block-27"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAzMjAgNDIwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNjMuNTUyIDMxLjg4YTIuODY1IDIuODY1IDAgMSAxLTEuOTc5LTUuMzc2IDIuODY1IDIuODY1IDAgMCAxIDEuOTggNS4zNzZ6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTYzLjQzMyAyOC45MjNsMTIuMjQxIDguNTItNS4yNDQgNC4zMDgtNy43MTgtMTEuNzEuNzItMS4xMTh6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgc3Ryb2tlPSIjMTYxNjE2IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMTM5LjQ2IDI0LjU4OFMxOTcuNDAxLjc5NyAyMDUuNTI3IDMuNDUzYzguMTMgMi42NjgtMTY1LjMxIDE3Ny43NjItMTY1LjMxIDE3Ny43NjJzLTkuODM2LTcuNjQ5LjExOC0zNi44NjVDNTAuMjkgMTE1LjEzNSA2MC4zMiA5Ny41NjcgNjAuMzIgOTcuNTY3czIyLjc5Ny00Ni4yMjcgMzQuNzg1LTU0Ljg1YzExLjk4OC04LjYyIDQ0LjM1NS0xOC4xMyA0NC4zNTUtMTguMTN6Ii8+PHBhdGggZmlsbD0iIzE2MTYxNiIgc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiBkPSJNMTM4LjMgMjUuMjQzcy0zMi42NzQtMTYuMDctNjQuOTUyIDkuMTYzQzQxLjA4IDU5LjYzNiA1OS4yMiA5OS4yODIgNTkuMjIgOTkuMjgyczcuMDU2LTE0LjgzMyAyOC44NTUtMzguMjMyQzExNC4xNTEgMzMuMDYyIDEzOC4zIDI1LjI0MyAxMzguMyAyNS4yNDN6Ii8+PHBhdGggZmlsbD0iIzE2MTYxNiIgc3Ryb2tlPSIjZmZmIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTM5LjU3OCAxODIuMjUxYzguOTE1IDcuNjY5IDU2LjgxOS0yMi44MzIgMTA0LjM3My03MS4yNTIgNDcuNTczLTQ4LjQ0IDc0LjgzMi05Ni41NCA2NS40MDgtMTA2LjM4Ny04LjEyNS04LjQ5NS01OS40MjQgMTkuNzk2LTEwNi4zMDEgNjguODgzLTUwLjAzNCA1Mi4zOTgtNzQuMTU2IDk5LjU4NC02My40OCAxMDguNzU2eiIvPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0xNjcuMTkgNjAuNDc1cy0xOS41NDYgNS4yNi00My43OTMgMzIuNjUxYy0yMi40MTUgMjUuMzE4LTI2LjIxIDQzLjc5Ni0yNi4yMSA0My43OTZzMTQuNDQtMS45OTQgMjMuNjY2LTUuNjQ0YzIzLjc3OS05LjQxMyA0MC41OC0yMy4zNDIgNDYuMzY4LTU1LjAzIDEuOTU3LTEwLjcxOC0uMDMxLTE1Ljc3My0uMDMxLTE1Ljc3M3oiLz48cGF0aCBzdHJva2U9IiNGNDhCNDQiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiIGQ9Ik0xNzIgMTE1LjA1MWw5OS42NDIgMzQuNzU1TTI1Mi4zMzUgMjEwLjkzOGwtODguMzMzLTc4LjgwNE0xNDIuMDAyIDE0OS4yODNsMTc2LjA1IDI1My45ODVNMTI0LjA1MSAxNTVsMTkuNzY1IDE4OS4zNDIiLz48L3N2Zz4=" alt="" class="image-26" />
                            <div class="text-block-33 gradient-text new font-size-120">Earn<br />Learn<br />Impress</div><img src="./images/boy-with-glasses.svg" loading="lazy" alt="" class="image-27 right-im person-img" />
                            <div class="columns-12 w-row">
                                <div class="column-8 left-im w-col w-col-2"></div>
                                <div class="column-7 w-col w-col-8"></div>
                                <div class="right-im w-col w-col-2"></div>
                            </div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text _w-960">Traveller, local geek or science prodigy -- whoever you are, MetaPax awaits. Millions of people around the globe <span class="text-span-11">are waiting to explore</span> your talents and deep dive in your incredibly interesting life. Don’t be shy to share it, and you’ll be suprised by how much you could benefit from it.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34">04<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black">MetaPax <br />streamer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-10 section-offer _wf-section earns-section-2 section wf-section bg-pax-creator">
                <div class="container-4 wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="text-block-48 header-title"><span class="text-span-13">MetaPax Streamer</span></div>
                        <div class="columns-11 w-row">
                            <div class="w-col w-col-3">
                                <div class="div-block-21">
                                    <div class="text-block-35">Earn<br />Learn Impress</div>
                                    <div class="text-block-29">You are the story. Just share it <span class="text-span-3">with the world.<br /> </span><br />Each streamer has something to tell -- our audience will guide you.</div>
                                </div>
                            </div>
                            <div class="column-9 w-col w-col-6">
                                <div class="div-block-19"><img src="./images/boy-with-glasses.svg" loading="lazy" alt="" class="image-44 guy-glasses" /></div>
                            </div>
                            <div class="column-29 w-col w-col-3">
                                <div class="div-block-22">
                                    <div class="div-block-18">
                                        <div class="text-block-49 mobile-hidden">Oslo, Norway</div>
                                        <div class="icons-container">
                                            <div class="mobile-hidden w-embed"><a href="" class="hover-icon">
                                                    <svg width="42" height="29" viewBox="0 0 42 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M42 0H0V29H42V0Z" fill="#FA1B43" />
                                                        <path d="M19.0905 0H11.4541V29H19.0905V0Z" fill="white" />
                                                        <path d="M42 10.875H0V18.125H42V10.875Z" fill="white" />
                                                        <path d="M17.1815 0H13.3633V29H17.1815V0Z" fill="#2853A4" />
                                                        <path d="M42 12.6875H0V16.3125H42V12.6875Z" fill="#2853A4" />
                                                    </svg>
                                                </a>
                                                <a href="" class="hover-icon">
                                                    <svg width="42" height="29" viewBox="0 0 42 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_395_1142)">
                                                            <path d="M0 0V29H42V0H0Z" fill="#2853A4" />
                                                            <path d="M0 0L42 29L0 0ZM42 0L0 29L42 0Z" fill="#161616" />
                                                            <path d="M42 0L0 29M0 0L42 29L0 0Z" stroke="white" stroke-width="5.8" />
                                                            <path d="M0 0L42 29L0 0ZM42 0L0 29L42 0Z" fill="#161616" />
                                                            <path d="M42 0L0 29M0 0L42 29L0 0Z" stroke="#FA1B43" stroke-width="3.86667" />
                                                            <path d="M21 0V29V0ZM0 14.5H42H0Z" fill="#161616" />
                                                            <path d="M0 14.5H42M21 0V29V0Z" stroke="white" stroke-width="9.66667" />
                                                            <path d="M21 0V29V0ZM0 14.5H42H0Z" fill="#161616" />
                                                            <path d="M0 14.5H42M21 0V29V0Z" stroke="#FA1B43" stroke-width="5.8" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_395_1142">
                                                                <rect width="42" height="29" rx="5" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a></div>
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
                                        <div class="div-block-17"><img src="./images/mountains.svg" loading="lazy" alt="" /></div>
                                        <div class="text-block-47">The Norhern Light</div>
                                    </div>
                                    <div class="div-block-16 block-illiustration2">
                                        <div class="div-block-17 block-bg-3"><img src="./images/town.svg" loading="lazy" alt="" /></div>
                                        <div class="text-block-47">A day of Oslo citizen</div>
                                    </div>
                                    <div class="div-block-16 block-bg-4">
                                        <div class="div-block-17 block-bg-5"><img src="./images/rock.svg" loading="lazy" alt="" /></div>
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
            <div id="howitworks" class="section how-works-section _wf-section wf-section">
                <div class="wrapper wrapper-relative w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-5 header-title"><span class="text-span-15">How</span> it works</h3>
                        <div class="section-content-second">
                            <div class="div-block-24">
                                <div class="mobile-hiw-images"><img src="./images/how-work-glasses.png" loading="lazy" sizes="(max-width: 479px) 94vw, 100vw" srcset="./images/how-work-glasses-500.png 500w, ./images/how-work-glasses-800.png 800w, ./images/how-work-glasses.png 913w" alt="" class="hiw-img1" /><img src="./images/how-work-phone.png" loading="lazy" sizes="(max-width: 479px) 94vw, 100vw" srcset="./images/how-work-phone-500.png 500w, ./images/how-work-phone.png 561w" alt="" class="image-52" />
                                    <div class="div-block-29">
                                        <div class="text-block-51 titile-invs">MetaPax<br />platform <br />&amp; app</div>
                                        <div class="text-block-38 title-visible">Streaming<br />FPV Glasses</div>
                                    </div>
                                </div>
                            </div>
                            <div class="div-block-30">
                                <div class="text-block-38 title-visible desctop">Streaming<br />FPV Device</div>
                                <div class="text-block-51 titile-invs desktop">MetaPax<br />platform <br />&amp; app</div>
                                <div class="div-block-31">
                                    <div class="text-go center-text hiw-unvis">Install the app, put on your device -- and you will immediately start streaming to the millions of people around the globe who are curious to learn and see through your eyes.</div>
                                    <div class="text-go center-text hiw-vis">They key element of the MetaPax platform is the ability to work with literally any wearable device out there, be it Smart Glasses, GoPro Cameras, you name it.</div>
                                </div>
                            </div>
                            <div class="what-do-laptop how-works-rotate">
                                <div class="rotate-container how-works-rotate-container"><img src="./images/how-work-glasses.png" loading="eager" sizes="(max-width: 913px) 100vw, 913px" srcset="./images/how-work-glasses-500.png 500w, ./images/how-work-glasses-800.png 800w, ./images/how-work-glasses.png 913w" alt="" class="image-19 how-works-rotate-image1" /><img src="./images/how-work-phone.png" loading="eager" sizes="(max-width: 479px) 100vw, 490.3125px" srcset="./images/how-work-phone-500.png 500w, ./images/how-work-phone.png 561w" alt="" class="image-20 image-scale how-works-rotate-image-2" /></div>
                            </div>
                        </div>
                        <div class="text-block-37">It was hard <br />to deliver your <br />vision until now</div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">05<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black">how it works</div>
                            </div>
                        </div>
                    </div>
                </div><img src="./images/how-works-bg1.svg" loading="lazy" alt="" class="how-works-bg1 how-works-bg" /><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9Im5vbmUiIHZpZXdCb3g9IjAgMCAxODgwIDE4ODAiPjxnIGZpbHRlcj0idXJsKCNmaWx0ZXIwX2ZfNjNfOSkiPjxyZWN0IHdpZHRoPSIxMjcwLjk2IiBoZWlnaHQ9IjEyNjkuNDkiIGZpbGw9InVybCgjcGFpbnQwX3JhZGlhbF82M185KSIgcng9IjYxMC4zNjUiIHRyYW5zZm9ybT0ic2NhbGUoMSAtMSkgcm90YXRlKDMwLjA0MyAzNzIxLjA4MiA0MTQuNzM3KSIvPjwvZz48ZGVmcz48ZmlsdGVyIGlkPSJmaWx0ZXIwX2ZfNjNfOSIgd2lkdGg9IjE4NzkuMzUiIGhlaWdodD0iMTg3OC44MSIgeD0iLjIxIiB5PSIuMjExIiBjb2xvci1pbnRlcnBvbGF0aW9uLWZpbHRlcnM9InNSR0IiIGZpbHRlclVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJCYWNrZ3JvdW5kSW1hZ2VGaXgiLz48ZmVCbGVuZCBpbj0iU291cmNlR3JhcGhpYyIgaW4yPSJCYWNrZ3JvdW5kSW1hZ2VGaXgiIHJlc3VsdD0ic2hhcGUiLz48ZmVHYXVzc2lhbkJsdXIgcmVzdWx0PSJlZmZlY3QxX2ZvcmVncm91bmRCbHVyXzYzXzkiIHN0ZERldmlhdGlvbj0iMTQ3LjYzMiIvPjwvZmlsdGVyPjxyYWRpYWxHcmFkaWVudCBpZD0icGFpbnQwX3JhZGlhbF82M185IiBjeD0iMCIgY3k9IjAiIHI9IjEiIGdyYWRpZW50VHJhbnNmb3JtPSJyb3RhdGUoMTUxLjEzMyA0MTAuNjkgNTAxLjA4Mykgc2NhbGUoNTk5LjYwNyA2MDAuMzA1KSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIHN0b3AtY29sb3I9IiNGRkY5QzUiLz48c3RvcCBvZmZzZXQ9Ii43NTUiIHN0b3AtY29sb3I9IiNGRjVDMDAiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNGRjQ1MUMiLz48L3JhZGlhbEdyYWRpZW50PjwvZGVmcz48L3N2Zz4=" alt="" class="how-works-bg how-works-bg2" />
            </div>
            <div class="section marque-glasses _wf-section wf-section">
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none align-center">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-6 header-title">No langugae barrier.<span class="text-span-16"> instant</span></h3><img src="./images/understanding-camera.png" loading="eager" sizes="(max-width: 479px) 94vw, (max-width: 767px) 67vw, (max-width: 991px) 68vw, (max-width: 1439px) 69vw, 68vw" srcset="./images/understanding-camera-500.png 500w, ./images/understanding-camera-800.png 800w, ./images/understanding-camera-1080.png 1080w, ./images/understanding-camera.png 1293w" alt="" class="image-29" /><img src="./images/understanding-camera.png" loading="eager" sizes="100vw" srcset="./images/understanding-camera-500.png 500w, ./images/understanding-camera-800.png 800w, ./images/understanding-camera-1080.png 1080w, ./images/understanding-camera.png 1293w" alt="" class="image-29 copyglasses" />
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10">
                                <div class="text-go center-text">MetaPax platform developed an AI which translates text and voice to over <br />100 different languages -- on the go. <br />Nothing will stop you from the best experience of your life.</div>
                            </div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">06<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black no-wrap right">Understanding made instant</div>
                            </div>
                        </div>
                    </div><img src="./images/unde-circle.svg" loading="lazy" alt="" class="image-30" />
                </div>
                <div class="text-circle-container"><img src="./images/text-round.png" loading="eager" sizes="(max-width: 2269px) 100vw, 2269px" srcset="./images/text-round-500.png 500w, ./images/text-round-800.png 800w, ./images/text-round-1080.png 1080w, ./images/text-round-1600.png 1600w, ./images/text-round.png 2269w" alt="" class="text-circle" /></div>
                <div class="text-circle-container text-circle-container-right"><img src="./images/doutsh-text-round.png" loading="eager" sizes="(max-width: 2310px) 100vw, 2310px" srcset="./images/doutsh-text-round-500.png 500w, ./images/doutsh-text-round-800.png 800w, ./images/doutsh-text-round-1080.png 1080w, ./images/doutsh-text-round-1600.png 1600w, ./images/doutsh-text-round.png 2310w" alt="" class="text-circle text-circle-right" /></div>
            </div>
            <div id="roadmap" class="section section-road-map _wf-section wf-section">
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
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
                                    <div class="road-map-slider_text">Assembling the team<br /><br />Technology testing<br /><br />Patent applications<br /><br />Website &amp; White Paper<br /><br />Token Private Sale</div>
                                </div>
                                <div class="road-map-slider_content no-right-margin">
                                    <div class="road-map-slider_subtitle">Q2</div>
                                    <div class="road-map-slider_text">MTP token release, <br />Velas Blockchain Integration<br /><br />Starting the development <br />of MetaPax Glass <br />‍<br />Technical activities <br />(server infrastructure / platform design)<br /><br />Launchpad Sale</div>
                                </div>
                                <div class="road-map-slider_content no-right-margin">
                                    <div class="road-map-slider_subtitle">Q3</div>
                                    <div class="road-map-slider_text"><span>Platform BETA Launch, feature demonstration<br /><br />Listing on exchanges<br /><br />Global Marketing Campaign<br /><br />‍<br /><br />‍</span></div>
                                </div>
                                <div class="road-map-slider_content no-right-margin">
                                    <div class="road-map-slider_subtitle">Q4</div>
                                    <div class="road-map-slider_text"><span>API, Integration of third-party wearable devices<br /><br />Project release, connecting Paxers around the world<br /><br />‍<br /><br />‍</span></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="road-map-slider_title">2023</div>
                            <div class="road-map-slider_item-inner">
                                <div class="road-map-slider_content no-right-margin">
                                    <div class="road-map-slider_subtitle">Q1</div>
                                    <div class="road-map-slider_text">Full launch of the project<br /><br />Ver 1.0 DAO implementation<br /><br />Autostaking release</div>
                                </div>
                            </div>
                        </div>    
                        
                    </div>
                </div><img src="./images/road-bg.png" loading="lazy" sizes="100vw" srcset="./images/road-bg-500.png 500w, ./images/road-bg-800.png 800w, ./images/road-bg-1080.png 1080w, ./images/road-bg-1600.png 1600w, ./images/road-bg.png 1920w" alt="" class="road-map-bg" />
            </div>
            <div class="section time-matters _wf-section how-earn-section wf-section">
                <div class="black-bg"></div>
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none time-matters-container">
                        <img src="./images/surfing.svg" loading="lazy" alt="" class="image-39 blur-3 man-surfing" />
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-10 header-title">How to <span class="text-span-16">earn</span></h3>
                        <div class="earn-content-2">
                            <div class="earn-title">
                                <div class="text-block-45">Your time matters</div>
                                <div class="your-time">
                                    <div class="text-block-46"><span class="text-span-3">MetaРax Beholders</span> are getting increased value of their time with concentrated experiences and on-demand remote execution of whatever they need. And they are happy to pay for it!<br /><br />No more exhausting travelling or time spent on remote problem solving. Be present.</div>
                                    <div class="text-block-63"><span class="text-span-27">MetaPax</span> Streamers get your stuff done in minutes, not weeks -- no matter where in the world you are. Increased efficiency is what will change the world. <br />‍<br />Streamers will charge a reasonable fee for their services, but after all - did you ever had a chance to buy yourself some time before?</div>
                                </div>
                            </div>
                            <div class="earn-image"><img src="./images/man-screen.svg" loading="lazy" alt="" class="image-37 blur-1" /><img src="./images/man-laptop.svg" loading="lazy" alt="" class="image-38 blur-2" /></div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">07<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black">how to earn</div>
                            </div>
                        </div>
                    </div>
                </div><img src="./images/how-to-earn-bg.png" loading="lazy" sizes="(max-width: 2509px) 100vw, 2509px" srcset="./images/how-to-earn-bg-500.png 500w, ./images/how-to-earn-bg-800.png 800w, ./images/how-to-earn-bg.png 2509w" alt="" class="image-53" />
            </div>
            <div id="mission" class="section-11 sect-mission _wf-section mission-section section wf-section">
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none sect-mission-container">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <h3 class="heading-7 header-title"><span class="text-span-16">Mission</span> and vision</h3>
                        <div class="mission-content-container">
                            <div class="columns-8 mission-content w-row">
                                <div class="left-padding-column w-col w-col-5">
                                    <div class="border-text vis-mis"><span class="text-span-11">Future of communication</span></div>
                                    <div class="text-block-37 mission-title vis-mis">Technology <br />of dissolving<br />the borders</div>
                                    <div class="border-text invis-mis"><span class="text-span-11">More than platform.</span></div>
                                    <div class="text-block-37 mission-title invis-mis">It&#x27;s a new<br />way to life,<br />leisure<br />and work</div>
                                </div>
                                <div class="padding-right-column w-col w-col-5">
                                    <div class="border-text vis-mis"><span class="text-span-11">The world is evolving.</span></div>
                                    <div class="mission-text mis-text-vis">We all are seeing a singification change in the internet landscape. Just think of it for a moment -- we're devices that were invented 14 years ago (think iPhone) and are spending time in social networks that are almost 20 years old (think Facebook). We're literally living in the past and the change is inevitable - the future should come. We are building this future.</div>
                                    <div class="mission-text mis-text-invs">How often have you been unable to meet your goals because you just couldn't be present in another place that very second? 
                                     Think of having a teleportation unit at your home -- how that would change your life? Now it's possible! <br><br>

                                     In a blink of an eye you can 'teleport' yourself wherever you want and interact with the world through someone else’s eyes. Future has come.</div>
                                    <div class="border-text invis-mis"><span class="text-span-11">MetaPax is a future</span></div>
                                </div>
                                <div class="not-padding-col w-col w-col-2">
                                    <div class="border-text vis-mis"><span class="text-span-11">Our mission</span></div>
                                    <div class="border-text invis-mis"><span class="text-span-11">True time disruption.</span></div>
                                    <div class="mission-text mis-text-vis mission-sto">Inspire people to interact with each other in real time and bring joy in a whole new way</div>
                                    <div class="mission-text mis-text-invs misson-sto">Never before you were able to be present in more than one place at the same time. It's possible now -- with MetaPax.</div>
                                </div>
                            </div><img src="./images/quotes.png" loading="lazy" sizes="(max-width: 479px) 67px, 287px" srcset="./images/quotes-500.png 500w, ./images/quotes-800.png 800w, ./images/quotes.png 974w" alt="" class="image-33" />
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">09<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom right">mission <br />and vision</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="blockchain" class="section blockchain-section wf-section bg-pax-creator">
                <div class="wrapper w-container">
                    <div class="section-content not-padding space-between margin-top-none">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="section-title">
                            <h3 class="heading-14 header-title">Why <span class="text-span-21">blockchain</span></h3>
                        </div>
                        <div class="blockchain-content">
                            <div class="blockchain-text">
                                <div class="blockchain-text-title">MetaPax token</div>
                                <div class="text-block-54">Lightning fast transactions with minimal fees and enormous scalability.<br />Support smart contracts<br />Convenience of integration of the internal wallet.</div>
                            </div>
                            <div class="blockchain-map"></div>
                        </div>
                        <div class="content-bottom flex-end w-row">
                            <div class="how-works-bottom-text w-col w-col-10"></div>
                            <div class="column-2 pagin pagin-revert w-col w-col-2">
                                <div class="text-block-34 pagin-white">09<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black">why blockchain</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-11 section-form _wf-section section contact-section wf-section">
                <div class="wrapper w-container">
                    <div class="section-content not-padding">
                        <div class="section-header"><img src="./images/logo.svg" loading="lazy" alt="" class="site-logo" />
                            <div class="site-menu custom-menu">menu</div>
                        </div>
                        <div class="section-title">
                            <h3 class="heading-9 header-title"><span class="text-span-16">Follow</span> us</h3>
                            <div class="text-block-41">Follow us on social media to stay <br />informed and inspired!<br /><br />Download <a href="./images/metapax-pitch-deck.pdf" target="_blank" class="link-4">Pitch Deck</a> and <a href="https://whitepaper.metapax.io/" class="link-3">White Paper</a></div>
                        </div>
                        <div class="society-container"><a href="http://t.me/metapax" target="_blank" class="society-link w-inline-block">
                                <div class="w-embed"><svg width="71" height="100%" viewBox="0 0 71 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M35.6837 0.160254C26.4276 0.204478 17.5653 4.00007 11.0354 10.7167C4.50556 17.4334 0.839743 26.5244 0.839844 36.001C0.839844 45.5066 4.5281 54.6229 11.0932 61.3443C17.6584 68.0658 26.5626 71.8418 35.8471 71.8418C45.1316 71.8418 54.0359 68.0658 60.601 61.3443C67.1661 54.6229 70.8544 45.5066 70.8544 36.001C70.8544 26.4955 67.1661 17.3792 60.601 10.6578C54.0359 3.93633 45.1316 0.160254 35.8471 0.160254C35.7927 0.160124 35.7382 0.160124 35.6837 0.160254ZM50.1592 21.7364C50.451 21.7304 51.0957 21.8051 51.5158 22.1546C51.7949 22.4027 51.9729 22.7491 52.0146 23.1252C52.0613 23.403 52.1197 24.0392 52.073 24.535C51.5479 30.2038 49.2666 43.9547 48.1055 50.3015C47.6154 52.9896 46.6498 53.8886 45.7133 53.9752C43.6829 54.1693 42.1397 52.6013 40.1705 51.2812C37.0899 49.2114 35.3483 47.9241 32.3581 45.905C28.9011 43.5754 31.1416 42.2911 33.1107 40.2004C33.6271 39.6508 42.5831 31.3089 42.7581 30.5532C42.7786 30.4577 42.799 30.1052 42.5948 29.9201C42.3906 29.7349 42.0872 29.7976 41.8684 29.8484C41.5591 29.9201 36.6377 33.2532 27.104 39.839C25.7038 40.8246 24.4406 41.3025 23.3058 41.2726C22.0572 41.2487 19.6533 40.5528 17.865 39.9585C15.6713 39.2267 13.9296 38.8414 14.0813 37.6019C14.1601 36.9568 15.0295 36.2967 16.6865 35.6217C26.8911 31.0699 33.6942 28.0683 37.1015 26.6197C46.8219 22.4801 48.8436 21.7603 50.1592 21.7364Z" fill="white" />
                                    </svg></div>
                            </a><a href="http://facebook.com/metapax.io" target="_blank" class="society-link w-inline-block">
                                <div class="w-embed"><svg width="73" height="100%" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M72.2078 36.2185C72.2078 16.3053 56.2504 0.160156 36.5687 0.160156C16.8871 0.160156 0.929688 16.3053 0.929688 36.2185C0.929688 54.2176 13.9617 69.1338 31.0001 71.8382V46.6424H21.9508V36.2155H31.0001V28.2767C31.0001 19.241 36.3222 14.247 44.4628 14.247C48.3593 14.247 52.44 14.9531 52.44 14.9531V23.8265H47.9435C43.5154 23.8265 42.1344 26.606 42.1344 29.4576V36.2185H52.0183L50.4383 46.6454H42.1344V71.8411C59.1758 69.1338 72.2078 54.2146 72.2078 36.2185Z" fill="white" />
                                    </svg></div>
                            </a><a href="mailto:info@metapax.com?subject=info%40metapax.com" class="society-link w-inline-block">
                                <div class="w-embed"><svg width="73" height="100%" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M47.0806 35.9996C47.0806 41.9508 42.2359 46.7954 36.2848 46.7954C30.3336 46.7954 25.489 41.9508 25.489 35.9996C25.489 30.0485 30.3336 25.2038 36.2848 25.2038C42.2359 25.2038 47.0806 30.0485 47.0806 35.9996ZM36.2848 0.113281C16.4965 0.113281 0.398438 16.2113 0.398438 35.9996C0.398438 55.788 16.4965 71.886 36.2848 71.886C43.5338 71.886 50.5227 69.7268 56.5008 65.6448L56.6024 65.573L51.7668 59.9538L51.686 60.0046C47.0944 62.9629 41.7469 64.5339 36.2848 64.5293C20.5546 64.5293 7.75514 51.7298 7.75514 35.9996C7.75514 20.2694 20.5546 7.46998 36.2848 7.46998C52.015 7.46998 64.8144 20.2694 64.8144 35.9996C64.8102 38.0614 64.5847 40.1167 64.1416 42.1302C63.2414 45.8355 60.6456 46.9689 58.6988 46.8194C56.743 46.6609 54.4523 45.2643 54.4343 41.8521V35.9996C54.4296 31.1873 52.516 26.5733 49.1134 23.1702C45.7108 19.767 41.0972 17.8527 36.2848 17.8471C31.4719 17.8519 26.8575 19.7659 23.4543 23.1691C20.051 26.5723 18.137 31.1867 18.1323 35.9996C18.137 40.8125 20.051 45.4269 23.4543 48.8302C26.8575 52.2334 31.4719 54.1474 36.2848 54.1521C38.6768 54.158 41.0459 53.687 43.2538 52.7669C45.4617 51.8468 47.4641 50.4959 49.1441 48.7931C50.2059 50.4605 51.6741 51.8307 53.4109 52.7749C55.1476 53.7191 57.0959 54.2064 59.0726 54.191C61.6863 54.191 64.2761 53.3178 66.3605 51.7358C68.5107 50.1 70.1166 47.7405 71.0048 44.9024C71.1454 44.4419 71.4086 43.3952 71.4086 43.3862L71.4145 43.3474C71.9379 41.0746 72.1711 38.8018 72.1711 35.9996C72.1711 16.2113 56.0731 0.113281 36.2848 0.113281" fill="white" />
                                    </svg></div>
                            </a><a href="http://twitter.com/metapax_io" target="_blank" class="society-link w-inline-block">
                                <div class="html-embed-7 w-embed"><svg width="81" height="100%" viewBox="0 0 81 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M79.9423 8.48273C76.9776 9.78802 73.837 10.6496 70.6213 11.0398C74.0069 9.00488 76.5419 5.81361 77.758 2.05537C74.6202 3.88658 71.1426 5.21956 67.4406 5.96194C64.9982 3.35018 61.7618 1.61793 58.2339 1.03419C54.706 0.450451 51.0841 1.04788 47.9306 2.73371C44.7771 4.41954 42.2685 7.09943 40.7943 10.3572C39.3201 13.615 38.9628 17.2685 39.7779 20.7502C26.2831 20.1134 14.3291 13.6299 6.32128 3.83708C4.86554 6.31107 4.10623 9.13281 4.12384 12.0033C4.12384 17.6454 6.99437 22.6045 11.3431 25.5179C8.76572 25.4358 6.2453 24.739 3.99186 23.4854V23.6834C3.9904 27.4329 5.28613 31.0674 7.65924 33.9703C10.0323 36.8732 13.3366 38.8658 17.0116 39.6099C14.6303 40.248 12.1363 40.3438 9.71313 39.8904C10.7562 43.1173 12.7805 45.9381 15.5037 47.9592C18.227 49.9803 21.5132 51.1009 24.9039 51.1646C19.1612 55.6715 12.0705 58.1176 4.77053 58.11C3.48374 58.11 2.20025 58.0341 0.910156 57.889C8.35279 62.6545 17.0066 65.1841 25.8442 65.1775C55.7143 65.1775 72.0302 40.4447 72.0302 19.0344C72.0302 18.3415 72.0302 17.6487 71.9807 16.9558C75.1679 14.6622 77.9172 11.8146 80.0973 8.54872L79.9423 8.48273Z" fill="white" />
                                    </svg></div>
                            </a><a href="https://www.youtube.com/channel/UCtyhkuP70QFBs_7nUgDbWdA" target="_blank" class="society-link w-inline-block youtube-icon">
                                <!-- <div class="html-embed-5 w-embed"><svg width="73" height="100%" viewBox="0 0 53 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M90.8726 10.473C90.3519 8.5119 89.3252 6.72201 87.8952 5.28257C86.4652 3.84312 84.6821 2.80465 82.7245 2.27114C75.5402 0.332032 46.7223 0.332031 46.7223 0.332031C46.7223 0.332031 17.9045 0.332032 10.7164 2.27114C8.75963 2.80559 6.97752 3.84444 5.54828 5.28379C4.11903 6.72314 3.09277 8.51253 2.57212 10.473C0.644531 17.7072 0.644531 32.7977 0.644531 32.7977C0.644531 32.7977 0.644531 47.8882 2.57212 55.1224C3.09274 57.0835 4.11947 58.8734 5.54948 60.3128C6.97949 61.7522 8.76259 62.7907 10.7202 63.3242C17.9045 65.2633 46.7223 65.2633 46.7223 65.2633C46.7223 65.2633 75.5402 65.2633 82.7283 63.3242C84.6861 62.7911 86.4694 61.7527 87.8995 60.3132C89.3295 58.8737 90.3561 57.0836 90.8764 55.1224C92.8001 47.8882 92.8001 32.7977 92.8001 32.7977C92.8001 32.7977 92.8001 17.7072 90.8726 10.473ZM37.2956 46.4982V19.0972L61.3828 32.7977L37.2956 46.4982Z" fill="white" />
                                    </svg></div> -->
                                    <img src="./images/icons8-youtube.svg">
                            </a><a href="http://instagram.com/metapax.io/" target="_blank" class="society-link w-inline-block">
                                <div class="html-embed-6 w-embed"><svg width="61" height="100%" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30.4399 0.617188C22.2511 0.617188 21.2287 0.654364 18.0134 0.795634C14.8032 0.94434 12.6178 1.4425 10.6962 2.1786C8.71432 2.937 7.03133 3.95563 5.35588 5.60874C3.68043 7.26185 2.64552 8.91992 1.87938 10.8779C1.13334 12.7739 0.625937 14.9301 0.477733 18.0975C0.327018 21.2699 0.296875 22.2786 0.296875 30.3583C0.296875 38.438 0.334554 39.4467 0.477733 42.6191C0.628448 45.7841 1.13334 47.9428 1.87938 49.8388C2.64803 51.7918 3.68043 53.4548 5.35588 55.1079C7.03133 56.7585 8.71181 57.7821 10.6962 58.538C12.6204 59.2717 14.8057 59.7748 18.0134 59.921C21.2287 60.0697 22.2511 60.0994 30.4399 60.0994C38.6288 60.0994 39.6511 60.0623 42.8664 59.921C46.0741 59.7723 48.262 59.2717 50.1836 58.538C52.163 57.7796 53.8485 56.7585 55.5239 55.1079C57.1969 53.4548 58.2343 51.7992 59.0004 49.8388C59.744 47.9428 60.2539 45.7841 60.4021 42.6191C60.5528 39.4467 60.583 38.438 60.583 30.3583C60.583 22.2786 60.5453 21.2699 60.4021 18.0975C60.2514 14.9326 59.744 12.7714 59.0004 10.8779C58.2318 8.9224 57.1969 7.26185 55.5239 5.60874C53.8485 3.95563 52.1705 2.93452 50.1836 2.1786C48.262 1.4425 46.0741 0.941862 42.8664 0.795634C39.6511 0.646929 38.6288 0.617188 30.4399 0.617188ZM30.4399 5.97059C38.4856 5.97059 39.4451 6.01025 42.6227 6.14656C45.5617 6.28287 47.1567 6.76369 48.2168 7.17511C49.6285 7.71293 50.6282 8.35732 51.6882 9.39578C52.7407 10.4367 53.3938 11.4256 53.9389 12.8185C54.3509 13.8644 54.8432 15.4382 54.9763 18.3379C55.1195 21.4756 55.1522 22.4174 55.1522 30.3583C55.1522 38.2992 55.1145 39.2435 54.9663 42.3787C54.8131 45.2785 54.3232 46.8523 53.9088 47.8982C53.3461 49.291 52.7056 50.2774 51.6506 51.3233C50.5981 52.3618 49.5807 53.0062 48.1841 53.544C47.1291 53.9505 45.5089 54.4362 42.57 54.5676C39.3698 54.7089 38.4278 54.7411 30.3646 54.7411C22.2988 54.7411 21.3568 54.7039 18.1591 54.5577C15.2177 54.4065 13.5975 53.9232 12.5425 53.5143C11.1132 52.9591 10.131 52.3271 9.07855 51.2862C8.02103 50.2477 7.34532 49.2439 6.81782 47.8659C6.40335 46.825 5.91604 45.2264 5.76281 42.3266C5.64978 39.2038 5.60959 38.2397 5.60959 30.3211C5.60959 22.4001 5.64978 21.4335 5.76281 18.2735C5.91604 15.3737 6.40335 13.7776 6.81782 12.7367C7.34532 11.324 8.02103 10.3574 9.07855 9.31399C10.131 8.27553 11.1132 7.60635 12.5425 7.08836C13.5975 6.67694 15.1825 6.19365 18.1215 6.04494C21.3242 5.93341 22.2661 5.89624 30.3269 5.89624L30.4399 5.97059ZM30.4399 15.0862C21.8868 15.0862 14.9615 21.9267 14.9615 30.3583C14.9615 38.7974 21.8944 45.6304 30.4399 45.6304C38.993 45.6304 45.9184 38.7899 45.9184 30.3583C45.9184 21.9193 38.9855 15.0862 30.4399 15.0862ZM30.4399 40.272C24.8886 40.272 20.3922 35.8356 20.3922 30.3583C20.3922 24.881 24.8886 20.4446 30.4399 20.4446C35.9913 20.4446 40.4876 24.881 40.4876 30.3583C40.4876 35.8356 35.9913 40.272 30.4399 40.272ZM50.1484 14.484C50.1484 16.4543 48.5257 18.0529 46.5313 18.0529C44.5343 18.0529 42.9141 16.4519 42.9141 14.484C42.9141 12.5161 44.5368 10.9175 46.5313 10.9175C48.5232 10.9151 50.1484 12.5161 50.1484 14.484Z" fill="white" />
                                    </svg></div>
                            </a></div>
                        <div class="form-container contacts-form">
                            <div class="form-block w-form">
                                <form id="email-form" name="email-form" data-name="Email Form" method="post" class="form"><input type="email" class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Email" id="email" required="" />
                                    <div class="how-btn-container"><input type="submit" value="Submit" data-wait="" class="submit-button how-btn-1 button-2 w-button" /><a href="#" class="button-2 how-btn-2 w-button"><span class="btn-sticky-text new-text">Submit</span></a></div>
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
                                <div class="text-block-34 pagin-white">10<span class="text-span-8 subpagin-black">/10</span></div>
                                <div class="text-block-34 not-border-bottom intro-black">follow us</div>
                            </div>
                        </div><img src="./images/nlo.svg" loading="lazy" alt="" class="image-35" />
                    </div>
                </div><img src="./images/white-text-circle.png" loading="lazy" alt="" class="image-36" />
            </div>
        </div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
        <div class="scroll-section"></div>
    </div>
    
    <div class="menu-modal main-modal">
        <div class="backdrop-filter-menu"></div>
        <div class="menu-modal-content"><a href="#" class="button-4 close-btn-hover close-btn w-button">close</a>
            <div class="w-layout-grid grid"><a href="#start" class="modal-menu-link my-underline ways">Ways to MetaPax</a><a href="#3sec" class="modal-menu-link my-underline creator">Pax creator</a><a href="#get" class="modal-menu-link my-underline paxer">Paxer</a><a href="#give" class="modal-menu-link my-underline how-it">How it works</a><a href="#howitworks" class="modal-menu-link my-underline hot-to">How to earn</a><a href="#howto" id="w-node-_96bc8b47-d6a3-934f-2dba-4335e9587b21-ce89513f" class="modal-menu-link my-underline voices">Voice &amp; text chat</a><a href="#roadmap" class="modal-menu-link my-underline road">Road map</a><a href="#mission" class="modal-menu-link my-underline our-mission">Our mission</a><a href="#blockchain" class="modal-menu-link my-underline blockchain">Blockchain</a><a href="#" class="modal-menu-link my-underline contact">Contact us</a></div>
            <div class="menu-footer">
                <div class="menu-policy-container"><a href="#" class="menu-policy-btn policy-btn-for-modal w-button">Privacy Policy</a><a href="#" class="menu-policy-btn menu-policy-btn-margin-bottom-none cookie-btn-for-modal w-button">Cookie Policy</a></div>
                <div class="how-btn-container menu-hover-btn"><a href="#" class="button-2 how-btn-1 black-btn orange-border not-opacity subscribe-open w-button">How it works?</a><a href="#" class="button-2 how-btn-2 orange-border not-padding w-button"><span class="btn-sticky-text modal-menu-span color-white">How it works?</span></a></div>
            </div>
        </div>
    </div>
    <div class="subscribe-modal main-modal">
        <div class="backdrop-filter-menu"></div>
        <div class="subscribe-modal-content">
            <h3 class="heading-12">Stay with <span class="text-span-20">MetaPax</span></h3>
            <div class="text-block-50">please leave your contact details so we can<br /> find you as soon as we&#x27;ll have updates</div>
            <div class="form-block-2 w-form">
                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="post" class="form-2"><input type="email" class="text-field-2 w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Email" id="email-2" required="" />
                    <div class="how-btn-container"><input type="submit" value="Submit" data-wait="" class="submit-button how-btn-1 button-2 w-button" /><a href="#" class="button-2 how-btn-2 w-button"><span class="btn-sticky-text new-text">Submit</span></a></div>
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
            <div class="text-block-52">This website use <span class="text-span-19">cookies</span><br /><br />We use cookie to ensure you get <br />the best experience on our website</div><a href="#" class="button-6 w-button">Accept</a>
            <div class="how-btn-container"><a href="#" class="how-btn-1 button-2 _32 cookie_accept w-button">Accept</a><a href="#" class="button-2 how-btn-2 w-button"><span class="btn-sticky-text new-text _32">Accept</span></a></div>
        </div>
    </div>
    <div class="privacy-modal privacy-policy main-modal">
        <div class="backdrop-filter-menu"></div>
        <div class="privacy-modal-content">
            <div class="privacy-modal-content-text">
                <h3 class="heading-13">Privacy Policy</h3>
                <div class="text-block-53">Your privacy is important to us. It is Bachoo Design Inc policy to respect your privacy regarding any information we may collect <br />from you across our website, https://nationalargo.bachoodesign.com, and other sites we own and operate.<br /><br /><br />Information we collect<br /><br />Log data<br />When you visit our website, our servers may automatically log the standard data provided by your web browser. <br />This data is considered “non-identifying information”, as it does not personally identify you on its own. <br />It may include:<br />‍<br />- Your computer’s Internet Protocol (IP) address<br />- Your browser type and version<br />- The pages you visit<br />- The time and date of your visit<br />- The time spent on each page<br />- Other details.<br /><br />Personal information<br />We may ask for personal information, such as your name and email address. This data is considered “identifying information”, <br />as it can personally identify you. We only request personal information relevant to providing you with a service, and only use <br />it to help provide or improve this service.<br /><br />How we collect information<br />‍<br />We collect information by fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting <br />it and how it will be used. You are free to refuse our request for this information, with the understanding that we may be unable <br />to provide you with some of your desired services without it.<br /><br /><br />Use of information<br />‍<br />We may use a combination of identifying and non-identifying information to understand who our visitors are, how they <br />use our services, and how we may improve their experience of our website in future. We do not disclose the specifics <br />of this information publicly, but may share aggregated and anonymised versions of this information, for example, in website <br />and customer usage trend reports.<br /><br /><br />Data processing and storage<br />‍<br />We only retain personal information for as long as necessary to provide a service, or to improve our services in future. <br />While we retain this data, we will protect it within commercially acceptable means to prevent loss and theft, as well <br />as unauthorised access, disclosure, copying, use or modification. That said, we advise that no method of electronic <br />transmission or storage is 100% secure, and cannot guarantee absolute data security.<br /><br /><br />Cookies<br />‍<br />We use “cookies” to collect information about you and your activity across our site. A cookie is a small piece of data that our website stores on your computer, and accesses each time you visit so we can understand how you use our site and serve you content based on preferences you have specified.<br />If you do not wish to accept cookies from us, you should instruct your browser to refuse cookies from our website, understanding that we may be unable to provide you with some of your desired services without them. This policy covers only the use of cookies between your computer and our website; it does not cover the use of cookies by any third-party services we use on our site.<br /><br /><br />Third-party access to information<br />‍<br />We may use third-party services for our website and marketing activity. These services may access our data solely for the purpose of performing specific tasks on our behalf. We do not share any personally identifying information with these services <br />without your explicit consent. We do not give these services permission to disclose or use any of our data for any other purpose.<br />We will refuse government and law enforcement requests for data if we believe a request is too broad or unrelated to its stated purpose. However, we may cooperate if we<br />Believe the requested information is necessary and appropriate to comply with legal process;<br />‍<br />- To protect our own rights and property;<br />- To protect the safety of the public and any person;<br />- To prevent a crime;<br />- To prevent what we reasonably believe to be illegal;<br />- To prevent what we reasonably believe to be legally actionable, or unethical activity.<br />‍<br />We do not otherwise share or supply personal information to third parties. We do not sell or rent your personal information <br />to marketers or third parties.<br /><br /><br />Children’s Privacy<br />‍<br />This website does not knowingly target or collect personal information from children. As a parent/guardian, please contact <br />us if you believe your child is participating in an activity involving personal information on our website, and you have no received <br />a notification or request for consent. We do not use your supplied contact details for marketing or promotional purposes.<br /><br /><br />Limits of our policy<br />‍<br />This privacy policy only covers Bachoo Design Inc own collecting and handling of data. We only work with partners, affiliates <br />and third-party providers whose privacy policies align with ours, however we cannot accept responsibility or liability <br />for their respective privacy practices.<br />Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content <br />and policies of those sites, and cannot accept responsibility or liability for their respective privacy practices.<br /><br /><br />Changes to this policy<br />‍<br />At our discretion, we may update this policy to reflect current acceptable practices. We will take reasonable steps to let users know about changes via our website. Your continued use of this site after any changes to this policy will be regarded as acceptance <br />of our practices around data and personal information.<br /><br /><br />Your rights and responsibilities<br />‍<br />As our user, you have the right to be informed about how your data is collected and used. You are entitled to know what data <br />we collect about you, and how it is processed. You are entitled to correct and update any personal information about you, <br />and to request this information be deleted.<br />You are entitled to restrict or object to our use of your data, while retaining the right to use your personal information for your own purposes. You have the right to opt out of data about you being used in decisions based solely on automated processing.<br />Feel free to contact us if you have any concerns or questions about how we handle your data and personal information.<br />This policy is effective as of 31 March 2023.</div>
            </div><a href="#" class="button-5 close-btn w-button"></a>
        </div>
    </div>
    <div class="privacy-modal cookie-policy main-modal">
        <div class="backdrop-filter-menu"></div>
        <div class="privacy-modal-content cookie-policy-content">
            <div class="privacy-modal-content-text">
                <h3 class="heading-13">Cookie Policy</h3>
                <div class="text-block-53">We use cookies to help improve your experience of nationalargo.com. This cookie policy is part of Bachoo Design Studio OÜ’s privacy policy, and covers the use of cookies between your device and our site.<br />If you don’t wish to accept cookies from us, you should instruct your browser to refuse cookies from nationalargo.com, <br />with the understanding that we may be unable to provide you with some of your desired content and services.<br /><br /><br />What is a cookie?<br /><br />A cookie is a small piece of data that a website stores on your device when you visit, typically containing information <br />about the website itself, a unique identifier that allows the site to recognise your web browser when you return, additional data that serves the purpose of the cookie, and the lifespan of the cookie itself.<br />Cookies are used to enable certain features (eg. logging in), to track site usage (eg. analytics), to store your user settings <br />(eg. timezone, notification preferences), and to personalise your content (eg. advertising, language).<br />Cookies set by the website you are visiting are normally referred to as “first-party cookies”, and typically only track your activity <br />on that particular site. Cookies set by other sites and companies (ie. third parties) are called “third-party cookies”, and can be used to track you on other websites that use the same third-party service.<br /><br /><br />How you can control or opt out of cookies<br />If you do not wish to accept cookies from us, you can instruct your browser to refuse cookies from our website. <br />Most browsers are configured to accept cookies by default, but you can update these settings to either refuse cookies altogether, or to notify you when a website is trying to set or update a cookie.<br />If you browse websites from multiple devices, you may need to update your settings on each individual device.<br />Although some cookies can be blocked with little impact on your experience of a website, blocking all cookies may mean <br />you are unable to access certain features and content across the sites you visit.</div>
            </div><a href="#" class="button-5 close-btn w-button"></a>
        </div>
    </div>
    <div class="div-block-28 time-cap">
        <div class="time-cap-container"><img src="./images/logo2.svg" loading="lazy" alt="" class="image-51" />
            <div class="text-block-62">Mobile website will be available soon.<br />‍<br />Meanwhile, check out desktop version!</div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=61b3254e99f137210789513e" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollToPlugin.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./lottie.js"></script>
    <script src="./main-slider.js"></script>
    <script src="./main.js?ver=1.8"></script>
    <script src="./popup.js"></script>
    <script src="./cookie.js"></script>
</body>

</html>