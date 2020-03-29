<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200321171003 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE equipment_vehicle (id INT AUTO_INCREMENT NOT NULL, value INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipment_vehicle_vehicle (equipment_vehicle_id INT NOT NULL, vehicle_id INT NOT NULL, INDEX IDX_7321892B7D58E30F (equipment_vehicle_id), INDEX IDX_7321892B545317D1 (vehicle_id), PRIMARY KEY(equipment_vehicle_id, vehicle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipment_vehicle_equipment (equipment_vehicle_id INT NOT NULL, equipment_id INT NOT NULL, INDEX IDX_FB9262637D58E30F (equipment_vehicle_id), INDEX IDX_FB926263517FE9FE (equipment_id), PRIMARY KEY(equipment_vehicle_id, equipment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipment_vehicle_vehicle ADD CONSTRAINT FK_7321892B7D58E30F FOREIGN KEY (equipment_vehicle_id) REFERENCES equipment_vehicle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipment_vehicle_vehicle ADD CONSTRAINT FK_7321892B545317D1 FOREIGN KEY (vehicle_id) REFERENCES vehicle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipment_vehicle_equipment ADD CONSTRAINT FK_FB9262637D58E30F FOREIGN KEY (equipment_vehicle_id) REFERENCES equipment_vehicle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipment_vehicle_equipment ADD CONSTRAINT FK_FB926263517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE equipment_vehicle_vehicle DROP FOREIGN KEY FK_7321892B7D58E30F');
        $this->addSql('ALTER TABLE equipment_vehicle_equipment DROP FOREIGN KEY FK_FB9262637D58E30F');
        $this->addSql('DROP TABLE equipment_vehicle');
        $this->addSql('DROP TABLE equipment_vehicle_vehicle');
        $this->addSql('DROP TABLE equipment_vehicle_equipment');
    }
}
