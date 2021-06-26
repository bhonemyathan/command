pkg install figlet >/dev/null 2>&1
clear
figlet Command Injection
echo ""
echo -e '\e[1;31m [+]\e[0mInstalling PHP\e[1;31m[+] \e[0m'
echo ""
pkg install php
echo ""
echo -e '\e[1;31m [+]\e[0mStarting Web server\e[1;31m[+] \e[0m'
echo ""
php -S localhost:8000
