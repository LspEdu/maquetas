<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230518100239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE modulo (id INT AUTO_INCREMENT NOT NULL, numero_modulo INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE amonestacion CHANGE fecha fecha DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE habitacion ADD modulo_id INT NOT NULL');
        $this->addSql('ALTER TABLE habitacion ADD CONSTRAINT FK_F45995BAC07F55F5 FOREIGN KEY (modulo_id) REFERENCES modulo (id)');
        $this->addSql('CREATE INDEX IDX_F45995BAC07F55F5 ON habitacion (modulo_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habitacion DROP FOREIGN KEY FK_F45995BAC07F55F5');
        $this->addSql('DROP TABLE modulo');
        $this->addSql('DROP INDEX IDX_F45995BAC07F55F5 ON habitacion');
        $this->addSql('ALTER TABLE habitacion DROP modulo_id');
        $this->addSql('ALTER TABLE amonestacion CHANGE fecha fecha DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\'');
    }
}
