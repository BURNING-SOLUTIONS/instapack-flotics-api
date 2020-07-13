<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200525230125 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE concepts DROP FOREIGN KEY FK_7082D49F877DAA6F');
        $this->addSql('DROP INDEX IDX_7082D49F877DAA6F ON concepts');
        $this->addSql('ALTER TABLE concepts DROP rates_id');
        $this->addSql('ALTER TABLE rates ADD vehicle_id INT DEFAULT NULL, ADD agency_id INT NOT NULL, ADD concept_id INT NOT NULL');
        $this->addSql('ALTER TABLE rates ADD CONSTRAINT FK_44D4AB3C545317D1 FOREIGN KEY (vehicle_id) REFERENCES vehicle (id)');
        $this->addSql('ALTER TABLE rates ADD CONSTRAINT FK_44D4AB3CCDEADB2A FOREIGN KEY (agency_id) REFERENCES rental_agency (id)');
        $this->addSql('ALTER TABLE rates ADD CONSTRAINT FK_44D4AB3CF909284E FOREIGN KEY (concept_id) REFERENCES concepts (id)');
        $this->addSql('CREATE INDEX IDX_44D4AB3C545317D1 ON rates (vehicle_id)');
        $this->addSql('CREATE INDEX IDX_44D4AB3CCDEADB2A ON rates (agency_id)');
        $this->addSql('CREATE INDEX IDX_44D4AB3CF909284E ON rates (concept_id)');
        $this->addSql('ALTER TABLE rental_agency DROP FOREIGN KEY FK_40EED281877DAA6F');
        $this->addSql('DROP INDEX IDX_40EED281877DAA6F ON rental_agency');
        $this->addSql('ALTER TABLE rental_agency DROP rates_id');
        $this->addSql('ALTER TABLE vehicle DROP FOREIGN KEY FK_1B80E486877DAA6F');
        $this->addSql('DROP INDEX IDX_1B80E486877DAA6F ON vehicle');
        $this->addSql('ALTER TABLE vehicle DROP rates_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE concepts ADD rates_id INT NOT NULL');
        $this->addSql('ALTER TABLE concepts ADD CONSTRAINT FK_7082D49F877DAA6F FOREIGN KEY (rates_id) REFERENCES rates (id)');
        $this->addSql('CREATE INDEX IDX_7082D49F877DAA6F ON concepts (rates_id)');
        $this->addSql('ALTER TABLE rates DROP FOREIGN KEY FK_44D4AB3C545317D1');
        $this->addSql('ALTER TABLE rates DROP FOREIGN KEY FK_44D4AB3CCDEADB2A');
        $this->addSql('ALTER TABLE rates DROP FOREIGN KEY FK_44D4AB3CF909284E');
        $this->addSql('DROP INDEX IDX_44D4AB3C545317D1 ON rates');
        $this->addSql('DROP INDEX IDX_44D4AB3CCDEADB2A ON rates');
        $this->addSql('DROP INDEX IDX_44D4AB3CF909284E ON rates');
        $this->addSql('ALTER TABLE rates DROP vehicle_id, DROP agency_id, DROP concept_id');
        $this->addSql('ALTER TABLE rental_agency ADD rates_id INT NOT NULL');
        $this->addSql('ALTER TABLE rental_agency ADD CONSTRAINT FK_40EED281877DAA6F FOREIGN KEY (rates_id) REFERENCES rates (id)');
        $this->addSql('CREATE INDEX IDX_40EED281877DAA6F ON rental_agency (rates_id)');
        $this->addSql('ALTER TABLE vehicle ADD rates_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicle ADD CONSTRAINT FK_1B80E486877DAA6F FOREIGN KEY (rates_id) REFERENCES rates (id)');
        $this->addSql('CREATE INDEX IDX_1B80E486877DAA6F ON vehicle (rates_id)');
    }
}
