<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:100%;
	height:464px;
	z-index:1;
	left: 0px;
	top: 0;
}
.style1 {
	font-size: xx-large;
	font-weight: bold;
	font-style: italic;
	color: #9966FF;
}
.style3 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style6 {color: #FFFF00; font-weight: bold; font-style: italic; }
a:link {
	color: #FFFF00;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFF00;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
}
body {
	background-image: url();
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}

.style8 {color: #FFFFFF}
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
.style15 {
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
#em{border:#FF9966;
border-bottom-style:dotted;
}
#Layer2 {
	position:absolute;
	width:108px;
	height:42px;
	z-index:2;
	left: 34px;
	top: 514px;
}
.style16 {color: #FFFF00}
#Layer3 {
	position:absolute;
	width:207px;
	height:1021px;
	z-index:2;
	left: 3px;
	top: 132px;
}
#Layer4 {
	position:absolute;
	width:192px;
	height:1080px;
	z-index:2;
	left: 859px;
	top: 135px;
}
#Layer5 {
	position:absolute;
	width:624px;
	height:439px;
	z-index:2;
	left: 225px;
	top: 133px;
}
#Layer6 {
	position:absolute;
	width:605px;
	height:374px;
	z-index:2;
	left: 239px;
	top: 651px;
}
.style9 {font-size: 18px}
.style19 {color: #FFFFFF; font-size: 16; }
#Layer7 {
	position:absolute;
	width:200px;
	height:29px;
	z-index:2;
	left: 6px;
	top: 444px;
}
#Layer8 {
	position:absolute;
	width:577px;
	height:146px;
	z-index:2;
	left: 263px;
	top: 1061px;
}
-->
</style>
<script language="javascript">

function chk()
{

	if(document.frm.t1.value=="")
	{
		alert("Enter your Email id");
		document.frm.t1.focus();
	}
	else if (echeck(document.frm.t1.value)==false)
    {
	document.frm.t1.focus();
	return false
	}
	else if(document.frm.t2.value=="")
	{
		alert("Enter your Password");
		document.frm.t2.focus();
	}
	else
	{
		
		document.frm.method="post";
		document.frm.action = "loginprocess.php";
		document.frm.submit();
	}
	function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}


}

</script>
</head>

