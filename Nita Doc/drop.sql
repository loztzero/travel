# ---------------------------------------------------------------------- #
# Script generated with: DeZign for Databases v6.3.2                     #
# Target DBMS:           MySQL 5                                         #
# Project file:          table.dez                                       #
# Project name:                                                          #
# Author:                                                                #
# Script type:           Database drop script                            #
# Created on:            2015-06-25 20:48                                #
# ---------------------------------------------------------------------- #


# ---------------------------------------------------------------------- #
# Drop foreign key constraints                                           #
# ---------------------------------------------------------------------- #

ALTER TABLE `MST002` DROP FOREIGN KEY `MST001_MST002`;

ALTER TABLE `MST003` DROP FOREIGN KEY `MST001_MST003`;

ALTER TABLE `BKTRX001` DROP FOREIGN KEY `MST003_BKTRX001`;

ALTER TABLE `BKTRX001` DROP FOREIGN KEY `MST020_BKTRX001`;

ALTER TABLE `BKTRX002` DROP FOREIGN KEY `BKTRX001_BKTRX002`;

ALTER TABLE `BKTRX002` DROP FOREIGN KEY `MST002_BKTRX002`;

ALTER TABLE `BLNC001` DROP FOREIGN KEY `MST003_BLNC001`;

ALTER TABLE `BLNC001` DROP FOREIGN KEY `MST020_BLNC001`;

ALTER TABLE `BLNC002` DROP FOREIGN KEY `BLNC001_BLNC002`;

ALTER TABLE `BLNC002` DROP FOREIGN KEY `MST002_BLNC002`;

# ---------------------------------------------------------------------- #
# Drop table "BKTRX002"                                                  #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `BKTRX002` DROP PRIMARY KEY;

DROP INDEX `TUC_BKTRX002_1` ON `BKTRX002`;

# Drop table #

DROP TABLE `BKTRX002`;

# ---------------------------------------------------------------------- #
# Drop table "BKTRX001"                                                  #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `BKTRX001` DROP PRIMARY KEY;

DROP INDEX `TUC_BKTRX001_1` ON `BKTRX001`;

# Drop table #

DROP TABLE `BKTRX001`;

# ---------------------------------------------------------------------- #
# Drop table "BLNC002"                                                   #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `BLNC002` DROP PRIMARY KEY;

DROP INDEX `TUC_BLNC002_1` ON `BLNC002`;

# Drop table #

DROP TABLE `BLNC002`;

# ---------------------------------------------------------------------- #
# Drop table "BLNC001"                                                   #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `BLNC001` DROP PRIMARY KEY;

DROP INDEX `TUC_BLNC001_1` ON `BLNC001`;

# Drop table #

DROP TABLE `BLNC001`;

# ---------------------------------------------------------------------- #
# Drop table "MST020"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `MST020` DROP PRIMARY KEY;

DROP INDEX `TUC_MST020_1` ON `MST020`;

# Drop table #

DROP TABLE `MST020`;

# ---------------------------------------------------------------------- #
# Drop table "MST003"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `MST003` DROP PRIMARY KEY;

DROP INDEX `TUC_MST003_1` ON `MST003`;

# Drop table #

DROP TABLE `MST003`;

# ---------------------------------------------------------------------- #
# Drop table "MST010"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `MST010` DROP PRIMARY KEY;

DROP INDEX `TUC_MST010_1` ON `MST010`;

# Drop table #

DROP TABLE `MST010`;

# ---------------------------------------------------------------------- #
# Drop table "MST002"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `MST002` DROP PRIMARY KEY;

DROP INDEX `TUC_MST002_1` ON `MST002`;

# Drop table #

DROP TABLE `MST002`;

# ---------------------------------------------------------------------- #
# Drop table "MST001"                                                    #
# ---------------------------------------------------------------------- #

# Drop constraints #

ALTER TABLE `MST001` DROP PRIMARY KEY;

DROP INDEX `TUC_MST001_1` ON `MST001`;

# Drop table #

DROP TABLE `MST001`;
