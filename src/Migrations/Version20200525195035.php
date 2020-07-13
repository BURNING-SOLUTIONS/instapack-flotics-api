<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200525195035 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE rates (id INT AUTO_INCREMENT NOT NULL, start_day INT DEFAULT NULL, end_day INT DEFAULT NULL, after_km INT DEFAULT NULL, value INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rental_agency ADD rates_id INT NOT NULL');
        $this->addSql('ALTER TABLE rental_agency ADD CONSTRAINT FK_40EED281877DAA6F FOREIGN KEY (rates_id) REFERENCES rates (id)');
        $this->addSql('CREATE INDEX IDX_40EED281877DAA6F ON rental_agency (rates_id)');
        $this->addSql('ALTER TABLE vehicle ADD rates_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E486877DAA6F FOREIGN KEY (rates_id) REFERENCES rates (id)');
        $this->addSql('CREATE INDEX IDX_1B80E486877DAA6F ON vehicle (rates_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE rental_agency DROP FOREIGN KEY FK_40EED281877DAA6F');
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E486877DAA6F');
        $this->addSql('DROP TABLE rates');
        $this->addSql('DROP INDEX IDX_40EED281877DAA6F ON rental_agency');
        $this->addSql('ALTER TABLE rental_agency DROP rates_id');
        $this->addSql('DROP INDEX IDX_1B80E486877DAA6F ON vehicle');
        $this->addSql('ALTER TABLE vehicle DROP rates_id');
    }
}
