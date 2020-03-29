<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200318230557 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE equipment (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contract ADD total_km INT DEFAULT NULL, ADD delivery_km INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle ADD driving_license VARCHAR(255) DEFAULT NULL, ADD data_sheet VARCHAR(255) DEFAULT NULL, ADD environmental VARCHAR(255) DEFAULT NULL, ADD madrid_ser DATETIME NOT NULL, ADD madrid_central DATETIME NOT NULL, ADD madrid_central_renovation DATETIME NOT NULL, ADD import_madrid_ser INT DEFAULT NULL, ADD transport_card INT DEFAULT NULL, ADD import_transport_card INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE equipment');
        $this->addSql('ALTER TABLE contract DROP total_km, DROP delivery_km');
        $this->addSql('ALTER TABLE vehicle DROP driving_license, DROP data_sheet, DROP environmental, DROP madrid_ser, DROP madrid_central, DROP madrid_central_renovation, DROP import_madrid_ser, DROP transport_card, DROP import_transport_card');
    }
}
