<?php

namespace application\core;

use application\config\Config;
use PDO;

class Db {

	protected $db;
	
	public function __construct() {

        $config = new Config;

		$this->db = new PDO(
		    'mysql:host='.$config->host.';
            dbname='.$config->name.'',
            $config->user,
            $config->password
        );
	}

	public function query($sql, $params = []) {
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	public function row($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

	public function insert($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                $stmt->bindValue(':'.$key, $val);
            }
        }
        $stmt->execute();

		return $this->db->lastInsertId();
	}


}
