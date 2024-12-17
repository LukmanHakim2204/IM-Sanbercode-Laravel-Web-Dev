<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Sign Up</title>
</head>

<body>
    <header>
        <h1>Buat Account Baru</h1>
    </header>
    <main>
        <h2>Sign Up Form</h2>
        <form action="{{ route('welcome') }}" method="POST">
            @csrf
            <label>First name :</label> <br />
            <input type="text" id="first_name" name="first_name" required /> <br />
            <br />
            <label>Last name:</label>: <br />
            <input type="text" id="last_name" name="last_name" required /> <br />
            <br />
            <label>Gender:</label><br />
            <input type="radio" name="gender" value="Male" />Male <br />
            <input type="radio" name="gender" value="Female" />Female <br />
            <input type="radio" name="gender" value="Other" />Other <br />
            <br />
            <label> Nationality :</label> <br />
            <select name="nationality">
                <option value="Indonesia">Indonesia</option>
                <option value="Singapore">Singapore</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Jepang">Jepang</option>
            </select>
            <br />
            <br />
            <label> Language Spoken</label> <br />
            <input type="checkbox" name="language" value="Bahasa Indonesia" />
            Bahasa Indonesia
            <br />
            <input type="checkbox" name="language" value="English" /> English <br />
            <input type="checkbox" name="language" value="Other" /> Other <br />
            <br />
            <label> Bio :</label> <br />
            <textarea name="bio" rows="10" cols="30"></textarea> <br /><br />
            <input type="submit" value="Sign Up" />
        </form>
    </main>
</body>

</html>
