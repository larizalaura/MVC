<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Responsavelalunos Model
 *
 * @property \App\Model\Table\AlunosTable|\Cake\ORM\Association\BelongsTo $Alunos
 * @property \App\Model\Table\ResponsaveisTable|\Cake\ORM\Association\BelongsTo $Responsaveis
 *
 * @method \App\Model\Entity\Responsavelaluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Responsavelaluno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Responsavelaluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Responsavelaluno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsavelaluno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsavelaluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Responsavelaluno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Responsavelaluno findOrCreate($search, callable $callback = null, $options = [])
 */
class ResponsavelalunosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('responsavelalunos');
        $this->setDisplayField('aluno_id');
        $this->setPrimaryKey(['aluno_id', 'responsavel_id']);

        $this->belongsTo('Alunos', [
            'foreignKey' => 'aluno_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Responsaveis', [
            'foreignKey' => 'responsavel_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['aluno_id'], 'Alunos'));
        $rules->add($rules->existsIn(['responsavel_id'], 'Responsaveis'));

        return $rules;
    }
}
