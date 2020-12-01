<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matriculas Model
 *
 * @property \App\Model\Table\AlunosTable|\Cake\ORM\Association\BelongsTo $Alunos
 * @property \App\Model\Table\MatriculadosTable|\Cake\ORM\Association\HasMany $Matriculados
 * @property \App\Model\Table\PresencasTable|\Cake\ORM\Association\HasMany $Presencas
 *
 * @method \App\Model\Entity\Matricula get($primaryKey, $options = [])
 * @method \App\Model\Entity\Matricula newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Matricula[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Matricula|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matricula saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matricula patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Matricula[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Matricula findOrCreate($search, callable $callback = null, $options = [])
 */
class MatriculasTable extends Table
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

        $this->setTable('matriculas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Alunos', [
            'foreignKey' => 'aluno_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Matriculados', [
            'foreignKey' => 'matricula_id'
        ]);
        $this->hasMany('Presencas', [
            'foreignKey' => 'matricula_id'
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
            ->scalar('tipo_vaga')
            ->maxLength('tipo_vaga', 50)
            ->requirePresence('tipo_vaga', 'create');
            //->notEmptyString('tipo_vaga');

        $validator
            ->date('data_matricula')
            ->requirePresence('data_matricula', 'create');
            //->notEmptyDate('data_matricula');

        $validator
            ->boolean('matricula_ativa')
            ->requirePresence('matricula_ativa', 'create');
            //->notEmptyString('matricula_ativa');

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
        $rules->add($rules->existsIn(['aluno_id'], 'Alunos'));

        return $rules;
    }
}
