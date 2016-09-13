<?php

include_once __DIR__.'/bootstrap.php';
$pdoDatabase = new PDO('mysql:host=localhost', $configuration['db_user'], $configuration['db_pass']);
$pdoDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDatabase->exec('CREATE DATABASE IF NOT EXISTS portaltech; CREATE DATABASE IF NOT EXISTS portaltech_test');


/*
 * CREATE THE TABLE
 */
$pdo = new PDO('mysql:host=localhost;dbname=portaltech', $configuration['db_user'], $configuration['db_pass']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// initialize the table
$pdo->exec('DROP TABLE IF EXISTS list;');
$pdo->exec("CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;");

/*
 * INSERT SOME DATA!
 */
$pdo->exec('INSERT INTO `list` (`id`, `name`, `status`) VALUES
(1, \'Work\', 0),
(2, \'Home\', 0),
(3, \'Shopping\', 0),
(4, \'Other\', 0);');

$pdo->exec('CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `list_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`list_id`),
  KEY `list_id` (`list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;');

$pdo->exec('INSERT INTO `task` (`id`, `description`, `list_id`, `status`) VALUES
(1, \'Take the trash out\', 2, 0),
(2, \'Fix the internet cable\', 2, 0),
(3, \'Call David\', 1, 0),
(4, \'Answer Hazem Email\', 1, 0),
(5, \'Test the new login plugin\', 1, 0);');

$pdo = new PDO('mysql:host=localhost;dbname=portaltech_test', $configuration['db_user'], $configuration['db_pass']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// initialize the table
$pdo->exec('DROP TABLE IF EXISTS list;');
$pdo->exec("CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;");

/*
 * INSERT SOME DATA!
 */
$pdo->exec('INSERT INTO `list` (`id`, `name`, `status`) VALUES
(1, \'Work\', 0),
(2, \'Home\', 0),
(3, \'Shopping\', 0),
(4, \'Other\', 0);');

$pdo->exec('CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `list_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`list_id`),
  KEY `list_id` (`list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;');

$pdo->exec('INSERT INTO `task` (`id`, `description`, `list_id`, `status`) VALUES
(1, \'Take the trash out\', 2, 0),
(2, \'Fix the internet cable\', 2, 0),
(3, \'Call David\', 1, 0),
(4, \'Answer Hazem Email\', 1, 0),
(5, \'Test the new login plugin\', 1, 0);');
echo "OK you can go now to home page";