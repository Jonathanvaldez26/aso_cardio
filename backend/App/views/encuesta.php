<?php
echo $header;
?>

<body class="">
    <main class="main-content main-content-bg mt-0">
        <div class="min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-12 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-7">
                            <div class="container-fluid py-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="multisteps-form">
                                            <!--progress bar-->
                                            <!--form panels-->
                                            <div class="row">
                                                <div class="col-12 col-lg-12 m-auto">
                                                    <form class="multisteps-form__form" id="form_encuesta" method="POST" action="/EncuestaSatisfaccion/saveEncuesta" style="height: 403px;">
                                                        <div id="card_three" class="card multisteps-form__panel p-1 border-radius-xl bg-white js-active" data-animation="FadeIn">


                                                            <div class="row text-center mt-4">
                                                                <div class="col-10 mx-auto">
                                                                    <h5 class="font-weight-normal"><strong>10mo. FORO CARDIOMETABÓLICO – LATAM 2023
                                                                            PUNTA CANA.
                                                                        </strong></h5>
                                                                    <p>Coloque el puntaje a cada uno de los siguientes ítems, donde (Cara feliz) es “totalmente satisfecho” y (cara triste) es “nada satisfecho”.</p>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="multisteps-form__content row text-center">

                                                                <br>
                                                                <div class="row mx-auto">
                                                                    <div class="col-md-6">
                                                                        <label for="nombre">Nombre :</label>
                                                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escriba su nombre completo" required>
                                                                        
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="nombre">Correo :</label>
                                                                        <input type="email" id="email" name="email" class="form-control" placeholder="Escriba su email" required>
                                                                        <span id="msg_email"></span>
                                                                    </div>
                                                                    <span>* Verifique que sus datos esten escritos correctamente.</span>

                                                                </div>

                                                                <div class="row mt-3">
                                                                    <div class="col-md-12">

                                                                        <ul style="list-style-type: none;">
                                                                            <div class="row">
                                                                                
                                                                                <div class="col-12">
                                                                                    <li>
                                                                                        <p>1. Calidad de la agenda científica.</p>
                                                                                        <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                            <div class="col-3">
                                                                                                <input type="radio" class="btn-check btn-face-green" id="btncheck16" name="group5" required value="3">
                                                                                                <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck16">
                                                                                                    <i class="far fa-grin-beam"></i>
                                                                                                </label>
                                                                                                <h6></h6>
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <input type="radio" class="btn-check btn-face-yellow" id="btncheck17" name="group5" required value="2">
                                                                                                <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck17">
                                                                                                    <i class="far fa-grin"></i>
                                                                                                </label>
                                                                                                <h6></h6>
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <input type="radio" class="btn-check btn-face-orange" id="btncheck18" name="group5" required value="1">
                                                                                                <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck18">
                                                                                                    <i class="far fa-meh"></i>
                                                                                                </label>
                                                                                                <h6></h6>
                                                                                            </div>
                                                                                            <div class="col-3">
                                                                                                <input type="radio" class="btn-check btn-face-red" id="btncheck19" name="group5" required value="0">
                                                                                                <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck19">
                                                                                                    <i class="far fa-frown"></i>
                                                                                                </label>
                                                                                                <h6></h6>
                                                                                            </div>

                                                                                        </div>
                                                                                    </li>
                                                                                </div>

                                                                                <div class="col-12 mt-4">
                                                                                    <li>
                                                                                        <p>2. Nivel de los expositores.</p>
                                                                                        <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <img src="/assets/images/dr_musa/profesor_3.png" alt="" class="photo">
                                                                                                    <p>DR. ANTONIO COCA PAYERAS</p>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck61" name="preg_5_3" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck61">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck62" name="preg_5_3" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck62">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck63" name="preg_5_3" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck63">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck64" name="preg_5_3" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck64">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <img src="/assets/images/dr_musa/profesor_4.png" alt="" class="photo">
                                                                                                    <p>DR. JOSÉ LUIS ZAMORANO GÓMEZ</p>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck44" name="preg_5_4" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck44">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck45" name="preg_5_4" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck45">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck46" name="preg_5_4" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck46">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck47" name="preg_5_4" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck47">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <img src="/assets/images/dr_musa/profesor_6.png" alt="" class="photo">
                                                                                                    <p>DR. CARLOS A. MORILLO</p>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck48" name="preg_5_6" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck48">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck49" name="preg_5_6" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck49">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck50" name="preg_5_6" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck50">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck51" name="preg_5_6" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck51">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <img src="/assets/images/dr_musa/profesor_7.png" alt="" class="photo">
                                                                                                    <p>DR. HERALD MANRIQUE HURTADO</p>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck52" name="preg_5_7" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck52">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck53" name="preg_5_7" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck53">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck54" name="preg_5_7" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck54">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck55" name="preg_5_7" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck55">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <img src="/assets/images/dr_musa/profesor_8.png" alt="" class="photo">
                                                                                                    <p>DR. BARTOLOMÉ BURGUERA</p>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck36" name="preg_5_8" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck36">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck37" name="preg_5_8" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck37">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck38" name="preg_5_8" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck38">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck39" name="preg_5_8" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck39">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <img src="/assets/images/dr_musa/profesor_9.jpeg" alt="" style="max-width: 8.5rem;">
                                                                                                    <p>DR. ADOLFO CHÁVEZ MENDOZA</p>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck40" name="preg_5_9" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck40">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck41" name="preg_5_9" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck41">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck42" name="preg_5_9" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck42">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck43" name="preg_5_9" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck43">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </li>
                                                                                </div>

                                                                                <li class="mt-4">
                                                                                    <p>3. Valoración respecto al formato de la actividad académica (tiempo de presentación, debate y preguntas).</p>
                                                                                    <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-green" id="btncheck140" name="group36" required value="3">
                                                                                            <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck140">
                                                                                                <i class="far fa-grin-beam"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-yellow" id="btncheck141" name="group36" required value="2">
                                                                                            <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck141">
                                                                                                <i class="far fa-grin"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-orange" id="btncheck142" name="group36" required value="1">
                                                                                            <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck142">
                                                                                                <i class="far fa-meh"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-red" id="btncheck143" name="group36" required value="0">
                                                                                            <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck143">
                                                                                                <i class="far fa-frown"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                                <li class="mt-4">
                                                                                    <p>4. Seleccione cuáles fueron los módulos de...:</p>
                                                                                    <div class="row mt-4 d-flex text-center">
                                                                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex align-items-stretch justify-content-center">
                                                                                            <input type="checkbox" class="btn-check btn-face-" id="btncheck144" name="group37_1" value="1">
                                                                                            <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck144">
                                                                                                LOGRAR LAS METAS EN LA DISLIPEMIA
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex align-items-stretch justify-content-center">
                                                                                            <input type="checkbox" class="btn-check btn-face-" id="btncheck145" name="group37_2" value="1">
                                                                                            <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck145">
                                                                                                PRÁCTICAS SEGURAS EN ANTICOAGULACIÓN ORAL
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex align-items-stretch justify-content-center">
                                                                                            <input type="checkbox" class="btn-check btn-face-" id="btncheck146" name="group37_3" value="1">
                                                                                            <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck146">
                                                                                                ABORDAJE TERAPÉUTICO DE LA INSUFICIENCIA CARDÍACA
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex align-items-stretch justify-content-center">
                                                                                            <input type="checkbox" class="btn-check btn-face-" id="btncheck147" name="group37_4" value="1">
                                                                                            <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck147">
                                                                                                HIPERTENSIÓN ARTERIAL. RETOS ACTUALES PARA UNA VIEJA Y CONOCIDA ENFERMEDAD
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex align-items-stretch justify-content-center">
                                                                                            <input type="checkbox" class="btn-check btn-face-" id="btncheck152" name="group37_5" value="1">
                                                                                            <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck152">
                                                                                                DIABETES TIPO 2: HEMOS CAMBIADO EL ENFOQUE Y LA TERAPÉUTICA
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 d-flex align-items-stretch justify-content-center">
                                                                                            <input type="checkbox" class="btn-check btn-face-" id="btncheck153" name="txt_preg_8" value="1">
                                                                                            <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck153">
                                                                                                ESTADO ACTUAL DEL TRATAMIENTO DE LA OBESIDAD
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                                <li class="mt-4">
                                                                                    <p>5. Desde el punto de vista cientifico y académico, ¿cuál es su valoración del Foro CardioMetabólico?</p>
                                                                                    <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-green" id="btncheck555" name="group2" required value="3">
                                                                                            <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck555">
                                                                                                <i class="far fa-grin-beam"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-yellow" id="btncheck556" name="group2" required value="2">
                                                                                            <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck556">
                                                                                                <i class="far fa-grin"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-orange" id="btncheck557" name="group2" required value="1">
                                                                                            <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck557">
                                                                                                <i class="far fa-meh"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-red" id="btncheck558" name="group2" required value="0">
                                                                                            <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck558">
                                                                                                <i class="far fa-frown"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                                <li class="mt-4">
                                                                                    <p>6. Calidad de las instalaciones (alojamiento y salones).</p>
                                                                                    <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-green" id="btncheck8" name="group3" required value="3">
                                                                                            <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck8">
                                                                                                <i class="far fa-grin-beam"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-yellow" id="btncheck9" name="group3" required value="2">
                                                                                            <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck9">
                                                                                                <i class="far fa-grin"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-orange" id="btncheck10" name="group3" required value="1">
                                                                                            <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck10">
                                                                                                <i class="far fa-meh"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-red" id="btncheck11" name="group3" required value="0">
                                                                                            <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck11">
                                                                                                <i class="far fa-frown"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>

                                                                                    </div>
                                                                                </li>

                                                                                <li class="mt-4">
                                                                                    <p>7. Valoración global del evento (traslados, alojamiento, alimentación, atención del staff tecnofarma)</p>
                                                                                    <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-green" id="btncheck12" name="group4" required value="3">
                                                                                            <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck12">
                                                                                                <i class="far fa-grin-beam"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-yellow" id="btncheck13" name="group4" required value="2">
                                                                                            <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck13">
                                                                                                <i class="far fa-grin"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-orange" id="btncheck14" name="group4" required value="1">
                                                                                            <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck14">
                                                                                                <i class="far fa-meh"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                        <div class="col-3">
                                                                                            <input type="radio" class="btn-check btn-face-red" id="btncheck15" name="group4" required value="0">
                                                                                            <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck15">
                                                                                                <i class="far fa-frown"></i>
                                                                                            </label>
                                                                                            <h6></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>

                                                                                <li class="mt-4">
                                                                                    <p>8. Desea agregar algún comentario adicional.</p>


                                                                                    <div class="row">
                                                                                        <div class="col-md-12">

                                                                                            <textarea name="txt_preg_10" id="txt_preg_10" class="form-control"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                                <li>
                                                                                    <div class="row mt-3">
                                                                                        <div class="col-md-6 m-auto">
                                                                                            <button class="btn btn-secondary" id="btnEnviar" >Enviar respuestas y descargar constancia</button>
                                                                                            
                                                                                            <a href="" id="btn_download_pdf" style="display: none;">descargar</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>


                                                                            </div>
                                                                        </ul>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    

