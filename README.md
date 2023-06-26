
# Presensi

A simple web-based application with Laravel Framework that make it easier for employee to take attendance using latitude and longitude


## Features

- Google Maps Tracking

## Installation

Clone the repo

```bash
  git clone https://github.com/luthfiybk/presensi.git
```
Move to repo folder
```bash
  cp presensi
```
Install composer
```bash
  composer install
```
Copy .env file
```bash
  cp .env.example .env
```
Generate Laravel Key
```bash
  php artisan key:generate
```
Fill your Google Maps API Key in .env
```bash
  GOOGLE_MAPS_API_KEY=YOUR_API_KEY
```
Migrate the database structure
```bash
  php artisan migrate
```
Run project
```bash
  php artisan serve
```
    
## Authors

[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/luthfiybk/)
[![twitter](https://img.shields.io/badge/twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/upichulo)
[![instagram](https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white)](https://instagram.com/luthfiybk)