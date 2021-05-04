
<!DOCTYPE html>
<html lang="ko">
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Video</title>
<link rel="shortcut icon" href="./image/ar.png">

    <style>
      #jb-header {
	  background-color: #000000;
        padding: 1px;
        margin-bottom: 0px;
      }

      #jb-content {
        margin-bottom: 20px;
        padding: 10px;
		border: 0px solid #bcbcbc;
      }

.fixed-bottom-ar
{position:fixed;bottom:auto; top:20px;right:50px; margin-bottom:0 auto;z-index:900;}

.fixed-logo-ar
{position:fixed;bottom:auto; top:30px;left:20px; margin-bottom:0 auto;z-index:900;}
</style>

  </head>


<body>

<div id="jb-header">
<span style="line-height:140%;"><b>

<!----------변수a counter.php와  동일하게---------------->

<?php
 $cfile = "index.php.dat";
 $fh = fopen($cfile, "r+");
 if (!$fh) {
   die("<br/>Failed to open file.");
 }
 $s = fgets($fh, 6);
 $count = (int)$s;

    $a = 20000;
    $value = $a - $count;
 
if ($count >  $a){

	 echo "<p align='center'><font color=white size='5pt'>Total : 20000 / Visit : $count / Left : 0</font><br>\n<br>\n<font color=red size='6pt'><a href='http://4djoy.com'>새로 신청하기</a></font></p>";
   }
  else{
	  	$image_url='./image/arenter.png';
	 echo "<p align='center'><font color=white size='5pt'>Total : 20000 / Visit : $count / Left : $value</font><br>\n<br>\n<font color=red size='6pt'>AR앱은 가로화면에 최적화되어 있습니다</font></p>";
	}
 fclose($fh);
 ?>
</b></span>
	  </div>

<div class="fixed-logo-ar">
<img src="./image/logo.png" width="150px"></a>
</div>

<div class="fixed-bottom-ar">
<a href="indexcount.php"><img src="<?php echo $image_url;?>"></a>
</div>


<div id="jb-content">
<span style="font-size:22pt;color:#222222;line-height:140%;">
 <p align="center"><b>
   가로화면으로 "AR" 버튼을 클릭하세요.<br>
   초기에 흰 바탕화면이 나타나며, AR화면 로딩까지 몇 초만 기다려 주세요.<br>
   아이폰에서는 작동 않으며, 안드로이드 일부폰에서도 작동 않을 수 있습니다.
   </b></p></span>
</div>


<div style=" position:absolute; height: 100px;width:100%; center; left:0px; right:0px; bottom:0px; z-index:1; background:#000000; background : rgba(0,0,0,0.7); padding:0px;" >
<p align="center"><span style="font-size:22pt;color:#ffffff;">
<a href="http://picnic-ps.com/">홈페이지 이동</a></span></p>
</div>


<div id="fontalpha" style=" position:absolute; width:100%; center; left:0px; right:0px; bottom:0px; z-index:2; background:#000000; background : rgba(0,0,0,0);  padding:0px;" >
<p align="right"><span style="font-size:16pt;color:#eeeeee;">
<a href="http://4djoy.com">ar카드제작 : 4djoy.com</a></span> &nbsp;&nbsp; &nbsp;&nbsp;</p>
</div>


<style>

a:link {
color: white;
text-decoration: none;
}
a:visited {
color: white;
text-decoration: none;
}
a:hover {
color: white;
text-decoration: none;
}
a:active {
color: white;
text-decoration: none;
}


</style>

</body>
</html>