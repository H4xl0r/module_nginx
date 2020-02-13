<?
$mod_name="nginx";
$mod_version="2.b";
$mod_path="/usr/share/fruitywifi/www/modules/$mod_name";
$mod_logs="$log_path/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_logs_panel="enabled";
$mod_panel="show";
$mod_type="service";
$mod_isup="ps auxww | grep -E 'nginx.+/modules/nginx/.+nginx.conf' | grep -v -e grep";
$mod_coisup="sudo /sbin/iptables -t nat -L|grep -iEe 'mark match ! 0x63'";
$mod_coisupopen = "grep -iEe '^iptables -t nat -A PREROUTING' /usr/share/fruitywifi/www/modules/ap/includes/dnsmasq-dhcp-script.sh";
$mod_coconf= "$mod_path/includes/vhost-captive.conf";
$mod_alias="Nginx";
$mod_co="Captive";

# OPTIONS
$mod_nginx_fpm = "php5";

# EXEC
$bin_sudo = "/usr/bin/sudo";
$bin_nginx = "/usr/sbin/nginx";
$bin_captive = "/var/www/captive";
$bin_awk = "/usr/bin/awk";
$bin_grep = "/bin/grep";
$bin_sed = "/bin/sed";
$bin_cat = "/bin/cat";
$bin_echo = "/bin/echo";
$bin_ln = "/bin/ln";
$bin_killall = "/usr/bin/killall";
$php5_fpm = "/usr/sbin/php5-fpm";
$php7_fpm = "/usr/sbin/php-fpm7.0";
?>
