var $TestLog;
var TestMdp;
$("#login").keyup(function() {

    var login = $("#login").val();

    if (/^[a-zA-Z- ]{2,20}$/.test(login))
    {
         $TestLog = 1;
    }
    else
    {
        $TestLog = 2 ;
    }
});

$("#mdp").keyup(function() {

    var mdp = $("#mdp").val();

    if (/^[a-zA-Z-é]{3,20}$/.test(mdp))
    {
        $("#mdp").css('background',' #5eff6c');
    }
    else
    {
           $("#mdp").css('background',' #c65151');
    }
});


$("#email").keyup(function() {

    var email = $("#email").val();

    if (/^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(email)) 
    {
        $("#email").css('background',' #5eff6c');
    }
    else
    {
        $("#email").css('background',' #c65151');
    }
});

$("#pseudo").keyup(function() {
    var pseudo = $("#pseudo").val();

    if (/^[a-zA-Z0-9._-]{4,12}$/.test(pseudo))
    {
        $("#pseudo").css('background',' #5eff6c');
    }
    else
    {
        $("#pseudo").css('background','#c65151'); 
    }
});

$("#passe").keyup(function() {
    var passe = $("#passe").val();


    if (/^[a-zA-Z0-9._-]{4,12}$/.test(passe))
    {
        $("#passe").css('background',' #5eff6c');
    }
    else
    {
        $("#passe").css('background','#c65151'); 
    }
});

$("#passe2").keyup(function() {

    var passe2 = $("#passe2").val();
    var passe = $("#passe").val();

    if (passe == passe2)
    {
        $("#passe2").css('background',' #5eff6c');
    }
    else
    {
        $("#passe2").css('background','#c65151');  
    }
});


var element = document.getElementById('BtnConnexion');

            element.addEventListener('click', function() {
                      var pseudo = $("#pseudo").val();
                      var passe2 = $("#passe2").val();
                      var passe = $("#passe").val();
                      var prenom = $("#prenom").val();
                      var nom = $("#nom").val();
                      var email = $("#email").val();
                      var idavatar = $("#idavatar").val();
                      var date = $("#date").val();
                      


               if(pseudo=="" || prenom=="" || passe=="" || passe2=="" || nom=="" || email=="" || date=="" )
               {
                        if(pseudo=="")
                        {
                            alert("Vous n'avez pas remplit le champ pseudo");
                        }
                        if(prenom=="")
                        {
                            alert("Vous n'avez pas remplit le champ prenom");
                        }
                        if(passe=="")
                        {
                            alert("Vous n'avez pas remplit le champ mot de passe ");
                        }
                        if(passe2=="")
                        {
                            alert("Vous n'avez pas remplit le champ verification du mot de passe ");
                        }
                         if(nom=="")
                        {
                            alert("Vous n'avez pas remplit le champ nom");
                        }
                         if(email=="")
                        {
                            alert("Vous n'avez pas remplit le champ email");
                        }
                         if(date=="")
                        {
                            alert("Vous n'avez pas remplit le champ date");
                        }
                }
               else 
                     {
                                $("#valider").click();
                      }

            });


