<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Presenca Entity
 *
 * @property int $id
 * @property int $matricula_id
 * @property int $turma_id
 * @property \Cake\I18n\FrozenDate $data_aula
 * @property bool $presente
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property \Cake\I18n\FrozenTime $data_modificacao
 * @property \Cake\I18n\FrozenTime|null $data_delecao
 *
 * @property \App\Model\Entity\Matricula $matricula
 * @property \App\Model\Entity\Turma $turma
 */
class Presenca extends Entity
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
        'matricula_id' => true,
        'turma_id' => true,
        'data_aula' => true,
        'presente' => true,
        'data_criacao' => true,
        'data_modificacao' => true,
        'data_delecao' => true,
        'matricula' => true,
        'turma' => true
    ];
}
