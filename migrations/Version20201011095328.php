<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201011095328 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Creation database an user table';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL, email VARCHAR(180) NOT NULL, phone VARCHAR(50) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , creation_date_at DATETIME DEFAULT NULL, update_date_at DATETIME DEFAULT NULL, createdBy INTEGER DEFAULT NULL, updatedBy INTEGER DEFAULT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('CREATE INDEX IDX_8D93D649D3564642 ON user (createdBy)');
        $this->addSql('CREATE INDEX IDX_8D93D649E8DE7170 ON user (updatedBy)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
    }
}
