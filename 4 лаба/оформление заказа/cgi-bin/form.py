#!/usr/bin/env python3
import cgi

form = cgi.FieldStorage()
text2 = form.getfirst("ФИО", "не задано")
text2 = form.getfirst("Электронная почта", "не задано")
text3 = form.getfirst("Адрес", "не задано")
text4 = form.getfirst("Город", "не задано")
text5 = form.getfirst("Почтовый индекс", "не задано")

print("Content-type: text/html\n")
print("""<!DOCTYPE HTML>
        <html>
        <head>
            <meta charset="cp1251">
            <title>Заказ оформлен</title>
        </head>
        <body>""")

print("<h1>Заказ оформлен!</h1>")

print("<p>ФИО: {}</p>".format(text2))
print("<p>Электронная почта: {}</p>".format(text2))
print("<p>Адрес: {}</p>".format(text3))
print("<p>Город: {}</p>".format(text4))
print("<p>Почтовый индекс: {}</p>".format(text5))

print("""</body>
        </html>""")
