<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matriculados Model
 *
 * @property \App\Model\Table\MatriculasTable|\Cake\ORM\Association\BelongsTo $Matriculas
 * @property \App\Model\Table\TurmasTable|\Cake\ORM\Association\BelongsTo $Turmas
 *
 * @method \App\Model\Entity\Matriculado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Matriculado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Matriculado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Matriculado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matriculado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matriculado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Matriculado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Matriculado findOrCreate($search, callable $callback = null, $options = [])
 */
class MatriculadosTable extends Table
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

        $this->setTable('matriculados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Matriculas', [
            'foreignKey' => 'matricula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Turmas', [
            'foreignKey' => 'turmas_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->dateTime('data_criacao')
            ->notEmptyDateTime('data_criacao');

        $validator
            ->dateTime('data_modificacao')
            ->notEmptyDateTime('data_modificacao');

        $validator
            ->dateTime('data_delecao')
            ->allowEmptyDateTime('data_delecao');

        return $validator;
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
        $rules->add($rules->existsIn(['matricula_id'], 'Matriculas'));
        $rules->add($rules->existsIn(['turmas_id'], 'Turmas'));

        return $rules;
    }
}
