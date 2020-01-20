-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2020 at 08:17 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledge`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_models`
--

DROP TABLE IF EXISTS `answer_models`;
CREATE TABLE IF NOT EXISTS `answer_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `auserId` bigint(20) NOT NULL,
  `qid` bigint(20) NOT NULL,
  `afile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acontent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer_models`
--

INSERT INTO `answer_models` (`id`, `created_at`, `updated_at`, `auserId`, `qid`, `afile`, `acontent`) VALUES
(51, '2019-09-25 08:03:11', '2019-09-27 00:11:02', 4, 1, 'Answer//4OsfFpb7brsMSai8kfZDQCtEH65WlwqhflMcx9Lz.png', 'There are the most commonly used normal forms: First normal form(1NF) Second normal form(2NF) Third normal form(3NF) Boyce & Codd normal form (BCNF)'),
(2, '2019-09-23 12:06:42', '2019-09-25 08:04:32', 1, 1, 'Answer//QcQvqwQp3Gjyjwg86SVOjfgivVAIJl8DMzvuPFH4.png', 'To understand normalization in database with example tables, let\'s assume that we are supposed to store the details of courses and instructors'),
(23, '2019-09-24 06:09:11', '2019-09-24 07:59:53', 4, 10, NULL, 'Automata theory is the study of abstract machines and automata, as well as the computational problems that can be solved using them. It is a theory in theoretical computer science and discrete'),
(16, '2019-09-24 00:26:37', '2019-09-24 00:26:37', 1, 9, 'Answer//KNOkEaF45FZ67MDiH8769yfAyvGFItLDjnyPO06Y.png', 'Whenever the CPU becomes idle, the operating system must select one of the processes in the ready queue to be executed. The selection process is carried out by the short-term scheduler (or CPU scheduler). The scheduler selects from among the processes in memory that are ready to execute, and allocates the CPU to one of them.'),
(17, '2019-09-24 00:29:48', '2019-09-24 00:29:48', 4, 9, 'Answer//WjhNhyQzYAxOwgQ9tka97Ucmd65ieBG26RFhDTUl.png', 'In this type of Scheduling, the tasks are usually assigned with priorities. At times it is necessary to run a certain task that has a higher priority before another task although it is running. Therefore, the running task is interrupted for some time and resumed later when the priority task has finished its execution.'),
(36, '2019-09-24 07:55:22', '2019-09-24 07:55:58', 4, 10, 'Answer//gLeKWIVBYccsNhg7ihtstht8j8nSXt3etbiuBcOg.png', 'murad     The word automata comes from the Greek word αὐτόματα, which means \"self-making'),
(28, '2019-09-24 07:11:54', '2019-09-24 07:11:54', 4, 23, NULL, 'Moshiur        Automata theory is the study of abstract machines and automata, as well as the computational problems that can be solved using them. It is a theory in theoretical computer science and discrete'),
(29, '2019-09-24 07:15:52', '2019-09-24 07:15:52', 4, 23, NULL, 'Moshiur        Automata theory is the study of abstract machines and automata, as well as the computational problems that can be solved using them. It is a theory in theoretical computer science and discrete'),
(27, '2019-09-24 06:55:19', '2019-09-24 06:55:19', 4, 23, NULL, 'Moshiur        Automata theory is the study of abstract machines and automata, as well as the computational problems that can be solved using them. It is a theory in theoretical computer science and discrete'),
(25, '2019-09-24 06:17:30', '2019-09-24 06:17:30', 4, 19, NULL, 'Moshiur Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves.'),
(24, '2019-09-24 06:13:20', '2019-09-24 06:13:20', 4, 19, NULL, 'Moshiur Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves.'),
(22, '2019-09-24 03:55:48', '2019-09-24 03:55:48', 4, 11, 'Answer//1xcaLFeXC4K6diFoIyNKxHcm99eV18wbVd79TzoB.png', 'that provides a system for developing application software and deploying it in a cross-platform computing environment.'),
(20, '2019-09-24 03:16:07', '2019-09-24 03:16:07', 4, 16, NULL, 'Whenever the CPU becomes idle, the operating system must select one of the processes in the ready queue to be executed. The selection process is carried out by the short-term scheduler (or CPU scheduler). The scheduler selects from among the processes in memory that are ready to execute, and allocates the CPU to one of them.'),
(21, '2019-09-24 03:54:46', '2019-09-24 05:05:54', 4, 11, 'Answer//Gev1TmtNrYlk19acuWKvxOrJDORImsWNGbrevS37.png', 'Moshiur Java is a set of computer software and specifications developed by James Gosling at Sun Microsystems, which was later acquired by the Oracle Corporation'),
(19, '2019-09-24 01:55:58', '2019-09-24 01:55:58', 4, 10, NULL, 'Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves.'),
(53, '2019-09-27 13:58:00', '2019-09-27 13:58:00', 1, 39, 'Answer//cWCYjbbDN3ZWPINPER9VGKdtkZwo0h2NVZD06Zcv.png', 'Built on MySQL Enterprise Edition and powered by the Oracle Cloud, Oracle MySQL Cloud Service provides a simple, automated, integrated and enterprise ready MySQL cloud service, enabling organizations to increase business agility and reduce costs.'),
(38, '2019-09-24 08:27:33', '2019-09-24 08:37:33', 1, 38, NULL, 'Image processing is the application of a set of techniques and algorithms to a digital image to analyze, enhance, or optimize image characteristics such as ...'),
(54, '2019-10-03 13:37:47', '2019-10-03 13:37:47', 1, 1, 'Answer//me1FV0ZojhOoum2YoEftyVQryJYyPhCDEIgMsDc0.png', 'The First normal form simply says that each cell of a table should contain exactly one value. Let us take an example. Suppose we are storing the courses that a particular instructor takes, we can store it like this:'),
(41, '2019-09-25 04:33:46', '2019-09-25 04:33:46', 1, 10, NULL, 'computer science and discrete mathematics (a subject of study in both mathematics and computer science).'),
(55, '2019-10-06 10:11:01', '2019-10-06 10:11:01', 7, 41, NULL, 'এমন সকল যন্ত্র যা অনেকটা মানুষের মতো চিন্তা/সিদ্ধান্ত নিতে এবং কাজ করতে পারে তাদের সবারই কৃত্রিম বুদ্ধিমত্তা আছে বলা যায়।আরও ভেঙ্গে যদি বলি তাহলে বলা যায় প্ল্যানিং কার্যক্রম, সমস্যা সমাধান, ভাষা বোঝা এবং সে অনুযায়ী কাজ করা, ছবি চেনা, কণ্ঠস্বর চেনা, নতুন কোন দক্ষতা অর্জন করা, কোন প্যাটার্ন চিহ্নিত করা, রিসার্চ করা ইত্যাদি ধর্ম যদি কোন যন্ত্রে থাকে তাহলেই তার AI আছে বুঝতে হবে। এটি অনেক বড় একটা ক্ষেত।একটু চিন্তা করলেই দেখব যে, আমরা প্রতি নিয়তই অনেক ক্ষেত্রে এই AI ব্যবহার করছি।                    \r\n\r\n\r\nমেশিন লার্নিং হল যন্ত্র যাতে মানুষের মতো কাজ করতে পারে এজন্য তাকে কোন নির্দিষ্ট কাজের বিভিন্ন ধরনের ডেটা দিয়ে ওই কাজ করতে সক্ষম করানো। পরবর্তীতে যেন ওইধরনের কাজ করতে হলে কম্পিউটার নিজে নিজেই করতে পারে এবং ভুল থেকে সিদ্ধান্ত নিতে পারে'),
(48, '2019-09-25 07:32:29', '2019-09-25 08:05:28', 1, 11, 'Answer//boWdh1AwLIt7EiAOITFAXcKvlgrEoaQe2fNelBRq.png', 'At Sun Microsystems, which was later acquired by the Oracle Corporation, that provides a system for developing application software and deploying it in a cross-platform computing environment'),
(49, '2019-09-25 07:51:40', '2019-09-25 08:03:42', 1, 1, 'Answer//EE1rrGXlGDR060j8VWrFy5C4DPHt8l7g1SD0ckfZ.png', 'Database Normalization. Database Normalization. First Normal Form (1NF) Second Normal Form (2NF) Third Normal Form (3NF) Boyce-Codd Normal Form (BCNF) Fourth Normal Form (4NF)'),
(52, '2019-09-26 22:18:42', '2019-09-26 22:18:42', 4, 38, 'Answer//LVf5nPJadGBJc0StDrwLA6Hb1tyKepDRSBQr62yE.png', 'Digital Image Processing means processing digital image by means of a digital computer. We can also say that it is a use of computer algorithms, in order to get enhanced image either to extract some useful information.'),
(56, '2019-10-06 10:18:20', '2019-10-06 10:18:20', 1, 41, 'Answer//r4SOuLMEcfV3b4VypTWO3foywPFUfGSg7JZyIFeG.png', 'একটা ফুলের দোকানে অনেক ধরনের ফুল আছে যেমনঃ তিউলিপ, গোলাপ, রজনীগন্ধা, শাপলা ইত্যাদি। আমরা চাচ্ছি যে, ছবি তুলে কম্পিউটারে একটা সফটওয়্যারে দিব আর ও বলে দিবে ফুলটা কোন ফুল। আমাদের জন্য তো এটা বলা কোন ব্যাপারই না কিন্তু কম্পিউটারের জন্যও কি তাই! কি মনে হয়? না হওয়ারই কথা তাইনা! আমরা একটু দেখার চেষ্টা করি কম্পিউটারকে কিছু শেখানো যায় কি না যাতে ও বলতে পারবে কোনটা কোন ফুল। এজন্য আমরা প্রথমে কয়েক হাজার(যত বেশি হবে ততই ভাল)ফুলের ছবি সংগ্রহ করলাম। এর মধ্যে ৬০% ছবির জন্য কম্পিউটারকে মেশিন লার্নিং Algorithm-কে বলে দিলাম যে এই ছবিটার জন্য অমুক ফুলের নাম হবে। আর ৪০% ছবি কোন লেভেল(নাম বলে দেইনি) ছাড়াই Algorithm-এ ইনপুট দিয়ে বললাম আউটপুট কি হবে তা জানাতে। প্রথম দিকে কিছু ভুল করলেও দেখা যাবে ধীরে ধীরে ভুল কমে আসতেছে এবং কম্পিউটারটি অনেকটা দক্ষ হয়ে উঠেছে।এখন নতুন কোন ফুলের ছবি দিলেই কম্পিউটার ভালভাবেই কোন ফুল বলে দিচ্ছে। আর এর অর্থই হল আমরা মেশিনটাকে শেখাতে সক্ষম হয়েছি। আর এটাই হল মেশিন লার্নিং।'),
(59, '2019-10-10 10:25:14', '2019-10-10 10:25:14', 4, 42, NULL, 'ইমেজ প্রসেসিং কি সেটার  ব্যাখ্যা দেওয়ার আগে ছোট্ট একটা গল্প দিয়ে শুরু করতে চাই।  মনে করুন আপনি কোনো পাহাড়ী জায়গাতে ঘুরতে গেছেন , সেখানে থেকে আপনার এক বন্ধু কে ফোন দিয়ে বলছেন আপনি যে জায়গাটাতে আছেন সেটা অনেক সুন্দর। আপনি আপনার সামনের প্রকৃতি সম্পর্কে কিছু বর্ণনা দিলেন তখন আপনার বন্ধু টি সেই বর্ণনা থেকে কল্পনা করে সেই জায়গাটির একটা প্রতিচ্ছবি দেখবে। ঠিক এই কাজটি  ইমেজ প্রসেসিং এ হয়ে থাকে।\r\n\r\n\r\nইমেজ প্রসেসিং এ একটি ছবি ইনপুট হিসেবে নেওয়া হয় এবং আউটপুট হিসেবে একটা ছবি আসে। ইনপুট ও আউটপুটের মাঝখানের যে জায়গা তে সেখানে প্রসেসিং আর কাজটি হয়ে থাকে। এখানে কিছু ইমেজিং সায়েন্সের কিছু এলগোরিদম ব্যবহার করা করা হয়। এই এলগোরিদম গুলো বেবহৃত হয় ইমেজ কে সুন্দর ভাবে তুলে ধরতে, ইমেজের ছোট ছোট জিনিস দেখা/বুঝার জন্য।'),
(60, '2019-10-10 10:36:44', '2019-10-10 10:36:44', 8, 42, NULL, 'ইমেজ প্রসেসিং দুই ধরণের হয়ে থাকে :-\r\n\r\n\r\n \r\n১. এনালগ ইমেজ প্রসেসিং।\r\n\r\n২. ডিজিটাল ইমেজ প্রসেসিং।\r\n\r\nএনালগ ইমেজ প্রসেসিং: এনালগ ইমেজ প্রসেসিং কে  ভিজ্যুয়াল টেকনিক বলা হয়। ইমেজ প্রসেসিং এ হার্ড কপি (মূল পত্র) যেমনঃ প্রিন্টআউট, ফোটোগ্রাফের কাজে টেকনিকটি বেবহৃত হয়।  \r\n\r\n\r\n \r\nডিজিটাল ইমেজ প্রসেসিং: ডিজিটাল ইমেজ প্রসেসিং হচ্ছে একটি ডিজিটাল ইমেজ কে দক্ষতার সাথে কম্পিউটারের মাধ্যমে প্রসেসিং করার যে টেকনিক। আমরা  ডিজিটাল ইমেজ প্রসেসিং এর উদাহরণ দেই, যেমন: আমরা উপগ্রহের যেসব ছবি দেখতে পাই সেগুলো যদি কম্পিউটারে প্রসেসিং করা না হয় তাহলে আমরা হয়তো ছবি গুলো দেখে কিছুই বুঝতাম না।'),
(61, '2019-10-11 23:28:59', '2019-10-11 23:28:59', 9, 43, NULL, 'ইউটিউব দেখে যদি আপনি না শিখতে চান তাহলে আপনার জন্য সবচেয়ে ভালো সলুশন হতে পারে বই পড়া, ব্লগ পড়া এবং প্রচুর পরিমানে চর্চা করা। মনে রাখবেন ভালো প্রোগ্রামার হবার জন্য প্রেক্টিস এর কোনো বিকল্প নেই। যত বেশি প্রেকটিস করবেন তত বেশি দক্ষ হতে থাকবেন।'),
(62, '2019-10-11 23:30:18', '2019-10-11 23:30:18', 15, 43, NULL, 'উত্তম মাধ্যম হল, সব মাধ্যমের মাধ্যমে শিখা'),
(63, '2019-10-11 23:37:22', '2019-10-11 23:37:22', 1, 43, NULL, 'Kon Programming Shiktay Caccen..??'),
(64, '2019-10-11 23:54:27', '2019-10-11 23:54:27', 7, 43, NULL, 'ইউটিউব থেকে শেখা যায় অনেক ভাল করে। তার জন্য প্রয়োজন ভাল মানের ইউটিউব চ্যানেল যেখানে যে ল্যাঙ্গুয়েজ নিয়ে শিখতে চান, সে ল্যাঙ্গুয়েজের সব টিউটোরিয়াল থাকতে হবে এবং প্রথম থেকে সব ক্লাস করা তাহলে আপনি অনেক ভাল শিখতে পারবেন। সাথে সাথে কমেন্ট গুলো চেক করা যাতে করে অন্যরা কি বলছে সেই টিউটোরিয়াল সম্পর্কে। তবে ইউটিউব থেকে পড়লে একটা সমস্যা সেটা হল, মনে করেন যে টিউটোরিয়াল নিয়ে পড়তেছেন সেটার উপর একটা প্রশ্ন জিজ্ঞেস করতে চান, সেটার উত্তর কিন্তু আপনি সাথে সাথে পাচ্ছেন না। এই একটায় সমস্যা, অবশ্যই কমেন্টে হয়ত আপনার উত্তর পেয়েও যেতে পারেন। তার জন্য আপনাকে অবশ্যই ভাল টিউটোরিয়াল গুলো দেখতে হবে, যেগুলোতে বেশি ভিউয়ার থাকে এবং কমেন্টও থাকে।\r\nপ্রোগ্রামিং এমন একটা জিনিস সেটা প্যাক্টিস করতে হবে প্রতিদিন। প্যাক্টিস না করলে আপনি যদি পৃথিবীর সবচেয়ে বড় শিক্ষকের কাছে শিখলেও কোন কাজ হবে না।\r\nপ্যাক্টিস এর জন্য বিভিন্ন লিংক থাকে সেখানে গিয়ে প্রবলেম সলব করতে পারেন।\r\nতবে এইটা সত্য যে যেখান থেকে শেখেন না কেন একটা ভাল রাইটারের বই কিন্ত আপনাকে follow করতে হবে। কারণ বইটার মাধ্যমে অাপনি বুঝতে পারবেন আপনাকে কোন কোন টপিক পড়তে হবে।\r\nবিঃদ্রঃ আমি আমার মতামতটা দিলাম যেটা আমার কাছে ভাল হনে হয় এবং আমি এইটাই follow করি। ভিন্ন জনের ভিন্ন মত ও থাকতে পারে।'),
(65, '2019-10-12 00:04:55', '2019-10-12 00:04:55', 8, 44, NULL, 'আসলে, ডেভেলপমেন্ট শেখার জন্য আপনার এই অবস্থায় ল্যাংগুয়েজ সুইস না করাটাই ভালো হবে। যেই ল্যাংগুয়েসে ওওপি জানেন, সেটা দিয়েই ফ্রেমওয়ার্ক গুলোর বেসিক কনসেপ্ট নিন আগে। ছোট খাটো প্রোজেক্ট করুন। যেহুতু পাইথনের ওওপি শিখছেন তো ফ্লাস্ক/জ্যাংগো ভালো চয়েস হতে পারে। আর এদের সাথে প্রায় সব ল্যাংগুয়েজের ফ্রেমওয়ার্ক এরই কন্সেপ্টগত মিল পাবেন। তবে সিনট্যাক্স আলাদা। সি টাইপের ল্যাংগুয়েজ যেমন Java, Php, C#, Javascript etc এদের মধ্যে অনেক মিল পাওয়া যায়। তবে আমি মনে করি সব ল্যাংগুয়েজ ও পপুলার ফ্রেমওয়ার্ক এর বেসিক শিখুন। আর পাইথন + জ্যাংগো এর গভির জ্ঞান অর্জন করুন। অনেক বড় বড় প্রোজেক্ট (ওয়েব বেজড) ও পাইথনে করা হয়েছে, হচ্ছে। চিন্তার কিছু নাই। গভির জ্ঞান থাকলে যে কোন পপুলার ল্যাংগুয়েজ ও ফ্রেমওয়ার্ক এরই জব পাওয়া যাবে মনে হয়। আর বিশ্বাস করুন প্রায় সব ল্যাংগুয়েজ ও পপুলার ফ্রেমওয়ার্ক এর এখন ৮০% কনসেপ্টই একই। শুধু সিনট্যাক্স আলাদা।'),
(66, '2019-10-12 00:07:28', '2019-10-12 00:07:28', 4, 44, NULL, 'Python এর problem solving experience দ্বারা কি বুঝালেন ঠিক পরিষ্কার হল না। কারণ যারা প্রবলেম সল্ভ করে তারা পাইথন ব্যাবহার করে না প্রায়। সি++ দিয়ে করে। আর Asp.net এবং PHP প্লাটফর্মে আপনি সি++ এর সাথে বেশি মিল পবেন, পাইথনের থেকে। দেশের মার্কেট ও বিদেশের মার্কেট ও ক্যারিয়ার বিচার করলে Asp.net বেশি ভালো হবে PHP থেকে। তবে ২ টাই করা যেতে পারে যদি আপনার নিজের পছন্দকে প্রাধান্য দেন। চাইলে পাইথন নিয়েও আগাতে পারেন। ফ্রেসার হিসাবে প্রথমে একটু কষ্ট হতে পারে জব পেতে। তবে যদি লিংক রাখেন বড় ভাইদের সাথে তাহলে বেবস্থা হয়ে যেতে পারে।');

-- --------------------------------------------------------

--
-- Table structure for table `category_models`
--

DROP TABLE IF EXISTS `category_models`;
CREATE TABLE IF NOT EXISTS `category_models` (
  `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_models`
--

INSERT INTO `category_models` (`cid`, `categoryname`, `created_at`, `updated_at`) VALUES
(1, 'Database Management System', '2019-09-16 03:44:34', '2019-09-16 03:44:34'),
(2, 'Operating System', '2019-09-16 03:45:08', '2019-09-16 03:45:08'),
(7, 'Computer Graphics', '2019-09-17 00:26:48', '2019-09-17 00:26:48'),
(4, 'Machine Learning', '2019-09-16 03:45:50', '2019-09-16 03:45:50'),
(5, 'Artificial Intelligence', '2019-09-16 03:46:24', '2019-09-16 03:46:24'),
(6, 'Image Processing', '2019-09-16 03:46:42', '2019-09-16 04:37:42'),
(8, 'Automata Theory', '2019-09-21 14:10:06', '2019-09-21 14:10:06'),
(9, 'Java Technology', '2019-09-23 02:08:48', '2019-09-23 02:08:48'),
(11, 'Parallel Processing and Distributed System', '2019-10-11 23:13:21', '2019-10-11 23:13:21'),
(12, 'Digital Signal Processing', '2019-10-11 23:15:08', '2019-10-11 23:15:08'),
(13, 'Computer Simulation and Modeling', '2019-10-11 23:15:45', '2019-10-11 23:15:45'),
(14, 'Communication Engineering', '2019-10-11 23:16:11', '2019-10-11 23:16:11'),
(15, 'Software Engineering', '2019-10-11 23:17:10', '2019-10-11 23:17:10'),
(16, 'Web Engineering', '2019-10-11 23:17:24', '2019-10-11 23:17:24'),
(17, 'Computer Architecture and Organization', '2019-10-11 23:18:26', '2019-10-11 23:18:26'),
(18, 'Computer Network', '2019-10-11 23:18:55', '2019-10-11 23:18:55'),
(19, 'System Analaysis and Design', '2019-10-11 23:19:30', '2019-10-11 23:19:30'),
(20, 'Data Structure', '2019-10-11 23:20:04', '2019-10-11 23:20:04'),
(21, 'Discrete Mathematics', '2019-10-11 23:20:37', '2019-10-11 23:20:37'),
(22, 'Algorithm', '2019-10-11 23:20:56', '2019-10-11 23:20:56'),
(23, 'Online Judge/Problem Solvings', '2019-10-11 23:21:38', '2019-10-11 23:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_09_07_163341_create_profile_models_table', 2),
(11, '2019_09_16_092127_create_category_models_table', 3),
(15, '2019_09_16_112217_create_question_models_table', 5),
(17, '2019_09_16_112248_create_answer_models_table', 6),
(18, '2019_09_26_082151_create_reply_models_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_models`
--

