# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.3.2                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Travel time.dez                                 #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database creation script                        #
# Created on:            2015-07-21 21:54                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Tables                                                                 #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Add table "MST001"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST001` (
    `id` VARCHAR(100) NOT NULL,
    `email` VARCHAR(40) NOT NULL COMMENT 'Email user, sebagai user code',
    `password` VARCHAR(100) NOT NULL,
    `role` VARCHAR(40) NOT NULL COMMENT 'Role : user/admin',
    `remembered_token` VARCHAR(100) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST001` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST001_1` UNIQUE (`email`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "VST001"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `VST001` (
    `id` VARCHAR(100) NOT NULL,
    `mst001_id` VARCHAR(100) NOT NULL,
    `address1` VARCHAR(100) NOT NULL,
    `address2` VARCHAR(100),
    `address3` VARCHAR(100),
    `city` VARCHAR(100),
    `country` VARCHAR(100),
    `zip_code` VARCHAR(15),
    `phone_number` VARCHAR(40) NOT NULL,
    `photo` VARCHAR(100),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_VST001` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_VST001_1` UNIQUE (`mst001_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "TR001"                                                      #
# ---------------------------------------------------------------------- #

CREATE TABLE `TR001` (
    `id` VARCHAR(100) NOT NULL,
    `mst001_id` VARCHAR(100) NOT NULL,
    `category` VARCHAR(40) NOT NULL,
    `tour_name` VARCHAR(100) NOT NULL,
    `address1` VARCHAR(100) NOT NULL,
    `address2` VARCHAR(100),
    `address3` VARCHAR(100),
    `city` VARCHAR(100),
    `country` VARCHAR(100),
    `zip_code` VARCHAR(15),
    `phone_number` VARCHAR(40) NOT NULL,
    `instagram` VARCHAR(100),
    `facebook` VARCHAR(100),
    `twitter` VARCHAR(100),
    `website` VARCHAR(100),
    `logo` VARCHAR(100),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_TR001` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_TR001_1` UNIQUE (`mst001_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "VST010"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `VST010` (
    `id` VARCHAR(100) NOT NULL,
    `vst001_id` VARCHAR(100) NOT NULL,
    `tr001_id` VARCHAR(100) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_VST010` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_VST010_1` UNIQUE (`vst001_id`, `tr001_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "VST020"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `VST020` (
    `id` VARCHAR(100) NOT NULL,
    `vst001_id` VARCHAR(100) NOT NULL,
    `photo` VARCHAR(100),
    `title` VARCHAR(100),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_VST020` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_VST020_1` UNIQUE (`vst001_id`, `photo`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "VST030"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `VST030` (
    `id` VARCHAR(100) NOT NULL,
    `vst001_id` VARCHAR(100) NOT NULL,
    `line number` INTEGER NOT NULL,
    `description` VARCHAR(1024) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_VST030` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_VST030_1` UNIQUE (`vst001_id`, `line number`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "TR0020"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `TR0020` (
    `id` VARCHAR(100) NOT NULL,
    `tr001_id` VARCHAR(100) NOT NULL,
    `vst001_id` VARCHAR(100) NOT NULL,
    `line_number` INTEGER(5) NOT NULL,
    `review` VARCHAR(1024) NOT NULL,
    `range` DOUBLE,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_TR0020` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_TR0020_1` UNIQUE (`tr001_id`, `vst001_id`, `line_number`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "TR0030"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `TR0030` (
    `id` VARCHAR(100) NOT NULL,
    `tr001_id` VARCHAR(100) NOT NULL,
    `photo` VARCHAR(40) NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_TR0030` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_TR0030_1` UNIQUE (`tr001_id`, `photo`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "TR0040"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `TR0040` (
    `id` VARCHAR(100) NOT NULL,
    `tr001_id` VARCHAR(100) NOT NULL,
    `line_number` DOUBLE(5,0) NOT NULL,
    `description` VARCHAR(1024) NOT NULL,
    `photo` VARCHAR(100),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_TR0040` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_TR0040_1` UNIQUE (`tr001_id`, `line_number`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Foreign key constraints                                                #
# ---------------------------------------------------------------------- #

ALTER TABLE `VST001` ADD CONSTRAINT `MST001_VST001` 
    FOREIGN KEY (`mst001_id`) REFERENCES `MST001` (`id`);

ALTER TABLE `TR001` ADD CONSTRAINT `MST001_TR001` 
    FOREIGN KEY (`mst001_id`) REFERENCES `MST001` (`id`);

ALTER TABLE `VST010` ADD CONSTRAINT `VST001_VST010` 
    FOREIGN KEY (`vst001_id`) REFERENCES `VST001` (`id`);

ALTER TABLE `VST010` ADD CONSTRAINT `TR001_VST010` 
    FOREIGN KEY (`tr001_id`) REFERENCES `TR001` (`id`);

ALTER TABLE `VST020` ADD CONSTRAINT `VST001_VST020` 
    FOREIGN KEY (`vst001_id`) REFERENCES `VST001` (`id`);

ALTER TABLE `VST030` ADD CONSTRAINT `VST001_VST030` 
    FOREIGN KEY (`vst001_id`) REFERENCES `VST001` (`id`);

ALTER TABLE `TR0020` ADD CONSTRAINT `TR001_TR0020` 
    FOREIGN KEY (`tr001_id`) REFERENCES `TR001` (`id`);

ALTER TABLE `TR0020` ADD CONSTRAINT `VST001_TR0020` 
    FOREIGN KEY (`vst001_id`) REFERENCES `VST001` (`id`);

ALTER TABLE `TR0030` ADD CONSTRAINT `TR001_TR0030` 
    FOREIGN KEY (`tr001_id`) REFERENCES `TR001` (`id`);

ALTER TABLE `TR0040` ADD CONSTRAINT `TR001_TR0040` 
    FOREIGN KEY (`tr001_id`) REFERENCES `TR001` (`id`);
