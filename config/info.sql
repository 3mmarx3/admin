CREATE TABLE orders (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    company_name VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    website VARCHAR(255),
    phone VARCHAR(50) NOT NULL,
    location VARCHAR(255),
    client_type ENUM('Individual', 'Company') NOT NULL,
    business_sector VARCHAR(255),
    main_challenge TEXT,
    consultation_goal TEXT,
    service_type VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;