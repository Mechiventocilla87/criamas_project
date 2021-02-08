DROP TABLE IF EXISTS `criamas`.`cachorros`;
CREATE TABLE  `criamas`.`cachorros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `raza` varchar(45) NOT NULL DEFAULT '',
  `nombres` varchar(45) NOT NULL DEFAULT '',
  `origen` varchar(45) NOT NULL DEFAULT '',
  `tamanio` varchar(45) NOT NULL DEFAULT '',
  `img` varchar(45) NOT NULL DEFAULT '',
  `colores` varchar(45) NOT NULL DEFAULT '',
  `temperamento` varchar(45) NOT NULL DEFAULT '',
  `peso` varchar(45) NOT NULL DEFAULT '',
  `altura` varchar(45) NOT NULL DEFAULT '',
  `aseo` varchar(45) NOT NULL DEFAULT '',
  `pelaje` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;