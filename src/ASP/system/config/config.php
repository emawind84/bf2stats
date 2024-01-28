<?php
/***************************************
*  Battlefield 2 Private Stats Config  *
****************************************
* All comments have been removed from  *
* this file. Please use the Web Admin  *
* to change values.                    *
***************************************/
$db_host = '127.0.0.1';
$db_port = 3306;
$db_name = 'bf2stats';
$db_user = 'admin';
$db_pass = 'admin';
$admin_user = 'admin';
$admin_pass = 'admin';
$admin_hosts = array('127.0.0.1','192.168.2.0/24','localhost','192.168.1.102','192.168.1.110','0.0.0.0');
$admin_backup_path = 'C:/wamp/www/ASP/system/database/backups/';
$admin_backup_ext = '.bak';
$admin_ignore_ai = 0;
$stats_ignore_ai = 0;
$stats_min_game_time = 0;
$stats_min_player_game_time = 0;
$stats_players_min = 1;
$stats_players_max = 256;
$stats_rank_check = 0;
$stats_rank_tenure = 7;
$stats_process_smoc = 1;
$stats_process_gen = 1;
$stats_awds_complete = 0;
$stats_lan_override = '174.49.21.221';
$stats_local_pids = array('LocalPlayer01','210.84.29.151','LocalPlayer02','210.84.29.151');
$bfhq_hide_bots = false;
$bfhq_hide_hidden_players = false;
$bfhq_hide_pids_start = 1;
$bfhq_hide_pids_end = 999999999;
$debug_lvl = 2;
$game_hosts = array('127.0.0.1','192.168.2.0/24','192.168.1.102','192.168.1.110','localhost','::1');
$game_custom_mapid = 700;
$game_unlocks = 0;
$game_unlocks_bonus = 2;
$game_unlocks_bonus_min = 1;
$game_awds_ignore_time = 0;
$game_default_pid = 29000000;
?>
