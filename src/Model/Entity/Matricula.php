<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Matricula Entity
 *
 * @property int $id
 * @property bool $matricula_ativa
 * @property int $aluno_id
 * @property int $ano_matricula
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property \Cake\I18n\FrozenTime $data_modificacao
 * @property \Cake\I18n\FrozenTime|null $data_delecao
 *
 * @property \App\Model\Entity\Aluno $aluno
 * @property \App\Model\Entity\Matriculado[] $matriculados
 * @property \App\Model\Entity\Presenca[] $presencas
 */
class Matricula extends Entity
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
        'matricula_ativa' => true,
        'aluno_id' => true,
        'ano_matricula' => true,
        'data_criacao' => true,
        'data_modificacao' => true,
        'data_delecao' => true,
        'aluno' => true,
        'matriculados' => true,
        'presencas' => true
    ];
}
