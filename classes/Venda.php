<?php
class Venda {
	private $_db,
			$_data;

	public function __construct($venda = null){
		$this->_db = DB::getInstance();

		if($venda){
			$this->find($venda);
		}
	}

	public function update($fields = array(), $id = null){

		if(!$this->_db->update('faturamento', $id, $fields)){
			throw new Exception("There was a problem updating");
			
		}else{
			return $this;
		}
	}

	public function create($fields = array()){
		if(!$this->_db->insert('faturamento', $fields)){
			throw new Exception('There was a problem creating faturamento.');
		}else{
			return true;
		}
		return false;
	}

	public function delete($id){
		if(!$this->_db->delete('faturamento', array("id", '=', $id))){
			throw new Exception('There was a problem deleting faturamento.');
		}else{
			return true;
		}
		return false;
	}

	public function find($venda = null){
		if($venda){
			$field = (is_numeric($venda)) ? 'id' : null;
			
			if(!$field) return false;

			$data = $this->_db->get('faturamento', array($field, '=', $venda));

			if($data->count()){
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function faturar($data = null){
		if($data){
			/*
				Realiza faturamento, passando informações de numero de parcelas, valor, data de vencimento e cliente de cada parcela
			*/
			$parcelas = $data->parcelas;
			unset($data->parcelas);

			print_r($data);

			$fatura = $this->insert($data)

			foreach ($parcelas as $parcela) {
				print_r($parcela);
				//$parcela_row = $this->_db->insert('contas_receber', $parcela);
			}

		}
	}

	public function exists(){
		return (!empty($this->_data)) ? true : false;
	}

	public function data(){
		return $this->_data;
	}
}