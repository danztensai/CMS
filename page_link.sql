CREATE TABLE `page_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(145) DEFAULT NULL,
  `link` varchar(145) DEFAULT NULL,
  `description` varchar(145) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
