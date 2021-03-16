<?php 
class tugas4_model extends CI_Model {
    public function get_data()
	{
        $data_mahasiswa = [
			["nama"=>"Hafis Naqsyabandy","nim"=>"E31190406"],
			 ];
        return $data_mahasiswa;
	}
}
?>