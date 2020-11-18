<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cardapios Model
 *
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsTo $Usuarios
 *
 * @method \App\Model\Entity\Cardapio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cardapio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cardapio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cardapio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cardapio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cardapio findOrCreate($search, callable $callback = null, $options = [])
 */
class CardapiosTable extends Table
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

        $this->setTable('cardapios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id'
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
            ->scalar('tipo')
            ->maxLength('tipo', 100)
            ->requirePresence('tipo', 'create');
            //->notEmptyString('tipo');

        $validator
            ->date('data')
            ->requirePresence('data', 'create');
            //->notEmptyDate('data');

        $validator
            ->scalar('texto_cardapio')
            ->maxLength('texto_cardapio', 100)
            ->requirePresence('texto_cardapio', 'create');
            //->notEmptyString('texto_cardapio');

        $validator
            ->scalar('nutricionista')
            ->maxLength('nutricionista', 100)
            ->requirePresence('nutricionista', 'create');
            //->notEmptyString('nutricionista');

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
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));

        return $rules;
    }
}
