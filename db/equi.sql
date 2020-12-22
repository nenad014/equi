-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 09:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'equi_admin', 'd79edd46d1cc935f49affcdf02ea9c1d');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `post_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` longtext NOT NULL,
  `cover_img` varchar(250) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`post_id`, `title`, `body`, `cover_img`, `created`) VALUES
(1, 'Sajam mode Pure London', 'Pure London je najveći modni događaj u Velikoj Britaniji i jedan od najvećih sajmova mode u Evropi. Ove godine, od 10 do 12. februara, brend EQUI biće jedan od izlagaća sa kolekcijom Jesen/zima 2019/20.', 'uploads/equi_at_pure.jpg', '2019-01-23'),
(2, 'Predavanje \"Fashion Revolution Voices\"', '<p>Jedan od najboljih načina da podignemo svest o problemima unutar modne industrije je i kroz predavanja stručnjaka iz sveta mode koji se zalažu za iste vrednosti kao i na&scaron;a organizacija.<br />\r\n<br />\r\nU okviru Mixer Festivala, Fashion Revolution je organizovao &quot;Fashion Revolution Voices&quot;, tri predavanja kroz koja su se osnivači održivih domaćih modnih brendova obratili posetiocima i pojasnili svoje viđenje održivog poslovanja.<br />\r\n<br />\r\nPredavanja su bila namenjena svima koji su zainteresovani da saznaju koja inovativna re&scaron;enja su ove tri kompanije ponudile na domaćem i inostranom trži&scaron;tu, i na taj način pokazale da je održivost u modi moguća i u Srbiji. Predavanja su održana 25. maja, u Staklenoj sali Muzeja nauke i tehnike.&nbsp;</p>\r\n\r\n<p><a href=\"https://1.bp.blogspot.com/-rtXps_Ah48I/XQSQ9aEGGcI/AAAAAAAAAfY/ci3-V7GmgMkANTFj2Hs1a81jcCUbtdSVACLcBGAs/s1600/Fashion%2BRevolution%2Bpredavanje%2BBR%2B3.%2BINSTA%2BPOST.png\"><img src=\"https://1.bp.blogspot.com/-rtXps_Ah48I/XQSQ9aEGGcI/AAAAAAAAAfY/ci3-V7GmgMkANTFj2Hs1a81jcCUbtdSVACLcBGAs/s723/Fashion%2BRevolution%2Bpredavanje%2BBR%2B3.%2BINSTA%2BPOST.png\" style=\"width:723px\" /></a></p>\r\n\r\n<p><a href=\"https://1.bp.blogspot.com/-zjv2vOOv4_w/XQSQ9LqiCOI/AAAAAAAAAfU/7UjmVBoIMsApZ4TCf5F3qvRW3sjSUMEMgCLcBGAs/s1600/Screenshot_20190614-182806_Instagram.jpg\"><img src=\"https://1.bp.blogspot.com/-zjv2vOOv4_w/XQSQ9LqiCOI/AAAAAAAAAfU/7UjmVBoIMsApZ4TCf5F3qvRW3sjSUMEMgCLcBGAs/s929/Screenshot_20190614-182806_Instagram.jpg\" style=\"width:723px\" /></a></p>\r\n', 'uploads/fashion_revolution_predavanje.png', '2019-06-23'),
(3, 'EQUI u \"FAB Living by Una\" concept store', '<p>Od danas je na obostrano zadovoljstvo zvanično otpočela saradnja brenda EQUI sa&nbsp;<strong>&quot;FAB Living by Una&quot; concept store-om</strong>. Od sad u ulici Krunskoj 50 u Beogradu, u prelepom ambijentu koji nudi autentičan doživljaj kupovine možete naći najatraktivnije EQUI modele.</p>\r\n\r\n<p>Vidimo se na Vračaru!</p>\r\n', 'uploads/equi_by_ljv.jpg', '2019-09-26'),
(4, 'Dobrodošli na EQUI online shop', '<p>Od sada, na&scaron;i modeli su na jedan klik od Vas. Dostupni smo u celoj Evropi, SAD-u, Kanadi i naravno, Srbiji. Dostava putem Po&scaron;te je sigurna i brza a za kupce iz Srbije je besplatna!&nbsp;</p>\r\n\r\n<p>Uživajte u kupovini!</p>\r\n', 'uploads/online_shop_equi.jpg', '2019-10-24'),
(5, 'Idealna haljina', '<p>Zavidim dizajnerima koji kreiraju kud ih masta vodi. Ja sam se opredelila da obucem ove na&scaron;e žene a one imaju konkretne živote i konkretne zahteve.</p>\r\n\r\n<p>Kaže mi jedna prijateljica kako ide na svadbu a nema haljinu. Kaže, ne bi da bude crna, da ne uvredi domaćine, da ne bude bela da ne konkuri&scaron;e mladi, da ne bude tesna da ne kipi sve, da nije mnogo kratka, ipak ne priliči godinama a i da nije previ&scaron;e dekoltirana da ne liči na pevačicu. Ali mora da bude extra!</p>\r\n\r\n<p>Engleski pesnik romantičar Džon Kits u čuvenoj &quot;Odi grčkoj urni&quot; je, opisujući izgravirane prizore na vazi, izrazio svoja osećanja i ideje o doživljaju imaginarnog sveta umetnosti u kontrastu sa stvarnim životom. Svet umetnosti možemo smatrati idealnim i večnim, u predjenju sa realnim. Nečujna muzika svirača sa vaze koju osećamo će uvek biti sladja od svake muzike koju čujemo jer zauvek ostaje u na&scaron;oj ma&scaron;ti.</p>\r\n\r\n<p>U modi je isto.. Svaka haljina u na&scaron;oj ma&scaron;ti nosi ideal lepote, zami&scaron;ljene proporcije i savr&scaron;enstvo tela koga obavija. Ali pretvoriti je u stvarnost koja će dati isti osećaj... je li to nemoguća misija? Da li približavanje tom idealu čini dizajnera dobrim i uspe&scaron;nim?</p>\r\n\r\n<p>Sa muzikom u sebi krenimo u nove pobede...</p>\r\n', 'uploads/uspavana_lepotica.jpg', '2019-12-08'),
(11, 'Obaveštenje', '<p>Drage dame,</p>\r\n\r\n<p>U skladu sa epidemiolo&scaron;kim merama koje su stupile na snagu u vezi okupljanja do 5 osoba u zatvorenom prostoru, želimo da vam skrenemo pažnju na&nbsp; izmenjen režim rada showroom-a EQUI brenda. Kako biste imali priliku da probate na&scaron;e modele, neophodno je da nas kontaktirate i zakažete termin svog dolaska.</p>\r\n\r\n<p>Možete nas kontaktirati putem:</p>\r\n\r\n<p><strong>Telefona:</strong>&nbsp; &nbsp;+381641515230</p>\r\n\r\n<p><strong>FB stranice:</strong>&nbsp;&nbsp;<a href=\"https://www.facebook.com/equi.serbia\">https://www.facebook.com/equi.serbia</a></p>\r\n\r\n<p><strong>Instagrama:</strong>&nbsp;&nbsp;<a href=\"https://www.instagram.com/equi.serbia\">https://www.instagram.com/equi.serbia</a></p>\r\n\r\n<p><strong>Email-a:</strong>&nbsp;&nbsp;<a href=\"mailto:equi.serbia@gmail.com\">equi.serbia@gmail.com</a></p>\r\n\r\n<p>U slučaju da vam nije neohpodan dolazak u EQUI showroom, svoju kupovinu možete nastaviti putem na&scaron;eg online shop-a.</p>\r\n\r\n<p>Vidimo se,<br />\r\nEQUI<em>&nbsp;tim</em></p>\r\n', 'uploads/equi-obavestenje.jpg', '2020-11-10'),
(12, 'MATERIJALI – ŠTA TREBA DA ZNATE', '<p>Da li spadate u one kupce koji svaku stvar izvrnu da nađu etiketu gde pi&scaron;e sastav materijala? Da li kupite stvar bez obzira &scaron;ta pročitate na njoj?</p>\r\n\r\n<p>U mno&scaron;tvu tekstilne robe koja se danas može naći u na&scaron;im prodavnicama vi birate ono &scaron;to zadovoljava&nbsp; va&scaron;e kriterijume. Najpre nam oko traži i odabira ono &scaron;to volimo ili ono &scaron;to smo već negde videli kao popularno i to tražimo (zato postoji marketing). Sledeća je boja koja nas pridobija. Tad se ruka hvata za ve&scaron;alicu i najpre odokativno odmeravate model tj. kroj a onda opipavate materijal. Ako to &bdquo;prođe&ldquo;, sledeće je da pogledate sastav materijala i tek onda odlučujete da probate komad.</p>\r\n\r\n<p><strong>Ali &scaron;ta zapravo tražimo od etikete i &scaron;ta nam znači ono &scaron;to pročitamo?</strong></p>\r\n\r\n<p>Nije za očekivati da prosečan kupac zna mnogo o tekstilu i tekstilnim vlaknima. Ipak, većina to pažljivo gleda. Prihvaćeno je mi&scaron;ljenje da postoje prirodni i ve&scaron;tački materijali i to je mnogima osnovni argument pri kupovini. Smatra se da ako je<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-mini-skirt/p/255399251/category=63284004\" target=\"_blank\">&nbsp;prirodni materijal</a>&nbsp;on će biti prijatniji, zdraviji i kvalitetniji. &bdquo;Ve&scaron;tački&ldquo; materijali, ili kako se jo&scaron;&nbsp; popularno (i često pogre&scaron;no) zovu &bdquo;sintetika&ldquo; nisu mnogo omiljeni jer se smatra da u njima koža ne &bdquo;di&scaron;e&ldquo;.</p>\r\n\r\n<p><strong>&Scaron;ta je zapravo tačno?</strong></p>\r\n\r\n<p>Ono &scaron;to svako može da primeti je da se materijali razlikuju po sezonama. U sezoni proleće-leto preovladjuju pamuk, lan&nbsp; i viskoza.&nbsp;<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-cotton-shirt/p/254982878/category=63284004\" target=\"_blank\">Pamuk</a>&nbsp;je potpuno&nbsp;<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-mini-skirt/p/255399251/category=63284004\" target=\"_blank\">prirodan materijal&nbsp;</a>i kao takav nezamenljiv. Lan takođe raste u prirodi i veoma je no&scaron;en zbog sposobnosti absorpcije. Viskoza je poznata kao prirodni materijal ali mnogi ne znaju da kao takav ne postoji u prirodi. On se hemijskim putem dobija iz celuloze ili otpada od pamuka.&nbsp; Svi su oni popularni jer se od njih prave lagane i prozračne tkanine koje imaju moć upijanja, &scaron;to je prednost u toplim danima.</p>\r\n\r\n<p>Ovi materijali nisu zastupljeni u<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/OUTLET/c/63284004\" target=\"_blank\">&nbsp;zimskim kolekcijama</a>&nbsp;jer nemaju termalna svojstva. Oni se nose do tela (majice, ve&scaron;, ko&scaron;ulje..) ali ne čine sezonsku zimsku odeću. Zimi je najpopularnija&nbsp;<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-wool-coat/p/258784943/category=63070085\" target=\"_blank\">vuna</a>&nbsp;i ona dugo bila osnova zimskih materijala. Ona je dobar izolator, čuva toplotu (ali i &scaron;titi od nje) i ima mnogo drugih dobrih osobina, čak je smatraju i lekovitom.</p>\r\n\r\n<p>No, prirodni materijali, pored dobrih osobina, imaju i mnoge nedostatke. Mnogo se skupljaju,&nbsp;peckaju, grebu, nisu otporni na visoke temperature, te&scaron;ko se održavaju i sl. Zato kad kupujete viskozu, računajte da se može skupiti čitav jedan broj,&nbsp;<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-wool-coat/p/258784943/category=63070085\" target=\"_blank\">vuna</a>&nbsp;čak dva, lan se gužva, nisu elastični i sl. Svila, recimo, iako prefinjen i veoma cenjen materijal, formira tako gusto tkanje da uop&scaron;te ne propu&scaron;ta vazduh. Nije čudno &scaron;to se koristi za izradu padobrana.</p>\r\n\r\n<p>E tu sad uskaču ve&scaron;tačka vlakna. Iako tkanine od čistog poliestera i sličnih ve&scaron;tačkih vlakana mogu biti manje prijatne za no&scaron;enje, one poseduju izuzetna svojstva pri održavanju, lako se peru, manje gužvaju, ne skupljaju se i nisu skupe za proizvodnju. Tako se do&scaron;lo na ideju da se prirodna i ve&scaron;tačka vlakna spoje i da se dobiju tkanine koje imaju sva najbolja svojstva od oba. Tako smo&nbsp;<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-cotton-shirt/p/254982878/category=63284004\" target=\"_blank\">pamuk,</a>&nbsp;dodajući&nbsp;<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-mini-golden-dress/p/255296943/category=63284004\" target=\"_blank\">elastin/likru</a>,&nbsp; učinili elastičnim,&nbsp;<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-wool-coat/p/258784943/category=63070085\" target=\"_blank\">vunu</a>&nbsp;i lan manje grubom i sl. &bdquo;Me&scaron;avine&ldquo; se manje skupljaju, lak&scaron;e peru, lak&scaron;e peglaju, bolje stoje uz telo, duže traju a i dalje zadržavaju sva ona dobra svojstva prirodnih materijala. &bdquo;Zimski&ldquo; materijali naročito se sve vi&scaron;e prave od me&scaron;ovitih vlakana jer se obično ne nose uz telo a dosta su jeftiniji za proizvodnju. Ako jo&scaron; uzmemo u obzir da su tehnike obrade i dorade tekstila značajno uznapredovale, veoma je te&scaron;ko opipom otkriti koje tkanine nisu od prirodnih vlakana. Mekoća&nbsp;i&nbsp;<a href=\"https://www.equi.studio/p/online-shop-equi.html#!/EQUI-suede-mini-dress/p/154857820/category=63284004\" target=\"_blank\">prijatnost na dodir&nbsp;</a>je danas postalo svojstvo mnogih ve&scaron;tačkih tkanina i zato preuzimaju primat u svetskoj tekstilnoj industriji.</p>\r\n\r\n<p>Na žalost, na&scaron;e trži&scaron;te je preplavljeno dosta lo&scaron;im materijalima, mahom poliesterskim. Vuna se može naći samo u tragovima i ne retko ćete se iznenaditi čitajući etiketu o sastavu. Džemperi jedva da sadrže neki procenat dok &scaron;tofovi za kapute mogu biti potpuno bez vune. Naravno i cena im je niska. Dok se po na&scaron;im selima vuna baca, mi uvozimo jeftine, nekvalitetne proizvode velikih industrija. Sve je uslovljeno&nbsp;ekonomskim faktorima i sve je globalno.&nbsp;</p>\r\n', 'uploads/sastav-materijala-garderobe.jpg', '2020-11-16'),
(13, 'ODEĆA SA OFINGERA', '<p>Mnogi od vas će se setiti vremena kupovine u robnim kućama gde se i&scaron;lo u kupovinu odeće sezonski i kad vam je ne&scaron;to ba&scaron; potrebno za neku priliku. Majke sa decom pred početak &scaron;kolske godine, i mu&scaron;ko i žensko (vi&scaron;e žensko) pred proslavu firme, pred Novu godinu, na početku proleća, pred godi&scaron;nji odmor... &bdquo;Robne kuće Beograd&ldquo;, &bdquo;Kluz&ldquo;, Jugoexport&ldquo;, &bdquo;Centrotextil&ldquo;...gde god uđete, &scaron;tenderi sa odećom razvrstanom po veličinama koja uredno stoji kao vojska &bdquo;u stavu mirno&ldquo;. &Scaron;etate kroz redove, gledate, pažljivo pipate i sa izvinjenjem u glasu (u strahu da ste ne&scaron;to poremetili) pitate prodavca da li možete da probate ne&scaron;to. Uzimate samo jedan komad a strogi prodavac vas upućuje na kabine i bolje bi vam bilo da vam odgovara. Ako ipak odlučite da ne kupite, odeću uredno vraćate na ofinger i nosite na &scaron;tender odakle ste uzeli. U najboljem slučaju, važi za manje radnje, dodajete prodavcu iza pulta uz izvinjenje, opet.</p>\r\n\r\n<p>Ako se zateknete u radnji kad stiže roba, mogli ste da vidite prodavce kako žurno unose robu na ofingerima. Skuplja roba je imala &bdquo;najlon&ldquo; preko, dok se &bdquo;obična&ldquo; konfekcija donosila bez kese. Kesa je bila dragocena, nije se davala za sve i sva&scaron;ta,&nbsp;&scaron;to je važilo čak i za hleb u samousluzi koji smo dobijali &bdquo;klot&ldquo;. Kese se nisu razbacivale, roba se kupcu najče&scaron;će pakovala u papir sa logom prodavnice a prodavci su ga&nbsp;lepile selotejpom tako ve&scaron;to kao da se to učilo u &scaron;koli.</p>\r\n\r\n<p>3....2....1.... možete se vratiti u stvarnost.</p>\r\n\r\n<p>Ogromni tržni centri, prostrane radnje pretrpane zgužvanom robom. Zgužvanom, jer stiže u velikim kutijama i kesama iz centralnih&nbsp; magacina velikih konfekcijskih kuća a u njih je do&scaron;la iz proizvodnji u Banglade&scaron;u, Vijetnamu, Kini&nbsp; i putuje mesecima nabijena da &scaron;to vi&scaron;e stane u transportni kontejner. Masovna proizvodnja uslovljava da u radnjama budu prepuni &scaron;tenderi&nbsp; odevnih komada koji se jedva mogu razmaknuti da nađete svoj broj. Bar po jedna stvar spala sa ve&scaron;alice leži na podu. Niko ne digne, svako zgazi. Kupci uzimaju pune ruke, koliko god je dozvoljeno, i nose u kabine da probaju. Često ne kupe ni&scaron;ta, samo probaju, da ubiju vreme. Sve &scaron;to skinu bace ispred kabine ili ostave u istoj na čiviluku.&nbsp;Otvorena su nova radna mesta, nova zanimanja slagača robe koji ne mogu da postignu da rasklone i poslažu za razmaženim kupcem.&nbsp; A prodavac na &ldquo;minimalcu&rdquo; tretira se kao sluga kupcu jer sve je kupcu podređeno. Samo da kupi!</p>\r\n\r\n<p>Strahopo&scaron;tovanje prema prodavcu, kao simbol socijalne ravnopravnosti pro&scaron;log vremena&nbsp; danas je samo sećanje sve malobrojnijih. Nekad su nas decu učili da po&scaron;tujemo svačiji rad, da kad neko uloži trud u ne&scaron;to, ko si ti da to kvari&scaron;. Ako je prodavac uredno naređao, ne sme&scaron;&nbsp; da se bahati&scaron; već da po&scaron;tuje&scaron; i zamoli&scaron;. I taj prodavac je imao stav, iako mu je usluživanje posao, nije se tolerisalo &bdquo;zakeranje&ldquo;. A i te kako se po&scaron;tovala roba jer je to s mukom izradio vredni skromni radnik koji time hrani porodicu. I zato je roba na ofingeru...</p>\r\n', 'uploads/Odeca_na_ofingeru.jpg', '2020-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'Haljine', 'assets/images/haljine.jpg'),
(2, 'Suknje', 'assets/images/suknje.jpg'),
(3, 'Pantalone', 'assets/images/pantalone.jpg'),
(4, 'Jakne i kaputi', 'assets/images/jakne_i_kaputi.jpg'),
(5, 'Bluze', 'assets/images/bluze.jpg'),
(9, 'Svečane haljine', 'assets/images/svecane_haljine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(50) NOT NULL,
  `color_hex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`, `color_hex`) VALUES
(1, 'Crna', '#212121'),
(2, 'Crvena', '#e53935'),
(3, 'Narandžasta', '#fb8c00'),
(4, 'Pink', '#ff80ab'),
(5, 'Plava', '#0d47a1'),
(6, 'Šampanj', '#f7e7ce'),
(7, 'Siva', '#9e9e9e'),
(8, 'Tirkizna ', '#40E0D0'),
(9, 'Zlatna', '#FFD700'),
(10, 'Žuta', '#ffeb3b');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `name`, `email`, `comment`, `created`) VALUES
(1, 5, 'Marko', 'marko@gmail.com', 'Test komentara.', '2020-11-02 04:20:00'),
(2, 3, 'Danilo', 'danilo@gmail.com', 'Jos jedna proba komentara.', '2020-11-02 04:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `delivery_address` varchar(200) DEFAULT NULL,
  `payment` varchar(50) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `products` text NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `grand_total` varchar(50) NOT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `invoice_no`, `fname`, `lname`, `email`, `phone`, `address`, `delivery_address`, `payment`, `item_id`, `products`, `size`, `color`, `quantity`, `grand_total`, `created`) VALUES
