-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2026 at 07:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `allproducts`
--

CREATE TABLE `allproducts` (
  `id` int(11) NOT NULL,
  `ten_sp` varchar(255) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `danhmuc` varchar(50) DEFAULT NULL,
  `loai` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `thuong_hieu` varchar(100) DEFAULT NULL,
  `mota_chitiet` text DEFAULT NULL,
  `uu_diem` varchar(255) DEFAULT NULL,
  `chat_lieu` varchar(255) DEFAULT NULL,
  `loai_san` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`id`, `ten_sp`, `gia`, `anh`, `mota`, `danhmuc`, `loai`, `size`, `thuong_hieu`, `mota_chitiet`, `uu_diem`, `chat_lieu`, `loai_san`) VALUES
(1, 'Bộ MU 2025 sân nhà', 180000, 'img/dobo/mu.jpg', 'Áo Manchester United', 'boao', 'clb', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(2, 'Bộ Real Madrid 2025', 190000, 'img/dobo/real.jpg', 'Áo Real Madrid', 'boao', 'clb', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(3, 'Bộ Barcelona 2025', 185000, 'img/dobo/barca.jpg', 'Áo Barcelona', 'boao', 'clb', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(4, 'Bộ Man City 2025', 200000, 'img/dobo/mancity.jpg', 'Áo Man City', 'boao', 'clb', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(5, 'Bộ PSG 2025', 195000, 'img/dobo/psg.jpg', 'Áo PSG', 'boao', 'clb', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(6, 'Nike Mercurial Vapor 16 Pro TF', 2800000, 'img/giay/giay1.jpg', '- Nike Mercurial Vapor 16 Pro TF - Giày đá bóng cỏ nhân tạo\r\n- Phiên bản cao cấp thuộc thế hệ mới nhất của dòng Mercurial Vapor\r\n- Chất liệu Flyknit cải tiến giúp giảm độ dày 30%, làm giày nhẹ và dễ uốn hơn\r\n- Tích hợp công nghệ Nike Zoom Air hỗ trợ tối đa cho vi', 'giay', '', '39,40,41,42', 'Nike', 'Nike vừa ra mắt thế hệ mới Vapor 16 vào tháng 7/2024, mang đến những cải tiến vượt trội. Điểm nhấn lớn nhất là phần upper sử dụng chất liệu Flyknit giúp giảm độ dày 30%, làm giày nhẹ và dễ uốn hơn, tăng khả năng kiểm soát bóng . \r\n-> Nhẹ hơn - bền hơn - bùng nổ hơn, Mercurial Vapor 16 Pro TF sẽ là đôi giày bóng đá cỏ nhân tạo hoàn hảo dành cho những tín đồ đam mê tốc độ.\r\nGiày đá bóng Nike Air Zoom Mercurial Vapor 16 Pro TF - Trắng/Xanh - FQ8687-400 là mẫu giày cao cấp chuyên dùng cho sân cỏ nhân tạo 5-7 người. Lấy cảm hứng từ nhà đồng sáng lập Nike Bill Bowerman, biểu tượng \"AIR\" được di chuyển từ vị trí bên cạnh sang quấn quanh gót chân, đồng hành cùng các biểu tượng \"Mercurial\" và \"Air Zoom\" viết tay ấn tượng.\r\nPhần upper được sử dụng chất liệu vải sợi dệt Flyknit mềm mại, ôm chân thoải mái, cung cấp độ bám bóng vừa phải mà không quá dính, hỗ trợ tối đa cho khả năng kiểm soát bóng (đây là loại vật liệu thường được sử dụng trên các phiên bản Elite mà nay hãng đã ưu ái sử dụng ngay trên bản Vapor 16 Pro TF này, hứa hẹn sẽ là bom tấn mới của nhà Nike). ', 'Dễ đi - thỏa mái', 'Flyknit', 'Sân cỏ nhân tạo'),
(7, 'Adidas Predator 26 Pro FT TF', 3500000, 'img/giay/giay2.jpg', '- Giày đá bóng adidas thiết kế thiên hướng kiểm soát bóng\r\n- Lưỡi gà gập biểu tượng giúp tăng cảm giác bóng và hạn chế tuột dây\r\n- Upper NanoStrike Pro mỏng, đàn hồi, cho chạm bóng thật chân hơn\r\n- Bề mặt vân nổi tăng ma sát, hỗ trợ kiểm soát bóng tốt hơn\r\n- Đệm Lightstrike êm vừa đủ, phản hồi nhanh, phù hợp sân cỏ nhân tạo\r\n- Đế TF + Powerspine giúp bám sân tốt, di chuyển ổn định và chắc chân', 'giay', '', '39,40,41,42', 'Adidas', 'Giày bóng đá Adidas Predator 26 Pro TF là bước chuyển mình rõ rệt của dòng Predator trong bối cảnh bóng đá hiện đại. Không chỉ mang trở lại lưỡi gà gập mang tính biểu tượng, Adidas còn đồng thời nâng cấp toàn diện về vật liệu và cấu trúc, nhằm tối ưu trải nghiệm cho sân cỏ nhân tạo.\r\nĐây không đơn thuần là một đôi giày đá bóng adidas, mà là một phiên bản được thiết kế lại để phù hợp hơn với nhịp độ thi đấu thực tế của sân 5–7 người tại Việt Nam.\r\nLưỡi gà gập – Chi tiết nhỏ, khác biệt lớn\r\nĐiểm dễ nhận ra nhất trên Predator 26 Pro TF chính là sự trở lại của lưỡi gà gập. Tuy nhiên, với những người chơi lâu năm, đây không chỉ là yếu tố thẩm mỹ.\r\nLưỡi gà gập tạo ra một bề mặt tiếp xúc bóng phẳng và ổn định hơn, giúp những pha sút mu hay chuyền bóng trở nên gọn và chính xác. Đồng thời, nó cũng hạn chế tình trạng tuột dây khi thi đấu cường độ cao, mang lại cảm giác tự tin hơn trong từng pha xử lý.\r\nViệc Adidas đưa chi tiết này lên phiên bản Pro TF cho thấy rõ định hướng: giữ lại bản sắc Predator nhưng không còn giới hạn ở một phân khúc.', 'Kiểm soát bóng tốt', 'Synthetic - Da tổng hợp', 'Sân cỏ nhân tạo'),
(8, 'Adidas F50 Pro TF', 4800000, 'img/giay/giay3.jpg', '- Adidas khuấy đảo làng bóng đá với sự tái xuất của huyền thoại F50\r\n- Upper Fibertouch mỏng, nhẹ và linh hoạt giúp tăng cảm giác bóng\r\n- Kết cấu Sprintweb 3D với các đường gân nổi trên thân giày giúp tăng cường độ bám dính\r\n- Form ôm chân dành cho các cầu thủ có lối chơi tốc độ, dứt điểm\r\n- Bộ đệm Lightstrike siêu êm ái giúp tăng khả năng đàn hồi, hạn chế chấn thương', 'giay', '', '39,40,41', 'Adidas', 'Được thiết kế để khai phá trọn vẹn tiềm năng tốc độ của người chơi, giày đá bóng sân cỏ nhân tạo adidas F50 Pro TF sẽ là sự lựa chọn hoàn hảo dành cho những tiền vệ và tiền đạo ưu tiên sự nhanh nhẹn và thanh thoát trong lối chơi của mình.\r\nGiày đá bóng adidas F50 Pro TF - Trắng/Đỏ/Xanh - IE1220 là phân khúc cao cấp của dòng giày huyền thoại F50, sự kết hợp táo bạo giữa màu trắng, xanh dương và hồng tạo nên một tổng thể đầy sức sống và nổi bật. \r\nĐặc điểm của giày adidas F50 Pro TF:\r\nVới upper được làm từ chất liệu Fibertouch mỏng, nhẹ và linh hoạt giúp bạn cảm nhận bóng tốt hơn và kiểm soát bóng chính xác hơn. Kết cấu Sprintweb 3D với các đường gân nổi trên thân giày giúp tăng cường độ bám dính, hỗ trợ rê bóng nhanh và đổi hướng đột ngột. Thiết kế thân thiện với môi trường khi hãng sử dụng 20% chất liệu tái chế.\r\nLớp lót giày êm ái tạo cảm giác thoải mái và chống trơn trượt khi di chuyển.\r\nBộ đế được tích hợp công nghệ đệm Lightrike trứ danh siêu đàn hồi giúp hấp thụ lực tốt, bảo vệ đôi chân khỏi va đập. Đế ngoài cao su được thiết kế với các rãnh nhỏ bám sân tốt, giúp di chuyển linh hoạt trên sân cỏ nhân tạo.\r\nAdidas F50 Pro TF là lựa chọn hoàn hảo cho những cầu thủ muốn nâng tầm tốc độ và kỹ thuật của mình trên sân cỏ nhân tạo.', 'Tốc độ', 'Knit', 'Sân cỏ nhân tạo'),
(9, 'Mizuno Morelia Neo IV Pro AS', 2800000, 'img/giay/giay4.jpg', '- Giày đá bóng cỏ nhân tạo cao cấp của Mizuno\r\n- Nâng cấp bộ đế và đệm Mizuno Enerzy mới, hỗ trợ di chuyển và xử lý bóng linh hoạt\r\n- Upper bằng da K tự nhiên cao cấp siêu mềm, bền, cho cảm giác bóng tốt nhất\r\n- Phần gót giày được cải tiến mang tới sự chắc chắn và bảo vệ phần gót chân', 'giay', '', '39,40,41', 'Mizuno', 'Giày bóng đá Mizuno Morelia Neo IV Pro AS P1GD263564 Trắng/Hồng là mẫu giày đá bóng sân cỏ nhân tạo cao cấp dành cho cầu thủ yêu thích cảm giác bóng chân thật, trọng lượng nhẹ và độ linh hoạt cao. Thuộc dòng Morelia Neo nổi tiếng của Mizuno, phiên bản này kết hợp hoàn hảo giữa chất liệu da Kangaroo mềm mại và công nghệ đệm hiện đại, mang lại trải nghiệm thi đấu ổn định và bền bỉ trên mặt sân cỏ nhân tạo.\r\nPhần thân giày được cấu tạo từ da Kangaroo cao cấp ở mũi giày, giúp tăng độ mềm và ôm chân tự nhiên ngay từ những lần xỏ đầu tiên. Chất da này hỗ trợ cảm giác chạm bóng chân thật, kiểm soát bóng chính xác trong các pha xử lý kỹ thuật. Kết hợp với đó là lớp da tổng hợp ở thân sau nhằm giữ form tốt hơn, tăng độ ổn định khi di chuyển tốc độ cao.', 'Siêu nhẹ, tốc độ, dễ đi, ôm chân, êm chân, cảm giác bóng tốt, sút tốt', 'Da Kangaroo', 'Sân cỏ nhân tạo'),
(10, 'Kamito TA11', 450000, 'img/giay/giay5.jpg', 'Giày Việt Nam chất lượng', 'giay', '', '39,40,41', 'Kamito', NULL, NULL, NULL, NULL),
(11, 'Tất bóng đá dài', 50000, 'img/phukien/tat.jpg', 'Tất co giãn tốt', 'phukien', '', '', NULL, NULL, NULL, NULL, NULL),
(12, 'Bóng đá FIFA', 250000, 'img/phukien/bong.jpg', 'Bóng tiêu chuẩn thi đấu', 'phukien', '', '', NULL, NULL, NULL, NULL, NULL),
(13, 'Băng cổ chân', 70000, 'img/phukien/bang.jpg', 'Bảo vệ cổ chân', 'phukien', '', '', NULL, NULL, NULL, NULL, NULL),
(14, 'Găng tay thủ môn', 150000, 'img/phukien/gangtay.jpg', 'Găng bắt bóng tốt', 'phukien', '', '', NULL, NULL, NULL, NULL, NULL),
(15, 'Băng đầu gối', 90000, 'img/phukien/daigoi.jpg', 'Bảo vệ đầu gối', 'phukien', '', '', NULL, NULL, NULL, NULL, NULL),
(16, 'Bộ Việt Nam 2025 sân nhà', 170000, 'img/dobo/vietnam.jpg', 'Áo đội tuyển Việt Nam', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(17, 'Bộ Argentina 2025 sân nhà', 200000, 'img/dobo/argentina.jpg', 'Áo đội tuyển Argentina', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(18, 'Bộ Brazil 2025 sân nhà', 195000, 'img/dobo/brazil.jpg', 'Áo đội tuyển Brazil', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(19, 'Bộ Pháp 2025 sân nhà', 210000, 'img/dobo/france.jpg', 'Áo đội tuyển Pháp', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(20, 'Bộ Đức 2025 sân nhà', 205000, 'img/dobo/germany.jpg', 'Áo đội tuyển Đức', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(21, 'Áo khoác Tây Ban Nha 2025', 320000, 'img/dobo/spain_jacket.jpg', 'Áo khoác đội tuyển Tây Ban Nha', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(22, 'Áo khoác Bồ Đào Nha 2025', 330000, 'img/dobo/portugal_jacket.jpg', 'Áo khoác đội tuyển Bồ Đào Nha', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(23, 'Áo khoác Anh 2025', 325000, 'img/dobo/england_jacket.jpg', 'Áo khoác đội tuyển Anh', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(24, 'Áo khoác Hà Lan 2025', 315000, 'img/dobo/netherlands_jacket.jpg', 'Áo khoác đội tuyển Hà Lan', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(25, 'Áo khoác Nhật Bản 2025', 310000, 'img/dobo/japan_jacket.jpg', 'Áo khoác đội tuyển Nhật Bản', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(26, 'Áo khoác Việt Nam 2025', 310000, 'img/dobo/vietnam2_jacket.jpg', 'Áo khoác đội tuyển Việt Nam', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(27, 'Áo khoác Hàn Quốc 2025', 320000, 'img/dobo/korea_jacket.jpg', 'Áo khoác đội tuyển Hàn Quốc', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(28, 'Áo khoác Bỉ 2025', 325000, 'img/dobo/belgium_jacket.jpg', 'Áo khoác đội tuyển Bỉ', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(29, 'Áo khoác Croatia 2025', 315000, 'img/dobo/croatia_jacket.jpg', 'Áo khoác đội tuyển Croatia', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(30, 'Áo khoác Morocco 2025', 300000, 'img/dobo/morocco_jacket.jpg', 'Áo khoác đội tuyển Morocco', 'boao', 'doituyen', 'M,L,XL', NULL, NULL, NULL, NULL, NULL),
(31, 'Nike Phantom GX', 520000, 'img/giay/giay6.jpg', 'Giày kiểm soát bóng cao cấp', 'giay', NULL, '39,40,41,42', 'Nike', NULL, NULL, NULL, NULL),
(32, 'Adidas X Speedflow', 510000, 'img/giay/giay7.jpg', 'Giày tốc độ nhẹ', 'giay', NULL, '39,40,41,42', 'Adidas', NULL, NULL, NULL, NULL),
(33, 'Puma Ultra Match', 490000, 'img/giay/giay8.jpg', 'Giày siêu nhẹ', 'giay', NULL, '39,40,41', 'Puma', NULL, NULL, NULL, NULL),
(34, 'Mizuno Morelia Neo', 530000, 'img/giay/giay9.jpg', 'Giày da cao cấp', 'giay', NULL, '39,40,41', 'Mizuno', NULL, NULL, NULL, NULL),
(35, 'Adidas Predator Elite', 460000, 'img/giay/giay10.jpg', 'Giày bền, ôm chân', 'giay', NULL, '39,40,41', 'Adidas', NULL, NULL, NULL, NULL),
(36, 'Nike Tiempo Legend', 540000, 'img/giay/giay11.jpg', 'Giày da mềm cao cấp', 'giay', NULL, '39,40,41,42', 'Nike', NULL, NULL, NULL, NULL),
(37, 'Adidas Copa Sense', 550000, 'img/giay/giay12.jpg', 'Giày kiểm soát bóng tốt', 'giay', NULL, '39,40,41', 'Adidas', NULL, NULL, NULL, NULL),
(38, 'Puma King Pro', 500000, 'img/giay/giay13.jpg', 'Giày cổ điển', 'giay', NULL, '39,40,41', 'Puma', NULL, NULL, NULL, NULL),
(39, 'Mizuno Rebula Cup', 520000, 'img/giay/giay14.jpg', 'Giày form đẹp', 'giay', NULL, '39,40,41', 'Mizuno', NULL, NULL, NULL, NULL),
(40, 'Kamito Velocidad', 470000, 'img/giay/giay15.jpg', 'Giày tốc độ', 'giay', NULL, '39,40,41', 'Kamito', NULL, NULL, NULL, NULL),
(41, 'Nike Zoom Mercurial', 560000, 'img/giay/giay16.jpg', 'Giày tốc độ cao cấp', 'giay', NULL, '39,40,41,42', 'Nike', NULL, NULL, NULL, NULL),
(42, 'Adidas Predator Edge', 580000, 'img/giay/giay17.jpg', 'Giày sút bóng mạnh', 'giay', NULL, '39,40,41', 'Adidas', NULL, NULL, NULL, NULL),
(43, 'Puma Future Z', 510000, 'img/giay/giay18.jpg', 'Giày ôm chân tốt', 'giay', NULL, '39,40,41', 'Puma', NULL, NULL, NULL, NULL),
(44, 'Mizuno Alpha', 550000, 'img/giay/giay19.jpg', 'Giày cao cấp Nhật', 'giay', NULL, '39,40,41', 'Mizuno', NULL, NULL, NULL, NULL),
(45, 'Kamito Artista', 480000, 'img/giay/giay20.jpg', 'Giày giá tốt', 'giay', NULL, '39,40,41', 'Kamito', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `noidung` text DEFAULT NULL,
  `ngaygui` timestamp NOT NULL DEFAULT current_timestamp(),
  `loai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `noidung`, `ngaygui`, `loai`) VALUES
(1, 'help me', '2026-05-14 15:31:34', NULL),
(2, 'help me', '2026-05-14 15:35:09', 'user'),
(3, 'Cảm ơn bạn đã liên hệ shop.', '2026-05-14 15:35:09', 'bot'),
(4, 'help me', '2026-05-14 15:35:56', 'user'),
(5, 'Cảm ơn bạn đã liên hệ shop.', '2026-05-14 15:35:56', 'bot'),
(6, 'Tôi cần trợ giúp!', '2026-05-14 15:36:16', 'user'),
(7, 'Cảm ơn bạn đã liên hệ shop.', '2026-05-14 15:36:16', 'bot'),
(8, 'Tôi cần trợ giúp!', '2026-05-14 15:38:04', 'user'),
(9, 'Cảm ơn bạn đã liên hệ shop.', '2026-05-14 15:38:04', 'bot'),
(10, 'hi', '2026-05-14 15:38:09', 'user'),
(11, 'Cảm ơn bạn đã liên hệ shop.', '2026-05-14 15:38:09', 'bot'),
(12, 'hi', '2026-05-14 15:42:36', 'user'),
(13, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:42:36', 'bot'),
(14, 'Tôi muốn trợ giúp', '2026-05-14 15:54:42', 'user'),
(15, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:54:42', 'bot'),
(16, '..', '2026-05-14 15:54:50', 'user'),
(17, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:54:50', 'bot'),
(18, '..', '2026-05-14 15:56:03', 'user'),
(19, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:56:03', 'bot'),
(20, '....', '2026-05-14 15:56:10', 'user'),
(21, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:56:10', 'bot'),
(22, '....', '2026-05-14 15:56:16', 'user'),
(23, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:56:16', 'bot'),
(24, '....', '2026-05-14 15:56:21', 'user'),
(25, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:56:21', 'bot'),
(26, 'T', '2026-05-14 15:56:56', 'user'),
(27, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:56:56', 'bot'),
(28, 'T', '2026-05-14 15:57:07', 'user'),
(29, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:57:07', 'bot'),
(30, 'test', '2026-05-14 15:59:49', 'user'),
(31, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:59:49', 'bot'),
(32, 'test', '2026-05-14 15:59:56', 'user'),
(33, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 15:59:56', 'bot'),
(34, 'huhuuu', '2026-05-14 16:00:53', 'user'),
(35, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:00:53', 'bot'),
(36, 'huhuuu', '2026-05-14 16:02:11', 'user'),
(37, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:02:11', 'bot'),
(38, 'help', '2026-05-14 16:02:17', 'user'),
(39, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:02:17', 'bot'),
(40, 'help', '2026-05-14 16:02:43', 'user'),
(41, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:02:43', 'bot'),
(42, 'ff', '2026-05-14 16:02:50', 'user'),
(43, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:02:50', 'bot'),
(44, 'ff', '2026-05-14 16:03:19', 'user'),
(45, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:03:19', 'bot'),
(46, 'hhhhh', '2026-05-14 16:04:22', 'user'),
(47, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:04:22', 'bot'),
(48, 'trời oi', '2026-05-14 16:06:02', 'user'),
(49, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:06:02', 'bot'),
(50, 'trời oi', '2026-05-14 16:09:44', 'user'),
(51, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:09:44', 'bot'),
(52, 'trời oi', '2026-05-14 16:09:47', 'user'),
(53, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:09:47', 'bot'),
(54, 'trời oi', '2026-05-14 16:10:07', 'user'),
(55, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:10:07', 'bot'),
(56, 'trời oi', '2026-05-14 16:10:11', 'user'),
(57, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:10:11', 'bot'),
(58, 'trời oi', '2026-05-14 16:13:43', 'user'),
(59, 'Cảm ơn bạn đã liên hệ shop!', '2026-05-14 16:13:43', 'bot'),
(60, 'Hi lo', '2026-05-14 16:14:00', 'user'),
(61, 'Cảm ơn bạn đã liên hệ shop!', '2026-05-14 16:14:00', 'bot'),
(62, 'Hi lo', '2026-05-14 16:14:33', 'user'),
(63, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:14:33', 'bot'),
(64, 'kkkkk', '2026-05-14 16:14:39', 'user'),
(65, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:14:39', 'bot'),
(66, 'help', '2026-05-14 16:19:28', 'user'),
(67, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:19:28', 'bot'),
(68, 'help', '2026-05-14 16:23:07', 'user'),
(69, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:23:07', 'bot'),
(70, 'help', '2026-05-14 16:23:10', 'user'),
(71, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:23:10', 'bot'),
(72, 'help', '2026-05-14 16:23:26', 'user'),
(73, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:23:26', 'bot'),
(74, 'help', '2026-05-14 16:28:31', 'user'),
(75, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ bạn sớm nhất!', '2026-05-14 16:28:31', 'bot'),
(76, 'help', '2026-05-14 16:34:56', 'user'),
(77, 'Cảm ơn bạn đã liên hệ!', '2026-05-14 16:34:56', 'bot'),
(78, 'help', '2026-05-14 16:35:08', 'user'),
(79, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ bạn sớm nhất!', '2026-05-14 16:35:08', 'bot'),
(80, 'help', '2026-05-14 16:35:12', 'user'),
(81, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ bạn sớm nhất!', '2026-05-14 16:35:12', 'bot'),
(82, 'hhhhh', '2026-05-14 16:35:25', 'user'),
(83, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ bạn sớm nhất!', '2026-05-14 16:35:25', 'bot'),
(84, 'hhhhh', '2026-05-14 16:36:43', 'user'),
(85, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ bạn sớm nhất!', '2026-05-14 16:36:43', 'bot'),
(86, 'kkkk', '2026-05-14 16:40:22', 'user'),
(87, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ bạn sớm nhất!', '2026-05-14 16:40:22', 'bot'),
(88, 'help', '2026-05-14 16:52:29', 'user'),
(89, 'Cảm ơn bạn đã liên hệ shop.', '2026-05-14 16:52:29', 'bot'),
(90, 'help', '2026-05-14 16:54:08', 'user'),
(91, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:54:08', 'bot'),
(92, 'kkk', '2026-05-14 16:54:12', 'user'),
(93, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:54:12', 'bot'),
(94, 'kkkkkkkkk', '2026-05-14 16:54:15', 'user'),
(95, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:54:15', 'bot'),
(96, 'hhhhhhhh', '2026-05-14 16:57:28', 'user'),
(97, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 16:57:28', 'bot'),
(98, '.....', '2026-05-14 17:01:23', 'user'),
(99, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:01:23', 'bot'),
(100, '.......', '2026-05-14 17:01:26', 'user'),
(101, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:01:26', 'bot'),
(102, '.......', '2026-05-14 17:01:32', 'user'),
(103, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:01:32', 'bot'),
(104, '.......', '2026-05-14 17:04:42', 'user'),
(105, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:04:42', 'bot'),
(106, 'cứu', '2026-05-14 17:04:48', 'user'),
(107, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:04:48', 'bot'),
(108, 'Trần Tuấn Khang', '2026-05-14 17:08:10', 'user'),
(109, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:08:10', 'bot'),
(110, 'May quá sửa muốn xĩu', '2026-05-14 17:08:41', 'user'),
(111, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:08:41', 'bot'),
(112, 'hihi', '2026-05-14 17:13:22', 'user'),
(113, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:13:22', 'bot'),
(114, 'hhhhhhhh', '2026-05-14 17:13:31', 'user'),
(115, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:13:31', 'bot'),
(116, 'hhhhhhhh', '2026-05-14 17:25:24', 'user'),
(117, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-14 17:25:24', 'bot'),
(118, 'hii', '2026-05-15 01:48:02', 'user'),
(119, 'Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!', '2026-05-15 01:48:02', 'bot');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `sort_order` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_path`, `sort_order`) VALUES
(1, 6, 'img/giay/giay1.jpg', 1),
(2, 6, 'img/giay/giay1-p1.jpg', 2),
(3, 6, 'img/giay/giay1-p2.jpg', 3),
(4, 6, 'img/giay/giay1-p3.jpg', 4),
(5, 7, 'img/giay/giay2.jpg', 1),
(6, 7, 'img/giay/giay2-p1.jpg', 2),
(7, 7, 'img/giay/giay2-p2.jpg', 3),
(8, 7, 'img/giay/giay2-p3.jpg', 4),
(9, 8, 'img/giay/giay3.jpg', 1),
(10, 8, 'img/giay/giay3-p1.jpg', 2),
(11, 8, 'img/giay/giay3-p2.jpg', 3),
(12, 8, 'img/giay/giay3-p3.jpg', 4),
(13, 9, 'img/giay/giay4.jpg', 1),
(14, 9, 'img/giay/giay4-p1.jpg', 2),
(15, 9, 'img/giay/giay4-p2.jpg', 3),
(16, 9, 'img/giay/giay4-p3.jpg', 4),
(17, 10, 'img/giay/giay5.jpg', 1),
(18, 31, 'img/giay/giay6.jpg', 1),
(19, 32, 'img/giay/giay7.jpg', 1),
(20, 33, 'img/giay/giay8.jpg', 1),
(21, 34, 'img/giay/giay9.jpg', 1),
(22, 35, 'img/giay/giay10.jpg', 1),
(23, 36, 'img/giay/giay11.jpg', 1),
(24, 37, 'img/giay/giay12.jpg', 1),
(25, 38, 'img/giay/giay13.jpg', 1),
(26, 39, 'img/giay/giay14.jpg', 1),
(27, 40, 'img/giay/giay15.jpg', 1),
(28, 41, 'img/giay/giay16.jpg', 1),
(29, 42, 'img/giay/giay17.jpg', 1),
(30, 43, 'img/giay/giay18.jpg', 1),
(31, 44, 'img/giay/giay19.jpg', 1),
(32, 45, 'img/giay/giay20.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `sodienthoai` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `email`, `matkhau`, `hoten`, `sodienthoai`, `created_at`) VALUES
(1, '10a9trantuankhang@gmail.com', '$2y$10$SRsWfNw2Nd4DWy7o92IUbeaPEgLe0Nqeyr7yZHTRijGsZN9yWZGRK', 'Trần Tuấn Khang', '0862906676', '2026-05-22 02:32:23'),
(2, 'trantuankhang0308006@gmail.com', '$2y$10$aS7HTlTUM8ahr0wxn4TpFurpixUymtsYhBsUiLAruXFi/S1gfReGO', 'Trần Tuấn Khangg', '0862906676', '2026-05-22 03:11:47'),
(3, 'th2908trantuankhang@gmail.com', '$2y$10$amABft.PHBy1.61lO21NAedEwA8bWk4fZA0HzMjEKXqhDB9NqyTHC', 'Trần Tuấn Khanggg', '0862906676', '2026-05-22 03:13:40'),
(4, 'th2908trantuankhan@gmail.com', '$2y$10$XEQcpCrOUkKeW8yEpFuqc.8gKbXrh5b4YOTrcY5qdITCjoGfT5.rW', 'Trần Tuấn Khanggg', '0862906676', '2026-05-22 04:05:14'),
(5, 'abc@gmail.com', '$2y$10$Y1N4tD.9zsQmZ2hz5Bcg5OCTMlxGFkxZAfbashSwxlktj4bae7OYG', 'g g', '0123456789', '2026-05-29 03:06:10'),
(6, 'th2908trantuankhangg@gmail.com', '$2y$10$t59uqyonHz3nMB0rblwgiO3VYIACh4tFLyQk0SqjEHEXYAAEdyP0m', 'tt kk', '0123456789', '2026-05-30 10:25:31'),
(7, 'tunkhang@gmail.com', '$2y$10$NmEJkGj9LWIiSfj/dow/NODRdUhN1Kn.9t9kcRNrDC8G3bWRylLDe', 'Trần Tuấn Khang', '0862906676', '2026-05-30 10:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tt` int(11) NOT NULL,
  `tieude_tt` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `anh_tt` varchar(100) NOT NULL,
  `tomtat_tt` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `chitiet_tt` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `chuyenmuc_tt` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tacgia_tt` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tt`, `tieude_tt`, `anh_tt`, `tomtat_tt`, `chitiet_tt`, `chuyenmuc_tt`, `tacgia_tt`) VALUES
(1, 'Fernandes cán mốc 20 kiến tạo, chờ vượt Henry - De Bruyne độc chiếm kỷ lục', 'img1.jpg', 'Bruno Fernandes chính thức ghi tên mình vào lịch sử Ngoại hạng Anh sau khi có pha kiến tạo thứ 20 ở mùa giải năm nay trong trận đấu giữa MU và Nottingham Forest.', 'Fernandes cán mốc 20 kiến tạo, sánh ngang kỷ lục của Henry - De Bruyne\r\n\r\nPha kiến tạo thứ 20 của Bruno Fernandes đến ở phút thứ 75, trận đấu giữa MU và Nottingham Forest tại vòng 37 Ngoại hạng Anh. Thời điểm đó, anh thực hiện pha căng ngang chuẩn xác từ cánh phải để Bryan Mbeumo ghi bàn nâng tỷ số lên 3-1.\r\n\r\nNhờ vậy, tiền vệ người Bồ Đào Nha chính thức cân bằng kỷ lục kiến tạo nhiều nhất trong một mùa giải Ngoại hạng Anh, thành tích được nắm giữ bởi Thierry Henry (Arsenal) ở mùa 2002/03 và Kevin De Bruyne Man City) mùa 2019/20.\r\n\r\nTrước đó, Fernandes nâng tổng số kiến tạo lên 19 sau đường chuyền cho Benjamin Sesko lập công trong chiến thắng 2-1 trước Brentford ở vòng 35. \r\n\r\nĐáng chú ý, pha kiến tạo đầu tiên của Fernandes ở mùa giải năm nay chỉ đến vào ngày 19/10, khi anh dọn cỗ cho Harry Maguire ghi bàn tại Anfield. Sau đó, anh duy trì đều đặn hiệu suất kiến tạo tới tận cuối mùa.\r\n\r\nKể từ khi gia nhập MU, Fernandes đóng góp tổng cộng 102 pha kiến tạo trên mọi đấu truồng. Anh trở thành cầu thủ thứ 4 trong lịch sử CLB cán mốc này, sau Ryan Giggs (249 kiến tạo), Wayne Rooney (127) và David Beckham (115).\r\n\r\nChờ chinh phục kỷ lục kiến tạo từ \"bóng chết\"\r\n\r\nKhông chỉ hướng tới kỷ lục kiến tạo, Fernandes còn đứng trước cơ hội chinh phục kỷ lục khác, đó là số pha kiến tạo từ tình huống cố định nhiều nhất một mùa. Tiền vệ người Bồ Đào Nha hiện có 10 pha kiến tạo từ bóng chết\" tại Ngoại hạng Anh mùa này, cân bằng thành tích của Muzzy Izzet.\r\n\r\nHiện kỷ lục về số pha kiến tạo thành bàn từ bóng chết thuộc về Steven Gerrard (Liverpool) với 11 lần \"dọn cỗ\" ở mùa 2013/14.\r\n\r\nỞ vòng 38 (22h, 24/5), MU sẽ đối đầu Brighton. Đây là cơ hội để Fernandes nâng cao thành tích, qua đó vượt Henry, De Bruyne để độc chiếm kỷ lục kiến tạo cũng như cân bằng (hoặc vượt qua) thành tích của Gerrard.\r\n\r\nMùa giải thăng hoa của \"Quỷ đầu đàn\"\r\n\r\nTrong hệ thống chiến thuật của MU dưới thời HLV Michael Carrick, Fernandes đóng vai trò trung tâm sáng tạo và là nguồn cảm hứng chính. \r\n\r\nPhong độ ấn tượng giúp anh trở thành ứng viên sáng giá ở nhiều cuộc đua giải thưởng cá nhân. Tiền vệ sinh năm 1994 vừa được vinh danh là “Cầu thủ xuất sắc nhất năm” do Hiệp hội Nhà báo bóng đá Anh (FWA) bình chọn, vượt qua Declan Rice (Arsenal) cùng nhiều đối thủ sừng sỏ khác. Bên cạnh đó, anh còn được đề cử cho giải thưởng \"Cầu thủ của năm\" do ban tổ chức Ngoại hạng Anh khởi xướng.', '1', 'tun khang'),
(2, 'Chelsea chính thức bổ nhiệm HLV Alonso, hẹn đấu \"thầy\" Pep và bạn thân Arteta', 'img2.jpg', 'Không lâu sau thất bại ở chung kết FA Cup, Chelsea đã chính thức thông báo bổ nhiệm HLV Xabi Alonso làm tân \"thuyền trưởng\".', 'Chelsea chính thức bổ nhiệm HLV Alonso\r\n\r\nChiều 17/5 (giờ Việt Nam), Chelsea đã chính thức thông báo bổ nhiệm Xabi Alonso làm tân HLV trưởng trên trang chủ. Đúng như những gì truyền thông Anh đưa tin từ trước, nhà cầm quân người Tây Ban Nha đặt bút ký vào bản hợp đồng có thời hạn 4 năm và sẽ đảm nhận vai trò từ ngày 1/7. Dù vậy, ông được cho là sẽ bắt tay vào công việc ngay lập tức, bao gồm cả việc tham gia vào kế hoạch chuyển nhượng hè 2026.\r\n\r\n\"Câu lạc bộ bóng đá Chelsea vui mừng thông báo việc bổ nhiệm Xabi Alonso làm huấn luyện viên trưởng. Chiến lược gia người Tây Ban Nha sẽ chính thức bắt đầu công việc từ ngày 1/7, sau khi ký hợp đồng có thời hạn 4 năm tại Stamford Bridge\", trích đoạn thông báo trên trang chủ Chelsea.\r\n\r\nTheo The Athletic, Chelsea sẽ bổ nhiệm Alonso dưới vai trò người quản lý (manager) thay vì chỉ là HLV trưởng (head coach). Điều này đồng nghĩa, ông sẽ có quyền hạn rộng hơn trong các quyết định chuyên môn, chuyển nhượng và định hướng tương lai cho đội bóng.\r\n\r\nHẹn đấu \"thầy\" Pep và bạn thân Arteta\r\n\r\nAlonso chưa dẫn dắt đội bóng nào kể từ khi bị Real Madrid sa thải hồi tháng 1 - tức 7 tháng sau thời điểm đặt bút ký hợp đồng 3 năm với \"Đội bóng Hoàng gia\".\r\n\r\nViệc chính thức tiếp quản Chelsea sẽ đánh dấu màn tái xuất Ngoại hạng Anh của Alonso, sau quãng thời gian 5 năm khoác áo Liverpool thời cầu thủ (2004-2009).\r\n\r\nKhông chỉ vậy, ông hứa hẹn có những màn đối đầu thú vị với Pep Guardiola, HLV trưởng Man City và là người thầy cũ ở Bayern Munich giai đoạn 2014-2016 cũng như Mikel Arteta, HLV trưởng Arsenal.\r\n\r\nAlonso và Arteta vốn là bạn thời thơ ấu, cùng sinh ra tại thành phố biển San Sebastian (Tây Ban Nha) và chơi cho đội bóng địa phương Antiguoko.\r\n\r\nAlonso đặt tham vọng lớn cùng Chelsea\r\n\r\nPhát biểu sau khi được bổ nhiệm, Xabi Alonso cho biết: “Chelsea là một trong những câu lạc bộ lớn nhất thế giới và tôi vô cùng tự hào khi trở thành huấn luyện viên của đội bóng vĩ đại này.\r\n\r\nQua những cuộc trao đổi với ban lãnh đạo và bộ phận thể thao, tôi nhận thấy chúng tôi cùng chung tham vọng. Chúng tôi muốn xây dựng đội bóng có khả năng cạnh tranh ổn định ở đẳng cấp cao nhất và chiến đấu cho các danh hiệu.\r\n\r\nĐội hình hiện tại sở hữu rất nhiều tài năng cùng tiềm năng to lớn và sẽ là vinh dự lớn đối với tôi khi được dẫn dắt đội bóng này. Giờ đây, trọng tâm là làm việc chăm chỉ, xây dựng văn hóa phù hợp và giành các danh hiệu\".\r\n\r\nQuyết định bổ nhiệm Alonso diễn ra trong bối cảnh Chelsea vừa thất bại ở chung kết FA Cup trước Man City, qua đó chính thức trắng tay tại mùa giải 2025/26. Bên cạnh thành tích yếu kém, đội chủ sân Stamford Bridge còn trải qua biến động trên băng ghế chỉ đạo khi chia tay Enzo Maresca (tháng 1) và Liam Rosenior (tháng 4) chỉ sau vài tháng.\r\n\r\nTrên trang chủ, Chelsea không tiếc lời ca ngợi nhà cầm quân 44 tuổi: \"Là một trong những nhân vật được kính trọng nhất của bóng đá hiện đại, Alonso gia nhập Chelsea sau khi đã có kinh nghiệm huấn luyện ở đẳng cấp cao nhất của bóng đá châu Âu cùng Real Madrid và Bayer Leverkusen, nơi ông đã giúp đội bóng Đức giành chức vô địch quốc gia đầu tiên trong lịch sử câu lạc bộ.\r\n\r\nViệc bổ nhiệm này phản ánh niềm tin của CLB vào bề dày kinh nghiệm, chất lượng huấn luyện và triết lý bóng đá, cũng như khả năng lãnh đạo, phẩm chất cá nhân và sự chính trực của ông — những yếu tố then chốt khiến Chelsea quyết định lựa chọn ông để dẫn dắt giai đoạn tiếp theo của đội bóng.\r\n\r\nÔng không chỉ được đánh giá là một huấn luyện viên xuất sắc mà còn là một nhà lãnh đạo đã được kiểm chứng, có khả năng phối hợp hiệu quả trong nhiều lĩnh vực quan trọng nhằm đáp ứng những yêu cầu để đưa đội bóng phát triển\".', '1', ''),
(3, 'Chelsea còn đường duy nhất giành vé dự Cúp C1, sẽ lách qua khe cửa hẹp?', 'img3.jpg', 'Cơ hội để Chelsea góp mặt tại Champions League mùa giải tới đang dần khép lại, nhưng \"The Blues\" vẫn còn một tia hy vọng mong manh.', 'Chelsea sa sút không phanh\r\nMùa giải Ngoại hạng Anh của Chelsea đã lao dốc không phanh trong vòng hai tháng qua. “The Blues” từng đứng thứ 5 trên bảng xếp hạng sau chiến thắng 4-1 trước Aston Villa vào ngày 5/3, khi đó chỉ kém đội xếp thứ 3 là MU vỏn vẹn 3 điểm.\r\n\r\nTuy nhiên, mọi thứ đã thay đổi chóng mặt. Ở thời điểm hiện tại, Chelsea đã rơi xuống vị trí thứ 9 sau chuỗi 6 trận thua liên tiếp tại Ngoại hạng Anh. Đáng chú ý, họ thậm chí không ghi nổi 1 bàn thắng nào trong chuỗi trận này cho đến khi João Pedro ghi bàn danh dự trong thất bại 1-3 trước Nottingham Forest hôm 4/5.\r\n\r\nMột cú trượt dài thực sự, và là minh chứng rõ nét cho sự khủng hoảng phong độ của Chelsea ở giai đoạn quyết định của mùa giải. Trong bối cảnh cuộc đua top 5 Ngoại hạng Anh ngày càng khốc liệt, việc chen chân vào nhóm dự Champions League thông qua vị trí trên bảng xếp hạng gần như không còn nằm trong tầm tay của “The Blues”. Dù vậy, cánh cửa vẫn chưa hoàn toàn đóng lại.\r\n\r\nHy vọng cuối cùng để Chelsea giành vé dự Cúp C1\r\nPhong độ tệ hại của Chelsea đã dẫn tới việc HLV Liam Rosenior bị sa thải vào tháng trước, với Calum McFarlane được bổ nhiệm làm HLV tạm quyền đến hết mùa. Chiến lược gia người Anh khởi đầu ấn tượng khi giúp Chelsea đánh bại Leeds United 1-0 ở bán kết FA Cup ngay trận ra mắt, và hiện có cơ hội giành danh hiệu khi đối đầu Man City trong trận chung kết ngày 16/5.\r\n\r\nNếu đăng quang FA Cup, đội bóng thành London sẽ giành vé dự Europa League mùa tới. Tuy nhiên, đó vẫn bị xem là chưa đạt yêu cầu với giới chủ Chelsea, những người đặt mục tiêu thường xuyên góp mặt tại Champions League.\r\n\r\nChelsea hiện kém vị trí thứ 5 của Aston Villa tới 10 điểm trong khi mùa giải chỉ còn 3 vòng đấu. Điều đó khiến cơ hội lọt top 5 của “The Blues” gần như không còn. Dù vậy, vẫn tồn tại một kịch bản “cửa hẹp” cho Chelsea.\r\n\r\nCụ thể, Aston Villa đã lọt vào chung kết Europa League, và người hâm mộ Chelsea sẽ phải hy vọng đoàn quân của Unai Emery tiến thẳng đến chức vô địch.\r\n\r\nLý do là nếu Aston Villa vừa vô địch Europa League vừa kết thúc mùa giải ở vị trí thứ 5 Ngoại hạng Anh, suất dự Champions League của đội chủ sân Villa Park sẽ được chuyển xuống cho đội xếp thứ 6.\r\n\r\nTất nhiên, Chelsea vẫn phải tự làm phần việc của mình. “The Blues” hiện kém đội xếp thứ 6 là Bournemouth 4 điểm, trong bối cảnh “The Cherries” đang có phong độ rất cao với chuỗi 15 trận bất bại tại Ngoại hạng Anh.\r\n\r\nDù rất khó xảy ra, kịch bản này ít nhất vẫn mang lại chút động lực rằng cánh cửa dự Champions League của Chelsea chưa hoàn toàn khép lại.\r\n\r\nTuy nhiên, điều kiện tiên quyết là Aston Villa phải đứng thứ 5. Nếu Aston Villa vô địch Europa League nhưng kết thúc trong top 4, thì Ngoại hạng Anh vẫn chỉ có 5 suất dự Champions League, do quy định về suất bổ sung dựa trên thành tích cúp châu Âu (EPS).\r\n\r\nChặng đường cuối của Chelsea cũng đầy chông gai, với các chuyến làm khách trên sân của Liverpool và Sunderland, xen giữa là trận sân nhà gặp kình địch cùng thành phố Tottenham, đội đang vật lộn với cuộc chiến trụ hạng.', '1', ''),
(4, 'Mbappe bị báo Madrid đồng loạt công kích sau vụ \"bật\" HLV Arbeloa', 'imgmain.jpg', 'Mbappe đã trở thành mục tiêu chỉ trích của báo giới Madrid sau vụ cầu thủ này tỏ ra không bằng lòng với quyết định cho anh ngồi dự bị của HLV Arbeloa.', 'Báo chí Madrid lúc này đã không còn giữ thái độ tán dương, hay ít nhất dè chừng khi nói về Kylian Mbappe. Sau buổi tối thứ Năm, Mbappe đã trở thành mục tiêu công kích của truyền thông thủ đô Tây Ban Nha, sau vụ tiền đạo này chỉ trích HLV Alvaro Arbeloa vì không cho mình ra sân thi đấu ở trận thắng Real Oviedo\r\n\r\nTrong 2 mùa qua, đa phần báo giới tại Madrid không mấy khi có những bài viết chỉ trích Mbappe vì sợ chủ tịch Florentino Perez. Nhưng vào sáng thứ Sáu đã không còn sự né tránh nào nữa.\r\n\r\nVị kỷ\r\nTờ AS bày tỏ sự không hài lòng khi Mbappe tỏ rõ sự thiếu tôn trọng với HLV Alvaro Arbeloa trong cuộc phỏng vấn sau trận. Việc Mbappe công kích HLV Arbeloa vì không cho mình đá trận này, trong khi đã vắng mặt trận gặp Barcelona là trận đấu ý nghĩa hơn nhiều, khiến AS cho rằng Mbappe chỉ biết nghĩ cho bản thân và theo đuổi giải Pichichi (Vua phá lưới).\r\n\r\nTrong bài viết “Cơn bột phát của Mbappe & niềm tự hào của Gonzalo”, Tomas Ronceco của tờ AS viết: “Trong những thời khắc khó khăn này, chúng ta sẽ nhìn thấy những người thực sự tận tụy vì tập thể như Gonzalo Garcia. Chàng trai của học viện này là một số 9 thực thụ và ghi bàn mở tỷ số theo đúng phong cách của một số 9. Gonzalo đã khoác áo CLB này với niềm tự hào, rằng một trận đấu vô thưởng vô phạt trong một mùa giải thất bại đã không làm nhụt tâm lý thi đấu của anh”.\r\n\r\n“Trong khi đó, fan đã chờ giây phút Mbappe xuất hiện để thể hiện rõ sự bất mãn và họ không bỏ lỡ cơ hội đó. Phản ứng của họ càng trở nên có lý với những gì Mbappe nói sau trận khi tiếp xúc các phóng viên, anh ta dùng họ để công kích HLV trưởng chỉ vì không được cho đá chính. Anh ta muốn gì ở trận đấu này chứ, nếu không phải là vì một giải thưởng cá nhân?”.\r\n\r\nCũng trong một bài viết khác trên tờ AS, Carlos Forjanes cho rằng bầu không khí lúc này tại Bernabeu đã gần như chuyển thành “chụp giật lợi ích”. Forjanes viết: “Mbappe đã quyết định rằng nội bộ Real Madrid chưa đủ nóng. Anh ta gây chiến với HLV giữa thời điểm Arbeloa đã đủ khổ sở với những vấn đề khác, phải khẩu chiến với ngôi sao của đội là điều cuối cùng ông ấy muốn dính vào”.\r\n\r\n“Có thể giả định rất chắc chắn rằng Mbappe sẽ kiếm được khoản tiền thưởng khá lớn nếu đoạt Pichichi, mà Vedat Muriqi lúc này chỉ kém Mbappe 2 bàn trong khi vẫn còn 2 trận nữa. Với Mbappe, thành tích của đội không quan trọng mà cái anh ta cần là đoạt Vua phá lưới và ăn tiền thưởng. Do đó anh ta sẵn sàng ném Arbeloa xuống gầm xe nếu điều đó giúp anh ta đạt được ý muốn của mình, đó là được đá chính các trận còn lại”.\r\n\r\nChiến thắng phải là ưu tiên\r\nTờ Marca đã viết về phản ứng của CĐV trên khán đài để nói lên tiếng nói chung của người hâm mộ về thái độ thi đấu của các cầu thủ. “Không gì tệ hơn là sự thờ ơ, và trong buổi tối thứ Năm đã có một lượng lớn cổ động viên mặc kệ những diễn biến trên sân để cất tiếng nói phản đối những điều chướng tai gai mắt ở CLB”, bài viết của tờ này có đoạn.\r\n\r\n“Nhưng trong sự thờ ơ đó, họ vẫn đứng dậy tán thưởng Gonzalo Garcia, Brahim Diaz, Jude Bellingham và Dani Carvajal, nếu không phải vì những pha bóng hay và nỗ lực thi đấu trên sân thì cũng là dành cho những cống hiến tận tụy trong quá khứ. Florentino Perez nói rằng fan không nên la ó cầu thủ Real, ông ta phải biết rằng họ bỏ bao nhiêu tiền để được vào đó chứ? Họ sẽ cổ vũ cho những ai đá quyết tâm để xứng đáng với đồng tiền họ bỏ ra”.\r\n\r\n\"Hãy học cách làm Cristiano và hãy học cách làm Raul\", bài viết của Marca \r\n\r\nVà sau đó Marca chĩa mũi dùi về phía Mbappe. “85 bàn trong 2 mùa của anh ta chưa đủ, Mbappe phải làm tốt hơn nữa. Hoặc, trong một số trường hợp, làm ít hơn nữa. Kể cả có được cho phép thì cũng đừng mò sang Sardinia để đi nghỉ cùng bạn gái trong lúc các đồng đội chuẩn bị đá El Clasico. Và anh ta phải  biết khi nào cần tắt nụ cười khi rời sân tập sau khi chứng kiến các đồng đội đánh nhau. Chưa kể đăng ảnh xem đội nhà đá Clasico qua TV trong lúc bị thua không phải một hành động thông minh”, tờ này viết.\r\n\r\nBài viết đó có tựa đề “Học cách làm Cristiano và học cách làm Raul”, một tiêu đề rất giàu hàm ý. “Mbappe đã luôn thần tượng Cristiano Ronaldo và anh ta muốn trở thành một biểu tượng ở Real Madrid như thần tượng của mình. Anh ta hãy nhớ điều này: Ronaldo và Raul coi thắng/thua là điều quan trọng nhất và dồn mọi nỗ lực vào giành chiến thắng”, bài viết nhấn mạnh.\r\n\r\n“Mbappe có thực sự coi chiến thắng là điều tối thượng không? Nếu có thì anh ta không biết thể hiện điều đó cho CĐV. Hãy học Cristiano và hãy học Raul”.', '2', 'tun khang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_product_image` (`product_id`,`image_path`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allproducts`
--
ALTER TABLE `allproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
