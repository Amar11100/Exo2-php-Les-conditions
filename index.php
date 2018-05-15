<body>
  <?php
$age = 18;
if ($age >= 18)
{echo "Vous êtes majeur";}
else
{echo "Vous êtes mineur";}
  ?>
<hr>
  <?php
  $age = 30;
  $genre = "homme";
  $age = 17;
  $genre = "femme";
  if($age >= 18 && $genre == "homme";)
  {echo "Vous êtes un homme majeur";}
  else ($age < 18 && $genre == "homme";)
  {echo "Vous es un homme mineur";}
  if ($age < 18 && $genre == "femme";)
  {echo "Vous êtes une femme mineur";}
  else ($age >= 18 && $genre == "femme";)
  {echo "Vous êtes une femme majeur";}
  ?>
  <hr>
  <?php
    $maVariable="Homme";
    $maVariable = "Femme";
    if($maVariable="Homme";)
    {echo "C'est un développeur !!!";}
    else ($maVariable = "Femme";)
    {echo "C'est une développeuse !!!";}
  ?>

</body>
</html>
