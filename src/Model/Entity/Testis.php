<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Testis Entity
 *
 * @property int $id
 * @property string $teste1
 * @property string $teste2
 */
class Testis extends Entity
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
        'teste1' => true,
        'teste2' => true
    ];
}
