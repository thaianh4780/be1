-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 10, 2022 lúc 12:28 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectbe1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`) VALUES
(1, 'Iphone'),
(2, 'SamSung Galaxy'),
(3, 'Rog Phone'),
(4, 'Laptop'),
(5, 'Tablet'),
(6, 'Phụ kiện khác'),
(9, 'HTC'),
(11, '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderby`
--

DROP TABLE IF EXISTS `orderby`;
CREATE TABLE IF NOT EXISTS `orderby` (
  `or_id` int(11) NOT NULL,
  `or_name` varchar(300) NOT NULL,
  `or_address` varchar(250) NOT NULL,
  `or_phone` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `lastupdate` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `or_id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_descripsion` varchar(250) NOT NULL,
  `p_image` varchar(250) NOT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_description` varchar(3000) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `lastupdate` int(11) NOT NULL DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_image`, `p_description`, `status`, `lastupdate`, `sale`, `view`) VALUES
(1, 'iphone X', 320, 'iphone10.jpg', 'Về kích thước, iPhone X sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).\r\n\r\nThì trên điện thoại iPhone Xvẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone X', 1, 0, 0, 12),
(2, 'iphone 13', 400, 'iphone13.jpg', 'Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).\r\n\r\nThì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.', 1, 0, 20, 13),
(3, 'Iphone 12', 420, 'iphone10.jpg', 'Cứ mỗi năm, đến dạo cuối tháng 8 và gần đầu tháng 9 thì mọi thông tin sôi sục mới về chiếc iPhone mới lại xuất hiện. Apple năm nay lại ra thêm một chiếc iPhone mới với tên gọi mới là iPhone 12 Pro Max, đây là một dòng điện thoại mới và mạnh mẽ nhất của nhà Apple năm nay. Mời bạn tham khảo thêm một số mô tả sản phẩm bên dưới để bạn có thể ra quyết định mua sắm.', 1, 0, 50, 0),
(4, 'Rog Phone 5', 350, 'rog5.jpg', 'Với những game thủ chuyên nghiệp mong muốn sở hữu một chiếc smartphone gaming có hiệu năng \"siêu cấp\" cho những tựa game MOBA hoặc sinh tồn đình đám hiện nay thì ROG Phone 5 sẽ là chiếc điện thoại có thể giúp bạn thoải mái chiến game mượt mà với cấu hình cực đại.', 1, 0, 0, 1),
(5, 'Rog Phone 3', 220, 'rog3.jpg', 'Bức phá mọi giới hạn về hiệu năng - Snapdragon 865+ cao cấp, kết nối 5G, RAM 12GB\r\nMàn hình chuẩn gaming - Tấm nền AMOLED, tần số quét cao 144Hz, HDR10+\r\nChơi game không gián đoạn - Pin khủng 6000mAh, chế độ pin tùy chỉnh\r\nChơi game khác biệt - Hệ thống âm thanh kép chất lượng cao, AirTrigger 3, chế độ X- Mode\r\nChụp ảnh chất lượng cao - Bộ ba camera 64MP với cảm biến hàng đầu', 1, 0, 0, 1),
(6, 'Rog Phone 2', 160, 'rog2.jpg', 'Vào tháng 7/2019, Asus đã cho ra mắt chiếc smartphone Rog Phone 2, tiếp bước người đàn anh là chiếc Asus Rog Phone thế hệ đầu tiên. Asus Rog Phone 2 sẽ được trang bị với một cấu hình khủng, hiệu năng thuộc dạng đầu bảng cùng màn hình có tần số quét 120Hz hứa hẹn sẽ mang lại sự ấn tượng như ở thế hệ tiền nhiệm.', 1, 0, 0, 0),
(7, 'Sam Sung Galaxy Note 20 Ultra', 450, 'ssNote20.jpg', 'Sang trọng, cao cấp - Màu sắc độc đáo và cuốn hút\r\nChụp ảnh chuyên nghiệp - Bộ 3 camera hỗ trợ Zoom xa đến 30X\r\nGhi chú nhanh chóng, chính xác với bút S- Pen thế hệ mới\r\nChơi game đỉnh cao - Exynos 990 7nm mạnh mẽ, hiệu năng xử lý vượt trội', 1, 0, 0, 0),
(8, 'Sam Sung Galaxy z fold 3', 500, 'samsung-galaxy-z-fold-3.jpg', 'Màn hình:\r\n\r\nDynamic AMOLED 2XChính 7.6\" & Phụ 6.2\"Full HD+\r\nHệ điều hành:\r\n\r\nAndroid 11\r\nCamera sau:\r\n\r\n3 camera 12 MP\r\nCamera trước:\r\n\r\n10 MP & 4 MP\r\nChip:\r\n\r\nSnapdragon 888\r\nRAM:\r\n\r\n12 GB\r\nBộ nhớ trong:\r\n\r\n256 GB\r\nSIM:\r\n\r\n2 Nano SIM + 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n4400 mAh25 W', 1, 0, 0, 1),
(9, 'samsung galaxy m51', 250, 'samsung-galaxy-m51-trang.jpg', 'Màn hình:\r\n\r\nSuper AMOLED Plus6.7\"Full HD+\r\nHệ điều hành:\r\n\r\nAndroid 10\r\nCamera sau:\r\n\r\nChính 64 MP & Phụ 12 MP, 5 MP, 5 MP\r\nCamera trước:\r\n\r\n32 MP\r\nChip:\r\n\r\nSnapdragon 730\r\nRAM:\r\n\r\n8 GB\r\nBộ nhớ trong:\r\n\r\n128 GB\r\nSIM:\r\n\r\n2 Nano SIMHỗ trợ 4G\r\nPin, Sạc:\r\n\r\n7000 mAh25 W', 1, 0, 0, 0),
(10, 'Acer Nitro 5 Gaming', 300, 'acer-nitro-gaming.jpg', 'CPU:\r\n\r\ni711800H2.30 GHz\r\nRAM:\r\n\r\n8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)3200 MHz\r\nỔ cứng:\r\n\r\n512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng\r\nMàn hình:\r\n\r\n15.6\"Full HD (1920 x 1080)144Hz\r\nCard màn hình:\r\n\r\nCard rờiRTX 3050Ti 4GB\r\nCổng kết nối:\r\n\r\n3 x USB 3.2HDMIJack tai nghe 3.5 mmLAN (RJ45)USB Type-C\r\nĐặc biệt:\r\n\r\nCó đèn bàn phím\r\nHệ điều hành:\r\n\r\nWindows 10 Home SL\r\nThiết kế:\r\n\r\nVỏ nhựa\r\nKích thước, trọng lượng:\r\n\r\nDài 363.4 mm - Rộng 255 mm - Dày 23.9 mm - Nặng 2.2 kg\r\nThời điểm ra mắt:\r\n\r\n2021', 1, 0, 0, 0),
(11, 'Laptop Apple MacBook Pro M1 2020 8GB-512GB', 450, 'space1.jpg', 'CPU:\r\n\r\nApple M1\r\nRAM:\r\n\r\n8 GB\r\nỔ cứng:\r\n\r\n512 GB SSD\r\nMàn hình:\r\n\r\n13.3\"Retina (2560 x 1600)\r\nCard màn hình:\r\n\r\nCard tích hợp8 nhân GPU\r\nCổng kết nối:\r\n\r\n2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm\r\nĐặc biệt:\r\n\r\nCó đèn bàn phím\r\nHệ điều hành:\r\n\r\nMac OS\r\nThiết kế:\r\n\r\nVỏ kim loại nguyên khối\r\nKích thước, trọng lượng:\r\n\r\nDài 304.1 mm - Rộng 212.4 mm - Dày 15.6 mm - Nặng 1.4 kg\r\nThời điểm ra mắt:\r\n\r\n2020', 1, 0, 0, 1),
(12, 'Máy tính bảng iPad Pro M1  512GB   ', 550, 'tabletpro.jpg', 'Màn hình:\r\n\r\n12.9\"Liquid Retina XDR mini-LED LCD\r\nHệ điều hành:\r\n\r\niPadOS 15\r\nChip:\r\n\r\nApple M1 8 nhân\r\nRAM:\r\n\r\n8 GB\r\nBộ nhớ trong:\r\n\r\n512 GB\r\nKết nối:\r\n\r\n5GNghe gọi qua FaceTime\r\nSIM:\r\n\r\n1 Nano SIM hoặc 1 eSIM\r\nCamera sau:\r\n\r\nChính 12 MP & Phụ 10 MP, TOF 3D LiDAR\r\nCamera trước:\r\n\r\n12 MP\r\nPin, Sạc:\r\n\r\n40.88 Wh (~ 10.835 mAh)20 W', 1, 0, 0, 0),
(13, 'Máy tính bảng iPad Air 4 Wifi 64GB ', 250, 'tablet.jpg', 'Màn hình:\r\n\r\n10.9\"Liquid Retina\r\nHệ điều hành:\r\n\r\niPadOS 15\r\nChip:\r\n\r\nApple A14 Bionic\r\nRAM:\r\n\r\n4 GB\r\nBộ nhớ trong:\r\n\r\n64 GB\r\nKết nối:\r\n\r\nNghe gọi qua FaceTime\r\nCamera sau:\r\n\r\n12 MP\r\nCamera trước:\r\n\r\n7 MP\r\nPin, Sạc:\r\n\r\n28.65 Wh (~ 7600 mAh)20 W', 1, 0, 0, 1),
(14, 'Tai Nghe', 100, 'tainghe.jpg', 'Pin:\r\n\r\nDùng 4.5 giờ - Sạc 2 giờ\r\nCổng sạc:\r\n\r\nLightningSạc MagSafe\r\nCông nghệ âm thanh:\r\n\r\nActive Noise CancellationAdaptive EQTransparency Mode\r\nTương thích:\r\n\r\nAndroidiOS (iPhone)iPadOS (iPad)MacOS (Macbook, iMac)\r\nỨng dụng kết nối:\r\n\r\nBluetooth TWS\r\nTiện ích:\r\n\r\nChống nước IPX4\r\nHỗ trợ kết nối:\r\n\r\nBluetooth 5.0\r\nĐiều khiển bằng:\r\n\r\nCảm ứng chạm\r\nHãng\r\n\r\nApple. Xem thông tin hãng', 1, 0, 0, 0),
(15, 'sạc dự phòng', 50, 'sac.jpg', 'Hiệu suất sạc:\r\n\r\n65%\r\nDung lượng pin:\r\n\r\n10.000 mAh\r\nThời gian sạc đầy pin:\r\n\r\n10 - 11 giờ (dùng Adapter 1A)5 - 6 giờ (dùng Adapter 2A)\r\nNguồn vào:\r\n\r\nMicro USB: 5V - 2A\r\nNguồn ra:\r\n\r\nUSB: 5V - 2A\r\nLõi pin:\r\n\r\nPolymer\r\nCông nghệ/Tiện ích:\r\n\r\nĐèn LED báo hiệu\r\nKích thước:\r\n\r\nCao 13.5 cm - Rộng 6.7 cm - Dày 1.6 cm\r\nTrọng lượng:\r\n\r\n225 g\r\nThương hiệu của:\r\n\r\nThế Giới Di Động\r\nSản xuất tại:\r\n\r\nTrung Quốc\r\nHãng\r\n\r\nHydrus. Xem thông tin hãng', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `category_ID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`category_ID`, `productID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 7),
(2, 8),
(2, 9),
(3, 4),
(3, 5),
(3, 6),
(4, 10),
(4, 11),
(5, 12),
(5, 13),
(6, 14),
(6, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_img` varchar(250) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`s_id`, `s_img`) VALUES
(1, '14de2.jpg'),
(2, '13de2.jpg'),
(3, '11de2.jpg'),
(4, '12de2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `lastupdate` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `role`, `status`, `lastupdate`) VALUES
(1, 'trần nhật', 'thanh', 'wedontlike1@gmail.com', '1', 1, 1, 0),
(2, 'thanh', 'tran', 'wedontlike3@gmail.com', '$2y$10$apFPdMeUIBs/95bre81LaORmaAFcrApPpszScULrAR2QvFCPj2leu', 0, 1, 0),
(3, 'thanh', 'tran', '0376610701@ming.vn', '$2y$10$E4osU2qVAFXFq.v8QOTTQebDFePm9aOsBVCIXsr00orh2uXDzlRUO', 0, 1, 0),
(4, 'thanh', 'tran', 'trannhatthanh2003@gmail.com', '$2y$10$WTRoPdGuew9Jyq2shbTyqOCU8OkLhZGXcTu/CeLVa1FC1FKvl2PtO', 1, 1, 0),
(5, 'thanh', 'tran', '100012537139116@vn.com', '$2y$10$THiTFHzfQYdQpzjbXeO4kef/yQXxQEL4lkQYGbd4bQoDZbvDWOpyC', 0, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
