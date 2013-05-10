<?php require_once(FILE_GET_PROFILE_CONTACTS); ?>
<style>
.share-div h2 {font: 27px/30px 'DINBold',Arial,sans-serif; text-transform:none;}
.bodydintxt{text-transform:none;}
</style>
<div id="rec-left">
<?php if($profileStat =="mprofile" ) { ?>
<div class="clear leftphoto"><a href="<?=URL_MEMBER_PROFILE?><?=$funcslug?>"><img onerror="this.src='<?=SMALL_IMAGE_PATH?>no-image.gif'" src="<?=USER_PICS_AMAZON_PATH?><?=$userid?><?=USER_PIC_LARGE?>.jpg?<?=rand(1,1000)?>" alt="<?php echo html_entity_decode($SignatureArr[0],ENT_QUOTES,"utf-8"); ?> <?php echo html_entity_decode($SignatureArr[1],ENT_QUOTES,"utf-8"); ?>"   /></a>
<?php
	//$lnUserId this variable value is getting from the modurl2.php
	if(!empty($lnUserId)) {
?>
<div class="padT10 padL10"><a target="_blank" rel="nofollow" style="color:#333; text-decoration: none;" href="http://www.linkedin.com/in/<?=$lnUserId?>">Profile Data from <img height="18" width="27" align="absmiddle" style="margin-top: -3px;" alt="Linkedin Profile" src="<?=SMALL_IMAGE_PATH?>/linkedin-imp.jpg"></a></div>
<?php 
	}
?>

</div>
<div style="height: 45px;display:none;" class="sig_sml_sig" ><a class="smallSigTxt bold" href="<?=URL_MEMBER_PROFILE?><?=$funcslug?>"><?php echo html_entity_decode($SignatureArr[0],ENT_QUOTES,"utf-8"); ?> <?php echo html_entity_decode($SignatureArr[1],ENT_QUOTES,"utf-8"); ?></a><br />
<a class="smallfont" href="<?=SITE_URL?>/edit/profile">Edit My Profile</a></div>
<div class="clearfix">

<div id="left_menu">
<?php require_once(FILE_EDIT_PROFILE_NAVIGATION); ?> 
</div>


</div>

<?php } ?>

