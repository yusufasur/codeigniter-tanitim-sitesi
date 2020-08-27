-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ağu 2020, 09:33:54
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeigniter_kariyer`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `bg` varchar(100) DEFAULT NULL,
  `baslik` varchar(100) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `icerik` longtext DEFAULT NULL,
  `hit` int(11) DEFAULT 0,
  `yorum` int(1) DEFAULT NULL,
  `sef` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `id` int(11) NOT NULL,
  `ustmenu` int(11) DEFAULT 0,
  `ad` varchar(100) DEFAULT NULL,
  `turu` int(1) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `sira` int(10) DEFAULT NULL,
  `sef` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`id`, `ustmenu`, `ad`, `turu`, `link`, `sira`, `sef`) VALUES
(29, 0, 'Anasayfa', 0, 'anasayfa', 1, 'anasayfa'),
(30, 0, 'Hakkımızda', 1, '5', 2, 'hakkimizda'),
(31, 0, 'İletişim', 0, 'iletisim', 3, 'iletisim'),
(32, 30, 'Kariyer', 1, '6', 1, 'kariyer');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) NOT NULL,
  `gonderen` varchar(100) DEFAULT NULL,
  `gonderenmail` varchar(100) DEFAULT NULL,
  `icerik` text DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT current_timestamp(),
  `okundumu` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(100) DEFAULT NULL,
  `minibaslik` varchar(254) DEFAULT NULL,
  `bg` varchar(100) DEFAULT NULL,
  `yazi` longtext DEFAULT NULL,
  `sef` varchar(100) DEFAULT NULL,
  `aktif` int(1) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `baslik`, `minibaslik`, `bg`, `yazi`, `sef`, `aktif`, `tarih`) VALUES
(5, 'Bizi Tanıyın', 'Ekibimizi yakından tanıyın.', 'http://kariyer.local/assets/image/sayfalar/bg2.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae egestas est. Vestibulum in facilisis elit. Quisque efficitur ac sem id condimentum. Aenean ut dui sit amet nulla tincidunt hendrerit. Ut finibus, tellus eget dapibus placerat, ipsum elit ornare dolor, sed faucibus felis tortor vitae felis. Duis aliquam malesuada metus sed scelerisque. Nunc nec nulla vestibulum, lacinia diam nec, luctus ante. Etiam ullamcorper urna vitae felis eleifend, quis condimentum nisi condimentum.</p>\r\n\r\n<p>Etiam pellentesque aliquet varius. Nulla scelerisque nisl sit amet lacus lacinia, vel viverra diam rhoncus. Fusce vehicula a risus ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc dapibus, quam in volutpat consectetur, eros dui molestie purus, rhoncus dictum erat libero a neque. Proin vulputate magna vitae quam sagittis interdum. Praesent in ipsum vitae felis imperdiet convallis nec et tortor. Sed vitae sapien eu purus tempor pellentesque. Duis aliquam commodo ante in dapibus. Sed volutpat posuere sapien et interdum. Aliquam semper pulvinar fermentum. Phasellus vel mollis eros. Suspendisse fringilla orci non arcu maximus suscipit.</p>\r\n\r\n<p>Donec condimentum est in magna faucibus finibus. Sed in suscipit sapien. Vivamus quis metus vitae ex semper dignissim sed nec nulla. Nunc nulla orci, pharetra vel turpis ac, egestas semper dui. Morbi interdum lacinia velit eu blandit. Fusce non justo elit. Duis tortor dolor, laoreet vitae vestibulum quis, blandit sit amet diam. Mauris non leo porta, euismod ligula pretium, lacinia diam. Aenean viverra elit id dignissim ultricies. Fusce in dictum quam, nec luctus lacus.</p>\r\n\r\n<p>Aenean eget varius nisl, eget posuere turpis. Praesent pharetra tellus sit amet ex volutpat sodales. Donec suscipit finibus nisi quis hendrerit. Sed quis ante at sem commodo lobortis. Nulla malesuada libero lectus, ut iaculis lacus bibendum a. In massa enim, eleifend id nibh ac, tempus imperdiet dolor. Nullam semper molestie ligula vel finibus. Aliquam erat volutpat.</p>\r\n\r\n<p>Sed semper nisi et orci hendrerit pharetra. Maecenas at ex vel orci ullamcorper ornare. Donec vel sagittis nisl. Mauris dapibus odio quam, et varius risus efficitur et. Nam accumsan, erat vitae tincidunt tincidunt, sapien nisi volutpat justo, dignissim consectetur sem nisi ac enim. Pellentesque vel augue nulla. Praesent iaculis felis justo, sodales malesuada ante rutrum laoreet. Pellentesque sollicitudin sem eget vestibulum tincidunt. Ut ut tortor ut nibh semper pulvinar sed in arcu. Vivamus lobortis ante at tempor scelerisque. In dignissim ligula nec augue mattis, ac molestie eros porta.</p>\r\n', 'bizi-taniyin', 1, '2020-07-14 09:22:59'),
(6, 'Kariyer', 'Kariyerinize Hemen Başlayın.', 'http://kariyer.local/assets/image/sayfalar/bg3.jpg', '<p><img alt=\"Yabancı Dil Hizmetlerimiz\" src=\"http://www.ferzend.com/dimg/icerik/21932266712805729656yabanc%C4%B1-dil-%C3%B6%C4%9Frenme.jpg\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae egestas est. Vestibulum in facilisis elit. Quisque efficitur ac sem id condimentum. Aenean ut dui sit amet nulla tincidunt hendrerit. Ut finibus, tellus eget dapibus placerat, ipsum elit ornare dolor, sed faucibus felis tortor vitae felis. Duis aliquam malesuada metus sed scelerisque. Nunc nec nulla vestibulum, lacinia diam nec, luctus ante. Etiam ullamcorper urna vitae felis eleifend, quis condimentum nisi condimentum.</p>\r\n\r\n<p>Etiam pellentesque aliquet varius. Nulla scelerisque nisl sit amet lacus lacinia, vel viverra diam rhoncus. Fusce vehicula a risus ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc dapibus, quam in volutpat consectetur, eros dui molestie purus, rhoncus dictum erat libero a neque. Proin vulputate magna vitae quam sagittis interdum. Praesent in ipsum vitae felis imperdiet convallis nec et tortor. Sed vitae sapien eu purus tempor pellentesque. Duis aliquam commodo ante in dapibus. Sed volutpat posuere sapien et interdum. Aliquam semper pulvinar fermentum. Phasellus vel mollis eros. Suspendisse fringilla orci non arcu maximus suscipit.</p>\r\n\r\n<p>Donec condimentum est in magna faucibus finibus. Sed in suscipit sapien. Vivamus quis metus vitae ex semper dignissim sed nec nulla. Nunc nulla orci, pharetra vel turpis ac, egestas semper dui. Morbi interdum lacinia velit eu blandit. Fusce non justo elit. Duis tortor dolor, laoreet vitae vestibulum quis, blandit sit amet diam. Mauris non leo porta, euismod ligula pretium, lacinia diam. Aenean viverra elit id dignissim ultricies. Fusce in dictum quam, nec luctus lacus.</p>\r\n\r\n<p>Aenean eget varius nisl, eget posuere turpis. Praesent pharetra tellus sit amet ex volutpat sodales. Donec suscipit finibus nisi quis hendrerit. Sed quis ante at sem commodo lobortis. Nulla malesuada libero lectus, ut iaculis lacus bibendum a. In massa enim, eleifend id nibh ac, tempus imperdiet dolor. Nullam semper molestie ligula vel finibus. Aliquam erat volutpat.</p>\r\n\r\n<p>Sed semper nisi et orci hendrerit pharetra. Maecenas at ex vel orci ullamcorper ornare. Donec vel sagittis nisl. Mauris dapibus odio quam, et varius risus efficitur et. Nam accumsan, erat vitae tincidunt tincidunt, sapien nisi volutpat justo, dignissim consectetur sem nisi ac enim. Pellentesque vel augue nulla. Praesent iaculis felis justo, sodales malesuada ante rutrum laoreet. Pellentesque sollicitudin sem eget vestibulum tincidunt. Ut ut tortor ut nibh semper pulvinar sed in arcu. Vivamus lobortis ante at tempor scelerisque. In dignissim ligula nec augue mattis, ac molestie eros porta.</p>\r\n', 'kariyer', 1, '2020-07-14 09:30:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteayarlari`
--

