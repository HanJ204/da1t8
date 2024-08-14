-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2024 lúc 10:24 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1old`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `tieuDe` varchar(255) NOT NULL,
  `urlHinh` varchar(255) NOT NULL,
  `urlLink` varchar(255) DEFAULT NULL,
  `viTri` tinyint(1) NOT NULL,
  `anHien` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `tieuDe`, `urlHinh`, `urlLink`, `viTri`, `anHien`) VALUES
(1, 'THOẢI THÍCH MUA SẮM CÙNG – 5S FASHION', 'slider.jpg', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(9) NOT NULL,
  `madh` varchar(50) NOT NULL,
  `iduser` int(6) NOT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_tel` varchar(20) NOT NULL,
  `nguoidat_diachi` varchar(100) NOT NULL,
  `total` int(9) NOT NULL,
  `ship` int(6) NOT NULL DEFAULT 0,
  `voucher` int(6) NOT NULL DEFAULT 0,
  `tongthanhtoan` int(9) NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '0: COD; 1: ck; 2: ví điện tử',
  `trang_thai` set('Phê Duyệt','Xác Nhận','Đang Giao','Đã Giao') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `madh`, `iduser`, `nguoidat_ten`, `nguoidat_email`, `nguoidat_tel`, `nguoidat_diachi`, `total`, `ship`, `voucher`, `tongthanhtoan`, `pttt`, `trang_thai`) VALUES
(78, '#523', 108, 'nam', 'nam@gmail.com', '0123456789', '187, Đường Nguyễn Ánh Thủ,phường TMT,Quận 12', 20000, 0, 0, 20000, 1, ''),
(79, '#6061', 108, 'nam', 'nam@gmail.com', '0123456789', '187, Đường Nguyễn Ánh Thủ,phường TMT,Quận 12', 200000, 0, 0, 200000, 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(6) NOT NULL,
  `idpro` int(6) NOT NULL,
  `iduser` int(6) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(6) NOT NULL,
  `idpro` int(6) NOT NULL,
  `price` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(6) NOT NULL,
  `idbill` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `idpro`, `price`, `name`, `img`, `soluong`, `thanhtien`, `idbill`) VALUES
(54, 65, 20000, 'áo thun', 'a19.jpg', 1, 20000, 78),
(55, 64, 200000, 'Nam', 'a18.jpg', 1, 200000, 79);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0,
  `stt` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `home`, `stt`, `img`) VALUES
(3, 'Áo Sơ Mi Nam', 0, 4, 'ICON_SP1.png'),
(4, 'Áo Khoác Nam', 0, 3, 'ICON_SP1.png'),
(12, 'Áo Polo Nam', 0, 2, 'ICON_SP1.png'),
(20, 'Áo Thun Nam', 0, 1, 'ICON_SP1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `price` int(6) NOT NULL,
  `view` varchar(255) NOT NULL DEFAULT '0',
  `label` tinyint(1) NOT NULL COMMENT '0(bth), 1(noi bat)',
  `iddm` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `view`, `label`, `iddm`) VALUES
(48, 'Namnb', 'a4.jpg', 100000, '147', 1, 4),
(49, 'Namxn', 'a5.jpg', 100000, '12343', 0, 4),
(50, 'Nam', 'a6.jpg', 100000, '5312', 0, 4),
(51, 'Namnb', 'a7.jpg', 100000, '533', 1, 4),
(52, 'Namxn', 'a8.jpg', 200000, '7563', 0, 3),
(53, 'Namnb', 'a9.jpg', 200000, '6543', 1, 3),
(56, 'Nam', 'a11.jpg', 200000, '6575', 0, 3),
(57, 'Nam', 'a10.jpg', 200000, '2345', 0, 3),
(58, 'Namnb', 'a12.jpg', 200000, '342', 1, 12),
(59, 'Nam', 'a13.jpg', 200000, '543', 0, 20),
(60, 'Nam', 'a14.jpg', 200000, '5342', 0, 4),
(61, 'Namnb', 'a15.jpg', 200000, '5234', 1, 3),
(62, 'Nam', 'a16.jpg', 200000, '6234', 0, 12),
(63, 'Namnb', 'a17.jpg', 200000, '412', 1, 12),
(64, 'Nam', 'a18.jpg', 200000, '123', 0, 12),
(65, 'áo thunnb', 'a19.jpg', 20000, '132', 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `dienthoai` varchar(20) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ten`, `diachi`, `email`, `dienthoai`, `role`) VALUES
(107, 'admin', '123', 'admin', NULL, '', NULL, 1),
(108, 'nam', '123', 'nam', '187, Đường Nguyễn Ánh Thủ,phường TMT,Quận 12', 'nam@gmail.com', '0123456789', 0),
(110, 'hoangnam', '123', 'Hoàng Nam', '187/Nguyễn Ánh Thủ,TMT,Quận 12', 'vkhuong@gmail.com', '0368533107', 0),
(113, 'VXHuong107204', '123', 'hoangnam', '185, Nguyễn Ánh Thủ, Quận 12, HCM City', 'vkhuong10072004@gmail.com', '0368533105', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`iduser`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhluan_sanpham` (`idpro`),
  ADD KEY `binhluan_user` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_sanpham` (`idpro`),
  ADD KEY `cart_bill` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_dm` (`iddm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_bill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
