<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190325155903 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE affiliate (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, categories VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, token VARCHAR(255) NOT NULL, is_active BOOLEAN NOT NULL, created_at DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE category (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, jobs VARCHAR(255) NOT NULL, affiliates VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE job (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, position VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, how_to_apply VARCHAR(255) NOT NULL, token VARCHAR(255) NOT NULL, is_public BOOLEAN NOT NULL, is_activated BOOLEAN NOT NULL, email VARCHAR(255) NOT NULL, expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, category VARCHAR(255) NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE affiliate');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE job');
    }
}
