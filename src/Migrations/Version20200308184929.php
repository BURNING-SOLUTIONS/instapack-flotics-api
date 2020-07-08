<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200308184929 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_E98F2859AAD0FA19 ON contract');
        $this->addSql('ALTER TABLE contract CHANGE contract_number number INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E98F285996901F54 ON contract (number)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_E98F285996901F54 ON contract');
        $this->addSql('ALTER TABLE contract CHANGE number contract_number INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E98F2859AAD0FA19 ON contract (contract_number)');
    }
}
