# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.3.2                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          table.dez                                       #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database creation script                        #
# Created on:            2015-09-26 13:09                                #
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
# Add table "MST030"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST030` (
    `id` VARCHAR(100) NOT NULL,
    `curr_code` VARCHAR(15) NOT NULL,
    `curr_name` VARCHAR(100) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST030` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST030_1` UNIQUE (`curr_code`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "BLNC001"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `BLNC001` (
    `id` VARCHAR(100) NOT NULL,
    `order_type` VARCHAR(40) NOT NULL COMMENT 'Hotel/psawat',
    `order_date` DATE NOT NULL,
    `order_number` VARCHAR(40) NOT NULL,
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
    `booking_code` VARCHAR(40),
    `description` VARCHAR(1024),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_BLNC001` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_BLNC001_1` UNIQUE (`order_number`, `order_date`, `order_type`)
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
# Add table "HTTRX001"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `HTTRX001` (
    `id` VARCHAR(100) NOT NULL,
    `order_type` VARCHAR(40) NOT NULL,
    `order_number` VARCHAR(40) NOT NULL,
    `oder_date` DATE NOT NULL,
    `mst001_id` VARCHAR(100) NOT NULL,
    `pymnt_type` VARCHAR(40) NOT NULL,
    `cntct_name` VARCHAR(100) NOT NULL,
    `phone_number` VARCHAR(10) NOT NULL,
    `own_flag` VARCHAR(100) NOT NULL,
    `spcl_flg` VARCHAR(100) NOT NULL,
    `spcl_dscr` VARCHAR(1024),
    `card_number` VARCHAR(40),
    `card_name` VARCHAR(100),
    `exprd_mnth` VARCHAR(6),
    `ccv` VARCHAR(10),
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_HTTRX001` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_HTTRX001_1` UNIQUE (`order_type`, `order_number`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "HTTRX002"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `HTTRX002` (
    `id` VARCHAR(100) NOT NULL,
    `httrx001_id` VARCHAR(100) NOT NULL,
    `booking_no` VARCHAR(40) NOT NULL,
    `line_number` INTEGER(5) NOT NULL,
    `ref_no` VARCHAR(20) NOT NULL,
    `supply_id` VARCHAR(20) NOT NULL,
    `hotel_id` VARCHAR(20) NOT NULL,
    `room_id` VARCHAR(20) NOT NULL,
    `check_id_date` DATE NOT NULL,
    `check_out_date` DATE NOT NULL,
    `room_num` INTEGER(5) NOT NULL,
    `meal_num` INTEGER(5) NOT NULL,
    `bed_num` INTEGER(5) NOT NULL,
    `meal_night` INTEGER(5) NOT NULL,
    `bed_night` INTEGER(5) NOT NULL,
    `client_name` VARCHAR(1000) NOT NULL,
    `client_nat` VARCHAR(1000) NOT NULL,
    `contact` VARCHAR(20) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `fax` VARCHAR(20) NOT NULL,
    `remark` VARCHAR(1000),
    `spc_req` VARCHAR(10) COMMENT 'special requirement Yes / No',
    `smk_room` VARCHAR(10) COMMENT 'smoking room Yes/No',
    `cnnctd_room` VARCHAR(10) COMMENT 'connected room yes/no',
    `same_level` VARCHAR(10) COMMENT 'same level yes/no',
    `quiet_house` VARCHAR(10) COMMENT 'quiet house yes/no',
    `hand_fclty` VARCHAR(10) COMMENT 'handicapped facility yes/no',
    `arrive_time` VARCHAR(20),
    `guarantee` VARCHAR(20) COMMENT 'guarantee  yes/no',
    `prod` VARCHAR(10) NOT NULL,
    `serv` VARCHAR(10) NOT NULL COMMENT 'service id',
    `bf_id` VARCHAR(10) NOT NULL COMMENT 'breakfastID',
    `status` VARCHAR(40) NOT NULL,
    `deadline` DATE NOT NULL,
    `curr_id` VARCHAR(100) NOT NULL,
    `base_price` DOUBLE(30,10) NOT NULL,
    `base_tot_price` DOUBLE(30,10) NOT NULL,
    `base_tot_price_rp` DOUBLE(30,10) NOT NULL,
    `sale_tot_price_rp` DOUBLE(30,10) NOT NULL,
    `tax_val` DOUBLE(30,10) NOT NULL,
    `net_price_rp` DOUBLE(30,10) NOT NULL,
    `api_flg` VARCHAR(40) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_HTTRX002` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_HTTRX002_1` UNIQUE (`httrx001_id`, `line_number`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "MST031"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST031` (
    `id` VARCHAR(100) NOT NULL,
    `start_date` DATE NOT NULL,
    `end_date` DATE NOT NULL,
    `mst030_id` VARCHAR(100) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST031` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST031_1` UNIQUE (`mst030_id`, `start_date`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "HTTRX0011"                                                  #
# ---------------------------------------------------------------------- #

CREATE TABLE `HTTRX0011` (
    `id` VARCHAR(100) NOT NULL,
    `cancel_no` VARCHAR(40) NOT NULL,
    `cancel_date` DATE NOT NULL,
    `booking_no` VARCHAR(40) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_HTTRX0011` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_HTTRX0011_1` UNIQUE (`cancel_no`, `booking_no`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "MST040"                                                     #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST040` (
    `id` VARCHAR(100) NOT NULL,
    `cntry_code` VARCHAR(15) NOT NULL,
    `cntry_name` VARCHAR(100) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST040` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST040_1` UNIQUE (`cntry_code`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "MST0401"                                                    #
# ---------------------------------------------------------------------- #

CREATE TABLE `MST0401` (
    `id` VARCHAR(100) NOT NULL,
    `mst040_id` VARCHAR(100) NOT NULL,
    `cty_code` VARCHAR(15) NOT NULL,
    `cty_name` VARCHAR(100) NOT NULL,
    `updated_at` TIMESTAMP NOT NULL,
    `created_at` TIMESTAMP NOT NULL,
    CONSTRAINT `PK_MST0401` PRIMARY KEY (`id`),
    CONSTRAINT `TUC_MST0401_1` UNIQUE (`cty_code`, `mst040_id`)
)
db engine = inno db;

# ---------------------------------------------------------------------- #
# Add table "BKTRX001"                                                   #
# ---------------------------------------------------------------------- #

CREATE TABLE `BKTRX001` (
    `id` VARCHAR(100) NOT NULL,
    `order_type` VARCHAR(40) NOT NULL COMMENT 'Hotel/psawat',
    `order_date` DATE NOT NULL,
    `order_number` VARCHAR(40) NOT NULL,
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
    CONSTRAINT `TUC_BKTRX001_1` UNIQUE (`order_number`, `order_date`, `order_type`)
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

ALTER TABLE `BKTRX001` ADD CONSTRAINT `MST030_BKTRX001` 
    FOREIGN KEY (`mst020_id`) REFERENCES `MST030` (`id`);

ALTER TABLE `BKTRX002` ADD CONSTRAINT `BKTRX001_BKTRX002` 
    FOREIGN KEY (`bktrx001_id`) REFERENCES `BKTRX001` (`id`);

ALTER TABLE `BKTRX002` ADD CONSTRAINT `MST002_BKTRX002` 
    FOREIGN KEY (`mst002_id`) REFERENCES `MST002` (`id`);

ALTER TABLE `BLNC001` ADD CONSTRAINT `MST003_BLNC001` 
    FOREIGN KEY (`mst003_id`) REFERENCES `MST003` (`id`);

ALTER TABLE `BLNC001` ADD CONSTRAINT `MST030_BLNC001` 
    FOREIGN KEY (`mst020_id`) REFERENCES `MST030` (`id`);

ALTER TABLE `BLNC002` ADD CONSTRAINT `BLNC001_BLNC002` 
    FOREIGN KEY (`blnc001_id`) REFERENCES `BLNC001` (`id`);

ALTER TABLE `BLNC002` ADD CONSTRAINT `MST002_BLNC002` 
    FOREIGN KEY (`mst002_id`) REFERENCES `MST002` (`id`);

ALTER TABLE `HTTRX001` ADD CONSTRAINT `MST001_HTTRX001` 
    FOREIGN KEY (`mst001_id`) REFERENCES `MST001` (`id`);

ALTER TABLE `HTTRX002` ADD CONSTRAINT `HTTRX001_HTTRX002` 
    FOREIGN KEY (`httrx001_id`) REFERENCES `HTTRX001` (`id`);

ALTER TABLE `HTTRX002` ADD CONSTRAINT `MST030_HTTRX002` 
    FOREIGN KEY (`curr_id`) REFERENCES `MST030` (`id`);

ALTER TABLE `MST031` ADD CONSTRAINT `MST030_MST031` 
    FOREIGN KEY (`mst030_id`) REFERENCES `MST030` (`id`);

ALTER TABLE `MST0401` ADD CONSTRAINT `MST040_MST0401` 
    FOREIGN KEY (`mst040_id`) REFERENCES `MST040` (`id`);
