<?php
    header("Content-Type:image/png");
    $image = imagecreatetruecolor(600,400);
    
    $color[0] = imagecolorallocate($image,255,0,0);//red
    $color[1] = imagecolorallocate($image,255,165,0);//orange
    $color[2] = imagecolorallocate($image,255,255,0);//yellow
    $color[3] = imagecolorallocate($image,0,255,0);//green
    $color[4] = imagecolorallocate($image,75,0,130);//indigo
    $color[5] = imagecolorallocate($image,0,0,255);//blue
    $color[6] = imagecolorallocate($image,160,32,240);//purple
    
    $x1 = array(0,20,50,80,110,140,170);
    $y1 = array(0,20,50,80,110,140,170);
    $x2 = array(600,580,550,520,490,460,430);
    $y2 = array(400,380,350,320,290,260,230);
    
    $white = imagecolorallocate($image,255,255,255);  
    imagefill($image,0,0,$white);
    
    for($i=0;$i<=7;$i++){
        imagefilledrectangle($image,$x1[$i],$y1[$i],$x2[$i],$y2[$i],$color[$i]);
    }   
    imagestring($image,16,280,200,"Xie",$white);
    imagePNG($image);
    imagedestroy($image);
?>