<body>
<?php
session_start();
?>
<form name="frm" method="post" action="loginprocess.php">
<div id="Layer1">
  <table width="100%" height="92" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td background="pic/curtains08-02-22.jpg" bgcolor="#E0DFE3"><div align="center" class="style1">
        <div align="center" class="style3 style8"><ins>SL THEATRE COMPLEX </ins></div>
      </div></td>
    </tr>
  </table>
  <table width="100%" height="37" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="index.php">HOME</a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_nowshowing.php">NOW SHOWING </a></div></td>
      <td width="20%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style15"><a href="Guest_terms and conditions.php">TERMS &amp; CONDITIONS </a></div></td>
      <td width="13%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_comingsoon.php">COMING SOON </a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="Guest_ECoupon.php">E-COUPON</a></div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_gallery.php">GALLERY</a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_contactus.php">CONTACT US</a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="guest_aboutus.php">ABOUT US</a> </div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="guest_feedback.php" class="style15">FEEDBACK</a></div></td>
    </tr>
  </table>
  <table width="100%" height="1060" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
    <tr>
      <th height="1060" scope="col"><div id="Layer8">
        <table width="100%" height="161" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <th scope="col"><img src="gallery images/housefull.jpg" width="547" height="147" /></th>
          </tr>
        </table>
      </div>
        <div id="Layer6" class="em">
          <p class="style8"><a href="http://en.wikipedia.org/wiki/Media_in_Trivandrum" title="Media in Trivandrum"><u>Media in Trivandrum</u></a></p>
        <p align="justify"><span class="style8"><a href="http://en.wikipedia.org/wiki/Thiruvananthapuram" title="Thiruvananthapuram">Thiruvananthapuram</a> (Trivandrum) city possess a rich film culture.  The <a href="http://en.wikipedia.org/wiki/Malayalam_cinema" title="Malayalam cinema">Malayalam films</a> were earlier produced with <a href="http://en.wikipedia.org/wiki/Chennai" title="Chennai">Chennai</a> (Madras) as the base.  Later in the end of 70s, the Malayalam film industry started to shift its base  to <a href="http://en.wikipedia.org/wiki/Kerala" title="Kerala">Kerala</a>, with Trivandrum as the pick of  the bunch. <strong>Kerala State Film Development Corporation</strong> (KSFDC) was  established in 1975 with the objective of giving a thrust to the Malayalam film  industry and for nurturing it in the State. As a result, many studios and  related industries started commencing in and around Trivandrum. The studios Merryland got opened  in 1951 and Chithranjali in 1980s. Leading firms like Prasad Film Laboratoried  expanded their operations to Trivandrum  also.<br />
          With the commencing of animation companies like <a href="http://en.wikipedia.org/wiki/Toonz_India_Ltd" title="Toonz India Ltd">Toonz  India Ltd</a> and <a href="http://en.wikipedia.org/wiki/Tata_Elxsi" title="Tata Elxsi">Tata Elxsi Limited</a>, the film industry further boomed up.  The Kinfra Film and Video Park is located near Technopark and is one of the  most advanced film and animation production facilities in India. <strong><a href="http://en.wikipedia.org/wiki/The_International_Film_Festival_of_Kerala" title="The International Film Festival of Kerala">The International Film  Festival of Kerala</a></strong> (IFFK) is held in November every year and is  acknowledged as one of the leading such events in India. <a href="http://en.wikipedia.org/wiki/Kerala_State_Chalachitra_Academy" title="Kerala State Chalachitra Academy">Kerala State Chalachitra Academy</a> was founded in 1998 for the promotion of Cinema as a cultural expression.</span></p>
      </div>
          <div id="Layer5">
            <table width="100%" height="359" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th background="pic/Last.jpg" scope="col"><p>&nbsp;</p>
                    <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <p class="style16">SL Complex, </p>
                  <p><span class="style16" id="search">Thiruvananthapuram<br />
                    Pazhavangadi, Thiruvananthapuram, Kerala<br />
                    </span> </p>
                  <div class="style16"><span id="search">Train: <a href="http://maps.google.co.in/maps?hl=en&amp;biw=1016&amp;bih=547&amp;um=1&amp;ie=UTF-8&amp;q=sl+complex,trivandrum&amp;fb=1&amp;gl=in&amp;hq=sl+complex&amp;hnear=Trivandrum,+Kerala&amp;cid=0,0,12296952927971546072&amp;iwloc=lyrftr:transit,0x3b05bba6201bdf81:0x316db96123d0ab6b&amp;ei=n4BTTavpJIvMrQfNyIzGCA&amp;sa=X&amp;oi=local_result&amp;ct=transit-link&amp;resnum=1&amp;ved=0CBkQsQUwAA">Trivandrum Central Railway Station</a></span></div></th>
              </tr>
              <tr>
                <td><p class="style9"><strong><u><span class="style19">S L Cinema Theatre complex</span></u> </strong></p>
                    <p align="justify" class="style19"> It is  located near the overbridge in &nbsp;Thampanoor  &nbsp;in the city of Thiruvananthapuram in Kerala.  Thiruvananthapuram or Trivandrum  is a beautiful ancient city in Kerala and the capital of Kerala. There  are 4 cinema halls in SL Complex. They are <a href="Guest_Anjaly.php">Anjali</a>, <a href="Guest_Athulya.php">Athulya</a>, <a href="Guest_Aswathy.php">Aswathy</a> and <a href="Guest_Athira.php">Athira</a>.  They are popular theatres in Thiruvananthapuram. There are  many restaurants, cafes, &nbsp;jewellery &nbsp;showrooms &nbsp;and other shops near the SL complex. SL Cinema  hall offers a lot of parking space. It is easily accessible by two  wheelers&nbsp; autorikshaws, taxis and buses.It promises complete  entertainment.</p>
                    <div id="Layer7"><a href="login.php">LOGIN Here </a></div>                  
                  <p align="right" class="style19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="guest_aboutus.php"> About SL Complex </a> </p>                </td>
              </tr>
            </table>
          </div>
        <div id="Layer3">
            <table width="100%" height="1066" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
              <tr>
                <th height="170" scope="col"><div align="center"><img src="gallery images/images (1).jpg" width="188" height="157" /></div></th>
              </tr>
              <tr>
                <td height="145"><div align="center"><img src="gallery images/mammootty-launches-reality-show-to-find-9621.jpg" width="203" height="144" /></div></td>
              </tr>
              <tr>
                <td height="186"><div align="center"><img src="gallery images/images1.jpg" width="203" height="170" /></div></td>
              </tr>

              <tr>
                <td height="166"><div align="center"><img src="gallery images/images (5).jpg" width="213" height="143" /></div></td>
              </tr>
              <tr>
                <td height="193"><div align="center"><img src="gallery images/roma_asrani_rare_1 (11).jpg" width="200" height="180" /></div></td>
              </tr>
              <tr>
                <td><div align="center"><img src="gallery images/images7.jpg" width="188" height="178" /></div></td>
              </tr>
            </table>
        </div>
        <div id="Layer4">
          <table width="100%" height="1075" border="2" cellpadding="0" cellspacing="0" bordercolor="#FF0000">
            <tr>
              <th height="153" scope="col"><div align="center"><img src="gallery images/canvas.png" width="193" height="134" /></div></th>
            </tr>
            <tr>
              <td height="161"><div align="center"><img src="gallery images/canvas1.png" width="178" height="141" /></div></td>
            </tr>
            <tr>
              <td height="179"><div align="center"><img src="gallery images/images8.jpg" width="179" height="175" /></div></td>
            </tr>
            <tr>
              <td height="190"><div align="center"><img src="gallery images/images4.jpg" width="184" height="175" /></div></td>
            </tr>
            <tr>
              <td height="41"><div align="center"><img src="gallery images/images6.jpg" width="200" height="188" /></div></td>
            </tr>
            <tr>
              <td height="204"><div align="center"><img src="gallery images/images9.jpg" width="213" height="163" /></div></td>
            </tr>
          </table>
        </div></th>
    </tr>
  </table>
  
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
