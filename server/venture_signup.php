<?php 
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","rbansal","rbansal","rashmibansal");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

  
  $companyname=$_POST["companyname"];
  $companylocation=$_POST['companylocation'];
  $companytagline=$_POST['companytagline'];
  $companykeywords=$_POST['companykeywords'];
  $companyemail=$_POST['companyemail'];
  $companywebsite=$_POST['companywebsite'];
  $companycontactnumber=$_POST['companycontactnumber'];
  $companylinkedin=$_POST['companylinkedin'];
  $companyfacebook=$_POST['companyfacebook'];
  $companytwitter=$_POST['companytwitter'];
  $companyvideo=$_POST['companyvideo'];
  $companypitchvideo=$_POST['companypitchvideo'];
  $companypitchdeck=$_POST['companypitchdeck'];
  $companylogo=$_POST['companylogo'];
  $companyfeaturedimage=$_POST['companyfeaturedimage'];
  $companyteamimage=$_POST["companyteamimage"];
  $companyoverview=$_POST['companyoverview'];
  $companyfundraisestage=$_POST['companyfundraisestage'];
  $companyfundraisetarget=$_POST['companyfundraisetarget'];
  $companyfundraiseminimuminvestment=$_POST['companyfundraiseminimuminvestment'];
  $companymoneyraisedsofar=$_POST['companymoneyraisedsofar'];
  $companypremoneyvaluation=$_POST['companypremoneyvaluation'];
  $companyhighlight1=$_POST['companyhighlight1'];
  $companyhighlight2=$_POST['companyhighlight2'];
  $companyhighlight3=$_POST['companyhighlight3'];
  $companyelevatorpitch=$_POST['companyelevatorpitch'];
  $teammembername=$_POST['teammembername'];
  $teammemberrole=$_POST['teammemberrole'];
  $teammemberbio=$_POST['teammemberbio'];
  $teammemberemail=$_POST['teammemberemail'];
  $teammemberphone=$_POST['teammemberphone'];
  $teammemberphotourl=$_POST['teammemberphotourl'];
  $leadershipname=$_POST['leadershipname'];
  $leadershiprole=$_POST['leadershiprole'];
  $leadershipbio=$_POST['leadershipbio'];
  $leadershipemail=$_POST['leadershipemail'];
  $leadershipphone=$_POST['leadershipphone'];
  $leadershipphotourl=$_POST['leadershipphotourl'];
  $advisorname=$_POST['advisorname'];
  $advisorrole=$_POST['advisorrole'];
  $advisorbio=$_POST['advisorbio'];
  $advisoremail=$_POST['advisoremail'];
  $advisorphone=$_POST['advisorphone'];
  $advisorphotourl=$_POST['advisorphotourl'];
  $testimonialname=$_POST['testimonialname'];
  $testimonialrole=$_POST['testimonialrole'];
  $testimonialcontent=$_POST['testimonialcontent'];
  $testimonialemail=$_POST['testimonialemail'];
  $testimonialphone=$_POST['testimonialphone'];
  $testimonialphotourl=$_POST['testimonialphotourl'];
  $pressurl=$_POST['pressurl'];
  $partnername=$_POST['partnername'];
  $partnerlogo=$_POST['partnerlogo'];
  $previousfundingsource=$_POST['previousfundingsource'];
  $previousfundingamount=$_POST['previousfundingamount'];
  $previousfundingdate=$_POST['previousfundingdate'];




 
$result = mysqli_query($con,"SELECT * FROM `venture_fmv` WHERE companyemail = '$companyemail'");
//var_dump($result);
   if($result->num_rows > 0){
      echo "user already exists";return;
   }

