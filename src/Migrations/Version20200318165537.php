<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200318165537 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract ADD contracts INT DEFAULT NULL, DROP vehicle');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859950A973 FOREIGN KEY (contracts) REFERENCES vehicle (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E98F2859950A973 ON contract (contracts)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859950A973');
        $this->addSql('DROP INDEX UNIQ_E98F2859950A973 ON contract');
        $this->addSql('ALTER TABLE contract ADD vehicle VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP contracts');
    }
}
