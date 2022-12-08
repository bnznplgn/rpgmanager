-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 08 déc. 2022 à 08:55
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `DBRPGManager`
--

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

CREATE TABLE `characters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magic` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `agility` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `lifepoint` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `characters`
--

INSERT INTO `characters` (`id`, `created_at`, `updated_at`, `deleted_at`, `name`, `description`, `speciality`, `magic`, `strength`, `agility`, `intelligence`, `lifepoint`, `user_id`) VALUES
(1, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Boyer', 'In commodi aut impedit illo. Totam voluptas odit reprehenderit aperiam laboriosam inventore. Non ut fugiat voluptas aut.', 'Assassin', 12, 6, 11, 9, 20, 1),
(2, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Heller', 'Omnis rerum veniam aut nemo neque animi voluptas. Exercitationem voluptates eligendi eum laboriosam excepturi. Ex qui rem error itaque ratione non est.', 'Archer', 1, 12, 8, 5, 40, 1),
(3, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Lang', 'Omnis ut amet repudiandae maiores. Iure et velit quaerat molestiae aperiam ut dolorem. Eaque et ut quia aut. Fugit libero dolorem voluptas pariatur voluptatem.', 'Assassin', 10, 1, 13, 6, 48, 1),
(4, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Walter', 'Cupiditate non aut aut quo quibusdam eius distinctio. Velit animi nulla culpa mollitia. Voluptatem cumque ipsam similique dolorem. Consectetur earum delectus rerum voluptates magni.', 'Druide', 8, 12, 1, 2, 27, 1),
(5, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Morissette', 'Quis velit quis voluptatibus a temporibus quidem aut. Id tempora inventore minima amet. Nobis qui atque voluptates adipisci laboriosam similique quasi.', 'Guerrier', 9, 10, 9, 7, 22, 1),
(6, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Morar', 'Neque est nisi dolores consequatur numquam minus natus. Dolor quis eius cumque nisi accusamus dolor rerum.', 'Archer', 1, 5, 5, 7, 20, 1),
(7, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Bradtke', 'Qui ipsum ex quo sed adipisci labore omnis nihil. Commodi corrupti aliquam non magni. Voluptates debitis et sunt ratione voluptate libero. Mollitia enim corporis quia expedita est numquam.', 'Druide', 9, 12, 12, 4, 26, 1),
(8, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Marvin', 'Delectus earum magnam velit et. Mollitia incidunt ut deleniti voluptatibus. Et omnis labore reiciendis ex. Iure cumque quisquam eveniet nihil deleniti quam quia.', 'Assassin', 5, 3, 10, 6, 48, 1),
(9, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Hilpert', 'Exercitationem sit est quo voluptatum sunt corrupti. In et aut aut laborum laboriosam ipsa eum. Sapiente vero culpa dignissimos qui sed. Hic ad ut et dignissimos. Qui consequuntur tempora suscipit.', 'Mage', 2, 6, 2, 1, 38, 1),
(10, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Terry', 'Voluptas rerum saepe et fuga nihil atque illum. Est asperiores nihil voluptas facilis. Dicta sed soluta vel laudantium. Dolores nesciunt officia quis.', 'Mage', 10, 6, 10, 1, 34, 1),
(11, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Rice', 'Qui nisi vel ullam voluptatibus aut occaecati aut officiis. Animi optio libero neque porro vel et. Amet officiis sequi aut saepe quo a.', 'Guerrier', 8, 3, 4, 14, 33, 1),
(12, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Schimmel', 'In excepturi suscipit perferendis aut officiis itaque. Omnis amet et et fuga. Dicta nisi veniam consectetur voluptas consequatur. Vel tenetur dolorum dicta enim.', 'Guerrier', 3, 7, 9, 6, 49, 1),
(13, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Mertz', 'Consequatur et labore quasi id officia placeat. Earum provident architecto at ut.', 'Guerrier', 1, 7, 9, 14, 28, 1),
(14, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Carroll', 'Eligendi dignissimos sint exercitationem fuga voluptas aliquid. A alias excepturi placeat quia consequatur. In beatae qui et reprehenderit recusandae sapiente doloribus.', 'Berseker', 12, 12, 9, 7, 43, 1),
(15, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Jakubowski', 'Incidunt in et vitae dolor voluptas. Maiores enim odio sequi unde aut ut dolorem architecto. Consequatur quaerat aut optio at et.', 'Mage', 14, 9, 13, 4, 34, 1),
(16, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Blick', 'Qui molestiae consectetur vel sed. Expedita ut porro dolores itaque est laudantium totam nam. Vitae quis est ut non eaque perferendis.', 'Guerrier', 11, 10, 12, 1, 33, 1),
(17, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Green', 'Iste quidem iure blanditiis non ut eos. Similique quo praesentium atque nam voluptatibus. Non nostrum quis aut reiciendis.', 'Berseker', 14, 1, 2, 2, 39, 1),
(18, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Senger', 'Eaque expedita consequatur et rerum totam ut qui. Labore ullam alias nemo temporibus molestias recusandae. Ex aliquid at maiores quos. Dignissimos occaecati tenetur et maxime.', 'Mage', 5, 9, 9, 9, 33, 1),
(19, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Kilback', 'Dolore blanditiis voluptas dicta voluptatem at et. Vel et cupiditate doloremque.', 'Druide', 8, 8, 3, 11, 25, 1),
(20, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Price', 'Quia doloribus et molestias nesciunt perspiciatis. Omnis iste ex praesentium inventore quo. Nihil aspernatur eaque et tempore omnis laboriosam.', 'Mage', 8, 7, 6, 2, 41, 1),
(21, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Runte', 'Ipsa qui cumque ab est voluptate aut adipisci sunt. Laborum velit quo dolorem repudiandae et pariatur. Libero odio ad aut iste.', 'Guerrier', 13, 8, 9, 5, 36, 1),
(22, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Shields', 'Ipsum nihil qui veritatis quo perferendis. Mollitia modi ipsa nihil. Non qui totam alias excepturi. Et ut et magnam in deleniti. Dolorem ad debitis minima.', 'Berseker', 12, 10, 10, 12, 38, 1),
(23, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Cronin', 'Reprehenderit culpa molestias nesciunt sunt qui. Maxime qui aliquid id. Porro ipsam libero temporibus aliquam minima dolores iste. Et et vel aliquam.', 'Berseker', 13, 10, 8, 7, 42, 1),
(24, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Jaskolski', 'Deserunt maxime aut sunt officiis et molestiae et. Tempore aperiam facere voluptatem numquam sit earum vel. Molestiae vitae maxime eaque adipisci.', 'Guerrier', 2, 13, 9, 11, 25, 1),
(25, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Lakin', 'Qui natus nobis enim incidunt. Ab ut explicabo recusandae similique. Velit nihil minus temporibus voluptas et aliquam cum. Est et modi et iusto. Vel deleniti modi aut nemo eos impedit.', 'Archer', 9, 2, 1, 7, 30, 1),
(26, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Roob', 'At voluptatem ipsam non est error sint molestiae vel. Molestiae qui necessitatibus quis totam. Consequatur qui omnis voluptas est velit nobis corrupti. Odio labore cum neque aut.', 'Mage', 11, 13, 10, 14, 34, 1),
(27, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Johnson', 'Tempora cum omnis accusamus vel deserunt. Voluptas eum et dicta ut maiores asperiores. Voluptatum modi vitae ex voluptas laudantium sequi.', 'Guerrier', 1, 4, 3, 7, 40, 1),
(28, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Gorczany', 'Quia quia est deleniti quia sunt. Consectetur corrupti quasi ducimus tenetur ut maiores perferendis. Earum sunt alias fuga omnis placeat magni. Quibusdam deleniti est commodi omnis culpa est sunt.', 'Druide', 1, 5, 3, 11, 41, 1),
(29, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Bernhard', 'Quia ab rerum vel quia ipsum sunt. Aperiam vero qui porro repellat. Qui mollitia molestiae aut et. Repellat ratione quo laudantium voluptas. Enim et sit ut officiis sed sit. Est ut eos magni libero.', 'Assassin', 6, 9, 10, 14, 35, 1),
(30, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Gusikowski', 'Est voluptatem et voluptatem est omnis quasi. Soluta quo omnis molestiae ad. Mollitia dolor rem consectetur sint.', 'Berseker', 1, 5, 7, 3, 42, 1),
(31, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'McDermott', 'Cum harum error dolore iusto. Placeat aut sit fugiat ea minima molestias. Placeat accusamus magni saepe cupiditate vel magnam.', 'Berseker', 14, 9, 11, 9, 50, 1),
(32, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Pouros', 'Est aut doloremque sint non eos sit aut. Laborum sunt repudiandae voluptas soluta occaecati. Aut saepe eos modi nulla repellat nam.', 'Berseker', 2, 6, 14, 5, 49, 1),
(33, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Marks', 'Facilis odit illum exercitationem atque. Voluptatem perferendis qui aut amet. Laudantium earum dolorem aut dolor aut nihil ab.', 'Mage', 11, 4, 13, 5, 42, 1),
(34, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Pfeffer', 'Aut laudantium rem veniam ut dolorem eaque. Quia amet est minus quisquam. Ut molestias quis explicabo dolores commodi voluptate ut odit. Nostrum et sed nemo doloremque quibusdam quam sequi.', 'Archer', 4, 8, 14, 9, 23, 1),
(35, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Toy', 'Voluptas qui exercitationem culpa et adipisci ipsum eligendi. Dolorem sapiente dignissimos quos est saepe est occaecati autem. Animi eius velit dignissimos exercitationem molestiae sed laborum sit.', 'Archer', 6, 4, 6, 1, 41, 1),
(36, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Grant', 'Doloribus dolor consequatur voluptatem et aut velit. Quos modi deleniti esse minus magnam. Et sapiente ab aut omnis ut. Harum vero tenetur et culpa itaque modi.', 'Mage', 4, 1, 2, 13, 35, 1),
(37, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Kuvalis', 'Molestias et distinctio consequatur dolor et. Omnis illo dolorem dolorem soluta veniam voluptatibus. Dicta molestiae commodi eaque voluptates iusto quo voluptas.', 'Berseker', 8, 10, 1, 4, 38, 1),
(38, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Hayes', 'Odit sit veritatis suscipit iste. Quis eveniet amet illo iusto. Sequi vel explicabo consequatur quis aut sint quia.', 'Assassin', 1, 8, 4, 12, 40, 1),
(39, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Lind', 'Id ab sit dolor alias accusantium. Sed voluptas nulla rerum. Non placeat eligendi modi voluptatem qui ad qui.', 'Assassin', 8, 5, 13, 13, 28, 1),
(40, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Brakus', 'Tempore numquam exercitationem expedita quis facilis velit. Esse qui voluptatem quia minus. Voluptatem natus nulla dolore ipsa illo voluptatem ullam. Quibusdam saepe tempora quia corporis.', 'Assassin', 10, 10, 8, 8, 45, 1),
(41, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Mante', 'Eum veniam eaque ipsa quis dolores quisquam qui aut. Totam ea reiciendis ipsum cum corrupti. Ut corrupti id rerum optio eos magni qui. Blanditiis officia est nihil nisi illum nihil.', 'Guerrier', 7, 10, 14, 1, 48, 1),
(42, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Thompson', 'Nobis sapiente et consectetur et consequatur qui laboriosam. Eum consequatur rerum voluptas nam. Ducimus consequuntur et laudantium esse quia molestiae.', 'Guerrier', 13, 5, 9, 10, 45, 1),
(43, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'McLaughlin', 'Incidunt suscipit quo est sint architecto. Voluptates aut asperiores voluptatibus eos itaque blanditiis. Aut delectus expedita expedita ea ut adipisci.', 'Mage', 2, 5, 3, 4, 35, 1),
(44, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Waters', 'Et explicabo id et minus molestias. Rerum et repellat pariatur ut. Nisi voluptatem vel molestias quia a. Sit exercitationem ut qui modi.', 'Mage', 12, 13, 11, 5, 30, 1),
(45, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Lueilwitz', 'Sit dolor eveniet suscipit tempore quod. Ex pariatur dignissimos eum fuga pariatur saepe ut. Repudiandae nihil reiciendis cumque. Sit et et pariatur dolorem.', 'Guerrier', 3, 14, 2, 14, 49, 1),
(46, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Pfannerstill', 'Eos qui iusto dolorum et architecto. Consequatur quasi sit ea consequatur quisquam rerum. Quia sed rerum saepe unde voluptatum voluptas. Et velit voluptas quasi in libero.', 'Archer', 5, 9, 8, 5, 23, 1),
(47, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Labadie', 'Nostrum quae eveniet qui. Incidunt molestias sequi et dicta odio vero rerum. Veniam neque ducimus quia aut at dolores et.', 'Berseker', 8, 6, 3, 4, 29, 1),
(48, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Denesik', 'Quasi reiciendis cumque animi tenetur et numquam accusantium et. Non ea saepe voluptas vel amet. Ipsum ea doloremque odio natus.', 'Assassin', 7, 2, 4, 12, 21, 1),
(49, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'DuBuque', 'Dicta voluptatum voluptas perspiciatis eos voluptas placeat sapiente. Et ut officia delectus magnam similique. Et est quia est. Laborum sed placeat asperiores veritatis ut autem molestias.', 'Guerrier', 7, 4, 6, 12, 46, 1),
(50, '2022-12-03 20:36:18', '2022-12-03 20:36:18', NULL, 'Kuphal', 'Aspernatur blanditiis dolorem harum ut quas optio amet. Veritatis modi nemo et id magnam commodi eius ut. Aliquam inventore quis incidunt alias. Laudantium voluptatem porro omnis enim.', 'Guerrier', 5, 12, 10, 9, 22, 1),
(51, '2022-12-03 23:03:20', '2022-12-03 23:17:57', '2022-12-03 23:17:57', 'Rogu', 'lorem', 'Archer', 2, 9, 10, 14, 41, 2);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gamers`
--

CREATE TABLE `gamers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_23_143339_create_gamers_table', 1),
(6, '2022_11_23_151505_create_characters_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `nickname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harry', 'Potter', 'Harry Potter', 'harry@potter.com', NULL, '$2y$10$eBxS84UtK4H7INc3TBuHjuJ1A7yY0hb8TNuKieYZhXlhBRpPfLDAW', NULL, '2022-11-30 14:20:46', '2022-11-30 14:20:46'),
(2, 'toto', 'toto', 'Toto', 'toto@toto.com', NULL, '$2y$10$Gj3RTwLJrR0syrhpwMWah.HQfO4ssQPU08vlBrXJN5QJAA3rwfr6O', NULL, '2022-12-03 20:35:10', '2022-12-03 20:35:10');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `characters_name_unique` (`name`),
  ADD KEY `characters_user_id_foreign` (`user_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `gamers`
--
ALTER TABLE `gamers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gamers_nickname_unique` (`nickname`),
  ADD UNIQUE KEY `gamers_email_unique` (`email`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nickname_unique` (`nickname`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gamers`
--
ALTER TABLE `gamers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
