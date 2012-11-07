<?php

require_once "codes.php";

$error = basename($_SERVER['PHP_SELF'], '.php');
$error = $_SERVER['REDIRECT_STATUS'];
?>
<html>
    <head>
        <title><?= $error ?></title>
        <style type='text/css'>
            a {
                text-decoration: none;
            }
            a:hover {
                background-color: blue;
                color: white;
            }
            body {
                font-family: Comic Sans, Verdana, Sans-Serif;
                background-image: url(/error/source.png);
            }
            .error {
                position: absolute;
                text-align: center;
                border: 1px solid blue;
                top: 100px;
                left: 100px;
                font-size: 50pt;
                padding-left: 100px;
                padding-right: 100px;
                padding-top: 50px;
                padding-bottom: 80px;
                background-color: white;
                border-radius: 8px;
                color: #0AF;
            }
            .code {
                font-size: 100pt;
                color: #FF3D01;
            }
            .description {
                font-size: 11pt;
                color: green;
            }
            .navigation {
                left: 50px;
                right: 50px;
                position: absolute;
                font-size: small;
                background-color: #EEE;
                border: 1px solid blue;
                padding: 10px;
            }
            .ntop {
                top: 20px;
            }
            .nbottom {
                bottom: 20px;
            }
            .copyright {
                position: absolute;
                right: 20px;
                text-align: right;
                border: 0px solid red;
                display:inline;
                color: #999;
            }
        </style>
    </head>
    <body>
        <div class='navigation ntop'>
            <a href='/'>Back to main page</a> &middot;
            <a href='<?= $_SERVER['REQUEST_URI'] ?>'>Try again</a>
        </div>
        <div class='error'>
            <div class='code'>
                <?= $error ?>
            </div>
            <?= isset($errors[$error]) ? $errors[$error] : "Unknown Error" ?>
            <div class='description'>
                <?= isset($errordesc[$error]) ? $errordesc[$error] : "" ?>
            </div>
        </div>
        <div class='navigation nbottom'>
            <a href='/'>Back to main page</a> &middot;
            <a href='<?= $_SERVER['REQUEST_URI'] ?>'>Try again</a>
            <span class='copyright'>
                &copy; Philipp Gruber
            </span>
        </div>
    </body>
</html>
