<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200102102459 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bill (id INT AUTO_INCREMENT NOT NULL, bill_number INT NOT NULL, date_bill DATETIME NOT NULL, expiration_date DATETIME NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, amounts INT NOT NULL, iva INT NOT NULL, total INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859FEE1BDC7 FOREIGN KEY (instapack_group_id) REFERENCES instapack_group (id)');
        $this->addSql('ALTER TABLE contract ADD CONSTRAINT FK_E98F2859720ADC25 FOREIGN KEY (rental_agency_id) REFERENCES rental_agency (id)');
        $this->addSql('CREATE INDEX IDX_E98F2859FEE1BDC7 ON contract (instapack_group_id)');
        $this->addSql('CREATE INDEX IDX_E98F2859720ADC25 ON contract (rental_agency_id)');
        $this->addSql('ALTER TABLE instapack_group CHANGE code code VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bill');
        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859FEE1BDC7');
        $this->addSql('ALTER TABLE contract DROP FOREIGN KEY FK_E98F2859720ADC25');
        $this->addSql('DROP INDEX IDX_E98F2859FEE1BDC7 ON contract');
        $this->addSql('DROP INDEX IDX_E98F2859720ADC25 ON contract');
        $this->addSql('ALTER TABLE instapack_group CHANGE code code INT NOT NULL');
    }
}
