<script>
    "using strict"
        
    let liste = document.querySelectorAll("#liste > li");
    let recherche = document.getElementById("recherche");
    let send = document.getElementById("recherche_exe");

    console.log(liste);

    for(let fleur = 0; fleur < liste.length; fleur ++)
    {
        liste[fleur].addEventListener("click", hidden_noHidden);
    }
    send.addEventListener("click", recherchePage);
</script>