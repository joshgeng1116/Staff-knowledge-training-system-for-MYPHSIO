<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Documents Controller
 *
 * @property \App\Model\Table\DocumentsTable $Documents
 * @property \App\Model\Table\SubcategoryTable $Subcategory
 * @property \App\Model\Table\CategoryTable $Category
 * @method \App\Model\Entity\Documents[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
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
        $documents = $this->paginate($this->Documents);

        $this->set(compact('documents'));
    }

    /**
     * View method
     *
     * @param string|null $id Documents id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('document'));
    }

    public function viewBySubcat($subid,$catid){
        $this->loadModel('Category');
        $category = $this->paginate($this->Category);
        $subcategory = $this->loadModel('Subcategory');
        $subcategories = $subcategory->find()->where(['id_cat'=>$catid]);
        $document = $this->getTableLocator()->get('Documents');
        $documents = $document->find()->where(['id_subcat'=>$subid]);
        $this->set(compact('subcategories','category','documents'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Subcategory');
        $subcategory = $this->Subcategory->Find('list', ['limit' => 200]);
        $document = $this->Documents->newEmptyEntity();
        if ($this->request->is('post')) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());

            $postFile = $this->request->getData('post_file');
            $name = $postFile['name'];
            $document->path = 'C:\xampp\htdocs\myphysio_project\categorys\cate_'.$this->get_cat_name($document->id_subcat).'\sub_'.$this->get_sub_name($document->id_subcat).'\doc_'.$name;
            $path = 'C:\xampp\htdocs\myphysio_project\categorys\cate_'.$this->get_cat_name($document->id_subcat).'\sub_'.$this->get_sub_name($document->id_subcat).'\doc_'.$name;
            //$postFile -> moveTo($path);
            move_uploaded_file($postFile['tmp_name'],$path);

            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $this->set(compact('document','subcategory'));
    }

    public function get_sub_name($id){
        $subcategory = $this->getTableLocator()->get('Subcategory');
        $subobj = $subcategory->find()->where(['id'=>$id])->select(['name'])->first();
        return $subobj->name;
    }

    public function get_cat_name($id){
        $subcategory = $this->getTableLocator()->get('Subcategory');
        $subobj = $subcategory->find()->where(['id'=>$id])->select(['id_cat'])->first();
        $category = $this->getTableLocator()->get('Category');
        $categoryObj = $category->find()->where(['id'=>$subobj->id_cat])->select(['name'])->first();
        return $categoryObj->name;
    }

    /**
     * Edit method
     *
     * @param string|null $id Documents id.
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
        $this->set(compact('document'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documents id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
        if ($this->Documents->delete($document)) {
            unlink($document->path);
            $this->Flash->success(__('The document has been deleted.'));
        } else {
            $this->Flash->error(__('The document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function docView($subid,$catid,$docid){
        $this->loadModel('Category');
        $category = $this->paginate($this->Category);
        $subcategory = $this->loadModel('Subcategory');
        $subcategories = $subcategory->find()->where(['id_cat'=>$catid]);
        $document = $this->getTableLocator()->get('Documents');
        $documents = $document->find()->where(['id_subcat'=>$subid]);
        $documentt = $this->Documents->get($docid, [
            'contain' => [],
        ]);

        $this->set(compact('subcategories','category','documents','documentt'));
    }
}
