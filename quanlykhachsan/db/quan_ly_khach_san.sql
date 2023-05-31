-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2022 lúc 07:16 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_khach_san`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_bai_viet` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `id_khach_san` int(10) NOT NULL,
  `ngay_them` date NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id`, `hinh`, `ten_bai_viet`, `noi_dung`, `id_khach_san`, `ngay_them`, `trang_thai`) VALUES
(1, 'deluxe-01.jpg', 'Giới thiệu khách sạn', 'Khi đến thăm Hà Nội, bạn sẽ cảm thấy như đang ở nhà tại Khách sạn Lucy Hotel, nơi có chất lượng tuyệt vời và dịch vụ chu đáo. Chỉ cách những hoạt động thú vị ở trung tâm thành phố khoảng 7 km. Không gian ấm cúng và gần Tòa nhà Keangnam Hà Nội, CUC Gallery, Trung tâm Hội nghị Quốc gia Việt Nam làm cho khách sạn này có một vẻ đẹp quyến rũ đặc biệt.\r\n\r\nHãy tận hưởng hết vô số dịch vụ và tiện nghi không gì sánh được ở khách sạn Hà Nội này. Khách hàng có thể tận hưởng các tiện nghi tại chỗ như dịch vụ phòng 24 giờ, miễn phí wifi tất cả các phòng, quầy lễ tân 24 giờ, giữ hành lý, wifi công cộng.\r\n\r\nKhách sạn rất chú ý đến việc trang bị đầy đủ tiện nghi để đạt được sự thoải mái và tiện lợi nhất. Trong một số phòng, khách hàng có thể thấy tivi màn hình phẳng, cafe hòa tan miễn phí, trà miễn phí, mền điện, nước uống chào đón miễn phí. Trong suốt một ngày, bạn có thể tận hưởng không gian thư giãn của sân golf (trong vòng 3 km). Dù cho lý do của bạn khi đến Hà Nội là gì đi nữa, Khách sạn Ping Hà Nội vẫn là một nơi tuyệt vời cho chuyến nghỉ mát vui vẻ và thú vị.\r\n11', 1, '2021-06-25', 1),
(9, 'banner_5.jpg', 'abc', 'ádasd', 1, '2021-08-08', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_banner` varchar(255) NOT NULL,
  `id_khach_san` int(10) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `ten_banner`, `id_khach_san`, `trang_thai`) VALUES
