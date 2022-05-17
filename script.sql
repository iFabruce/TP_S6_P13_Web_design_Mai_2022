
	create table membres(
		idmembre integer primary key  auto_increment,
		email varchar(20),
		motdepasse varchar(100),
		nom varchar(20),
		datenaissance date
		)engine=innodb;

	create table blog(
		id integer primary key auto_increment,
		titre varchar(20),
		description text,
		date date,
		photo varchar(50)
	)engine=innodb;
	
insert into membres values(null,'admin',sha1('admin'),'admin','2003-05-07');

insert into blog values(null,'La regeneration du couche d"ozone','On constate une regeneration du couche d"ozone après le covid','2022-05-16','blog1');
