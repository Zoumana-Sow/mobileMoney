<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210301204936 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF6526075F47EDB');
        $this->addSql('DROP INDEX IDX_CFF6526075F47EDB ON compte');
        $this->addSql('ALTER TABLE compte ADD admin_syst_id INT DEFAULT NULL, DROP admin_sys_id');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF652606BD27ABE FOREIGN KEY (admin_syst_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_CFF652606BD27ABE ON compte (admin_syst_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF652606BD27ABE');
        $this->addSql('DROP INDEX IDX_CFF652606BD27ABE ON compte');
        $this->addSql('ALTER TABLE compte ADD admin_sys_id INT NOT NULL, DROP admin_syst_id');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF6526075F47EDB FOREIGN KEY (admin_sys_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_CFF6526075F47EDB ON compte (admin_sys_id)');
    }
}
