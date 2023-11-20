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
 * @property \StateMachine\Model\Table\StateMachineItemStatesTable $StateMachineItemStates
 *
 * @method \Cake\Datasource\ResultSetInterface<\StateMachine\Model\Entity\StateMachineItemState> paginate($object = null, array $settings = [])
 */
class StateMachineItemStatesController extends AppController
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
        $this->paginate = [
            'contain' => ['StateMachineProcesses'],
        ];
        $stateMachineItemStates = $this->paginate();

        $this->set(compact('stateMachineItemStates'));
    }

    /**
     * View method
     *
     * @param string|int|null $id State Machine Item State id.
     *
     * @return \Cake\Http\Response|null|void
     */
    public function view($id = null)
    {
        $stateMachineItemState = $this->StateMachineItemStates->get($id, [
            'contain' => ['StateMachineProcesses', 'StateMachineTimeouts'],
        ]);

        $this->set(compact('stateMachineItemState'));
    }

    /**
     * Delete method
     *
     * @param string|int|null $id State Machine Item State id.
     *
     * @return \Cake\Http\Response|null Redirects to index.
     */
    public function delete($id = null): ?Response
    {
        $this->request->allowMethod(['post', 'delete']);
        $stateMachineItemState = $this->StateMachineItemStates->get($id);
        if ($this->StateMachineItemStates->delete($stateMachineItemState)) {
            $this->Flash->success(__('The state machine item state has been deleted.'));
        } else {
            $this->Flash->error(__('The state machine item state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
