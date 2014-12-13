<?php

App::uses('CakeEventListener', 'Event');

/**
 * Tescom Event Handler
 *
 * @category Event
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class TescomEventHandler extends Object implements CakeEventListener {

/**
 * implementedEvents
 *
 * @return array
 */
	public function implementedEvents() {
		return array(
			'Controller.Nodes.view' => array(
				'callable' => 'onNodesView',
			),
		);
	}

/**
 * onNodesView
 *
 * @param CakeEvent $event
 * @return void
 */
	public function onNodesView($event) {
		$Controller = $event->subject();

		$conditions = array('Node.parent_id' => $event->data['data']['Node']['id']);
		$children = $Controller->{$Controller->modelClass}->find('all', compact('conditions'));

		$Controller->set(compact('children'));
	}

}
