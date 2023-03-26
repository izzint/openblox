@echo off

title "Openblox Server"
echo Starting Openblox Server...

start "C:\xampp\xampp-control.exe"

echo WARNING, MAKING YOUR WEBSERVER OPEN VIA NGROK EXPOSES IT TO THE INTERNET, PROCED WITH CAUTION IF YOU DONT KNOW WHAT UR DOING!
pause >nul
ngrok http 80 --oauth=google –oauth-allow-email=zoomer589@gmail.com