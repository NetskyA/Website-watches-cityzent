--phpMyAdmin SQL Dump
--version 5.2 .0
--https : //www.phpmyadmin.net/
--
--Host : 127.0 .0 .1
--Generation Time: Nov 08,
2022 at 04 : 01 PM
--Server version : 10.4 .24 - MariaDB
--PHP Version : 7.4 .29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--Database : `data_server`
--
CREATE DATABASE IF NOT EXISTS `data_server` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `data_server`;

---- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --

--
--Table structure for table `barang`-- CREATE TABLE `barang` (
    `ID` int(11)NOT NULL,
    `Jenis` varchar(64)NOT NULL,
    `Nama` varchar(64)NOT NULL,
    `Gambar` text NOT NULL,
    `Stok` int(11)NOT NULL,
    `Harga` int(11)NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4; ----Dumping data for table `barang`-- INSERT INTO `barang` (`ID`, `Jenis`, `Nama`, `Gambar`, `Stok`, `Harga`)VALUES(
    1,
    'G-SHOCK',
    'GMW-B5000EH-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMW/gmw-b5000eh-1/assets/GMW-B5000EH-1.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1740611
), (
    2,
    'G-SHOCK',
    'DW-5600SMB-4',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5600smb-4/assets/DW-5600SMB-4.png.transform/product' +
            '-panel/image.png',
    3,
    1796497
), (
    3,
    'G-SHOCK',
    'DW-6900RH-2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW6/dw-6900rh-2/assets/DW-6900RH-2.png.transform/product-p' +
            'anel/image.png',
    2,
    1803486
), (
    4,
    'G-SHOCK',
    'GWG-2040FR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GW/GWG/gwg-2040fr-1a/assets/GWG-2040FR-1A.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1181422
), (
    5,
    'G-SHOCK',
    'MTG-B3000FR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTG/mtg-b3000fr-1a/assets/MTG-B3000FR-1A.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1910383
), (
    6,
    'EDIFICE',
    'ECB-2000MFG-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EC/ECB/ecb-2000mfg-1a/assets/ECB-2000MFG-1A.png.transform/pro' +
            'duct-panel/image.png',
    4,
    1131631
), (
    7,
    'BABY-G',
    'BGD-565XG-2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGD/bgd-565xg-2/assets/BGD-565XG-2.png.transform/product-p' +
            'anel/image.png',
    1,
    1353741
), (
    8,
    'BABY-G',
    'BG-169HRB-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BG1/bg-169hrb-7/assets/BG-169HRB-7.png.transform/product-p' +
            'anel/image.png',
    2,
    1640646
), (
    9,
    'SHEEN',
    'SHE-4539FGM-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4539fgm-9a/assets/SHE-4539FGM-9AU.png.transform/pr' +
            'oduct-panel/image.png',
    2,
    1849079
), (
    10,
    'SHEEN',
    'SHE-4539FM-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4539fm-7a/assets/SHE-4539FM-7AU.png.transform/prod' +
            'uct-panel/image.png',
    4,
    1937262
), (
    11,
    'SHEEN',
    'SHE-4539FPL-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4539fpl-7a/assets/SHE-4539FPL-7AU.png.transform/pr' +
            'oduct-panel/image.png',
    2,
    1417576
), (
    12,
    'SHEEN',
    'SHE-4539FPM-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4539fpm-4a/assets/SHE-4539FPM-4AU.png.transform/pr' +
            'oduct-panel/image.png',
    2,
    1616394
), (
    13,
    'SHEEN',
    'SHE-4541G-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4541g-9a/assets/SHE-4541G-9AU.png.transform/produc' +
            't-panel/image.png',
    4,
    1164964
), (
    14,
    'SHEEN',
    'SHE-4541PG-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4541pg-2a/assets/SHE-4541PG-2AU.png.transform/prod' +
            'uct-panel/image.png',
    4,
    1119421
), (
    15,
    'G-SHOCK',
    'GAE-2100WE-3A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gae/gae-2100we-3a/assets/GAE-2100WE-3A.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1063796
), (
    16,
    'G-SHOCK',
    'GA-B2100BNR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b2100bnr-1a/assets/GA-B2100BNR-1A.png.transform/pro' +
            'duct-panel/image.png',
    5,
    1428059
), (
    17,
    'G-SHOCK',
    'GM-S110-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s110-1a/assets/GM-S110-1A.png.transform/product-pan' +
            'el/image.png',
    3,
    1268852
), (
    18,
    'G-SHOCK',
    'GM-S110B-8A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s110b-8a/assets/GM-S110B-8A.png.transform/product-p' +
            'anel/image.png',
    1,
    1424888
), (
    19,
    'G-SHOCK',
    'GM-S110LB-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s110lb-2a/assets/GM-S110LB-2A.png.transform/product' +
            '-panel/image.png',
    2,
    1764812
), (
    20,
    'G-SHOCK',
    'GM-S110PG-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s110pg-1a/assets/GM-S110PG-1A.png.transform/product' +
            '-panel/image.png',
    3,
    1070460
), (
    21,
    'G-SHOCK',
    'GA-2200BNR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2200bnr-1a/assets/GA-2200BNR-1A.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1578748
), (
    22,
    'G-SHOCK',
    'GA-100BNR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA1/ga-100bnr-1a/assets/GA-100BNR-1A.png.transform/product' +
            '-panel/image.png',
    5,
    1710696
), (
    23,
    'G-SHOCK',
    'GA-700BNR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA7/ga-700bnr-1a/assets/GA-700BNR-1A.png.transform/product' +
            '-panel/image.png',
    5,
    1066486
), (
    24,
    'G-SHOCK',
    'GAS-100BNR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GAS/gas-100bnr-1a/assets/GAS-100BNR-1A.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1487554
), (
    25,
    'G-SHOCK',
    'GM-5600LC-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GM5/gm-5600lc-7/assets/GM-5600LC-7.png.transform/product-p' +
            'anel/image.png',
    4,
    1059407
), (
    26,
    'G-SHOCK',
    'GM-S5600LC-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s5600lc-7/assets/GM-S5600LC-7.png.transform/product' +
            '-panel/image.png',
    2,
    1355531
), (
    27,
    'G-SHOCK',
    'DW-6900GDA-9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW6/dw-6900gda-9/assets/DW-6900GDA-9.png.transform/product' +
            '-panel/image.png',
    5,
    1189322
), (
    28,
    'G-SHOCK',
    'GM-6900GDA-9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GM6/gm-6900gda-9/assets/GM-6900GDA-9.png.transform/product' +
            '-panel/image.png',
    5,
    1135276
), (
    29,
    'G-SHOCK',
    'GW-8230B-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GW/GW8/gw-8230b-9a/assets/GW-8230B-9A.png.transform/product-p' +
            'anel/image.png',
    4,
    1574483
), (
    30,
    'G-SHOCK',
    'MTG-B3000D-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTG/mtg-b3000d-1a/assets/MTG-B3000D-1A.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1919060
), (
    31,
    'EDIFICE',
    'EFR-526D-5CV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFR/efr-526d-5cv/assets/EFR-526D-5CVU.png.transform/produc' +
            't-panel/image.png',
    4,
    1606959
), (
    32,
    'EDIFICE',
    'EFR-526L-2CV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFR/efr-526l-2cv/assets/EFR-526L-2CVU.png.transform/produc' +
            't-panel/image.png',
    4,
    1370925
), (
    33,
    'EDIFICE',
    'EFV-600D-3CV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFV/efv-600d-3cv/assets/EFV-600D-3CVU.png.transform/produc' +
            't-panel/image.png',
    5,
    1592467
), (
    34,
    'EDIFICE',
    'EFV-610D-3CV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFV/efv-610d-3cv/assets/EFV-610D-3CVU.png.transform/produc' +
            't-panel/image.png',
    1,
    1253955
), (
    35,
    'EDIFICE',
    'EFV-610D-5CV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFV/efv-610d-5cv/assets/EFV-610D-5CVU.png.transform/produc' +
            't-panel/image.png',
    5,
    1117900
), (
    36,
    'EDIFICE',
    'EQB-2000HR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EQ/EQB/eqb-2000hr-1a/assets/EQB-2000HR-1A.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1642002
), (
    37,
    'EDIFICE',
    'EQS-940DB-1BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EQ/EQS/eqs-940db-1bv/assets/EQS-940DB-1BVU.png.transform/prod' +
            'uct-panel/image.png',
    3,
    1463287
), (
    38,
    'EDIFICE',
    'EQS-940DC-1BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EQ/EQS/eqs-940dc-1bv/assets/EQS-940DC-1BVU.png.transform/prod' +
            'uct-panel/image.png',
    2,
    1689386
), (
    39,
    'CASIO',
    'MCW-200H-1A2V',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MC/MCW/mcw-200h-1a2v/assets/MCW-200H-1A2V.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1731620
), (
    40,
    'CASIO',
    'MCW-200H-4AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MC/MCW/mcw-200h-4av/assets/MCW-200H-4AV.png.transform/product' +
            '-panel/image.png',
    1,
    1656551
), (
    41,
    'CASIO',
    'MTP-E605D-1EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e605d-1ev/assets/MTP-E605D-1EV.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1303280
), (
    42,
    'CASIO',
    'MTP-E605D-2EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e605d-2ev/assets/MTP-E605D-2EV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1079137
), (
    43,
    'CASIO',
    'MTP-E605D-7EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e605d-7ev/assets/MTP-E605D-7EV.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1838009
), (
    44,
    'CASIO',
    'MTP-E605L-1EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e605l-1ev/assets/MTP-E605L-1EV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1260975
), (
    45,
    'CASIO',
    'MTP-E605L-7EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e605l-7ev/assets/MTP-E605L-7EV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1596879
), (
    46,
    'CASIO',
    'MTP-E705D-1EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e705d-1ev/assets/MTP-E705D-1EV.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1445098
), (
    47,
    'CASIO',
    'MTP-E705D-2EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e705d-2ev/assets/MTP-E705D-2EV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1770034
), (
    48,
    'CASIO',
    'MTP-E705D-3EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e705d-3ev/assets/MTP-E705D-3EV.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1255217
), (
    49,
    'CASIO',
    'MTP-E705D-5EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e705d-5ev/assets/MTP-E705D-5EV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1736400
), (
    50,
    'CASIO',
    'MTP-E710M-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e710m-1av/assets/MTP-E710M-1AV.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1073755
), (
    51,
    'CASIO',
    'MTP-E710M-2AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e710m-2av/assets/MTP-E710M-2AV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1482053
), (
    52,
    'CASIO',
    'MTP-E710M-8AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e710m-8av/assets/MTP-E710M-8AV.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1355769
), (
    53,
    'CASIO',
    'MTP-E710MB-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e710mb-1av/assets/MTP-E710MB-1AV.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1226999
), (
    54,
    'CASIO',
    'MTP-E710MB-2AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e710mb-2av/assets/MTP-E710MB-2AV.png.transform/pro' +
            'duct-panel/image.png',
    1,
    1513094
), (
    55,
    'CASIO',
    'MTP-E710MB-3AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e710mb-3av/assets/MTP-E710MB-3AV.png.transform/pro' +
            'duct-panel/image.png',
    4,
    1641496
), (
    56,
    'CASIO',
    'A100WEF-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/A1/a10/a100wef-1a/assets/A100WEF-1A.png.transform/product-pan' +
            'el/image.png',
    2,
    1225848
), (
    57,
    'CASIO',
    'A100WEF-3A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/A1/a10/a100wef-3a/assets/A100WEF-3A.png.transform/product-pan' +
            'el/image.png',
    4,
    1474764
), (
    58,
    'CASIO',
    'A100WEF-8A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/A1/a10/a100wef-8a/assets/A100WEF-8A.png.transform/product-pan' +
            'el/image.png',
    1,
    1619909
), (
    59,
    'CASIO',
    'A100WEFG-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/A1/a10/a100wefg-9a/assets/A100WEFG-9A.png.transform/product-p' +
            'anel/image.png',
    5,
    1475053
), (
    60,
    'BABY-G',
    'BGD-565USW-5',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGD/bgd-565usw-5/assets/BGD-565USW-5.png.transform/product' +
            '-panel/image.png',
    4,
    1296501
), (
    61,
    'BABY-G',
    'BA-110X-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110x-1a/assets/BA-110X-1A.png.transform/product-pan' +
            'el/image.png',
    2,
    1959302
), (
    62,
    'BABY-G',
    'BA-110X-7A1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110x-7a1/assets/BA-110X-7A1.png.transform/product-p' +
            'anel/image.png',
    1,
    1861692
), (
    63,
    'BABY-G',
    'BA-110X-7A3',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110x-7a3/assets/BA-110X-7A3.png.transform/product-p' +
            'anel/image.png',
    5,
    1002584
), (
    64,
    'BABY-G',
    'BA-110XBC-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xbc-1a/assets/BA-110XBC-1A.png.transform/product' +
            '-panel/image.png',
    2,
    1062307
), (
    65,
    'BABY-G',
    'BA-110XBE-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xbe-7a/assets/BA-110XBE-7A.png.transform/product' +
            '-panel/image.png',
    3,
    1690909
), (
    66,
    'BABY-G',
    'BA-110XCP-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xcp-4a/assets/BA-110XCP-4A.png.transform/product' +
            '-panel/image.png',
    5,
    1215419
), (
    67,
    'BABY-G',
    'BA-110XCR-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xcr-7a/assets/BA-110XCR-7A.png.transform/product' +
            '-panel/image.png',
    2,
    1459805
), (
    68,
    'BABY-G',
    'BA-110XRG-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xrg-1a/assets/BA-110XRG-1A.png.transform/product' +
            '-panel/image.png',
    3,
    1054136
), (
    69,
    'BABY-G',
    'BA-110XRG-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xrg-4a/assets/BA-110XRG-4A.png.transform/product' +
            '-panel/image.png',
    5,
    1400870
), (
    70,
    'BABY-G',
    'BA-110XRG-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xrg-7a/assets/BA-110XRG-7A.png.transform/product' +
            '-panel/image.png',
    1,
    1444947
), (
    71,
    'BABY-G',
    'BA-110XSW-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xsw-7a/assets/BA-110XSW-7A.png.transform/product' +
            '-panel/image.png',
    3,
    1553757
), (
    72,
    'BABY-G',
    'BA-130SW-5A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-130sw-5a/assets/BA-130SW-5A.png.transform/product-p' +
            'anel/image.png',
    1,
    1581097
), (
    73,
    'BABY-G',
    'BGA-280SW-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGA/bga-280sw-4a/assets/BGA-280SW-4A.png.transform/product' +
            '-panel/image.png',
    5,
    1026809
), (
    74,
    'BABY-G',
    'BGA-280SW-6A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGA/bga-280sw-6a/assets/BGA-280SW-6A.png.transform/product' +
            '-panel/image.png',
    1,
    1504099
), (
    75,
    'BABY-G',
    'BGA-290SW-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGA/bga-290sw-4a/assets/BGA-290SW-4A.png.transform/product' +
            '-panel/image.png',
    5,
    1909211
), (
    76,
    'BABY-G',
    'BGA-290SW-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGA/bga-290sw-7a/assets/BGA-290SW-7A.png.transform/product' +
            '-panel/image.png',
    4,
    1965360
), (
    77,
    'SHEEN',
    'SHE-4539CM-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4539cm-4a/assets/SHE-4539CM-4AU.png.transform/prod' +
            'uct-panel/image.png',
    4,
    1597604
), (
    78,
    'SHEEN',
    'SHE-4539GM-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4539gm-9a/assets/SHE-4539GM-9AU.png.transform/prod' +
            'uct-panel/image.png',
    4,
    1394296
), (
    79,
    'SHEEN',
    'SHE-4539SM-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4539sm-2a/assets/SHE-4539SM-2AU.png.transform/prod' +
            'uct-panel/image.png',
    3,
    1523866
), (
    80,
    'SHEEN',
    'SHE-4540CM-3A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4540cm-3a/assets/SHE-4540CM-3AU.png.transform/prod' +
            'uct-panel/image.png',
    3,
    1708113
), (
    81,
    'G-SHOCK',
    'GA-110SS-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA1/ga-110ss-1a/assets/GA-110SS-1A.png.transform/product-p' +
            'anel/image.png',
    5,
    1887858
), (
    82,
    'G-SHOCK',
    'GA-2110SC-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2110sc-4a/assets/GA-2110SC-4A.png.transform/product' +
            '-panel/image.png',
    5,
    1601356
), (
    83,
    'G-SHOCK',
    'GM-2100SS-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/gm2/gm-2100ss-1a/assets/GM-2100SS-1A.png.transform/product' +
            '-panel/image.png',
    2,
    1510488
), (
    84,
    'G-SHOCK',
    'GA-700SC-3A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA7/ga-700sc-3a/assets/GA-700SC-3A.png.transform/product-p' +
            'anel/image.png',
    3,
    1899328
), (
    85,
    'G-SHOCK',
    'GA-B001-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b001-1a/assets/GA-B001-1A.png.transform/product-pan' +
            'el/image.png',
    5,
    1762675
), (
    86,
    'G-SHOCK',
    'GA-B001-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b001-4a/assets/GA-B001-4A.png.transform/product-pan' +
            'el/image.png',
    1,
    1948207
), (
    87,
    'G-SHOCK',
    'GA-B001G-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b001g-1a/assets/GA-B001G-1A.png.transform/product-p' +
            'anel/image.png',
    3,
    1589753
), (
    88,
    'G-SHOCK',
    'GA-B001G-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b001g-2a/assets/GA-B001G-2A.png.transform/product-p' +
            'anel/image.png',
    1,
    1605961
), (
    89,
    'G-SHOCK',
    'DW-5000SS-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5000ss-1/assets/DW-5000SS-1.png.transform/product-p' +
            'anel/image.png',
    2,
    1663413
), (
    90,
    'G-SHOCK',
    'DW-5610SC-2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5610sc-2/assets/DW-5610SC-2.png.transform/product-p' +
            'anel/image.png',
    3,
    1103333
), (
    91,
    'G-SHOCK',
    'DW-B5600G-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/dwb/dw-b5600g-1/assets/DW-B5600G-1.png.transform/product-p' +
            'anel/image.png',
    2,
    1151451
), (
    92,
    'G-SHOCK',
    'DW-B5600G-2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/dwb/dw-b5600g-2/assets/DW-B5600G-2.png.transform/product-p' +
            'anel/image.png',
    4,
    1628690
), (
    93,
    'G-SHOCK',
    'DW-B5600G-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/dwb/dw-b5600g-7/assets/DW-B5600G-7.png.transform/product-p' +
            'anel/image.png',
    3,
    1857901
), (
    94,
    'G-SHOCK',
    'GM-5600SS-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GM5/gm-5600ss-1/assets/GM-5600SS-1.png.transform/product-p' +
            'anel/image.png',
    4,
    1683236
), (
    95,
    'G-SHOCK',
    'DWE-5600PR-2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DWE/dwe-5600pr-2/assets/DWE-5600PR-2_1.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1605492
), (
    96,
    'G-SHOCK',
    'GX-56SS-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GX/GX5/gx-56ss-1/assets/GX-56SS-1.png.transform/product-panel' +
            '/image.png',
    5,
    1317568
), (
    97,
    'EDIFICE',
    'EQB-2000DB-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EQ/EQB/eqb-2000db-1a/assets/EQB-2000DB-1A.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1721384
), (
    98,
    'EDIFICE',
    'EQB-2000DC-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EQ/EQB/eqb-2000dc-1a/assets/EQB-2000DC-1A.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1881078
), (
    99,
    'CASIO',
    'MTP-VD03B-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03b-1a/assets/MTP-VD03B-1AU.png.transform/produc' +
            't-panel/image.png',
    5,
    1731957
), (
    100,
    'CASIO',
    'MTP-VD03B-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03b-7a/assets/MTP-VD03B-7AU.png.transform/produc' +
            't-panel/image.png',
    1,
    1949945
), (
    101,
    'CASIO',
    'MTP-VD03D-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03d-1a/assets/MTP-VD03D-1AU.png.transform/produc' +
            't-panel/image.png',
    5,
    1915722
), (
    102,
    'CASIO',
    'MTP-VD03D-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03d-2a/assets/MTP-VD03D-2AU.png.transform/produc' +
            't-panel/image.png',
    1,
    1043683
), (
    103,
    'CASIO',
    'MTP-VD03D-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03d-7a/assets/MTP-VD03D-7AU.png.transform/produc' +
            't-panel/image.png',
    5,
    1155919
), (
    104,
    'CASIO',
    'MTP-VD03G-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03g-1a/assets/MTP-VD03G-1AU.png.transform/produc' +
            't-panel/image.png',
    4,
    1363918
), (
    105,
    'CASIO',
    'MTP-VD03GL-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03gl-1a/assets/MTP-VD03GL-1AU.png.transform/prod' +
            'uct-panel/image.png',
    4,
    1267641
), (
    106,
    'CASIO',
    'MTP-VD03L-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03l-1a/assets/MTP-VD03L-1AU.png.transform/produc' +
            't-panel/image.png',
    2,
    1031786
), (
    107,
    'CASIO',
    'MTP-VD03L-5A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd03l-5a/assets/MTP-VD03L-5AU.png.transform/produc' +
            't-panel/image.png',
    4,
    1535933
), (
    108,
    'BABY-G',
    'BA-110XPM-6A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xpm-6a/assets/BA-110XPM-6A.png.transform/product' +
            '-panel/image.png',
    2,
    1059641
), (
    109,
    'BABY-G',
    'BA-130PM-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-130pm-4a/assets/BA-130PM-4A.png.transform/product-p' +
            'anel/image.png',
    4,
    1332124
), (
    110,
    'BABY-G',
    'BGA-280PM-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGA/bga-280pm-7a/assets/BGA-280PM-7A.png.transform/product' +
            '-panel/image.png',
    2,
    1255978
), (
    111,
    'CASIO',
    'IQ-151-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/clock/I/IQ/IQ1/iq-151-1/assets/IQ-151-1.png.transform/product-panel/i' +
            'mage.png',
    3,
    1997902
), (
    112,
    'CASIO',
    'IQ-151-5',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/clock/I/IQ/IQ1/iq-151-5/assets/IQ-151-5.png.transform/product-panel/i' +
            'mage.png',
    2,
    1631162
), (
    113,
    'CASIO',
    'IQ-152-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/clock/I/IQ/IQ1/iq-152-1/assets/IQ-152-1.png.transform/product-panel/i' +
            'mage.png',
    5,
    1565759
), (
    114,
    'CASIO',
    'IQ-152-5',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/clock/I/IQ/IQ1/iq-152-5/assets/IQ-152-5.png.transform/product-panel/i' +
            'mage.png',
    2,
    1939675
), (
    115,
    'SHEEN',
    'SHE-4551GM-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4551gm-9a/assets/SHE-4551GM-9AU.png.transform/prod' +
            'uct-panel/image.png',
    2,
    1478546
), (
    116,
    'SHEEN',
    'SHE-4551M-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4551m-7a/assets/SHE-4551M-7AU.png.transform/produc' +
            't-panel/image.png',
    2,
    1107830
), (
    117,
    'SHEEN',
    'SHE-4551PG-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4551pg-7a/assets/SHE-4551PG-7AU.png.transform/prod' +
            'uct-panel/image.png',
    5,
    1796489
), (
    118,
    'SHEEN',
    'SHE-4551PGM-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4551pgm-4a/assets/SHE-4551PGM-4AU.png.transform/pr' +
            'oduct-panel/image.png',
    5,
    1465608
), (
    119,
    'PRO TREK',
    'PRG-340-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/P/PR/PRG/prg-340-1/assets/PRG-340-1.png.transform/product-panel' +
            '/image.png',
    3,
    1442938
), (
    120,
    'PRO TREK',
    'PRG-340-3',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/P/PR/PRG/prg-340-3/assets/PRG-340-3.png.transform/product-panel' +
            '/image.png',
    4,
    1573405
), (
    121,
    'PRO TREK',
    'PRG-340T-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/P/PR/PRG/prg-340t-7/assets/PRG-340T-7.png.transform/product-pan' +
            'el/image.png',
    3,
    1579376
), (
    122,
    'G-SHOCK',
    'GM-B2100BD-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/gmb/gm-b2100bd-1a/assets/GM-B2100BD-1A.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1667939
), (
    123,
    'G-SHOCK',
    'GM-B2100D-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/gmb/gm-b2100d-1a/assets/GM-B2100D-1A.png.transform/product' +
            '-panel/image.png',
    3,
    1941535
), (
    124,
    'G-SHOCK',
    'GM-B2100GD-5A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/gmb/gm-b2100gd-5a/assets/GM-B2100GD-5A.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1261765
), (
    125,
    'G-SHOCK',
    'GA-2100HUF-5A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2100huf-5a/assets/GA-2100HUF-5A.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1967409
), (
    126,
    'G-SHOCK',
    'GM-2100G-1A9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/gm2/gm-2100g-1a9/assets/GM-2100G-1A9.png.transform/product' +
            '-panel/image.png',
    1,
    1082297
), (
    127,
    'G-SHOCK',
    'GMA-S110GB-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s110gb-1a/assets/GMA-S110GB-1A.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1109593
), (
    128,
    'G-SHOCK',
    'GM-S2100BR-5A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s2100br-5a/assets/GM-S2100BR-5A.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1012534
), (
    129,
    'G-SHOCK',
    'GM-S2100GB-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s2100gb-1a/assets/GM-S2100GB-1A.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1908079
), (
    130,
    'G-SHOCK',
    'GMA-S2100SK-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s2100sk-1a/assets/GMA-S2100SK-1A.png.transform/pro' +
            'duct-panel/image.png',
    4,
    1184855
), (
    131,
    'G-SHOCK',
    'GMA-S2100SK-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s2100sk-2a/assets/GMA-S2100SK-2A.png.transform/pro' +
            'duct-panel/image.png',
    5,
    1563945
), (
    132,
    'G-SHOCK',
    'GMA-S2100SK-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s2100sk-4a/assets/GMA-S2100SK-4A.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1998265
), (
    133,
    'G-SHOCK',
    'GMA-S2100SK-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s2100sk-7a/assets/GMA-S2100SK-7A.png.transform/pro' +
            'duct-panel/image.png',
    5,
    1649448
), (
    134,
    'G-SHOCK',
    'GA-100SKC-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA1/ga-100skc-1a/assets/GA-100SKC-1A.png.transform/product' +
            '-panel/image.png',
    2,
    1294186
), (
    135,
    'G-SHOCK',
    'GA-700SKC-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA7/ga-700skc-1a/assets/GA-700SKC-1A.png.transform/product' +
            '-panel/image.png',
    3,
    1733091
), (
    136,
    'G-SHOCK',
    'GMA-S120GB-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s120gb-1a/assets/GMA-S120GB-1A.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1792778
), (
    137,
    'G-SHOCK',
    'DW-5600SKC-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5600skc-1/assets/DW-5600SKC-1.png.transform/product' +
            '-panel/image.png',
    4,
    1055525
), (
    138,
    'G-SHOCK',
    'GM-S5600BR-5',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s5600br-5/assets/GM-S5600BR-5.png.transform/product' +
            '-panel/image.png',
    4,
    1673266
), (
    139,
    'G-SHOCK',
    'GM-S5600GB-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMS/gm-s5600gb-1/assets/GM-S5600GB-1.png.transform/product' +
            '-panel/image.png',
    1,
    1285932
), (
    140,
    'G-SHOCK',
    'GM-5600G-9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GM5/gm-5600g-9/assets/GM-5600G-9.png.transform/product-pan' +
            'el/image.png',
    5,
    1792373
), (
    141,
    'G-SHOCK',
    'DW-6900BWD-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW6/dw-6900bwd-1/assets/DW-6900BWD-1.png.transform/product' +
            '-panel/image.png',
    1,
    1174011
), (
    142,
    'G-SHOCK',
    'GST-B400GB-1A9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GS/GST/gst-b400gb-1a9/assets/GST-B400GB-1A9.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1717645
), (
    143,
    'G-SHOCK',
    'GST-B100GB-1A9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GS/GST/gst-b100gb-1a9/assets/GST-B100GB-1A9.png.transform/pro' +
            'duct-panel/image.png',
    1,
    1544120
), (
    144,
    'G-SHOCK',
    'GST-B500BD-1A9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GS/GST/gst-b500bd-1a9/assets/GST-B500BD-1A9.png.transform/pro' +
            'duct-panel/image.png',
    5,
    1796243
), (
    145,
    'EDIFICE',
    'ECB-2000D-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EC/ECB/ecb-2000d-1a/assets/ECB-2000D-1A.png.transform/product' +
            '-panel/image.png',
    5,
    1451761
), (
    146,
    'EDIFICE',
    'ECB-2000DC-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EC/ECB/ecb-2000dc-1a/assets/ECB-2000DC-1A.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1159609
), (
    147,
    'EDIFICE',
    'ECB-2000PB-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EC/ECB/ecb-2000pb-1a/assets/ECB-2000PB-1A.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1765818
), (
    148,
    'CASIO',
    'A168WER-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/A1/A16/a168wer-2a/assets/A168WER-2A.png.transform/product-pan' +
            'el/image.png',
    5,
    1769043
), (
    149,
    'CASIO',
    'A168WERB-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/A1/A16/a168werb-2a/assets/A168WERB-2A.png.transform/product-p' +
            'anel/image.png',
    1,
    1988857
), (
    150,
    'CASIO',
    'A168WERG-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/A1/A16/a168werg-2a/assets/A168WERG-2A.png.transform/product-p' +
            'anel/image.png',
    4,
    1817758
), (
    151,
    'CASIO',
    'AQ-800E-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/AQ/aq8/aq-800e-1a/assets/AQ-800E-1A.png.transform/product-pan' +
            'el/image.png',
    5,
    1835326
), (
    152,
    'CASIO',
    'AQ-800E-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/AQ/aq8/aq-800e-7a/assets/AQ-800E-7A.png.transform/product-pan' +
            'el/image.png',
    5,
    1273946
), (
    153,
    'CASIO',
    'AQ-800EG-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/AQ/aq8/aq-800eg-9a/assets/AQ-800EG-9A.png.transform/product-p' +
            'anel/image.png',
    2,
    1147043
), (
    154,
    'CASIO',
    'LA680WEGL-4',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LA/LA6/la680wegl-4/assets/LA680WEGL-4.png.transform/product-p' +
            'anel/image.png',
    3,
    1250957
), (
    155,
    'CASIO',
    'LA680WEGL-5',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LA/LA6/la680wegl-5/assets/LA680WEGL-5.png.transform/product-p' +
            'anel/image.png',
    4,
    1396135
), (
    156,
    'CASIO',
    'LA680WEL-3',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LA/LA6/la680wel-3/assets/LA680WEL-3.png.transform/product-pan' +
            'el/image.png',
    1,
    1042827
), (
    157,
    'CASIO',
    'LA680WEL-8',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LA/LA6/la680wel-8/assets/LA680WEL-8.png.transform/product-pan' +
            'el/image.png',
    4,
    1167139
), (
    158,
    'CASIO',
    'SLV-22A-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/sl/slv/slv-22a-9a/assets/SLV-22A-9A.jpg.transform/product-pan' +
            'el/image.jpg',
    5,
    1744942
), (
    159,
    'CASIO',
    'SLV-22B-9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/sl/slv/slv-22b-9/assets/SLV-22B-9_02.jpg.transform/product-pa' +
            'nel/image.jpg',
    3,
    1633673
), (
    160,
    'BABY-G',
    'BA-110XSM-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BA/BA1/ba-110xsm-2a/assets/BA-110XSM-2A.png.transform/product' +
            '-panel/image.png',
    1,
    1589268
), (
    161,
    'G-SHOCK',
    'DW-5600GU-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5600gu-7/assets/DW-5600GU-7.png.transform/product-p' +
            'anel/image.png',
    2,
    1717032
), (
    162,
    'G-SHOCK',
    'DWE-5600HG-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DWE/dwe-5600hg-1/assets/DWE-5600HG-1.png.transform/product' +
            '-panel/image.png',
    2,
    1337797
), (
    163,
    'EDIFICE',
    'EFV-C110D-1A3V',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFV/efv-c110d-1a3v/assets/EFV-C110D-1A3V.png.transform/pro' +
            'duct-panel/image.png',
    5,
    1338819
), (
    164,
    'EDIFICE',
    'EFV-C110D-1A4V',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFV/efv-c110d-1a4v/assets/EFV-C110D-1A4V.png.transform/pro' +
            'duct-panel/image.png',
    5,
    1191143
), (
    165,
    'EDIFICE',
    'EFV-C110D-2AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFV/efv-c110d-2av/assets/EFV-C110D-2AV.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1087167
), (
    166,
    'EDIFICE',
    'EFV-C110L-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EF/EFV/efv-c110l-1av/assets/EFV-C110L-1AV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1103512
), (
    167,
    'CASIO',
    'LTP-V009D-1E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LT/LTP/ltp-v009d-1e/assets/LTP-V009D-1EU.png.transform/produc' +
            't-panel/image.png',
    3,
    1197491
), (
    168,
    'CASIO',
    'LTP-V009D-2E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LT/LTP/ltp-v009d-2e/assets/LTP-V009D-2EU.png.transform/produc' +
            't-panel/image.png',
    2,
    1579661
), (
    169,
    'CASIO',
    'LTP-V009D-4E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LT/LTP/ltp-v009d-4e/assets/LTP-V009D-4EU.png.transform/produc' +
            't-panel/image.png',
    1,
    1702225
), (
    170,
    'CASIO',
    'LTP-V009D-7E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LT/LTP/ltp-v009d-7e/assets/LTP-V009D-7EU.png.transform/produc' +
            't-panel/image.png',
    1,
    1625220
), (
    171,
    'CASIO',
    'LTP-V009G-7E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LT/LTP/ltp-v009g-7e/assets/LTP-V009G-7EU.png.transform/produc' +
            't-panel/image.png',
    4,
    1564678
), (
    172,
    'CASIO',
    'MQ-24UC-2B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MQ/MQ2/mq-24uc-2b/assets/MQ-24UC-2B.png.transform/product-pan' +
            'el/image.png',
    2,
    1622922
), (
    173,
    'CASIO',
    'MQ-24UC-3B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MQ/MQ2/mq-24uc-3b/assets/MQ-24UC-3B.png.transform/product-pan' +
            'el/image.png',
    2,
    1300981
), (
    174,
    'CASIO',
    'MQ-24UC-4B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MQ/MQ2/mq-24uc-4b/assets/MQ-24UC-4B.png.transform/product-pan' +
            'el/image.png',
    5,
    1437208
), (
    175,
    'CASIO',
    'MQ-24UC-8B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MQ/MQ2/mq-24uc-8b/assets/MQ-24UC-8B.png.transform/product-pan' +
            'el/image.png',
    5,
    1548490
), (
    176,
    'CASIO',
    'MQ-38UC-2A1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MQ/mq3/mq-38uc-2a1/assets/MQ-38UC-2A1.png.transform/product-p' +
            'anel/image.png',
    5,
    1736985
), (
    177,
    'CASIO',
    'MQ-38UC-2A2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MQ/mq3/mq-38uc-2a2/assets/MQ-38UC-2A2.png.transform/product-p' +
            'anel/image.png',
    3,
    1574779
), (
    178,
    'CASIO',
    'MQ-38UC-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MQ/mq3/mq-38uc-4a/assets/MQ-38UC-4A.png.transform/product-pan' +
            'el/image.png',
    2,
    1706881
), (
    179,
    'CASIO',
    'MQ-38UC-8A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MQ/mq3/mq-38uc-8a/assets/MQ-38UC-8A.png.transform/product-pan' +
            'el/image.png',
    3,
    1564212
), (
    180,
    'CASIO',
    'MTP-E350B-1BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e350b-1bv/assets/MTP-E350B-1BV.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1696081
), (
    181,
    'CASIO',
    'MTP-E350B-7BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e350b-7bv/assets/MTP-E350B-7BV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1615875
), (
    182,
    'CASIO',
    'MTP-E350BL-1BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e350bl-1bv/assets/MTP-E350BL-1BV.png.transform/pro' +
            'duct-panel/image.png',
    5,
    1132254
), (
    183,
    'CASIO',
    'MTP-E350D-1BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e350d-1bv/assets/MTP-E350D-1BV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1657917
), (
    184,
    'CASIO',
    'MTP-E350D-7BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e350d-7bv/assets/MTP-E350D-7BV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1746703
), (
    185,
    'CASIO',
    'MTP-E350L-1BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e350l-1bv/assets/MTP-E350L-1BV.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1712916
), (
    186,
    'CASIO',
    'MTP-E700B-1EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e700b-1ev/assets/MTP-E700B-1EV.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1267616
), (
    187,
    'CASIO',
    'MTP-E700B-7EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e700b-7ev/assets/MTP-E700B-7EV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1379910
), (
    188,
    'CASIO',
    'MTP-E700BL-1EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e700bl-1ev/assets/MTP-E700BL-1EV.png.transform/pro' +
            'duct-panel/image.png',
    3,
    1009973
), (
    189,
    'CASIO',
    'MTP-E700D-1EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e700d-1ev/assets/MTP-E700D-1EV.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1995581
), (
    190,
    'CASIO',
    'MTP-E700D-7EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e700d-7ev/assets/MTP-E700D-7EV.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1697757
), (
    191,
    'CASIO',
    'MTP-E700L-1EV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-e700l-1ev/assets/MTP-E700L-1EV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1497602
), (
    192,
    'CASIO',
    'MTP-B205D-1E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b205d-1e/assets/MTP-B205D-1E.png.transform/product' +
            '-panel/image.png',
    2,
    1548300
), (
    193,
    'CASIO',
    'MTP-B205D-7E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b205d-7e/assets/MTP-B205D-7E.png.transform/product' +
            '-panel/image.png',
    4,
    1625178
), (
    194,
    'CASIO',
    'MTP-B205M-1E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b205m-1e/assets/MTP-B205M-1E.png.transform/product' +
            '-panel/image.png',
    5,
    1207315
), (
    195,
    'CASIO',
    'MTP-B205M-2E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b205m-2e/assets/MTP-B205M-2E.png.transform/product' +
            '-panel/image.png',
    1,
    1936682
), (
    196,
    'CASIO',
    'MTP-B205M-3E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b205m-3e/assets/MTP-B205M-3E.png.transform/product' +
            '-panel/image.png',
    1,
    1526050
), (
    197,
    'CASIO',
    'MTP-B205M-5E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b205m-5e/assets/MTP-B205M-5E.png.transform/product' +
            '-panel/image.png',
    5,
    1892233
), (
    198,
    'CASIO',
    'MTP-B205M-7E',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b205m-7e/assets/MTP-B205M-7E.png.transform/product' +
            '-panel/image.png',
    2,
    1733993
), (
    199,
    'BABY-G',
    'BSA-B100CS-3A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BS/BSA/bsa-b100cs-3a/assets/BSA-B100CS-3A.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1150685
), (
    200,
    'BABY-G',
    'BSA-B100CS-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BS/BSA/bsa-b100cs-4a/assets/BSA-B100CS-4A.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1058731
), (
    201,
    'BABY-G',
    'BSA-B100CS-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BS/BSA/bsa-b100cs-7a/assets/BSA-B100CS-7A.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1013277
), (
    202,
    'CASIO',
    'IQ-06-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/clock/I/IQ/IQ0/iq-06-1/assets/IQ-06-1.png.transform/product-panel/ima' +
            'ge.png',
    4,
    1914974
), (
    203,
    'CASIO',
    'IQ-06-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/clock/I/IQ/IQ0/iq-06-7/assets/IQ-06-7.png.transform/product-panel/ima' +
            'ge.png',
    5,
    1815715
), (
    204,
    'SHEEN',
    'SHE-4550D-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4550d-2a/assets/SHE-4550D-2AU.png.transform/produc' +
            't-panel/image.png',
    4,
    1443694
), (
    205,
    'SHEEN',
    'SHE-4550D-2B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4550d-2b/assets/SHE-4550D-2BU.png.transform/produc' +
            't-panel/image.png',
    1,
    1978983
), (
    206,
    'SHEEN',
    'SHE-4550G-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4550g-9a/assets/SHE-4550G-9AU.png.transform/produc' +
            't-panel/image.png',
    3,
    1320300
), (
    207,
    'SHEEN',
    'SHE-4550PG-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/S/SH/SHE/she-4550pg-4a/assets/SHE-4550PG-4AU.png.transform/prod' +
            'uct-panel/image.png',
    1,
    1259900
), (
    208,
    'G-SHOCK',
    'GMW-B5000TVB-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMW/gmw-b5000tvb-1/assets/GMW-B5000TVB-1.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1641534
), (
    209,
    'G-SHOCK',
    'GA-2100NN-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2100nn-1a/assets/GA-2100NN-1A.png.transform/product' +
            '-panel/image.png',
    1,
    1430415
), (
    210,
    'G-SHOCK',
    'GA-2100SR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2100sr-1a/assets/GA-2100SR-1A.png.transform/product' +
            '-panel/image.png',
    4,
    1395533
), (
    211,
    'G-SHOCK',
    'GA-2100SRS-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2100srs-7a/assets/GA-2100SRS-7A.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1415575
), (
    212,
    'G-SHOCK',
    'GA-110SR-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA1/ga-110sr-1a/assets/GA-110SR-1A.png.transform/product-p' +
            'anel/image.png',
    4,
    1294604
), (
    213,
    'G-SHOCK',
    'GA-110BWP-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA1/ga-110bwp-2a/assets/GA-110BWP-2A_01.png.transform/prod' +
            'uct-panel/image.png',
    4,
    1012834
), (
    214,
    'G-SHOCK',
    'GA-2100BWP-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2100bwp-2a/assets/GA-2100BWP-2A_01.png.transform/pr' +
            'oduct-panel/image.png',
    2,
    1056144
), (
    215,
    'G-SHOCK',
    'GA-2200NN-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2200nn-1a/assets/GA-2200NN-1A.png.transform/product' +
            '-panel/image.png',
    5,
    1446612
), (
    216,
    'G-SHOCK',
    'GA-2200SL-5A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2200sl-5a/assets/GA-2200SL-5A.png.transform/product' +
            '-panel/image.png',
    4,
    1702460
), (
    217,
    'G-SHOCK',
    'GA-2200SL-8A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA2/ga-2200sl-8a/assets/GA-2200SL-8A.png.transform/product' +
            '-panel/image.png',
    4,
    1936238
), (
    218,
    'G-SHOCK',
    'GA-700BWP-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/GA7/ga-700bwp-2a/assets/GA-700BWP-2A_01.png.transform/prod' +
            'uct-panel/image.png',
    1,
    1080900
), (
    219,
    'G-SHOCK',
    'DW-5600NN-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5600nn-1/assets/DW-5600NN-1.png.transform/product-p' +
            'anel/image.png',
    2,
    1746112
), (
    220,
    'G-SHOCK',
    'DW-5600SR-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5600sr-1/assets/DW-5600SR-1.png.transform/product-p' +
            'anel/image.png',
    5,
    1978786
), (
    221,
    'G-SHOCK',
    'DW-5600SRS-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5600srs-7/assets/DW-5600SRS-7.png.transform/product' +
            '-panel/image.png',
    2,
    1668534
), (
    222,
    'G-SHOCK',
    'GW-B5600SL-4',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GW/GWB/gw-b5600sl-4/assets/GW-B5600SL-4.png.transform/product' +
            '-panel/image.png',
    4,
    1735289
), (
    223,
    'G-SHOCK',
    'GW-B5600SL-5',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GW/GWB/gw-b5600sl-5/assets/GW-B5600SL-5.png.transform/product' +
            '-panel/image.png',
    3,
    1804061
), (
    224,
    'G-SHOCK',
    'DW-5600BWP-2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/D/DW/DW5/dw-5600bwp-2/assets/DW-5600BWP-2_01.png.transform/prod' +
            'uct-panel/image.png',
    2,
    1568135
), (
    225,
    'G-SHOCK',
    'GX-56SL-4',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GX/GX5/gx-56sl-4/assets/GX-56SL-4.png.transform/product-panel' +
            '/image.png',
    3,
    1877435
), (
    226,
    'G-SHOCK',
    'MRG-B5000BA-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MR/MRG/mrg-b5000ba-1/assets/MRG-B5000BA-1.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1496851
), (
    227,
    'CASIO',
    'MTP-VD200B-1B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd200b-1b/assets/MTP-VD200B-1BU.png.transform/prod' +
            'uct-panel/image.png',
    2,
    1498315
), (
    228,
    'CASIO',
    'MTP-VD200BL-5B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd200bl-5b/assets/MTP-VD200BL-5BU.png.transform/pr' +
            'oduct-panel/image.png',
    3,
    1723039
); INSERT INTO `barang` (`ID`, `Jenis`, `Nama`, `Gambar`, `Stok`, `Harga`)VALUES(
    229,
    'CASIO',
    'MTP-VD200D-1B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd200d-1b/assets/MTP-VD200D-1BU.png.transform/prod' +
            'uct-panel/image.png',
    3,
    1140829
), (
    230,
    'CASIO',
    'MTP-VD200D-2B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd200d-2b/assets/MTP-VD200D-2BU.png.transform/prod' +
            'uct-panel/image.png',
    5,
    1317889
), (
    231,
    'CASIO',
    'MTP-VD200G-1B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd200g-1b/assets/MTP-VD200G-1BU.png.transform/prod' +
            'uct-panel/image.png',
    4,
    1639778
), (
    232,
    'CASIO',
    'MTP-VD200GL-1B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd200gl-1b/assets/MTP-VD200GL-1BU.png.transform/pr' +
            'oduct-panel/image.png',
    2,
    1873220
), (
    233,
    'CASIO',
    'MTP-VD200L-1B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd200l-1b/assets/MTP-VD200L-1BU.png.transform/prod' +
            'uct-panel/image.png',
    5,
    1819578
), (
    234,
    'CASIO',
    'MTP-VD200L-2B',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-vd200l-2b/assets/MTP-VD200L-2BU.png.transform/prod' +
            'uct-panel/image.png',
    5,
    1648761
), (
    235,
    'CASIO',
    'MWA-100HD-2AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MW/MWA/mwa-100hd-2av/assets/MWA-100HD-2AV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1866335
), (
    236,
    'CASIO',
    'MWA-100HD-7AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MW/MWA/mwa-100hd-7av/assets/MWA-100HD-7AV.png.transform/produ' +
            'ct-panel/image.png',
    2,
    1082372
), (
    237,
    'CASIO',
    'MWD-100HD-1BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MW/MWD/mwd-100hd-1bv/assets/MWD-100HD-1BV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1088768
), (
    238,
    'BABY-G',
    'BGD-565KRS-7',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGD/bgd-565krs-7/assets/BGD-565KRS-7.png.transform/product' +
            '-panel/image.png',
    3,
    1841626
), (
    239,
    'BABY-G',
    'BGA-280AP-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGA/bga-280ap-7a/assets/BGA-280AP-7A.png.transform/product' +
            '-panel/image.png',
    2,
    1389871
), (
    240,
    'EDIFICE',
    'EQS-940BL-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EQ/EQS/eqs-940bl-1av/assets/EQS-940BL-1AVU.png.transform/prod' +
            'uct-panel/image.png',
    2,
    1845373
), (
    241,
    'EDIFICE',
    'EQS-940DB-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EQ/EQS/eqs-940db-1av/assets/EQS-940DB-1AVU.png.transform/prod' +
            'uct-panel/image.png',
    2,
    1875296
), (
    242,
    'EDIFICE',
    'EQS-940DC-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/E/EQ/EQS/eqs-940dc-1av/assets/EQS-940DC-1AVU.png.transform/prod' +
            'uct-panel/image.png',
    2,
    1922568
), (
    243,
    'CASIO',
    'MRW-210H-3AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MR/mrw/mrw-210h-3av/assets/MRW-210H-3AV.png.transform/product' +
            '-panel/image.png',
    4,
    1852772
), (
    244,
    'CASIO',
    'MRW-210H-5AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MR/mrw/mrw-210h-5av/assets/MRW-210H-5AV.png.transform/product' +
            '-panel/image.png',
    2,
    1824205
), (
    245,
    'CASIO',
    'MTP-B120B-8AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120b-8av/assets/MTP-B120B-8AV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1588279
), (
    246,
    'CASIO',
    'MTP-B120BL-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120bl-1av/assets/MTP-B120BL-1AV.png.transform/pro' +
            'duct-panel/image.png',
    1,
    1689040
), (
    247,
    'CASIO',
    'MTP-B120D-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120d-1av/assets/MTP-B120D-1AV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1114751
), (
    248,
    'CASIO',
    'MTP-B120GL-7AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120gl-7av/assets/MTP-B120GL-7AV.png.transform/pro' +
            'duct-panel/image.png',
    5,
    1560679
), (
    249,
    'CASIO',
    'MTP-B120L-7AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120l-7av/assets/MTP-B120L-7AV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1839551
), (
    250,
    'CASIO',
    'MTP-B120M-2AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120m-2av/assets/MTP-B120M-2AV.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1730352
), (
    251,
    'CASIO',
    'MTP-B120M-7AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120m-7av/assets/MTP-B120M-7AV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1729595
), (
    252,
    'CASIO',
    'MTP-B120MG-3AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120mg-3av/assets/MTP-B120MG-3AV.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1938105
), (
    253,
    'CASIO',
    'MTP-B120MR-8AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120mr-8av/assets/MTP-B120MR-8AV.png.transform/pro' +
            'duct-panel/image.png',
    4,
    1197922
), (
    254,
    'CASIO',
    'MTP-B120RL-5AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b120rl-5av/assets/MTP-B120RL-5AV.png.transform/pro' +
            'duct-panel/image.png',
    1,
    1639512
), (
    255,
    'CASIO',
    'MTP-B125B-8AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125b-8av/assets/MTP-B125B-8AV.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1983812
), (
    256,
    'CASIO',
    'MTP-B125D-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125d-1av/assets/MTP-B125D-1AV.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1791307
), (
    257,
    'CASIO',
    'MTP-B125GL-7AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125gl-7av/assets/MTP-B125GL-7AV.png.transform/pro' +
            'duct-panel/image.png',
    1,
    1291384
), (
    258,
    'CASIO',
    'MTP-B125L-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125l-1av/assets/MTP-B125L-1AV.png.transform/produ' +
            'ct-panel/image.png',
    5,
    1068314
), (
    259,
    'CASIO',
    'MTP-B125M-2AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125m-2av/assets/MTP-B125M-2AV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1089424
), (
    260,
    'CASIO',
    'MTP-B125M-7AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125m-7av/assets/MTP-B125M-7AV.png.transform/produ' +
            'ct-panel/image.png',
    3,
    1642082
), (
    261,
    'CASIO',
    'MTP-B125MG-3AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125mg-3av/assets/MTP-B125MG-3AV.png.transform/pro' +
            'duct-panel/image.png',
    4,
    1922827
), (
    262,
    'CASIO',
    'MTP-B125MR-8AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125mr-8av/assets/MTP-B125MR-8AV.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1600042
), (
    263,
    'CASIO',
    'MTP-B125RL-5AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b125rl-5av/assets/MTP-B125RL-5AV.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1083504
), (
    264,
    'CASIO',
    'MTP-B310BL-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b310bl-1av/assets/MTP-B310BL-1AV.png.transform/pro' +
            'duct-panel/image.png',
    3,
    1496927
), (
    265,
    'CASIO',
    'MTP-B310BL-5AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b310bl-5av/assets/MTP-B310BL-5AV.png.transform/pro' +
            'duct-panel/image.png',
    1,
    1563795
), (
    266,
    'CASIO',
    'MTP-B310L-9AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b310l-9av/assets/MTP-B310L-9AV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1714418
), (
    267,
    'CASIO',
    'MTP-B310M-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b310m-1av/assets/MTP-B310M-1AV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1728261
), (
    268,
    'CASIO',
    'MTP-B310M-2AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b310m-2av/assets/MTP-B310M-2AV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1658281
), (
    269,
    'CASIO',
    'MTP-B310M-7AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTP/mtp-b310m-7av/assets/MTP-B310M-7AV.png.transform/produ' +
            'ct-panel/image.png',
    1,
    1042644
), (
    270,
    'CASIO',
    'AE-1500WHX-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/AE/AE1/ae-1500whx-1av/assets/AE-1500WHX-1AV.png.transform/pro' +
            'duct-panel/image.png',
    2,
    1554233
), (
    271,
    'CASIO',
    'AE-1500WHX-3AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/A/AE/AE1/ae-1500whx-3av/assets/AE-1500WHX-3AV.png.transform/pro' +
            'duct-panel/image.png',
    4,
    1497758
), (
    272,
    'CASIO',
    'LWS-1200H-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LW/LWS/lws-1200h-1av/assets/LWS-1200H-1AV.png.transform/produ' +
            'ct-panel/image.png',
    4,
    1927214
), (
    273,
    'CASIO',
    'LWS-1200H-7A1V',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LW/LWS/lws-1200h-7a1v/assets/LWS-1200H-7A1V.png.transform/pro' +
            'duct-panel/image.png',
    3,
    1560203
), (
    274,
    'CASIO',
    'LWS-1200H-7A2V',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/L/LW/LWS/lws-1200h-7a2v/assets/LWS-1200H-7A2V.png.transform/pro' +
            'duct-panel/image.png',
    3,
    1279250
), (
    275,
    'CASIO',
    'W-737HX-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/W/W7/W73/w-737hx-1av/assets/W-737HX-1AV.png.transform/product-p' +
            'anel/image.png',
    4,
    1427182
), (
    276,
    'CASIO',
    'W-737HX-5AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/W/W7/W73/w-737hx-5av/assets/W-737HX-5AV.png.transform/product-p' +
            'anel/image.png',
    2,
    1677473
), (
    277,
    'G-SHOCK',
    'MTG-B3000B-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTG/mtg-b3000b-1a/assets/MTG-B3000B-1A_JF.png.transform/pr' +
            'oduct-panel/image.png',
    1,
    1980269
), (
    278,
    'G-SHOCK',
    'MTG-B3000BD-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTG/mtg-b3000bd-1a/assets/MTG-B3000BD-1A_JF.png.transform/' +
            'product-panel/image.png',
    5,
    1945466
), (
    279,
    'G-SHOCK',
    'MTG-B3000BD-1A2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/M/MT/MTG/mtg-b3000bd-1a2/assets/MTG-B3000BD-1A2_JF.png.transfor' +
            'm/product-panel/image.png',
    1,
    1432687
), (
    280,
    'G-SHOCK',
    'GMA-S2200-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s2200-1a/assets/GMA-S2200-1A_01.png.transform/prod' +
            'uct-panel/image.png',
    2,
    1496005
), (
    281,
    'G-SHOCK',
    'GMA-S2200-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s2200-7a/assets/GMA-S2200-7A_01.png.transform/prod' +
            'uct-panel/image.png',
    1,
    1660289
), (
    282,
    'G-SHOCK',
    'GMA-S2200M-4A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s2200m-4a/assets/GMA-S2200M-4A_01.png.transform/pr' +
            'oduct-panel/image.png',
    3,
    1086079
), (
    283,
    'G-SHOCK',
    'GMA-S2200M-7A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GM/GMA/gma-s2200m-7a/assets/GMA-S2200M-7A_01.png.transform/pr' +
            'oduct-panel/image.png',
    2,
    1573785
), (
    284,
    'G-SHOCK',
    'GA-B2100-1A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b2100-1a/assets/GA-B2100-1A.png.transform/product-p' +
            'anel/image.png',
    1,
    1085306
), (
    285,
    'G-SHOCK',
    'GA-B2100-1A1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b2100-1a1/assets/GA-B2100-1A1.png.transform/product' +
            '-panel/image.png',
    1,
    1036119
), (
    286,
    'G-SHOCK',
    'GA-B2100-2A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b2100-2a/assets/GA-B2100-2A.png.transform/product-p' +
            'anel/image.png',
    4,
    1839633
), (
    287,
    'G-SHOCK',
    'GA-B2100-3A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b2100-3a/assets/GA-B2100-3A.png.transform/product-p' +
            'anel/image.png',
    4,
    1049191
), (
    288,
    'G-SHOCK',
    'GA-B2100C-9A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GA/gab/ga-b2100c-9a/assets/GA-B2100C-9A.png.transform/product' +
            '-panel/image.png',
    4,
    1946024
), (
    289,
    'G-SHOCK',
    'GLX-5600RT-4',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GL/GLX/glx-5600rt-4/assets/GLX-5600RT-4.png.transform/product' +
            '-panel/image.png',
    5,
    1349306
), (
    290,
    'G-SHOCK',
    'GLX-5600RT-9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GL/GLX/glx-5600rt-9/assets/GLX-5600RT-9.png.transform/product' +
            '-panel/image.png',
    4,
    1896680
), (
    291,
    'G-SHOCK',
    'GBA-900UU-3A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GB/GBA/gba-900uu-3a/assets/GBA-900UU-3A.png.transform/product' +
            '-panel/image.png',
    1,
    1926243
), (
    292,
    'G-SHOCK',
    'GBA-900UU-5A',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GB/GBA/gba-900uu-5a/assets/GBA-900UU-5A.png.transform/product' +
            '-panel/image.png',
    2,
    1989209
), (
    293,
    'G-SHOCK',
    'GBD-200UU-1',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GB/GBD/gbd-200uu-1/assets/GBD-200UU-1.png.transform/product-p' +
            'anel/image.png',
    3,
    1206364
), (
    294,
    'G-SHOCK',
    'GBD-200UU-9',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/G/GB/GBD/gbd-200uu-9/assets/GBD-200UU-9.png.transform/product-p' +
            'anel/image.png',
    4,
    1571827
), (
    295,
    'CASIO',
    'WS-1400H-1AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/W/WS/WS1/ws-1400h-1av/assets/WS-1400H-1AV.png.transform/product' +
            '-panel/image.png',
    4,
    1043657
), (
    296,
    'CASIO',
    'WS-1400H-1BV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/W/WS/WS1/ws-1400h-1bv/assets/WS-1400H-1BV.png.transform/product' +
            '-panel/image.png',
    3,
    1037117
), (
    297,
    'CASIO',
    'WS-1400H-3AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/W/WS/WS1/ws-1400h-3av/assets/WS-1400H-3AV.png.transform/product' +
            '-panel/image.png',
    4,
    1433632
), (
    298,
    'CASIO',
    'WS-1400H-4AV',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/W/WS/WS1/ws-1400h-4av/assets/WS-1400H-4AV.png.transform/product' +
            '-panel/image.png',
    1,
    1055766
), (
    299,
    'BABY-G',
    'BLX-565-2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BL/BLX/blx-565-2/assets/BLX-565-2.png.transform/product-panel' +
            '/image.png',
    3,
    1420706
), (
    300,
    'BABY-G',
    'BLX-565-3',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BL/BLX/blx-565-3/assets/BLX-565-3.png.transform/product-panel' +
            '/image.png',
    1,
    1237966
), (
    301,
    'BABY-G',
    'BLX-565S-2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BL/BLX/blx-565s-2/assets/BLX-565S-2.png.transform/product-pan' +
            'el/image.png',
    1,
    1332724
), (
    302,
    'BABY-G',
    'BLX-565S-4',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BL/BLX/blx-565s-4/assets/BLX-565S-4.png.transform/product-pan' +
            'el/image.png',
    1,
    1144979
), (
    303,
    'BABY-G',
    'BGA-310-7A2',
    'https://www.casio.com/content/dam/casio/product-info/locales/intl/en/timepiece' +
            '/product/watch/B/BG/BGA/bga-310-7a2/assets/BGA-310-7A2_01.png.transform/produc' +
            't-panel/image.png',
    2,
    1710870
); ----Indexes for dumped tables-- -- --Indexes for table `barang`-- ALTER TABLE `barang` ADD PRIMARY KEY(`ID`); ----AUTO_INCREMENT for dumped tables-- -- --AUTO_INCREMENT for table `barang`-- ALTER TABLE `barang` MODIFY `ID` int(11)NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 304; COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