DROP TABLE IF EXISTS `profile_models`;
CREATE TABLE IF NOT EXISTS `profile_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `did` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ses` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_models`
--

INSERT INTO `profile_models` (`id`, `created_at`, `updated_at`, `userId`, `name`, `did`, `dname`, `iname`, `ses`, `phone`, `photo`) VALUES
(1, '2019-09-07 11:43:20', '2019-09-07 11:45:27', 1, 'Md. Murad Hossain', '20151201034', 'CSE', 'BSMRSTU', '2015-16', '01701310878', '5d73ecb601533.jpg'),
(5, '2019-09-18 11:10:17', '2019-09-18 11:10:37', 4, 'Md. Moshiur Rahman', '20151201031', 'CSE', 'BSMRSTU', '2015-16', '01572828282', '5d82650bb404f.jpg'),
(6, '2019-10-06 11:05:22', '2019-10-06 11:45:13', 7, 'Syed Sanjidul Islam Pallab', '20151201047', 'CSE', 'BSMRSTU', '2015-16', '01572828282', '5d9a2827ed1e7.jpg'),
(7, '2019-10-07 04:23:27', '2019-10-07 04:42:46', 8, 'Nayeem Hossain', '20151201027', 'IT', 'BSMRSTU', '2015-16', '01701919102', '5d9b16a516a6e.jpg'),
(8, '2019-10-11 22:35:53', '2019-10-11 22:35:53', 12, 'Md. Protikuzzaman', '20151201028', 'CSE', 'BSMRSTU', '2015-16', '01516827282', '5da15825e0386.jpg'),
(9, '2019-10-11 22:38:21', '2019-10-11 22:38:21', 13, 'S. M. Khalid Hasan', '20151101010', 'CSE', 'BSMRSTU', '2015-16', '01929827282', '5da158bd07e0c.jpg'),
(10, '2019-10-11 22:41:13', '2019-10-11 22:41:13', 14, 'Shisir Khan', '18che024', 'Chemistry', 'BSMRSTU', '2018-19', '01892828292', '5da1596955f03.jpg'),
(11, '2019-10-11 22:43:30', '2019-10-11 22:43:30', 11, 'Md. Masum Rahman', '16soc022', 'SOC', 'BSMRSTU', '2016-17', '01701834728', '5da159f26bc9b.jpg'),
(12, '2019-10-11 22:46:19', '2019-10-11 22:46:19', 15, 'Eidris Sikandar', '08eee021', 'EEE', 'DU', '2011-12', '01982839391', '5da15a9ba4360.jpg'),
(13, '2019-10-11 22:50:58', '2019-10-11 22:50:58', 10, 'Masuduzzam Akash', '16ete041', 'ETE', 'JUST', '2016-17', '01515640098', '5da15bb286235.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `question_models`
--

DROP TABLE IF EXISTS `question_models`;
CREATE TABLE IF NOT EXISTS `question_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quserId` bigint(20) NOT NULL,
  `qtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qcategoryname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qcontent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ufile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_models`
--

INSERT INTO `question_models` (`id`, `created_at`, `updated_at`, `quserId`, `qtitle`, `qcategoryname`, `qcontent`, `ufile`) VALUES
(1, '2019-09-18 11:37:23', '2019-09-23 01:18:03', 1, 'Normalisation', 'Database Management System', 'Normalisation is the process of taking data from a problem and reducing it to a set of relations while ensuring data integrity and eliminating data redundancy.', 'Question//aPZDEFpsDKWh9GsGLFfn9Vb184MULAtZUnvPRZdK.docx'),
(11, '2019-09-23 02:10:20', '2019-09-23 02:10:20', 1, 'Theoretical Definition', 'Java Technology', 'Most platforms can be described as a combination of the operating system and hardware. The Java platform differs from most other platforms in that it\'s a software-only platform that runs on top of other hardware-based platforms. ... The Java Virtual Machine (Java VM) The Java Application Programming Interface (Java API)', NULL),
(38, '2019-09-24 08:26:13', '2019-09-27 00:16:10', 1, 'Definition', 'Image Processing', 'Digital Image Processing means processing digital image by means of a digital computer. We can also say that it is a use of computer algorithm.', NULL),
(10, '2019-09-23 01:56:37', '2019-09-23 02:19:58', 1, 'Theorey', 'Automata Theory', 'Automata theory is the study of abstract machines and automata, as well as the computational problems that can be solved using them. It is a theory in theoretical computer science and discrete mathematics (a subject of study in both mathematics and computer science).', 'Question//GrwA0JD97y3boFTAstKTqWoWyFxPu3DC2Bw5Ygdh.docx'),
(40, '2019-09-27 16:02:16', '2019-09-27 16:02:16', 1, 'Theoretical Definition', 'Automata Theory', 'This tutorial has been prepared for students pursuing a degree in any information technology or computer science related field. It attempts to help students grasp the essential concepts involved in automata theory.', NULL),
(41, '2019-10-06 03:27:37', '2019-10-06 03:27:37', 4, 'Machine Learning', 'Artificial Intelligence', 'মেশিন লার্নিং এবং আর্টিফিসিয়াল ইন্টেলিজেঞ্জ এর মধ্যে পার্থক্য কি??', NULL),
(42, '2019-10-10 10:21:56', '2019-10-10 10:21:56', 7, 'Theoretical Definition', 'Image Processing', 'ইমেজ প্রসেসিং কি? ভালোভাবে বুঝতে চাই ??', NULL),
(43, '2019-10-11 23:27:53', '2019-10-11 23:27:53', 14, 'Programming', 'Online Judge/Problem Solvings', 'Programming শেখার উত্তম মাধ্যম কী কী?YouTube থেকে শেখা আমার পছন্দ হয়নি।', NULL),
(44, '2019-10-12 00:03:10', '2019-10-12 00:03:10', 10, 'Programming Language', 'Online Judge/Problem Solvings', 'assalamualaikum-\r\nএকটা প্রশ্ন ছিল-\r\nমোটামুটি রকম প্রোগ্রামিং করি,\r\nএক সময় c দিয়ে করতাম, object oriented হিসেবে c++ না করে Python শুরু করে দিসি & এটাই ভালো লাগতেছে,\r\nএখন ডেভেলপমেন্ট করতে চাইলে Asp.net এবং PHP কোনটা দিয়ে শুরু করাটা ভালো হয়,\r\nযাতে ভবিষ্যতে আমার Python এর problem solving experience টাও যোগ করে ভালো কিছু করা যাবে।\r\n\r\nযেকোনো ধরনের পরামর্শ সাদরে গ্রহণযোগ্য😃\r\nGoogle আমাকে কিছুটা confused করে দিসে।', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reply_models`
--

