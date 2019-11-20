import mysql.connector
con = mysql.connector.connect(user='root', password=None,host='127.0.0.1',database='smt')
with open("yaitron_par.tsv","r",encoding="utf-8-sig") as f:
 data=[[j.strip().replace("'",'').replace('\','') for j in i.split('\t')] for i in f.readlines()]
print(data[0])
cursor = con.cursor()
for i in data:
 add_db = "insert into words(ws,lang_ws,meaning,lang_m) values('"+str(i[0])+"','en','"+str(i[1])+"','th');"
 try:
  cursor.execute(add_db)
 except:
  print(add_db)
con.commit()
