<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InformesArquivo Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $extensao
 * @property int $informe_id
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property \Cake\I18n\FrozenTime $data_modificacao
 * @property \Cake\I18n\FrozenTime|null $data_delecao
 *
 * @property \App\Model\Entity\Informe $informe
 */
class InformesArquivo extends Entity
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
        'nome' => true,
        'extensao' => true,
        'informe_id' => true,
        'data_criacao' => true,
        'data_modificacao' => true,
        'data_delecao' => true,
        'informe' => true
    ];
}
