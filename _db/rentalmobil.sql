-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2024 pada 20.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `excerpt`, `description`, `image`, `type_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blog 1', 'blog-1', 'Excerpt for Blog 1', '<p>Description for Blog 1</p>', 'blog/images/QZvEu4Qm3jarz86qfQncBp4RNZRsZ2efeTOkoTPm.jpg', 1, 1, '2024-03-18 17:20:26', '2024-03-18 12:31:49'),
(2, 'Blog 2', 'blog-2', 'Excerpt for Blog 2', '<p>Description for Blog 2</p>', 'blog/images/QpAZ2UPHB9pRDYNG77IFyGxG9wHgNHOvrLK5jwC0.jpg', 2, 1, '2024-03-18 17:20:26', '2024-03-18 12:32:11'),
(3, 'Blog 3', 'blog-3', 'Excerpt for Blog 3', '<p>Description for Blog 3</p>', 'blog/images/l6aSZbWy4CJUNgy2NgUbr5bHIItrSuizwkwAik7m.jpg', 3, 1, '2024-03-18 17:20:26', '2024-03-18 12:32:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat_lengkap` varchar(255) NOT NULL,
  `nomer_wa` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `car_id`, `nama_lengkap`, `alamat_lengkap`, `nomer_wa`, `created_at`, `updated_at`) VALUES
