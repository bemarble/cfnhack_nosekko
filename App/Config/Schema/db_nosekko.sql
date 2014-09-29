CREATE DATABASE nosekko;

CREATE TABLE `ride_request` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fb_account` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(128) NOT NULL DEFAULT '',
  `image` text NOT NULL,
  `start_place` text NOT NULL,
  `goal_place` text NOT NULL,
  `date_begin` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
