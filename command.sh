clear
figlet Command Injection
echo -e '\e[1;31m [+]\e[0mInstalling PHP\e[1;31m[+] \e[0m'
echo ""
pkg install php
echo -e '\e[1;31m [+]\e[0mInstalling unzip\e[1;31m[+] \e[0m'
pkg install unzip
echo ""
echo -e '\e[1;31m [+]\e[0mPlease wait unzipping\e[1;31m[+] \e[0m'
echo ""
unzip exec.zip
echo ""
echo -e '\e[1;31m [+]\e[0mStarting Web server\e[1;31m[+] \e[0m'
echo ""
php -S localhost:8000
