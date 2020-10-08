<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Turmas Model
 *
 * @property \App\Model\Table\PresencasTable|\Cake\ORM\Association\HasMany $Presencas
 *
 * @method \App\Model\Entity\Turma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Turma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Turma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Turma|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Turma saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Turma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Turma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Turma findOrCreate($search, callable $callback = null, $options = [])
 */
class TurmasTable extends Table
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

        $this->setTable('turmas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Presencas', [
            'foreignKey' => 'turma_id'
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
            ->integer('semestre')
            ->requirePresence('semestre', 'create')
            ->notEmptyString('semestre');

        $validator
            ->integer('ano_atual')
            ->requirePresence('ano_atual', 'create')
            ->notEmptyString('ano_atual');

        $validator
            ->scalar('sub_id_turma')
            ->maxLength('sub_id_turma', 2)
            ->requirePresence('sub_id_turma', 'create')
            ->notEmptyString('sub_id_turma');

        $validator
            ->scalar('periodo')
            ->maxLength('periodo', 5)
            ->requirePresence('periodo', 'create')
            ->notEmptyString('periodo');

        $validator
            ->boolean('turma_ativa')
            ->requirePresence('turma_ativa', 'create')
            ->notEmptyString('turma_ativa');

        $validator
            ->integer('total_alunos')
            ->requirePresence('total_alunos', 'create')
            ->notEmptyString('total_alunos');

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
}
