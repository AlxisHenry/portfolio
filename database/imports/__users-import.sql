use main;
INSERT INTO users (username, password, email, permissions, created_at, edit_at) VALUES ('admin', 'admin123', 'alexis.henry10357@gmail.com', 'administrator', (SELECT NOW()), (SELECT NOW()))