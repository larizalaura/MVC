<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity
 *
 * @property int $id
 * @property string $rua
 * @property int $cep
 * @property int $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $tipo
 *
 * @property \App\Model\Entity\Responsavei[] $responsaveis
 */
class Endereco extends Entity
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
        'rua' => true,
        'cep' => true,
        'numero' => true,
        'bairro' => true,
        'cidade' => true,
        'estado' => true,
        'tipo' => true,
        'responsaveis' => true
    ];
}
