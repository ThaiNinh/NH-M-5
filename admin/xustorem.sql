-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2023 lúc 10:52 AM
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
-- Cấu trúc bảng cho bảng `sizesp`
--

CREATE TABLE `sizesp` (
  `size_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `baiviet_id` int(11) NOT NULL,
  `tenbaiviet` varchar(200) NOT NULL,
  `noidung_bv` varchar(200) NOT NULL,
  `ngaydang` datetime NOT NULL,
  `anh` varchar(200) NOT NULL,
  `dmtin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(4, 2, 3, 60000000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ctthanhtoan`
--

CREATE TABLE `tbl_ctthanhtoan` (
  `thanhtoan_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `hoadon_id` int(11) NOT NULL,
  `tinhtrang_tt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ctthanhtoan`
--

INSERT INTO `tbl_ctthanhtoan` (`thanhtoan_id`, `nguoidung_id`, `hoadon_id`, `tinhtrang_tt`) VALUES
(1, 22, 1, 'dathanhtoan'),
(2, 22, 2, 'chuathanhtoan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dmtin`
--

CREATE TABLE `tbl_dmtin` (
  `dmtin_id` int(11) NOT NULL,
  `tendm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaohang`
--

CREATE TABLE `tbl_giaohang` (
  `giaohang_id` int(11) NOT NULL,
  `hinhthuc_gh` varchar(200) NOT NULL,
  `giacuoc` float NOT NULL,
  `tinhtrang_gh` varchar(200) NOT NULL,
  `nguoidung_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaohang`
--

INSERT INTO `tbl_giaohang` (`giaohang_id`, `hinhthuc_gh`, `giacuoc`, `tinhtrang_gh`, `nguoidung_id`) VALUES
(1, 'hoatoc', 30000, 'dagiao', 22),
(2, 'nhanh', 15000, 'dagiao', 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tonggia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`giohang_id`, `sanpham_id`, `nguoidung_id`, `soluong`, `tonggia`) VALUES
(1, 1, 22, 1, 200000),
(2, 2, 22, 1, 2000000),
(3, 2, 18, 3, 6000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `hoadon_id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `giaohang_id` int(11) NOT NULL,
  `thanhtoan_id` int(11) NOT NULL,
  `ngaynhap` datetime NOT NULL,
  `ten_nn` varchar(200) NOT NULL,
  `diachi_nn` varchar(200) NOT NULL,
  `sdt_nn` varchar(10) NOT NULL,
  `ghichu` varchar(200) NOT NULL,
  `tinhtrangdh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`hoadon_id`, `nguoidung_id`, `giaohang_id`, `thanhtoan_id`, `ngaynhap`, `ten_nn`, `diachi_nn`, `sdt_nn`, `ghichu`, `tinhtrangdh`) VALUES
(1, 22, 1, 1, '2023-01-08 06:46:41', 'a', 'aa', '0365123456', '', 'thanhcong'),
(2, 22, 2, 2, '2023-01-08 06:46:41', 'a', 'aaa', '0323568945', '', ''),
(3, 18, 2, 1, '2023-01-08 06:52:24', 'mm', '1111', '0365123456', '', '');

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
(3, 'Giày nam'),
(4, 'Giày nữ'),
(6, 'Giày trẻ em');

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
(22, 'a', '0395410715', '3', 'nimtn88@gmail.com', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '2222-04-03', 1);

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
  `soluong` int(11) NOT NULL,
  `trangthaisp` int(11) NOT NULL,
  `sp_hot` int(11) NOT NULL,
  `sp_moi` int(11) NOT NULL,
  `sp_gg` int(11) NOT NULL,
  `loaisp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `tensp`, `hinhanh`, `mota`, `dongia`, `soluong`, `trangthaisp`, `sp_hot`, `sp_moi`, `sp_gg`, `loaisp_id`) VALUES
(1, 'Giày Thượng Đình', '1.jpg', 'Đẹp', 200000, 10, 1, 1, 1, 1, 1),
(2, 'Giày Bitis', '1.jpg', 'Đẹp', 2000000, 10, 1, 1, 1, 1, 1),
(3, 'Nike', '1.jpg', 'Đẹp', 3000000, 10, 1, 1, 1, 1, 2),
(4, 'Adidas', '1.jpg', 'Đẹp', 4000000, 10, 1, 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(11) NOT NULL,
  `so_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thanhtoan`
--

CREATE TABLE `tbl_thanhtoan` (
  `thanhtoan_id` int(11) NOT NULL,
  `hinhthuc_tt` varchar(200) NOT NULL,
  `ghichu` varchar(200) NOT NULL,
  `ngay_tt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thanhtoan`
--

INSERT INTO `tbl_thanhtoan` (`thanhtoan_id`, `hinhthuc_tt`, `ghichu`, `ngay_tt`) VALUES
(1, 'Visa', '', '2023-01-06'),
(2, 'khinhanhang', '', '2023-01-06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sizesp`
--
ALTER TABLE `sizesp`
  ADD PRIMARY KEY (`size_id`,`sanpham_id`);

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
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_cthoadon`
--
ALTER TABLE `tbl_cthoadon`
  MODIFY `hoadon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_dmtin`
--
ALTER TABLE `tbl_dmtin`
  MODIFY `dmtin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_giaohang`
--
ALTER TABLE `tbl_giaohang`
  MODIFY `giaohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `hoadon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  MODIFY `loaisp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `nguoidung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_thanhtoan`
--
ALTER TABLE `tbl_thanhtoan`
  MODIFY `thanhtoan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
