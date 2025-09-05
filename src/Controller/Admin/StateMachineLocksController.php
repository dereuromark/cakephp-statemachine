<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the License Agreement. See LICENSE file.
 */

namespace StateMachine\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use Cake\Http\Response;

/**
 * @property \StateMachine\Model\Table\StateMachineLocksTable $StateMachineLocks
 *
 * @method \Cake\Datasource\ResultSetInterface<\StateMachine\Model\Entity\StateMachineLock> paginate($object = null, array $settings = [])
 */
class StateMachineLocksController extends AppController
{
    /**
     * @param \Cake\Event\EventInterface $event
     *
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(EventInterface $event)
    {
        parent::beforeRender($event);

        $this->viewBuilder()->addHelper('Tools.Icon');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void
     */
    public function index()
    {
        $stateMachineLocks = $this->paginate();

        $this->set(compact('stateMachineLocks'));
    }

    /**
     * View method
     *
     * @param string|int|null $id State Machine Lock id.
     *
     * @return \Cake\Http\Response|null|void
     */
    public function view($id = null)
    {
        $stateMachineLock = $this->StateMachineLocks->get(
            $id,
            contain: [],
        );

        $this->set(compact('stateMachineLock'));
    }

    /**
     * Delete method
     *
     * @param string|int|null $id State Machine Lock id.
     *
     * @return \Cake\Http\Response|null Redirects to index.
     */
    public function delete($id = null): ?Response
    {
        $this->request->allowMethod(['post', 'delete']);
        $stateMachineLock = $this->StateMachineLocks->get($id);
        if ($this->StateMachineLocks->delete($stateMachineLock)) {
            $this->Flash->success(__('The state machine lock has been deleted.'));
        } else {
            $this->Flash->error(__('The state machine lock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
