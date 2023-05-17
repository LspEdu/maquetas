<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230508091802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE IF NOT EXISTS salida (id INT AUTO_INCREMENT NOT NULL, fecha_llegada DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', fecha_salida DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', id_alumno VARCHAR(255) NOT NULL, id_educador VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alumno (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, edad INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE salida');
        $this->addSql('ALTER TABLE amonestacion ADD id_alumno_id INT NOT NULL, CHANGE id_alumno id_alumno VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_B0BFDECA7C1D59C9 ON amonestacion (id_alumno_id)');
    }
}
