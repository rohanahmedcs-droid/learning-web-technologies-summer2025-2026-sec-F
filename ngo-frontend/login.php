<?php
session_start();

$users = [
  [
    "email" => "donor@test.com",
    "password" => "12345678",
    "role" => "donor",
    "name" => "Demo Donor"
  ],
  [
    "email" => "ngo@test.com",
    "password" => "12345678",
    "role" => "ngo",
    "name" => "Demo NGO"
  ],
];

function find_user(array $users, string $email): ?array {
  foreach ($users as $u) {
    if (strtolower($u["email"]) === strtolower($email)) return $u;
  }
  return null;
}

if (isset($_SESSION["user"])) {
  $role = $_SESSION["user"]["role"] ?? "donor";
  header("Location: " . ($role === "ngo" ? "ngo.html" : "donor.html"));
  exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST["email"] ?? "");
  $password = $_POST["password"] ?? "";

  if ($email === "" || $password === "") {
    $error = "Email and password are required.";
  } else {
    $user = find_user($users, $email);

    if (!$user || $user["password"] !== $password) {
      $error = "Email or password is incorrect.";
    } else {
      
      $_SESSION["user"] = [
        "email" => $user["email"],
        "role"  => $user["role"],
        "name"  => $user["name"],
      ];

      header("Location: " . ($user["role"] === "ngo" ? "ngo.html" : "donor.html"));
      exit;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Believe - Login</title>
  <link rel="stylesheet" href="style.css"/>
  <style>
    .auth-wrap { max-width:420px; margin:28px auto; padding:18px; background:#fff; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.06); }
    .auth-wrap input { width:100%; padding:10px; margin-bottom:10px; border-radius:6px; border:1px solid #ccc; }
    .auth-wrap label { display:block; margin-bottom:6px; }
    .auth-actions { display:flex; gap:8px; align-items:center; }
    .error { background:#ffe8e8; border:1px solid #ffb5b5; padding:10px; border-radius:6px; margin-bottom:12px; color:#7a0000; }
    .hint { margin-top:12px; color:#666; font-size:14px; }
  </style>
</head>
<body>
  <header class="top-bar"><h1 class="brand">Believe</h1></header>

  <main>
    <section class="auth-wrap">
      <h2>Login</h2>

      <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>

      <form method="POST" action="login.php">
        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <div class="auth-actions">
          <button class="btn" type="submit">Login</button>
          <a class="btn" style="background:#eee;color:#222;text-decoration:none;" href="index.html">Home</a>
        </div>
      </form>

      <div class="hint">
        Test users:<br>
        donor@test.com / 12345678<br>
        ngo@test.com / 12345678
      </div>
    </section>
  </main>
</body>
</html>
