<?php

// exec('c:\WINDOWS\system32\cmd.exe /c START C:\xampp\htdocs\RTSPPlayerWEB\RTSPtoWebRTC.exe');

// exec('c:\WINDOWS\system32\cmd.exe /c START C:\xampp\htdocs\RTSPPlayerWEB\RTSPtoWebRTC.exe -f "C:\xampp\htdocs\RTSPPlayerWEB\runRTSPtoWebRTC.log');


$output = shell_exec('C:\xampp\htdocs\RTSPPlayerWEB\RTSPtoWebRTC.exe');
echo $output;


?>