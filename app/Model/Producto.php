<?php

class Producto extends AppModel 
{
	public $name = 'Producto';
	var $belongsTo = array('Marca'=>array('classname'=>'Marca'),
	'Categoria'=>array('classname'=>'Categoria'));
	
	
	
	
	public $validate = array(
		'nombre' => array('rule' => 'notEmpty','message'=>'Campo Obligatorio'),
		'descripcion' => array('rule' => 'notEmpty','message'=>'Campo Obligatorio'),
	    'precio' => array('rule' => 'notEmpty','message'=>'Campo Obligatorio')
	);
	

	public $actsAs = array(
			
			'Upload.Upload' => array(
					//'imagen','imagen2','imagen3' => array(
					'imagen' => array(
							'fields' => array(
									'dir' => 'imagen_dir'
							)
					)
			)
	);
	
	
	
	
	
	
	
	/*
	public function import($filename) {
		// to avoid having to tweak the contents of
		// $data you should use your db field name as the heading name
		// eg: Post.id, Post.title, Post.description
	
		// set the filename to read CSV from
		$filename = ROOT. DS. 'app'. DS. 'webroot'.DS.'uploads' . DS . 'Productos' . DS . $filename;
		debug('nada');
		debug($filename);
		
		// open the file
		$handle = fopen($filename, "r");
		
		if (!$handle){
			$this->Session->setFlash('Almacenado Correctamente','success');
			return 0;
			
		}
		// read the 1st row as headings
		$header = fgetcsv($handle);
		debug($header);	
		// create a message container
		$return = array(
				'messages' => array(),
				'errors' => array(),
		);
		
		// read each data row in the file
		while (($row = fgetcsv($handle)) !== FALSE) {
			$i++;
			$data = array();
	
			// for each header field
			foreach ($header as $k=>$head) {
				// get the data field from Model.field
				if (strpos($head,'.')!==false) {
					$h = explode('.',$head);
					$data[$h[0]][$h[1]]=(isset($row[$k])) ? $row[$k] : '';
				}
				// get the data field from field
				else {
					$data['Post'][$head]=(isset($row[$k])) ? $row[$k] : '';
				}
			}
	
			// see if we have an id
			$id = isset($data['Post']['id']) ? $data['Post']['id'] : 0;
	
			// we have an id, so we update
			if ($id) {
				// there is 2 options here,
					
				// option 1:
				// load the current row, and merge it with the new data
				//$this->recursive = -1;
				//$post = $this->read(null,$id);
				//$data['Post'] = array_merge($post['Post'],$data['Post']);
					
				// option 2:
				// set the model id
				$this->id = $id;
			}
				
			// or create a new record
			else {
				$this->create();
			}
	
			// see what we have
			// debug($data);
				
			// validate the row
			$this->set($data);
			if (!$this->validates()) {
				$this->_flash('mensjae','warning');
				$return['errors'][] = __(sprintf('Post for Row %d failed to validate.',$i), true);
			}
	
			// save the row
			if (!$error && !$this->save($data)) {
				$return['errors'][] = __(sprintf('Post for Row %d failed to save.',$i), true);
			}
	
			// success message!
			if (!$error) {
				$return['messages'][] = __(sprintf('Post for Row %d was saved.',$i), true);
			}
		}
			
		// close the file
		fclose($handle);
			
		// return the messages
		return $return;
			
	}
	*/
	
	
	
	
}