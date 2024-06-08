-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 02:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `state`, `email`, `role`, `email_verified_at`, `password`, `status_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ellie Becker', '+16298285124', 'Idaho', 'anderson.amalia@example.net', 5, '2024-06-08 05:15:15', '$2y$10$QzYmde3aY37lrbCZUA9URu65gbkHFyR7tl5CZFmg/wPyijrzj1QU6', NULL, 'oXDAq8CKOqJLYJ6lyaYuxJCRWYsjIVkpF4zNa3xDovWZfKoUX2qHVfkdR1eN', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(2, 'Nicolas Lesch', '+15857729389', 'North Carolina', 'adams.larue@example.com', 1, '2024-06-08 05:15:16', '$2y$10$6Dufg1xyVFRGif7j1WNOOOCHsiDQnjJpVGW9kXG6WPlZdLqElION6', NULL, '12aLdjKeY8L0VvCvRwEVtevmI7mp3M255VDdB15j5DNOt5OupPK3c6XTAicA', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(3, 'Odessa Schultz', '+18102256034', 'Alaska', 'madeline22@example.net', 6, '2024-06-08 05:15:16', '$2y$10$UwWNGv4hxY5OML6wY7oLSeXSk79yJIS95ex/a53vhGEECMC2oev02', NULL, '1ovHwOWawF', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(4, 'Millie Larkin', '+18659852292', 'Vermont', 'gislason.mekhi@example.org', 6, '2024-06-08 05:15:16', '$2y$10$STnbCf5ydNs3jg/G8zEBouY2PeK7dQ2MZE5mnZRCd/T0TsYYr2LoG', NULL, 'ibinEKASiH', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(5, 'Mr. Patrick Kassulke DDS', '+17434873779', 'Washington', 'tprohaska@example.org', 3, '2024-06-08 05:15:16', '$2y$10$OiKO9MQTSxNEIGslm33K..KczMWBNeW8zUMpZCyxlKVSLz1lQDrqi', NULL, 'b9QdufeGox', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(6, 'Alexie Bednar', '+14406694264', 'Kentucky', 'neva.connelly@example.org', 6, '2024-06-08 05:15:16', '$2y$10$H73ukVd7tskKc1YYgkzZGeOsVbgWOsdMJA3.MksLHhfeFIJqnUjUe', NULL, 'a2tZfhhjs2', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(7, 'Will Parisian', '+15185098494', 'Florida', 'layla.gorczany@example.com', 1, '2024-06-08 05:15:16', '$2y$10$fQdxvhoPE3k6hPSrPLCrEekAdSHwbtNn1GEeLjfvH/XPRKg7sL0XG', NULL, 'vBJMFPwlI4', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(8, 'Rafaela Schuppe', '+15633616153', 'Tennessee', 'xtrantow@example.net', 2, '2024-06-08 05:15:16', '$2y$10$azxGHDGKFLO74uynCvrfguj5FhGwbRxx7gIizCC3pZy9jVfcgu92K', NULL, '7f4EUAV9cOAQRg64sguSvNO8C838ChRauAB37avJwmm8ZS5Z4phyFqzTAW1X', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(9, 'Prof. Violet Skiles', '+18502021486', 'North Dakota', 'verona86@example.net', 3, '2024-06-08 05:15:16', '$2y$10$KWxzJgHOz5X.7U5IG.yp9.9HuYTGZ9YEi5Z7R9ZXKjZbJLNe4aSqK', NULL, 'CQdDoLeU2p', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(10, 'Miss Roxane Wintheiser V', '+14354450733', 'Wyoming', 'rhiannon.kihn@example.net', 6, '2024-06-08 05:15:16', '$2y$10$wHu6QoZMWx2nVSwk8o8McOg/G.PPbrMQa8PjDP1R2jaXyuY3WDgRy', NULL, '8W6e5K5Nlo', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(11, 'Winston Jacobi', '+19376415782', 'Oklahoma', 'oberbrunner.maye@example.com', 5, '2024-06-08 05:15:16', '$2y$10$L8rbX1vrokr/ue/kWtz4.eUiwfhNenUwnn6RpfXXbptfCKjN7KV0O', NULL, 'X8Wjj0ySkt', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(12, 'Paxton Jakubowski V', '+16786751595', 'Illinois', 'khackett@example.org', 4, '2024-06-08 05:15:16', '$2y$10$ltmolebGWQCXOaWjBWaK2OxmHD210I0fX2RITmfT225y.BLGEogMi', NULL, 'LSvtEyWhtur5SQJl8ldJjsTmID6S8rKaTzSQQfpyqVRn8MZ7Ny2eZfjsy93c', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(13, 'Mr. Ellsworth Rath I', '+14235495808', 'New Jersey', 'wuckert.kaley@example.com', 2, '2024-06-08 05:15:16', '$2y$10$msld8vQ20dtFl06FYcWYTO.lBaQg4MHaYURqVH1Sh.NpuNlssydPi', NULL, 'EBvZJ6VCPX', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(14, 'Dedric O\'Conner MD', '+16237585277', 'Wyoming', 'zakary.weimann@example.com', 6, '2024-06-08 05:15:16', '$2y$10$84umD0j1F2SYw2SxnzycDe3T8pWWonDDwqZr2Sv4GVcSkxZA6PS3q', NULL, 'qBDZApaSuc', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(15, 'Dr. Winston Hettinger III', '+13042700132', 'Arkansas', 'jewell.howe@example.org', 6, '2024-06-08 05:15:16', '$2y$10$NigdlI6AwGBmX8xibT6F4ej0IzQ6JG0VF2NVc1dyg5drm9I2Eeg.G', NULL, '5cJvcBJ66l', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(16, 'Jarrell Carter', '+17046402429', 'West Virginia', 'gracie.kuhic@example.com', 3, '2024-06-08 05:15:16', '$2y$10$N66wn8tVmcF131RQcz3GpOGS/tQCZiiQD4.xYgNth0nfMqvyJF4PS', NULL, '4A65qcz4FcVB2U9MOKXcXGaOUdsSQtGyVhzi69fiGp4eStA9IOHnRDWqkb4P', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(17, 'Loren Grant', '+17549713408', 'West Virginia', 'merritt16@example.net', 6, '2024-06-08 05:15:16', '$2y$10$7a9n4epDAqYGcSDJIqBDZuw/QE/mJnnhXECk.2E3AGJnuNpx5Ad4e', NULL, 'pgEt5LG2E5', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(18, 'Elvis Leuschke I', '+12396338972', 'Delaware', 'melissa.torp@example.com', 3, '2024-06-08 05:15:17', '$2y$10$e6zenFJpzhJPpgP8fwFF1uNZB4nRPTvEPXHS0ZnESfIW9AxyEdZlC', NULL, 'Cg2kCanRXE', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(19, 'Dr. Aniya Gleichner II', '+18483785005', 'Illinois', 'kenya.gottlieb@example.org', 3, '2024-06-08 05:15:17', '$2y$10$n9QM8kpMXEIJ5V6VfVb2O.5VhINFfWzZ4IiyB7Md04BC3iMnbdm4e', NULL, 'jsJTvhWi9Z', '2024-06-08 05:15:17', '2024-06-08 05:15:17'),
(20, 'Montana Davis', '+14235076247', 'Oklahoma', 'wolf.steve@example.org', 6, '2024-06-08 05:15:17', '$2y$10$EjD1yVTWp.mX2d2l7Yeg4O0EfzzwndKd9LHHSSBVRqDxS/KlBQuGC', NULL, 'Oo6mNp3PUR', '2024-06-08 05:15:17', '2024-06-08 05:15:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
