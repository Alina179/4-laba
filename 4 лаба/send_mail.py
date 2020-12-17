import cgi

form = cgi.FieldStorage()
gender = form.getfirst("gender", "не задано")
name = form.getfirst("name", "не задано")
email = form.getfirst("email", "не задано")
subject = form.getfirst("subject", "не задано")
message = form.getfirst("message", "не задано")

print("Content-type: text/html\n")
print("""<!DOCTYPE HTML>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Обработка данных форм</title>
        </head>
        <body>""")

f = open('{name}_{subject}_{email}.txt', 'w')
f.write(gender + '\n')
f.write(name + '\n')
f.write(email + '\n')
f.write(subject + '\n')
f.write(message + '\n')
f.close()

print("<h1>Обработка данных форм!</h1>")
print("<p>gender: {}</p>".format(gender))
print("<p>name: {}</p>".format(name))

print("""</body>
        </html>""")
