-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2023 lúc 03:18 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xustorem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(200) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung_bv` varchar(200) NOT NULL,
  `ngaydang` datetime NOT NULL,
  `anh` varchar(200) NOT NULL,
  `dmtin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`baiviet_id`, `tenbaiviet`, `tomtat`, `noidung_bv`, `ngaydang`, `anh`, `dmtin_id`) VALUES
(3, 'Giày cho mùa đông', 'aaaaaa', 'aaaaaa', '2023-01-12 20:01:04', '2.jpg', 2),
(4, 'Giày nổi nhất đêm nay', 'aaaaaa', 'aaaaaaaaa', '2023-01-12 20:02:40', '4.png', 1),
(5, 'Giày nổi nhất đêm nay', 'Thể hiện sự năng động của bạn', '', '2023-01-12 20:15:18', 'e4d7470d3ca19fedc9764c721bc4f2cd.jpg', 1),
(6, 'Những chiếc giày mùa đông', 'Thể hiện niềm yêu thích của bạn', '', '2023-01-12 20:15:47', '74d7664f5fd9bad81e090c67848fd68e.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `sanpham_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `noidung_bl` varchar(200) NOT NULL,
  `ngay_bl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cthoadon`
--

CREATE TABLE `tbl_cthoadon` (
  `hoadon_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` float NOT NULL,
  `hinhanh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cthoadon`
--

INSERT INTO `tbl_cthoadon` (`hoadon_id`, `sanpham_id`, `soluong`, `thanhtien`, `hinhanh`) VALUES
(1, 1, 1, 20000, ''),
(1, 2, 1, 200000, ''),
(2, 2, 1, 200000, ''),
(3, 2, 1, 200000, ''),
(4, 2, 3, 60000000, ''),
(5, 1, 0, 0, ''),
(14, 1, 2, 400000, '1.png'),
(15, 1, 2, 400000, '1.png'),
(16, 1, 2, 400000, '1.png'),
(17, 1, 2, 400000, '1.png'),
(18, 1, 2, 400000, '1.png'),
(19, 1, 2, 400000, '1.png'),
(20, 1, 2, 400000, '1.png'),
(25, 1, 2, 400000, '1.png'),
(31, 1, 2, 400000, '1.png'),
(32, 1, 2, 400000, '1.png'),
(33, 1, 2, 400000, '1.png'),
(35, 1, 1, 200000, '1.png'),
(36, 1, 1, 200000, '1.png'),
(37, 1, 1, 200000, '1.png'),
(37, 2, 1, 2000000, '1.jpg'),
(38, 1, 1, 200000, '1.png'),
(38, 2, 1, 2000000, '1.jpg'),
(39, 1, 1, 200000, '1.png'),
(39, 2, 1, 2000000, '1.jpg'),
(40, 1, 1, 200000, '1.png'),
(40, 2, 1, 2000000, '1.jpg'),
(41, 1, 1, 200000, '1.png'),
(41, 2, 1, 2000000, '1.jpg'),
(42, 1, 1, 200000, '1.png'),
(42, 2, 1, 2000000, '1.jpg'),
(43, 1, 1, 200000, '1.png'),
(43, 2, 1, 2000000, '1.jpg'),
(44, 1, 1, 200000, '1.png'),
(44, 2, 1, 2000000, '1.jpg'),
(45, 2, 1, 2000000, '1.jpg'),
(45, 3, 1, 3000000, '1.jpg'),
(46, 3, 1, 3000000, '1.jpg'),
(47, 1, 1, 200000, '1.png'),
(47, 2, 1, 2000000, '1.jpg'),
(47, 3, 1, 3000000, '1.jpg'),
(48, 1, 1, 200000, '1.png'),
(49, 2, 1, 2000000, '1.jpg'),
(50, 1, 1, 200000, '1.png'),
(51, 3, 1, 3000000, '1.jpg'),
(52, 3, 1, 3000000, '1.jpg'),
(54, 2, 1, 2000000, '1.jpg'),
(55, 2, 1, 2000000, '1.jpg'),
(56, 2, 1, 2000000, '1.jpg'),
(57, 2, 1, 2000000, '1.jpg'),
(58, 2, 1, 2000000, '1.jpg'),
(59, 2, 1, 2000000, '1.jpg'),
(60, 2, 1, 2000000, '1.jpg'),
(61, 1, 1, 200000, '1.png'),
(62, 2, 1, 2000000, '1.jpg'),
(63, 1, 1, 200000, '1.png'),
(64, 1, 1, 200000, '1.png'),
(65, 3, 1, 3000000, '1.jpg'),
(66, 3, 1, 3000000, '1.jpg'),
(67, 1, 1, 200000, '1.png'),
(67, 2, 1, 2000000, '1.jpg'),
(68, 3, 1, 3000000, '1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ctthanhtoan`
--

CREATE TABLE `tbl_ctthanhtoan` (
  `thanhtoan_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `hoadon_id` int(11) NOT NULL,
  `tinhtrang_tt` tinyint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ctthanhtoan`
--

INSERT INTO `tbl_ctthanhtoan` (`thanhtoan_id`, `nguoidung_id`, `hoadon_id`, `tinhtrang_tt`) VALUES
(1, 22, 1, 0),
(1, 22, 36, 0),
(1, 22, 42, 0),
(1, 22, 44, 0),
(1, 22, 45, 0),
(1, 41, 48, 0),
(1, 42, 46, 0),
(1, 42, 47, 0),
(1, 44, 49, 0),
(1, 44, 50, 0),
(1, 44, 51, 0),
(1, 44, 52, 0),
(1, 44, 53, 0),
(1, 44, 60, 0),
(1, 44, 62, 0),
(1, 44, 64, 0),
(1, 44, 65, 0),
(2, 44, 61, 0),
(2, 44, 63, 0),
(2, 44, 66, 0),
(2, 45, 67, 0),
(2, 45, 68, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_detail_san_pham`
--

CREATE TABLE `tbl_detail_san_pham` (
  `id_sp` int(11) NOT NULL,
  `id_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_detail_san_pham`
--

INSERT INTO `tbl_detail_san_pham` (`id_sp`, `id_size`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(5, 1),
(6, 2),
(7, 2),
(8, 1),
(9, 5),
(10, 3),
(11, 5),
(12, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dmtin`
--

CREATE TABLE `tbl_dmtin` (
  `dmtin_id` int(11) NOT NULL,
  `tendm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dmtin`
--

INSERT INTO `tbl_dmtin` (`dmtin_id`, `tendm`) VALUES
(1, 'Giày super hot'),
(2, 'Giày chuẩn giá rét cho mùa đông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaohang`
--

CREATE TABLE `tbl_giaohang` (
  `giaohang_id` int(11) NOT NULL,
  `hoadon_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `loaigh_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaohang`
--

INSERT INTO `tbl_giaohang` (`giaohang_id`, `hoadon_id`, `nguoidung_id`, `loaigh_id`) VALUES
(1, 51, 44, 1),
(2, 52, 44, 2),
(3, 64, 44, 2),
(4, 65, 44, 2),
(5, 66, 44, 2),
(6, 67, 45, 2),
(7, 68, 45, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `so_luong_cart` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`giohang_id`, `sanpham_id`, `so_luong_cart`, `nguoidung_id`, `size`) VALUES
(7, 1, 2, 37, 3),
(8, 1, 2, 38, 3),
(9, 1, 2, 39, 3),
(10, 1, 1, 40, 3),
(40, 3, 1, 17, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `hoadon_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `thanhtoan_id` int(11) NOT NULL,
  `ngaynhap` datetime NOT NULL,
  `ten_nn` varchar(200) NOT NULL,
  `diachi_nn` varchar(200) NOT NULL,
  `sdt_nn` varchar(10) NOT NULL,
  `ghichu` varchar(200) NOT NULL,
  `tinhtrangdh` tinyint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`hoadon_id`, `nguoidung_id`, `thanhtoan_id`, `ngaynhap`, `ten_nn`, `diachi_nn`, `sdt_nn`, `ghichu`, `tinhtrangdh`) VALUES
(55, 44, 2, '2023-01-12 17:54:40', 'a', 'aaa', '0123456789', 'á', 0),
(56, 44, 2, '2023-01-12 17:55:10', 'a', 'aaa', '0123456789', 'á', 0),
(57, 44, 2, '2023-01-12 17:55:49', 'a', 'aaa', '0123456789', 'á', 0),
(58, 44, 2, '2023-01-12 17:56:33', 'a', 'aaa', '0123456789', 'á', 0),
(59, 44, 2, '2023-01-12 17:56:51', 'a', 'aaa', '0123456789', 'á', 0),
(60, 44, 2, '2023-01-12 18:09:51', 'a', 'aaa', '0123456789', 'y', 0),
(61, 44, 2, '2023-01-12 18:29:52', 'a', 'aaa', '0123456789', 'sd', 0),
(62, 44, 1, '2023-01-12 18:46:43', 'a', 'q', '0123456789', 'q', 0),
(63, 44, 2, '2023-01-12 19:27:00', 'a', 'aaa', '0123456789', 'df', 0),
(64, 44, 1, '2023-01-12 19:30:07', 'a', 'a', '0123456789', 'sè', 0),
(65, 44, 1, '2023-01-12 19:30:58', 'sdf', 'd', 'd', 'dsf', 0),
(66, 44, 2, '2023-01-12 19:35:17', 'q', 'aaa', '0123456789', '', 0),
(67, 45, 2, '2023-01-12 20:51:18', 'a', 'd', '0123456789', 'ưqwqw', 0),
(68, 45, 2, '2023-01-12 20:54:35', 'á', 'd', '0123456789', 'sá', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `lienhe_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `email_lh` varchar(200) NOT NULL,
  `noidung_lh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaigh`
--

CREATE TABLE `tbl_loaigh` (
  `loaigh_id` int(11) NOT NULL,
  `hinhthuc_gh` varchar(200) NOT NULL,
  `giacuoc` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaigh`
--

INSERT INTO `tbl_loaigh` (`loaigh_id`, `hinhthuc_gh`, `giacuoc`) VALUES
(1, 'Nhanh', '50000'),
(2, 'Tiết kiệm', '20000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisp`
--

CREATE TABLE `tbl_loaisp` (
  `loaisp_id` int(11) NOT NULL,
  `tenloaisp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisp`
--

INSERT INTO `tbl_loaisp` (`loaisp_id`, `tenloaisp`) VALUES
(1, 'Giày nam'),
(2, 'Giày nữ'),
(3, 'Giày trẻ em');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoidung`
--

CREATE TABLE `tbl_nguoidung` (
  `nguoidung_id` int(11) NOT NULL,
  `ten_nd` varchar(200) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `ngaysinh` date NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`nguoidung_id`, `ten_nd`, `sdt`, `diachi`, `email`, `password`, `ngaysinh`, `phanquyen`) VALUES
(16, 'kilancutsung', '0948960067', 'Học viện Ngân hàng', 'apocalypsefakee@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2002-12-31', 1),
(17, 'admin', '0948960067', 'Học viện Ngân hàng', 'apocalypsefakee@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2002-12-03', 0),
(18, 'mingg', '0948960067', 'Học viện Ngân hàng', 'apocalypsefakee@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2002-12-03', 1),
(22, 'a', '0395410715', '3', 'nimtn88@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2222-04-03', 1),
(41, 'aaaa', '0395410715', 'aaaaaaa', 'nimtn88@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2222-02-22', 1),
(42, 'r', '1111111', 'qq', 'nptninh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1111-11-11', 1),
(43, 'y', '1', '1', 'nimtn88@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1111-11-11', 1),
(44, 'n', '1111111', 'aaaaaaa', 'nimtn88@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1111-11-11', 1),
(45, 'ok', '0395410715', '3', 'nimtn88@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2222-02-22', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `mota` varchar(200) NOT NULL,
  `dongia` float NOT NULL,
  `so_luong` int(11) NOT NULL,
  `trangthaisp` int(11) NOT NULL,
  `loaisp_id` int(11) NOT NULL,
  `ngay_tao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `tensp`, `hinhanh`, `mota`, `dongia`, `so_luong`, `trangthaisp`, `loaisp_id`, `ngay_tao`) VALUES
(1, 'Giày Thượng Đình', '1.png', 'Đẹp', 200000, 10, 1, 1, NULL),
(2, 'Giày Bitis', '1.jpg', 'Đẹp', 2000000, 20, 1, 1, NULL),
(3, 'Nike', '1.jpg', 'Đẹp', 3000000, 10, 1, 2, NULL),
(4, 'Adidas', '1.jpg', 'Đẹp', 4000000, 10, 1, 3, NULL),
(5, 'Giày nữ Adidas 1', '', '', 199000, 90, 0, 2, '0000-00-00'),
(6, 'giày nữ Adidas 2', '', 'Giày xinh', 230000, 120, 0, 2, '0000-00-00'),
(7, 'giày nữ Adidas 3', '', '', 180000, 120, 0, 2, '0000-00-00'),
(8, 'giày nữ Converse 1', '', 'Giày xinh', 180000, 100, 0, 2, '0000-00-00'),
(9, 'giày nữ Converse 2', '', '', 230000, 200, 0, 2, '0000-00-00'),
(10, 'giày nữ Nike 1', '', '', 120000, 100, 0, 2, '0000-00-00'),
(11, 'giày nữ Nike 2', '', '', 300000, 250, 0, 2, '0000-00-00'),
(12, 'giày nữ Nike 3', '', '', 240000, 90, 0, 2, '0000-00-00'),
(13, 'giày nữ Vans 1', '', '', 240000, 250, 0, 2, '0000-00-00'),
(14, 'giày nữ Vans 2', '', '', 350000, 100, 0, 2, '0000-00-00'),
(15, 'giày nữ Vans 3', '', 'Giày xinh', 250000, 1, 0, 2, '0000-00-00'),
(16, 'giày bé gái Adidas ', '', '', 180000, 90, 0, 3, '0000-00-00'),
(17, 'giày bé gái Adidas 1', '', '', 155000, 0, 0, 3, '0000-00-00'),
(18, 'giày bé gái Adidas 2', '', '', 199000, 90, 0, 3, '0000-00-00'),
(19, 'giày bé gái Converse 2', '', 'Giày xinh', 230000, 200, 0, 3, '0000-00-00'),
(20, 'giày bé gái Nike 1', '', '', 300000, 250, 0, 3, '0000-00-00'),
(21, 'giày bé gái Nike 2', '', 'Giày đẹp', 180000, 90, 0, 3, '0000-00-00'),
(22, 'giày bé gái Vans 1', '', '', 1, 1, 0, 3, '0000-00-00'),
(23, 'giày bé gái Vans 2', '', '', 245000, 95, 0, 3, '0000-00-00'),
(24, 'giày bé trai Adidas 1', '', '', 180000, 120, 0, 3, '0000-00-00'),
(25, 'giày bé trai Adidas 2', '', 'Giày đế mềm', 300000, 55, 0, 3, '0000-00-00'),
(26, 'giày bé trai Adidas 1', '', '', 165000, 70, 0, 8, '0000-00-00'),
(27, 'giày bé trai Adidas 1', '', '', 199000, 250, 0, 8, '0000-00-00'),
(28, 'giày bé trai Adidas 1', '', 'Giày đẹp', 230000, 55, 0, 8, '0000-00-00'),
(29, 'giày bé trai Converse 1', '', 'Giày đế mềm', 2, 2, 0, 8, '0000-00-00'),
(30, 'giày bé trai Converse 2', '', '', 240000, 120, 0, 8, '0000-00-00'),
(31, 'giày bé trai Nike 1', '', '', 150000, 120, 0, 8, '0000-00-00'),
(32, 'giày bé trai Nike 2', '', '', 2, 230, 0, 8, '0000-00-00'),
(33, 'giày nam Vans 1', '', '', 199000, 90, 0, 1, '0000-00-00'),
(34, 'giày nam Vans 2', '', '', 3, 100, 0, 1, '0000-00-00'),
(35, 'giày nam Vans 3', '', '', 1, 2, 0, 1, '0000-00-00'),
(36, 'giày nam Converse 1', '', 'Giày đế mềm', 240000, 100, 0, 1, '0000-00-00'),
(37, 'giày nam Converse 2', '', '', 199000, 200, 0, 1, '0000-00-00'),
(38, 'giày nam Converse 3', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et sodales est. Mauris semper lorem eget ligula viverra consectetur. Quisque ultricies leo libero, a efficitur mauris ultrices sed. Cra', 100000, 2, 0, 1, '2023-01-02'),
(39, 'giày nam Converse 4', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et sodales est. Mauris semper lorem eget ligula viverra consectetur. Quisque ultricies leo libero, a efficitur mauris ultrices sed. Cra', 145000, 30, 0, 1, '2023-01-05'),
(40, 'giày nam Converse 5', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et sodales est. Mauris semper lorem eget ligula viverra consectetur. Quisque ultricies leo libero, a efficitur mauris ultrices sed. Cra', 350000, 20, 0, 1, '2023-01-05'),
(41, 'drr', '', 'ccccch', 20000, 20, 0, 1, '2023-01-12'),
(42, 'drr', '', 'ccccch', 1111, 111, 1, 1, '2023-01-12'),
(43, 'drr', '', 'ccccch', 1111, 111, 1, 1, '2023-01-12'),
(44, 'drr', '', 'ccccch', 31111, 11, 1, 1, '2023-01-12'),
(45, 'drr', '', 'ccccch', 2221, 1, 0, 1, '2023-01-12'),
(46, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 'ccccch', 1, 1, 0, 1, '2023-01-12'),
(47, 'drr', '', 'ccccch', 1, 1, 0, 1, '2023-01-12'),
(48, 'drr', '', 'ccccch', 1, 1, 0, 1, '2023-01-12'),
(49, 'drr', '', 'ccccch', 1, 1, 0, 1, '2023-01-12'),
(50, 'drr', '', 'ccccch', 1, 1, 0, 1, '2023-01-12'),
(51, 'drr', '', 'ccccch', 1, 1, 0, 1, '2023-01-12'),
(52, 'e', '', 'ccccch', 2, 3, 1, 1, '2023-01-12'),
(53, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 'ccccch', 1, 1, 1, 1, '2023-01-12'),
(54, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', '', 'ccccch', 1, 1, 1, 1, '2023-01-12'),
(55, 'e', '61cb6dad7f0bb0a72b3b4153bba2f080.jpg', 'ccccch', 1, 1, 1, 1, '2023-01-12'),
(56, 'e', '61cb6dad7f0bb0a72b3b4153bba2f080.jpg', 'ccccch', 1, 1, 1, 1, '2023-01-12'),
(57, 'drr', '61cb6dad7f0bb0a72b3b4153bba2f080.jpg', 'ccccch', 1, 1, 1, 1, '2023-01-12'),
(58, '1', '82431d8091df2edb03766867426a5b69.jpg', '1', 1, 1, 1, 1, '2023-01-12'),
(62, '1', 'ccdf4aa81bb62973e0ad577e0c3627a2.jpg', '1', 1, 1, 1, 1, '2023-01-12'),
(63, '1', '3.png', '1', 1, 1, 1, 1, '2023-01-12'),
(64, 'Giày rét', '7.png', 'ccccch', 1, 1, 1, 1, '2023-01-12'),
(66, 'đẹp', '5.jpg', 'ccccch', 1, 1, 1, 1, '2023-01-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(11) NOT NULL,
  `so_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `so_size`) VALUES
(1, 38),
(2, 39),
(3, 40),
(4, 41),
(5, 42),
(6, 35),
(7, 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thanhtoan`
--

CREATE TABLE `tbl_thanhtoan` (
  `thanhtoan_id` int(11) NOT NULL,
  `hinhthuc_tt` varchar(200) NOT NULL,
  `ghichu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thanhtoan`
--

INSERT INTO `tbl_thanhtoan` (`thanhtoan_id`, `hinhthuc_tt`, `ghichu`) VALUES
(1, 'Visa', ''),
(2, 'khinhanhang', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`sanpham_id`,`nguoidung_id`);

--
-- Chỉ mục cho bảng `tbl_cthoadon`
--
ALTER TABLE `tbl_cthoadon`
  ADD PRIMARY KEY (`hoadon_id`,`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_ctthanhtoan`
--
ALTER TABLE `tbl_ctthanhtoan`
  ADD PRIMARY KEY (`thanhtoan_id`,`nguoidung_id`,`hoadon_id`);

--
-- Chỉ mục cho bảng `tbl_detail_san_pham`
--
ALTER TABLE `tbl_detail_san_pham`
  ADD PRIMARY KEY (`id_sp`,`id_size`);

--
-- Chỉ mục cho bảng `tbl_dmtin`
--
ALTER TABLE `tbl_dmtin`
  ADD PRIMARY KEY (`dmtin_id`);

--
-- Chỉ mục cho bảng `tbl_giaohang`
--
ALTER TABLE `tbl_giaohang`
  ADD PRIMARY KEY (`giaohang_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`hoadon_id`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`lienhe_id`);

--
-- Chỉ mục cho bảng `tbl_loaigh`
--
ALTER TABLE `tbl_loaigh`
  ADD PRIMARY KEY (`loaigh_id`);

--
-- Chỉ mục cho bảng `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  ADD PRIMARY KEY (`loaisp_id`);

--
-- Chỉ mục cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD PRIMARY KEY (`nguoidung_id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Chỉ mục cho bảng `tbl_thanhtoan`
--
ALTER TABLE `tbl_thanhtoan`
  ADD PRIMARY KEY (`thanhtoan_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_cthoadon`
--
ALTER TABLE `tbl_cthoadon`
  MODIFY `hoadon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `tbl_dmtin`
--
ALTER TABLE `tbl_dmtin`
  MODIFY `dmtin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_giaohang`
--
ALTER TABLE `tbl_giaohang`
  MODIFY `giaohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `hoadon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `tbl_loaigh`
--
ALTER TABLE `tbl_loaigh`
  MODIFY `loaigh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  MODIFY `loaisp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `nguoidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
