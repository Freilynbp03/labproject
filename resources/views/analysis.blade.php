<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });

</script>
<style>
    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    #grad1 {
        background-color: #9C27B0;
        background-image: linear-gradient(120deg, #FF4081, #81D4FA)
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;
        position: relative
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E
    }

    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
    }

    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue
    }

    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #000000
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative
    }

    #progressbar #serologia:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #quimica:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #paciente:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #hematologia:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #fecales:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #especiales:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: skyblue
    }

    .radio-group {
        position: relative;
        margin-bottom: 25px
    }

    .radio {
        display: inline-block;
    width: 100;
    /* height: 104; */
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgb(0 0 0 / 20%);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px;
    text-align: center;
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }

</style>

<body>
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Digitar Resultados</strong></h2>
                    <p>Algunos datos pueden estar vacios</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="/patients" method="post">
                                {{csrf_field()}}
                                <!-- barra de progreso -->
                                <ul id="progressbar">
                                    <li class="active" id="paciente"><strong>Registar Paciente</strong></li>
                                    <li id="serologia"><strong>Serologia</strong></li>
                                    <li id="hematologia"><strong>Hematologia</strong></li>
                                    <li id="especiales"><strong>Pruebas Especiales</strong></li>
                                    <li id="fecales"><strong>Materias Fecales</strong></li>
                                    <li id="quimica"><strong>Quimica Clinica</strong></li>
                                    <li id="confirm"><strong>Terminar</strong></li>
                                </ul>
                                <!-- segmentos -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Registrar Paciente</h2>
                                        <input type="texto" name="name" placeholder="Nombre" required/>
                                        <input type="text" name="lastname" placeholder="Apellido" required/>
                                        <input type="text" name="nss" placeholder="NSS" required/>
                                        <input type="text" name="age" placeholder="Edad" required/>
                                        <input type="text" name="phone" placeholder="Telefono" required/>
                                        <input type="text" name="unidad" placeholder="Unidad" required/>
                                        <input type="text" name="doctor" placeholder="Doctor" required/>
                                            <div>
                                                <label class="radio inline">
                                                <input type="radio" name="gender" value="male">
                                                <span> Hombre </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span>Mujer </span>
                                            </label>
                                            </div>

                                    
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Siguiente" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Serologia Informacion</h2>
                                        <input type="text" name="vdrl" placeholder="VDRL" />
                                        <input type="text" name="aso" placeholder="ASO" />
                                        <input type="text" name="pcr" placeholder="PCR" />
                                        <input type="text" name="factor" placeholder="Factor R" />
                                        <input type="text" name="gestatest" placeholder="Gestatest" />
                                        <input type="text" name="covid" placeholder="COVID 19" />
                                        <input type="text" name="fotoplasmosis" placeholder="Fotoplasmosis" />


                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Anterior" />
                                    <input type="button" name="next" class="next action-button" value="Siguiente" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Hematologia Informacion</h2>
                                        <input type="text" name="tip" placeholder="TIP. Sanguinea" />
                                        <input type="text" name="eritro" placeholder="Eritrocedimentacion" />
                                        <input type="text" name="sangria" placeholder="T. Sangria" />
                                        <input type="text" name="cuagulacion" placeholder="T. Cuagulacion" />
                                        <input type="text" name="falcemia" placeholder="Falcemia" />
                                    </div> <input type="button" name="previous" class="previous action-button-previous"
                                        value="Anterior" /> <input type="button" name="next" class="next action-button"
                                        value="Siguiente" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Pruebas Especiales Informacion</h2>
                                        <input type="text" name="hvi" placeholder="HIV" />
                                        <input type="text" name="hvc" placeholder="HVC" />
                                        <input type="text" name="hbsag" placeholder="HBSAG" />

                                    </div> 
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Anterior" /> <input type="button" name="next" class="next action-button"
                                        value="Siguiente" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Quimica Clinica Informacion</h2>
                                        <input type="text" name="acido_urico" placeholder="Acido Urico" />
                                        <input type="text" name="colesterol" placeholder="Colesterol" />
                                        <input type="text" name="colesterol_hdl" placeholder="Colesterol HDL" />
                                        <input type="text" name="colesterol_ldl" placeholder="Colesterol LDL" />
                                        <input type="text" name="creatina" placeholder="Creatina" />
                                        <input type="text" name="glicemia" placeholder="Glicemia" />
                                        <input type="text" name="trigliceridos" placeholder="Trigliceridos" />
                                        <input type="text" name="urea" placeholder="Urea" />
                                        <input type="text" name="bilirrubina_t" placeholder="Bilirrubina T" />
                                        <input type="text" name="bilirrubina_d" placeholder="Bilirrubina D" />
                                        <input type="text" name="bilirrubina_i" placeholder="Bilirubina I" />
                                        <input type="text" name="fosfatasa_alcalina" placeholder="Fosfatasa Alcalina" />
                                        <input type="text" name="fosfatasa_asida" placeholder="Fosfatasa Asida" />
                                        <input type="text" name="lipasa" placeholder="Lipasa" />
                                        <input type="text" name="tgo" placeholder="TGO U/L" />
                                        <input type="text" name="tgp" placeholder="TGP U/L" />
                                        

                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Anterior" />
                                    <input type="button" name="next" class="next action-button" value="Siguiente" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Materias Fecales</h2>
                                        <input type="text" name="color" placeholder="Color" />
                                        <input type="text" name="consistencia" placeholder="Consistencia" />
                                        <input type="text" name="quistes" placeholder="Quistes" />
                                        <input type="text" name="larvas" placeholder="Larvas" />
                                        <input type="text" name="sangre" placeholder="Sangre Oculta" />
                                        <input type="text" name="grojos" placeholder="Globulos Rojos" />
                                        <input type="text" name="gblancos" placeholder="Globulos Blancos" />
                                        <input type="text" name="otros" placeholder="Otros" />
                                    </div> 
                                    <input type="submit" name="next" class="next action-button"
                                        value="Registrar" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Registrado Con Exito!</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img
                                                    src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5></h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
