<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $id
 * @property string $nome
 * @property \Cake\I18n\FrozenDate $data_nasc
 * @property string $telefone
 * @property string $sexo
 * @property int|null $endereco_id
 * @property \Cake\I18n\FrozenTime $data_criacao
 * @property \Cake\I18n\FrozenTime $data_modificacao
 * @property \Cake\I18n\FrozenTime|null $data_delecao
 *
 * @property \App\Model\Entity\Endereco $endereco
 * @property \App\Model\Entity\Matricula[] $matriculas
 * @property \App\Model\Entity\Responsavelaluno[] $responsavelaluno
 */
class Aluno extends Entity
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
        'telefone' => true,
        'sexo' => true,
        'endereco_id' => true,
        'data_criacao' => true,
        'data_modificacao' => true,
        'data_delecao' => true,
        'endereco' => true,
        'matriculas' => true,
        'responsavelaluno' => true
    ];
}
