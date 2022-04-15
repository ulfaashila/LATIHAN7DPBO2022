<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function add(){
		//mengambil hasil inputan dari form html
		$nama = $_POST['tname'];
		$details = $_POST['tdetails'];
		$subject = $_POST['tsubject'];
		$priority = $_POST['tpriority'];
		$deadline = $_POST['tdeadline'];

		//bikin query
		$query = "INSERT INTO `tb_to_do`(`name_td`, `details_td`, `subject_td`, `priority_td`, `deadline_td`, `status_td`)
		 VALUES ('$nama','$details','$subject','$priority','$deadline', 'Belum')";

		//eksekusi
		 return $this->execute($query);
	}

	function delete($id){
		$query = "DELETE FROM `tb_to_do` WHERE id = '$id'";

		return $this->execute($query);
	}

	function status($id){
		$query = "UPDATE `tb_to_do` SET `status_td`='Selesai' WHERE id = '$id'";

		return $this->execute($query);
	}

	function sortby($temp){
		$query = "SELECT * FROM `tb_to_do`
		ORDER BY $temp ASC";

		return $this->execute($query);
	}
}

?>