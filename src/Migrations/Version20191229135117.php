<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191229135117 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP rental_agency_id');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859FEE1BDC7 FOREIGN KEY (instapack_group_id) REFERENCES instapack_group (id)');
        $this->addSql('CREATE INDEX IDX_E98F2859FEE1BDC7 ON contract (instapack_group_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859FEE1BDC7');
        $this->addSql('DROP INDEX IDX_E98F2859FEE1BDC7 ON contract');
        $this->addSql('ALTER TABLE contract ADD rental_agency_id INT NOT NULL');
    }
}
