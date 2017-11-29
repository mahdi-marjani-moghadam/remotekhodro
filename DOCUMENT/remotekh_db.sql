-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2017 at 08:47 PM
-- Server version: 5.5.58-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remotekh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `Aboutus_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(255) DEFAULT '',
  `name` varchar(64) DEFAULT NULL,
  `family` varchar(64) DEFAULT NULL,
  `status` varchar(2) DEFAULT '0',
  `member_id` int(11) DEFAULT NULL,
  `permission` text,
  `extension` varchar(255) DEFAULT '' COMMENT '23'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `family`, `status`, `member_id`, `permission`, `extension`) VALUES
(1, 'admin', '89f598b8811620de15c9daec6d1b73cb', 'mahdi', 'marjani', '1', NULL, '11', '23'),
(2, 'hwinss', 'ccdcdec460b8731268a641165b8fe89b', 'h', '}Zk6x.6QR]AH', '1', NULL, '11', ''),
(3, 'arman', '89f598b8811620de15c9daec6d1b73cb', 'arman', 'marjani', '1', NULL, '11', '23');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Article_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Article_id`, `title`, `brief_description`, `description`, `image`, `priority`, `category_id`, `status`) VALUES
(23, 'پژوهش : تاثیر مثبت مهد کودک بر سلامت کودکان', 'خطر بروز نوعی سرطان خون موسوم به ای ال ال در کودکانی که روزانه به مهد کودک می روند یا در زمین های بازی با کودکان دیگر ارتباط دارند ، دست کم ۳۰ درصد کمتر از دیگران است . ', '<p>\r\n	<span style=\"color: rgb(51, 51, 51); font-family: webYekan; font-size: medium; text-align: justify;\">محققان دانشگاه برکلی اعلام کردند: خطر بروز نوعی سرطان خون موسوم به ای ال ال در کودکانی که روزانه به مهد کودک می روند یا در زمین های بازی با کودکان دیگر ارتباط دارند ، دست کم ۳۰ درصد کمتر از دیگران است .&nbsp;</span></p>\r\n<p>\r\n	<br style=\"font-family: webYekan; direction: rtl; line-height: 9px; color: rgb(51, 51, 51); font-size: medium; text-align: justify;\" />\r\n	<span style=\"color: rgb(51, 51, 51); font-family: webYekan; font-size: medium; text-align: justify;\">به گفته محققان : بر اثر تماس کودکان با یکدیگر و انتقال میکروب های مختلف میان آنان ، توانایی دستگاه ایمنی کودکان بیشتر می شود که این امر باعث نابودی هر چه بیشتر سلول های سرطانی در آنان می شود .&nbsp;</span></p>\r\n<p>\r\n	<br style=\"font-family: webYekan; direction: rtl; line-height: 9px; color: rgb(51, 51, 51); font-size: medium; text-align: justify;\" />\r\n	<span style=\"color: rgb(51, 51, 51); font-family: webYekan; font-size: medium; text-align: justify;\">سرطان خون ای.ال.ال شایعترین نوع سرطان در کودکان است .&nbsp;</span></p>\r\n', '1482944194._p.jpg', 0, ',214,', NULL),
(24, 'بازی و رشد کودکان ', 'بازی موجب شکوفایی استعدادهای نهفته و بروز خلاقیت در کودکان می شود', '<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	بازی عبارت است از هرگونه فعالیت جسمی یا ذهنی هدفدار که بصورت فردی یا گروهی، انجام و موجب کسب لذت و برآورده شدن نیازهای کودک شود. کودکان نقاط قوت و ضعف خود از جمله تمایل به فرمان دادن یا فرمان بردن، تهاجم یا تسلیم، اجتماعی بودن یا منزوی بودن و همچنین احساسات دوستانه یا خصمانه، افسردگی یا شادی، امیال و آرزوهای خود را از طریق بازی نشان می&zwnj;دهند. بازی، رشد عاطفی، اجتماعی ، جسمانی و ذهنی کودک را به همراه دارد.<br />\r\n	<br />\r\n	<span style=\"font-size: 8pt;\"><strong>بازی، در رشد عاطفی کودک نقش مثبتی ایفا می&zwnj;کند به این صورت که نیاز به برتری جوئی و بروز احساسات و عواطف، ترس و تردیدها و برو&zwnj;نگری را در کودک ارتقاء می&zwnj;دهد.</strong></span></p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	بازی در رشد اجتماعی کودک تأثیر بسزایی دارد و موجب ارتباط کودک با محیط بیرون، شکوفایی استعدادهای نهفته و بروز خلاقیت، همکاری، همیاری و مشارکت کودک می&zwnj;گردد. همچنین بازی موجب همانندسازی با بزرگ&zwnj;ترها شده و کمک می&zwnj;کند که کودک شکست را بطور واقعی تجربه کند.&nbsp; بازی در رشد جسمی کودک موثر بوده و باعث رشد و هماهنگی دستگاه&zwnj;ها و اعضای بدن و تقویت حواس کودک و توانمندی فکری و بدنی او می&zwnj;شود.</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	نقش بازی در رشد ذهنی کودک انکارناپذیر است. رفتار هوشمندانه را تقویت می&zwnj;کند و زمینه&zwnj;های لازم جهت یادگیری زبان و رشد هوشی و تفکر کودک را فراهم می&zwnj;سازد. آن&zwnj;چه که از بازی&zwnj;های فکری مخصوصاً &laquo;کاربرد آن در فلسفه و کودک&raquo; مورد نظر است، نقش بازی در رشد ذهنی کودک است که با استفاده از ابزارهای مورد نظر (اسباب&zwnj;بازی، داستان، فیلم، کارتون، عکس...) به ارتقاء رشد فکری او کمک می&zwnj;کند .</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	<span style=\"color: rgb(153, 0, 51);\"><strong>مراحل پیشرفت بازی در کودکان</strong></span><br />\r\n	با بررسی مراحل رشد کودک می&zwnj;توان متناسب با سن کودک بازی&zwnj;هایی برای آنها طراحی کرد که با اجرای آن، کودکان از توانایی&zwnj;های مناسبی برخوردار &zwnj;شوند. بدیهی است که هرکودکی این مراحل را با توجه به ویژگی&zwnj;های ذهنی ـ جسمی خود طی می&zwnj;کند ولی رشد کافی به معنای کسب و تسلط بر مهارت&zwnj;ها و توانایی&zwnj;هایی است که کودک در بزرگسالی به آنها احتیاج دارد و پیشرفت در آن، بوسیله بازی صورت می&zwnj;گیرد: که این مهارت&zwnj;ها را کودک در طی مراحل زندگیش از بدو تولد تا سنین ابتدایی ورود به دبستان می&zwnj;گذراند.</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	کودک هرچه روند رشد و تکامل را می&zwnj;پیماید، نحوة بازی&zwnj;های او، از شکل جسمی و عاطفی خارج شده، به سوی ذهنی و خلاقیتی سوق پیدا می&zwnj;کند. البته لازم به ذکر است بازی&zwnj;های جسمی، زمینه&zwnj;&zwnj;ساز بازی&zwnj;های ذهنی در کودک هستند.<br />\r\n	<br />\r\n	<span style=\"color: rgb(153, 0, 51);\"><strong>چگونگی بازی&zwnj;های فکری&nbsp;&nbsp;</strong>&nbsp;</span><br />\r\n	کودکان تجربیات مثبت و احساسات موفقیت&zwnj;آمیزی را با انجام بازی بدست می&zwnj;آورند بازی&zwnj;های خلاق فرصتی را برای کودک فراهم می&zwnj;آورد تا از قوه خلاقیت و تخیل خود در حل مسئله استفاده کرده، آن را رشد داده و تقویت نماید.</p>\r\n<p class=\"imgarticle\" style=\"margin: 0px; text-align: center; width: 519px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px;\">\r\n	&nbsp;<a href=\"http://www.beytoote.com/baby/psychology-baby/children4-games.html\" style=\"text-decoration: none; color: rgb(100, 124, 42);\" target=\"_blank\" title=\"بازی های کودکانه،نقش بازی در رشد ذهنی کودک\"><img alt=\"فواید بازی برای  کودک,فواید بازی\" src=\"http://www.beytoote.com/images/stories/baby/ba3173-1.jpg\" style=\"border: 1px solid rgb(229, 229, 229); border-radius: 3px; display: block; margin: 15px auto; padding: 5px; width: 377px; height: 293px;\" title=\"بازی،بازی کردن کودک\" /></a></p>\r\n<p style=\"margin: 0px; font-family: Tahoma, Geneva, sans-serif; text-align: center; font-size: 8pt; color: rgb(255, 102, 0);\">\r\n	بازی زمینه&zwnj;های لازم جهت رشد هوشی و تفکر کودک را فراهم می&zwnj;سازد</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<span style=\"color: rgb(153, 0, 51);\"><strong>اهمیت بازی، در دوران اولیه کودکی</strong></span><br />\r\n	بازی یکی از عوامل مهمی است که بر روحیه و شخصیت کودک اثر گذاشته و بخش جدایی&zwnj;ناپذیر زندگی اوست. روان&zwnj;شناسان و جامعه&zwnj;شناسان بر این باورند که بازی در سال&zwnj;های اولیه برای کودک بسیار حیاتی است و به جز پدید آوردن شادی، برای رشد جسمی و روان&zwnj;شناختی کودک اهمیت ویژه&zwnj;ای دارد. به وسیلة بازی، کودک راه&zwnj;های برخورد و تعامل با محیط پیرامون خود را فرا می&zwnj;گیرد و مهارت&zwnj;های اجتماعی و زبانی را کسب می&zwnj;کند. بازی، فرصت&zwnj;هایی را برای &laquo;ابراز وجود&raquo; و &laquo;خلاقیت&raquo; در کودک فراهم می&zwnj;کند و نیز راهی مناسب برای تخلیه هیجان&zwnj;ها و انرژی&zwnj;های اضافی در او است. کودک از طریق بازی با فرهنگ جامعة خویش آشنا می&zwnj;شود؛ هنجارها و ارزش&zwnj;های اجتماعی را درونی می&zwnj;کند و در نهایت، نقش&zwnj;های اجتماعی را می&zwnj;پذیرد.</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	امروزه اهمیت بازی در دوران کودکی با پژوهش&zwnj;های گسترده&zwnj;ای به طور کامل تأیید شده است. برای مثال؛ اگر کودک را به ماهی تشبیه کنیم، بازی همانند آب زلالی است که کودک در آن شناور می&zwnj;باشد. پس بازی برای کودک، همان زندگی است. از این&zwnj;رو باید شور زندگی را در میان کودکان ایجاد کرد و کودکان را همواره به بازی تشویق نمود.<br />\r\n	<br />\r\n	چنان چه کودکی را از بازی محروم کنند، موجودیت، سلامت و آینده&zwnj;اش را از او ستانده&zwnj;اند. دنیای بدون بازی، از نظر کودک زندانی بیش نیست. بازی، زیرمجموعة سرگرمی است. سرگرمی دارای زیرمجموعه&zwnj;های متفاوت و تا حدی مرتبط به یکدیگر است که انواع بازی (از قبیل فکری و جسمی) شاخه&zwnj;ای از آن محسوب می&zwnj;شود.</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	<span style=\"color: rgb(153, 0, 51);\"><strong>در حقیقت می&zwnj;توان گفت بازی، نوعی سرگرمی با ویژگی&zwnj;های زیر است:</strong></span><br />\r\n	هیجان&zwnj;انگیز ، هدفمند؛ متناسب با سن کودک؛ برانگیزاننده کنجکاوی؛ انتخاب آزادانه؛ لذتبخش و ...</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	<span style=\"font-size: 8pt;\"><strong>پژوهشگران و معلمان (فلسفه و کودک) برای بازی اهمیت خاص و ویژه&zwnj;ای قائل هستند. در صورتی&zwnj;که بازی همه یا برخی از موارد زیر را بدنبال داشته باشد، &laquo;فکری&raquo; محسوب می&zwnj;شود:</strong></span></p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	ـ توانایی حل مسئله<br />\r\n	ـ ایجاد خلاقیت و ابتکار<br />\r\n	ـ رشد ذهنی و مهارت فکری (دقت و تمرکز)<br />\r\n	ـ برانگیختن حس رقابت<br />\r\n	ـ مهارت ارتباط برقرار کردن (بین اشیاء، پدیده&zwnj;ها، کلمات و...)،<br />\r\n	ـ یافتن شباهت&zwnj;ها و تفاوت&zwnj;ها<br />\r\n	ـ کشف قابلیتهای خود و تقویت حواس 5 گانه (گفتاری، شنیداری و ...)<br />\r\n	ـ ایجاد تشخیص، ارزیابی و انتخاب درست ایده&zwnj;ها<br />\r\n	ـ ایجاد کندوکاو فلسفی<br />\r\n	ـ بوجود آوردن حس همکاری مسئولیت&zwnj;پذیری و مشارکت<br />\r\n	ـ بالا رفتن میزان یادگیری<br />\r\n	ـ پیش&zwnj;بینی<br />\r\n	بنابراین دامنه سرگرمی وسیع است. به عنوان مثال گوش دادن محصولات صوتی، تماشای محصولات رسانه&zwnj;ای، بازدیدها، مطالعه کتب و .. از جمله سرگرمی &zwnj;هایی است که در صورت داشتن ویژگی&zwnj;های بازی و فراهم آوردن موجبات مذکور، جزء بازی&zwnj;های فکری محسوب خواهد شد.<br />\r\n	<br />\r\n	<span style=\"color: rgb(128, 128, 128); font-size: 8pt;\">منبع:</span><br />\r\n	<br />\r\n	<span style=\"color: rgb(128, 128, 128); font-size: 8pt;\">&nbsp;تبیان</span></p>\r\n', '1483893134._ba3816.jpg', 0, ',213,', NULL),
(25, 'آموزش تمرکز به کودکان از طریق بازی', 'برای بچه ها نشستن طولانی مدت و تمركز كردن بر روی كاری غیرممكن به حساب می آید', '<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<br />\r\n	به طور كلی بچه ها نسبت به بزرگسالان از مدت زمان تمركز كمتری برخوردارند و تقریبا برای بچه ها نشستن طولانی مدت و تمركز كردن بر روی كاری غیرممكن به حساب می آید زیرا تحرک و فعالیت، بخش جدانشدنی از كودک است. البته از دیدگاه علمی این حالت به آن دلیل است كه ذهن و مغز بچه ها با سرعت بیشتری درحال فعالیت است و آنها دائماً در حال یادگیری موضوعات مختلف از محیط اطراف هستند. آنچه در كودكان جالب به نظر می رسد آن است كه علیرغم مدت زمان كوتاهتر تمركز بچه ها، آنها وقتی روی موضوعی هرچند كوتاه تمركز میكنند با تمام دقت این كار را انجام میدهند. معمولا عوامل محیطی، تمركز آن ها را به هم نمی زند. به كودكان وقتی در حال گوش كردن به یک داستان هستند به دقت نگاه كنید، آنها به تمام جزئیات گوش میدهند و اگر بار دیگر داستان را برای آنها تعریف كنید و بخشهایی را جا بیندازید آنها به سرعت مچ شما را خواهند گرفت!<br />\r\n	<br />\r\n	بازیها و تمرینهای زیادی وجود دارد كه شما می توانید برای افزایش تمركز و توجه فرزندتان به كار ببرید كه در ذیل به برخی از آنها اشاره می شود.<br />\r\n	<br />\r\n	-&nbsp; به كودكتان بگویید، چشمهایش را ببندد و مثلثی را تصور كند. سپس از او بخواهید با چشمان بسته آن مثلث را روی كاغذ به آرامی&nbsp; و با دقت بكشد و سپس برای بار دوم این كار را تكرار كند. نتیجه دوكار را به او نشان دهید مطمئناً مثلث دوم با اشكالها و ایرادهای كمتری كشیده شده است و بهبود شرایط كاملاً مشهود است. شما می توانید این بازی را در طول روز چند بار به صورت مسابقه با فرزندتان انجام دهید و هر بار تصاویر مختلف و ساده (مربع، ستاره، مستطیل، و ...) بكشید.<br />\r\n	<br />\r\n	- از فرزندتان بخواهید كتاب خواندن در محیط های مختلف را تجربه كند، دركتابخانه، رستوران و دیگر مكانهای شلوغ از او بخواهید برای دقایقی هرچند كوتاه به کتاب خواندن شما گوش کند خواندن در محیطهای متفاوت، تأثیری شگرف در افزایش تمركز و دقت دارد.</p>\r\n<p class=\"imgarticle\" style=\"margin: 0px; text-align: center; width: 519px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px;\">\r\n	&nbsp;<a href=\"http://www.beytoote.com/baby/psychology-baby/focus4-children-education.html\" style=\"text-decoration: none; color: rgb(100, 124, 42);\" target=\"_blank\" title=\"بازی تمرکز حواس،راه های افزایش تمرکز\"><img alt=\"تست تمرکز,راههای افزایش تمرکز\" src=\"http://www.beytoote.com/images/stories/baby/ba3816-1.jpg\" style=\"border: 1px solid rgb(229, 229, 229); border-radius: 3px; display: block; margin: 15px auto; padding: 5px; width: 400px; height: 248px;\" title=\"بازی تمرکز،تمرکز حواس،افزایش تمرکز\" /></a></p>\r\n<p style=\"margin: 0px; font-family: Tahoma, Geneva, sans-serif; text-align: center; font-size: 8pt; color: rgb(255, 102, 0);\">\r\n	بازیهای زیادی وجود دارد كه شما می توانید برای افزایش تمركز و توجه فرزندتان به كار ببرید</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	&nbsp;&nbsp;<br />\r\n	-&nbsp; وقتی با فرزندتان به پارک می روید، روی صندلی بنشینید و از كودكتان بخواهید كه به صدای طبیعت كه شامل صدای آب، پرندگان و سایر حیوانات است گوش دهد. اگر دسترسی به محیطهای طبیعی ندارید، CD های بسیاری از صدای طبیعت در بازار موجود است، آنها را خریداری كرده و درخانه استفاده كنید این عمل را چندین بار درهفته تكرار كنید بعد از چند هفته تكرار پیوسته ومداوم، متوجه خواهید شد كه او هر بار با دقت و تمركز بیشتر و به مدت طولانی تری قادر به گوش دادن است.<br />\r\n	<br />\r\n	- جسمی را وسط اتاق قرار دهید و به او بگویید هر كس كه به مدت طولانی تری بتواند به این وسیله خیره شود بی آنكه از آن چشم بردارد، برنده است.<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n	- از کودک بخواهید چشمانش را ببندد، آنگاه اشكال هندسی را به او بدهید و از او بخواهید كه نوع آنها را حدس بزند. در مراحل پیشرفته تر اشكال حیوانات مختلف را به او پیشنهاد دهید.&nbsp;<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n	&nbsp;- دستان كودک را در دست بگیرید و هنگامی كه چشمانش بسته است، دو شی كمی گرم و كمی سرد را در دستانش بگذارید و از او بخواهید دمایی را كه احساس می كند شرح دهد.&nbsp;<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n	- از كودک بخواهید انگشتان دستش را باز نگه دارد و با تمركز روی یكی از آنها، آن را خم كند. وقتی تمام انگشتانش را بست، دوباره از او بخواهید دستش را باز كند و این بار با تمركز بیشتر یكی از انگشتانش را خم كرده و دوباره باز كند، سپس همین كار را برای انگشت بعد انجام دهد بدون اینكه انگشتان دیگر را خم كند.&nbsp;<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n	- از كودک بخواهید به آرامی تنفس كند و تا 10 بشمارد. عمل شمارش باید در هر دم و بازدم تكرار شود.&nbsp;<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n	در زمینه بازی های تمرکزی بیشتر مطالعه کنید و با فرزندتان انجام دهید ضمن اینکه اگر بازی ها را انجام دادید ولی باز هم احساس کردید که تمرکز فرزندتان باز هم ایراد دارد ، حتما با یک روان شناس کودک و نوجوان مشورت داشته باشید.</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	&nbsp;</p>\r\n<p style=\"margin: 0px; color: rgb(31, 31, 31); font-family: Tahoma, Geneva, sans-serif; font-size: 13px; text-align: justify;\">\r\n	<span style=\"color: rgb(128, 128, 128); font-size: 8pt;\">&nbsp;منبع:tebyan.net</span></p>\r\n', '1489429477._323.jpg', 0, ',,', NULL),
(26, 'پژوهش هایی در زمینه تربیت کودک موفق ', 'کارشناسان می گویند وادار کردن کودکان به انجام کارهای روزمره، آموزش مهارت های زندگی به آنها و داشتن انتظارات بالا از کودکان از جمله راهکارهایی است که می تواند موفقیت آنها را در آینده پیش بینی کند.', '<p class=\"fr-tag\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: IranSans, Tahoma, Arial; font-size: 14px;\">\r\n	کارشناسان می گویند وادار کردن کودکان به انجام کارهای روزمره، آموزش مهارت های زندگی به آنها و داشتن انتظارات بالا از کودکان از جمله راهکارهایی است که می تواند موفقیت آنها را در آینده پیش بینی کند.</p>\r\n<p class=\"fr-tag\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: IranSans, Tahoma, Arial; font-size: 14px;\">\r\n	&nbsp;والدین خوب همواره می خواهند که کودکانشان مشکل نداشته باشند، عملکرد خوبی در مدرسه داشته باشند و در بزرگسالی نیز کارهای فوق العاده ای انجام دهند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	درحالیکه دستورالعمل هایی برای پرورش کودکان موفق وجود ندارد اما تحقیقات روانشناسی انگشت شمار به عوامل اشاره کرده است که موفقیت آنها را درآینده پیش بینی می کند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	*** وادار کردن کودکان به انجام کارهای روزمره<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	وادار کردن کودکان به انجام کارهای روزمره یکی از عواملی است که می تواند در آینده موفقیت کودک را در زمینه هایی پیش بینی کند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	جولی هایمز رییس سابق دانشجویان سال اول در دانشگاه آکسفورد و نویسنده کتاب &#39;چگونه کودک خود را پرورش دهیم و به دوران بلوغ برسانیم&#39; گفت: اگر کودکان ظرف نمی شویند به این معنی است که فرد دیگری این کار را برای آنها انجام می دهند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	وی افزود: بنابراین آنها نه تنها از انجام این کار بلکه از فراگیری این موضوع که هر یک از اعضای خانواده باید در انجام کارهای روزمره مشارکت داشته باشیم، تبرئه می شوند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	این کارشناس معتقد است، کودکانی که در انجام کارهای روزمره مشارکت دارند، کارمندانی می شوند که همکاری خوبی با همکاران خود دارند و دلسوزترند زیرا مبارزه را می شناسند و می توانند کارها را بطور مستقل انجام دهند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	وی می گوید، با وادار کردن کودکان به انجام کارهای روزمره مانند بیرون بردن زباله، شستن لباس های خود در ماشین لباس شویی، آنها متوجه می شوند که برای داشتن سهمی در زندگی باید کارهایی را در زندگی انجام دهند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	***یاد دادن مهارت زندگی به کودکان<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	از دیگر راهکارهایی که والدین برای موفقیت کودکان خود می توانند انجام دهند یاد دادن مهارت زندگی به آنهاست.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	محققان دانشگاه ایالتی پنسیلوانیا و دانشگاه دوک در یک مطالعه بیش از 700 کودک را سراسر آمریکا از فاصله زمانی میان سنین مهدکودک تا 25 سالگی مورد بررسی قرار دادند و ارتباط قابل توجهی را میان مهارت های اجتماعی کودکان در سنین مهدکودک و موفقیت های آنها در دو دهه بعدی زندگی در بزرگسالی کشف کردند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	این مطالعه 20 ساله نشان داد، کودکانی که مهارت های اجتماعی دارند یعنی آنهایی که می توانند بدون تشویق با هم سن و سالان خود همکاری کنند، به دیگران کمک کنند، احساسات آنها را بفهمند و مشکلات را خود حل کنند، در قیاس با کودکانی که مهارت های اجتماعی محدودی دارند، بیشتر احتمال دارد که در 25 سالگی یک مدرک دانشگاهی و یک کار تمام وقت پیدا کند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	کریستین شوبرت مدیر برنامه بنیاد &#39;روبرت وود جانسون&#39; که بودجه این تحقیق را تامین کرده است، گفت: این مطالعه نشان می دهد که کمک به کودکان در توسعه مهارت های اجتماعی و احساسی یکی از مهمترین کارهایی است که می توان برای آماده سازی آنها برای یک آینده سالم انجام داد.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	*** داشتن انتظارات بالا از کودکان&nbsp;<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	از دیگر راهکارهایی که پدر و مادرها برای موفقیت آتی کودکان خود می توانند انجام دهند این است که انتظارات بالایی از کودکان خود داشته باشند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	پروفسور نیل هالفون از دانشگاه کالیفرنیا در لوس آنجلس و همکارانش با استفاده از داده های ناشی از نظرسنجی ملی شش هزار و 600 کودک که در سال 2001 متولد شده بودند، متوجه شدند که انتظارات پدر و مادرها از کودکان خود تاثیر بالایی در موفقیت آنها دارد.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	وی در بیانیه ای اعلام کرد: والدینی که رفتن به دانشگاه را در آینده کودکان خود ترسیم می کنند، به نظر می رسد که کودکان خود را صرف نظر از درآمد خود و دیگر دارایی هایشان به سمت این هدف هدایت می کنند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	این کارشناس با اشاره به اثر پیگمالیون ( Pygmalion effect) که بر اساس آن افراد نسبت به سطح انتظارات دیگران واکنش &zwnj;های مستقیم نشان می&zwnj; دهند، به والدین توصیه می کند که انتظارات بالایی از کودکان خود داشته باشند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	***آموختن ریاضی به کودکان در سنین پایین<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	یک متاآنالیز در سال 2007 بر روی 35 هزار کودک پیش دبستانی در آمریکا، کانادا و انگلیس نشان داد که پرورش مهارت های ریاضی در سال های اولیه زندگی کودک می تواند به یک مزیت بزرگ تبدیل شود.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	گرگ دانکن از دانشگاه نورث وسترن در یک بیانیه مطبوعاتی اعلام کرد، اهمیت فراگیری مهارت های ریاضی در سال های اولیه زندگی - شروع مدرسه با دانش اعداد، نظم اعداد و دیگر مفاهیم ابتدایی ریاضی یکی از مسائل حیرت آور این مطالعه است.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	وی افزود: این مطالعه نشان داد که تسلط کودکان بر مهارت های ابتدایی ریاضی نه تنها باعث موفقیت آنها در ریاضیات شده بلکه مهارت خواندن آنها را نیز تقویت می کند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	*** داشتن مادران شاغل&nbsp;<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	به گفته محققان دانشکده بازرگانی هاروارد، کودکانی که مادرانشان در خارج از خانه کار می کنند، فواید بسیاری شامل حالشان می شود.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	این مطالعه نشان داد، دخترانی که مادرانشان کار می کردند در قیاس با 23 درصد از هم سن و سالان خود که مادرانشان کار نمی کردند، احتمال بیشتری داشت که مدارج تحصیلی بالاتری را کسب کنند، شغلی در یک نقش نظارتی داشته باشند و پول بیشتری بدست آورند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	این مطالعه همچنین نشان داد که پسران مادرانی که در خارج از خانه کار می کنند نیز در بزرگسالی تمایل بیشتری به انجام کارهای روزمره خانه و نگهداری کودک دارند بطوریکه این افراد در هفته هفت و نیم ساعت بیشتر از کودک نگهداری می کنند و 25 دقیقه بیشتر کارها خانه انجام می دهند.<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	***انتخاب نام مناسب برای کودکان<br style=\"box-sizing: border-box; margin: 0px; padding: 0px;\" />\r\n	یک تحقیق در زمینه تاثیر نام بر موفقیت های زندگی نشان می دهد افرادی که اسامی رایجی دارند که تلفظ آنها راحت است موفقیت های بیشتری بدست می آورند.</p>\r\n<p class=\"fr-tag\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: IranSans, Tahoma, Arial; font-size: 14px;\">\r\n	&nbsp;</p>\r\n<p class=\"fr-tag\" style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; color: rgb(51, 51, 51); font-family: IranSans, Tahoma, Arial; font-size: 14px;\">\r\n	<img alt=\"\" src=\"/statics/userfiles/files/kindergarten.jpg\" style=\"width: 800px; height: 594px;\" /></p>\r\n', '1489429464._323.jpg', 0, ',,', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `Bank_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`Bank_id`, `name`) VALUES
(1, 'ملی'),
(2, 'سامان');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Banner_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`Banner_id`, `title`, `brief_description`, `description`, `image`, `priority`) VALUES
(27, '', NULL, NULL, '1510934327._20161009_101400.jpg', 0),
(28, '', NULL, NULL, '1510953822._Edit20161123_121703.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Blog_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `brief_description` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4,
  `image` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `imagesmall` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Blog_id`, `title`, `brief_description`, `description`, `image`, `imagesmall`, `priority`, `category_id`) VALUES
