CREATE TABLE tattoo_artists (
    artist_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    specialization VARCHAR(255),  
    rating DECIMAL(2,1) 
);

CREATE TABLE tattoos (
    tattoo_id INT AUTO_INCREMENT PRIMARY KEY,
    artist_id INT,  
    tattoo_name VARCHAR(100) NOT NULL,
    tattoo_style VARCHAR(50), 
    date_done DATE,
    cost DECIMAL(10, 2),
    FOREIGN KEY (artist_id) REFERENCES tattoo_artists(artist_id) ON DELETE CASCADE
);