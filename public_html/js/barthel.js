$(window).on("load",inicio);

function inicio(){
    $("[name='uno']").on("change", calcular);
    $("[name='dos']").on("change", calcular);
    $("[name='tres']").on("change", calcular);
    $("[name='cuatro']").on("change", calcular);
    $("[name='cinco']").on("change", calcular);
    $("[name='seis']").on("change", calcular);
    $("[name='siete']").on("change", calcular);
    $("[name='ocho']").on("change", calcular);
    $("[name='nueve']").on("change", calcular);
    $("[name='diez']").on("change", calcular);

    
    $("[name='unouno']").on("change", calcular2);
    $("[name='dosdos']").on("change", calcular2);
    $("[name='trestres']").on("change", calcular2);
    $("[name='cuatrocuatro']").on("change", calcular2);
    $("[name='cincocinco']").on("change", calcular2);
    $("[name='seisseis']").on("change", calcular2);
    $("[name='sietesiete']").on("change", calcular2);
    $("[name='ochoocho']").on("change", calcular2);
    $("[name='nuevenueve']").on("change", calcular2);
    $("[name='diezdiez']").on("change", calcular2);

    
    $("[name='unopai']").on("change", calcularPAI);
    $("[name='dospai']").on("change", calcularPAI);
    $("[name='trespai']").on("change", calcularPAI);
    $("[name='cuatropai']").on("change", calcularPAI);
    $("[name='cincopai']").on("change", calcularPAI);
    $("[name='seispai']").on("change", calcularPAI);
    $("[name='sietepai']").on("change", calcularPAI);
    $("[name='ochopai']").on("change", calcularPAI);
    $("[name='nuevepai']").on("change", calcularPAI);
    $("[name='diezpai']").on("change", calcularPAI);

    $("#boton2").on("click", calcular2);
}

