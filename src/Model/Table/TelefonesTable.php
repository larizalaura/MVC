<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Telefones Model
 *
 * @property \App\Model\Table\ResponsaveisTable|\Cake\ORM\Association\HasMany $Responsaveis
 *
 * @method \App\Model\Entity\Telefone get($primaryKey, $options = [])
 * @method \App\Model\Entity\Telefone newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Telefone[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Telefone|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Telefone saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Telefone patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Telefone[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Telefone findOrCreate($search, callable $callback = null, $options = [])
 */
class TelefonesTable extends Table
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

        $this->setTable('telefones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Responsaveis', [
            'foreignKey' => 'telefone_id'
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
            ->scalar('numero')
            ->maxLength('numero', 20)
            ->requirePresence('numero', 'create');
        //    ->notEmptyString('numero');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 50)
            ->requirePresence('tipo', 'create');
       //     ->notEmptyString('tipo');

        return $validator;
    }
}