else{
$result2 = mysqli_query($con,"INSERT INTO `venture_fmv` VALUES('$companyname','$companylocation','$companytagline','$companykeywords','$companyemail','$companywebsite','$companycontactnumber','$companylinkedin','$companyfacebook','$companytwitter','$companyvideo','$companypitchvideo','$companypitchdeck','$companylogo','companyfeaturedimage','$companyteamimage','$companyoverview','$companyfundraisestage','$companyfundraisetarget','$companyfundraiseminimuminvestment','$companymoneyraisedsofar','$companypremoneyvaluation','$companyhighlight1','$companyhighlight2','$companyhighlight3','$companyelevatorpitch','$teammembername','$teammemberrole','$teammemberbio','$teammemberemail','$teammemberphone','$teammemberphotourl','$leadershipname','$leadershiprole','$leadershipbio','$leadershipemail','$leadershipphone','$leadershipphotourl','$advisorname','$advisorrole','$advisorbio','$advisoremail','$advisorphone','$advisorphotourl','$testimonialname','$testimonialrole','$testimonialcontent','$testimonialemail','$testimonialphone','$testimonialphotourl','$pressurl','$partnername','$partnerlogo','$previousfundingsource','$previousfundingamount','$previousfundingdate');");

if($result2){
echo "ok";
//return;
}
else {
echo "not ok";
//return;
}

# Instantiate the client.
$mgClient = new Mailgun('key-be2572550e87f8d51773e22bed980aa8');
$domain = "fundmyventure.co";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Arpit from FundMyVenture <reachout@fundmyventure.co>',
    'to'      => $companyemail,
    'subject' => 'Welcome!',
    'text'    => 'Hello world!',
    'html'    => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta charset="utf-8"> <!-- utf-8 works for most cases --> <meta name="viewport" content="width=device-width"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine --> <title></title> <!-- CSS Reset --> <style type="text/css"> html, body { Margin: 0 !important; padding: 0 !important; height: 100% !important; width: 100% !important; } /* What it does: Stops email clients resizing small text. */ * { -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; } /* What is does: Centers email on Android 4.4 */ div[style*="margin: 16px 0"] { margin:0 !important; } /* What it does: Stops Outlook from adding extra spacing to tables. */ table, td { mso-table-lspace: 0pt !important; mso-table-rspace: 0pt !important; } /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */ table { border-spacing: 0 !important; border-collapse: collapse !important; table-layout: fixed !important; Margin: 0 auto !important; } table table table { table-layout: auto; } /* What it does: Uses a better rendering method when resizing images in IE. */ img { -ms-interpolation-mode:bicubic; } .yshortcuts a { border-bottom: none !important; } /* What it does: A work-around for iOS meddling in triggered links. */ .mobile-link--footer a, a[x-apple-data-detectors] { color:inherit !important; text-decoration: underline !important; } </style> <!-- Progressive Enhancements --> <style> /* What it does: Hover styles for buttons */ .button-td, .button-a { transition: all 100ms ease-in; } .button-td:hover, .button-a:hover { background: #555555 !important; border-color: #555555 !important; } /* Media Queries */ @media screen and (max-width: 600px) { .email-container { width: 100% !important; } /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */ .fluid, .fluid-centered { max-width: 100% !important; height: auto !important; Margin-left: auto !important; Margin-right: auto !important; } /* And center justify these ones. */ .fluid-centered { Margin-left: auto !important; Margin-right: auto !important; } /* What it does: Forces table cells into full-width rows. */ .stack-column, .stack-column-center { display: block !important; width: 100% !important; max-width: 100% !important; direction: ltr !important; } /* And center justify these ones. */ .stack-column-center { text-align: center !important; } /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */ .center-on-narrow { text-align: center !important; display: block !important; Margin-left: auto !important; Margin-right: auto !important; float: none !important; } table.center-on-narrow { display: inline-block !important; } } </style> </head> <body bgcolor="#222222" width="100%" style="Margin: 0;"> <table bgcolor="#222222" cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse;"><tr><td valign="top"> <center style="width: 100%;"> <!-- Visually Hidden Preheader Text : BEGIN --> <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;"> Welcome to FundMyVenture! </div> <!-- Visually Hidden Preheader Text : END --> <!-- Email Header : BEGIN --> <table align="center" width="600" class="email-container"> <tr> <td style="padding: 20px 0; text-align: center"> <img src="http://fundmyventure.co/assets/images/fmv.png" width="100" height="100" alt="alt_text" border="0"> </td> </tr> </table> <!-- Email Header : END --> <!-- Email Body : BEGIN --> <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container"> <!-- Hero Image, Flush : BEGIN --> <tr> <td> <img src="http://inventionland.com/wp-content/uploads/2015/09/National_Thank_You_Day.png" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px;"> </td> </tr> <!-- Hero Image, Flush : END --> <!-- 1 Column Text : BEGIN --> <tr> <td style="padding: 0px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">Hey there! Thank you for signing up as an investor on <a href="http://fundmyventure.co">FundMyVenture</a>. We truly appreciate your support to our platform and being a part of our crowdsourced investment community. <br><br> <!-- Button : Begin --> <table cellspacing="0" cellpadding="0" border="0" align="center" style="Margin: auto"> <tr> <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td"> <a href="http://fundmyventure.co/companies.php" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a"> Browse Active Deals </a> </td>  </tr><tr></tr> </table> <!-- Button : END --> </td> </tr> <!-- 1 Column Text : BEGIN -->  </table> <!-- Email Body : END --> <!-- Email Footer : BEGIN --> <table align="center" width="600" class="email-container"> <tr> <td style="padding: 0px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;"> <br> FundMyVenture Technologies Pvt. Ltd. <br><br> </td> </tr> </table> <!-- Email Footer : END --> </center> </td></tr></table> </body> </html>'
));

}

?>