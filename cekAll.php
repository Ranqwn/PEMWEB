<!DOCTYPE html>
<?php
mysql_connect("localhost","root",""); 
mysql_select_db("data1"); 

$query = mysql_query("SELECT id_prov,prov from prov"); 
?>

<html>
<head>
<script> 
var drz, kata, x; 
function cekid(){ 
    kata = document.getElementById("User").value; 
    if(kata.length>2){ 
        document.getElementById("teks").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekid.php"; 
        url=url+"?q="+kata; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus(); 
         } 
} 

function cekemail(){ 
    email = document.getElementById("Email").value; 
    if(email.length>2){ 
        document.getElementById("teks2").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekemail.php"; 
        url=url+"?w="+email; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged2; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus2(); 
         } 
} 

function cekumur(){ 
    umur = document.getElementById("Umur").value; 
    if(umur.length>0){ 
        document.getElementById("teks3").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekumur.php"; 
        url=url+"?r="+umur; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged3; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus3(); 
         } 
} 

function cek_kec(){ 
    kec = document.getElementById("prov").value; 
    if(kec.length>0){ 
        document.getElementById("teks4").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cek_kab.php"; 
        url=url+"?s="+kec; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged4; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus4(); 
         } 
} 



function buatajax(){ 
    if (window.XMLHttpRequest){ 
        return new XMLHttpRequest(); 
    } 
    if (window.ActiveXObject){ 
        return new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    return null; 
} 
 

function stateChanged(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks").innerHTML = data; 
    } 
} 

function stateChanged2(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks2").innerHTML = data; 
    } 
} 

function stateChanged3(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks3").innerHTML = data; 
    } 
} 

function stateChanged4(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks4").innerHTML = data; 
    } 
} 
function fokus(){ 
    document.getElementById("User").focus(); 
} 

function fokus2(){ 
    document.getElementById("Email").focus(); 
}

function fokus3(){ 
    document.getElementById("Umur").focus(); 
}  


function fokus4(){ 
    document.getElementById("prov").focus(); 
}  

</script> 
</head>
<body>
<form> 
User ID : <input type=text name=User id=User onblur=cekid()> 
<span id=teks style="color:red;font-size:8pt"></span> <br> 
Email : <input type=text name=Email id=Email onblur=cekemail() >
<span id=teks2 style="color:red;font-size:8pt"></span> <br> 
Umur : <input type=text name=Umur id=Umur onblur=cekumur() >
<span id=teks3 style="color:red;font-size:8pt"></span> <br> 
Provinsi :
<?php 
    if(mysql_num_rows($query)>0){
    echo "<select name='prov' id='prov' onchange=cek_kec()>";
    echo "<option value='0'>Pilih<br>";
    while($row=mysql_fetch_array($query))
    {
        echo "<option value='$row[0]'>$row[1]<br>";
    }
    echo "</select>";
    }
?>
<span id=teks4 style="color:red;font-size:8pt"></span> <br> 
</form> 
</body>
</html>