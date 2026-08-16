<?php
$team_members = [
    ["name" => "Jude Bernardo", "img" => "Jude.jpg", "quote" => '"I see myself. I see myself. I see myself in the mirror."', "info" => "Role: Clutch Player <br> Specialty: Web Architecture & Systems Design"],
    ["name" => "Wish Zaragoza", "img" => "Wish.jpg", "quote" => '"PATAWADDDDDD!!!!"', "info" => "Role: Protagonist <br> Specialty: Interface Layouts & Prototyping"],
    ["name" => "Renier Camaso", "img" => "Renier.jpg", "quote" => '"MAY KALIWA BA SA KANAN?!! MAY KALIWA BA SA ROIGHTTT?!!"', "info" => "Role: Sidekick <br> Specialty: Responsive CSS & Styling"],
    ["name" => "Renz Regidor", "img" => "Renz.jpg", "quote" => '"HMMMMM DEPENDE KUNG 3 YAN"', "info" => "Role: NPC <br> Specialty: Database Management & PHP"],
    ["name" => "Erick John Nofuente", "img" => "Erick.jpg", "quote" => '"MAIIPIT KA NGANIIIIII!"', "info" => "Role: Mysterious Character <br> Specialty: Code Optimization & Debugging"],
    ["name" => "Christian Andrei Ortinez", "img" => "Christian Andrei Ortinez.jpg", "quote" => '"Turning ambition into achievement."', "info" => "Role: Final Boss <br> Specialty: Requirements & Tech Documentation"],
    ["name" => "Dianne Claire Redulosa", "img" => "Dianne.jpg", "quote" => '"Tamad na Artist"', "info" => "Role: Living Legend <br> Specialty: Digital Illustration & Visual Assets"]
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Meet The Team - Group 4</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    
    body {
      background: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4)), url('schoolbg.jpg') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
    }

    .page-logo { position: fixed; top: 25px; width: 150px; height: 150px; object-fit: contain; z-index: 100; }
    .logo-left { left: 25px; }
    .logo-right { right: 25px; }

    .container { width: 100%; max-width: 1250px; text-align: center; display: flex; flex-direction: column; align-items: center; }
    
    .title-card {
      background: #ffffff;
      border: 2px solid #002b66;
      border-radius: 12px;
      padding: 20px 40px;
      margin-bottom: 25px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    h1 { color: #002b66; font-size: 2.8rem; font-weight: 800; }
    h2 { color: #d97706; font-size: 1.5rem; font-weight: 700; margin-top: 5px; }

    .team-box {
      border: 3px solid #000000;
      border-radius: 16px;
      padding: 30px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      background: rgba(255, 255, 255, 0.2);
      width: 100%;
    }

    .card {
      background: #ffffff;
      border: 2px solid #002b66;
      border-radius: 12px;
      width: 210px;
      min-height: 380px;
      padding: 20px 15px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .card-img { width: 140px; height: 140px; object-fit: cover; object-position: top; border-radius: 8px; margin-bottom: 12px; }
    .card h3 { color: #002b66; font-size: 1.1rem; margin-bottom: 8px; }
    .quote { color: #555; font-size: 0.85rem; line-height: 1.3; flex: 1; display: flex; align-items: center; }

    .toggle-btn {
      background: #002b66; color: #ffffff; border: none; width: 32px; height: 32px;
      border-radius: 50%; cursor: pointer; margin-top: auto; transition: 0.3s;
    }
    .toggle-btn:hover { background: #d97706; }
    .toggle-btn.active span { display: inline-block; transform: rotate(180deg); }

    .extra-info { max-height: 0; overflow: hidden; transition: 0.3s ease; width: 100%; }
    .extra-info.open { max-height: 150px; padding-top: 12px; border-top: 1px dashed #cbd5e1; margin-top: 10px; }
    .extra-info p { color: #002b66; font-size: 0.8rem; font-weight: 600; line-height: 1.4; }
  </style>
</head>
<body>

  <img src="Pamantasan_ng_Lungsod_ng_Muntinlupa_logo.png" alt="PLMun Logo" class="page-logo logo-left">
  <img src="CITC_Logo.png" alt="CITCS Logo" class="page-logo logo-right">

  <div class="container">
    <div class="title-card">
      <h1>MEET THE TEAM</h1>
      <h2>GROUP 4</h2>
    </div>

    <div class="team-box">
  <?php for ($i = 0; $i < count($team_members); $i++): ?>
    <div class="card">
      <img src="<?= $team_members[$i]['img'] ?>" alt="<?= $team_members[$i]['name'] ?>" class="card-img">
      <h3><?= $team_members[$i]['name'] ?></h3>
      <p class="quote"><?= $team_members[$i]['quote'] ?></p>

      <button class="toggle-btn" onclick="toggleDetails(this)"><span>▲</span></button>

      <div class="extra-info">
        <p><?= $team_members[$i]['info'] ?></p>
      </div>
    </div>
  <?php endfor; ?>
    </div>
    </div>

  <script>
    function toggleDetails(btn) {
      btn.classList.toggle('active');
      btn.nextElementSibling.classList.toggle('open');
    }
  </script>

</body>
</html>