(34, 'ساخت ریموت و سوییچ بی ام و ۳۲۵', 'ساخت ریموت و سوییچ بی ام و ۳۲۵', '<h2>\r\n	ساخت ریموت و سوییچ بی ام و ۳۲۵</h2>\r\n<h4>\r\n	&nbsp;</h4>\r\n<p>\r\n	[gallery size=&quot;medium&quot; ids=&quot;3328,3329&quot;]</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	تلفن های تماس:</p>\r\n<p>\r\n	۰۹۱۲۵۵۷۵۸۸۷ - ۰۹۱۲۴۸۰۲۲۹۵</p>\r\n<p>\r\n	۴۴۲۹۹۰۸۵ - ۴۴۲۹۹۰۶۹</p>\r\n<p>\r\n	جلال آل احمد شرق به غرب نرسیده به اشرفی اصفهانی خیابان شایق شمالی جنب کوچه هفتم نگین غرب</p>\r\n<p>\r\n	<a href=\"https://goo.gl/maps/bYKuazB1iT62\">لوکیشن ایران آنلاک</a></p>\r\n', '1510952142._20161009_101400.jpg', '1510952142._20161009_101400.jpg', NULL, ',,'),
(35, 'ساخت ریموت و سوییچ بی ام و ۳۲۵', 'ساخت ریموت و سوییچ بی ام و ۳۲۵', '<h2>\r\n	ساخت ریموت و سوییچ بی ام و ۳۲۵</h2>\r\n<h4>\r\n	&nbsp;</h4>\r\n<p>\r\n	[gallery size=&quot;medium&quot; ids=&quot;3328,3329&quot;]</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	تلفن های تماس:</p>\r\n<p>\r\n	۰۹۱۲۵۵۷۵۸۸۷ - ۰۹۱۲۴۸۰۲۲۹۵</p>\r\n<p>\r\n	۴۴۲۹۹۰۸۵ - ۴۴۲۹۹۰۶۹</p>\r\n<p>\r\n	جلال آل احمد شرق به غرب نرسیده به اشرفی اصفهانی خیابان شایق شمالی جنب کوچه هفتم نگین غرب</p>\r\n<p>\r\n	<a href=\"https://goo.gl/maps/bYKuazB1iT62\">لوکیشن ایران آنلاک</a></p>\r\n', '1510952142._20161009_101400.jpg', '1510952142._20161009_101400.jpg', NULL, ',,'),
(36, 'ساخت ریموت و سوییچ بی ام و ۳۲۵', 'ساخت ریموت و سوییچ بی ام و ۳۲۵', '<h2>\r\n ساخت ریموت و سوییچ بی ام و ۳۲۵</h2>\r\n<h4>\r\n &nbsp;</h4>\r\n<p>\r\n [gallery size=&quot;medium&quot; ids=&quot;3328,3329&quot;]</p>\r\n<p>\r\n &nbsp;</p>\r\n<p>\r\n تلفن های تماس:</p>\r\n<p>\r\n ۰۹۱۲۵۵۷۵۸۸۷ - ۰۹۱۲۴۸۰۲۲۹۵</p>\r\n<p>\r\n ۴۴۲۹۹۰۸۵ - ۴۴۲۹۹۰۶۹</p>\r\n<p>\r\n جلال آل احمد شرق به غرب نرسیده به اشرفی اصفهانی خیابان شایق شمالی جنب کوچه هفتم نگین غرب</p>\r\n<p>\r\n <a href=\"https://goo.gl/maps/bYKuazB1iT62\">لوکیشن ایران آنلاک</a></p>\r\n', '1510952142._20161009_101400.jpg', '1510952142._20161009_101400.jpg', NULL, ',,'),
(37, 'ساخت ریموت و سوییچ بی ام و ۳۲۵', 'ساخت ریموت و سوییچ بی ام و ۳۲۵', '<h2>\r\n ساخت ریموت و سوییچ بی ام و ۳۲۵</h2>\r\n<h4>\r\n &nbsp;</h4>\r\n<p>\r\n [gallery size=&quot;medium&quot; ids=&quot;3328,3329&quot;]</p>\r\n<p>\r\n &nbsp;</p>\r\n<p>\r\n تلفن های تماس:</p>\r\n<p>\r\n ۰۹۱۲۵۵۷۵۸۸۷ - ۰۹۱۲۴۸۰۲۲۹۵</p>\r\n<p>\r\n ۴۴۲۹۹۰۸۵ - ۴۴۲۹۹۰۶۹</p>\r\n<p>\r\n جلال آل احمد شرق به غرب نرسیده به اشرفی اصفهانی خیابان شایق شمالی جنب کوچه هفتم نگین غرب</p>\r\n<p>\r\n <a href=\"https://goo.gl/maps/bYKuazB1iT62\">لوکیشن ایران آنلاک</a></p>\r\n', '1510952142._20161009_101400.jpg', '1510952142._20161009_101400.jpg', NULL, ',,'),
(38, 'ساخت ریموت و سوییچ بی ام و ۳۲۵', 'ساخت ریموت و سوییچ بی ام و ۳۲۵', '<h2>\r\n ساخت ریموت و سوییچ بی ام و ۳۲۵</h2>\r\n<h4>\r\n &nbsp;</h4>\r\n<p>\r\n [gallery size=&quot;medium&quot; ids=&quot;3328,3329&quot;]</p>\r\n<p>\r\n &nbsp;</p>\r\n<p>\r\n تلفن های تماس:</p>\r\n<p>\r\n ۰۹۱۲۵۵۷۵۸۸۷ - ۰۹۱۲۴۸۰۲۲۹۵</p>\r\n<p>\r\n ۴۴۲۹۹۰۸۵ - ۴۴۲۹۹۰۶۹</p>\r\n<p>\r\n جلال آل احمد شرق به غرب نرسیده به اشرفی اصفهانی خیابان شایق شمالی جنب کوچه هفتم نگین غرب</p>\r\n<p>\r\n <a href=\"https://goo.gl/maps/bYKuazB1iT62\">لوکیشن ایران آنلاک</a></p>\r\n', '1510952142._20161009_101400.jpg', '1510952142._20161009_101400.jpg', NULL, ',,'),
(39, 'ساخت ریموت و سوییچ بی ام و ۳۲۵', 'ساخت ریموت و سوییچ بی ام و ۳۲۵', '<h2>\r\n ساخت ریموت و سوییچ بی ام و ۳۲۵</h2>\r\n<h4>\r\n &nbsp;</h4>\r\n<p>\r\n [gallery size=&quot;medium&quot; ids=&quot;3328,3329&quot;]</p>\r\n<p>\r\n &nbsp;</p>\r\n<p>\r\n تلفن های تماس:</p>\r\n<p>\r\n ۰۹۱۲۵۵۷۵۸۸۷ - ۰۹۱۲۴۸۰۲۲۹۵</p>\r\n<p>\r\n ۴۴۲۹۹۰۸۵ - ۴۴۲۹۹۰۶۹</p>\r\n<p>\r\n جلال آل احمد شرق به غرب نرسیده به اشرفی اصفهانی خیابان شایق شمالی جنب کوچه هفتم نگین غرب</p>\r\n<p>\r\n <a href=\"https://goo.gl/maps/bYKuazB1iT62\">لوکیشن ایران آنلاک</a></p>\r\n', '1510952142._20161009_101400.jpg', '1510952142._20161009_101400.jpg', NULL, ',,');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title_fa` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `group_sub` int(11) DEFAULT NULL,
  `alt_fa` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `alt_en` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_persian_ci,
  `meta_description` text COLLATE utf8_persian_ci,
  `img_name` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `sort` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Contact_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` text COLLATE utf8_persian_ci,
  `comment` longtext COLLATE utf8_persian_ci,
  `status` int(11) DEFAULT '0',
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `create_date`
--