DROP TABLE IF EXISTS `reply_models`;
CREATE TABLE IF NOT EXISTS `reply_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ruserId` bigint(20) NOT NULL,
  `aid` bigint(20) NOT NULL,
  `rfile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rcontent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reply_models`
--

INSERT INTO `reply_models` (`id`, `created_at`, `updated_at`, `ruserId`, `aid`, `rfile`, `rcontent`) VALUES
(1, '2019-09-26 04:23:54', '2019-09-26 04:23:54', 1, 2, 'Reply//gvFUi628AKJ0x5N5hoXhETD6jYZxXj73tXYRo4YO.png', 'There are three types of anomalies that occur when the database is not normalized. These are – Insertion, update and deletion anomaly. Let’s take an example to understand this.'),
(13, '2019-09-27 13:58:29', '2019-09-27 13:58:29', 1, 53, 'Reply//EMUETbBMiiDEGx0eHH6qo5Fy7xjbnGVbG6WeJC3J.png', 'MySQL Cluster enables users to meet the database challenges of next generation web, cloud, and communications services with uncompromising scalability, uptime and agility.'),
(14, '2019-10-03 13:38:38', '2019-10-03 13:38:38', 1, 51, 'Reply//uPCdIUTP4ZZmjoqLtM9VGMQmaHQhFPvTxZLiMpEE.png', 'The first point is obviously straightforward since we just studied 1NF. Let us understand the first point – 1 column primary key. Well, a primary key is a set of columns that uniquely identifies a row. Basically, no 2 rows have the same primary keys. Let us take an example.'),
(5, '2019-09-26 13:08:49', '2019-09-26 13:08:49', 1, 48, NULL, 'The Java Virtual Machine (Java VM) The Java Application Programming Interface (Java API'),
(6, '2019-09-26 13:10:16', '2019-09-26 13:10:16', 1, 48, NULL, 'The Java Virtual Machine (Java VM) The Java Application Programming Interface (Java API'),
(7, '2019-09-26 13:12:26', '2019-10-03 12:00:36', 1, 2, 'Reply//1kDBkkbwYOH1IpyqlmXkgn42GIZtjuvl5CLPUDAX.png', 'optimal  Suppose, if at a point of time the company closes the department D890 then deleting the rows that are having emp_dept as D890 would also delete the information of employee Maggie since she is assigned only to this department.'),
(8, '2019-09-26 22:15:00', '2019-09-26 22:15:00', 1, 51, NULL, 'Database Normalization is a technique that helps in designing the schema of the database in an optimal manner so as to ensure the above points. The core idea of database normalization is to divide the tables into smaller subtables and store pointers to data rather than replicating it. For a better understanding of what we just said, here is a simple Normalization example:'),
(9, '2019-09-26 22:19:59', '2019-09-27 00:12:17', 4, 38, 'Reply//36U8FxnvT2k9JtHu48xwZJzXLOOf6XSfi8eXF9Hc.png', 'Digital image processing can be defined as subjecting a numerical representation of an object to a series of operations in order to obtain a desired result.'),
(10, '2019-09-26 22:23:02', '2019-09-26 22:23:02', 1, 52, NULL, 'Digital image processing consists of the conversion of a physical image into a corresponding digital image and the extraction of significant information from the digital image by applying various algorithms. Digital image processing mainly includes image collection, image processing, and image analysis. At its most basic level, a digital image processing system is comprised of three components, ie, a computer system on which to process images, an image digitizer, and an image display device. Fig. 13.5 shows a complete system for image processing.'),
(11, '2019-09-26 22:27:56', '2019-09-27 00:13:01', 1, 38, 'Reply//TUyAuMSafYRmZlLAwKjWAERITFp8F5wz8mbLe5qT.png', 'The input of that system is a digital image and the system process that image using efficient algorithms, and gives an image as an output. The most common example is Adobe Photoshop. It is one of the widely used application for processing digital images'),
(12, '2019-09-26 22:28:11', '2019-09-26 22:28:11', 1, 38, NULL, 'The input of that system is a digital image and the system process that image using efficient algorithms, and gives an image as an output. The most common example is Adobe Photoshop. It is one of the widely used application for processing digital images'),
(15, '2019-10-03 13:40:18', '2019-10-03 13:40:18', 1, 54, NULL, 'This way, if we want to edit some information related to CS101, we do not have to touch the data corresponding to CS154. Also, observe that each row stores unique information. There is no repetition. This is the First Normal Form.'),
(16, '2019-10-06 11:39:32', '2019-10-06 11:39:32', 7, 56, 'Reply//r7lmcqqbx28L49nXZ3MMYJ03CaA0W5KhWYw4ZHVz.jpeg', 'মেশিন লার্নিং (এমএল) হলো কোন বারংবার বাহ্যিক নির্দেশ ব্যতীত প্যাটার্নের উপর ভিত্তি করে নির্দিষ্ট একটি কর্ম সঠিকভাবে সম্পাদনের জন্যে কম্পিউটার ব্যবস্থার ব্যবহার করা এলগরিদম ও পরিসংখ্যান মডেলের অধ্যয়ন। এটি কৃত্রিম বুদ্ধিমত্তার একটি উপাধ্যায়। মেশিন লার্নিং এলগরিদম নমুনা উপাত্তের একটি গাণিতিক মডেল তৈরী করে, যার নাম দেয়া হয় ট্রেইনিং ডাটা বা অনুশীলন উপাত্ত। এটি করা হয় ভবিষ্যতের কোন কর্ম পূর্বাপর তথ্যের উপর ভিত্তি করে সম্পাদনে সক্ষম হওয়ার জন্যে।'),
(17, '2019-10-07 01:58:52', '2019-10-07 01:58:52', 7, 56, NULL, 'খুব বেসিক লেভেলের একটি প্রশ্ন। আসলেই জিনিসগুল নিয়ে আমাদের জানা থাকা দরকার। চেষ্টা করব এআই, মেশিন লার্নিং, এনএলপি এবং ডিপ লার্নিং এর ধারণা গুলো পরিস্কার করার।\r\n\r\nএমন সকল যন্ত্র যা অনেকটা মানুষের মতো চিন্তা/সিদ্ধান্ত নিতে এবং কাজ করতে পারে তাদের সবারই কৃত্রিম বুদ্ধিমত্তা আছে বলা যায়।আরও ভেঙ্গে যদি বলি তাহলে বলা যায় প্ল্যানিং কার্যক্রম, সমস্যা সমাধান, ভাষা বোঝা এবং সে অনুযায়ী কাজ করা, ছবি চেনা, কণ্ঠস্বর চেনা, নতুন কোন দক্ষতা অর্জন করা, কোন প্যাটার্ন চিহ্নিত করা, রিসার্চ করা ইত্যাদি ধর্ম যদি কোন যন্ত্রে থাকে তাহলেই তার AI আছে বুঝতে হবে। এটি অনেক বড় একটা ক্ষেত।একটু চিন্তা করলেই দেখব যে, আমরা প্রতি নিয়তই অনেক ক্ষেত্রে এই AI ব্যবহার করছি।\r\n\r\nমেশিন লার্নিং, এনএলপি এবং ডিপ লার্নিং এইগুলো সবই মেশিন লার্নিং এর অংশ বিশেষ। গানিতিক ভাষাই বললে মেশিন লার্নিং, এনএলপি এবং ডিপ লার্নিং হল AI এর সাবসেট।'),
(18, '2019-10-07 02:01:40', '2019-10-07 02:01:40', 8, 56, NULL, 'Machine Learning সহজ করার জন্য অনেক গুলো লাইব্রেরী রয়েছে, যেমন পাইথনের জন্য scikit-learn, রয়েছে গুগলের TensorFlow, Apache Spark MLlib, মাইক্রোসফটের Azure ML Studio ইত্যাদি। Machine Learning এর থিওরি পার্ট হয়তো একটু কঠিন মনে হতে পারে, কিন্তু ব্যাসিক আইডিয়া নেওয়ার পর প্র্যাক্টিক্যাল কাজ করা অনেক সহজ করে তুলছে এসব লাইব্রেরী গুলো। এগুলো কমপ্লেক্স সব অ্যালগরিদম ইমপ্লিমেন্ট করে রেখেছে। আমদের শুধু ব্যবহার করতে হবে। শুধু জানতে হবে কোন অ্যালগরিদম বা কোন লাইব্রেরী নিজ প্রোগ্রামের জন্য বেস্ট।\r\nমেশিন লার্নিং এ ট্রেনিং ডেটা দিয়ে প্রোগ্রামকে ট্রেইন করতে হয়। অনলাইনে অনেক ডেটা রয়েছে। আবার অনেক ক্লাসিফায়ারও রয়েছে, যেগুলোকে ট্রেইনিং ডেটা দিয়ে ট্রেইন করা। যেমন ইমেজ নিয়ে কাজ করার জন্য রয়েছে Inception. এটা গুগলের বেস্ট ইমেজ ক্লাসিফায়ার। এটিকে ১.২ মিলিয়ন ইমেজ ডেটার উপর ট্রেইন করা হয়েছে। এত গুলো ইমেজ দিয়ে ইনসেপশনকে ট্রেইন করাতে দুই সপ্তাহ লেগেছে। আমরা সহজেই যে কোন ইমেজকে ক্লাসিফাই করতে ইনসেপশন ব্যবহার করতে পারি। এই টার্ম গুলো না বুঝলে এই লেখাটি দেখতে পারেনঃ মেশিন লার্নিং এর কিছু টার্ম\r\nগুগলেরেই অনেক গুলো টিউটোরিয়াল রয়েছে মেশিন লার্নিং এর উপর। এমনকি এ জন্য গুগল যে টুল গুলো ব্যবহার করে, তার বেশিরভাগই ওপেনসোর্স। গুগলের Machine Learning Recipes নামে কয়েকটি টিউটোরিয়াল রয়েছে । খুবি দারুণ। এছাড়া ইউডাসিটিতে ডীপ লার্নিং এর উপর গুগলের ফ্রি কোর্সটাও দারুণ।\r\nTopCoder, UVA এর মত ডেটা সাইন্স এবং মেশিন লার্নিং এর দারুণ একটা প্লাটফর্ম হচ্ছে Kaggle । এখানে ডেটা সাইন্স  এর উপর কন্টেস্ট হয়। রয়েছে অনেক গুলো পাবলিক ডেটা। যেগুলো ব্যবহার করে Machine Learning এবং ডেটা সাইন্স শেখা যায়। আবার এই ডেটা কে কিভাবে ব্যবহার করেছে, তার সোর্স কোড সাবমিটও করা যায়। অন্যরা একটা সমস্যা কিভাবে সমাধান করেছে, তা দেখা যায়। দেখে দেখে শেখা যায়। শেখার জন্য উৎকৃষ্ট একটা প্লাটফর্ম। ইন্টারনেটের আনাচে কানাচে আরো অনেক রিসোর্স রয়েছে শেখার জন্য। গুগল, ফেসবুকের মত কম্পানি সহ ছোট বড় সব কম্পানিতে মেশিন লার্নিং এক্সপার্টদের জন্য অনেক গুলো জব পড়ে রয়েছে। লিঙ্কডইনে একটু ঢু মারলেই দেখতে পাবেন। তাই শিখে কি হবে, তা চিন্তা না করে যদি ভালো লাগে, শিখতে পারেন'),
(19, '2019-10-07 04:53:57', '2019-10-07 04:53:57', 8, 55, NULL, 'মানুষের বুদ্ধিমত্তা ও চিন্তা শক্তিকে কৃত্রিম উপায়ে প্রযুক্তি নির্ভর করে যন্ত্রের মাধ্যমে বাস্তবায়ন করাকে কৃত্রিম বুদ্ধিমত্তা বলে। [১] কম্পিউটারকে মিমিকস কগনেটিক এককে আনা হয় যাতে করে কম্পিউটার মানুষের মত ভাবতে পারে । যেমন শিক্ষা গ্রহন এবং সমস্যার সমাধান । কৃত্রিম বুদ্ধিমত্তা (এআই) হল মেশিন দ্বারা প্রদর্শিত বুদ্ধি। কম্পিউটার বিজ্ঞানের ক্ষেত্রে, এআই গবেষণার ক্ষেত্রটি \"বুদ্ধিমান এজেন্ট\" -এর অধ্যয়ন হিসাবে নিজেকে সংজ্ঞায়িত করে: যে কোনও যন্ত্র যা তার পরিবেশকে অনুধাবন করতে পারে এবং এমন কিছু পদক্ষেপ নেয় যা কিছু লক্ষ্য অর্জনে তার সাফল্যকে অনেক দূর পর্যন্ত এগিয়ে নেয়। \"কৃত্রিম বুদ্ধিমত্তা\" শব্দটি প্রয়োগ করা হয় তখন যখন একটি মেশিন \"জ্ঞানীয়\" ফাংশনগুলিকে কার্যকর করে যা অন্যান্য মানুষের মনের সাথে মিল থাকে, যেমন \"শিক্ষা গ্রহণ\" এবং \"সমস্যা সমাধানের\" সাথে সংযুক্ত। আন্দ্রেয়ার কাপলান এবং মাইকেল হেনলিন আর্টিফিশিয়াল ইন্টেলিজেন্স বা কৃত্রিম বুদ্ধিমত্তার সংজ্ঞায় বলেন \"এটি একটি সিস্টেমের বহির্ভূত তথ্য সঠিকভাবে ব্যাখ্যা করতে পারার ক্ষমতা, এমন তথ্য থেকে শিক্ষা গ্রহণ এবং ঐ শিক্ষা ব্যবহার করে নমনীয় অভিযোজনের মাধ্যমে বিশেষ লক্ষ্য করা।\"[২]\r\n\r\nমেশিনগুলি ক্রমবর্ধমানভাবে সক্ষম হয়ে উঠে তখন মানসিক সুবিধার জন্য বুদ্ধিমত্তাকে সংজ্ঞা থেকে সরিয়ে ফেলার প্রয়োজন হয়। উদাহরণস্বরূপ, অপটিক্যাল অক্ষর স্বীকৃতিটি \"কৃত্রিম বুদ্ধিমত্তার\" উদাহরণ হিসাবে আর অনুভূত হয় না, তখন এটি একটি রুটিন প্রযুক্তি হয়ে ওঠে। বর্তমানে যে সক্ষমতাগুলোকে শ্রেণীবদ্ধ করা হয়েছে সেগুলি মানুষের বক্তব্যকে সফলভাবে বুঝতে পারে, কৌশলগত গেম সিস্টেম (যেমন দাবা এবং যাওয়া) উচ্চতর স্তরের প্রতিযোগিতায় অংশগ্রহণ করতে পারে, স্বয়ংক্রিয়ভাবে গাড়ি চালাতে পারে, সামরিক সিমুলেশন এবং জটিল উপাত্ত ব্যাখ্যা করতে পারে।\r\n\r\nএআই গবেষণাকে কতগুলো উপ শাখায় বিভক্ত করা যেতে পারে যা নির্দিষ্ট সমস্যা, দৃষ্টিভঙ্গি, বিশেষ সরঞ্জামের ব্যবহার বা নির্দিষ্ট অ্যাপ্লিকেশনগুলির সন্তুষ্টির দিকে ফোকাস করে।'),
(20, '2019-10-07 04:56:26', '2019-10-07 04:56:26', 8, 55, NULL, 'প্রাথমিক গবেষকরা অ্যালগরিদমগুলি বিকশিত করেছেন যা ধাপে ধাপে যুক্তিযুক্ত করে যেমন করে মানুষ সমস্যা সমাধান বা লজিক্যাল কর্তনের জন্য সেগুলি ব্যবহার করে। ১৯৮০ ও ১৯৯০ এর দশকের শেষের দিকে এআই গবেষণাকে উন্নত করা হয়েছিল অনিশ্চিত বা অসম্পূর্ণ তথ্য, সম্ভাবনা এবং অর্থনীতি থেকে ধারণা নিযুক্ত করার জন্য।\r\n\r\nকঠিন সমস্যাগুলির জন্য অ্যালগরিদমগুলির জন্য প্রচুর গণনীয় সম্পদ প্রয়োজন হতে পারে-সবচেয়ে বেশি অভিজ্ঞতা \"সংযুক্ত করিতে সক্ষম বিস্ফোরণ\" : মেমরির পরিমাণ বা কম্পিউটারের নির্দিষ্ট সময় প্রয়োজন একটি নির্দিষ্ট আকারের সমস্যা সমাধানের জন্য । আরও দক্ষ সমস্যা-সমাধানের অ্যালগরিদমগুলির অনুসন্ধান অনেক বেশি অগ্রাধিকার পাচ্ছে।\r\n\r\nমানুষ প্রাথমিকভাবে দ্রুত, স্বনির্ধারণী সিদ্ধান্তগুলি ব্যবহার করে ধাপে ধাপে ছাড়ের পরিবর্তে, প্রাথমিক এআই গবেষণা সেই মডেলটিকে একটি রূপ দিতে পেরেছে । এআই \"সাব-সিম্বোলিক\" সমস্যা সমাধান ব্যবহার করে অগ্রগতি অর্জন করেছে: অঙ্গবিন্যাসকারী এজেন্ট উচ্চতর যুক্তি থেকে সেন্সরাইমোটার দক্ষতার উপর জোর দেয়; মস্তিষ্কের ভিতরকার কাঠামোর অনুকরণে স্নাতকোত্তর গবেষণার প্রচেষ্টা এই দক্ষতা বৃদ্ধি করে; এআই এর প্রধান গোল হল মানুষের ক্ষমতা অনুকরণ করা।'),
(21, '2019-10-07 04:58:51', '2019-10-07 04:58:51', 4, 55, 'Reply//vufLciWSsosirrxRTw6j5Y3h49DuMpQeemxFQO59.jpeg', 'এই মেশিন লার্নিং করার অনেক পদ্ধতি (algorithm) আছে। যেমন ডিসিশন ট্রি, svm, লজিষ্টিক রিগ্রেশন, ক্লাস্টারিং, ইত্যাদি। ডিপ লার্নিং তেমনই একটি মেসিন লার্নিং পদ্ধতি। তবে এটি বাকিদের থেকে কিছুটা আলাদা। বাকি পদ্ধতিতে data সম্বন্ধে কিছু features বলে দিতে হয়। যেমন ধরুন কাউকে ব্যাংক ধার দেবে কি না এই মেশিন লার্নিং কাজটির জন্য ব্যক্তিদের রোজগার, বয়স, শিক্ষাগত যোগ্যতা, ইত্যাদি বলা হয়। কিন্তু ধরুন একটি বাক্য সমালোচনামূলক না প্রশংসামূলক, একটি ছবিতে কুকুর আছে নাকি বিড়াল বা একটি গান আমার গাওয়া নাকি আপনার এইসব ক্ষেত্রে ঠিকভাবে features অসম্ভব পাওয়া। ডিপ লার্নিং এখানে ভালো প্রযোজ্য কারণ এটি নিজে থেকে এই features বুঝে নেয়ে (implicitly), আলাদা করে (explicitly) দিতে লাগেনা। এটিই ডিপ লার্নিং সাথে বাকি মেশিন লার্নিং পদ্ধতির প্রধান পার্থক্য। এখানে দেওয়া এই তিনটি উদাহরণ যথাক্রমে নাচারাল লঙ্গুয়েজ আন্ডারস্ট্যান্ডিং, ইমেজ রেকোগ্নিশন এবং স্পিচ প্রসেসিং ক্ষেত্র থেকে নেওয়া - এই তিনটি ক্ষেত্রেই ডিপ লার্নিং বাকিদের তুলনায় এগিয়ে।'),
(22, '2019-10-07 04:59:45', '2019-10-07 04:59:45', 4, 56, 'Reply//9pFyacYVE37Jp16ZMnKldX9MFUI4xCV0uQI3Zwdg.jpeg', 'জ্ঞানের প্রতিনিধিত্ব এবং জ্ঞানের প্রকৌশল এআই গবেষণার কেন্দ্রীয় বিষয়। অনেক সমস্যার সমাধান যা মেশিন দ্বারা হবে বলে প্রত্যাশা করা হয় তার বিশ্ব সম্পর্কে ব্যাপক জ্ঞান প্রয়োজন হবে। যে ধরনের বিষয় এআই প্রতিনিধিত্ব করবে তা হল বস্তু, বৈশিষ্ট্য, বিভাগ এবং বস্তুর মধ্যে সম্পর্ক; পরিস্থিতি, ঘটনা, অবস্থা এবং সময়; কারণ এবং প্রভাব; জ্ঞান সম্পর্কে জ্ঞান (আমরা যা জানি অন্যান্য মানুষ যা জানেন); এবং অন্যান্য অনেক, কম ভাল গবেষণামূলক ডোমেইন। প্রতিনিধিত্ব হল \"যার অস্তিত্ব বিদ্যমান\": বস্তুর সেট, সম্পর্ক, ধারণা এবং তাই যে সম্পর্কে মেশিন জানে। সর্বাধিক উচ্চতর তত্ত্ববিদ্যা তাকেই বলা হয় যা অন্য সকল জ্ঞানের ভিত্তি প্রদানের প্রচেষ্টা করে।'),
(23, '2019-10-07 05:01:25', '2019-10-07 05:01:25', 1, 57, NULL, 'মানুষ অনেক কিছু জানে তা মূলত \"কাজের অনুমান\" রূপে মূল্যায়ন করা হয়। উদাহরণস্বরূপ, যদি একটি পাখির কথা আলোচনায় আসে তবে মানুষ সাধারণত একটি প্রাণীকে চিত্রিত করে যার কোন বিশেষ আকার, চিহ্ন আছে এবং যারা উড়তে পারে । এই সমস্ত জিনিসগুলির মধ্যে কোনটিই সব পাখিগুলি সম্পর্কে সত্য নয়। জন ম্যাকার্থি ১৯৬৯ সালে এই সমস্যাটি চিহ্নিত করেছিলেন যোগ্যতার সমস্যা হিসাবে: কোনও কমনসেন্স রুলের জন্য যে এআই গবেষকেরা প্রতিনিধিত্ব করে, সেখানে বেশ কিছু ব্যতিক্রম রয়েছে। বিমূর্ত লজিকের জন্য যা প্রয়োজনের তার প্রায় কোন কিছুই সত্য বা মিথ্যা নয়। এআই গবেষণা এই সমস্যার সমাধানের জন্য অনেক পথ পর্যটন করেছে।'),
(24, '2019-10-11 23:31:54', '2019-10-11 23:31:54', 14, 62, NULL, 'স্যার সব বলতে এখানে কি কি মাধ্যম বলেছেন একটু ব্যাখ্যা করবেন প্লিজ'),
(25, '2019-10-11 23:34:09', '2019-10-11 23:34:09', 15, 62, NULL, '@sisir\r\nসব মানে তো সবই। যদি লিস্ট দেই, তাহলে কি আর সব হল? কারণ লিস্টে তো সব থাকবে না। আমি আড্ডা দিতে দিতেও শিখি। কথা বলতে বলতেও শিখি। ২ জন মানুষ কথা বলতে থাকলে তাদের কথা থেকেও শিখি। এমন নয় যে অন্য কিছু, প্রোগ্রামিংই। আমার প্রথম জবে আমার টিমলিডরা যখন গল্প করতেন, তখন আমি কাজ করতে করতে তাদের কথা থেকে অনেক কিছু জানতাম, পরে বাসায় গিয়ে সেগুলো ঘেঁটে শিখতাম। এর বাইরে সব মাধ্যম, যেমন বই, আর্টিকেল, ইউটিউব, ব্লগ, ওয়েবসাইট, ট্রেনিং, মেন্টর, সহকর্মী, সহ পাঠী সব জায়গা থেকে আমি শিখেছি। এমন কি ক্লায়েন্ট এর কাছ থেকেও অনেক কিছু শিখেছি।'),
(26, '2019-10-11 23:39:59', '2019-10-11 23:39:59', 14, 63, NULL, 'JavaScript,PHP'),
(27, '2019-10-11 23:47:13', '2019-10-15 11:55:20', 1, 63, NULL, '@sisir\r\n\r\nএখানে বেশ কিছু লিংক দিচ্ছি , সয়াহক হবে আশা করছি। \r\n<a href=\"https://www.w3schools.com/php/\">\r\n  https://www.w3schools.com/php/\r\n</a>\r\n\r\n<br>\r\nwww.webcoachbd.com › php-basic\r\n\r\n<br>\r\nw3programmers.com › bangla'),
(28, '2019-10-11 23:56:23', '2019-10-11 23:56:23', 7, 62, NULL, 'আমার ভিডিও টিউটোরিয়াল দেখে শিখতে ভালো লাগেনা। বরং w3schools, tutorialspoint টাইপের ওয়েবসাইটগুলো থেকে পড়লে মাথায় ভাল ক্যাচ করে।'),
(29, '2019-10-12 00:09:34', '2019-10-12 00:09:34', 10, 66, NULL, '@moshiur_031 ,  স্যর আমি আসলে uva/cf এর প্রবলেম গুলোই python দিয়ে solve করা বুঝাইসি,\r\nঅনেকেই django দিয়ে ডেভেলপমেন্ট এর দিকে যায়ওয়ার পরামর্শ দিচ্ছেন, আমি আসলে জানতে চাচ্ছিলাম যে- php/ asp. net কোনটা দিয়ে কাজ করলে পরে গিয়ে django/python এর সাথে লিংক আপ করতে সুবিধা /advantage পাবো।'),
(31, '2019-10-15 08:57:07', '2019-10-15 08:57:07', 1, 65, 'Reply//xVphAvvTPrgrKusa8d0ccdwexJLWORYr509Js9p5.pdf', 'Ikskkskks'),
(32, '2019-10-15 10:06:01', '2019-10-15 10:06:01', 1, 65, 'Reply//z5qpD2TrIYrH8aLiCvuamjesfQcfo7Z2hdmSjDrq.pdf', 'qoowooeo'),
(33, '2019-10-15 10:08:02', '2019-10-15 10:08:02', 1, 65, 'Reply//ld90xbbaGKPzOcI4SYHYobETEGKyCGqr0h1ic2VC.png', 'lopjdejjj'),
(34, '2019-10-15 11:29:16', '2019-10-15 11:29:16', 1, 65, 'Reply//NhMGF8Yksro7inS9ogGatlCo2rquTFhAjdtypX8j.pdf', 'Murad'),
(35, '2019-10-15 11:30:09', '2019-10-15 11:30:09', 1, 65, 'Reply//IStmE4j96ulGDG0f5EP1Y02GvUKRPJ2sDk3s8I0n.pdf', 'Sadik'),
(36, '2019-10-15 11:38:58', '2019-10-15 11:38:58', 1, 65, NULL, 'jkasdkjkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jkasdkjjkadskdsakdskakadskkldsakdsklakdasl                    jjkadskdsakdskakadskkldsakdsklakdasl'),
(37, '2019-10-15 12:03:28', '2019-10-15 12:03:28', 1, 62, NULL, 'kksks'),
(38, '2019-10-15 18:06:35', '2019-10-15 18:06:35', 1, 63, NULL, 'Murad vai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userType` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `userType`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'murad_034', 'muradmd312@gmail.com', '$2y$10$qmHDQe80xxpISYflpP7QSOrRu8vw3qkPpwE//578JFU8..cNSrCKe', 1, '20c5Ma2xSiVe5UD7ukK3be44FQCresnLQ5tnAE6rOLYenU7WSn6iJ07xPF7V', '2019-09-05 12:24:53', '2019-09-08 05:21:38'),
(4, 'moshiur_031', 'moshiur312@gmail.com', '$2y$10$hdLMsr3Ya7nb8sCFkb1VbesxJTb8G3i5DISWLJyrLZiQzMR3sy/2u', 0, 'YN3aKTy2s2Kmrhv4NLRBV3y0cIdTQo24pQgBd1ZhPwUy5zgfxxiRbZ6oplWB', '2019-09-07 11:46:33', '2019-09-23 01:49:52'),
(8, 'nayeem029', 'nayeem312@gmail.com', '$2y$10$mXavgnViyUqkocrEXyMwvuI5/73JuzqEB0LV5/rTSBDLnCLIUQEfK', 1, 'nc0bAPx8agl6bwNTv8zK96MqTLWIhOoFYggWR5xxMQYe9COyU1JSYwdXnElk', '2019-10-07 02:00:15', '2019-10-11 23:14:02'),
(7, 'Pallab047', 'pallab312@gmail.com', '$2y$10$XXAr03GwA28bjFPIZAoDiupZPHs7WMMClKUKOpg2yaQYU4lKf1OMy', 0, 'HxrKjUMTMh75rjDrJtBErtl0WLzbvBBY7OetDTUyLz9LtPRA1KDssYJRd5K5', '2019-10-06 10:07:56', '2019-10-06 10:07:56'),
(9, 'lipika001', 'lipika312@gmail.com', '$2y$10$B0QpcQwAIxcyeRqVsuCQtu2EeZyPEvJ9/8IDhpcWviFgLLuQPHnhu', 0, 'HCReGSAuBPeBMv81lwFES844NnpaKumcLsvmxVXZ2LxanRCNGVuu6yVni7JP', '2019-10-11 13:36:10', '2019-10-11 13:36:10'),
(10, 'akash007', 'akash312@gmail.com', '$2y$10$XxTjSqG8KxE6A22SLFTRzurmhOuKMZOHo8lzOYGuOlUPuM8iYHjEq', 0, 'zh88IsqzvrK9mqcKGGQpPHIqwQfNoyZMDgI9gJhN4kq22S6h2ko8yW8OBOKx', '2019-10-11 13:38:31', '2019-10-11 13:38:31'),
(11, 'masum010', 'masum312@gmail.com', '$2y$10$Icp5YfmBTQBgNuDVVy0xDO6fFAe3NWt8DX2eOhWPHkhkyqkAZEBJK', 0, 'UB1GGRalq0PxoK2woUqz4Znt78AcYcFCELlJqvBWK1uPC0yNDoGValy2dGsa', '2019-10-11 13:41:10', '2019-10-11 13:41:10'),
(12, 'protik028', 'protik312@gmail.com', '$2y$10$xXeGxhslE7UfWVoi3zu1auOCDHnq0qhGmSDsBMrlsxKyuQ17X6xxe', 0, 'tPTrarPchIhB1LyH5nDT7mP5cxliCt7gorv8A5WsjBXD0BHPwFKgIoKUfnoQ', '2019-10-11 13:45:24', '2019-10-11 13:45:24'),
(13, 'khalid010', 'khalid312@gmail.com', '$2y$10$475Vkp7Z/eKH6ouv7vVPhewsu6K2HBG4Xh1hFIEpc.WcW/zbKLLB2', 0, 'vzCw0PlFq2YUJCDgZqiEJvw9IXb2WePssYNgM7yh5AGWJEtPqmaUuYmtlZ9Q', '2019-10-11 14:22:33', '2019-10-11 14:22:33'),
(14, 'sisir013', 'sisir312@gmail.com', '$2y$10$5mYcFMMzm6nejLLO.NQx1.ZvQyOEkKLlUzY.8XFHEcySwiG8A8Zb.', 0, 'rpMUB4cCRPSlmeLm4ZolKrhfyMyPv0WwxEGHmTd4lhdslYtsJzpBuA1UpKoR', '2019-10-11 14:28:42', '2019-10-11 14:28:42'),
(15, 'eidris29', 'eidris312@gmail.com', '$2y$10$PflZ8ONBC7fB63RaFPqGLeaPf0YPJ7eesCqBkftdq8HBkMmkzWD4q', 0, 'uj24Y1edoZ426aXLbvS0mE9zH2yLPJJLln2OUA94m0i6vFbhXxTim9rJISuL', '2019-10-11 21:50:03', '2019-10-11 21:50:03'),
(16, 'asish026', 'asish026@gmaIl.com', '$2y$10$5S7gcJCatKT4iV08yBehVeWhdoAw0bPcTGSoVH4.ayeA5y9Bzn5yq', 0, 'b3pyYvx8Ahld9UFor7nfenwMAFQVpLy9qfUOZuJs9Uhle4vtMQmjzjRvpiQK', '2019-10-11 22:11:10', '2019-10-11 22:11:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
