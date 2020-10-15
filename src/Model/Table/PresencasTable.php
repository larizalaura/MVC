<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Presencas Model
 *
 * @property \App\Model\Table\MatriculasTable|\Cake\ORM\Association\BelongsTo $Matriculas
 * @property \App\Model\Table\TurmasTable|\Cake\ORM\Association\BelongsTo $Turmas
 *
 * @method \App\Model\Entity\Presenca get($primaryKey, $options = [])
 * @method \App\Model\Entity\Presenca newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Presenca[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Presenca|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Presenca saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Presenca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Presenca[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Presenca findOrCreate($search, callable $callback = null, $options = [])
 */
class PresencasTable extends Table
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

        $this->setTable('presencas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Matriculas', [
            'foreignKey' => 'matricula_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Turmas', [
            'foreignKey' => 'turma_id',
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
            ->date('data_aula')
            ->requirePresence('data_aula', 'create');
            //->notEmptyDate('data_aula');

        $validator
            ->boolean('presente')
            ->requirePresence('presente', 'create');
            //->notEmptyString('presente');

        $validator
            ->dateTime('data_criacao');
            //->notEmptyDateTime('data_criacao');

        $validator
            ->dateTime('data_modificacao');
            //->notEmptyDateTime('data_modificacao');

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
        $rules->add($rules->existsIn(['turma_id'], 'Turmas'));

        return $rules;
    }
}
