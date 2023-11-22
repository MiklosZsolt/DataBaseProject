DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `perechipiloti`()
SELECT DISTINCT c.idan as "idan" , ce.idaN as "idan2"
FROM certificare c JOIN certificare ce
ON c.idav = ce.idav and c.idan != ce.idan and c.idan < ce.idan$$
DELIMITER ;
