====================================================
 Author : Rickman Roedavan
 Engine : Code Igniter
 Name	: Zetcil Coder 
====================================================

1. Database
	Nama database default adalah: zetcil_coder
	File sql-nya ada di folder sql

2. Seting user database ada di file
	application/config/database.php baris 78-79

3. Seting database ada di file:
	application/config/database.php baris 81

4. Seting base-url ada di file:
	application/config/config.php baris 26

5. Aplikasi pertama kali akan memanggil Zetcil.php di file:
	application/controllers/Zetcil.php

	Defaultnya adalah landing page:
	$this->load->view('themes/v_main', $data);

	bisa dicek htmlnya di file:
	application/views/themes/v_main.php

	file yang berkaitan dengan htmlnya bisa diakses dari file:
	assets/main/ 

	Beberapa versi landing page yang sudah ready adalah:

	//-- HTML5 Landing Page Template
	//$this->load->view('themes/v_apps', $data);
	//$this->load->view('themes/v_polo', $data);
	//$this->load->view('themes/v_learn', $data);
	//$this->load->view('themes/v_iframe', $data);
	//$this->load->view('themes/v_dimension', $data);
	//$this->load->view('themes/v_multipurpose', $data);

	Bisa dibuka satu-satu aja komennya untuk cek isinya

6. Untuk dashboard bisa diakses melalui file:
	\application\controllers\Dashboard.php 

	Controller Dashboard.php mengakses 3 buah file view yaitu:
	\views\dashboard\v_dashboard_header.php
	\views\dashboard\v_dashboard_content.php
	\views\dashboard\v_dashboard_footer.php

7. Untuk file CRUD bisa diakses melalui file:
	\application\controllers\Data.php
