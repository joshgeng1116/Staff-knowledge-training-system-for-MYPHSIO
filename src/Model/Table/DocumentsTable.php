<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documents Model
 *
 * @method \App\Model\Entity\Documents newEmptyEntity()
 * @method \App\Model\Entity\Documents newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Documents[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documents get($primaryKey, $options = [])
 * @method \App\Model\Entity\Documents findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Documents patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Documents[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documents|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documents saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documents[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documents[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documents[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Documents[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DocumentsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('documents');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
        $this->belongsTo('Subcategory',['foreignKey' => 'id_sub','joinType' => 'INNER']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->requirePresence('user_type', 'create')
            ->notEmptyString('user_type');

        $validator
            ->requirePresence('doc_type', 'create')
            ->notEmptyString('doc_type');

        $validator
            ->integer('id_subcat')
            ->requirePresence('id_subcat', 'create')
            ->notEmptyString('id_subcat');

        $validator
            ->scalar('path')
            ->maxLength('path', 255);

        return $validator;
    }
}
