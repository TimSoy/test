<?php
/*
namespace Framework\Model;

abstract class AR {

	protected $table;
	protected $key_field_name = 'id';

	public function save() {
		$fields = get_object_vars($this);
		
		$coulmns = '';

		foreach($columns as $col) {
			if (array_key_exists()) {
				$sql_part = sprintf(' `%s`=%s ',$col, $fields[$col]);
			}
		$sql = implode(', ', $sql_part)
		$sql .= 'WHERE' . $this->key_field_name.'='.$table);
		}
	}
}

class Post extends AR {
	protected $table = 'posts';
	protected $key_field_name = 'post_id';

	public
}