<?php

/*
_______________.___.
\______   \__  |   |
 |    |  _//   |   |
 |    |   \\____   |
 |______  // ______|
        \/ \/       
   _____         _______           ________        __________.__         ._____________   __________ 
  /  _  \   ____ \   _  \   ____   \_____  \___  __\______   |  |   ____ |__\__    _______\______   \
 /  /_\  \ /    \/  /_\  \ /    \    _(__  <\  \/  /|     ___|  |  /  _ \|  | |    |_/ __ \|       _/
/    |    |   |  \  \_/   |   |  \  /       \>    < |    |   |  |_(  <_> |  | |    |\  ___/|    |   \
\____|__  |___|  /\_____  |___|  / /______  /__/\_ \|____|   |____/\____/|__| |____| \___  |____|_  /
        \/     \/       \/     \/         \/      \/                                     \/       \/ 

                                ~ Changing Author Name Wont Make You One :) 
                                             #Respect Coders
*/

function checkAdminPanel($website) {

	$adminpanel = array(
		"admin.php","login.htm","login.html","login/","login.php","adm/","control/","admin/","admin/account.html","admin/login.html","admin/login.htm","admin/home.php","admin/controlpanel.html","admin/controlpanel.htm","admin/cp.php","admin/adminLogin.html","admin/adminLogin.htm","admin/admin_login.php","admin/controlpanel.php","admin/admin-login.php","admin-login.php","admin/account.php","admin/admin.php","admin.htm","admin.html","adminitem/","adminitem.php","adminitems/","adminitems.php","administrator/","administrator/login.php","administrator.php","administration/","administration.php","adminLogin/","adminlogin.php","admin_area/admin.php","admin_area/","admin_area/login.php","manager/","manager.php","letmein/","letmein.php","superuser/","superuser.php","access/","access.php","sysadm/","sysadm.php","superman/","supervisor/","panel.php","control.php","member/","member.php","members/","members.php","user/","user.php","cp/","uvpanel/","manage/","manage.php","management/","management.php","signin/","signin.php","log-in/","log-in.php","log_in/","log_in.php","sign_in/","sign_in.php","sign-in/","sign-in.php","users/","users.php","accounts/","accounts.php","wp-login.php","bb-admin/login.php","bb-admin/admin.php","bb-admin/admin.html","administrator/account.php","relogin.htm","relogin.html","check.php","relogin.php","blog/wp-login.php","user/admin.php","users/admin.php","registration/","processlogin.php","checklogin.php","checkuser.php","checkadmin.php","isadmin.php","authenticate.php","authentication.php","auth.php","authuser.php","authadmin.php","cp.php","modelsearch/login.php","moderator.php","moderator/","controlpanel/","controlpanel.php","admincontrol.php","adminpanel.php","fileadmin/","fileadmin.php","sysadmin.php","admin1.php","admin1.html","admin1.htm","admin2.php","admin2.html","yonetim.php","yonetim.html","yonetici.php","yonetici.html","phpmyadmin/","myadmin/","ur-admin.php","ur-admin/","Server.php","Server/","wp-admin/","administr8.php","administr8/","webadmin/","webadmin.php","administratie/","admins/","admins.php","administrivia/","Database_Administration/","useradmin/","sysadmins/","admin1/","system-administration/","administrators/","pgadmin/","directadmin/","staradmin/","ServerAdministrator/","SysAdmin/","administer/","LiveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","autologin/","support_login/","meta_login/","manuallogin/","simpleLogin/","loginflat/","utility_login/","showlogin/","memlogin/","login-redirect/","sub-login/","wp-login/","login1/","dir-login/","login_db/","xlogin/","smblogin/","customer_login/","UserLogin/","login-us/","acct_login/","bigadmin/","project-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","wizmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/","Lotus_Domino_Admin/","bbadmin/","vmailadmin/","Indy_admin/","ccp14admin/","irc-macadmin/","banneradmin/","sshadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/","Super-Admin/","AdminTools/","cmsadmin/","SysAdmin2/","globes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","logo_sysadmin/","power_user/","system_administration/","ss_vms_admin_sm/","bb-admin/","panel-administracion/","instadmin/","memberadmin/","administratorlogin/","adm.php","admin_login.php","panel-administracion/login.php","pages/admin/admin-login.php","pages/admin/","acceso.php","admincp/login.php","admincp/","adminarea/","admincontrol/","affiliate.php","adm_auth.php","memberadmin.php","administratorlogin.php","modules/admin/","administrators.php","siteadmin/","siteadmin.php","adminsite/","kpanel/","vorod/","vorod.php","vorud/","vorud.php","adminpanel/","PSUser/","secure/","webmaster/","webmaster.php","autologin.php","userlogin.php","admin_area.php","cmsadmin.php","security/","usr/","root/","secret/","admin/login.php","admin/adminLogin.php","moderator.php","moderator.html","moderator/login.php","moderator/admin.php","yonetici.php","0admin/","0manager/","aadmin/","cgi-bin/login.php","login1.php","login_admin/","login_admin.php","login_out/","login_out.php","login_user.php","loginerror/","loginok/","loginsave/","loginsuper/","loginsuper.php","login.php","logout/","logout.php","secrets/","super1/","super1.php","super_index.php","super_login.php","supermanager.php","superman.php","superuser.php","supervise/","supervise/Login.php","super.php","admin","adm","admincp","admcp","cp","modcp","moderatorcp","adminare","admins","cpanel","controlpanel","admin1.php","admin1.html","admin2.php","admin2.html","yonetim.php","yonetim.html","yonetici.php","yonetici.html","ccms/","ccms/login.php","ccms/index.php","maintenance/","webmaster/","adm/","configuration/","configure/","websvn/","admin/","admin/account.php","admin/account.html","admin/index.php","admin/index.html","admin/login.php","admin/login.html","admin/home.php","admin/controlpanel.html","admin/controlpanel.php","admin.php","admin.html","admin/cp.php","admin/cp.html","cp.php","cp.html","administrator/","administrator/index.html","administrator/index.php","administrator/login.html","administrator/login.php","administrator/account.html","administrator/account.php","administrator.php","administrator.html","login.php","login.html","modelsearch/login.php","moderator.php","moderator.html","moderator/login.php","moderator/login.html","moderator/admin.php","moderator/admin.html","moderator/","account.php","account.html","controlpanel/","controlpanel.php","controlpanel.html","admincontrol.php","admincontrol.html","adminpanel.php","adminpanel.html","admin1.asp","admin2.asp","yonetim.asp","yonetici.asp","admin/account.asp","admin/index.asp","admin/login.asp","admin/home.asp","admin/controlpanel.asp","admin.asp","admin/cp.asp","cp.asp","administrator/index.asp","administrator/login.asp","administrator/account.asp","administrator.asp","login.asp","modelsearch/login.asp","moderator.asp","moderator/login.asp","moderator/admin.asp","account.asp","controlpanel.asp","admincontrol.asp","adminpanel.asp","fileadmin/","fileadmin.php","fileadmin.asp","fileadmin.html","administration/","administration.php","administration.html","sysadmin.php","sysadmin.html","phpmyadmin/","myadmin/","sysadmin.asp","sysadmin/","ur-admin.asp","ur-admin.php","ur-admin.html","ur-admin/ Server.php Server.html Server.asp Server/","wp-admin/","administr8.php","administr8.html","administr8/","administr8.asp","webadmin/","webadmin.php","webadmin.asp","webadmin.html","administratie/","admins/","admins.php","admins.asp","admins.html","administrivia/ Database_Administration/ WebAdmin/","useradmin/","sysadmins/","admin1/","system-administration/","administrators/","pgadmin/","directadmin/","staradmin/ ServerAdministrator/ SysAdmin/","administer/ LiveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cPanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","autologin/","support_login/","meta_login/","manuallogin/","simpleLogin/","loginflat/","utility_login/","showlogin/","memlogin/","members/","login-redirect/ sub-login/","wp-login/","login1/","dir-login/","login_db/","xlogin/","smblogin/","customer_login/ UserLogin/","login-us/","acct_login/","admin_area/","bigadmin/","project-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","wizmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/ Lotus_Domino_Admin/","bbadmin/","vmailadmin/ Indy_admin/","ccp14admin/","irc-macadmin/","banneradmin/","sshadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/ Super-Admin/ AdminTools/","cmsadmin/ SysAdmin2/","globes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","logo_sysadmin/","server/","database_administration/","power_user/","system_administration/","ss_vms_admin_sm/","adminarea/","bb-admin/","adminLogin/","panel-administracion/","instadmin/","memberadmin/","administratorlogin/","admin/admin.php","admin_area/admin.php","admin_area/login.php","siteadmin/login.php","siteadmin/index.php","siteadmin/login.html","admin/admin.html","admin_area/index.php","bb-admin/index.php","bb-admin/login.php","bb-admin/admin.php","admin_area/login.html","admin_area/index.html","admincp/index.asp","admincp/login.asp","admincp/index.html","webadmin/index.html","webadmin/admin.html","webadmin/login.html","admin/admin_login.html","admin_login.html","panel-administracion/login.html","nsw/admin/login.php","webadmin/login.php","admin/admin_login.php","admin_login.php","admin_area/admin.html","pages/admin/admin-login.php","admin/admin-login.php","admin-login.php","bb-admin/index.html","bb-admin/login.html","bb-admin/admin.html","admin/home.html","pages/admin/admin-login.html","admin/admin-login.html","admin-login.html","admin/adminLogin.html","adminLogin.html","home.html","rcjakar/admin/login.php","adminarea/index.html","adminarea/admin.html","webadmin/index.php","webadmin/admin.php","user.html","modelsearch/login.html","adminarea/login.html","panel-administracion/index.html","panel-administracion/admin.html","modelsearch/index.html","modelsearch/admin.html","admincontrol/login.html","adm/index.html","adm.html","user.php","panel-administracion/login.php","wp-login.php","adminLogin.php","admin/adminLogin.php","home.php","adminarea/index.php","adminarea/admin.php","adminarea/login.php","panel-administracion/index.php","panel-administracion/admin.php","modelsearch/index.php","modelsearch/admin.php","admincontrol/login.php","adm/admloginuser.php","admloginuser.php","admin2/login.php","admin2/index.php","adm/index.php","adm.php","affiliate.php","adm_auth.php","memberadmin.php","administratorlogin.php","admin/admin.asp","admin_area/admin.asp","admin_area/login.asp","admin_area/index.asp","bb-admin/index.asp","bb-admin/login.asp","bb-admin/admin.asp","pages/admin/admin-login.asp","admin/admin-login.asp","admin-login.asp","user.asp","webadmin/index.asp","webadmin/admin.asp","webadmin/login.asp","admin/admin_login.asp","admin_login.asp","panel-administracion/login.asp","adminLogin.asp","admin/adminLogin.asp","home.asp","adminarea/index.asp","adminarea/admin.asp","adminarea/login.asp","panel-administracion/index.asp","panel-administracion/admin.asp","modelsearch/index.asp","modelsearch/admin.asp","admincontrol/login.asp","adm/admloginuser.asp","admloginuser.asp","admin2/login.asp","admin2/index.asp","adm/index.asp","adm.asp","affiliate.asp","adm_auth.asp","memberadmin.asp","administratorlogin.asp","siteadmin/login.asp","siteadmin/index.asp","ADMIN/","paneldecontrol/","login/","cms/","admon/","ADMON/","administrador/","ADMIN/login.php","panelc/","ADMIN/login.html","admin.php","login.htm","login.php","admin/login.htm","admin/home.php","admin/controlpanel.htm","admin/cp.php","admin/adminLogin.htm","admin/admin_login.php","admin/controlpanel.php","admin/admin-login.php","admin-login.php","admin/account.php","admin/admin.php","admin.htm","adminitem/","adminitem.php","adminitems/","adminitems.php","administrator/login.php","administrator.php","administration.php","adminlogin.php","admin_area/admin.php","admin_area/login.php","manager/","manager.php","letmein/","letmein.php","superuser/","superuser.php","access/","access.php","sysadm/","sysadm.php","superman/","supervisor/","panel.php","control.php","member/","member.php","members.php","user/","user.php","cp/","uvpanel/","manage/","manage.php","management/","management.php","signin/","signin.php","log-in/","log-in.php","log_in/","log_in.php","sign_in/","sign_in.php","sign-in/","sign-in.php","users/","users.php","accounts/","accounts.php","bb-admin/login.php","bb-admin/admin.php","administrator/account.php","relogin.htm","relogin.html","check.php","relogin.php","blog/wp-login.php","user/admin.php","users/admin.php","registration/","processlogin.php","checklogin.php","checkuser.php","checkadmin.php","isadmin.php","authenticate.php","authentication.php","auth.php","authuser.php","authadmin.php","cp.php","modelsearch/login.php","moderator.php","controlpanel.php","admincontrol.php","adminpanel.php","fileadmin.php","sysadmin.php","admin1.php","admin1.htm","admin2.php","yonetim.php","yonetici.php","ur-admin. Server.php","administr8.php","webadmin.php","admins.php","adm.php","admin_login.php","panel-administracion/login.php","pages/admin/admin-login.php","pages/admin/","acceso.php","admincp/login.php","admincp/","admincontrol/","affiliate.php","adm_auth.php","memberadmin.php","administratorlogin.php","modules/admin/","administrators.php","siteadmin/","siteadmin.php","adminsite/","kpanel/","vorod/","vorod.php","vorud/","vorud.php","adminpanel/ PSUser/","secure/","webmaster.php","autologin.php","userlogin.php","admin_area.php","cmsadmin.php","security/","usr/","root/","secret/","admin/login.php","admin/adminLogin.php","moderator/login.php","moderator/admin. 0admin/ 0manager/","aadmin/","cgi-bin/login","login1","login_admin/","login_admin","login_out/","login_out","login_user","loginerror/","loginok/","loginsave/","loginsuper/","loginsuper","login","logout/","logout","secrets/","super1/","super1","super_index","super_login","supermanager","superman","superuser","supervise/","supervise/Login super","admin.php","login.php","login/","adm/","admin/","admincp/","modcp/","administrator.php/","moderator.php/","cms/","admin/account.php","admin/login.php","admin/home.php","admin/controlpanel.php","admin/cp.php","admin/adminLogin.php","admin/admin_login.php","admin/admin-login.php","admin-login.php","admin/admin.php","adminitem/","adminitem.php","adminitems/","adminitems.php","administrator/","administrator/login.php","administrator.php","administration/","administration.php","adminLogin/","adminlogin.php","admin_area/admin.php","admin_area/","admin_area/login.php","manager/","manager.php","letmein/","letmein.php","superuser/","superuser.php","access/","access.php","sysadm/","sysadm.php","superman/","supervisor/","panel.php","control.php","member/","member.php","members/","members.php","user/","user.php","cp/","uvpanel/","manage/","manage.php","management/","management.php","signin/","signin.php","log-in/","log-in.php","log_in/","log_in.php","sign_in/","sign_in.php","sign-in/","sign-in.php","users/","users.php","accounts/","accounts.php","wp-login.php","bb-admin/login.php","bb-admin/admin.php","administrator/account.php","relogin.php","check.php","blog/wp-login.php","user/admin.php","users/admin.php","registration/","processlogin.php","checklogin.php","checkuser.php","checkadmin.php","isadmin.php","authenticate.php","authentication.php","auth.php","authuser.php","authadmin.php","cp.php","modelsearch/login.php","moderator.php","moderator/","controlpanel/","controlpanel.php","admincontrol.php","adminpanel.php","fileadmin/","fileadmin.php","sysadmin.php","admin1.php","admin2.php","yonetim.php","yonetici.php","phpmyadmin/","myadmin/","ur-admin.php","ur-admin/","Server.php","Server/","wp-admin/","administr8.php","administr8/","webadmin/","webadmin.php","administratie/","admins/","admins.php","administrivia/","Database_Administration/","useradmin/","sysadmins/","admin1/","system-administration/","administrators/","pgadmin/","directadmin/","staradmin/","ServerAdministrator/","SysAdmin/","administer/","LiveUser_Admin/","sys-admin/","typo3/","panel/","cpanel/","cpanel_file/","platz_login/","rcLogin/","blogindex/","formslogin/","autologin/","support_login/","meta_login/","manuallogin/","simpleLogin/","loginflat/","utility_login/","showlogin/","memlogin/","login-redirect/","sub-login/","wp-login/","login1/","dir-login/","login_db/","xlogin/","smblogin/","customer_login/","UserLogin/","login-us/","acct_login/","bigadmin/","project-admins/","phppgadmin/","pureadmin/","sql-admin/","radmind/","openvpnadmin/","wizmysqladmin/","vadmind/","ezsqliteadmin/","hpwebjetadmin/","newsadmin/","adminpro/","Lotus_Domino_Admin/","bbadmin/","vmailadmin/","Indy_admin/","ccp14admin/","irc-macadmin/","banneradmin/","sshadmin/","phpldapadmin/","macadmin/","administratoraccounts/","admin4_account/","admin4_colon/","radmind-1/","Super-Admin/","AdminTools/","cmsadmin/","SysAdmin2/","globes_admin/","cadmins/","phpSQLiteAdmin/","navSiteAdmin/","server_admin_small/","logo_sysadmin/","power_user/","system_administration/","ss_vms_admin_sm/","bb-admin/","panel-administracion/","instadmin/","memberadmin/","administratorlogin/","adm.php","admin_login.php","panel-administracion/login.php","pages/admin/admin-login.php","pages/admin/","acceso.php","admincp/login.php","adminarea/","admincontrol/","affiliate.php","adm_auth.php","memberadmin.php","administratorlogin.php","modules/admin/","administrators.php","siteadmin/","siteadmin.php","adminsite/","kpanel/","vorod/","vorod.php","vorud/","vorud.php","adminpanel/","PSUser/","secure/","webmaster/","webmaster.php","autologin.php","userlogin.php","admin_area.php","cmsadmin.php","security/","usr/","root/","secret/","moderator/login.php","moderator/admin.php","0admin/","0manager/","aadmin/","cgi-bin/login.php","login1.php","login_admin/","login_admin.php","login_out/","login_out.php","login_user.php","loginerror/","loginok/","loginsave/","loginsuper/","loginsuper.php","login.php","logout/","logout.php","secrets/","super1/","super1.php","super_index.php","super_login.php","supermanager.php","superman.php","superuser.php","supervise/","supervise/Login.php","super.php"
		);

	foreach ($adminpanel as $admin) {

		$combo = $website . "/" . $admin;

		$host = get_headers($combo);

		if (preg_match("/200/i", $host[0])) {
			echo "\n" .$combo . " ==> Found" . "\n\n";
		}

		elseif (preg_match("/301/i", $host[0])) {
			echo "\n".$combo . " ==> Found" . "\n\n";
		}

		elseif (preg_match("/302/i", $host[0])) {
			echo "\n" .$combo . " ==> Found" . "\n\n";
		}

		elseif (preg_match("/403/i", $host[0])) {
			echo "\n" .$combo . " ==> Found" . "\n\n";
		}

		elseif (preg_match("/404/i", $host[0])) {
			echo $combo . " => Not Found" . "\n";
		}

		else {
			echo $combo . " => Not Found" . "\n";
		}
	}
}

?>