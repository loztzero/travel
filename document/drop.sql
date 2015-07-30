# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.3.2                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          Travel time.dez                                 #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database drop script                            #
# Created on:            2015-07-30 22:38                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Drop foreign key constraints                                           #
# ---------------------------------------------------------------------- #

ALTER TABLE `VST001` DROP FOREIGN KEY `MST001_VST001`;

ALTER TABLE `TR0010` DROP FOREIGN KEY `MST001_TR0010`;

ALTER TABLE `VST010` DROP FOREIGN KEY `VST001_VST010`;

ALTER TABLE `VST010` DROP FOREIGN KEY `TR0010_VST010`;

ALTER TABLE `VST020` DROP FOREIGN KEY `VST001_VST020`;

ALTER TABLE `VST030` DROP FOREIGN KEY `VST001_VST030`;

ALTER TABLE `TR0020` DROP FOREIGN KEY `TR0010_TR0020`;

ALTER TABLE `TR0020` DROP FOREIGN KEY `VST001_TR0020`;

ALTER TABLE `TR0030` DROP FOREIGN KEY `TR0010_TR0030`;

ALTER TABLE `TR0040` DROP FOREIGN KEY `TR0010_TR0040`;

# ---------------------------------------------------------------------- #
# Drop table "TR0040"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `TR0040` DROP PRIMARY KEY;

DROP INDEX `TUC_TR0040_1` ON `TR0040`;

# Drop table #

DROP TABLE `TR0040`;

# ---------------------------------------------------------------------- #
# Drop table "TR0030"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `TR0030` DROP PRIMARY KEY;

DROP INDEX `TUC_TR0030_1` ON `TR0030`;

# Drop table #

DROP TABLE `TR0030`;

# ---------------------------------------------------------------------- #
# Drop table "TR0020"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `TR0020` DROP PRIMARY KEY;

DROP INDEX `TUC_TR0020_1` ON `TR0020`;

# Drop table #

DROP TABLE `TR0020`;

# ---------------------------------------------------------------------- #
# Drop table "VST030"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `VST030` DROP PRIMARY KEY;

DROP INDEX `TUC_VST030_1` ON `VST030`;

# Drop table #

DROP TABLE `VST030`;

# ---------------------------------------------------------------------- #
# Drop table "VST020"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `VST020` DROP PRIMARY KEY;

DROP INDEX `TUC_VST020_1` ON `VST020`;

# Drop table #

DROP TABLE `VST020`;

# ---------------------------------------------------------------------- #
# Drop table "VST010"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `VST010` DROP PRIMARY KEY;

DROP INDEX `TUC_VST010_1` ON `VST010`;

# Drop table #

DROP TABLE `VST010`;

# ---------------------------------------------------------------------- #
# Drop table "TR0010"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `TR0010` DROP PRIMARY KEY;

DROP INDEX `TUC_TR0010_1` ON `TR0010`;

# Drop table #

DROP TABLE `TR0010`;

# ---------------------------------------------------------------------- #
# Drop table "VST001"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `VST001` DROP PRIMARY KEY;

DROP INDEX `TUC_VST001_1` ON `VST001`;

# Drop table #

DROP TABLE `VST001`;

# ---------------------------------------------------------------------- #
# Drop table "MST001"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `MST001` DROP PRIMARY KEY;

DROP INDEX `TUC_MST001_1` ON `MST001`;

# Drop table #

DROP TABLE `MST001`;
