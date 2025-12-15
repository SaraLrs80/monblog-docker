
# MonBlog Docker CI/CD

[![CI](https://github.com/SaraLrs80/monblog-docker/actions/workflows/ci.yml/badge.svg)](https://github.com/SaraLrs80/monblog-docker/actions/workflows/ci.yml)

## 📌 Description
Application **PHP MVC** déployée dans des conteneurs **Docker** avec **MySQL**.
Un pipeline **CI/CD** est mis en place via **GitHub Actions**.

## 🐳 Architecture
- PHP 8.2 + Apache
- MySQL 8
- Docker & Docker Compose

## 🔄 Pipeline CI/CD
À chaque push :
1. Vérification syntaxique PHP
2. Build de l’image Docker
3. Démarrage MySQL
4. Initialisation de la base de données
5. Test des requêtes SQL via PDO

## ▶️ Lancer le projet en local
```bash
docker-compose up --build
