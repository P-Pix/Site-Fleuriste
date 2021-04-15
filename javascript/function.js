"using strict"

function hidden_noHidden(event)
{
    let li = event['target'];
    let ul = li.children[0];
    if(ul.style.display == "block")
    {
        ul.style.display = "none"
    }
    else
    {
        ul.style.display = "block";
    }
}

function recherchePage(event)
{
    event.preventDefault();
    let minuscule = recherche.value.toLowerCase();
    let spliter = minuscule.split(" ");
    let stock = "";
    for(let x = 0; x < spliter.length; x ++)
    {
        stock = stock + "[" + spliter[x] + "]";
    }
    let valder = stock.length - 2;
    console.log(stock.substr(1, valder));
    console.log(stock);
    console.log(spliter);
}