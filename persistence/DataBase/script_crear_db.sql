SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- Creación de la base de datos: `rolegame`

CREATE TABLE `creature` (
  `idCreature` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `attackPower` int(15) NOT NULL,
  `lifeLevel` int(15) NOT NULL,
  `weapon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `creature` (`idCreature`, `name`, `description`, `avatar`, `attackPower`, `lifeLevel`, `weapon`) VALUES
(123, 'Sir Cedric el Valiente', 'Sir Cedric es un apuesto caballero con armadura reluciente y una espada que brilla con un resplandor mágico. Es conocido en todo el reino por su valentía y honor en la batalla, siempre dispuesto a proteger a los indefensos y defender la justicia.', './persistence/img/personaje_1.jpg', 50, 100, 'Espada'),
(234, 'Elara la Hechicera de los Bosques', 'Elara es una misteriosa hechicera que vive en lo más profundo de un bosque encantado. Con cabello largo y oscuro y vestida con túnicas verdes, domina la magia de la naturaleza y protege a las criaturas del bosque de las amenazas. Sus ojos brillan con la sabiduría de los antiguos.', './persistence/img/personaje_2.jpg', 70, 200, 'Cuchillo'),
(345, 'Grom el Bárbaro del Norte', 'Grom es un gigantesco bárbaro de las heladas tierras del norte. Con su piel cubierta de tatuajes y una gran hacha de batalla, es un guerrero temible en el campo de batalla. A pesar de su aspecto feroz, tiene un corazón noble y un fuerte sentido del honor.', './persistence/img/personaje_3.jpg', 90, 500, 'Katana');

ALTER TABLE `creature`
  ADD PRIMARY KEY (`idCreature`);
ALTER TABLE `creature`
  MODIFY `idCreature` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
