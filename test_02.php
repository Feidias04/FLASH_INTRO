

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"   xml:lang="cs" lang="cs">
<head>
<meta http-equiv="Content-Language" content="cs" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test jazykových znalostí</title>
<style type="text/css">
<!--
form{
	font-family: Calibri, "Arial CE", Arial, Helvetica, sans-serif;
	font-size:18px;
	background-color:#00F
	text-align:left;
		margin-bottom:1em;
		margin-left:0em;
		margin-right:0em;
		text-indent:0em;
		padding:5px 0 0 0;
	}

label{
	display:block;
	width:14em;
	text-align:right;
	float:right;
	width:360;
	
	
	
	
	
	}
	input.reset{
		float:right
	
	margin:2px 1em;
	}
input.submit{
	
	margin:2px 1em;
	}
input.text{
	
	
	
	width:200px;
	
	}

	
	





	

td {
	
	font-family: Calibri, "Arial CE", Arial, Helvetica, sans-serif;
	font-size:18px;
	}

body{
	display:block;
	margin-top:0px;
	padding-top:0px;
	vertical-align:middle;
	
	
	background: url("poz4.gif") repeat  center #FFFFFF;
	
	}
	
	#stred {
	
	width:100%;
	height:100%;
	
	
	
	margin-top:7px;
	margin-bottom:1px;
	margin-left:0px;
	margin-right:0px;
	padding-bottom:3px;
	
	text-align:center;
	border: double 3px #F60 ;
	z-index:9999;
	
	}
		
	
	.textik{
		text-align:left;
		margin-bottom:1em;
		padding-left:1em;
		text-indent:1em;
		padding-right:2em;
		font-family: Calibri, "Arial CE", Arial, Helvetica, sans-serif;
		font-size:18px;
		}
		
		hr {
		margin-top:3px; 
		margin-bottom:3px;
		background-color:#F60;
		color:#F60;
		width:100%;
		height:1px;
		}
		
	
		


 
			
			
			
	-->
	

</style>

  <script type="text/javascript" src="test.js"></script>    
  
      <script type="text/javascript" src="jsfunkce2.js"></script> 
<script type="text/javascript" src="test_02.js"></script>


<script type="text/javascript" >



		//var poli = new Array();
	poli = parent.document.form1.text1.value;
	function zob(){
	var pismenka = poli.split("");
		//window.alert(pismenka)
			//window.alert(pismenka.length)
			//return pismenka
		}
	

Array.prototype.sum = function() {
  return (! this.length) ? 0 : this.slice(1).sum() +
      ((typeof this[0] == 'number') ? this[0] : 0);
};
	
	
	
	

 
 


function rite(){
	procenta();
	var rig = parent.document.form_02.textar.value
	var rig2 = parent.document.form_02.textar2.value
	window.alert(rig);
	}


 function formal2(){
	 
	 if(document.myform.email.value==""){alert('Vyplňte prosím laskavě Vaší emailovou adresu.')}
	 else{
				procenta();
				var rig2 = parent.document.form_02.textar2.value
					var rig = parent.document.form_02.textar.value
				//window.alert(rig);
				//window.alert(rig);
				var form = document.createElement("form");
			form.setAttribute("action", "test_03.php" ); //javascript:noveokno1('test_03.php')
			form.setAttribute("method", "POST");
			form.setAttribute("target", "_self");
			//form.setAttribute("onSubmit", "setValue()");
			form.setAttribute("id", "f2");
			
			var input = document.createElement('input');   
			input.setAttribute("type", 'hidden');
			 input.setAttribute("name", 'test');
			 input.setAttribute("value", vys); 
			
			jihlava_f();
			
			 var input1 = document.createElement('input');   
			input1.setAttribute("type", 'hidden');
			 input1.setAttribute("name", 'jihl');
			 if(misto == null){
				 input1.setAttribute("value", " nezadáno");}
			 else{input1.setAttribute("value", misto); }
			
			var input2 = document.createElement('input');   
			input2.setAttribute("type", 'hidden');
			 input2.setAttribute("name", 'spravne_od');
			 input2.setAttribute("value", rig); 
			 
			 var input3 = document.createElement('input');   
			input3.setAttribute("type", 'hidden');
			 input3.setAttribute("name", 'nespravne_od');
			 input3.setAttribute("value", rig2); 
			 
			  var input4 = document.createElement('input');   
			input4.setAttribute("type", 'hidden');
			 input4.setAttribute("name", 'pomer_od');
			 input4.setAttribute("value", pomer); 
			
			form.appendChild(input4);
			form.appendChild(input3);
			form.appendChild(input2);
			form.appendChild(input1);
			
			form.appendChild(input);
			  form.appendChild(document.myform.email);
			   form.appendChild(document.myform.jmeno);
				form.appendChild(document.myform.prijmeni);
				 form.appendChild(document.myform.telefon);
				 
				
			//form.appendChild(parent.document.form1.text1);
			
			document.body.appendChild(form);
			
			document.getElementById("f2").submit();
			
			  
			document.body.removeChild(form);
			//form.appendChild(document.myform.captcha) ;
	 }
}

