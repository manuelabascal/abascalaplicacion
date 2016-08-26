<?php

class Transactions extends AppController
{
	public function index(){
        $conditions = array("conditions"=>"transactions.category_id=categories.id and transactions.account_id=accounts.id", "order" => "transactions.id desc");
        $transactions = $this->db->find("transactions, categories, accounts", "all", $conditions);
        $transactions = $transacions = $transactions->fetchAll(PDO::FETCH_NUM);
        $this->set("transactions", $transactions);
	}
	public function add(){
		if ($_POST) {
			if ($this->db->save("transactions", $_POST)) {
				$this->redirect(array("controller"=>"transactions"));
			}else{
				$this->redirect(array("controller"=>"transactions", "action"=>"add"));
			}
		}
		$categories = $this->db->find("categories");
		$accounts = $this->db->find("accounts");
		$this->set("categories", $categories);
		$this->set("accounts", $accounts);
	}
	public function edit(){
	}
	public function delete(){
	}
}