-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Nov 2019 um 16:42
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_ricarda_nadler_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `media_id` int(6) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `ISBN_code` int(11) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `type` enum('book','cd','dvd') DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT NULL,
  `author_name` varchar(50) DEFAULT NULL,
  `author_surname` varchar(50) DEFAULT NULL,
  `pub_name` varchar(50) DEFAULT NULL,
  `pub_street` varchar(50) DEFAULT NULL,
  `pub_streetno` int(6) DEFAULT NULL,
  `pub_zip` int(6) DEFAULT NULL,
  `pub_city` varchar(20) DEFAULT NULL,
  `pub_size` enum('big','medium','small') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- TRUNCATE Tabelle vor dem Einfügen `media`
--

TRUNCATE TABLE `media`;
--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`media_id`, `title`, `image`, `ISBN_code`, `short_description`, `publish_date`, `type`, `status`, `author_name`, `author_surname`, `pub_name`, `pub_street`, `pub_streetno`, `pub_zip`, `pub_city`, `pub_size`) VALUES
(1, 'Naechte, in denen Sturm aufzieht', 'https://images-na.ssl-images-amazon.com/images/I/41Gh9JILV6L._SX319_BO1,204,203,200_.jpg', 2147483647, 'Liza McCullen weiÃŸ, dass sie ihrer Vergangenheit nicht entfliehen kann. Doch in dem kleinen beschaulichen Ã–rtchen Silver Bay an der KÃ¼ste Australiens hat sie ein Zuhause gefunden fÃ¼r sich und ihre', '0000-00-00', 'book', 'available', 'Jojo', 'Moyes', 'Rowohlt Verlag GmbH', 'Kirchenallee', 19, 20099, 'Hamburg', 'big'),
(2, 'Die Perlen Schwester', 'https://images-na.ssl-images-amazon.com/images/I/51699UsquOL._SX332_BO1,204,203,200_.jpg', 344248921, 'Wie auch ihre Schwestern ist CeCe ein Adoptivkind mit unbekannter Herkunft.', '0000-00-00', 'book', 'available', 'Lucinda', 'Riley', 'Goldmann Verlag', 'Neumarkter Str.', 28, 81673, 'Munich', 'big'),
(3, 'Das Kind in dir muss Heimat finden', 'https://images-na.ssl-images-amazon.com/images/I/41POwpgYy3L._SX309_BO1,204,203,200_.jpg', 342463107, 'Jeder Mensch sehnt sich danach, angenommen und geliebt zu werden. Im Idealfall entwickeln wir wÃ¤hrend unserer Kindheit das nÃ¶tige Selbst- und Urvertrauen, das uns als Erwachsene durchs Leben trÃ¤gt.', '0000-00-00', 'book', 'reserved', 'Stefanie', 'Stahl', 'Kailash', 'Neumarkter Str.', 28, 81673, 'Munich', 'small'),
(14, 'Der ErnÃ¤hrungskompass', 'https://images-na.ssl-images-amazon.com/images/I/51w1yr32D6L._SX312_BO1,204,203,200_.jpg', 2147483647, 'Als der Wissenschaftsjournalist Bas Kast gerade 40-jÃ¤hrig mit Schmerzen in der Brust zusammenbrach, stellte sich ihm eine existenzielle Frage: Hatte er mit Junkfood seine Gesundheit ruiniert? Er nahm', '2018-03-05', 'book', NULL, 'Bas', 'Kast', 'C. Bertelsmann Verlag', 'Neumarkter Str.', 28, 81673, 'Munich', NULL),
(16, 'Das Cafe am Rande der Welt', 'https://images-na.ssl-images-amazon.com/images/I/51uz-OVNqIL._SX298_BO1,204,203,200_.jpg', 123456, 'Im 6. Teil der Bestsellerreihe um David Hunter ermittelt der forensische Anthropologe in einem verlassenen Krankenhaus mit schreckensreicher Vergangenheit', '2007-02-01', 'book', 'available', 'John', 'Strelecky', 'dtv', 'Tumblingerstrasse', 21, 80337, 'Munich', 'big'),
(17, 'Die ewigen Toten', 'https://images-na.ssl-images-amazon.com/images/I/41L5UAcRNmL._SX304_BO1,204,203,200_.jpg', 223456, 'Im 6. Teil der Bestsellerreihe um David Hunter ermittelt der forensische Anthropologe in einem verlassenen Krankenhaus mit schreckensreicher Vergangenheit.', '2019-03-12', 'book', 'available', 'Simon', 'Becket', 'Wunderlich', 'Gorheimerstrasse', 16, 72488, 'Sigmaringen', 'small'),
(18, 'Bravo the Hits 2019', 'https://images-na.ssl-images-amazon.com/images/I/71XjNEUQnZL._SL1200_.jpg', 323456, 'Bevor man das Hit-Jahr 2019 endlich loslassen kann, die Tage kürzer werden und die Kälte Einzug\r\nhält, stehen noch einmal völlig unverfroren die größten Hits und aktuelle Chartstürmer bereit: BRAVO Th', '2019-11-08', 'cd', 'available', 'Bravo', 'Hits', 'Polystar(Universal Music)', 'Schwarzenbergplatz', 2, 1010, 'Vienna', 'big'),
(19, 'HERZ KRAFT WERKE', 'https://images-na.ssl-images-amazon.com/images/I/711EC7nVYpL._SL1200_.jpg', 423456, 'Herz Kraft Werke ist nach dem Erfolgsalbum Muttersprache das zweite deutschsprachige Album der Ausnahme Sängerin und Songwriterin Sarah Connor. ', '2019-03-31', 'cd', 'reserved', 'Sarah', 'Connor', 'Polystar(Universal Music)', 'Schwarzenbergplatz', 2, 1010, 'Vienna', 'big'),
(20, 'Liebe s/w', 'https://images-na.ssl-images-amazon.com/images/I/A1FGVINv%2BrL._SL1500_.jpg', 523456, 'Manchmal ist weniger mehr, gerade auch in der Musik. Manchmal strahlen die schönsten Songs ja am hellsten, wenn man sie einfach so aufführt, wie sie entstanden sind', '2019-03-12', 'cd', 'available', 'Mark', 'Forster', 'Polystar(Universal Music)', 'Schwarzenbergplatz', 2, 1010, 'Vienna', 'big'),
(21, 'The Christmas Present', 'https://images-na.ssl-images-amazon.com/images/I/91aIOG-RgaL._SL1500_.jpg', 623456, 'Für Robbie Williams-Fans ist in diesem Jahr bereits am 22. November Bescherung', '2019-11-22', 'cd', 'available', 'Robbie', 'Williams', 'Sony Music', 'Mariahilfer Str.', 77, 1060, 'Vienna', 'big'),
(22, 'Der KÃ¶nig der LÃ¶wen - Neuverfilmung 2019', 'https://images-na.ssl-images-amazon.com/images/I/71a-uLt%2Bm9L._SL1200_.jpg', 723456, 'In den unendlichen Weiten Afrikas wird ein kÃ¼nftiger KÃ¶nig geboren: Samba, das lebhafte LÃ¶wenjunge, vergÃ¶ttert seinen Vater, KÃ¶nig Mufasa, und kann es kaum erwarten, selbst KÃ¶nig zu werden', '2019-11-21', 'dvd', 'available', 'Hans', 'Zimmer', 'Walt Disney', 'Schottenfeldgasse ', 59, 1070, 'Vienna', 'big'),
(23, 'Das perfekte Geheimnis', 'https://images-na.ssl-images-amazon.com/images/I/81iJvdubbxL._SL1500_.jpg', 823456, 'Drei Frauen. Vier Männer. Sieben Telefone. Und die Frage: Wie gut kennen sich diese Freunde und Paare wirklich? ', '2020-06-30', 'dvd', 'reserved', 'Bora', 'Dagtekin', 'Constantin Film', 'Siebensterngasse ', 37, 1070, 'Vienna', 'medium');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
