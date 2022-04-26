<!DOCTYPE html>
<html lang="en">
<?php
    function get_gravatar( $email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array() ) {
        $url = 'https://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
        return $url;
    }
    $ame_json = file_get_contents("https://git.tar.black/api/v4/projects/43/repository/contributors?sort_by=commits&sort=desc");
    $jade_json = file_get_contents("https://git.tar.black/api/v4/projects/51/repository/contributors?sort_by=commits&sort=desc");
    $mal_json = file_get_contents("https://git.tar.black/api/v4/projects/52/repository/contributors?sort_by=commits&sort=desc");
    $branding_json = file_get_contents("https://git.tar.black/api/v4/projects/44/repository/contributors?sort_by=commits&sort=desc");
    $ame_obj = json_decode($ame_json);
    $jade_obj = json_decode($jade_json);
    $mal_obj = json_decode($mal_json);
    $branding_obj = json_decode($branding_json);
    $x = 0;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Crystal Linux</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#a900ff">
    <meta name="apple-mobile-web-app-title" content="Crystal Linux">
    <meta name="application-name" content="Crystal Linux">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <!-- discord embed -->
    <!-- COMMON TAGS -->
    <meta charset="utf-8">
    <title>Crystal Linux</title>
    <!-- Search Engine -->
    <meta name="description" content="Crystal Linux is a brand new Arch Linux based distribution. Completely beginner friendly, easy to use, and powerful.">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Crystal - Official Site">
    <meta itemprop="description" content="Crystal Linux is a brand new Arch Linux based distribution. Completely beginner friendly, easy to use, and powerful.">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Crystal - Official Site">
    <meta name="og:description" content="Crystal Linux is a brand new Arch Linux based distribution. Completely beginner friendly, easy to use, and powerful.">
    <meta name="og:url" content="https://getcryst.al">
    <meta name="og:site_name" content="Crystal Linux Site">
    <meta name="og:type" content="website">
    <meta content="#a900ff" data-react-helmet="true" name="theme-color" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta id="image-src" name="twitter:image:src" content="https://git.tar.black/crystal/branding/-/raw/main/banners/sitebanner.png">
    <meta id="discord" name="twitter:image" content="https://git.tar.black/crystal/branding/-/raw/main/banners/sitebanner.png">    
    <meta id="embed-image" property="og:image" content="https://git.tar.black/crystal/branding/-/raw/main/banners/sitebanner.png">
    <meta property="og:url" content="https://git.tar.black/crystal/branding/-/raw/main/banners/sitebanner.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="og:title" content="media">
    <meta name="og:description" content="media">
</head>