<?php if($profileStat=="fprofile") { ?>
<div class="clear leftphoto">
  <a href="<?=URL_MEMBER_PROFILE?><?=$funcslug?>"><img onerror="this.src='<?=SMALL_IMAGE_PATH?>no-image.gif'" src="<?=USER_PICS_AMAZON_PATH?><?=$userid?><?=USER_PIC_LARGE?>.jpg?<?=rand(1,1000)?>"  alt="<?=$userFullName?>"  /></a>
</div>
<div class="clearfix">



<?php
	//$lnUserId this variable value is getting from the modurl2.php
	if(!empty($lnUserId)) {
	
		$lnSql="SELECT /* /var/www/includes/leftbar_member.php */ public_profile_url FROM ".TBL_LN_MASTER." WHERE user_id='$userid'  LIMIT 1 ";
		
		if(DEBUG_MODE) {
		echo ("<pre>");
		var_dump ($lnSql);
		echo ("</pre>");
	}
	
	$lnRs = mysqli_query($objConnection, $lnSql);	
	
	$lnRes=mysqli_fetch_object($lnRs);
	
	$lnUrl=$lnRes->public_profile_url;
	if(!empty($lnUrl)) {
?>
<div class="padT10 padL10"><a target="_blank" rel="nofollow" style="color:#333; text-decoration: none;" href="<?=$lnUrl?>">Profile Data from <img height="18" width="27" align="absmiddle" style="margin-top: -3px;" alt="Linkedin Profile" src="<?=SMALL_IMAGE_PATH?>linkedin-imp.jpg" ></a></div>
<?php 
		}
		mysqli_free_result($lnRs);
	}
?>



<div id="rec-left_menu">
<ul>
<li id="msgleft-4"><a  href="javascript:void(0);" onclick="showMsgDiv();">Send a Message</a></li>
<?php
$userEndorseCnt='';
$EndorseChkSQL = " SELECT  /* /var/www/html/includes/leftbar_member.php  BABU */ 
						  	 endorsement_id,
							 endorsement_comment  
					   FROM
				 		     ".TBL_ENDORSEMENTS."
   					   WHERE
				 		     from_user_id='".$intAuthenticatedUserID."'
   				 	   AND
				 		     to_user_id='".$userid."'
				 	   AND
				 		     is_active='yes'						
				 ";
	
	if(DEBUG_MODE) {
		echo ("<pre>");
		var_dump ($EndorseChkSQL);
		echo ("</pre>");
	}
	
	$EndorseRs = mysqli_query($objConnection, $EndorseChkSQL);
	if(mysqli_num_rows($EndorseRs)==0) {
		$userEndorseCnt='';
?>	
<?php //<li><a href="javascript:void(0);" class="endrose" onclick="showEndorseDiv(<?=$userid? >,'< ?=$userFullName? >');">Endorse</a></li> ?>


<?php } else { 
		//<li><a href="<?=SITE_URL? >/endorsements-for/< ? =$funcslug ? >" class="endrose" >Already endorsed</a></li><?php 
$EndorseRes=mysqli_fetch_object($EndorseRs);
$userEndorseCnt=$EndorseRes->endorsement_comment;
} 
mysqli_free_result($EndorseRs);
?>
<li><a href="<?=SITE_URL?>/endorsements-for/<?=$funcslug?>" >View Endorsements</a></li>
</ul>



<div class="leftbold">
<?php
if($userEndorseCnt=='') { echo 'Endorse'; } else { echo 'Endorsements'; } ?></div>
<div class="clear padT10 padL10">
<?php 
if($userEndorseCnt=='') {
?>
  <textarea name="endorse_comment"  id="endorse_comment" cols="" rows="7" style="width:87%;  padding:2px; border:1px solid #bec7d8;  font-size:11px;" ></textarea>
<?php
}
else
{
echo nl2br(html_entity_decode($userEndorseCnt,ENT_QUOTES,"utf-8"));
}  

if($userEndorseCnt=='')
{
?><div class="floatRight padT10" style="padding-right:15px;"><input type="button" value="Endorse" class=" primarysmall" id="endorseButton"  name="endorseButton"  onclick="sendEndorseFrnds()" style="width:auto; font-size:11px;padding: 4px;"></div>
<div id="msgEx<?php echo $userid; ?>" style="display:''; padding-top:10px; width:92px;cursor:pointer;" onclick="showEndorseEx('<?php echo $userFullName; ?>',<?php echo $userid; ?>)"><a href="javascript:void(0);" class="smallfont">See an Example</a></div>

<?php
}
?>
<div class="clear"></div></div>


</div>


<div class="clearfix" style="display:none">
<div class="leftbold">
Dashboard</div>
<ul>
<li><a href="#">100  Connections</a></li>
<li><a href="#">100 Companies</a></li>
<li><a href="#">6    Endorsement Requests</a></li>

</ul>
</div>


<div>

<?php if(empty($allConnectionFlag)) { fn_profile_getContacts($userid,5); } ?>
<ul class="padL10 padT10"><li id="infriendDiv" style="list-style:none;"><a href="Javascript:void(0)" onclick="CallUnfriend()" >Remove from Connections</a></li></ul>
<div class="clearfix"></div>
</div>



</div>
<?php } ?>


