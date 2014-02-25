-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2014 at 07:54 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `9gag`
--



-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE IF NOT EXISTS `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_cate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `name_cate`, `parent`) VALUES
(1, 'Chém gió', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `id_cate`, `status`, `create_date`, `type`, `code`) VALUES
(1, 'test', '<h3 style="color:#aaa; font-style:italic"><span style="color:#696969">9h00 ng&agrave;y 22/11/2013 tại văn ph&ograve;ng HTX vận tải &ocirc; t&ocirc; TP. Ninh B&igrave;nh, Đảng ủy khối Doanh nghiệp tỉnh Ninh B&igrave;nh c&ugrave;ng HTXVT &ocirc;t&ocirc; TP. Ninh B&igrave;nh tổ chức lễ c&ocirc;ng bố quyết định th&agrave;nh lập chi bộ, chỉ định B&iacute; thư chi bộ Đảng của HTXVT &ocirc;t&ocirc; TP. Ninh B&igrave;nh kh&oacute;a I, nhiệm kỳ 2013-2015. Buổi lễ diễn ra long trọng v&agrave; trang nghi&ecirc;m.Buổi lễ được thực hiện dưới sự chỉ đạo của Đảng ủy khối doanh nghiệp tỉnh v&agrave; &yacute; kiến chỉ đạo của Ban quản trị HTX.</span></h3>\r\n\r\n<div style="text-align: center;"><img alt="" src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-prn2/1476142_1438594586361021_83054571_n.jpg" style="height:300px; margin:5px 10px; width:400px" /></div>\r\n\r\n<div style="text-align: center;">&nbsp;</div>\r\n\r\n<div><span style="font-size:10px">Ảnh 1: Đ/c Vũ Quốc Thanh - Tỉnh Ủy Vi&ecirc;n, B&iacute; Thư Đảng Ủy Khối Doanh nghiệp l&ecirc;n&nbsp; trao quyết định th&agrave;nh lập cho Đ/c Ho&agrave;ng Văn Tuy - B&iacute; thư Chi bộ Đảng HTX.</span></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Về ph&iacute;a Đảng ủy khối c&oacute; sự hiện diện của đ/c Vũ Quốc Thanh -Tỉnh ủy vi&ecirc;n, B&iacute; thư Đảng ủy khối; đ/c Đỗ văn Kha - ủy vi&ecirc;n Thường vụ, Trưởng BTC Đảng ủy khối về dự. Đại diện HTX c&oacute; &ocirc;ng Trần Quang Nhương - Chủ nhiệm HTX, &ocirc;ng Trần Quang Thụy - Ph&oacute; chủ nhiệm c&ugrave;ng c&aacute;c đồng ch&iacute; trong c&aacute;c ph&ograve;ng bạn nghiệp vụ của HTX , c&aacute;c đồng ch&iacute; Đảng vi&ecirc;n tham dự.</strong></p>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<p><strong>Mở đầu chương tr&igrave;nh, Đ.c Ho&agrave;ng văn Tuy đ&atilde; l&ecirc;n ph&aacute;t biểu, t&oacute;m tắt ngắn ngọn qu&aacute; tr&igrave;nh ph&aacute;t triển của Hợp t&aacute;c x&atilde;. Theo đ&oacute;, Đ/c nhấn mạnh sự quan t&acirc;m của Ban quản trị trong c&ocirc;ng t&aacute;c hỗ trợ, tham gia v&agrave;o qu&aacute; tr&igrave;nh ph&aacute;t triển v&agrave; x&acirc;y dựng Đảng.</strong></p>\r\n\r\n<p><img alt="Ảnh cập nhật" src="http://farm8.staticflickr.com/7348/11003464814_e1d0eff235_z.jpg" style="height:225px; margin:5px 10px; width:400px" /></p>\r\n\r\n<p><span style="font-size:10px">Ảnh 2: Đ/c Ho&agrave;ng Văn Tuy l&ecirc;n ph&aacute;t biểu v&agrave; t&oacute;m tắt qu&aacute; tr&igrave;nh ph&aacute;t triển v&agrave; h&igrave;nh th&agrave;nh của hợp t&aacute;c x&atilde;.</span></p>\r\n\r\n<p><strong>Ngay sau đ&oacute;, Đ.c Đỗ Văn Kha - UVTV, Trưởng Ban tổ chức Đảng ủy Khối, đ&atilde; l&ecirc;n c&ocirc;ng bố quyết định th&agrave;nh lập chi bộ đảng v&agrave; chỉ định b&iacute; thư chi bộ hợp t&aacute;c x&atilde; vận tải. Theo như chỉ định đồng ch&iacute; Ho&agrave;ng Văn Tuy - Trưởng Ban Kiểm So&aacute;t, giữ chức B&iacute; thư chi bộ kh&oacute;a I, nhiệm kỳ 2013-2015</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ngay sau khi trao Quyết định th&agrave;nh lập Chi bộ cho chi bộ Hợp t&aacute;c x&atilde;, Đ/c Vũ Quốc Thanh - TUV - B&iacute; thư Đảng ủy Khối đ&atilde; ph&aacute;t biểu chỉ đạo, ch&uacute;c mừng tổ chức Đảng của Hợp t&aacute;c x&atilde;: &quot;Chi bộ Hợp t&aacute;c x&atilde; l&agrave; chi bộ 62 được th&agrave;nh lập trong đảng ủy khối doanh nghiệp tỉnh Ninh B&igrave;nh cho tới thời điểm nay, c&ugrave;ng sự ph&aacute;t triển cả về chất v&agrave; lượng của Đảng ủy khối trong thời gian qua, c&aacute;c doanh nghiệp được sự quan t&acirc;m từ ph&iacute;a l&atilde;nh đạo cấp tr&ecirc;n v&agrave; sự phối hợp quan t&acirc;m của l&atilde;nh đạo ban quản trị Hợp t&aacute;c x&atilde;, nay c&oacute; th&ecirc;m sự l&atilde;nh đạo của Chi bộ Đảng đ&atilde; được th&agrave;nh lập, t&ocirc;i tin tưởng Hợp t&aacute;c x&atilde; sẽ ng&agrave;y c&agrave;ng lớn mạnh trong c&aacute;c hoạt động chung của đất nước cũng như c&aacute;c hoạt động được tổ chức ri&ecirc;ng trong khối c&aacute;c doanh nghiệp tỉnh Ninh B&igrave;nh. Mong rằng đội ngũ Đảng vi&ecirc;n của Hợp t&aacute;c x&atilde; kh&ocirc;ng ngừng tăng l&ecirc;n cả về số lượng v&agrave; chất lượng, Ho&agrave;n th&agrave;nh tốt kế hoạch sản xuất kinh doanh của Đơn vị&quot;.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thay mặt Chi Bộ Đ/c Ho&agrave;ng Văn Tuy - B&iacute; thư chi bộ, đ&atilde; ph&aacute;t biểu &quot; Được sự tin tưởng l&atilde;nh đạo cấp tr&ecirc;n, Chi bộ Hợp t&aacute;c x&atilde; chung t&ocirc;i cố gắng hết sức đề c&ugrave;ng với c&aacute;c đồng ch&iacute; Đảng vi&ecirc;n đang c&ocirc;ng t&aacute;c tại hợp t&aacute;c x&atilde; cố gắng ho&agrave;n th&agrave;nh nhiệm vụ được giao&quot; Ngay sau lễ c&ocirc;ng bố quyết định, Chi Bộ Hợp t&aacute;c x&atilde; đ&atilde; c&oacute; buổi sinh hoạt đầu ti&ecirc;n.</strong></p>\r\n\r\n<div><img alt="" src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-prn2/1475988_1438594549694358_2076257442_n.jpg" style="height:300px; margin:5px 10px; width:400px" /></div>\r\n\r\n<div><span style="font-size:10px">Ảnh 3: Đ/c: Đỗ Văn Kha - UVTV, Trưởng ban tổ chức Đảng ủy khối l&ecirc;n c&ocirc;ng bố quyết định</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><img alt="" src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-prn1/p206x206/996970_1438600223027124_1461956372_n.jpg" style="height:225px; margin:5px 10px; width:400px" /></div>\r\n\r\n<div><span style="font-size:10px">Ảnh 4 : Đ/c Vũ Quốc Thanh - TUV - B&iacute; Thư Đảng ủy khối tặng hoa ch&uacute;c mừng</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><img alt="" src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-ash3/602884_1438594686361011_167013394_n.jpg" style="height:300px; margin:5px 10px; width:400px" /></div>\r\n\r\n<div><span style="font-size:10px">Ảnh 5: Đ/c: Trần Quang Nhương - Chủ nhiệm hợp t&aacute;c x&atilde; tặng hoa ch&uacute;c mừng.</span></div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><img alt="" src="http://farm4.staticflickr.com/3715/11003279735_71953e40c3_z.jpg" style="height:225px; margin:5px 10px; width:400px" /></div>\r\n\r\n<div><span style="font-size:10px">Ảnh 6: Đ/c Vũ Quốc Thanh - B&iacute; thư Đảng ủy Khối c&aacute;c doanh nghiệp Tỉnh Ninh B&igrave;nh ph&aacute;t biểu chỉ đạo hội nghị</span></div>\r\n\r\n<p style="text-align: right;"><em>B&agrave;i v&agrave; ảnh: Quang Thụy</em></p>\r\n', 1, 1, 1, 0, 'ABCXYZ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
