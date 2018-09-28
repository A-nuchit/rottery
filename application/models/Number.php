<?php
class Number extends CI_Model
{
	public function random_number()
	{
		$jackpot = 
		$jackpottwo = rand(0,99);
		$data = array(
        'jackpot' => rand(0,999),
        'jackpot2_1' => rand(0,999),
        'jackpot2_2' => rand(0,999),
        'jackpot2_3' =>rand(0,999),
        'jackpot3_1'  => rand(0,99),
        'jackpot3_2'  => rand(0,99),
        'jackpot3_3'  => rand(0,99),
        'jackpot3_4'  => rand(0,99),
        'status' => 1 );
		$this->db->where('id', 1);
		$this->db->update('Number', $data);
	}
	public function random_numbertwo()
	{
		$jackpot = rand(0,99);
        return $jackpot;
	}
	public function get_number()
	{
		$data = $this->db->get('Number');
        return $data->result();
	}
	public function check($num){
		$data = $this->Number->get_number();
		$jackpot =  $data[0]->jackpot;
		if ($num == $jackpot){
			$data = array('award' => 1,
						  'number' => $num );
			return $data;
		}
		elseif ($num == $data[0]->jackpot2_1 || $num == $data[0]->jackpot2_2 || $num == $data[0]->jackpot2_3) {
			$data = array('award' => 2,
						  'number' => $num );
		 	return $data;
		}
		elseif ($num == $jackpot+1 || $num == $jackpot-1) {
			$data = array('award' => 3,
						  'number' => $num );
		 	return $data;
		}
		elseif (($num%100) == $data[0]->jackpot3_1 || ($num%100) == $data[0]->jackpot3_2 || ($num%100) == $data[0]->jackpot3_3  || ($num%100) == $data[0]->jackpot3_4 ) {
			$data = array('award' => 4,
						  'number' => $num );
		 	return $data;
		}
		else{
			return 0;
		}
	}

}
?>