(2, 'banner_5.jpg', 'Đặt Phòng Cho Kỳ Nghỉ Gia Đình', 1, 1),
(3, 'banner_3.jpg', 'Làm Cho Kỳ Nghỉ Của Bạn Thoải Mái', 1, 1),
(7, 'banenr_4.jpg', 'Nơi Tốt Nhất Để Tận Hưởng Cuộc Sống Của Bạn', 1, 1),
(8, 'img-thumbs-4.jpg', 'Khách sạn', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dat_phong`
--

CREATE TABLE `dat_phong` (
  `id` int(10) NOT NULL,
  `ten_khach_hang` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(11) NOT NULL,
  `CMND` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_phong` int(10) NOT NULL,
  `gia` float NOT NULL,
  `id_phan_tram_km` int(10) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `ngay_den` date NOT NULL,
  `ngay_di` date NOT NULL,
  `nguoi_lon` int(10) NOT NULL,
  `tre_em` int(10) NOT NULL,
  `thanh_tien` float NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dat_phong`
--

INSERT INTO `dat_phong` (`id`, `ten_khach_hang`, `so_dien_thoai`, `CMND`, `email`, `id_phong`, `gia`, `id_phan_tram_km`, `so_luong`, `ngay_den`, `ngay_di`, `nguoi_lon`, `tre_em`, `thanh_tien`, `trang_thai`) VALUES
(38, 'Nguyễn Phương Thuận', '0356121473', '012345678912', '1811060715@hunre.edu.vn', 7, 300000, 1, 1, '2022-06-29', '2022-06-30', 2, 0, 300000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dich_vu_khach_san`
--

CREATE TABLE `dich_vu_khach_san` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_dich_vu` varchar(255) NOT NULL,
  `thong_tin` text NOT NULL,
  `id_khach_san` int(10) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dich_vu_khach_san`
--

INSERT INTO `dich_vu_khach_san` (`id`, `hinh`, `ten_dich_vu`, `thong_tin`, `id_khach_san`, `trang_thai`) VALUES
(1, 'dinh-vu1.jpg', 'Dịch vụ giặt ủi quần áo', 'Dịch vụ giặt ủi áo có ở hầu hết các khách sạn, từ cơ bản đến cao cấp. Đây là dịch vụ được tạo ra nhằm đáp ứng nhu cầu vệ sinh cá nhân và mặc của khách hàng', 1, 1),
(2, 'dinh-vu2.jpg', 'Dịch vụ xe đưa đón sân bay', 'Đây cũng là một trong những dịch vụ thường thấy ở các khách sạn. Dịch vụ xe đưa đón nhằm đáp ứng nhu cầu di chuyển ngày càng cao và mong muốn tạo được trải nghiệm thoải mái nhất cho khách hàng.', 1, 1),
(3, 'dinh-vu3.jpg', 'Nhà hàng', 'Ở những khách sạn cao cấp 4 đến 5 sao, có thể bao gồm khu phức hợp nhà hàng, với nhiều loại thiết kế nhà hàng sang trọng theo các phong cách khác nhau. Đến với dịch vụ nhà hàng du khách có thể đặt cho mình các bữa ăn tự chọn, buffet hoặc các món ăn theo gia đình… với nhiều lựa chọn hương vị ẩm thực khác nhau.', 1, 1),
(4, 'dinh-vu4.jpg', 'Dịch vụ hội họp, văn phòng', 'Đi kèm với nhà hàng thường là các dịch vụ phòng họp, hội trường để tổ chức các sự kiện như sinh nhật, đám cưới, event công ty, hội thảo…\r\nCác phòng họp, sự kiện đi kèm trong khách sạn có quy mô từ nhỏ từ vài chục người đến vài trăm người. Ngoài ra ở đây còn được trang bị bàn ghế, âm thanh, ánh sáng để đảm bảo sự kiện diễn ra tốt đẹp.', 1, 1),
(5, 'dinh-vu5.jpg', 'Quầy bar', 'Quầy bar cũng là một dịch vụ cao cấp thường thấy trong các nhà hàng cao cấp. Tùy theo quy mô của khách sạn mà vị trí cũng như thiết kế quầy bar sẽ khác nhau. Đa phần các quầy bar đều phục vụ thức uống, nhạc,... đáp ứng nhu cầu giải trí, thư giãn của du khách.', 1, 1),
(6, 'dinh-vu6.jpg', 'Dịch vụ Spa', 'Dịch vụ spa chỉ có ở một số khách sạn cao cấp. Để đáp ứng nhu cầu làm đẹp của các chị em phụ nữ, các dịch vụ Spa được mở ra nhiều hơn trong những năm gần đây. Bao gồm: xông hơi, lột mụn, gội đầu ...', 1, 1),
(7, 'dinh-vu7.jpg', 'Fitness center', 'Các phòng tập thể dục đa năng hay các phòng tập gym luôn là nơi được du khách quan tâm. Khi đi công tác hay du lịch nhưng nhiều người vẫn muốn đảm bảo tiến độ tập luyện cho cơ thể mình. Đây là lí do các phòng tập gym ra đời và ngày càng mở rộng.', 1, 1),
(8, 'dinh-vu8.jpg', 'Sân golf và sân tennis', 'Dịch vụ sân golf và sân tennis chỉ dành cho các khách sạn cao cấp. Vì đây là các môn thể thao dành cho giới thượng. Bạn sẽ bắt gặp các sân golf với diện tích lớn tích hợp trong các khu khách sạn, nghỉ dưỡng, biệt thự cao cấp.', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hom_thu`
--

CREATE TABLE `hom_thu` (
  `id` int(10) NOT NULL,
  `ten_khach_hang` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hom_thu`
--

INSERT INTO `hom_thu` (`id`, `ten_khach_hang`, `so_dien_thoai`, `email`, `noi_dung`, `trang_thai`) VALUES
(1, 'Nguyễn Phương Thuận', '0987654321', 'thuan2000@gmail.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing', 1),
(2, 'Lương Thị Thịnh', '0123456', 'adasdasd', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one', 1),
(3, 'Nguyễn Thành Trung', '098765432', 'trung@gmail.com', '	Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_san`
--

CREATE TABLE `khach_san` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_khach_san` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_san`
--

INSERT INTO `khach_san` (`id`, `hinh`, `ten_khach_san`, `so_dien_thoai`, `dia_chi`, `email`, `trang_thai`) VALUES
(1, 'Picture1.png', 'Lucy Hotel', '0356121473', 'Phù Lỗ - Sóc Sơn - Hà Nội', 'thuan2000@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_khuyen_mai` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `phan_tram_km` float NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `id_khach_san` int(10) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id`, `hinh`, `ten_khuyen_mai`, `noi_dung`, `phan_tram_km`, `ngay_bat_dau`, `ngay_ket_thuc`, `id_khach_san`, `trang_thai`) VALUES
(1, '1.jpg', 'giảm 50%', 'ANNHIEUNHE', 50, '2022-06-18', '2022-08-15', 1, 1),
(2, '2.jpg', 'giảm 20%', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled', 20, '2021-07-02', '2021-07-14', 1, 1),
(3, '5.jpg', 'Giảm 25%', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled', 25, '2021-07-02', '2021-07-17', 1, 0),
(4, 'thuan.jpg', '', '111111', 111, '2022-06-23', '2022-06-23', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_nguoi_dung`
--

CREATE TABLE `loai_nguoi_dung` (
  `id` int(10) NOT NULL,
  `ten_loai_nguoi_dung` varchar(255) NOT NULL,
  `id_khach_san` int(10) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`id`, `ten_loai_nguoi_dung`, `id_khach_san`, `trang_thai`) VALUES
(1, 'Quản lý', 1, 1),
(2, 'Nhân viên lễ tân', 1, 1),
(3, 'Nhân viên vệ sinh', 1, 1),
(4, 'Kế toán', 1, 1),
(5, 'Bảo vệ', 1, 1),
(6, 'Đầu bếp', 1, 1),
(7, 'Nhân viên phụ vụ', 0, 1),
(8, 'Nhân viên phục vụ', 1, 1),
(9, 'Nhân viên kinh doanh tiếp thị', 1, 1),
(10, 'Nhân viên kỹ thuật', 1, 1),
(11, 'Nhân viên IT', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_loai_phong` varchar(255) NOT NULL,
  `id_khach_san` int(10) NOT NULL,
  `thong_tin` text NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_phong`
--

INSERT INTO `loai_phong` (`id`, `hinh`, `ten_loai_phong`, `id_khach_san`, `thong_tin`, `trang_thai`) VALUES
(1, 'STANDARD-01.png', 'Phòng Standard (STD)', 1, 'Phòng standard (viết tắt là STD) là loại phòng tiêu chuẩn, đơn giản nhất trong các khách sạn hiện nay. Đây là loại phòng có diện tích nhỏ, thường được đặt ở tầng thấp nhất và không có view hoặc view không được đẹp. Trang thiết bị của phòng standard cũng được khách sạn giảm tối thiểu. Chính vì vậy, giá phòng standard nằm ở mức thấp nhất trong các loại phòng khách sạn.', 1),
(2, 'img-1.jpg', 'Phòng Superior (SUP)', 1, 'Phòng superior cao cấp hơn phòng standard với diện tích lớn hơn (từ 20m2 trở lên) bao gồm 1-2 giường, tầm nhìn view cũng đẹp hơn. Trang thiết bị của phòng được khách sạn đầu tư hiện đại. Vì chất lượng tốt hơn nên mức giá cho phòng superior cũng sẽ cao hơn phòng standard.', 1),
(3, 'img-2.jpg', 'Phòng Deluxe (DLX)', 1, 'Phòng deluxe thường ở tầng trên cao với view đẹp (hướng ra núi, biển… ). Diện tích của loại phòng này rộng rãi hơn superior và được đầu tư trang thiết bị cao cấp như tivi, tủ lạnh, bồn rửa mặt cao cấp… Đương nhiên, mức giá niêm yết dành cho phòng deluxe sẽ cao hơn superior.', 1),
(4, 'img-4.jpg', 'Phòng Suite (SUT)', 1, 'Phòng suite là loại phòng cao cấp nhất khách sạn, được đặt ở tầng cao nhất, nơi có không gian thoáng đãng và không khí trong lành. Với diện tích từ 60 – 120m2, phòng suite thường bao gồm 1 phòng khách, 1 phòng ngủ riêng biệt, cửa sổ và ban công để khách ngắm phong cảnh.\r\n\r\nTrang thiết bị của phòng cũng được khách sạn đầu tư tối đa: điều hòa, ti vi, loa… cùng với bàn làm việc và quầy bar nhỏ. Phòng suite còn đi kèm với những dịch vụ đặc biệt: quản gia phục vụ 24/24, xe đưa đón tận nơi, được phục vụ những món ăn đặc biệt.', 1),
(5, 'junior-suite.jpg', 'Phòng Junior Suite', 1, 'Phòng junior suite có diện tích khoảng 60-70m2 với view đẹp hướng núi, hướng biển, hướng phố. Phòng có ban công riêng với ghế tắm nắng, bồn tắm jacuzzi, sofa, bàn làm việc, khu vực club lounge riêng biệt…', 1),
(6, 'Executive Suite-01.jpg', 'Phòng Executive Suite', 1, 'Đây là loại phòng cao cấp với diện tích lên đến 80m2. Phòng được trang bị cả bồn tắm đứng và bồn tắm nằm, bàn làm việc cỡ lớn, điện thoại quốc tế, hồ bơi ngoài trời, phòng khách và khu vực bếp riêng biệt…\r\n\r\nNgoài ra, phòng khách sạn còn được chia theo loại giường ngủ:\r\n\r\nSingle bed room: phòng có 1 giường cho 1 người ngủ\r\nTwin bed room: phòng có 2 giường cho 2 người ngủ\r\nDouble bed room: phòng có 1 giường lớn cho 2 người ngủ\r\nTriple bed room: phòng 3 giường nhỏ hoặc 1 giường lớn + 1 giường nhỏ cho 3 người ngủ', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(10) NOT NULL,
  `ten_nguoi_dung` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `id_loai_nguoi_dung` int(10) NOT NULL,
  `so_dien_thoai` varchar(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `ten_nguoi_dung`, `ngay_sinh`, `gioi_tinh`, `id_loai_nguoi_dung`, `so_dien_thoai`, `dia_chi`, `email`, `ten_dang_nhap`, `password`, `trang_thai`) VALUES
(1, 'Nguyễn Phương Thuận', '2000-08-01', 0, 1, '0356121473', 'Hà Nội', 'thuan2000@gmail.com', 'thuan', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(5, 'Đặng Vũ Lưu', '2022-05-30', 0, 3, '0913478612', 'Hà Tĩnh', 'Liu@gmail.com', 'liu', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(6, 'Nguyễn Thành Trung', '2022-06-23', 0, 11, '0356121473', 'Thường Tín', 'trung@gmail.com', 'trung', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(7, 'Phùng Thị Hạnh', '2000-01-01', 1, 8, '0913478612', 'Hà Nội', 'hanh@gmail.com', 'hanh', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(8, 'Lương Thị Thịnh', '2000-11-11', 1, 2, '0913478612', 'Hà Nội', 'thinh@gmail.com', 'thinh', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(9, 'Nguyễn Khải Ca', '1981-01-01', 0, 5, '0913478612', 'Nam Định', 'ca@gmail.com', 'khaica', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(10, 'Nguyễn Hùng Cường', '1989-01-01', 0, 5, '0913478612', 'HÀ Nội', 'cuong@gmail.com', 'cuong', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(11, 'Nguyễn Thịnh Cường', '1990-01-01', 0, 10, '0913478612', 'Hà Nội', 'thinhcuong@gmail.com', 'thinhcuong', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(12, 'Nguyễn Thụy Du', '1994-01-01', 0, 6, '0913478612', 'Hà Nội', 'du@gmail.com', 'du', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_phong` varchar(255) NOT NULL,
  `id_loai_phong` int(10) NOT NULL,
  `gia` float NOT NULL,
  `so_nguoi` int(11) NOT NULL,
  `dien_tich` varchar(10) NOT NULL,
  `loai_giuong` varchar(255) NOT NULL,
  `thong_tin` text NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `hinh`, `ten_phong`, `id_loai_phong`, `gia`, `so_nguoi`, `dien_tich`, `loai_giuong`, `thong_tin`, `trang_thai`) VALUES
(1, 'STANDARD-01.png', 'STANDARD-01', 1, 600000, 3, '15m2', 'Giường cỡ 1.6m.', 'Tủ đầu giường + đèn ngủ\r\nLCD Tivi 32 inch.\r\nBàn làm việc + ghế.\r\nGương trang điểm.\r\nTủ quần áo.\r\nBàn nước.\r\nĐiện thoại nội bộ.\r\nTủ lạnh.\r\nMáy lạnh.\r\nMáy sấy tóc, Bình đun nước siêu tốc, Bàn ủi (Gọi Lễ tân). \r\nDịch vụ giặt ủi.', 2),
(2, 'STANDARD-02.png', 'STANDARD-02', 1, 600000, 3, '15m2', 'Giường cỡ 1.6m.', 'Giường cỡ 1.6m.\r\nTủ đầu giường + đèn ngủ\r\nLCD Tivi 32 inch.\r\nBàn làm việc + ghế.\r\nGương trang điểm.\r\nTủ quần áo.\r\nBàn nước.\r\nĐiện thoại nội bộ.\r\nTủ lạnh.\r\nMáy lạnh.\r\nMáy sấy tóc, Bình đun nước siêu tốc, Bàn ủi (Gọi Lễ tân). \r\nDịch vụ giặt ủi.', 2),
(3, 'STANDARD-03.png', 'STANDARD-03', 1, 600000, 2, '15m2', 'Giường cỡ 1.6m.', 'Giường cỡ 1.6m.\r\nTủ đầu giường + đèn ngủ\r\nLCD Tivi 32 inch.\r\nBàn làm việc + ghế.\r\nGương trang điểm.\r\nTủ quần áo.\r\nBàn nước.\r\nĐiện thoại nội bộ.\r\nTủ lạnh.\r\nMáy lạnh.\r\nMáy sấy tóc, Bình đun nước siêu tốc, Bàn ủi (Gọi Lễ tân). \r\nDịch vụ giặt ủi.', 2),
(4, 'STANDARD-04.png', 'STANDARD-04', 1, 600000, 2, '15m2', 'Giường cỡ 1.6m.', 'Giường cỡ 1.6m.\r\nTủ đầu giường + đèn ngủ\r\nLCD Tivi 32 inch.\r\nBàn làm việc + ghế.\r\nGương trang điểm.\r\nTủ quần áo.\r\nBàn nước.\r\nĐiện thoại nội bộ.\r\nTủ lạnh.\r\nMáy lạnh.\r\nMáy sấy tóc, Bình đun nước siêu tốc, Bàn ủi (Gọi Lễ tân). \r\nDịch vụ giặt ủi.', 2),
(7, 'STANDARD-05.png', 'STANDARD-05', 1, 600000, 1, '13m2', 'Giường cỡ 1.6m.', 'Giường cỡ 1.6m.\r\nTủ đầu giường + đèn ngủ\r\nLCD Tivi 32 inch.\r\nBàn làm việc + ghế.\r\nGương trang điểm.\r\nTủ quần áo.\r\nBàn nước.\r\nĐiện thoại nội bộ.\r\nTủ lạnh.\r\nMáy lạnh.\r\nMáy sấy tóc, Bình đun nước siêu tốc, Bàn ủi (Gọi Lễ tân). \r\nDịch vụ giặt ủi.', 1),
(8, 'Superior-01.jpg', 'Superior-01', 2, 1200000, 3, '30m2', '01 giường cỡ King hoặc 2 giường đơn', 'Trà, cà phê, 2 nước khoáng trong phòng\r\n\r\nĐồ uống chào mừng khi nhận phòng\r\n\r\nBữa sáng tự chọn hàng ngày\r\n\r\nWifi miễn phí trong phòng\r\n\r\nBổ sung sử dụng hồ bơi\r\n\r\nMiễn phí cho trẻ em dưới 6 tuổi.\r\n\r\nCần có số thẻ tín dụng để đảm bảo đặt phòng\r\n\r\nKì hạn và điều kiện\r\n\r\nĐặt phòng này là không hoàn lại và không thể sửa đổi hoặc sửa đổi. Không đến khách sạn sẽ được coi là không có mặt và không hoàn lại tiền sẽ được đưa ra', 2),
(9, 'Superior-02.jpg', 'Superior-02', 2, 1200000, 3, '30m2', '01 giường cỡ King hoặc 2 giường đơn', 'Trà, cà phê, 2 nước khoáng trong phòng Đồ uống chào mừng khi nhận phòng Bữa sáng tự chọn hàng ngày Wifi miễn phí trong phòng Bổ sung sử dụng hồ bơi Miễn phí cho trẻ em dưới 6 tuổi. Cần có số thẻ tín dụng để đảm bảo đặt phòng Kì hạn và điều kiện Đặt phòng này là không hoàn lại và không thể sửa đổi hoặc sửa đổi. Không đến khách sạn sẽ được coi là không có mặt và không hoàn lại tiền sẽ được đưa ra', 2),
(10, 'Superior-03.jpg', 'Superior-03', 2, 1200000, 3, '30m2', '01 giường cỡ King hoặc 2 giường đơn', 'Trà, cà phê, 2 nước khoáng trong phòng Đồ uống chào mừng khi nhận phòng Bữa sáng tự chọn hàng ngày Wifi miễn phí trong phòng Bổ sung sử dụng hồ bơi Miễn phí cho trẻ em dưới 6 tuổi. Cần có số thẻ tín dụng để đảm bảo đặt phòng Kì hạn và điều kiện Đặt phòng này là không hoàn lại và không thể sửa đổi hoặc sửa đổi. Không đến khách sạn sẽ được coi là không có mặt và không hoàn lại tiền sẽ được đưa ra', 2),
(11, 'Superior-05.jpg', 'Superior-04', 2, 1200000, 2, '30m2', ' 2 giường đơn', 'Trà, cà phê, 2 nước khoáng trong phòng Đồ uống chào mừng khi nhận phòng Bữa sáng tự chọn hàng ngày Wifi miễn phí trong phòng Bổ sung sử dụng hồ bơi Miễn phí cho trẻ em dưới 6 tuổi. Cần có số thẻ tín dụng để đảm bảo đặt phòng Kì hạn và điều kiện Đặt phòng này là không hoàn lại và không thể sửa đổi hoặc sửa đổi. Không đến khách sạn sẽ được coi là không có mặt và không hoàn lại tiền sẽ được đưa ra', 2),
(12, 'Superior-05.jpg', 'Superior-05', 2, 1200000, 1, '30m2', '01 giường cỡ King', 'Trà, cà phê, 2 nước khoáng trong phòng Đồ uống chào mừng khi nhận phòng Bữa sáng tự chọn hàng ngày Wifi miễn phí trong phòng Bổ sung sử dụng hồ bơi Miễn phí cho trẻ em dưới 6 tuổi. Cần có số thẻ tín dụng để đảm bảo đặt phòng Kì hạn và điều kiện Đặt phòng này là không hoàn lại và không thể sửa đổi hoặc sửa đổi. Không đến khách sạn sẽ được coi là không có mặt và không hoàn lại tiền sẽ được đưa ra', 2),
(13, 'deluxe-01.jpg', 'Deluxe giường đôi (Deluxe Double)', 3, 600000, 2, '45m2', '1 giường đôi', 'Hướng vườn\r\nCó ban công/sân hiên\r\nPhòng rộng rãi\r\nPhòng tắm vòi sen & bồn tắm\r\nBữa sáng miễn phí\r\nWifi miễn phí', 2),
(14, 'Deluxe-Triple-Room-3.jpg', 'Deluxe Triple Room', 3, 954000, 3, '30m2', '1 giường đơn và 1 giường đôi', 'Ban công, sân hiên\r\nPhòng tắm vòi sen + bồn tắm\r\nMiễn phí 3 suất ăn sáng\r\nĐặt không cần thẻ tín dụng\r\nThanh toán tại nơi ở\r\nWifi miễn phí', 2),
(15, '_mg_1213_ok.jpg', 'Phòng Deluxe King (Deluxe King Room)', 3, 1081000, 2, '36m2', '1 giường lớn', 'Hướng vườn\r\nPhòng tắm có bồn và vòi sen\r\nBữa sáng miễn phí\r\nNước uống chào đón miễn phí\r\nWifi miễn phí', 2),
(16, '3102deluxe-twin-1.jpg', 'Deluxe 2 giường (Deluxe Twin)', 3, 1081000, 2, '36m2', '2 giường đơn', 'Hướng thành phố\r\nPhòng tắm có bồn và vòi sen\r\nBữa sáng miễn phí\r\nNước uống chào đón miễn phí\r\nWifi miễn phí', 2),
(17, 'deluxe-05.jpg', 'Phòng Grande Deluxe 2 giường (Grand Deluxe Twin Room)', 3, 1389000, 2, '36m2', '2 giường đơn', 'Hướng vườn\r\nPhòng tắm có bồn và vòi sen\r\nBữa sáng miễn phí\r\nNước uống chào đón miễn phí\r\nWifi miễn phí', 2),
(18, 'phong1.jpg', 'Executive Suite', 4, 1698000, 2, '81m2', '1 giường lớn', 'Hướng thành phố\r\nPhòng tắm có bồn và vòi sen\r\nBữa sáng miễn phí\r\nNước uống chào đón miễn phí\r\nWifi miễn ph', 2),
(19, 'colonial.jpg', 'Colonial Suite', 4, 11945000, 2, '46m2', '1 giường đôi', 'Hướng vườn\r\nCó ban công, sân hiên\r\nPhòng tắm có vòi sen và bồn tắm\r\nWifi miễn phí\r\nĐỗ xe miễn phí\r\nĐồ ăn nhanh miễn phí\r\nNước uống chào đón miễn phí\r\nPhòng Gym miễn phí\r\nGiỏ trái cây miễn phí', 2),
(20, 'ex-03.png', 'Resident Suite', 4, 22340000, 2, '72m2', '1 giường đôi', 'Hướng thiên nhiên\r\nCó ban công, sân hiên\r\nPhòng tắm có vòi sen và bồn tắm\r\nWifi miễn phí\r\nĐỗ xe miễn phí\r\nĐồ ăn nhanh miễn phí\r\nNước uống chào đón miễn phí\r\nPhòng Gym miễn phí\r\nGiỏ trái cây miễn phí', 2),
(21, 'junior-suite.jpg', 'Phòng Junior Suite Hướng phố (Junior Suite City View)', 5, 983000, 2, '26m2', '1 giường đôi lớn', 'Hướng thành phố\r\nCó ban công/sân hiên\r\nPhòng tắm vòi sen + bồn tắm\r\nGiảm giá đồ ăn\r\nGiảm giá dùng bữa\r\nGiảm giá đồ ăn uống\r\nGiảm giá Spa\r\nNhận phòng sớm trả phòng trễ', 2),
(22, 'Executive Suite-01.jpg', 'Executive Suite-01', 6, 1698000, 2, '81m2', '1 giường lớn', 'Hướng thành phố\r\nPhòng tắm có bồn và vòi sen\r\nBữa sáng miễn phí\r\nNước uống chào đón miễn phí\r\nWifi miễn phí', 2),
(23, 'Executive Suite-02.jpg', 'Executive Suite-02', 6, 1727000, 2, '86m2', '1 giường đôi', 'Phòng rộng rãi\r\nHướng vườn\r\nBan công/sân hiên\r\nVòi sen + bồn tắm\r\nMiễn phí 2 suất ăn sáng\r\nNâng cấp lên loại phòng cao hơn\r\nWifi miễn phí', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(10) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `ten_tin_tuc` varchar(255) NOT NULL,
  `id_khach_san` int(10) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_them` date NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `hinh`, `ten_tin_tuc`, `id_khach_san`, `noi_dung`, `ngay_them`, `trang_thai`) VALUES
(1, 'colonial.jpg', '8 Du lịchĐiểm đếnQuốc tếThứ bảy, 25/6/2022, 12:10 (GMT+7) Tranh cãi quanh việc giữ ghế nằm cạnh hồ bơi', 1, 'Nhiều người có thói quen để khăn tắm trên các ghế dài cạnh hồ bơi nhằm giữ chỗ, dù không dùng ngay lập tức.\r\n\r\nAmana Proctor, một nữ du khách Anh đang đi nghỉ hè tại Tenerife, Tây Ban Nha vô tình gặp tình huống gây tranh cãi ở hồ bơi khách sạn. Theo đó, các nhân viên khách sạn đã đi thu những chiếc khăn tắm được đặt trên các ghế nằm cạnh hồ bơi.\r\nMột vài vị khách đã chạy tới yêu cầu nhân viên trả lại khăn về vị trí cũ. Đây là những chiếc khăn được họ \"đặt gạch\" để giữ ghế, đợi khi nào có nhu cầu sử dụng hồ bơi sẽ tới nằm. Tuy nhiên, yêu cầu này đã bị từ chối vì khách sạn có quy định không ai được phép giữ ghế trước 10h.\r\n\r\nVideo khi lại câu chuyện này thu hút gần 4 triệu lượt xem chỉ sau 4 ngày đăng. Hầu hết đồng ý việc giữ chỗ kém văn minh vì sẽ chiếm chỗ của những người thực sự cần sử dụng giường nằm sau khi bơi, trong khi những người giữ chỗ lại không hề sử dụng đến. Số khác nói rằng họ muốn có chỗ ngồi luôn khi đi tắm mà không phải chờ đợi và việc họ đến sớm giữ chỗ không có gì sai trái.\r\n\r\nHành động giữ chỗ dù không sử dụng luôn ghế nằm ở hồ bơi được cho là điều phổ biến với du khách Anh và Đức. Tuần trước, nữ du khách Anh Julie Larsson cũng chia sẻ về hình ảnh các du khách chạy tán loạn để tranh những chiếc ghế nằm này vào lúc 6h tại một khách sạn ở Mallorca, Tây Ban Nha. Trước đó, một người đàn ông tiết lộ rằng anh ta đã gãy ngón chân trong lúc chạy tranh chỗ.\r\n\r\nĐể giải quyết vấn đề này, hãng lữ hành Thomas Cook, Anh đã mở một ứng dụng cho phép khách đi du lịch đặt trước cả ghế dài để nằm này. Tuy nhiên không có nhiều hãng lữ hành có dịch vụ này, và việc tranh ghế vẫn là cuộc chiến không hồi kết của du khách.', '2021-08-07', 1),
(2, 'tintuc1.png', 'Nhiều khách sạn không còn hào hứng với KOL', 1, 'Việc để người có tầm ảnh hưởng ở miễn phí và đổi lại là các bài giới thiệu trên trang của họ đang không còn hấp dẫn các khách sạn.\r\n\r\nNgành du lịch thế giới dần trở lại như trước dịch, những người đam mê du lịch bắt đầu đi nhiều hơn. Các KOL (người có tầm ảnh hưởng trên mạng xã hội) cũng bắt đầu quay lại công việc của họ.\r\n\r\nĐó là một tin vui đối với nhiều khách sạn trên thế giới, trong đó có Langham. Khách sạn này nằm trên đại lộ số 5 ở New York, Mỹ. \"90% những người chúng tôi làm việc cùng thật tuyệt vời. Họ chăm chỉ và nghiêm túc, vì đây là công việc kiếm sống của họ. Và họ đã làm rất tốt\", Louise O\'Brien, Giám đốc quan hệ công chúng khu vực châu Mỹ tại Langham Hospitality Group, cho biết.\r\nNhưng không phải tất cả khách sạn đều có chung sự nhiệt tình giống O\'Brien. Gail Behr, chủ sở hữu khách sạn Dorp ở Cape Town, Nam Phi là đại diện ở phía đối lập. Mỗi tuần, cô nhận được 5-6 lời đề nghị từ những người có tầm ảnh hưởng muốn ở miễn phí tại khách sạn. Đổi lại, họ sẽ đăng bài, ảnh quảng bá cho Dorp. \"Nhưng tạo dáng trong các bộ trang phục gợi cảm, hay thậm chí không mặc gì trong khách sạn thực sự không có tác dụng gì với chúng tôi. Họ (các khách hàng giống KOL) không phải là đối tượng mà chúng tôi hướng tới\", cô giải thích.\r\n\r\nTrên thực tế, khách sạn của cô hướng tới không gian ấm áp, nội thất được lựa chọn cẩn thận. Thậm chí, theo các miêu tả của chính người chủ, nơi đây mang phong cách \"đôi chút kỳ quặc và lỗi thời\". Vì vậy, Dorp không muốn mời các KOL tới khách sạn mình, đăng các bức ảnh trong trang phục gợi cảm lên mạng, và để các vị khách thực sự có ngoại hình không đẹp bằng cảm thấy ngại ngùng. \"Tôi không muốn ai đó (khách hàng) viết thư và nói rằng họ thừa cân, và họ không thể có được những bức ảnh đẹp như cách các KOL đang quảng cáo\", Gail Behr nói.\r\n\r\nRichard Hanlon, chủ nhân của Pháo đài Bujera hoành tráng ở Udaipur, Ấn Độ, có quan điểm tương tự. Anh cho biết thường nhận được các yêu cầu kỳ lạ từ những KOL này. Có người muốn ở 5 phòng miễn phí trong ba đêm, thêm dịch vụ đưa đón sân bay và rượu miễn phí, tất cả chỉ đổi lại là khách sẽ được xuất hiện trên trang cá nhân của họ. Và đây là điều không khiến Hanlon hứng thú.\r\n\r\n\"Nên có một bảng xếp hạng dành cho họ - những người có tầm ảnh hưởng trên mạng xã hội trong lĩnh vực chuyên đi review khách sạn\", Hanlon nói. Anh cũng nói đến việc không ít người là KOL \"giả\", nghĩa là họ mua lượt thích và theo dõi trên mạng, thay vì có được chúng một cách thực lực.\r\n\r\nBên cạnh đó, những người chủ khách sạn như Hanlon và Behr lại rất chào đón các nhà báo, biên tập đến ở. Họ là những người viết những bài giới thiệu về khách sạn một cách công tâm, khen - chê rõ ràng. Và trên hết, họ tự bỏ tiền thuê phòng và trải nghiệm dịch vụ thực tế để viết bài, thay vì muốn ở miễn phí.\r\n\r\nJessica Wright, một KOL nổi tiếng trên Instagram cũng đồng tình với quan điểm trên. \"Điều đầu tiên tôi nói với những người muốn trở thành KOLs chính là không nên xin ở miễn phí. Nếu bạn không mất tiền, bạn sẽ không thể cung cấp các thông tin thực tế, chính xác cho người đọc\", cô nói. Wright cho rằng nhiều người đã lợi dụng thuật ngữ KOLs để \"ăn bám\" các khách sạn, và mang tiếng xấu cho những người làm nghề chân chính.\r\nNina Zadeh, cũng là một người có tầm ảnh hưởng, cho biết những người muốn bước chân vào nghề review khách sạn nên có cái nhìn chính xác về công việc mình làm. Trên thực tế, những gì bạn thấy là các bức hình đẹp của họ ở các nơi sang trọng. Nhưng thực tế, để có được các bức ảnh quảng cáo đó, họ phải làm việc cật lực và mệt mỏi. Một buổi chụp hình có thể kéo dài, và KOL phải làm việc từ sáng sớm để có bức ảnh bình minh hoàn hảo. Họ cũng phải làm tới đêm muộn, nếu muốn có bức ảnh nhiều sao đẹp đẽ ở nơi mình đang ở.', '2021-08-07', 1),
(3, 'tintuc2.png', 'Westin Hotels & Resorts kết hợp Strava khởi động thử thách chạy bộ', 1, 'Thử thách chạy bộ \"RunWestin Challenge\" kéo dài một tháng, bắt đầu từ ngày 1/6 và kết thúc vào 23h59, ngày 30/6.\r\n\r\nWestin Hotels & Resorts - một trong 30 thương hiệu khách sạn của Marriott Bonvoy thông báo hợp tác với Strava - nền tảng mạng kết nối dành cho vận động viên và cộng đồng luyện tập thể thao lớn nhất thế giới. Theo đó, 500 thành viên Marriott Bonvoy sẽ có cơ hội nhận 40.000 điểm thưởng từ Marriott Bonvoy nếu hoàn thành thử thách chạy bộ kéo dài trong một tháng mang tên \"RunWestin Challenge\" qua ứng dụng Strava. Đây là chương trình hợp tác toàn cầu nhằm khích lệ các hoạt động thể chất và cải thiện sức khỏe.\r\nCác thành viên của Marriott Bonvoy khi tham gia thử thách phải hoàn thành 10 giờ hoạt động thể chất như: chạy bộ, đi bộ, đạp xe, chạy xe lăn và đi bộ leo núi trong tháng 6. Thử thách 10 giờ vận động thể chất này được xây dựng dựa trên lời khuyên của Hiệp hội Tim mạch Mỹ, mỗi người cần hoạt động thể chất trong vòng ít nhất 150 phút, tương đương khoảng 2,5 giờ mỗi tuần. Khi hoàn thành thử thách vào cuối tháng, 500 thành viên tham dự sẽ được lựa chọn ngẫu nhiên để nhận về 40.000 điểm thưởng Marriott Bonvoy mỗi người.\r\n\r\nThành viên Marriott Bonvoy có thể đăng ký tham gia thử thách từ ngày 25/5 qua ứng dụng Strava. Thử thách sẽ được bắt đầu từ ngày 1/6 và kết thúc vào 23h59 ngày 30/6 theo khung giờ địa phương của người tham dự. Thành viên có thể đăng ký vào bất cứ ngày nào trong tháng 6 và hoàn thành 10 giờ vận động thể chất để có cơ hội nhận được 40.000 điểm thưởng.\r\n\r\nWestin là một trong những thương hiệu hàng đầu trong ngành khách sạn tập trung vào lĩnh vực sức khoẻ, đã đồng hành cùng \"Ngày chạy bộ thế giới\" trong hơn 5 năm nhằm truyền tải thông điệp khuyến khích khách du lịch không ngừng vận động trong chuyến đi của mình. \"Có giấc ngủ tốt, ăn uống ngon miệng, vận động tích cực, tinh thần phấn chấn, làm việc hiệu quả và vui chơi thoả thích\" là 6 trụ cột của trạng thái an lạc mà Westin muốn mang đến cho du khách khi đồng hành cùng thương hiệu trong chuyến đi. Được phát triển trên trụ cột \"vận động tích cực\", lần hợp tác này cùng Strava là bàn đạp giúp Westin củng cố tinh thần tiên phong của thương hiệu trong mảng hoạt động này.\r\n\r\n\"Triết lý hoạt động của Westin vẫn luôn được khởi nguồn từ tinh thần khuyến khích khách hàng duy trì hoặc nâng cao trạng thái an lạc về cả thể chất và tinh thần khi đi du lịch, để họ có thể rời đi với trạng thái tốt hơn lúc mới đến\", Giám đốc Thương hiệu toàn cầu của Westin Hotels & Resorts và Phó Chủ tịch nhóm Jennifer Connell - đại diện thương hiệu cao cấp Marriott International chia sẻ.\r\n\r\nKết hợp triết lý này cùng nguồn cảm hứng \"vận động tích cực\", quan hệ hợp tác đặc biệt giữa Westin và Strava được thiết lập nhằm mục đích khuyến khích cộng đồng yêu thể thao và thành viên Marriott Bonvoy đặt sức khoẻ làm ưu tiên hàng đầu, và họ cũng sẽ nhận được những phần thưởng khi thực hiện điều đó.\r\n\r\nDavid Lorsch, Giám đốc Doanh thu của Strava cho biết: \"Chúng tôi rất vui khi hưởng ứng \'Ngày chạy bộ thế giới\' cùng Westin và truyền cảm hứng cho các thành viên của Marriott Bonvoy trên toàn thế giới tích cực tập luyện thông qua thử thách cùng Strava trong tháng 6 này\".\r\nWestin Hotels & Resorts\r\n\r\nWestin Hotels & Resorts là một trong những thương hiệu hàng đầu trong ngành khách sạn tập trung vào lĩnh vực sức khoẻ trong hơn một thập kỷ vừa qua, khuyến khích khách du lịch không ngừng vận động trong chuyến đi của mình. Tại hơn 230 khách sạn, khu nghỉ trên gần 40 quốc gia và vùng lãnh thổ, khách hàng được trải nghiệm dịch vụ chăm sóc sức khoẻ đạt giải thưởng mang tinh thần đặc trưng của thương hiệu như: Heavenly Bed, hệ thống thiết bị tập luyện TRX tại WestinWorkout Fitness Studio, thực đơn dinh dưỡng Eat Well và nhiều hơn nữa.\r\n\r\nWestin tự hào khi tham gia chương trình Marriott Bonvoy, chương trình du lịch đạt giải thưởng của Marriott International. Chương trình mang đến cho khách hàng rất nhiều lựa chọn thương hiệu khách sạn trên toàn thế giới, những trải nghiệm đặc quyền tại Marriott Bonvoy Moments và nhiều quyền lợi như đêm nghỉ miễn phí và trạng thái thành viên hạng Elite. Để đăng ký miễn phí hoặc lấy thêm thông tin chi tiết, truy cập marriottbonvoy.com.\r\n\r\nMarriott Bonvoy\r\n\r\nMarriott Bonvoy là chương trình du lịch từng đoạt giải thưởng của Marriott International, mang những kỳ nghỉ mở mang trải nghiệm tại khắp thế giới tới thành viên. Danh mục 30 thương hiệu khách sạn của Marriott Bonvoy cung cấp các dịch vụ lưu trú đẳng cấp tại các điểm đến hàng đầu thế giới. Khách hàng sẽ được nhận điểm thưởng khi lưu trú tại các khách sạn, khu nghỉ dưỡng thuộc tập đoàn, bao gồm các khu nghỉ trọn gói, thuê căn hộ cao cấp; hoặc khi thanh toán bằng thẻ tín dụng Marriott Bonvoy đồng ban hành bởi tập đoàn và đối tác.\r\n\r\nThành viên có thể quy đổi điểm thưởng thành các đêm nghỉ khách sạn hoặc trải nghiệm những sự kiện đặc biệt từ chương trình Marriott Bonvoy Moments hay chuyển đổi thành vé máy bay hoặc các sản phẩm cao cấp từ đối tác qua chương trình Marriott Bonvoy Boutiques. Để đăng ký miễn phí hoặc lấy thêm thông tin chi tiết về Marriott Bonvoy, truy cập marriottbonvoy.com.\r\n\r\nStrava\r\n\r\nStrava là nền tảng mạng xã hội hàng đầu dành cho các vận động viên và cộng đồng chơi thể thao lớn nhất thế giới với hơn 99 triệu vận động viên. Strava mang đến cho các vận động viên những cách đơn giản, thú vị để duy trì động lực và cạnh tranh với chính họ và những người khác mà không cần ở cùng một địa điểm hay thời gian. Tất cả vận động viên đều có thể tham gia cùng Strava bất kể họ sống ở đâu, tham gia môn thể thao nào, hoặc sử dụng thiết bị nào. Tham gia cộng đồng và trải nghiệm tối đa môn thể thao của bạn với Strava.', '2022-06-22', 1),
(4, 'junior-suite.jpg', ' Kinh doanhBất động sảnThứ hai, 6/6/2022, 08:30 (GMT+7) IHG hợp tác quản lý vận hành 3 khách sạn tại Hoian d’Or', 1, 'QUẢNG NAMIHG Hotels & Resorts sẽ trở thành đơn vị quản lý hệ thống 3 khách sạn của dự án Hoian d’Or, sau lễ ký kết hợp tác vào ngày 31/5.\r\n\r\nLễ ký kết hợp tác giữa Công ty TNHH Du lịch sinh thái Cồn Bắp (chủ đầu tư dự án Hoian d’Or) và tập đoàn khách sạn IHG đã diễn ra vào ngày 31/5 tại Hội An. Đây là lần đầu tiên, hai bên thỏa thuận hợp tác đầu tư và phát triển dự án khách sạn nghỉ dưỡng.\r\nIHG Hotels & Resorts hiện quản lý trên 6.000 khách sạn ở hơn 100 quốc gia. Hệ thống khách sạn quốc tế mà IHG đang sở hữu gồm 17 thương hiệu nổi tiếng toàn cầu.\r\n\r\nTheo đại diện IHG Hotels & Resorts, sự kiện này thể hiện dấu mốc quan trọng của tập đoàn tại miền Trung Việt Nam, hướng đến mục tiêu đem đến cho du khách trải nghiệm lưu trú mới mẻ ở thành phố di sản Hội An.\r\n\r\nCụ thể, IHG được chỉ định làm đơn vị quản lý vận hành ba khách sạn nằm trong quần thể dự án Hoian d’Or gồm: Hotel Indigo Hoi An Ancient Town (175 phòng), Crowne Plaza Hoi An Ancient Town (300 phòng) và Holiday Inn Express Hoi An Ancient Town (193 phòng).\r\n\r\nBa dự án khách sạn kể trên sở hữu vị trí thuận tiện di chuyển đến các điểm tham quan nổi tiếng của Hội An, cách sân bay quốc tế Đà Nẵng chỉ 35 phút di chuyển. Tại đây, nhiều tiện ích về ăn uống, vui chơi giải trí, mua sắm được tích hợp để phục vụ nhu cầu của du khách trong nước và quốc tế.\r\n\r\nTrong khuôn viên khách sạn Crowne Plaza Hoi An Ancient Town là khu trung tâm hội nghị với diện tích hơn 2.000m2, được kỳ vọng trở thành điểm đến cho các tour Mice (du lịch kết hợp hội nghị, hội thảo, triển lãm, tổ chức sự kiện, khen thưởng của các tổ chức, doanh nghiệp). Trong khi đó, Holiday Inn Express là thương hiệu được đánh giá cao tại Việt Nam nhờ dịch vụ đề cao sự tiện lợi và thoải mái của khách hàng.\r\n\r\nBà Serena Lim - Phó chủ tịch phụ trách phát triển khu vực Đông Nam Á & Hàn Quốc của IHG cho biết, Hotel Indigo Hoi An Ancient Town mang đậm hơi thở và nhịp sống của phố Hội, tái hiện âm hưởng cuộc sống của những nếp nhà cổ thông qua kiến trúc và ẩm thực truyền thống. Tiếp đến, Crowne Plaza Hoi An Ancient Town với tiền đề là thương hiệu khách sạn cao cấp thế giới sẽ trở thành trung tâm tổ chức sự kiện trong nhà lớn nhất tại Hội An. Cuối cùng, Holiday Inn Express Hoi An Ancient Town được xem là nơi lý tưởng để du khách nghỉ ngơi và \"nạp\" năng lượng trên hành trình khám phá tại thành phố di sản.', '2022-06-22', 1),
(5, 'hinh-nen-laptop-anime-min.jpg', 'aaa', 1, 'aaaaaaaa', '2022-06-22', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dich_vu_khach_san`
--
ALTER TABLE `dich_vu_khach_san`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hom_thu`
--
ALTER TABLE `hom_thu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_san`
--
ALTER TABLE `khach_san`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `dat_phong`
--
ALTER TABLE `dat_phong`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `dich_vu_khach_san`
--
ALTER TABLE `dich_vu_khach_san`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hom_thu`
--
ALTER TABLE `hom_thu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khach_san`
--
ALTER TABLE `khach_san`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
