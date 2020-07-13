-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 09:25 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a166007`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_a166007_pt2`
--

CREATE TABLE IF NOT EXISTS `tbl_products_a166007_pt2` (
  `fld_product_num` varchar(255) NOT NULL DEFAULT '',
  `fld_product_name` varchar(255) DEFAULT NULL,
  `fld_product_price` varchar(255) DEFAULT NULL,
  `fld_product_size` varchar(255) DEFAULT NULL,
  `fld_product_type` varchar(255) DEFAULT NULL,
  `fld_product_brand` varchar(255) DEFAULT NULL,
  `fld_product_description` varchar(255) DEFAULT NULL,
  `fld_product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products_a166007_pt2`
--

INSERT INTO `tbl_products_a166007_pt2` (`fld_product_num`, `fld_product_name`, `fld_product_price`, `fld_product_size`, `fld_product_type`, `fld_product_brand`, `fld_product_description`, `fld_product_image`) VALUES
('P001', '9 inch Android Car Player', '200.00', 'Double Din', 'Car Radio', 'OEM', '(2RAM 16GB IPS 2.5d SCREEN) 9'''' Universal Big Screen 2DIN 2GB+16GB Android Player WITH WORLD TV CHANNELS Car Stereo With WIFI Video Player/TouchScreen', ''),
('P002', 'Backup Reverse Camera', '29.00', 'Single Camera', 'Reverse Camera', 'Sanyo', 'Night Vision 8 LED Car Rear View Reverse Camera HD Video Waterproof Auto Parking Monitor Reversing CCD 170 Degree', ''),
('P003', 'Backup Reverse Camera', '29.00', 'Single Antenna', 'Antenna', 'NIPPON', 'NIPPON POWER NP-12 Car FM Windscreen Antenna Universal Type', ''),
('P004', 'MYVI ALZA VIVA Powered Antenna', '40.00', 'Single Antenna', 'Antenna', 'NIPPON', 'Nippon NP-29 Myvi Alza Viva Replacement Car Stereo Antenna AM / FM 18CM', ''),
('P005', 'M-Spark Car Player Audio Stereo Single Din', '25.99', 'Single Din', 'Car Radio', 'M-Spark', 'M-Spark Car Player Audio Stereo Single Din 1 Din Blue LED Screen On FM Board Car Stereo Input Receiver 50W x 4 LCD Screen SD USB MP3 WMA Radio Player', ''),
('P006', '1Din BT Car Radio', '48.00', 'Single Din', 'Car Radio', 'EsoGoal', 'EsoGoal Car Stereo Bluetooth Wireless Digital Media Single-Din in Dash Receivers USB/SD/Audio MP3 Player/FM Radio with Remote Control', ''),
('P007', '7inch LCD Monitor', '79.00', '800x400 pixel', 'Monitor', 'Womdee', 'Womdee 7 Inch Rearview Reversing LCD Monitor, 800X400 Resolution Screen, Two Video Input Plug V1/V2 Car Rearview Cameras', ''),
('P008', 'Reverse Camera with Radar', '60.00', 'Single Camera, Two Radar', 'Reverse Camera', 'CENBLUE', 'CENBLUE Car Parking Reversing Radar Rear View Backup Camera Universal with Buzzer Warning', ''),
('P009', 'Reverse Sensor with 4 Radar', '50.00', 'Four Radar', 'Reverse Sensor', 'PZ500', 'PZ500 2.5''''LCD Rear Car Reverse 4 Reversing Parking Sensor Radar Detector System PZ500 Car Parking Reverse Radar Silver Sensor With LCD Display Monitor 12V Auto Reverse Backup Parking', ''),
('P010', 'Universal Car Alarm', '49.00', 'Two remote control', 'Car Alarm', 'OEM', 'Universal Car Alarm Security Protection System Anti-theft Keyless Entry with 2 Remote Controls Siren', ''),
('P011', 'Car Radio Stereo Head Unit Player', '42.90', 'Single Din', 'Car Radio', 'PRAGO', 'PRADO Malaysia Professional Bluetooth USB Car Radio Stereo Head Unit Player MP3/USB/SD/AUX/FM wt Remote Control', ''),
('P012', '4.1 inch Car Radio MP5 Player 1 Din HD 800*480', '86.70', 'Single Din', 'Car Radio', 'SF', 'HOT SF 4.1 inch Car Radio MP5 Player 1 Din HD 800*480 Bluetooth FM/AUX/USB/TF Steering Wheel Control Support Rear View Camera Specification:4019B', ''),
('P013', 'Kenwood audio player DPX-5100BT Dual Din', '399.00', 'Double Din', 'Car Radio', 'Kenwood', 'Kenwood audio player DPX-5100BT Dual Din USB/CD Receiver High Voltage 4.0V / 3-preouts', ''),
('P014', 'Kenwood Single Din Player KDC200UV', '190.00', 'Single Din', 'Car Radio', 'Kenwood', 'Kenwood Single Din Player KDC200UV Android,Iphone 3 Band, CD,USB,BLUE', ''),
('P015', 'Kenwood Single Din Player KMM-U21', '178.00', 'Single Din', 'Car Radio', 'Kenwood', 'Kenwood Single Din Player KMM-U21 Android,Iphone, USB RED', ''),
('P016', 'Car Audio Radio Player Bluetooth Stereo', '26.99', 'Single Din', 'Car Radio', 'M-Spark', 'M-Spark Car Audio Radio Player Bluetooth Stereo Car MP3 Player with SD USB AUX-IN FM Radio Charging', ''),
('P017', 'Bluetooth Car FM Transmitter Wireless Radio Adapter USB Charger Mp3 Player', '8.81', 'Single Transmitter', 'FM Transmitter', 'LONY', 'Bluetooth Car FM Transmitter Wireless Radio Adapter USB Charger Mp3 Player Hands-free Call: Safely answer/reject/make calls through the multifunction button while driving. Memory Function: Automatically connects the last paired smart devices when you star', ''),
('P018', 'Night Vision Waterproof HD CMOS Reverse Car Rear View Backup Parking Camera', '30.68', 'Single Camera', 'Reverse Camera', 'LONY', 'LONY CAFE SHOP Night Vision Waterproof HD CMOS Reverse Car Rear View Backup Parking Camera LED', ''),
('P019', '2 Inch Driving Recorder Dash Cam', '29.50', 'Single Camera Dashcam', 'Dashcam', 'Mingrui', 'Mingrui Store 1080P 2 Inch Driving Recorder Dash Cam Portable Car DVR Clever', ''),
('P020', 'Car DVR Vehicle Camera Recorder Dash Cam', '33.70', 'Single Camera Dashcam', 'Dashcam', 'Mingrui', '6LED 2.5'' HD Car DVR Vehicle Camera Recorder Dash Cam Camcorder Crashcam 270°', ''),
('P021', 'Xiaomi 70MAI PRO Car Recorder Dashcam 1944P', '189.00', 'Single Camera Dashcam', 'Dashcam', 'Xiaomi', '[GLOBAL VERSION] Xiaomi 70MAI PRO Car Recorder Dashcam 1944P Dashboard 70 MAI Car Cameras WiFi APP CONTROL SONY IMX335 - ORIGINAL ENGLISH SET', ''),
('P022', '70Mai TPMS Tyre Pressure Monitoring System', '189.00', 'Quad TPMS', 'TPMS', '70Mai', '[Globe Version] 70mai TPMS Tire Pressure Monitor System English APP Solar Power USB Tmps 70 Mai Car Tyre Pressure Sensors System Alarm', ''),
('P023', 'OSOM External TPMS', '76.50', 'Quad TPMS', 'TPMS', 'OSOM', 'OSOM External TPMS [True] Color Screen Tire Pressure System Solar Wireless LED Display', ''),
('P024', '4K Car Cameras DVR Dual Lens', '356.00', 'Dual Camera Dashcam', 'Dashcam', 'OEM', 'Original 4K Car Cameras DVR Dual Lens Front Rear Car Camera DVR Dashcam Black Box build in wifi GPS car cameras with ADAS Front and Rear View Lens Dashboard Cam Motion Detection Recorder car DVR dual lens car camera recorder rear view mirror', ''),
('P025', '3G WiFi Car Dash Cam with 3.0" screen', '405.00', 'Dual Camera Dashcam', 'Dashcam', 'EKLEVA', 'EKLEVA 3G WiFi Car Dash Cam with 3.0"Touch IPS screen Android GPS Camera Recorder 1080P Dual lens WDR 24hours Monitor DVR', ''),
('P026', '10" Car Rearview Mirror 4G Android 8.1 Dash Cam', '396.00', 'Dual Camera Dashcam', 'Dashcam, Rearview', 'COOLDIN', 'COOLDIN 10" Car Rearview Mirror 4G Android 8.1 Dash Cam GPS Navigation ADAS WIFI FHD 1080P Car Video Camera Recorder DVR Remote view', ''),
('P027', 'Kenwood DRV-N520 DVR', '686.00', 'Single Camera Dashcam', 'Dashcam', 'Kenwood', 'Kenwood DRV-N520 FULL HD RECORDING DASHBOARD CAMERA', ''),
('P028', 'LB 7-Sound Loud Car Warning Alarm', '32.63', 'Single Siren', 'Siren Alarm', 'LB', 'LB 7-Sound Loud Car Warning Alarm Police Fire Siren Air Horn PA Speaker 12V 100W', ''),
('P029', 'Car Truck Speaker Warning Alarm', '29.15', 'Single Siren', 'Siren Alarm', 'OEM', '100W 12V 7 Sounds Car Truck Speaker Warning Alarm Police Fire Siren Horn Loud Sound 105db With Mic Microphone', ''),
('P030', 'Emergency Warning Car LED', '19.90', 'Dual Light LED', 'LED', 'OEM', 'Emergency Warning Car LED 8W Flash Light Lamp Strobe Police Red Blue', ''),
('P031', 'Bosoko 4-Button Full Set Multi Function Car Alarm System', '62.23', 'Single Siren', 'Car Alarm', 'Bosoko', ' Bosoko 4-Button Full Set Multi Function Car Alarm System with Shock Sensor and Siren - F65', ''),
('P032', 'LED Light Car Headlight 6500k', '29.30', 'Dual Light LED', 'Car Headlight', 'AutoMart', 'H4 C6 LED Light Car Headlight Auto Head light Lamp 6500k White Light', ''),
('P033', 'Auto Daytime Running Light 8 LED DRL', '12.70', 'Dual Light LED', 'Car DRL', 'AutoMart', 'Auto Daytime Running Light 8 LED DRL Super White Head Lamp For Proton/Perodua/Nissan/Honda/Toyota', ''),
('P034', 'Electric Siren Loud Air Snail Horn', '20.00', 'Dual Siren', 'Car Horn', 'OEM', '&#12304;Free Shipping + Flash Deal&#12305;12V 120DB Digital Electric Siren Loud Air Snail Horn magic 18 Sounds Car Truck', ''),
('P035', 'Car Amplifier 2000Watts 4-CH', '138.00', '4-channel PA', 'Power Amplifier', 'TAKA', 'Car Amplifier 2000Watts 4-CH Channel TAKA Car Power Amp TK-514 Suitable for car speaker and woofer', ''),
('P036', 'MBQ AW-10e 10" Car UnderSeat Subwoofer', '173.00', 'Single Speaker', 'Car Subwoofer', 'MBQ', 'MBQ AW-10e 10" Car UnderSeat Super Slim Active Subwoofer Built In Amplifier', ''),
('P037', 'BOSOKO 400w 12"/30CM SUB', '112.10', 'Single Speaker', 'Subwoofer', 'Bosoko', 'HIGH POWER BOSOKO 400w 12"/30CM SUB Woofer maximum Power 400 watts with Box (35X40X35 cm)', ''),
('P038', 'Roadmark 4 Channel Class AB Amplifier', '145.00', '4-channel PA', 'Power Amplifier', 'Roadmark', 'Roadmark 4 Channel Class AB Amplifier R4 [1600 max Watt] READY STOCK , ONE YEAR WARRANTY', ''),
('P039', 'CALIBER (CPW-38) 12'''' HIGH POWER SUBWOOFER', '362.51', 'Dual Speaker', 'Subwoofer', 'CALIBER', 'CALIBER (CPW-38) 12'''' HIGH POWER SUBWOOFER (500WATTS) WITH 12'''' x 2 BOX', ''),
('P040', 'AMERICA SOUND CLASSIC SERIES FOUR CHANNEL POWER AMPLIFIER', '488.78', '4-channel PA', 'Power Amplifier', 'AMERICA SOUND', 'AMERICA SOUND CLASSIC SERIES FOUR CHANNEL STEREO (CS4.680) CAR AUDIO SYSTEM', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products_a166007_pt2`
--
ALTER TABLE `tbl_products_a166007_pt2`
  ADD PRIMARY KEY (`fld_product_num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
