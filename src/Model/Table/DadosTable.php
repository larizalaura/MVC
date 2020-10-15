<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dados Model
 *
 * @property \App\Model\Table\TestesTable|\Cake\ORM\Association\BelongsTo $Testes
 *
 * @method \App\Model\Entity\Dado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dado newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dado|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dado[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dado findOrCreate($search, callable $callback = null, $options = [])
 */
class DadosTable extends Table
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

        $this->setTable('dados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Testes', [
            'foreignKey' => 'teste_id'
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
            ->scalar('campo')
            ->maxLength('campo', 100)
            ->requirePresence('campo', 'create');
            //->notEmptyString('campo');

        $validator
            ->scalar('outro')
            ->maxLength('outro', 50)
            ->requirePresence('outro', 'create');
            //->notEmptyString('outro');

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
        $rules->add($rules->existsIn(['teste_id'], 'Testes'));

        return $rules;
    }
}
