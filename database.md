###### database setup



## restaurants

CREATE TABLE restaurants
(
id int AUTO_INCREMENT  NOT NULL,

name VARCHAR(255) NOT NULL,

active int,

created_at DATETIME NOT NULL,

updated_at DATETIME,

PRIMARY KEY (p_id)
)

## location

CREATE TABLE location
(
id int AUTO_INCREMENT NOT NULL,
rest_id int NOT NULL,

street VARCHAR(255) NOT NULL,
city VARCHAR(255) NOT NULL,
state VARCHAR(255) NOT NULL,
zip int NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME,

PRIMARY KEY (p_id)
)


## state

CREATE TABLE state
(
id int NOT NULL,
state VARCHAR(255) NOT NULL,
PRIMARY KEY (p_id)
)


## media

CREATE TABLE media
(
id int NOT NULL,
rest_id int NOT NULL,

media_type int NOT NULL,
path VARCHAR(255) NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (p_id)
)


## Media Type

CREATE TABLE mediaType
(
id int NOT NULL,
kind_id int NOT NULL,
kind VARCHAR(255),

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (p_id)
)


## pages

CREATE TABLE page_data
(
id int AUTO_INCREMENT NOT NULL,
rest_id int NOT NULL,

page_type VARCHAR(255) NOT NULL,
page_data TEXT NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (id)
)



## Page Type

CREATE TABLE page_type
(
id int NOT NULL,
kind VARCHAR(255) NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (p_id)
)


## MENUS

CREATE TABLE menu
(
id int NOT NULL,

menu_type VARCHAR(255) NOT NULL,
file_path VARCHAR(255) NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (p_id)
)



## MENU TYPE

CREATE TABLE menu_type
(
menu_type VARCHAR(255) NOT NULL,
kind VARCHAR(255) NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL
)



## Social Media

CREATE TABLE social_media
(
id int NOT NULL,
rest_id int NOT NULL,

media_type int NOT NULL,
media_link VARCHAR(255) NOT NULL,

created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,

PRIMARY KEY (p_id)
)




