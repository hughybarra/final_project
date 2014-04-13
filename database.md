###### database setup



## restaurants

CREATE TABLE restaurants
(
id int AUTO_INCREMENT  NOT NULL,

name VARCHAR(255) NOT NULL,

url VARCHAR(255) NOT NULL,

active int,

created_at DATETIME NOT NULL,

updated_at DATETIME,

PRIMARY KEY (id)
)

## location

CREATE TABLE locations
(
id int AUTO_INCREMENT NOT NULL,
restaurant_id int NOT NULL,

street VARCHAR(255) NOT NULL,
city VARCHAR(255) NOT NULL,
state VARCHAR(255) NOT NULL,
zip int NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME,

PRIMARY KEY (id)
)

## media

CREATE TABLE medias
(
id int NOT NULL,
restaurant_id int NOT NULL,

media_type int NOT NULL,
path VARCHAR(255) NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (id)
)


## markdown

CREATE TABLE markdowns
(
id int AUTO_INCREMENT NOT NULL,
restaurant_id int NOT NULL,

type VARCHAR(255) NOT NULL,
data TEXT NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (id)
)

## MENUS

CREATE TABLE menus
(
id int AUTO_INCREMENT NOT NULL,
restaurant_id int NOT NULL,

type VARCHAR(255) NOT NULL,
data TEXT NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (id)
)

## Social Media

CREATE TABLE social_media
(
id int NOT NULL,
restaurant_id int NOT NULL,

media_type int NOT NULL,
media_link TEXT NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (id)
)




