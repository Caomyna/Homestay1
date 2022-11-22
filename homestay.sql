-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2022 lúc 12:11 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `homestay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id_book` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `homestay_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `leave_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homestay`
--

CREATE TABLE `homestay` (
  `id_homestay` int(11) NOT NULL,
  `homestay_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `images` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descript` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `homestay`
--

INSERT INTO `homestay` (`id_homestay`, `homestay_name`, `location_id`, `images`, `address`, `descript`, `price`) VALUES
(30, 'Greenland, Đà Lạt', 1, 'dl-1.jpg', 'Số 9B đường Triệu việt vương, P4, TP. Đà Lạt.', 'GreenLand là một khu nghỉ dưỡng phức hợp tuyệt đẹp, đã được du khách bình chọn là một trong top 5 homestay đáng nghỉ dưỡng nhất.', 12),
(31, 'Suri’s House', 1, 'dl-2.jpg', '14/2 Bùi Thị Xuân, Phường 2, TP Đà Lạt, tỉnh Lâm Đồng', 'Suri’s House là một căn nhà nhỏ xinh tọa lạc trên đường Bùi Thị Xuân, chỉ cách hồ Xuân Hương 350m mà thôi. Suri’s House Homestay luôn tràn ngập hoa và cây xanh. Những chậu hoa đầy màu sắc luôn được đặt xung quanh homestay, được treo trên các ban công… Mỗi phòng ngủ đều được trang hoàng với màu sắc tươi sáng bắt mắt.', 12),
(32, 'Lemongrass Homestay', 1, 'dl-3.jpg', '83/2 Phan Đình Phùng, phường 2, Tp Đà Lạt, tỉnh Lâm Đồng', 'Là một trong những homestay gần Hồ Xuân Hương rất nổi tiếng. Lemongrass Homestay được thiết kế vô cùng tinh tế và nhẹ nhàng. Từng góc đều tràn ngập màu sắc nhưng cũng không kém phần hiện đại và tiện nghi. Xung quanh homestay tràn ngập cây cối và hoa cỏ xanh tươi. Lemongrass luôn đem đến cho các vị khách cảm giác thân quen như được sinh hoạt trong chính căn nhà mình.', 12),
(33, 'Misty Forest House', 1, 'dl-4.jpg', '50 Thủ Khoa Huân, phường 1, Tp Đà Lạt, tỉnh Lâm Đồng', 'Nếu bạn muốn được bước vào một không gian đậm chất Bắc Âu, Misty Forest House chính là một sự lựa chọn mới mẻ. Misty Forest là một nơi khác hẳn so với các Homestay Đà Lạt khác. Lấy tông màu trắng bạc làm chủ đạo, Misty Forest vẫn thường được người ta ví như ngôi nhà tuyết giữa lòng thành phố ngàn hoa.', 12),
(34, 'DaLat 1900s homestay', 1, 'dl-5.jpg', '19C/41 Hà Huy Tập, Phường 3, TP Đà Lạt, Lâm Đồng', 'DaLat 1900s không chỉ là một nơi để ngủ nghỉ, đây còn là chốn lãng mạn yên bình để người ta tìm về sau những tháng ngày mỏi mệt. DaLat 1900s homestay đẹp nhất là khi màn đêm buông xuống. Khắp ngóc ngách sân vườn đều sáng rực ánh đèn. Vẻ đẹp lãng mạn và có chút hoài cổ của DaLat 1900s luôn khiến người ta lưu luyến mỗi khi đặt chân tới.', 12),
(35, 'Home of Dreamers', 1, 'dl-6.jpg', '2/35 đường Nam Hồ, phường 11, TP. Đà Lạt', 'Đúng như cái tên Home of Dreamers – ngôi nhà của những kẻ mộng mơ, homestay với tông màu thiên nhiên nhẹ nhàng làm chủ đạo như đưa bạn vào đến một không gian vừa tươi mới, vừa cổ điển lại vô cùng an nhiên. Căn nhà còn tạo ấn tượng về view núi cực bình yên và lãng mạn.', 12),
(36, 'Santori Homestay, Hội An', 3, 'ha-1.jpg', 'Cẩm Thanh, Hội An, Quảng Nam.', 'Không gian xanh với cây cảnh bao quanh và hồ bơi lớn ngay giữa khuôn viên. Từ ban công bạn có thể ngắm view phố phường rất xinh đẹp.', 12),
(37, 'Loongboong Homestay', 3, 'ha-2.jpeg', '', 'Tọa lạc chỉ cách trung tâm Hội An 0,8km, Loongboong Homestay Hội An không chỉ có tầm nhìn rất đẹp, mà còn có các phòng được bài trí rất thanh nhã và dịch vụ tận tình. Loongboong Homestay làm khách hàng cảm thấy mình như lạc vào khu rừng kì diệu của nơi này.', 12),
(38, 'Heron House Hoi An', 3, 'ha-3.jpg', '', 'Heron House Hoi An gần như hoàn toàn cách biệt với thế giới bên ngoài, vừa yên tĩnh lại vừa tinh tế. Những người muốn tìm một nơi ẩn náu thì đây quả là homestay vô cùng thích hợp. Nơi này còn có cả một bể bơi với tầm nhìn ra cách đồng cực kỳ hùng vĩ và hợp để sống.', 12),
(39, 'The Hoi An Hippie House', 3, 'ha-4.jpg', '', 'Nếu bạn là tín đồ của phong cách Hippie thì nhất định phải đến thử homestay này.Với những mảng màu sắc sặc sỡ ở khắp khu homestay, nơi này nhìn thật rực rỡ biết bao. Đây còn là một homestay rất yên tĩnh và thích hợp cho những buổi chiều vắng lặng.', 12),
(40, 'The Happy Clam', 3, 'ha-5.jpg', '', 'Thanh nhã với hai tông màu xanh – trắng, The Happy Clam hoàn toàn “ăn điểm” về việc thỏa mãn thị giác. Nơi này thật tuyệt vời với những bạn trẻ thích sống ảo thật sang chảnh, đi một lần là có ảnh up cả tuần. Ngoài ra còn có rất nhiều hoạt động thú vị nữa.', 12),
(41, 'Mali Home 1', 3, 'ha-6.jpg', '', 'Nằm lọt thỏm trong vườn cây xanh, Mali Home 1 là homestay Hội An cực kỳ thanh bình và yên tĩnh. Trên tầng thượng của homestay này còn có nơi để ngắm trăng, thưởng trà. Và đặc biệt nhất là chú chó Mali quấn quýt khiến người ta không muốn rời', 12),
(42, 'Phố Homestay, Nha Trang', 9, 'nt-1.jpg', '78/38A Tuệ Tĩnh, Lộc Thọ.', 'Những chiếc đèn được thả dài từ trần nhà gợi nên nét cổ điển, quý tộc. Từng bức tranh treo tường, những họa tiết bài trí cũng rất hợp tone và xinh xắn.', 12),
(43, 'An An Homestay', 9, 'nt-2.jpg', '', 'AnAn Homestay mộc mạc đơn sơ với nội thất gỗ được kết hợp với những phụ kiện nhỏ xinh như giỏ mây đan, hoa khô hay tủ gỗ… Và theo hơi hướng Vintage chủ đạo, mỗi góc cạnh, trang trí của AnAn đều bày biện có ý đồ. Tạo nên nét gần gũi, thân thương như chính trong căn nhà của mình nhưng vẫn đảm bảo giữ riêng nét lãng mạn cần thiết..', 12),
(44, 'Kokoro Home', 9, 'nt-3.jpg', '', 'Khoác cho mình lớp áo chủ đạo của màu xanh biển cả, trang trí với phong cách minimalist nhưng không hề nhàm chán, Kokoro nổi bật giữa đám đông bởi sự dễ thương và đơn giản. Thế nhưng những vật dụng bên trong đều hiện đại, đem lại cho bạn cảm giác dễ chịu và thoải mái..', 12),
(45, 'Livin homestay', 9, 'nt-4.jpg', '', 'Ngỡ ngàng với homestay view biển đẹp rúng động dân tình, nơi lưu trú nóng bỏng trong thời gian gần đây. Livin Homestay tọa lạc ngay đường Phạm Văn Đồng, gần biển, tình thiệt bạn đã bỏ qua thì rất đáng tiếc. Mỗi góc cạnh trong ngôi nhà có thể cho bạn một shoot ảnh sống ảo có tâm để đời đấy.', 12),
(46, 'Nhà Của Bu Homestay', 9, 'nt-5.jpg', '', 'Một phòng trong homestay Nhà Của bu có thể chứa đến 10 người. Với thiết kế giường ngủ cất gọn để mở thêm không gian sinh hoạt, hoặc ghế sofa êm ái cũng có thể làm giường ngủ tiện lợi mọi lúc mọi nơi..', 12),
(47, 'S: House Nha Trang', 9, 'nt-6.jpg', '', 'Thuộc 1 trong 10 homestay được yêu thích nhất Nha Trang hiện nay. S: House vẫn rất lạnh lùng nhưng đầy mê hoặc với phong cách Tây Âu thuần khiết. Thế nhưng vẫn gần gũi, hòa hợp với thiên nhiên. Chính vì vậy khi bước chân vào đây, bạn sẽ phải ngạc nhiên vì sự độc đáo, mới lạ và gần gũi của S: House.', 12),
(48, 'Mama’s house, Mộc Châu', 10, 'mc-1.jpg', 'Đồng Sang, Mộc Châu.', 'Homestay có rất nhiều bungalow gỗ đáng yêu vô cùng, ngoài ra còn có phòng dorm (tập thể) hay phòng gác mái, bạn còn có thể cắm trại với lều có sẵn ở đây.', 12),
(49, 'Nhà Ta homestay', 10, 'mc-2.jpg', 'Ngõ 53 Trần Huy Liệu, Thị trấn Mộc Châu.', 'Nhà Ta là một homestay bình dị nằm ngay bên trong con hẻm nhỏ. Khuôn viên của homestay có điện tích tương đối lớn với những chiếc lều dựng hình chóp. Ý tưởng dựng lều xuất phát từ hình dáng chóp nhọn của ngọn núi Mèo giữa núi rừng Tây Bắc.', 12),
(50, 'Arena Village', 10, 'mc-3.jpg', '122/180 QL6, Tiểu Khu Chiềng Đi, Thị trấn Mộc Châu', 'Arena Village homestay ở Mộc Châu là điểm dừng chân quen thuộc của rất nhiều phượt thủ với lối trang trí bằng các thùng container nhiều màu sắc nên tọa độ này mang phong cách “bụi bặm” phù hợp với tinh thần phượt thủ.', 12),
(51, 'Happy Land homestay', 10, 'mc-4.jpg', 'Quốc lộ 43, xã Mường Sang, Thị trấn Mộc Châu', 'Happy Land tọa lạc tại một thung lũng trong xã Mường Sang nức tiếng với những dải hoa cải trắng muốt vào mỗi kỳ đông. Đặc biệt ở đây chỗ ở được thiết kế nhỏ nhắn xinh xắn bằng ống tròn lạ mắt rất đáng yêu.', 12),
(52, 'Vườn của Gấu', 10, 'mc-5.jpg', 'Đường 14/6, tiểu khu 1, Thị trấn Mộc Châu', 'Vườn của Gấu homestay mang đậm phong cách đồng quê thoáng mát với khu vườn và khuôn viên khá xinh xắn. Đặc biệt nơi đây có rất đầy đủ tiện nghi và các góc sống ảo lung linh chiếm trọn cảm tình của du khách.', 12),
(53, 'Fairyhouse', 10, 'mc-6.jpg', 'Khu Bản Áng 2, Xã Đông Sang, Thị trấn Mộc Châu', 'Fairyhouse là một khu homestay cực chất và lạ mắt mang đến cho du khách cảm giác như bạn là cô bé Alice lạc vào xứ sở thần tiên với những căn phòng nhỏ được lợp bằng lá dừa cho bạn cảm giác rất thơ mộng.', 12),
(54, 'Amavi Homesta, Vũng Tàu', 11, 'vt-1.jpg', '2 Ngõ 23 – Hải Đăng 2/8 Hải Đăng, Phường 2, Thành phố Vũng Tàu, Bà Rịa – Vũng Tàu.', 'Giữa không gian mặn mà và dịu êm của sóng biển và gió ấm và sự tinh khiết của núi rừng xanh ngát xa xa, có một Amavi Homestay khiến khách mê mẩn.', 12),
(55, 'Santoni Homestay', 11, 'vt-2.png', '139/27a Phan Chu Trinh, phường 2, thành phố Vũng Tàu, tỉnh Bà Rịa – Vũng Tàu.', 'Santoni có sân vườn cho bạn tổ chức tiệc BBQ với dàn loa, màn hình, cùng nhiều thiết bị xịn sò khác để phục vụ nhu cầu giải trí của bạn. Ngoài ra, homestay này cách biển chỉ có vài phút đi bộ, nên bạn có thể ra biển vui chơi, ngắm cảnh bất cứ lúc nào.', 12),
(56, 'vũng tàu', 11, 'vt-3.png', '45 Ba Tháng Hai , phương 8, thành phố Vũng Tàu, tỉnh Bà Rịa – Vũng Tàu.', 'Hệ thống La Mer không những có phòng đẹp, sang trọng, tầm nhìn cực đã, mà giá cả lại “hạt dẻ”, đem lại cho bạn những phút giây thảnh thơi, thoải mái nhất.Không cần phải đi quá xa, chỉ cần dạo một vòng quanh trong khuôn viên La Mer là bạn đã thu về rất nhiều tấm hình chuẩn style biển xanh nhiệt đới rồi.', 12),
(57, 'Cỏ Mây Homestay', 11, 'vt-4.png', '', '3A Nguyễn Trường Tộ, Phường 2, thành phố Vũng Tàu, tỉnh Bà Rịa – Vũng Tàu.<br>Cỏ Mây Homestay Vũng Tàu nổi bật bởi không gian rộng rãi, đầy màu sắc trẻ trung, góp phần rất lớn trong việc tạo cho bạn một tâm trạng tốt, một tinh thần phấn chấn sau những ngày làm việc mệt mỏi. ', 12),
(58, 'Sea La Vie Homestay', 11, 'vt-5.png', '178 Trần Phú, phường 5, thành phố Vũng Tàu, tỉnh Bà Rịa – Vũng Tàu.', 'Nếu bạn muốn tìm một homestay ngay biển thì Sea La Vie đích thị là một nơi như thế, vì tọa lạc ngay bãi Dâu, một trong những bãi biển đẹp nhất Vũng Tàu. Sea La Vie có tông trắng chủ đạo, được tô điểm bởi dàn hoa hồng đỏ lãng mạn.', 12),
(59, 'An Yên Homestay', 11, 'vt-6.png', '60/54/8 Phạm Hồng Thái, phường 7, thành phố Vũng Tàu, tỉnh Bà Rịa – Vũng Tàu', 'Đúng với cái tên của mình, An Yên thực sự là nơi bình yên, thích hợp cho những bạn đang có nhu cầu “trốn” thế giới và không muốn ai “tìm”. An Yên Homestay Vũng Tàu không tọa lạc gần bãi biển sôi động, mà nằm ở một góc đường nhỏ nơi trung tâm thành phố.', 12),
(60, 'Chezbeo Homestay, Ninh Bình', NULL, 'nb-1.jpg', 'Thôn Khả Lương, Hoa Lư, Ninh Bình.', 'Cảnh quan bên ngoài của Chez Beo sẽ khiến bạn thu hút ngay từ cái nhìn đầu tiên bởi những căn nhà lợp lá tranh lạ mắt với xung quanh là những hồ sen bát ngát.Khi vào buổi trưa sẽ có những người dân chuyên hái sen tới hồ sen hái để du khách có thể trải nghiệm thực tế.', 12),
(61, 'Trang An Valley Bungalow', 8, 'nb-2.jpg', '', 'Homestay Ninh Bình đầy đủ tiện nghi và có khu vực nướng BBQ. Những du khách từng trải nghiệm kì nghỉ ở đây luôn đánh giá tốt về La Casa và khuyến khích các bạn nên thử một lần đến đây.', 12),
(62, 'Tam Cốc Serene Bungalow', 8, 'nb-3.jpg', '', 'Mỗi phòng ngủ tại đây chỉ có một giường và chỉ được tối đa 3 người ở. Bên trong căn phòng cũng rất đầy đủ tiện nghi . Đến với Homestay Ninh Bình này khách du lịch còn được câu cá, chiêm ngưỡng toàn bộ cảnh đẹp tại Ninh Bình.', 12),
(63, 'Tam Coc Gecko Garden', 8, 'nb-4.jpg', '', 'Không chỉ là nơi nghỉ dưỡng lý thú mà Tam Coc Gecko Garden Ninh Bình còn có cả quầy bar và sân vườn. Đặc biệt, bữa sáng tại Homestay Tam Coc Gecko Garden không giống như những Homestay Ninh Bình khác.', 12),
(64, 'Dragon Beat Rock', 8, 'nb-5.jpg', '', 'Cùng đổi gió với một homestay Ninh Bình dân dã và mang chút giản dị. Các phòng đều hướng núi, hồ và vườn đem cả thiên nhiên về bên cạnh bạn.Decor không sang trọng nhưng đem đến cảm giác thoải mái, nhẹ nhàng cho kì nghỉ của bạn.', 12),
(65, 'Hoalu Ecolodge Homestay', 8, 'nb-6.jpg', '', 'Homestay Ninh Bình mang đến phong vị Việt Nam bởi chất liệu của ngôi nhà. Nhưng bên trong lại vô cùng tiện nghi, vẫn tận dụng chất liệu dân tộc kết hợp với sự hiện đại đem đến sự kết hợp hoàn hảo.', 12),
(66, 'Nhà An Nhiên homestay SaPa', 12, 'sp-1.jpg', '066 Điện Biên Phủ, Sapa', 'ngôi nhà ba gian nhỏ được trang trí tối giản nhưng vẫn đầy đủ tiện nghi với căn bếp nhỏ, nơi bạn có thể chuẩn bị những bữa ăn cùng nhau. Homestay còn có gác xép xinh xắn ấm áp để bạn quây quần, ghi lại những khoảnh khắc thật đẹp trong chuyến đi Sapa.', 12),
(67, 'Phơri ‘s House', 12, 'sp-2.jpg', '', 'Phơri ‘s House là một homestay đẹp ở Sapa mang phong cách giản dị của vùng núi với những chấm phá đặc trưng qua vật dụng trang trí bằng thổ cẩm đa màu sắc, gỗ và bàn ghế mây tre đan.', 12),
(68, 'The Haven Sapa Camp website', 12, 'sp-3.jpg', '', 'Nằm cách thị trấn Sapa xinh đẹp khoảng 1.5 km, Homestay The Haven Sapa Camp website nằm ở trên con đường đi vào bản Cát Cát, chỉ bí quyết trung tâm khoảng 2km có thể rất giản đơn nếu bạn muốn trải nghiệm đi bộ vào thị trấn tham quan.', 12),
(69, 'Lustig hostel', 12, 'sp-5.png', '', 'Ngôi nhà này có phong cách kiến trúc theo kiểu châu Âu cổ điển, làm người ta nhớ lại ký ức những người Pháp đầu tiên khi khám phá ra Sapa đã đặt chân lên vùng đất có khí hậu tuyệt vời và vô cùng xinh đẹp này.', 12),
(70, 'Rock Garden Sapa', 12, 'sp-6.jpg', '', 'Khi đến đây, bạn sẽ như được hòa mình với không gian thiên nhiên rộng lớn với tầng tần lớp lớp mây bao quanh những dãy núi hùng vĩ và tận hưởng bầu không khí trong lành của miền đất này.Homestay Sapa này lấy cảm hứng từ phong cách xây nhà của người dân bản địa nên lối thiết kế khá đơn giản nhưng đầy tinh tế.', 12),
(71, 'The Choai Happy House, Hà Nội', 5, 'hn-1.jpg', '', 'Lâm Trường, Sóc Sơn, Hà Nội.<br>The Choai Happy House mang một thiết kế vô cùng độc lạ với hình dáng ngôi nhà gỗ mái chữ A. The Choai Happy House có diện tích rộng hơn một chút so với không gian của các homestay khác. Không gian của Happy House rộng 30m2 với hai tầng bao gồm cả không gian sinh hoạt chung và không gian cho 2 bạn nghỉ ngơi.', 12),
(72, 'Homestay Lacaito', 5, 'hn-2.jpg', '2 ngõ Dã Tượng, Dã Tượng, Trần Hưng Đạo, quận Hoàn Kiếm, Hà Nội', 'Lacaito là một căn hộ nhỏ được thiết kế lại trên nền một căn biệt thự kiểu Pháp. Lối thiết kế mang phong cách hiện đại với với nội thất bên trong bằng gỗ, mây, tre mang lại cảm giác mộc mạc, gần gũi.', 12),
(73, 'Rua’s House', 5, 'hn-3.jpg', 'Phòng 404 cầu thang 1 tập thể C4 Giảng Võ, Ba Đình, Hà Nội.', 'Rùa’s House được thiết kế theo phong cách Sapa cổ xưa, với những đồ vật trang trí mang đậm phong cách núi rừng Tây Bắc như thổ cẩm, gỗ thông, gốm mộc,… mang tới không gian vừa ấm áp, vừa lãng mạn.', 12),
(74, 'Hygge homestay', 5, 'hn-4.jpg', '244 Âu Cơ, Tây Hồ, Hà Nội', 'Căn nhà khoảng 40m2 chỉ chiếm 1 góc nhỏ trong toàn bộ khuôn viên nhưng luôn ấm cúng và 2 mặt cửa kính đảm bảo được ánh sáng luôn tràn ngập căn nhà, mọi tầm nhìn đều hướng tới vườn cây xanh vô cùng thư giãn.', 12),
(75, 'La Casa Nam Ngư – The Hideaway', 5, 'hn-5.jpg', '04 Nam Ngư, Cửa Nam, Hoàn Kiếm, Hà Nội.', 'Căn hộ này có 1 phòng ngủ với máy điều hòa, khu vực phòng ăn và bếp đầy đủ tiện nghi. La Casa được thiết kế với gam màu tươi sáng, trẻ trung, các đồ vật được bày trí hợp lí tạo nên không gian xinh xắn, thoáng đãng.', 12),
(76, 'Aloha Hanoi Homestay', 5, 'hn-6.jpg', 'Số 10, ngõ 152/1, Nguyễn Đình Hoàn, quận Cầu Giấy, hà Nội.', 'Với tôn chỉ là “House to home”, Vintage Homestay luôn ấm áp chào đón bạn như là được trở về nhà. Khiến cho bạn lưu luyến, sau này chẳng thể rời chân đi. Nơi đây có đủ tiện nghi như ở 1 ngôi nhà thân quen, cách trang trí thuần, đơn giản khiến ai cũng ấm lòng.', 12),
(77, 'Funtastic hostel, Đà Nẵng', 2, 'dn-1.jpg', '115 Hải Phòng, Thạch Thang, Hải Châu, Đà Nẵng', 'Hostel này tọa lạc tại bên phải trung tâm Đà Nẵng. Bạn chỉ cần mất vài phút đi bọ từ ga tàu Đà Nẵng và 5 phút đi xe từ sân bay quốc tế Đà Nẵng, một vị trí vô cùng thuận tiện cho chuyến du lịch của bạn.', 12),
(78, 'DUNU ', 2, 'dn-2.jpg', '', 'DuNu mang phong cách trẻ trung, tươi tắn với gam màu chủ đạo xanh trời. Màu gợi nhớ về những bãi biển, những buổi dã ngoại vui vẻ dưới bầu trời xanh ngắt. Màu của những người yêu chủ nghĩa đơn giản, thanh lịch có đôi chút ngọt ngào.', 12),
(79, 'Mộc House', 2, 'dn-3.jpg', '', 'Là một chuỗi Homestay mang phong cách Minimalist đầu tiên tại Đà Nẵng. Với thiết kế độc đáo, thái độ phục vụ chuyên nghiệp, chúng tôi hy vọng được hợp tác với bạn để mang lại cho khách hàng một chuyến du lịch chất lượng.', 12),
(80, 'Memory Hostel', 2, 'dn-4.jpg', '', 'Đúng như cái tên Memory của mình, hostel này được ví như nơi mà quá khứ hiện tại đan xen. Cả tòa nhà được bao phủ bởi những mảng gạch nung màu nâu trầm với nghệ thuật sắp xếp siêu độc đáo được điểm xuyết bằng những ô cửa sổ đen tuyền.', 12),
(81, 'D – Green Hostel', 2, 'dn-5.jpg', '', 'một trong những nơi lưu trú tại Đà Nẵng được đầu tư kỹ lưỡng về mặt nội dung lẫn hình thức. Nếu được chọn một nơi vừa mang vẻ đẹp bình yên, hạnh phúc, vừa độc đáo lại phù hợp với túi tiền của nhiều người thì D – Green Hostel có lẽ là sự lựa chọn bạn không thể bỏ qua.', 12),
(82, 'Like Backpacker Hostel', 2, 'dn-6.jpg', '', 'Chỉ vừa bước vào Like Backpacker, bạn sẽ bị hớp hồn bởi lối kiến trúc đơn giản mà vô cùng sang trọng, không hề thua kém những khách sạn cao cấp.Với rất nhiều đầu sách hay được luôn cập nhật thường xuyên, có khi cả ngày bạn sẽ chẳng muốn đi đâu mà chỉ muốn ngồi nhâm nhi tách cà phê cùng những trang sách.', 12),
(83, 'Sahi Homestay Retreat, Huế', 4, 'h-1.jpg', '', 'số 27/245A đường Bùi Thị Xuân, TP Huế.<br>Thiết kế đề cao sự đơn giản và mộc mạc với nhiều loại chất liệu từ địa phương, có tính tự nhiên được phối hợp cùng nhau như: gỗ tự nhiên cho cả khung nhà và đồ dùng nội thất, đá tự nhiên, đá mài granite, gạch, ngói nung', 12),
(84, 'Deja Vu homestay', 4, 'h-2.jpg', 'Số 191/3 đường Điện Biên Phủ, TP. Huế.', 'Homestay mang phong cách Vintage cổ điển vừa chân phương vừa thơ mộng. Deja Vu nổi bật với lối trang trí đơn giản với sự phối hợp nhịp nhàng giữa các màu pastel nhẹ nhàng tinh tế. Tạo cho du khách một sự ấm cúng, thoải mái thư giãn mỗi khi ghé thăm.', 12),
(85, 'Mosaic Garden', 4, 'h-3.jpg', 'Kiệt 11, Thôn Vân Dương, Xã Thủy Vân,  Thị Xã Hương Thủy, Huế', 'Sự kết hợp hài hòa giữa phong cách cổ điển và hiện đại. Mosaic có không gian mở nên rất thoáng đãng, gần gủi với thiên nhiên. Homestay này có cách bày trí không quá cầu kỳ, màu sắc hài hòa mang lại cảm giác dễ chịu, gần gủi cho khách ghé thăm.', 12),
(86, 'Vu Homestay', 4, 'h-4.jpg', 'Minh Mạng,  Tp. Huế, Hu', 'Là homestay hiếm hoi trong các homestay đẹp ở Huế được thiết kế theo mô hình du lịch xanh. Một mô hình rất được du khách yêu thích, đặc biệt là khách nước ngoài. Đến với Vu homestay, bạn như lạc vào một miền quê với cỏ xây xanh mướt, không khí vô cùng trong lành tự nhiên.', 12),
(87, 'Shmily Homestay', 4, 'h-5.jpg', '', 'Tuy có diện tích không lớn nhưng luôn đầy đủ tiện nghi và nhiều loại phòng cho bạn lựa chọn. Shmily có 3 phòng cho thuê với 1 phòng lớn, 1 phòng đôi và 1 phòng 4 giường có sức chứa lên đến 20 người.', 12),
(88, 'Lagom Homestay', 4, 'h-6.jpg', '', '196 Trịnh Công Sơn, Phú Cát, Thành phố Huế.<br>Lagom homestay mang đến một không gian riêng tư giúp bạn có thể ngắm nhìn trọn vẹn các nàng thơ của Huế trong mọi khoảnh khắc.', 12),
(89, 'Làng Biển Homestay, Khánh Hòa', 7, 'kh-1.jpg', 'Đảo Bình Hưng, Cam Lập,TP. Cam Ranh, Khánh Hòa', 'Hệ thống Làng biển gồm Homestay xinh xắn, nhà bè trên biển và quán cafe phong cách nằm sát biển. Phòng sạch sẽ, design dạng homestay đơn giản nhưng khá đẹp mắt.', 12),
(90, 'Homestay ở đảo Bình Ba, Khánh Hòa', 7, 'kh-2.jpg', '', 'Cùng Phượt – Đảo Bình Ba là 1 trong 5 hòn đảo “tôm hùm” nổi tiếng nhất tỉnh Khánh Hòa và cũng là điểm du lịch không thể bỏ lỡ trong hành trình khám phá “Tứ Bình” tuyệt vời gần ngay phố biển Nha Trang. Đảo Bình Ba hứa hẹn sẽ mang đến cho bạn những ngày trải nghiệm cuộc sống mộc mạc, mới lạ, độc đáo giữa biển trời rộng lớn.', 12),
(91, 'Sao Biển Homestay', 7, 'kh-3.jpg', '', 'hu sinh thái Sao Biển không chỉ dành cho những cặp đôi đang yêu nhau, những bạn trẻ đam mê khám phá mà còn là điểm đến dành cho các gia đình muốn tìm cho mình một không gian yên tĩnh, thoải mái. Biển ở khu sinh thái rất êm, bãi cát thoai thoải nên an toàn cho trẻ em và những ai không biết bơi.', 12),
(92, 'Thanh Nhi Homestay', 7, 'kh-4.jpg', '', 'Phòng nhỏ và ấm cúng, hoàn hảo cho các cặp đôi. Tất cả phòng nghỉ tại đây đều có máy điều hòa cũng như khu vực tiếp khách và/hoặc ăn uống. Thanh Nhi Homestay có nhà hàng, bếp chung, quầy bar, sân hiên, vườn và tầm nhìn ra vườn.', 12),
(93, 'Mèo Homestay', 7, 'kh-5.jpg', '', 'Nếu có đi đến vùng biển Cam Ranh xinh đẹp thì các bạn có thể ghé Mèo Homestay để nghỉ dưỡng nhé, một trong những homestay tốt nhất tại Cam Ranh. Phòng với thiết kế đơn giản, trẻ trung, chủ yếu được làm bằng gỗ nên trông khá tự nhiên, sạch sẽ, thoáng đãng.', 12),
(94, 'Lost Station Homestay', 7, 'kh-6.jpg', '', 'Lost Station như một điểm dừng chân cho những ai muốn lạc đến một khoảng trời riêng yên tĩnh, lắng đọng. Với gam màu trắng tinh khôi làm chủ đạo, homestay từ trong ra ngoài đều có đủ góc chill hướng biển đẹp tuyệt vời, đồ đạc trong nhà cũng đơn sơ, mộc mạc những mỗi góc homestay đều là một điểm thú vị.', 15),
(95, 'Mountain Lodge, Hà Giang', 6, 'hg-1.jpg', 'Đường 3 tháng 2, Mèo Vạc, Hà Giang.', 'Homestay được mệnh danh là Lữ quán của những lãng khách mộng mơ. Đây là một ngôi nhà cổ có tên là Chúng Pủa giống như một pháo đài với 4 dãy nhà có mái, nối liền tạo thành hình tứ giác.', 15),
(96, 'Dao Lodge', 6, 'hg-2.jpg', 'Nặm Đăn – Quản Bạ – Hà Giang', 'Đây là một homestay Hà Giang mang đậm nét truyền thống của người dân bản địa nơi đây với thiết kế đơn giản, mộc mạc cùng không gian trong nhà rất rộng rãi. Tuy nhiên không vì thế mà homestay thiếu đi những tiện nghi đầy đủ để giúp bạn có một kì nghỉ thật thoải mái.', 15),
(97, 'Auberge de MeoVac', 6, 'hg-3.jpg', 'Thị trấn Mèo Vạc – Hà Giang', 'Theo tiếng người Hmông, Auberge de MeoVac còn có tên khác là Chúng Pủa. Kiến trúc căn nhà độc đáo với những mái ngói âm dương, tường được làm bằng đất, cột nhà bằng gỗ Sa Mộc.', 15),
(98, 'Homestay Bản Tùy', 6, 'hg-4.jpg', 'Bản Tùy – Ngọc Đường – Hà Giang', 'Đây là một homestay dành cho những đoàn du lịch tập thể bởi không gian nghỉ ngơi vô cùng rộng rãi, có chuẩn bị sẵn chăn gối. Điều quan trọng còn là những hoạt động như : câu cá, gặt lúa, leo ruộng bậc thang, tách ngô, dệt vải, lên chợ buôn bán chắc chắn sẽ mang lại cho bạn những kỉ niệm chẳng thể nào quên', 15),
(99, 'Kiki’s House', 6, 'hg-5.jpg', '134B Lý Tự Trọng, thành phố Hà Giang', 'Khác hoàn toàn với những homestay với thiết kế đậm chất ‘’ bản làng ‘’ , Kiki’s House lại là một homestay hiện đại với quầy cafe cùng nhiều tiện ích thư giãn thú vị khác.', 15),
(100, 'BỤI HOMESTAY', 6, 'hg-6.jpg', 'Cổng chào TT Đồng Văn, ngã 3 đi Lũng Cú, Hà Giang.', 'Bụi homestay hút hồn du khách bởi phong cách bình dị, gần gũi với phong cách nhà sàn bản sắc, vừa có nét mộc mạc, cứng cáp của miền núi, lại quyện hòa với sự dịu dàng của miền xuôi.', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `location`
--

CREATE TABLE `location` (
  `id_location` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `location`
--

INSERT INTO `location` (`id_location`, `name`) VALUES
(1, 'Đà Lạt'),
(2, 'Đà Nẵng'),
(3, 'Hội An'),
(4, 'Huế'),
(5, 'Hà Nội'),
(6, 'Hà Giang'),
(7, 'Khánh Hòa'),
(8, 'Ninh Bình'),
(9, 'Nha Trang'),
(10, 'Mộc Châu'),
(11, 'Vũng Tàu '),
(12, 'Sa Pa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_users`, `fullname`, `password`, `email`, `phone_number`, `role`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', NULL, 1),
(14, 'nana', 'b0baee9d279d34fa1dfd71aadb908c3f', 'caomyna2003@gmail.com', '0123456789', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `booking_ibfk_1` (`users_id`),
  ADD KEY `booking_ibfk_2` (`homestay_id`);

--
-- Chỉ mục cho bảng `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`id_homestay`),
  ADD KEY `homestay_ibfk_1` (`location_id`);

--
-- Chỉ mục cho bảng `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `homestay`
--
ALTER TABLE `homestay`
  MODIFY `id_homestay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `location`
--
ALTER TABLE `location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`homestay_id`) REFERENCES `homestay` (`id_homestay`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `homestay`
--
ALTER TABLE `homestay`
  ADD CONSTRAINT `homestay_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`id_location`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