<?php if($profileStat=="oprofile") { 

//Connections Class
require_once (PHP_CONNECTION_CLASS);
$objContact = new CONNECTIONS($objConnection);

$objContact->LoginUserId 	= 	$CookieUserId;
$ShowLink = $objContact->fn_Show_Add_Connection($userid);

if($ShowLink == '1')
{
$ShowLink = '<a href="Javascript:void(0)" onclick="CallACdiv();" class="addconnection">Add as a Connection</a>';
$ShowLinkJs = true;
}
else
$ShowLink = $ShowLink;

$ProfileUserName = $userFullName;
?>
<div class="clear leftphoto">
  <a href="<?=URL_MEMBER_PROFILE?><?=$funcslug?>"><img onerror="this.src='<?=SMALL_IMAGE_PATH?>no-image.gif'" src="<?=USER_PICS_AMAZON_PATH?><?=$userid?><?=USER_PIC_LARGE?>.jpg?<?=rand(1,1000)?>"  alt="<?=$userFullName?>" /></a>
</div>
<div class="clearfix">


<?php
	//$lnUserId this variable value is getting from the modurl2.php
	if(!empty($lnUserId)) {
	
		$lnSql="SELECT /* /var/www/includes/leftbar_member.php */ public_profile_url FROM ".TBL_LN_MASTER." WHERE user_id='$userid'  LIMIT 1 ";
		
		if(DEBUG_MODE) {
		echo ("<pre>");
		var_dump ($lnSql);
		echo ("</pre>");
	}
	
	$lnRs = mysqli_query($objConnection, $lnSql);	
	
	$lnRes=mysqli_fetch_object($lnRs);
	
	$lnUrl=$lnRes->public_profile_url;
	if(!empty($lnUrl)) {
?>
<div class="padT10 padL10"><a target="_blank" rel="nofollow" style="color:#333; text-decoration: none;" href="<?=$lnUrl?>">Profile Data from <img height="18" width="27" align="absmiddle" style="margin-top: -3px;" alt="Linkedin Profile" src="<?=SMALL_IMAGE_PATH?>linkedin-imp.jpg" ></a></div>
<?php 
		}
		mysqli_free_result($lnRs);
	}
?>



<div id="rec-left_menu" style="margin-bottom:0;padding-bottom:0;" >
<ul>
<li id="LinkDiv"><? echo $ShowLink;?></li>
</ul>

<!--Send Contact Request Div-->
<?php if(!empty($ShowLinkJs)) {?>
<div  class="share-div" style="position: absolute; z-index: 999; left:200px; width: 650px; top:10px; display:none;" id="AcBox">
<div style="background:#FFF" >
<div style="position:absolute; right:-8px; top: -8px;"><a href="javascript:void(0);" onClick="AcDivCancel();"><img src="<?=SMALL_IMAGE_PATH?>close-r.png" width="22" height="23" alt="Close" /></a>
</div>

  <h2>Send <?=$ProfileUserName?> a Connection </h2><div class="pad">
  <div class="clearfix  bodydintxt">  
    <?=$ProfileUserName?>  will have to confirm your request. Please only send this request if you know personally.</div>
  <div class="clear padT10 bodydintxt">How do you know <?=$ProfileUserName?>?<br />
  <input type="hidden" id="reqContactId" value="<?=$userid?>">
<select style="width:100%;border:1px solid #BDC7D8" onchange="ChosenDD(this.value)" class="rec-sel" id="reqRelationType" name="reqRelationType">
	<option value="1" >Facebook Contact</option>
	<option value="2">Linkedin Connection</option> 
	<option value="3" selected="selected">Colleague</option>  
	<option value="4">Classmate</option>  
	<option value="5">Friend</option>  
	<option value="6">We have done business together</option>
	<option value="7">Met in a conference or event</option>  
	<option value="8">Traveled together</option>  
	<option value="9">Other</option>
</select>
  
  <br>
</div>

<div class="clear padT10 " id="OptDiv" style="display:;"><span class="bodydintxt" id="SubMsg">Enter the name of the company </span>
<span class="graytxt normaltxt"> (Optional)</span><br /><input type="text" maxlength="150" class="rec-input" id="reqRelationName" name="reqRelationName" style="width: 596px;" /></div>

<div class="clearfix padT10 "> 
  <span class="bodydintxt">Message</span><br />
<span><textarea onfocus="if(this.value == 'Include a personal message...')this.value='';" id="reqMessage" name="reqMessage" placeholder="Include a personal message..." title="Include a personal message..." class="rec-txtarea" style="width: 608px;">Include a personal message...</textarea></span>
</div>

    <div class="clearfix padT10"><input type="button" class="primaryBtn" value="Add as connection" onclick="SendContactReq()" /> &nbsp;&nbsp;<a href="Javascript:void(0)" onClick="AcDivCancel()" class="normalTxt">Cancel</a></div>

</div><div class="clear">&nbsp;</div></div>
<?php }?>
<!--Send Contact Request Div-->
</div>
</div>
<div class="clearfix" style="display:none">
<div class="leftbold">
Dashboard</div>
<ul>
<li><a href="#">100  Connections</a></li>
<li><a href="#">100 Companies</a></li>
<li><a href="#">6    Endorsement Requests</a></li>

</ul>
</div>

<div>
<?php if(empty($allConnectionFlag)) {  fn_profile_getContacts($userid,5); } ?>


</div>



</div>
<?php } ?>

