<?php
include_once "Connections/cnStu.php";
include_once "time.php";
(!isset($_SESSION)) ? session_start() : "";
?>

<head>
    <title>Taichung Buffet</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap-4.0.0.css"> -->
    <link rel="stylesheet" href="css/taichung.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style type="text/css">
        /* /////////////////商品區圖片CSS//////////////// */
        .divimg {
            width: 50px;
            height: 50px;
        }

        .card-title {
            font-weight: bold;
            font-family: "標楷體";
            font-size: 2vw;
            color: brown;
        }

        .margin {
            padding-left: 0VW !important;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 5vh;
        }

        .card-text {
            font-family: "新細明體";
            font-size: 1VW;
        }

        .media {
            background: none;
            color: white;
        }

        /* /////////////////精選主廚CSS////////////////// */
        .specal {

            font-family: "標楷體";
            font-size: 40px;
            color: wheat;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .divdiv {
            margin-left: 3vw;
            border-bottom-width: thin;
            border-bottom-style: solid;
            border-bottom-color: wheat;
            width: 80vw;
        }

        /* /////////////////neverbar引導按鈕///////////// */
        .btn.btn-outline-light {
            font-size: 1.4vw;
            margin-right: 1.5vw;
            padding-left: 1.5vw;
            padding-right: 1.5vw;
        }

        /* ////////////////商品列表內_切換三中商品種類按鈕/////////// */
        .btn-group-vertical {
            background-color: none !important;
        }

        .btn.btn-secondary {
            font-size: 1.5VW;
        }

        /* ////////廚師細節內文 */
        .mt-0 {
            color: wheat;
            font-size: 3vw;
            margin-left: 5vw;
            padding-top: 10vw;
        }

        .detail {
            color: white;
            font-size: 15px;
            margin-top: 10vw;
            margin-left: 7vw;
        }

        .mr-2 {
            padding-right: 10vw;

        }

        .mr-3 {
            padding-left: 5vw;
        }

        .page-a>a {
            text-decoration: none;
            border-bottom: none;
            color: #FFF;
        }

        @-moz-keyframes loading {

            0%,
            100% {
                -moz-transform: scale(1) rotateZ(0deg);
                transform: scale(1) rotateZ(0deg);
                opacity: 1;
            }

            26% {
                -moz-transform: scale(1.1) rotateZ(12deg);
                transform: scale(1.1) rotateZ(12deg);
                opacity: .2;
            }

            76% {
                -moz-transform: scale(0.8) rotateZ(-8deg);
                transform: scale(0.8) rotateZ(-8deg);
                opacity: .6;
            }
        }

        @-webkit-keyframes loading {

            0%,
            100% {
                -webkit-transform: scale(1) rotateZ(0deg);
                transform: scale(1) rotateZ(0deg);
                opacity: 1;
            }

            26% {
                -webkit-transform: scale(1.1) rotateZ(12deg);
                transform: scale(1.1) rotateZ(12deg);
                opacity: .2;
            }

            76% {
                -webkit-transform: scale(0.8) rotateZ(-8deg);
                transform: scale(0.8) rotateZ(-8deg);
                opacity: .6;
            }
        }

        @keyframes loading {

            0%,
            100% {
                -moz-transform: scale(1) rotateZ(0deg);
                -ms-transform: scale(1) rotateZ(0deg);
                -webkit-transform: scale(1) rotateZ(0deg);
                transform: scale(1) rotateZ(0deg);
                opacity: 1;
            }

            26% {
                -moz-transform: scale(1.1) rotateZ(12deg);
                -ms-transform: scale(1.1) rotateZ(12deg);
                -webkit-transform: scale(1.1) rotateZ(12deg);
                transform: scale(1.1) rotateZ(12deg);
                opacity: .2;
            }

            76% {
                -moz-transform: scale(0.8) rotateZ(-8deg);
                -ms-transform: scale(0.8) rotateZ(-8deg);
                -webkit-transform: scale(0.8) rotateZ(-8deg);
                transform: scale(0.8) rotateZ(-8deg);
                opacity: .6;
            }
        }

        .today b {
            color: #fff;
        }

        .gotop {
            text-align: center;
            font-size: 25px;
            color: #fff;
        }

        .loader {
            overflow: hidden;
            font-size: 45px;
        }

        .loader span {
            -moz-animation: loading 1s linear infinite -0.8s;
            -webkit-animation: loading 1s linear infinite -0.8s;
            animation: loading 1s linear infinite -0.8s;
            display: inline-block;
        }

        .loader .span2 {
            -moz-animation: loading 1s linear infinite -0.2s;
            -webkit-animation: loading 1s linear infinite -0.2s;
            animation: loading 1s linear infinite -0.2s;
        }

        .loader .span3 {
            -moz-animation: loading 1s linear infinite -0.5s;
            -webkit-animation: loading 1s linear infinite -0.5s;
            animation: loading 1s linear infinite -0.5s;
        }

        .loader .span4 {
            -moz-animation: loading 1s linear infinite -1.1s;
            -webkit-animation: loading 1s linear infinite -1.1s;
            animation: loading 1s linear infinite -1.1s;
        }

        .loader .span5 {
            -moz-animation: loading 1s linear infinite -0.36s;
            -webkit-animation: loading 1s linear infinite -0.36s;
            animation: loading 1s linear infinite -0.36s;
        }

        .loader .span6 {
            -moz-animation: loading 1s linear infinite -0.65s;
            -webkit-animation: loading 1s linear infinite -0.65s;
            animation: loading 1s linear infinite -0.65s;
        }

        .loader .span7 {
            -moz-animation: loading 1s linear infinite -0.93s;
            -webkit-animation: loading 1s linear infinite -0.93s;
            animation: loading 1s linear infinite -0.93s;
        }
  
    </style>
    <!-- <script src="jquery-3.2.1.min.js" type="text/javascript"></script> -->
</head>
