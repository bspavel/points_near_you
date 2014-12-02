CREATE TABLE IF NOT EXISTS `coordinates`
(
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `lat` int(4) NOT NULL COMMENT 'longtitude',
  `lng` int(4) NOT NULL COMMENT 'latitude',
  `name` varchar(50) NOT NULL COMMENT 'object name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `coordinates` (`lat`, `lng`, `name`) VALUES
(1, 1, 'obj_1'),
(1, 2, 'obj_2'),
(2, 3, 'obj_3'),
(3, 4, 'obj_4'),
(4, 5, 'obj_5'),
(3, 1, 'obj_6'),
(2, 3, 'obj_7');
