<?php
require_once ("/var/www/includes/config/global_constants.php");
require_once (FILE_GLOBAL_FUNCTIONS);
require_once (FILE_SECURITY);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if( extension_loaded('newrelic') ) { echo newrelic_get_browser_timing_header(); } ?>
<link rel="shortcut icon" type="image/ico" href="<?=SITE_URL?>/favicon.ico" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?=CSS_PATH?>talent-main.css"  />
<link rel="stylesheet" href="<?=CSS_PATH?>rec1.css" type="text/css" />
<title><?=$DynPgTitle?></title>
<style type="text/css">

.sig_sml_sig {
    width: 60%;
}
@font-face {
  font-family: 'FrankRegular';
  src: url('https://talent.me/recruit/includes/fonts/frank-regular-webfont.eot');
  src: url('https://talent.me/recruit/includes/fonts/frank-regular-webfont.eot?#iefix') format('embedded-opentype'), url('https://talent.me/recruit/includes/fonts/frank-regular-webfont.woff') format('woff'), url('https://talent.me/recruit/includes/fonts/frank-regular-webfont.ttf') format('truetype'), url('https://talent.me/recruit/includes/fonts/frank-regular-webfont.svg#FrankRegular') format('svg');
  font-weight: normal;
  font-style: normal;
}

@font-face {
    font-family: 'DINBold';
    src: url('https://talent.me/recruit/includes/fonts/din-bold-webfont.eot');
    src: url('https://talent.me/recruit/includes/fonts/din-bold-webfont.eot?iefix') format('eot'),
         url('https://talent.me/recruit/includes/fonts/din-bold-webfont.woff') format('woff'),
         url('https://talent.me/recruit/includes/fonts/din-bold-webfont.ttf') format('truetype'),
         url('https://talent.me/recruit/includes/fonts/din-bold-webfont.svg#webfontP8nfTlwg') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'DINMedium';
    src: url('https://talent.me/recruit/includes/fonts/din-medium-webfont.eot');
    src: url('https://talent.me/recruit/includes/fonts/din-medium-webfont.eot?iefix') format('eot'),
         url('https://talent.me/recruit/includes/fonts/din-medium-webfont.woff') format('woff'),
         url('https://talent.me/recruit/includes/fonts/din-medium-webfont.ttf') format('truetype'),
         url('https://talent.me/recruit/includes/fonts/din-medium-webfont.svg#webfonteq6wpgx5') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'DINLight';
    src: url('https://talent.me/recruit/includes/fonts/din-light-webfont.eot');
    src: url('https://talent.me/recruit/includes/fonts/din-light-webfont.eot?#iefix') format('eot'),
         url('https://talent.me/recruit/includes/fonts/din-light-webfont.woff') format('woff'),
         url('https://talent.me/recruit/includes/fonts/din-light-webfont.ttf') format('truetype'),
         url('https://talent.me/recruit/includes/fonts/din-light-webfont.svg#webfontf23i6Xb7') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'DINRegular';
    src: url('https://talent.me/recruit/includes/fonts/din-regular-webfont.eot');
    src: url('https://talent.me/recruit/includes/fonts/din-regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('https://talent.me/recruit/includes/fonts/din-regular-webfont.woff') format('woff'),
         url('https://talent.me/recruit/includes/fonts/din-regular-webfont.ttf') format('truetype'),
         url('https://talent.me/recruit/includes/fonts/din-regular-webfont.svg#DINRegular') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'ScoreBoardRegular';
    src: url('https://talent.me/recruit/includes/fonts/scoreboard-webfont.eot');
    src: url('https://talent.me/recruit/includes/fonts/scoreboard-webfont.eot?#iefix') format('embedded-opentype'),
         url('https://talent.me/recruit/includes/fonts/scoreboard-webfont.woff') format('woff'),
         url('https://talent.me/recruit/includes/fonts/scoreboard-webfont.ttf') format('truetype'),
         url('https://talent.me/recruit/includes/fonts/scoreboard-webfont.svg#ScoreBoardRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}
</style>

<?php require_once(TRACKING_FILE_GOOGLE);?>
</head>
<body class="bodyFont"> 
<div id="fb-root"></div>

<div id="header-wrapper"><div id="rec-wrapper">
<div id="rec-header">
<div id="logo-notif"><a href="<?=SITE_URL?>"><img src="<?=SMALL_IMAGE_PATH?>logo.png" width="155" height="32" alt="Talent.me" title="Talent.me" /></a>
</div>


<div class="floatRight" style="padding-top:18px; padding-right:0px">

<iframe src="//www.facebook.com/plugins/like.php?app_id=<?=FB_APP_ID?>&amp;href=http%3A%2F%2Fwww.facebook.com%2Fapps%2Fapplication.php%3Fid%3D202781586434560&amp;send=false&amp;layout=button_count&amp;width=83&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:83px; height:21px;" allowTransparency="true"></iframe>

</div></div>




</div></div>

<!-- Header End -->