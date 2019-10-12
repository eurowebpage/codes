<!-- ****************************************** HEAD  ************ -->
<script> // Bouton print div
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
// Fin Boutton</script>
<!-- ****************************************** fin HEAD  ************ -->

<!-- ***************** BODY  ************ -->

 <div id="sectionAimprimer">
 
 <!-- VOTRE DIV CODE -->
 
 </div>
 
 <button class="btn-primary" onClick="imprimer('sectionAimprimer')">Imprimer</button>
 
