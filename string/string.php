<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package 		PyroCMS
 * @subpackage 		Custom String Widget
 * @author			Steve Williamson
 *
 * Show custom string in your site
 */

class Widget_String extends Widgets
{
	public $title		= 'String';
	public $description	= array(
		'en' => 'Store custom string for special locations in theme.',
	);
	public $author		= 'Steve Williamson';
	public $website		= 'http://sjdub.com/';
	public $version		= '1.0';
	
	public $fields = array(
		array(
			'field'   => 'string',
			'label'   => 'String',
			'rules'   => 'required'
		)
	);

	public function run($options)
	{
		if (empty($options['string']))
		{
			return array('output' => '');
		}
		
		// Store the feed items
		return array('output' => $this->parser->parse_string($options['string'], NULL, TRUE));
	}	
}