<?php if($profileStat=="publicprofile") { ?>


<div class="clear leftphoto">
  <a href="<?=URL_MEMBER_PROFILE?><?=$funcslug?>"><img onerror="this.src='<?=SMALL_IMAGE_PATH?>no-image.gif'" src="<?=USER_PICS_AMAZON_PATH?><?=$userid?><?=USER_PIC_LARGE?>.jpg?<?=rand(1,1000)?>"  alt="<?=$userFullName?>" title="<?=$userFullName?>" /></a>
</div>

<div class="clearfix">

<?php
	//$lnUserId this variable value is getting from the modurl2.php
	if(!empty($lnUserId)) {
	
		$lnSql="SELECT /* /var/www/includes/leftbar_member.php */ public_profile_url FROM ".TBL_LN_MASTER." WHERE user_id='$userid'  LIMIT 1 ";
		
		if(DEBUG_MODE) {
		echo ("<pre>");
		var_dump ($lnSql);
		echo ("</pre>");
	}
	
	$lnRs = mysqli_query($objConnection, $lnSql);	
	
	$lnRes=mysqli_fetch_object($lnRs);
	
	$lnUrl=$lnRes->public_profile_url;
	if(!empty($lnUrl)) {
?>
<div class="padT10 padL10"><a target="_blank" rel="nofollow" style="color:#333; text-decoration: none;" href="<?=$lnUrl?>">Profile Data from <img height="18" width="27" align="absmiddle" style="margin-top: -3px;" alt="Linkedin Profile" src="<?=SMALL_IMAGE_PATH?>linkedin-imp.jpg" ></a></div>
<?php 
		}
		mysqli_free_result($lnRs);
	}
?>


<div class="clearfix" style="display:none;">
<div class="leftbold">
Dashboard</div>
<ul>
	<li><a href="#">100  Connections</a></li>
	<li><a href="#">100 Companies</a></li>
</ul>
</div>


<div class="clearfix columnR" style="width:auto">
<div class="leftbold">
View <?=$userFullName?>'s Profile to:</div>
<ul>
<li>Endorse <?=$userFullName?></li>
<li>Connect  with 
  <?=$userFullName?></li>
<li>Tap into  <?=$userFullName?>'s network</li>
</ul>
<div class="padT10"><input type="button" name="button" id="button2" value="View Full Profile" class="bluSmallBtn"  onclick="window.location.href='<?=SITE_URL?>';"  />
</div>
</div>
</div>


<?php } ?>

