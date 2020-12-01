<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $id
 * @property string $nome
 * @property \Cake\I18n\FrozenDate $data_nasc
 * @property string $parentesco
 * @property string $cpf
 * @property string $rg
 * @property string $profissao
 * @property int $endereco_id
 * @property int $telefone_id
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property \Cake\I18n\FrozenTime $data_modificacao
 * @property \Cake\I18n\FrozenTime|null $data_delecao
 *
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\Telefone $telefone
 * @property \App\Model\Entity\Informe[] $informes
 */
class Funcionario extends Entity
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
        'data_nasc' => true,
        'parentesco' => true,
        'cpf' => true,
        'rg' => true,
        'profissao' => true,
        'endereco_id' => true,
        'telefone_id' => true,
        'data_criacao' => true,
        'data_modificacao' => true,
        'data_delecao' => true,
        'endereco' => true,
        'telefone' => true,
        'informes' => true
    ];
}
