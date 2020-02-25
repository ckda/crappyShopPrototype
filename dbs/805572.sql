-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2017 at 07:14 PM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `805572`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `ffwr` char(200) DEFAULT NULL,
  `pas` char(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`ffwr`, `pas`) VALUES
('233543772852', '5cce18e230a3335204aa6479d12cdfe8'),
('233543772852', 'dfb3361b0454c3f60e2671953324b0d3'),
('233543772852', '2da2a4072bf83b09eca27564b9f04fa6'),
('Country543772852', '2da2a4072bf83b09eca27564b9f04fa6'),
('233543772852', '18d25044c28e1a0b0034185d86436b62'),
('233543772852', 'a0d18e4bef09aed6729a3d1115a67fee'),
('233543772852', '4cf24d9fb90fbdddb5a229e5660062f1'),
('233543772852', '1f453b15fd63f43b19d25b862f711e01'),
('233242674320', '2da2a4072bf83b09eca27564b9f04fa6'),
('233574490495', '2da2a4072bf83b09eca27564b9f04fa6'),
('233560123910', 'ec4e5098183dad321254ebcef484a7f6');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `9r0` char(100) DEFAULT NULL,
  `link` char(100) DEFAULT NULL,
  `my3` char(200) DEFAULT NULL,
  `foni` char(200) DEFAULT NULL,
  `loc` char(100) DEFAULT NULL,
  `abt` tinytext,
  `times` int(100) DEFAULT NULL,
  `roder` char(100) DEFAULT NULL,
  `dislike` int(10) DEFAULT NULL,
  `clike` int(10) DEFAULT NULL,
  `category` int(2) DEFAULT NULL,
  `bclryo` varchar(30) DEFAULT NULL,
  `sklryo` varchar(30) DEFAULT NULL,
  `txlryo` varchar(30) DEFAULT NULL,
  `start_date` int(15) DEFAULT NULL,
  `end_date` int(15) DEFAULT NULL,
  `classifieds` int(2) DEFAULT NULL,
  `buy_link` varchar(300) DEFAULT NULL,
  `buy_link_word` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`9r0`, `link`, `my3`, `foni`, `loc`, `abt`, `times`, `roder`, `dislike`, `clike`, `category`, `bclryo`, `sklryo`, `txlryo`, `start_date`, `end_date`, `classifieds`, `buy_link`, `buy_link_word`) VALUES
