# training

### Setup

Create the training database in MySQL.
```bash
mysql -u root -p < app.sql
```

Start with the following scripts:
- get-emails-from-db.php
- from-db-to-csv.php
- from-csv-to-db.php

Check out how to iterate through directories
```bash
php iterators/app
```