<?php
if($profileStat=="home_profile") { 
?>
<div class="sig_sml">
<div class="sig_sml_pic"><a href="<?=URL_MEMBER_PROFILE?><?=$funcslug?>"><img onerror="this.src='<?=SMALL_IMAGE_PATH?>no-image-s.gif'" src="<?=USER_PICS_AMAZON_PATH?><?=$userid?><?=USER_PIC_SMALL?>.jpg?<?=rand(1,10000)?>" alt="<?php echo html_entity_decode($SignatureArr[0],ENT_QUOTES,"utf-8"); ?> <?php echo html_entity_decode($SignatureArr[1],ENT_QUOTES,"utf-8"); ?>" border="0" width="50" /></a>

<?php
	//$lnUserId this variable value is getting from the modurl2.php
	if(!empty($lnUserId)) {
?>
<div class="padT10 padL10"><a target="_blank" rel="nofollow" style="color:#333; text-decoration: none;" href="http://www.linkedin.com/in/<?=$lnUserId?>">Profile Data from <img height="18" width="27" align="absmiddle" style="margin-top: -3px;" alt="Linkedin Profile" src="<?=SMALL_IMAGE_PATH?>/linkedin-imp.jpg"></a></div>
<?php 
	}
?>

</div>
<div style="height: 45px;" class="sig_sml_sig"><a class="smallSigTxt bold" href="<?=URL_MEMBER_PROFILE?><?=$funcslug?>"><?php echo html_entity_decode($SignatureArr[0],ENT_QUOTES,"utf-8"); ?> <?php echo html_entity_decode($SignatureArr[1],ENT_QUOTES,"utf-8"); ?></a><br />
<a class="smallfont normalTxt" href="<?=URL_MEMBER_EDIT_PROFILE?>">Edit My Profile</a></div>
</div>

<div class="clearfix">
<div id="left_menu">
<? fn_profile_getContacts($userid,5); ?>
</div>


<div class="leftbold">
Give Endorsements</div>
<div>Giving endorsements to your connections is a great way to tell them that you care for their professional growth.</div>
<div class="clearfix padTB10"><a class="btn" href="javascript:void(0);" onclick="home_giveEndorse();">Give Endorsements</a></div>


</div>

<?php
}
?>


</div>

<script>
function AddtoContactObject()
{
var x; 
var browser = navigator.appName; 

if(browser == "Microsoft Internet Explorer")
x = new ActiveXObject("Microsoft.XMLHTTP"); else x = new XMLHttpRequest();

return x;
}     

var AcRequest = AddtoContactObject();

