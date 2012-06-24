# As root -> mysql -h localhost -u root -p
#create database master_practice CHARACTER SET "latin1";
create database master_practice CHARACTER SET "utf8";
grant all privileges on master_practice.* to 'mswl' identified by 'mswl';

# As masteruser -> mysql -h localhost -u masteruser -p master_practice
DROP TABLE users;
CREATE TABLE IF NOT EXISTS users (
  id int(11) unsigned NOT NULL auto_increment,
  username varchar(50) DEFAULT '' NOT NULL,
  password varchar(40) DEFAULT '' NOT NULL,
  firstname varchar(40) DEFAULT '' NOT NULL,
  PRIMARY KEY (id)
);

#http://dev.mysql.com/doc/refman/5.0/en/encryption-functions.html
#INSERT INTO users (username,password,firstname) VALUES ('test',SHA1('test_pw'),'TestName');


