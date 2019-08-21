 `criamas`.CREATE DATABASE "criamas" /*!40100 DEFAULT CHARACTER SET latin1 */;
DROP TABLE IF EXISTS "criamas"."cachorros";
CREATE TABLE  "criamas"."cachorros" (
  "id" int(10) unsigned NOT NULL AUTO_INCREMENT,
  "raza" varchar(45) NOT NULL DEFAULT '',
  "nombres" varchar(45) NOT NULL DEFAULT '',
  "origen" varchar(45) NOT NULL DEFAULT '',
  "tamanio" varchar(45) NOT NULL DEFAULT '',
  "img" varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY ("id")
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

