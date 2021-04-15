<script>
    "using strict"
        
    let liste = document.querySelectorAll("#liste > li");
    let recherche = document.getElementById("recherche");
    let send = document.getElementById("recherche_exe");
    let panier = <?php echo $_SESSION['panier']?>;
    let achat = document.getElementById("achat");
    
    console.log(liste);
    
    for(let fleur = 0; fleur < liste.length; fleur ++)
    {
        liste[fleur].addEventListener("click", hidden_noHidden);
    }
    achat.addEventListener("click", acheter);
    send.addEventListener("click", recherchePage);
</script>