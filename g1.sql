-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `g1`;
CREATE DATABASE `g1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `g1`;

CREATE TABLE `appointments` (
  `appointment_no` int(30) NOT NULL AUTO_INCREMENT,
  `patient_id` int(30) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `medical_condition` text,
  `doctors_suggestion` varchar(30) DEFAULT NULL,
  `payment_amount` int(199) DEFAULT NULL,
  `case_closed` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`appointment_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `appointments` (`appointment_no`, `patient_id`, `speciality`, `medical_condition`, `doctors_suggestion`, `payment_amount`, `case_closed`) VALUES
(1,	11,	'Audiologist',	'bad',	NULL,	NULL,	NULL),
(2,	11,	'Audiologist',	'bad',	NULL,	NULL,	NULL),
(3,	10,	'',	'dsfdsfdsfsd',	NULL,	NULL,	NULL),
(4,	10,	'',	'dsfdsfdsfsd',	NULL,	NULL,	NULL),
(5,	10,	'',	'dsfdsfdsfsd',	NULL,	NULL,	NULL),
(6,	10,	'1',	'dsfdsfdsfsd',	NULL,	NULL,	NULL),
(7,	10,	'2',	'dsfdsfdsfsd',	NULL,	NULL,	NULL);

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `speciality` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `doctors` (`id`, `email`, `phone`, `fullname`, `speciality`) VALUES
(1,	'namal@gh.lk',	'0777123456',	'namal bandara',	6),
(2,	'asd@fglk',	'0777123456',	'sunil bandara',	4);

CREATE TABLE `medicine_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `medicine_types` (`id`, `type`) VALUES
(1,	'Audiologist'),
(2,	'Allergist'),
(3,	'Anesthesiologist'),
(4,	'Cardiologist'),
(5,	'Dentist'),
(6,	'Dermatologist'),
(7,	'Endocrinologist');

CREATE TABLE `nurse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fullname` (`fullname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='stores information about nurse';

INSERT INTO `nurse` (`id`, `fullname`, `email`, `phone`) VALUES
(1,	'kamala pereara',	'kamala@df.lk',	'0777123456'),
(2,	' ',	'admin@admin.com',	''),
(3,	'LP Gihan',	'gihan@gh.lk',	'0777158963'),
(4,	'ty jagath',	'jgath@kl.cl',	'0777456789'),
(6,	'lp lahiru',	'lahiru@gh.lk',	'077899452'),
(8,	'wer kjk',	'a@rt.lk',	'5665');

CREATE TABLE `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `patients` (`id`, `firstname`, `lastname`, `address`, `phone_no`, `email`) VALUES
(1,	'AD',	'Kasun',	'Galle',	2147483647,	'kasun@a.lk'),
(4,	'DF',	'Upul',	'Matara',	777789456,	'upul@gh.lk'),
(5,	'NB',	'Namal',	'AMpara',	777456123,	'na@na.com');

CREATE TABLE `patient_info` (
  `patient_Id` int(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `DOB` int(10) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `address` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='patient';


CREATE TABLE `receptionist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='stores information about receptionist';


CREATE TABLE `staff` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone no` int(10) NOT NULL,
  `user type` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `staff` (`firstname`, `lastname`, `address`, `phone no`, `user type`, `email`, `password`) VALUES
('',	'',	'',	0,	'1',	'admin@admin.com',	'admin'),
('asj',	'jsd',	'djjasd',	5545,	'1',	'n@dfgf.lk',	'admin');

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `type`, `phone`, `status`) VALUES
(1,	'admin12324@admin.com',	'admin',	'ewrwe',	'werwer',	5,	0,	0),
(2,	'nimal@admin.com',	'admin',	'',	'',	2,	0,	0),
(3,	'admin@admin.com',	'admin',	'kamal',	'kamal',	4,	34535,	1),
(4,	's',	'nimal',	'silva',	'nimal',	5,	34534534,	1),
(5,	'awewedsdsda@gh.mmn',	'q',	'rt',	'sunilla',	5,	35345354,	1),
(6,	'n@dfgf.lk',	'admin',	'',	'',	5,	0,	1),
(8,	'namal@gh.lk',	'namal',	'',	'',	2,	0,	1),
(9,	'kamala@df.lk',	'kamala',	'kamala',	'pereara',	1,	777123456,	1),
(10,	'upul@gh.lk',	'upul',	'DF',	'Upul',	5,	777789456,	1),
(11,	'na@na.com',	'namal',	'NB',	'Namal',	5,	777456123,	1),
(12,	'gihan@gh.lk',	'gihan',	'LP',	'Gihan',	1,	777158963,	1),
(13,	'jgath@kl.cl',	'jagath',	'ty',	'jagath',	3,	777456789,	1),
(15,	'lahiru@gh.lk',	'lahiru',	'lp',	'lahiru',	3,	77899452,	1),
(17,	'a@rt.lk',	'ac',	'wer',	'kjk',	1,	5665,	1);

-- 2019-01-03 09:49:42
