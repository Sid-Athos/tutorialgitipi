<!DOCTYPE HTML>

<html>
<head>

    <meta charset="utf-8">
    <style>
        body {
            font-weight: 500;
            font-family: 'Raleway', sans-serif;
            background-color: #CCCCB2;
            text-align:center;
        }
    </style>
</head>
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        h = checkTime(h);
        m = checkTime(m);
        document.getElementById('txt').innerHTML =
            h + ":" + m;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) { i = "0" + i };
        return i;
    }
    function helloWorldIPI(item)
    {
        // this line shows some text
        item.textContent = (item.textContent === ""? "Hello World!":"");
    }

    function sortTable(table)
    {
        let sid = false;
        if(sid)
        {
            console.log("blablabla");
        }
        for(let i = 0; i < table.childNodes.length;i++)
        {
            if(table.childNodes[i].textContent.includes("oui"))
            {
                table.childNodes[i].style.display = "";
            } 
            else 
            {
                table.childNodes[i].style.display = "none";
            }
        }
    }
</script>

<body onload="startTime();" style="background-color:#ffff">

    <div onclick="helloWorldIPÏ(this);" style="min-height:45px">
    </div>
    <div id="txt">
    </div>
    <input type="checkbox" name="check" value="box" onchange="alert('You have been hacked');">CLICK HERE FOR FREE MONEY!
    <div>
        Salut les IPI. Comment ça va ? On va s'amuser avec le git stash
    </div>
</body>
</html>
