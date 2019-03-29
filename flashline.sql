-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mar 2019 pada 07.16
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flashline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `tanggal`, `sumber`, `isi`, `gambar`, `jenis`) VALUES
(18, 'Persib Sudah Dapat Tawaran Laga Internasional', '2018-08-01', ' www.soccer.sindonews.com', '<p><strong>Bola Indonesia&nbsp;</strong>- Setelah menghadapi babak final turnamen Piala Presiden 2015, skuat Persib Bandung kembali akan dihadapkan dengan sebuah laga internasional. Hal itu diungkapkan secara langsung oleh Manajer Persib Bandung, Umuh Muchtar. Akan tetapi, Umuh mengaku belum mengetahui laga yang rencananya akan digelar pada 10 November tersebut berbentuk turnamen, kompetisi atau hanya laga persahabatan saja. &quot;Saya sudah dapat bisikan dan sudah dapat bocoran kalau tanggal 10 November juga akan dimulai lagi. Tapi tidak tahu bentuknya turnamen atau gimana. Cuma yang jelas, akan ada lagi pertandingan untuk Persib,&quot; ujar Umuh, Minggu (18/10/2015). Bahkan pria yang akrab disapa Pak Haji ini juga belum mengetahui siapa penggagas laga tersebut. Namun kemungkinan besar akan digelar kembali oleh Mahaka Sports and Entertainment yang merupakan penggagas turnamen Piala Presiden 2015. &quot;Yang saya dengar sih dari Mahaka juga. Tapi pihak lain ada juga yang akan menyelenggarakan (pertandingan), malahan secepatnya,&quot; tuturnya.&nbsp;<br />\r\n<br />\r\nHal senada diungkapkan Pelatih Persib Bandung, Djadjang Nurdjaman. Pelatih asal Majalengka ini tak memungkiri tim Maung Bandung sudah mendapatkan tawaran untuk berlaga dalam sebuah pertandingan. Namun informasi yang didapat bukan untuk pertandingan pada 10 November melainkan pada 24 Oktober. Kabarnya, laga 24 Oktober nanti digagas secara langsung oleh MNCTV dengan mempertemukan Persib Bandung melawan tim Malaysia Selection dalam laga bertajuk persahabatan. Djanur pun berharap, laga persahabatan tersebut dapat digelar sesuai rencana. Sebab akan menjadi keuntungan bagi timnya, khususnya bagi para pemainnya agar kembali memiliki kegiatan lantaran kompetisi Indonesia Super League (ISL) 2015 belum juga menemui kejelasan. &quot;Ya, mudah-mudahan saja jadi,&quot; harap Djanur.&nbsp;<br />\r\n<br />\r\nMenghadapi Malaysia Selection sendiri bukan kali pertama dilakukan Persib. Tepat, pada 2 Oktober 2014 lalu, tim berjuluk Pangeran Biru sempat mencicipi laga melawan klub tetangga. Laga yang digelar di Stadion Gelora Bandung Lautan Api (GBLA) itu berakhir dengan skor akhir 3-0 yang dimenangkan Persib Bandung melalui gol Djibril Coulibaly, Makan Konate dan Ferdinand Alferd Sinaga.</p>\r\n', 'gambar18.jpg', 'Soccer'),
(19, 'Piala Thomas dan Uber 2016', '2018-07-11', 'www.sports.sindonews.com/raket', '<p><strong>Raket</strong> &ndash; Nomor tunggal yang awalnya diplot sebagai penentu kemenangan Indonesia untuk merebut juara Grup C gagal terlaksana. Pasangan Tiara Rosalia Nuraidah/Anggia Shitta Awanda yang turun di partai keempat harus kalah dari Jongkolphan Kittiharakul/Rawinda Prajangjai dengan 21-14, 21-17, 22-24. Dengan hasil tersebut, nomor tunggal yang akan mempertemukan Greroria Mariska vs Nitchaon Jandapol sudah tidak berarti lagi mengingat Thailand secara keseluruhan sedah menang 3-1. Thailand dipastikan yang keluar sebagai juara grup meskipun di laga terakhir Indonesia berebut kemenangan.&nbsp;<br />\r\n<br />\r\nSementara itu dalam pertandingan yang berlangsung di Kunshan Sport Center, Jiantsu, China, Selasa (17/6/2016), kemenangan yang diperoleh Tiara/Anggia harus dilalui dengan kerja keras. Pasangan Thailand ternyata tak ingin melepaskan partai ini dengan terus memberikan tekanan. Alhasil, kejar mengejar angka menjadi pemandangan sepanjang pertandingan. Di game kedua, Tiara/Anggia yang sempat unggul malah berbalik tertinggal. Pasangan Thailand beruntung bisa merebut game kedua. Di game penentu, kedua pasangan langsung terlibat persaingan ketat. Angka kembar terus berlangsung sampai kedudukan 6-6. Namun pasangan Thailand sempat meninggalkan Tiara/Anggia 10-8 walau akhirnya bisa disamakan. Sayangnya pasangan Indonesia tak bisa memanfaatkan momentum setelah memperoleh interval pada kedudukan 11- 10. Sebaliknya, Jongkolphan/Rawinda yang bisa membalikan keadaan dengan unggul 13-11. Pasangan Indonesia mencoba mengejar hingga menyamakan kedudukan menjadi 14-14. Di angka-angka penting, kedua pasangan kembali terlibat perang terbuka. Angka sama berulang kali terjadi sampai di angka 18-18, 19-19. Namun pasangan Thailand beruntung setelah mampu menuntaskan pertandingan dengan skor akhir 24-22.&nbsp;</p>\r\n', 'gambar19.jpg', 'Raket'),
(20, 'Rio Haryanto Cetak Catatan Terbaik di Sirkuit de Catalunya Barcelona', '2018-08-09', ' www.soccer.sindonews.com/MotoSport', '<p>MotoSport&nbsp;- Rio Haryanto menyelesaikan catatan waktu terbaik 1 menit 27.625 detik dari 45 lap yang dilahapnya selama mengikuti tes pramusim kedua di Sirkuit de Catalunya, Selasa (1/3/2016) sore waktu setempat. Meskipun berada di posisi buncit, namun pembalap kelahiran Solo, Jawa Tengah, 22 Januari 1993 itu sukses memecahkan rekor pribadi dengan di hari pertama ini. Rio tercatat lebih cepat 0.624 dari tes pertama di Sirkuit de Catalunya, dan berarti ia mulai mengalami kemajuan. Walaupun ada sedikit kendala selama turun di sesi pagi hari di tes pramusim kedua ini. Pasalnya MRT05 yang dikendarainya mengalami kebocoran oli, sehingga ia hanya melakukan dua putaran saja.&nbsp;<br />\r\n<br />\r\n&quot;Kami mengalami kebocoran oli dan sulit untuk melanjutkan tes pagi hari,&quot; demikian pernyataan Manor seperti dikutip GPUpdate.&nbsp;<br />\r\n<br />\r\nPada tes pramusim kedua di hari pertama ini, Nico Rosberg keluar sebagai yang tercepat. Pilot jet darat Mercedes itu membukukan waktu tercepat 1 menit 23.022 detik dari 82 lap yang dilahapnya. Rekan setim Lewis Hamilton itu unggul dari Valterri Bottas dan Fernando Alonso, yang mengunci tempat di urutan kedua serta ketiga. Sementara juara dunia Formula 1 musim lalu Hamilton tercecer di barisan keenam dengan catatan waktu 1 menit 25.051 detik. Mantan kekasih Nicole Scherzinger itu kalah cepat dari pilot jet darat Red Bull (Daniil Kvyat) dan Kimi Raikkonen (Ferrari).&nbsp;</p>\r\n', 'gambar20.jpg', 'MotoSport'),
(21, 'Piala Thomas dan Uber 2016', '2018-08-12', ' www.sports.sindonews.com/raket', '<p><strong>Raket</strong> - Setelah tidak berlaga di semifinal, Tommy Sugiarto kembali diturunkan di babak final perebutan Piala Thomas menghadapi Demark. Bukan tanpa alasan mengapa tim pelatih mempercayakan partai pertama pada Tommy. Ini adalah laga pertama Tommy setelah diistirahatkan dalam dua pertandingan. Selain laga empat besar, anak mantan juara dunia Icuk Sugiarto pun tidak dimasukkan namanya ketika Indonesia menghadapi India di penyisihan Grup B tahun kemarin. Manajer Tim Thomas Indonesia, Rexy Mainaky mengungkapkan alasan mengapa Tommy diyakini bisa mendulang angka pertama lawan Demark.&quot; Kami yankin bisa ambil kemenangan di dua ganda dan satu tunggal. Tommy sengaja diturunkan karena melihat pertemuan terakhir, dia punya kans menang kalau tidak retired.&quot;, kata Rexy dilansir Badmintonindonesia,Minggu(22/5/2016).<br />\r\n<br />\r\nSelain Tommy, nomor ganda di partai kedua yang dipercayakan pada Hendra setiawan/Mohammad Ahsan juga diperkirakan bisa menghasilkan angka melawan pasangan Mads Pieler-Kolding/Mads Conrad-Petersen, peluang Indonesia di ataskertas lebih besar. Selain itu Di partai ketiga, Anthony Ginting diharapkan bisa membuat kejutan.Anthony akan berhadapan dengan lawan yang tidak mudah yaitu, Jan O Jorggensen. Sejauh ini rekor pertemuan kedua pemain memang belum tercatat karena belum pernah bertemu. Sebagai pemain muda, Anthony unggul dari segi stamina dan ia seharusnya mampu tampil lepas menghadapi pemainyang lebih senior. &quot;Di tunggal kedua, kami menilai permainan Anthony lebih cocok menghadapi lawan ketimbang Jonatan,&quot; tambah Rexy.</p>\r\n', 'gambar21.jpg', 'Raket'),
(22, 'Hasil Lengkap GP Italia dan Klasemen MotoGP 2016', '2018-08-12', 'www.sports.sindonews.com/motosport', '<p><strong>Motosport</strong> - Jorge Lorenzo makin betah berada di puncak klasemen sementara MotoGP 2016 setelah berhasil mengamankan podium pertama di GP Italia, Minggu (22/5/2016) malam WIB. Ini merupakan kemenangan keempat bagi joki Movistar Yamaha sejak ia masuk di kelas utama. Lorenzo bisa dikatakan sudah mengenal karakteristik Sirkuit Mugello. Sehingga ia dengan mudah mencuri posisi terdepan yang sebelumnya dipegang oleh Valentino Rossi.&nbsp;<br />\r\n<br />\r\nLorenzo tampak menikmati keberadaannya di posisi terdepan. Maklum, beberapa ancaman yang sempat dilakukan Rossi masih mampu ia atasi. Sayangnya, ketika balapan seri keenam musim ini makin menegangkan. The Doctor justru meninggalkan arena pacuan kuda besi Mugello tepat 15 lap tersisa lantaran YZR M1 mengalami masalah mesin. Akibatnya Rossi gagal menyentuh garis finish di Mugello dan dia tidak mampu memberikan kado istimewa di depan pendukung setianya. Keluarnya juara dunia sembilan kali itu membuat Lorenzo makin menarik saat Marquez mengambil posisi X-Fuera di lap terakhir.&nbsp;</p>\r\n', 'gambar22.jpg', 'Moto Sport'),
(23, 'Tiga Bintang Inter Dilarang Hengkang', '2018-08-13', 'www.kompas.com/bola', '<p><strong>Soccer</strong>&nbsp;- Presiden Inter Milan Erick Thohir berhasrat mempertahankan tiga pemain bintangnya, yaitu Mauro Icardi, Ivan Perisic, dan Miranda. Ketiga pemain tersebut cukup menggiurkan menilik nilai pasar. Mereka termasuk dalam lima pemain Inter dengan harga tertinggi. Meski begitu, sang patron tidak tergoda untuk menambah pundi-pundi dengan risiko mereduksi kekuatan tim. &quot;Untuk siapa pun yang ingin mendekati, pemain seperti Icardi, Perisic, dan Miranda tidak dijual,&quot; kata Thohir.&nbsp;<br />\r\n<br />\r\nTidak dimungkiri oleh Thohir, klub berjulukan I Nerazzurri dituntut menyeimbangkan neraca keuangan demi menaati Financial Fair Play (FFP). Inter semakin tertekan karena gagal masuk ke Liga Champions 2016-2017. Mereka mengakhiri Serie A musim ini di posisi keempat sehingga hanya boleh tampil di kompetisi kasta kedua, Liga Europa. &quot;Liga Europa juga bukanlah bencana. Kami baru mendapatkan masalah apabila tidak lolos ke kompetisi antarklub Eropa sama sekali,&quot; ucap sang patron. &quot;Oleh karena itu, kami tidak akan menjual enam pemain inti. Kami mungkin menjual tiga, tidak lebih,&quot; tutur dia. Adapun untuk transfer masuk, Inter belum mengumumkan satu pun nama. Mereka baru diberitakan semakin dekat dengan gelandang Valencia, Ever Banega.&nbsp;</p>\r\n', 'gambar23.jpg', 'Soccer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `id_user`, `isi_komentar`) VALUES
(1, 21, 1, 'artikelnya bagus, sangat membantu untuk mengetahui informasi tentangg thomas cup'),
(2, 23, 1, 'artikelnya menarik, cukup membantu untuk mendapatkan informasi seputar badminton'),
(3, 22, 1, 'hmm, lorenzo blm  ada yang dapat mengalahkannya..');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`) VALUES
(1, 'Fitri Wulandari', 'fitriwulandaru@gmail.com', '0b5828232087b4e48d9ca4442ba1e41b30dcd50e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_artikel` (`id_artikel`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
