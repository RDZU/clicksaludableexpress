-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-05-2021 a las 06:15:16
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clicksb6_clicksaludable`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_conocer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consulta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_consulta` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `name`, `email`, `telefono`, `info_conocer`, `consulta`, `descripcion_consulta`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Agencia Qualitegia', 'davidzamorau@gmail.com', NULL, 'Publicidad', 'Publicidad', 'estoe s una prueba', '2021-04-11 06:45:24', '2021-04-11 06:45:24', NULL),
(2, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Redes Sociales', 'Reclamos', 'My name’s Eric and I just found your site clicksaludableexpress.com.\r\n\r\nIt’s got a lot going for it, but here’s an idea to make it even MORE effective.\r\n\r\nTalk With Web Visitor – CLICK HERE https://talkwithwebvisitors.com for a live demo now.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nAnd once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation… and if they don’t take you up on your offer then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment. Don’t keep losing them. \r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=clicksaludableexpress.com', '2021-05-15 14:22:48', '2021-05-15 14:22:48', NULL),
(3, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Redes Sociales', 'Otros', 'Hi, my name is Eric and I’m betting you’d like your website clicksaludableexpress.com to generate more leads.\r\n\r\nHere’s how:\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you as soon as they say they’re interested – so that you can talk to that lead while they’re still there at clicksaludableexpress.com.\r\n\r\nTalk With Web Visitor – CLICK HERE http://talkwithcustomer.com for a live demo now.\r\n\r\nAnd now that you’ve got their phone number, our new SMS Text With Lead feature enables you to start a text (SMS) conversation – answer questions, provide more info, and close a deal that way.\r\n\r\nIf they don’t take you up on your offer then, just follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nThe difference between contacting someone within 5 minutes versus a half-hour means you could be converting up to 100X more leads today!\r\n\r\nTry Talk With Web Visitor and get more leads now.\r\n\r\nEric\r\nPS: The studies show 7 out of 10 visitors don’t hang around – you can’t afford to lose them!\r\nTalk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=clicksaludableexpress.com', '2021-05-19 05:28:20', '2021-05-19 05:28:20', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible_home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `name`, `descripcion`, `image_link`, `image_title`, `image_alt`, `slug`, `visible_home`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Anthonys Good', NULL, 'logo-anthony\'s-goods.webp', 'Anthonys Good, alimentos saludables, los ingredientes de alta calidad.', 'Venta de productos Anthonys Good', NULL, '1', '2021-04-05 18:45:32', '2021-04-10 20:10:21', NULL),
(2, 'Auchan', NULL, 'logo-auchan.webp', 'Auchan, los mejores productos españoles para la alacena.', 'Venta de productos Auchan', NULL, '1', '2021-04-05 18:45:48', '2021-04-10 20:09:52', NULL),
(3, 'Coppenrath', NULL, 'logo-coppenrath.webp', 'Coppenrath, galletas harinas sin gluten y sin lactosa.', 'Venta de productos Coppenrath', NULL, '1', '2021-04-05 18:46:14', '2021-04-10 20:09:09', NULL),
(4, 'Crunchmaster', NULL, 'logo-crunchmaster.webp', 'Crunchmaster, galletas hechas de ingredientes saludables sin gluten.', 'Venta de productos Crunchmaster', NULL, '1', '2021-04-05 18:47:48', '2021-04-10 20:06:08', NULL),
(5, 'Food to Live', NULL, 'logo-food-to-live.webp', 'Food To Live, alimentos Veganos, organicos, libres de gluten,  frutos secos harinas.', 'Venta de productos Food to Live', NULL, '1', '2021-04-05 18:48:05', '2021-04-10 20:04:39', NULL),
(6, 'Glutino', NULL, 'logo-glutino.webp', 'Glutino, golosinas dulces libre de Gluten.', 'Venta de productos Glutino', NULL, '1', '2021-04-05 18:48:21', '2021-04-10 20:06:32', NULL),
(7, 'Good Thins', NULL, 'logo-good-thing.webp', 'Good Thins, bocadillos snacks salados libre de Gluten.', 'Venta de productos Good Thins', NULL, '1', '2021-04-05 18:49:04', '2021-04-10 20:06:21', NULL),
(8, 'Hacendado', NULL, 'logo-hacendado.webp', 'Hacendado, cadena Agroalimentaria Sostenible.', 'Venta de productos Hacendado', NULL, '1', '2021-04-05 18:49:17', '2021-04-10 20:01:59', NULL),
(9, 'Lakanto', NULL, 'logo-lakanto.webp', 'Lakanto azucares, alternativas de fruta del monje, ademas de mezclas.', 'Venta de productos Lakanto', NULL, '1', '2021-04-05 18:49:43', '2021-04-10 20:01:31', NULL),
(10, 'Nature\'s Eats', NULL, 'logo-nature-eats.webp', 'Nature\'s Eats, frutos secos e  ingredientes para hornear naturales de primera calidad.', 'Venta de productos Nature\'s Eats', NULL, '1', '2021-04-05 18:50:59', '2021-04-10 20:00:10', NULL),
(11, 'Yum Earth', NULL, 'logo-yum-earth.webp', 'Yum Earth, dulces orgánicos  para personas alérgicas, deliciosas golosinas para todos.', 'Venta de productos Yum Earth', NULL, '1', '2021-04-05 18:51:24', '2021-04-10 20:00:24', NULL),
(12, 'Arrowhead Mills', NULL, 'logo-arrowhead-mills.webp', NULL, 'Productos Arrowhead Mills', NULL, '1', '2021-05-18 05:56:38', '2021-05-18 05:56:38', NULL),
(13, 'Bgreen Food', NULL, 'logo-bgreen-food.webp', NULL, 'Productos Bgreen Food', NULL, '1', '2021-05-18 06:03:53', '2021-05-18 06:03:53', NULL),
(14, 'Bob\'s Red Mill', NULL, 'logo-bobs-red-mill.webp', NULL, 'Productos Bob\'s Red Mill', NULL, '1', '2021-05-18 06:05:13', '2021-05-18 06:05:32', NULL),
(15, 'Great Value', NULL, 'logo-great-value.webp', NULL, 'Productos Great Value', NULL, '1', '2021-05-18 06:06:15', '2021-05-18 06:06:15', NULL),
(16, 'Living Food', NULL, 'logo-living-food-gluten-free.webp', NULL, 'Productos Living Food', NULL, '1', '2021-05-18 06:06:53', '2021-05-18 06:06:53', NULL),
(17, 'Gallo', NULL, 'logo-gallo.webp', NULL, NULL, NULL, '1', '2021-05-20 03:10:20', '2021-05-20 03:10:20', NULL),
(18, 'Krusteaz', NULL, 'logo-krusteaz.webp', NULL, NULL, NULL, '1', '2021-05-20 03:10:58', '2021-05-20 03:19:27', NULL),
(19, 'Pillsbury', NULL, 'logo-pillsbury.webp', NULL, NULL, NULL, '1', '2021-05-20 03:11:28', '2021-05-20 03:11:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_04_05_000001_create_media_table', 1),
(4, '2021_04_05_000002_create_permissions_table', 1),
(5, '2021_04_05_000003_create_roles_table', 1),
(6, '2021_04_05_000004_create_users_table', 1),
(7, '2021_04_05_000005_create_product_categories_table', 1),
(8, '2021_04_05_000006_create_product_tags_table', 1),
(9, '2021_04_05_000007_create_products_table', 1),
(10, '2021_04_05_000008_create_contactos_table', 1),
(11, '2021_04_05_000009_create_marcas_table', 1),
(12, '2021_04_05_000010_create_permission_role_pivot_table', 1),
(13, '2021_04_05_000011_create_role_user_pivot_table', 1),
(14, '2021_04_05_000012_create_product_product_category_pivot_table', 1),
(15, '2021_04_05_000013_create_product_product_tag_pivot_table', 1),
(16, '2021_04_05_000014_add_relationship_fields_to_products_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'product_management_access', NULL, NULL, NULL),
(18, 'product_category_create', NULL, NULL, NULL),
(19, 'product_category_edit', NULL, NULL, NULL),
(20, 'product_category_show', NULL, NULL, NULL),
(21, 'product_category_delete', NULL, NULL, NULL),
(22, 'product_category_access', NULL, NULL, NULL),
(23, 'product_tag_create', NULL, NULL, NULL),
(24, 'product_tag_edit', NULL, NULL, NULL),
(25, 'product_tag_show', NULL, NULL, NULL),
(26, 'product_tag_delete', NULL, NULL, NULL),
(27, 'product_tag_access', NULL, NULL, NULL),
(28, 'product_create', NULL, NULL, NULL),
(29, 'product_edit', NULL, NULL, NULL),
(30, 'product_show', NULL, NULL, NULL),
(31, 'product_delete', NULL, NULL, NULL),
(32, 'product_access', NULL, NULL, NULL),
(33, 'contacto_show', NULL, NULL, NULL),
(34, 'contacto_delete', NULL, NULL, NULL),
(35, 'contacto_access', NULL, NULL, NULL),
(36, 'marca_create', NULL, NULL, NULL),
(37, 'marca_edit', NULL, NULL, NULL),
(38, 'marca_show', NULL, NULL, NULL),
(39, 'marca_delete', NULL, NULL, NULL),
(40, 'marca_access', NULL, NULL, NULL),
(41, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` decimal(15,2) DEFAULT NULL,
  `tipo_presentacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `largo` int(11) DEFAULT NULL,
  `ancho` int(11) DEFAULT NULL,
  `peso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visible_home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alto` int(11) DEFAULT NULL,
  `image_frontal_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_frontal_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_frontal_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_reverso_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_reverso_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_reverso_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_min_frontal_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_min_reverso_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_link_reverso_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_link_reverso_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_link_frontal_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_link_frontal_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `marca_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `tipo_presentacion`, `envase`, `cantidad`, `largo`, `ancho`, `peso`, `visible_home`, `descripcion_home`, `stock`, `alto`, `image_frontal_link`, `image_frontal_title`, `image_frontal_alt`, `image_reverso_link`, `image_reverso_title`, `image_reverso_alt`, `photo_min_frontal_link`, `photo_min_reverso_link`, `slug`, `photo_link_reverso_title`, `photo_link_reverso_alt`, `photo_link_frontal_title`, `photo_link_frontal_alt`, `created_at`, `updated_at`, `deleted_at`, `marca_id`) VALUES
(1, 'GLUTINO PRETZEL STICKS', '<p>Los <strong>Pretzel Sticks</strong> llegaron con su sabor clásico para ofrecerte un snack perfectamente horneado, crujiente y ligeramente salado. Libre de:&nbsp;</p><ul><li>Gluten free certificado.</li><li>Sin leche, Huevo, Pescado, Mariscos y Soja.</li><li>Sin frutos secos ni maní.</li><li>Orgánico.</li><li>Sin transgénicos (NON – GMO).</li><li>Bajo índice Glucémico.</li><li>Veganos.</li><li>Amigable con la dieta kosher.</li><li>Menos de 1gr de azúcar añadido.</li><li>Sin colores ni sabores artificiales.</li></ul>', NULL, 'Envase de 400 gr Peso Neto', 'Bolsa de Papel Kraft', 'Unidad de 400 gr.', 15, 15, '400 gr.', '1', 'Los Pretzel Glutino Sticks llegaron con su sabor clásico para ofrecerte un snack perfectamente horneado, crujiente y ligeramente salado.', '1', 30, 'glutino-pletzel-sticks.webp', NULL, NULL, 'CSG07F2.jpg', NULL, NULL, NULL, NULL, 'pretzel-gluten-free', NULL, NULL, NULL, NULL, '2021-04-05 19:21:25', '2021-05-16 00:53:08', NULL, 6),
(2, 'HARINA DE ARROZ BGREEN FOOD', '<p>La <strong>harina de arroz marca bgreen food</strong> es la ideal para adaptarse a todo tipo de dietas debido a sus propiedades,&nbsp;puede mezclarse con otras harinas sin gluten para de esta manera&nbsp; hacer pan, pasteles, galletas, panqueques, muffins y más.</p><ul><li>Gluten Free Certificada.</li><li>Vegana.</li><li>No Transgenica (non-gmo).</li><li>Organica certificada.</li></ul>', NULL, 'Envase de 454 gr.', 'Bolsa de Papel', 'Unidad de 454 gr.', 1, 1, '453 gr.', '1', 'La harina de arroz marca bgreen food es la ideal para adaptarse a todo tipo de dietas debido a sus propiedades, puede mezclarse con otras harinas sin gluten.', '1', 1, 'harina-arroz-bgreen-food.webp', NULL, NULL, 'tabla-nutricional-harina-arroz-bgreen-food.webp', NULL, NULL, NULL, NULL, 'harina-arroz-bgreen-food', NULL, NULL, NULL, NULL, '2021-04-08 04:48:57', '2021-05-19 21:56:21', NULL, 13),
(3, 'HARINA DE AVENA ARROWHEAD', '<p><strong>La Harina de avena Marca Arrowhead</strong> es la aliada y una de las mas utilizadas en la cocina saludable principalmente en la repostería, esta harina de avena es magnífica para la salud de nuestro corazón, ya que es una fuente natural de fibra soluble, entre muchos otros beneficios.&nbsp;</p><ul><li>Fuente de Fibra Solubre.</li><li>Organica.</li><li>No Transgenica (NON-GMO).</li><li>Ideal para Dieta Kosher.<br>&nbsp;</li></ul>', NULL, 'Envase de 453 gr.', 'Bolsa de papel', 'unidad de 453 gr.', 1, 1, '453 gr.', '1', 'La Harina de avena Marca Arrowhead es la aliada y una de las mas utilizadas en la cocina saludable principalmente en la repostería, esta harina de avena es magnífica para la salud de nuestro corazón.', '1', 1, 'harina-avena-arrowhead.webp', NULL, NULL, 'tabla-nutricional-harina-avena-arrowhead.webp', NULL, NULL, NULL, NULL, 'harina-avena-arrowhead', NULL, NULL, NULL, NULL, '2021-05-09 21:52:27', '2021-05-19 21:57:16', NULL, 12),
(4, 'HARINA DE ALMENDRA NATURE´S EATS', '<p><strong>La Harina de Almendra marca Nature´s Eats</strong> es la aliada&nbsp; ideal para hornear galletas, tortas, panes y una maravillosa opción&nbsp; para dietas sin gluten, trigo, cereales y lácteos además funciona para empanizar verduras y carnes.</p><ul><li>Certificado Gluten Free</li><li>No Transgenico (NON-GMO)</li></ul><p>&nbsp;</p>', NULL, 'Envase de 907 gr.', 'Envase', 'Unidad de 907 gr.', 1, 1, '907 gr.', '1', 'Es la aliada  ideal para hornear galletas, tortas, panes y una maravillosa opción  para dietas sin gluten, trigo, cereales y lácteos', '1', 1, 'harina-almendra-natures-eats.webp', NULL, NULL, 'tabla-nutricional-harina-almendra-natures-eats.webp', NULL, NULL, NULL, NULL, 'harina-de-avena-natures-eats', NULL, NULL, NULL, NULL, '2021-05-15 22:12:31', '2021-05-19 21:57:53', NULL, 10),
(5, 'HARINA DE ARROZ INTEGRAL BOB´S RED MILL', '<p><strong>La harina de arroz integral de Bob´s red mill</strong> es apta para aquellos que son celiacos ideal para adaptarse a todo tipo de dietas debido a sus propiedades .</p><ul><li>Orgánica.</li><li>No transgénica (Non.Gmo).</li><li>Gluten free. vegana.</li></ul>', NULL, 'Envase de 680 gr.', 'Envase', 'Unidad 680 gr.', 1, 1, '680 gr.', '0', 'harina de arroz integral 680gr.', '1', 1, 'harina-arroz-integral-bobs-red-mill.webp', NULL, NULL, 'tabla-nutricional-harina-arroz-integral-bobs-red-mill.webp', NULL, NULL, NULL, NULL, 'harina-de-arroz-integral-bobs-red-mill', NULL, NULL, NULL, NULL, '2021-05-15 22:27:44', '2021-05-19 21:59:04', NULL, 14),
(6, 'HARINA DE ALMENDRA GREAT VALUE', '<p><strong>La harina de almendra marca Great Value</strong> rica en grasas saludables&nbsp; antioxidantes cuenta con un alto indice de proteinas vegetales contiene</p><ul><li>Vitamina E</li><li>Calcio.</li><li>Magnesio .</li><li>Cobre.</li><li>Certifica gluten free</li></ul>', NULL, 'Envase de 907 gr.', 'Envase', 'Unidad 907 gr.', 1, 1, '907gr.', '0', 'harina de Almendra  907gr.', '1', 1, 'harina-almendra-great-value.webp', NULL, NULL, 'tabla-nutricional-harina-almendra-great-value.webp', NULL, NULL, NULL, NULL, 'harina-de-almendra-great-value', NULL, NULL, NULL, NULL, '2021-05-15 23:09:23', '2021-05-19 22:00:22', NULL, 15),
(7, 'HARINA DE TRIGO SARRACENO FOOD TO LIVE', '<p>La harina de trigo sarraceno Food To Live pseudocereal muy preciado por los celíacos ya que no contiene gluten y como posee proteínas de alta calidad, aminoácidos esenciales y un bajo índice glucémico es ideal para todo tipo de preparaciones.</p><ul><li>&nbsp;Certifica gluten free.</li></ul>', NULL, 'Envase de 907 gr.', 'Envase', 'Unidad 907 gr.', 1, 1, '907gr.', '1', 'Harina de trigo sarraceno 907 gr.', '1', 1, 'harina-trigo-sarraceno-food-to-live.webp', NULL, NULL, 'tabla-nutricional-harina-trigo-sarraceno-food-to-live.webp', NULL, NULL, NULL, NULL, 'harina-de-trigo-sarraceno-food-to-live', NULL, NULL, NULL, NULL, '2021-05-15 23:15:23', '2021-05-15 23:15:23', NULL, 5),
(8, 'HARINA DE TRIGO SARRACENO ARROWHEAD', '<p><strong>La harina de trigo sarraceno marca Arrowhead </strong>es alta en proteínas y aminoacidos esenciales, lo que lo hace ideal para deportistas. beneficia al sistema cardiovascular y a los niveles de colesterol dado a su gran fuente de omega-3 y 6. también contiene hierro, magnesio y vitaminas del grupo b.a todo esto agreguemos que es bajo en grasa y muy saciante, lo que lo hace un aliado ideal para controlar nuestro peso /gluten free certificada.</p>', NULL, 'Envase de 624 gr.', 'Envase', 'Unidad 624 gr.', 1, 1, '624 gr.', '0', 'Harina de trigo sarraceno 624 gr.', '1', 1, 'harina-trigo-sarraceno-arrowhead.webp', NULL, NULL, 'tabla-nutricional-harina-trigo-sarraceno-arrowhead.webp', NULL, NULL, NULL, NULL, 'harina-de-trigo-sarraceno-arrowhead', NULL, NULL, NULL, NULL, '2021-05-15 23:34:31', '2021-05-19 22:02:43', NULL, 12),
(9, 'HARINA DE YUCA ANTHONYS GOODS', '<p>La harina de yuca o tapioca de Anthonys Goods, amiga de todas las dietas alternativas y estilos de vidas.</p><ul><li>Gluten free certificada.</li><li>Reemplaza la harina de trigo 1 a 1.</li><li>Certificada por la usda.</li><li>Vegana certificada.</li><li>Vegana verificada.</li><li>Sin transgenicos (non-gmo).</li></ul><p>&nbsp;</p>', NULL, 'Envase de 1.13 kg.', 'Envase', 'Unidad 1.13 kg.', 1, 1, '454 gr.', '0', 'harina de yuca  1.13 kg.', '1', 1, 'harina-yuca-anthonys-goods.webp', NULL, NULL, 'tabla-nutricional-harina-yuca-anthonys-goods.webp', NULL, NULL, NULL, NULL, 'harina-de-yuca-anthonys-Goods', NULL, NULL, NULL, NULL, '2021-05-15 23:49:39', '2021-05-20 06:31:29', NULL, 1),
(10, 'HARINA DE YUCA LIVING NOW FOOD', '<p>La harina de yuca o tapioca de living now food es un gran sustituto de la harina de trigo es ideal&nbsp;para hornear y para usar como espesante en sopas y salsas para preparar panes blandos, tiernos, galletas, pasteles, galletas y más. Esta fórmula se produce en una instalación dedicada libre de gluten y alergia.&nbsp;&nbsp;</p><ul><li>Está hecha sin lácteos, trigo, soja, nueces, huevos, sabores artificiales, colorantes y conservantes.</li><li>Vegana certificada.</li><li>Sin transgénicos (Non-Gmo)</li><li>Gluten free certificada</li></ul>', NULL, 'Envase de 454 gr.', 'Envase', 'Unidad 454 gr.', 1, 1, '454 gr.', '0', 'harina de yuca  454 gr.', '1', 1, 'harina-yuca-living-now-food.webp', NULL, NULL, 'tabla-nutricional-harina-yuca-living-now-food.webp', NULL, NULL, NULL, NULL, 'harina-de-yuca-living-now-food', NULL, NULL, NULL, NULL, '2021-05-16 00:02:16', '2021-05-19 22:05:16', NULL, 16),
(11, 'HARINA DE COCO ANHONYS GOODS', '<p>La harina de coco de la marca anthonys goods permite &nbsp;lograr un sabor dulce y una textura densa en tus horneados.&nbsp;</p><ul><li>Organica certificada usda.</li><li>Gluten free certificada.</li><li>Vegana con alto contenido de fibra y proteínas.</li><li>Bajo contenido de humedad.&nbsp;</li><li>Baja en calorías.</li></ul>', NULL, 'Envase de 1.81 kg.', 'Envase', 'Unidad 1.81 kg.', 1, 1, '1.81 kg.', '0', 'harina de coco  1.81 kg.', '1', 1, 'harina-coco-anthonys-goods.webp', NULL, NULL, 'tabla-nutricional-harina-coco-anthonys-goods.webp', NULL, NULL, NULL, NULL, 'harina-de-coco-anthonys-goods', NULL, NULL, NULL, NULL, '2021-05-16 00:32:07', '2021-05-16 00:32:07', NULL, 1),
(12, 'HARINA DE GARBANZO ANTHONYS GOODS', '<p>La harina de garbanzo&nbsp; de la marca anthonys goods permite&nbsp; para hornear sin gluten, para espesar salsas, sopas y salsas, o para aumentar el contenido de fibra, proteínas y hierro de los alimentos. esta harina agrega un rico sabor dulce a los productos horneados.</p><ul><li>Orgánica certificada usda.</li><li>Gluten free certificada.</li></ul>', NULL, 'Envase de 907 gr.', 'Envase', 'Unidad 907 gr.', 1, 1, '907gr.', '1', 'harina de Grabanzo 907 gr.', '1', 1, 'harina-garbanzo-anthonys-goods.webp', NULL, NULL, 'tabla-nutricional-harina-garbanzo-anthonys-goods.webp', NULL, NULL, NULL, NULL, 'harina-de-garbanzo-anthonys-goods', NULL, NULL, NULL, NULL, '2021-05-16 00:40:05', '2021-05-16 00:40:05', NULL, 1),
(13, 'HARINA TODO USO  PILLSBURY', '<p>La harina todo uso marca pillbury gluten free es la ideal para sustituir la harina de trigo en tus preparaciones &nbsp;contiene:&nbsp;</p><ul><li>Harina de arroz, almidón de patatas.</li><li>Fibra de guisantes.</li><li>Almidón de tapioca (yuca).</li><li>Goma xhantan.</li></ul>', NULL, 'Envase de 680 gr.', 'Envase', 'Unidad 680 gr.', 1, 1, '680 gr.', '0', 'harina todo uso 680gr.', '1', 1, 'harina-todo-uso-pillsbury.webp', NULL, NULL, 'tabla-nutricional-harina -todo uso-pillsbury.webp', NULL, NULL, NULL, NULL, 'harina-todo-uso-marca-pillsbury', NULL, NULL, NULL, NULL, '2021-05-19 21:22:06', '2021-05-20 03:54:55', NULL, 19),
(14, 'HARINA TODO USO  KRUZTEAS', '<p>La harina todo uso marca&nbsp; kruzteas mezcla de harina premium para hacer deliciosos productos horneados sin gluten para toda la familia&nbsp;</p><ul><li>Gluten free.</li><li>Reemplaza 1 a 1 la harina de trigo.</li><li>Contiene: sorgo, arroz mijo, de arroz y quinoa integral.</li><li>Goma xhantan.</li><li>Salvado de arroz.</li></ul>', NULL, 'Envase de 907 gr.', 'Envase', 'Unidad 907 gr.', 1, 1, '907 gr.', '0', 'harina todo uso 907 gr.', '1', 1, 'harina-todo-uso-kruzteas.webp', NULL, NULL, 'tabla-nutricional-harina-todo-uso-kruzteas.webp', NULL, NULL, NULL, NULL, 'harina-todo-uso-marca-kruzteas', NULL, NULL, NULL, NULL, '2021-05-19 21:30:58', '2021-05-20 03:54:38', NULL, 18),
(15, 'HARINA TODO USO  BOB´S RED MILL', '<p>La harina todo uso marca bob´s red mill libre de gluten&nbsp; esta mezcla especial de harinas y almidones sin gluten incluye goma xhantan, ideal para hacer&nbsp; alimentos como galletas, pasteles, brownies, muffins, panqueques y más. utilice como un reemplazo directo de la harina para hornear de uso múltiple.</p><ul><li>Gluten free.</li><li>Sustituye 1 a 1 la harina de trigo.</li></ul>', NULL, 'Envase de 624 gr.', 'Envase', 'Unidad 624 gr.', 1, 1, '624 gr.', '0', 'harina todo uso 624 gr.', '1', 1, 'harina-todo-uso-bobs-red-mill.webp', NULL, NULL, 'tabla-nutricional-harina-todo-uso-bobs-red-mill.webp', NULL, NULL, NULL, NULL, 'harina-todo-uso-marca-bobs red mill', NULL, NULL, NULL, NULL, '2021-05-19 21:38:11', '2021-05-20 03:54:21', NULL, 14),
(16, 'HARINA TODO USO  GALLO', '<p>La harina todo uso marca gallo libre de gluten ideal en repostería para preparaciones como tartas, pasteles, biscochos además de otros usos como rebozar carnes y pescados,&nbsp; y espesar salsas.&nbsp;</p><ul><li>Harina de maíz (80%), harina de arroz (19.7),</li></ul>', NULL, 'Envase de 500 gr.', 'Envase', 'Unidad 500 gr.', 1, 1, '500 gr.', '0', 'harina todo uso 500 gr.', '1', 1, 'harina-todo-uso-gallo.webp', NULL, NULL, 'tabla-nutricional-harina-todo-uso-gallo.webp', NULL, NULL, NULL, NULL, 'harina-todo-uso-marca-gallo', NULL, NULL, NULL, NULL, '2021-05-19 21:43:03', '2021-05-20 03:54:00', NULL, 17),
(17, 'HARINA PANIFICABLE  HACENDADO', '<p>La harina panificable marca hacendado libre de gluten la mejor opcion para elaborar panes de primer nivel esta harina&nbsp; contiene:</p><ul><li>Arroz, almidón de maíz.</li><li>Azúcar moreno de caña integral.</li><li>Espesantes (fibra de psyllium, hidroxipropilmetilcelulosa).</li><li>Sal.</li><li>Proteína de guisante.</li></ul>', NULL, 'Envase de 820 gr.', 'Envase', 'Unidad 820 gr.', 1, 1, '820 gr.', '0', 'harina todo uso 820 gr.', '1', 1, 'harina-panificable-hacendado.webp', NULL, NULL, 'tabla-nutricional-harina-panificable-hacendado.webp', NULL, NULL, NULL, NULL, 'harina-todo-uso-marca-hacendado', NULL, NULL, NULL, NULL, '2021-05-19 21:54:06', '2021-05-20 03:53:22', NULL, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sin Gluten', '2021-04-05 18:53:31', '2021-04-05 18:53:31', NULL),
(2, 'Sin Azúcar', '2021-04-05 18:53:49', '2021-04-05 18:53:49', NULL),
(3, 'Salados', '2021-04-05 18:53:59', '2021-04-05 18:53:59', NULL),
(4, 'Harinas y Premezclas', '2021-04-05 18:54:18', '2021-04-05 18:54:18', NULL),
(5, 'Almacen', '2021-04-05 18:54:34', '2021-04-05 18:54:34', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_product_category`
--

CREATE TABLE `product_product_category` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_product_category`
--

INSERT INTO `product_product_category` (`product_id`, `product_category_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 4),
(3, 1),
(3, 4),
(4, 1),
(4, 4),
(5, 1),
(5, 4),
(6, 1),
(6, 4),
(7, 1),
(7, 4),
(8, 1),
(8, 4),
(9, 1),
(9, 4),
(10, 1),
(10, 4),
(11, 1),
(11, 4),
(12, 1),
(12, 4),
(13, 1),
(13, 4),
(14, 1),
(14, 4),
(15, 1),
(15, 4),
(16, 1),
(16, 4),
(17, 1),
(17, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_product_tag`
--

CREATE TABLE `product_product_tag` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_product_tag`
--

INSERT INTO `product_product_tag` (`product_id`, `product_tag_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 6),
(3, 1),
(3, 3),
(3, 6),
(2, 1),
(2, 3),
(2, 4),
(2, 6),
(4, 1),
(4, 6),
(5, 1),
(5, 3),
(5, 6),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 6),
(10, 1),
(10, 4),
(10, 6),
(10, 7),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_tags`
--

INSERT INTO `product_tags` (`id`, `name`, `tag_link`, `tag_title`, `tag_alt`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sin Gluten', 'sin-gluten.png', 'Libre de Glúten.', NULL, '2021-04-06 01:34:00', '2021-04-11 02:21:42', NULL),
(2, 'Sin TACC', 'sin-tacc.png', 'Sin trigo, avena, cebada y centeno. Alimento para dieta celiaca.', NULL, '2021-04-06 01:34:20', '2021-04-11 02:18:44', NULL),
(3, 'Organico', 'organico.png', 'Alimentos de Origen Organico.', NULL, '2021-04-06 01:35:22', '2021-04-11 02:20:56', NULL),
(4, 'Vegano', 'vegano.png', 'Alimentos para dieta Vegana.', NULL, '2021-04-06 01:36:15', '2021-04-11 02:18:06', NULL),
(5, 'Sugar Free', 'sin-azucar.png', 'Libre de Azucar añadida.', NULL, '2021-04-06 01:36:41', '2021-04-11 02:19:57', NULL),
(6, 'NON GMO', 'non-gmo.png', 'Ingredientes no transgénicos certificados.', NULL, '2021-04-06 01:43:01', '2021-04-11 02:17:33', NULL),
(7, 'Sin Lactosa', 'sin-lactosa.png', NULL, NULL, '2021-05-12 17:49:21', '2021-05-20 06:26:53', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$H.M2Ctvl7mYODWNWhQQbiumJfJg33tsZdYuk8os2CBDxDSGZE08OW', NULL, NULL, '2021-05-08 08:15:33', NULL),
(2, 'El menor', 'agenciaqualitegia@gmail.com', NULL, '$2y$10$o2MEycRIMzLreQd31wsETeQJV1H0TBS84rHSXmaBclRBnzOTT/giW', NULL, '2021-05-09 22:24:51', '2021-05-09 22:24:51', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `marcas_name_unique` (`name`(160));

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`(191),`model_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_3302758` (`role_id`),
  ADD KEY `permission_id_fk_3302758` (`permission_id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`(191),`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`(180)),
  ADD KEY `marca_fk_3593092` (`marca_id`);

--
-- Indices de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_name_unique` (`name`(160));

--
-- Indices de la tabla `product_product_category`
--
ALTER TABLE `product_product_category`
  ADD KEY `product_id_fk_3302788` (`product_id`),
  ADD KEY `product_category_id_fk_3302788` (`product_category_id`);

--
-- Indices de la tabla `product_product_tag`
--
ALTER TABLE `product_product_tag`
  ADD KEY `product_id_fk_3601056` (`product_id`),
  ADD KEY `product_tag_id_fk_3601056` (`product_tag_id`);

--
-- Indices de la tabla `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etiqueta_name_unico` (`name`(160));

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_3302767` (`user_id`),
  ADD KEY `role_id_fk_3302767` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`name`(160));

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_3302758` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_3302758` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `marca_fk_3593092` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`);

--
-- Filtros para la tabla `product_product_category`
--
ALTER TABLE `product_product_category`
  ADD CONSTRAINT `product_category_id_fk_3302788` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_id_fk_3302788` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `product_product_tag`
--
ALTER TABLE `product_product_tag`
  ADD CONSTRAINT `product_id_fk_3601056` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_id_fk_3601056` FOREIGN KEY (`product_tag_id`) REFERENCES `product_tags` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_3302767` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
