<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200525235505 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE rates DROP FOREIGN KEY FK_44D4AB3C76ECD89A');
        $this->addSql('DROP INDEX IDX_44D4AB3C76ECD89A ON rates');
        $this->addSql('ALTER TABLE rates DROP concepts_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE rates ADD concepts_id INT NOT NULL');
        $this->addSql('ALTER TABLE rates ADD CONSTRAINT FK_44D4AB3C76ECD89A FOREIGN KEY (concepts_id) REFERENCES concepts (id)');
        $this->addSql('CREATE INDEX IDX_44D4AB3C76ECD89A ON rates (concepts_id)');
    }
}