var ca = 0;

 
 function captch(){
	mail_02 = document.myform.email.value;
	parent.document.form_02.email_02.value=mail_02; 
	jmeno_2 = document.myform.jmeno.value;
	parent.document.form_02.jmeno_02.value=jmeno_2;
	prijmeni_2 = document.myform.prijmeni.value;
	parent.document.form_02.prijmeni_02.value=prijmeni_2;
	telefon_2 = document.myform.telefon.value;
	parent.document.form_02.telefon_02.value=telefon_2;
	
	/*if(document.myform.Jihlava.checked == false){
		parent.document.form_02.Jihlava_02.checked = false}
		else{
		parent.document.form_02.Jihlava_02.checked = true
		}
		
		if(document.myform.Trebic.checked == false){
		parent.document.form_02.Trebic_02.checked = false}
		else{
		parent.document.form_02.Trebic_02.checked = true
		}
		
		if(document.myform.Zdar.checked == false){
		parent.document.form_02.Zdar_02.checked = false}
		else{
		parent.document.form_02.Zdar_02.checked = true
		}*/
	
	
	var captc = new Array("captcha.php", "captcha1.php", "captcha2.php", "captcha3.php");
	 document.capt.src=captc[ca];
	  ca++
	 if(ca==3){
		 ca=0}
	 }
	 
	

	//parent.document.form1.text1.value=arv	

	//parent.document.form1.text1.value=arv	
	
	
	
	
	
	</script>


</head>

<body onload="napis();" onclick="javascript: procenta();"  > <!--onclick="javascript:alert(poli);  procenta();"--> 









<table  align="center" id="stred"  width="100%"  >
<tr>
<td>


<form method="post" action="" name="myform" class="textform" id="forma2">
 

<table  align="center"  class="tabule" width="720" cellpadding="3"  cellspacing="0" border="0" > 
          
            <tr> 
            <td colspan="6" align="center"  style="padding-top:-6px; padding-bottom:5px"><div   style="text-align:center; margin-bottom:4px; margin-top:4px;  font-family: Calibri, 'Arial CE', Arial, Helvetica, sans-serif; font-size:x-large;  " >Závěr</div>
            </td> 
            </tr> 
            <tr> 
            <td colspan="6" align="center" style=" padding-bottom:6px" class="textik">
                        Blahopřejeme Vám k úspěšnému zakončení testu Vašich jazykových znalostí. Výsledky tohoto testu Vám budou zaslány na e-mailovou adresu, kterou prosím uveďte spolu se jménem, příjmením a telefonním číslem do tohoto textového formuláře a následně klikněte na tlačítko odeslat.
            </td> 
            </tr> 
            <tr>
            	<td colspan="6"><hr width="100%" /></td></tr>
            <tr> 
                <td colspan="3" width="50%"><label for="email">Zadejte Vaši e-mailovou adresu</label>
                </td> 
                <td width="50%" colspan="3" align="left"><input type="text" size="30" name="email" id="email" class="povinne text" />
                </td> 
            </tr> 
            <tr> 
                <td colspan="3"   width="50%"><label for="jmeno">Vaše Jméno </label> 
                </td> 
                <td colspan="3"   width="50%"  align="left" > <input type="text" size="15" name="jmeno" id="jmeno" class="povinne text" />
                </td> 
            </tr> 
            <tr> 
                <td colspan="3"   width="50%"><label for="prijmeni">Vaše příjmení</label>
                </td> 
                <td colspan="3"  align="left"   width="50%" > <input type="text" size="15" name="prijmeni" id="prijmeni" class="povinne text" />
                </td> 
            </tr> 
            <tr> 
            	<td   colspan="3"   width="50%"  ><label for="telefon">Telefonní číslo </label> 
            	</td> 
            	<td colspan="3" align="left"   width="50%"  > <input type="text" size="15" name="telefon" id="telefon" class="telefon text" />
            </td> 
           
          </tr> 
           
          <tr> 
           
            <td colspan="3"    width="50%"  style="vertical-align:top"><label for="jihlava">Místo případného studia </label></td> 
            <td colspan="3"   width="50%"   align="left" style="padding-top:10px;"><input type="radio" id="jihlava" name="misto_1" value="Jihlava"  onclick="jihlava_f()" /> Jihlava <br />
        	<input type="radio" id="Trebic" name="misto_1" value=" Třebíč"  onclick="jihlava_f()"  /> Třebíč<br />
        	<input type="radio" id="Zdar" name="misto_1" value=" Žďár nad Sázavou"  onclick="jihlava_f()"  /> Žďár nad Sázavou<br />
            </td> 
          </tr> 
          <tr>
             <td colspan="6"><hr width="100%" /> 
             </td>
          </tr>   
          <tr>
             <td colspan="6" align="center">
          <span>Před odesláním prosím opište vygenerovaný kód do dialogového okna.</span>  </td></tr>
          <tr><td style="vertical-align:top; height:32px" width="150"  >&nbsp;</td>
            <td  width="150"  style="vertical-align:top; height:32px"  >&nbsp;</td>
            <td colspan="2" style="vertical-align:top; height:32px" align="center"  ><img src="captcha.php" alt="CAPTCHA" name="capt" width="120" height="30" vspace="0" align="middle" id="capt" style="cursor:pointer;" onclick="javascript:captch()" /></td>
            <td style="vertical-align:bottom;  height:32px" align="left"  width="150"  >&nbsp;</td>
            <td style="vertical-align:top; height:32px"  width="150"   >&nbsp;</td>
          </tr>
 <tr><td colspan="6" >
          <input type="text" name="captxt" id="captxt" /> 
  

        </td></tr>
        
             <tr>
             <td  width="150"  >&nbsp;</td>
              <td colspan="4" width="50%" align="center">
             
             <input type="button" value="odeslat"    style="width:100px; margin-right:10px" onclick="kontrola()"    name="submit" id="submit" />  	<!--parent.$.fn.colorbox.close();-->
           
            <input type="reset" value="storno"   style="width:100px; margin-left:10px; " /> 
               </td>
                <td  width="150" style="text-align:right"  ><input type="button" value="zavřít"    style="width:100px;" onclick="parent.$.fn.colorbox.close();"    name="zavrit" id="zavrit" /> </td>
             </tr>  
        </table> 
</form>


</td>
</tr>
</table>


</body>
</html>
