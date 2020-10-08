<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Turma Entity
 *
 * @property int $id
 * @property int $semestre
 * @property int $ano_atual
 * @property string $sub_id_turma
 * @property string $periodo
 * @property bool $turma_ativa
 * @property int $total_alunos
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property \Cake\I18n\FrozenTime $data_modificacao
 * @property \Cake\I18n\FrozenTime|null $data_delecao
 *
 * @property \App\Model\Entity\Presenca[] $presencas
 */
class Turma extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'semestre' => true,
        'ano_atual' => true,
        'sub_id_turma' => true,
        'periodo' => true,
        'turma_ativa' => true,
        'total_alunos' => true,
        'data_criacao' => true,
        'data_modificacao' => true,
        'data_delecao' => true,
        'presencas' => true
    ];
}
