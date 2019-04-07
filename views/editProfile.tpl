<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/editProfile.css">
    <link rel="stylesheet" type="text/css" href="css/editProfile.css">

</head>
<body>
    <header id="header1">
            <a href="dashboard.php"><img src="images/cookbook_logo_white.png" alt="cookBook logo image" class="logo"></a>
            <div class="userset">
                <a href='profile.php?username={$username}'>
                {if !empty ($userimg)}
                <img src="userimg/{$userimg}">
                {else}
                <img src="images/user1.jpg">
                {/if}
                </a>
                <a href='profile.php?username={$username}'>
                <p class="imekorisnika">{$usernameLog}</p>
                </a>
                <a href="logout.php"><input type="submit" name="logout" value="logout"></a>
            </div>
    </header>
    <main>
    <div id="editProfileDiv">
        <form action="editProfile.php" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: flex-start;">
            <input type="text" name="firstName" value="{$firstName}" placeholder="Ime">
            <input type="text" name="lastName" value="{$lastName}" placeholder="Prezime">
            <input type="text" name="username" value="{$username}" placeholder="Username">
            <input type="email" name="email" value="{$email}" placeholder="Email">
            <input type="file" name="file" id="userimg" value="dodaj sliku">
            <!--<input type="text" name="residence" value="{$residence}" placeholder="Mesto prebivalista">
            <input type="text" name="birthday" value="{$birthday}" placeholder="Datum rodjenja">-->
            <input type="submit" name="save"  value="Sačuvaj izmene">
        </form>
    </div>
    </main>
</body>
</html>