<script>
    "using strict"
        
    let liste = document.querySelectorAll("#liste > li");
    console.log(liste);

    for(let fleur = 0; fleur < liste.length; fleur ++)
    {
        liste[fleur].addEventListener("click", hidden_noHidden);
    }
</script>