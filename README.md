# playplay
```
/*
MySQL Data Transfer
Source Host: 10.82.8.22
Source Database: shah_blockchain
Target Host: 10.82.8.22
Target Database: shah_blockchain
Date: 3/10/2019 6:28:05 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for block
-- ----------------------------
DROP TABLE IF EXISTS `block`;
CREATE TABLE `block` (   `id` int(11) NOT NULL AUTO_INCREMENT,   `block_id` int(255) DEFAULT NULL,   `block_hash` varchar(255) DEFAULT NULL,   PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for chain
-- ----------------------------
DROP TABLE IF EXISTS `chain`;
CREATE TABLE `chain` (   `id` int(255) NOT NULL AUTO_INCREMENT,   `block_id` int(255) NOT NULL,   `previous_hash` varchar(255) DEFAULT NULL,   `candidate_name` varchar(255) DEFAULT NULL,   `info_admin` varchar(255) DEFAULT NULL,   `info_user` varchar(255) DEFAULT NULL,   `blocktimestamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,   PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `block` VALUES ('1', '1', '7c00c43e85beee84bdb108e571852257');
INSERT INTO `chain` VALUES ('1', '1', '0', 'Shahadan Bin Saad', null, null, '2019-10-03 17:53:48');
```
