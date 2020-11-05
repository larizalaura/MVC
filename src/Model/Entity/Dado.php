<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dado Entity
 *
 * @property int $id
 * @property string $campo
 * @property string $outro
 * @property int|null $teste_id
 *
 * @property \App\Model\Entity\Testis $testis
 */
class Dado extends Entity
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
        'campo' => true,
        'outro' => true,
        'teste_id' => true,
        'testis' => true
    ];
}
