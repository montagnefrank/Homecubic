/*
Navicat MariaDB Data Transfer

Source Server         : Jassa
Source Server Version : 100023
Source Host           : jassa.burt:3306
Source Database       : jassa

Target Server Type    : MariaDB
Target Server Version : 100023
File Encoding         : 65001

Date: 2017-12-24 02:47:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hc_clients
-- ----------------------------
DROP TABLE IF EXISTS `hc_clients`;
CREATE TABLE `hc_clients` (
  `idClient` int(200) NOT NULL AUTO_INCREMENT,
  `photoClient` varchar(255) DEFAULT NULL,
  `nameClient` varchar(255) DEFAULT NULL,
  `statusClient` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_menu
-- ----------------------------
DROP TABLE IF EXISTS `hc_menu`;
CREATE TABLE `hc_menu` (
  `idMenu` int(255) NOT NULL AUTO_INCREMENT,
  `nombreMenu` varchar(255) DEFAULT NULL,
  `enlaceMenu` varchar(255) DEFAULT NULL,
  `estadoMenu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_messages
-- ----------------------------
DROP TABLE IF EXISTS `hc_messages`;
CREATE TABLE `hc_messages` (
  `idContact` int(11) NOT NULL AUTO_INCREMENT,
  `messageContact` varchar(255) DEFAULT NULL,
  `emailContact` varchar(255) DEFAULT NULL,
  `nameContact` varchar(255) DEFAULT NULL,
  `subjectContact` varchar(255) DEFAULT NULL,
  `dateContact` varchar(255) DEFAULT NULL,
  `statusContact` varchar(255) DEFAULT NULL,
  `timeContact` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idContact`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_misc
-- ----------------------------
DROP TABLE IF EXISTS `hc_misc`;
CREATE TABLE `hc_misc` (
  `idSite` int(200) NOT NULL AUTO_INCREMENT,
  `serviceTitle` varchar(255) DEFAULT NULL,
  `serviceSubtitle` varchar(255) DEFAULT NULL,
  `aboutTitle` varchar(255) DEFAULT NULL,
  `aboutSubtitle` varchar(255) DEFAULT NULL,
  `solucTitle` varchar(255) DEFAULT NULL,
  `solucSubtitle` varchar(255) DEFAULT NULL,
  `portTitle` varchar(255) DEFAULT NULL,
  `portSubtitle` varchar(255) DEFAULT NULL,
  `shareTitle` varchar(255) DEFAULT NULL,
  `shareSubtitle` varchar(255) DEFAULT NULL,
  `teamTitle` varchar(255) DEFAULT NULL,
  `teamSubtitle` varchar(255) DEFAULT NULL,
  `clientsTitle` varchar(255) DEFAULT NULL,
  `clientsSubtitle` varchar(255) DEFAULT NULL,
  `misionText` varchar(500) DEFAULT NULL,
  `visionText` varchar(500) DEFAULT NULL,
  `quisomText` varchar(500) DEFAULT NULL,
  `ff1` varchar(255) DEFAULT NULL,
  `ff2` varchar(255) DEFAULT NULL,
  `ff3` varchar(255) DEFAULT NULL,
  `ff4` varchar(255) DEFAULT NULL,
  `box3` varchar(500) DEFAULT NULL,
  `box4` varchar(500) DEFAULT NULL,
  `box5` varchar(500) DEFAULT NULL,
  `ff1title` varchar(255) DEFAULT NULL,
  `ff2title` varchar(255) DEFAULT NULL,
  `ff3title` varchar(255) DEFAULT NULL,
  `ff4title` varchar(255) DEFAULT NULL,
  `bannerTitle` varchar(255) DEFAULT NULL,
  `bannerSubtitle` varchar(255) DEFAULT NULL,
  `bannerText` varchar(1000) DEFAULT NULL,
  `contactTitle` varchar(255) DEFAULT NULL,
  `contactSubtitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idSite`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_portfolio
-- ----------------------------
DROP TABLE IF EXISTS `hc_portfolio`;
CREATE TABLE `hc_portfolio` (
  `idPort` int(255) NOT NULL AUTO_INCREMENT,
  `titlePort` varchar(255) DEFAULT NULL,
  `subtitlePort` varchar(255) DEFAULT NULL,
  `textPort` varchar(255) DEFAULT NULL,
  `img1Port` varchar(255) DEFAULT NULL,
  `img2Port` varchar(255) DEFAULT NULL,
  `img3Port` varchar(255) DEFAULT NULL,
  `statusPort` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idPort`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_services
-- ----------------------------
DROP TABLE IF EXISTS `hc_services`;
CREATE TABLE `hc_services` (
  `idService` int(200) NOT NULL AUTO_INCREMENT,
  `iconService` varchar(255) DEFAULT NULL,
  `titleService` varchar(255) DEFAULT NULL,
  `textService` varchar(255) DEFAULT NULL,
  `statusService` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idService`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_slider
-- ----------------------------
DROP TABLE IF EXISTS `hc_slider`;
CREATE TABLE `hc_slider` (
  `idSlide` int(255) NOT NULL AUTO_INCREMENT,
  `textosuperiorSlide` varchar(255) DEFAULT NULL,
  `textomedioSlide` varchar(255) DEFAULT NULL,
  `textoinferiorSlide` varchar(255) DEFAULT NULL,
  `textobotonSlide` varchar(255) DEFAULT NULL,
  `enlacebotonSlide` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idSlide`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_soluc
-- ----------------------------
DROP TABLE IF EXISTS `hc_soluc`;
CREATE TABLE `hc_soluc` (
  `idSoluc` int(200) NOT NULL AUTO_INCREMENT,
  `iconSoluc` varchar(255) DEFAULT NULL,
  `titleSoluc` varchar(255) DEFAULT NULL,
  `textSoluc` varchar(255) DEFAULT NULL,
  `statusSoluc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idSoluc`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_team
-- ----------------------------
DROP TABLE IF EXISTS `hc_team`;
CREATE TABLE `hc_team` (
  `idTeam` int(200) NOT NULL AUTO_INCREMENT,
  `photoTeam` varchar(255) DEFAULT NULL,
  `nameTeam` varchar(255) DEFAULT NULL,
  `jobTeam` varchar(255) DEFAULT NULL,
  `profileTeam` varchar(255) DEFAULT NULL,
  `fbTeam` varchar(255) DEFAULT NULL,
  `igTeam` varchar(255) DEFAULT NULL,
  `twTeam` varchar(255) DEFAULT NULL,
  `statusTeam` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idTeam`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_track
-- ----------------------------
DROP TABLE IF EXISTS `hc_track`;
CREATE TABLE `hc_track` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `tm` varchar(20) NOT NULL DEFAULT '',
  `ref` varchar(250) NOT NULL DEFAULT '',
  `agent` varchar(250) NOT NULL DEFAULT '',
  `ip` varchar(20) NOT NULL DEFAULT '',
  `ip_value` varchar(11) NOT NULL DEFAULT '0',
  `domain` varchar(20) NOT NULL DEFAULT '',
  `tracking_page_name` varchar(200) NOT NULL DEFAULT '',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2478 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_tweets
-- ----------------------------
DROP TABLE IF EXISTS `hc_tweets`;
CREATE TABLE `hc_tweets` (
  `idTweet` int(200) NOT NULL AUTO_INCREMENT,
  `nameTweet` varchar(255) DEFAULT NULL,
  `textTweet` varchar(255) DEFAULT NULL,
  `statusTweet` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idTweet`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for hc_usuario
-- ----------------------------
DROP TABLE IF EXISTS `hc_usuario`;
CREATE TABLE `hc_usuario` (
  `idUsuario` int(255) NOT NULL AUTO_INCREMENT,
  `userUsuario` varchar(255) DEFAULT NULL,
  `passUsuario` varchar(255) DEFAULT NULL,
  `nombreUsuario` varchar(255) DEFAULT NULL,
  `loginUsuario` varchar(255) DEFAULT NULL,
  `rolUsuario` varchar(255) DEFAULT NULL,
  `temaUsuario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