(1, 1, 'John Doe', 'Jl. Jendral Sudirman No. 123', '08123456789', '2024-03-18 17:28:02', '2024-03-18 17:28:02'),
(2, 2, 'Jane Doe', 'Jl. Gatot Subroto No. 456', '08123456788', '2024-03-18 17:28:02', '2024-03-18 17:28:02'),
(3, 3, 'Michael Smith', 'Jl. HR Rasuna Said No. 789', '08123456787', '2024-03-18 17:28:02', '2024-03-18 17:28:02'),
(4, 1, 'ALI MOCHTAR', 'JL. RAYA CILEGON NO. 212', '08179851011', '2024-03-18 12:16:21', '2024-03-18 12:16:21'),
(5, 2, 'ALFAZA INDRA', 'JL. RAYA CILEGON NO. 200', '08799900088', '2024-03-18 12:43:48', '2024-03-18 12:43:48'),
(6, 8, 'LUTFI IRAWAN', 'JL. RAYA JAKARTA NO. 212', '08777788899', '2024-03-18 12:44:56', '2024-03-18 12:44:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `pintu` int(11) NOT NULL,
  `penumpang` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`id`, `nama_mobil`, `slug`, `type_id`, `price`, `pintu`, `penumpang`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Civic Type R', 'new-civic-type-r', 1, '200000.00', 4, 5, 'Sedan populer dengan desain sporty dan efisiensi bahan bakar yang baik.', 'cars/images/ULl4iqI3njQkgX9AYMuIFravMMr3naMCCvvYyp86.jpg', 1, '2024-03-18 17:20:36', '2024-03-18 12:14:07'),
(2, 'Toyota RAV4', 'toyota-rav4', 2, '300000.00', 4, 5, 'SUV kompak yang tangguh dengan ruang kargo yang luas dan efisiensi bahan bakar yang baik.', 'cars/images/t7QrwRIo7fEionBSb93xjr1Yw3361TD3yaBBGjhT.jpg', 1, '2024-03-18 17:20:36', '2024-03-18 12:10:23'),
(3, 'Toyota Innova', 'toyota-innova', 3, '400000.00', 4, 7, 'MPV keluarga yang tangguh dengan ruang kargo yang fleksibel dan fitur keselamatan yang lengkap.', 'cars/images/tKJHH7iaBjyWLVLZkWwA8FXh8xdozMPVRYRpimXZ.jpg', 1, '2024-03-18 17:20:36', '2024-03-18 12:11:58'),
(4, 'Toyota Sienna', 'toyota-sienna', 8, '500000.00', 4, 8, 'Van keluarga dengan fitur keamanan yang lengkap dan kenyamanan yang tinggi.', 'cars/images/HOq3FAmyL9UQosHSdAjzN6p1gTy5488PNgZEiHo9.jpg', 1, '2024-03-18 12:34:59', '2024-03-18 12:35:20'),
(5, 'Volkswagen Golf', 'volkswagen-golf', 4, '500000.00', 4, 5, 'Hatchback yang sporty dengan kinerja yang tangguh dan kabin yang nyaman.', 'cars/images/4ObakSpXwTLJIxCqXbwcvDx94Z19DslUZ39NaAGy.jpg', 1, '2024-03-18 12:36:59', '2024-03-18 12:36:59'),
(6, 'Toyota Aygo', 'toyota-aygo', 5, '350000.00', 4, 4, 'City car yang kompak dengan gaya yang menarik dan konsumsi bahan bakar yang rendah.', 'cars/images/KGXsUEOfqtqDI8Q6KPAGXzlCRVPk2sDPNN8JfYB0.jpg', 1, '2024-03-18 12:38:53', '2024-03-18 12:38:53'),
(7, 'Toyota Hiace', 'toyota-hiace', 6, '700000.00', 4, 15, 'Minibus yang andal dengan ruang kargo yang luas dan daya tahan yang tinggi.', 'cars/images/vRfGmaF3DmUpofvahT7NJmOLA8qWDt9aXTectrxS.jpg', 1, '2024-03-18 12:40:11', '2024-03-18 12:40:11'),
(8, 'Volvo 9700', 'volvo-9700', 7, '4000000.00', 3, 53, 'Bus yang aman dan nyaman dengan kinerja yang handal dan desain yang elegan.', 'cars/images/L5c7sjHjUnGpQekdljtMjT4ELkN7Xsb2PXqyprPG.jpg', 1, '2024-03-18 12:43:01', '2024-03-18 12:43:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', 'category-1', '2024-03-18 17:20:46', '2024-03-18 17:20:46'),
(2, 'Category 2', 'category-2', '2024-03-18 17:20:46', '2024-03-18 17:20:46'),
(3, 'Category 3', 'category-3', '2024-03-18 17:20:46', '2024-03-18 17:20:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_awal` varchar(255) NOT NULL,
  `nama_akhir` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `nama_awal`, `nama_akhir`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Doe', 'john@example.com', 'Message from John Doe', '2024-03-18 17:20:55', '2024-03-18 17:20:55'),
(2, 'Jane', 'Doe', 'jane@example.com', 'Message from Jane Doe', '2024-03-18 17:20:55', '2024-03-18 17:20:55'),
(3, 'Alice', 'Smith', 'alice@example.com', 'Message from Alice Smith', '2024-03-18 17:20:55', '2024-03-18 17:20:55'),
(4, 'LUTFI', 'IRAWAN', 'lutfi@gmail.com', 'mohon info mobil yg ready untuk sewa 1 bulan', '2024-03-18 12:45:59', '2024-03-18 12:45:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_26_080734_create_types_table', 1),
(7, '2023_03_27_090022_create_categories_table', 1),
(8, '2023_03_27_091052_create_cars_table', 1),
(9, '2023_03_27_091600_create_testimonials_table', 1),
(10, '2023_03_27_091847_create_blogs_table', 1),
(11, '2023_03_27_093240_create_teams_table', 1),
(12, '2023_03_27_093547_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `footer_description` text DEFAULT NULL,
  `tentang_perusahaan` varchar(255) DEFAULT NULL,
  `sejarah_perusahaan` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `alamat`, `phone`, `email`, `footer_description`, `tentang_perusahaan`, `sejarah_perusahaan`, `facebook`, `instagram`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'lombok indonesia', '0819988445', 'sewamobil@example.com', 'sewa mobil terpercaya', 'membantu anda menyewa mobil impian', 'Berdiri sejak tahun penjajahan lol', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', '2024-03-18 10:13:49', '2024-03-18 10:13:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `bio` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `nama`, `jabatan`, `photo`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'CEO', 'team/photo/g7X3igdq8xiKgBkJuECloDLJsbYZU4FzMRzWiH7y.png', 'Bio for John Doe', '2024-03-18 17:21:02', '2024-03-18 12:30:34'),
(2, 'Jane Doe', 'CTO', 'team/photo/bdh7KIoy7vJm9ybvTMtf1Djp6mBbQYUhw4tAMuXw.jpg', 'Bio for Jane Doe', '2024-03-18 17:21:02', '2024-03-18 12:30:45'),
(3, 'Alice Smith', 'CFO', 'team/photo/PUjbxupd1MML8BZVlKO5grZfif5Y8mSO6uSPOPfT.jpg', 'Bio for Alice Smith', '2024-03-18 17:21:02', '2024-03-18 12:30:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `profile` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `pekerjaan`, `pesan`, `profile`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'CEO', 'Testimonial from John Doe', 'testimonial/profile/lDt6oWwOFSEjKlOi0CQuiGW4rWhTgWiFHMXji6Fz.png', '2024-03-18 17:21:11', '2024-03-18 10:49:39'),
(2, 'Nita Gelies', 'CTO', 'Testimonial from Jane Doe', 'testimonial/profile/gTS2HtJL83kwP52Bx7E1J0cQ7Fyv23LmleVLv62X.jpg', '2024-03-18 17:21:11', '2024-03-18 11:30:06'),
(3, 'Alice Smith', 'CFO', 'Testimonial from Alice Smith', 'testimonial/profile/SRErxdZl4dy5LieT9ziPDlfKIRnFHwuMhP5t8WrS.png', '2024-03-18 17:21:11', '2024-03-18 11:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'SEDAN', '2024-03-18 17:21:20', '2024-03-18 11:50:56'),
(2, 'SUV', '2024-03-18 17:21:20', '2024-03-18 11:50:34'),
(3, 'MPV', '2024-03-18 17:21:20', '2024-03-18 11:50:44'),
(4, 'HATCHBACK', '2024-03-18 11:51:43', '2024-03-18 11:51:43'),
(5, 'CITY CAR', '2024-03-18 11:51:50', '2024-03-18 11:51:50'),
(6, 'MINIBUS', '2024-03-18 11:51:59', '2024-03-18 11:51:59'),
(7, 'BUS', '2024-03-18 11:52:09', '2024-03-18 11:52:09'),
(8, 'VAN', '2024-03-18 12:33:40', '2024-03-18 12:33:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$sXNXZXsMsuYmbHK4xJEDBuNL.WIB7G973R9epG6RDIims5eRT17gq', 1, NULL, '2024-03-18 10:13:49', '2024-03-18 10:13:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `blogs` ADD FULLTEXT KEY `search` (`title`,`slug`,`excerpt`,`description`);

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_car_id_foreign` (`car_id`);

--
-- Indeks untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
