CREATE TABLE IF NOT EXISTS `onlinestore_User` 
  ( 
     `user_id`        INT NOT NULL auto_increment, 
     `user_username`  VARCHAR(64) UNIQUE, 
     `user_name`      VARCHAR(64), 
     `user_surname`   VARCHAR(64), 
     `user_email`     VARCHAR(64) UNIQUE, 
     `user_password`  VARCHAR(64), 
     `user_salt`      VARCHAR(64), 
     `user_addressid` INT, 
     `user_phone`     VARCHAR(30), 
     PRIMARY KEY (`user_id`) 
  ); 

CREATE TABLE IF NOT EXISTS `onlinestore_Address` 
  ( 
     `address_id`          INT NOT NULL auto_increment, 
     `address_housenumber` VARCHAR(64), 
     `address_street`      VARCHAR(64), 
     `address_zip`         VARCHAR(15), 
     `address_city`        VARCHAR(64), 
     `address_country`     VARCHAR(64), 
     PRIMARY KEY (`address_id`) 
  ); 

CREATE TABLE IF NOT EXISTS `onlinestore_Product` 
  ( 
     `product_id`          INT NOT NULL auto_increment, 
     `product_name`        VARCHAR(64), 
     `product_price`       DOUBLE, 
     `product_quantity`    INT, 
     `product_description` VARCHAR(1024), 
     `product_images`      INT, 
     PRIMARY KEY (`product_id`) 
  ); 

CREATE TABLE IF NOT EXISTS `onlinestore_ProductImages` 
  ( 
     `productimages_productid` INT, 
     `productimages_url`       VARCHAR(255) 
  ); 

CREATE TABLE IF NOT EXISTS `onlinestore_LineItem` 
  ( 
     `lineitem_id`        INT NOT NULL auto_increment, 
     `lineitem_orderid`   INT, 
     `lineitem_productid` INT, 
     `lineitem_quantity`  INT, 
     PRIMARY KEY (`lineitem_id`) 
  ); 

CREATE TABLE IF NOT EXISTS `onlinestore_Order` 
  ( 
     `order_id`         INT NOT NULL auto_increment, 
     `order_customerid` INT, 
     `order_total`      INT, 
     `order_date`       DATETIME, 
     PRIMARY KEY (`order_id`) 
  ); 

CREATE TABLE IF NOT EXISTS `onlinestore_Role` 
  ( 
     `role_id`     INT NOT NULL auto_increment, 
     `role_name`   VARCHAR(64) UNIQUE, 
     `user_roleid` INT, 
     PRIMARY KEY (`role_id`) 
  ); 

ALTER TABLE `onlinestore_User` 
  ADD CONSTRAINT `onlinestore_user_fk1` FOREIGN KEY (`user_addressid`) 
  REFERENCES onlinestore_Address(`address_id`); 

ALTER TABLE `onlinestore_Product` 
  ADD CONSTRAINT `onlinestore_product_fk1` FOREIGN KEY (`product_images`) 
  REFERENCES onlinestore_ProductImages(`productimages_productid`); 

ALTER TABLE `onlinestore_LineItem` 
  ADD CONSTRAINT `onlinestore_lineitem_fk1` FOREIGN KEY (`lineitem_orderid`) 
  REFERENCES onlinestore_Order(`order_id`); 

ALTER TABLE `onlinestore_LineItem` 
  ADD CONSTRAINT `onlinestore_lineitem_fk2` FOREIGN KEY (`lineitem_productid`) 
  REFERENCES onlinestore_Product(`product_id`); 

ALTER TABLE `onlinestore_Order` 
  ADD CONSTRAINT `onlinestore_order_fk1` FOREIGN KEY (`order_customerid`) 
  REFERENCES onlinestore_User(`user_id`); 

ALTER TABLE `onlinestore_Role` 
  ADD CONSTRAINT `onlinestore_role_fk1` FOREIGN KEY (`user_roleid`) REFERENCES 
  onlinestore_Role(`role_id`); 