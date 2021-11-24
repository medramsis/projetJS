<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylejs.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
  <script>
var myCookies= [];
    function saveCookies(name)
    { 
        myCookies ["_nom"] =document.getElementById("nom").value;
        myCookies ["_prenom"] =document.getElementById("prenom").value;
        myCookies ["age"]=document.getElementById("age").value;
        myCookies ["_telephone"] = document.getElementById ("tel").value;
        myCookies ["_email"] = document.getElementById ("email").value;
        myCookies ["note"]  ="0" ;
        myCookies ["_note1"]  ="0" ;
        myCookies ["_note2"]  ="0" ;
        myCookies ["_note3"]  ="0" ;
        myCookies ["_note4"]  ="0" ;
        myCookies ["_note5"]  ="0" ;
        myCookies ["_note6"]  ="0" ;
        myCookies["moyenne"]="0";
        document.cookie  =  "" ;
        var  expiresAtt  =  new  Date( Date.now() + 60 * 1000 ).toString();
        var  cookieString  =  "" ;
        for  ( var  key  in  myCookies )
        {
            cookieString  =  key+"="+myCookies[key]+";"+expiresAtt+";" ;
            document.cookie = cookieString ;
        }
    }

 
    function traiterEmail(){
                var mail = document.getElementById("email").value;         
               
             if(mail.indexOf("@") == -1 || mail.length < 6 || mail.indexOf(".")== -1) {
            alert ("Entrez un email valide");
            }else{
                mail.value.trim();
            }}  
    function traiterNumero(){
    var num = document.getElementById("tel").value;
    if(num.length != 10 || isNaN(num) )
        

    {
        alert ("Entrez un numéro valide");
    }
}
    </script>
<body>

        <form action="jsForm2.php"  id="survey-form">
            <div class="form-group">
              <label for="name" id="name-label">Nom</label>
              <input  id="nom" name="nom"  placeholder="saisir votre nom" required>
            </div>

            <div class="form-group">
              <label for="prenom" id="prenom-label">Prenom</label>
              <input  id="prenom" name="prenom" placeholder="saisir votre prénom" required>
            </div>

            <div class="form-group">
              <label for="number" id="number-label">Age <span>(optional)</span></label>
              <input type="number" id="age" name="age" min="18" max="100" placeholder="age">
            </div>

            <div class="form-group">
                <label for="email" id="email-label">email</label>
                <input type="email" id="email" name="email" onblur="traiterEmail()" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="saisir votre email" required>
              </div>

              <div class="form-group">
                <label for="tel" id="tel-label">Téléphone</label>
                <input type="tel" id="tel" name="tel" onblur="traiterNumero()" placeholder="numéro de téléphone" required>
              </div>





              <div class="form-group">
                <button type="submit" class="btn btn-outline-warning" onclick="saveCookies()" > Submit </button>
              </div>

  
            </form>


</body>


</html>
