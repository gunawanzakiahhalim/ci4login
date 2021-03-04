<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['auth'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->uri_pansol_A = 'http://localhost:8080/pansol_A';
		$this->uri_pansol_B = 'http://localhost:8080/pansol_B';
		$this->uri_pansol_C = 'http://localhost:8080/pansol_C';
		$this->uri_pansol_D = 'http://localhost:8080/pansol_D';
		$this->uri_pansol_E = 'http://localhost:8080/pansol_E';
		$this->uri_pansol_F = 'http://localhost:8080/pansol_F';
		$this->uri_pansol_G = 'http://localhost:8080/pansol_G';
		$this->uri_pansol_H = 'http://localhost:8080/pansol_H';
		$this->uri_pansol_Z = 'http://localhost:8080/pansol_Z';
		//session();
	}
}