CREATE TABLE `siteayarlari` (
  `id` int(11) NOT NULL,
  `anasayfabg` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `baslik` varchar(100) DEFAULT NULL,
  `hakkimizda` longtext DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siteayarlari`
--

INSERT INTO `siteayarlari` (`id`, `anasayfabg`, `logo`, `favicon`, `baslik`, `hakkimizda`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`) VALUES
(1, 'http://kariyer.local/assets/image/site/1280x7205.png', 'http://kariyer.local/assets/image/site/1280x7203.png', 'http://kariyer.local/assets/image/site/700x4003.png', 'Kariyer sitesi güncel', 'hakkımızda', 'codeigniter', '', 'instagram', '', 'linkedin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetim`
--

CREATE TABLE `yonetim` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(100) DEFAULT NULL,
  `kadi` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `sifre` varchar(100) DEFAULT NULL,
  `rutbe` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetim`
--

INSERT INTO `yonetim` (`id`, `adsoyad`, `kadi`, `mail`, `sifre`, `rutbe`) VALUES
(1, 'Merhaba', 'admin', 'test@app.com', 'e10adc3949ba59abbe56e057f20f883e', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siteayarlari`
--
ALTER TABLE `siteayarlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetim`
--
ALTER TABLE `yonetim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `siteayarlari`
--
ALTER TABLE `siteayarlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yonetim`
--
ALTER TABLE `yonetim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
