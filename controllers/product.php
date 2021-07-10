<?php
class Product extends CI_Controller{
  public function generate_pdf() {

	$this->load->library('Pdf');

	$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Manager');
	$pdf->SetTitle('Information About Medicines');
	$pdf->SetSubject('Report generated using Codeigniter and TCPDF');
	$pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');


	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);


	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


	$pdf->SetFont('times', 'BI', 12);


	$template = array(
		'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
	);

	$this->table->set_template($template);

	$this->table->set_heading('Medicine ID', 'Medicine Name', 'Medicine Description', 'Unit Price', 'Quentity','Purchased Date','Expired Date','Employee ID');

	$salesinfo = $this->Med_Model->display_med();

	foreach ($salesinfo as $sf):
		$this->table->add_row($sf->med_id, $sf->med_name, $sf->med_des, $sf->unit_price, $sf->quantity,$sf->purchased_date,$sf->exp_date,$sf->emp_id);
	endforeach;

	$html = $this->table->generate();

	$pdf->AddPage();


	$pdf->writeHTML($html, true, false, true, false, '');


	$pdf->lastPage();

	
	$pdf->Output(md5(time()).'.pdf', 'D');
}
}
?>