</body>



<?php echo $footer; ?>
<script>
        $(document).ready(function(){

            $("#email").on("blur",function(){
                
                var usuario = $(this).val();
                console.log(usuario);
                $.ajax({
                    type:"POST",
                    // async: false,
                    url: "/EncuestaSatisfaccion/isUserValidate",
                    data: {usuario},
                    success: function(data) {
                        console.log(data);
                        if(data=="true"){
                            $('#btnEnviar').attr("disabled", false);
                            $('#msg_email').html('');
                            response = true;
                        }else{
                            $('#btnEnviar').attr("disabled", true);
                            $('#msg_email').html('Este email no fue registrado en 10° FORO CARDIOMETABÓLICO Aso Cardio 2023');
                        }
                    }
                });
            });

            $("#btn_prueba").on("click", function(){
                $("#btn_download_pdf").attr("href", '../PDF/vsMNShBOU5.pdf'); 
                $("#btn_download_pdf").attr("download","");
                $("#btn_download_pdf")[0].click();
            });

            $("#form_encuesta").on("submit", function(event){
               event.preventDefault();
                var formData = $(this).serialize();

                // for (var value of formData.values()) {
                //     console.log(value);
                // }

                $.ajax({
                    url: "/EncuestaSatisfaccion/saveEncuesta",
                    type: "POST",
                    data: formData, 
                    dataType: 'json',                
                    beforeSend: function() {
                        console.log("Procesando....");
                    },
                    success: function(respuesta) {
                        if(respuesta.status == 'success'){
                            $("#btn_download_pdf").attr("href", '../PDF/'+respuesta.clave+'.pdf'); 
                            $("#btn_download_pdf").attr("download","");
                            $("#btn_download_pdf")[0].click();

                            Swal.fire(respuesta.msg, "", respuesta.status).
                                then((value) => {       
                                                      
                                window.location.replace("https://forolatamcardiometabolico.com/EncuestaSatisfaccion/");
                            });                
                        }else if(respuesta.status == 'success_2'){
                            Swal.fire(respuesta.msg, respuesta.msg2, 'success').
                                then((value) => {       
                                                      
                                window.location.replace("https://forolatamcardiometabolico.com/EncuestaSatisfaccion/");
                            });
                        }else{
                            Swal.fire(respuesta.msg, "", respuesta.status).
                                then((value) => {
                                window.location.replace("https://forolatamcardiometabolico.com/EncuestaSatisfaccion/");
                            });
                        }
                       
                        console.log(respuesta);
                        console.log(respuesta.msg);
                        console.log(respuesta.status);
                    },
                    error: function(respuesta) {
                        console.log(respuesta);
                    }
                });                
            });
        });
    </script> 