<?php

namespace App\Entity;

use App\Repository\AmonestacionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: AmonestacionRepository::class)]
#[ORM\Table(name: 'amonestacion')]
class Amonestacion
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private $id = null;


    #[ORM\Column(length: 255)]
    private ?string $id_Alumno = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $fecha = null;

    #[ORM\Column(type: Types::TIME_IMMUTABLE)]
    private ?\DateTimeImmutable $hora = null;


    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_abandonar_centro = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_falta_clase_permaneciendo_Residencia = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_incumplimiento_plan_convivencia = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_falta_control_presencia = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_negativa_indicacion = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_negativa_sancion = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_fumar = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_habitacion_horario_escolar = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $resi_otros = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $modulo_estancia_modulo_ajeno = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $modulo_ausencia_pasar_lista = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $modulo_desorden = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $modulo_tenencia_electrodomesticos = null;


    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $modulo_indebido_aparato = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $modulo_otros = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_alterar_retraso = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_alterar_falta = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_alterar_retrasar_comienzo = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_alterar_interferir_desarrollo = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_alterar_abandonar_aula = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_alterar_otros = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_normas_no_trabaja = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_normas_no_hace_tareas = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_normas_no_trae_material = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $estudio_normas_no_cambia_actitud = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $compa_amenazar = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $compa_falta_respeto = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $compa_pegar = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $compa_quitar_material = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $compa_encubrimiento_falta = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $edu_falta_respeto = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $edu_contestar = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $edu_trato_incorrecto = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $edu_mentir = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $edu_utilizacion_documentos = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $centro_maltrato_material = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $centro_lugar_no_permitido = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $centro_molestar_pasillo = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $centro_fumar = null;


    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observaciones = null;


    #[ORM\Column(length: 255)]
    private ?string $id_educador = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $firma_alumno = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $sancion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAlumno(): ?string
    {
        return $this->id_Alumno;
    }

    public function setIdAlumno(string $id_Alumno): self
    {
        $this->id_Alumno = $id_Alumno;

        return $this;
    }

    public function getFecha(): ?\DateTimeImmutable
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeImmutable $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?\DateTimeImmutable
    {
        return $this->hora;
    }

    public function setHora(\DateTimeImmutable $hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    public function isResiAbandonarCentro(): ?bool
    {
        return $this->resi_abandonar_centro;
    }

    public function setResiAbandonarCentro(bool $resi_abandonar_centro): self
    {
        $this->resi_abandonar_centro = $resi_abandonar_centro;

        return $this;
    }

    public function isResiFaltaClasePermaneciendoResidencia(): ?bool
    {
        return $this->resi_falta_clase_permaneciendo_Residencia;
    }

    public function setResiFaltaClasePermaneciendoResidencia(bool $resi_falta_clase_permaneciendo_Residencia): self
    {
        $this->resi_falta_clase_permaneciendo_Residencia = $resi_falta_clase_permaneciendo_Residencia;

        return $this;
    }

    public function isResiIncumplimientoPlanConvivencia(): ?bool
    {
        return $this->resi_incumplimiento_plan_convivencia;
    }

    public function setResiIncumplimientoPlanConvivencia(bool $resi_incumplimiento_plan_convivencia): self
    {
        $this->resi_incumplimiento_plan_convivencia = $resi_incumplimiento_plan_convivencia;

        return $this;
    }

    public function isResiFaltaControlPresencia(): ?bool
    {
        return $this->resi_falta_control_presencia;
    }

    public function setResiFaltaControlPresencia(bool $resi_falta_control_presencia): self
    {
        $this->resi_falta_control_presencia = $resi_falta_control_presencia;

        return $this;
    }

    public function isResiNegativaIndicacion(): ?bool
    {
        return $this->resi_negativa_indicacion;
    }

    public function setResiNegativaIndicacion(bool $resi_negativa_indicacion): self
    {
        $this->resi_negativa_indicacion = $resi_negativa_indicacion;

        return $this;
    }

    public function isResiNegativaSancion(): ?bool
    {
        return $this->resi_negativa_sancion;
    }

    public function setResiNegativaSancion(bool $resi_negativa_sancion): self
    {
        $this->resi_negativa_sancion = $resi_negativa_sancion;

        return $this;
    }

    public function isResiFumar(): ?bool
    {
        return $this->resi_fumar;
    }

    public function setResiFumar(bool $resi_fumar): self
    {
        $this->resi_fumar = $resi_fumar;

        return $this;
    }

    public function isResiHabitacionHorarioEscolar(): ?bool
    {
        return $this->resi_habitacion_horario_escolar;
    }

    public function setResiHabitacionHorarioEscolar(bool $resi_habitacion_horario_escolar): self
    {
        $this->resi_habitacion_horario_escolar = $resi_habitacion_horario_escolar;

        return $this;
    }

    public function isResiOtros(): ?bool
    {
        return $this->resi_otros;
    }

    public function setResiOtros(bool $resi_otros): self
    {
        $this->resi_otros = $resi_otros;

        return $this;
    }

    public function isModuloEstanciaModuloAjeno(): ?bool
    {
        return $this->modulo_estancia_modulo_ajeno;
    }

    public function setModuloEstanciaModuloAjeno(bool $modulo_estancia_modulo_ajeno): self
    {
        $this->modulo_estancia_modulo_ajeno = $modulo_estancia_modulo_ajeno;

        return $this;
    }

    public function isModuloAusenciaPasarLista(): ?bool
    {
        return $this->modulo_ausencia_pasar_lista;
    }

    public function setModuloAusenciaPasarLista(bool $modulo_ausencia_pasar_lista): self
    {
        $this->modulo_ausencia_pasar_lista = $modulo_ausencia_pasar_lista;

        return $this;
    }

    public function isModuloDesorden(): ?bool
    {
        return $this->modulo_desorden;
    }

    public function setModuloDesorden(bool $modulo_desorden): self
    {
        $this->modulo_desorden = $modulo_desorden;

        return $this;
    }

    public function isModuloTenenciaElectrodomesticos(): ?bool
    {
        return $this->modulo_tenencia_electrodomesticos;
    }

    public function setModuloTenenciaElectrodomesticos(bool $modulo_tenencia_electrodomesticos): self
    {
        $this->modulo_tenencia_electrodomesticos = $modulo_tenencia_electrodomesticos;

        return $this;
    }

    public function isModuloOtros(): ?bool
    {
        return $this->modulo_otros;
    }

    public function setModuloOtros(bool $modulo_otros): self
    {
        $this->modulo_otros = $modulo_otros;

        return $this;
    }

    public function isEstudioAlterarRetraso(): ?bool
    {
        return $this->estudio_alterar_retraso;
    }

    public function setEstudioAlterarRetraso(bool $estudio_alterar_retraso): self
    {
        $this->estudio_alterar_retraso = $estudio_alterar_retraso;

        return $this;
    }

    public function isEstudioAlterarFalta(): ?bool
    {
        return $this->estudio_alterar_falta;
    }

    public function setEstudioAlterarFalta(bool $estudio_alterar_falta): self
    {
        $this->estudio_alterar_falta = $estudio_alterar_falta;

        return $this;
    }

    public function isEstudioAlterarRetrasarComienzo(): ?bool
    {
        return $this->estudio_alterar_retrasar_comienzo;
    }

    public function setEstudioAlterarRetrasarComienzo(bool $estudio_alterar_retrasar_comienzo): self
    {
        $this->estudio_alterar_retrasar_comienzo = $estudio_alterar_retrasar_comienzo;

        return $this;
    }

    public function isEstudioAlterarInterferirDesarrollo(): ?bool
    {
        return $this->estudio_alterar_interferir_desarrollo;
    }

    public function setEstudioAlterarInterferirDesarrollo(bool $estudio_alterar_interferir_desarrollo): self
    {
        $this->estudio_alterar_interferir_desarrollo = $estudio_alterar_interferir_desarrollo;

        return $this;
    }

    public function isEstudioAlterarAbandonarAula(): ?bool
    {
        return $this->estudio_alterar_abandonar_aula;
    }

    public function setEstudioAlterarAbandonarAula(bool $estudio_alterar_abandonar_aula): self
    {
        $this->estudio_alterar_abandonar_aula = $estudio_alterar_abandonar_aula;

        return $this;
    }

    public function isEstudioAlterarOtros(): ?bool
    {
        return $this->estudio_alterar_otros;
    }

    public function setEstudioAlterarOtros(bool $estudio_alterar_otros): self
    {
        $this->estudio_alterar_otros = $estudio_alterar_otros;

        return $this;
    }

    public function isEstudioNormasNoTrabaja(): ?bool
    {
        return $this->estudio_normas_no_trabaja;
    }

    public function setEstudioNormasNoTrabaja(bool $estudio_normas_no_trabaja): self
    {
        $this->estudio_normas_no_trabaja = $estudio_normas_no_trabaja;

        return $this;
    }

    public function isEstudioNormasNoHaceTareas(): ?bool
    {
        return $this->estudio_normas_no_hace_tareas;
    }

    public function setEstudioNormasNoHaceTareas(bool $estudio_normas_no_hace_tareas): self
    {
        $this->estudio_normas_no_hace_tareas = $estudio_normas_no_hace_tareas;

        return $this;
    }

    public function isEstudioNormasNoTraeMaterial(): ?bool
    {
        return $this->estudio_normas_no_trae_material;
    }

    public function setEstudioNormasNoTraeMaterial(bool $estudio_normas_no_trae_material): self
    {
        $this->estudio_normas_no_trae_material = $estudio_normas_no_trae_material;

        return $this;
    }

    public function isEstudioNormasNoCambiaActitud(): ?bool
    {
        return $this->estudio_normas_no_cambia_actitud;
    }

    public function setEstudioNormasNoCambiaActitud(bool $estudio_normas_no_cambia_actitud): self
    {
        $this->estudio_normas_no_cambia_actitud = $estudio_normas_no_cambia_actitud;

        return $this;
    }

    public function isCompaAmenazar(): ?bool
    {
        return $this->compa_amenazar;
    }

    public function setCompaAmenazar(bool $compa_amenazar): self
    {
        $this->compa_amenazar = $compa_amenazar;

        return $this;
    }

    public function isCompaFaltaRespeto(): ?bool
    {
        return $this->compa_falta_respeto;
    }

    public function setCompaFaltaRespeto(bool $compa_falta_respeto): self
    {
        $this->compa_falta_respeto = $compa_falta_respeto;

        return $this;
    }

    public function isCompaPegar(): ?bool
    {
        return $this->compa_pegar;
    }

    public function setCompaPegar(bool $compa_pegar): self
    {
        $this->compa_pegar = $compa_pegar;

        return $this;
    }

    public function isCompaQuitarMaterial(): ?bool
    {
        return $this->compa_quitar_material;
    }

    public function setCompaQuitarMaterial(bool $compa_quitar_material): self
    {
        $this->compa_quitar_material = $compa_quitar_material;

        return $this;
    }

    public function isCompaEncubrimientoFalta(): ?bool
    {
        return $this->compa_encubrimiento_falta;
    }

    public function setCompaEncubrimientoFalta(bool $compa_encubrimiento_falta): self
    {
        $this->compa_encubrimiento_falta = $compa_encubrimiento_falta;

        return $this;
    }

    public function isEduFaltaRespeto(): ?bool
    {
        return $this->edu_falta_respeto;
    }

    public function setEduFaltaRespeto(bool $edu_falta_respeto): self
    {
        $this->edu_falta_respeto = $edu_falta_respeto;

        return $this;
    }

    public function isEduContestar(): ?bool
    {
        return $this->edu_contestar;
    }

    public function setEduContestar(bool $edu_contestar): self
    {
        $this->edu_contestar = $edu_contestar;

        return $this;
    }

    public function isEduTratoIncorrecto(): ?bool
    {
        return $this->edu_trato_incorrecto;
    }

    public function setEduTratoIncorrecto(bool $edu_trato_incorrecto): self
    {
        $this->edu_trato_incorrecto = $edu_trato_incorrecto;

        return $this;
    }

    public function isEduMentir(): ?bool
    {
        return $this->edu_mentir;
    }

    public function setEduMentir(bool $edu_mentir): self
    {
        $this->edu_mentir = $edu_mentir;

        return $this;
    }

    public function isEduUtilizacionDocumentos(): ?bool
    {
        return $this->edu_utilizacion_documentos;
    }

    public function setEduUtilizacionDocumentos(bool $edu_utilizacion_documentos): self
    {
        $this->edu_utilizacion_documentos = $edu_utilizacion_documentos;

        return $this;
    }

    public function isCentroMaltratoMaterial(): ?bool
    {
        return $this->centro_maltrato_material;
    }

    public function setCentroMaltratoMaterial(bool $centro_maltrato_material): self
    {
        $this->centro_maltrato_material = $centro_maltrato_material;

        return $this;
    }

    public function isCentroLugarNoPermitido(): ?bool
    {
        return $this->centro_lugar_no_permitido;
    }

    public function setCentroLugarNoPermitido(bool $centro_lugar_no_permitido): self
    {
        $this->centro_lugar_no_permitido = $centro_lugar_no_permitido;

        return $this;
    }

    public function isCentroMolestarPasillo(): ?bool
    {
        return $this->centro_molestar_pasillo;
    }

    public function setCentroMolestarPasillo(bool $centro_molestar_pasillo): self
    {
        $this->centro_molestar_pasillo = $centro_molestar_pasillo;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getIdEducador(): ?string
    {
        return $this->id_educador;
    }

    public function setIdEducador(string $id_educador): self
    {
        $this->id_educador = $id_educador;

        return $this;
    }

    public function isFirmaAlumno(): ?bool
    {
        return $this->firma_alumno;
    }

    public function setFirmaAlumno(bool $firma_alumno): self
    {
        $this->firma_alumno = $firma_alumno;

        return $this;
    }

    public function getSancion(): ?string
    {
        return $this->sancion;
    }

    public function setSancion(string $sancion): self
    {
        $this->sancion = $sancion;

        return $this;
    }

    public function isModuloIndebidoAparato(): ?bool
    {
        return $this->modulo_indebido_aparato;
    }

    public function setModuloIndebidoAparato(bool $modulo_indebido_aparato): self
    {
        $this->modulo_indebido_aparato = $modulo_indebido_aparato;

        return $this;
    }

    public function isCentroFumar(): ?bool
    {
        return $this->centro_fumar;
    }

    public function setCentroFumar(bool $centro_fumar): self
    {
        $this->centro_fumar = $centro_fumar;

        return $this;
    }
}
