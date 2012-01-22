DROP TABLE IF EXISTS `exp_dm_test`;

CREATE TABLE `exp_dm_test` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `exp_dm_test` (`id`, `name`, `counter`)
VALUES
	(1,'Some item',0),
	(2,'another item',0);
