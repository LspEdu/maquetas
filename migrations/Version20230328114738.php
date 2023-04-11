<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230328114738 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE persona (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, apellido1 VARCHAR(255) NOT NULL, apellido2 VARCHAR(255) DEFAULT NULL, dni VARCHAR(9) NOT NULL, d_hipo TINYINT(1) NOT NULL, d_cerdo TINYINT(1) NOT NULL, celiaco TINYINT(1) NOT NULL, lactosa TINYINT(1) NOT NULL, cefalopodos TINYINT(1) NOT NULL, huevo TINYINT(1) NOT NULL, almuerzo_14 TINYINT(1) NOT NULL, microondas TINYINT(1) NOT NULL, picnic TINYINT(1) NOT NULL, otras TINYINT(1) DEFAULT NULL, otras_desc VARCHAR(1024) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE persona');
    }
}
