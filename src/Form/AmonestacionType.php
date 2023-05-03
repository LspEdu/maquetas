<?php

namespace App\Form;

use App\Entity\Amonestacion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AmonestacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_Alumno')
            ->add('resi_abandonar_centro')
            ->add('resi_falta_clase_permaneciendo_Residencia')
            ->add('resi_incumplimiento_plan_convivencia')
            ->add('resi_falta_control_presencia')
            ->add('resi_negativa_indicacion')
            ->add('resi_negativa_sancion')
            ->add('resi_fumar')
            ->add('resi_habitacion_horario_escolar')
            ->add('resi_otros')
            ->add('modulo_estancia_modulo_ajeno')
            ->add('modulo_ausencia_pasar_lista')
            ->add('modulo_desorden')
            ->add('modulo_tenencia_electrodomesticos')
            ->add('modulo_indebido_aparato')
            ->add('modulo_otros')
            ->add('estudio_alterar_retraso')
            ->add('estudio_alterar_falta')
            ->add('estudio_alterar_retrasar_comienzo')
            ->add('estudio_alterar_interferir_desarrollo')
            ->add('estudio_alterar_abandonar_aula')
            ->add('estudio_alterar_otros')
            ->add('estudio_normas_no_trabaja')
            ->add('estudio_normas_no_hace_tareas')
            ->add('estudio_normas_no_trae_material')
            ->add('estudio_normas_no_cambia_actitud')
            ->add('compa_amenazar')
            ->add('compa_falta_respeto')
            ->add('compa_pegar')
            ->add('compa_quitar_material')
            ->add('compa_encubrimiento_falta')
            ->add('edu_falta_respeto')
            ->add('edu_contestar')
            ->add('edu_trato_incorrecto')
            ->add('edu_mentir')
            ->add('edu_utilizacion_documentos')
            ->add('centro_maltrato_material')
            ->add('centro_lugar_no_permitido')
            ->add('centro_molestar_pasillo')
            ->add('centro_fumar')
            ->add('observaciones')
            ->add('id_educador')
            ->add('firma_alumno')
            ->add('sancion')
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Amonestacion::class,
        ]);
    }
}
