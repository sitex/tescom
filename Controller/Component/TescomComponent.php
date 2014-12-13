<?php

App::uses('Component', 'Controller');

/**
 * Nodes Component
 *
 * @category Component
 */
class TescomComponent extends Component {

/**
 * Startup
 *
 * @param Controller $controller instance of controller
 * @return void
 */
	public function startup(Controller $controller) {

		$alias = 'contact';

		$contact = ClassRegistry::init('Contacts.Contact')->find('first', array(
			'conditions' => array(
				'Contact.alias' => $alias,
				'Contact.status' => 1,
			),
			'cache' => array(
				'name' => $alias,
				'config' => 'contacts_view',
			),
		));

		$controller->set(array(
			'site_contact' => $contact['Contact'],
		));
	}

/**
 * beforeRender
 *
 * @param object $controller instance of controller
 * @return void
 */
	public function beforeRender(Controller $controller) {
	}

}
