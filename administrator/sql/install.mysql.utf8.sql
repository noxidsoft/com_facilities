CREATE TABLE IF NOT EXISTS `#__facilities_places` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL DEFAULT '1',
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`name` VARCHAR(255)  NOT NULL ,
`streetaddress` VARCHAR(255)  NOT NULL ,
`hoursofoperation` VARCHAR(255)  NOT NULL ,
`businesshoursphone` VARCHAR(255)  NOT NULL ,
`email` VARCHAR(255)  NOT NULL ,
`longitude` VARCHAR(255)  NOT NULL ,
`latitude` VARCHAR(255)  NOT NULL ,
`maplink` VARCHAR(10)  NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;

