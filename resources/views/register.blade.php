<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Sanber Book</title>
    </head>
    <body>
        <form action="/welcome">
            <div>
                <h1>Buat Account Baru</h1>
                <h2>Sign Up Form</h2>
                <label>
                    First Name:
                    <input type="text" name="fname"/>
                </label><br/><br/>
                <label>
                    Last Name:
                    <input type="text" name="lname"/>
                </label><br/><br/>
                <label>
                    Gender:<br/>
                    <input type="checkbox" name="cek" value="man" />Man<br/>
                    <input type="checkbox" name="cek"value="woman" />Woman<br/>
                    <input type="checkbox" name="cek"value="other" />Other<br/><br/>
                </label>
                <label>
                Nationalitiy:
                    <select id="wn">
                        <option value="indo">Indonesia</option>
                        <option value="nonindo">Luar Negeri</option>
                    </select>
                </label><br/>
                <label>
                    <br/>Language Spoken:<br/>
                    <input type="radio" value="indo" />Bahasa Indonesia<br/>
                    <input type="radio" value="engs" />English<br/>
                    <input type="radio" value="arab" />Arabic<br/>
                    <input type="radio" value="japan" />Japanese<br/><br/>
                </label>
                <input type="submit" value="Sign Up" />
            </div>
        </form>
    </body>
</html>
