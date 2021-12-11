-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 05:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(5) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `location`) VALUES
(1, 'test', 'test', 'test@gmail.com', 'firstname', 'lastname', 'ladprow');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_or` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_pic` varchar(255) NOT NULL,
  `menu_price` int(11) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `c_username` varchar(255) NOT NULL,
  `c_firstname` varchar(255) NOT NULL,
  `c_lastname` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_or`, `menu_id`, `menu_name`, `menu_pic`, `menu_price`, `shopname`, `c_username`, `c_firstname`, `c_lastname`, `c_address`) VALUES
(316, 11, ' à¸¡à¸´à¸”à¹„à¸™à¸—à¹Œ à¸šà¸£à¸²à¸§à¸™à¸µà¸ªà¹Œ à¸”à¸µà¹„à¸­à¸§à¸²à¸¢ à¹€à¸‹à¸•', 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210422050525014028/photo/08629652782c417c958d26e83f0ef2c7_1619067923704510781.jpeg', 219, 'Swensen', 'test', 'firstname', 'lastname', 'ladprow'),
(317, 12, ' à¸„à¸¸à¸à¸à¸µà¹‰ à¹à¸­à¸™à¸”à¹Œ à¸„à¸£à¸µà¸¡ à¸”à¸µà¹„à¸­à¸§à¸²à¸¢ à¹€à¸‹à¸•', 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210422050449011399/photo/a89f1e891f854420997499f75986c4c1_1619067882484418472.jpeg', 219, 'Swensen', 'test', 'firstname', 'lastname', 'ladprow');

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE `deliver` (
  `deliver_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `shopname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `deliver`
--

INSERT INTO `deliver` (`deliver_id`, `username`, `password`, `firstname`, `lastname`, `shopname`) VALUES
(1, 'bonchon', 'bonchon', 'bon', 'chon', 'Bonchon'),
(2, 'burgerking', 'burgerking', 'burgur', 'king', 'burgerking'),
(3, 'dairyqueen', 'dairyqueen', 'queen', 'dairy', 'dairyqueen'),
(4, 'pizzacompany', 'pizzacompany', 'pizza', 'company', 'pizzacompany'),
(5, 'sp', 'sp', 's', 'p', 's&p'),
(6, 'sizzler', 'sizzler', 'sizzler', 'sizzler', 'sizzler'),
(7, 'thecoffeeclub', 'thecoffeeclub', 'thecoffeeclub', 'thecoffeeclub', 'thecoffeeclub'),
(8, 'swensen', 'swensen', 'swensen', 'swensen', 'swensen');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(8) NOT NULL,
  `menu_shop` mediumtext NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_price` float NOT NULL,
  `menu_pic` mediumtext NOT NULL,
  `menu_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_shop`, `menu_name`, `menu_price`, `menu_pic`, `menu_desc`) VALUES
