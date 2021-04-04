SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- DB: `democrud`
--


CREATE TABLE `inputs` (
  `id` int(11) UNSIGNED NOT NULL,
  `input_two` varchar(255) NOT NULL,
  `input_three` varchar(255) NOT NULL,
  `input_four` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `inputs` (`id`, `input_two`, `input_three`, `input_four`) VALUES
(1, 'Kasim Brennans', 'Kenmore Mews', '+1-555-406-6054'),
(2, 'Rio Sanderson', 'Saffron Passage', '+1-555-330-0547'),
(3, 'Caitlyn Mackay', 'Lyndale Brow 1', '+1-555-364-2843'),
(4, 'Ahyan Fischer', 'Newell Hill', '+1-555-544-3532 '),
(5, 'Jermaine Quintana', 'Pry Hills Lane', '+1-555-597-7926');

ALTER TABLE `inputs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `inputs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
