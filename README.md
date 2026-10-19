# Portfolio website – Ahmad Ali

Mijn persoonlijke portfolio als software developer. De website laat zien wie ik ben, welke programmeertalen ik leer, mijn CV en mijn projecten.

## Wat zit erin
- **One-page website** met secties: Home, About me, CV, Projects en Contact (Bootstrap + fullPage.js)
- **Projecten en talen komen uit een MySQL-database** en worden met PHP op de pagina gezet
- **Beheerpagina's (CRUD)** om projecten en talen toe te voegen, te wijzigen en te verwijderen
  - `src/images/` – projecten beheren (met afbeelding uploaden)
  - `src/languages/` – programmeertalen beheren
- **Docker**: de hele omgeving (PHP + Apache, MySQL en phpMyAdmin) start met één commando

## Gebruikte technieken
PHP 8.2 · MySQL · HTML/CSS · Bootstrap · jQuery · Docker

## Starten
Je hebt [Docker Desktop](https://www.docker.com/products/docker-desktop/) nodig.

```
docker compose up --build
```

| Wat | Adres |
|---|---|
| Website | http://localhost:8080 |
| Projecten beheren | http://localhost:8080/images/ |
| Talen beheren | http://localhost:8080/languages/ |
| phpMyAdmin | http://localhost:8082 |

De database wordt bij de eerste start automatisch gevuld met `dockers/db/data/portfolio.sql`.

## Projectstructuur
```
docker-compose.yml     Docker-configuratie (web, db, phpmyadmin)
dockers/web/           Dockerfile voor PHP + Apache
dockers/db/            Dockerfile + startdata voor MySQL
src/index.php          De portfolio-pagina
src/db.php             Databaseverbinding
src/images/            Projecten beheren (CRUD) + afbeeldingen
src/languages/         Talen beheren (CRUD)
```

## Wat ik heb geleerd
- Een PHP-website koppelen aan een MySQL-database
- CRUD-functionaliteit bouwen (Create, Read, Update, Delete)
- Bestanden uploaden met PHP
- Een ontwikkelomgeving opzetten met Docker en docker-compose
