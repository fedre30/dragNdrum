migrate:
	mysql -u root -p < src/migrations/0-init.sql
	mysql -u root -p dragndrum < src/migrations/1-dragndrum.sql

dev:
	php -S localhost:8000