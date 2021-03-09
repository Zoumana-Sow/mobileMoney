<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303183901 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transaction CHANGE user_retrait_id user_retrait_id INT NOT NULL, CHANGE date_retrait date_retrait DATE NOT NULL, CHANGE ttc ttc INT NOT NULL, CHANGE frais_envoie frais_envoie INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transaction CHANGE user_retrait_id user_retrait_id INT DEFAULT NULL, CHANGE date_retrait date_retrait DATE DEFAULT NULL, CHANGE ttc ttc INT DEFAULT NULL, CHANGE frais_envoie frais_envoie INT DEFAULT NULL');
    }
}
