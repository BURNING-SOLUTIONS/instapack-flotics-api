<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200318140609 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859545317D1');
        $this->addSql('DROP INDEX IDX_E98F2859545317D1 ON contract');
        $this->addSql('ALTER TABLE contract DROP vehicle_id');
        $this->addSql('ALTER TABLE vehicle ADD vehicle INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E4861B80E486 FOREIGN KEY (vehicle) REFERENCES contract (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1B80E4861B80E486 ON vehicle (vehicle)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract ADD vehicle_id INT NOT NULL');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859545317D1 FOREIGN KEY (vehicle_id) REFERENCES vehicle (id)');
        $this->addSql('CREATE INDEX IDX_E98F2859545317D1 ON contract (vehicle_id)');
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E4861B80E486');
        $this->addSql('DROP INDEX UNIQ_1B80E4861B80E486 ON vehicle');
        $this->addSql('ALTER TABLE vehicle DROP vehicle');
    }
}
