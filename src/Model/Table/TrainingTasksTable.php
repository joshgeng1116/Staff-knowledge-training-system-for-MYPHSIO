<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrainingTasks Model
 *
 * @property \App\Model\Table\TrainingPlansTable&\Cake\ORM\Association\BelongsTo $TrainingPlans
 * @property \App\Model\Table\TasksTable&\Cake\ORM\Association\BelongsTo $Tasks
 *
 * @method \App\Model\Entity\TrainingTask newEmptyEntity()
 * @method \App\Model\Entity\TrainingTask newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingTask[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrainingTask get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrainingTask findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TrainingTask patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingTask[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrainingTask|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingTask saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrainingTask[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingTask[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingTask[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TrainingTask[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TrainingTasksTable extends Table
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

        $this->setTable('training_tasks');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('TrainingPlans', [
            'foreignKey' => 'training_plan_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tasks', [
            'foreignKey' => 'task_id',
            'joinType' => 'INNER',
        ]);
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('training_plan_id', 'TrainingPlans'), ['errorField' => 'training_plan_id']);
        $rules->add($rules->existsIn('task_id', 'Tasks'), ['errorField' => 'task_id']);

        return $rules;
    }
}
