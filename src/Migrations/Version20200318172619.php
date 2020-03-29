<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200318172619 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F285978736124');
        $this->addSql('DROP INDEX UNIQ_E98F285978736124 ON contract');
        $this->addSql('ALTER TABLE contract CHANGE vehiclecontracts vehicle INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F28591B80E486 FOREIGN KEY (vehicle) REFERENCES vehicle (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E98F28591B80E486 ON contract (vehicle)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F28591B80E486');
        $this->addSql('DROP INDEX UNIQ_E98F28591B80E486 ON contract');
        $this->addSql('ALTER TABLE contract CHANGE vehicle vehicleContracts INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F285978736124 FOREIGN KEY (vehicleContracts) REFERENCES vehicle (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E98F285978736124 ON contract (vehicleContracts)');
    }
}