('Ads', 'ads', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20160520, 20160621, NULL, NULL, NULL),
('Yoorye', 'yoorye', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20160520, 20160621, NULL, NULL, NULL),
('printly grafix', 'printlygrafix', '96b9c309a4373dec85cbbba20d01b77d', 'Untitled-1.jpg', 'Accra Ghana', 'printly grafix is a section of printly co-op. where graphic designs of beauty and brains are done', 3, '233264388322', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Creamly', 'creamly', '5cce18e230a3335204aa6479d12cdfe8', 'nice.png', 'Accra-Ghana', 'Official general sales store for Yoorye.com. All prices are negotiable', 6, '233543772852', NULL, 9, 2, 'voilet1.png', '#00CCFF', '#FFFF00', NULL, NULL, NULL, 'Click here to buy through WhatsApp', 'http://goo.gl/V4FxKp'),
('Phone', 'phone', '4b0807e9850d4db56620fa14db8e60f8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('PENCIL PEN MAN GALLERY', 'pencilpenmangallery', '90de426a958772b884b3042b211a56d5', 'pENCILPENMAN LOGO.jpg', 'Realistic pencil portraiture', 'PPM is a company that  produre realistic portraites with graphits,charcoal,pastel and pens on mainlla card, netcard and any other types of papers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('p', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20160520, 20160621, NULL, NULL, NULL),
('p', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20160520, 20160621, NULL, NULL, NULL),
('iOS Home', 'ioshome', 'f5c3c5940f9ef48ea2f41545a565d596', 'IMG-20150414-WA0002.jpg', 'Accra-Ghana', 'Jail breaking, Repairs and Unlocking of Apple Devices', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Icie World Concept Gh', 'icieworldconceptgh', 'fd5c59d19fd3bf420cdac433b6f695bd', 'IMG_20141217_060536.jpg', 'Accra - Central', 'Icie World Concept Gh is a multi purpose company that deals in Event Management and both I.T and Business Consults..for more info on our services please visit our facebook page @ icieworldconceptgh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('clarke remedial school', 'clarkeremedialschool', '4bbc2935922d801b83871a6e3eb72675', NULL, 'accra', 'remedial classes for WASSCE/NOVDEC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('product', 'product', 'f5bf48aa40cad7891eb709fcf1fde128', 'IMG-20150209-WA0000.jpg', 'All over the world', 'cellgevity, a breakthrough supplement which fight against cellular inflammation, toxins and free radicals. For all disease types. price 85ghc only', NULL, '2330245803391 or 0204779339', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('oraetlabora247iworld', 'oraetlabora247iworld', 'd88b77eb963f72fc3d4e8338a487368b', NULL, 'Seller', 'Bringing iWorld Class items to the World', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Search', 'search', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20160520, 20160621, NULL, NULL, NULL),
('Wisla Realty', 'wislarealty', '9dc40d21591d5af77cb526e783bc9fc6', 'WISLA 20150609_092912.jpg', 'Accra', 'Wisla realty is a full time real estate company aim to provide quality real estate needs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('BtcPlaza', 'btcplaza', 'ac1cb4842681b77c460a0af092a70fc4', 'ifigetam.jpg', 'Ghana', 'We sell btc at cheaper rates compared to any site in Ghana.', NULL, '233209963717', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CarderGenerals', 'cardergenerals', '87f952ae4874f687d38f0efc91680b6e', NULL, 'Ghana', 'we card iphones and any other item to you..Whatsapp 0209963717', NULL, '2330209963717', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('SallySon', 'sallyson', '480ca570f03005e2bb5bdedbc77d4582', 'image.jpg', NULL, 'Get that mighty beard you have always wished to', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Blurred Lines', 'blurredlines', '625740dcbe39105920c65c522d4f6694', NULL, 'Photography', 'We do all round photography. Check out our Instagram; @blurredlines ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('iCycle', 'icycle', 'b189b11e018e912ca2330e92c2e6fad0', 'Nice3.jpg', 'Ghana', 'We sell recycled plastic products.', 1, '233279761557', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('The Device Hub', 'thedevicehub', 'a0d18e4bef09aed6729a3d1115a67fee', 'devicehub.png', 'Accra - Ghana', '(a)Smartphone retailing company. IG: the_device_hub', 5, '233263320887', NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Best Deals', 'bestdeals', '4cf24d9fb90fbdddb5a229e5660062f1', '2015-06-24 22.13.15.jpg', 'Accra,Koforidua - Ghana', '(a)Dealers in Apple, Samsung, HTC and BlackBerry. IG: bestdeals_gh', 12, '233273383353', NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('iGeek Ghana', 'igeekghana', '1f453b15fd63f43b19d25b862f711e01', 'Picture2.jpg', 'Accra, Tema, Adenta, Airport, Legon', 'Laptops â€¢iPhone â€¢Android â€¢Networking â€¢Websites â€¢Programming â€¢PC Repairs â€¢Gadget Sales â€¢Printing â€¢Graphic Design â€¢Branding', NULL, '233235356302', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Discountshopltd', 'discountshopltd', '79d53be2d8e1db661bea49aa9f7ca8e7', 'image.jpg', 'Tema', 'Dealers in High End Smart Phones such as Apple, Samsung, etc', NULL, '233543435843', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Auto Hub', 'autohub', '18d25044c28e1a0b0034185d86436b62', '2015-06-29 00.19.51.jpg', 'Ghana', '(a)Online car retailing company.  IG: auto_hub_gh', 5, '233263320887', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('QUAGGA GROUPE', 'quaggagroupe', '7c7a2f4c86af303d5bd212a6bc39cd88', NULL, 'Ghana', 'Fashion', 1, '233265002106', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('istoregh', 'istoregh', 'b76653258498c10e3bc6fcd8540f5d60', 'IMG_0433.jpg', 'legon', 'PHONESâ˜…ACCESSORIESâ˜…CASES & OTHERS', 10, '233572267638', NULL, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Mayanga Collections.Gh', 'mayangacollections.gh', '2da2a4072bf83b09eca27564b9f04fa6', 'IMG_20150625_190834.jpg', 'Ghana', 'mens fashion stocks', 6, '233271724077', NULL, 7, 1, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL),
('gadgetpalacegh', 'gadgetpalacegh', '40c5f72f82ecc3e93fc104a982c8bd46', NULL, 'smartphones', 'we deal in all kinds of smartphones and smartphones accessories ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('DemoCreative', 'democreative', 'dfb3361b0454c3f60e2671953324b0d3', '233204591998-1410025128.jpg', 'urban fashion.', 't-shirt sales, snapbacks, tanktops', 2, '233509839377', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('The Flour Pot', 'theflourpot', 'a4294f783cef7b75869f0f3fe827fa1c', NULL, 'Home made cakes and cookies for all occassions made with lots of love.', 'Self motivated baker doing what i love. Head on to @the_flourpot on IG to view some of my works. ', 1, '233263757298', NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Ikez Clothing', 'ikezclothing', '59af627ae3868388bbadd2e92809191a', 'Ikez new logo.jpeg', 'Clothing & Fashion', 'IKEZ Klodding, better known simply as IKEZ is a Ghanaian multinational corporation that is engaged in printing of quality designed t-shirts and other accessories for all sex.  We custom t-shirt printer for Clients or customers and gives discount on all wo', 1, '233549825160', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('fone cases gh', 'fonecasesgh', 'd593e856f37ab1210e00ee6bf868d4ac', '20150727094111.png', 'Accra , Tema, Kumasi -Ghana', 'phone cases for all brands . and fone accessories ', 5, '233543811386', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('paint shop', 'paintshop', '0573ff9f55afd5cf4dbc325695fc3c59', NULL, 'patasi', 'we sell American paints', NULL, 'zero', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('KROWNAP', 'krownap', '27af8b88600918563378327483e15120', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('qwaku golden', 'qwakugolden', '493faf6a42370ea7f8a5e26b864d3464', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Versadealz_gh', 'versadealz_gh', '1377359ab930da3d4ad5a65bf3a043fb', NULL, 'General merchandise', 'General merchandise and services', 1, '233261569975', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('E GET WHY', 'egetwhy', '9370899aa0e77050bc515d67be2d7f58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('dayday', 'dayday', 'e8bf5a756cf15252b4e514a258bbbde9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('PAMPER YOUR FEET', 'pamperyourfeet', '5ac0c91e1cb73a424c33c5bb969b1271', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Brymo 1', 'brymo1', '5b4dccc133fbfe66d5406707d81e662e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('PLUSH FITS', 'plushfits', 'ec4e5098183dad321254ebcef484a7f6', 'PicsArt_1444836075344.jpg', 'CLOTHING', 'PLUSH FIT is a clothing best known as PLUSH (pron.as PL_ASH) is a Ghanaian multinational jointstock corporation clothingline which brings out high class quality customised t-shirts,crop-tops,tags,caps,tank tops,etc.PLUSH...just rep it or live it like ours', NULL, NULL, NULL, 1, 1, 'blue2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('CODEs Apple Accessories', 'codesappleaccessories', '716d43b8809d4347ef785c115d45d43d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Haggle Store', 'hagglestore', '8a113eed70bdd50ed2f7a1053b35debb', 'IMG_1724.JPG', 'Accra', 'All iPhone sales', NULL, '233272631651', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('MEGA Shop', 'megashop', '867480ae2bf7f59aca8e23c89ced245d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'black.png', '#CCCCCC', '#CCCCCC', NULL, NULL, NULL, NULL, NULL),
('OnceOponAtime', 'onceoponatime', '78c818397d497b43db72636bfe576ea0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ROCK FEET', 'rockfeet', 'ec1f56dbdafff68a1f399c3164b482bc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Sneakers', 'sneakers', 'ea24260ef5764089bd804dad0885468b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Nana Aduku Addai 2', 'nanaadukuaddai2', 'e0f7709bb99848fca7da9caee729a837', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Shoes n clothes', 'shoesnclothes', '9a68db429ca67e8a830a44b980eb003d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('gifty shop', 'giftyshop', '3f6a0dc706ae6b44097e0f5105317ced', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Kofi', 'kofi', 'e84bd6fbc0b62bf0df10b7d25b32e310', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Krownap Havre', 'krownaphavre', '4a765bcc9a555096b9f83a547371ee48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Boavo Emmanuel', 'boavoemmanuel', '876891dea86ec30692d74aa6b91b4cb7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('shoe', 'shoe', 'd8a48e3f0e1322d53d401e3dcb3360db', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Adidas nmds', 'adidasnmds', 'f1d273f79da299d91e8a6e266ff545ef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Anerkai Collections', 'anerkaicollections', 'b7645d459a68f49a1d3c837634801795', 'ko.jpg', 'Beauty', 'we deal in general beauty stuff from jewelry to make up to footwear and anything that has to do with Beauty ', NULL, '233540288877', NULL, NULL, 10, 'pink.png', '#CCCCCC', '#000000', NULL, NULL, NULL, NULL, NULL),
('Riley 47', 'riley47', '00a1e6f0bca4f610fd61186e1444fd89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('there', 'there', 'd850f04cdb48312a9be171e214c0b4ee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'voilet3.png', '#003300', '#000000', NULL, NULL, NULL, NULL, NULL),
('Yope', 'yope', 'ae475530aaaaaca9a2e17d176ba28aca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Kryx Phones', 'kryxphones', 'd6bc036e302c6124900ae47bd984f14a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('olivewigcaps', 'olivewigcaps', 'bfbe71cc61b3c7f603da0d976094ed42', NULL, NULL, NULL, NULL, 'zero', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Lydiabank', 'lydiabank', 'b10e7f8d6b338c28e6bc5f328628e255', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Falaadealsgh', 'falaadealsgh', '80b34d53c15b3b5498f5f83b5d81c41e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
