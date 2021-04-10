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