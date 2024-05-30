<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('assets/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
class Mypdf
{
    protected $ci;
    
  public function __construct()
  {
    $this->ci =& get_instance();
  }

  public function generate($view, $data = array(), $filename ='Bukti Pendaftran',$paper ='A4',$orientation='portrait', )
  {
    $dompdf = new Dompdf();
    $html =$this->ci->load->view($data, $data, TRUE);
    $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
    $dompdf->setPaper($paper,$orientation);

        // Render the HTML as PDF
    $dompdf->render();
        ob_clean();
    $dompdf->stream($filename . ".pdf", array("Attachment" => FALSE));
  }
}