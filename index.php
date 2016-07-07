<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<link rel="stylesheet" href="css/font.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<title>İsmail Taşdelen</title>
</head>
<body>
<div data-role="header" style="overflow:hidden;">
<h1><font face="fransiscan">İsmail Taşdelen</font></h1>
</div>
    <div data-role="footer">
        <div data-role="navbar">
            <ul>
                <li><a href="mailto:pentestdatabase@gmail.com" data-icon="mail"><font face="fransiscan">Mail</font></a></li>
                <li><a href="#" data-icon="home" class="ui-btn-active"><font face="fransiscan">Home</font></a></li>
                <li><a href="tel://+90-534-295-9431" data-icon="phone"><font face="fransiscan">Phone</font></a></li>
            </ul>
        </div>
</div>
<a type="button" href="https://linkedin.com/in/ismailtasdelen" target="_blank" class="ui-btn ui-icon-user ui-btn-icon-left ui-shadow-icon ui-btn-b">
<font face="fransiscan">LinkedIn</font>
</a>
<a type="button" href="https://github.com/ismailtasdelen" target="_blank" class="ui-btn ui-icon-shop ui-btn-icon-left ui-shadow-icon ui-btn-b">
<font face="fransiscan">Works</font>
</a>
<a type="button" href="page/portfolio.ismailtasdelen.com/index.php" target="_blank" class="ui-btn ui-icon-bars ui-btn-icon-left ui-shadow-icon ui-btn-b">
<font face="fransiscan">Portfolio Page</font>
</a>
<a type="button" href="https://www.youtube.com/channel/UC3HaSlDvx262CBnQyHI8AKg" target="_blank" class="ui-btn ui-icon-video ui-btn-icon-left ui-shadow-icon ui-btn-b">
<font face="fransiscan">Youtube Channel</font>
</a>
<a type="button" href="https://www.google.com/maps/dir//41.0120638,29.1945515/@41.0116554,29.1927381,16.25z" target="_blank" class="ui-btn ui-icon-location ui-btn-icon-left ui-shadow-icon ui-btn-b">
<font face="fransiscan">Location</font>
</a>
<form action="file/download_pdf_file.php" method="post"></form>
<a type="button" href="file/download_pdf_file.php" class="ui-btn ui-icon-arrow-d ui-btn-icon-left ui-shadow-icon ui-btn-b">
<font face="fransiscan">Download Resume</font>
</a>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false"></body>
<script type="text/javascript">
var omitformtags=["input", "textarea", "select"]
omitformtags=omitformtags.join("|")
function disableselect(e){
if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
return false
}
function reEnable(){
return true
}
if (typeof document.onselectstart!="undefined")
document.onselectstart=new Function ("return false")
else{
document.onmousedown=disableselect
document.onmouseup=reEnable
}
</script>
<body onkeydown="return false"> 
</body>
</html>
