CREATE TABLE role (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250)
) ENGINE=InnoDB;
CREATE TABLE users (
CREATE TABLE Role (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250)
) ENGINE=InnoDB;

CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250),
    email VARCHAR(250),
    password VARCHAR(255),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES role(id)
) ENGINE=InnoDB;
CREATE TABLE category (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(250)
)ENGINE=InnoDB;
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250)
)ENGINE=InnoDB;
CREATE TABLE wiki (

    FOREIGN KEY (role_id) REFERENCES Role(id)
) ENGINE=InnoDB;
CREATE TABLE Category (
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(250)
)ENGINE=InnoDB;
CREATE TABLE Tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250)
)ENGINE=InnoDB;
CREATE TABLE Wiki (

    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(250),
    content TEXT,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users(id),
    id_category INT,
    FOREIGN KEY (id_category) REFERENCES category(id),
    id_tags INT,
    FOREIGN KEY (id_tags) REFERENCES tags(id)
) ENGINE=InnoDB;
CREATE TABLE wikiTags (
    id_tags INT,
     FOREIGN KEY (id_Tags) REFERENCES tags(id),
     id_wiki INT,
      FOREIGN KEY (id_Wiki) REFERENCES wiki(id)
)ENGINE=InnoDB;
    FOREIGN KEY (id_category) REFERENCES Category(id),
    id_tags INT,
    FOREIGN KEY (id_tags) REFERENCES Tags(id)
) ENGINE=InnoDB;
CREATE TABLE WikiTags (
    id_Tags INT,
    id_Wiki INT,
    FOREIGN KEY (id_Tags) REFERENCES Tags(id),
    FOREIGN KEY (id_Wiki) REFERENCES Wiki(id)
)ENGINE=InnoDB;
