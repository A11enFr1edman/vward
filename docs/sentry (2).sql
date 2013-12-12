-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 12 月 13 日 00:53
-- 服务器版本: 5.5.29
-- PHP 版本: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `sentry`
--

-- --------------------------------------------------------

--
-- 表的结构 `accessgroup`
--

CREATE TABLE `accessgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `managed` tinyint(1) NOT NULL,
  `data` longtext,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accessgroup_team_id_2b24bc5cfcd1a84_uniq` (`team_id`,`name`),
  KEY `accessgroup_95e8aaa1` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `accessgroup_members`
--

CREATE TABLE `accessgroup_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accessgroup_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accessgroup_members_accessgroup_id_18b186be5753dc4e_uniq` (`accessgroup_id`,`user_id`),
  KEY `accessgroup_members_510cf1bf` (`accessgroup_id`),
  KEY `accessgroup_members_6340c63c` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `accessgroup_projects`
--

CREATE TABLE `accessgroup_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accessgroup_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accessgroup_project_accessgroup_id_16d324e6ca4c312f_uniq` (`accessgroup_id`,`project_id`),
  KEY `accessgroup_projects_510cf1bf` (`accessgroup_id`),
  KEY `accessgroup_projects_37952554` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `type` int(10) unsigned NOT NULL,
  `ident` varchar(64) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL,
  `data` longtext,
  PRIMARY KEY (`id`),
  KEY `activity_37952554` (`project_id`),
  KEY `activity_5f412f9a` (`group_id`),
  KEY `activity_a41e20fe` (`event_id`),
  KEY `activity_6340c63c` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `alert`
--

CREATE TABLE `alert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL,
  `message` longtext NOT NULL,
  `data` longtext,
  `status` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `alert_37952554` (`project_id`),
  KEY `alert_5f412f9a` (`group_id`),
  KEY `alert_48fb58bb` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `alertrelatedgroup`
--

CREATE TABLE `alertrelatedgroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `alert_id` int(11) NOT NULL,
  `data` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alertrelatedgroup_group_id_50403ae25779becb_uniq` (`group_id`,`alert_id`),
  KEY `alertrelatedgroup_5f412f9a` (`group_id`),
  KEY `alertrelatedgroup_3b6b9524` (`alert_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `auth_group`
--

CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `auth_group_permissions`
--

CREATE TABLE `auth_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_id` (`group_id`,`permission_id`),
  KEY `auth_group_permissions_5f412f9a` (`group_id`),
  KEY `auth_group_permissions_83d7f98b` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `auth_permission`
