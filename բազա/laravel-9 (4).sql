-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2023 г., 16:51
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel-9`
--

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE `coments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `azganun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coments`
--

INSERT INTO `coments` (`id`, `anun`, `azganun`, `coment`, `created_at`, `updated_at`) VALUES
(16, 'Ռաֆայել', 'Սրապյան', 'Սովորելեմ ինքնուրույն ինտեռնետի միջոցով,կան որոշակի թերուցյուններ վորոնք ես մենակս չեմ կարողացել ուղել', '2023-04-02 10:06:27', '2023-04-02 10:06:27');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nkar1` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nkar2` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nkar3` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vernagir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nkar` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `homes`
--

INSERT INTO `homes` (`id`, `nkar1`, `nkar2`, `nkar3`, `vernagir`, `nkar`, `text`, `created_at`, `updated_at`) VALUES
(4, 'https://images.squarespace-cdn.com/content/v1/54412118e4b03de3b6796773/1642406643895-4GFOQCK8ROVGVQJRGN8G/Garni-Roman-Temple-2.jpg?format=2500w', 'https://www.advantour.com/img/armenia/images/garni.jpg', 'https://upload.tury.club/data/e501b038ffe72fb715290bc6bd11bcf1/V72tBGjr/Ua40ENFl.jpg', 'Pagan temple of Garnu', 'https://hyurservice.com/images/private_tours/1/1614601942606/hqdefault.jpeg', 'Garni Pagan Temple, an ancient Armenian sun worshiping temple in the village of Garni, Kotayk Marz, on the right bank of Azat River. It is an immovable monument of Armenian history and culture[1].  Based on the traditions, Movses Khorenatsi attributes the foundation of Garni to the great-grandson of Hayk Nahapet Gegham, whose grandson, Garnik, is said to have been named Garni. On April 28, 2011, it became known that the historical and cultural complex of Garnu was awarded the UNESCO-Greece 2011 prize named after Melina Mercuri [3]. year In 65 he went to Roman Emperor Nero to be crowned. Before that, in order to restore the influence of Rome in Armenia, a war started (54-63 AD) against Parthistan, which ended with the victory of the Armenian-Parthian forces. According to the Treaty of Hrandea (64 AD), it was decided that the Armenian king Trdatus I would receive his crown from Nero.  In 59 AD, the Roman troops captured, destroyed and set fire to Artashat, the capital of Armenia. On Nero\'s instruction, Corbulon signed the peace treaty of Hrenada with Trdatus I in 64, recognized the independence of Great Armenia, and Trdatus, the king of Armenia, on the condition that he would go to Rome and be crowned by Nero. In 65, Trdatus I, accompanied by his family - wife and children, nephews, as well as 3 thousand Armenian and Parthian cavalrymen, retinue and a special Roman military unit - set off to Rome by land. They are given a solemn and glorious welcome everywhere. The entire cost of the trip (about 200,000 dinar-drachmae per day) was paid by the Roman Empire.  Emperor Nero receives Trdatus kindly. Magnificent competitions and matches were organized in his honor in the cities of Neropolis and Rome. Trdatus I was crowned by Nero in the Roman Forum in the presence of the crowd and the army. That event is described by Dion Cassius. that day Trdatus, repressing his pride, became servile before opportunity and necessity, without paying attention to what humiliating words he would utter in the hope of the reward he would receive. He spoke thus.', '2022-12-11 10:45:51', '2022-12-11 10:45:51'),
(6, 'https://www.enterprise.am/uploads/2020/01/sevan-large.jpg', 'http://newsarmenia.am/upload/iblock/6db/6db77c8a48656820a6f492300ac642e0.jpg', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/c1/d5/dd/lake-sevan.jpg?w=700&h=-1&s=1', 'Lake Sevan', 'https://armadventure.com/wp-content/uploads/2020/05/Sevan.jpg', 'Lake Sevan, a large high-altitude freshwater lake in the Gegharkunik region of Armenia, at an altitude of about 1900 meters above sea level. It is the 2nd highest freshwater lake in the world after Lake Titicaca in South America.  The length of the lake is 70 km, the maximum width is 55 km. The area of the mirror is 1260 km2, making it the largest in the South Caucasus. The average depth is 46.8 m, the deepest place is 83 m (Pokr Sevan). The volume of water is 32.92 billion m3. Lake Sevan is divided into two parts by Shorzha\'s underwater embankment: Big Sevan (37.7 m average depth) and Little Sevan (50.9 m).  Lake Sevan is the third largest lake of the Armenian Plateau, after Lake Vana and Urmio. Unlike those two, it is an open lake and has fresh water. 28 large and small rivers flow into the lake, among them: Argichi, Masrik, Gavaraget, Karchaghbyur, Vardenis, Dzknaget, but only one, Hrazdan, originates. Thanks to the latter, the annual outflow of water is 0.7 km3.  According to one of the genealogical hypotheses of the lake, it arose in the Quaternary period. It was formed as a result of volcanic activity, as a result of the filling of glacial and snowmelt waters in the intermountain tectonic depression. Aregunu, Sevan, Vardenis, Geghama mountains surround it on four sides.  The waters of Lake Sevan irrigate the Ararat Valley through the Hrazdan River. The 6 power plants built on the Hrazdan River form the biggest Sevan-Hrazdan cascade of the republic. During the years of Soviet power, the level of the lake dropped significantly, as a result of which an ecological problem arose in the region.  Sevan National Park was established in 1978. To restore the water level, the Arpa-Seva (48.3 km, 1963-81) and then the Vorotan-Arpa aqueducts (21.6 km, 2004) were built.', '2022-12-11 12:08:20', '2022-12-11 12:08:20'),
(7, 'https://armadventure.com/wp-content/uploads/2020/05/Geghard.jpg', 'https://armadventure.com/wp-content/uploads/2020/05/geghart-monastery1.jpg', 'https://positiveday.am/_nw/0/23629909.jpg', 'Geghard Monastery', 'https://i1.sndcdn.com/artworks-000654134035-3fe7a4-t500x500.jpg', 'Geghard Monastery (Geghardavank, also Ayrivank), a medieval monastic complex in Armenia. It is located near the village of Goght in the Kotayk region, on the upper reaches of the Azat River, on the right bank. Here is kept the famous spear with which the Roman soldier pierced Christ\'s side. It was brought to Armenia by the apostle Thaddeus, one of the first preachers of Christianity. Now it is located in Vagharshapat, in the history museum.  The monastery complex was built in the early Middle Ages in a place that served as a sanctuary in the pre-Christian period. One of those springs is still preserved inside the main hall of the monastery. According to tradition, the first church was founded at the beginning of the 4th century, when Christianity was declared the state religion in Armenia[2]. It was known as \"Ayrivank\" or \"Monastery of Karayr\". The foundation of the monastery is traditionally attributed to the first Armenian Catholicos Gregory the Illuminator (301-325), and the subsequent prosperity to Sahak Partev (387-439). In the later period, the monastery was declared as a center of writing, a school, a music academy and a place of pilgrimage. The days of the pilgrimage to Geghard are on the feasts of Vardavar and Assumption of the Virgin Mary.  In the advanced Middle Ages, after the restoration of statehood (the Bagratuni Kingdom, 885-1045), the Arab troops invading Armenia looted and looted the monastery under the command of general Nasr. After the destruction of the 920s, the monastery was rebuilt and surrounded by a wall. The inscriptions preserved in the territory of the monastery complex refer to the 1160s, it is considered a structure of the 13th century. The Geghard monastery reached its peak of development after the liberation of the territories of Eastern Armenia by the Georgian kingdom, when the Zakarian principality was founded (1200-1261).  The Geghard monastery complex is part of the UNESCO world heritage and one of the attractions of Armenia[3]. The main group of monuments created in the 13th century includes the main Catholic church, the courtyard, the 2 rock-hewn churches, the clock tower-tomb.', '2022-12-11 13:55:46', '2022-12-11 13:55:46');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2019_08_19_000000_create_failed_jobs_table', 1),
(44, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(45, '2022_10_22_173758_create_posts_table', 1),
(46, '2022_11_13_113317_create_raffs_table', 1),
(47, '2022_11_27_153941_create_homes_table', 1),
(48, '2022_12_07_180033_create_stanals_table', 1),
(49, '2023_01_03_160812_create_shops_table', 2),
(50, '2023_01_04_160243_create_patvers_table', 3),
(51, '2023_01_05_174504_create_coments_table', 4),
(52, '2023_01_17_171949_create_products_table', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `patvers`
--

CREATE TABLE `patvers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hamar` int(11) NOT NULL,
  `anun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `azganun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qanak` int(11) NOT NULL,
  `heraxos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `patvers`
--

INSERT INTO `patvers` (`id`, `hamar`, `anun`, `azganun`, `qanak`, `heraxos`, `created_at`, `updated_at`) VALUES
(24, 11, 'Ռաֆայել', 'Սրապյան', 9, 77272082, '2023-04-02 09:59:21', '2023-04-02 09:59:21');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `photo`, `price`, `created_at`, `updated_at`) VALUES
(1, 'aaaaaaaaas', 'sssssssssssssssssss', 'asdadad', '123.00', NULL, NULL),
(2, 'zrfsz', 'asfsf', 'afsdc', '9999.99', NULL, NULL),
(3, 'aaaaaaassssss', 'aaaaaaaaasssssssssssssssssffffffffffff', 'http://www.levontravel.am/wp-content/uploads/2018/12/garni-winter.jpg', '234.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nkar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vernagir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gin` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `shops`
--

INSERT INTO `shops` (`id`, `nkar`, `vernagir`, `gin`, `text`, `created_at`, `updated_at`) VALUES
(7, 'https://s.list.am/f/201/55631201.webp', 'կանացի հագուստ', 18000, 'Արտադրվելե ՉինաստանուԱ', '2023-01-04 09:42:49', '2023-01-04 09:42:49'),
(8, 'https://full.am/uploads/posting_image/user_24333/product_249366/671b16cfecdec08334af4fd500032643.jpeg', 'կանացի հագուստ', 25000, 'Արտադրվելե Չինաստանում', '2023-01-04 09:47:36', '2023-01-04 09:47:36'),
(9, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOPZiJlkTLT5C2ow1lN5SDSZciKxxc9Z7Sng&usqp=CAU', 'կանացի հագուստ', 25000, 'Արտադրվելե Ճապոնիայում', '2023-01-04 09:48:54', '2023-01-04 09:48:54'),
(11, 'https://full.am/uploads/posting_image/user_30139/product_94503/c27c226ca63cbc2fe8e291eb21c9333a.JPG', 'կանացի կոշիկներ', 10000, 'Արտադրվելե Ճապոնիայում', '2023-01-04 09:50:43', '2023-01-04 09:50:43'),
(12, 'https://full.am/uploads/posting_image/user_30139/product_94503/6a9da6b2efc2ce35f783c19cdb4293fa.JPG', 'կանացի կոշիկներ', 10000, 'Արտադրվելե Գերմանիայում', '2023-01-04 09:51:31', '2023-01-04 09:51:31'),
(13, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwiwGnmDkp_nH1Cyg80lVFhcvlNHsWO6WjDQ&usqp=CAU', 'կանացի կոշիկներ', 15000, 'Արտադրվելե Գերմանիայում', '2023-01-04 09:52:04', '2023-01-04 09:52:04');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@adminn', NULL, '$2y$10$CLH6lKNby3OqIdbfrYu8nurCncmq8UhxPO1dVE4WKkDzxHJ3bsK2y', NULL, '2023-04-02 10:21:10', '2023-04-02 10:21:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `patvers`
--
ALTER TABLE `patvers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `patvers`
--
ALTER TABLE `patvers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
