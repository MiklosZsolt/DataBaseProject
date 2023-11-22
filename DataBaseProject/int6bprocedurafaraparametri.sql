DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getdistantasimplu`()
SELECT MAX(distanta) AS "Distanta maxima"
FROM zboruri
WHERE de_la = ('bucuresti')$$
DELIMITER ;
