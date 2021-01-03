
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Formulaire HTML5</title>
    <style>
  
	
      body {
    background-image: url(background.png);
    font-family: cursive;
    font-weight: 300;
    font-size: 20px;
}
 
        :invalid { 
          background-color: #eae4e45e;
          border-color: #e88;
          -webkit-box-shadow: 0 0 5px rgba(255, 0, 0, .8);
          -moz-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
          -o-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
          -ms-box-shadow: 0 0 5px rbba(255, 0, 0, .8);
              box-shadow: 0 0 5px hsl(0deg 1% 41%);


        }
		 
		 input.k-field-error {
    border-color: #C00;
    background-color: transparent;
    color: #000;
}
  
 
        :required {
          border-color: #88a;
          -webkit-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
          -moz-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
          -o-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
          -ms-box-shadow: 0 0 5px rgba(0, 0, 255, .5);
          box-shadow: 0 0 5px rgba(0, 0, 255, .5);
        }
 
        form {
    width: 300px;
    margin: 22px auto;
    padding-right: 76px;
    padding-left: 76px;
    padding-top: 30px;
    padding-bottom: 30px;
}
     input {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    border: 1px solid #ccc;
    font-size: 18px;
    widh: 50px;
    padding-top: 11px;
    margin-bottom: 16px;
    margin-top: 11px;
}
       .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
 
      
    </style>
</head>

     <form action="ajoutcommande.php" method="POST"> 
      <div><label>Ville:</label></div>
      <div><input type="text" id="ville" name="ville" placeholder="Ariana" required> <span id='ville'></span><br></div>
	     <span id='missville'></span><br>
		 
		 
	   <div><label>Rue:</label></div>
      <div><input type="text" id="rue" name="rue" placeholder="Rue Ibn mandhour.." required></div>
        <span id='missrue'></span><br>
		
     <div> <label>Adresse e-mail :</label></div>
     <div> <input type="email" id="email_addr" name="email_addr" required></div>
            <span id='missadr'></span><br>
			
     <div><label>Confirmez l'adresse e-mail :</label></div>
     <div><input type="email" id="email_addr_repeat" name="email_addr_repeat" required 
       oninput="check(this)"></div>
	   <span id='missadrr'></span><br>
 
 
      <div>  <label>Télèphone</label>
      <input type="number" id="tel" name="tel" placeholder="98 888 888" required></div>
	  <span id='misstel'></span><br>
	  
	<div> Choisir methode de payement
	<img src="assets/images/cart.png" align="center"><div>
	
 
 
<div> <label for="e-d17">E-D17</label> <input type="radio" id="e-d17" name="choix" value="E-D17" onclick="afficher('visible');" checked="checked" </div>
  
<div><label for="livraison">à la livraison</label><input type="radio" id="livraison" name="choix" value="livraison" onclick="afficher('hidden');" ></div>
<div><label for="Carte bancaire">Carte bancaire</label><input type="radio" id="cb" name="choix" value="Carte bancaire" onclick="afficher('visible');" checked="checked"></div>
    
  <div id="champ"  
   <li>
        <label for=numero_de_carte>NÂ° de carte</label>
        <input id=numero_de_carte name=numero_de_carte type=number >
		<span id='missnc'></span><br>
      </li>
      <li>
        <label for=securite>Code sécurité</label>
        <input id=securite name=securite type=number >
		<span id='misssec'></span><br>
      </li>
      <li>
        <label for=nom_porteur>Nom du porteur</label>
        <input id=nom_porteur name=nom_porteur type=text placeholder="Même nom que sur la carte" >
		<span id='missporteur'></span><br>
      </li>
    </div>  
  
    
      
 
      <input type="submit" value="envoyer" value='Valider' id='bouton_envoi' 
       <div class="alert success">
  
	  
    </form>
 
    <script>
    function check(input) {
      if (input.value != document.getElementById('email_addr').value) {
        input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
      } else {
        // le champ est valide : on réinitialise le message d'erreur
        input.setCustomValidity('');
      }
    }
	

function afficher(etat)
{   
    document.getElementById("champ").style.visibility=etat;   
}
var close = document.getElementsByClassName("closebtn");
var i;

  var formValid = document.getElementById('bouton_envoi');
            var ville = document.getElementById('ville');	
            var missville = document.getElementById('missville');
			
            var rue = document.getElementById('rue');
			var missrue = document.getElementById('missrue');
			
			var adr = document.getElementById('email_addr');
			var missadr = document.getElementById('missadr');
			
			var adrre= document.getElementById('email_addr_repeat');
			var missadrr= document.getElementById('missadrr');

			var tel= document.getElementById('tel');
			var misstel= document.getElementById('misstel');

            var numcarte= document.getElementById('numero_de_carte');
			 var missnc= document.getElementById('missnc');
			 
		    var securite= document.getElementById('securite');
		    var misssec= document.getElementById('misssec');
			
		    var porteur= document.getElementById('nom_porteur');
			var missporteur= document.getElementById('missporteur');
			
            var villevalid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
			var ruevalid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;
			var telvalid = /^[0-9]{8}?$/;
      
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (ville.validity.valueMissing){
                    event.preventDefault();
                    missville.textContent = 'Ville manquant';
                   missville.style.color = 'red';
                //Si le format de données est incorrect
                }else if (villevalid.test(ville.value) == false){
                    event.preventDefault();
                    missville.textContent = 'Format incorrect';
                  missville.style.color = 'orange';
			}
				                if (rue.validity.valueMissing){
                    event.preventDefault();
                    missrue.textContent = 'Rue manquant';
                   missrue.style.color = 'red';
                //Si le format de données est incorrect
                }else if (ruevalid.test(rue.value) == false){
                    event.preventDefault();
                    missrue.textContent = 'Format incorrect';
                   missrue.style.color = 'orange';
				   
				   } 
 

                    if (adr.validity.valueMissing){
                    event.preventDefault();
                    missadr.textContent = 'Adresse manquant';
                   missadr.style.color = 'red';
                //Si le format de données est incorrect
                }else if (adr.test(ville.value) == false){
                    event.preventDefault();
                    missadr.textContent = 'Format incorrect';
                   missadr.style.color = 'orange';
				}
				
				  if (adrre.validity.valueMissing){
                    event.preventDefault();
                    missadrr.textContent = 'Adresse manquant';
                   missadrr.style.color = 'red';
                //Si le format de données est incorrect
                }else if (missadrr.test(ville.value) == false){
                    event.preventDefault();
                    misstel.textContent = 'Format incorrect';
                   misstel.style.color = 'orange';
			}
			  if (tel.validity.valueMissing){
                    event.preventDefault();
                    misstel.textContent = 'Numero Tel manquant';
                   misstel.style.color = 'red';
                //Si le format de données est incorrect
                }else if (telvalid.test(tel.value) == false){
                    event.preventDefault();
                    misstel.textContent = 'Format incorrect';
                   misstel.style.color = 'orange';
			}
			if (missadrr.test(ville.value) == false){
                    event.preventDefault();
                    missnc.textContent = 'Format incorrect';
                   missnc.style.color = 'orange';
			}
				 if (missadrr.test(ville.value) == false){
                    event.preventDefault();
                    misssec.textContent = 'Format incorrect';
                   misssec.style.color = 'orange';
			}
			 if (missadrr.test(ville.value) == false){
                    event.preventDefault();
                    missporteur.textContent = 'Format incorrect';
                   missporteur.style.color = 'orange';
			}
	
			}
</script>
</head>
</form>
</html>
