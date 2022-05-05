<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Documents Controller
 *
 * @property \App\Model\Table\DocumentsTable $Documents
 * @property \App\Model\Table\CategoriesTable $Categories
 * @property \App\Model\Table\SubcategoriesTable $Subcategories
 * @method \App\Model\Entity\Document[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');
        $this->paginate = [
            'contain' => [],
        ];
        //$this->loadModel('Categories');
        //$categories = $this->paginate($this->Categories);
        $this->loadModel('Subcategories');
        $subcategories = $this->paginate($this->Subcategories);
        $documents = $this->paginate($this->Documents);

        $this->set(compact('documents','subcategories'));
    }

    public function viewBySubcat($subid,$catid){
        $this->loadModel('Categories');
        $category = $this->paginate($this->Categories);
        $subcategory = $this->loadModel('Subcategories');
        $subcategories = $subcategory->find()->where(['cat_id'=>$catid]);
        $document = $this->getTableLocator()->get('Documents');
        $documents = $document->find()->where(['subcat_id'=>$subid]);
        $this->set(compact('subcategories','category','documents'));
    }

    /**
     * View method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => ['Subcategories'],
        ]);

        $this->set(compact('document'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');
        $document = $this->Documents->newEmptyEntity();
        if ($this->request->is('post')) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            $postFile = $this->request->getData('post_file');
            $name = $postFile['name'];
            $document->path = 'webroot/category/cate_'  .$this->get_cat_name($document->subcat_id).'/sub_'.$this->get_sub_name($document->subcat_id).'/doc_'.$name;
            $path = WWW_ROOT.'category/cate_' .$this->get_cat_name($document->subcat_id).'/sub_'.$this->get_sub_name($document->subcat_id).'/doc_'.$name;
            //$postFile -> moveTo($path);
            move_uploaded_file($postFile['tmp_name'],$path);

            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $this->loadModel('Categories');
        $category = $this->getTableLocator()->get('Categories');
        $categories = $category->find('list',['limit'=>200])->select(['name']);
        $subcategories = $this->Documents->Subcategories->find('list', ['limit' => 200])->all();
        $this->set(compact('document','subcategories','categories'));

    }

    public function get_sub_name($id){
        $subcategory = $this->getTableLocator()->get('Subcategories');
        $subobj = $subcategory->find()->where(['id'=>$id])->select(['name'])->first();
        return $subobj->name;
    }

    public function get_cat_name($id){
        $subcategory = $this->getTableLocator()->get('Subcategories');
        $subobj = $subcategory->find()->where(['id'=>$id])->select(['cat_id'])->first();
        $category = $this->getTableLocator()->get('Categories');
        $categoryObj = $category->find()->where(['id'=>$subobj->cat_id])->select(['name'])->first();
        return $categoryObj->name;
    }


    /**
     * Edit method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $subcats = $this->Documents->Subcats->find('list', ['limit' => 200])->all();
        $this->set(compact('document', 'subcats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
        if ($this->Documents->delete($document)) {
            unlink("https://review.u21s2102.monash-ie.me/".$document->path);
            $this->Flash->success(__('The document has been deleted.'));
        } else {
            $this->Flash->error(__('The document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function docView($subid,$catid,$docid){
        $this->loadModel('Categories');
        $category = $this->paginate($this->Categories);
        $subcategory = $this->loadModel('Subcategories');
        $subcategories = $subcategory->find()->where(['cat_id'=>$catid]);
        $document = $this->getTableLocator()->get('Documents');
        $documents = $document->find()->where(['subcat_id'=>$subid]);
        $documentt = $this->Documents->get($docid, [
            'contain' => [],
        ]);

        $this->set(compact('subcategories','category','documents','documentt'));
    }

    public function taskdoc($docid){
        $document = $this->Documents->get($docid, [
            'contain' => [],
        ]);
        $this->set(compact('document'));
    }
}
