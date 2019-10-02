<?php
$dia=$_POST["DIA"];
$mes=$_POST["MES"];
$year=$_POST["YEAR"];
echo "La fecha ingresada es: ";
echo"<br>";
echo $dia."/".$mes."/".$year;
echo"<br>";
echo"<br>";
if(($dia>=21 && $mes==3) || ($dia<=20 && $mes==4))
{echo "SU SIGNO ES ARIES";
}
if(($dia>=21 && $mes==4) || ($dia<=20 && $mes==5))
{echo "SU SIGNO ES TAURO";
}
if(($dia>=21 && $mes==5) || ($dia<=21 && $mes==6))
{echo "SU SIGNO ES GEMINIS";
}
if(($dia>=21 && $mes==6) || ($dia<=20 && $mes==7))
{echo "SU SIGNO ES CANCER";
}
if(($dia>=21 && $mes==7) || ($dia<=21 && $mes==8))
{echo "SU SIGNO ES LEO";
}
if(($dia>=22 && $mes==8) || ($DIA<=22 && $mes==9))
{echo "SU SIGNO ES VIRGO";
}
if(($dia>=23 && $mes==9) || ($DIA<=22 && $mes==10))
{echo "SU SIGNO ES LIBRA";
}
if(($dia>=23 && $mes==10) || ($dia<=22 && $mes==11))
{echo "SU SIGNO ES ESCORPIO";
}
if(($dia>=23 && $mes==11) || ($dia<=20 && $mes==12))
{echo "SU SIGNO ES SAGITARIO";
}
if(($dia>=21 && $mes==12) || ($dia<=19 && $mes==1))
{echo "SU SIGNO ES CAPRICORNIO";
}
if(($dia>=20 && $mes==1) || ($dia<=18 && $mes==2))
{echo "SU SIGNO ES ACUARIO";
}
if(($dia>=19 && $mes==2) || ($dia<=20 && $mes==3))
{echo "SU SIGNO ES PISCIS";
}
?>