CREATE TABLE `create_date` (
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `Cv_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8,
  `comment` longtext CHARACTER SET utf8,
  `status` int(11) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `services` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `cvfile` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dictionary`
--

CREATE TABLE `dictionary` (
  `Dictionary_id` int(11) UNSIGNED NOT NULL,
  `text` varchar(255) DEFAULT '',
  `translate` varchar(255) DEFAULT '',
  `lang` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dictionary`
--

INSERT INTO `dictionary` (`Dictionary_id`, `text`, `translate`, `lang`) VALUES
(1, 'The username field is required', 'لطفا نام کاربری خود را وارد نمایید', 'fa'),
(2, 'The password field is required', 'لطفا رمز عبور خود را وارد نمایید', 'fa'),
(3, 'The category_id field is required', 'لطفا گروه خود را انتخاب نمایید', 'fa'),
(4, 'not found', 'پیدا نشد', 'fa'),
(5, 'Congratulation. You are registered successfuly.', 'ثبت نام شما به درستی  انجام شد. بعد از تایید مدیریت سایت اکانت شما فعال می شود.', 'fa'),
(6, 'Exist user', 'کاربر مورد نظر وجود دارد', 'fa'),
(7, 'Forgot pass', 'یاد آوری رمز عبور', 'fa'),
(8, 'Email', 'ایمیل', 'fa'),
(9, 'Send', 'ارسال', 'fa'),
(10, 'Send Password To Email.', 'رمز عبور به ایمیل ارسال شد.', 'fa'),
(12, 'Information is wrong', 'اطلاعات اشتباه می باشند.', 'fa'),
(13, 'don`t match', 'رمز عبور و تکرار رمز با هم یکسان نیستند.', 'fa'),
(14, 'Please enter subject', 'لطفا عنوان را وارد نمایید.', 'fa'),
(15, 'Please enter email', 'ایمیل را به درستی وارد نمایید.', 'fa'),
(16, 'Please enter comment', 'لطفا پیام را وارد نمایید.', 'fa'),
(17, 'پیشخوان ', 'Dashboard', 'en'),
(18, 'پنل کاربری', 'Account', 'en'),
(19, 'نمونه کارها', 'Product', 'en'),
(20, 'افزودن اثر', 'Add Product', 'en'),
(21, 'عملیات با موفقیت انجام شد', 'Operation is succesfully', 'en'),
(22, 'ویرایش پروفایل ', 'Edit profile', 'en'),
(23, 'هنرمند : ', 'Artists: ', 'en'),
(24, 'محصول : ', 'Product: ', 'en');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `Doc_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`Doc_id`, `name`, `image`, `user_id`) VALUES
(1, 'asdf', '1488468280._daba-logo.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `Feature_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`Feature_id`, `title`, `brief_description`, `description`, `image`, `priority`) VALUES
(9, 'adjnkajf,df,djfn', 'jsndfkjadf', 'msdbjfakdjnf', '1482444705._2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Gallery_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Gallery_id`, `title`, `brief_description`, `description`, `image`, `priority`, `status`) VALUES
(10, 'test', NULL, NULL, '1.jpg', 1, NULL),
(11, '2', NULL, NULL, '2.jpg', 2, NULL),
(12, NULL, NULL, NULL, '3.jpg', NULL, NULL),
(13, NULL, NULL, NULL, '4.jpg', NULL, NULL),
(14, NULL, NULL, NULL, '5.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallerychild`
--

CREATE TABLE `gallerychild` (
  `Gallerychild_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `user_check` int(11) DEFAULT NULL,
  `admin_check` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gallerychild`
--

INSERT INTO `gallerychild` (`Gallerychild_id`, `title`, `brief_description`, `description`, `image`, `priority`, `username`, `user_check`, `admin_check`) VALUES
(5, 'adsadasd', NULL, NULL, '1486491561._111.jpg', NULL, NULL, NULL, NULL),
(6, 'sadsad', NULL, NULL, '1486491561._111.jpg', NULL, NULL, NULL, NULL),
(7, 'asdsad', NULL, NULL, '1486491561._111.jpg', NULL, NULL, NULL, NULL),
(8, 'test', NULL, NULL, '1486491561._111.jpg', 0, 'admin', NULL, NULL),
(9, 'test', '', NULL, '1486491561._111.jpg', 0, 'admin', NULL, NULL),
(10, 'test', '', NULL, '1486491561._111.jpg', 0, 'admin', NULL, NULL),
(11, 'werf', NULL, NULL, '1488025937._1.jpg', 0, 'm@m.m', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `Category_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title_fa` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `group_sub` int(11) DEFAULT NULL,
  `alt_fa` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `alt_en` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8_persian_ci,
  `meta_description` text COLLATE utf8_persian_ci,
  `img_name` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `sort` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`Category_id`, `parent_id`, `title_fa`, `title_en`, `group`, `group_sub`, `alt_fa`, `alt_en`, `url`, `meta_keyword`, `meta_description`, `img_name`, `status`, `sort`) VALUES
(1, 0, 'asdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `title`, `brief_description`, `description`, `image`, `image2`, `priority`, `category_id`, `video`) VALUES
(22, 'X33S', 'زیبای به سبک MVM', ' مشخصات فنی \r\nحجم و نوع موتور (سی سی) : 1971\r\nتعداد سیلندر : 4\r\nانتقال نیرو : 7 سرعته CVT\r\nحداکثر سرعت : 185\r\nحداکثر گشتاور : 4500 ~ 4300 / 180\r\n', '1508135384._nbvuy52oa0go0coo8g.jpg', '1508093608._x33.jpg', 0, 'Array', 'http://cheryco.ir/assets/front/fa/video/1.mp4'),
(23, 'ARRIZO', 'فراتر از رویا', 'طراحی بیرونی\r\nدر طراحی بیرونی این خودرو از تکنیک ایجاد خطوط بر روی بدنه استفاده شده که هم زیبایی آن را دو چندان کرده و هم میزان امنیت آنرا بالا برده است', '1508082566._25974_chery-arrizo5-2016-001.jpg', '1508150850._dzp9cs997k00w0w.jpg', 0, 'Array', 'http://cheryco.ir/assets/front/fa/video/arizo5.mp4'),
(24, 'X22', 'شاسی بلند با ترکیب جوانی', 'حجم و نوع موتور (سی سی) : 1497\r\nتعداد سیلندر : 4 سیلندر خطی\r\nانتقال نیرو : 4 سرعته اتوماتیک / 5 دنده دستی\r\nحداکثر سرعت : 160 | 170\r\nحداکثر گشتاور : 135/2750', '1508136089._23xiq49imq680ww8kw.jpg', '1508136170._1nwg278u6j6s880s8c.jpg', 0, '', 'http://mvmco.ir/assets/public/products/videos/s2n6gc74spcc0og8w.mp4'),
(25, '315', '', 'حجم و نوع موتور (سی سی): 1497\r\nتعداد سیلندر : 4\r\nانتقال نیرو :5 دنده دستی\r\nحداکثر سرعت  : 185\r\nحداکثر گشتاور : 4500 ~ 3000 / 140', '1508135166._34q70a9qcgw0sggo8c.jpg', '1508135166._ckh7n5lqm5kossgccw.jpg', 0, '', ''),
(26, '550', 'خودرو خانواده', 'حجم و نوع موتور (سی سی) : 1971\r\nتعداد سیلندر : 4\r\nانتقال نیرو : 5 دنده دستی / اتوماتیک cvt\r\nحداکثر سرعت : 185\r\nحداکثر گشتاور : 4500 ~ 4300 / 182\r\n', '1508135025._twu9ilybx6o488ssks.jpg', '1508135025._divj4dfumcooscskss.jpg', 0, '', ''),
(27, 'TIGGO 5', 'قدرت مند و پرشتاب', 'رینگ آلومینیومی 17 اینچی با طراحی پویا\r\nمجموعه رینگ های این خودرو به گونه ای طراحی شده است که در عین سادگی، زیبایی چشم نوازی دارد. که همراه با تایر های SUV ای که بر روی آن استفاده می شود، نهایت عملکرد و پویایی آن را احساس خواهید کرد', '1508151090._2o956tunpzuooco008.jpg', '1508150971._xzn22wj7gnk8wc04os.jpg', 0, '', 'http://cheryco.ir/assets/front/fa/video/last%20last%20teaser.mp4'),
(28, 'TIGGO 7', 'مدرن و زیبا ', 'موتوراین خودرو مجهز به تکنولوژی توربوشارژمیباشدکه باحجم 1.5 لیتر قادربه تولید قدرت 147 اسب بخاروگشتاور 210 نیوتن برمتر میباشد .ازمزایاآن میتوان به شتاب صفرتاصد این خودرو 10.9 ثانیه میباشد ، همچنین  مصرف  سوخت خودروتیگو7 مقدار6.5 لیتربه ازای هر100 کیلوتر میباشد.\r\nمیتوان ازمهمترین مزایای سیستم توربو شارژر را افزایش شتاب وقابلیت رانندگی اسپورتی درکنارکاهش مصرف دانست.\r\n\r\nهمچنین این موتور میتواند 37.1 % ازانرژی گرمائی را به انرژی جنبشی تبدیل نموده که ازاین حیث توانسته است جایزه بیشترین راندمان موتوررا ازآن خود نماید.', '1508151290._pqu7u6e2jn4scs440.jpg', '1508151290._923lp9xjiyo0gwocw4.jpg', 0, '', 'http://cheryco.ir/assets/front/fa/video/1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Sales_id` int(11) NOT NULL,
  `category_id` varchar(200) CHARACTER SET utf8 NOT NULL,
  `parent_id` varchar(200) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `brief_description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `telegram` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int(11) NOT NULL,
  `login_type` int(11) NOT NULL DEFAULT '0',
  `member_id` int(11) NOT NULL DEFAULT '0',
  `remote_addr` char(20) NOT NULL DEFAULT '',
  `last_access_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_me` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `login_type`, `member_id`, `remote_addr`, `last_access_time`, `remember_me`) VALUES
(4, 0, 4, '185.88.153.241', '2016-12-19 14:54:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions_admin`
--

CREATE TABLE `sessions_admin` (
  `Sessions_admin_id` int(11) NOT NULL,
  `remote_addr` char(20) NOT NULL DEFAULT '',
  `last_access_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `admin_id` int(11) DEFAULT NULL,
  `remember_me` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `sessions_user`
--

CREATE TABLE `sessions_user` (
  `Sessions_user_id` int(11) NOT NULL,
  `remote_addr` char(20) NOT NULL DEFAULT '',
  `last_access_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) DEFAULT NULL,
  `remember_me` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sessions_user`
--

INSERT INTO `sessions_user` (`Sessions_user_id`, `remote_addr`, `last_access_time`, `user_id`, `remember_me`) VALUES
(88, '::1', '2017-03-12 12:00:26', 12, NULL),
(89, '::1', '2017-03-12 12:04:09', 12, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Signup_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT '',
  `gender` varchar(255) DEFAULT NULL,
  `parent_name` varchar(255) DEFAULT NULL,
  `parent_family` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `refer` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Signup_id`, `name`, `family`, `age`, `gender`, `parent_name`, `parent_family`, `relation`, `mobile`, `phone`, `email`, `address`, `refer`, `create_date`) VALUES
(1, '(۰۲۱) ۲۲۷۶۷۳۱۰', 'info@ana.com', NULL, '', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'das', 'ads', '1', '1', 'as', 'das', '3', '123231', '213213', 'admin@admin.com', 'asdasd', 'asdasd', NULL),
(3, 'das', 'ads', '1', '1', 'as', 'das', '1', '123231', '213213', 'admin@admin.com', 'asdasd', 'asdasd', NULL),
(5, 'afj', 'jnk', '1', '1', 'jnk', 'jnk', NULL, 'jn', 'kjn', 'kj', 'nkj', 'n', '0000-00-00 00:00:00'),
(6, 'asnk', 'jnkj', '1', '1', 'nkjn', 'kjn', NULL, 'kjn', 'kjn', 'kjn', 'kjn', 'kjn', NULL),
(7, 'sdafnkj', 'nkjn', '1', '2', 'kj', 'nk', NULL, 'n', 'kjn', 'kjn', 'kj', 'nkj', '2017-01-17 01:45:18'),
(8, 'km', 'lkm', '1', '1', 'lkm', 'lk', '1', 'mlk', 'm', 'lkm', 'lkm', 'lkm', '2017-01-17 01:46:36'),
(9, 'lkk', 'lk', '1', '1', 'lkm', 'lkml', '1', 'kmlk', 'mlk', 'mlk', 'mlkm', 'lkm', '2017-01-18 10:27:21'),
(10, 'asd', 'mkm', '1', '1', 'km', 'lkm', '1', 'lm', 'lkm', 'lm', 'lkm', 'lkm', '2017-01-18 10:27:57'),
(11, 'شهسان', 'صفات', '2', '2', 'امید', 'صفات', '1', '09128170063', '22777546', 'omidsefat@gmail.com', 'پاسداران', 'جستجوی اینترنتی', '2017-01-22 10:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `tamas`
--

CREATE TABLE `tamas` (
  `Tamas_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tamas`
--

INSERT INTO `tamas` (`Tamas_id`, `title`, `brief_description`, `description`, `image`, `priority`) VALUES
(1, '(۰۲۱) 22222222', 'info@nymadteam.com', NULL, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Team_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `brief_description` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`Team_id`, `title`, `brief_description`, `description`, `image`, `priority`) VALUES
(12, '1', NULL, NULL, '1482507894._3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

CREATE TABLE `web_config` (
  `id` int(11) NOT NULL,
  `config` char(200) DEFAULT NULL,
  `value` char(200) DEFAULT NULL,
  `task` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `config`, `value`, `task`) VALUES
(1, '', '', 'System Control'),
(2, 'website_language', 'fa', 'System Control'),
(3, 'site_title', 'Test', 'System Control'),
(4, 'phone', '', 'System Control'),
(12, 'website_copyright', 'Copyright ???? 2012 by Spino Group. All rights are reserved .', 'System Control'),
(13, 'page_size', '12', 'System Control'),
(14, 'system_status', '0', 'System Control'),
(16, 'support_email', 'info@sitename.com', 'System Control'),
(19, 'last_sync', NULL, 'System Control'),
(21, 'component', 'index', 'System Control'),
(24, 'user_type', '000000', 'System Control'),
(25, 'index_url', 'index', NULL),
(26, 'company_expire_period', '-100 day', NULL),
(27, 'related_company_count', '10', NULL),
(28, 'related_product_count', '10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`Aboutus_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Article_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`Bank_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Banner_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`),
  ADD UNIQUE KEY `Category_id` (`Category_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `create_date`
--
ALTER TABLE `create_date`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`Cv_id`);

--
-- Indexes for table `dictionary`
--
ALTER TABLE `dictionary`
  ADD PRIMARY KEY (`Dictionary_id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`Doc_id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`Feature_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Gallery_id`);

--
-- Indexes for table `gallerychild`
--
ALTER TABLE `gallerychild`
  ADD PRIMARY KEY (`Gallerychild_id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`Category_id`),
  ADD UNIQUE KEY `Category_id` (`Category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`Sales_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `sessions_admin`
--
ALTER TABLE `sessions_admin`
  ADD PRIMARY KEY (`Sessions_admin_id`);

--
-- Indexes for table `web_config`
--
ALTER TABLE `web_config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `Aboutus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `Bank_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `create_date`
--
ALTER TABLE `create_date`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `Cv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dictionary`
--
ALTER TABLE `dictionary`
  MODIFY `Dictionary_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `Doc_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `Feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `gallerychild`
--
ALTER TABLE `gallerychild`
  MODIFY `Gallerychild_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `Sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sessions_admin`
--
ALTER TABLE `sessions_admin`
  MODIFY `Sessions_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `web_config`
--
ALTER TABLE `web_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
