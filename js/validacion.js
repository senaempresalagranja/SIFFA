$(document).on("ready", inicio);

//AQUI ABAJO ES PARA HACER QUE SUME LAS BASES AUTOMATICAMENTE


function bases_automaticas() {
      var Al=parseFloat(document.getElementById('Al').value);
                    var Ca=parseFloat(document.getElementById('Ca').value);
                    var Mg=parseFloat(document.getElementById('Mg').value);
                    var K=parseFloat(document.getElementById('K').value);
                    var Na=parseFloat(document.getElementById('Na').value);
var CICE=parseFloat(document.getElementById('CICE').value=(Al+Ca+Mg+K+Na).toFixed(2));

 var porcentaje_Al=parseFloat(document.getElementById('porcentaje_Al').value=(Al/CICE*100).toFixed(2));
                    var porcentaje_Na=parseFloat(document.getElementById('porcentaje_Na').value=(Na/CICE*100).toFixed(2));


};



 


//PARA REALIZAR ESO EN TIEMPO REAL

function inicio(){
  $("#clima").keyup(validar_clima); //esto es para validar en tiempo real
  $("#hectarea").keyup(validar_hectarea); //esto es para validar en tiempo real
  $("#profundidad").keyup(validar_profundidad); //esto es para validar en tiempo real
  $("#densidad_aparente").keyup(validar_densidad_aparente); //esto es para validar en tiempo real
  $("#PH").keyup(validar_PH); //esto es para validar en tiempo real
  $("#MO").keyup(validar_MO); //esto es para validar en tiempo real
  $("#CO").keyup(validar_CO); //esto es para validar en tiempo real
  $("#P").keyup(validar_P); //esto es para validar en tiempo real
  $("#Al").keyup(validar_Al); //esto es para validar en tiempo real
  $("#Ca").keyup(validar_Ca); //esto es para validar en tiempo real
  $("#Mg").keyup(validar_Mg); //esto es para validar en tiempo real
  $("#K").keyup(validar_K); //esto es para validar en tiempo real
  $("#Na").keyup(validar_Na); //esto es para validar en tiempo real
  $("#CICE").keyup(validar_CICE); //esto es para validar en tiempo real
  $("#S").keyup(validar_S); //esto es para validar en tiempo real
  $("#Fe").keyup(validar_Fe); //esto es para validar en tiempo real
  $("#Mn").keyup(validar_Mn); //esto es para validar en tiempo real
  $("#Cu").keyup(validar_Cu); //esto es para validar en tiempo real
  $("#Zn").keyup(validar_Zn); //esto es para validar en tiempo real
  $("#B").keyup(validar_B); //esto es para validar en tiempo real
  $("#porcentaje_Al").keyup(validar_porcentaje_Al); //esto es pra validar en tiempo real
  $("#porcentaje_Na").keyup(validar_porcentaje_Na); //esto es pra validar en tiempo real
  $("#CE").keyup(validar_CE); //esto es para validar en tiempo real
  $('#cultivo').keyup(validar_cultivo);
  $("#numero_muestra").keyup(validar_numero_muestra);
  $("#lote").keyup(validar_lote);
    $("#finca").keyup(validar_finca);
    $("#laboratorio").keyup(validar_laboratorio);

$(document).keyup(bases_automaticas);



  $("#calcular").click(validar);
 
  
};


function validar () {
  if (  validar_finca()==true && validar_lote()==true && validar_cultivo()==true && validar_hectarea()==true && validar_profundidad()==true && validar_clima()==true && validar_densidad_aparente()==true && validar_PH()==true && validar_MO()==true  && validar_P()==true && validar_Al()==true && validar_Ca()==true && validar_Mg()==true &&
  validar_K()==true && validar_Na()==true && validar_S()==true && validar_Fe()==true && validar_Mn()==true &&validar_Cu()==true &&
  validar_Zn()==true && validar_B()==true && validar_CE()==true  ) {
    graficos();

  }else {
    swal("Error","Algunos Campos Estan Vacios o Incorrectos Por Favor Revíselos", "error");

  }
};

function validar_clima () {
 var clima=document.getElementById('clima').value;

if (clima=="Selecciona") {

    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_clima").attr("class", "form-group has-error has-feedback");
        $("#clima").parent().children("span").text("Debes elegir una Opcion").show();
    $("#clima").parent().append('<span id="icono_texto" class="icon icon-cancel-circle form-control-feedback"></span>');
    return false;


}else {
     $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_clima").attr("class", "form-group has-success has-feedback");
     $("#clima").parent().children("span").text("").show();
    $("#clima").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
}

};


