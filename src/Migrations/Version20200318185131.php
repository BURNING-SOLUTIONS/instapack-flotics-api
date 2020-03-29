<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200318185131 extends AbstractMigration
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
        $this->addSql('DROP INDEX uniq_e98f285978736124 ON contract');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E98F2859FA82E387 ON contract (vehiclecontracts)');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F285978736124 FOREIGN KEY (vehicleContracts) REFERENCES vehicle (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859FA82E387');
        $this->addSql('DROP INDEX uniq_e98f2859fa82e387 ON contract');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E98F285978736124 ON contract (vehicleContracts)');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859FA82E387 FOREIGN KEY (vehiclecontracts) REFERENCES vehicle (id)');
    }
}
