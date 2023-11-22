DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getDistantaMaxima`(IN `dela2` TEXT)
SELECT MAX(distanta) AS "Distanta maxima"
FROM zboruri
WHERE de_la LIKE dela2$$
DELIMITER ;
