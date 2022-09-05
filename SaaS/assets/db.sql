CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `profile_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `type` enum('enrolment','update','delete') NOT NULL DEFAULT 'enrolment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `profile_event` (`id`, `type`) VALUES (1, 'enrolment'),(2, 'update'),(3, 'delete');
CREATE TABLE `profile_loggings` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `profile_id` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `profile_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `type` enum('active','disabled','damaged') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `profile_status` (`id`, `type`) VALUES (1, 'active'),(2, 'disabled'),(3, 'damaged');
CREATE TABLE `score_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `type` enum('approved','reject','uncertain') NOT NULL DEFAULT 'approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `score_category` (`id`, `type`) VALUES (1, 'approved'),(2, 'reject'),(3, 'uncertain');
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `type` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL, 
  `status` int(11) NOT NULL,
  `open_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `close_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `ticket_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `type` enum('open','closed') NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `ticket_status` (`id`, `type`) VALUES (1, 'open'),(2, 'closed');
CREATE TABLE `ticket_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `type` enum('inspect_all','rebuild_profile','input_error','logging_error') NOT NULL DEFAULT 'inspect_all'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `ticket_type` (`id`, `type`) VALUES (1, 'inspect_all'),(2, 'rebuild_profile'),(3, 'input_error'),(4, 'logging_error');
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `target_profile` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE `transaction_grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `type` enum('approved','inspect','alert') NOT NULL DEFAULT 'approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `transaction_grade` (`id`, `type`) VALUES (1, 'approved'),(2, 'inspect'),(3, 'alert');
CREATE TABLE `transaction_loggings` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `transaction_id` int(11) NOT NULL,
  `score` float NOT NULL DEFAULT '0',
  `score_category` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;