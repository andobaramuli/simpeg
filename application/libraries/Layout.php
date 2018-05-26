<?php
/**
* Description of template
*
* @author by ando baramuli
*
*/

class Layout
{
  var $CI;

  function  __construct()
  {
    $this->CI =& get_instance();
  }

  function dressing($mainview,$parammain)
  {
    $this->CI->load->view('layout/header',NULL);
    $this->CI->load->view('layout/left',NULL);
    $this->CI->load->view($mainview,$parammain);
    $this->CI->load->view('layout/footer',NULL);
  }
}

/* End of file Layout.php */
/* Location: ./application/libraries/Layout.php */
