-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 01:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel_api`
--

CREATE TABLE `artikel_api` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel_api`
--

INSERT INTO `artikel_api` (`id`, `judul`, `link`, `image`, `summary`) VALUES
(1, '13 Tips Agar Terhindar Dari Penyakit Diabetes', 'https://petrokimia-gresik.com/news/13-tips-agar-terhindar-dari-penyakit-diabetes', 'https://res.cloudinary.com/dk0z4ums3/image/upload/v1596469185/attached_image/diabetes-0-alodokter.jpg', 'Diabetes mellitus atau kencing manis merupakan penyakit yang ditandai oleh meningkatnya kadar gula darah (hiperglisemia) secara terus menerus, terlebih setelah makan. Terdapat tiga jenis diabetes yakni diabetes tipe 1, diabetes tipe 2, dan gestational diabetes, namun yang paling sering dijumpai adalah diabetes tipe 2. Diabetes mellitus menempati posisi ke-4 sebagai penyebab kematian manusia di dunia. Diabetes terjadi akibat gaya hidup tidak sehat seperti pola makan yang tidak sehat sehingga menyebabkan obesitas dan malas berolahraga. Agar terhindar dari penyakit diabetes, berikut ini ada beberapa tips yang bisa anda lakukan, diantaranya adalah :'),
(2, 'Usia Muda, Begini Cara Cegah Penyakit Diabetes', 'https://www.halodoc.com/artikel/usia-muda-begini-cara-cegah-penyakit-diabetes', 'https://d1bpj0tv6vfxyp.cloudfront.net/articles/01aeaefa-2b4e-4545-bafb-58ad6ac0a42b_article_image_url.webp', 'Nyatanya, upaya pencegahan diabetes bisa dilakukan sejak usia muda dengan menerapkan pola hidup sehat. Berikut ini beberapa cara yang bisa dilakukan untuk membantu menurunkan risiko penyakit ini, antara lain: '),
(3, 'Diabetes :Penderita di Indonesia bisa mencapai 30 juta orang pada tahun 2030', 'https://p2ptm.kemkes.go.id/tag/diabetes-penderita-di-indonesia-bisa-mencapai-30-juta-orang-pada-tahun-2030', 'https://rsupindad.com/wp-content/uploads/2019/07/diabetes-1024x787.jpg', 'Jumlah penderita terus meningkat dan tercatat saat ini mencapai 422 juta orang di dunia - empat kali lebih banyak dari pada 30 tahun lalu, menurut Organisasi Kesehatan Dunia (WHO).Meskipun terdapat berbagai risiko ini, setengah penderita diabetes tidak menyadarinya.Tetapi perubahan gaya hidup dapat mencegahnya, dalam beberapa kasus. Begini caranya.'),
(4, 'Kelebihan Gula Stevia Dibandingkan Gula Pasir dan Gula Merah.', 'https://lifestyle.sindonews.com/read/1109165/185/kelebihan-gula-stevia-dibandingkan-gula-pasir-dan-gula-merah-1685073927?_gl=1*778l8b*_ga*eDNoRGpDUzhNRGw5SHgwUWY4R3VqVWIzUDhYRjljUVJEN0NkLTM3X21qUXg1MmtSZjlQRXVnMkppQVdjWnZqYg', 'https://pict.sindonews.net/dyn/732/pena/news/2023/05/26/185/1109165/kelebihan-gula-stevia-dibandingkan-gula-pasir-dan-gula-merah-ixq.jpg', 'Kelebihan gula stevia dibandingkan gula pasir dan gula merah menarik untuk diketahui. Pasalnya, mungkin masih banyak di antara masyarakat yang belum tahu kelebihan dari gula stevia. Penggunaan gula stevia sebagai pemanis sudah banyak digunakan di berbagai negara, termasuk Jepang, Korea, China, Asia Tenggara, Amerika Selatan, bahkan Indonesia. Salah satu kelebihan gula stevia dibandingkan gula pasir dan gula merah adalah karena tidak mengandung kalori, dan tidak menyebabkan kenaikan kadar gula darah saat dikonsumsi.'),
(5, '7 Buah Ini Harus Dihindari Penderita Diabetes, Kadar Gulanya Tinggi', 'https://www.liputan6.com/hot/read/5307417/7-buah-ini-harus-dihindari-penderita-diabetes-kadar-gulanya-tinggi', 'https://cdn0-production-images-kly.akamaized.net/b88sZV5ta6lFrqPd4cKKv76IDlw=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2975326/original/022808800_1574431776-fruit-bowl-1600023_1920.jpg', 'Buah yang harus dihindari penderita diabetes karena mengandung gula yang tinggi. Walaupun buah-buahan terkenal memiliki berbagai kandungan yang sehat untuk tubuh, ternyata beberapa jenis buah malah harus dihindari oleh orang-orang dengan kondisi tertentu. '),
(6, 'Kolesterol', 'https://www.halodoc.com/kesehatan/kolesterol', 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/06/16071428/Kolesterol.jpg.webp', 'Kolesterol adalah lemak yang diproduksi oleh tubuh, dan juga berasal dari makanan hewani. Senyawa ini membantu tubuh memproduksi vitamin D, sejumlah hormon, dan asam empedu untuk mencerna lemak. Dalam kadar yang sesuai, ini sebenarnya dibutuhkan oleh tubuh dalam membantu membangun sel-sel baru agar tubuh bisa tetap berfungsi secara normal. '),
(7, 'Penting untuk Dipahami, Ini Kadar Kolesterol Normal Tubuh', 'https://www.siloamhospitals.com/informasi-siloam/artikel/kadar-kolesterol-normal', 'https://mysiloam-api.siloamhospitals.com/public-asset/website-cms/website-cms-16679656139806745.webp', 'Kolesterol terbagi menjadi dua jenis, yaitu kolesterol jahat (LDL) dan kolesterol baik (HDL). HDL berfungsi mencegah terjadinya aterosklerosis (penyempitan pembuluh darah akibat lemak).Sebaliknya, LDL adalah kolesterol yang menjadi salah satu penyebab utama terjadinya aterosklerosis. Selain LDL dan HDL juga terdapat lemak dalam bentuk lain yang disebut trigliserida.Nah, berikut kadar kolesterol seseorang berdasarkan masing-masing jenis di atas:'),
(8, 'Kolesterol', 'https://yankes.kemkes.go.id/view_artikel/1743/kolesterol', 'https://yankes.kemkes.go.id/img/bg-img/gambarartikel_1667192711_938012.png', 'Di Indonesia, penderita kolesterol bisa dibilang cukup tinggi, yaitu mencapai 28%. Lebih mengejutkan lagi, ternyata 7,9% orang di dunia meninggal akibat penyakit ini. Jika terlambat diatasi, kolesterol tinggi memang akan membahayakan kesehatan, bahkan bisa menyebabkan kematian. Secara umum, kolesterol tinggi dapat diartikan sebagai kondisi ketika kadar kolesterol dalam darah lebih tinggi dibandingkan nilai normal. Kolesterol yang dibiarkan tidak terkendali lama-kelamaan dapat menyumbat pembuluh darah, yang pada akhirnya bisa menyebabkan penyakit stroke, aterosklerosis, angina, dan serangan jantung.'),
(9, 'Diimbau Tes Kolesterol 4-6 Tahun Sekali, Ini 6 Gejala Zat Lemak di Tubuh Tinggi', 'https://kesehatan.kontan.co.id/news/diimbau-tes-kolesterol-4-6-tahun-sekali-ini-6-gejala-zat-lemak-di-tubuh-tinggi?page=all', 'https://foto.kontan.co.id/gQ16kq_BvJ5wcXJney2gDbbaqT0=/smart/2023/05/17/1668113158p.jpg', 'Kolesterol tinggi umumnya tidak menimbulkan tanda-tanda khas di awal. Sehingga, tanda-tanda kolesterol tinggi muncul seiring dengan bertambah parahnya kesehatan tubuh Anda terpengaruh. '),
(10, '10 Buah yang Bantu Turunkan Kolesterol, Mudah Ditemukan', 'https://www.liputan6.com/hot/read/5307443/10-buah-yang-bantu-turunkan-kolesterol-mudah-ditemukan', 'https://d1bpj0tv6vfxyp.cloudfront.net/x-buahbuahan-untuk-redakan-kolesterol-tinggi.jpg', 'Berikut 10 buah-buahan yang dapat membantu menurunkan kolesterol yang berhasil'),
(11, 'Masuk Umur Paruh Baya Wajib Tahu, Ciri-ciri Kolesterol Tinggi dan Cara Mengatasinya', 'https://kesehatan.kontan.co.id/news/masuk-umur-paruh-baya-wajib-tahu-ciri-ciri-kolesterol-tinggi-dan-cara-mengatasinya', 'https://rsusaifulanwar.jatimprov.go.id/wp-content/uploads/2016/10/Kolesterol.jpg', 'Usia juga mempengaruhi tingkat kolesterol tubuh seseorang. Semakin tua, hati manusia semakin sulit untuk membuang LDL atau Low Density Lipoprotein (lemak jahat yang menyalurkan kolesterol dalam tubuh).'),
(12, '7 Langkah Efektif Mencegah Terjadinya Asam Urat', 'https://hellosehat.com/muskuloskeletal/radang-sendi/pencegahan-asam-urat/', 'https://cdn.hellosehat.com/wp-content/uploads/2017/07/shutterstock_425040325.jpg?w=1080&q=75', 'Berikut beberapa cara yang bisa dilakukan untuk mencegah penyakit asam urat dan kekambuhan gejalanya:'),
(13, '9 Cara Ampuh Mengobati Asam Urat di Rumah', 'https://hellosehat.com/muskuloskeletal/radang-sendi/cara-mengobati-asam-urat-menurunkan/', 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/06/16030643/144891_4-1-2021_14-35-31.jpg', 'Asam urat tidak bisa disembuhkan total. Namun, Anda bisa mengobati gejalanya agar tidak mengganggu keseharian.Kunci dari mengobati asam urat berlebih dengan mengubah gaya hidup jadi lebih sehat. Berikut adalah berbagai cara mengobati asam urat yang bisa Anda lakukan di rumah:'),
(14, '8 Cara Menurunkan Kadar Asam Urat secara Alami Tanpa Obat', 'https://health.kompas.com/read/2021/12/06/140000868/8-cara-menurunkan-kadar-asam-urat-secara-alami-tanpa-obat?page=all', 'https://asset.kompas.com/crops/Nn_dqK6ZW-3O2NKkw-kfsSbwaf4=/243x49:5901x3821/750x500/data/photo/2021/11/26/61a047fadbf07.jpg', 'Asam urat adalah jenis radang sendi yang berkembang ketika kadar asam urat darah tinggi secara tidak normal. Asam urat membentuk kristal di persendian, sering kali di kaki dan jempol kaki, yang menyebabkan pembengkakan parah dan menyakitkan. Beberapa orang memerlukan obat untuk mengatasi asam urat, tetapi perubahan pola makan dan gaya hidup juga dapat membantu.'),
(15, 'Kenali 4 Gejala Asam Urat Tinggi dan Kapan Harus Berobat ke Dokter.', 'https://lifestyle.kompas.com/read/2022/08/23/060600920/kenali-4-gejala-asam-urat-tinggi-dan-kapan-harus-berobat-ke-dokter?page=all', 'https://asset.kompas.com/crops/qIXcRaDqB4sS6UKqLl1CBNZuCFI=/0x0:1266x844/1200x800/data/photo/2021/10/21/6170f40447546.jpg', 'Secara umum, asam urat menyerang pada pria di atas usia 30 tahun. Sedangkan pada wanita biasanya mengalami asam urat ketika sudah memasuki fase menopause. Meski begitu, bukan berarti kadar asam urat yang tinggi tidak dapat dideteksi sejak dini. Sebab, beberapa gejalanya sudah dapat dicurigai bila merasakan beberapa kondisi berikut ini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_api`
--
ALTER TABLE `artikel_api`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel_api`
--
ALTER TABLE `artikel_api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
