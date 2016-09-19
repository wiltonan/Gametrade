function fn_httpservice(){
	var xmlhttp=false; 
	try 
	{ 
		// Creacion del objeto AJAX para navegadores no IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
	catch(e)
	{ 
		try
		{ 
			// Creacion del objet AJAX para IE 
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		} 
		catch(E) { xmlhttp=false; }
	}
	if (!xmlhttp && typeof XMLHttpRequest!="undefined") { xmlhttp=new XMLHttpRequest(); } 

	return xmlhttp; 
}

function isdate(strdate){
v_state=false;
if(strdate.indexOf("/")>0){
	v_day=strdate.substr(0,strdate.indexOf("/"))
	if(v_day>0 &&  v_day<32){
		strdate=strdate.substr(strdate.indexOf("/")+1)
		v_month=strdate.substr(0,strdate.indexOf("/"))
		if(v_month>0 &&  v_month<13){
			strdate=strdate.substr(strdate.indexOf("/")+1)
			if(strdate>1900 &&  strdate<2020){
				v_state=true;
			}
		}
	}
}
return v_state;

}


function toCurrency (v_var){
	var ic=0;
	var n_val="";
	var oldn=v_var;
	while(v_var.length>0 ){
		n_val = v_var.substring(v_var.length - 3)+"."+n_val; 
		v_var=v_var.substring(0,v_var.length - 3)
	}  
	return n_val.substring(0,n_val.length - 1);
	
}

function message(cell){
	v_code=cellday[cell];
	alert(v_code);
	alert(2555555);
	
}
