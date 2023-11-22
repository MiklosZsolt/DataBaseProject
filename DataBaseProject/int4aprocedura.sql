DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `piloticertificati`(IN `nr_matr` TEXT)
SELECT DISTINCT numean FROM angajati a INNER JOIN certificare c ON a.idan = c.idan INNER JOIN aeronave ae ON ae.idav = c.idav WHERE numeav LIKE nr_matr$$
DELIMITER ;
