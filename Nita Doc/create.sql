# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.3.2                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          table.dez                                       #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database creation script                        #
# Created on:            2015-06-24 20:29                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Tables                                                                 #
# ---------------------------------------------------------------------- #

# ---------------------------------------------------------------------- #
# Add table "BKTRX001"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `BKTRX001` (
    `id` VARCHAR(100) NOT NULL,
    `booking_type` VARCHAR(40) NOT NULL COMMENT 'Hotel/psawat',
    `booking_date` DATE,
    `booking_number` VARCHAR(40) NOT NULL,
    `mst003_id` VARCHAR(100),
    `mst020_id` VARCHAR(100),
    `pymnt_type` VARCHAR(40) NOT NULL COMMENT 'cc/transfer',
    `card_type` VARCHAR(40) NOT NULL COMMENT 'visa/master',
    `card_number` VARCHAR(40) NOT NULL COMMENT 'nomor cc',
    `card_expired_date` VARCHAR(40) NOT NULL COMMENT 'tgl expired date',
    `pymnt` DOUBLE(30,10) NOT NULL,
    `charged_pymnt` DOUBLE(30,10) NOT NULL,
    `tot_pymnt` DOUBLE(30,10) NOT NULL,
    `description` VARCHAR(1024) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_BKTRX001` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_BKTRX001_1` UNIQUE (`booking_number`, `booking_date`, `booking_type`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "BKTRX002"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `BKTRX002` (
    `id` VARCHAR(100) NOT NULL,
    `line_number` INTEGER(5) NOT NULL,
    `bktrx001_id` VARCHAR(100) COMMENT 'Hotel/psawat',
    `mst002_id` VARCHAR(100),
    `flight_code` VARCHAR(40) NOT NULL,
    `pymnt_val` DOUBLE(30,10) NOT NULL,
    `description` VARCHAR(1024) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_BKTRX002` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_BKTRX002_1` UNIQUE (`line_number`, `bktrx001_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Foreign key constraints                                                #
# ---------------------------------------------------------------------- #

ALTER TABLE `BKTRX001` ADD CONSTRAINT `MST003_BKTRX001` 
    FOREIGN KEY (`mst003_id`) REFERENCES `MST003` (`id`);

ALTER TABLE `BKTRX001` ADD CONSTRAINT `MST020_BKTRX001` 
    FOREIGN KEY (`mst020_id`) REFERENCES `MST020` (`id`);

ALTER TABLE `BKTRX002` ADD CONSTRAINT `BKTRX001_BKTRX002` 
    FOREIGN KEY (`bktrx001_id`) REFERENCES `BKTRX001` (`id`);

ALTER TABLE `BKTRX002` ADD CONSTRAINT `MST002_BKTRX002` 
    FOREIGN KEY (`mst002_id`) REFERENCES `MST002` (`id`);