function calcular(){
    var comer;
    var lavarse;
    var vestirse;
    var arreglarse="";
    var deposiciones="";
    var miccion="";
    var retrete="";
    var trasladarse="";
    var deambular="";
    var escaleras="";
    var relleno=true;
    var mensaje="";
    var contador = 0;
    var texto;

    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia
    if($("[name='uno']").val() == "valuno"){
        comer = "Totalmente independiente";
        contador += 10;
    }else if($("[name='uno']").val()=="valdos"){ 
        comer = "Necesita ayuda para cortar carne, el pan, etc.";
        contador += 5;
    }else if($("[name='uno']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        comer = "Dependiente.";
    }

    

    if($("[name='dos']").val() == "valuno"){
        lavarse = "Independiente, entra y sale solo del baño.";
        contador += 5;
    }else if($("[name='dos']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        lavarse = "Dependiente.";
    }



    if($("[name='tres']").val() == "valuno"){
        vestirse = "Independiente. Capaz de ponerse y quitarse la ropa, abotonarse y atarse los zapatos.";
        contador += 10;
    }else if($("[name='tres']").val()=="valdos"){
        vestirse = "Necesita ayuda.";
        contador += 5;
    }else if($("[name='tres']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        vestirse = "Dependiente.";
    }



    if($("[name='cuatro']").val() == "valuno"){
        arreglarse = "Independiente para lavarse la cara, las manos, peinarse, afeitarse, maquillarse, etc...";
        contador += 5;
    }else if($("[name='cuatro']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        arreglarse = "Dependiente.";
    }



    if($("[name='cinco']").val() == "valuno"){
        deposiciones = "Continencia normal.";
        contador += 10;
    }else if($("[name='cinco']").val()=="valdos"){
        deposiciones = "Ocasionalmente algún episodio de incontinencia, o necesita ayuda para administrarse supositorios o lavativas.";
        contador += 5;
    }else if($("[name='cinco']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        deposiciones = "Incontinencia.";
    }



    if($("[name='seis']").val() == "valuno"){
        miccion = "Continencia normal, o es capaz de cuidarse de la sondsa si tiene una puesta.";
        contador += 10;
    }else if($("[name='seis']").val()=="valdos"){
        miccion = "1 episodio diario como máximo de incontinencia, o necesita ayuda para cuidar de la sonda.";
        contador += 5;
    }else if($("[name='seis']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        miccion = "Incontinencia";
    }



    if($("[name='siete']").val() == "valuno"){
        retrete = "Independiente para ir al cuardo de aseo, quitarse y ponerse la ropa.";
        contador += 10;
    }else if($("[name='siete']").val()=="valdos"){
        retrete = "Necesita ayuda para ir al retrete, pero se limpia solo.";
        contador += 5;
    }else if($("[name='siete']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        retrete = "Dependiente.";
    }



    if($("[name='ocho']").val() == "valuno"){
        trasladarse = "Independiente para ir del sillón a la cama.";
        contador += 15;
    }else if($("[name='ocho']").val()=="valdos"){
        trasladarse = "Mínima ayuda física o supervisión para hacerlo.";
        contador += 10;
    }else if($("[name='ocho']").val()=="valtres"){
        trasladarse = "Necesita gran ayuda, pero es capaz de mantenerse sentado solo.";
        contador += 5;
    }else if($("[name='ocho']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        trasladarse = "Dependiente.";
    }



    if($("[name='nueve']").val() == "valuno"){
        deambular = "Independiente, camina solo 50 metros.";
        contador += 15;
    }else if($("[name='nueve']").val()=="valdos"){
        deambular = "Necesita ayuda física o supervisión para andar 50 metros.";
        contador += 10;
    }else if($("[name='nueve']").val()=="valtres"){
        deambular = "Independiente en silla de ruedas sin ayuda.";
        contador += 5;
    }else if($("[name='nueve']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        deambular = "Dependiente.";
    }



    if($("[name='diez']").val() == "valuno"){
        escaleras = "Independiente para bajar y subir escaleras.";
        contador += 10;
    }else if($("[name='diez']").val()=="valdos"){
        escaleras = "Necesita ayuda física o supervisión para hacerlo.";
        contador += 5;
    }else if($("[name='diez']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        escaleras = "Dependiente.";
    }


    if(contador < 20){
        texto = "Total ";
    }else if(contador >= 20 && contador <= 35){
        texto = "Grave";
    }else if(contador >= 40  && contador <= 55){
        texto = "Incaacidad moderada";
    }else if(contador >= 60 && contador != 100 ){
        texto = "Leve";
    }else{
        texto = "Independiente";
    }

    if(relleno){
        $("#resultado").val(contador);
        $("#resultado1").val(texto);
    }
    return relleno;
}

function calcular2(){
    var comer;
    var lavarse;
    var vestirse;
    var arreglarse="";
    var deposiciones="";
    var miccion="";
    var retrete="";
    var trasladarse="";
    var deambular="";
    var escaleras="";
    var relleno=true;
    var mensaje="";
    var contador = 0;
    var texto;

    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia
    if($("[name='unouno']").val() == "valuno"){
        comer = "Totalmente independiente";
        contador += 10;
    }else if($("[name='unouno']").val()=="valdos"){ 
        comer = "Necesita ayuda para cortar carne, el pan, etc.";
        contador += 5;
    }else if($("[name='unouno']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        comer = "Dependiente.";
    }

    

    if($("[name='dosdos']").val() == "valuno"){
        lavarse = "Independiente, entra y sale solo del baño.";
        contador += 5;
    }else if($("[name='dosdos']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        lavarse = "Dependiente.";
    }



    if($("[name='trestres']").val() == "valuno"){
        vestirse = "Independiente. Capaz de ponerse y quitarse la ropa, abotonarse y atarse los zapatos.";
        contador += 10;
    }else if($("[name='trestres']").val()=="valdos"){
        vestirse = "Necesita ayuda.";
        contador += 5;
    }else if($("[name='trestres']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        vestirse = "Dependiente.";
    }



    if($("[name='cuatrocuatro']").val() == "valuno"){
        arreglarse = "Independiente para lavarse la cara, las manos, peinarse, afeitarse, maquillarse, etc...";
        contador += 5;
    }else if($("[name='cuatrocuatro']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        arreglarse = "Dependiente.";
    }



    if($("[name='cincocinco']").val() == "valuno"){
        deposiciones = "Continencia normal.";
        contador += 10;
    }else if($("[name='cincocinco']").val()=="valdos"){
        deposiciones = "Ocasionalmente algún episodio de incontinencia, o necesita ayuda para administrarse supositorios o lavativas.";
        contador += 5;
    }else if($("[name='cincocinco']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        deposiciones = "Incontinencia.";
    }



    if($("[name='seisseis']").val() == "valuno"){
        miccion = "Continencia normal, o es capaz de cuidarse de la sondsa si tiene una puesta.";
        contador += 10;
    }else if($("[name='seisseis']").val()=="valdos"){
        miccion = "1 episodio diario como máximo de incontinencia, o necesita ayuda para cuidar de la sonda.";
        contador += 5;
    }else if($("[name='seisseis']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        miccion = "Incontinencia";
    }



    if($("[name='sietesiete']").val() == "valuno"){
        retrete = "Independiente para ir al cuardo de aseo, quitarse y ponerse la ropa.";
        contador += 10;
    }else if($("[name='sietesiete']").val()=="valdos"){
        retrete = "Necesita ayuda para ir al retrete, pero se limpia solo.";
        contador += 5;
    }else if($("[name='sietesiete']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        retrete = "Dependiente.";
    }



    if($("[name='ochoocho']").val() == "valuno"){
        trasladarse = "Independiente para ir del sillón a la cama.";
        contador += 15;
    }else if($("[name='ochoocho']").val()=="valdos"){
        trasladarse = "Mínima ayuda física o supervisión para hacerlo.";
        contador += 10;
    }else if($("[name='ochoocho']").val()=="valtres"){
        trasladarse = "Necesita gran ayuda, pero es capaz de mantenerse sentado solo.";
        contador += 5;
    }else if($("[name='ochoocho']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        trasladarse = "Dependiente.";
    }



    if($("[name='nuevenueve']").val() == "valuno"){
        deambular = "Independiente, camina solo 50 metros.";
        contador += 15;
    }else if($("[name='nuevenueve']").val()=="valdos"){
        deambular = "Necesita ayuda física o supervisión para andar 50 metros.";
        contador += 10;
    }else if($("[name='nuevenueve']").val()=="valtres"){
        deambular = "Independiente en silla de ruedas sin ayuda.";
        contador += 5;
    }else if($("[name='nuevenueve']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        deambular = "Dependiente.";
    }



    if($("[name='diezdiez']").val() == "valuno"){
        escaleras = "Independiente para bajar y subir escaleras.";
        contador += 10;
    }else if($("[name='diezdiez']").val()=="valdos"){
        escaleras = "Necesita ayuda física o supervisión para hacerlo.";
        contador += 5;
    }else if($("[name='diezdiez']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        escaleras = "Dependiente.";
    }


    if(contador < 20){
        texto = "Total ";
    }else if(contador >= 20 && contador <= 35){
        texto = "Grave";
    }else if(contador >= 40  && contador <= 55){
        texto = "Incaacidad moderada";
    }else if(contador >= 60 && contador != 100 ){
        texto = "Leve";
    }else{
        texto = "Independiente";
    }
    

    $("#result").val(contador);
    $("#result1").val(texto);
    
}

function marcarSelectsBarthelPAI(stringNumeroBarthel){
	switch(stringNumeroBarthel.charAt(0)){
		case '1': $("[name='unopai']").val('valuno').change();
				break;
		case '2': $("[name='unopai']").val('valdos').change();
		break;
		case '3': $("[name='unopai']").val('valtres').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(1)){
		case '1': $("[name='dospai']").val('valuno').change();
				break;
		case '2': $("[name='dospai']").val('valdos').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(2)){
		case '1': $("[name='trespai']").val('valuno').change();
				break;
		case '2': $("[name='trespai']").val('valdos').change();
		break;
		case '3': $("[name='trespai']").val('valtres').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(3)){
		case '1': $("[name='cuatropai']").val('valuno').change();
				break;
		case '2': $("[name='cuatropai']").val('valdos').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(4)){
		case '1': $("[name='cincopai']").val('valuno').change();
				break;
		case '2': $("[name='cincopai']").val('valdos').change();
		break;
		case '3': $("[name='cincopai']").val('valtres').change();
		break;
		default:
		break;
	}

	switch(stringNumeroBarthel.charAt(5)){
		case '1': $("[name='seispai']").val('valuno').change();
				break;
		case '2': $("[name='seispai']").val('valdos').change();
		break;
		case '3': $("[name='seispai']").val('valtres').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(6)){
		case '1': $("[name='sietepai']").val('valuno').change();
				break;
		case '2': $("[name='sietepai']").val('valdos').change();
		break;
		case '3': $("[name='sietepai']").val('valtres').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(7)){
		case '1': $("[name='ochopai']").val('valuno').change();
				break;
		case '2': $("[name='ochopai']").val('valdos').change();
		break;
		case '3': $("[name='ochopai']").val('valtres').change();
		break;
		case '4': $("[name='ochopai']").val('valcuatro').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(8)){
		case '1': $("[name='nuevepai']").val('valuno').change();
				break;
		case '2': $("[name='nuevepai']").val('valdos').change();
		break;
		case '3': $("[name='nuevepai']").val('valtres').change();
		break;
		case '4': $("[name='nuevepai']").val('valcuatro').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(9)){
		case '1': $("[name='diezpai']").val('valuno').change();
				break;
		case '2': $("[name='diezpai']").val('valdos').change();
		break;
		case '3': $("[name='diezpai']").val('valtres').change();
		break;
		default: 
		break;
	}
}

function calcularPAI(){
	var comer;
    var lavarse;
    var vestirse;
    var arreglarse="";
    var deposiciones="";
    var miccion="";
    var retrete="";
    var trasladarse="";
    var deambular="";
    var escaleras="";
    var relleno=true;
    var mensaje="";
    var contador = 0;
    var texto;

    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia
    if($("[name='unopai']").val() == "valuno"){
        comer = "Totalmente independiente";
        contador += 10;
    }else if($("[name='unopai']").val()=="valdos"){ 
        comer = "Necesita ayuda para cortar carne, el pan, etc.";
        contador += 5;
    }else if($("[name='unopai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        comer = "Dependiente.";
    }

    

    if($("[name='dospai']").val() == "valuno"){
        lavarse = "Independiente, entra y sale solo del baño.";
        contador += 5;
    }else if($("[name='dospai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        lavarse = "Dependiente.";
    }



    if($("[name='trespai']").val() == "valuno"){
        vestirse = "Independiente. Capaz de ponerse y quitarse la ropa, abotonarse y atarse los zapatos.";
        contador += 10;
    }else if($("[name='trespai']").val()=="valdos"){
        vestirse = "Necesita ayuda.";
        contador += 5;
    }else if($("[name='trespai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        vestirse = "Dependiente.";
    }



    if($("[name='cuatropai']").val() == "valuno"){
        arreglarse = "Independiente para lavarse la cara, las manos, peinarse, afeitarse, maquillarse, etc...";
        contador += 5;
    }else if($("[name='cuatropai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        arreglarse = "Dependiente.";
    }



    if($("[name='cincopai']").val() == "valuno"){
        deposiciones = "Continencia normal.";
        contador += 10;
    }else if($("[name='cincopai']").val()=="valdos"){
        deposiciones = "Ocasionalmente algún episodio de incontinencia, o necesita ayuda para administrarse supositorios o lavativas.";
        contador += 5;
    }else if($("[name='cincopai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        deposiciones = "Incontinencia.";
    }



    if($("[name='seispai']").val() == "valuno"){
        miccion = "Continencia normal, o es capaz de cuidarse de la sondsa si tiene una puesta.";
        contador += 10;
    }else if($("[name='seispai']").val()=="valdos"){
        miccion = "1 episodio diario como máximo de incontinencia, o necesita ayuda para cuidar de la sonda.";
        contador += 5;
    }else if($("[name='seispai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        miccion = "Incontinencia";
    }



    if($("[name='sietepai']").val() == "valuno"){
        retrete = "Independiente para ir al cuardo de aseo, quitarse y ponerse la ropa.";
        contador += 10;
    }else if($("[name='sietepai']").val()=="valdos"){
        retrete = "Necesita ayuda para ir al retrete, pero se limpia solo.";
        contador += 5;
    }else if($("[name='sietepai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        retrete = "Dependiente.";
    }



    if($("[name='ochopai']").val() == "valuno"){
        trasladarse = "Independiente para ir del sillón a la cama.";
        contador += 15;
    }else if($("[name='ochopai']").val()=="valdos"){
        trasladarse = "Mínima ayuda física o supervisión para hacerlo.";
        contador += 10;
    }else if($("[name='ochopai']").val()=="valtres"){
        trasladarse = "Necesita gran ayuda, pero es capaz de mantenerse sentado solo.";
        contador += 5;
    }else if($("[name='ochopai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        trasladarse = "Dependiente.";
    }



    if($("[name='nuevepai']").val() == "valuno"){
        deambular = "Independiente, camina solo 50 metros.";
        contador += 15;
    }else if($("[name='nuevepai']").val()=="valdos"){
        deambular = "Necesita ayuda física o supervisión para andar 50 metros.";
        contador += 10;
    }else if($("[name='nuevepai']").val()=="valtres"){
        deambular = "Independiente en silla de ruedas sin ayuda.";
        contador += 5;
    }else if($("[name='nuevepai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        deambular = "Dependiente.";
    }



    if($("[name='diezpai']").val() == "valuno"){
        escaleras = "Independiente para bajar y subir escaleras.";
        contador += 10;
    }else if($("[name='diezpai']").val()=="valdos"){
        escaleras = "Necesita ayuda física o supervisión para hacerlo.";
        contador += 5;
    }else if($("[name='diezpai']").val() == "nada"){
        relleno = false;
        mensaje += "Tienes que seleccionar una opción\n";
    }else{
        escaleras = "Dependiente.";
    }


    if(contador < 20){
        texto = "Total ";
    }else if(contador >= 20 && contador <= 35){
        texto = "Grave";
    }else if(contador >= 40  && contador <= 55){
        texto = "Incaacidad moderada";
    }else if(contador >= 60 && contador != 100 ){
        texto = "Leve";
    }else{
        texto = "Independiente";
    }

    if(relleno){
        $("#resultadopai").val(contador);
        $("#resultado1pai").val(texto);
    }
}

function convBarthelPAI(){
	var relleno = true;

	var result = "";
	if($("[name='unopai']").val() == "valuno"){
        result += "1";
    }else if($("[name='unopai']").val()=="valdos"){ 
        result+="2";
    }else if($("[name='unopai']").val() == "nada"){
		relleno = false;
    }else{
        result+="3";
    }

    

    if($("[name='dospai']").val() == "valuno"){
		result += "1";
    }else if($("[name='dospai']").val() == "nada"){
        relleno = false;
    }else{
        result+="2";
    }



    if($("[name='trespai']").val() == "valuno"){
        result += "1";
    }else if($("[name='trespai']").val()=="valdos"){
        result += "2";
    }else if($("[name='trespai']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='cuatropai']").val() == "valuno"){
        result += "1";
    }else if($("[name='cuatropai']").val() == "nada"){
        relleno = false;
    }else{
        result += "2";
    }



    if($("[name='cincopai']").val() == "valuno"){
        result += "1";
    }else if($("[name='cincopai']").val()=="valdos"){
        result += "2";
    }else if($("[name='cincopai']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='seispai']").val() == "valuno"){
        result += "1";
    }else if($("[name='seispai']").val()=="valdos"){
        result += "2";
    }else if($("[name='seispai']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='sietepai']").val() == "valuno"){
        result += "1";
    }else if($("[name='sietepai']").val()=="valdos"){
        result += "2";
    }else if($("[name='sietepai']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='ochopai']").val() == "valuno"){
        result += "1";
    }else if($("[name='ochopai']").val()=="valdos"){
        result += "2";
    }else if($("[name='ochopai']").val()=="valtres"){
        result += "3";
    }else if($("[name='ochopai']").val() == "nada"){
        relleno = false;
    }else{
        result += "4";
    }



    if($("[name='nuevepai']").val() == "valuno"){
        result += "1";
    }else if($("[name='nuevepai']").val()=="valdos"){
        result += "2";
    }else if($("[name='nuevepai']").val()=="valtres"){
        result += "3";
    }else if($("[name='nuevepai']").val() == "nada"){
        relleno = false;
    }else{
        result += "4";
    }



    if($("[name='diezpai']").val() == "valuno"){
        result += "1";
    }else if($("[name='diezpai']").val()=="valdos"){
        result += "2";
    }else if($("[name='diezpai']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }


	if(!relleno){
		result = "0000000000";
	}

	console.log(result);

	return result;
}