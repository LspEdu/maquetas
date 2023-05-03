<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503100704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE amonestacion (id INT AUTO_INCREMENT NOT NULL, id_alumno VARCHAR(255) NOT NULL, fecha DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', hora TIME NOT NULL COMMENT \'(DC2Type:time_immutable)\', resi_abandonar_centro TINYINT(1) NOT NULL, resi_falta_clase_permaneciendo_residencia TINYINT(1) NOT NULL, resi_incumplimiento_plan_convivencia TINYINT(1) NOT NULL, resi_falta_control_presencia TINYINT(1) NOT NULL, resi_negativa_indicacion TINYINT(1) NOT NULL, resi_negativa_sancion TINYINT(1) NOT NULL, resi_fumar TINYINT(1) NOT NULL, resi_habitacion_horario_escolar TINYINT(1) NOT NULL, resi_otros TINYINT(1) NOT NULL, modulo_estancia_modulo_ajeno TINYINT(1) NOT NULL, modulo_ausencia_pasar_lista TINYINT(1) NOT NULL, modulo_desorden TINYINT(1) NOT NULL, modulo_tenencia_electrodomesticos TINYINT(1) NOT NULL, modulo_otros TINYINT(1) NOT NULL, estudio_alterar_retraso TINYINT(1) NOT NULL, estudio_alterar_falta TINYINT(1) NOT NULL, estudio_alterar_retrasar_comienzo TINYINT(1) NOT NULL, estudio_alterar_interferir_desarrollo TINYINT(1) NOT NULL, estudio_alterar_abandonar_aula TINYINT(1) NOT NULL, estudio_alterar_otros TINYINT(1) NOT NULL, estudio_normas_no_trabaja TINYINT(1) NOT NULL, estudio_normas_no_hace_tareas TINYINT(1) NOT NULL, estudio_normas_no_trae_material TINYINT(1) NOT NULL, estudio_normas_no_cambia_actitud TINYINT(1) NOT NULL, compa_amenazar TINYINT(1) NOT NULL, compa_falta_respeto TINYINT(1) NOT NULL, compa_pegar TINYINT(1) NOT NULL, compa_quitar_material TINYINT(1) NOT NULL, compa_encubrimiento_falta TINYINT(1) NOT NULL, edu_falta_respeto TINYINT(1) NOT NULL, edu_contestar TINYINT(1) NOT NULL, edu_trato_incorrecto TINYINT(1) NOT NULL, edu_mentir TINYINT(1) NOT NULL, edu_utilizacion_documentos TINYINT(1) NOT NULL, centro_maltrato_material TINYINT(1) NOT NULL, centro_lugar_no_permitido TINYINT(1) NOT NULL, centro_molestar_pasillo TINYINT(1) NOT NULL, observaciones LONGTEXT DEFAULT NULL, id_educador VARCHAR(255) NOT NULL, firma_alumno TINYINT(1) NOT NULL, sancion LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE amonestacion');
    }
}
