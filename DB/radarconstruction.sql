-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 08:30 AM
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
-- Database: `radarconstruction`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(4, '202209570451architect-g763a10cc9_1920.jpg', 'Visit Construction Site', '2022-09-28 12:32:00', '2022-09-28 23:06:57'),
(5, '202209370452architecture-g7ae006f37_1920.jpg', 'Design Construction Building', '2022-09-28 23:07:37', '2022-09-28 23:07:37'),
(6, '202209250453tools-g38847c75b_1920.jpg', 'Tiney Equipment For Construction site', '2022-09-28 23:08:25', '2022-09-28 23:08:25'),
(7, '202209310550slide-01.jpg', 'Visit Construction Site', '2022-09-29 00:05:31', '2022-09-29 00:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_09_185625_create_sessions_table', 1),
(7, '2022_09_22_110331_create_theme_settings_table', 2),
(8, '2022_09_22_143914_create_sliders_table', 3),
(9, '2022_09_26_070203_create_services_table', 4),
(10, '2022_09_28_032618_create_projects_table', 5),
(11, '2022_09_28_053529_create_galleries_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_heading_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_heading_np` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_heading_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_video_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_para_np` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_para_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_para_slug` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `project_heading_en`, `project_heading_np`, `project_heading_slug`, `project_video_link`, `project_para_np`, `project_para_en`, `project_para_slug`, `view_count`, `created_at`, `updated_at`) VALUES
(1, '202209500439scaffold-1207389_960_720.webp', 'Construction Project', 'निर्माण परियोजना', 'construction-project', 'https://www.youtube.com/watch?v=YfLPXZ8q48g', '<p>निर्माण परियोजनाहरू उच्च संरचित प्रयासहरू हुन्। परियोजनामा सपिङ मल वा एकल बस्ने आवास निर्माण होस्, प्रत्येक परियोजनामा धेरै गतिशील भागहरू छन् जुन ठीकसँग समन्वय गर्नुपर्छ। कुनै पनि अन्य परियोजना जस्तै, निर्माण परियोजना व्यवस्थापन चरणहरू छन्। योजना बनाउनेदेखि लिएर निर्माणको समयतालिकासम्म, प्रत्येक चरण जटिल छ र थप जटिल प्रक्रियाको अंश हो। त्यसकारण त्यहाँ परियोजना व्यवस्थापन सफ्टवेयर छ। तर के परियोजना व्यवस्थापन सफ्टवेयर निर्माण परियोजनाको वजन बोक्न पर्याप्त बलियो र गतिशील छ? त्यो प्रश्नको जवाफ दिनु अघि, निर्माण व्यवस्थापन भनेको वास्तवमा के हो भन्ने कुरा बुझ्नु महत्त्वपूर्ण छ।</p>', '<p>Construction projects are highly structured endeavors. Whether the project consists of building a shopping mall or a single-dwelling residence, each project has many moving parts that must be precisely coordinated. Just like any other project, construction project management has phases. From designing to planning to scheduling to the build itself, each phase is complicated and part of a more complex overarching process. That&rsquo;s why there&rsquo;s project management software. But is project management software robust and dynamic enough to carry the weight of a construction project? Before answering that question, it&rsquo;s important to first have an understanding of what exactly construction management is.</p>', 'pconstruction-projects-are-highly-structured-endeavors-whether-the-project-consists-of-building-a-shopping-mall-or-a-single-dwelling-residence-each-project-has-many-moving-parts-that-must-be-precisely-coordinated-just-like-any-other-project-construction-project-management-has-phases-from-designing-to-planning-to-scheduling-to-the-build-itself-each-phase-is-complicated-and-part-of-a-more-complex-overarching-process-thatrsquos-why-therersquos-project-management-software-but-is-project-management-software-robust-and-dynamic-enough-to-carry-the-weight-of-a-construction-project-before-answering-that-question-itrsquos-important-to-first-have-an-understanding-of-what-exactly-construction-management-isp', 11, '2022-09-27 22:51:13', '2022-09-28 23:24:18'),
(2, '202209390437housebuilding-gfed846074_1920.jpg', 'Building Construction', 'भवन निर्माण', 'building-construction', 'https://www.youtube.com/watch?v=FFo-KeX_AAk', '<p>संरचनाको लोड ट्रान्सफर प्रणालीको आधारमा निर्माण विधिहरू वर्गीकृत गरिन्छ। पहिले, तपाईंले लोड-बेयरिङ संरचनात्मक प्रणालीको बारेमा सिक्नुहुनेछ जुन धेरै पुरानो संरचनाहरू जस्तै पिरामिड, कोलोसियम र थपमा प्रयोग गरिन्छ। त्यसपछि, तपाईंले फ्रेम गरिएको संरचनात्मक प्रणाली, यसको मुख्य निर्माण तत्वहरू र यो किन धेरै लोकप्रिय भएको छ भन्ने बारे जान्नुहुनेछ। अर्को, तपाईले अग्लो भवनहरू वा गगनचुम्बी भवनहरू निर्माण गर्ने विभिन्न विधिहरू बारे जान्नुहुनेछ। त्यसोभए, तपाईंले भारी काठ-फ्रेम संरचनाहरू पत्ता लगाउनुहुनेछ जुन आजका दिनहरू फेरि लोकप्रिय भएका छन्। अन्तमा, तपाईं भवन निर्माणमा प्रयोग हुने अद्भुत पूर्वनिर्मित सामग्री र प्रविधिहरू अन्वेषण गर्नुहुनेछ। निर्माणको प्रत्येक विधिसँग सम्बन्धित धेरै अवधारणाहरू पाठ्यक्रममा छलफल गरिन्छ। तपाईंले प्रत्येक विधिमा प्रयोग गरिएका संरचनात्मक प्रणालीहरू, तिनीहरूको पछाडिको इतिहास र तिनीहरूको व्यापक स्वीकृतिको लागि नेतृत्व गर्ने उद्देश्य बारे जान्नुहुनेछ। यस पाठ्यक्रमले तपाईंलाई विभिन्न निर्माण तत्वहरूको खोजको पछाडि राम्रो कारण पनि दिन्छ।</p>', '<p>The methods of construction are classified based on the load transferring system of a structure. First, you will learn about the load-bearing structural system which is used in so many oldest structures like Pyramids, colosseum and more. Then, you will learn about the framed structural system, its main building elements and why it has become very popular. Next, you will learn about various methods of constructing high-rise buildings or skyscrapers. Then, you will explore the heavy timber-framed structures which have again become popular these days. Finally, you will be exploring the amazing prefabricated materials and techniques used in building construction. So many concepts related to each method of construction are discussed in the course.</p>\r\n\r\n<p>You will get to know about the structural systems used in each method, the history behind them and the purpose that led to their wide acceptance. This course also gives you a good reason behind the discovery of various building elements.</p>', 'pthe-methods-of-construction-are-classified-based-on-the-load-transferring-system-of-a-structure-first-you-will-learn-about-the-load-bearing-structural-system-which-is-used-in-so-many-oldest-structures-like-pyramids-colosseum-and-more-then-you-will-learn-about-the-framed-structural-system-its-main-building-elements-and-why-it-has-become-very-popular-next-you-will-learn-about-various-methods-of-constructing-high-rise-buildings-or-skyscrapers-then-you-will-explore-the-heavy-timber-framed-structures-which-have-again-become-popular-these-days-finally-you-will-be-exploring-the-amazing-prefabricated-materials-and-techniques-used-in-building-construction-so-many-concepts-related-to-each-method-of-construction-are-discussed-in-the-coursep-pyou-will-get-to-know-about-the-structural-systems-used-in-each-method-the-history-behind-them-and-the-purpose-that-led-to-their-wide-acceptance-this-course-also-gives-you-a-good-reason-behind-the-discovery-of-various-building-elementsp', 2, '2022-09-28 22:52:39', '2022-09-28 23:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_np` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_des_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_des_np` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(255) DEFAULT 1,
  `service_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `heading_en`, `heading_np`, `service_des_en`, `service_des_np`, `created_at`, `updated_at`, `logo`, `view_count`, `service_slug`) VALUES
(4, '202209540744dreamstime_xxl_17841718.6331b9f48af1f.png', 'Road and Bridge', 'रोड र पुल', 'हामीसँग चुनौतीपूर्ण सडक र पुल निर्माण कार्यमा दशकौंको अनुभव छ। हामी विभिन्न ट्राफिक मार्गहरू र सम्बन्धित क्षेत्र निर्माण कुशलतापूर्वक, सटीक र ग्राहक-उन्मुख दृष्टिकोणको साथ उत्पादन गर्छौं। हाम्रो लामो अनुभवले सिर्जना गरेको योग्यताले हामीलाई कामलाई व्यवस्थित गर्न र समय तालिका बनाउन मद्दत गर्दछ ताकि ट्राफिकलाई सकेसम्म कुशलतापूर्वक र सुरक्षित रूपमा परियोजनाभरि प्रवाह गर्न सकोस्।  पुल निर्माण विशेषज्ञहरूको रूपमा, हामी कुनै पनि पुलको कामलाई साना पुलहरूबाट ठूला पुलहरूमा टर्नकी डेलिभरीको रूपमा योजना र कार्यान्वयन गर्छौं।', 'We have decades of experience in challenging road and bridge construction work. We produce various traffic routes and the related zone construction efficiently, precisely and with a customer-oriented approach. The competence created by our long experience helps us organise and schedule work so that the traffic can flow as efficiently and safely as possible throughout the project.  As bridge construction experts, we plan and execute any bridge work as a turnkey delivery from small bridges to large bridge structures on land and over waterways. In addition to bridges, culverts and tubular bridges for vehicle, pedestrian and bicycle traffic, we construct various types of concrete and steel covers, viaducts and ramps. In connection with bridge construction, we carry out all the auxiliary work, such as land use planning, asphalt work and railing, barrier and lighting installations.  In addition to new bridges, roads, streets and pedestrian and bicycle routes, we repair and improve existing traffic routes.', '2022-09-27 01:59:54', '2022-09-27 12:07:56', '202209540744intersection.png', 2, 'road-and-bridge'),
(5, '202209070758hero-slider-img-3.jpg', 'Commercial Industrial', 'वाणिज्यिक औद्योगिक', 'वाणिज्य औद्योगिक आपूर्ति संयुक्त राज्य अमेरिका र बाहिरको औद्योगिक उत्पादनहरूको अग्रणी प्रदायक हो। हामी उद्योगहरूको दायरा सेवा गर्छौं र उच्च गुणस्तरका उत्पादनहरूको विविध चयन बोक्छौं जसले तपाईं जस्ता पेशेवरहरूलाई काम गर्न मद्दत गर्दछ। हाम्रा उत्पादनहरूमा पाइपिङ, फिटिङ, भल्भ, निस्पंदन, प्रवाह नियन्त्रण, विद्युतीय र थप कुराहरू समावेश छन्।  व्यावसायिक औद्योगिक आपूर्ति रोन हेइसलर र डन बेकर द्वारा 2009 मा स्थापित भएको थियो। तिनीहरूको लक्ष्य ठेकेदार र अन्य पेशेवरहरूलाई उत्कृष्ट गुणस्तर प्रदान गर्नु थियो', 'Commercial Industrial Supply is a leading provider of industrial products in the United States and beyond. We serve a range of industries and carry a diverse selection of top quality products that help professionals like YOU get the job done. Our Products include piping, fittings, valves, filtration, flow control, electrical and more.  Commercial Industrial Supply was founded in 2009 by Ron Heisler and Don Baker. Their goal was to provide contractors and other professionals with the best quality', '2022-09-27 02:13:07', '2022-09-27 02:13:07', '202209070758building.png', 1, 'commercial-industrial'),
(6, '202209560802pexels-monstera-5849572.jpg', 'Rate Analysis', 'दर विश्लेषण', 'वस्तुको दर विश्लेषण गर्नका लागि दुईवटा महत्त्वपूर्ण फाइदाहरू छन्। पहिलोले प्रति इकाई वस्तुको लागत निर्धारण गर्दैछ, जबकि दोस्रोले यसको आर्थिक प्रक्रिया र प्रयोगहरू निर्धारण गर्दछ।  दर विश्लेषणले परियोजनाको निर्माणमा संलग्न उपकरणहरू, सेवाहरू र मेसिनरीहरूको राम्रोसँग परिभाषित चित्र दिन्छ।  दर विश्लेषणले निर्माण कार्यको लागि गरिएको भुक्तानीमा बजारको प्रभावको अनुपातमा मद्दत गर्दछ। यसले प्रति निर्माण लागत निर्धारण गर्न पनि मद्दत गर्दछ', 'There are two significant benefits for carrying out rate analysis of an item. The first is determining the cost per unit item, while the second determines its economic processes and uses.  Rate analysis gives a well-defined picture of tools, services, and machinery involved in the construction of a project.  Rate analysis helps in proportioning the effect of the market on the payments made for construction work. It also helps in determining the construction costs per', '2022-09-27 02:17:56', '2022-09-29 00:06:30', '202209560802management.png', 3, 'rate-analysis'),
(7, '202209470809pexels-stephen-andrews-9610436.jpg', 'Build Prefab House', 'प्रिफ्याब हाउस बनाउनुहोस्', '<p>प्रिफ्याब हाउस नेपालको संरचना इन्जिनियरिङ अनुसार सबैभन्दा राम्रो मोडल र डिजाइन गरिएको छ। Prefab घर र विद्यालय बलियो धातु फ्रेम संग छन् र समुदाय र ग्रामीण क्षेत्रहरु र शहर मा पनि यसको छिटो निर्माण को लागी सजिलो घर बनाउन सक्छ। रूफटप CGI पाना, Roockwool वा ग्याल्भेनाइज्ड, fibroid U.P.V.C हुन सक्छ। 1. भरपर्दो संरचना प्रिफ्याब हाउस नेपाल घरलाई हल्का स्टिल र UPVC को भित्ता प्यानलको रूपमा प्रयोग गर्ने लचिलो संरचनाले यसलाई लुक र भित्री रूपमा सुन्दर बनाउँछ। तिनीहरू अधिक भरपर्दो र सुरक्षित छन्, निर्माण आवश्यकताहरूमा आधारित डिजाइन मापदण्ड पूरा गर्न बनाउन सक्छ। 2. सजिलो र द्रुत विधानसभा र विघटन पूर्वनिर्मित घरका सबै कम्पोनेन्टहरू कारखानामा मोड्युलर बनाइन्छ। साइटमा काट्न वा वेल्ड गर्न आवश्यक छैन। साधारण उपकरणहरू र धेरै पटकको साथ भेला र भत्काउन सकिन्छ। १८ वर्गमिटरको प्रिफेब्रिकेटेड घरको एउटा युनिट दुई जना मजदुरले चार घण्टामा बनाउन सक्छ।</p>', '<p>The Structure of Prefab House Nepal are engineering wise best modeled and designed. The Prefab house and school are with strong metal frame and can make easy home in community and rural areas and also in city for its quick fabrication.Rooftop can be CGI sheet , Roockwool or galvanized,fibroid U.P.V.C. 1. Reliable Structure Prefab House Nepal house using the light steel and the flexible structure using UPVC as wall panel make it elegant in looks and interior. They are more reliable and safer, can make it to meet the design criteria based on the construction requirements. 2. Easy &amp; Quick Assembly &amp; Dismantling All the components of prefabricated house are modular manufactured in the factory. No need to cut or weld on site. Can be assembled and dismantled with simple tools and multiple times. One unit of 18sqm prefabricated house can be built up in four hours by two labors.</p>', '2022-09-27 02:24:47', '2022-09-29 00:06:52', '202209521908office-building.png', 3, 'build-prefab-house'),
(8, '202209250814The-Granville-800x450.jpg', 'Residential Building', 'आवासीय भवन', 'आवासीय वास्तुकला, एकदम सरल रूपमा, आवासीय, गैर-व्यावसायिक गुणहरू र बस्ने ठाउँहरूको डिजाइन र निर्माण गर्ने प्रक्रिया हो। आवासीय वास्तुकलामा टाउनहोमहरूदेखि हवेलीहरूदेखि अपार्टमेन्ट कम्प्लेक्सहरू र बीचका सबै चीजहरू समावेश छन्। यो आधुनिक वा पुरानो हुन सक्छ। शहरी होस् या ग्रामीण । विलक्षण वा सरल। जे पनि! संक्षेपमा, आवासीय वास्तुकला भनेको घरमालिकको आवश्यकता र चाहनाहरू कैद गर्ने र यी प्रायः अस्पष्ट अवधारणाहरूलाई उनीहरूको सपनाको वास्तविक जीवनको घरमा अनुवाद गर्ने बारे हो।  अब यो सम्भवतः नभन्दै जान्छ, तर साधारण अनलाइन लेखमा आवासीय वास्तुकलाको प्रत्येक पक्षलाई कभर गर्नु ठ्याक्कै व्यावहारिक छैन र यो यथार्थपरक पनि छैन। यो छोटो ब्लग पोष्टहरू भन्दा पाठ्यपुस्तकहरूको लागि अधिक उपयुक्त एक धनी र विविध विषय हो (यद्यपि यदि तपाईंसँग समय छ भने, हामी केही सिफारिस गर्न पाउँदा खुसी हुनेछौं)। त्यसोभए के हामी उत्कृष्ट इतिहास र आवासीय वास्तुकलाको विशाल ब्रह्माण्डलाई समेट्ने सबै कुरामा जान लागेका छौं? सम्भवतः छैन। तर हामीले के गर्न सक्छौं भने केही हाइलाइटहरू हिट गर्नु हो र \"आवासीय वास्तुकला\" शब्दको अर्थ के हो भनेर संक्षिप्त सिंहावलोकन दिनुहोस्।', 'Residential architecture is, quite simply, the process of designing and building residential, non-commercial properties and living spaces. Residential architecture includes everything from townhomes to mansions to apartment complexes and everything in between. It can be modern or nostalgic. Urban or rural. Eccentric or simple. Anything! In a nutshell, residential architecture is all about capturing the needs and desires of the homeowner and translating these often obscure concepts into a real life home of their dreams.  Now it probably goes without saying, but covering every aspect of residential architecture in a simple online article isn’t exactly practical nor is it realistic. It’s a rich and diverse topic more suited for textbooks than short blog posts (though if you’ve got the time, we’d be happy to recommend some). So are we going to get into everything that encompasses the illustrious history and vast universe of residential architecture? Not likely. But what we CAN do is hit a few of the highlights and give a brief overview of what is meant by the term “residential architecture”.', '2022-09-27 02:29:25', '2022-09-27 11:32:18', '202209250814Residential.png', 8, 'residential-building'),
(9, '2022091208181 (1).jpg', 'Design and Building', 'डिजाइन र भवन', 'मालिकले दुई छुट्टाछुट्टै सम्झौताहरू प्रबन्ध गर्नुपर्दछ जुन प्रायः डिजाइनर र ठेकेदार बीच एक विरोधी सम्बन्ध सिर्जना गर्दछ। यदि केहि गलत भयो वा अप्रत्याशित परिस्थितिले परिवर्तनहरू आवश्यक छ भने, डिजाइनर र ठेकेदारले लागत ओभररन वा तालिका परिवर्तनहरूको लागि एकअर्कालाई दोष दिन्छन्, प्रायः मुद्दा र ढिलाइको कारणले गर्दा परियोजना लागतमा थपिन्छ। मालिकले जिम्मेवारीको एकल बिन्दुको साथ मात्र एउटा सम्झौता प्रबन्ध गर्दछ। डिजाइनर र ठेकेदारले मालिकको तालिका र बजेटमा फिट हुन एकीकृत परियोजना सिफारिसहरू प्रदान गर्दै टोलीको रूपमा सुरुदेखि नै सँगै काम गर्छन्। कुनै पनि परिवर्तनहरू सम्पूर्ण टोलीद्वारा सम्बोधन गरिन्छ, जसले सहयोगात्मक समस्या-समाधान र नवीनतातर्फ अग्रसर गर्दछ, बहाना वा दोष-परिवर्तन होइन। जबकि एकल-स्रोत अनुबंध डिजाइन-निर्माण र पुरानो तरिकाहरू बीचको आधारभूत भिन्नता हो, समान रूपमा महत्त्वपूर्ण डिजाइन-निर्माणमा अन्तर्निहित सहयोगको संस्कृति हो।', 'The Owner must manage two separate contracts which all-too-often creates an adversarial relationship between the designer and the contractor. If something goes wrong or an unforeseen circumstance requires changes, the designer and contractor blame one another for the cost overruns or schedule changes, often leading to litigation and delays which add to the project cost. The Owner manages only one contract with a single point of responsibility. The designer and contractor work together from the beginning, as a team, providing unified project recommendations to fit the Owner\'s schedule and budget. Any changes are addressed by the entire team, leading to collaborative problem-solving and innovation, not excuses or blame-shifting. While single-source contracting is the fundamental difference between design-build and the old ways, equally important is the culture of collaboration inherent in design-build.', '2022-09-27 02:33:12', '2022-09-28 23:24:41', '202209120818design.png', 6, 'design-and-building'),
(10, '202209041722decorative-wall-3d-model-obj-3ds-fbx-dae.jpg', '3D Wall Design', '3 डी दीवार डिजाइन', '<p>थ्रीडी प्रभावको साथ भित्ता वालपेपर भित्ताहरूको भित्री डिजाइनमा अधिक लोकप्रियता प्राप्त गर्दैछ। ठूला ढाँचा छविहरूको प्रशोधन, उत्पादन र उत्पादनको लागि नयाँ प्रविधिहरूले यस क्षेत्रको लागि असीमित रचनात्मक क्षेत्रहरूको लागि बाटो खोलेको छ। यद्यपि अधिकांश आन्तरिक डिजाइनरहरूले यस प्रकारको व्यवस्थाको साथ अधिकतम स्तरमा प्रतिध्वनि गर्दैनन् भने, प्रोफाइल बजारले यस सन्दर्भमा द्रुत रूपमा बढ्दो प्रवृत्ति देखाउँदछ। किनकी चीजहरू अझै शैशवमा छन् र यस क्षेत्रको शब्दावली अझै पनि राम्ररी राखिएको छैन र मास्टर गरिएको छैन, धेरै मानिसहरूले वालपेपरको थ्रीडी प्रभाव (अप्टिकल धारणा प्रभाव) लाई फिल्म उद्योगमा थ्रीडी (स्टेरियोस्कोपिक छविहरू) सँग भ्रमित गर्छन्। त्रि-आयामी भित्ति वालपेपर विशेष रूपमा भित्री डिजाइनमा एक अत्यन्त महत्त्वपूर्ण चीज टिक गर्न डिजाइन गरिएको छ - दृश्य ठाउँको विस्तार। यो एक सौन्दर्य चाल हो जसले दर्शनीयता दिन्छ, पर्खालहरूको सानो त्रुटिहरू लुकाउँछ र सिर्जना गरिएको वातावरणलाई जोड दिन्छ। कोठा विस्तार गर्न को लागी चालहरु सधैं भित्री डिजाइन मा प्रयोग गरिएको छ। क्रोमेटिक्सको नियन्त्रित प्रयोग, विभिन्न चौडाइका ठाडो वा तेर्सो स्ट्रिपहरूको सिर्जना वा एक वा धेरै क्षेत्रहरूको अत्यधिक प्रकाश, हालसम्मका केही भिन्नताहरू मात्र थिए, जसको माध्यमबाट स्टाइलिस्टहरूले भित्री भागलाई &quot;बढाइयो&quot; वा &quot;घटाउ&quot;। अब, थ्रीडी प्रभावको साथ फोटो वालपेपरले भित्री सजावटमा थप मूल्य ल्याउँछ, क्रोमेटिक्स, ज्यामिति र प्रकाश र छायाँको खेल मार्फत मात्र होइन, तर अवस्थाहरू प्रसारण गर्ने क्षमता भएका जटिल छविहरू मार्फत पनि। थ्रीडी प्रभावको साथ वालपेपर व्यवस्थामा नयाँ वर्तमानको प्रारम्भकर्ता हो जसले धेरै भन्दा धेरै अनुयायीहरूलाई कब्जा गर्छ, जसले सिर्जनाकर्ता र दर्शक दुवैको कल्पनालाई उत्तेजित गर्दछ। हामी उपयोगी सुझावहरू, विकल्पहरू र प्रेरणादायक विचारहरूमा ध्यान केन्द्रित गर्न जारी राख्छौं कि तपाइँ कसरी दृश्य ठाउँ विस्तार गर्न त्रि-आयामी छविहरू प्रयोग गर्न सक्नुहुन्छ, चाहे हामी बच्चाको कोठा, कार्यालय, शयनकक्ष वा बैठक कोठालाई सन्दर्भ गर्दैछौं।</p>', '<p>Mural Wallpaper with 3D effect is gaining more and more popularity in interior design of walls. New technologies for processing, production and production of large format images have opened the way to unlimited creative areas for this field. Even if the vast majority of interior designers do not yet resonate at maximum levels with this type of arrangement, the profile market shows a fast growing trend in this regard. Because things are still in their infancy and the terminology in this area is still not properly laid out and mastered, many people confuse the 3D effect of the wallpaper (optical perception effect) with the 3D in the film industry (stereoscopic images). The three-dimensional mural wallpaper is specially designed to tick an extremely important thing in interior design - the extension of visual space. It is an aesthetic trick that gives spectacularity, hides the small imperfections of the walls and accentuates the created atmosphere. Tricks for expanding a room have always been used in interior design. The controlled use of chromatics, the creation of vertical or horizontal stripes with different widths or the excessive lighting of one or more areas, were just some of the variants so far, through which stylists &quot;enlarged&quot; or &quot;reduced&quot; an interior. Now, the photo wallpaper with 3D effect brings added value in the interior decoration, not only through chromatics, geometry and play of light and shadows, but also through complex images that have the ability to transmit states. The wallpaper with 3D effect is an initiator of a new current in arrangements that captures more and more followers, which stimulates both the imagination of the creator and the viewer. We continue to focus on useful tips, options and inspirational ideas on how you can use three-dimensional images to expand visual space, whether we are referring to the child&#39;s room, office, bedroom or living room.</p>', '2022-09-27 11:37:04', '2022-09-28 23:24:32', '2022090417223d.png', 30, '3d-wall-design'),
(11, '202209280500architect-g763a10cc9_1920.jpg', 'Engineering Counselling', 'ईन्जिनियरिङ् परामर्श', 'धेरै व्यक्तिहरू, आफ्नो जीवनको कुनै न कुनै बिन्दुमा, परामर्शको अवधारणा वा व्यावसायिक सल्लाहकारको भूमिका के हुन्छ भन्ने बारे सही बुझाइ बिना नै आफूलाई सल्लाहकारको भूमिकामा भेट्टाउनेछन्।  एक पेशेवर सल्लाहकार र एक व्यक्ति को बीच एक ठूलो भिन्नता छ जसले आफ्नो भूमिका को एक भाग को रूप मा केहि परामर्श कौशल को उपयोग गर्दछ, उदाहरण को लागी एक साथी वा सहकर्मी को रूप मा। एक पेशेवर सल्लाहकार एक उच्च-प्रशिक्षित व्यक्ति हो जसले आफ्नो ग्राहकहरु संग परामर्श दृष्टिकोण को एक फरक दायरा प्रयोग गर्न सक्षम छ।', 'Many people will, at some point in their lives, find themselves in the role of a counsellor without having a true understanding of the concept of counselling or what the role of the professional counsellor entails.  There is a big difference between a professional counsellor and a person who uses some counselling skills as part of their role, for example as a friend or colleague. A professional counsellor is a highly-trained individual who is able to use a different range of counselling approaches with their clients.', '2022-09-28 23:15:28', '2022-09-28 23:21:03', '202209280500counselling.png', 2, 'engineering-counselling');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vYZCyJrtRwOyB7mAstx9InwrNiom0P1nzYJvKckM', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53', 'YTo5OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJ0Q2lGUnBOamJSOXJXSnVqRnVPZEFSNHhGZkF2SUI0NEFvdnYyQmRMIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQyS0E2alM3Ly4uTk9YZnNEak9LVHBPdzJOS1JOV290M2czOWE1eTY3Y1MzY0U1L21DQTVULiI7czoxMDoiYWRtaW5fcGFnZSI7czo3OiJTZXJ2aWNlIjtzOjEwOiJmcm9udF9wYWdlIjtzOjk6ImhvbWVfdXNlciI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjg6Imxhbmd1YWdlIjtzOjc6ImVuZ2xpc2giO30=', 1664431159);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_np` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_para_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_para_np` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `heading_en`, `heading_np`, `slider_para_en`, `slider_para_np`, `status`, `created_at`, `updated_at`) VALUES
(1, '202209291530hero-slider-img-3.jpg', 'Self-Perform Expertise', 'स्व-प्रदर्शन विशेषज्ञता', 'With a Large and Diverse Force of Skilled Craft     Professionals, Sundt Specializes in Self-Performing Core Scopes of Work in the                                     Construction Process. This Means Agile Problem-Solving and Fewer Surprises as We Manage Critical-Path Schedule, Safety and Quality Control for the Entire Project.', 'कुशल शिल्प पेशेवरहरूको ठूलो र विविध बलको साथ, सुन्डट स्व-प्रदर्शन कोर स्कोपमा कामको दायरामा माहिर छ                                     निर्माण प्रक्रिया। यसको मतलब चुस्त समस्या-समाधान र कम आश्चर्यको रूपमा हामी सम्पूर्ण परियोजनाको लागि क्रिटिकल-पाथ अनुसूची, सुरक्षा र गुणस्तर नियन्त्रण व्यवस्थापन गर्नुहोस्।', '1', '2022-09-22 09:45:29', '2022-09-22 11:34:23'),
(2, '202209431757hero-slider-img-4.jpg', 'Professional Team', 'व्यावसायिक टोली', 'Our Team Of Professionals Will Help You Turn Your Dream Home Or Flat Into A Reality Fast. The Love Boat Promises Something For Everyone. Now The World Don’t Move To The Beat Of Just One.\n', 'पेशेवरहरूको हाम्रो टोलीले तपाईंलाई तपाईंको सपनाको घर वा फ्ल्याटलाई वास्तविकतामा छिटो बदल्न मद्दत गर्नेछ। प्रेम डुङ्गाले सबैका लागि केही न केही प्रतिज्ञा गर्छ। अब संसार केवल एकको बिटमा सर्दैन।', '1', '2022-09-25 12:12:44', '2022-09-25 12:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `theme_settings`
--

CREATE TABLE `theme_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_settings`
--

INSERT INTO `theme_settings` (`id`, `facebook_link`, `linkedin_link`, `twitter_link`, `youtube_link`, `address`, `email`, `phone_number`, `telephone`, `logo`, `maps_link`, `created_at`, `updated_at`) VALUES
(1, 'asdad', NULL, NULL, NULL, NULL, NULL, NULL, ' flight tickets sold for Dashain travel', '202209571415class-2.jpg', 'asdad', NULL, '2022-09-22 08:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `web_position` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `position`, `address`, `mobile`, `gender`, `telephone`, `age`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `web_position`) VALUES
(2, 'Sushil KC', 'sushilkc18123@gmail.com', NULL, '$2y$10$0UBa/DRn4gxtRKDXPgVF7OyTfCkOZA5UAa..REVl7Wc7s5pI.SP..', '12', 'Tulsipur-5, dang', '9864563927', 'Female', NULL, '12', NULL, NULL, NULL, NULL, NULL, '202209591014about.png', '2022-09-22 04:29:59', '2022-09-22 04:45:59', 12),
(4, 'Rajan KC', 'rajankc458@gmail.com', NULL, '$2y$10$IoFtiN6fNPM2.IZ0gzUU5.50RoBDDCMOF5BMo4q0/j4bNKo0jn7B.', 'Founder', 'Tulsipur-5, dang', '9857877776', 'Male', NULL, '24', NULL, NULL, NULL, NULL, NULL, '202209340539246316750_1003154767144866_1067254811075886604_n.jpg', '2022-09-28 23:27:43', '2022-09-28 23:54:34', 5),
(5, 'Suman Oli', 'sumanoli@gmail.com', NULL, '$2y$10$2KA6jS7/..NOXfsDjOKTpOw2NKRNWot3g39a5y67cS3cE5/mCA5T.', 'Founder', 'Tulsipur-5, dang', '9812866677', 'Male', NULL, '23', NULL, NULL, NULL, NULL, NULL, '20220927055568996214_2326309127418258_8027152666289242112_n (1).jpg', '2022-09-28 23:28:47', '2022-09-29 00:10:27', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_settings`
--
ALTER TABLE `theme_settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theme_settings`
--
ALTER TABLE `theme_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
