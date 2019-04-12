-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 12, 2019 at 04:08 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `zaur`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `menu`
-- 

CREATE TABLE `menu` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `menu`
-- 

INSERT INTO `menu` VALUES (1, 'Web Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores incidunt laboriosam harum, voluptatem fugiat perspiciatis.');
INSERT INTO `menu` VALUES (2, 'App Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores incidunt laboriosam harum, voluptatem fugiat perspiciatis.');
INSERT INTO `menu` VALUES (3, 'Internet Marketing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores incidunt laboriosam harum, voluptatem fugiat perspiciatis.');
