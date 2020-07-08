<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200218170012 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contract CHANGE type_contract type INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E98F2859AAD0FA19 ON contract (contract_number)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_294FCE3977153098 ON instapack_group (code)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_294FCE39A53EB8E8 ON instapack_group (cif)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_40EED28177153098 ON rental_agency (code)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_40EED281A53EB8E8 ON rental_agency (cif)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1B80E486DB4048D3 ON vehicle (vehicle_registration)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1B80E486B5F83CCD ON vehicle (frame)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_E98F2859AAD0FA19 ON contract');
        $this->addSql('ALTER TABLE contract CHANGE type type_contract INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_294FCE3977153098 ON instapack_group');
        $this->addSql('DROP INDEX UNIQ_294FCE39A53EB8E8 ON instapack_group');
        $this->addSql('DROP INDEX UNIQ_40EED28177153098 ON rental_agency');
        $this->addSql('DROP INDEX UNIQ_40EED281A53EB8E8 ON rental_agency');
        $this->addSql('DROP INDEX UNIQ_1B80E486DB4048D3 ON vehicle');
        $this->addSql('DROP INDEX UNIQ_1B80E486B5F83CCD ON vehicle');
    }
}
