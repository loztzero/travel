# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.3.2                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          table.dez                                       #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database creation script                        #
# Created on:            2015-06-25 20:42                                #
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
    `password` VARCHAR(40) NOT NULL,
    `role` VARCHAR(40) NOT NULL COMMENT 'Role : user/admin',
    `remembered_token` VARCHAR(100) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST001` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST001_1` UNIQUE (`email`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "MST002"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST002` (
    `id` VARCHAR(100) NOT NULL,
    `mst001_id` VARCHAR(100) NOT NULL,
    `title` VARCHAR(40) NOT NULL COMMENT 'Mrs/Ms/Mr',
    `line_number` INTEGER(5) NOT NULL,
    `first_name` VARCHAR(100) NOT NULL,
    `middle_name` VARCHAR(100),
    `last_name` VARCHAR(100) NOT NULL,
    `birth_date` DATE,
    `birth_place` VARCHAR(100) NOT NULL,
    `id_number` VARCHAR(40) NOT NULL COMMENT 'No KTP',
    `expire_id_date` DATE NOT NULL COMMENT 'Tgl kadaluwarsa KTP',
    `passport_number` VARCHAR(40) COMMENT 'Nomor Paspor',
    `expired_passport_date` DATE COMMENT 'Tgl Kadaluwarsa Paspor',
    `phone_number1` INTEGER(40) NOT NULL,
    `phone_number2` INTEGER(40),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST002` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST002_1` UNIQUE (`line_number`, `mst001_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "MST010"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST010` (
    `id` VARCHAR(100) NOT NULL,
    `airport_code` VARCHAR(15) NOT NULL,
    `airport_name` VARCHAR(100) NOT NULL,
    `address1` VARCHAR(100) NOT NULL,
    `address2` VARCHAR(40),
    `address3` VARCHAR(40),
    `zipcode` VARCHAR(15),
    `phone_number1` VARCHAR(40),
    `phone_number2` VARCHAR(40),
    `country` VARCHAR(100) NOT NULL,
    `city` VARCHAR(100),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST010` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST010_1` UNIQUE (`airport_code`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "MST003"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST003` (
    `id` VARCHAR(100) NOT NULL,
    `mst001_id` VARCHAR(100),
    `address1` VARCHAR(100) NOT NULL,
    `address2` VARCHAR(100),
    `address3` VARCHAR(100),
    `city` VARCHAR(100),
    `country` VARCHAR(100),
    `zip_code` VARCHAR(15),
    `phone_number` VARCHAR(40) NOT NULL,
    `description` VARCHAR(1024),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST003` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST003_1` UNIQUE (`mst001_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "MST020"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST020` (
    `id` VARCHAR(100) NOT NULL,
    `airlines_code` VARCHAR(15) NOT NULL,
    `airlines_name` VARCHAR(100) NOT NULL,
    `contact_person` VARCHAR(100) NOT NULL,
    `phone_number` VARCHAR(40) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST020` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST020_1` UNIQUE (`airlines_code`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "BLNC001"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `BLNC001` (
    `id` VARCHAR(100) NOT NULL,
    `booking_type` VARCHAR(40) NOT NULL COMMENT 'Hotel/psawat',
    `booking_date` DATE NOT NULL,
    `booking_number` VARCHAR(40) NOT NULL,
    `mst003_id` VARCHAR(100) NOT NULL,
    `mst020_id` VARCHAR(100) NOT NULL,
    `pymnt_type` VARCHAR(40) NOT NULL COMMENT 'cc/transfer',
    `card_type` VARCHAR(40) COMMENT 'visa/master',
    `card_number` VARCHAR(40) COMMENT 'nomor cc',
    `card_expired_date` VARCHAR(40) COMMENT 'tgl expired date',
    `pymnt` DOUBLE(30,10),
    `charged_pymnt` DOUBLE(30,10),
    `tot_pymnt` DOUBLE(30,10) NOT NULL,
    `pymnt_flg` VARCHAR(40) NOT NULL,
    `issued_flg` VARCHAR(40) NOT NULL,
    `description` VARCHAR(1024),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_BLNC001` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_BLNC001_1` UNIQUE (`booking_number`, `booking_date`, `booking_type`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "BLNC002"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `BLNC002` (
    `id` VARCHAR(100) NOT NULL,
    `line_number` INTEGER(5) NOT NULL,
    `blnc001_id` VARCHAR(100) NOT NULL COMMENT 'Hotel/psawat',
    `mst002_id` VARCHAR(100) NOT NULL,
    `flight_code` VARCHAR(40) NOT NULL,
    `pymnt_val` DOUBLE(30,10) NOT NULL,
    `description` VARCHAR(1024),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_BLNC002` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_BLNC002_1` UNIQUE (`line_number`, `blnc001_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "BKTRX001"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `BKTRX001` (
    `id` VARCHAR(100) NOT NULL,
    `booking_type` VARCHAR(40) NOT NULL COMMENT 'Hotel/psawat',
    `booking_date` DATE NOT NULL,
    `booking_number` VARCHAR(40) NOT NULL,
    `mst003_id` VARCHAR(100) NOT NULL,
    `mst020_id` VARCHAR(100) NOT NULL,
    `pymnt_type` VARCHAR(40) NOT NULL COMMENT 'cc/transfer',
    `card_type` VARCHAR(40) COMMENT 'visa/master',
    `card_number` VARCHAR(40) COMMENT 'nomor cc',
    `card_expired_date` VARCHAR(40) COMMENT 'tgl expired date',
    `pymnt` DOUBLE(30,10),
    `charged_pymnt` DOUBLE(30,10),
    `tot_pymnt` DOUBLE(30,10) NOT NULL,
    `description` VARCHAR(1024),
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
    `bktrx001_id` VARCHAR(100) NOT NULL COMMENT 'Hotel/psawat',
    `mst002_id` VARCHAR(100) NOT NULL,
    `flight_code` VARCHAR(40) NOT NULL,
    `pymnt_val` DOUBLE(30,10) NOT NULL,
    `description` VARCHAR(1024),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_BKTRX002` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_BKTRX002_1` UNIQUE (`line_number`, `bktrx001_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Foreign key constraints                                                #
# ---------------------------------------------------------------------- #

ALTER TABLE `MST002` ADD CONSTRAINT `MST001_MST002` 
    FOREIGN KEY (`mst001_id`) REFERENCES `MST001` (`id`);

ALTER TABLE `MST003` ADD CONSTRAINT `MST001_MST003` 
    FOREIGN KEY (`mst001_id`) REFERENCES `MST001` (`id`);

ALTER TABLE `BKTRX001` ADD CONSTRAINT `MST003_BKTRX001` 
    FOREIGN KEY (`mst003_id`) REFERENCES `MST003` (`id`);

ALTER TABLE `BKTRX001` ADD CONSTRAINT `MST020_BKTRX001` 
    FOREIGN KEY (`mst020_id`) REFERENCES `MST020` (`id`);

ALTER TABLE `BKTRX002` ADD CONSTRAINT `BKTRX001_BKTRX002` 
    FOREIGN KEY (`bktrx001_id`) REFERENCES `BKTRX001` (`id`);

ALTER TABLE `BKTRX002` ADD CONSTRAINT `MST002_BKTRX002` 
    FOREIGN KEY (`mst002_id`) REFERENCES `MST002` (`id`);

ALTER TABLE `BLNC001` ADD CONSTRAINT `MST003_BLNC001` 
    FOREIGN KEY (`mst003_id`) REFERENCES `MST003` (`id`);

ALTER TABLE `BLNC001` ADD CONSTRAINT `MST020_BLNC001` 
    FOREIGN KEY (`mst020_id`) REFERENCES `MST020` (`id`);

ALTER TABLE `BLNC002` ADD CONSTRAINT `BLNC001_BLNC002` 
    FOREIGN KEY (`blnc001_id`) REFERENCES `BLNC001` (`id`);

ALTER TABLE `BLNC002` ADD CONSTRAINT `MST002_BLNC002` 
    FOREIGN KEY (`mst002_id`) REFERENCES `MST002` (`id`);