function validar_densidad_aparente () {
 var densidad_aparente=parseFloat(document.getElementById('densidad_aparente').value);
 if(densidad_aparente==null  || densidad_aparente.length==0 || /^\s+$/.test(densidad_aparente) || densidad_aparente<0){
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_densidad_aparente").attr("class", "form-group has-error  has-feedback");
    $("#densidad_aparente").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }
  else if (isNaN(densidad_aparente)) {
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_densidad_aparente").attr("class", "form-group has-error has-feedback");
        $("#densidad_aparente").parent().children("span").text("Debes ingresar un numero").show();
    $("#densidad_aparente").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {

 $("#densidad_aparente").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_densidad_aparente").attr("class", "form-group has-success has-feedback");
    $("#densidad_aparente").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };

};
function validar_profundidad() {
  var profundidad=parseFloat(document.getElementById('profundidad').value);

  if(profundidad==null  || profundidad.length==0 || /^\s+$/.test(profundidad)|| profundidad<0){

    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_profundidad").attr("class", "form-group has-error  has-feedback");
    $("#profundidad").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

    return false;

  }
  else if (isNaN(profundidad)) {
     $("#profundidad").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_profundidad").attr("class", "form-group has-error has-feedback");
    $("#profundidad").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {

    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_profundidad").attr("class", "form-group has-success has-feedback");
       $("#profundidad").parent().children("span").text("").show();
    $("#profundidad").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
}

function validar_hectarea() {
  var hectarea=parseFloat(document.getElementById('hectarea').value);

 if(hectarea==null  || hectarea.length==0 || /^\s+$/.test(hectarea)|| hectarea<0){

    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_hectarea").attr("class", "form-group has-error  has-feedback");
    $("#hectarea").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

    return false;

  }
  else if (isNaN(hectarea)) {
    $("#hectarea").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_hectarea").attr("class", "form-group has-error has-feedback");
    $("#hectarea").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_hectarea").attr("class", "form-group has-success has-feedback");
     $("#hectarea").parent().children("span").text("").show();
    $("#hectarea").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
}

function validar_PH(){
  var PH=parseFloat(document.getElementById('PH').value);

  if(PH==null  || PH.length==0 || /^\s+$/.test(PH)|| PH<0){
    
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_PH").attr("class", "form-group has-error  has-feedback");
    $("#PH").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');

    return false;

  }
  else if (isNaN(PH)) {
    $("#PH").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_PH").attr("class", "form-group has-error has-feedback");
    $("#PH").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_PH").attr("class", "form-group has-success has-feedback");
    $("#PH").parent().children("span").text("").show();
    $("#PH").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_MO() {
  var MO=parseFloat(document.getElementById('MO').value);

  if(MO==null  || MO.length==0 || /^\s+$/.test(MO)|| MO<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_MO").attr("class", "form-group has-error  has-feedback");
    $("#MO").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }
  else if (isNaN(MO)) {
    $("#MO").parent().children("span").text("Debes ingresar un numero").show();
    
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_MO").attr("class", "form-group has-error has-feedback");
    $("#MO").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#MO").parent().children("span").text("").show();

    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_MO").attr("class", "form-group has-success has-feedback");
    $("#MO").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');
    
    return true;
  };

};
function validar_CO() {
  var CO=parseFloat(document.getElementById('CO').value);

  if(CO==null  || CO.length==0 || /^\s+$/.test(CO)|| CO<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_CO").attr("class", "form-group has-error  has-feedback");
    $("#CO").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }
  else if (isNaN(CO)) {
     $("#CO").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_CO").attr("class", "form-group has-error has-feedback");
    $("#CO").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#CO").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_CO").attr("class", "form-group has-success has-feedback");
    $("#CO").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};


function validar_P() {

  var P=parseFloat(document.getElementById('P').value);

  if(P==null  || P.length==0 || /^\s+$/.test(P)|| P<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_P").attr("class", "form-group has-error  has-feedback");
    $("#P").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }
  else if (isNaN(P)) {
    $("#P").parent().children("span").text("Debes ingresar un numero").show();

    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_P").attr("class", "form-group has-error has-feedback");
    $("#P").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#P").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_P").attr("class", "form-group has-success has-feedback");
    $("#P").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };

};
function validar_Al(){
  var Al=parseFloat(document.getElementById('Al').value);


  if(Al==null  || Al.length==0 || /^\s+$/.test(Al)|| Al<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Al").attr("class", "form-group has-error  has-feedback");
    $("#Al").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }
  else if (isNaN(Al)) {
    $("#Al").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Al").attr("class", "form-group has-error has-feedback");
    $("#Al").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#Al").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Al").attr("class", "form-group has-success has-feedback");
    $("#Al").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };

};

function validar_Ca() {
  var Ca=parseFloat(document.getElementById('Ca').value);
  if(Ca==null  || Ca.length==0 || /^\s+$/.test(Ca) || Ca<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Ca").attr("class", "form-group has-error  has-feedback");
    $("#Ca").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }
  else if (isNaN(Ca)) {
    $("#Ca").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Ca").attr("class", "form-group has-error has-feedback");
    $("#Ca").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#Ca").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Ca").attr("class", "form-group has-success has-feedback");
    $("#Ca").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };

};

function validar_Mg() {

  var Mg=parseFloat(document.getElementById('Mg').value);
  if(Mg==null  || Mg.length==0 || /^\s+$/.test(Mg)|| Mg<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Ca").attr("class", "form-group has-error  has-feedback");
    $("#Ca").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }
  else if (isNaN(Mg)) {
    $("#Mg").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Mg").attr("class", "form-group has-error has-feedback");
    $("#Mg").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#Mg").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Mg").attr("class", "form-group has-success has-feedback");
    $("#Mg").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_K(){

  var K=parseFloat(document.getElementById('K').value);

  if(K==null  || K.length==0 || /^\s+$/.test(K)|| K<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_K").attr("class", "form-group has-error  has-feedback");
    $("#K").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(K)) {
     $("#K").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_K").attr("class", "form-group has-error has-feedback");
    $("#K").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#K").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_K").attr("class", "form-group has-success has-feedback");
    $("#K").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_Na() {
  var Na=parseFloat(document.getElementById('Na').value);

  if(Na==null  || Na.length==0 || /^\s+$/.test(Na)|| Na<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Na").attr("class", "form-group has-error  has-feedback");
    $("#Na").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(Na)) {
     $("#Na").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Na").attr("class", "form-group has-error has-feedback");
    $("#Na").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#Na").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Na").attr("class", "form-group has-success has-feedback");
    $("#Na").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_CICE(){

  var CICE=parseFloat(document.getElementById('CICE').value);

  if(CICE==null  || CICE.length==0 || /^\s+$/.test(CICE)){



    $("#CICE").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_CICE").attr("class", "form-group has-success has-feedback");
    $("#CICE").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_S() {
  var S=parseFloat(document.getElementById('S').value);
  if(S==null  || S.length==0 || /^\s+$/.test(S)|| S<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_S").attr("class", "form-group has-error  has-feedback");
    $("#S").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(S)) {
     $("#S").parent().children("span").text("Debes ingresar un numero").show();
    $("#S").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_S").attr("class", "form-group has-error has-feedback");
    $("#S").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#S").parent().children("span").text("").show();
    $("#S").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_S").attr("class", "form-group has-success has-feedback");
    $("#S").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_Fe(){
  var Fe=parseFloat(document.getElementById('Fe').value);

  if(Fe==null  || Fe.length==0 || /^\s+$/.test(Fe)|| Fe<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Fe").attr("class", "form-group has-error  has-feedback");
    $("#Fe").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(Fe)) {
     $("#Fe").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Fe").attr("class", "form-group has-error has-feedback");
    $("#Fe").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#Fe").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Fe").attr("class", "form-group has-success has-feedback");
    $("#Fe").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_Mn(){
  var Mn=parseFloat(document.getElementById('Mn').value);

  if(Mn==null  || Mn.length==0 || /^\s+$/.test(Mn)|| Mn<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Mn").attr("class", "form-group has-error  has-feedback");
    $("#Mn").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(Mn)) {
     $("#Mn").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Mn").attr("class", "form-group has-error has-feedback");
    $("#Mn").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#Mn").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Mn").attr("class", "form-group has-success has-feedback");
    $("#Mn").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_Cu(){

  var Cu=parseFloat(document.getElementById('Cu').value);


  if(Cu==null  || Cu.length==0 || /^\s+$/.test(Cu)|| Cu<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Cu").attr("class", "form-group has-error  has-feedback");
    $("#Cu").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(Cu)) {
     $("#Cu").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Cu").attr("class", "form-group has-error has-feedback");
    $("#Cu").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#Cu").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Cu").attr("class", "form-group has-success has-feedback");
    $("#Cu").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_Zn(){

  var Zn=parseFloat(document.getElementById('Zn').value);
  if(Zn==null  || Zn.length==0 || /^\s+$/.test(Zn)|| Zn<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Zn").attr("class", "form-group has-error  has-feedback");
    $("#Zn").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(Zn)) {
     $("#Zn").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Zn").attr("class", "form-group has-error has-feedback");
    $("#Zn").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#Zn").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_Zn").attr("class", "form-group has-success has-feedback");
    $("#Zn").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_B() {

  var B=parseFloat(document.getElementById('B').value);

  if(B==null  || B.length==0 || /^\s+$/.test(B)|| B<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_B").attr("class", "form-group has-error  has-feedback");
    $("#B").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(B)) {
     $("#B").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_B").attr("class", "form-group has-error has-feedback");
    $("#B").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#B").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_B").attr("class", "form-group has-success has-feedback");
    $("#B").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_porcentaje_Al() {
  var porcentaje_Al=parseFloat(document.getElementById('porcentaje_Al').value);

  if(porcentaje_Al==null  || porcentaje_Al.length==0 || /^\s+$/.test(porcentaje_Al)){


    $("#porcentaje_Al").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_porcentaje_Al").attr("class", "form-group has-success has-feedback");
    $("#porcentaje_Al").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};


function validar_porcentaje_Na(){
  var porcentaje_Na=parseFloat(document.getElementById('porcentaje_Na').value);

  if(porcentaje_Na==null  || porcentaje_Na.length==0 || /^\s+$/.test(porcentaje_Na)){


    $("#porcentaje_Na").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_porcentaje_Na").attr("class", "form-group has-success has-feedback");
    $("#porcentaje_Na").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
};

function validar_CE() {
  var CE=parseFloat(document.getElementById('CE').value);

  if(CE==null  || CE.length==0 || /^\s+$/.test(CE)|| CE<0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_CE").attr("class", "form-group has-error  has-feedback");
    $("#CE").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(CE)) {
    $("#CE").parent().children("span").text("Debes ingresar un numero").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_CE").attr("class", "form-group has-error has-feedback");
    $("#CE").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#CE").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_CE").attr("class", "form-group has-success has-feedback");
    $("#CE").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
}



function validar_finca() {
  var finca=document.getElementById('finca').value;

if (finca=="Selecciona") {
    $("#finca").parent().children("span").text("Selecciona un Cultivo").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_finca").attr("class", "form-group has-error has-feedback");
    $("#finca").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;



}else{


      $("#finca").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_finca").attr("class", "form-group has-success has-feedback");
    $("#finca").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
}


}


function validar_cultivo() {
  var cultivo=document.getElementById('cultivo').value;

if (cultivo=="Selecciona") {
    $("#cultivo").parent().children("span").text("Selecciona un Cultivo").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_cultivo").attr("class", "form-group has-error has-feedback");
    $("#cultivo").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;



}else{


      $("#cultivo").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_cultivo").attr("class", "form-group has-success has-feedback");
    $("#cultivo").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
}


}


function validar_lote() {
  var lote=document.getElementById('lote').value;

if (lote=="Selecciona") {
    $("#lote").parent().children("span").text("Selecciona un Cultivo").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_lote").attr("class", "form-group has-error has-feedback");
    $("#lote").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;



}else{


      $("#lote").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_lote").attr("class", "form-group has-success has-feedback");
    $("#lote").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
}


}


function validar_laboratorio() {
  var laboratorio=document.getElementById('laboratorio').value;

if (laboratorio=="Selecciona") {
    $("#laboratorio").parent().children("span").text("Selecciona un Cultivo").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_laboratorio").attr("class", "form-group has-error has-feedback");
    $("#laboratorio").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;



}else{


      $("#laboratorio").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_laboratorio").attr("class", "form-group has-success has-feedback");
    $("#laboratorio").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
}


}

function validar_numero_muestra() {
  var numero_muestra=parseFloat(document.getElementById('numero_muestra').value);

  if(numero_muestra==null  || numero_muestra.length==0 || /^\s+$/.test(numero_muestra)|| numero_muestra<=0){


    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_numero_muestra").attr("class", "form-group has-error  has-feedback");
    $("#numero_muestra").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else if (isNaN(numero_muestra)) {
    $("#numero_muestra").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_numero_muestra").attr("class", "form-group has-error has-feedback");
    $("#numero_muestra").parent().append('<span id="icono_texto" class="icon   icon-cancel-circle form-control-feedback"></span>');
    return false;

  }else {
    $("#numero_muestra").parent().children("span").text("").show();
    $("#icono_texto").remove();//ACA ES PAFRA QUE NO SE REPITA LOS ICONOS CON EL ID DEL ESPAN QUE CREO CON EL OCONO
    $("#elemento_numero_muestra").attr("class", "form-group has-success has-feedback");
    $("#numero_muestra").parent().append('<span id="icono_texto" class="icon  icon-checkmark form-control-feedback"></span>');

    return true;
  };
}