--

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `content_type_id` (`content_type_id`,`codename`),
  KEY `auth_permission_37ef4eb4` (`content_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=143 ;

--
-- 转存表中的数据 `auth_permission`
--

INSERT INTO `auth_permission` (`id`, `name`, `content_type_id`, `codename`) VALUES
(1, 'Can add permission', 1, 'add_permission'),
(2, 'Can change permission', 1, 'change_permission'),
(3, 'Can delete permission', 1, 'delete_permission'),
(4, 'Can add group', 2, 'add_group'),
(5, 'Can change group', 2, 'change_group'),
(6, 'Can delete group', 2, 'delete_group'),
(7, 'Can add user', 3, 'add_user'),
(8, 'Can change user', 3, 'change_user'),
(9, 'Can delete user', 3, 'delete_user'),
(10, 'Can add log entry', 4, 'add_logentry'),
(11, 'Can change log entry', 4, 'change_logentry'),
(12, 'Can delete log entry', 4, 'delete_logentry'),
(13, 'Can add content type', 5, 'add_contenttype'),
(14, 'Can change content type', 5, 'change_contenttype'),
(15, 'Can delete content type', 5, 'delete_contenttype'),
(16, 'Can add session', 6, 'add_session'),
(17, 'Can change session', 6, 'change_session'),
(18, 'Can delete session', 6, 'delete_session'),
(19, 'Can add site', 7, 'add_site'),
(20, 'Can change site', 7, 'change_site'),
(21, 'Can delete site', 7, 'delete_site'),
(22, 'Can add migration history', 8, 'add_migrationhistory'),
(23, 'Can change migration history', 8, 'change_migrationhistory'),
(24, 'Can delete migration history', 8, 'delete_migrationhistory'),
(25, 'Can add task state', 9, 'add_taskmeta'),
(26, 'Can change task state', 9, 'change_taskmeta'),
(27, 'Can delete task state', 9, 'delete_taskmeta'),
(28, 'Can add saved group result', 10, 'add_tasksetmeta'),
(29, 'Can change saved group result', 10, 'change_tasksetmeta'),
(30, 'Can delete saved group result', 10, 'delete_tasksetmeta'),
(31, 'Can add interval', 11, 'add_intervalschedule'),
(32, 'Can change interval', 11, 'change_intervalschedule'),
(33, 'Can delete interval', 11, 'delete_intervalschedule'),
(34, 'Can add crontab', 12, 'add_crontabschedule'),
(35, 'Can change crontab', 12, 'change_crontabschedule'),
(36, 'Can delete crontab', 12, 'delete_crontabschedule'),
(37, 'Can add periodic tasks', 13, 'add_periodictasks'),
(38, 'Can change periodic tasks', 13, 'change_periodictasks'),
(39, 'Can delete periodic tasks', 13, 'delete_periodictasks'),
(40, 'Can add periodic task', 14, 'add_periodictask'),
(41, 'Can change periodic task', 14, 'change_periodictask'),
(42, 'Can delete periodic task', 14, 'delete_periodictask'),
(43, 'Can add worker', 15, 'add_workerstate'),
(44, 'Can change worker', 15, 'change_workerstate'),
(45, 'Can delete worker', 15, 'delete_workerstate'),
(46, 'Can add task', 16, 'add_taskstate'),
(47, 'Can change task', 16, 'change_taskstate'),
(48, 'Can delete task', 16, 'delete_taskstate'),
(49, 'Can add queue', 17, 'add_queue'),
(50, 'Can change queue', 17, 'change_queue'),
(51, 'Can delete queue', 17, 'delete_queue'),
(52, 'Can add message', 18, 'add_message'),
(53, 'Can change message', 18, 'change_message'),
(54, 'Can delete message', 18, 'delete_message'),
(55, 'Can add option', 19, 'add_option'),
(56, 'Can change option', 19, 'change_option'),
(57, 'Can delete option', 19, 'delete_option'),
(58, 'Can add team', 20, 'add_team'),
(59, 'Can change team', 20, 'change_team'),
(60, 'Can delete team', 20, 'delete_team'),
(61, 'Can add access group', 21, 'add_accessgroup'),
(62, 'Can change access group', 21, 'change_accessgroup'),
(63, 'Can delete access group', 21, 'delete_accessgroup'),
(64, 'Can add team member', 22, 'add_teammember'),
(65, 'Can change team member', 22, 'change_teammember'),
(66, 'Can delete team member', 22, 'delete_teammember'),
(67, 'Can add project', 23, 'add_project'),
(68, 'Can change project', 23, 'change_project'),
(69, 'Can delete project', 23, 'delete_project'),
(70, 'Can add project key', 24, 'add_projectkey'),
(71, 'Can change project key', 24, 'change_projectkey'),
(72, 'Can delete project key', 24, 'delete_projectkey'),
(73, 'Can add project option', 25, 'add_projectoption'),
(74, 'Can change project option', 25, 'change_projectoption'),
(75, 'Can delete project option', 25, 'delete_projectoption'),
(76, 'Can add pending team member', 26, 'add_pendingteammember'),
(77, 'Can change pending team member', 26, 'change_pendingteammember'),
(78, 'Can delete pending team member', 26, 'delete_pendingteammember'),
(79, 'Can add grouped message', 27, 'add_group'),
(80, 'Can change grouped message', 27, 'change_group'),
(81, 'Can delete grouped message', 27, 'delete_group'),
(82, 'Can view', 27, 'can_view'),
(83, 'Can add group meta', 28, 'add_groupmeta'),
(84, 'Can change group meta', 28, 'change_groupmeta'),
(85, 'Can delete group meta', 28, 'delete_groupmeta'),
(86, 'Can add message', 29, 'add_event'),
(87, 'Can change message', 29, 'change_event'),
(88, 'Can delete message', 29, 'delete_event'),
(89, 'Can add event mapping', 30, 'add_eventmapping'),
(90, 'Can change event mapping', 30, 'change_eventmapping'),
(91, 'Can delete event mapping', 30, 'delete_eventmapping'),
(92, 'Can add group bookmark', 31, 'add_groupbookmark'),
(93, 'Can change group bookmark', 31, 'change_groupbookmark'),
(94, 'Can delete group bookmark', 31, 'delete_groupbookmark'),
(95, 'Can add tag key', 32, 'add_tagkey'),
(96, 'Can change tag key', 32, 'change_tagkey'),
(97, 'Can delete tag key', 32, 'delete_tagkey'),
(98, 'Can add tag value', 33, 'add_tagvalue'),
(99, 'Can change tag value', 33, 'change_tagvalue'),
(100, 'Can delete tag value', 33, 'delete_tagvalue'),
(101, 'Can add group tag key', 34, 'add_grouptagkey'),
(102, 'Can change group tag key', 34, 'change_grouptagkey'),
(103, 'Can delete group tag key', 34, 'delete_grouptagkey'),
(104, 'Can add group tag', 35, 'add_grouptag'),
(105, 'Can change group tag', 35, 'change_grouptag'),
(106, 'Can delete group tag', 35, 'delete_grouptag'),
(107, 'Can add group count by minute', 36, 'add_groupcountbyminute'),
(108, 'Can change group count by minute', 36, 'change_groupcountbyminute'),
(109, 'Can delete group count by minute', 36, 'delete_groupcountbyminute'),
(110, 'Can add project count by minute', 37, 'add_projectcountbyminute'),
(111, 'Can change project count by minute', 37, 'change_projectcountbyminute'),
(112, 'Can delete project count by minute', 37, 'delete_projectcountbyminute'),
(113, 'Can add user option', 38, 'add_useroption'),
(114, 'Can change user option', 38, 'change_useroption'),
(115, 'Can delete user option', 38, 'delete_useroption'),
(116, 'Can add lost password hash', 39, 'add_lostpasswordhash'),
(117, 'Can change lost password hash', 39, 'change_lostpasswordhash'),
(118, 'Can delete lost password hash', 39, 'delete_lostpasswordhash'),
(119, 'Can add activity', 40, 'add_activity'),
(120, 'Can change activity', 40, 'change_activity'),
(121, 'Can delete activity', 40, 'delete_activity'),
(122, 'Can add group seen', 41, 'add_groupseen'),
(123, 'Can change group seen', 41, 'change_groupseen'),
(124, 'Can delete group seen', 41, 'delete_groupseen'),
(125, 'Can add alert', 42, 'add_alert'),
(126, 'Can change alert', 42, 'change_alert'),
(127, 'Can delete alert', 42, 'delete_alert'),
(128, 'Can add alert related group', 43, 'add_alertrelatedgroup'),
(129, 'Can change alert related group', 43, 'change_alertrelatedgroup'),
(130, 'Can delete alert related group', 43, 'delete_alertrelatedgroup'),
(131, 'Can add node', 44, 'add_node'),
(132, 'Can change node', 44, 'change_node'),
(133, 'Can delete node', 44, 'delete_node'),
(134, 'Can add user social auth', 45, 'add_usersocialauth'),
(135, 'Can change user social auth', 45, 'change_usersocialauth'),
(136, 'Can delete user social auth', 45, 'delete_usersocialauth'),
(137, 'Can add nonce', 46, 'add_nonce'),
(138, 'Can change nonce', 46, 'change_nonce'),
(139, 'Can delete nonce', 46, 'delete_nonce'),
(140, 'Can add association', 47, 'add_association'),
(141, 'Can change association', 47, 'change_association'),
(142, 'Can delete association', 47, 'delete_association');

-- --------------------------------------------------------

--
-- 表的结构 `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` char(32) NOT NULL,
  `salt` char(32) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `auth_user`
--

INSERT INTO `auth_user` (`id`, `password`, `salt`, `last_login`, `is_superuser`, `username`, `first_name`, `last_name`, `email`, `is_staff`, `is_active`, `date_joined`) VALUES
(1, '5hF6e7D03vOe8tv9S1b1UysAQCnrgXaA', 'FcamaESbST1zp3UvShbrH7NgdhtdulH1', '2013-11-19 15:42:10', 1, 'summic', '', '', 'hi@summic.com', 1, 1, '2013-11-19 15:42:10');

-- --------------------------------------------------------

--
-- 表的结构 `auth_user_groups`
--

CREATE TABLE `auth_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`group_id`),
  KEY `auth_user_groups_6340c63c` (`user_id`),
  KEY `auth_user_groups_5f412f9a` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `auth_user_user_permissions`
