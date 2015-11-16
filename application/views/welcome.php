<!-- Hi, <strong><?php //echo $username; ?></strong>! You are logged in now. <?php //echo anchor('/auth/logout/', 'Logout'); ?> -->
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <style type="text/css">
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px
        }
    </style>
    <style type="text/css">
        @media print {
            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }
        @media screen {
            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style type="text/css">
        .gm-style {
            font-family: Roboto, Arial, sans-serif;
            font-size: 11px;
            font-weight: 400;
            text-decoration: none
        }
        .gm-style img {
            max-width: none
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="A-kCMDsGSishdpqu10V0yaeIaz9XE-XxspDDL2Hr_Cg">
    <meta name="msvalidate.01" content="2F9170B62A48647035421F0AD51F8312">
    <title>Accueil / ReNaSS</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/rss" rel="alternate" title="Réseau National de Surveillance Sismique" type="application/atom+xml">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
        body > div.container-fluid {
            padding: 15px
        }
        .sidebar-nav {
            padding: 9px 0;
        }
        footer {
            text-align: center;
        }
        fieldset > legend {
            margin-bottom: 0;
        }
        h1 {
            font-size: 30px;
            line-height: 40px;
        }
        h2 {
            font-size: 24px;
            line-height: 40px;
        }
        h3 {
            font-size: 18px;
            line-height: 40px;
        }
        h4 {
            font-size: 14px;
            line-height: 20px;
        }
        h5 {
            font-size: 12px;
            line-height: 20px;
        }
        h6 {
            font-size: 10px;
            line-height: 20px;
        }
        .logos > a {
            margin: 10px;
        }
    </style>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Tauri" rel="stylesheet" type="text/css">

    <style type="text/css">
        #eventsmap {
            height: 426px;
        }
        table tr td a:hover {
            text-decoration: none
        }
    </style>

    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/22/12a/intl/fr_ALL/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/22/12a/intl/fr_ALL/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/22/12a/intl/fr_ALL/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/22/12a/intl/fr_ALL/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/22/12a/intl/fr_ALL/stats.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/22/12a/intl/fr_ALL/controls.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.google.com/maps-api-v3/api/js/22/12a/intl/fr_ALL/marker.js"></script>
</head>

<body>
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="brand" href="/">RéNaSS</a> -->
                <span class="brand" style="color: white; font-family: 'Tauri', sans-serif;">RéNaSS</span>
                <div class="nav-collapse collapse">
                    <ul class="nav">

                        <li class="active"><a href="/"><i class="icon-home icon-white"></i> Accueil</a>
                        </li>

                        <li><a href="/les-derniers-seismes/"><i class="icon-eye-open icon-white"></i> Les derniers séismes</a>
                        </li>

                        <li><a href="/contact"><i class="icon-pencil icon-white"></i> Contact</a>
                        </li>
                        <li><a href="/contact"><i class="icon-pencil icon-white"></i> <?php if ($this->tank_auth->is_logged_in()) {echo $username; }?></a>
                        </li>
                        <li><a href="/contact"><i class="icon-pencil icon-white"></i> <?php if ($this->tank_auth->is_logged_in()) { echo anchor('/auth/logout/', 'Logout');}?></a>
                        </li>
                    </ul>
                    <p class="navbar-text pull-right"><a class="btn btn-primary" style="margin: 0px;" href="/recherche"><i class="icon-search icon-white"></i> Recherchez un évenement</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2">
                <div class="row-fluid">
                    <div class="span12 well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header"><i class="icon-map-marker"></i> Sismicité</li>
                            <li><a href="/sismicite/derniers-seismes-mondiaux">Derniers séismes mondiaux</a>
                            </li>
                            <li><a href="/sismicite/derniers-seismes-en-metropole">Derniers séismes en métropole</a>
                            </li>
                            <li class="nav-header"><i class="icon-th-list"></i> Données</li>
                            <li><a href="/donnees/signaux">Signaux</a>
                            </li>
                            <li><a href="/donnees/bulletins-et-catalogues">Bulletins / Catalogues</a>
                            </li>
                            <li class="nav-header"><i class="icon-info-sign"></i> Information</li>
                            <li><a href="/informations/reseau-national-de-surveillance-sismique">Le RéNaSS</a>
                            </li>
                            <li><a href="/informations/les-stations">Les stations</a>
                            </li>
                            <li><a href="/informations/equipe">L'équipe</a>
                            </li>
                            <li><a href="/informations/liens">Liens</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row-fluid hidden-phone">
                    <div class="span10 logos">
                        <a href="http://eost.unistra.fr" class="thumbnail">
                            <img src="/static/img/logos/eost.png" alt="École et Observatoire des Sciences de la Terre">
                        </a>
                        <a href="http://www.unistra.fr" class="thumbnail">
                            <img src="/static/img/logos/unistra.png" alt="Université de Strasbourg">
                        </a>
                        <a href="http://www.insu.cnrs.fr" class="thumbnail">
                            <img src="/static/img/logos/cnrs.png" alt="Institut National des Sciences de l'Univers">
                        </a>
                    </div>
                </div>
            </div>
            <div class="span10">

                <div class="row-fluid">
                    <div class="span7 hero-unit" id="eventsmap" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">
                        <div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
                            <div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;">
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, -138, -123);">
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 469px; top: 196px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 213px; top: 196px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 469px; top: -60px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 469px; top: 452px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 725px; top: 196px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 213px; top: 452px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 213px; top: -60px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 725px; top: -60px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 725px; top: 452px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -43px; top: 196px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -43px; top: -60px;"></div>
                                                <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -43px; top: 452px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                            <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 469px; top: 196px;">
                                                    <canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                                                </div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 213px; top: 196px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 469px; top: -60px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 469px; top: 452px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 725px; top: 196px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 213px; top: 452px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 213px; top: -60px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 725px; top: -60px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 725px; top: 452px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -43px; top: 196px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -43px; top: -60px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -43px; top: 452px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                        <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                            <div style="transform: translateZ(0px); position: absolute; left: 213px; top: 452px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms1.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=15&amp;y=12&amp;z=5&amp;token=76670" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts1.googleapis.com/vt?pb=!1m5!1m4!1i5!2i15!3i12!4i256!2m3!1e0!2sm!3i329208615!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: 469px; top: 452px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms0.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=16&amp;y=12&amp;z=5&amp;token=15230" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts0.googleapis.com/vt?pb=!1m5!1m4!1i5!2i16!3i12!4i256!2m3!1e0!2sm!3i329208615!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: -43px; top: 452px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms0.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=14&amp;y=12&amp;z=5&amp;token=7039" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts0.googleapis.com/vt?pb=!1m5!1m4!1i5!2i14!3i12!4i256!2m3!1e0!2sm!3i329207174!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: 469px; top: -60px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms0.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=16&amp;y=10&amp;z=5&amp;token=33066" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts0.googleapis.com/vt?pb=!1m5!1m4!1i5!2i16!3i10!4i256!2m3!1e0!2sm!3i329209336!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: -43px; top: 196px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms0.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=14&amp;y=11&amp;z=5&amp;token=15957" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts0.googleapis.com/vt?pb=!1m5!1m4!1i5!2i14!3i11!4i256!2m3!1e0!2sm!3i329207174!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: -43px; top: -60px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms0.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=14&amp;y=10&amp;z=5&amp;token=24875" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts0.googleapis.com/vt?pb=!1m5!1m4!1i5!2i14!3i10!4i256!2m3!1e0!2sm!3i329207174!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: 469px; top: 196px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms0.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=16&amp;y=11&amp;z=5&amp;token=24148" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts0.googleapis.com/vt?pb=!1m5!1m4!1i5!2i16!3i11!4i256!2m3!1e0!2sm!3i329209336!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: 725px; top: 452px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms1.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=17&amp;y=12&amp;z=5&amp;token=84861" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts1.googleapis.com/vt?pb=!1m5!1m4!1i5!2i17!3i12!4i256!2m3!1e0!2sm!3i329208615!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: 725px; top: -60px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms1.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=17&amp;y=10&amp;z=5&amp;token=102697" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts1.googleapis.com/vt?pb=!1m5!1m4!1i5!2i17!3i10!4i256!2m3!1e0!2sm!3i329209336!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: 213px; top: -60px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms1.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=15&amp;y=10&amp;z=5&amp;token=94506" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts1.googleapis.com/vt?pb=!1m5!1m4!1i5!2i15!3i10!4i256!2m3!1e0!2sm!3i329208615!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: 213px; top: 196px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms1.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=15&amp;y=11&amp;z=5&amp;token=85588" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts1.googleapis.com/vt?pb=!1m5!1m4!1i5!2i15!3i11!4i256!2m3!1e0!2sm!3i329208615!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                            <div style="transform: translateZ(0px); position: absolute; left: 725px; top: 196px; transition: opacity 200ms ease-out;">
                                                <img src="https://khms1.googleapis.com/kh?v=189&amp;hl=fr-FR&amp;x=17&amp;y=11&amp;z=5&amp;token=93779" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 0;">
                                                <img src="https://mts1.googleapis.com/vt?pb=!1m5!1m4!1i5!2i17!3i11!4i256!2m3!1e0!2sm!3i329209336!3m9!2sfr-FR!3sUS!5e18!12m1!1e50!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; z-index: 1;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div>
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, -138, -123);">
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                    <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                </div>
                            </div>
                            <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                <a target="_blank" href="https://maps.google.com/maps?ll=44.705399,-1.568406&amp;z=5&amp;t=h&amp;hl=fr-FR&amp;gl=US&amp;mapclient=apiv3" title="Cliquez ici pour afficher cette zone sur Google&nbsp;Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                    <div style="width: 66px; height: 26px; cursor: pointer;">
                                        <img src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                    </div>
                                </a>
                            </div>
                            <div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 146px; top: 123px; background-color: white;">
                                <div style="padding: 0px 0px 10px; font-size: 16px;">Données cartographiques</div>
                                <div style="font-size: 13px;">Données cartographiques ©2015 GeoBasis-DE/BKG (©2009), Google Imagerie ©2015 TerraMetrics</div>
                                <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                    <img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                </div>
                            </div>
                            <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 113px; bottom: 0px; width: 452px;">
                                <div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Données cartographiques</a><span style="">Données cartographiques ©2015 GeoBasis-DE/BKG (©2009), Google  Imagerie ©2015 TerraMetrics</span>
                                    </div>
                                </div>
                            </div>
                            <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Données cartographiques ©2015 GeoBasis-DE/BKG (©2009), Google Imagerie ©2015 TerraMetrics</div>
                            </div>
                            <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/fr-FR_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Conditions d'utilisation</a>
                                </div>
                            </div>
                            <div style="margin: 10px; z-index: 0; position: absolute; right: 0px; top: 0px;">
                                <table class="table table-bordered table-condensed" style="background-color: white;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="/static/img/markers/marker1.png">
                                            </td>
                                            <td><small>M=1</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/static/img/markers/marker2.png">
                                            </td>
                                            <td><small>M=2</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/static/img/markers/marker3.png">
                                            </td>
                                            <td><small>M=3</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/static/img/markers/marker4.png">
                                            </td>
                                            <td><small>M=4</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/static/img/markers/marker5.png">
                                            </td>
                                            <td><small>M=5</small>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Signaler à Google une erreur dans la carte routière ou les images" href="https://www.google.com/maps/@44.7053994,-1.5684062,5z/data=!3m1!1e3!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Signaler une erreur cartographique</a>
                                </div>
                            </div>
                            <div class="gmnoprint" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; -webkit-user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;">
                                <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
                                    <div title="Faire pivoter le plan à 90°" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; background-color: rgb(255, 255, 255);">
                                        <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                    </div>
                                    <div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);">
                                        <img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span5">
                        <div class="row-fluid">
                            <div class="span12 well">
                                <h2>Présentation</h2>
                                <p>
                                    Le site du Réseau National de Surveillance Sismique affiche les derniers séismes détectés en France métropolitaine.
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="/informations/reseau-national-de-surveillance-sismique">
                                        <i class="icon-info-sign icon-white"></i>
                                        En savoir plus
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span12 well">
                                <h2>Témoignages</h2>
                                <p>
                                    Vous avez ressenti un tremblement de terre ? Apportez votre témoignage sur le site du Bureau Central Sismologique Français.
                                </p>
                                <p>
                                    <a class="btn btn-primary" href="http://www.franceseisme.fr/formulaire/index.php?IdSei=0" target="_blank">
                                        <i class="icon-pencil icon-white"></i>
                                        Témoignez sur le site du BCSF
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <h2>Derniers tremblements de terre en France métropolitaine</h2>
                        <table class="table table-condensed table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>UTC</th>
                                    <th>Locale</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td><a href="/evenements/56493af3d384a95ab8c41de8">16/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/56493af3d384a95ab8c41de8">02:08:22</a>
                                    </td>
                                    <td><a href="/evenements/56493af3d384a95ab8c41de8">03:08:22</a>
                                    </td>
                                    <td><a href="/evenements/56493af3d384a95ab8c41de8">

  Séisme de magnitude <strong>1.3</strong>, proche de Mulhouse&nbsp;<img src="/static/img/flags/FR.png" class="twb-tooltip" alt="FRANCE" data-original-title="FRANCE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/5647c8dbd384a95ab8c41ddf">14/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/5647c8dbd384a95ab8c41ddf">23:49:14</a>
                                    </td>
                                    <td><a href="/evenements/5647c8dbd384a95ab8c41ddf">00:49:14</a>
                                    </td>
                                    <td><a href="/evenements/5647c8dbd384a95ab8c41ddf">

  Séisme de magnitude <strong>1.3</strong>, proche de Saint-Jean-de-Maurienne&nbsp;<img src="/static/img/flags/FR.png" class="twb-tooltip" alt="FRANCE" data-original-title="FRANCE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/56466c31d384a95ab8c41dd3">13/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/56466c31d384a95ab8c41dd3">23:01:31</a>
                                    </td>
                                    <td><a href="/evenements/56466c31d384a95ab8c41dd3">00:01:31</a>
                                    </td>
                                    <td><a href="/evenements/56466c31d384a95ab8c41dd3">

  Séisme de magnitude <strong>0.6</strong>, proche de San Remo&nbsp;<img src="/static/img/flags/IT.png" class="twb-tooltip" alt="ITALIE" data-original-title="ITALIE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/56464e40d384a95ab8c41dd0">13/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/56464e40d384a95ab8c41dd0">20:53:51</a>
                                    </td>
                                    <td><a href="/evenements/56464e40d384a95ab8c41dd0">21:53:51</a>
                                    </td>
                                    <td><a href="/evenements/56464e40d384a95ab8c41dd0">

  Séisme de magnitude <strong>1.3</strong>, proche de Briançon&nbsp;<img src="/static/img/flags/FR.png" class="twb-tooltip" alt="FRANCE" data-original-title="FRANCE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/56464183d384a95ab8c41dcf">13/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/56464183d384a95ab8c41dcf">19:59:06</a>
                                    </td>
                                    <td><a href="/evenements/56464183d384a95ab8c41dcf">20:59:06</a>
                                    </td>
                                    <td><a href="/evenements/56464183d384a95ab8c41dcf">

  Séisme de magnitude <strong>2.2</strong>, proche de Granollers&nbsp;<img src="/static/img/flags/ES.png" class="twb-tooltip" alt="ESPAGNE" data-original-title="ESPAGNE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/5645669ad384a95ab8c41dbf">13/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/5645669ad384a95ab8c41dbf">04:25:10</a>
                                    </td>
                                    <td><a href="/evenements/5645669ad384a95ab8c41dbf">05:25:10</a>
                                    </td>
                                    <td><a href="/evenements/5645669ad384a95ab8c41dbf">

  Séisme de magnitude <strong>1.3</strong>, proche de Briançon&nbsp;<img src="/static/img/flags/FR.png" class="twb-tooltip" alt="FRANCE" data-original-title="FRANCE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/56456624d384a95ab8c41dbe">13/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/56456624d384a95ab8c41dbe">04:23:30</a>
                                    </td>
                                    <td><a href="/evenements/56456624d384a95ab8c41dbe">05:23:30</a>
                                    </td>
                                    <td><a href="/evenements/56456624d384a95ab8c41dbe">

  Séisme de magnitude <strong>1.3</strong>, proche de Briançon&nbsp;<img src="/static/img/flags/FR.png" class="twb-tooltip" alt="FRANCE" data-original-title="FRANCE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/56455464d384a95ab8c41dbd">13/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/56455464d384a95ab8c41dbd">03:07:45</a>
                                    </td>
                                    <td><a href="/evenements/56455464d384a95ab8c41dbd">04:07:45</a>
                                    </td>
                                    <td><a href="/evenements/56455464d384a95ab8c41dbd">

  Séisme de magnitude <strong>1.1</strong>, proche de Briançon&nbsp;<img src="/static/img/flags/FR.png" class="twb-tooltip" alt="FRANCE" data-original-title="FRANCE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/56450b27d384a95ab8c41dbb">12/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/56450b27d384a95ab8c41dbb">21:55:11</a>
                                    </td>
                                    <td><a href="/evenements/56450b27d384a95ab8c41dbb">22:55:11</a>
                                    </td>
                                    <td><a href="/evenements/56450b27d384a95ab8c41dbb">

  Séisme de magnitude <strong>1.5</strong>, proche de Cluses&nbsp;<img src="/static/img/flags/FR.png" class="twb-tooltip" alt="FRANCE" data-original-title="FRANCE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                                <tr>

                                    <td><a href="/evenements/5644e007d384a95ab8c41dba">12/11/2015</a>
                                    </td>
                                    <td><a href="/evenements/5644e007d384a95ab8c41dba">18:50:59</a>
                                    </td>
                                    <td><a href="/evenements/5644e007d384a95ab8c41dba">19:50:59</a>
                                    </td>
                                    <td><a href="/evenements/5644e007d384a95ab8c41dba">

  Séisme de magnitude <strong>1.3</strong>, proche de Bourg-en-Bresse&nbsp;<img src="/static/img/flags/FR.png" class="twb-tooltip" alt="FRANCE" data-original-title="FRANCE"> 
    <span class="label label-success twb-tooltip" data-original-title="Événement validé par un analyste">Validé</span>
  </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <hr>

        <footer>
            <p>
                <a href="/">Réseau National de Surveillance Sismique</a>
                <i class="icon-minus"></i>
                <a href="http://eost.unistra.fr">École et Observatoire des Sciences de la Terre</a>
                <i class="icon-minus"></i>
                <a href="http://www.insu.cnrs.fr">Institut National des Sciences de l'Univers</a>
                <i class="icon-minus"></i>
                <a href="http://www.unistra.fr">Université de Strasbourg</a>
            </p>
            <p>
                <small>
				<a href="/rss">Flux RSS</a>
				<i class="icon-minus"></i>
				<a href="http://www.glyphicons.com">Icônes par Glyphicons</a>
			</small>
            </p>
        </footer>
        <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $(".twb-tooltip").tooltip();
            })
        </script>

        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="/static/js/events.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#eventsmap").eventsMap({
                    'url': "/api/json?latitude=46.6&limit=10&longitude=1.9&maxradius=9&orderby=time"
                });
            });
        </script>

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-30290538-3']);
            _gaq.push(['_trackPageview']);

            setTimeout("_gaq.push(['_trackEvent', '15_seconds', 'read'])", 15000);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </div>

</body>

</html>
