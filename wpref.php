<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">        
        <meta name="author" content="WPref">
        <meta name="description" content="WPref">
        <base href="https://pages.deploy.wpref.com/new/" target="_blank">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-tap-highlight" content="no">
        
        <link rel="shortcut icon" href="favicon.ico">
        
        <title>WPref - Votre référence en hébergement WordPress</title>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
        <style>
            body {background:#fafafa;font-family: 'Ubuntu', sans-serif;}
            .contenu {width:80%;margin:0 auto;}
            .center {text-align:center;}
            h1 {font-size:4rem;font-weight:300;}
            .green {color:#8ec640;}
            .row::before, .row::after {display: table;content: "";}
            .row::after {clear: both;}
            .row .span3, .row .span4, .row .span5, .row .span6, .row .span7, .row .span8 {box-sizing: border-box;-moz-box-sizing: border-box;float: left;padding-left: 14px;padding-right: 14px;}
            .row .span3 {width: 25%;}
            .row .span4 {width: 33.33%;}
            .row .span5 {width: 41.66%;}
            .row .span6 {width: 50%;}
            .row .span7 {width: 58.33%;}
            .row .span8 {width: 66.66%;}
            @media screen and (max-width: 800px) {
            .row .span3, .row .span4, .row .span5, .row .span6, .row .span7, .row .span8 {display: block;float: none;width: 100%;}
            .row .span3:not(:first-child), .row .span4:not(:first-child), .row .span5:not(:first-child), .row .span6:not(:first-child), .row .span7:not(:first-child), .row .span8:not(:first-child) {margin-top: 14px;}
            .hide {display:none;}
            h1 {font-size:3rem;}
            .desc {font-size:2rem;}
            }
            .linkTitle {font-size:2rem; color:#474543;text-decoration:none;}
            .row .span4 {padding:20px;}
            .links {background:#f2f2f2;padding:20px;border-radius:6px;}
            a {text-decoration:none;}
            .desc {margin-bottom:-20px;font-size:3rem;color:#a9a9a9;font-weight:300;}
            .url {font-size:2rem;color:#a9a9a9;font-weight:300;}
            img {width:100%;height:auto;max-width:262px;}
            .alert {padding:40px 40px;}
            .alertBtn {border-radius:4px;background:#8ec640;padding:10px 20px;color:#fff;font-size:1.4rem;font-weight:300;}
        </style>
    </head>

    <body>
        <section class="contenu">
            <h1 class="center">Votre hébergement <a href="https://www.wpref.com" alt="WPref" target="blank"><span class="green">WPref</span></a> est actif !</h1>
            <p class="desc center">Que souhaitez-vous faire maintenant sur</p>
            <p class="url center"><a href="http://<?php if (!(preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $_SERVER['SERVER_NAME']))) echo "<a href='http://".$_SERVER['SERVER_NAME']."'>".$_SERVER['SERVER_NAME']."</a>"; ?>"><?php if (!(preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\z/', $_SERVER['SERVER_NAME']))) echo "<a href='http://".$_SERVER['SERVER_NAME']."'>".$_SERVER['SERVER_NAME']."</a>"; ?></a></p>
            <div class="row">
                <a href="#" title="Comment ajouter un WordPress sur votre hébergement WPref" class="transitions" target="blank">
                    <div class="span4 center">
                        <div class="links">
                            <img src="wp-add.png" alt="Créer un WordPress">
                            <p class="linkTitle">Créer un <span class="green">WordPress</span></p>
                        </div>
                    </div>
                </a>
                <a href="#" title="Comment cloner un WordPress sur votre compte WPref" class="transitions" target="blank">
                    <div class="span4 center">
                        <div class="links">
                            <img src="wp-clone.png" alt="Cloner un WordPress">
                            <p class="linkTitle">Cloner un <span class="green">WordPress</span></p>
                        </div>
                    </div>
                </a>
                <a href="#" title="Comment migrer un WordPress d'un autre hébergeur à WPref" class="transitions" target="blank">
                    <div class="span4 center">
                        <div class="links">
                            <img src="wp-mig.png" alt="Migrer un WordPress">
                            <p class="linkTitle">Migrer un <span class="green">WordPress</span></p>
                        </div>
                    </div>
                </a>
                <p class="center">Rendez-vous sur votre cPanel dans <strong>Créer - Cloner - Supprimer - Transférer mon WordPress</strong> pour en savoir plus.
            </div>
            <div class="alert center">
                <a href="https://www.wpref.com/support/" class="alertBtn" target="blank"><span class="hide">Une question? </span>Nous contacter !</a>
            </div>
            <div class="copyright">
                <p class="copyright center">Copyright © 2016 WPref.com, tous droits réservés.</p>
            </div>
        </section>
    </body>
</html>
