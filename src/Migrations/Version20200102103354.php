<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200102103354 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bill ADD contract_number_id INT NOT NULL');
        $this->addSql('ALTER TABLE bill ADD CONSTRAINT FK_7A2119E31D368686 FOREIGN KEY (contract_number_id) REFERENCES contract (id)');
        $this->addSql('CREATE INDEX IDX_7A2119E31D368686 ON bill (contract_number_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bill DROP FOREIGN KEY FK_7A2119E31D368686');
        $this->addSql('DROP INDEX IDX_7A2119E31D368686 ON bill');
        $this->addSql('ALTER TABLE bill DROP contract_number_id');
    }
}
