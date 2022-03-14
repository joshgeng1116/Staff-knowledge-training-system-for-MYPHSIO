<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrainingPlan Model
 *
 * @method \App\Model\Entity\TrainingPlan newEmptyEntity()
 * @method \App\Model\Entity\TrainingPlan newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingPlan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingPlan get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrainingPlan findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TrainingPlan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingPlan[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingPlan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingPlan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingPlan[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingPlan[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingPlan[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingPlan[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TrainingPlanTable extends Table
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

        $this->setTable('training_plan');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('percentage')
            ->requirePresence('percentage', 'create')
            ->notEmptyString('percentage');

        $validator
            ->integer('assign_to')
            ->requirePresence('assign_to', 'create')
            ->notEmptyString('assign_to');

        $validator
            ->integer('id_task')
            ->requirePresence('id_task', 'create')
            ->notEmptyString('id_task');

        return $validator;
    }
}
