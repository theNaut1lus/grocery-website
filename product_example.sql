CREATE DATABASE assignment1;
use assignment1;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(10) unsigned DEFAULT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `unit_price` float(8,2) DEFAULT NULL,
  `unit_quantity` varchar(15) DEFAULT NULL,
  `in_stock` int(10) unsigned DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
UPDATE `products` SET `image_index`='' WHERE `product_id`='1000'
UPDATE `products` SET `image_index`='' WHERE `product_id`='1001'
UPDATE `products` SET `image_index`='' WHERE `product_id`='1002'
UPDATE `products` SET `image_index`='' WHERE `product_id`='1003'
UPDATE `products` SET `image_index`='' WHERE `product_id`='1004'
UPDATE `products` SET `image_index`='' WHERE `product_id`='1005'
UPDATE `products` SET `image_index`='' WHERE `product_id`='2000'
UPDATE `products` SET `image_index`='' WHERE `product_id`='2001'
UPDATE `products` SET `image_index`='' WHERE `product_id`='2002'
UPDATE `products` SET `image_index`='' WHERE `product_id`='2003'
UPDATE `products` SET `image_index`='' WHERE `product_id`='2004'
UPDATE `products` SET `image_index`='' WHERE `product_id`='2005'
UPDATE `products` SET `image_index`='' WHERE `product_id`='3000'
UPDATE `products` SET `image_index`='' WHERE `product_id`='3001'
UPDATE `products` SET `image_index`='' WHERE `product_id`='3002'
UPDATE `products` SET `image_index`='' WHERE `product_id`='3003'
UPDATE `products` SET `image_index`='' WHERE `product_id`='3004' 
UPDATE `products` SET `image_index`='' WHERE `product_id`='3005' 
UPDATE `products` SET `image_index`='' WHERE `product_id`='3006' 
UPDATE `products` SET `image_index`='' WHERE `product_id`='3007' 
UPDATE `products` SET `image_index`='' WHERE `product_id`='4000'
UPDATE `products` SET `image_index`='' WHERE `product_id`='4001'
UPDATE `products` SET `image_index`='' WHERE `product_id`='4002'
UPDATE `products` SET `image_index`='' WHERE `product_id`='4003'
UPDATE `products` SET `image_index`='' WHERE `product_id`='4004'
UPDATE `products` SET `image_index`='' WHERE `product_id`='4005'
UPDATE `products` SET `image_index`='' WHERE `product_id`='5000'
UPDATE `products` SET `image_index`='' WHERE `product_id`='5001'
UPDATE `products` SET `image_index`='' WHERE `product_id`='5002'
UPDATE `products` SET `image_index`='' WHERE `product_id`='5003'
UPDATE `products` SET `image_index`='' WHERE `product_id`='5004'
UPDATE `products` SET `image_index`='' WHERE `product_id`='2006'
COMMIT;
