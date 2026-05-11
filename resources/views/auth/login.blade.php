<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: linear-gradient(135deg, #000000, #1a0000);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* card */
.login-box {
    background: #0f0f0f;
    padding: 40px;
    width: 350px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(255, 69, 0, 0.3);
    border: 1px solid rgba(255, 69, 0, 0.4);
}

/* title */
.login-box h2 {
    text-align: center;
    color: #ff3b3b;
    margin-bottom: 25px;
}

/* inputs */
.login-box input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 8px;
    background: #1a1a1a;
    color: white;
    outline: none;
    border: 1px solid #333;
}

.login-box input:focus {
    border: 1px solid #ff4500;
    box-shadow: 0 0 8px #ff4500;
}

/* button */
.login-box button {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(90deg, #ff0000, #ff4500);
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.login-box button:hover {
    background: linear-gradient(90deg, #ff4500, #ff0000);
    transform: scale(1.03);
}

/* link */
.login-box a {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #ff4500;
    text-decoration: none;
}

.login-box a:hover {
    color: #ff0000;
}
</style>

</head>
<body>

<div class="login-box">

    <h2>LOGIN</h2>

    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Login</button>
    </form>

  

</div>

</body>
</html>