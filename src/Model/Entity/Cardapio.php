<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cardapio Entity
 *
 * @property int $id
 * @property string $tipo
 * @property \Cake\I18n\FrozenDate $data
 * @property string $texto_cardapio
 * @property string $nutricionista
 * @property int|null $usuario_id
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property \Cake\I18n\FrozenTime $data_modificacao
 * @property \Cake\I18n\FrozenTime|null $data_delecao
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Cardapio extends Entity
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
        'tipo' => true,
        'data' => true,
        'texto_cardapio' => true,
        'nutricionista' => true,
        'usuario_id' => true,
        'data_criacao' => true,
        'data_modificacao' => true,
        'data_delecao' => true,
        'usuario' => true
    ];
}
