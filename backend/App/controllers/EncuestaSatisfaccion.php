<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");
require_once dirname(__DIR__).'/../public/librerias/mpdf/mpdf.php';

use App\models\Encuestas;
use \Core\View;
use \Core\MasterDom;
use \App\models\Login AS LoginDao;
use \App\models\Encuestas AS EncuestasDao;

class EncuestaSatisfaccion{
    private $_contenedor;

    public function index() {
        $extraHeader =<<<html
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/vnd.microsoft.icon" href="../../../assets/img/adium.png">
        <title>
           Encuesta - ASO CARDIO
        </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <link rel="stylesheet" href="/css/alertify/alertify.core.css" />
        <link rel="stylesheet" href="/css/alertify/alertify.default.css" id="toggleCSS" />
        <style>
        .photo {
            max-width: 15rem;
        }
        #msg_email{
            font-size: 0.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: red;
            
        }
        </style>
        
html;
        $extraFooter =<<<html

        <footer class="footer pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-0">
                        <p class="mb-0 text-secondary">
                            Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> Grupo LAHE.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="/js/jquery.min.js"></script>
        <script src="/js/validate/jquery.validate.js"></script>
        <script src="/js/alertify/alertify.min.js"></script>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <script src="/assets/js/core/popper.min.js"></script>
        <script src="/assets/js/core/bootstrap.min.js"></script>
        <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
        <!-- Kanban scripts -->
        <script src="/assets/js/plugins/dragula/dragula.min.js"></script>
        <script src="/assets/js/plugins/jkanban/jkanban.js"></script>
        <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

        
html;
        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::render("encuesta");
    }

    public function isUserValidate(){
        //echo $_POST['usuario'];
        echo (count(LoginDao::getUser($_POST['usuario']))>=1)? 'true' : 'false';
    }

    public function saveEncuesta(){
        
        
        $data = new \stdClass();
        
        $nombre = $_POST['nombre'];         
        $email = $_POST['email'];
        $preg_1 =  (isset($_POST['group2'])) ? $_POST['group2'] : NULL;
        $preg_2 = (isset($_POST['group3'])) ? $_POST['group3'] : NULL;
        $preg_3 = (isset($_POST['group4'])) ? $_POST['group4'] : NULL;
        $text_preg_3 = (isset($_POST['text_preg_3'])) ? $_POST['text_preg_3'] : NULL;
        $preg_4 = (isset($_POST['group5'])) ? $_POST['group5'] : NULL;
        $preg_5_1 = (isset($_POST['preg_5_1'])) ? $_POST['preg_5_1'] : NULL;
        $preg_5_2 = (isset($_POST['preg_5_2'])) ? $_POST['preg_5_2'] : NULL;
        $preg_5_3 = (isset($_POST['preg_5_3'])) ? $_POST['preg_5_3'] : NULL;
        $preg_5_4 = (isset($_POST['preg_5_4'])) ? $_POST['preg_5_4'] : NULL;
        $preg_5_5 = (isset($_POST['preg_5_5'])) ? $_POST['preg_5_5'] : NULL;
        $preg_5_6 = (isset($_POST['preg_5_6'])) ? $_POST['preg_5_6'] : NULL;
        $preg_5_7 = (isset($_POST['preg_5_7'])) ? $_POST['preg_5_7'] : NULL;
        $preg_5_8 = (isset($_POST['preg_5_8'])) ? $_POST['preg_5_8'] : NULL;
        $preg_5_9 = (isset($_POST['preg_5_9'])) ? $_POST['preg_5_9'] : NULL;
        $preg_5_10 = (isset($_POST['preg_5_10'])) ? $_POST['preg_5_10'] : NULL;
        $preg_5_11 = (isset($_POST['preg_5_11'])) ? $_POST['preg_5_11'] : NULL;
        $preg_5_12 = (isset($_POST['preg_5_12'])) ? $_POST['preg_5_12'] : NULL;
        $preg_5_13 = (isset($_POST['preg_5_13'])) ? $_POST['preg_5_13'] : NULL;
        $preg_5_14 = (isset($_POST['preg_5_14'])) ? $_POST['preg_5_14'] : NULL;
        $preg_5_15 = (isset($_POST['preg_5_15'])) ? $_POST['preg_5_15'] : NULL;
        $preg_6 = (isset($_POST['group36'])) ? $_POST['group36'] : NULL;
        $preg_7_1 = (isset($_POST['group37_1'])) ? $_POST['group37_1'] : NULL;
        $preg_7_2 = (isset($_POST['group37_2'])) ? $_POST['group37_2'] : NULL;
        $preg_7_3 = (isset($_POST['group37_3'])) ? $_POST['group37_3'] : NULL;
        $preg_7_4 = (isset($_POST['group37_4'])) ? $_POST['group37_4'] : NULL;
        $preg_7_5 = (isset($_POST['group37_5'])) ? $_POST['group37_5'] : NULL;
        

        /* if(!isset($preg_7_1)){
            $preg_7_1 = 0;
        }

        if(!isset($preg_7_2)){
            $preg_7_2 = 0;
        }

        if(!isset($preg_7_3)){
            $preg_7_3 = 0;
        }

        if(!isset($preg_7_4)){
            $preg_7_4 = 0;
        }

        if(!isset($preg_7_5)){
            $preg_7_5 = 0;
        } */



        $preg_8 = (isset($_POST['group38'])) ? $_POST['group38'] : NULL;
        $preg_8_1 = (isset($_POST['txt_preg_8'])) ? $_POST['txt_preg_8'] : NULL;
        $preg_9 = (isset($_POST['group39'])) ? $_POST['group39'] : NULL;
        $preg_10 = (isset($_POST['txt_preg_10'])) ? $_POST['txt_preg_10'] : NULL;

        
        $data->_nombre = $nombre;
        $data->_email = $email;
        $data->_preg_1 = $preg_1;
        $data->_preg_2 = $preg_2;
        $data->_preg_3 = $preg_3;
        $data->_text_preg_3 = $text_preg_3;
        $data->_preg_4 = $preg_4;
        $data->_preg_5_1 = $preg_5_1;
        $data->_preg_5_2 = $preg_5_2;
        $data->_preg_5_3 = $preg_5_3;
        $data->_preg_5_4 = $preg_5_4;
        $data->_preg_5_5 = $preg_5_5;
        $data->_preg_5_6 = $preg_5_6;
        $data->_preg_5_7 = $preg_5_7;
        $data->_preg_5_8 = $preg_5_8;
        $data->_preg_5_9 = $preg_5_9;
        $data->_preg_5_10 = $preg_5_10;
        $data->_preg_5_11 = $preg_5_11;
        $data->_preg_5_12 = $preg_5_12;
        $data->_preg_5_13 = $preg_5_13;
        $data->_preg_5_14 = $preg_5_14;
        $data->_preg_5_15 = $preg_5_15;
        $data->_preg_6 = $preg_6;
        $data->_preg_7_1 = $preg_7_1;
        $data->_preg_7_2 = $preg_7_2;
        $data->_preg_7_3 = $preg_7_3;
        $data->_preg_7_4 = $preg_7_4;
        $data->_preg_7_5 = $preg_7_5;
        $data->_preg_8 = $preg_8;
        $data->_preg_8_1 = $preg_8_1;
        $data->_preg_9 = $preg_9;
        $data->_preg_10 = $preg_10;

        $user = EncuestasDao::searchUserEncuesta($email);
        $datos = [];

        if($user){
            //ya no puede descargar constancia
           // echo "existe";
            $datos = [
                "status" => "error",
                "msg" => "El usuario asociado a este email ya respondio la encuesta"
            ];
        }else{
            //se guardo la encuesta y puede descargar la constancia
           // echo "no existe";
           

            $id = EncuestasDao::insert($data);

            if($id >= 1){
                $user = EncuestasDao::getUserEncuesta($email)[0];
                if($user){
                    $nombre_completo = $user['nombre_completo'];
                    $data_pdf = [
                        "nombre"  => mb_strtoupper($nombre_completo),
                        "email" => $email,
                        "clave" => $user['clave']
                        
                    ];
                    $this->generarPDF($data_pdf);
                    $datos = [
                        "status" => "success",
                        "msg" => "¡Gracias por contestar la encuesta!",
                        "clave" =>  $user['clave']                    
                    ];
                } else{
                    $datos = [
                        "status" => "success_2",
                        "msg" => "¡Gracias por contestar la encuesta!",
                        "msg2" => "Recuerda que la constancia solo sera liberada para aquellas personas que asistieron al evento."
                                           
                    ];
                }               
                
            }else{
                $datos = [
                    "status" => "error",
                    "msg" => "Hubo un error al guardar la información",                    
                ];
            }
        }  
        
        echo json_encode($datos);

    }

    public function generarPDF($data){
    

        $mpdf=new \mPDF('c', 'A4-L');
        $mpdf->defaultPageNumStyle = 'I';
        $mpdf->h2toc = array('H5'=>0,'H6'=>1);      

        $mpdf->SetDefaultBodyCSS('background', "url('/PDF/template/constancia_2023.jpeg')");  
            
        $style =<<<html
            <style>
            
                .titulo{
                width:100%;
                margin-top: 30px;
                color: #F5AA3C;
                margin-left:auto;
                margin-right:auto;
                }

                .imagen{

                    float: left;	
                    margin-top: 150px;
                    width: 100px;
                    height: 100px;
                }

                .name{
                    font-family: Arial, Helvetica, sans-serif;
                    text-align: center;
                    margin-left: 7px;
html;
            if (strlen($data['nombre']) >= 33) {
                $style .=<<<html
                    font-size: 22px;
                    padding-top: 290px!important;
                    padding-left: 350px!important;
html;
            }else if(strlen($data['nombre']) < 23){
                $style .=<<<html
                    font-size: 30px;
                    padding-top: 285px!important;
                    padding-left: 300px!important;
html;
            }else{
                $style .=<<<html
                    font-size: 28px;
                    padding-top: 280px!important;
                    padding-left: 350px!important;
html;
            }
            $style .=<<<html
                }
            </style>
html;
            $tabla =<<<html

            <div style="page-break-inside: avoid;" align='center'>
            <h1 class='name name_user'>{$data['nombre']}</h1>
            </div>
html;
       
    
        $mpdf->SetDefaultBodyCSS('background-image-resize', 6);
        $mpdf->WriteHTML($style,1);
        $mpdf->WriteHTML($tabla,2);
  
        //$nombre_archivo = "MPDF_".uniqid().".pdf";/* se genera un nombre unico para el archivo pdf*/
        print_r($mpdf->Output('PDF/'.$data['clave'].'.pdf','F'));/* se genera el pdf en la ruta especificada*/
        //echo $nombre_archivo;/* se imprime el nombre del archivo para poder retornarlo a CrmCatalogo/index */
  
       // exit;
        
      }

}