--

CREATE TABLE `auth_user_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`permission_id`),
  KEY `auth_user_user_permissions_6340c63c` (`user_id`),
  KEY `auth_user_user_permissions_83d7f98b` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `eventmapping`
--

CREATE TABLE `eventmapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `event_id` varchar(32) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventmapping_project_id_eb6c54bf8930ba6_uniq` (`project_id`,`event_id`),
  KEY `eventmapping_37952554` (`project_id`),
  KEY `eventmapping_5f412f9a` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `eventmapping`
--

INSERT INTO `eventmapping` (`id`, `project_id`, `group_id`, `event_id`, `date_added`) VALUES
(1, 1, 1, '8cf9c6446d204499a844bfb916a71670', '2013-11-19 15:43:59');

-- --------------------------------------------------------

--
-- 表的结构 `filterkey`
--

CREATE TABLE `filterkey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `key` varchar(32) NOT NULL,
  `values_seen` int(10) unsigned NOT NULL,
  `label` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filterkey_project_id_67551b8e28dda5a_uniq` (`project_id`,`key`),
  KEY `filterkey_37952554` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `filterkey`
--

INSERT INTO `filterkey` (`id`, `project_id`, `key`, `values_seen`, `label`) VALUES
(1, 1, 'level', 1, NULL),
(2, 1, 'logger', 1, NULL),
(3, 1, 'server_name', 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `filtervalue`
--

CREATE TABLE `filtervalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(32) NOT NULL,
  `value` varchar(200) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `times_seen` int(10) unsigned NOT NULL,
  `last_seen` datetime DEFAULT NULL,
  `first_seen` datetime DEFAULT NULL,
  `data` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `filtervalue_project_id_201b156195347397_uniq` (`project_id`,`key`,`value`),
  KEY `filtervalue_37952554` (`project_id`),
  KEY `filtervalue_be0e8b5c` (`last_seen`),
  KEY `filtervalue_b38d6251` (`first_seen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `filtervalue`
--

INSERT INTO `filtervalue` (`id`, `key`, `value`, `project_id`, `times_seen`, `last_seen`, `first_seen`, `data`) VALUES
(1, 'level', 'error', 1, 1, '2013-11-19 15:43:59', '2013-11-19 15:43:59', NULL),
(2, 'logger', 'php', 1, 1, '2013-11-19 15:43:59', '2013-11-19 15:43:59', NULL),
(3, 'server_name', 'allanwang-NB.local', 1, 1, '2013-11-19 15:43:59', '2013-11-19 15:43:59', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `groupbookmark`
--

CREATE TABLE `groupbookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groupbookmark_project_id_6d2bb88ad3832208_uniq` (`project_id`,`user_id`,`group_id`),
  KEY `groupbookmark_37952554` (`project_id`),
  KEY `groupbookmark_5f412f9a` (`group_id`),
  KEY `groupbookmark_6340c63c` (`user_id`),
  KEY `groupbookmark_user_id_5eedb134f529cf58` (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `groupedmessage`
--

CREATE TABLE `groupedmessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logger` varchar(64) NOT NULL,
  `level` int(10) unsigned NOT NULL,
  `message` longtext NOT NULL,
  `view` varchar(200) DEFAULT NULL,
  `checksum` varchar(32) NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `times_seen` int(10) unsigned NOT NULL,
  `last_seen` datetime NOT NULL,
  `first_seen` datetime NOT NULL,
  `data` longtext,
  `score` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `time_spent_total` int(11) NOT NULL,
  `time_spent_count` int(11) NOT NULL,
  `resolved_at` datetime DEFAULT NULL,
  `active_at` datetime DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT NULL,
  `platform` varchar(64) DEFAULT NULL,
  `num_comments` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groupedmessage_project_id_31ef19bb52cc13be_uniq` (`project_id`,`checksum`),
  KEY `groupedmessage_60248098` (`logger`),
  KEY `groupedmessage_b8f3f94a` (`level`),
  KEY `groupedmessage_af3374d1` (`view`),
  KEY `groupedmessage_0fefc3ab` (`checksum`),
  KEY `groupedmessage_be0e8b5c` (`last_seen`),
  KEY `groupedmessage_b38d6251` (`first_seen`),
  KEY `groupedmessage_48fb58bb` (`status`),
  KEY `groupedmessage_7241a6bd` (`times_seen`),
  KEY `groupedmessage_37952554` (`project_id`),
  KEY `groupedmessage_f78ef457` (`resolved_at`),
  KEY `groupedmessage_47488fba` (`active_at`),
  KEY `groupedmessage_project_id_31ef19bb52cc13be` (`project_id`,`checksum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `groupedmessage`
--

INSERT INTO `groupedmessage` (`id`, `logger`, `level`, `message`, `view`, `checksum`, `status`, `times_seen`, `last_seen`, `first_seen`, `data`, `score`, `project_id`, `time_spent_total`, `time_spent_count`, `resolved_at`, `active_at`, `is_public`, `platform`, `num_comments`) VALUES
(1, 'php', 40, 'This is a test exception sent from the Raven CLI.', '', 'ad196ffd7ac755b551a41a59a10d21dd', 0, 1, '2013-11-19 15:43:59', '2013-11-19 15:43:59', NULL, 1384847039, 1, 0, 0, NULL, '2013-11-19 15:43:59', 0, 'php', 0),
(2, 'php', 40, 'This is a test exception sent from the Raven CLISSSSSSSSS.', '0', '3f65eaa63ea6236540df98a655e7aebb', 0, 1, '2013-11-25 17:35:06', '2013-11-25 17:35:06', NULL, 0, 1, 0, 0, NULL, '2013-11-25 17:35:06', 0, 'php', 0);

-- --------------------------------------------------------

--
-- 表的结构 `groupmeta`
--

CREATE TABLE `groupmeta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `key` varchar(64) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groupmeta_key_5d9d7a3c6538b14d_uniq` (`key`,`group_id`),
  KEY `groupmeta_5f412f9a` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `groupseen`
--

CREATE TABLE `groupseen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_seen` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `groupseen_user_id_179917bc9974d91b_uniq` (`user_id`,`group_id`),
  KEY `groupseen_37952554` (`project_id`),
  KEY `groupseen_5f412f9a` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `grouptagkey`
--

CREATE TABLE `grouptagkey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `key` varchar(32) NOT NULL,
  `values_seen` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `grouptagkey_project_id_7b0c8092f47b509f_uniq` (`project_id`,`group_id`,`key`),
  KEY `grouptagkey_37952554` (`project_id`),
  KEY `grouptagkey_5f412f9a` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `grouptagkey`
--

INSERT INTO `grouptagkey` (`id`, `project_id`, `group_id`, `key`, `values_seen`) VALUES
(1, 1, 1, 'level', 1),
(2, 1, 1, 'logger', 1),
(3, 1, 1, 'server_name', 1);

-- --------------------------------------------------------

--
-- 表的结构 `lostpasswordhash`
--

CREATE TABLE `lostpasswordhash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logger` varchar(64) NOT NULL,
  `level` int(10) unsigned NOT NULL,
  `message` longtext NOT NULL,
  `view` varchar(200) DEFAULT NULL,
  `server_name` varchar(128) DEFAULT NULL,
  `checksum` varchar(32) NOT NULL,
  `datetime` datetime NOT NULL,
  `data` longtext,
  `group_id` int(11) DEFAULT NULL,
  `site` varchar(128) DEFAULT NULL,
  `message_id` varchar(32) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `time_spent` int(11) DEFAULT NULL,
  `platform` varchar(64) DEFAULT NULL,
  `num_comments` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `message_project_id_b6b4e75e438ca83_uniq` (`project_id`,`message_id`),
  KEY `message_60248098` (`logger`),
  KEY `message_b8f3f94a` (`level`),
  KEY `message_af3374d1` (`view`),
  KEY `message_e1481c56` (`server_name`),
  KEY `message_0fefc3ab` (`checksum`),
  KEY `message_d8a12f30` (`datetime`),
  KEY `message_5f412f9a` (`group_id`),
  KEY `message_99732b5c` (`site`),
  KEY `message_37952554` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `logger`, `level`, `message`, `view`, `server_name`, `checksum`, `datetime`, `data`, `group_id`, `site`, `message_id`, `project_id`, `time_spent`, `platform`, `num_comments`) VALUES
(1, 'php', 40, 'This is a test exception sent from the Raven CLI.', '', 'allanwang-NB.local', 'ad196ffd7ac755b551a41a59a10d21dd', '2013-11-19 15:43:59', 'eJzTSCkw5ApWz8tPSY3PTFHnKjAC8kxTTI3MTJIsLQxS0kxSzU2TTM3MLNIMLdIskpJMkg1TgcqMuYr1APetEC8=', 1, '', '8cf9c6446d204499a844bfb916a71670', 1, NULL, 'php', 0);

-- --------------------------------------------------------

--
-- 表的结构 `messagecountbyminute`
--

CREATE TABLE `messagecountbyminute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `times_seen` int(10) unsigned NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `time_spent_total` int(11) NOT NULL,
  `time_spent_count` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `messagecountbyminute_project_id_32e80903f7cb1505_uniq` (`project_id`,`date`,`group_id`),
  KEY `messagecountbyminute_5f412f9a` (`group_id`),
  KEY `messagecountbyminute_37952554` (`project_id`),
  KEY `messagecountbyminute_eeede814` (`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `messagecountbyminute`
--

INSERT INTO `messagecountbyminute` (`id`, `group_id`, `date`, `times_seen`, `project_id`, `time_spent_total`, `time_spent_count`) VALUES
(1, 1, '2013-11-19 15:30:00', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `messagefiltervalue`
--

CREATE TABLE `messagefiltervalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `times_seen` int(10) unsigned NOT NULL,
  `key` varchar(32) NOT NULL,
  `value` varchar(200) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `last_seen` datetime DEFAULT NULL,
  `first_seen` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `messagefiltervalue_project_id_330bd94e129c0cb7_uniq` (`project_id`,`group_id`,`value`,`key`),
  KEY `messagefiltervalue_5f412f9a` (`group_id`),
  KEY `messagefiltervalue_37952554` (`project_id`),
  KEY `messagefiltervalue_be0e8b5c` (`last_seen`),
  KEY `messagefiltervalue_b38d6251` (`first_seen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `messagefiltervalue`
--

INSERT INTO `messagefiltervalue` (`id`, `group_id`, `times_seen`, `key`, `value`, `project_id`, `last_seen`, `first_seen`) VALUES
(1, 1, 1, 'level', 'error', 1, '2013-11-19 15:43:59', '2013-11-19 15:43:59'),
(2, 1, 1, 'logger', 'php', 1, '2013-11-19 15:43:59', '2013-11-19 15:43:59'),
(3, 1, 1, 'server_name', 'allanwang-NB.local', 1, '2013-11-19 15:43:59', '2013-11-19 15:43:59');

-- --------------------------------------------------------

--
-- 表的结构 `messageindex`
--

CREATE TABLE `messageindex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(10) unsigned NOT NULL,
  `column` varchar(32) NOT NULL,
  `value` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `messageindex_column_23431fca14e385c1_uniq` (`column`,`value`,`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `nodestore_node`
--

CREATE TABLE `nodestore_node` (
  `id` varchar(40) NOT NULL,
  `data` longtext NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nodestore_node_d80b9c9a` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nodestore_node`
--

INSERT INTO `nodestore_node` (`id`, `data`, `timestamp`) VALUES
('5d5264b980df4e75b5668f18f8bb4c1e', 'eJylVUtv2zgQvutXsIYBy0Dih97ObnLYNocCRQ/brk8LGIxMy8LKpEDSLxT57/1mpDhu0cs2RgKI8+LMfB9nwnU7D76MnNLenie19spuZKnc5PFUqtbXRo+CNgrCdRvD7CCbvXKQJEHYtCmJM/L2svzPW/hBlZO0gHRj5Y6NF2Q8n5F8Tpdt9rrsI8+jYKn3TYOvOHBfRvLJrVrpt6RKguV0aZo9gkwfXWuVc2b6wRx1Y+TaTa08KH3bbtvbnXRIe/pU604I35SCwWVVGpR08hQv4zTyYBnIZb0RYWn22odDaavDWLy7F/FYfINZAbXAT51qH47+cbJSd4LjCq+cF3+unX4Yjf+A6QKmz/gPJN1mnL+6LprRddGcEjlIS32IuI8RF7oz631D7YpQZp91xFlv6kZpdI502e+3IMopWFNrpQ2FKoKPSUGi0jSdZBF8xrHWK9m2OMczPq+ll3SaM+ZR58FFrSgYqeJguZO1DqkHcRI4SZZpUBGYpIA0C1z1FgDjnAIwYnHBiBEkw7KpQVRxL7Q6ir/JdPWeReEQqNwIaa08h3Bf9B70G3XMFPcPwtu9ugF7Z716TCUk8w7CqoMsQRVXl90+lLL1e6suDyIcqhP7xezXGTcoYaWsNRbZXVwr5T9B8UhybleS9A5EwHdq1/pzeOU7Zgom6VX2TMPB162yShylE1KL7ho82XWtK+G3qiOmQjv83b/72SwttRADMblOi2/PuEymYUIdviIfkaN6C+GSBQUAzYgSFbOrYk5VHZfSGcTEHe6XOqFP7LlCs1ZUQDgozW4n9VoQ/QcvaA42xgwIvMGTtANGLJ13pEujjnQ/xoE+fiP90uRCvzRl+r3MrJ9zHvY53wgaJG4MXzR5+a1HcDoVH4xwZqf8lsByddOcYZP3egxdQjwtXvmXLroWPYtS+nIrwgvxqGtMkGx2RRCrwE7WoTPZvNc84zt6HU896BnaT2lCmfAZxaG9OAJ4tBcfoIVb9kXhiMd3jQokgPkH4uSzNxInn/fEAZS/Ik4eXRGHm7a15sgj4PVNjr5uayfwJ/vHcGkarTaxsWbHL4WHhnj/6eOER3gOpkiHGefPLS8v1HUJimPaP5Lfq+0OFbV51q0AbE66APvnf6cKt+IlT1nRKsl5pxYgDGY8Hn4DWUG7ld86HaLAtwUmFBmYqlIsRCXIEx8paTPWOmUPyq76lVMgP9k0Uh+lrm4//zVpTCmxnouCPBa86bALLO2IBa/0BeCbfAc2rZAP', '2013-11-19 15:43:59');

-- --------------------------------------------------------

--
-- 表的结构 `option`
--

CREATE TABLE `option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(64) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `option_key_4b34ba95f566b2e7_uniq` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pendingteammember`
--

CREATE TABLE `pendingteammember` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `type` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pendingteammember_team_id_5844f21712e0ad85_uniq` (`team_id`,`email`),
  KEY `pendingteammember_95e8aaa1` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `public` tinyint(1) NOT NULL,
  `date_added` datetime NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `platform` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `project_slug_7e0cc0d379eb3e42_uniq` (`slug`,`team_id`),
  KEY `project_cb902d83` (`owner_id`),
  KEY `project_48fb58bb` (`status`),
  KEY `project_95e8aaa1` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `project`
--

INSERT INTO `project` (`id`, `name`, `owner_id`, `public`, `date_added`, `status`, `slug`, `team_id`, `platform`) VALUES
(1, '默认', 1, 0, '2013-11-19 15:42:22', 0, 'sentry', 1, 'django');

-- --------------------------------------------------------

--
-- 表的结构 `projectcountbyminute`
--

CREATE TABLE `projectcountbyminute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `times_seen` int(10) unsigned NOT NULL,
  `time_spent_total` int(11) NOT NULL,
  `time_spent_count` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projectcountbyminute_project_id_715736d47d350a1d_uniq` (`project_id`,`date`),
  KEY `projectcountbyminute_37952554` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `projectcountbyminute`
--

INSERT INTO `projectcountbyminute` (`id`, `project_id`, `date`, `times_seen`, `time_spent_total`, `time_spent_count`) VALUES
(1, 1, '2013-11-19 15:30:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `projectkey`
--

CREATE TABLE `projectkey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `public_key` varchar(32) DEFAULT NULL,
  `secret_key` varchar(32) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_added_id` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `public_key` (`public_key`),
  UNIQUE KEY `secret_key` (`secret_key`),
  KEY `projectkey_37952554` (`project_id`),
  KEY `projectkey_6340c63c` (`user_id`),
  KEY `projectkey_f30a6216` (`user_added_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `projectkey`
--

INSERT INTO `projectkey` (`id`, `project_id`, `public_key`, `secret_key`, `user_id`, `user_added_id`, `date_added`) VALUES
(1, 1, '434573489cc14620b2a1e76b34e3fcb9', '74390287a58a49249087bd970cf9c7af', NULL, NULL, '2013-11-19 15:42:22');

-- --------------------------------------------------------

--
-- 表的结构 `projectoptions`
--

CREATE TABLE `projectoptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `key` varchar(64) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projectoptions_project_id_2d0b5c5d84cdbe8f_uniq` (`project_id`,`key`),
  KEY `projectoptions_37952554` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `searchdocument`
--

CREATE TABLE `searchdocument` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `total_events` int(10) unsigned NOT NULL,
  `date_added` datetime NOT NULL,
  `date_changed` datetime NOT NULL,
  `status` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `searchdocument_project_id_4f05eb93749c83a8_uniq` (`project_id`,`group_id`),
  KEY `searchdocument_37952554` (`project_id`),
  KEY `searchdocument_5f412f9a` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `searchdocument`
--

INSERT INTO `searchdocument` (`id`, `project_id`, `group_id`, `total_events`, `date_added`, `date_changed`, `status`) VALUES
(1, 1, 1, 1, '2013-11-19 15:43:59', '2013-11-19 15:43:59', 0);

-- --------------------------------------------------------

--
-- 表的结构 `searchtoken`
--

CREATE TABLE `searchtoken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) NOT NULL,
  `field` varchar(64) NOT NULL,
  `token` varchar(128) NOT NULL,
  `times_seen` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `searchtoken_document_id_18d24748e6f3dee3_uniq` (`document_id`,`field`,`token`),
  KEY `searchtoken_b7398729` (`document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `searchtoken`
--

INSERT INTO `searchtoken` (`id`, `document_id`, `field`, `token`, `times_seen`) VALUES
(1, 1, 'text', 'bin', 2),
(2, 1, 'text', 'exception', 4),
(3, 1, 'text', 'from', 3),
(4, 1, 'text', 'cli', 3),
(5, 1, 'text', 'this', 3),
(6, 1, 'text', 'downloads', 2),
(7, 1, 'text', 'espresso', 2),
(8, 1, 'text', 'allanwang', 2),
(9, 1, 'text', 'master', 2),
(10, 1, 'text', 'volumes', 2),
(11, 1, 'text', 'test', 3),
(12, 1, 'text', 'php', 3),
(13, 1, 'text', 'local', 2),
(14, 1, 'text', 'sent', 3),
(15, 1, 'text', 'raven', 5);

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `name` varchar(64) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `team_cb902d83` (`owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `team`
--

INSERT INTO `team` (`id`, `slug`, `name`, `owner_id`, `date_added`) VALUES
(1, 'sentry', 'Sentry', 1, '2013-11-19 15:42:22');

-- --------------------------------------------------------

--
-- 表的结构 `teammember`
--

CREATE TABLE `teammember` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teammember_team_id_66e63508dc6377a0_uniq` (`team_id`,`user_id`),
  KEY `teammember_95e8aaa1` (`team_id`),
  KEY `teammember_6340c63c` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `teammember`
--

INSERT INTO `teammember` (`id`, `team_id`, `user_id`, `type`, `date_added`) VALUES
(1, 1, 1, 0, '2013-11-19 15:42:22');

-- --------------------------------------------------------

--
-- 表的结构 `useroption`
--

CREATE TABLE `useroption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `key` varchar(64) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `useroption_user_id_4d4ce0b1f7bb578b_uniq` (`user_id`,`project_id`,`key`),
  KEY `useroption_6340c63c` (`user_id`),
  KEY `useroption_37952554` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 限制导出的表
--

--
-- 限制表 `accessgroup`
--
ALTER TABLE `accessgroup`
  ADD CONSTRAINT `team_id_refs_id_e1664123` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`);

--
-- 限制表 `accessgroup_members`
--
ALTER TABLE `accessgroup_members`
  ADD CONSTRAINT `accessgroup_id_refs_id_f3ae2537` FOREIGN KEY (`accessgroup_id`) REFERENCES `accessgroup` (`id`),
  ADD CONSTRAINT `user_id_refs_id_116848ad` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `accessgroup_projects`
--
ALTER TABLE `accessgroup_projects`
  ADD CONSTRAINT `accessgroup_id_refs_id_6d33e3cb` FOREIGN KEY (`accessgroup_id`) REFERENCES `accessgroup` (`id`),
  ADD CONSTRAINT `project_id_refs_id_988f77dc` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `event_id_refs_id_be5b9598` FOREIGN KEY (`event_id`) REFERENCES `message` (`id`),
  ADD CONSTRAINT `group_id_refs_id_b84d67ec` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_0c94d99e` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `user_id_refs_id_6caec40e` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `group_id_refs_id_02f9305a` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_199010cc` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `alertrelatedgroup`
--
ALTER TABLE `alertrelatedgroup`
  ADD CONSTRAINT `alert_id_refs_id_318c5c87` FOREIGN KEY (`alert_id`) REFERENCES `alert` (`id`),
  ADD CONSTRAINT `group_id_refs_id_60f6fe2e` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`);

--
-- 限制表 `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD CONSTRAINT `group_id_refs_id_f4b32aac` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  ADD CONSTRAINT `permission_id_refs_id_6ba0f519` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`);

--
-- 限制表 `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD CONSTRAINT `group_id_refs_id_274b862c` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  ADD CONSTRAINT `user_id_refs_id_40c41112` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD CONSTRAINT `permission_id_refs_id_35d9ac25` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `user_id_refs_id_4dc23c39` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `eventmapping`
--
ALTER TABLE `eventmapping`
  ADD CONSTRAINT `group_id_refs_id_9280c863` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_953eb70b` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `filterkey`
--
ALTER TABLE `filterkey`
  ADD CONSTRAINT `project_id_refs_id_c385a797` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `filtervalue`
--
ALTER TABLE `filtervalue`
  ADD CONSTRAINT `project_id_refs_id_ee7bf50d` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `groupbookmark`
--
ALTER TABLE `groupbookmark`
  ADD CONSTRAINT `group_id_refs_id_3738447a` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_18390fbc` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `user_id_refs_id_05ac45cc` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `groupedmessage`
--
ALTER TABLE `groupedmessage`
  ADD CONSTRAINT `project_id_refs_id_77344b57` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `groupmeta`
--
ALTER TABLE `groupmeta`
  ADD CONSTRAINT `group_id_refs_id_6dc57728` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`);

--
-- 限制表 `groupseen`
--
ALTER TABLE `groupseen`
  ADD CONSTRAINT `group_id_refs_id_09b2694a` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_67db0efd` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `user_id_refs_id_270b7315` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `grouptagkey`
--
ALTER TABLE `grouptagkey`
  ADD CONSTRAINT `group_id_refs_id_d78dfb94` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_fef15df1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `lostpasswordhash`
--
ALTER TABLE `lostpasswordhash`
  ADD CONSTRAINT `user_id_refs_id_c60bdf9b` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `group_id_refs_id_249fad1d` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_3d28fcbe` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `messagecountbyminute`
--
ALTER TABLE `messagecountbyminute`
  ADD CONSTRAINT `group_id_refs_id_b6354eb4` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_52bb1640` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `messagefiltervalue`
--
ALTER TABLE `messagefiltervalue`
  ADD CONSTRAINT `group_id_refs_id_1fb6dc4e` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_b5eaf112` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `pendingteammember`
--
ALTER TABLE `pendingteammember`
  ADD CONSTRAINT `team_id_refs_id_829d6824` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`);

--
-- 限制表 `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `owner_id_refs_id_5fcf21c1` FOREIGN KEY (`owner_id`) REFERENCES `auth_user` (`id`),
  ADD CONSTRAINT `team_id_refs_id_78750968` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`);

--
-- 限制表 `projectcountbyminute`
--
ALTER TABLE `projectcountbyminute`
  ADD CONSTRAINT `project_id_refs_id_ef28ef7a` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `projectkey`
--
ALTER TABLE `projectkey`
  ADD CONSTRAINT `project_id_refs_id_e4d8a857` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `user_added_id_refs_id_1dd3646b` FOREIGN KEY (`user_added_id`) REFERENCES `auth_user` (`id`),
  ADD CONSTRAINT `user_id_refs_id_1dd3646b` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `projectoptions`
--
ALTER TABLE `projectoptions`
  ADD CONSTRAINT `project_id_refs_id_9b845024` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `searchdocument`
--
ALTER TABLE `searchdocument`
  ADD CONSTRAINT `group_id_refs_id_875eadf9` FOREIGN KEY (`group_id`) REFERENCES `groupedmessage` (`id`),
  ADD CONSTRAINT `project_id_refs_id_25c05a79` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- 限制表 `searchtoken`
--
ALTER TABLE `searchtoken`
  ADD CONSTRAINT `document_id_refs_id_ea36e6cf` FOREIGN KEY (`document_id`) REFERENCES `searchdocument` (`id`);

--
-- 限制表 `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `owner_id_refs_id_7eeba9f6` FOREIGN KEY (`owner_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `teammember`
--
ALTER TABLE `teammember`
  ADD CONSTRAINT `team_id_refs_id_04f645e5` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `user_id_refs_id_a0feae20` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- 限制表 `useroption`
--
ALTER TABLE `useroption`
  ADD CONSTRAINT `project_id_refs_id_eb596317` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `user_id_refs_id_73734413` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
