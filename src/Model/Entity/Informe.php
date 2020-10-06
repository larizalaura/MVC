<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Informe Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $corpo
 * @property int $funcionario_id
 * @property int $responsavel_id
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property \Cake\I18n\FrozenTime $data_modificacao
 * @property \Cake\I18n\FrozenTime|null $data_delecao
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\InformesArquivo[] $informes_arquivos
 */
class Informe extends Entity
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
        'titulo' => true,
        'corpo' => true,
        'funcionario_id' => true,
        'responsavel_id' => true,
        'data_criacao' => true,
        'data_modificacao' => true,
        'data_delecao' => true,
        'usuario' => true,
        'informes_arquivos' => true
    ];
}
