<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if( extension_loaded('newrelic') ) { echo newrelic_get_browser_timing_header(); } ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(!empty($DynamicMetaPageTitle)) echo $DynamicMetaPageTitle;?></title>
<link rel="stylesheet" href="<?=CSS_PATH?>talent-main.css" type="text/css" />

<link rel="stylesheet" href="<?=CSS_PATH?>rec1.css" type="text/css" />

<?php
require_once(TRACKING_FILE_GOOGLE);
?>
</head>
<body style="background:#e9e9e9;">

<div id="header-wrapper"><div id="rec-wrapper" >
<div id="rec-header">
<div id="logo-notif">  <img src="<?=SMALL_IMAGE_PATH?>logo-Rec.jpg" width="156" height="31" alt="Talent.me" title="Talent.me" /></div></div></div>

</div>
<style type="text/css">
body {
  
    font: 15px/20px Arial,sans-serif !important;
}
.sig_sml_sig {
    width: 60%;
}
#rec-left_menu ul li a{ color:#333;padding: 8px 24px 8px 11px;}
#rec-left_menu ul li a:hover{ cursor:default; color:#333;padding: 8px 24px 8px 11px;}
input, checkbox{ margin: 0 3px;}
.mail_checkbox  { margin-top: 7px;}
.add_tal{ padding: 5px 5px 5px 5px; margin: 0 5px 5px 0;
 border: 1px solid #ccc; position:relative; float:left;
 color:#000;-webkit-border-radius: 5px; width: auto; -moz-border-radius: 5px;  -khtml-border-radius: 5px;  border-radius: 5px;
 text-decoration:none; display:inline; background:#dddddd url(images/tal-bg.jpg) repeat-x;
 }
 .add_tal:hover{ padding: 5px 5px 5px 5px; margin: 0 5px 5px 0;
 border: 1px solid #ccc; position:relative; float:left;
 color:#000;-webkit-border-radius: 5px; width: auto; -moz-border-radius: 5px;  -khtml-border-radius: 5px;  border-radius: 5px;
 text-decoration:none; display:inline; background:#d8d8d8 url(images/add-T.jpg) repeat-x;
  
}
.add_T{padding: 5px 5px 5px 5px;-moz-border-radius: 3px 3px 3px 3px;
 border: 1px solid #CACACA;
 color:#999;position:relative; float:left;
 text-decoration:none;
 background: #f8f8f8;-webkit-border-radius: 5px; width: auto; -moz-border-radius: 5px;  -khtml-border-radius: 5px;  border-radius: 5px;margin: 0 5px 5px 0;
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