</script>
<?php if(!empty($ShowLinkJs)) {?>
<script>
function TrimAC(str){return str.replace(/^\s*|\s*$/g,"");}

var SubHeadings = new Array();
SubHeadings[3] = "Enter the name of the Company";
SubHeadings[4] = "Enter the name of the College / School";
SubHeadings[6] = "Enter the name of the Business";
SubHeadings[7] = "Enter the details of the conference / event";
SubHeadings[8] = "Enter the details of the travel";
SubHeadings[9] = "Enter the details";

function ChosenDD(ChosenVal)
{
	if(ChosenVal != 1 && ChosenVal != 2 && ChosenVal != 5)
	{
		document.getElementById('OptDiv').style.display = "";
		document.getElementById('SubMsg').innerHTML = SubHeadings[ChosenVal];
	}
	else
	{
		document.getElementById('OptDiv').style.display = "none";
		document.getElementById('SubMsg').innerHTML = "";
		document.getElementById('reqRelationName').value = "";
	}
}

function CallACdiv()
{
document.getElementById('AcBox').style.display = "";
}

var ReqSent = false;
//Send Contact Request
function SendContactReq()
{
var reqContactId = document.getElementById('reqContactId').value;
var reqRelationType = document.getElementById('reqRelationType').value;
var reqRelationName = document.getElementById('reqRelationName').value
var reqMessage = document.getElementById('reqMessage').value;
if(reqMessage == "Include a personal message...")
reqMessage = "";

AcRequest.open('post', '../connections/RemoteConnections.php');
AcRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
AcRequest.onreadystatechange = SendContactReqOut; 
AcRequest.send("reqContactId="+reqContactId+"&reqMessage="+encodeURIComponent(reqMessage)+"&reqRelationName="+encodeURIComponent(reqRelationName)+"&reqRelationType="+reqRelationType+"&MethodOption=1");
}

function SendContactReqOut()
{
	if(AcRequest.readyState == 4)
	{
	var InfoReturn = AcRequest.responseText;
		if(InfoReturn == "1")
		{
		document.getElementById("LinkDiv").innerHTML = '<span class="con_but_g" style="width:150px; display:block; cursor:auto; text-align:center; padding-top:2px"> Connection Request Pending </span>';
			ReqSent = true;
			getFrndFbId(document.getElementById('reqContactId').value);
		}
		else if(InfoReturn == "0")
		{
			document.getElementById("LinkDiv").innerHTML = "<a href='Javascript:void()' onclick='CallACdiv();' class='addconnection'>Add as a Connection</a>";
			alert("Something went wrong. Please try again!");
		}
		else
		{
			alert("Something went wrong. Please try again!");
		}
	
	}
	else
	{
	document.getElementById('AcBox').style.display = "none";
	document.getElementById("LinkDiv").innerHTML = "<img src='https://gcmsmall.s3.amazonaws.com/loader_s.gif' align='absmiddle'>&nbsp;Sending Request...";
	}

}

//Cancel Click
function AcDivCancel()
{
document.getElementById('AcBox').style.display = 'none';
document.getElementById('LinkDiv').innerHTML = "<a href='Javascript:void()' onclick='CallACdiv();' class='addconnection'>Add as a Connection</a>";
}

</script>
<?php }?>
<script>
//Unfriend
function CallUnfriend()
{
	if(confirm("Are you sure want to remove \n\n[<?=$userFullName?>]\n\n from your connections list?"))
	{
		var reqContactId = <?=$userid?>;
		
		AcRequest.open('post', '../connections/RemoteConnections.php');
		AcRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		AcRequest.onreadystatechange = CallUnfriendOut; 
		AcRequest.send("reqContactId="+reqContactId+"&MethodOption=3");
	}
}


function CallUnfriendOut()
{
	if(AcRequest.readyState == 4)
	{
	var InfoReturn = AcRequest.responseText;
	
		if(InfoReturn == "1")
		{
		window.location.href = "";
		}
		else if(InfoReturn == "0")
		{
			document.getElementById("infriendDiv").innerHTML = '<a href="Javascript:void(0)" onclick="CallUnfriend()" class="endrose">Unfriend</a>';
			alert("Something went wrong. Please try again!");
		}
		else
		{
			alert("Something went wrong. Please try again!");
		}
	
	}
	else
	{
	document.getElementById("infriendDiv").innerHTML = '<img src="https://gcmsmall.s3.amazonaws.com/loader_s.gif" align="absmiddle">&nbsp;Sending Request...';
	}

}
</script>

<?php
if($profileStat=="home_profile") { 
?>
<script language="javascript" type="text/javascript">
var giveEndorseFlag= true;
function home_giveEndorse() {
	/* if(giveEndorseFlag == false) {
		return false;
	}
	giveEndorseFlag = false;	
	*/
	
	reqObjGiveEndorse = AddtoContactObject();

	reqObjGiveEndorse.open('post', '../actions/home_endorse.php');
	reqObjGiveEndorse.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	
	reqObjGiveEndorse.onreadystatechange = function()
	{
		//alert(reqObjGiveEndorse.responseText);
		if(reqObjGiveEndorse.readyState == 3)
		{
			//alert(reqObjGiveEndorse.responseText);
			window.location.href="<?=URL_ENDORSE?><?=$ConnectionMenuSlug?>";
			giveEndorseFlag= true; 
		}
	} 
		reqObjGiveEndorse.send("eflag=1");
}
</script>
<?php } ?>
<script language="javascript" type="text/javascript">
function gotoPendingURL()
{
	window.location.href="<?=SITE_URL?>/cr/pending.php";
}
</script>