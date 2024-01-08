CREATE TABLE role (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250)
) ENGINE=InnoDB;
CREATE TABLE users (
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