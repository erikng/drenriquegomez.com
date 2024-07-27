<?php
if (!file_exists('db_config.php')) {
mysql_query("CREATE TABLE IF NOT EXISTS `automotive` (
  `id` int(8) NOT NULL auto_increment,
  `vin` text character set utf8,
  `description` text character set utf8,
  `image` text character set utf8,
  `u_date` text character set utf8,
  `template` text character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");

mysql_query("CREATE TABLE IF NOT EXISTS `general` (
  `id` int(8) NOT NULL auto_increment,
  `location` text character set utf8,
  `description` text character set utf8,
  `image` text character set utf8,
  `u_date` text character set utf8,
  `template` text character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");

mysql_query("CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(8) NOT NULL auto_increment,
  `name` text character set utf8,
  `position` text character set utf8,
  `company` text character set utf8,
  `caddress` text character set utf8,
  `citystatezip` text character set utf8,
  `cphone` text character set utf8,
  `hphone` text character set utf8,
  `ophone` text character set utf8,
  `bio` text character set utf8,
  `photo` text character set utf8,
  `email` text character set utf8,
  `website` text character set utf8,
  `facebook` text character set utf8,
  `twitter` text character set utf8,
  `linkedin` text character set utf8,
  `logo` text character set utf8,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");

mysql_query("CREATE TABLE IF NOT EXISTS `real_estate` (
  `id` int(8) NOT NULL auto_increment,
  `mls` text character set utf8,
  `description` text character set utf8,
  `image` text character set utf8,
  `u_date` text character set utf8,
  `template` text character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");

mysql_query("CREATE TABLE IF NOT EXISTS `_admin` (
  `id` int(8) NOT NULL auto_increment,
  `username` text character set utf8 NOT NULL,
  `password` text character set utf8 NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");

mysql_query("CREATE TABLE IF NOT EXISTS `_settings` (
  `id` int(16) NOT NULL auto_increment,
  `domain` text NOT NULL,
  `wysiwyg` text NOT NULL,
  `menu` text NOT NULL,
  `show` text NOT NULL,
  `website` text NOT NULL,
  `comp_info` text NOT NULL,
  `colors` text NOT NULL,
  `title` text NOT NULL,
  `popup` text NOT NULL,
  `images` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1");

} else { header('Location:index.php'); }
/*----------------------------------------------------------*\
|                                                            |
|      ________)                         ______)             |
|     (, /                              (, /         /)      |
|       /___, __   _ ___   _____  _/_     /    _  _ (/       |
|    ) /     / (__(/_// (_(_) / (_(__  ) /   _(/_(__/ )_     |
|   (_/  ©2011 Bradley Klco             (_)                  |
|                                                            |
\*----------------------------------------------------------*/
?>