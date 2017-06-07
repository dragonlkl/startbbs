<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#doc
#	classname:	Page
#	scope:		PUBLIC
#	StartBBS起点轻量开源社区系统
#	author :doudou QQ:858292510 startbbs@126.com
#	Copyright (c) 2013 http://www.startbbs.com All rights reserved.
#/doc

class Page extends SB_Controller
{
	// function __construct ()
	// {
	// 	parent::__construct();
	// 	$this->load->model('page_m');
	// }

	public function view($page = 'home')
	{
	  if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	    {
	        // Whoops, we don't have a page for that!
	        show_404();
	    }

	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
	}
}