(1, 'Bonchon', 'เกี๊ยวซ่าไก่ ใหญ่ (18 ชิ้น)และต๊อกทอดคลุกซอส', 469, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZCYHAXZJTUWRJ-C2JEG3WCCUVUNE/photo/47e3a25133724c77a8870125dc41fa8a_1618125707444771764.png', 'Mandu-gang-jeong L (18 Pcs.)'),
(2, 'Bonchon', 'ชูโรสนมข้นหวาน', 918, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20201217034952019741/photo/1093009b60b4449a852f7d4ec79688b5_1618213792066711266.png', 'CHURROS WITH SWEETENED CONDENSED MILK'),
(3, 'Bonchon', 'บิบิมบับเนื้อออสเตรเลีย', 290, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210121103728018294/photo/fad22fadb9574c85a90ec72a82fdefb7_1618125708275568152.png', 'AUSTRALIAN BEEF BIBIMBAP'),
(4, 'Bonchon', 'บิบิมบับแฮมเกาหลี', 220, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210121103708015491/photo/df311b03a84e4842846f525c9f3765d2_1618125708496986401.png', 'KOREAN HAM BIBIMBAP'),
(5, 'Bonchon', 'บิบิมบับไก่บอนชอน', 205, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210121103644019813/photo/eea5b2e183bf4f2b8d02673c3a6857e9_1618125708684718927.png', 'CRISPY CHICKEN BIBIMBAP'),
(6, 'Bonchon', 'ปีกไก่ เล็ก (6 ชิ้น)และต๊อกทอดคลุกซอส', 195, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZCYHAXZJTUWRJ-C2JEG3WATKJWJ6/photo/07fe10ab3843453c912c577a51f2f4e5_1618125708859171115.png', 'Dak-gang-jeong S (6 Pcs.)'),
(7, 'Bonchon', 'ข้าวหน้าเนื้อบุลโกกิและไข่ดาว', 239, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210409081255061184/photo/3fb8ef4c0d064fc18f2bc7dbaa510c4a_1618123315601065979.png', 'Beef bulgogi rice bowl with fried egg'),
(8, 'Bonchon', 'กุ้งดองซีอิ๊วโคชูจัง 7 ตัว', 373, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200916102902011025/photo/018dab1cd8d44eef89e6498d14b4e520_1618123315856895915.png', ''),
(9, 'Bonchon', 'ปีกไก่บอนชอน ใหญ่ (18 ชิ้น)', 459, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200330031949045571/photo/184c5933a7b84f1cba6e0c99f565f0ca_1618129397378763737.png', ''),
(10, 'Swensen', 'บิงซู ข้าวเหนียวมะม่วง โอเวอร์โหลด', 219, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20201217092521017834/photo/19c108df3ac84bc980661bb759984316_1608197121738522673.jpeg', 'Mango Pandan Sticky Rice Overload Bingsu'),
(11, 'Swensen', 'มิดไนท์ บราวนีส์ ดีไอวาย เซต', 219, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210422050525014028/photo/08629652782c417c958d26e83f0ef2c7_1619067923704510781.jpeg', 'Midnight Brownie DIY Set'),
(12, 'Swensen', 'คุกกี้ แอนด์ ครีม ดีไอวาย เซต', 219, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210422050449011399/photo/a89f1e891f854420997499f75986c4c1_1619067882484418472.jpeg', 'Cookies\'n Cream DIY Set'),
(13, 'Swensen', 'เวรี่ สตรอว์เบอร์รี ดีไอวาย เซต', 219, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210422050407014142/photo/74ce96fc88cd4f72a1144bc3f14273bf_1619067826945070953.jpeg', 'Very Strawberry DIY Set'),
(14, 'Swensen', 'ช็อกโก โอรีโอ - 1.5 ปอนด์', 529, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200515083733030416/photo/d99ea926f357435b841b28a9b3aab64b_1589531853733691090.jpg', 'Choco Oreo 1.5 lbs -รับฟรีเทียน'),
(15, 'Swensen', 'เวรี่ สตรอว์เบอร์รี - 1.5 ปอนด์', 529, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200515083733021309/photo/4c95e2cc94624bd1bafa747a1ea3c50d_1589531853396973828.jpg', 'Very Strawberry 1.5 lbs -รับฟรีเทียน'),
(16, 'Swensen', 'อัลติเมท ช็อกโกแลต - 3 ปอนด์', 879, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200515083733017832/photo/248d7b7dbc6c4fc29360c1a567c25740_1589531853076924638.jpg', 'Ultimate Chocolate 3 lbs -รับฟรีเทียน'),
(17, 'Swensen', 'ทริปเปิ้ล เฟล์เวอร์ - 3 ปอนด์', 879, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200515083732021743/photo/b53610d8e5eb4a45ad5a61c974672715_1589531852474667534.jpg', 'Triple Flavors 3 lbs -รับฟรีเทียน'),
(18, 'Swensen', 'มิราเคิล 4 - 4 ปอนด์', 995, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200515083732034486/photo/33af63be9c0046ada33bf113bdd79211_1589531852744142115.jpg', 'Miracle Four 4 lbs -รับฟรีเทียน'),
(19, 'BurgerKing', 'ใหม่! แพลนต์เบส วอปเปอร์', 169, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210309105810062915/photo/ae5c2ba3c44142c3ab3329d746042b94_1615287490780036045.jpg', 'Plant-based Whopper #Whopperสายเขียว แพทตี้ทำจากพืช 100% ย่างด้วยไฟ ได้รสชาติ แพทตี้นำไปย่างเตาเดียวกับเมนูอื่นๆในร้าน'),
(20, 'BurgerKing', 'ใหม่! ชุดแพลนต์เบส วอปเปอร์', 249, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210309105811010403/photo/11eb771069c84206bd6ec7d058df35b2_1615287491048225494.jpg', 'Plant-based Whopper Value Meal #Whopperสายเขียว แพทตี้ทำจากพืช 100% ย่างด้วยไฟ ได้รสชาติ แพทตี้นำไปย่างเตาเดียวกับเมนูอื่นๆในร้าน\r\n'),
(21, 'BurgerKing', 'ชุดเอ็กซ์ตร้าลอง ชิกเก้น ชีส 1 แถม 1', 285, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THGFIST000005g2-CY6ETPD2FAXZVX/photo/ff9be8e368b340ae8e3b39351e389ecc_1581481443717866979.jpg', 'Buy 1 Large Set Free 1 Burger: Extra Long Chicken Cheese'),
(22, 'BurgerKing', 'ชุดขนาดใหญ่ ปลากรอบเบอร์เกอร์ 1 ชุด 1 แถม 1', 199, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THGFIST000005g2-CY6ETPD2AXMETA/photo/b761bb3dfd0d4174926c42265fab6b11_1579790554282287280.jpg', 'Buy 1 Large Set Free 1 Burger:Fish’N Crisp'),
(23, 'BurgerKing', 'ชุดขนาดใหญ่ ไก่กรอบBurgerBBQชีส 1 ชุด 1 แถม 1', 235, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THGFIST000005g2-CY6ETPD1TAEVSA/photo/f84bc26047b0447f86e7eed6c595cdb3_1579790554097827323.jpg', 'Buy 1 Large Set Free 1 Burger:Chic’N Crisp BBQ Cheese'),
(24, 'BurgerKing', 'ชุดเบอร์เกอร์ไก่ชิ้นยาว แถม นัตเก็ต 6 ชิ้น และโค้ก 16 Oz.', 249, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-C2DJTN5VVVKKLE-C2DKRVKHBCBECE/photo/1fa0c4fabe714d73bd725cf63b497e58_1607053998825052804.jpeg', 'Free 6 Nuggets+Coke 16Oz when buy Extra long Chicken Cheese Value Mea'),
(25, 'BurgerKing', 'BBQ Cheese Burger Jumbo Extra Cheese ', 179, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210217024513010390/photo/7426ad15733640559a055301605e8cc0_1613529913021565286.jpg', 'ชุดบาร์บีคิวชีสเบอร์เกอร์จัมโบ้ (หมู) + เฟรนซ์ฟรายส์ขนาดปกติ'),
(26, 'BurgerKing', 'ซื้อ 1 แถม 1: Extreme Cheese Burger Jumbo ', 339, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210217024511061774/photo/d69877e25c9341ee9132386d9f4f1714_1613529911965800117.jpg', ' Extreme Cheese Burger Jumbo (Pork) + Regular Fries'),
(27, 'BurgerKing', 'คิงสเปเชียล 189 ไก่ทอด+เบอร์เกอร์', 189, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210217024511061774/photo/d69877e25c9341ee9132386d9f4f1714_1613529911965800117.jpg', 'Whopper Jr. Cheese (Beef) + Original Chicken + Coke '),
(28, 's&p', 'ชุดข้าวแช่ข้าวหอมมะลิ + ข้าวเหนียวมะม่วงน้ำดอกไม้\r\n', 198, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210228150957097278/photo/e7d0ec24bc4d45f1bf6d25e5e7d8deaf_1614524997376682420.jpg\r\n', 'Jasmine Rice Cooler set with Mango & Sticky Rice'),
(29, 's&p', 'ข้าวแช่ข้าวหอมมะลิ', 135, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210228150957117039/photo/ca964229cb924540975d6c656032ed02_1614524997596912944.jpg', 'Jasmine Rice Cooler'),
(30, 's&p', 'เค้กช็อกโกแลตฟัดจ์ 1 ปอนด์', 455, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200416064702010776/photo/64a8cc3b657944cb9dc38224a88547bb_1603176517389139189.jpeg', 'Chocolate Fudge Cake 1Lb'),
(31, 's&p', 'เค้กเลเยอร์ใบเตย 1 ปอนด์', 415, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200416064701040053/photo/31910dc673ad416ab69b6b97e11a50c1_1603176555939216491.jpeg', 'Pandan Layer Cake 1Lbs'),
(32, 's&p', 'เค้กสปันจ์เนยวานิลลา 1 ปอนด์', 435, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZDCFCN2WE5KL2-CZJHJATDHEXTFE/photo/3d8de5db8042449da7e3f846ea6338c9_1603176571379892371.jpeg', 'Vanilla Butter Sponge Cake 1Lb'),
(33, 's&p', 'ฟรุตเค้ก', 765, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200416064701025267/photo/15ce74f28b514e73b69c94666875c361_1587019621350308244.jpg', 'Fruit Cake'),
(34, 's&p', 'เค้กนุ่ม เอสแอนด์พี รสเนย', 98, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZDCFCN2WE5KL2-C2BALRJ1AXKWPE/photo/2d38cd0763a14c488ff6f74a85b20560_1603174119366853161.jpeg', 'Butter Love Cake'),
(35, 's&p', 'เค้กนุ่ม เอสแอนด์พี รสส้ม', 98, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZDCFCN2WE5KL2-C2BALRJ1DCKBUA/photo/f10c8c220f60486eb0f7155d63b28f9d_1603174130822641602.jpeg', 'Orange Love Cake'),
(36, 's&p', 'เค้กนุ่ม เอสแอนด์พี รสกาแฟ', 98, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZDCFCN2WE5KL2-C2BALRJ1DCKBUA/photo/f10c8c220f60486eb0f7155d63b28f9d_1603174130822641602.jpeg', 'Coffee Love Cake'),
(37, 'dairyqueen', 'DQ sandwich 5 pcs', 99, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210421161717012426/photo/17f0d5ab343a4faaa5a4f2e400360c61_1619021804911227343.png', 'ดีคิว แซนวิช 5 ชิ้น ในราคา 99 บาท'),
(38, 'dairyqueen', '1 แถม 1 บลิซซาร์ด® โอรีโอ ไซส์ควอท', 195, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZDDDF3GNKEXRX-C2KCN3UVN3TFVX/photo/cfb34e20d70947608d8004433f72a8ed_1612415484299915641.png', 'Buy 1 get 1 free Oreo® Blizzard® Quart size'),
(39, 'dairyqueen', 'OREO BLIZZARD ICE CREAM CAKE', 399, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZDDDF3GNKEXRX-C2LCEZAAUANXNX/photo/54ad0b3e6f1a419a8bed6c0cc6863cbb_1614225800923677296.png', 'ไอศกรีมเค้ก โอรีโอ บลิซซาร์ด'),
(40, 'dairyqueen', 'Songkran Family Set ชุดครอบครัวสุขสันต์', 199, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210408075103018970/photo/e5f371efc1d4454ca3608c91905b764e_1617868239080678163.png', 'ครอบครัวสุขสันต์ DIY เซ็ตมะม่วง อร่อยไปกับบลิซซาร์ดมะม่วงไซส์ XL มา พร้อมท็อปปิ้งข้าวเหนียวใบเตยและครีมแคป เลือกกินคู่ได้ทั้งกับวาฟเฟิลโคน และขนมปัง อร่อยในแบบคุณชอบ พร้อมเสิร์ฟคุณ ถึงบ้านแล้ววันนี้'),
(41, 'dairyqueen', 'Ice Cream Cake Happy Mango', 299, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210325045734013373/photo/748362509ef84d6384e782c30116ce23_1616648250454979071.png', ''),
(42, 'dairyqueen', 'Ice Cream Cake Mango Delight', 459, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210325045714015786/photo/eeceec6a3dbf4ec99a9ed5cda4cb02bd_1616648230220780026.png', ''),
(43, 'dairyqueen', 'บลิซซาร์ด® มะม่วง ข้าวเหนียวใบเตย', 60, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210304034256055770/photo/c9c37307e6b54d3c9307b4adf87d7f3f_1614829376486064251.jpg', ''),
(44, 'dairyqueen', 'ซันเดย์ มะม่วง ข้าวเหนียวใบเตย', 70, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210304034257010394/photo/e3067ad013bc4ef1a72606b03728727a_1614829377009611685.jpg', ''),
(45, 'dairyqueen', 'ซุปเปอร์ โอริโอ้ บลิซซาร์ดขนาด XL', 155, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200616092925017594/photo/9850092ebdcf40908333325890467057_1592299758080397129.png', ''),
(46, 'sizzler', 'ชุด 1 แถม 1 ข้าวหน้าหมูแฮมเบิร์กและซอสเผ็ดสไตล์ไทย', 229, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210402121208012998/photo/bfc566a8b2c040b1abcf198726f78d16_1617366169567927449.jpeg', 'Pork Hamburg Rice with Spicy Thai Sauce'),
(47, 'sizzler', 'Chicken with Rice & Spicy Pesto Sauce + Mushroom Soup', 179, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210327164252010779/photo/da70f2291f2a4aeca9f701ab585e1699_1616863359693598784.jpeg', ''),
(48, 'sizzler', 'Spicy Chicken & Sausage FREE Pork Boston', 399, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210225165438016249/photo/f5340d4a2a93421db8d6db476ca1b71b_1614568721189506728.jpeg', ''),
(49, 'sizzler', 'ชุดอิ่มฟิน', 599, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210301164638013704/photo/c7927337900d475788c3b96d43ac45f9_1614617198003166173.jpg', ''),
(50, 'sizzler', 'ซื้อพอร์คลอยน์ ฟรี ซุปเห็ด', 229, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200715050258037421/photo/6edb241886e146359123e78c917146ba_1600687261285257200.jpeg', ''),
(51, 'sizzler', 'ดับเบิ้ลไก่เทอริยากิ + ข้าวออร์แกนิค', 199, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/3-CZDXNTTZLVCGTA-CZLBDFKGSA4BC2/photo/64b3f9821c954835aad876056ea44de7_1594120421449166229.jpeg', ''),
(52, 'sizzler', 'ชุดซุปเห็ดสูตรสุดฟิน (พร้อมเบคอนบิทส์และชีส) + ชีสโทสต์ 2 ชิ้น', 115, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210301164637130638/photo/38dc3cdfbb384c8289616ee01fa0ea0d_1614617197834789101.jpg', ''),
(53, 'sizzler', 'ไก่ย่างฮิบาชิ', 229, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200421101756023118/photo/213edc2a6fc84352b0bb4ee4135b2ea7_1593570615738612578.jpeg', ''),
(54, 'sizzler', 'ซี่โครงหมูบาร์บีคิว (Half Rack)', 399, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200421101754021388/photo/be2b5f1306d34b41a48657a2e3e7cf3b_1593570717620818744.jpeg', ''),
(55, 'thecoffeeclub', 'แฮมชีสแซนวิช', 169, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908372334803/photo/menueditor_item_53bc1aeb9dbd4dd284ff21e050902000_1590403717702589644.jpg', ''),
(56, 'thecoffeeclub', 'ทูน่าชีสแซนวิช', 189, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908372334803/photo/menueditor_item_53bc1aeb9dbd4dd284ff21e050902000_1590403717702589644.jpg', ''),
(57, 'thecoffeeclub', 'ฮันนี่โทสต์กล้วยหอม', 229, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908264381247/photo/menueditor_item_2a5f3f05fb6d4e1184f5084c7148e652_1589619805477830667.jpg', ''),
(58, 'thecoffeeclub', 'โทสต์โอวัลติน', 169, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908294912040/photo/menueditor_item_9ea648d4d9104e66a0ea38a2347e922d_1590403848738032754.jpg', ''),
(59, 'thecoffeeclub', 'โทสต์กระเทียม', 199, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908363399303/photo/menueditor_item_bef87327b3554d30b65122f23aa3d73c_1589619481795857176.jpg', ''),
(60, 'thecoffeeclub', 'นูเทลล่าโทสต์กล้วยหอม', 199, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908363399303/photo/menueditor_item_bef87327b3554d30b65122f23aa3d73c_1589619481795857176.jpg', ''),
(61, 'thecoffeeclub', 'โทสต์โกโก้', 169, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908411624490/photo/menueditor_item_ac432f257e9940d9ad84caaf3548d1ad_1590403551284728446.jpg', ''),
(62, 'thecoffeeclub', 'โทสต์ชาเย็น', 169, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908402129506/photo/menueditor_item_1e8dff506e6c401e883c9b7de9e6d600_1590403581037332494.jpg', ''),
(63, 'thecoffeeclub', 'โทสต์ภูเขาไฟ', 169, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE2020041908384962868/photo/menueditor_item_f174819c1bcd4b9f9b3be8971946c7ef_1589619527271552021.jpg', ''),
(64, 'pizzacompany', '1 แถม 1 พิซซ่าคลาสสิค ถาดกลาง', 319, 'https://d1sag4ddilekf6.cloudfront.net/item/THITE20210224083908012582/photos/d1bfbf0f86b64492bab5e4eb31c60905_1614155941476899711.jpeg', ''),
(65, 'pizzacompany', '1 แถม 1 พิซซ่าเดอลุกซ์ ถาดกลาง', 359, 'https://d1sag4ddilekf6.cloudfront.net/item/THITE20210224083752014861/photos/65cb63e30f2649b1b426d68b9bde2fa5_1614155869140295902.jpeg', ''),
(66, 'pizzacompany', '1 แถม 1 พิซซ่าซีฟู้ด ถาดกลาง', 399, 'https://d1sag4ddilekf6.cloudfront.net/item/THITE20210224083709011924/photos/667715d9ba2c4cfe871faf5db7b1669a_1614155883104137688.jpeg', ''),
(67, 'pizzacompany', '1 แถม 1 พิซซ่าคลาสสิค ถาดกลาง ขอบชีส', 499, 'https://d1sag4ddilekf6.cloudfront.net/item/THITE20210224083644019837/photos/b3483d8f3628456f9500679cc369978a_1615174846999864204.jpeg', ''),
(68, 'pizzacompany', '1 แถม 1 พิซซ่าเดอลุกซ์ ถาดกลาง ขอบชีส', 539, 'https://d1sag4ddilekf6.cloudfront.net/item/THITE20210224083426012818/photos/2f32870af4a24fc296a88b36f788b615_1615174862316765154.jpeg', ''),
(69, 'pizzacompany', '1 แถม 1 พิซซ่าซีฟู้ด ถาดกลาง ขอบชีส', 599, 'https://d1sag4ddilekf6.cloudfront.net/item/THITE20210224082349015954/photos/12ea42af8f074db8880a4d52c055dcd2_1615174876499915617.jpeg', ''),
(70, 'pizzacompany', 'มาการ์ริตา พิซซ่า', 299, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THGFIST0000029w-C2DJUGCWTATETX/photo/bdb423cb8e734f328c0b0f14b87d840f_1606889853841068709.jpg', ''),
(71, 'pizzacompany', 'พิซซ่า ชีสเบอเกอร์', 499, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THGFIST0000029w-C2DJUGCTRXNWBA/photo/09f919841468430388c98c9d6f0adfb4_1606889850797253719.jpg', ''),
(72, 'pizzacompany', 'ซีซาร์สลัด', 139, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THGFIST0000029w-C2DJUGCZMFEUPA/photo/fc5243436c03494992d2dc419cb23466_1606889856631113476.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `ordered_id` int(5) NOT NULL,
  `menu_pic` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `number` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `totalprice_rate` int(11) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deliver_firstname` varchar(255) NOT NULL,
  `deliver_lastname` varchar(255) NOT NULL,
  `c_username` varchar(255) NOT NULL,
  `c_firstname` varchar(255) NOT NULL,
  `c_lastname` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordered`
--

INSERT INTO `ordered` (`ordered_id`, `menu_pic`, `menu_name`, `price`, `number`, `rate`, `totalprice`, `totalprice_rate`, `shopname`, `status`, `deliver_firstname`, `deliver_lastname`, `c_username`, `c_firstname`, `c_lastname`, `c_address`) VALUES
(104, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210309105811010403/photo/11eb771069c84206bd6ec7d058df35b2_1615287491048225494.jpg', ' à¹ƒà¸«à¸¡à¹ˆ! à¸Šà¸¸à¸”à¹à¸žà¸¥à¸™à¸•à¹Œà¹€à¸šà¸ª à¸§à¸­à¸›à¹€à¸›à¸­à¸£à¹Œ', 249, '1698691124260401', 40, 249, 289, 'BurgerKing', 'delivered', 'burgur', 'king', 'test', 'firstname', 'lastname', 'ladprow'),
(105, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THGFIST000005g2-CY6ETPD2FAXZVX/photo/ff9be8e368b340ae8e3b39351e389ecc_1581481443717866979.jpg', ' à¸Šà¸¸à¸”à¹€à¸­à¹‡à¸à¸‹à¹Œà¸•à¸£à¹‰à¸²à¸¥à¸­à¸‡ à¸Šà¸´à¸à¹€à¸à¹‰à¸™ à¸Šà¸µà¸ª 1 à¹à¸–à¸¡ 1', 285, '1698691137922468', 60, 520, 580, 'BurgerKing', 'cooking', '', '', 'test', 'firstname', 'lastname', 'ladprow'),
(106, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THGFIST000005g2-CY6ETPD1TAEVSA/photo/f84bc26047b0447f86e7eed6c595cdb3_1579790554097827323.jpg', ' à¸Šà¸¸à¸”à¸‚à¸™à¸²à¸”à¹ƒà¸«à¸à¹ˆ à¹„à¸à¹ˆà¸à¸£à¸­à¸šBurgerBBQà¸Šà¸µà¸ª 1 à¸Šà¸¸à¸” 1 à¹à¸–à¸¡ 1', 235, '1698691137922468', 60, 520, 580, 'BurgerKing', 'cooking', '', '', 'test', 'firstname', 'lastname', 'ladprow'),
(107, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210422050525014028/photo/08629652782c417c958d26e83f0ef2c7_1619067923704510781.jpeg', ' à¸¡à¸´à¸”à¹„à¸™à¸—à¹Œ à¸šà¸£à¸²à¸§à¸™à¸µà¸ªà¹Œ à¸”à¸µà¹„à¸­à¸§à¸²à¸¢ à¹€à¸‹à¸•', 219, '1698768125480163', 100, 2375, 2475, 'Swensen', 'notready', '', '', 'test', 'firstname', 'lastname', 'ladprow'),
(108, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20210422050449011399/photo/a89f1e891f854420997499f75986c4c1_1619067882484418472.jpeg', ' à¸„à¸¸à¸à¸à¸µà¹‰ à¹à¸­à¸™à¸”à¹Œ à¸„à¸£à¸µà¸¡ à¸”à¸µà¹„à¸­à¸§à¸²à¸¢ à¹€à¸‹à¸•', 219, '1698768125480163', 100, 2375, 2475, 'Swensen', 'notready', '', '', 'test', 'firstname', 'lastname', 'ladprow'),
(109, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200515083733021309/photo/4c95e2cc94624bd1bafa747a1ea3c50d_1589531853396973828.jpg', ' à¹€à¸§à¸£à¸µà¹ˆ à¸ªà¸•à¸£à¸­à¸§à¹Œà¹€à¸šà¸­à¸£à¹Œà¸£à¸µ - 1.5 à¸›à¸­à¸™à¸”à¹Œ', 529, '1698768125480163', 100, 2375, 2475, 'Swensen', 'notready', '', '', 'test', 'firstname', 'lastname', 'ladprow'),
(110, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200515083733030416/photo/d99ea926f357435b841b28a9b3aab64b_1589531853733691090.jpg', ' à¸Šà¹‡à¸­à¸à¹‚à¸ à¹‚à¸­à¸£à¸µà¹‚à¸­ - 1.5 à¸›à¸­à¸™à¸”à¹Œ', 529, '1698768125480163', 100, 2375, 2475, 'Swensen', 'notready', '', '', 'test', 'firstname', 'lastname', 'ladprow'),
(111, 'https://d1sag4ddilekf6.cloudfront.net/compressed/items/THITE20200515083732021743/photo/b53610d8e5eb4a45ad5a61c974672715_1589531852474667534.jpg', ' à¸—à¸£à¸´à¸›à¹€à¸›à¸´à¹‰à¸¥ à¹€à¸Ÿà¸¥à¹Œà¹€à¸§à¸­à¸£à¹Œ - 3 à¸›à¸­à¸™à¸”à¹Œ', 879, '1698768125480163', 100, 2375, 2475, 'Swensen', 'notready', '', '', 'test', 'firstname', 'lastname', 'ladprow');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Smart Watch', '<p>Unique watch made with stainless steel, ideal for those that prefer interative watches.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Powered by Android with built-in apps.</li>\r\n<li>Adjustable to fit most.</li>\r\n<li>Long battery life, continuous wear for up to 2 days.</li>\r\n<li>Lightweight design, comfort on your wrist.</li>\r\n</ul>', '29.99', '0.00', 10, 'watch.jpg', '2019-03-13 17:55:22'),
(2, 'Wallet', '', '14.99', '19.99', 34, 'wallet.jpg', '2019-03-13 18:52:49'),
(3, 'Headphones', '', '19.99', '0.00', 23, 'headphones.jpg', '2019-03-13 18:47:56'),
(4, 'Digital Camera', '', '69.99', '0.00', 7, 'camera.jpg', '2019-03-13 17:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `username`, `password`, `name`) VALUES
('1', 'testswensen', 'test', 'swensen'),
('2', 'testthecoffeeclub', 'test', 'thecoffeeclub'),
('3', 'testsizzler', 'sizzler', 'sizzler'),
('4', 'testsp', 'test', 's&p'),
('5', 'testpizzacompany', 'test', 'pizzacompany'),
('6', 'testdairyqueen', 'test', 'dairyqueen'),
('7', 'testburgerking', 'test', 'burgerking'),
('8', 'testbonchon', 'test', 'Bonchon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `cart_or` (`cart_or`);

--
-- Indexes for table `deliver`
--
ALTER TABLE `deliver`
  ADD UNIQUE KEY `deliver_id` (`deliver_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD UNIQUE KEY `order_id` (`ordered_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_or` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT for table `deliver`
--
ALTER TABLE `deliver`
  MODIFY `deliver_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `ordered_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
