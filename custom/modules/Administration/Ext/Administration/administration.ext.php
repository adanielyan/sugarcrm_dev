<?php 
 //WARNING: The contents of this file are auto-generated


if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$admin_option_defs=array();
$admin_option_defs['Administration']['ZuckerReports2Config']= array('zuckerreports','LBL_MANAGE_ZUCKERREPORTS2CONFIG','LBL_ZUCKERREPORTS2CONFIG','./index.php?module=Configurator&action=ZuckerReports2Config');
$admin_group_header[]=array('LBL_ZUCKERREPORTS2CONFIG_TITLE','',false,$admin_option_defs, 'LBL_ZUCKERREPORTS2CONFIG_DESC');





$admin_option_defs=array();
$admin_option_defs['Administration']['securitygroup_management']= array('SecurityGroups','LBL_MANAGE_SECURITYGROUPS_TITLE','LBL_MANAGE_SECURITYGROUPS','./index.php?module=SecurityGroups&action=index');
$admin_option_defs['Administration']['securitygroup_config']= array('SecurityGroups','LBL_CONFIG_SECURITYGROUPS_TITLE','LBL_CONFIG_SECURITYGROUPS','./index.php?module=SecurityGroups&action=config');

  

$admin_option_defs['Administration']['securitygroup_upgrade_info']= array('Upgrade','LBL_SECURITYGROUPS_UPGRADE_INFO_TITLE','LBL_SECURITYGROUPS_INFO','./index.php?module=SecurityGroups&action=info');




  

$admin_group_header[]= array('LBL_SECURITYGROUPS','',false,$admin_option_defs, '');





    //Dashboard Manager Panel
    $admin_option_defs=array();
    $admin_option_defs['Administration']['DashboardManager_DashboardManager'] = array('ModuleLoader','LBL_DASHBOARD_MANAGER','LBL_DASHBOARD_MANAGER_DESCRIPTION','index.php?module=dash_DashboardManager');
    $admin_option_defs['Administration']['DashboardManager_DashboardBackup'] = array('Backups','LBL_DASHBOARD_BACKUPS','LBL_DASHBOARD_BACKUPS_DESCRIPTION','index.php?module=dash_DashboardBackups');
    $admin_group_header[]= array('LBL_DASHBOARD_MANAGEMENT', '', false, $admin_option_defs, '');

?>