(7, 1, 'equi_268930978', 'Nenad', 'Nikolić', 'nendn.dizajn@gmail.com', '0642781563', 'Vlade Danilovića 1/1, Valjevo', 'Vlade Danilovića 1/1, Valjevo', 'Uplatnica', '49 ', 'Mini suknja ', '38 ', 'Zlatna ', '1 ', '3,250.00', '2020-11-22'),
(8, 1, 'equi_2146452833', 'Nenad', 'Nikolić', 'nendn.dizajn@gmail.com', '0642781563', 'Vlade Danilovića 1/1, Valjevo', 'Vlade Danilovića 1/1, Valjevo', 'Pouzeće', '46 ', 'Suknja od tvida ', '40 ', 'Siva ', '2 ', '7,980.00', '2020-11-22'),
(9, 1, 'equi_1827906154', 'Nenad', 'Nikolić', 'nendn.dizajn@gmail.com', '0642781563', 'Vlade Danilovića 1/1, Valjevo', 'Vlade Danilovića 1/1, Valjevo', 'Pouzeće', '70 69 ', 'Haljina od tvida,Vuneni kaput ', '38 38 ', 'Crna Crna ', '1 2 ', '102,990.00', '2020-11-29'),
(10, 1, 'equi_59535371', 'Nenad', 'Nikolić', 'nendn.dizajn@gmail.com', '0642781563', 'Vlade Danilovića 1/1, Valjevo', 'Vlade Danilovića 1/1, Valjevo', 'Uplatnica', '49 15 47 23 ', 'Mini suknja,Duga u010dipkasta haljina,Suknja sa u010dipkom,Haljina od tafta,', '38 40 38 Unikat ', 'Zlatna Crna Zlatna Pink ', '1 1 1 1 ', '43,220.00', '2020-12-05'),
(11, 1, 'equi_1852950223', 'Nenad', 'Nikolić', 'nendn.dizajn@gmail.com', '0642781563', 'Vlade Danilovića 1/1, Valjevo', 'Vlade Danilovića 1/1, Valjevo', 'Pouzeće', '73 ', 'Haljina od trikotau017ee u pastelnim bojama ', 'L ', 'Tirkizna ', '1 ', '12,490.00', '2020-12-08'),
(12, 1, 'equi_1100829154', 'Nenad', 'Nikolić', 'nendn.dizajn@gmail.com', '0642781563', 'Vlade Danilovića 1/1, Valjevo', 'Vlade Danilovića 1/1, Valjevo', 'Uplatnica', '52 13 ', 'Suknja od tvida, Duga pliu0161ana haljina, ', 'M M ', 'Siva Plava ', '1 1 ', '27,390.00', '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `outlet_price` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `color` varchar(50) NOT NULL,
  `cover_img` varchar(50) NOT NULL,
  `img_2` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `outlet` tinyint(1) NOT NULL,
  `cat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `outlet_price`, `size`, `color`, `cover_img`, `img_2`, `status`, `outlet`, `cat_id`) VALUES
(1, 'Mini suknja', '<b>Mini suknja od eko-kože.</b>  Ručni rad. Unikat.', '9999.00', NULL, 'M', 'Crna', 'uploads/mini_skirt_1.jpg', 'uploads/mini_skirt_2.jpg', 'Na zalihama', 0, 2),
(2, 'Sirena pantalone', '<b>Uske \"sirena\" pantalone.</b> Ručni rad. Materijal je trikotaža sa premazom, imitacija kože, veoma prijatan i lagan.', '18499.00', NULL, 'M', 'Crna', 'uploads/mermaid_pants_1.jpg', 'uploads/mermaid_pants_2.jpg', 'Na zalihama', 0, 3),
(3, 'Jahaće pantalone', '<b>\"Jahaće\" pantalone sa ručno rađenim \"žabicama\" sa strane.</b> Materijal je trikotaža sa sjajnim premazom i izgledom kože.', '18499.00', NULL, 'M', 'Crna', 'uploads/riding_breeches_pants_1.jpg', 'uploads/riding_breeches_pants_2.jpg', 'Na zalihama', 0, 3),
(4, 'Sirena suknja', '<b>Suknja \"sirena\" oblika.</b> Ručno rađene \"žabice\" sa prednje i zadnje strane. Midi dužina. Materijal je trikotaža sa sjajnim premazom, imitacija kože.', '16499.00', NULL, 'M', 'Crna', 'uploads/mermaid_skirt_1.jpg', 'uploads/mermaid_skirt_2.jpg', 'Na zalihama', 0, 2),
(5, 'Elegantna suknja', '<b>Elegantna suknja od lamiranog žakar tkanja sa čipkom i ručno vezenim kristalnim perlama.</b> Unikat.', '19999.00', NULL, 'M', 'Siva ', 'uploads/elegant_skirt_1.jpg', 'uploads/elegant_skirt_2.jpg', 'Na zalihama', 0, 2),
(6, 'Crna haljina', '<b>Haljina sa niskim pojasom</b>, zaštitini znak EQUI brenda. Sakriva sitne nedostatke. Dužina do kolena.\r\n<br>\r\nDiorus tkanina', '16999.00', NULL, 'M L', 'Crna', 'uploads/black_dress_1.jpg', 'uploads/black_dress_2.jpg', 'Na zalihama', 0, 1),
(7, 'Vest haljina', '<b>Vamp mini haljina u kombinaciji pliša, šljokica i satena.</b> Mrežasta duga rolka je opciona. Izuzetno elegantna i svečana', '16999.00', NULL, '', 'Crna', 'uploads/vest_dress_1.jpg', 'uploads/vest_dress_2.jpg', 'Na zalihama', 0, 9),
(8, 'Jakna sa rajsferšlusima', '<b>Kratka jakna od \"šanel\" štofa sa lameom u kombinaciji sa eko-kožom i metalnim rajsferšlusima.</b> Elegantna i trendi. Savršeno ide kako uz elegantni outfit, tako i uz džins.<br>\r\nOgraničeno izdanje, \"Statement\" kolekcija.', '16999.00', NULL, 'M L', 'Plava ', 'uploads/jacket_with_zippers_1.jpg', 'uploads/jacket_with_zippers_2.jpg', 'Na zalihama', 0, 4),
(9, 'Haljina sa niskim strukom', '<b>Haljina od \"šanel\" lamiranog štofa sa niskim pojasom od eko-kože.</b> Ovaj kroj je zaštitni znak brenda.', '16999.00', NULL, 'M L', 'Plava ', 'uploads/low-waist_dress_1.jpg', 'uploads/low-waist_dress_2.jpg', 'Na zalihama', 0, 9),
(10, 'Plišani kaput', '<p><strong>Pli&scaron;ani kaput na preklop od tirkizno plavog pli&scaron;a.</strong> Tapaciran sa ukrasnim dugmetima. Unikat</p>\r\n', '35499.00', NULL, 'Unikat ', 'Plava', 'uploads/velvet_coat_1.jpg', 'uploads/1172417342.jpg', 'Na zalihama', 0, 4),
(11, 'Midi plišana haljina', '<p><strong>Midi haljina uz telo od pli&scaron;a sa elastinom.</strong> Veoma prijatna i udobna. Savrsena zimska haljina</p>\r\n', '10499.00', NULL, 'M ', 'Šampanj ', 'uploads/1188567127.jpg', 'uploads/1188566427.jpg', 'Na zalihama', 0, 1),
(12, 'Duga plišana haljina sa perlicama', '<p><strong>Duga pli&scaron;anja haljina bez bratela sa kristalnim perlicama.</strong> Veoma elegantna haljina. Boja kraljevsko plava sa prelivima u crnu na krajevima. Ukrasni kanap uključen u cenu. Unikat. Ručni rad.</p>\r\n', '29999.00', NULL, 'Unikat ', 'Plava', 'uploads/1189850409.jpg', 'uploads/1189851420.jpg', 'Na zalihama', 0, 9),
(13, 'Duga plišana haljina', '<p><strong>Duga pli&scaron;anja haljina sa kristalnim perlicama na pojasu.</strong> Veoma elegantna haljina. Boja kraljevsko plava sa prelivima u crnu na krajevima. Unikat. Ručni rad.</p>\r\n', '22900.00', NULL, 'M ', 'Plava', 'uploads/1728083121.jpg', 'uploads/1720114512.jpg', 'Na zalihama', 0, 9),
(14, 'EQUI kombinezon', '<p><strong>Kombinezon od čipke sa kožnim prugama.</strong> Donji deo od pamučnog satena. Izdužuje figuru i pravi tanak struk. Unikat.</p>\r\n', '11999.00', NULL, 'M ', 'Crna', 'uploads/1171421449.jpg', 'uploads/1172420245.jpg', 'Na zalihama', 0, 3),
(15, 'Duga čipkasta haljina', '<p><strong>Duga većernja haljina od francuske čipke sa karnerima i pli&scaron;anim gornjim delom.</strong> Čipkasti deo je providan</p>\r\n\r\n<p>Pojas (2500 din) nije obavezan.</p>\r\n', '18990.00', NULL, 'M ', 'Crna', 'uploads/1189851317.jpg', 'uploads/1172414975.jpg', 'Na zalihama', 0, 9),
(16, 'Čipkasta haljina', '<p><strong>Haljina bez ramena sa mrežastom rolkom.</strong> Haljina A-kroja od satenske čipke sa &scaron;ljokicama, dužina do kolena. Mrežasta rolka je deo 2-u-1 seta. Unikat, revijski model.</p>\r\n', '14990.00', NULL, 'M ', 'Crna', 'uploads/1189847556.jpg', 'uploads/1189849006.jpg', 'Na zalihama', 0, 9),
(17, 'Čipkasta haljina bez naramenica', '<p><strong>Elegantna mini haljina od fine satenske čipke vezene &scaron;ljokicama.</strong> Postavljena likrom boje kože. Kai&scaron; (3500 din)&nbsp;i beretka (1500 din) su opcione.</p>\r\n', '14990.00', NULL, 'Unikat', 'Crna', 'uploads/1189848665.jpg', 'uploads/1194146369.jpg', 'Na zalihama', 0, 9),
(18, 'Mrežasta bluza', '<p><strong>Mrežasta bluza sa printom i pli&scaron;anim naramenicama.</strong> Veoma dug rukav sa navlačenjem. Unikatan pli&scaron;ani print. Unikat.</p>\r\n', '8990.00', NULL, 'Unikat ', 'Crna', 'uploads/1208114808.jpg', 'uploads/1767248630.jpg', 'Na zalihama', 0, 5),
(19, 'Suknja od tvida', '<p><strong>Suknja od tvida sa eko-kožom.</strong> Veoma elegantna, za sve prilike.</p>\r\n', '9990.00', '4990.00', 'M L', 'Siva ', 'uploads/1199464978.jpg', 'uploads/1199466790.jpg', 'Na zalihama', 1, 2),
(20, 'Mini haljina od tvida', '<p><strong>Mini haljina od tvida sa detaljem od eko-kože.</strong> Prati liniju tela i reguli&scaron;e se kai&scaron;em na vezivanje. Za sve prilike.</p>\r\n', '9990.00', '4990.00', 'M L', 'Plava', 'uploads/1189852770.jpg', 'uploads/1189852787.jpg', 'Na zalihama', 1, 1),
(21, 'Haljina od eko-kože', '<p><strong>Haljina od eko-kože sa ukrasnim metalnim rajsfer&scaron;lusima.</strong> Ukrojena uz telo. Srednji deo je rupičast.</p>\r\n', '12999.00', NULL, 'M L', 'Crna', 'uploads/1189845796.jpg', 'uploads/1189847374.jpg', 'Na zalihama', 0, 1),
(22, 'Haljina od tvida sa niskim pojasom od eko-kože', '<p><strong>Haljina od tvida sa niskim pojasom od eko-kože</strong> sa ukrasnim metalnim rajsfer&scaron;lusima na pojasu i rukavima. Sakriva nedostatke u predelu struka. Dužina do kolena.</p>\r\n', '12999.00', NULL, 'M L', 'Siva', 'uploads/1189850915.jpg', 'uploads/1189851956.jpg', 'Na zalihama', 0, 1),
(23, 'Haljina od tafta', '<p><strong>Elegantna haljina bez ramena od pink ružičastog tafta.</strong> Unikat. Kai&scaron; (1000 din) i beretka (1000 din) opcioni.</p>\r\n', '11990.00', NULL, 'Unikat ', 'Pink ', 'uploads/1197684869.jpg', 'uploads/1189851881.jpg', 'Na zalihama', 0, 9),
(24, 'Mini haljina od antilopa', '<p><strong>Haljina od imitacije jelenske kože</strong> sa ukrasnim metalnim rasjfer&scaron;lusima. Veoma udobna i elastična.</p>\r\n', '11490.00', '5750.00', 'M L', 'Siva', 'uploads/1189850795.jpg', 'uploads/1189852638.jpg', 'Na zalihama', 1, 1),
(25, 'Kardigan', '<p><strong>EQUI double-face cardigan</strong>, with raw edges, longer front side with decorative safety pin.</p>\r\n\r\n<p>Nature beige and black sides, perfectly light and easy going with all kinds of outfit and every day occasions</p>\r\n\r\n<p>Kardigan sa dva lica za svaku priliku.</p>\r\n', '9490.00', '4750.00', 'M L', 'Crna', 'uploads/1188562925.jpg', 'uploads/1188563818.jpg', 'Na zalihama', 1, 4),
(26, 'Haljina od skuba', '<p><strong>Haljina od skuba materijala sa ukrasnim metalnim rajsfer&scaron;lusima i niskim pojasom.</strong> Veoma udobna. Savr&scaron;eno prikriva nedostatke tela. Dužina do kolena</p>\r\n', '12999.00', NULL, 'M L', 'Crna', 'uploads/1189852588.jpg', 'uploads/1189851763.jpg', 'Na zalihama', 0, 1),
(27, 'Plišana haljina', '<p><strong>Pli&scaron;ana haljina sa providnim rukavima i dekoracijom od perlica.</strong> A kroj. Dužina do kolena.</p>\r\n', '12990.00', NULL, 'M L', 'Crna', 'uploads/1728095946.jpg', 'uploads/1211912533.jpg', 'Na zalihama', 0, 9),
(28, 'Trikotažna haljina', '<p><strong>Haljina od trikotaže sa metalnim rajsfer&scaron;lusima na rukavima i na vrhu leđa.</strong> Za sve prilike.</p>\r\n', '12490.00', '6250.00', 'M ', 'Pink ', 'uploads/1173217395.jpg', 'uploads/1173217395 - 1.jpg', 'Na zalihama', 1, 1),
(29, 'Haljina od trikotaže', '<p><strong>Haljina od trikotaže sa gornjim delom od eko-kože.</strong> Midi dužina, prati liniju tela, udobna i trendi.</p>\r\n', '15990.00', NULL, 'M L', 'Crvena ', 'uploads/1189850515.jpg', 'uploads/1173145069.jpg', 'Na zalihama', 0, 1),
(30, 'Haljina od čvrste trikotaže sa čipkom', '<p><strong>Mini haljina od čvrste trikotaže sa čipkom i ukrasom od kože.</strong> Čvrst ali elastičan materijal oblikuje figuru tela.</p>\r\n', '10990.00', '5490.00', 'M L', 'Crvena ', 'uploads/1189850648.jpg', 'uploads/1189850679.jpg', 'Na zalihama', 1, 1),
(31, 'Jakna od tvida', '<p><strong>Jakna/sako od tvida sa donjim delom od eko-kože.</strong> Elegantan blejzer nosiv u svim prilikama i kombinacijama</p>\r\n', '9999.00', NULL, 'M L', 'Siva ', 'uploads/1197684979.jpg', 'uploads/1197684979.jpg', 'Na zalihama', 0, 4),
(32, 'Jakna od tvida sa crnom bordurom', '<p><strong>Jakna/sako od tvida sa crnom bordurom.</strong> Elegantan blejzer nosiv u svim prilikama i kombinacijama.</p>\r\n', '9990.00', '4990.00', 'M L', 'Siva ', 'uploads/1762385686.jpg', '', 'Na zalihama', 1, 4),
(33, 'Mini haljina od čvrste trikotaže sa čipkom', '<p><strong>Mini haljina od čvrste trikotaže sa čipkom i ukrasom od kože.</strong> Čvrst ali elastičan materijal oblikuje figuru tela.</p>\r\n', '10990.00', '5490.00', 'M L', 'Zlatna ', 'uploads/1765735472.jpg', 'uploads/1765740582.jpg', 'Na zalihama', 1, 1),
(34, 'Mini haljina u zlatno-bež boji', '<p>Mini haljina uz telo u zlatno-bež boji. Veoma prijatna i elastična.</p>\r\n\r\n<p>Materijal: pamuk</p>\r\n', '11990.00', '5990.00', 'M L', 'Zlatna ', 'uploads/1764620590.jpg', 'uploads/1764661262.jpg', 'Na zalihama', 1, 1),
(35, 'Mini haljina od crne eko kože sa čipkanim printom', '<p><strong>Mini haljina uz telo od crne eko kože sa čipkanim printom.</strong> Veoma prijatna i elegantna.</p>\r\n\r\n<p>Materijal: viskoza.</p>\r\n', '13990.00', '6990.00', 'M L', 'Crna', 'uploads/1765722017.jpg', 'uploads/1765779044.jpg', 'Na zalihama', 1, 1),
(36, 'Haljina od trikotaže sa crnim paspulom', '<p><strong>Haljina od trikotaže sa crnim paspulom.</strong> Midi dužina, prati liniju tela, udobna i trendi. Dostupna u crvenoj, crnoj i žutoj boji.</p>\r\n', '12990.00', '6490.00', 'M L', 'Crvena Žuta ', 'uploads/1762469978.jpg', 'uploads/1762484611.jpg', 'Na zalihama', 1, 1),
(37, 'Haljina od tvida sa metalnim rajsferšlusima', '<p><strong>Haljina od tvida sa metalnim rajsfer&scaron;lusima.</strong> Dostupna u crvenoj, crnoj i žutoj boji.</p>\r\n', '9990.00', '4990.00', 'M L', 'Crna Crvena Žuta ', 'uploads/1764632111.jpg', 'uploads/1764643316.jpg', 'Na zalihama', 1, 1),
(38, 'Haljina od tvida', '<p><strong>Haljina od tvida sa gornjim delom od eko-kože.</strong> Midi dužina, prati liniju tela, udobna i trendi.</p>\r\n', '15999.00', NULL, 'M L', 'Crna Crvena Žuta ', 'uploads/1762460912.jpg', 'uploads/1762469938.jpg', 'Na zalihama', 0, 1),
(39, 'Elegantna haljina od muslina', '<p><strong>Elegantna haljina od muslina sa podhaljinom i atraktivnim printom.</strong> Unikat.</p>\r\n\r\n<p>Materijal: poliester</p>\r\n', '22490.00', NULL, 'M ', 'Crvena ', 'uploads/1767049159.jpg', 'uploads/1767146844.jpg', 'Na zalihama', 0, 9),
(40, 'Rupičasta bluza', '<p>Rupičasta bluza sa printom i 3/4 rukavom.</p>\r\n', '4490.00', '2250.00', 'M L', 'Crna ', 'uploads/1762395048.jpg', 'uploads/1762607447.jpg', 'Na zalihama', 1, 5),
(41, 'Bluza od trikotaže', '<p><strong>Bluza od trikotaže sa crnim paspulom i metalnim rajsferslusom na leđima.</strong> Rukav 3/4.</p>\r\n', '4990.00', '2490.00', 'M L', 'Žuta ', 'uploads/1762402567.jpg', 'uploads/1762435345.jpg', 'Na zalihama', 1, 5),
(42, 'Bluza od trikotaže', '<p><strong>Bluza od trikotaže sa geometrijskim prinotm.</strong> Rukav 3/4.</p>\r\n', '4490.00', '2250.00', 'M L', 'Zlatna Plava  ', 'uploads/1762415893.jpg', 'uploads/1762606406.jpg', 'Na zalihama', 1, 5),
(43, 'Antilop bluza', '<p><strong>Bluza od imitacije velura sa metalnim rasjfer&scaron;lusima.</strong></p>\r\n', '7990.00', NULL, 'M L ', 'Žuta ', 'uploads/1762449450.jpg', 'uploads/1767182850.jpg', 'Na zalihama', 0, 5),
(44, 'Bluza od muslina', '<p><strong>Bluza od muslina sa cvetnim printom.</strong></p>\r\n', '5450.00', '2750.00', 'M ', 'Crna', 'uploads/1762450593.jpg', 'uploads/17624505932.jpg', 'Na zalihama', 1, 5),
(45, 'Pamučna košulja', '<p><strong>Pamučna ko&scaron;ulja sa sedefnim sjajem</strong> i dugmetima od &scaron;koljke.</p>\r\n', '5990.00', '2990.00', 'M L', 'Siva Srebrna ', 'uploads/1762445889.jpg', 'uploads/1762485187.jpg', 'Na zalihama', 1, 5),
(46, 'Suknja od tvida', '<p><strong>Suknja od tvida sa pojasom od eko-kože.</strong> Suknja ima postavu od viskoze.</p>\r\n', '7990.00', '3990.00', 'M L', 'Siva ', 'uploads/1764401288.jpg', 'uploads/1764449012.jpg', 'Na zalihama', 1, 2),
(47, 'Suknja sa čipkom', '<p><strong>Suknja od glatke trikotaže sa čipkom i metalnim rajsfer&scaron;lusima.</strong></p>\r\n', '8990.00', NULL, 'M L', 'Zlatna ', 'uploads/1762616403.jpg', 'uploads/1762600930.jpg', 'Na zalihama', 0, 2),
(48, 'Suknja od eko-kože', '<p><strong>Suknja od dve vrste eko-kože sa metalnim rajsfer&scaron;lusima.</strong></p>\r\n', '10390.00', NULL, 'M L', 'Crna', 'uploads/1762620481.jpg', 'uploads/1762618867.jpg', 'Na zalihama', 0, 2),
(49, 'Mini suknja', '<p><strong>Mini suknja sa visokim pojasom.</strong> Elastična i veoma udobna. Kai&scaron; sa zlatnom pločicom.</p>\r\n\r\n<p>Materijal: pamuk sa elastinom.</p>\r\n', '6490.00', '3250.00', 'M L', 'Zlatna ', 'uploads/1765826891.jpg', 'uploads/1764450934.jpg', 'Na zalihama', 1, 2),
(50, 'Mini suknja', '<p>Mini suknja sa visokim pojasom. Eko-koža sa čipkom.</p>\r\n', '7490.00', NULL, 'M L', 'Crna', 'uploads/1764488740.jpg', 'uploads/1764541528.jpg', 'Na zalihama', 0, 2),
(51, 'Midi suknja od pliša', '<p><strong>Midi suknja od pli&scaron;a.</strong></p>\r\n', '6490.00', NULL, 'M ', 'Crna', 'uploads/1764599860.jpg', 'uploads/1764596774.jpg', 'Na zalihama', 0, 2),
(52, 'Suknja od tvida', '<p><strong>Suknja od tvida sa ukrasnim &scaron;avovima.</strong></p>\r\n', '8990.00', '4490.00', 'M ', 'Siva ', 'uploads/1762616642.jpg', 'uploads/1762618586.jpg', 'Na zalihama', 1, 2),
(53, 'Komplet', '<p><strong>Komplet od &scaron;tofa, suknja i jaknja sa originalnim kopčanjem</strong>. Pojas se posebno plaća (2500 din).</p>\r\n', '18990.00', NULL, 'M ', 'Crvena ', 'uploads/1766317312.jpg', 'uploads/1766325679.jpg', 'Na zalihama', 0, 4),
(54, 'Crvena plišana haljina', '<p><strong>Haljina do kolena od plisiranog pli&scaron;a boje vina.</strong> Savr&scaron;ena za zimske dane. Može se nositi na rolku ili ko&scaron;ulju. Kai&scaron; i beretka opcioni.</p>\r\n\r\n<p>Materijal: pli&scaron;</p>\r\n', '11999.00', NULL, 'M ', 'Crvena ', 'uploads/1189851715.jpg', 'uploads/1208240388.jpg', 'Prodato', 0, 1),
(55, 'Plišana haljina', '<p><strong>Mini haljina uz telo od pli&scaron;a sa leopard printom.</strong> Veoma prijatna i udobna. Savr&scaron;ena zimska haljina.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Materijal:&nbsp;Pli&scaron;</p>\r\n', '11990.00', NULL, 'M', 'Žuta ', 'uploads/1762544584.jpg', 'uploads/1762587064.jpg', 'Na zalihama', 0, 1),
(56, 'Leopard kaput', '<p><strong>Kaput sa leopard printom.</strong> Materijal imitacija krzna. Unikat.</p>\r\n', '39990.00', NULL, 'M ', 'Narandžasta ', 'uploads/1765938507.jpg', 'uploads/1765966924.jpg', 'Na zalihama', 0, 4),
(57, 'Leopard jakna', '<p>Jakna sa leopard printom. Materijal imitacija krzna. Unikat.</p>\r\n', '21490.00', NULL, 'M ', 'Narandžasta ', 'uploads/1765901255.jpg', 'uploads/1765942145.jpg', 'Na zalihama', 0, 4),
(58, 'Jakna sa rajsferšlusima', '<p><strong>Kratka jakna od &quot;bukle&quot; &scaron;tofa u kombinaciji sa eko-kožom i metalnim rajsfer&scaron;lusima.</strong> Elegantna i trendi. Savr&scaron;eno ide kako uz elegantni outfit, tako i uz džins.</p>\r\n\r\n<p>Limited edition.</p>\r\n', '11990.00', NULL, 'M L', 'Siva', 'uploads/1766340510.jpg', 'uploads/1766391064.jpg', 'Na zalihama', 0, 4),
(59, 'Tunika od čipke i kože', '<p><strong>Tunika od čipke sa kožnim trakama.</strong> Bratele od prave kože. Može se nositi na dugu ko&scaron;ulju, rolku ili usku haljinu.</p>\r\n\r\n<p>Boja: crna.</p>\r\n', '12490.00', NULL, 'M L ', 'Crna', 'uploads/1768312341.jpg', 'uploads/1768357322.jpg', 'Na zalihama', 0, 1),
(61, 'Crne pantalone', '<p><strong>Crne pantalone sa ukrasnim kai&scaron;ićima od prave kože</strong>.</p>\r\n\r\n<p>Materijal:&nbsp;pamuk.</p>\r\n', '8990.00', NULL, 'M ', 'Crna', 'uploads/1765836968.jpg', 'uploads/1765869907.jpg', 'Na zalihama', 0, 3),
(64, 'Mrežasta haljina', '<p><strong>Elegantna elastična haljina</strong> sa naborima i podhaljinom boje kože. Unikat.</p>\r\n\r\n<p>Pojas (1000 din) i berata (1500 din) su opcioni.</p>\r\n\r\n<p><strong>Materijal</strong>: 100% poliester<br />\r\n<strong>Boja</strong>: crna.</p>\r\n', '10490.00', NULL, 'Unikat ', 'Crna', 'uploads/1773825961.jpg', 'uploads/1773795596.jpg', 'Prodato', 0, 9),
(65, 'Šifonska hajina', '<p><strong>Haljina od muslina sa cvetnim printom</strong> i duplom suknjom. Unikat.</p>\r\n\r\n<p>Kai&scaron; (3200 din) se dodatno plaća.</p>\r\n\r\n<p>Materijal: pamuk.</p>\r\n', '15490.00', NULL, 'M ', 'Crna', 'uploads/1773824273.jpg', 'uploads/1773828520.jpg', 'Na zalihama', 0, 1),
(66, 'Šifonska hajina', '<p><strong>Haljina od muslina sa animal printom i duplom suknjom.</strong> Unikat.</p>\r\n\r\n<p><strong>Materijal</strong>: polister</p>\r\n', '15490.00', NULL, 'M ', 'Crna', 'uploads/1773851296.jpg', 'uploads/1773857315.jpg', 'Na zalihama', 0, 1),
(67, 'Čipkasta haljina', '<p><strong>Mini haljina od francuske čipke.</strong> Čvrsta ali elastična čipka oblikuje figuru tela. Unikat.</p>\r\n\r\n<p>Boja crna.</p>\r\n', '21990.00', NULL, 'M ', 'Crna', 'uploads/1773859751.jpg', 'uploads/1773866421.jpg', 'Na zalihama', 0, 9),
(68, 'Crna haljina', '<p><strong>Midi crna haljina sa žabicama.</strong> Unikat.</p>\r\n\r\n<p>Boja crna.</p>\r\n', '11990.00', NULL, 'M ', 'Crna', 'uploads/1773867958.jpg', 'uploads/1773866861.jpg', 'Na zalihama', 0, 1),
(69, 'Vuneni kaput', '<p><strong>Kaput od vunenog žakar &scaron;tofa.</strong>&nbsp;Topao i prijatan. Inspirisan vojničkim stilom. Unikat.</p>\r\n', '45000.00', NULL, 'M ', 'Crna ', 'uploads/1780399634.jpg', 'uploads/1780399430.jpg', 'Na zalihama', 0, 4),
(70, 'Haljina od tvida', '<p><strong>Haljina od tvida sa detaljima od eko-kože.</strong> Midi dužina, prati liniju tela, udobna i trendi.</p>\r\n', '12990.00', NULL, 'M L', 'Crna Crvena Žuta ', 'uploads/1773846482.jpg', 'uploads/1773848363.jpg', 'Na zalihama', 0, 1),
(71, 'Crna haljina od trikotaže', 'Haljina od trikotaže sa gornjim delom od eko-kože. Midi dužina, prati liniju tela, udobna i trendi.', '15990.00', '', 'L ', 'Crna ', 'uploads/1189850562.jpg', 'uploads/1189850562 - 1.jpg', 'Na zalihama', 0, 1),
(72, 'Haljina od trikotaže', 'Haljina od trikotaže sa gornjim delom od eko-kože. Midi dužina, prati liniju tela, udobna i trendi.', '15990.00', '', 'M L ', 'Žuta ', 'uploads/1173160120.jpg', 'uploads/1173160120 - 1.jpg', 'Na zalihama', 0, 1),
(73, 'Haljina od trikotaže u pastelnim bojama', 'Haljina od trikotaže sa metalnim rajsferšlusima na rukavima i na vrhu ledja. Za sve prilike.', '12490.00', '', 'M L ', 'Tirkizna  ', 'uploads/1173217583.jpg', 'uploads/1173217583 - 1.jpg', 'Na zalihama', 0, 1),
(74, 'Haljina od trikotaže sa crnim paspulom', '<p><strong>Haljina od trikotaže sa crnim paspulom.</strong> Midi dužina, prati liniju tela, udobna i trendi.</p>\r\n', '12990.00', '6490.00', 'M L ', 'Crna ', 'uploads/1762544334.jpg', 'uploads/1762544334 - 1.jpg', 'Na zalihama', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rate` varchar(5) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `product_id`, `name`, `email`, `rate`, `review`) VALUES
(1, 59, 'Shaun', 'shaun@thenetninja.co.uk', '5', 'Proba recenzije...');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'Unikat');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`sub_id`, `email`, `created`) VALUES
(1, 'nendn.dizajn@gmail.com', '2020-11-05 20:59:39'),
(3, 'nesho90@gmail.com', '2020-11-05 21:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `delivery_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `fname`, `lname`, `phone`, `address`, `delivery_address`) VALUES
(1, 'nenad014', 'nendn.dizajn@gmail.com', 'predefinisanost', 'Nenad', 'Nikolić', '0642781563', 'Vlade Danilovića 1/1, Valjevo', 'Vlade Danilovića 1/1, Valjevo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog` (`post_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
