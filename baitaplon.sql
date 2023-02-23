-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2020 lúc 09:19 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `baitaplon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsua`
--

CREATE TABLE `hangsua` (
  `id` int(11) NOT NULL,
  `mahs` varchar(15) NOT NULL,
  `tenhs` varchar(255) NOT NULL,
  `diachihs` varchar(255) NOT NULL,
  `dienthoaihs` varchar(11) NOT NULL,
  `emailhs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hangsua`
--

INSERT INTO `hangsua` (`id`, `mahs`, `tenhs`, `diachihs`, `dienthoaihs`, `emailhs`) VALUES
(5, 'MJ', 'Mead Jonhson', 'Công ty nhập khẩu Việt Nam', '8741258', 'meadjonhson@mj.com'),
(6, 'NTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', '7895632', 'nutifood@ntf.com'),
(8, 'VNM', 'Vinamilk', '123 Nguyễn Du Quận 1 TP.HCM', '87984561', 'vinamilk@vnm.com'),
(13, 'DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa Đồng Nai', '7826451', 'dutchlady@dl.com'),
(14, 'AB', 'Abbott', 'Công ty nhập khẩu Việt Nam', '8741258', 'abbot@ab.com'),
(15, 'DS', 'Daisy', 'Khu công nghiệp Sóng Thần Bình Dương', '5789321', 'daisy@ds.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `makh` varchar(15) NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `gioitinhkh` varchar(15) NOT NULL DEFAULT '0',
  `diachikh` varchar(255) NOT NULL,
  `dienthoaikh` varchar(15) NOT NULL,
  `emailkh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `makh`, `tenkh`, `gioitinhkh`, `diachikh`, `dienthoaikh`, `emailkh`) VALUES
(10, 'kh001 ', 'Khuất Thùy Phương', '', 'A21 Nguyễn Oanh quận Gò Vấp', '9874125', 'ktphuong@hcmums@gmail.com'),
(11, 'kh002', 'Đỗ Lâm Thiên', 'Nam', '357 Lê Hồng Phong Quận 10', '8351506', 'dlthien_hcmums@gmail.com'),
(12, 'kh003', 'Phạm Thị Nhung', 'Nữ', '56 Đinh TIên Hoàng Quận 1', '9745998', 'ptnhung@hcmums.com'),
(13, 'kh004', 'Nguyễn Khắc Thiện', 'Nam', '12bis Đường 3-2 Quận 10', '8769128', 'ntthien@hcmums.com'),
(14, 'kh005', 'Tô Trần Hoài Giang', 'Nam', '75 Nguyễn Kiệm Quận Gò Vấp', '5792564', 'tthgian@hcmums.edu.vn'),
(15, 'kh006', 'Nguyễn Kiến Thi', 'Nữ', '357 Lê Hồng Phong Quận 10', '9874125', 'nkthi@hcmums.edu.vn'),
(16, 'kh008', 'Nguyễn Anh Tuấn', 'Nam', '12 Nơ Trang Long Quận Bình Thạnh Tp HCM', '9854225', 'natuan@hcmums.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinsua`
--

CREATE TABLE `thongtinsua` (
  `stt` int(11) NOT NULL,
  `tensua` varchar(255) NOT NULL,
  `hangsua` varchar(255) NOT NULL,
  `loaisua` varchar(255) NOT NULL,
  `trongluongsua` varchar(255) NOT NULL,
  `dongiasua` varchar(255) NOT NULL,
  `thanhphansua` varchar(255) NOT NULL,
  `loiichsua` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongtinsua`
--

INSERT INTO `thongtinsua` (`stt`, `tensua`, `hangsua`, `loaisua`, `trongluongsua`, `dongiasua`, `thanhphansua`, `loiichsua`, `image`) VALUES
(1, 'Sữa Bột Nguyên Kem Có Đường Vinamilk Dinh Dưỡng', 'Vinamilk', 'Sữa bột', '900g', '179.200đ', 'Thành phần:Sữa Bột Nguyên Kem Có Đường Vinamilk Dinh Dưỡng (900g) giúp cung cấp năng lượng cần thiết cho cơ thể, hỗ trợ hấp thu Canxi tạo hệ xương chắc khỏe, cùng với sự kết hợp độc đáo của chất xơ FOS giúp cải thiện sức khỏe hệ tiêu hóa.Bổ sung chất ', 'bổ sung canxi chắc khỏe và phát triển xương', 'cghl.jpg'),
(2, 'Fristi', 'Dutch Lady', 'Sữa tươi', '180gram', '3600đ', 'Thành phần: Nước, sữa tươi, bột whey, hương cam tổng hợp,...', 'Lợi ích:Bổ sung men lợi khuẩn tốt cho đường ruột,..', 'fristi.jpg'),
(3, 'Sữa Bột Ensure Gold', 'Abbott', 'Sữa bột', '400gram', '354,000₫', 'Xem trên nhãn sản phẩm', 'Ensure Gold cung cấp dưỡng chất đầy đủ và cân đối, giàu mufa, pufa có lợi cho hệ tim mạch, giàu vitamin và khoáng chất, dùng để bổ sung khẩu phần ăn hoặc để duy trì tình trạng dinh dưỡng tốt. Ngoài ra Ensure Gold còn dùng để thay thế hoàn toàn hay một phầ', 'sure.jpg'),
(4, 'Nutifood Grow Plus+ Đỏ', 'Dutch Lady', 'Sữa bột', '900g', '282.000 ₫', 'Cung cấp mức năng lượng và lượng protein phù hợp cho trẻ chậm tăng cân. Đáp ứng nhu cầu vitamin và khoáng chất theo qui chuẩn Codex và theo khuyến nghị của Viện Dinh Dưỡng Việt Nam. Bổ sung chất béo chuyển hóa nhanh MCT, có tỷ lệ đạm Whey:Casein phù hợp v', 'Cung cấp mức năng lượng và lượng protein phù hợp cho trẻ chậm tăng cân. Đáp ứng nhu cầu vitamin và khoáng chất theo qui chuẩn Codex và theo khuyến nghị của Viện Dinh Dưỡng Việt Nam. Bổ sung chất béo chuyển hóa nhanh MCT, có tỷ lệ đạm Whey:Casein phù hợp v', 'plus.jpg'),
(5, 'Sữa Bột Vinamilk Sure Prevent', 'Vinamilk', 'Sữa bột', '900g', '463.500đ', '- Bổ sung Canxi & Collagen thủy phân cho xương khớp chắc khỏe - Cùng với Omega 3 & Plant sterols giảm nguy cơ mắc bệnh tim mạch theo khuyến nghị của FDA Hoa Kỳ.  Chất lượng quốc tế với các dưỡng chất được nhập khẩu 100% từ Châu Âu, Hoa Kỳ và Hàn Quốc - Ch', 'Qua tuổi 50, xương khớp bắt đầu thoái hóa làm cho tôi đau nhức, vân động khó khăn. Ngoài ra, hệ tim mạch cũng suy yếu, cơ thể mệt mỏi, khiến tôi không thể vận động tự do và tận hưởng những hoạt động yêu thích. SURE PREVENT GOLD mới, Xương Chắc Khỏe - Đề K', 'sure.jpg'),
(6, 'Sữa Bột Abbott Grow 3', 'Abbott', 'Sữa bột', '900gr', '260.000đ', 'Dinh dưỡng cho sự phát triển thể chất: Nguồn Protein chất lượng cao của Sữa Abbott Grow Gold 3+ nhận được nhiều lời khen từ các chuyên gia.  Đó là nguồn Protein dễ hấp thu và chuyển hóa. Nhờ đó, bé tăng cân tốt, phát triển cân đối.  Ngoài ra, còn có 9 aci', '+ Sữa Abbott Grow Gold 3+ thân thiện với hệ tiêu hóa của trẻ nhỏ Hệ Prebiotic kép trong sữa kết hợp hoàn hảo với chất xơ tự nhiên FOS và Inulin giúp đảm bảo sự hoạt động của các vi sinh vật có lợi trong đường ruột.  Nhờ đó, khi bé uống Sữa Abbott Grow Gol', 'grow.jpg'),
(7, 'Sữa bột Mead Johnson Enfagrow A+ 4', 'Mead Jonhson', 'Sữa bột', '1.75KG', ' 700,000đ', 'Sữa Enfagrow A+ 4 với công thức đột phá DHA & MFGM là giải pháp dinh dưỡng hoàn toàn mới giúp hỗ trợ tối đa cho bé phát triển về tư duy (IQ) và thông minh cảm xúc (EQ), sẵn sàng cho thành công trong tương lai của trẻ sau này.', 'Những thành tựu mới giúp phát triển trí não từ sữa Enfagrow A+ 4 870G Sữa Enfagrow A+ 4 công thức đột phá bộ 3 thông minh tư duy, tự tin, thấu cảm', 'enfagrow.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hangsua`
--
ALTER TABLE `hangsua`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtinsua`
--
ALTER TABLE `thongtinsua`
  ADD PRIMARY KEY (`stt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hangsua`
--
ALTER TABLE `hangsua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `thongtinsua`
--
ALTER TABLE `thongtinsua`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