<body style="font-family: Inter, sans-serif;background: #1c1c1c;color: #eee;">
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="padding-top: 6px;padding-bottom: 6px;background: transparent;">
        <div class="container"><a class="navbar-brand" href="#" style="color: #eee;"><img src="assets/img/crystal-logo-minimal.png" width="24" height="24" style="vertical-align:middle;">&nbsp;Crystal Linux</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="border-width: 0px;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="filter: invert(100%) sepia(4%) saturate(2469%) hue-rotate(188deg) brightness(110%) contrast(87%);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="https://git.tar.black/crystal" target="_blank" style="pointer-events: auto;">GitLab</a></li>
                    <li class="nav-item"><a class="nav-link active" href="https://discord.gg/2b47CAKNAx" target="_blank" style="pointer-events: auto;">Discord</a></li>
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#" style="border-radius: 6px;background: #a165bf;filter: drop-shadow(0px 5px 5px rgba(161, 101, 191, 0.2));" onclick="window.open(&quot;https://repo.getcryst.al/crystal-latest.iso&quot;);">Download</a></span>
            </div>
        </div>
    </nav>
    <section class="highlight-clean" style="background: transparent;margin-top: 40px;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: #c3c3c3;margin-bottom: 10px;">An Arch Based Distribution<br></h2>
                <p class="text-center" style="margin-bottom: 0px;">Crystal Linux is a brand new Arch Linux based distribution. Completely beginner friendly, easy to use, and powerful.</p>
            </div>
            <div class="buttons" style="margin-top: -5px;">
                <a class="btn btn-primary text-capitalize" role="button" href="#" style="font-family: Inter, sans-serif;border-radius: 6px;font-weight: 500;font-size: 15px;background: #a165bf;filter: drop-shadow(0px 5px 5px rgba(161, 101, 191, 0.2));" onclick="window.open(&quot;https://repo.getcryst.al/crystal-latest.iso&quot;);">Download</a>
                <button class="btn btn-light text-capitalize" type="button" style="border-radius: 6px;font-size: 15px;font-weight: 500;font-family: Inter, sans-serif;letter-spacing: 0.2px;filter: drop-shadow(0px 5px 5px rgba(221, 221, 221, 0.2));" onclick="window.open(&quot;https://git.tar.black/crystal&quot;);">Gitlab</button>
                </div>
            <div class="card-group" style="margin-top: 100px;filter: drop-shadow(0px 0px 10px rgba(45, 45, 46, 0.2));">
                <div class="card mobile-compat-card" style="border-radius: 6px;background: #202021;margin-right: 5px;">
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: Inter, sans-serif;color: rgba(238,238,238,0.6);margin-bottom: 2px;">Why Crystal?</h4>
                        <p class="card-text" style="color: rgb(142,143,143);margin-bottom: 16px;">What's so different about Crystal compared to other distributions?</p>
                        <div>
                            <ul class="list-group">
                                <li class="list-group-item" style="background: transparent;border-width: 0px;"><span style="color: rgb(142,143,143);"><i class="fa fa-check"></i>&nbsp;Easy to use package manager</span></li>
                                <li class="list-group-item" style="background: transparent;border-width: 0px;"><span style="color: rgb(142,143,143);"><i class="fa fa-check"></i>&nbsp;Beginner Friendly</span></li>
                                <li class="list-group-item" style="background: transparent;border-width: 0px;"><span style="color: rgb(142,143,143);"> <i class="fa fa-check"></i>&nbsp;No BS errors</span></li>
                                <li class="list-group-item" style="background: transparent;border-width: 0px;"><span style="color: rgb(142,143,143);"> <i class="fa fa-check"></i>&nbsp;Easy to install</span></li>
                            </ul>
                        </div>
                        <div></div>
                    </div>
                </div>
                <div class="card mobile-compat-card" style="border-radius: 6px;background: #202021;margin-left: 5px;">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 2px;color: rgba(238,238,238,0.6);">Contributors</h4>
                        <p class="card-text" style="color: rgb(142,143,143);">Top five contributors on crystal/ame, jade, branding, and malachite sorted by top commits.</p>
                        <div id="ame" style="margin-bottom: 10px;float:left;margin-right:10px">
                            <p style="margin-bottom: 5px;font-size: 14px;">crystal/ame&nbsp;contributors<br></p>
                            <?php
                                while($x != 5){
                                    echo('<img style="border-radius: 6px;margin-right: 10px;" width="32" height="32" alt="'. $ame_obj[$x]->email. "" .'" src="'. get_gravatar($ame_obj[$x]->email, 30, "identicon", "r", false) .'">');
                                    $x++;
                                }
                            ?>
                        </div>
                        <div id="jade" style="margin-bottom: 10px;">
                            <p style="margin-bottom: 5px;font-size: 14px;">crystal/jade contributors<br></p>
                            <?php
                                $x = 0;
                                while($x != 5){
                                    echo('<img style="border-radius: 6px;margin-right: 10px;" width="32" height="32" alt="'. $jade_obj[$x]->email. "" .'" src="'. get_gravatar($jade_obj[$x]->email, 30, "identicon", "r", false) .'">');
                                    $x++;
                                }
                            ?>
                        </div>
                        <div id="mal" style="float:left;margin-right:10px">
                            <p style="margin-bottom: 5px;font-size: 14px;">crystal/malachite&nbsp;contributors<br></p>
                            <?php
                                $x = 0;
                                while($x != 5){
                                    echo('<img style="border-radius: 6px;margin-right: 10px;" width="32" height="32" alt="'. $mal_obj[$x]->email. "" .'" src="'. get_gravatar($mal_obj[$x]->email, 30, "identicon", "r", false) .'">');
                                    $x++;
                                }
                            ?>
                        </div>
                        <div id="jade" style="margin-bottom: 10px;">
                            <p style="margin-bottom: 5px;font-size: 14px;">crystal/branding contributors<br></p>
                            <!--These two are hard coded as these are the main contributors/people who made the branding-->
                            <img style="border-radius: 6px;margin-right: 5px;" width="32" height="32" alt="Merlă Octavian" src="https://git.tar.black/uploads/-/system/user/avatar/15/avatar.png?width=400">
                            <img style="border-radius: 6px;margin-right: 5px;" width="32" height="32" alt="54361578+jaasio@users.noreply.github.com" src="https://secure.gravatar.com/avatar/f0da7fe8afd2d394012e36dbc55059d4?s=800&d=identicon">
                            <img style="border-radius: 6px;margin-right: 5px;" width="32" height="32" alt="lausen@tar.black" src="https://git.tar.black/uploads/-/system/user/avatar/12/avatar.png?width=400">
                            <?php
                                $x = 0;
                                while($x != 2){
                                    echo('<img style="border-radius: 6px;margin-right: 10px;" width="32" height="32" alt="'. $branding_obj[$x]->email. "" .'" src="'. get_gravatar($branding_obj[$x]->email, 30, "identicon", "r", false) .'">');
                                    $x++;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mobile-compat-card" style="border-radius: 6px;background: #202021;margin-top:20px;margin-bottom:20px">
                <div class="card-body">
                    <h4 class="card-title" style="margin-bottom: 2px;color: rgba(238,238,238,0.6);">We 💖 open source software</h4>
                    <p class="card-text" style="color: rgb(142,143,143);">Basically everything that Crystal Linux has coded/made is completely open source for anyone to see. Why not contribute to the project?</p>
                    <a class="btn btn-primary text-capitalize" role="button" href="#" style="font-family: Inter, sans-serif;border-radius: 6px;font-weight: 500;font-size: 15px;background: #a165bf;filter: drop-shadow(0px 5px 5px rgba(161, 101, 191, 0.2));border:none;outline:none" onclick="window.open(&quot;https://git.tar.black/crystal/&quot;);">Contribute on Gitlab</a>
                </div>
            </div>
            <footer class="text-center">
                <div class="mobile-footer-fix" style="position: fixed;bottom: 0;margin-bottom: 10px;"><span class="text-muted" style="margin-right: 10px;">Copyright (c) 2022 Crystal Linux</span><a class="link-secondary" href="https://git.tar.black/crystal/site" style="text-decoration:none" target="_blank"><i class="fab fa-gitlab"></i>&nbsp;Source Code</a></div>
            </footer>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
