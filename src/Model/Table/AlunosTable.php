<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alunos Model
 *
 * @property \App\Model\Table\EnderecosTable|\Cake\ORM\Association\BelongsTo $Enderecos
 * @property \App\Model\Table\MatriculasTable|\Cake\ORM\Association\HasMany $Matriculas
 * @property \App\Model\Table\ResponsavelalunoTable|\Cake\ORM\Association\HasMany $Responsavelaluno
 *
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, callable $callback = null, $options = [])
 */
class AlunosTable extends Table
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

        $this->setTable('alunos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Enderecos', [
            'foreignKey' => 'endereco_id'
        ]);
        $this->hasMany('Matriculas', [
            'foreignKey' => 'aluno_id'
        ]);
        $this->hasMany('Responsavelaluno', [
            'foreignKey' => 'aluno_id'
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create');
            //->notEmptyString('nome');

        $validator
            ->date('data_nasc')
            ->requirePresence('data_nasc', 'create');
            //->notEmptyDate('data_nasc');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 1)
            ->requirePresence('sexo', 'create');
            //->notEmptyString('sexo');

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
        $rules->add($rules->existsIn(['endereco_id'], 'Enderecos'));

        return $rules;
    }
}
